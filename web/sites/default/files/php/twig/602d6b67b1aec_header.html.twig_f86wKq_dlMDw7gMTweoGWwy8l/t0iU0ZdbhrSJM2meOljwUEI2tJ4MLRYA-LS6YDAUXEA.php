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

/* @ngt_theme/header.html.twig */
class __TwigTemplate_f3e478d47031bdd3838dfd5694feb5df4ffa8cd9d903764cb63e7437c32aa20c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 4, "set" => 10, "for" => 13];
        $filters = ["escape" => 6];
        $functions = ["file_url" => 6, "simplify_menu" => 10];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape'],
                ['file_url', 'simplify_menu']
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
        echo "<header class=\"desktop\">
    <div class=\"box\">
        <div class=\"left\">
            ";
        // line 4
        if (($context["showHeaderAndFooter"] ?? null)) {
            // line 5
            echo "                <figure>
                    <a href=\"/\"><img src=\"";
            // line 6
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["logo_general_url"] ?? null))]), "html", null, true);
            echo "\"></a>
                </figure>
            ";
        }
        // line 9
        echo "            ";
        // line 10
        echo "            ";
        $context["items"] = call_user_func_array($this->env->getFunction('simplify_menu')->getCallable(), ["menu-header-general"]);
        // line 11
        echo "            ";
        // line 12
        echo "            <!--<nav class=\"menu\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["items"] ?? null), "menu_tree", []));
        foreach ($context['_seq'] as $context["_key"] => $context["menu_item"]) {
            // line 14
            echo "                    <li class=\"navigation_item\">
                        <a href=\"";
            // line 15
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["menu_item"], "url", [])), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["menu_item"], "text", [])), "html", null, true);
            echo "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </nav>-->
        </div>
        <div class=\"right\">
            <!--<form action=\"\" class=\"search\">
                <input type=\"search\" name=\"search\" id=\"search\" placeholder=\"Buscar\">
            </form>-->
            ";
        // line 24
        if (($context["logged_in"] ?? null)) {
            // line 25
            echo "                <a href=\"/user\" class=\"link sign-in\">Mi perfil</a>
                <a href=\"/user/logout\" class=\"link sign-in\">Cerrar sesión</a>
            ";
        } else {
            // line 28
            echo "                <a href=\"/user/login\" class=\"link sign-in\">Iniciar sesión</a>
                <a href=\"/register/user\" class=\"link sign-up\">Registrarte</a>
            ";
        }
        // line 31
        echo "        </div>
    </div>
    <div class=\"breadcrumb\">

    </div>
</header>

<header class=\"mobile\">
    <div class=\"left\">
        <figure>
            <a href=\"/\"><img src=\"";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["logo_mobile_url"] ?? null))]), "html", null, true);
        echo "\"></a>
        </figure>
    </div>

    <div class=\"right\">
        <button id=\"menu-live\">menú</button>
    </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "@ngt_theme/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 41,  119 => 31,  114 => 28,  109 => 25,  107 => 24,  99 => 18,  88 => 15,  85 => 14,  81 => 13,  78 => 12,  76 => 11,  73 => 10,  71 => 9,  65 => 6,  62 => 5,  60 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"desktop\">
    <div class=\"box\">
        <div class=\"left\">
            {% if showHeaderAndFooter %}
                <figure>
                    <a href=\"/\"><img src=\"{{ file_url(logo_general_url) }}\"></a>
                </figure>
            {% endif %}
            {# Get menu items #}
            {% set items = simplify_menu('menu-header-general') %}
            {# Iterate menu tree #}
            <!--<nav class=\"menu\">
                {% for menu_item in items.menu_tree %}
                    <li class=\"navigation_item\">
                        <a href=\"{{ menu_item.url }}\">{{ menu_item.text }}</a>
                    </li>
                {% endfor %}
            </nav>-->
        </div>
        <div class=\"right\">
            <!--<form action=\"\" class=\"search\">
                <input type=\"search\" name=\"search\" id=\"search\" placeholder=\"Buscar\">
            </form>-->
            {% if logged_in %}
                <a href=\"/user\" class=\"link sign-in\">Mi perfil</a>
                <a href=\"/user/logout\" class=\"link sign-in\">Cerrar sesión</a>
            {% else %}
                <a href=\"/user/login\" class=\"link sign-in\">Iniciar sesión</a>
                <a href=\"/register/user\" class=\"link sign-up\">Registrarte</a>
            {% endif %}
        </div>
    </div>
    <div class=\"breadcrumb\">

    </div>
</header>

<header class=\"mobile\">
    <div class=\"left\">
        <figure>
            <a href=\"/\"><img src=\"{{ file_url(logo_mobile_url) }}\"></a>
        </figure>
    </div>

    <div class=\"right\">
        <button id=\"menu-live\">menú</button>
    </div>
</header>
", "@ngt_theme/header.html.twig", "/Applications/MAMP/htdocs/ilar-v2/web/themes/custom/ngt_theme/templates/header.html.twig");
    }
}
