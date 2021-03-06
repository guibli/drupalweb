<?php

/* @webprofiler/Collector/time.html.twig */
class __TwigTemplate_fce7c0fbcd8daaba5b50ee09357a014753c9f5f76bc14fd9c69870e72c100cda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95dd6e44df622c31e0f45c16ca107f3390683c6b0da9c50d150d180f4b781984 = $this->env->getExtension("native_profiler");
        $__internal_95dd6e44df622c31e0f45c16ca107f3390683c6b0da9c50d150d180f4b781984->enter($__internal_95dd6e44df622c31e0f45c16ca107f3390683c6b0da9c50d150d180f4b781984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/time.html.twig"));

        $tags = array("block" => 1, "set" => 2);
        $filters = array("length" => 2, "format" => 2, "escape" => 4, "t" => 6, "default" => 24);
        $functions = array("url" => 6);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('block', 'set'),
                array('length', 'format', 'escape', 't', 'default'),
                array('url')
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
        $this->displayBlock('toolbar', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_95dd6e44df622c31e0f45c16ca107f3390683c6b0da9c50d150d180f4b781984->leave($__internal_95dd6e44df622c31e0f45c16ca107f3390683c6b0da9c50d150d180f4b781984_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_26c56bd0cf486b7461a5d2afa764dd138dec36433eb1311dbd446aa807534c5e = $this->env->getExtension("native_profiler");
        $__internal_26c56bd0cf486b7461a5d2afa764dd138dec36433eb1311dbd446aa807534c5e->enter($__internal_26c56bd0cf486b7461a5d2afa764dd138dec36433eb1311dbd446aa807534c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        $context["duration"] = ((twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "events", array()))) ? (sprintf("%.0f ms", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "duration", array()))) : ("n/a"));
        // line 3
        echo "    ";
        $context["memory"] = sprintf("%.1f MB", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "memory", array()) / 1024) / 1024));
        // line 4
        echo "    ";
        $context["total_memory"] = ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "memoryLimit", array()) ==  -1)) ? ("&infin;") : ($this->env->getExtension('drupal_core')->escapeFilter($this->env, sprintf("%.1f MB", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "memoryLimit", array()) / 1024)))));
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "    <a href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getUrl("webprofiler.dashboard", array("profile" => (isset($context["token"]) ? $context["token"] : null)), array("fragment" => "time")), "html", null, true));
        echo "\" title=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Timeline")));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Timeline")));
        echo "\"
             src=\"data:image/png;base64,";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "icon", array()), "html", null, true));
        echo "\"/>
        <span>";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["duration"]) ? $context["duration"] : null), "html", null, true));
        echo " / ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["memory"]) ? $context["memory"] : null), "html", null, true));
        echo "</span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 12
        echo "    ";
        ob_start();
        // line 13
        echo "    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Total time")));
        echo "</b>
        <span>";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["duration"]) ? $context["duration"] : null), "html", null, true));
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Memory")));
        echo "</b>
        <span>";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["memory"]) ? $context["memory"] : null), "html", null, true));
        echo " / ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["total_memory"]) ? $context["total_memory"] : null), "html", null, true));
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : null), "")) : ("")), "html", null, true));
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 25
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : null), "")) : ("")), "html", null, true));
        echo "</div>
    </div>
";
        
        $__internal_26c56bd0cf486b7461a5d2afa764dd138dec36433eb1311dbd446aa807534c5e->leave($__internal_26c56bd0cf486b7461a5d2afa764dd138dec36433eb1311dbd446aa807534c5e_prof);

    }

    // line 29
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1f1654671e8e99a9ef209af2d56008298ef0103f481fe8de729125d0a8446eaa = $this->env->getExtension("native_profiler");
        $__internal_1f1654671e8e99a9ef209af2d56008298ef0103f481fe8de729125d0a8446eaa->enter($__internal_1f1654671e8e99a9ef209af2d56008298ef0103f481fe8de729125d0a8446eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 30
        echo "    <script id=\"time\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 31
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Timeline")));
        echo "</h2>

        <div class=\"panel__container\">
            <ul class=\"list--inline\">
                <li>
                    <b>";
        // line 36
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Total time")));
        echo "</b> <%- Drupal.webprofiler.helpers.printTime(data.duration) %>
                </li>
                <li>
                    <b>";
        // line 39
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Initialization time")));
        echo "</b> <%- Drupal.webprofiler.helpers.printTime(data.initTime) %>
                </li>
            </ul>
            <br/><br/>

            <div class=\"timeline\">
                <div class=\"timeline__legends\">
                    <span class=\"timeline__legends--default\">default</span>
                    <span class=\"timeline__legends--section\">section</span>
                    <span class=\"timeline__legends--event_listener\">event_listener</span>
                    <span class=\"timeline__legends--event_listener_loading\">event_listener_loading</span>
                    <span class=\"timeline__legends--template\">template</span>
                    <span class=\"timeline__legends--service\">service</span>
                </div>

                <div id=\"timeline\"></div>
            </div>
        </div>

    </script>
";
        
        $__internal_1f1654671e8e99a9ef209af2d56008298ef0103f481fe8de729125d0a8446eaa->leave($__internal_1f1654671e8e99a9ef209af2d56008298ef0103f481fe8de729125d0a8446eaa_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/time.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  170 => 39,  164 => 36,  156 => 31,  153 => 30,  147 => 29,  137 => 25,  133 => 24,  129 => 22,  121 => 19,  117 => 18,  111 => 15,  107 => 14,  104 => 13,  101 => 12,  93 => 9,  89 => 8,  85 => 7,  78 => 6,  75 => 5,  72 => 4,  69 => 3,  66 => 2,  60 => 1,  53 => 29,  50 => 28,  48 => 1,);
    }
}
/* {% block toolbar %}*/
/*     {% set duration = collector.events|length ? '%.0f ms'|format(collector.duration) : 'n/a' %}*/
/*     {% set memory = '%.1f MB'|format(collector.memory / 1024 / 1024) %}*/
/*     {% set total_memory = collector.memoryLimit == -1 ? '&infin;' : '%.1f MB'|format(collector.memoryLimit / 1024)|escape %}*/
/*     {% set icon %}*/
/*     <a href="{{ url("webprofiler.dashboard", {profile: token}, {fragment: "time"}) }}" title="{{ 'Timeline'|t }}">*/
/*         <img width="20" height="28" alt="{{ 'Timeline'|t }}"*/
/*              src="data:image/png;base64,{{ collector.icon }}"/>*/
/*         <span>{{ duration }} / {{ memory }}</span>*/
/*     </a>*/
/*     {% endset %}*/
/*     {% set text %}*/
/*     <div class="sf-toolbar-info-piece">*/
/*         <b>{{ 'Total time'|t }}</b>*/
/*         <span>{{ duration }}</span>*/
/*     </div>*/
/*     <div class="sf-toolbar-info-piece">*/
/*         <b>{{ 'Memory'|t }}</b>*/
/*         <span>{{ memory }} / {{ total_memory }}</span>*/
/*     </div>*/
/*     {% endset %}*/
/* */
/*     <div class="sf-toolbar-block">*/
/*         <div class="sf-toolbar-icon">{{ icon|default('') }}</div>*/
/*         <div class="sf-toolbar-info">{{ text|default('') }}</div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <script id="time" type="text/template">*/
/*         <h2 class="panel__title">{{ 'Timeline'|t }}</h2>*/
/* */
/*         <div class="panel__container">*/
/*             <ul class="list--inline">*/
/*                 <li>*/
/*                     <b>{{ 'Total time'|t }}</b> <%- Drupal.webprofiler.helpers.printTime(data.duration) %>*/
/*                 </li>*/
/*                 <li>*/
/*                     <b>{{ 'Initialization time'|t }}</b> <%- Drupal.webprofiler.helpers.printTime(data.initTime) %>*/
/*                 </li>*/
/*             </ul>*/
/*             <br/><br/>*/
/* */
/*             <div class="timeline">*/
/*                 <div class="timeline__legends">*/
/*                     <span class="timeline__legends--default">default</span>*/
/*                     <span class="timeline__legends--section">section</span>*/
/*                     <span class="timeline__legends--event_listener">event_listener</span>*/
/*                     <span class="timeline__legends--event_listener_loading">event_listener_loading</span>*/
/*                     <span class="timeline__legends--template">template</span>*/
/*                     <span class="timeline__legends--service">service</span>*/
/*                 </div>*/
/* */
/*                 <div id="timeline"></div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </script>*/
/* {% endblock %}*/
/* */
