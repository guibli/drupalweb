<?php

/* themes/contrib/bootstrap/templates/block/block--system-menu-block--account.html.twig */
class __TwigTemplate_3bc84316bcd8b077e334f4d9dc51dcdf72f6e20f565d82ff6d4498f61c71a412 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_824e62ff6fcdebbcc5eba75f0d99f66454693cbafca434f177d99d7af133ecae = $this->env->getExtension("native_profiler");
        $__internal_824e62ff6fcdebbcc5eba75f0d99f66454693cbafca434f177d99d7af133ecae->enter($__internal_824e62ff6fcdebbcc5eba75f0d99f66454693cbafca434f177d99d7af133ecae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/contrib/bootstrap/templates/block/block--system-menu-block--account.html.twig"));

        $tags = array("set" => 36, "block" => 38);
        $filters = array("clean_id" => 36, "without" => 37);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'block'),
                array('clean_id', 'without'),
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

        // line 36
        $context["heading_id"] = ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array()) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 37
        echo "<nav role=\"navigation\" aria-labelledby=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["heading_id"]) ? $context["heading_id"] : null), "html", null, true));
        echo "\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "removeClass", array(0 => "clearfix"), "method"), "role", "aria-labelledby"), "html", null, true));
        echo ">
  ";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "</nav>
";
        
        $__internal_824e62ff6fcdebbcc5eba75f0d99f66454693cbafca434f177d99d7af133ecae->leave($__internal_824e62ff6fcdebbcc5eba75f0d99f66454693cbafca434f177d99d7af133ecae_prof);

    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        $__internal_705ff9d205ca47813f3ed1487885387cdc7990d2f5c492fee6370321842054c9 = $this->env->getExtension("native_profiler");
        $__internal_705ff9d205ca47813f3ed1487885387cdc7990d2f5c492fee6370321842054c9->enter($__internal_705ff9d205ca47813f3ed1487885387cdc7990d2f5c492fee6370321842054c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 39
        echo "    ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
  ";
        
        $__internal_705ff9d205ca47813f3ed1487885387cdc7990d2f5c492fee6370321842054c9->leave($__internal_705ff9d205ca47813f3ed1487885387cdc7990d2f5c492fee6370321842054c9_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/block/block--system-menu-block--account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 39,  66 => 38,  58 => 41,  56 => 38,  49 => 37,  47 => 36,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a menu block.*/
/*  **/
/*  * Available variables:*/
/*  * - plugin_id: The ID of the block implementation.*/
/*  * - label: The configured label of the block if visible.*/
/*  * - configuration: A list of the block's configuration values.*/
/*  *   - label: The configured label for the block.*/
/*  *   - label_display: The display settings for the label.*/
/*  *   - provider: The module or other provider that provided this block plugin.*/
/*  *   - Block plugin specific settings will also be stored here.*/
/*  * - content: The content of this block.*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  *   - id: A valid HTML ID and guaranteed unique.*/
/*  * - title_attributes: HTML attributes for the title element.*/
/*  * - content_attributes: HTML attributes for the content element.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  **/
/*  * Headings should be used on navigation menus that consistently appear on*/
/*  * multiple pages. When this menu block's label is configured to not be*/
/*  * displayed, it is automatically made invisible using the 'visually-hidden' CSS*/
/*  * class, which still keeps it visible for screen-readers and assistive*/
/*  * technology. Headings allow screen-reader and keyboard only users to navigate*/
/*  * to or skip the links.*/
/*  * See http://juicystudio.com/article/screen-readers-display-none.php and*/
/*  * http://www.w3.org/TR/WCAG-TECHS/H42.html for more information.*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* {% set heading_id = attributes.id ~ '-menu'|clean_id %}*/
/* <nav role="navigation" aria-labelledby="{{ heading_id }}"{{ attributes.removeClass('clearfix')|without('role', 'aria-labelledby') }}>*/
/*   {% block content %}*/
/*     {{ content }}*/
/*   {% endblock %}*/
/* </nav>*/
/* */
