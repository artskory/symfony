<?php

/* @OCPlatform/Annonce/index.html.twig */
class __TwigTemplate_a30b7420afdfa0a8cd77ab67b4026410323e7e21619a27e8f010cbabdff7d20c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle:Annonce:layout.html.twig", "@OCPlatform/Annonce/index.html.twig", 1);
        $this->blocks = array(
            'body_layout' => array($this, 'block_body_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle:Annonce:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6628b65547700faa22f2727536d82f28a343e83eed070413c7d08c06f69ac25e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6628b65547700faa22f2727536d82f28a343e83eed070413c7d08c06f69ac25e->enter($__internal_6628b65547700faa22f2727536d82f28a343e83eed070413c7d08c06f69ac25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Annonce/index.html.twig"));

        $__internal_538c2ec5077c2718718c181a7d516e9bbb3a21de9535693bd33181bc5bcdc266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_538c2ec5077c2718718c181a7d516e9bbb3a21de9535693bd33181bc5bcdc266->enter($__internal_538c2ec5077c2718718c181a7d516e9bbb3a21de9535693bd33181bc5bcdc266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Annonce/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6628b65547700faa22f2727536d82f28a343e83eed070413c7d08c06f69ac25e->leave($__internal_6628b65547700faa22f2727536d82f28a343e83eed070413c7d08c06f69ac25e_prof);

        
        $__internal_538c2ec5077c2718718c181a7d516e9bbb3a21de9535693bd33181bc5bcdc266->leave($__internal_538c2ec5077c2718718c181a7d516e9bbb3a21de9535693bd33181bc5bcdc266_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_573bbd748974a104907470bbaad1f61dd72aeabae9a8a737ff5343712bca28bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_573bbd748974a104907470bbaad1f61dd72aeabae9a8a737ff5343712bca28bd->enter($__internal_573bbd748974a104907470bbaad1f61dd72aeabae9a8a737ff5343712bca28bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_0b6bbd3e0d3d81ef21bb18552e21ee5908c72a71c24da4c549e0a3908f8fc90f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b6bbd3e0d3d81ef21bb18552e21ee5908c72a71c24da4c549e0a3908f8fc90f->enter($__internal_0b6bbd3e0d3d81ef21bb18552e21ee5908c72a71c24da4c549e0a3908f8fc90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 4
        echo "
";
        
        $__internal_0b6bbd3e0d3d81ef21bb18552e21ee5908c72a71c24da4c549e0a3908f8fc90f->leave($__internal_0b6bbd3e0d3d81ef21bb18552e21ee5908c72a71c24da4c549e0a3908f8fc90f_prof);

        
        $__internal_573bbd748974a104907470bbaad1f61dd72aeabae9a8a737ff5343712bca28bd->leave($__internal_573bbd748974a104907470bbaad1f61dd72aeabae9a8a737ff5343712bca28bd_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Annonce/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCPlatformBundle:Annonce:layout.html.twig\" %}

{% block body_layout %}

{% endblock %}
", "@OCPlatform/Annonce/index.html.twig", "C:\\xampp\\htdocs\\symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Annonce\\index.html.twig");
    }
}
