<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/stripe_pay/templates/stripe-payment.html.twig */
class __TwigTemplate_618b4599cee58c6842e03cbd7631ae1a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "<div class=\"stripe-payment-wrapper\">
\t";
        // line 23
        $context["price_format"] = twig_get_attribute($this->env, $this->source, ($context["stripe_payment_data"] ?? null), "price_format", [], "any", false, false, true, 23);
        // line 24
        echo "\t";
        if ((($context["price_format"] ?? null) == "format1")) {
            // line 25
            echo "\t<div class=\"stipe-price-wrapper\">
\t\t<span class=\"stripe-price-label\">Price:</span>
\t\t<span class=\"stripe-currency-sign\">";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["stripe_payment_data"] ?? null), "currency_sign", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "</span>
\t\t<span class=\"stripe-price\">";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["stripe_payment_data"] ?? null), "price", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "</span>
\t\t<span class=\"stripe-currency-code\">";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["stripe_payment_data"] ?? null), "currency_code", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "</span>
\t</div>
\t";
        } elseif ((        // line 31
($context["price_format"] ?? null) == "format2")) {
            // line 32
            echo "\t<div class=\"stipe-price-wrapper\">
\t\t<span class=\"stripe-price-label\">Price</span>
\t\t<span class=\"stripe-currency-sign\">";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["stripe_payment_data"] ?? null), "currency_sign", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "</span>
\t\t<span class=\"stripe-price\">";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["stripe_payment_data"] ?? null), "price", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "</span>
\t\t<span class=\"stripe-currency-code\">";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["stripe_payment_data"] ?? null), "currency_code", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "</span>
\t</div>
\t";
        } elseif ((        // line 38
($context["price_format"] ?? null) == "format3")) {
            // line 39
            echo "\t<div class=\"stipe-price-wrapper\">
\t\t<span class=\"stripe-price-label\">Price:</span>
\t\t<span class=\"stripe-currency-sign\">";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["stripe_payment_data"] ?? null), "currency_sign", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "</span>
\t\t<span class=\"stripe-price\">";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["stripe_payment_data"] ?? null), "price", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "</span>
\t</div>
\t";
        } elseif ((        // line 44
($context["price_format"] ?? null) == "format4")) {
            // line 45
            echo "\t<div class=\"stipe-price-wrapper\">
\t\t<span class=\"stripe-price-label\">Price:</span>
\t\t<span class=\"stripe-currency-code\">";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["stripe_payment_data"] ?? null), "currency_code", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            echo "</span>
\t\t<span class=\"stripe-currency-sign\">";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["stripe_payment_data"] ?? null), "currency_sign", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "</span>
\t\t<span class=\"stripe-price\">";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["stripe_payment_data"] ?? null), "price", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "</span>
\t</div>
\t";
        } elseif ((        // line 51
($context["price_format"] ?? null) == "format5")) {
            // line 52
            echo "\t<div class=\"stipe-price-wrapper\">
\t\t<span class=\"stripe-currency-sign\">";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["stripe_payment_data"] ?? null), "currency_sign", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "</span>
\t\t<span class=\"stripe-price\">";
            // line 54
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["stripe_payment_data"] ?? null), "price", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            echo "</span>
\t\t<span class=\"stripe-currency-code\">";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["stripe_payment_data"] ?? null), "currency_code", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "</span>
\t</div>
\t";
        } elseif ((        // line 57
($context["price_format"] ?? null) == "format6")) {
            // line 58
            echo "\t<div class=\"stipe-price-wrapper\">
\t\t<span class=\"stripe-currency-sign\">";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["stripe_payment_data"] ?? null), "currency_sign", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            echo "</span>
\t\t<span class=\"stripe-price\">";
            // line 60
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["stripe_payment_data"] ?? null), "price", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "</span>
\t</div>
\t";
        } elseif ((        // line 62
($context["price_format"] ?? null) == "format7")) {
            // line 63
            echo "\t<div class=\"stipe-price-wrapper\">
\t\t<span class=\"stripe-currency-code\">";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["stripe_payment_data"] ?? null), "currency_code", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "</span>
\t\t<span class=\"stripe-price\">";
            // line 65
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["stripe_payment_data"] ?? null), "price", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            echo "</span>
\t</div>
\t";
        } elseif ((        // line 67
($context["price_format"] ?? null) == "format8")) {
            // line 68
            echo "\t<div class=\"stipe-price-wrapper\">
\t\t<span class=\"stripe-currency-sign\">";
            // line 69
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["stripe_payment_data"] ?? null), "currency_sign", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
            echo " </span>
\t\t<span class=\"stripe-price\">";
            // line 70
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["stripe_payment_data"] ?? null), "price", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
            echo "</span>
\t</div>
\t";
        } elseif ((        // line 72
($context["price_format"] ?? null) == "format9")) {
            // line 73
            echo "\t<div class=\"stipe-price-wrapper\">
\t\t<span class=\"stripe-currency-sign\">";
            // line 74
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["stripe_payment_data"] ?? null), "currency_sign", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
            echo ". </span>
\t\t<span class=\"stripe-price\">";
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["stripe_payment_data"] ?? null), "price", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "</span>
\t</div>
\t";
        } else {
            // line 78
            echo "\t";
        }
        // line 79
        echo "\t<div class=\"stripe-pay-wrap\">
\t\t";
        // line 80
        if (twig_get_attribute($this->env, $this->source, ($context["stripe_payment_data"] ?? null), "show_quantity", [], "any", false, false, true, 80)) {
            // line 81
            echo "\t\t<div class=\"stripe-payment-quantity\">
\t\t\t<input class=\"quantity\" type=\"number\" name=\"quantity\" value=\"1\" min=\"1\">
\t\t</div>
\t\t";
        }
        // line 85
        echo "\t\t<button class=\"button button--primary stripe-button payButton\" data-amount='1234' data-title='";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["stripe_payment_data"] ?? null), "title", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
        echo "' data-url='";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["stripe_payment_data"] ?? null), "current_url", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
        echo "' data-id='";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["stripe_payment_data"] ?? null), "nid", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
        echo "'>
\t\t\t<span class=\"buttonText\">";
        // line 86
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["stripe_payment_data"] ?? null), "button_text", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
        echo "</span>
\t\t</button>
\t\t<div class=\"paymentResponse\" class=\"hidden\"></div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/contrib/stripe_pay/templates/stripe-payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 86,  206 => 85,  200 => 81,  198 => 80,  195 => 79,  192 => 78,  186 => 75,  182 => 74,  179 => 73,  177 => 72,  172 => 70,  168 => 69,  165 => 68,  163 => 67,  158 => 65,  154 => 64,  151 => 63,  149 => 62,  144 => 60,  140 => 59,  137 => 58,  135 => 57,  130 => 55,  126 => 54,  122 => 53,  119 => 52,  117 => 51,  112 => 49,  108 => 48,  104 => 47,  100 => 45,  98 => 44,  93 => 42,  89 => 41,  85 => 39,  83 => 38,  78 => 36,  74 => 35,  70 => 34,  66 => 32,  64 => 31,  59 => 29,  55 => 28,  51 => 27,  47 => 25,  44 => 24,  42 => 23,  39 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 *
 * Default template for stripe payment field.
 *
 * Available variables:
 * - stripe_payment_data: Array of related details.
 *   use {{ stripe_payment_data.price_format }} for price_format
 *   use {{ stripe_payment_data.currency_sign }} for currency_sign
 *   use {{ stripe_payment_data.price }} for price
 *   use {{ stripe_payment_data.currency_code }} for currency_code
 *   use {{ stripe_payment_data.show_quantity }} for show_quantity to show quantity field
 *   use {{ stripe_payment_data.title }} for entity title
 *   use {{ stripe_payment_data.nid }} for entity entity id
 *   use {{ stripe_payment_data.button_text }} for button_text
 *   use {{ stripe_payment_data.current_url }} for current_url
 *
 * @ingroup themeable
 */
 #}
<div class=\"stripe-payment-wrapper\">
\t{% set price_format = stripe_payment_data.price_format %}
\t{% if price_format == 'format1' %}
\t<div class=\"stipe-price-wrapper\">
\t\t<span class=\"stripe-price-label\">Price:</span>
\t\t<span class=\"stripe-currency-sign\">{{ stripe_payment_data.currency_sign }}</span>
\t\t<span class=\"stripe-price\">{{ stripe_payment_data.price }}</span>
\t\t<span class=\"stripe-currency-code\">{{ stripe_payment_data.currency_code }}</span>
\t</div>
\t{% elseif price_format == 'format2' %}
\t<div class=\"stipe-price-wrapper\">
\t\t<span class=\"stripe-price-label\">Price</span>
\t\t<span class=\"stripe-currency-sign\">{{ stripe_payment_data.currency_sign }}</span>
\t\t<span class=\"stripe-price\">{{ stripe_payment_data.price }}</span>
\t\t<span class=\"stripe-currency-code\">{{ stripe_payment_data.currency_code }}</span>
\t</div>
\t{% elseif price_format == 'format3' %}
\t<div class=\"stipe-price-wrapper\">
\t\t<span class=\"stripe-price-label\">Price:</span>
\t\t<span class=\"stripe-currency-sign\">{{ stripe_payment_data.currency_sign }}</span>
\t\t<span class=\"stripe-price\">{{ stripe_payment_data.price }}</span>
\t</div>
\t{% elseif price_format == 'format4' %}
\t<div class=\"stipe-price-wrapper\">
\t\t<span class=\"stripe-price-label\">Price:</span>
\t\t<span class=\"stripe-currency-code\">{{ stripe_payment_data.currency_code }}</span>
\t\t<span class=\"stripe-currency-sign\">{{ stripe_payment_data.currency_sign }}</span>
\t\t<span class=\"stripe-price\">{{ stripe_payment_data.price }}</span>
\t</div>
\t{% elseif price_format == 'format5' %}
\t<div class=\"stipe-price-wrapper\">
\t\t<span class=\"stripe-currency-sign\">{{ stripe_payment_data.currency_sign }}</span>
\t\t<span class=\"stripe-price\">{{ stripe_payment_data.price }}</span>
\t\t<span class=\"stripe-currency-code\">{{ stripe_payment_data.currency_code }}</span>
\t</div>
\t{% elseif price_format == 'format6' %}
\t<div class=\"stipe-price-wrapper\">
\t\t<span class=\"stripe-currency-sign\">{{ stripe_payment_data.currency_sign }}</span>
\t\t<span class=\"stripe-price\">{{ stripe_payment_data.price }}</span>
\t</div>
\t{% elseif price_format == 'format7' %}
\t<div class=\"stipe-price-wrapper\">
\t\t<span class=\"stripe-currency-code\">{{ stripe_payment_data.currency_code }}</span>
\t\t<span class=\"stripe-price\">{{ stripe_payment_data.price }}</span>
\t</div>
\t{% elseif price_format == 'format8' %}
\t<div class=\"stipe-price-wrapper\">
\t\t<span class=\"stripe-currency-sign\">{{ stripe_payment_data.currency_sign }} </span>
\t\t<span class=\"stripe-price\">{{ stripe_payment_data.price }}</span>
\t</div>
\t{% elseif price_format == 'format9' %}
\t<div class=\"stipe-price-wrapper\">
\t\t<span class=\"stripe-currency-sign\">{{ stripe_payment_data.currency_sign }}. </span>
\t\t<span class=\"stripe-price\">{{ stripe_payment_data.price }}</span>
\t</div>
\t{% else %}
\t{% endif %}
\t<div class=\"stripe-pay-wrap\">
\t\t{% if stripe_payment_data.show_quantity %}
\t\t<div class=\"stripe-payment-quantity\">
\t\t\t<input class=\"quantity\" type=\"number\" name=\"quantity\" value=\"1\" min=\"1\">
\t\t</div>
\t\t{% endif %}
\t\t<button class=\"button button--primary stripe-button payButton\" data-amount='1234' data-title='{{ stripe_payment_data.title }}' data-url='{{ stripe_payment_data.current_url }}' data-id='{{ stripe_payment_data.nid }}'>
\t\t\t<span class=\"buttonText\">{{ stripe_payment_data.button_text }}</span>
\t\t</button>
\t\t<div class=\"paymentResponse\" class=\"hidden\"></div>
\t</div>
</div>", "modules/contrib/stripe_pay/templates/stripe-payment.html.twig", "/app/web/modules/contrib/stripe_pay/templates/stripe-payment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 23, "if" => 24);
        static $filters = array("escape" => 27);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
