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

/* modules/custom/ngt_general/templates/node-lesson/block--right-lesson.html.twig */
class __TwigTemplate_2ba5a434a09de4bf67b331a2c0cba81555faadfb6723016b7e143dcb275400fb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "if" => 29, "for" => 32];
        $filters = ["replace" => 2, "escape" => 3, "image_style" => 10, "raw" => 26];
        $functions = ["drupal_block" => 69];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
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
    <div class=\"main-content\" id=\"lesson-";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "nid", [])), "html", null, true);
        echo "\">
        <div class=\"course-action\">
            <select name=\"courseAction\" id=\"courseAction\" ng-model=\"myTabsType\" ng-options=\"item.name for item in tabsType\"></select>
        </div>
        <figure class=\"content-video\" ng-show=\"tab != 'contentCommunity'\">
            <picture class=\"cover-video active\">
                <source srcset=\"";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->imageStyle($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "foto_portada", []), "uri", [])), "360x196"), "html", null, true);
        echo "\" 
                    media=\"(max-width: 767px)\" 
                    alt=\"";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "foto_portada", []), "alt", [])), "html", null, true);
        echo "\" 
                    title=\"";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "foto_portada", []), "title", [])), "html", null, true);
        echo "\">
                <img srcset=\"";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->imageStyle($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "foto_portada", []), "uri", [])), "604x476"), "html", null, true);
        echo "\" 
                    alt=\"";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "foto_portada", []), "alt", [])), "html", null, true);
        echo "\" 
                    title=\"";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "foto_portada", []), "title", [])), "html", null, true);
        echo "\">
            </picture>
            <video id=\"presentation\" preload=\"auto\" src=\"";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "video", [])), "html", null, true);
        echo "\" controls>
                Tu navegador no implementa el elemento <code>video</code>.
            </video>
        </figure>

        <div class=\"content-tab presentation\" ng-show=\"tab == 'contentMain'\">
            <h2>Resumen</h2>
            <div class=\"description\">
                ";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "body", [])));
        echo "
            </div>
            <h3>Recursos</h3>
            ";
        // line 29
        if ( !(null === $this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "recursos", []))) {
            // line 30
            echo "                <div class=\"list recurses\">
                    <ul>
                        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "recursos", []));
            foreach ($context['_seq'] as $context["key"] => $context["recurso"]) {
                // line 33
                echo "                            <li>
                                <div class=\"left\">
                                    <i class=\"icon download\"></i>
                                </div>
                                <div class=\"right\">
                                    <h4>";
                // line 38
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["recurso"], "title", [])), "html", null, true);
                echo "</h4>
                                    <span class=\"format\">";
                // line 39
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["recurso"], "extension", [])), "html", null, true);
                echo "</span>
                                    <p>";
                // line 40
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["recurso"], "description", [])), "html", null, true);
                echo "</p>
                                </div>
                                <div class=\"download\">
                                    <a download href=\"";
                // line 43
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["recurso"], "url", [])), "html", null, true);
                echo "\">Descargar</a>
                                </div>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['recurso'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                    </ul>
                </div>
            ";
        }
        // line 50
        echo "        </div>
    </div>

    <div class=\"content-tab community\" ng-show=\"tab == 'contentCommunity'\">
        <di class=\"block-comments\">
                ";
        // line 55
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "comment", [])), "html", null, true);
        echo "
        </div>
    </div>

    <div class=\"nav-leccion desktop\" ng-show=\"tab != 'contentCommunity'\">
        <div class=\"preview\">
            <a ";
        // line 61
        if ( !(null === $this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "prevLesson", []))) {
            echo " href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "prevLesson", [])), "html", null, true);
            echo "\" ";
        } else {
            echo " class=\"inactive\" ";
        }
        echo "><i class=\"icon row\"></i>Volver</a>
        </div>
        
        <div class=\"next\">
            <a ";
        // line 65
        if ( !(null === $this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "nextLesson", []))) {
            echo " href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "nextLesson", [])), "html", null, true);
            echo "\" ";
        } else {
            echo " class=\"inactive\" ";
        }
        echo "><i class=\"icon row\"></i>Siguiente lección</a>
        </div>
    </div>
    <div class=\"mobile\">
        ";
        // line 69
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalBlock("ngt_general_node_lesson_modules", ["node" => $this->getAttribute($this->getAttribute(($context["data"] ?? null), 0, [], "array"), "nid", [])]), "html", null, true);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/ngt_general/templates/node-lesson/block--right-lesson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 69,  198 => 65,  185 => 61,  176 => 55,  169 => 50,  164 => 47,  154 => 43,  148 => 40,  144 => 39,  140 => 38,  133 => 33,  129 => 32,  125 => 30,  123 => 29,  117 => 26,  106 => 18,  101 => 16,  97 => 15,  93 => 14,  89 => 13,  85 => 12,  80 => 10,  71 => 4,  60 => 3,  58 => 2,  55 => 1,);
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
    <div class=\"main-content\" id=\"lesson-{{ data[0].nid }}\">
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
            <video id=\"presentation\" preload=\"auto\" src=\"{{ data[0].video }}\" controls>
                Tu navegador no implementa el elemento <code>video</code>.
            </video>
        </figure>

        <div class=\"content-tab presentation\" ng-show=\"tab == 'contentMain'\">
            <h2>Resumen</h2>
            <div class=\"description\">
                {{ data[0].body|raw }}
            </div>
            <h3>Recursos</h3>
            {% if data[0].recursos is not null %}
                <div class=\"list recurses\">
                    <ul>
                        {% for key, recurso in data[0].recursos %}
                            <li>
                                <div class=\"left\">
                                    <i class=\"icon download\"></i>
                                </div>
                                <div class=\"right\">
                                    <h4>{{ recurso.title }}</h4>
                                    <span class=\"format\">{{ recurso.extension }}</span>
                                    <p>{{ recurso.description }}</p>
                                </div>
                                <div class=\"download\">
                                    <a download href=\"{{ recurso.url }}\">Descargar</a>
                                </div>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            {% endif %}
        </div>
    </div>

    <div class=\"content-tab community\" ng-show=\"tab == 'contentCommunity'\">
        <di class=\"block-comments\">
                {{ content.comment }}
        </div>
    </div>

    <div class=\"nav-leccion desktop\" ng-show=\"tab != 'contentCommunity'\">
        <div class=\"preview\">
            <a {% if data[0].prevLesson is not null %} href=\"{{ data[0].prevLesson }}\" {% else %} class=\"inactive\" {% endif %}><i class=\"icon row\"></i>Volver</a>
        </div>
        
        <div class=\"next\">
            <a {% if data[0].nextLesson is not null %} href=\"{{ data[0].nextLesson }}\" {% else %} class=\"inactive\" {% endif %}><i class=\"icon row\"></i>Siguiente lección</a>
        </div>
    </div>
    <div class=\"mobile\">
        {{ drupal_block('ngt_general_node_lesson_modules', { 'node' : data[0].nid }) }}
    </div>
</div>
", "modules/custom/ngt_general/templates/node-lesson/block--right-lesson.html.twig", "/Applications/MAMP/htdocs/ilar-v2/web/modules/custom/ngt_general/templates/node-lesson/block--right-lesson.html.twig");
    }
}
