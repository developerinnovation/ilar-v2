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

/* modules/custom/ngt_login/templates/block--register-user.html.twig */
class __TwigTemplate_0aef9b60fae2c5ee27dc400ab9fce46e1118b6661e27a8fbacbe80547a65e242 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2];
        $filters = ["replace" => 2, "escape" => 3, "raw" => 116];
        $functions = ["file_url" => 4];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['replace', 'escape', 'raw'],
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
    <div class=\"main-form-register-user\"  style=\"background-image:url(";
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
        <div class=\"register-user-form login-form__wrapper register-user\">
            <form>
                <div class=\"register-user-form__top recovery\">
                    <h3 ng-if=\"step < 4\">";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["config"] ?? null), "title", [])), "html", null, true);
        echo "</h3>
                    <h3 ng-show=\"step == 4\">";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["config"] ?? null), "title_picture", [])), "html", null, true);
        echo "</h3>

                    <div ng-show=\"step == 6\">
                        <div class=\"inner-addon leftaddon\" ng-style=\"(status_register == false) ? style : ''\">
                            <i ng-class=\"(status_register == true) ? 'icon ready' : 'icon failed'\"></i>
                        </div>
                        <div class=\"mensaje\">
                            <h4>{[{ status_register_label }]}</h4>
                        </div>
                    </div>

                    <ul class=\"nav-step\">
                        <li ng-class=\"(step == 1) ? 'active' : ''\">step1</li>
                        <li ng-class=\"(step == 2) ? 'active' : ''\">step2</li>
                        <li ng-class=\"(step == 3) ? 'active' : ''\">step3</li>
                        <li ng-class=\"(step == 4) ? 'active' : ''\">step4</li>
                        <li ng-class=\"(step == 5) ? 'active' : ''\">step5</li>
                        <li ng-class=\"(step == 6) ? 'active' : ''\">step6</li>
                    </ul>
                    
                    <div class=\"input-form\">
                        <p ng-if=\"step < 5\" class=\"message_login\">{[{ message }]}</p>
                        
                        <div class=\"cards\" ng-show=\"step == 1\">
                            <div>
                                <div class=\"inner-addon leftaddon\">
                                    <i class=\"icon user\"></i>
                                    <input class=\"input-name\" type=\"text\" ng-model=\"form.name\" id=\"name\" name=\"name\" maxlength=\"100\" placeholder=\"";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["config"] ?? null), "name", [])), "html", null, true);
        echo "\">
                                </div>
                                
                                <div class=\"inner-addon leftaddon\">
                                    <i class=\"icon mail\"></i>
                                    <input class=\"input-mail\" type=\"text\" ng-model=\"form.email\" id=\"email\" name=\"email\" maxlength=\"100\" placeholder=\"";
        // line 46
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["config"] ?? null), "email", [])), "html", null, true);
        echo "\">
                                </div>
                                
                                <div class=\"inner-addon leftaddon\">
                                    <i class=\"icon date\"></i>
                                    <input class=\"input-date\" type=\"text\" placeholder=\"Fecha de nacimiento\" onfocus=\"(this.type='date')\" onfocusout=\"(this.type='text')\" ng-model=\"form.date\" id=\"date\" name=\"date\" placeholder=\"";
        // line 51
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["config"] ?? null), "date", [])), "html", null, true);
        echo "\">
                                </div>
                                
                                <div class=\"inner-addon leftaddon\">
                                    <i class=\"icon profesion\"></i>
                                    <select class=\"select-profession\"  name=\"profession\" id=\"profession\" ng-model=\"form.professionSelect\">
                                        <option value=\"\" disabled>";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["config"] ?? null), "profession", [])), "html", null, true);
        echo "</option>
                                        <option value=\"{[{ value.tid }]}\" ng-repeat=\"(key, value) in profession\">{[{ value.name }]}</option>
                                    </select>
                                </div>
                                
                            </div>
                        </div>

                        <div class=\"cards\" ng-show=\"step == 2\">
                            <div>
                                <div class=\"inner-addon leftaddon\">
                                    <i class=\"icon ubicacion\"></i>
                                    <select class=\"select-country place-select\" name=\"country\" id=\"country\" ng-disabled=\"enableCountry\" ng-model=\"form.countrySelect\" ng-change=\"getMoreTerms('state')\">
                                        <option value=\"\" selected disabled>";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["config"] ?? null), "country", [])), "html", null, true);
        echo "</option>
                                        <option value=\"{[{ value.tid }]}\" ng-repeat=\"(key, value) in country\">{[{ value.name }]}</option>
                                    </select>
                                </div>  

                                <div class=\"inner-addon leftaddon\">
                                    <i class=\"icon ubicacion\"></i>
                                    <select class=\"select-state place-select\" name=\"state\" id=\"state\" ng-disabled=\"enableState\" ng-model=\"form.stateSelect\" ng-change=\"getMoreTerms('city')\">
                                        <option value=\"\" selected disabled>";
        // line 78
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["config"] ?? null), "state", [])), "html", null, true);
        echo "</option>
                                        <option value=\"{[{ value.tid }]}\"  ng-repeat=\"(key, value) in state\">{[{ value.name }]}</option>
                                    </select>
                                </div>  

                                <div class=\"inner-addon leftaddon\">
                                    <i class=\"icon ubicacion\"></i>
                                    <select class=\"select-city place-select\" name=\"city\" id=\"city\" ng-disabled=\"enableCity\" ng-model=\"form.citySelect\">
                                        <option value=\"\" selected disabled>";
        // line 86
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["config"] ?? null), "city", [])), "html", null, true);
        echo "</option>
                                        <option value=\"{[{ value.tid }]}\" ng-repeat=\"(key, value) in city\">{[{ value.name }]}</option>
                                    </select>
                                </div>    

                            </div>
                        </div>

                        <div class=\"cards\" ng-show=\"step == 3\">
                            <div>
                                <div class=\"inner-addon leftaddon\">
                                    <i class=\"icon pass\"></i>
                                    <input id=\"pass\" class=\"input-password\" type=\"password\" name=\"password\" id=\"password\" maxlength=\"10\" placeholder=\"";
        // line 98
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["config"] ?? null), "password", [])), "html", null, true);
        echo "\"
                                        ng-model=\"form.pass\">
                                </div>

                                <div class=\"inner-addon leftaddon\">
                                    <ul>
                                        <li class=\"criteriar-pass criteriar-{[{ key }]}\"  ng-repeat=\"(key, value) in pass_criteriar\">{[{ value }]}</li>
                                    </ul>
                                </div>

                                <div class=\"inner-addon leftaddon\">
                                    <i class=\"icon pass\"></i>
                                    <input id=\"repeat-pass\" class=\"input-password\" type=\"password\" name=\"repeatPassword\" id=\"repeatPassword\" maxlength=\"10\" placeholder=\"";
        // line 110
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["config"] ?? null), "repeat_password", [])), "html", null, true);
        echo "\"
                                        ng-model=\"form.repeat_pass\">
                                </div>
                               
                                <div class=\"term-and-conditions\">
                                    <input ng-click=\"checkTermConditions()\" type=\"radio\" name=\"term-condition-check\" id=\"term-condition-check\">
                                    <label for=\"term-condition-check\">";
        // line 116
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["terms_text"] ?? null)));
        echo "</label>
                                </div>
                            </div>
                        </div>

                        <div class=\"cards\" ng-show=\"step == 4\">
                            <div>
                                <img id=\"previewImgLoadPic\" class=\"icon camera\" src=\"../../../modules/custom/ngt_login/asset/image/load-pic.png\" width=\"72\"; height=\"72\" alt=\"\" ng-click=\"imgLoadPic()\" ng-model=\"form.pic\">
                                <p class=\"message_status_load_pic\">{[{ messageStatusLoadPic }]}</p>
                                <div class=\"none\">
                                    <input type=\"file\" id=\"imgLoadPic\" name=\"img\" accept=\"image/*\">
                                </div>
                                <button ng-click=\"omitLoadPic()\">{[{ txtBtnOmit }]}</button>
                            </div>
                        </div>

                        <div class=\"cards\" ng-show=\"step == 5\">
                            <div>
                                <img id=\"previewImgLoadPic\" class=\"icon camera\" src=\"../../../modules/custom/ngt_login/asset/image/loading.gif\" width=\"72\"; height=\"72\" alt=\"\">
                                <h4>{[{ labelStatusRegister }]}</h4>
                            </div>
                        </div>

                        <div class=\"cards\" ng-show=\"step == 6\">
                            <div>
                                <p class=\"message_status_register\" ng-class=\"(status_register == true) ? 'icon check' : 'icon fall'\" >{[{ messageStatusRegister }]}</p>
                                <h4>{[{ labelStatusRegister }]}</h4>
                            </div>
                        </div>

                    </div>

                    <div class=\"register-user-form__submit\">
                        <div class=\"action-next\" ng-if=\"!userExist\">
                            <button 
                                ng-click=\"actionNext()\"
                                ng-disabled=\"btnDisabled\">{[{ txtBtnNext }]}</button>
                        </div>
                        <div class=\"action-return\">
                            <button 
                                ng-if=\"step <= 5\"
                                ng-click=\"(step <= 3) ? actionCancell() : actionReturn()\"
                                ng-disabled=\"btnDisabled\">{[{ txtBtnReturn }]}</button>
                        </div>
                        <div class=\"action-return\" ng-if=\"userExist\">
                            <button 
                                ng-click=\"gotoPasswordRecovery()\">{[{ txtBtnReturn }]}</button>
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
        return "modules/custom/ngt_login/templates/block--register-user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 116,  213 => 110,  198 => 98,  183 => 86,  172 => 78,  161 => 70,  145 => 57,  136 => 51,  128 => 46,  120 => 41,  90 => 14,  86 => 13,  77 => 7,  71 => 4,  60 => 3,  58 => 2,  55 => 1,);
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
    <div class=\"main-form-register-user\"  style=\"background-image:url({{ file_url(image_login_background_url) }}); background-repeat: no-repeat;\">
        <div class=\"image-logo__wrapper\">
            <figure> 
                <img src=\"{{ file_url(image_logo_url) }}\">
            </figure>
        </div>
        <div class=\"register-user-form login-form__wrapper register-user\">
            <form>
                <div class=\"register-user-form__top recovery\">
                    <h3 ng-if=\"step < 4\">{{ config.title }}</h3>
                    <h3 ng-show=\"step == 4\">{{ config.title_picture }}</h3>

                    <div ng-show=\"step == 6\">
                        <div class=\"inner-addon leftaddon\" ng-style=\"(status_register == false) ? style : ''\">
                            <i ng-class=\"(status_register == true) ? 'icon ready' : 'icon failed'\"></i>
                        </div>
                        <div class=\"mensaje\">
                            <h4>{[{ status_register_label }]}</h4>
                        </div>
                    </div>

                    <ul class=\"nav-step\">
                        <li ng-class=\"(step == 1) ? 'active' : ''\">step1</li>
                        <li ng-class=\"(step == 2) ? 'active' : ''\">step2</li>
                        <li ng-class=\"(step == 3) ? 'active' : ''\">step3</li>
                        <li ng-class=\"(step == 4) ? 'active' : ''\">step4</li>
                        <li ng-class=\"(step == 5) ? 'active' : ''\">step5</li>
                        <li ng-class=\"(step == 6) ? 'active' : ''\">step6</li>
                    </ul>
                    
                    <div class=\"input-form\">
                        <p ng-if=\"step < 5\" class=\"message_login\">{[{ message }]}</p>
                        
                        <div class=\"cards\" ng-show=\"step == 1\">
                            <div>
                                <div class=\"inner-addon leftaddon\">
                                    <i class=\"icon user\"></i>
                                    <input class=\"input-name\" type=\"text\" ng-model=\"form.name\" id=\"name\" name=\"name\" maxlength=\"100\" placeholder=\"{{ config.name }}\">
                                </div>
                                
                                <div class=\"inner-addon leftaddon\">
                                    <i class=\"icon mail\"></i>
                                    <input class=\"input-mail\" type=\"text\" ng-model=\"form.email\" id=\"email\" name=\"email\" maxlength=\"100\" placeholder=\"{{ config.email }}\">
                                </div>
                                
                                <div class=\"inner-addon leftaddon\">
                                    <i class=\"icon date\"></i>
                                    <input class=\"input-date\" type=\"text\" placeholder=\"Fecha de nacimiento\" onfocus=\"(this.type='date')\" onfocusout=\"(this.type='text')\" ng-model=\"form.date\" id=\"date\" name=\"date\" placeholder=\"{{ config.date }}\">
                                </div>
                                
                                <div class=\"inner-addon leftaddon\">
                                    <i class=\"icon profesion\"></i>
                                    <select class=\"select-profession\"  name=\"profession\" id=\"profession\" ng-model=\"form.professionSelect\">
                                        <option value=\"\" disabled>{{ config.profession }}</option>
                                        <option value=\"{[{ value.tid }]}\" ng-repeat=\"(key, value) in profession\">{[{ value.name }]}</option>
                                    </select>
                                </div>
                                
                            </div>
                        </div>

                        <div class=\"cards\" ng-show=\"step == 2\">
                            <div>
                                <div class=\"inner-addon leftaddon\">
                                    <i class=\"icon ubicacion\"></i>
                                    <select class=\"select-country place-select\" name=\"country\" id=\"country\" ng-disabled=\"enableCountry\" ng-model=\"form.countrySelect\" ng-change=\"getMoreTerms('state')\">
                                        <option value=\"\" selected disabled>{{ config.country }}</option>
                                        <option value=\"{[{ value.tid }]}\" ng-repeat=\"(key, value) in country\">{[{ value.name }]}</option>
                                    </select>
                                </div>  

                                <div class=\"inner-addon leftaddon\">
                                    <i class=\"icon ubicacion\"></i>
                                    <select class=\"select-state place-select\" name=\"state\" id=\"state\" ng-disabled=\"enableState\" ng-model=\"form.stateSelect\" ng-change=\"getMoreTerms('city')\">
                                        <option value=\"\" selected disabled>{{ config.state }}</option>
                                        <option value=\"{[{ value.tid }]}\"  ng-repeat=\"(key, value) in state\">{[{ value.name }]}</option>
                                    </select>
                                </div>  

                                <div class=\"inner-addon leftaddon\">
                                    <i class=\"icon ubicacion\"></i>
                                    <select class=\"select-city place-select\" name=\"city\" id=\"city\" ng-disabled=\"enableCity\" ng-model=\"form.citySelect\">
                                        <option value=\"\" selected disabled>{{ config.city }}</option>
                                        <option value=\"{[{ value.tid }]}\" ng-repeat=\"(key, value) in city\">{[{ value.name }]}</option>
                                    </select>
                                </div>    

                            </div>
                        </div>

                        <div class=\"cards\" ng-show=\"step == 3\">
                            <div>
                                <div class=\"inner-addon leftaddon\">
                                    <i class=\"icon pass\"></i>
                                    <input id=\"pass\" class=\"input-password\" type=\"password\" name=\"password\" id=\"password\" maxlength=\"10\" placeholder=\"{{ config.password }}\"
                                        ng-model=\"form.pass\">
                                </div>

                                <div class=\"inner-addon leftaddon\">
                                    <ul>
                                        <li class=\"criteriar-pass criteriar-{[{ key }]}\"  ng-repeat=\"(key, value) in pass_criteriar\">{[{ value }]}</li>
                                    </ul>
                                </div>

                                <div class=\"inner-addon leftaddon\">
                                    <i class=\"icon pass\"></i>
                                    <input id=\"repeat-pass\" class=\"input-password\" type=\"password\" name=\"repeatPassword\" id=\"repeatPassword\" maxlength=\"10\" placeholder=\"{{ config.repeat_password }}\"
                                        ng-model=\"form.repeat_pass\">
                                </div>
                               
                                <div class=\"term-and-conditions\">
                                    <input ng-click=\"checkTermConditions()\" type=\"radio\" name=\"term-condition-check\" id=\"term-condition-check\">
                                    <label for=\"term-condition-check\">{{ terms_text|raw }}</label>
                                </div>
                            </div>
                        </div>

                        <div class=\"cards\" ng-show=\"step == 4\">
                            <div>
                                <img id=\"previewImgLoadPic\" class=\"icon camera\" src=\"../../../modules/custom/ngt_login/asset/image/load-pic.png\" width=\"72\"; height=\"72\" alt=\"\" ng-click=\"imgLoadPic()\" ng-model=\"form.pic\">
                                <p class=\"message_status_load_pic\">{[{ messageStatusLoadPic }]}</p>
                                <div class=\"none\">
                                    <input type=\"file\" id=\"imgLoadPic\" name=\"img\" accept=\"image/*\">
                                </div>
                                <button ng-click=\"omitLoadPic()\">{[{ txtBtnOmit }]}</button>
                            </div>
                        </div>

                        <div class=\"cards\" ng-show=\"step == 5\">
                            <div>
                                <img id=\"previewImgLoadPic\" class=\"icon camera\" src=\"../../../modules/custom/ngt_login/asset/image/loading.gif\" width=\"72\"; height=\"72\" alt=\"\">
                                <h4>{[{ labelStatusRegister }]}</h4>
                            </div>
                        </div>

                        <div class=\"cards\" ng-show=\"step == 6\">
                            <div>
                                <p class=\"message_status_register\" ng-class=\"(status_register == true) ? 'icon check' : 'icon fall'\" >{[{ messageStatusRegister }]}</p>
                                <h4>{[{ labelStatusRegister }]}</h4>
                            </div>
                        </div>

                    </div>

                    <div class=\"register-user-form__submit\">
                        <div class=\"action-next\" ng-if=\"!userExist\">
                            <button 
                                ng-click=\"actionNext()\"
                                ng-disabled=\"btnDisabled\">{[{ txtBtnNext }]}</button>
                        </div>
                        <div class=\"action-return\">
                            <button 
                                ng-if=\"step <= 5\"
                                ng-click=\"(step <= 3) ? actionCancell() : actionReturn()\"
                                ng-disabled=\"btnDisabled\">{[{ txtBtnReturn }]}</button>
                        </div>
                        <div class=\"action-return\" ng-if=\"userExist\">
                            <button 
                                ng-click=\"gotoPasswordRecovery()\">{[{ txtBtnReturn }]}</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
", "modules/custom/ngt_login/templates/block--register-user.html.twig", "/Applications/MAMP/htdocs/ilar-v2/web/modules/custom/ngt_login/templates/block--register-user.html.twig");
    }
}
