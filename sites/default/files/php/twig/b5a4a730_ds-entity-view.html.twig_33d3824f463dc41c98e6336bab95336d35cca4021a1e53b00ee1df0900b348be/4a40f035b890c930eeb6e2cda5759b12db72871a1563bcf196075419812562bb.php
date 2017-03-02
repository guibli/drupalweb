<?php

/* modules/contrib/ds/templates/ds-entity-view.html.twig */
class __TwigTemplate_71db20325cafe590165e92567b759543984689c76894b5a4fb762fd2dd696a5c extends Twig_Template
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
        $__internal_7df6ce5c8c5a37e28d4bcb596c7b6186279250b8d28a511d6d28e09c9d0c3fd7 = $this->env->getExtension("native_profiler");
        $__internal_7df6ce5c8c5a37e28d4bcb596c7b6186279250b8d28a511d6d28e09c9d0c3fd7->enter($__internal_7df6ce5c8c5a37e28d4bcb596c7b6186279250b8d28a511d6d28e09c9d0c3fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/ds/templates/ds-entity-view.html.twig"));

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

        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
";
        
        $__internal_7df6ce5c8c5a37e28d4bcb596c7b6186279250b8d28a511d6d28e09c9d0c3fd7->leave($__internal_7df6ce5c8c5a37e28d4bcb596c7b6186279250b8d28a511d6d28e09c9d0c3fd7_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/ds/templates/ds-entity-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Display Entity View*/
/*  **/
/*  * Available variables:*/
/*  * - content: The render array which contains the layout*/
/*  *//* */
/* #}*/
/* {{ content }}*/
/* */
