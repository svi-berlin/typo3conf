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

/* table/search/fields_table.twig */
class __TwigTemplate_c0fcc35ffc2aa93f8af4b317b5728903ceb76c71497acada7b828fc04c22487a extends \Twig\Template
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
        // line 1
        echo "<table class=\"data\"";
        echo (((($context["search_type"] ?? null) == "zoom")) ? (" id=\"tableFieldsId\"") : (""));
        echo ">
    ";
        // line 2
        $this->loadTemplate("table/search/table_header.twig", "table/search/fields_table.twig", 2)->display(twig_to_array(["geom_column_flag" =>         // line 3
($context["geom_column_flag"] ?? null)]));
        // line 5
        echo "    <tbody>
    ";
        // line 6
        if ((($context["search_type"] ?? null) == "zoom")) {
            // line 7
            echo "        ";
            $this->loadTemplate("table/search/rows_zoom.twig", "table/search/fields_table.twig", 7)->display(twig_to_array(["self" =>             // line 8
($context["self"] ?? null), "column_names" =>             // line 9
($context["column_names"] ?? null), "criteria_column_names" =>             // line 10
($context["criteria_column_names"] ?? null), "criteria_column_types" =>             // line 11
($context["criteria_column_types"] ?? null)]));
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "        ";
            $this->loadTemplate("table/search/rows_normal.twig", "table/search/fields_table.twig", 14)->display(twig_to_array(["self" =>             // line 15
($context["self"] ?? null), "geom_column_flag" =>             // line 16
($context["geom_column_flag"] ?? null), "column_names" =>             // line 17
($context["column_names"] ?? null), "column_types" =>             // line 18
($context["column_types"] ?? null), "column_collations" =>             // line 19
($context["column_collations"] ?? null)]));
            // line 21
            echo "    ";
        }
        // line 22
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "table/search/fields_table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 22,  68 => 21,  66 => 19,  65 => 18,  64 => 17,  63 => 16,  62 => 15,  60 => 14,  57 => 13,  55 => 11,  54 => 10,  53 => 9,  52 => 8,  50 => 7,  48 => 6,  45 => 5,  43 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/search/fields_table.twig", "/var/www/html/typo3conf/ext/phpmyadmin/Vendor/phpMyAdmin-4.9.6-all-languages/templates/table/search/fields_table.twig");
    }
}
