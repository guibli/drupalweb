<?php

/* modules/contrib/simplenews/theme/simplenews-newsletter-body.html.twig */
class __TwigTemplate_7063339d13f3e20cad487a603c59a9d25c4afb20a42f01f769b33e4fe3221fab extends Twig_Template
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
        $__internal_568c456363147daee9e1f395878c70f145bf4b4c1b74f0791df0e63f475c4620 = $this->env->getExtension("native_profiler");
        $__internal_568c456363147daee9e1f395878c70f145bf4b4c1b74f0791df0e63f475c4620->enter($__internal_568c456363147daee9e1f395878c70f145bf4b4c1b74f0791df0e63f475c4620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/simplenews/theme/simplenews-newsletter-body.html.twig"));

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

        // line 28
        echo "<h2>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</h2>
";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["build"]) ? $context["build"] : null), "html", null, true));
        echo "
";
        
        $__internal_568c456363147daee9e1f395878c70f145bf4b4c1b74f0791df0e63f475c4620->leave($__internal_568c456363147daee9e1f395878c70f145bf4b4c1b74f0791df0e63f475c4620_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/simplenews/theme/simplenews-newsletter-body.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 29,  46 => 28,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to format the simplenews newsletter body.*/
/*  **/
/*  * Copy this file in your theme directory to create a custom themed body.*/
/*  * Rename it to override it. Available templates:*/
/*  *   simplenews-newsletter-body--[newsletter_id].tpl.php*/
/*  *   simplenews-newsletter-body--[view mode].tpl.php*/
/*  *   simplenews-newsletter-body--[newsletter_id]--[view mode].tpl.php*/
/*  * See README.txt for more details.*/
/*  **/
/*  * Available variables:*/
/*  * - $build: Array as expected by render()*/
/*  * - $build['#node']: The $node object*/
/*  * - $title: Node title*/
/*  * - $view_mode: Active view mode*/
/*  * - $simplenews_theme: Contains the path to the configured mail theme.*/
/*  * - $simplenews_subscriber: The subscriber for which the newsletter is built.*/
/*  *   Note that depending on the used caching strategy, the generated body might*/
/*  *   be used for multiple subscribers. If you created personalized newsletters*/
/*  *   and can't use tokens for that, make sure to disable caching or write a*/
/*  *   custom caching strategy implemention.*/
/*  **/
/*  * @see template_preprocess_simplenews_newsletter_body()*/
/*  *//* */
/* #}*/
/* <h2>{{ title }}</h2>*/
/* {{ build }}*/
/* */
