<?php

/* core/modules/node/templates/field--node--created.html.twig */
class __TwigTemplate_487ba720234f5fdae950761c30bf36593e0ebe23c3586766472af669aed4b123 extends Twig_Template
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
        $__internal_1f10203b9e97da10cd97fb3523bfe20ff91c6a5ebb4e4e413d693d2ae4ee6107 = $this->env->getExtension("native_profiler");
        $__internal_1f10203b9e97da10cd97fb3523bfe20ff91c6a5ebb4e4e413d693d2ae4ee6107->enter($__internal_1f10203b9e97da10cd97fb3523bfe20ff91c6a5ebb4e4e413d693d2ae4ee6107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/modules/node/templates/field--node--created.html.twig"));

        $tags = array("for" => 25);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for'),
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

        // line 24
        echo "<span";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 26
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</span>
";
        
        $__internal_1f10203b9e97da10cd97fb3523bfe20ff91c6a5ebb4e4e413d693d2ae4ee6107->leave($__internal_1f10203b9e97da10cd97fb3523bfe20ff91c6a5ebb4e4e413d693d2ae4ee6107_prof);

    }

    public function getTemplateName()
    {
        return "core/modules/node/templates/field--node--created.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 28,  54 => 26,  50 => 25,  46 => 24,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for the node created field.*/
/*  **/
/*  * This is an override of field.html.twig for the node created field. See that*/
/*  * template for documentation about its details and overrides.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the containing span element.*/
/*  * - items: List of all the field items. Each item contains:*/
/*  *   - attributes: List of HTML attributes for each item.*/
/*  *   - content: The field item content.*/
/*  * - entity_type: The entity type to which the field belongs.*/
/*  * - field_name: The name of the field.*/
/*  * - field_type: The type of the field.*/
/*  * - label_display: The display settings for the label.*/
/*  **/
/*  * @see field.html.twig*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <span{{ attributes }}>*/
/*   {%- for item in items -%}*/
/*     {{ item.content }}*/
/*   {%- endfor -%}*/
/* </span>*/
/* */
