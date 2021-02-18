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

/* modules/custom/ngt_general/templates/node-course/block--left-course.html.twig */
class __TwigTemplate_5a21aa7fa93697b9fa0584f3583ede7362272ec1ea2bcad24c7c2924fbe0ed01 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 9];
        $functions = ["drupal_block" => 9];

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
        echo "<div class=\"course-action\">
    <nav>
        <li ng-click=\"tab = 'contentPresentation'\" ng-class=\"(tab == 'contentPresentation') ? 'active' : 'no-active'\">Presentación</li>
        <li ng-click=\"tab = 'contentMain'\" ng-class=\"(tab == 'contentMain') ? 'active' : 'no-active'\">Contenidos</li>
        <li ng-click=\"tab = 'contentCommunity'\" ng-class=\"(tab == 'contentCommunity') ? 'active' : 'no-active'\">Comunidad</li>
    </nav>
</div>
<div class=\"action\">
    ";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalBlock("ngt_inscription_inscription_button", ["node" => ($context["data"] ?? null), "uid" => $this->getAttribute(($context["user"] ?? null), "id", [])]), "html", null, true);
        echo "
    <!--<button class=\"save\">guardar</button>-->
</div>
";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalBlock("ngt_social_shared"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "modules/custom/ngt_general/templates/node-course/block--left-course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 12,  65 => 9,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"course-action\">
    <nav>
        <li ng-click=\"tab = 'contentPresentation'\" ng-class=\"(tab == 'contentPresentation') ? 'active' : 'no-active'\">Presentación</li>
        <li ng-click=\"tab = 'contentMain'\" ng-class=\"(tab == 'contentMain') ? 'active' : 'no-active'\">Contenidos</li>
        <li ng-click=\"tab = 'contentCommunity'\" ng-class=\"(tab == 'contentCommunity') ? 'active' : 'no-active'\">Comunidad</li>
    </nav>
</div>
<div class=\"action\">
    {{ drupal_block('ngt_inscription_inscription_button', {'node' : data, 'uid' : user.id }) }}
    <!--<button class=\"save\">guardar</button>-->
</div>
{{ drupal_block('ngt_social_shared') }}", "modules/custom/ngt_general/templates/node-course/block--left-course.html.twig", "/Applications/MAMP/htdocs/ilar-v2/web/modules/custom/ngt_general/templates/node-course/block--left-course.html.twig");
    }
}
