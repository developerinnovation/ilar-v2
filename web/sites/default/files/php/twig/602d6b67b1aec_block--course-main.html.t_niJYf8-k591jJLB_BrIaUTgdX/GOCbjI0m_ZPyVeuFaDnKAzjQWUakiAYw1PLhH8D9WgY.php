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

/* modules/custom/ngt_general/templates/block--course-main.html.twig */
class __TwigTemplate_31866885919071eda18e0864bac64e00b4ca5cfb9849169b24135af2b0f50eae extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 23];
        $filters = ["escape" => 3, "image_style" => 9];
        $functions = ["drupal_field" => 37];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 'image_style'],
                ['drupal_field']
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
        echo "<div class=\"description course\">
    <h3>Cursos</h3>
    <p>";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["txt_curso"] ?? null)), "html", null, true);
        echo "</p>
</div>
<div class=\"item-news course-main home\">
    <div class=\"picture\">
        <figure>
            <picture>
                <source srcset=\"";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->imageStyle($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["course"] ?? null), 0, [], "array"), "foto_portada", []), "uri", [])), "313x156"), "html", null, true);
        echo "\" 
                    media=\"(max-width: 767px)\" 
                    alt=\"";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["course"] ?? null), 0, [], "array"), "foto_portada", []), "alt", [])), "html", null, true);
        echo "\" 
                    title=\"";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["course"] ?? null), 0, [], "array"), "foto_portada", []), "title", [])), "html", null, true);
        echo "\">
                <img srcset=\"";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->imageStyle($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["course"] ?? null), 0, [], "array"), "foto_portada", []), "uri", [])), "604x476"), "html", null, true);
        echo "\" 
                    alt=\"";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["course"] ?? null), 0, [], "array"), "foto_portada", []), "alt", [])), "html", null, true);
        echo "\" 
                    title=\"";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["course"] ?? null), 0, [], "array"), "foto_portada", []), "title", [])), "html", null, true);
        echo "\">
            </picture>
        </figure>
    </div>
    <div class=\"text\">
        <h3 class=\"title desktop\">";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["course"] ?? null), 0, [], "array"), "title", [])), "html", null, true);
        echo "</h3>
        <div class=\"author multiple\">
            <figure>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["course"] ?? null), 0, [], "array"), "expertos", []));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 24
            echo "                    <img src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "picture_uri", [])), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "name_author", [])), "html", null, true);
            echo "\">
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </figure>
        </div>
        <div class=\"info\">
            <div class=\"name author\">
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["course"] ?? null), 0, [], "array"), "expertos", []));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 31
            echo "                    <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "uri", [])), "html", null, true);
            echo "\" class=\"link author\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "name_author", [])), "html", null, true);
            echo "</a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            </div>
            <time class=\"hour\">";
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["course"] ?? null), 0, [], "array"), "horas", [])), "html", null, true);
        echo " horas</time>
            <time class=\"date\">Inicio: ";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["course"] ?? null), 0, [], "array"), "fecha_inicio", [])), "html", null, true);
        echo "</time>
            <div class=\"rating\">
                ";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalField("field_calificacion", "node", $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["course"] ?? null), 0, [], "array"), "nid", []))), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"action\">
            <button class=\"show-course\">
                <a href=\"";
        // line 42
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["course"] ?? null), 0, [], "array"), "url", [])), "html", null, true);
        echo "\">Ver curso</a>
            </button>
            <button class=\"save\">guardar</button>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/ngt_general/templates/block--course-main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 42,  151 => 37,  146 => 35,  142 => 34,  139 => 33,  128 => 31,  124 => 30,  118 => 26,  107 => 24,  103 => 23,  97 => 20,  89 => 15,  85 => 14,  81 => 13,  77 => 12,  73 => 11,  68 => 9,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"description course\">
    <h3>Cursos</h3>
    <p>{{ txt_curso }}</p>
</div>
<div class=\"item-news course-main home\">
    <div class=\"picture\">
        <figure>
            <picture>
                <source srcset=\"{{ course[0].foto_portada.uri | image_style('313x156') }}\" 
                    media=\"(max-width: 767px)\" 
                    alt=\"{{ course[0].foto_portada.alt }}\" 
                    title=\"{{ course[0].foto_portada.title }}\">
                <img srcset=\"{{ course[0].foto_portada.uri | image_style('604x476') }}\" 
                    alt=\"{{ course[0].foto_portada.alt }}\" 
                    title=\"{{ course[0].foto_portada.title }}\">
            </picture>
        </figure>
    </div>
    <div class=\"text\">
        <h3 class=\"title desktop\">{{ course[0].title }}</h3>
        <div class=\"author multiple\">
            <figure>
                {% for key, item in course[0].expertos %}
                    <img src=\"{{ item.picture_uri }}\" alt=\"{{ item.name_author }}\">
                {% endfor %}
            </figure>
        </div>
        <div class=\"info\">
            <div class=\"name author\">
                {% for key, item in course[0].expertos %}
                    <a href=\"{{ item.uri }}\" class=\"link author\">{{ item.name_author }}</a>
                {% endfor %}
            </div>
            <time class=\"hour\">{{ course[0].horas }} horas</time>
            <time class=\"date\">Inicio: {{ course[0].fecha_inicio }}</time>
            <div class=\"rating\">
                {{ drupal_field('field_calificacion', 'node', course[0].nid) }}
            </div>
        </div>
        <div class=\"action\">
            <button class=\"show-course\">
                <a href=\"{{ course[0].url }}\">Ver curso</a>
            </button>
            <button class=\"save\">guardar</button>
        </div>
    </div>
</div>", "modules/custom/ngt_general/templates/block--course-main.html.twig", "/Applications/MAMP/htdocs/ilar-v2/web/modules/custom/ngt_general/templates/block--course-main.html.twig");
    }
}
