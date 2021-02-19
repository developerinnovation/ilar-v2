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

/* modules/custom/ngt_login/templates/block--recovery-pass.html.twig */
class __TwigTemplate_adca6aa25ea94675c53efcc690469a5f9add5f987b0d0f67f9ceff39079e1a34 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2];
        $filters = ["replace" => 2, "escape" => 3];
        $functions = ["file_url" => 4];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['replace', 'escape'],
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
        echo "
";
        // line 2
        $context["directive_new"] = twig_replace_filter($this->sandbox->ensureToStringAllowed(($context["directive"] ?? null)), ["-" => "_"]);
        // line 3
        echo "<div class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class"] ?? null)), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directive"] ?? null)), "html", null, true);
        echo " ng-cloak ng-init=\"uuid_";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directive_new"] ?? null)), "html", null, true);
        echo " = '";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uuid"] ?? null)), "html", null, true);
        echo "'\">
    <div class=\"main-form-recovery-pass\"  style=\"background-image:url(";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["image_login_background_url"] ?? null))]), "html", null, true);
        echo "); background-repeat: no-repeat;\">
        <div class=\"image-logo__wrapper\">
            <figure> 
                <img src=\"";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["image_logo_url"] ?? null))]), "html", null, true);
        echo "\">
            </figure>
        </div>
        <div class=\"recovery-form login-form__wrapper recovery-pass\">
            <form id=\"recoveryPass\" name=\"recoveryPass\">
                <div class=\"recovery-form__top recovery\">
                    <h3 ng-if=\"step != 4\">";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["config"] ?? null), "title", [])), "html", null, true);
        echo "</h3>

                    <div ng-if=\"step == 4\">
                        <div class=\"inner-addon leftaddon\">
                            <i ng-class=\"(status_pass == true) ? 'icon ready' : 'icon failed'\"></i>
                        </div>
                        <div class=\"mensaje\">
                            <h4>{[{ status_pass_label }]}</h4>
                        </div>
                    </div>

                    <ul class=\"nav-step\">
                        <li ng-class=\"(step == 1) ? 'active' : ''\">step1</li>
                        <li ng-class=\"(step == 2) ? 'active' : ''\">step2</li>
                        <li ng-class=\"(step == 3) ? 'active' : ''\">step3</li>
                        <li ng-class=\"(step == 4) ? 'active' : ''\">step4</li>
                    </ul>
                    
                    <div class=\"input-form\">
                        <p class=\"message_login\">{[{ message }]}</p>
                        
                        <div class=\"cards\" ng-show=\"step == 1\">
                            <div class=\"inner-addon leftaddon\">
                                    <i class=\"icon mail\"></i>
                                    <input type=\"text\" id=\"card_email\" name=\"card_email\" placeholder=\"";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["config"] ?? null), "mail", [])), "html", null, true);
        echo "\" autocomplete=\"off\" maxlength=\"100\"
                                        ng-class=\"{ 'error-input-text' : !recoveryPass.card_email.\$valid }\"
                                        ng-model=\"inputCard.email\">
                                        <div class=\"icon-load\" ng-if=\"showLoading\">
                                            <img width=\"50\" src=\"../../../modules/custom/ngt_login/asset/image/loading.gif\" alt=\"\">
                                        </div>
                                        <p class=\"error-message-input\" ng-if=\"!recoveryPass.card_email.\$valid\" ng-bind=\"errorMailInput\"></p>
                            </div>
                        </div>

                        <div class=\"cards\" ng-show=\"step == 2\">
                            <div>
                                <input type=\"text\" id=\"card_ping\" name=\"card_ping\" placeholder=\"";
        // line 49
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["config"] ?? null), "placeholder_code", [])), "html", null, true);
        echo "\" autocomplete=\"off\" maxlength=\"6\"
                                    ng-model=\"inputCard.pings\" 
                                    ng-class=\"{ 'error-input-text' : !recoveryPass.card_ping.\$valid }\">
                                <div class=\"icon-load\" ng-if=\"showLoading\">
                                    <img width=\"50\" src=\"../../../modules/custom/ngt_login/asset/image/loading.gif\" alt=\"\">
                                </div>
                                <p class=\"error-message-input\" ng-if=\"!recoveryPass.card_ping.\$valid\" ng-bind=\"errorPingInput\"></p>
                            </div>
                        </div>

                        <div class=\"cards\" ng-show=\"step == 3\">
                            <div class=\"inner-addon leftaddon\">
                                <i class=\"icon pass\"></i>
                                <input type=\"password\" id=\"pass\" name=\"pass\" placeholder=\"";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["config"] ?? null), "password", [])), "html", null, true);
        echo "\" maxlength=\"20\" autocomplete=\"off\"
                                    ng-model=\"inputCard.pass\" 
                                    ng-class=\"{ 'error-input-text' : !recoveryPass.card_pass.\$valid }\">
                            </div>

                            <div class=\"inner-addon leftaddon\">
                                <ul>
                                    <li class=\"criteriar-pass criteriar-{[{ key }]}\"
                                        ng-repeat=\"(key, value) in pass_criteriar\">{[{ value }]}</li>
                                </ul>
                            </div>

                            <div class=\"inner-addon leftaddon\">
                                <i class=\"icon pass\"></i>
                                <input type=\"password\" id=\"repeat_pass\" name=\"repeat_pass\" placeholder=\"";
        // line 76
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["config"] ?? null), "repeat_password", [])), "html", null, true);
        echo "\" maxlength=\"20\" autocomplete=\"off\"
                                    ng-model=\"inputCard.repeat_pass\" 
                                    ng-class=\"{ 'error-input-text' : !recoveryPass.card_repeat_pass.\$valid }\">
                            </div>
                            
                            <div>
                                <div class=\"icon-load\" ng-if=\"showLoading\">
                                    <img width=\"50\" src=\"../../../modules/custom/ngt_login/asset/image/loading.gif\" alt=\"\">
                                </div>
                                <p class=\"error-message-input\" ng-if=\"ErrorRecoveryPass\" ng-bind=\"errorPassInput\"></p>
                            </div>
                        </div>

                        <div class=\"cards\" ng-show=\"step == 4\">
                            <div>
                                <p class=\"message_status_recovery\">{[{ messageStatusRecovery }]}</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"recovery-form__submit\">
                        <div class=\"action-next\">
                            <button 
                                ng-click=\"(step <= 3) ? actionNext() : actionLogin()\"
                                ng-disabled=\"btnDisabled\">{[{ txtBtnNext }]}</button>
                        </div>
                        <div class=\"action-return\">
                            <button 
                                ng-if=\"step <= 3\"
                                ng-click=\"(step <= 3) ? actionCancell() : actionReturn()\"
                                ng-disabled=\"btnDisabled\">{[{ txtBtnReturn }]}</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/ngt_login/templates/block--recovery-pass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 76,  144 => 62,  128 => 49,  113 => 37,  86 => 13,  77 => 7,  71 => 4,  60 => 3,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% set directive_new = directive|replace({'-':'_'}) %}
<div class=\"{{ class }}\" {{ directive }} ng-cloak ng-init=\"uuid_{{ directive_new }} = '{{ uuid }}'\">
    <div class=\"main-form-recovery-pass\"  style=\"background-image:url({{ file_url(image_login_background_url) }}); background-repeat: no-repeat;\">
        <div class=\"image-logo__wrapper\">
            <figure> 
                <img src=\"{{ file_url(image_logo_url) }}\">
            </figure>
        </div>
        <div class=\"recovery-form login-form__wrapper recovery-pass\">
            <form id=\"recoveryPass\" name=\"recoveryPass\">
                <div class=\"recovery-form__top recovery\">
                    <h3 ng-if=\"step != 4\">{{ config.title }}</h3>

                    <div ng-if=\"step == 4\">
                        <div class=\"inner-addon leftaddon\">
                            <i ng-class=\"(status_pass == true) ? 'icon ready' : 'icon failed'\"></i>
                        </div>
                        <div class=\"mensaje\">
                            <h4>{[{ status_pass_label }]}</h4>
                        </div>
                    </div>

                    <ul class=\"nav-step\">
                        <li ng-class=\"(step == 1) ? 'active' : ''\">step1</li>
                        <li ng-class=\"(step == 2) ? 'active' : ''\">step2</li>
                        <li ng-class=\"(step == 3) ? 'active' : ''\">step3</li>
                        <li ng-class=\"(step == 4) ? 'active' : ''\">step4</li>
                    </ul>
                    
                    <div class=\"input-form\">
                        <p class=\"message_login\">{[{ message }]}</p>
                        
                        <div class=\"cards\" ng-show=\"step == 1\">
                            <div class=\"inner-addon leftaddon\">
                                    <i class=\"icon mail\"></i>
                                    <input type=\"text\" id=\"card_email\" name=\"card_email\" placeholder=\"{{ config.mail }}\" autocomplete=\"off\" maxlength=\"100\"
                                        ng-class=\"{ 'error-input-text' : !recoveryPass.card_email.\$valid }\"
                                        ng-model=\"inputCard.email\">
                                        <div class=\"icon-load\" ng-if=\"showLoading\">
                                            <img width=\"50\" src=\"../../../modules/custom/ngt_login/asset/image/loading.gif\" alt=\"\">
                                        </div>
                                        <p class=\"error-message-input\" ng-if=\"!recoveryPass.card_email.\$valid\" ng-bind=\"errorMailInput\"></p>
                            </div>
                        </div>

                        <div class=\"cards\" ng-show=\"step == 2\">
                            <div>
                                <input type=\"text\" id=\"card_ping\" name=\"card_ping\" placeholder=\"{{ config.placeholder_code }}\" autocomplete=\"off\" maxlength=\"6\"
                                    ng-model=\"inputCard.pings\" 
                                    ng-class=\"{ 'error-input-text' : !recoveryPass.card_ping.\$valid }\">
                                <div class=\"icon-load\" ng-if=\"showLoading\">
                                    <img width=\"50\" src=\"../../../modules/custom/ngt_login/asset/image/loading.gif\" alt=\"\">
                                </div>
                                <p class=\"error-message-input\" ng-if=\"!recoveryPass.card_ping.\$valid\" ng-bind=\"errorPingInput\"></p>
                            </div>
                        </div>

                        <div class=\"cards\" ng-show=\"step == 3\">
                            <div class=\"inner-addon leftaddon\">
                                <i class=\"icon pass\"></i>
                                <input type=\"password\" id=\"pass\" name=\"pass\" placeholder=\"{{ config.password }}\" maxlength=\"20\" autocomplete=\"off\"
                                    ng-model=\"inputCard.pass\" 
                                    ng-class=\"{ 'error-input-text' : !recoveryPass.card_pass.\$valid }\">
                            </div>

                            <div class=\"inner-addon leftaddon\">
                                <ul>
                                    <li class=\"criteriar-pass criteriar-{[{ key }]}\"
                                        ng-repeat=\"(key, value) in pass_criteriar\">{[{ value }]}</li>
                                </ul>
                            </div>

                            <div class=\"inner-addon leftaddon\">
                                <i class=\"icon pass\"></i>
                                <input type=\"password\" id=\"repeat_pass\" name=\"repeat_pass\" placeholder=\"{{ config.repeat_password }}\" maxlength=\"20\" autocomplete=\"off\"
                                    ng-model=\"inputCard.repeat_pass\" 
                                    ng-class=\"{ 'error-input-text' : !recoveryPass.card_repeat_pass.\$valid }\">
                            </div>
                            
                            <div>
                                <div class=\"icon-load\" ng-if=\"showLoading\">
                                    <img width=\"50\" src=\"../../../modules/custom/ngt_login/asset/image/loading.gif\" alt=\"\">
                                </div>
                                <p class=\"error-message-input\" ng-if=\"ErrorRecoveryPass\" ng-bind=\"errorPassInput\"></p>
                            </div>
                        </div>

                        <div class=\"cards\" ng-show=\"step == 4\">
                            <div>
                                <p class=\"message_status_recovery\">{[{ messageStatusRecovery }]}</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"recovery-form__submit\">
                        <div class=\"action-next\">
                            <button 
                                ng-click=\"(step <= 3) ? actionNext() : actionLogin()\"
                                ng-disabled=\"btnDisabled\">{[{ txtBtnNext }]}</button>
                        </div>
                        <div class=\"action-return\">
                            <button 
                                ng-if=\"step <= 3\"
                                ng-click=\"(step <= 3) ? actionCancell() : actionReturn()\"
                                ng-disabled=\"btnDisabled\">{[{ txtBtnReturn }]}</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
", "modules/custom/ngt_login/templates/block--recovery-pass.html.twig", "/Applications/MAMP/htdocs/ilar-v2/web/modules/custom/ngt_login/templates/block--recovery-pass.html.twig");
    }
}
