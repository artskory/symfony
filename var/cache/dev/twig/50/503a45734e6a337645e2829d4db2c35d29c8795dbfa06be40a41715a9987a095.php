<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c95d7577480026db6c59a326da20857bd700074e85bcf3ae42a7841f04561846 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_553014b55fa06798c142075d8797b563f279f166601dd24f938adf74fcb90e3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_553014b55fa06798c142075d8797b563f279f166601dd24f938adf74fcb90e3d->enter($__internal_553014b55fa06798c142075d8797b563f279f166601dd24f938adf74fcb90e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5ebed05a2d8b8ac9018961a1d1389591e49cb0aa0de4a11e384aec0f0cd414dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ebed05a2d8b8ac9018961a1d1389591e49cb0aa0de4a11e384aec0f0cd414dc->enter($__internal_5ebed05a2d8b8ac9018961a1d1389591e49cb0aa0de4a11e384aec0f0cd414dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_553014b55fa06798c142075d8797b563f279f166601dd24f938adf74fcb90e3d->leave($__internal_553014b55fa06798c142075d8797b563f279f166601dd24f938adf74fcb90e3d_prof);

        
        $__internal_5ebed05a2d8b8ac9018961a1d1389591e49cb0aa0de4a11e384aec0f0cd414dc->leave($__internal_5ebed05a2d8b8ac9018961a1d1389591e49cb0aa0de4a11e384aec0f0cd414dc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b497ec8f3201efa15d09bd74da20db9feac4b6c604cf7dfd56690f42b70f6d4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b497ec8f3201efa15d09bd74da20db9feac4b6c604cf7dfd56690f42b70f6d4b->enter($__internal_b497ec8f3201efa15d09bd74da20db9feac4b6c604cf7dfd56690f42b70f6d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_79fc2bf54a264e84b2b8a99afd6a965f016ce9956c224ebb1377e6d823239231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79fc2bf54a264e84b2b8a99afd6a965f016ce9956c224ebb1377e6d823239231->enter($__internal_79fc2bf54a264e84b2b8a99afd6a965f016ce9956c224ebb1377e6d823239231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_79fc2bf54a264e84b2b8a99afd6a965f016ce9956c224ebb1377e6d823239231->leave($__internal_79fc2bf54a264e84b2b8a99afd6a965f016ce9956c224ebb1377e6d823239231_prof);

        
        $__internal_b497ec8f3201efa15d09bd74da20db9feac4b6c604cf7dfd56690f42b70f6d4b->leave($__internal_b497ec8f3201efa15d09bd74da20db9feac4b6c604cf7dfd56690f42b70f6d4b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ec94956b3e71f3b28aa45fa9517046fb8bf3e3579a58479d0f9a1d511b2d35d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec94956b3e71f3b28aa45fa9517046fb8bf3e3579a58479d0f9a1d511b2d35d2->enter($__internal_ec94956b3e71f3b28aa45fa9517046fb8bf3e3579a58479d0f9a1d511b2d35d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_66642c60d295b111da0dd0a58117ff5beab7db00caa4af543767e19b21f44df6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66642c60d295b111da0dd0a58117ff5beab7db00caa4af543767e19b21f44df6->enter($__internal_66642c60d295b111da0dd0a58117ff5beab7db00caa4af543767e19b21f44df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_66642c60d295b111da0dd0a58117ff5beab7db00caa4af543767e19b21f44df6->leave($__internal_66642c60d295b111da0dd0a58117ff5beab7db00caa4af543767e19b21f44df6_prof);

        
        $__internal_ec94956b3e71f3b28aa45fa9517046fb8bf3e3579a58479d0f9a1d511b2d35d2->leave($__internal_ec94956b3e71f3b28aa45fa9517046fb8bf3e3579a58479d0f9a1d511b2d35d2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4319c962dc8b33969245b6d51a28471ea39df6271b5fcbf9969b98264d2c7311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4319c962dc8b33969245b6d51a28471ea39df6271b5fcbf9969b98264d2c7311->enter($__internal_4319c962dc8b33969245b6d51a28471ea39df6271b5fcbf9969b98264d2c7311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3bbc0770b37eaacad23e1a42426e12d7a447269483c8e961865194caf1919b40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bbc0770b37eaacad23e1a42426e12d7a447269483c8e961865194caf1919b40->enter($__internal_3bbc0770b37eaacad23e1a42426e12d7a447269483c8e961865194caf1919b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3bbc0770b37eaacad23e1a42426e12d7a447269483c8e961865194caf1919b40->leave($__internal_3bbc0770b37eaacad23e1a42426e12d7a447269483c8e961865194caf1919b40_prof);

        
        $__internal_4319c962dc8b33969245b6d51a28471ea39df6271b5fcbf9969b98264d2c7311->leave($__internal_4319c962dc8b33969245b6d51a28471ea39df6271b5fcbf9969b98264d2c7311_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
