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

/* menu.html.twig */
class __TwigTemplate_0b4f8c5053042d4a387551f9423882511596cd5e56c77c6da238ce992e98abca extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "    <nav class=\"col-md-2 d-none d-md-block bg-light sidebar\">
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
    </nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <nav class=\"col-md-2 d-none d-md-block bg-light sidebar\">
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
    </nav>", "menu.html.twig", "/Users/clement/Mojito copie/templates/menu.html.twig");
    }
}
