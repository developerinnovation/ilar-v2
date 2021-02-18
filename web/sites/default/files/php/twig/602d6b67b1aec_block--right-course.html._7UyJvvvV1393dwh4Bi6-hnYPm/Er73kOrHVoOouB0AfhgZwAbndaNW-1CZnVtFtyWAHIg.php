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

/* modules/custom/ngt_general/templates/node-course/block--right-course.html.twig */
class __TwigTemplate_c53ccbef2839a12e890fbccdc34162c5228c3320037619d8eaf7e3c764fcd4b0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "for" => 29, "if" => 59];
        $filters = ["replace" => 1, "escape" => 2, "image_style" => 9, "raw" => 25];
        $functions = ["drupal_block" => 107];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['replace', 'escape', 'image_style', 'raw'],
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
        <div class=\"course-action\">
            <select name=\"courseAction\" id=\"courseAction\" ng-model=\"myTabsType\" ng-options=\"item.name for item in tabsType\"></select>
        </div>
        <figure class=\"content-video\" ng-show=\"tab != 'contentCommunity'\">
            <picture class=\"cover-video active\">
                <source srcset=\"";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->imageStyle($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "foto_portada", []), "uri", [])), "360x196"), "html", null, true);
        echo "\" 
                    media=\"(max-width: 767px)\" 
                    alt=\"";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "foto_portada", []), "alt", [])), "html", null, true);
        echo "\" 
                    title=\"";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "foto_portada", []), "title", [])), "html", null, true);
        echo "\">
                <img srcset=\"";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->imageStyle($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "foto_portada", []), "uri", [])), "604x476"), "html", null, true);
        echo "\" 
                    alt=\"";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "foto_portada", []), "alt", [])), "html", null, true);
        echo "\" 
                    title=\"";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "foto_portada", []), "title", [])), "html", null, true);
        echo "\">
            </picture>
            <video id=\"presentation\" src=\"";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "video", [])), "html", null, true);
        echo "\" controls preload=\"auto\">
                Tu navegador no implementa el elemento <code>video</code>.
            </video>
        </figure>
        
        <div class=\"content-tab presentation\" ng-show=\"tab == 'contentPresentation'\">
            <h2>Presentación</h2>
            <div class=\"description\">
                ";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "body", [])));
        echo "
            </div>
            <h3>Coordinadores</h3>
            <div class=\"list\">
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "coordinadores", []));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 30
            echo "                    <div class=\"author\">
                        <figure>
                            <img src=\"";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "picture_uri", [])), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "name_author", [])), "html", null, true);
            echo "\">
                        </figure>
                        <div class=\"info\">
                            <a href=\"";
            // line 35
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "uri", [])), "html", null, true);
            echo "\" class=\"name\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "name_author", [])), "html", null, true);
            echo "</a>
                            <p class=\"profile\">";
            // line 36
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "profile", [])), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </div>
            <h3>Expertos</h3>
            <div class=\"list\">
                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "expertos", []));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 44
            echo "                    <div class=\"author\">
                        <figure>
                            <img src=\"";
            // line 46
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "picture_uri", [])), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "name_author", [])), "html", null, true);
            echo "\">
                        </figure>
                        <div class=\"info\">
                            <a href=\"";
            // line 49
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "uri", [])), "html", null, true);
            echo "\" class=\"name\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "name_author", [])), "html", null, true);
            echo "</a>
                            <p class=\"profile\">";
            // line 50
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "profile", [])), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </div>
        </div>

        <div class=\"content-tab content\" ng-show=\"tab == 'contentMain'\">
            <div class=\"list\">
                ";
        // line 59
        if ( !(null === $this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "modules", []))) {
            // line 60
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "modules", []));
            foreach ($context['_seq'] as $context["key"] => $context["module"]) {
                // line 61
                echo "                        <div class=\"module\">
                            <span class=\"label\">";
                // line 62
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["module"], "moduleId", [])), "html", null, true);
                echo "</span>
                            <h3 class=\"title-module\" id=\"module";
                // line 63
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["module"], "numModule", [])), "html", null, true);
                echo "\"> ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["module"], "titleModule", [])), "html", null, true);
                echo "</h3>
                            ";
                // line 64
                if ( !(null === $this->getAttribute($context["module"], "lessons", []))) {
                    // line 65
                    echo "                                <ul>
                                    ";
                    // line 66
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["module"], "lessons", []));
                    foreach ($context['_seq'] as $context["key"] => $context["lesson"]) {
                        // line 67
                        echo "                                        <li class=\"item class\">
                                            <i class=\"no-login icon play\"></i>
                                            <a href=\"";
                        // line 69
                        if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "showUrl", [])) {
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["lesson"], "url", [])), "html", null, true);
                        } else {
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("#");
                        }
                        echo "\" 
                                                class=\"link\" 
                                                ";
                        // line 71
                        if ( !$this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "showUrl", [])) {
                            echo " ng-click=\"showMessage()\" ";
                        }
                        // line 72
                        echo "                                                data-id-module=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["module"], "nidModule", [])), "html", null, true);
                        echo "\" 
                                                data-num-module=\"";
                        // line 73
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["module"], "numModule", [])), "html", null, true);
                        echo "\" 
                                                data-id-lesson=\"";
                        // line 74
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["lesson"], "nid", [])), "html", null, true);
                        echo "\">
                                                    <h4>";
                        // line 75
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["lesson"], "title", [])), "html", null, true);
                        echo "</h4>
                                            </a>
                                        </li>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['lesson'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 79
                    echo "                                </ul>
                                ";
                    // line 80
                    if ( !(null === $this->getAttribute($context["module"], "quiz", []))) {
                        // line 81
                        echo "                                    <div class=\"evaluation\">
                                        <ul>
                                            <li class=\"item class\">
                                                <i class=\"no-login icon evaluation\"></i>
                                                <a href=\"";
                        // line 85
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["module"], "quiz", []), 0, [], "array"), "url", [])), "html", null, true);
                        echo "\" class=\"link\">
                                                    <h4>Evaluación</h4>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                ";
                    }
                    // line 92
                    echo "                            ";
                }
                // line 93
                echo "                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "                ";
        }
        // line 96
        echo "
                
            </div>
        </div>

        <div class=\"content-tab content\" ng-show=\"tab == 'contentCommunity'\">
            <di class=\"block-comments\">
                ";
        // line 103
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "comment", [])), "html", null, true);
        echo "
            </div>
        </div>
    </div>
    ";
        // line 107
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalBlock("ngt_general_node_more_course", ["node" => $this->getAttribute(($context["node"] ?? null), "id", [])]), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/ngt_general/templates/node-course/block--right-course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 107,  306 => 103,  297 => 96,  294 => 95,  287 => 93,  284 => 92,  274 => 85,  268 => 81,  266 => 80,  263 => 79,  253 => 75,  249 => 74,  245 => 73,  240 => 72,  236 => 71,  227 => 69,  223 => 67,  219 => 66,  216 => 65,  214 => 64,  208 => 63,  204 => 62,  201 => 61,  196 => 60,  194 => 59,  187 => 54,  177 => 50,  171 => 49,  163 => 46,  159 => 44,  155 => 43,  150 => 40,  140 => 36,  134 => 35,  126 => 32,  122 => 30,  118 => 29,  111 => 25,  100 => 17,  95 => 15,  91 => 14,  87 => 13,  83 => 12,  79 => 11,  74 => 9,  57 => 2,  55 => 1,);
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
        <div class=\"course-action\">
            <select name=\"courseAction\" id=\"courseAction\" ng-model=\"myTabsType\" ng-options=\"item.name for item in tabsType\"></select>
        </div>
        <figure class=\"content-video\" ng-show=\"tab != 'contentCommunity'\">
            <picture class=\"cover-video active\">
                <source srcset=\"{{ data[0].foto_portada.uri | image_style('360x196') }}\" 
                    media=\"(max-width: 767px)\" 
                    alt=\"{{ data[0].foto_portada.alt }}\" 
                    title=\"{{ data[0].foto_portada.title }}\">
                <img srcset=\"{{ data[0].foto_portada.uri | image_style('604x476') }}\" 
                    alt=\"{{ data[0].foto_portada.alt }}\" 
                    title=\"{{ data[0].foto_portada.title }}\">
            </picture>
            <video id=\"presentation\" src=\"{{ data[0].video }}\" controls preload=\"auto\">
                Tu navegador no implementa el elemento <code>video</code>.
            </video>
        </figure>
        
        <div class=\"content-tab presentation\" ng-show=\"tab == 'contentPresentation'\">
            <h2>Presentación</h2>
            <div class=\"description\">
                {{ data[0].body|raw }}
            </div>
            <h3>Coordinadores</h3>
            <div class=\"list\">
                {% for key, item in data[0].coordinadores %}
                    <div class=\"author\">
                        <figure>
                            <img src=\"{{ item.picture_uri }}\" alt=\"{{ item.name_author }}\">
                        </figure>
                        <div class=\"info\">
                            <a href=\"{{ item.uri }}\" class=\"name\">{{ item.name_author }}</a>
                            <p class=\"profile\">{{ item.profile }}</p>
                        </div>
                    </div>
                {% endfor %}
            </div>
            <h3>Expertos</h3>
            <div class=\"list\">
                {% for key, item in data[0].expertos %}
                    <div class=\"author\">
                        <figure>
                            <img src=\"{{ item.picture_uri }}\" alt=\"{{ item.name_author }}\">
                        </figure>
                        <div class=\"info\">
                            <a href=\"{{ item.uri }}\" class=\"name\">{{ item.name_author }}</a>
                            <p class=\"profile\">{{ item.profile }}</p>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>

        <div class=\"content-tab content\" ng-show=\"tab == 'contentMain'\">
            <div class=\"list\">
                {% if data[0].modules is not null %}
                    {% for key, module in data[0].modules %}
                        <div class=\"module\">
                            <span class=\"label\">{{ module.moduleId }}</span>
                            <h3 class=\"title-module\" id=\"module{{ module.numModule }}\"> {{ module.titleModule }}</h3>
                            {% if module.lessons is not null %}
                                <ul>
                                    {% for key, lesson in module.lessons %}
                                        <li class=\"item class\">
                                            <i class=\"no-login icon play\"></i>
                                            <a href=\"{% if data[0].showUrl %}{{ lesson.url }}{% else %}{{ '#' }}{% endif %}\" 
                                                class=\"link\" 
                                                {% if not data[0].showUrl %} ng-click=\"showMessage()\" {% endif %}
                                                data-id-module=\"{{ module.nidModule }}\" 
                                                data-num-module=\"{{ module.numModule }}\" 
                                                data-id-lesson=\"{{ lesson.nid }}\">
                                                    <h4>{{ lesson.title }}</h4>
                                            </a>
                                        </li>
                                    {% endfor %}
                                </ul>
                                {% if module.quiz is not null %}
                                    <div class=\"evaluation\">
                                        <ul>
                                            <li class=\"item class\">
                                                <i class=\"no-login icon evaluation\"></i>
                                                <a href=\"{{ module.quiz[0].url }}\" class=\"link\">
                                                    <h4>Evaluación</h4>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                {% endif %}
                            {% endif %}
                        </div>
                    {% endfor %}
                {% endif %}

                
            </div>
        </div>

        <div class=\"content-tab content\" ng-show=\"tab == 'contentCommunity'\">
            <di class=\"block-comments\">
                {{ content.comment }}
            </div>
        </div>
    </div>
    {{ drupal_block('ngt_general_node_more_course', {'node' : node.id }) }}
</div>", "modules/custom/ngt_general/templates/node-course/block--right-course.html.twig", "/Applications/MAMP/htdocs/ilar-v2/web/modules/custom/ngt_general/templates/node-course/block--right-course.html.twig");
    }
}
