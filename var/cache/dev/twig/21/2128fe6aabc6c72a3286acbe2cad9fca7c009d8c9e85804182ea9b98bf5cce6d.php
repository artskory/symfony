<?php

/* blog/years_archives.html.twig */
class __TwigTemplate_3365044743fc479708f365bd0e15f3d4c98395fbf2ac7a6ba6542c76ff1f19ab extends Twig_Template
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
        $__internal_202b64396860ba3e753c474ed7ff1b31faa8fff4c1174e121a787ad56df1f717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_202b64396860ba3e753c474ed7ff1b31faa8fff4c1174e121a787ad56df1f717->enter($__internal_202b64396860ba3e753c474ed7ff1b31faa8fff4c1174e121a787ad56df1f717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/years_archives.html.twig"));

        $__internal_f3efa3b487b85d932ee513305b0b8838bec4a8963badd5482066411aeade8e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3efa3b487b85d932ee513305b0b8838bec4a8963badd5482066411aeade8e24->enter($__internal_f3efa3b487b85d932ee513305b0b8838bec4a8963badd5482066411aeade8e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/years_archives.html.twig"));

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
        
        $__internal_202b64396860ba3e753c474ed7ff1b31faa8fff4c1174e121a787ad56df1f717->leave($__internal_202b64396860ba3e753c474ed7ff1b31faa8fff4c1174e121a787ad56df1f717_prof);

        
        $__internal_f3efa3b487b85d932ee513305b0b8838bec4a8963badd5482066411aeade8e24->leave($__internal_f3efa3b487b85d932ee513305b0b8838bec4a8963badd5482066411aeade8e24_prof);

    }

    public function getTemplateName()
    {
        return "blog/years_archives.html.twig";
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


</ul>", "blog/years_archives.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\blog\\years_archives.html.twig");
    }
}
