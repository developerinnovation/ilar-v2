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

/* modules/custom/ngt_general/templates/block--course-category.html.twig */
class __TwigTemplate_7c055dcbef5042499a5a767d4d5e2e02cc8e1ddc93b96e536a653f36ba2b8d4c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "for" => 8, "if" => 9];
        $filters = ["replace" => 1, "escape" => 3, "t" => 7, "split" => 10, "capitalize" => 12, "trim" => 12, "striptags" => 12];
        $functions = ["drupal_field" => 11];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['replace', 'escape', 't', 'split', 'capitalize', 'trim', 'striptags'],
                ['drupal_field']
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
        echo "
<div class=\"";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class"] ?? null)), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directive"] ?? null)), "html", null, true);
        echo " ng-cloak ng-init=\"uuid_";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directive_new"] ?? null)), "html", null, true);
        echo " = '";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uuid"] ?? null)), "html", null, true);
        echo "'\">
    <div class=\"caterory select\">
        <div class=\"desktop\">
            <nav>
                <li class=\"active\">";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Últimos cursos"));
        echo " </li>
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["main_category"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["category"]) {
            echo "   
                    ";
            // line 9
            if (($context["category"] == 1)) {
                // line 10
                echo "                        ";
                $context["item"] = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"]), "_");
                // line 11
                echo "                            ";
                ob_start();
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalField("name", "taxonomy_term", $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["item"] ?? null), 1, [], "array"))), "html", null, true);
                echo " ";
                $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 12
                echo "                            <li ng-click=\"loadCourseCategory('";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["item"] ?? null), 1, [], "array")), "html", null, true);
                echo "','0','4')\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_capitalize_string_filter($this->env, twig_trim_filter(strip_tags($this->sandbox->ensureToStringAllowed(($context["text"] ?? null))))), "html", null, true);
                echo "</li>
                    ";
            }
            // line 13
            echo " 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </nav>
        </div>
        <div class=\"mobile\">
            <select name=\"select\">
                <option value=\"value1\" ng-selected=\"selectedCategory\">";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Últimos cursos"));
        echo " </option> 
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["main_category"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["category"]) {
            echo "   
                    ";
            // line 21
            if (($context["category"] == 1)) {
                // line 22
                echo "                        ";
                $context["item"] = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"]), "_");
                // line 23
                echo "                            ";
                ob_start();
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalField("name", "taxonomy_term", $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["item"] ?? null), 1, [], "array"))), "html", null, true);
                echo " ";
                $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 24
                echo "                            <option value=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["item"] ?? null), 1, [], "array")), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_capitalize_string_filter($this->env, twig_trim_filter(strip_tags($this->sandbox->ensureToStringAllowed(($context["text"] ?? null))))), "html", null, true);
                echo "</option>
                    ";
            }
            // line 25
            echo " 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </select>
        </div>
    </div>

    <div class=\"course category\" ng-init=\"loadCourseCategory('all','0','4')\">
        <div class=\"item-news course-category home\" ng-repeat=\"course in CourseCategory\">
            <div class=\"picture\">
                <figure>
                    <picture>
                        <source srcset=\"{[{ course.foto_portada.uri_313x156 }]}\" 
                            media=\"(max-width: 767px)\" 
                            alt=\"{[{ course.foto_portada.alt }]}\" 
                            title=\"{[{ course.foto_portada.title }]}\">
                        <img src=\"{[{ course.foto_portada.uri_374x226 }]}\" 
                            alt=\"{[{ course.foto_portada.alt }]}\" 
                            title=\"{[{ course.foto_portada.title }]}\">
                    </picture>
                </figure>
            </div>
            <div class=\"text\">
                <h3 class=\"title\">{[{ course.title }]}</h3>
                <div class=\"author multiple\">
                    <figure>
                        <img src=\"{[{ picture.picture_uri }]}\" alt=\"{[{ picture.name_author }]}\" ng-repeat=\"picture in course.expertos\">
                    </figure>
                </div>
                <div class=\"info\">
                    <div class=\"name author\">
                        <ul>
                            <li ng-repeat=\"autor in course.expertos\">
                                <a href=\"{[{ autor.uri }]}\" class=\"link author\">{[{ autor.name_author }]}</a>
                            </li>
                        </ul>
                    </div>
                    <time class=\"hour\">{[{ course.horas }]} horas</time>
                    <time class=\"date\">Inicio: {[{ course.fecha_inicio }]}</time>
                    <div class=\"rating\">
                    
                    </div>
                </div>
                <div class=\"action\">
                    <button class=\"show-course\">
                        <a href=\"{[{ course.url }]}\">Ver curso</a>
                    </button>
                    <button class=\"save\">guardar</button>
                </div>
            </div>
        </div>
        <div class=\"buttom load_more\" ng-show=\"showMore\">
            <button ng-click=\"loadMoreCourse()\">Ver más cursos</button>
        </div>
        <div class=\"icon-load\" ng-show=\"showLoading\">
            <img src=\"../../../modules/custom/ngt_general/asset/image/loading.gif\" alt=\"\">
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/ngt_general/templates/block--course-category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 27,  146 => 25,  138 => 24,  131 => 23,  128 => 22,  126 => 21,  120 => 20,  116 => 19,  110 => 15,  103 => 13,  95 => 12,  88 => 11,  85 => 10,  83 => 9,  77 => 8,  73 => 7,  60 => 3,  57 => 2,  55 => 1,);
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
    <div class=\"caterory select\">
        <div class=\"desktop\">
            <nav>
                <li class=\"active\">{{ 'Últimos cursos' | t }} </li>
                {% for key, category in main_category %}   
                    {% if category == 1 %}
                        {% set item = key|split('_') %}
                            {% set text %} {{ drupal_field('name', 'taxonomy_term', item[1]) }} {% endset %}
                            <li ng-click=\"loadCourseCategory('{{ item[1] }}','0','4')\">{{ text|striptags|trim|capitalize }}</li>
                    {% endif %} 
                {% endfor %}
            </nav>
        </div>
        <div class=\"mobile\">
            <select name=\"select\">
                <option value=\"value1\" ng-selected=\"selectedCategory\">{{ 'Últimos cursos' | t }} </option> 
                {% for key, category in main_category %}   
                    {% if category == 1 %}
                        {% set item = key|split('_') %}
                            {% set text %} {{ drupal_field('name', 'taxonomy_term', item[1]) }} {% endset %}
                            <option value=\"{{ item[1] }}\">{{ text|striptags|trim|capitalize }}</option>
                    {% endif %} 
                {% endfor %}
            </select>
        </div>
    </div>

    <div class=\"course category\" ng-init=\"loadCourseCategory('all','0','4')\">
        <div class=\"item-news course-category home\" ng-repeat=\"course in CourseCategory\">
            <div class=\"picture\">
                <figure>
                    <picture>
                        <source srcset=\"{[{ course.foto_portada.uri_313x156 }]}\" 
                            media=\"(max-width: 767px)\" 
                            alt=\"{[{ course.foto_portada.alt }]}\" 
                            title=\"{[{ course.foto_portada.title }]}\">
                        <img src=\"{[{ course.foto_portada.uri_374x226 }]}\" 
                            alt=\"{[{ course.foto_portada.alt }]}\" 
                            title=\"{[{ course.foto_portada.title }]}\">
                    </picture>
                </figure>
            </div>
            <div class=\"text\">
                <h3 class=\"title\">{[{ course.title }]}</h3>
                <div class=\"author multiple\">
                    <figure>
                        <img src=\"{[{ picture.picture_uri }]}\" alt=\"{[{ picture.name_author }]}\" ng-repeat=\"picture in course.expertos\">
                    </figure>
                </div>
                <div class=\"info\">
                    <div class=\"name author\">
                        <ul>
                            <li ng-repeat=\"autor in course.expertos\">
                                <a href=\"{[{ autor.uri }]}\" class=\"link author\">{[{ autor.name_author }]}</a>
                            </li>
                        </ul>
                    </div>
                    <time class=\"hour\">{[{ course.horas }]} horas</time>
                    <time class=\"date\">Inicio: {[{ course.fecha_inicio }]}</time>
                    <div class=\"rating\">
                    
                    </div>
                </div>
                <div class=\"action\">
                    <button class=\"show-course\">
                        <a href=\"{[{ course.url }]}\">Ver curso</a>
                    </button>
                    <button class=\"save\">guardar</button>
                </div>
            </div>
        </div>
        <div class=\"buttom load_more\" ng-show=\"showMore\">
            <button ng-click=\"loadMoreCourse()\">Ver más cursos</button>
        </div>
        <div class=\"icon-load\" ng-show=\"showLoading\">
            <img src=\"../../../modules/custom/ngt_general/asset/image/loading.gif\" alt=\"\">
        </div>
    </div>
</div>", "modules/custom/ngt_general/templates/block--course-category.html.twig", "/Applications/MAMP/htdocs/ilar-v2/web/modules/custom/ngt_general/templates/block--course-category.html.twig");
    }
}
