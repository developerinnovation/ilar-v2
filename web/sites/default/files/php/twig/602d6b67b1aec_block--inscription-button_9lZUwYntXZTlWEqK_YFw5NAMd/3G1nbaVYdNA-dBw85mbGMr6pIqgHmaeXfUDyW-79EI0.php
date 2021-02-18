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

/* modules/custom/ngt_inscription/templates/block--inscription-button.html.twig */
class __TwigTemplate_97dbc7eeafab39c308b51d254d7cb7268e38ce671664926b483c6d183075e711 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1];
        $filters = ["replace" => 1, "escape" => 2];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['replace', 'escape'],
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
        $context["directive_new"] = twig_replace_filter($this->sandbox->ensureToStringAllowed(($context["directive"] ?? null)), ["-" => "_"]);
        // line 2
        echo "<div class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class"] ?? null)), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directive"] ?? null)), "html", null, true);
        echo " ng-cloak ng-init=\"uuid_";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directive_new"] ?? null)), "html", null, true);
        echo " = '";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uuid"] ?? null)), "html", null, true);
        echo "'\">
    <button ng-disabled=\"disableBtn\" ng-class=\"(disableBtn) ? 'disabled' : 'active'\" ng-click=\"action(typeAction)\" class=\"show-course\" >{[{ textBtn }]}</button>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/ngt_inscription/templates/block--inscription-button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set directive_new = directive|replace({'-':'_'}) %}
<div class=\"{{ class }}\" {{ directive }} ng-cloak ng-init=\"uuid_{{ directive_new }} = '{{ uuid }}'\">
    <button ng-disabled=\"disableBtn\" ng-class=\"(disableBtn) ? 'disabled' : 'active'\" ng-click=\"action(typeAction)\" class=\"show-course\" >{[{ textBtn }]}</button>
</div>", "modules/custom/ngt_inscription/templates/block--inscription-button.html.twig", "/Applications/MAMP/htdocs/ilar-v2/web/modules/custom/ngt_inscription/templates/block--inscription-button.html.twig");
    }
}
