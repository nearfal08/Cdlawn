<?php

/* modules/webform/templates/webform-element-help.html.twig */
class __TwigTemplate_007eefe441f00fae60ce4d4fe30dec9d3a36841a3760a7b94d35aa03ea37da2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("spaceless" => 16);
        $filters = array();
        $functions = array("attach_library" => 17);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('spaceless'),
                array(),
                array('attach_library')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 16
        ob_start();
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("webform/webform.element.help"), "html", null, true));
        echo "
";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["help_icon"]) ? $context["help_icon"] : null), "html", null, true));
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 20
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/webform/templates/webform-element-help.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 20,  49 => 18,  45 => 17,  43 => 16,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme implementation for webform element help
 *
 * Available variables
 * - element: form element
 * - help: Help content.
 * - help_icon: Help icon.
 *
 * @see template_preprocess_webform_element_help()
 *
 * @ingroup themeable
 */
#}
{% spaceless %}
{{ attach_library('webform/webform.element.help') }}
{{ help_icon }}
{% endspaceless %}

";
    }
}
