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

/* themes/custom/ngt_theme/templates/node/node--curso.html.twig */
class __TwigTemplate_33d777d0a3b21f6f45b6f5b1530acea0de0ee5a2cd64d9f2cbe3fabc9faccb3e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 3];
        $functions = ["drupal_block" => 3];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['drupal_block']
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
        echo "<div class=\"body main node-course\">
    <section class=\"top\">
        ";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalBlock("ngt_general_node_top_course", ["node" => $this->getAttribute(($context["node"] ?? null), "id", [])]), "html", null, true);
        echo "                     
    </section>

    <section class=\"left\">
        ";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalBlock("ngt_general_node_left_course", ["node" => $this->getAttribute(($context["node"] ?? null), "id", [])]), "html", null, true);
        echo " 
    </section>

    <section class=\"right\">
        ";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalBlock("ngt_general_node_right_course", ["node" => $this->getAttribute(($context["node"] ?? null), "id", []), "content" => ($context["content"] ?? null)]), "html", null, true);
        echo "
    </section>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/ngt_theme/templates/node/node--curso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 11,  66 => 7,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"body main node-course\">
    <section class=\"top\">
        {{ drupal_block('ngt_general_node_top_course', {'node' : node.id }) }}                     
    </section>

    <section class=\"left\">
        {{ drupal_block('ngt_general_node_left_course', {'node' : node.id }) }} 
    </section>

    <section class=\"right\">
        {{ drupal_block('ngt_general_node_right_course', {'node' : node.id, 'content' : content }) }}
    </section>
</div>", "themes/custom/ngt_theme/templates/node/node--curso.html.twig", "/Applications/MAMP/htdocs/ilar-v2/web/themes/custom/ngt_theme/templates/node/node--curso.html.twig");
    }
}
