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

/* modules/custom/ngt_general/templates/node-lesson/block--left-lesson.html.twig */
class __TwigTemplate_f8a3bde5b5b34d09e558e3f31739b76c684f07357cc91b122b1fac0992957bc4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 4];
        $functions = ["drupal_block" => 10];

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
        echo "<div class=\"leccion-action\">
    <nav>
        <li>
            <a href=\"";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "urlCourse", [])), "html", null, true);
        echo "\">Presentación</a>
        </li>
        <li ng-click=\"tab = 'contentMain'\" ng-class=\"(tab == 'contentMain') ? 'active' : 'no-active'\">Contenidos</li>
        <li ng-click=\"tab = 'contentCommunity'\" ng-class=\"(tab == 'contentCommunity') ? 'active' : 'no-active'\">Comunidad</li>
    </nav>
</div>
";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalBlock("ngt_general_node_lesson_modules", ["node" => $this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "nid", [])]), "html", null, true);
    }

    public function getTemplateName()
    {
        return "modules/custom/ngt_general/templates/node-lesson/block--left-lesson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 10,  60 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"leccion-action\">
    <nav>
        <li>
            <a href=\"{{ data[0].urlCourse }}\">Presentación</a>
        </li>
        <li ng-click=\"tab = 'contentMain'\" ng-class=\"(tab == 'contentMain') ? 'active' : 'no-active'\">Contenidos</li>
        <li ng-click=\"tab = 'contentCommunity'\" ng-class=\"(tab == 'contentCommunity') ? 'active' : 'no-active'\">Comunidad</li>
    </nav>
</div>
{{ drupal_block('ngt_general_node_lesson_modules', {'node' : data[0].nid }) }}", "modules/custom/ngt_general/templates/node-lesson/block--left-lesson.html.twig", "/Applications/MAMP/htdocs/ilar-v2/web/modules/custom/ngt_general/templates/node-lesson/block--left-lesson.html.twig");
    }
}
