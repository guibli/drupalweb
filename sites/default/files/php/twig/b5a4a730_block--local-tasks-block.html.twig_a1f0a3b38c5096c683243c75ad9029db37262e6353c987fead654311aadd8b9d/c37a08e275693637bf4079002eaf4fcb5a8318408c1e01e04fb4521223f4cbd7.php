<?php

/* themes/contrib/bootstrap/templates/block/block--local-tasks-block.html.twig */
class __TwigTemplate_4ec646ea5d4183135d4370b871ccc999b7b19c01664cd32fe48473b092a8bb9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block--bare.html.twig", "themes/contrib/bootstrap/templates/block/block--local-tasks-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block--bare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39c9c3ecbb626cebad1bb58896e32f6f917442d4c0da60f5fa3e95e0c4d984f7 = $this->env->getExtension("native_profiler");
        $__internal_39c9c3ecbb626cebad1bb58896e32f6f917442d4c0da60f5fa3e95e0c4d984f7->enter($__internal_39c9c3ecbb626cebad1bb58896e32f6f917442d4c0da60f5fa3e95e0c4d984f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/contrib/bootstrap/templates/block/block--local-tasks-block.html.twig"));

        $tags = array("if" => 11);
        $filters = array("t" => 12);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39c9c3ecbb626cebad1bb58896e32f6f917442d4c0da60f5fa3e95e0c4d984f7->leave($__internal_39c9c3ecbb626cebad1bb58896e32f6f917442d4c0da60f5fa3e95e0c4d984f7_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_c99aa1f062f0fc1551dc5f5fe764a3ea9a4b0a0d8a0cd570a38e5195a0a9f9bf = $this->env->getExtension("native_profiler");
        $__internal_c99aa1f062f0fc1551dc5f5fe764a3ea9a4b0a0d8a0cd570a38e5195a0a9f9bf->enter($__internal_c99aa1f062f0fc1551dc5f5fe764a3ea9a4b0a0d8a0cd570a38e5195a0a9f9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "  ";
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 12
            echo "    <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Tabs")));
            echo "\">
      ";
            // line 13
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
    </nav>
  ";
        }
        
        $__internal_c99aa1f062f0fc1551dc5f5fe764a3ea9a4b0a0d8a0cd570a38e5195a0a9f9bf->leave($__internal_c99aa1f062f0fc1551dc5f5fe764a3ea9a4b0a0d8a0cd570a38e5195a0a9f9bf_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/block/block--local-tasks-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 13,  67 => 12,  64 => 11,  58 => 10,  11 => 1,);
    }
}
/* {% extends "block--bare.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for tabs.*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* {% block content %}*/
/*   {% if content %}*/
/*     <nav class="tabs" role="navigation" aria-label="{{ 'Tabs'|t }}">*/
/*       {{ content }}*/
/*     </nav>*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */
