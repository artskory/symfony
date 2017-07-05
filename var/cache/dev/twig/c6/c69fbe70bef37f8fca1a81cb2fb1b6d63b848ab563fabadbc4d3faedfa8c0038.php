<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_dd949061b47ff61811c2ca0c7e15959937935ea237ece5194a444d1e8a2ea878 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b560f94de51eaed46c06cb897c7f6eea238f7b39b4a901c281e4cef3cafb2ab7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b560f94de51eaed46c06cb897c7f6eea238f7b39b4a901c281e4cef3cafb2ab7->enter($__internal_b560f94de51eaed46c06cb897c7f6eea238f7b39b4a901c281e4cef3cafb2ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_84760565f3602c9f61be8745eca5a85f1f878cfd6bc17ac82a4a6744d89d5217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84760565f3602c9f61be8745eca5a85f1f878cfd6bc17ac82a4a6744d89d5217->enter($__internal_84760565f3602c9f61be8745eca5a85f1f878cfd6bc17ac82a4a6744d89d5217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b560f94de51eaed46c06cb897c7f6eea238f7b39b4a901c281e4cef3cafb2ab7->leave($__internal_b560f94de51eaed46c06cb897c7f6eea238f7b39b4a901c281e4cef3cafb2ab7_prof);

        
        $__internal_84760565f3602c9f61be8745eca5a85f1f878cfd6bc17ac82a4a6744d89d5217->leave($__internal_84760565f3602c9f61be8745eca5a85f1f878cfd6bc17ac82a4a6744d89d5217_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_745aee423e170a58cb76407fcc7eaf9669dea2095829457b87bb995f3d22f122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_745aee423e170a58cb76407fcc7eaf9669dea2095829457b87bb995f3d22f122->enter($__internal_745aee423e170a58cb76407fcc7eaf9669dea2095829457b87bb995f3d22f122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a040dd2abdec75017cc6791d24beae95ca75bfd9437a01f8cb5bd7b57c80478e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a040dd2abdec75017cc6791d24beae95ca75bfd9437a01f8cb5bd7b57c80478e->enter($__internal_a040dd2abdec75017cc6791d24beae95ca75bfd9437a01f8cb5bd7b57c80478e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a040dd2abdec75017cc6791d24beae95ca75bfd9437a01f8cb5bd7b57c80478e->leave($__internal_a040dd2abdec75017cc6791d24beae95ca75bfd9437a01f8cb5bd7b57c80478e_prof);

        
        $__internal_745aee423e170a58cb76407fcc7eaf9669dea2095829457b87bb995f3d22f122->leave($__internal_745aee423e170a58cb76407fcc7eaf9669dea2095829457b87bb995f3d22f122_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d95dc5bd432d0f8206026dbadd78e6b00778d5fcdf763f16d7b5353a4722bbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d95dc5bd432d0f8206026dbadd78e6b00778d5fcdf763f16d7b5353a4722bbb->enter($__internal_7d95dc5bd432d0f8206026dbadd78e6b00778d5fcdf763f16d7b5353a4722bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a9b5909b62bc1e24122f4eec454b6d886f050854de50665df9e4e18c80597853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b5909b62bc1e24122f4eec454b6d886f050854de50665df9e4e18c80597853->enter($__internal_a9b5909b62bc1e24122f4eec454b6d886f050854de50665df9e4e18c80597853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a9b5909b62bc1e24122f4eec454b6d886f050854de50665df9e4e18c80597853->leave($__internal_a9b5909b62bc1e24122f4eec454b6d886f050854de50665df9e4e18c80597853_prof);

        
        $__internal_7d95dc5bd432d0f8206026dbadd78e6b00778d5fcdf763f16d7b5353a4722bbb->leave($__internal_7d95dc5bd432d0f8206026dbadd78e6b00778d5fcdf763f16d7b5353a4722bbb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
