<?php

/* blog/years_archives.html.twig */
class __TwigTemplate_09a6e72dbbe04e5128cde1a302f16762ded4b7ba6b0e68cf4df1c3bd47dca57f extends Twig_Template
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
        $__internal_7b09571a376906f1270e728bbb06d9af81861deeda90cf7d8523c9ac47ea8ec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b09571a376906f1270e728bbb06d9af81861deeda90cf7d8523c9ac47ea8ec8->enter($__internal_7b09571a376906f1270e728bbb06d9af81861deeda90cf7d8523c9ac47ea8ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/years_archives.html.twig"));

        $__internal_c5e7651dfb08464b5c6d5b8522bdee1071ff38ab805d9dc23739de8e8a6f4ebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e7651dfb08464b5c6d5b8522bdee1071ff38ab805d9dc23739de8e8a6f4ebb->enter($__internal_c5e7651dfb08464b5c6d5b8522bdee1071ff38ab805d9dc23739de8e8a6f4ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/years_archives.html.twig"));

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
        
        $__internal_7b09571a376906f1270e728bbb06d9af81861deeda90cf7d8523c9ac47ea8ec8->leave($__internal_7b09571a376906f1270e728bbb06d9af81861deeda90cf7d8523c9ac47ea8ec8_prof);

        
        $__internal_c5e7651dfb08464b5c6d5b8522bdee1071ff38ab805d9dc23739de8e8a6f4ebb->leave($__internal_c5e7651dfb08464b5c6d5b8522bdee1071ff38ab805d9dc23739de8e8a6f4ebb_prof);

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
