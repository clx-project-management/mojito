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

/* home/project.html.twig */
class __TwigTemplate_2793fe59062e74e3d3805f7ada84f14ba3ba0c90dd3e62b2f51c0d994f47356c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/project.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/project.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/project.html.twig", 1);
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
        echo "<div class=\"row\">
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
        <h1 class=\"h2\">Dashboard</h1>
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

      <canvas class=\"my-4 w-100\" id=\"myChart\" width=\"900\" height=\"380\"></canvas>

      <h2>Section title</h2>
      <div class=\"table-responsive\">
        <table class=\"table table-striped table-sm\">
          <thead>
            <tr>
              <th>#</th>
              <th>Header</th>
              <th>Header</th>
              <th>Header</th>
              <th>Header</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>Lorem</td>
              <td>ipsum</td>
              <td>dolor</td>
              <td>sit</td>
            </tr>
            <tr>
              <td>1,002</td>
              <td>amet</td>
              <td>consectetur</td>
              <td>adipiscing</td>
              <td>elit</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>Integer</td>
              <td>nec</td>
              <td>odio</td>
              <td>Praesent</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>libero</td>
              <td>Sed</td>
              <td>cursus</td>
              <td>ante</td>
            </tr>
            <tr>
              <td>1,004</td>
              <td>dapibus</td>
              <td>diam</td>
              <td>Sed</td>
              <td>nisi</td>
            </tr>
            <tr>
              <td>1,005</td>
              <td>Nulla</td>
              <td>quis</td>
              <td>sem</td>
              <td>at</td>
            </tr>
            <tr>
              <td>1,006</td>
              <td>nibh</td>
              <td>elementum</td>
              <td>imperdiet</td>
              <td>Duis</td>
            </tr>
            <tr>
              <td>1,007</td>
              <td>sagittis</td>
              <td>ipsum</td>
              <td>Praesent</td>
              <td>mauris</td>
            </tr>
            <tr>
              <td>1,008</td>
              <td>Fusce</td>
              <td>nec</td>
              <td>tellus</td>
              <td>sed</td>
            </tr>
            <tr>
              <td>1,009</td>
              <td>augue</td>
              <td>semper</td>
              <td>porta</td>
              <td>Mauris</td>
            </tr>
            <tr>
              <td>1,010</td>
              <td>massa</td>
              <td>Vestibulum</td>
              <td>lacinia</td>
              <td>arcu</td>
            </tr>
            <tr>
              <td>1,011</td>
              <td>eget</td>
              <td>nulla</td>
              <td>Class</td>
              <td>aptent</td>
            </tr>
            <tr>
              <td>1,012</td>
              <td>taciti</td>
              <td>sociosqu</td>
              <td>ad</td>
              <td>litora</td>
            </tr>
            <tr>
              <td>1,013</td>
              <td>torquent</td>
              <td>per</td>
              <td>conubia</td>
              <td>nostra</td>
            </tr>
            <tr>
              <td>1,014</td>
              <td>per</td>
              <td>inceptos</td>
              <td>himenaeos</td>
              <td>Curabitur</td>
            </tr>
            <tr>
              <td>1,015</td>
              <td>sodales</td>
              <td>ligula</td>
              <td>in</td>
              <td>libero</td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}
{% block body %}
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
        <h1 class=\"h2\">Dashboard</h1>
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

      <canvas class=\"my-4 w-100\" id=\"myChart\" width=\"900\" height=\"380\"></canvas>

      <h2>Section title</h2>
      <div class=\"table-responsive\">
        <table class=\"table table-striped table-sm\">
          <thead>
            <tr>
              <th>#</th>
              <th>Header</th>
              <th>Header</th>
              <th>Header</th>
              <th>Header</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>Lorem</td>
              <td>ipsum</td>
              <td>dolor</td>
              <td>sit</td>
            </tr>
            <tr>
              <td>1,002</td>
              <td>amet</td>
              <td>consectetur</td>
              <td>adipiscing</td>
              <td>elit</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>Integer</td>
              <td>nec</td>
              <td>odio</td>
              <td>Praesent</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>libero</td>
              <td>Sed</td>
              <td>cursus</td>
              <td>ante</td>
            </tr>
            <tr>
              <td>1,004</td>
              <td>dapibus</td>
              <td>diam</td>
              <td>Sed</td>
              <td>nisi</td>
            </tr>
            <tr>
              <td>1,005</td>
              <td>Nulla</td>
              <td>quis</td>
              <td>sem</td>
              <td>at</td>
            </tr>
            <tr>
              <td>1,006</td>
              <td>nibh</td>
              <td>elementum</td>
              <td>imperdiet</td>
              <td>Duis</td>
            </tr>
            <tr>
              <td>1,007</td>
              <td>sagittis</td>
              <td>ipsum</td>
              <td>Praesent</td>
              <td>mauris</td>
            </tr>
            <tr>
              <td>1,008</td>
              <td>Fusce</td>
              <td>nec</td>
              <td>tellus</td>
              <td>sed</td>
            </tr>
            <tr>
              <td>1,009</td>
              <td>augue</td>
              <td>semper</td>
              <td>porta</td>
              <td>Mauris</td>
            </tr>
            <tr>
              <td>1,010</td>
              <td>massa</td>
              <td>Vestibulum</td>
              <td>lacinia</td>
              <td>arcu</td>
            </tr>
            <tr>
              <td>1,011</td>
              <td>eget</td>
              <td>nulla</td>
              <td>Class</td>
              <td>aptent</td>
            </tr>
            <tr>
              <td>1,012</td>
              <td>taciti</td>
              <td>sociosqu</td>
              <td>ad</td>
              <td>litora</td>
            </tr>
            <tr>
              <td>1,013</td>
              <td>torquent</td>
              <td>per</td>
              <td>conubia</td>
              <td>nostra</td>
            </tr>
            <tr>
              <td>1,014</td>
              <td>per</td>
              <td>inceptos</td>
              <td>himenaeos</td>
              <td>Curabitur</td>
            </tr>
            <tr>
              <td>1,015</td>
              <td>sodales</td>
              <td>ligula</td>
              <td>in</td>
              <td>libero</td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
{% endblock %}
", "home/project.html.twig", "/Users/clement/Mojito copie/templates/home/project.html.twig");
    }
}