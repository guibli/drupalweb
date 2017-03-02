<?php

/* modules/contrib/bootstrap_layouts/templates/3.0.0/bs-1col-stacked.html.twig */
class __TwigTemplate_28879bfd5f4545c108e606d2cecdd84799171936d367283c782f5f8b073bb229 extends Twig_Template
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
        $__internal_2ab6777dcf59d8935b03c3dfec59dd9295b28bbd9e4237ff073bc343f498b75f = $this->env->getExtension("native_profiler");
        $__internal_2ab6777dcf59d8935b03c3dfec59dd9295b28bbd9e4237ff073bc343f498b75f->enter($__internal_2ab6777dcf59d8935b03c3dfec59dd9295b28bbd9e4237ff073bc343f498b75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/bootstrap_layouts/templates/3.0.0/bs-1col-stacked.html.twig"));

        $tags = array("if" => 24);
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

        // line 21
        echo "<";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["wrapper"]) ? $context["wrapper"] : null), "html", null, true));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_suffix"]) ? $context["title_suffix"] : null), "contextual_links", array()), "html", null, true));
        echo "

  ";
        // line 24
        if ($this->getAttribute((isset($context["top"]) ? $context["top"] : null), "content", array())) {
            // line 25
            echo "  <";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["top"]) ? $context["top"] : null), "wrapper", array()), "html", null, true));
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["top"]) ? $context["top"] : null), "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 26
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["top"]) ? $context["top"] : null), "content", array()), "html", null, true));
            echo "
  </";
            // line 27
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["top"]) ? $context["top"] : null), "wrapper", array()), "html", null, true));
            echo ">
  ";
        }
        // line 29
        echo "
  ";
        // line 30
        if ($this->getAttribute((isset($context["main"]) ? $context["main"] : null), "content", array())) {
            // line 31
            echo "  <";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["main"]) ? $context["main"] : null), "wrapper", array()), "html", null, true));
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["main"]) ? $context["main"] : null), "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 32
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["main"]) ? $context["main"] : null), "content", array()), "html", null, true));
            echo "
  </";
            // line 33
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["main"]) ? $context["main"] : null), "wrapper", array()), "html", null, true));
            echo ">
  ";
        }
        // line 35
        echo "
  ";
        // line 36
        if ($this->getAttribute((isset($context["bottom"]) ? $context["bottom"] : null), "content", array())) {
            // line 37
            echo "  <";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["bottom"]) ? $context["bottom"] : null), "wrapper", array()), "html", null, true));
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["bottom"]) ? $context["bottom"] : null), "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 38
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["bottom"]) ? $context["bottom"] : null), "content", array()), "html", null, true));
            echo "
  </";
            // line 39
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["bottom"]) ? $context["bottom"] : null), "wrapper", array()), "html", null, true));
            echo ">
  ";
        }
        // line 41
        echo "
</";
        // line 42
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["wrapper"]) ? $context["wrapper"] : null), "html", null, true));
        echo ">
";
        
        $__internal_2ab6777dcf59d8935b03c3dfec59dd9295b28bbd9e4237ff073bc343f498b75f->leave($__internal_2ab6777dcf59d8935b03c3dfec59dd9295b28bbd9e4237ff073bc343f498b75f_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/bootstrap_layouts/templates/3.0.0/bs-1col-stacked.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 42,  114 => 41,  109 => 39,  105 => 38,  99 => 37,  97 => 36,  94 => 35,  89 => 33,  85 => 32,  79 => 31,  77 => 30,  74 => 29,  69 => 27,  65 => 26,  59 => 25,  57 => 24,  52 => 22,  46 => 21,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Bootstrap Layouts: "1 Column (stacked)" template.*/
/*  **/
/*  * Available layout variables:*/
/*  * - wrapper: Wrapper element for the layout container.*/
/*  * - attributes: Wrapper attributes for the layout container.*/
/*  **/
/*  * Available region variables:*/
/*  * - top*/
/*  * - main*/
/*  * - bottom*/
/*  **/
/*  * Each region variable contains the following properties:*/
/*  * - wrapper: The HTML element to use to wrap this region.*/
/*  * - attributes: The HTML attributes to use on the wrapper for this region.*/
/*  * - content: The content to go inside the wrapper for this region.*/
/*  *//* */
/* #}*/
/* <{{ wrapper }}{{ attributes }}>*/
/*   {{ title_suffix.contextual_links }}*/
/* */
/*   {% if top.content %}*/
/*   <{{ top.wrapper }}{{ top.attributes }}>*/
/*     {{ top.content }}*/
/*   </{{ top.wrapper }}>*/
/*   {% endif %}*/
/* */
/*   {% if main.content %}*/
/*   <{{ main.wrapper }}{{ main.attributes }}>*/
/*     {{ main.content }}*/
/*   </{{ main.wrapper }}>*/
/*   {% endif %}*/
/* */
/*   {% if bottom.content %}*/
/*   <{{ bottom.wrapper }}{{ bottom.attributes }}>*/
/*     {{ bottom.content }}*/
/*   </{{ bottom.wrapper }}>*/
/*   {% endif %}*/
/* */
/* </{{ wrapper }}>*/
/* */
