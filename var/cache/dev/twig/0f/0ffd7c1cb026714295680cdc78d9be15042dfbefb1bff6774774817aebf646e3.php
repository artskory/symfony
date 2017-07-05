<?php

/* @KnpPaginator/Pagination/filtration.html.twig */
class __TwigTemplate_f83000e9825645fd3fe56a3b0c457940c84709c8d7b07ef34cc723fb426d3424 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3347c00991424035cbbb307a622cea31f11daad19fed6b80bca5c1273df4909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3347c00991424035cbbb307a622cea31f11daad19fed6b80bca5c1273df4909->enter($__internal_c3347c00991424035cbbb307a622cea31f11daad19fed6b80bca5c1273df4909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/filtration.html.twig"));

        $__internal_a014f0647b7b73b2096f41224a03406b926c23cdb592cb22edc29996d1b0ae70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a014f0647b7b73b2096f41224a03406b926c23cdb592cb22edc29996d1b0ae70->enter($__internal_a014f0647b7b73b2096f41224a03406b926c23cdb592cb22edc29996d1b0ae70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/filtration.html.twig"));

        // line 1
        echo "<form method=\"get\" action=\"";
        echo twig_escape_filter($this->env, ($context["action"] ?? $this->getContext($context, "action")), "html", null, true);
        echo "\" enctype=\"application/x-www-form-urlencoded\">

    <select name=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["filterFieldName"] ?? $this->getContext($context, "filterFieldName")), "html", null, true);
        echo "\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["label"]) {
            // line 5
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
            echo "\"";
            if ((($context["selectedField"] ?? $this->getContext($context, "selectedField")) == $context["field"])) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </select>

    <input type=\"text\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["selectedValue"] ?? $this->getContext($context, "selectedValue")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["filterValueName"] ?? $this->getContext($context, "filterValueName")), "html", null, true);
        echo "\" />

    <button>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "button", array()), "html", null, true);
        echo "</button>

</form>
";
        
        $__internal_c3347c00991424035cbbb307a622cea31f11daad19fed6b80bca5c1273df4909->leave($__internal_c3347c00991424035cbbb307a622cea31f11daad19fed6b80bca5c1273df4909_prof);

        
        $__internal_a014f0647b7b73b2096f41224a03406b926c23cdb592cb22edc29996d1b0ae70->leave($__internal_a014f0647b7b73b2096f41224a03406b926c23cdb592cb22edc29996d1b0ae70_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/filtration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  58 => 9,  54 => 7,  39 => 5,  35 => 4,  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form method=\"get\" action=\"{{ action }}\" enctype=\"application/x-www-form-urlencoded\">

    <select name=\"{{ filterFieldName }}\">
        {% for field, label in fields %}
            <option value=\"{{ field }}\"{% if selectedField == field %} selected=\"selected\"{% endif %}>{{ label }}</option>
        {% endfor %}
    </select>

    <input type=\"text\" value=\"{{ selectedValue }}\" name=\"{{ filterValueName }}\" />

    <button>{{ options.button }}</button>

</form>
", "@KnpPaginator/Pagination/filtration.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\knplabs\\knp-paginator-bundle\\Resources\\views\\Pagination\\filtration.html.twig");
    }
}
