<?php

/* modules/yoast_seo/templates/overall_score.html.twig */
class __TwigTemplate_f575c1a8574a23d9e7dca8ef2b0e7533b17a3ad566029772194d76de97d22e60 extends Twig_Template
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
        $tags = array("if" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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
        echo "<div ";
        if ((isset($context["overall_score_target_id"]) ? $context["overall_score_target_id"] : null)) {
            echo "id=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["overall_score_target_id"]) ? $context["overall_score_target_id"] : null), "html", null, true));
            echo "\"";
        }
        // line 2
        echo "     class=\"overallScore ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["overall_score"]) ? $context["overall_score"] : null), "html", null, true));
        echo "\">
    <span class=\"score_circle\"></span>
    <span class=\"score_value\">";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["overall_score"]) ? $context["overall_score"] : null), "html", null, true));
        echo "</span>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/yoast_seo/templates/overall_score.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 4,  50 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "<div {% if overall_score_target_id %}id=\"{{ overall_score_target_id }}\"{% endif %}
     class=\"overallScore {{ overall_score }}\">
    <span class=\"score_circle\"></span>
    <span class=\"score_value\">{{ overall_score }}</span>
</div>
";
    }
}
