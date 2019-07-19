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

/* home/index.html.twig */
class __TwigTemplate_b3c834c19d79f27cd8fd5ab1d6da6795ef172d546481158978fe62673b2084e4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Hello HomeController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<main role=\"main\">

  <section class=\"jumbotron text-center\">
    <div class=\"container\">
      <h1 class=\"jumbotron-heading\">Project backlog</h1>
        <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("project_new");
        echo "\" class=\"btn btn-primary my-2\">Create project</a>
        <a href=\"#\" class=\"btn btn-info my-2\">Quick create</a>
      </p>
    </div>
  </section>

  <div class=\"album py-5 bg-light\">
    <div class=\"container\">
      <div class=\"row\">
      \t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 20
            echo "\t      \t<div class=\"col-md-4\">
\t          <div class=\"card mb-4 shadow-sm\">
\t            <div class=\"card-body\">
\t            \t<h5 class=\"card-title\">Project ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo "</h5>
\t            \t<h6 class=\"card-subtitle mb-2\"><span class=\"badge badge-warning\">in progress</span></h6>
\t              <p class=\"card-text\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "description", [], "any", false, false, false, 25), "html", null, true);
            echo "</p>
\t              <div class=\"d-flex justify-content-between align-items-center\">
\t                <div class=\"btn-group\">
\t                  <a class=\"btn btn-sm btn-outline-secondary\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_show", ["name" => twig_get_attribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" role=\"button\">View</a>
\t                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Create item</button>
\t                </div>
\t                <small class=\"text-muted\">99 items</small>
\t              </div>
\t            </div>
\t          </div>
\t        </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "        \t<div class=\"col-md-4\">
\t          <div class=\"card mb-4 shadow-sm\">
\t            <div class=\"card-body\">
\t            \t<h5 class=\"card-title\">No project found</h5>
\t            </div>
\t          </div>
\t        </div>
      \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "  
      </div>
    </div>
  </div>
</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 44,  142 => 37,  128 => 28,  122 => 25,  117 => 23,  112 => 20,  107 => 19,  95 => 10,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}
{% block body %}
<main role=\"main\">

  <section class=\"jumbotron text-center\">
    <div class=\"container\">
      <h1 class=\"jumbotron-heading\">Project backlog</h1>
        <a href=\"{{ url('project_new') }}\" class=\"btn btn-primary my-2\">Create project</a>
        <a href=\"#\" class=\"btn btn-info my-2\">Quick create</a>
      </p>
    </div>
  </section>

  <div class=\"album py-5 bg-light\">
    <div class=\"container\">
      <div class=\"row\">
      \t{% for project in projects %}
\t      \t<div class=\"col-md-4\">
\t          <div class=\"card mb-4 shadow-sm\">
\t            <div class=\"card-body\">
\t            \t<h5 class=\"card-title\">Project {{ project.name }}</h5>
\t            \t<h6 class=\"card-subtitle mb-2\"><span class=\"badge badge-warning\">in progress</span></h6>
\t              <p class=\"card-text\">{{ project.description }}</p>
\t              <div class=\"d-flex justify-content-between align-items-center\">
\t                <div class=\"btn-group\">
\t                  <a class=\"btn btn-sm btn-outline-secondary\" href=\"{{ path('project_show', {'name': project.name}) }}\" role=\"button\">View</a>
\t                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Create item</button>
\t                </div>
\t                <small class=\"text-muted\">99 items</small>
\t              </div>
\t            </div>
\t          </div>
\t        </div>
        {% else %}
        \t<div class=\"col-md-4\">
\t          <div class=\"card mb-4 shadow-sm\">
\t            <div class=\"card-body\">
\t            \t<h5 class=\"card-title\">No project found</h5>
\t            </div>
\t          </div>
\t        </div>
      \t{% endfor %}  
      </div>
    </div>
  </div>
</main>
{% endblock %}
", "home/index.html.twig", "/Users/clement/Mojito copie/templates/home/index.html.twig");
    }
}
