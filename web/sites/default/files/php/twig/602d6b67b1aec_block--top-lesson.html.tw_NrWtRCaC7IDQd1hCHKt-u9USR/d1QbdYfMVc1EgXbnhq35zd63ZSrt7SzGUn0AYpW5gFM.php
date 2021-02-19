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

/* modules/custom/ngt_general/templates/node-lesson/block--top-lesson.html.twig */
class __TwigTemplate_95598713d1668e1a23e4e89936828d34c7a38fca8c16308f218e96c61f4d3764 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 8, "if" => 29];
        $filters = ["escape" => 2];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape'],
                []
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
    <h1 class=\"title course\">";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "courseTitle", [])), "html", null, true);
        echo "</h1>
    <p class=\"summary\">";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "courseResume", [])), "html", null, true);
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
            echo "                <img width=\"98\" height=\"98\" src=\"";
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
    <div class=\"action shared\">
        <button class=\"icon shared\">Compartir</button>
    </div>
</div>
<div class=\"title leccion\">
    <h3 class=\"name-module\">";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "module", [])), "html", null, true);
        echo "</h3>
    <h2 class=\"name-leccion\">";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "title", [])), "html", null, true);
        echo "</h2>
</div>
<div class=\"nav-leccion\">
    <div class=\"preview\">
        <a ";
        // line 29
        if ( !(null === $this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "prevLesson", []))) {
            echo " href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "prevLesson", [])), "html", null, true);
            echo "\" ";
        } else {
            echo " class=\"inactive\" ";
        }
        echo "><i class=\"icon row\"></i>Volver</a>
    </div>
    
    <div class=\"next\">
        <a ";
        // line 33
        if ( !(null === $this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "nextLesson", []))) {
            echo " href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "nextLesson", [])), "html", null, true);
            echo "\" ";
        } else {
            echo " class=\"inactive\" ";
        }
        echo "><i class=\"icon row\"></i>Siguiente lección</a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/ngt_general/templates/node-lesson/block--top-lesson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  125 => 29,  118 => 25,  114 => 24,  105 => 17,  94 => 15,  90 => 14,  85 => 11,  74 => 9,  70 => 8,  62 => 3,  58 => 2,  55 => 1,);
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
    <h1 class=\"title course\">{{ data[0].courseTitle }}</h1>
    <p class=\"summary\">{{ data[0].courseResume }}</p>
</div>
<div class=\"details\">
    <picture class=\"author\">
        <figure>
            {% for key, item in data[0].expertos %}
                <img width=\"98\" height=\"98\" src=\"{{ item.picture_uri }}\" alt=\"{{ item.name_author }}\">
            {% endfor %}
        </figure>
           
        <figcaption>
            {% for key, item in data[0].expertos %}
                <a href=\"{{ item.uri }}\" class=\"link\">{{ item.name_author }}</a>
            {% endfor %}
        </figcaption>
    </picture>
    <div class=\"action shared\">
        <button class=\"icon shared\">Compartir</button>
    </div>
</div>
<div class=\"title leccion\">
    <h3 class=\"name-module\">{{ data[0].module }}</h3>
    <h2 class=\"name-leccion\">{{ data[0].title }}</h2>
</div>
<div class=\"nav-leccion\">
    <div class=\"preview\">
        <a {% if data[0].prevLesson is not null %} href=\"{{ data[0].prevLesson }}\" {% else %} class=\"inactive\" {% endif %}><i class=\"icon row\"></i>Volver</a>
    </div>
    
    <div class=\"next\">
        <a {% if data[0].nextLesson is not null %} href=\"{{ data[0].nextLesson }}\" {% else %} class=\"inactive\" {% endif %}><i class=\"icon row\"></i>Siguiente lección</a>
    </div>
</div>", "modules/custom/ngt_general/templates/node-lesson/block--top-lesson.html.twig", "/Applications/MAMP/htdocs/ilar-v2/web/modules/custom/ngt_general/templates/node-lesson/block--top-lesson.html.twig");
    }
}
