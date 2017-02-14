<?php

/* themes/custom/mybootstrap/templates/page.html.twig */
class __TwigTemplate_039ea1ec948d520525eea2d4c375c941f1f476c54701a2cd48384f34e62ee1a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'highlighted' => array($this, 'block_highlighted'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd1276b6518b0175c2a7e93a7b7a69b3e2b598d7bc84f6444a2a77997fa8830f = $this->env->getExtension("native_profiler");
        $__internal_dd1276b6518b0175c2a7e93a7b7a69b3e2b598d7bc84f6444a2a77997fa8830f->enter($__internal_dd1276b6518b0175c2a7e93a7b7a69b3e2b598d7bc84f6444a2a77997fa8830f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/custom/mybootstrap/templates/page.html.twig"));

        $tags = array("set" => 59, "if" => 61, "block" => 62);
        $filters = array("clean_class" => 67, "t" => 79);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
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

        // line 59
        $context["container"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 61
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()))) {
            // line 62
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 99
        echo "
";
        // line 101
        $this->displayBlock('main', $context, $blocks);
        // line 180
        echo "
";
        // line 181
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 182
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
        
        $__internal_dd1276b6518b0175c2a7e93a7b7a69b3e2b598d7bc84f6444a2a77997fa8830f->leave($__internal_dd1276b6518b0175c2a7e93a7b7a69b3e2b598d7bc84f6444a2a77997fa8830f_prof);

    }

    // line 62
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_75bfcbdd04efbb1401a5a6e05badacf2693699e8c7ce3ff0d67afd68e83e68aa = $this->env->getExtension("native_profiler");
        $__internal_75bfcbdd04efbb1401a5a6e05badacf2693699e8c7ce3ff0d67afd68e83e68aa->enter($__internal_75bfcbdd04efbb1401a5a6e05badacf2693699e8c7ce3ff0d67afd68e83e68aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 63
        echo "    ";
        // line 64
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 66
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 67
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())))) : ((isset($context["container"]) ? $context["container"] : null))));
        // line 70
        echo "    <header";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "addClass", array(0 => (isset($context["navbar_classes"]) ? $context["navbar_classes"] : null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 71
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => "container"), "method")) {
            // line 72
            echo "        <div class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
            echo "\">
      ";
        }
        // line 74
        echo "      <div class=\"navbar-header\">
        ";
        // line 75
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 77
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 78
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 79
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 85
        echo "      </div>

      ";
        // line 88
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 89
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 90
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 93
        echo "      ";
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => "container"), "method")) {
            // line 94
            echo "        </div>
      ";
        }
        // line 96
        echo "    </header>
  ";
        
        $__internal_75bfcbdd04efbb1401a5a6e05badacf2693699e8c7ce3ff0d67afd68e83e68aa->leave($__internal_75bfcbdd04efbb1401a5a6e05badacf2693699e8c7ce3ff0d67afd68e83e68aa_prof);

    }

    // line 101
    public function block_main($context, array $blocks = array())
    {
        $__internal_5395df70b571a47d81d770a0b48e880feb8d46f417935540b5e75fe061bea9f3 = $this->env->getExtension("native_profiler");
        $__internal_5395df70b571a47d81d770a0b48e880feb8d46f417935540b5e75fe061bea9f3->enter($__internal_5395df70b571a47d81d770a0b48e880feb8d46f417935540b5e75fe061bea9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 102
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 106
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 107
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 112
            echo "      ";
        }
        // line 113
        echo "
      ";
        // line 115
        echo "      ";
        // line 116
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 117
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-push-3 col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 118
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 119
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 120
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 123
        echo "      <section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">

        ";
        // line 126
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 127
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 130
            echo "        ";
        }
        // line 131
        echo "
        ";
        // line 133
        echo "        ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 134
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 137
            echo "        ";
        }
        // line 138
        echo "
        ";
        // line 140
        echo "        ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 141
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 144
            echo "        ";
        }
        // line 145
        echo "
        ";
        // line 147
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 148
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 151
            echo "        ";
        }
        // line 152
        echo "
        ";
        // line 154
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 158
        echo "      </section>

      ";
        // line 161
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 162
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 167
            echo "      ";
        }
        // line 168
        echo "
      ";
        // line 170
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 171
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 176
            echo "      ";
        }
        // line 177
        echo "    </div>
  </div>
";
        
        $__internal_5395df70b571a47d81d770a0b48e880feb8d46f417935540b5e75fe061bea9f3->leave($__internal_5395df70b571a47d81d770a0b48e880feb8d46f417935540b5e75fe061bea9f3_prof);

    }

    // line 107
    public function block_header($context, array $blocks = array())
    {
        $__internal_ada91197d53f244a1cfc0176e2257122cb9cd50e21fc76de604dac7cecd3d09f = $this->env->getExtension("native_profiler");
        $__internal_ada91197d53f244a1cfc0176e2257122cb9cd50e21fc76de604dac7cecd3d09f->enter($__internal_ada91197d53f244a1cfc0176e2257122cb9cd50e21fc76de604dac7cecd3d09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 108
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 109
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
        
        $__internal_ada91197d53f244a1cfc0176e2257122cb9cd50e21fc76de604dac7cecd3d09f->leave($__internal_ada91197d53f244a1cfc0176e2257122cb9cd50e21fc76de604dac7cecd3d09f_prof);

    }

    // line 127
    public function block_highlighted($context, array $blocks = array())
    {
        $__internal_05051246058f883b684ee64c2c248ef59aa1c0a488c49ad27ebfd09dd1c99dac = $this->env->getExtension("native_profiler");
        $__internal_05051246058f883b684ee64c2c248ef59aa1c0a488c49ad27ebfd09dd1c99dac->enter($__internal_05051246058f883b684ee64c2c248ef59aa1c0a488c49ad27ebfd09dd1c99dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "highlighted"));

        // line 128
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
        
        $__internal_05051246058f883b684ee64c2c248ef59aa1c0a488c49ad27ebfd09dd1c99dac->leave($__internal_05051246058f883b684ee64c2c248ef59aa1c0a488c49ad27ebfd09dd1c99dac_prof);

    }

    // line 134
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_7ac6fcf4111e1d348770c2bb82f93c53bb8618025aa40b29c61bf1b96a67ab20 = $this->env->getExtension("native_profiler");
        $__internal_7ac6fcf4111e1d348770c2bb82f93c53bb8618025aa40b29c61bf1b96a67ab20->enter($__internal_7ac6fcf4111e1d348770c2bb82f93c53bb8618025aa40b29c61bf1b96a67ab20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 135
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
          ";
        
        $__internal_7ac6fcf4111e1d348770c2bb82f93c53bb8618025aa40b29c61bf1b96a67ab20->leave($__internal_7ac6fcf4111e1d348770c2bb82f93c53bb8618025aa40b29c61bf1b96a67ab20_prof);

    }

    // line 141
    public function block_action_links($context, array $blocks = array())
    {
        $__internal_39f0e83909c696ed6ea7c1df67a33e2e3a0bca4a7117d977a1da60ae71402564 = $this->env->getExtension("native_profiler");
        $__internal_39f0e83909c696ed6ea7c1df67a33e2e3a0bca4a7117d977a1da60ae71402564->enter($__internal_39f0e83909c696ed6ea7c1df67a33e2e3a0bca4a7117d977a1da60ae71402564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "action_links"));

        // line 142
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
          ";
        
        $__internal_39f0e83909c696ed6ea7c1df67a33e2e3a0bca4a7117d977a1da60ae71402564->leave($__internal_39f0e83909c696ed6ea7c1df67a33e2e3a0bca4a7117d977a1da60ae71402564_prof);

    }

    // line 148
    public function block_help($context, array $blocks = array())
    {
        $__internal_8fe85ae122dfc66e3d4c873263cfb8b20454e08047221351e18cff7c065c8904 = $this->env->getExtension("native_profiler");
        $__internal_8fe85ae122dfc66e3d4c873263cfb8b20454e08047221351e18cff7c065c8904->enter($__internal_8fe85ae122dfc66e3d4c873263cfb8b20454e08047221351e18cff7c065c8904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        // line 149
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
          ";
        
        $__internal_8fe85ae122dfc66e3d4c873263cfb8b20454e08047221351e18cff7c065c8904->leave($__internal_8fe85ae122dfc66e3d4c873263cfb8b20454e08047221351e18cff7c065c8904_prof);

    }

    // line 154
    public function block_content($context, array $blocks = array())
    {
        $__internal_4af0bf0eec44d1bdeb905bd2bfb96277ff6f8c4eb5cb46499b4ef3115d7ba4e0 = $this->env->getExtension("native_profiler");
        $__internal_4af0bf0eec44d1bdeb905bd2bfb96277ff6f8c4eb5cb46499b4ef3115d7ba4e0->enter($__internal_4af0bf0eec44d1bdeb905bd2bfb96277ff6f8c4eb5cb46499b4ef3115d7ba4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 155
        echo "          <a id=\"main-content\"></a>
          ";
        // line 156
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        ";
        
        $__internal_4af0bf0eec44d1bdeb905bd2bfb96277ff6f8c4eb5cb46499b4ef3115d7ba4e0->leave($__internal_4af0bf0eec44d1bdeb905bd2bfb96277ff6f8c4eb5cb46499b4ef3115d7ba4e0_prof);

    }

    // line 162
    public function block_sidebar_first($context, array $blocks = array())
    {
        $__internal_e02f25fd4710848b6b8ecb5b7a7f3d61028b4d5dacbcbc3982177fa3866b7786 = $this->env->getExtension("native_profiler");
        $__internal_e02f25fd4710848b6b8ecb5b7a7f3d61028b4d5dacbcbc3982177fa3866b7786->enter($__internal_e02f25fd4710848b6b8ecb5b7a7f3d61028b4d5dacbcbc3982177fa3866b7786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_first"));

        // line 163
        echo "          <aside class=\"col-sm-pull-6 col-sm-3\" role=\"complementary\">
            ";
        // line 164
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
        
        $__internal_e02f25fd4710848b6b8ecb5b7a7f3d61028b4d5dacbcbc3982177fa3866b7786->leave($__internal_e02f25fd4710848b6b8ecb5b7a7f3d61028b4d5dacbcbc3982177fa3866b7786_prof);

    }

    // line 171
    public function block_sidebar_second($context, array $blocks = array())
    {
        $__internal_623872a72fe74c84a1a9efd81ec9b0646d71f8709023c8c6d6b86cb8dd691515 = $this->env->getExtension("native_profiler");
        $__internal_623872a72fe74c84a1a9efd81ec9b0646d71f8709023c8c6d6b86cb8dd691515->enter($__internal_623872a72fe74c84a1a9efd81ec9b0646d71f8709023c8c6d6b86cb8dd691515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_second"));

        // line 172
        echo "          <aside class=\"col-xs-3 col-sm-3\" role=\"complementary\">
            ";
        // line 173
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
        
        $__internal_623872a72fe74c84a1a9efd81ec9b0646d71f8709023c8c6d6b86cb8dd691515->leave($__internal_623872a72fe74c84a1a9efd81ec9b0646d71f8709023c8c6d6b86cb8dd691515_prof);

    }

    // line 182
    public function block_footer($context, array $blocks = array())
    {
        $__internal_883760771a9613de03e58d5c84879a5a4edeecd75a82d15e6c8484d6b4c5ba8e = $this->env->getExtension("native_profiler");
        $__internal_883760771a9613de03e58d5c84879a5a4edeecd75a82d15e6c8484d6b4c5ba8e->enter($__internal_883760771a9613de03e58d5c84879a5a4edeecd75a82d15e6c8484d6b4c5ba8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 183
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 184
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
    </footer>
  ";
        
        $__internal_883760771a9613de03e58d5c84879a5a4edeecd75a82d15e6c8484d6b4c5ba8e->leave($__internal_883760771a9613de03e58d5c84879a5a4edeecd75a82d15e6c8484d6b4c5ba8e_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/mybootstrap/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 184,  431 => 183,  425 => 182,  415 => 173,  412 => 172,  406 => 171,  396 => 164,  393 => 163,  387 => 162,  378 => 156,  375 => 155,  369 => 154,  359 => 149,  353 => 148,  343 => 142,  337 => 141,  327 => 135,  321 => 134,  311 => 128,  305 => 127,  295 => 109,  292 => 108,  286 => 107,  277 => 177,  274 => 176,  271 => 171,  268 => 170,  265 => 168,  262 => 167,  259 => 162,  256 => 161,  252 => 158,  249 => 154,  246 => 152,  243 => 151,  240 => 148,  237 => 147,  234 => 145,  231 => 144,  228 => 141,  225 => 140,  222 => 138,  219 => 137,  216 => 134,  213 => 133,  210 => 131,  207 => 130,  204 => 127,  201 => 126,  195 => 123,  193 => 120,  192 => 119,  191 => 118,  190 => 117,  189 => 116,  187 => 115,  184 => 113,  181 => 112,  178 => 107,  175 => 106,  168 => 102,  162 => 101,  154 => 96,  150 => 94,  147 => 93,  141 => 90,  138 => 89,  135 => 88,  131 => 85,  122 => 79,  119 => 78,  116 => 77,  112 => 75,  109 => 74,  103 => 72,  101 => 71,  96 => 70,  94 => 67,  93 => 66,  92 => 64,  90 => 63,  84 => 62,  75 => 182,  73 => 181,  70 => 180,  68 => 101,  65 => 99,  61 => 62,  59 => 61,  57 => 59,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  **/
/*  * Navigation:*/
/*  * - breadcrumb: The breadcrumb trail for the current page.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title: The page title, for use in the actual content.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the*/
/*  *   view and edit tabs when displaying a node).*/
/*  * - action_links: Actions local to the page, such as "Add menu" on the menu*/
/*  *   administration interface.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.navigation: Items for the navigation region.*/
/*  * - page.navigation_collapsible: Items for the navigation (collapsible) region.*/
/*  * - page.highlighted: Items for the highlighted content region.*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.footer: Items for the footer region.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* {% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}*/
/* {# Navbar #}*/
/* {% if page.navigation or page.navigation_collapsible %}*/
/*   {% block navbar %}*/
/*     {%*/
/*       set navbar_classes = [*/
/*         'navbar',*/
/*         theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',*/
/*         theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,*/
/*       ]*/
/*     %}*/
/*     <header{{ navbar_attributes.addClass(navbar_classes) }} id="navbar" role="banner">*/
/*       {% if not navbar_attributes.hasClass('container') %}*/
/*         <div class="{{ container }}">*/
/*       {% endif %}*/
/*       <div class="navbar-header">*/
/*         {{ page.navigation }}*/
/*         {# .btn-navbar is used as the toggle for collapsed navbar content #}*/
/*         {% if page.navigation_collapsible %}*/
/*           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">*/
/*             <span class="sr-only">{{ 'Toggle navigation'|t }}</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*           </button>*/
/*         {% endif %}*/
/*       </div>*/
/* */
/*       {# Navigation (collapsible) #}*/
/*       {% if page.navigation_collapsible %}*/
/*         <div id="navbar-collapse" class="navbar-collapse collapse">*/
/*           {{ page.navigation_collapsible }}*/
/*         </div>*/
/*       {% endif %}*/
/*       {% if not navbar_attributes.hasClass('container') %}*/
/*         </div>*/
/*       {% endif %}*/
/*     </header>*/
/*   {% endblock %}*/
/* {% endif %}*/
/* */
/* {# Main #}*/
/* {% block main %}*/
/*   <div role="main" class="main-container {{ container }} js-quickedit-main-content">*/
/*     <div class="row">*/
/* */
/*       {# Header #}*/
/*       {% if page.header %}*/
/*         {% block header %}*/
/*           <div class="col-sm-12" role="heading">*/
/*             {{ page.header }}*/
/*           </div>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* */
/*       {# Content #}*/
/*       {%*/
/*         set content_classes = [*/
/*           page.sidebar_first and page.sidebar_second ? 'col-sm-push-3 col-sm-6',*/
/*           page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',*/
/*           page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',*/
/*           page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'*/
/*         ]*/
/*       %}*/
/*       <section{{ content_attributes.addClass(content_classes) }}>*/
/* */
/*         {# Highlighted #}*/
/*         {% if page.highlighted %}*/
/*           {% block highlighted %}*/
/*             <div class="highlighted">{{ page.highlighted }}</div>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Breadcrumbs #}*/
/*         {% if breadcrumb %}*/
/*           {% block breadcrumb %}*/
/*             {{ breadcrumb }}*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Action Links #}*/
/*         {% if action_links %}*/
/*           {% block action_links %}*/
/*             <ul class="action-links">{{ action_links }}</ul>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Help #}*/
/*         {% if page.help %}*/
/*           {% block help %}*/
/*             {{ page.help }}*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Content #}*/
/*         {% block content %}*/
/*           <a id="main-content"></a>*/
/*           {{ page.content }}*/
/*         {% endblock %}*/
/*       </section>*/
/* */
/*       {# Sidebar First #}*/
/*       {% if page.sidebar_first %}*/
/*         {% block sidebar_first %}*/
/*           <aside class="col-sm-pull-6 col-sm-3" role="complementary">*/
/*             {{ page.sidebar_first }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* */
/*       {# Sidebar Second #}*/
/*       {% if page.sidebar_second %}*/
/*         {% block sidebar_second %}*/
/*           <aside class="col-xs-3 col-sm-3" role="complementary">*/
/*             {{ page.sidebar_second }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
/* {% if page.footer %}*/
/*   {% block footer %}*/
/*     <footer class="footer {{ container }}" role="contentinfo">*/
/*       {{ page.footer }}*/
/*     </footer>*/
/*   {% endblock %}*/
/* {% endif %}*/
/* */
