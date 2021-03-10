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

/* table/search/options.twig */
class __TwigTemplate_0c8ab9df9675eaee04e321be8719377619c54f5b1a6f0a8d2e9392344f5465f9 extends \Twig\Template
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
        echo PhpMyAdmin\Util::getDivForSliderEffect("searchoptions", _gettext("Options"));
        echo "

";
        // line 4
        echo "<fieldset id=\"fieldset_select_fields\">
    <legend>
        ";
        // line 6
        echo _gettext("Select columns (at least one):");
        // line 7
        echo "    </legend>
    <select name=\"columnsToDisplay[]\"
        size=\"";
        // line 9
        echo twig_escape_filter($this->env, min(twig_length_filter($this->env, ($context["column_names"] ?? null)), 10), "html", null, true);
        echo "\"
        multiple=\"multiple\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["column_names"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["each_field"]) {
            // line 12
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["each_field"], "html", null, true);
            echo "\"
                selected=\"selected\">
                ";
            // line 14
            echo twig_escape_filter($this->env, $context["each_field"], "html", null, true);
            echo "
            </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['each_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </select>
    <input type=\"checkbox\" name=\"distinct\" value=\"DISTINCT\" id=\"oDistinct\" />
    <label for=\"oDistinct\">DISTINCT</label>
</fieldset>

";
        // line 23
        echo "<fieldset id=\"fieldset_search_conditions\">
    <legend>
        <em>";
        // line 25
        echo _gettext("Or");
        echo "</em>
        ";
        // line 26
        echo _gettext("Add search conditions (body of the \"where\" clause):");
        // line 27
        echo "    </legend>
    ";
        // line 28
        echo PhpMyAdmin\Util::showMySQLDocu("Functions");
        echo "
    <input type=\"text\" name=\"customWhereClause\" class=\"textfield\" size=\"64\" />
</fieldset>

";
        // line 33
        echo "<fieldset id=\"fieldset_limit_rows\">
    <legend>";
        // line 34
        echo _gettext("Number of rows per page");
        echo "</legend>
    <input type=\"number\"
        name=\"session_max_rows\"
        required=\"required\"
        min=\"1\"
        value=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["max_rows"] ?? null), "html", null, true);
        echo "\"
        class=\"textfield\" />
</fieldset>

";
        // line 44
        echo "<fieldset id=\"fieldset_display_order\">
    <legend>";
        // line 45
        echo _gettext("Display order:");
        echo "</legend>
    <select name=\"orderByColumn\"><option value=\"--nil--\"></option>
        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["column_names"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["each_field"]) {
            // line 48
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["each_field"], "html", null, true);
            echo "\">
                ";
            // line 49
            echo twig_escape_filter($this->env, $context["each_field"], "html", null, true);
            echo "
            </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['each_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </select>

    ";
        // line 54
        echo PhpMyAdmin\Util::getRadioFields("order", ["ASC" => _gettext("Ascending"), "DESC" => _gettext("Descending")], "ASC", false, true, "formelement");
        // line 64
        echo "

</fieldset>
<div class=\"clearfloat\"></div>
";
    }

    public function getTemplateName()
    {
        return "table/search/options.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 64,  151 => 54,  147 => 52,  138 => 49,  133 => 48,  129 => 47,  124 => 45,  121 => 44,  114 => 39,  106 => 34,  103 => 33,  96 => 28,  93 => 27,  91 => 26,  87 => 25,  83 => 23,  76 => 17,  67 => 14,  61 => 12,  57 => 11,  52 => 9,  48 => 7,  46 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/search/options.twig", "/var/www/html/typo3conf/ext/phpmyadmin/Vendor/phpMyAdmin-4.9.6-all-languages/templates/table/search/options.twig");
    }
}
