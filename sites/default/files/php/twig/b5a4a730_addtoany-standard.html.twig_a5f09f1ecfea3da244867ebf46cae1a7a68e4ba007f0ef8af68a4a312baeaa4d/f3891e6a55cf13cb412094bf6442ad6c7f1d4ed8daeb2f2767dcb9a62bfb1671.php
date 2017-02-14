<?php

/* modules/contrib/addtoany/templates/addtoany-standard.html.twig */
class __TwigTemplate_aa25e177438443cf622c6334f3c59249753225ecf98670ba2946e37ab3d02047 extends Twig_Template
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
        $__internal_db8be471cbbae66d065e31549397818b0a9b018b2fc6bb27d800329d7b8aadc1 = $this->env->getExtension("native_profiler");
        $__internal_db8be471cbbae66d065e31549397818b0a9b018b2fc6bb27d800329d7b8aadc1->enter($__internal_db8be471cbbae66d065e31549397818b0a9b018b2fc6bb27d800329d7b8aadc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/addtoany/templates/addtoany-standard.html.twig"));

        $tags = array();
        $filters = array("raw" => 12);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('raw'),
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

        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["addtoany_html"]) ? $context["addtoany_html"] : null)));
        echo "
";
        
        $__internal_db8be471cbbae66d065e31549397818b0a9b018b2fc6bb27d800329d7b8aadc1->leave($__internal_db8be471cbbae66d065e31549397818b0a9b018b2fc6bb27d800329d7b8aadc1_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/addtoany/templates/addtoany-standard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 12,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to standard AddToAny buttons.*/
/*  **/
/*  * Available variables:*/
/*  * - addtoany_html: HTML for AddToAny buttons.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {{ addtoany_html|raw }}*/
/* */
