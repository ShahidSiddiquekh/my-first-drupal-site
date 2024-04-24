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

/* modules/contrib/captcha/modules/image_captcha/templates/image-captcha-refresh.html.twig */
class __TwigTemplate_1c13613decdd2d27aafcc1c531077e5f extends Template
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
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("image_captcha/image-captcha-refresh"), "html", null, true);
        echo "
<div class=\"reload-captcha-wrapper\" title=\"";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Generate new CAPTCHA image"));
        echo "\">
    ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["captcha_refresh_link"] ?? null), 18, $this->source), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/captcha/modules/image_captcha/templates/image-captcha-refresh.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 18,  43 => 17,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Custom theme implementation for custom field type defined.
 *
 * Available variables:
 * - uri: An optional URL the image can be linked to.
 * - title: An optional Title value which will be shown as text.
 * - link_value: Value used to open the link in new or same tab.
 *
 * @see template_preprocess_custom_zipang_link_formatter()
 *
 * @ingroup themeable
 */
#}
{{ attach_library('image_captcha/image-captcha-refresh') }}
<div class=\"reload-captcha-wrapper\" title=\"{{ 'Generate new CAPTCHA image'|t }}\">
    {{captcha_refresh_link}}
</div>
", "modules/contrib/captcha/modules/image_captcha/templates/image-captcha-refresh.html.twig", "/app/web/modules/contrib/captcha/modules/image_captcha/templates/image-captcha-refresh.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 16, "t" => 17);
        static $functions = array("attach_library" => 16);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 't'],
                ['attach_library']
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
