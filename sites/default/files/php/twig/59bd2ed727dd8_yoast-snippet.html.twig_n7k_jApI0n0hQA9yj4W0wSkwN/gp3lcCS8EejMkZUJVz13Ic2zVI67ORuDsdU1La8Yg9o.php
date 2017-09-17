<?php

/* modules/yoast_seo/templates/yoast-snippet.html.twig */
class __TwigTemplate_8267042ef6a23878a13f5cf435f45da1893d5b955dbcbcb0d85fbc761c90ef0c extends Twig_Template
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
        $tags = array("trans" => 3);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('trans'),
                array(),
                array()
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

        // line 1
        echo "<div id=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["wrapper_target_id"]) ? $context["wrapper_target_id"] : null), "html", null, true));
        echo "\">
    <div id=\"wpseo_meta\"></div>
    <div class=\"label\">";
        // line 3
        echo t("Snippet editor", array());
        echo "</div>
    <div id=\"";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["snippet_target_id"]) ? $context["snippet_target_id"] : null), "html", null, true));
        echo "\"></div>
    <div class=\"label\">";
        // line 5
        echo t("Content analysis", array());
        echo "</div>
    <div id=\"";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["output_target_id"]) ? $context["output_target_id"] : null), "html", null, true));
        echo "\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/yoast_seo/templates/yoast-snippet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 6,  57 => 5,  53 => 4,  49 => 3,  43 => 1,);
    }

    public function getSource()
    {
        return "<div id=\"{{ wrapper_target_id }}\">
    <div id=\"wpseo_meta\"></div>
    <div class=\"label\">{% trans %}Snippet editor{% endtrans %}</div>
    <div id=\"{{ snippet_target_id }}\"></div>
    <div class=\"label\">{% trans %}Content analysis{% endtrans %}</div>
    <div id=\"{{ output_target_id }}\"></div>
</div>
";
    }
}
