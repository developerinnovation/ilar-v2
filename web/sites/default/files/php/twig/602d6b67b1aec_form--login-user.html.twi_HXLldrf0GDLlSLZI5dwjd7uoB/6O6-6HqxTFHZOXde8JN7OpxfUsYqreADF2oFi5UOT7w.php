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

/* modules/custom/ngt_login/templates/form--login-user.html.twig */
class __TwigTemplate_073ed0000cf976accf948aa0e6c726a0725b800f53f556f3aaf080c4f8efec86 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 1];
        $functions = ["file_url" => 1];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['file_url']
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
        echo "<div class=\"main-form-login\" style=\"background-image:url(";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "#image_login_background_url", [], "array"))]), "html", null, true);
        echo "); background-repeat: no-repeat;\">
    <div class=\"image-logo__wrapper\">
        <figure> 
            <img src=\"";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "#image_logo_url", [], "array"))]), "html", null, true);
        echo "\">
        </figure>
    </div>
    <div class=\"login-form login-form__wrapper\">
        <form";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
            <div class=\"login-form__top\">
                <h3>";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "#titleLogin", [], "array")), "html", null, true);
        echo "</h3>
                <p class=\"message_login\"> ";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "#message", [], "array")), "html", null, true);
        echo " </p>
                <div id=\"error_messages\">";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "error_msgs", [])), "html", null, true);
        echo "</div>
                <div class=\"input-form\">
                    <div class=\"inner-addon leftaddon\">
                        <i class=\"icon mail\"></i>
                        ";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "name", [])), "html", null, true);
        echo " ";
        // line 17
        echo "                    </div>
                    <div class=\"inner-addon leftaddon\">
                        <i class=\"icon pass\"></i>
                        ";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "pass", [])), "html", null, true);
        echo " ";
        // line 21
        echo "                    </div>
                </div>
                <div class=\"login-form__help_actions forgot-password\">
                    <a href=\"/recovery/pass\" class=\"forgot-password\">";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "#forgot_password", [], "array")), "html", null, true);
        echo "</a>
                </div>
                ";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "form_build_id", [])), "html", null, true);
        echo " ";
        // line 27
        echo "                ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "form_token", [])), "html", null, true);
        echo " ";
        // line 28
        echo "                ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "form_id", [])), "html", null, true);
        echo " ";
        // line 29
        echo "                <div class=\"login-form__submit\">
                    ";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "actions", [])), "html", null, true);
        echo " ";
        // line 31
        echo "                </div>
            </div>
            <div class=\"login-form__bottom\">
                <h4 class=\"register\">";
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "#new_user_message", [], "array")), "html", null, true);
        echo "</h4>
                <div class=\"login-form__help_actions register\">
                    <a href=\"/register/user\" class=\"register\">";
        // line 36
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "#new_user_text", [], "array")), "html", null, true);
        echo "</a>
                </div>
            </div>
        </form>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/ngt_login/templates/form--login-user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 36,  132 => 34,  127 => 31,  124 => 30,  121 => 29,  117 => 28,  113 => 27,  110 => 26,  105 => 24,  100 => 21,  97 => 20,  92 => 17,  89 => 16,  82 => 12,  78 => 11,  74 => 10,  69 => 8,  62 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"main-form-login\" style=\"background-image:url({{ file_url(form['#image_login_background_url']) }}); background-repeat: no-repeat;\">
    <div class=\"image-logo__wrapper\">
        <figure> 
            <img src=\"{{ file_url(form['#image_logo_url']) }}\">
        </figure>
    </div>
    <div class=\"login-form login-form__wrapper\">
        <form{{ attributes }}>
            <div class=\"login-form__top\">
                <h3>{{ form['#titleLogin'] }}</h3>
                <p class=\"message_login\"> {{ form['#message'] }} </p>
                <div id=\"error_messages\">{{ form.error_msgs }}</div>
                <div class=\"input-form\">
                    <div class=\"inner-addon leftaddon\">
                        <i class=\"icon mail\"></i>
                        {{ form.name }} {# input user name #}
                    </div>
                    <div class=\"inner-addon leftaddon\">
                        <i class=\"icon pass\"></i>
                        {{ form.pass }} {# input pass #}
                    </div>
                </div>
                <div class=\"login-form__help_actions forgot-password\">
                    <a href=\"/recovery/pass\" class=\"forgot-password\">{{ form['#forgot_password'] }}</a>
                </div>
                {{ form.form_build_id }} {# required #}
                {{ form.form_token }} {# required #}
                {{ form.form_id }} {# required #}
                <div class=\"login-form__submit\">
                    {{ form.actions }} {# required #}
                </div>
            </div>
            <div class=\"login-form__bottom\">
                <h4 class=\"register\">{{ form['#new_user_message'] }}</h4>
                <div class=\"login-form__help_actions register\">
                    <a href=\"/register/user\" class=\"register\">{{ form['#new_user_text'] }}</a>
                </div>
            </div>
        </form>
    </div>
</div>", "modules/custom/ngt_login/templates/form--login-user.html.twig", "/Applications/MAMP/htdocs/ilar-v2/web/modules/custom/ngt_login/templates/form--login-user.html.twig");
    }
}
