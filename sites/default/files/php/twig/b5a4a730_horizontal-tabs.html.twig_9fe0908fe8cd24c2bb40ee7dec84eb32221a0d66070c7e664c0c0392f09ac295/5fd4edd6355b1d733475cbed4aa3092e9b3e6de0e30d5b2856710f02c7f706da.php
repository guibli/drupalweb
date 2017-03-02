<?php

/* modules/contrib/field_group/templates/horizontal-tabs.html.twig */
class __TwigTemplate_c5c1ea5e075262ebe78a14d6c5a7e210ed47861ba50f8a5437bf147e85630d93 extends Twig_Template
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
        $__internal_278b00c3f7258302eafb72784d30dd82bf2fd63f681b4addaf52966a5cd376e4 = $this->env->getExtension("native_profiler");
        $__internal_278b00c3f7258302eafb72784d30dd82bf2fd63f681b4addaf52966a5cd376e4->enter($__internal_278b00c3f7258302eafb72784d30dd82bf2fd63f681b4addaf52966a5cd376e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/field_group/templates/horizontal-tabs.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 15
        echo "<div data-horizontal-tabs-panes";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "</div>
";
        
        $__internal_278b00c3f7258302eafb72784d30dd82bf2fd63f681b4addaf52966a5cd376e4->leave($__internal_278b00c3f7258302eafb72784d30dd82bf2fd63f681b4addaf52966a5cd376e4_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/field_group/templates/horizontal-tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for horizontal tabs.*/
/*  **/
/*  * Available variables*/
/*  * - attributes: A list of HTML attributes for the wrapper element.*/
/*  * - children: The rendered children.*/
/*  **/
/*  * @see template_preprocess_horizontal_tabs()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <div data-horizontal-tabs-panes{{ attributes }}>{{ children }}</div>*/
/* */
