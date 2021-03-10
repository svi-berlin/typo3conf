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

/* database/search/result_divs.twig */
class __TwigTemplate_15ba281f576a75c72d0ae0d7bd3b81559b0e68760f9f603698993095cf35aff5 extends \Twig\Template
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
        // line 2
        echo "<div id=\"table-info\">
    <a id=\"table-link\" class=\"item\"></a>
</div>
";
        // line 6
        echo "<div id=\"browse-results\">
    ";
        // line 8
        echo "</div>
<div id=\"sqlqueryform\" class=\"clearfloat\">
    ";
        // line 11
        echo "</div>
";
        // line 13
        echo "<a id=\"togglequerybox\"></a>
";
    }

    public function getTemplateName()
    {
        return "database/search/result_divs.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  49 => 11,  45 => 8,  42 => 6,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/search/result_divs.twig", "/var/www/html/typo3conf/ext/phpmyadmin/Vendor/phpMyAdmin-4.9.6-all-languages/templates/database/search/result_divs.twig");
    }
}
