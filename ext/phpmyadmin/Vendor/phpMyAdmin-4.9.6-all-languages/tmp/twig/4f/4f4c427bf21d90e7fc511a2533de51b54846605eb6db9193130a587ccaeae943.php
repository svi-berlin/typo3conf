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

/* table/search/selection_form.twig */
class __TwigTemplate_c8493296b6b858adca0146bd9d684369152afb1ac729f38bf2a5e5d8864290ee extends \Twig\Template
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
        if ((($context["search_type"] ?? null) == "zoom")) {
            // line 2
            echo "    ";
            $this->loadTemplate("table/search/form_tag.twig", "table/search/selection_form.twig", 2)->display(twig_to_array(["script_name" => "tbl_zoom_select.php", "form_id" => "zoom_search_form", "db" =>             // line 5
($context["db"] ?? null), "table" =>             // line 6
($context["table"] ?? null), "goto" =>             // line 7
($context["goto"] ?? null)]));
            // line 9
            echo "    <fieldset id=\"fieldset_zoom_search\">
        <fieldset id=\"inputSection\">
            <legend>
                ";
            // line 12
            echo _gettext("Do a \"query by example\" (wildcard: \"%\") for two different columns");
            // line 13
            echo "            </legend>
            ";
            // line 14
            $this->loadTemplate("table/search/fields_table.twig", "table/search/selection_form.twig", 14)->display(twig_to_array(["self" =>             // line 15
($context["self"] ?? null), "search_type" =>             // line 16
($context["search_type"] ?? null), "geom_column_flag" =>             // line 17
($context["geom_column_flag"] ?? null), "column_names" =>             // line 18
($context["column_names"] ?? null), "column_types" =>             // line 19
($context["column_types"] ?? null), "column_collations" =>             // line 20
($context["column_collations"] ?? null), "criteria_column_names" =>             // line 21
($context["criteria_column_names"] ?? null), "criteria_column_types" =>             // line 22
($context["criteria_column_types"] ?? null)]));
            // line 24
            echo "            ";
            $this->loadTemplate("table/search/options_zoom.twig", "table/search/selection_form.twig", 24)->display(twig_to_array(["data_label" =>             // line 25
($context["data_label"] ?? null), "column_names" =>             // line 26
($context["column_names"] ?? null), "max_plot_limit" =>             // line 27
($context["max_plot_limit"] ?? null)]));
            // line 29
            echo "        </fieldset>
    </fieldset>
";
        } elseif ((        // line 31
($context["search_type"] ?? null) == "normal")) {
            // line 32
            echo "    ";
            $this->loadTemplate("table/search/form_tag.twig", "table/search/selection_form.twig", 32)->display(twig_to_array(["script_name" => "tbl_select.php", "form_id" => "tbl_search_form", "db" =>             // line 35
($context["db"] ?? null), "table" =>             // line 36
($context["table"] ?? null), "goto" =>             // line 37
($context["goto"] ?? null)]));
            // line 39
            echo "    <fieldset id=\"fieldset_table_search\">
        <fieldset id=\"fieldset_table_qbe\">
            <legend>
                ";
            // line 42
            echo _gettext("Do a \"query by example\" (wildcard: \"%\")");
            // line 43
            echo "            </legend>
            <div class=\"responsivetable jsresponsive\">
                ";
            // line 45
            $this->loadTemplate("table/search/fields_table.twig", "table/search/selection_form.twig", 45)->display(twig_to_array(["self" =>             // line 46
($context["self"] ?? null), "search_type" =>             // line 47
($context["search_type"] ?? null), "geom_column_flag" =>             // line 48
($context["geom_column_flag"] ?? null), "column_names" =>             // line 49
($context["column_names"] ?? null), "column_types" =>             // line 50
($context["column_types"] ?? null), "column_collations" =>             // line 51
($context["column_collations"] ?? null), "criteria_column_names" =>             // line 52
($context["criteria_column_names"] ?? null), "criteria_column_types" =>             // line 53
($context["criteria_column_types"] ?? null)]));
            // line 55
            echo "            </div>
            <div id=\"gis_editor\"></div>
            <div id=\"popup_background\"></div>
        </fieldset>
        ";
            // line 59
            $this->loadTemplate("table/search/options.twig", "table/search/selection_form.twig", 59)->display(twig_to_array(["column_names" =>             // line 60
($context["column_names"] ?? null), "max_rows" =>             // line 61
($context["max_rows"] ?? null)]));
            // line 63
            echo "    </fieldset>
";
        } elseif ((        // line 64
($context["search_type"] ?? null) == "replace")) {
            // line 65
            echo "    ";
            $this->loadTemplate("table/search/form_tag.twig", "table/search/selection_form.twig", 65)->display(twig_to_array(["script_name" => "tbl_find_replace.php", "form_id" => "find_replace_form", "db" =>             // line 68
($context["db"] ?? null), "table" =>             // line 69
($context["table"] ?? null), "goto" =>             // line 70
($context["goto"] ?? null)]));
            // line 72
            echo "    <fieldset id=\"fieldset_find_replace\">
        <fieldset id=\"fieldset_find\">
            <legend>
                ";
            // line 75
            echo _gettext("Find and replace");
            // line 76
            echo "            </legend>
            ";
            // line 77
            $this->loadTemplate("table/search/search_and_replace.twig", "table/search/selection_form.twig", 77)->display(twig_to_array(["column_names" =>             // line 78
($context["column_names"] ?? null), "column_types" =>             // line 79
($context["column_types"] ?? null), "sql_types" =>             // line 80
($context["sql_types"] ?? null)]));
            // line 82
            echo "        </fieldset>
    </fieldset>
";
        } else {
            // line 85
            echo "    ";
            $this->loadTemplate("table/search/form_tag.twig", "table/search/selection_form.twig", 85)->display(twig_to_array(["script_name" => "", "form_id" => "", "db" =>             // line 88
($context["db"] ?? null), "table" =>             // line 89
($context["table"] ?? null), "goto" =>             // line 90
($context["goto"] ?? null)]));
        }
        // line 93
        echo "
";
        // line 95
        echo "    <fieldset class=\"tblFooters\">
        <input type=\"submit\"
            name=\"";
        // line 97
        echo (((($context["search_type"] ?? null) == "zoom")) ? ("zoom_submit") : ("submit"));
        echo "\"
            ";
        // line 98
        echo (((($context["search_type"] ?? null) == "zoom")) ? ("id=\"inputFormSubmitId\"") : (""));
        echo "
            value=\"";
        // line 99
        echo _gettext("Go");
        echo "\" />
    </fieldset>
</form>
<div id=\"sqlqueryresultsouter\"></div>
";
    }

    public function getTemplateName()
    {
        return "table/search/selection_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 99,  163 => 98,  159 => 97,  155 => 95,  152 => 93,  149 => 90,  148 => 89,  147 => 88,  145 => 85,  140 => 82,  138 => 80,  137 => 79,  136 => 78,  135 => 77,  132 => 76,  130 => 75,  125 => 72,  123 => 70,  122 => 69,  121 => 68,  119 => 65,  117 => 64,  114 => 63,  112 => 61,  111 => 60,  110 => 59,  104 => 55,  102 => 53,  101 => 52,  100 => 51,  99 => 50,  98 => 49,  97 => 48,  96 => 47,  95 => 46,  94 => 45,  90 => 43,  88 => 42,  83 => 39,  81 => 37,  80 => 36,  79 => 35,  77 => 32,  75 => 31,  71 => 29,  69 => 27,  68 => 26,  67 => 25,  65 => 24,  63 => 22,  62 => 21,  61 => 20,  60 => 19,  59 => 18,  58 => 17,  57 => 16,  56 => 15,  55 => 14,  52 => 13,  50 => 12,  45 => 9,  43 => 7,  42 => 6,  41 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/search/selection_form.twig", "/var/www/html/typo3conf/ext/phpmyadmin/Vendor/phpMyAdmin-4.9.6-all-languages/templates/table/search/selection_form.twig");
    }
}
