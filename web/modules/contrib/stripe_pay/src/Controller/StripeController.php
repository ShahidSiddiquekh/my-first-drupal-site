<?php

namespace Drupal\stripe_pay\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Url;
use Drupal\Core\Routing\TrustedRedirectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Defines StripeController class.
 */
class StripeController extends ControllerBase
{
    /**
     * Callback URL handling for Sendinblue API API.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *   Request.
     *
     * @return array
     *   Return markup for the page.
     */
    public function payment_init(Request $request)
    {

        $payload = json_decode($request->getContent(), true);
        $productPrice = $payload['amount']??'1';
        $productName = $payload['title']??'Product without name';
        $url = $payload['url']??'';
        $productID = $payload['id']??'0';
        $quantity = $payload['quantity']??'1';

        if($productPrice < 1) {
            $productPrice = 1;
        }

        // Invoke the custom hook for success redirect.
        \Drupal::moduleHandler()->invokeAll('stripe_pay_success_redirect', [&$success_redirect_url]);

        if($url == '') {
            $url = Url::fromRoute('<front>', [], ['absolute' => true])->toString();
        }

        $success_redirect_url = Url::fromRoute('stripe_pay.payment_success', [], ['absolute' => true])->toString();
        $cancel_redirect_url = Url::fromRoute('stripe_pay.payment_cancel', [], ['absolute' => true])->toString();


        $stripe_pay_config = \Drupal::config('stripe_pay.settings');

        $currency_code = $stripe_pay_config->get('currency_code');
        $test_mode = $stripe_pay_config->get('test_mode');
        $secret_key = '';
        if($test_mode) {
            $secret_key = $stripe_pay_config->get('secret_key_test');
        } else {
            $secret_key = $stripe_pay_config->get('secret_key_live');
        }

        // Set API key
        $stripe = new \Stripe\StripeClient($secret_key);

        $response_data = array(
            'status' => 0,
            'error' => array(
                'message' => 'Invalid Request!'
            )
        );

        $currency = $stripe_pay_config->get('currency_code')??'USD';

        $stripeAmount = round($productPrice, 2);

        // Create new Checkout Session for the order
        try {
            $checkout_session = $stripe->checkout->sessions->create([
                'line_items' => [[
                    'price_data' => [
                        'product_data' => [
                            'name' => $productName,
                            'metadata' => [
                                'pro_id' => $productID
                            ]
                        ],
                        'unit_amount' => $stripeAmount,
                        'currency' => $currency,
                    ],
                    'quantity' => $quantity
                ]],
                'mode' => 'payment',
                'success_url' => $success_redirect_url.'?redirect='.$url.'&session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => $cancel_redirect_url.'?redirect='.$url
            ]);
        } catch(\Exception $e) {
            $api_error = $e->getMessage();
            log_stripe_pay_messages('warning', $api_error);
        }

        if(empty($api_error) && $checkout_session) {
            $response_data = array(
                'status' => 1,
                'message' => 'Checkout Session created successfully!',
                'sessionId' => $checkout_session->id
            );
        } else {
            $response_data = array(
                'status' => 0,
                'error' => array(
                    'message' => 'Checkout Session creation failed! '.$api_error
                )
            );
        }

        // Create a JSON response
        $response = new JsonResponse($response_data);

        return $response;

    }


    /**
     * Callback URL handling for Sendinblue API API.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *   Request.
     *
     * @return array
     *   Return markup for the page.
     */
    public function payment_success()
    {
        $session_id = \Drupal::request()->query->get('session_id');

        $redirect_url = '';

        // Invoke the custom hook for success redirect.
        \Drupal::moduleHandler()->invokeAll('stripe_pay_success_redirect', [&$redirect_url]);

        $message = '';

        // Invoke the custom hook for cancel message.
        \Drupal::moduleHandler()->invokeAll('stripe_pay_success_message', [&$message]);

        if($message == '') {
            $message =  '<strong>Payment success!</strong> Your transaction has been successed with session_id: '.$session_id.'.';
        }

        \Drupal::messenger()->addMessage($this->t($message));

        if($redirect_url == '') {
            $redirect_url = \Drupal::request()->query->get('redirect');
            if($redirect_url == '') {
                $redirect_url = Url::fromRoute('<front>', [], ['absolute' => true])->toString();
            }
        }

        if($session_id != '') {
            $response = new TrustedRedirectResponse($redirect_url);
            // Redirect to the external URL
            $response->send();
        } else {
            $response = new TrustedRedirectResponse($redirect_url);
            $response->send();
        }
    }

    /**
     * Callback URL handling for Sendinblue API API.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *   Request.
     *
     * @return array
     *   Return markup for the page.
     */
    public function payment_cancel()
    {

        $cancel_redirect_url = '';

        // Invoke the custom hook for cancel redirect.
        \Drupal::moduleHandler()->invokeAll('stripe_pay_cancel_redirect', [&$cancel_redirect_url]);

        if($cancel_redirect_url == '') {
            $cancel_redirect_url = \Drupal::request()->query->get('redirect');
            if($cancel_redirect_url == '') {
                $cancel_redirect_url = Url::fromRoute('<front>', [], ['absolute' => true])->toString();
            }
        }

        $message = '';

        // Invoke the custom hook for cancel message.
        \Drupal::moduleHandler()->invokeAll('stripe_pay_cancel_message', [&$message]);

        if($message == '') {
            $message =  '<strong>Payment Canceled!</strong> Your transaction has been canceled.';
        }

        \Drupal::messenger()->addMessage($this->t($message));

        $response = new TrustedRedirectResponse($cancel_redirect_url);
        $response->send();

    }
}
