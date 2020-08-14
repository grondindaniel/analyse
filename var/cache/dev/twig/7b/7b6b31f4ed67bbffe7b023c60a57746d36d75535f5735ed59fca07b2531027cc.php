<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* task/index.html.twig */
class __TwigTemplate_37546488dab25ec0e3ff2c68936b406d794242d49164d5461b7ae65075b71511 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "task/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ToDo & Co
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"container\" style=\"margin-top: -150px;\">

        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "taskEditOk"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "            <div class=\"result\">
                ";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", [0 => "taskDeleteOk"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "            <div class=\"result\">
                ";
            // line 17
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        <div class=\"icon-bar2\">
            <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AddTasks");
        echo "\" class=\"ico\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-circle-plus\" width=\"88\" height=\"88\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"#7351EB\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <path stroke=\"none\" d=\"M0 0h24v24H0z\"/>
                    <circle cx=\"12\" cy=\"12\" r=\"9\" />
                    <line x1=\"9\" y1=\"12\" x2=\"15\" y2=\"12\" />
                    <line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"15\" />
                </svg>
            </a>
            <a href=\"#\"><i class=\"fa fa-trash\"></i></a>
        </div>
        <h2 style=\"text-align: center;color: #7351EB\">TACHES A REALISER</h2>
        <label class=\"switch\">
            <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_done");
        echo "\">
                <input type=\"checkbox\">
                <span class=\"slider round\"></span>
            </a>
        </label>
        <div class=\"row\">
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 40
            echo "                <div class=\"columns\">
                    <ul class=\"price\" >
                        <li class=\"header\" style=\"background-color:#FFFFFF;color: black\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "title", [], "any", false, false, false, 42), "html", null, true);
            echo "
                            <span class=\"right\" style=\"float: right;\">
                            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-edit\" width=\"44\" height=\"44\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"#00a8ff\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                              <path stroke=\"none\" d=\"M0 0h24v24H0z\"/>
                              <path d=\"M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3\" />
                              <path d=\"M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3\" />
                              <line x1=\"16\" y1=\"5\" x2=\"19\" y2=\"8\" />
                            </svg>
                            </a>
                            ";
            // line 52
            if (twig_get_attribute($this->env, $this->source, $context["task"], "isDone", [], "any", false, false, false, 52)) {
                // line 53
                echo "                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-square-check\" width=\"44\" height=\"44\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"#000000\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path stroke=\"none\" d=\"M0 0h24v24H0z\"/>
                            <rect x=\"4\" y=\"4\" width=\"16\" height=\"16\" rx=\"2\" />
                            <path d=\"M9 12l2 2l4 -4\" />
                        </svg>
                            ";
            }
            // line 59
            echo "                        </span>
                        </li>
                        <li style=\"height: 180px;text-align: justify\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "content", [], "any", false, false, false, 61), "html", null, true);
            echo "</li>
                        <li class=\"grey\">
                            ";
            // line 63
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["task"], "user", [], "any", false, true, false, 63), "id", [], "any", true, true, false, 63) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["task"], "user", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63)))) || ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "roles", [], "any", false, false, false, 63), 0, [], "array", false, false, false, 63), "ROLE_ADMIN")) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["task"], "user", [], "any", false, true, false, 63), "id", [], "any", true, true, false, 63)))) {
                // line 64
                echo "                                <button type=\"submit\" style=\"background-color: #FFFFFF;width: 104px;\">
                                    <a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 65)]), "html", null, true);
                echo "\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-trash\" width=\"44\" height=\"44\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"#e84118\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                            <path stroke=\"none\" d=\"M0 0h24v24H0z\"/>
                                            <line x1=\"4\" y1=\"7\" x2=\"20\" y2=\"7\" />
                                            <line x1=\"10\" y1=\"11\" x2=\"10\" y2=\"17\" />
                                            <line x1=\"14\" y1=\"11\" x2=\"14\" y2=\"17\" />
                                            <path d=\"M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12\" />
                                            <path d=\"M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3\" />
                                        </svg>
                                    </a>
                                </button>
                            ";
            }
            // line 77
            echo "                            <button type=\"submit\" style=\"background-color: #FFFFFF;width: 104px;\">
                                <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_toggle", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-square\" width=\"44\" height=\"44\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"#7351EB\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" style=\"\">
                                        <path stroke=\"none\" d=\"M0 0h24v24H0z\"/>
                                        <rect x=\"4\" y=\"4\" width=\"16\" height=\"16\" rx=\"2\" />
                                    </svg>
                                </a>
                            </button>
                        </li>
                    </ul>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 89
            echo "                <h2 style=\"margin-top: 40px;\">Aucune tâche à réaliser pour le moment ! Cliquez + pour commencer<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-arrow-down-right\" width=\"44\" height=\"44\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"#000000\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <path stroke=\"none\" d=\"M0 0h24v24H0z\"/>
                        <line x1=\"7\" y1=\"7\" x2=\"17\" y2=\"17\" />
                        <polyline points=\"17 8 17 17 8 17\" />
                    </svg> </h2>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "task/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 95,  237 => 89,  221 => 78,  218 => 77,  203 => 65,  200 => 64,  198 => 63,  193 => 61,  189 => 59,  181 => 53,  179 => 52,  168 => 44,  163 => 42,  159 => 40,  154 => 39,  145 => 33,  130 => 21,  127 => 20,  118 => 17,  115 => 16,  110 => 15,  101 => 12,  98 => 11,  94 => 10,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    ToDo & Co
{% endblock %}

{% block body %}
    <div class=\"container\" style=\"margin-top: -150px;\">

        {% for message in  app.flashes('taskEditOk') %}
            <div class=\"result\">
                {{ message }}
            </div>
        {% endfor %}
        {% for message in  app.flashes('taskDeleteOk') %}
            <div class=\"result\">
                {{ message }}
            </div>
        {% endfor %}
        <div class=\"icon-bar2\">
            <a href=\"{{ path('AddTasks') }}\" class=\"ico\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-circle-plus\" width=\"88\" height=\"88\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"#7351EB\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <path stroke=\"none\" d=\"M0 0h24v24H0z\"/>
                    <circle cx=\"12\" cy=\"12\" r=\"9\" />
                    <line x1=\"9\" y1=\"12\" x2=\"15\" y2=\"12\" />
                    <line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"15\" />
                </svg>
            </a>
            <a href=\"#\"><i class=\"fa fa-trash\"></i></a>
        </div>
        <h2 style=\"text-align: center;color: #7351EB\">TACHES A REALISER</h2>
        <label class=\"switch\">
            <a href=\"{{ path('task_done') }}\">
                <input type=\"checkbox\">
                <span class=\"slider round\"></span>
            </a>
        </label>
        <div class=\"row\">
            {% for task in tasks %}
                <div class=\"columns\">
                    <ul class=\"price\" >
                        <li class=\"header\" style=\"background-color:#FFFFFF;color: black\">{{ task.title }}
                            <span class=\"right\" style=\"float: right;\">
                            <a href=\"{{ path('task_edit', {id: task.id}) }}\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-edit\" width=\"44\" height=\"44\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"#00a8ff\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                              <path stroke=\"none\" d=\"M0 0h24v24H0z\"/>
                              <path d=\"M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3\" />
                              <path d=\"M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3\" />
                              <line x1=\"16\" y1=\"5\" x2=\"19\" y2=\"8\" />
                            </svg>
                            </a>
                            {% if task.isDone %}
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-square-check\" width=\"44\" height=\"44\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"#000000\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path stroke=\"none\" d=\"M0 0h24v24H0z\"/>
                            <rect x=\"4\" y=\"4\" width=\"16\" height=\"16\" rx=\"2\" />
                            <path d=\"M9 12l2 2l4 -4\" />
                        </svg>
                            {% endif %}
                        </span>
                        </li>
                        <li style=\"height: 180px;text-align: justify\">{{ task.content }}</li>
                        <li class=\"grey\">
                            {% if task.user.id is defined and app.user.id == task.user.id or app.user.roles[0] == \"ROLE_ADMIN\" and task.user.id is not defined %}
                                <button type=\"submit\" style=\"background-color: #FFFFFF;width: 104px;\">
                                    <a href=\"{{ path('task_delete',  {'id' : task.id }) }}\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-trash\" width=\"44\" height=\"44\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"#e84118\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                            <path stroke=\"none\" d=\"M0 0h24v24H0z\"/>
                                            <line x1=\"4\" y1=\"7\" x2=\"20\" y2=\"7\" />
                                            <line x1=\"10\" y1=\"11\" x2=\"10\" y2=\"17\" />
                                            <line x1=\"14\" y1=\"11\" x2=\"14\" y2=\"17\" />
                                            <path d=\"M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12\" />
                                            <path d=\"M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3\" />
                                        </svg>
                                    </a>
                                </button>
                            {% endif %}
                            <button type=\"submit\" style=\"background-color: #FFFFFF;width: 104px;\">
                                <a href=\"{{ path('task_toggle',  {'id' : task.id }) }}\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-square\" width=\"44\" height=\"44\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"#7351EB\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" style=\"\">
                                        <path stroke=\"none\" d=\"M0 0h24v24H0z\"/>
                                        <rect x=\"4\" y=\"4\" width=\"16\" height=\"16\" rx=\"2\" />
                                    </svg>
                                </a>
                            </button>
                        </li>
                    </ul>
                </div>
            {% else %}
                <h2 style=\"margin-top: 40px;\">Aucune tâche à réaliser pour le moment ! Cliquez + pour commencer<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-arrow-down-right\" width=\"44\" height=\"44\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"#000000\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <path stroke=\"none\" d=\"M0 0h24v24H0z\"/>
                        <line x1=\"7\" y1=\"7\" x2=\"17\" y2=\"17\" />
                        <polyline points=\"17 8 17 17 8 17\" />
                    </svg> </h2>
            {% endfor %}
        </div>
    </div>
{% endblock %}

", "task/index.html.twig", "/Users/danielgrondin/analyse/templates/task/index.html.twig");
    }
}
