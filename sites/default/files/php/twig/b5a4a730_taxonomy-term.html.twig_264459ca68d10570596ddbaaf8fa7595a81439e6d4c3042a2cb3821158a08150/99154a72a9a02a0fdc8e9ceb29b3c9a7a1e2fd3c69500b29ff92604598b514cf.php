<?php

/* core/modules/taxonomy/templates/taxonomy-term.html.twig */
class __TwigTemplate_b2a7e8a3ed724cc3d6c3d2c5b24fbbaee114af4ddc454384abef4fc58bd1570d extends Twig_Template
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
        $__internal_e4279cd930c15ff7417d27ceea3eee10f0afe7753ee74301eb4ed0ce46851f88 = $this->env->getExtension("native_profiler");
        $__internal_e4279cd930c15ff7417d27ceea3eee10f0afe7753ee74301eb4ed0ce46851f88->enter($__internal_e4279cd930c15ff7417d27ceea3eee10f0afe7753ee74301eb4ed0ce46851f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/modules/taxonomy/templates/taxonomy-term.html.twig"));

        $tags = array("if" => 30);
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

        // line 28
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  ";
        // line 30
        if ( !(isset($context["page"]) ? $context["page"] : null)) {
            // line 31
            echo "    <h2><a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true));
            echo "</a></h2>
  ";
        }
        // line 33
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
  ";
        // line 34
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
</div>
";
        
        $__internal_e4279cd930c15ff7417d27ceea3eee10f0afe7753ee74301eb4ed0ce46851f88->leave($__internal_e4279cd930c15ff7417d27ceea3eee10f0afe7753ee74301eb4ed0ce46851f88_prof);

    }

    public function getTemplateName()
    {
        return "core/modules/taxonomy/templates/taxonomy-term.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 34,  65 => 33,  57 => 31,  55 => 30,  51 => 29,  46 => 28,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a taxonomy term.*/
/*  **/
/*  * Available variables:*/
/*  * - url: URL of the current term.*/
/*  * - name: Name of the current term.*/
/*  * - content: Items for the content of the term (fields and description).*/
/*  *   Use 'content' to print them all, or print a subset such as*/
/*  *   'content.description'. Use the following code to exclude the*/
/*  *   printing of a given child element:*/
/*  *   @code*/
/*  *   {{ content|without('description') }}*/
/*  *   @endcode*/
/*  * - attributes: HTML attributes for the wrapper.*/
/*  * - page: Flag for the full page state.*/
/*  * - term: The taxonomy term entity, including:*/
/*  *   - id: The ID of the taxonomy term.*/
/*  *   - bundle: Machine name of the current vocabulary.*/
/*  * - view_mode: View mode, e.g. 'full', 'teaser', etc.*/
/*  **/
/*  * @see template_preprocess_taxonomy_term()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <div{{ attributes }}>*/
/*   {{ title_prefix }}*/
/*   {% if not page %}*/
/*     <h2><a href="{{ url }}">{{ name }}</a></h2>*/
/*   {% endif %}*/
/*   {{ title_suffix }}*/
/*   {{ content }}*/
/* </div>*/
/* */
