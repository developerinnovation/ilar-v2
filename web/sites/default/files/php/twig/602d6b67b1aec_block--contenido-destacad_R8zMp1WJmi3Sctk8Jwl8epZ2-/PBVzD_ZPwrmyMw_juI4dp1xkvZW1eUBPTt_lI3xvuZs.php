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

/* modules/custom/ngt_general/templates/block--contenido-destacado.html.twig */
class __TwigTemplate_ed36143ae886c4f4af433b9590da07d016d23cd8a7cc7aa0d4de2e49d859618c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 2];
        $filters = ["escape" => 5, "raw" => 9, "striptags" => 9];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 'raw', 'striptags'],
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
        echo "<div class=\"slider\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["contents"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 3
            echo "        <div class=\"item-sd\">
            <figure>  
                <img src=\"";
            // line 5
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["content"], "foto_portada", []), "uri_604x476", [])), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["content"], "foto_portada", []), "alt", [])), "html", null, true);
            echo "\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["content"], "foto_portada", []), "title", [])), "html", null, true);
            echo "\">
            </figure>
            <div class=\"text\">
                <h2>";
            // line 8
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["content"], "title", [])), "html", null, true);
            echo "</h2>
                <p>";
            // line 9
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(strip_tags($this->sandbox->ensureToStringAllowed($this->getAttribute($context["content"], "body", []))));
            echo "</p>
                <a class=\"action\" href=\"";
            // line 10
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["content"], "enlace", []), "uri", [])), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["content"], "enlace", []), "text", [])), "html", null, true);
            echo "</a>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/ngt_general/templates/block--contenido-destacado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 13,  84 => 10,  80 => 9,  76 => 8,  66 => 5,  62 => 3,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"slider\">
    {% for content in contents %}
        <div class=\"item-sd\">
            <figure>  
                <img src=\"{{ content.foto_portada.uri_604x476 }}\" alt=\"{{ content.foto_portada.alt }}\" title=\"{{ content.foto_portada.title }}\">
            </figure>
            <div class=\"text\">
                <h2>{{ content.title }}</h2>
                <p>{{ content.body|striptags|raw }}</p>
                <a class=\"action\" href=\"{{ content.enlace.uri }}\">{{ content.enlace.text }}</a>
            </div>
        </div>
    {% endfor %}    
</div>
", "modules/custom/ngt_general/templates/block--contenido-destacado.html.twig", "/Applications/MAMP/htdocs/ilar-v2/web/modules/custom/ngt_general/templates/block--contenido-destacado.html.twig");
    }
}
