<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/ngt_theme/templates/html.html.twig */
class __TwigTemplate_40e8dfbde47f181041a1538b1b3d4fc93e8ffb9e9ac345d7772ba343697f233a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 2, "set" => 26, "for" => 27, "include" => 51];
        $filters = ["escape" => 3, "safe_join" => 15, "date" => 20, "raw" => 22, "merge" => 28, "clean_class" => 28, "render" => 31, "t" => 45];
        $functions = ["attach_library" => 3];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for', 'include'],
                ['escape', 'safe_join', 'date', 'raw', 'merge', 'clean_class', 'render', 't'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
";
        // line 2
        if ($this->getAttribute(($context["ie_enabled_versions"] ?? null), "ie8", [])) {
            // line 3
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("basic/ie8"), "html", null, true);
            echo "
";
        }
        // line 5
        if (($this->getAttribute(($context["ie_enabled_versions"] ?? null), "ie9", []) || $this->getAttribute(($context["ie_enabled_versions"] ?? null), "ie8", []))) {
            // line 6
            echo "  <!--[if lt IE 7]>     <html";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["html_attributes"] ?? null), "addClass", [0 => "no-js", 1 => "lt-ie9", 2 => "lt-ie8", 3 => "lt-ie7"], "method")), "html", null, true);
            echo "><![endif]-->
  <!--[if IE 7]>        <html";
            // line 7
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["html_attributes"] ?? null), "removeClass", [0 => "lt-ie7"], "method")), "html", null, true);
            echo "><![endif]-->
  <!--[if IE 8]>        <html";
            // line 8
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["html_attributes"] ?? null), "removeClass", [0 => "lt-ie8"], "method")), "html", null, true);
            echo "><![endif]-->
  <!--[if gt IE 8]><!--><html";
            // line 9
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["html_attributes"] ?? null), "removeClass", [0 => "lt-ie9"], "method")), "html", null, true);
            echo "><!--<![endif]-->
";
        } else {
            // line 11
            echo "<html";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null)), "html", null, true);
            echo ">
";
        }
        // line 13
        echo "  <head>
    <head-placeholder token=\"";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)), "html", null, true);
        echo "\">
    <title>";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null)), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)), "html", null, true);
        echo "\">
    <js-placeholder token=\"";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)), "html", null, true);
        echo "\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Asap:wght@100;200;300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" media=\"all\" href=\"/";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/asset/css/style.css?temp=";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, " now ", "m/d/Y/H/i/s "), "html", null, true);
        echo "\">            
    <!-- Script external -->
    ";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["script_external"] ?? null)));
        echo "       
    <!-- End script external -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  </head>
  ";
        // line 26
        $context["classes"] = [];
        // line 27
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["user"] ?? null), "roles", []));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 28
            echo "    ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), [0 => ("role--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($context["role"])))]);
            // line 29
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
  ";
        // line 31
        $context["sidebar_first"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])));
        // line 32
        echo "  ";
        $context["sidebar_second"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])));
        // line 33
        echo "  <body";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => (( !        // line 34
($context["is_front"] ?? null)) ? ("with-subnav") : ("")), 2 => ((        // line 35
($context["sidebar_first"] ?? null)) ? ("sidebar-first") : ("")), 3 => ((        // line 36
($context["sidebar_second"] ?? null)) ? ("sidebar-second") : ("")), 4 => ((((        // line 37
($context["sidebar_first"] ?? null) &&  !($context["sidebar_second"] ?? null)) || (($context["sidebar_second"] ?? null) &&  !($context["sidebar_first"] ?? null)))) ? ("one-sidebar") : ("")), 5 => (((        // line 38
($context["sidebar_first"] ?? null) && ($context["sidebar_second"] ?? null))) ? ("two-sidebars") : ("")), 6 => ((( !        // line 39
($context["sidebar_first"] ?? null) &&  !($context["sidebar_second"] ?? null))) ? ("no-sidebar") : (""))], "method")), "html", null, true);
        // line 40
        echo "
    ng-cloak
    >
    <div id=\"skip\">
      <a href=\"#main-menu\" class=\"visually-hidden focusable skip-link\">
        ";
        // line 45
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Skip to main navigation"));
        echo "
      </a>
    </div>

    <!-- ______________________ HEADER _______________________ -->
        ";
        // line 50
        if (($context["is_front"] ?? null)) {
            echo " 
          ";
            // line 51
            $this->loadTemplate("@ngt_theme/header-home.html.twig", "themes/custom/ngt_theme/templates/html.html.twig", 51)->display($context);
            echo " 
        ";
        } else {
            // line 52
            echo " 
          ";
            // line 53
            $this->loadTemplate("@ngt_theme/header.html.twig", "themes/custom/ngt_theme/templates/html.html.twig", 53)->display($context);
            echo " 
        ";
        }
        // line 55
        echo "    <!-- ____________________ END HEADER ____________________ -->



    <!-- ______________________ MAIN _______________________ -->
        ";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null)), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null)), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null)), "html", null, true);
        echo "
    <!-- ___________________ END MAIN _______________________ -->


    <!-- ______________________ FOOTER _______________________ -->
          ";
        // line 65
        $this->loadTemplate("@ngt_theme/footer.html.twig", "themes/custom/ngt_theme/templates/html.html.twig", 65)->display($context);
        // line 66
        echo "    <!-- __________________ END FOOTER _______________________ -->

    <!-- ______________________ MODAL _______________________ -->
      <div id=\"ngtModal\" ng-if=\"showModal\"  class=\"ngt-modal none\" ng-click=\"close_message()\" ng-cloak>
        <div class=\"modal-content\">
          <span class=\"close\" ng-click=\"close_message()\">&times;</span>
          <p>{[{ messageModal }]}</p>
          <a ng-if=\"includeBtnModal\" href=\"{[{ linkModal }]}\"> {[{ textBtnModal }]} </a>
        </div>
      </div>
    <!-- __________________ END MODAL _______________________ -->

    <js-bottom-placeholder token=\"";
        // line 78
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)), "html", null, true);
        echo "\">
        ";
        // line 79
        if ($this->getAttribute(($context["browser_sync"] ?? null), "enabled", [])) {
            // line 80
            echo "        <script id=\"__bs_script__\">
        document.write(\"<script async src='http://";
            // line 81
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["browser_sync"] ?? null), "host", [])), "html", null, true);
            echo ":";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["browser_sync"] ?? null), "port", [])), "html", null, true);
            echo "/browser-sync/browser-sync-client.js'><\\/script>\".replace(\"HOST\", location.hostname));
        </script>
        ";
        }
        // line 84
        echo "
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/ngt_theme/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 84,  235 => 81,  232 => 80,  230 => 79,  226 => 78,  212 => 66,  210 => 65,  198 => 60,  191 => 55,  186 => 53,  183 => 52,  178 => 51,  174 => 50,  166 => 45,  159 => 40,  157 => 39,  156 => 38,  155 => 37,  154 => 36,  153 => 35,  152 => 34,  150 => 33,  147 => 32,  145 => 31,  142 => 30,  136 => 29,  133 => 28,  128 => 27,  126 => 26,  119 => 22,  112 => 20,  106 => 17,  102 => 16,  98 => 15,  94 => 14,  91 => 13,  85 => 11,  80 => 9,  76 => 8,  72 => 7,  67 => 6,  65 => 5,  60 => 3,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
{% if ie_enabled_versions.ie8 %}
  {{- attach_library('basic/ie8') }}
{% endif %}
{% if ie_enabled_versions.ie9 or ie_enabled_versions.ie8 %}
  <!--[if lt IE 7]>     <html{{ html_attributes.addClass('no-js', 'lt-ie9', 'lt-ie8', 'lt-ie7') }}><![endif]-->
  <!--[if IE 7]>        <html{{ html_attributes.removeClass('lt-ie7') }}><![endif]-->
  <!--[if IE 8]>        <html{{ html_attributes.removeClass('lt-ie8') }}><![endif]-->
  <!--[if gt IE 8]><!--><html{{ html_attributes.removeClass('lt-ie9') }}><!--<![endif]-->
{% else -%}
  <html{{ html_attributes }}>
{% endif %}
  <head>
    <head-placeholder token=\"{{ placeholder_token }}\">
    <title>{{ head_title|safe_join(' | ') }}</title>
    <css-placeholder token=\"{{ placeholder_token }}\">
    <js-placeholder token=\"{{ placeholder_token }}\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Asap:wght@100;200;300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" media=\"all\" href=\"/{{ directory }}/asset/css/style.css?temp={{ \" now \"|date(\"m/d/Y/H/i/s \") }}\">            
    <!-- Script external -->
    {{ script_external|raw }}       
    <!-- End script external -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  </head>
  {% set classes = [] %}
  {% for role in user.roles %}
    {% set classes = classes|merge(['role--' ~ role|clean_class]) %}
  {% endfor %}

  {% set sidebar_first = page.sidebar_first|render %}
  {% set sidebar_second = page.sidebar_second|render %}
  <body{{ attributes.addClass(classes,
        not is_front ? 'with-subnav',
        sidebar_first ? 'sidebar-first',
        sidebar_second ? 'sidebar-second',
        (sidebar_first and not sidebar_second) or (sidebar_second and not sidebar_first) ? 'one-sidebar',
        (sidebar_first and sidebar_second) ? 'two-sidebars',
        (not sidebar_first and not sidebar_second) ? 'no-sidebar'
    ) }}
    ng-cloak
    >
    <div id=\"skip\">
      <a href=\"#main-menu\" class=\"visually-hidden focusable skip-link\">
        {{ 'Skip to main navigation'|t }}
      </a>
    </div>

    <!-- ______________________ HEADER _______________________ -->
        {% if is_front %} 
          {% include '@ngt_theme/header-home.html.twig' %} 
        {% else %} 
          {% include '@ngt_theme/header.html.twig' %} 
        {% endif %}
    <!-- ____________________ END HEADER ____________________ -->



    <!-- ______________________ MAIN _______________________ -->
        {{ page_top }} {{ page }} {{ page_bottom }}
    <!-- ___________________ END MAIN _______________________ -->


    <!-- ______________________ FOOTER _______________________ -->
          {% include '@ngt_theme/footer.html.twig' %}
    <!-- __________________ END FOOTER _______________________ -->

    <!-- ______________________ MODAL _______________________ -->
      <div id=\"ngtModal\" ng-if=\"showModal\"  class=\"ngt-modal none\" ng-click=\"close_message()\" ng-cloak>
        <div class=\"modal-content\">
          <span class=\"close\" ng-click=\"close_message()\">&times;</span>
          <p>{[{ messageModal }]}</p>
          <a ng-if=\"includeBtnModal\" href=\"{[{ linkModal }]}\"> {[{ textBtnModal }]} </a>
        </div>
      </div>
    <!-- __________________ END MODAL _______________________ -->

    <js-bottom-placeholder token=\"{{ placeholder_token }}\">
        {% if browser_sync.enabled %}
        <script id=\"__bs_script__\">
        document.write(\"<script async src='http://{{ browser_sync.host }}:{{ browser_sync.port }}/browser-sync/browser-sync-client.js'><\\/script>\".replace(\"HOST\", location.hostname));
        </script>
        {% endif %}

  </body>
</html>
", "themes/custom/ngt_theme/templates/html.html.twig", "/Applications/MAMP/htdocs/ilar-v2/web/themes/custom/ngt_theme/templates/html.html.twig");
    }
}
