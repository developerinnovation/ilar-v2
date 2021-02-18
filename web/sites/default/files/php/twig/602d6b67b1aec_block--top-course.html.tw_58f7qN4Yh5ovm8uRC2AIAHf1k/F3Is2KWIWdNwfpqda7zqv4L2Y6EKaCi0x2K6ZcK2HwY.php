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

/* modules/custom/ngt_general/templates/node-course/block--top-course.html.twig */
class __TwigTemplate_96dc5d48d274774c297a49ec329a97fc54908534bdbca7b5b72b4ea896b5d98c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 8];
        $filters = ["escape" => 2];
        $functions = ["drupal_field" => 26, "drupal_block" => 30];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
                ['drupal_field', 'drupal_block']
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
        echo "<div class=\"info\">
    <h1 class=\"title\">";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "title", [])), "html", null, true);
        echo "</h1>
    <p class=\"summary\">";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "resumen", [])), "html", null, true);
        echo "</p>
</div>
<div class=\"details\">
    <picture class=\"author\">
        <figure>
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "expertos", []));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 9
            echo "                <img src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "picture_uri", [])), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "name_author", [])), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        </figure>
           
        <figcaption>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "expertos", []));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 15
            echo "                <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "uri", [])), "html", null, true);
            echo "\" class=\"link\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "name_author", [])), "html", null, true);
            echo "</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        </figcaption>
    </picture>
    <div class=\"box-elements\">
        <time class=\"date\">Inicio: ";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "fecha_inicio", [])), "html", null, true);
        echo "</time>
        <time class=\"item hour\">";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "horas", [])), "html", null, true);
        echo " horas</time>
        <span class=\"item module\"> ";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "cnt_moulos", [])), "html", null, true);
        echo " Módulos</span>
        <span class=\"item students\">";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "cnt_alumnos", [])), "html", null, true);
        echo " Alumnos</span>
        <span class=\"item language\">Español</span>
        <div class=\"rating\">
            ";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalField("field_calificacion", "node", $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "nid", []))), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"action\">
        ";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalBlock("ngt_inscription_inscription_button", ["node" => $this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "nid", []), "uid" => $this->getAttribute(($context["user"] ?? null), "id", [])]), "html", null, true);
        echo "
        <!--<button class=\"save\">guardar</button>-->
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/ngt_general/templates/node-course/block--top-course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 30,  128 => 26,  122 => 23,  118 => 22,  114 => 21,  110 => 20,  105 => 17,  94 => 15,  90 => 14,  85 => 11,  74 => 9,  70 => 8,  62 => 3,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"info\">
    <h1 class=\"title\">{{ data[0].title }}</h1>
    <p class=\"summary\">{{ data[0].resumen }}</p>
</div>
<div class=\"details\">
    <picture class=\"author\">
        <figure>
            {% for key, item in data[0].expertos %}
                <img src=\"{{ item.picture_uri }}\" alt=\"{{ item.name_author }}\">
            {% endfor %}
        </figure>
           
        <figcaption>
            {% for key, item in data[0].expertos %}
                <a href=\"{{ item.uri }}\" class=\"link\">{{ item.name_author }}</a>
            {% endfor %}
        </figcaption>
    </picture>
    <div class=\"box-elements\">
        <time class=\"date\">Inicio: {{ data[0].fecha_inicio }}</time>
        <time class=\"item hour\">{{ data[0].horas }} horas</time>
        <span class=\"item module\"> {{ data[0].cnt_moulos }} Módulos</span>
        <span class=\"item students\">{{ data[0].cnt_alumnos }} Alumnos</span>
        <span class=\"item language\">Español</span>
        <div class=\"rating\">
            {{ drupal_field('field_calificacion', 'node',  data[0].nid) }}
        </div>
    </div>
    <div class=\"action\">
        {{ drupal_block('ngt_inscription_inscription_button', {'node' : data[0].nid, 'uid' : user.id }) }}
        <!--<button class=\"save\">guardar</button>-->
    </div>
</div>", "modules/custom/ngt_general/templates/node-course/block--top-course.html.twig", "/Applications/MAMP/htdocs/ilar-v2/web/modules/custom/ngt_general/templates/node-course/block--top-course.html.twig");
    }
}
