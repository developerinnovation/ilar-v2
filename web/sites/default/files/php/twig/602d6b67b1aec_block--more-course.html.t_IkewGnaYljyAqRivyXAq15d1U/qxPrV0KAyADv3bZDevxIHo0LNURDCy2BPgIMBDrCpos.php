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

/* modules/custom/ngt_general/templates/node-course/block--more-course.html.twig */
class __TwigTemplate_916c0ecc08a1027b855180d63a4873134d1a861b88ca51b0e76d7174ab534928 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 4];
        $filters = ["escape" => 9, "image_style" => 9];
        $functions = ["drupal_field" => 33];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 'image_style'],
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
        echo "<div class=\"other-course\">
    <h3>Otros cursos</h3>
    <div class=\"more\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 5
            echo "        <div class=\"item-news\">
            <div class=\"picture\">
                <figure>
                    <picture>
                        <source srcset=\"";
            // line 9
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->imageStyle($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["course"], "foto_portada", []), "uri", [])), "235x156"), "html", null, true);
            echo "\" 
                            media=\"(max-width: 767px)\" 
                            alt=\"";
            // line 11
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["course"], "foto_portada", []), "alt", [])), "html", null, true);
            echo "\" 
                            title=\"";
            // line 12
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["course"], "foto_portada", []), "title", [])), "html", null, true);
            echo "\">
                        <img srcset=\"";
            // line 13
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->imageStyle($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["course"], "foto_portada", []), "uri", [])), "349x210"), "html", null, true);
            echo "\" 
                            alt=\"";
            // line 14
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["course"], "foto_portada", []), "alt", [])), "html", null, true);
            echo "\" 
                            title=\"";
            // line 15
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["course"], "foto_portada", []), "title", [])), "html", null, true);
            echo "\">
                    </picture>
                </figure>
            </div>
            <div class=\"text\">
                <h3 class=\"title desktop\">";
            // line 20
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["course"], "title", [])), "html", null, true);
            echo "</h3>
                <div class=\"author multiple\">
                    <figure>
                        <img src=\"";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["course"], "autor", []), 0, [], "array"), "picture_uri", [])), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["course"], "autor", []), 0, [], "array"), "name_author", [])), "html", null, true);
            echo "\">
                    </figure>
                </div>
                <div class=\"info\">
                    <div class=\"name author\">
                        <a href=\"";
            // line 28
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["course"], "autor", []), 0, [], "array"), "uri", [])), "html", null, true);
            echo "\" class=\"link author\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["course"], "autor", []), 0, [], "array"), "name_author", [])), "html", null, true);
            echo "</a>
                    </div>
                    <time class=\"hour\">";
            // line 30
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["course"], "horas", [])), "html", null, true);
            echo " horas</time>
                    <time class=\"date\">Inicio: ";
            // line 31
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["course"], "fecha_inicio", [])), "html", null, true);
            echo "</time>
                    <div class=\"rating\">
                        ";
            // line 33
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalField("field_calificacion", "node", $this->sandbox->ensureToStringAllowed($this->getAttribute($context["course"], "nid", []))), "html", null, true);
            echo "
                    </div>
                </div>
                <div class=\"action\">
                    <button class=\"show-course\">ver curso</button>
                    <button class=\"save\">guardar</button>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "   
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/ngt_general/templates/node-course/block--more-course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 42,  131 => 33,  126 => 31,  122 => 30,  115 => 28,  105 => 23,  99 => 20,  91 => 15,  87 => 14,  83 => 13,  79 => 12,  75 => 11,  70 => 9,  64 => 5,  60 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"other-course\">
    <h3>Otros cursos</h3>
    <div class=\"more\">
    {% for course in data %}
        <div class=\"item-news\">
            <div class=\"picture\">
                <figure>
                    <picture>
                        <source srcset=\"{{ course.foto_portada.uri | image_style('235x156') }}\" 
                            media=\"(max-width: 767px)\" 
                            alt=\"{{ course.foto_portada.alt }}\" 
                            title=\"{{ course.foto_portada.title }}\">
                        <img srcset=\"{{ course.foto_portada.uri | image_style('349x210') }}\" 
                            alt=\"{{ course.foto_portada.alt }}\" 
                            title=\"{{ course.foto_portada.title }}\">
                    </picture>
                </figure>
            </div>
            <div class=\"text\">
                <h3 class=\"title desktop\">{{ course.title }}</h3>
                <div class=\"author multiple\">
                    <figure>
                        <img src=\"{{ course.autor[0].picture_uri }}\" alt=\"{{ course.autor[0].name_author }}\">
                    </figure>
                </div>
                <div class=\"info\">
                    <div class=\"name author\">
                        <a href=\"{{ course.autor[0].uri }}\" class=\"link author\">{{ course.autor[0].name_author }}</a>
                    </div>
                    <time class=\"hour\">{{ course.horas }} horas</time>
                    <time class=\"date\">Inicio: {{ course.fecha_inicio }}</time>
                    <div class=\"rating\">
                        {{ drupal_field('field_calificacion', 'node', course.nid) }}
                    </div>
                </div>
                <div class=\"action\">
                    <button class=\"show-course\">ver curso</button>
                    <button class=\"save\">guardar</button>
                </div>
            </div>
        </div>
    {% endfor %}   
    </div>
</div>", "modules/custom/ngt_general/templates/node-course/block--more-course.html.twig", "/Applications/MAMP/htdocs/ilar-v2/web/modules/custom/ngt_general/templates/node-course/block--more-course.html.twig");
    }
}
