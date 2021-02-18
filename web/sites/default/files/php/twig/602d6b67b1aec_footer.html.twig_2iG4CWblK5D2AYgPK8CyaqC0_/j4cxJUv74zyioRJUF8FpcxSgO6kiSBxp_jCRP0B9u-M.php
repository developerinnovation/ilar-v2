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

/* @ngt_theme/footer.html.twig */
class __TwigTemplate_2b20570906d05b67b5eabbec1511f4b9b3c0921b8c69bc32f0783468b94aecd3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 2, "set" => 27, "for" => 30];
        $filters = ["escape" => 6, "date" => 43];
        $functions = ["file_url" => 17, "simplify_menu" => 27];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'date'],
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
        echo "<footer>
    ";
        // line 2
        if (($context["showHeaderAndFooter"] ?? null)) {
            // line 3
            echo "        <div class=\"newsetter\">
            <div class=\"left\">
                <h3>suscríbete a nuestro newsletter</h3>
                <p>";
            // line 6
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["general_txt_newsletter"] ?? null)), "html", null, true);
            echo "</p>
            </div>
            <div class=\"right\">
                <form action=\"\">
                    <input type=\"email\" name=\"\" id=\"\" placeholder=\"Correo electrónico\">
                    <button>suscribirme</button>
                </form>
            </div>
        </div>
        <div class=\"box\">
            <figure>
                <img class=\"logo-footer\" src=\"";
            // line 17
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["logo_general_url"] ?? null))]), "html", null, true);
            echo "\">
                ";
            // line 18
            if ((($context["activate_img_logo_second"] ?? null) == 1)) {
                // line 19
                echo "                    <img class=\"logo-footer\" src=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["logo_second_url"] ?? null))]), "html", null, true);
                echo "\">
                ";
            }
            // line 21
            echo "            </figure>
            
            <p class=\"description\">";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["general_txt_footer"] ?? null)), "html", null, true);
            echo "</p>

            <div class=\"menu\">
                ";
            // line 27
            echo "                ";
            $context["items"] = call_user_func_array($this->env->getFunction('simplify_menu')->getCallable(), ["footer"]);
            // line 28
            echo "                ";
            // line 29
            echo "                <nav class=\"navigation__items\">
                    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["items"] ?? null), "menu_tree", []));
            foreach ($context['_seq'] as $context["_key"] => $context["menu_item"]) {
                // line 31
                echo "                        <li class=\"navigation__item\">
                            <a href=\"";
                // line 32
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
            // line 35
            echo "                </nav>
            </div>

            ";
            // line 38
            if ((($context["logo_design_url"] ?? null) != "")) {
                // line 39
                echo "                <div class=\"design-by\">
                    <img class=\"logo-design-by\" src=\"";
                // line 40
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["logo_design_url"] ?? null))]), "html", null, true);
                echo "\">
                </div>
            ";
            }
            // line 43
            echo "            <p class=\"copyright\">© Copyright, ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
            echo ".</p>
        </div>
    ";
        }
        // line 46
        echo "
    <nav id=\"menu-fixed\" class=\"mobile\">
      <a class=\"icon home ";
        // line 48
        if (($context["is_front"] ?? null)) {
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("active");
            echo " ";
        } else {
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("no-active");
            echo " ";
        }
        echo "\" href=\"/\">Inicio</a>
      <a class=\"icon search ";
        // line 49
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menuActiveSearch"] ?? null)), "html", null, true);
        echo "\" href=\"/\">Buscar</a>
      <a class=\"icon multimedia ";
        // line 50
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menuActiveNode"] ?? null)), "html", null, true);
        echo "\" href=\"#\">Multimedia</a>
      <a class=\"icon perfil login pass ";
        // line 51
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menuActiveUser"] ?? null)), "html", null, true);
        echo "\" href=\"/user\">Perfil</a>
    </nav>
</footer>";
    }

    public function getTemplateName()
    {
        return "@ngt_theme/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 51,  170 => 50,  166 => 49,  154 => 48,  150 => 46,  143 => 43,  137 => 40,  134 => 39,  132 => 38,  127 => 35,  116 => 32,  113 => 31,  109 => 30,  106 => 29,  104 => 28,  101 => 27,  95 => 23,  91 => 21,  85 => 19,  83 => 18,  79 => 17,  65 => 6,  60 => 3,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<footer>
    {% if showHeaderAndFooter %}
        <div class=\"newsetter\">
            <div class=\"left\">
                <h3>suscríbete a nuestro newsletter</h3>
                <p>{{ general_txt_newsletter }}</p>
            </div>
            <div class=\"right\">
                <form action=\"\">
                    <input type=\"email\" name=\"\" id=\"\" placeholder=\"Correo electrónico\">
                    <button>suscribirme</button>
                </form>
            </div>
        </div>
        <div class=\"box\">
            <figure>
                <img class=\"logo-footer\" src=\"{{ file_url(logo_general_url) }}\">
                {% if activate_img_logo_second == 1 %}
                    <img class=\"logo-footer\" src=\"{{ file_url(logo_second_url) }}\">
                {% endif %}
            </figure>
            
            <p class=\"description\">{{ general_txt_footer }}</p>

            <div class=\"menu\">
                {# Get menu items #}
                {% set items = simplify_menu('footer') %}
                {# Iterate menu tree #}
                <nav class=\"navigation__items\">
                    {% for menu_item in items.menu_tree %}
                        <li class=\"navigation__item\">
                            <a href=\"{{ menu_item.url }}\">{{ menu_item.text }}</a>
                        </li>
                    {% endfor %}
                </nav>
            </div>

            {% if logo_design_url != '' %}
                <div class=\"design-by\">
                    <img class=\"logo-design-by\" src=\"{{ file_url(logo_design_url) }}\">
                </div>
            {% endif %}
            <p class=\"copyright\">© Copyright, {{ \"now\"|date(\"Y\") }}.</p>
        </div>
    {% endif %}

    <nav id=\"menu-fixed\" class=\"mobile\">
      <a class=\"icon home {% if is_front %} {{ 'active' }} {% else %} {{ 'no-active' }} {% endif %}\" href=\"/\">Inicio</a>
      <a class=\"icon search {{ menuActiveSearch }}\" href=\"/\">Buscar</a>
      <a class=\"icon multimedia {{ menuActiveNode }}\" href=\"#\">Multimedia</a>
      <a class=\"icon perfil login pass {{ menuActiveUser }}\" href=\"/user\">Perfil</a>
    </nav>
</footer>", "@ngt_theme/footer.html.twig", "/Applications/MAMP/htdocs/ilar-v2/web/themes/custom/ngt_theme/templates/footer.html.twig");
    }
}
