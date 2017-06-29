<?php

/* :blog:years_archives.html.twig */
class __TwigTemplate_4b29bb56c216983a479b6a04a61c4c08b88f7b22bc4e915282342cb57ec834da extends Twig_Template
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
        $__internal_f819ca3a10c56d38dac862b2f8e8b1ee533943785eea16a09689e608dc0091a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f819ca3a10c56d38dac862b2f8e8b1ee533943785eea16a09689e608dc0091a3->enter($__internal_f819ca3a10c56d38dac862b2f8e8b1ee533943785eea16a09689e608dc0091a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:years_archives.html.twig"));

        $__internal_9f2c4ad8c309cb6ac536c929eae6b65acd15b74e183281c3f685dc3b61fe1400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f2c4ad8c309cb6ac536c929eae6b65acd15b74e183281c3f685dc3b61fe1400->enter($__internal_9f2c4ad8c309cb6ac536c929eae6b65acd15b74e183281c3f685dc3b61fe1400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:years_archives.html.twig"));

        // line 1
        echo "<h4>Archive</h4>
<ul class=\"list-unstyled\">
    
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["years"] ?? $this->getContext($context, "years")));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 5
            echo "    
    <li><a href='";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("archives_blog", array("year" => $this->getAttribute($context["year"], 1, array(), "array"))), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["year"], 1, array(), "array"), "html", null, true);
            echo "</a></li>
    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "

</ul>";
        
        $__internal_f819ca3a10c56d38dac862b2f8e8b1ee533943785eea16a09689e608dc0091a3->leave($__internal_f819ca3a10c56d38dac862b2f8e8b1ee533943785eea16a09689e608dc0091a3_prof);

        
        $__internal_9f2c4ad8c309cb6ac536c929eae6b65acd15b74e183281c3f685dc3b61fe1400->leave($__internal_9f2c4ad8c309cb6ac536c929eae6b65acd15b74e183281c3f685dc3b61fe1400_prof);

    }

    public function getTemplateName()
    {
        return ":blog:years_archives.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  37 => 6,  34 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h4>Archive</h4>
<ul class=\"list-unstyled\">
    
{% for year in years %}
    
    <li><a href='{{ path('archives_blog', {year : year[1]}) }}'>{{ year[1] }}</a></li>
    
{% endfor %}


</ul>", ":blog:years_archives.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/blog/years_archives.html.twig");
    }
}
