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

/* modules/custom/ngt_evaluation/templates/block--evaluation-form.html.twig */
class __TwigTemplate_695d62656c8a5fb73cf49853d38a6e945628ef16fbc63dcf9151f21ae8a42177 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "for" => 37, "if" => 62];
        $filters = ["replace" => 1, "escape" => 2, "raw" => 11, "lower" => 82];
        $functions = ["range" => 37];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['replace', 'escape', 'raw', 'lower'],
                ['range']
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
    <div class=\"main-content\">
        <div class=\"top\">
            <!-- <h1 class=\"title module\">Commodo lígula eget dolor aenean dis parturient montes</h1> -->
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
        </div>
        <div class=\"presentation evaluation\" ng-if=\"tabs == 'presentation'\">
            <h2>Evaluación Final</h2>
            <div class=\"description\">
                ";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["data"] ?? null), "body", [])));
        echo "
            </div>
            <div class=\"detail\">
                <div class=\"time\">
                    <i>minute</i>
                    <span>";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["data"] ?? null), "minute", [])), "html", null, true);
        echo " minutos</span>
                </div>
                <div class=\"questions\">
                    <i>question</i>
                    <span>";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["data"] ?? null), "count_question", [])), "html", null, true);
        echo " preguntas</span>
                </div>
                <div class=\"average\">
                    <i>average</i>
                    <span>";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["data"] ?? null), "average", [])), "html", null, true);
        echo "% puntaje de aprobación</span>
                </div>
            </div>
            <div class=\"actions\">
                <button class=\"start-evaluation\" ng-click=\"changeTabs('evaluation')\" ng-disabled=\"isDisabledStart\">Empezar</button>
                <button class=\"return\" ng-click=\"returnPrevPage()\">Volver</button>
            </div>
        </div>

        <div class=\"navigation question\" ng-show=\"tabs == 'evaluation'\">
            <h2>Evaluación final</h2>
            <div class=\"nav\">
                <ul>
                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, $this->getAttribute(($context["data"] ?? null), "count_question", [])));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 38
            echo "                        <li id=\"question_";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["i"] + 1), "html", null, true);
            echo "\" >Pregunta ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["i"] + 1), "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                 </ul>
                <span>Pregunta {[{ evaluationNav }]} de {[{ maxNavValue }]}</span>
            </div>
            <!--<div class=\"clock\">
                <span class=\"time\">Tiempo restante:</span>
                <span>01:10:20</span>
            </div>-->
        </div>


        <div class=\"form-question\" ng-show=\"tabs == 'evaluation'\">

            <form action=\"\">
                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "questions", []));
        foreach ($context['_seq'] as $context["key"] => $context["question"]) {
            // line 54
            echo "                    <div id=\"question-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["key"] + 1), "html", null, true);
            echo "\" class=\"questions ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["question"], "type", [])), "html", null, true);
            echo "\" ng-show=\"evaluationNav == '";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["key"] + 1), "html", null, true);
            echo "' && !result\">
                        
                        <h3>Pregunta ";
            // line 56
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["key"] + 1), "html", null, true);
            echo "</h3>
                        <p class=\"description\">Tipo de pregunta: ";
            // line 57
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["question"], "typeDetail", [])), "html", null, true);
            echo "</p>
                        <p class=\"description\">";
            // line 58
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["question"], "title", [])), "html", null, true);
            echo "</p>
                        <div class=\"response\">
                            <fieldset>

                                ";
            // line 62
            if (($this->getAttribute($context["question"], "type", []) == "correctOption")) {
                // line 63
                echo "                                    
                                    ";
                // line 64
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["question"], "possibleAnswers", []));
                foreach ($context['_seq'] as $context["i"] => $context["possibleAnswers"]) {
                    echo " 
                                        <div>
                                            <input type=\"radio\" name=\"response_";
                    // line 66
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["key"] + 1), "html", null, true);
                    echo "\" id=\"response_";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["key"] + 1), "html", null, true);
                    echo "_";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["i"] + 1), "html", null, true);
                    echo "\"  ng-click=\"checkAnswer(";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"]), "html", null, true);
                    echo ", ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["i"] + 1), "html", null, true);
                    echo ", '";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["question"], "type", [])), "html", null, true);
                    echo "')\">
                                            <label for=\"response_";
                    // line 67
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["key"] + 1), "html", null, true);
                    echo "_";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["i"] + 1), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["possibleAnswers"], "value", [])), "html", null, true);
                    echo "</label>
                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['possibleAnswers'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "
                                ";
            } elseif (($this->getAttribute(            // line 71
$context["question"], "type", []) == "multiple")) {
                // line 72
                echo "
                                    ";
                // line 73
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["question"], "possibleAnswers", []));
                foreach ($context['_seq'] as $context["i"] => $context["possibleAnswers"]) {
                    echo " 
                                        <div>
                                            <input type=\"radio\" name=\"response_";
                    // line 75
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["key"] + 1), "html", null, true);
                    echo "_";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["i"] + 1), "html", null, true);
                    echo "\" id=\"response_";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["key"] + 1), "html", null, true);
                    echo "_";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["i"] + 1), "html", null, true);
                    echo "\" ng-click=\"checkAnswer(";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"]), "html", null, true);
                    echo ", ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["i"] + 1), "html", null, true);
                    echo ", '";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["question"], "type", [])), "html", null, true);
                    echo "')\">
                                            <label for=\"response_";
                    // line 76
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["key"] + 1), "html", null, true);
                    echo "_";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["i"] + 1), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["possibleAnswers"], "value", [])), "html", null, true);
                    echo "</label>
                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['possibleAnswers'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "
                                ";
            } elseif (($this->getAttribute(            // line 80
$context["question"], "type", []) == "bool")) {
                // line 81
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["question"], "possibleAnswers", []));
                foreach ($context['_seq'] as $context["i"] => $context["possibleAnswers"]) {
                    echo " 
                                        ";
                    // line 82
                    $context["typeBool"] = twig_lower_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["possibleAnswers"], "value", [])));
                    // line 83
                    echo "                                        <div>
                                            <button id=\"response_";
                    // line 84
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["key"] + 1), "html", null, true);
                    echo "_";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["i"] + 1), "html", null, true);
                    echo "\" 
                                                ng-click=\"checkAnswer(";
                    // line 85
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"]), "html", null, true);
                    echo ", '";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_lower_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["typeBool"] ?? null))), "html", null, true);
                    echo "', '";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["question"], "type", [])), "html", null, true);
                    echo "'); changeClassBool(";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"]), "html", null, true);
                    echo ", '";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["possibleAnswers"], "value", [])), "html", null, true);
                    echo "', 'response_";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["key"] + 1), "html", null, true);
                    echo "_";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["i"] + 1), "html", null, true);
                    echo "', 'response_";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["key"] + 1), "html", null, true);
                    echo "')\" 
                                                class=\"";
                    // line 86
                    if ((($context["typeBool"] ?? null) == "verdadero")) {
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("true");
                    } else {
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("false");
                    }
                    echo " bool response_";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["key"] + 1), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["possibleAnswers"], "value", [])), "html", null, true);
                    echo "</button>
                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['possibleAnswers'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "                                ";
            }
            // line 90
            echo "                              
                                
                            </fieldset>
                        </div>
                    </div>
                
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "
                <div id=\"question-last\" class=\"questions result\" ng-show=\"result\">
                        
                    <h3>Puntaje</h3>
                    <p class=\"description\">{[{ messageGeneral }]}</p>
                    
                    <div class=\"response\">
                        <fieldset>
                        
                        <div class=\"inner-addon leftaddon result-evaluation\">
                            <i ng-class=\"(status_evaluation == true) ? 'icon ready' : 'icon failed'\"></i>
                            <span ng-class=\"(status_evaluation == true) ? 'ready' : 'failed'\">{[{ averageFinal }]}%</span>
                        </div>

                        <h4>{[{ titleMessageFinal }]}</h4>
                        <p class=\"description message bold\" ng-show=\"showMessageFinalResul\">{[{ messageFinalResul }]}</p>
                        
                            
                        </fieldset>
                    </div>
                </div>

               
                
            </form>

            <div class=\"action evaluation\" ng-show=\"!result\">
                <button class=\"return\" ng-click=\"changeEvaluationNav('prev')\" ng-disabled=\"minNavValue == evaluationNav\">Anterior</button>
                <button class=\"next\" ng-click=\"changeEvaluationNav('next')\" ng-show=\"maxNavValue != evaluationNav\" ng-disabled=\"isDisabledNext\">Siguiente</button>
                <button class=\"send\" ng-click=\"sendAnswers()\" ng-show=\"maxNavValue == evaluationNav\" ng-disabled=\"isDisabledSendAnswers\">Enviar respuestas</button>
            </div>

            <div class=\"action evaluation result final\" ng-show=\"result\">
                <button class=\"return\" ng-click=\"returnToCourseLink()\" >{[{ returnToCourse }]}</button>
                <button class=\"next\" ng-click=\"actionAfterResult()\">{[{ textBtnFinal }]}</button>
            </div>
        
        </div>



    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/ngt_evaluation/templates/block--evaluation-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 97,  317 => 90,  314 => 89,  297 => 86,  279 => 85,  273 => 84,  270 => 83,  268 => 82,  261 => 81,  259 => 80,  256 => 79,  243 => 76,  227 => 75,  220 => 73,  217 => 72,  215 => 71,  212 => 70,  199 => 67,  185 => 66,  178 => 64,  175 => 63,  173 => 62,  166 => 58,  162 => 57,  158 => 56,  148 => 54,  144 => 53,  129 => 40,  118 => 38,  114 => 37,  98 => 24,  91 => 20,  84 => 16,  76 => 11,  57 => 2,  55 => 1,);
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
    <div class=\"main-content\">
        <div class=\"top\">
            <!-- <h1 class=\"title module\">Commodo lígula eget dolor aenean dis parturient montes</h1> -->
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
        </div>
        <div class=\"presentation evaluation\" ng-if=\"tabs == 'presentation'\">
            <h2>Evaluación Final</h2>
            <div class=\"description\">
                {{ data.body|raw }}
            </div>
            <div class=\"detail\">
                <div class=\"time\">
                    <i>minute</i>
                    <span>{{ data.minute }} minutos</span>
                </div>
                <div class=\"questions\">
                    <i>question</i>
                    <span>{{ data.count_question }} preguntas</span>
                </div>
                <div class=\"average\">
                    <i>average</i>
                    <span>{{ data.average }}% puntaje de aprobación</span>
                </div>
            </div>
            <div class=\"actions\">
                <button class=\"start-evaluation\" ng-click=\"changeTabs('evaluation')\" ng-disabled=\"isDisabledStart\">Empezar</button>
                <button class=\"return\" ng-click=\"returnPrevPage()\">Volver</button>
            </div>
        </div>

        <div class=\"navigation question\" ng-show=\"tabs == 'evaluation'\">
            <h2>Evaluación final</h2>
            <div class=\"nav\">
                <ul>
                    {% for i in range(0, data.count_question) %}
                        <li id=\"question_{{ i + 1 }}\" >Pregunta {{ i + 1 }}</li>
                    {% endfor %}
                 </ul>
                <span>Pregunta {[{ evaluationNav }]} de {[{ maxNavValue }]}</span>
            </div>
            <!--<div class=\"clock\">
                <span class=\"time\">Tiempo restante:</span>
                <span>01:10:20</span>
            </div>-->
        </div>


        <div class=\"form-question\" ng-show=\"tabs == 'evaluation'\">

            <form action=\"\">
                {% for key, question in data.questions %}
                    <div id=\"question-{{ key + 1 }}\" class=\"questions {{ question.type }}\" ng-show=\"evaluationNav == '{{ key + 1 }}' && !result\">
                        
                        <h3>Pregunta {{ key + 1  }}</h3>
                        <p class=\"description\">Tipo de pregunta: {{ question.typeDetail  }}</p>
                        <p class=\"description\">{{ question.title }}</p>
                        <div class=\"response\">
                            <fieldset>

                                {% if question.type == 'correctOption' %}
                                    
                                    {% for i, possibleAnswers in question.possibleAnswers %} 
                                        <div>
                                            <input type=\"radio\" name=\"response_{{ key + 1 }}\" id=\"response_{{ key + 1 }}_{{ i + 1 }}\"  ng-click=\"checkAnswer({{ key }}, {{ i + 1 }}, '{{ question.type }}')\">
                                            <label for=\"response_{{ key + 1 }}_{{ i + 1 }}\">{{ possibleAnswers.value }}</label>
                                        </div>
                                    {% endfor %}

                                {% elseif question.type == 'multiple' %}

                                    {% for i, possibleAnswers in question.possibleAnswers %} 
                                        <div>
                                            <input type=\"radio\" name=\"response_{{ key + 1 }}_{{ i + 1 }}\" id=\"response_{{ key + 1 }}_{{ i + 1 }}\" ng-click=\"checkAnswer({{ key }}, {{ i + 1 }}, '{{ question.type }}')\">
                                            <label for=\"response_{{ key + 1 }}_{{ i + 1 }}\">{{ possibleAnswers.value }}</label>
                                        </div>
                                    {% endfor %}

                                {% elseif question.type == 'bool' %}
                                    {% for i, possibleAnswers in question.possibleAnswers %} 
                                        {% set typeBool = possibleAnswers.value|lower %}
                                        <div>
                                            <button id=\"response_{{ key + 1 }}_{{ i + 1 }}\" 
                                                ng-click=\"checkAnswer({{ key }}, '{{ typeBool|lower }}', '{{ question.type }}'); changeClassBool({{ key }}, '{{ possibleAnswers.value }}', 'response_{{ key + 1 }}_{{ i + 1 }}', 'response_{{ key + 1 }}')\" 
                                                class=\"{% if typeBool == 'verdadero' %}{{ 'true' }}{% else %}{{ 'false' }}{% endif %} bool response_{{ key + 1 }}\">{{ possibleAnswers.value }}</button>
                                        </div>
                                    {% endfor %}
                                {% endif %}
                              
                                
                            </fieldset>
                        </div>
                    </div>
                
                {% endfor %}

                <div id=\"question-last\" class=\"questions result\" ng-show=\"result\">
                        
                    <h3>Puntaje</h3>
                    <p class=\"description\">{[{ messageGeneral }]}</p>
                    
                    <div class=\"response\">
                        <fieldset>
                        
                        <div class=\"inner-addon leftaddon result-evaluation\">
                            <i ng-class=\"(status_evaluation == true) ? 'icon ready' : 'icon failed'\"></i>
                            <span ng-class=\"(status_evaluation == true) ? 'ready' : 'failed'\">{[{ averageFinal }]}%</span>
                        </div>

                        <h4>{[{ titleMessageFinal }]}</h4>
                        <p class=\"description message bold\" ng-show=\"showMessageFinalResul\">{[{ messageFinalResul }]}</p>
                        
                            
                        </fieldset>
                    </div>
                </div>

               
                
            </form>

            <div class=\"action evaluation\" ng-show=\"!result\">
                <button class=\"return\" ng-click=\"changeEvaluationNav('prev')\" ng-disabled=\"minNavValue == evaluationNav\">Anterior</button>
                <button class=\"next\" ng-click=\"changeEvaluationNav('next')\" ng-show=\"maxNavValue != evaluationNav\" ng-disabled=\"isDisabledNext\">Siguiente</button>
                <button class=\"send\" ng-click=\"sendAnswers()\" ng-show=\"maxNavValue == evaluationNav\" ng-disabled=\"isDisabledSendAnswers\">Enviar respuestas</button>
            </div>

            <div class=\"action evaluation result final\" ng-show=\"result\">
                <button class=\"return\" ng-click=\"returnToCourseLink()\" >{[{ returnToCourse }]}</button>
                <button class=\"next\" ng-click=\"actionAfterResult()\">{[{ textBtnFinal }]}</button>
            </div>
        
        </div>



    </div>
</div>", "modules/custom/ngt_evaluation/templates/block--evaluation-form.html.twig", "/Applications/MAMP/htdocs/ilar-v2/web/modules/custom/ngt_evaluation/templates/block--evaluation-form.html.twig");
    }
}
