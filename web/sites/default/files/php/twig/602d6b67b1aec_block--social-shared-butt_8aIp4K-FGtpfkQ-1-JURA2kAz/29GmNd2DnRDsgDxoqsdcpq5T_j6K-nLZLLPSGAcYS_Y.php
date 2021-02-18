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

/* modules/custom/ngt_social_shared/templates/block--social-shared-button.html.twig */
class __TwigTemplate_bc1968cd00aed536112e69f2b2ddde7142444cc4a823efd319ead499db99841b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 2];
        $filters = ["escape" => 3];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        echo "<div class=\"share\">
    ";
        // line 2
        if ((($context["active_facebook"] ?? null) == "1")) {
            // line 3
            echo "        <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url_facebook"] ?? null)), "html", null, true);
            echo "\" target=\"_blank\" class=\"facebook\">Compartir</a>
    ";
        }
        // line 5
        echo "    ";
        if ((($context["active_twitter"] ?? null) == "1")) {
            // line 6
            echo "        <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url_twitter"] ?? null)), "html", null, true);
            echo "\" target=\"_blank\" class=\"twetter\">Tweet</a>
    ";
        }
        // line 8
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/ngt_social_shared/templates/block--social-shared-button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 8,  69 => 6,  66 => 5,  60 => 3,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"share\">
    {% if active_facebook == '1' %}
        <a href=\"{{ url_facebook }}\" target=\"_blank\" class=\"facebook\">Compartir</a>
    {% endif %}
    {% if active_twitter == '1' %}
        <a href=\"{{ url_twitter }}\" target=\"_blank\" class=\"twetter\">Tweet</a>
    {% endif %}
</div>", "modules/custom/ngt_social_shared/templates/block--social-shared-button.html.twig", "/Applications/MAMP/htdocs/ilar-v2/web/modules/custom/ngt_social_shared/templates/block--social-shared-button.html.twig");
    }
}
