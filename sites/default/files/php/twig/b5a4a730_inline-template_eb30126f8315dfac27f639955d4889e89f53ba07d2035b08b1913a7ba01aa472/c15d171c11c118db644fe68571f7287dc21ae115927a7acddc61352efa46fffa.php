<?php

/* {# inline_template_start #}<h2>{{ title }} </h2>
{{ field_description }} */
class __TwigTemplate_e4501ec419dcccbe5db9fda236beb0ca2b0359148ec58b5a423c656c70dc17fc extends Twig_Template
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
        $__internal_bd4fa40ccdd7c18a50e688c6d40783c013774790ae71ad8060451c238fc28686 = $this->env->getExtension("native_profiler");
        $__internal_bd4fa40ccdd7c18a50e688c6d40783c013774790ae71ad8060451c238fc28686->enter($__internal_bd4fa40ccdd7c18a50e688c6d40783c013774790ae71ad8060451c238fc28686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<h2>{{ title }} </h2>
{{ field_description }}"));

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

        // line 1
        echo "<h2>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo " </h2>
";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_description"]) ? $context["field_description"] : null), "html", null, true));
        
        $__internal_bd4fa40ccdd7c18a50e688c6d40783c013774790ae71ad8060451c238fc28686->leave($__internal_bd4fa40ccdd7c18a50e688c6d40783c013774790ae71ad8060451c238fc28686_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<h2>{{ title }} </h2>
{{ field_description }}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 2,  48 => 1,);
    }
}
/* {# inline_template_start #}<h2>{{ title }} </h2>*/
/* {{ field_description }}*/
