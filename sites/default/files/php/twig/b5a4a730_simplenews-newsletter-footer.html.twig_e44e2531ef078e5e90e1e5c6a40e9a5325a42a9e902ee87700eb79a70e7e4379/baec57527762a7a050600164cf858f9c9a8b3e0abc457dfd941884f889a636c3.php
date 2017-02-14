<?php

/* modules/contrib/simplenews/theme/simplenews-newsletter-footer.html.twig */
class __TwigTemplate_9fdb5be2e0fe77e4c560e452e8f415d943a83611ed4b616b05c64df9c6a48ca4 extends Twig_Template
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
        $__internal_e42e89ba910de02cc0e315f05847c1747365d5f464fcef66c41d3705c3bfb6d9 = $this->env->getExtension("native_profiler");
        $__internal_e42e89ba910de02cc0e315f05847c1747365d5f464fcef66c41d3705c3bfb6d9->enter($__internal_e42e89ba910de02cc0e315f05847c1747365d5f464fcef66c41d3705c3bfb6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/simplenews/theme/simplenews-newsletter-footer.html.twig"));

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

        // line 30
        echo "  ";
        if ( !(isset($context["opt_out_hidden"]) ? $context["opt_out_hidden"] : null)) {
            // line 31
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["format"]) ? $context["format"] : null), "html", null, true));
            echo "
    ";
            // line 32
            if (((isset($context["format"]) ? $context["format"] : null) == "html")) {
                // line 33
                echo "    <p class=\"newsletter-footer\"><a href=\"[simplenews-subscriber:unsubscribe-url]\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["unsubscribe_text"]) ? $context["unsubscribe_text"] : null), "html", null, true));
                echo "</a></p>
    ";
            } else {
                // line 35
                echo "  -- ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["unsubscribe_text"]) ? $context["unsubscribe_text"] : null), "html", null, true));
                echo " : [simplenews-subscriber:unsubscribe-url]
    ";
            }
            // line 37
            echo "  ";
        }
        // line 38
        echo "
";
        // line 39
        if (((isset($context["key"]) ? $context["key"] : null) == "test")) {
            // line 40
            echo "- - - ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["test_message"]) ? $context["test_message"] : null), "html", null, true));
            echo " - - -
";
        }
        
        $__internal_e42e89ba910de02cc0e315f05847c1747365d5f464fcef66c41d3705c3bfb6d9->leave($__internal_e42e89ba910de02cc0e315f05847c1747365d5f464fcef66c41d3705c3bfb6d9_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/simplenews/theme/simplenews-newsletter-footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 40,  74 => 39,  71 => 38,  68 => 37,  62 => 35,  56 => 33,  54 => 32,  49 => 31,  46 => 30,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to format the simplenews newsletter footer.*/
/*  **/
/*  * Copy this file in your theme directory to create a custom themed footer.*/
/*  * Rename it to simplenews-newsletter-footer--[newsletter-id].tpl.php to override it for a*/
/*  * newsletter using the newsletter id.*/
/*  **/
/*  * @todo Update the available variables.*/
/*  * Available variables:*/
/*  * - $build: Array as expected by render()*/
/*  * - $build['#node']: The $node object*/
/*  * - $language: language code*/
/*  * - $key: email key [node|test]*/
/*  * - $format: newsletter format [plain|html]*/
/*  * - $unsubscribe_text: unsubscribe text*/
/*  * - $test_message: test message warning message*/
/*  * - $simplenews_theme: path to the configured simplenews theme*/
/*  **/
/*  * Available tokens:*/
/*  * - [simplenews-subscriber:unsubscribe-url]: unsubscribe url to be used as link*/
/*  **/
/*  * Other available tokens can be found on the node edit form when token.module*/
/*  * is installed.*/
/*  **/
/*  * @see template_preprocess_simplenews_newsletter_footer()*/
/*  *//* */
/* #}*/
/*   {% if not opt_out_hidden %}*/
/*       {{ format }}*/
/*     {% if format == 'html' %}*/
/*     <p class="newsletter-footer"><a href="[simplenews-subscriber:unsubscribe-url]">{{ unsubscribe_text }}</a></p>*/
/*     {% else %}*/
/*   -- {{ unsubscribe_text }} : [simplenews-subscriber:unsubscribe-url]*/
/*     {% endif %}*/
/*   {% endif %}*/
/* */
/* {% if key == 'test' %}*/
/* - - - {{ test_message }} - - -*/
/* {% endif %}*/
/* */
