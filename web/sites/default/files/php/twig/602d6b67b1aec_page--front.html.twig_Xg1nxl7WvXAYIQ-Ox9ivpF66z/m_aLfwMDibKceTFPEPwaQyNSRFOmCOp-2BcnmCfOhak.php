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

/* themes/custom/ngt_theme/templates/pages/page--front.html.twig */
class __TwigTemplate_9e718470081198a7f5a5aa8efee4bc08282cea5d5c5f8bc731b877929e895631 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 5];
        $functions = ["drupal_block" => 5];

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
        echo "<!-- ______________________ MAIN _______________________ -->
<div id=\"main\" class=\"page-front\" ng-cloak>
    <div class=\"top\">
        <div class=\"destacado\">
            ";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalBlock("ngt_general_contenido_destacado"), "html", null, true);
        echo "
        </div>
        <div class=\"benefits\">
            ";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalBlock("ngt_general_benefit_home"), "html", null, true);
        echo "
        </div>
    </div>

    <div class=\"center\">
        ";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalBlock("ngt_general_course_main"), "html", null, true);
        echo "
    </div>

    <div class=\"bottom\">
        ";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalBlock("ngt_general_course_category"), "html", null, true);
        echo "
    </div>
</div>


<!-- /#main -->";
    }

    public function getTemplateName()
    {
        return "themes/custom/ngt_theme/templates/pages/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 17,  75 => 13,  67 => 8,  61 => 5,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!-- ______________________ MAIN _______________________ -->
<div id=\"main\" class=\"page-front\" ng-cloak>
    <div class=\"top\">
        <div class=\"destacado\">
            {{ drupal_block('ngt_general_contenido_destacado') }}
        </div>
        <div class=\"benefits\">
            {{ drupal_block('ngt_general_benefit_home') }}
        </div>
    </div>

    <div class=\"center\">
        {{ drupal_block('ngt_general_course_main') }}
    </div>

    <div class=\"bottom\">
        {{ drupal_block('ngt_general_course_category') }}
    </div>
</div>


<!-- /#main -->", "themes/custom/ngt_theme/templates/pages/page--front.html.twig", "/Applications/MAMP/htdocs/ilar-v2/web/themes/custom/ngt_theme/templates/pages/page--front.html.twig");
    }
}
