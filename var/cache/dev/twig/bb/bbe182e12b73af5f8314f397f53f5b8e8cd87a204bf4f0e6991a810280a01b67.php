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

/* project/show.html.twig */
class __TwigTemplate_86d8c2199e004e27b64a16a60490a3368fd69868a15bdbbd0ed2f31cf73b83e3 extends \Twig\Template
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
        return "project.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/show.html.twig"));

        $this->parent = $this->loadTemplate("project.html.twig", "project/show.html.twig", 1);
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

        echo "Project";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container-fluid\">
  <div class=\"row\">
    <nav class=\"col-md-2 d-none d-md-block bg-light sidebar\">
      <div class=\"sidebar-sticky\">
        <ul class=\"nav flex-column\">
          <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"#\">
              <span data-feather=\"home\"></span>
              Dashboard <span class=\"sr-only\">(current)</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <span data-feather=\"file\"></span>
              Orders
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <span data-feather=\"shopping-cart\"></span>
              Products
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <span data-feather=\"users\"></span>
              Customers
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <span data-feather=\"bar-chart-2\"></span>
              Reports
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <span data-feather=\"layers\"></span>
              Integrations
            </a>
          </li>
        </ul>

        <h6 class=\"sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted\">
          <span>Saved reports</span>
          <a class=\"d-flex align-items-center text-muted\" href=\"#\">
            <span data-feather=\"plus-circle\"></span>
          </a>
        </h6>
        <ul class=\"nav flex-column mb-2\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <span data-feather=\"file-text\"></span>
              Current month
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <span data-feather=\"file-text\"></span>
              Last quarter
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <span data-feather=\"file-text\"></span>
              Social engagement
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <span data-feather=\"file-text\"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <main role=\"main\" class=\"col-md-9 ml-sm-auto col-lg-10 px-4\">
      <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
        <h1 class=\"h2\">Project ";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 85, $this->source); })()), "name", [], "any", false, false, false, 85), "html", null, true);
        echo "</h1>
        
        <div class=\"btn-toolbar mb-2 mb-md-0\">
          <div class=\"btn-group mr-2\">
            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Share</button>
            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Export</button>
          </div>
          <button type=\"button\" class=\"btn btn-sm btn-outline-secondary dropdown-toggle\">
            <span data-feather=\"calendar\"></span>
            This week
          </button>
        </div>
      </div>
      <p class=\"text-muted\">";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 98, $this->source); })()), "Description", [], "any", false, false, false, 98), "html", null, true);
        echo "</p>
    </main>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "project/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 98,  169 => 85,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'project.html.twig' %}

{% block title %}Project{% endblock %}

{% block body %}
<div class=\"container-fluid\">
  <div class=\"row\">
    <nav class=\"col-md-2 d-none d-md-block bg-light sidebar\">
      <div class=\"sidebar-sticky\">
        <ul class=\"nav flex-column\">
          <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"#\">
              <span data-feather=\"home\"></span>
              Dashboard <span class=\"sr-only\">(current)</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <span data-feather=\"file\"></span>
              Orders
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <span data-feather=\"shopping-cart\"></span>
              Products
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <span data-feather=\"users\"></span>
              Customers
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <span data-feather=\"bar-chart-2\"></span>
              Reports
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <span data-feather=\"layers\"></span>
              Integrations
            </a>
          </li>
        </ul>

        <h6 class=\"sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted\">
          <span>Saved reports</span>
          <a class=\"d-flex align-items-center text-muted\" href=\"#\">
            <span data-feather=\"plus-circle\"></span>
          </a>
        </h6>
        <ul class=\"nav flex-column mb-2\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <span data-feather=\"file-text\"></span>
              Current month
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <span data-feather=\"file-text\"></span>
              Last quarter
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <span data-feather=\"file-text\"></span>
              Social engagement
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <span data-feather=\"file-text\"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <main role=\"main\" class=\"col-md-9 ml-sm-auto col-lg-10 px-4\">
      <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
        <h1 class=\"h2\">Project {{project.name}}</h1>
        
        <div class=\"btn-toolbar mb-2 mb-md-0\">
          <div class=\"btn-group mr-2\">
            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Share</button>
            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Export</button>
          </div>
          <button type=\"button\" class=\"btn btn-sm btn-outline-secondary dropdown-toggle\">
            <span data-feather=\"calendar\"></span>
            This week
          </button>
        </div>
      </div>
      <p class=\"text-muted\">{{ project.Description }}</p>
    </main>
    </div>
</div>
{% endblock %}
", "project/show.html.twig", "/Users/clement/Mojito copie/templates/project/show.html.twig");
    }
}
