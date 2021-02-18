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

/* @ngt_theme/header-home.html.twig */
class __TwigTemplate_be09a97813d2e51a13ba331c017c1a4f71b9a29767044761ae0b9c476a169b9d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 7, "for" => 10, "if" => 28];
        $filters = ["escape" => 12];
        $functions = ["simplify_menu" => 7, "file_url" => 40];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape'],
                ['simplify_menu', 'file_url']
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
        <div class=\"elements\">
            <div class=\"left\">
                <!--<div class=\"menu\">
                ";
        // line 7
        echo "                    ";
        $context["items"] = call_user_func_array($this->env->getFunction('simplify_menu')->getCallable(), ["menu-header"]);
        // line 8
        echo "                    ";
        // line 9
        echo "                    <nav class=\"navigation__items\">
                        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["items"] ?? null), "menu_tree", []));
        foreach ($context['_seq'] as $context["_key"] => $context["menu_item"]) {
            // line 11
            echo "                            <li class=\"navigation__item\">
                                <a href=\"";
            // line 12
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
        // line 15
        echo "                    </nav>
                </div>-->
            </div>
            <div class=\"right\">
                <!--<div class=\"search\">
                    <form action=\"\">
                        <labe class=\"form-control input header\">
                            <img src=\"\" alt=\"\" class=\"class-ico-search\">
                            <input type=\"search\" name=\"search\" id=\"search\" placeholder=\"Buscar\">
                        </labe>
                    </form>
                </div>-->
                <div class=\"login\">
                    ";
        // line 28
        if (($context["logged_in"] ?? null)) {
            // line 29
            echo "                        <a href=\"/user/logout\" class=\"link-sign-in\">Cerrar sesión</a>
                    ";
        } else {
            // line 31
            echo "                        <a href=\"/user/login\" class=\"link-sign-in\">Iniciar sesión</a>
                        <a href=\"/register/user\" class=\"link-sign-up\">Registrarte</a>
                    ";
        }
        // line 34
        echo "                </div>
                
            </div>
        </div>
    </div>
    <figure>
        <img src=\"";
        // line 40
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["logo_general_url"] ?? null))]), "html", null, true);
        echo "\">
    </figure>
</header>
";
    }

    public function getTemplateName()
    {
        return "@ngt_theme/header-home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 40,  114 => 34,  109 => 31,  105 => 29,  103 => 28,  88 => 15,  77 => 12,  74 => 11,  70 => 10,  67 => 9,  65 => 8,  62 => 7,  55 => 1,);
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
        <div class=\"elements\">
            <div class=\"left\">
                <!--<div class=\"menu\">
                {# Get menu items #}
                    {% set items = simplify_menu('menu-header') %}
                    {# Iterate menu tree #}
                    <nav class=\"navigation__items\">
                        {% for menu_item in items.menu_tree %}
                            <li class=\"navigation__item\">
                                <a href=\"{{ menu_item.url }}\">{{ menu_item.text }}</a>
                            </li>
                        {% endfor %}
                    </nav>
                </div>-->
            </div>
            <div class=\"right\">
                <!--<div class=\"search\">
                    <form action=\"\">
                        <labe class=\"form-control input header\">
                            <img src=\"\" alt=\"\" class=\"class-ico-search\">
                            <input type=\"search\" name=\"search\" id=\"search\" placeholder=\"Buscar\">
                        </labe>
                    </form>
                </div>-->
                <div class=\"login\">
                    {% if logged_in %}
                        <a href=\"/user/logout\" class=\"link-sign-in\">Cerrar sesión</a>
                    {% else %}
                        <a href=\"/user/login\" class=\"link-sign-in\">Iniciar sesión</a>
                        <a href=\"/register/user\" class=\"link-sign-up\">Registrarte</a>
                    {% endif %}
                </div>
                
            </div>
        </div>
    </div>
    <figure>
        <img src=\"{{ file_url(logo_general_url) }}\">
    </figure>
</header>
", "@ngt_theme/header-home.html.twig", "/Applications/MAMP/htdocs/ilar-v2/web/themes/custom/ngt_theme/templates/header-home.html.twig");
    }
}
