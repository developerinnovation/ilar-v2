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

/* modules/custom/ngt_general/templates/node-lesson/block--lesson-modules.html.twig */
class __TwigTemplate_592646a71d108ad293b22cf868281da54cbec960fc0d4dabb569ded4a5c18e7a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 4, "for" => 5];
        $filters = ["escape" => 7];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
        echo "<div class=\"module\">
    <h3>Contenido del curso</h3>
    <ul>
        ";
        // line 4
        if ( !twig_test_empty(($context["data"] ?? null))) {
            // line 5
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["module"]) {
                // line 6
                echo "                <li>
                    <i class=\"icon module ";
                // line 7
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["module"], "class", [])), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["module"], "moduleId", [])), "html", null, true);
                echo "</i>
                    <a href=\"";
                // line 8
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["module"], "urlCourse", [])), "html", null, true);
                echo "#module";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["module"], "numModule", [])), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["module"], "titleModule", [])), "html", null, true);
                echo "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "            <li>
                <i class=\"icon evaluate\">evaluación</i>
                <a href=\"#\">Evaluación final</a>
            </li>
        ";
        } else {
            // line 16
            echo "            <li>
                <i class=\"icon module\">N/A</i>
                <a href=\"#\">No hay módulos</a>
            </li>
        ";
        }
        // line 21
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/ngt_general/templates/node-lesson/block--lesson-modules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 21,  96 => 16,  89 => 11,  76 => 8,  70 => 7,  67 => 6,  62 => 5,  60 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"module\">
    <h3>Contenido del curso</h3>
    <ul>
        {% if data is not empty %}
            {% for key, module in data %}
                <li>
                    <i class=\"icon module {{ module.class }}\">{{ module.moduleId }}</i>
                    <a href=\"{{ module.urlCourse }}#module{{ module.numModule }}\">{{ module.titleModule }}</a>
                </li>
            {% endfor %}
            <li>
                <i class=\"icon evaluate\">evaluación</i>
                <a href=\"#\">Evaluación final</a>
            </li>
        {% else %}
            <li>
                <i class=\"icon module\">N/A</i>
                <a href=\"#\">No hay módulos</a>
            </li>
        {% endif %}
    </ul>
</div>", "modules/custom/ngt_general/templates/node-lesson/block--lesson-modules.html.twig", "/Applications/MAMP/htdocs/ilar-v2/web/modules/custom/ngt_general/templates/node-lesson/block--lesson-modules.html.twig");
    }
}
