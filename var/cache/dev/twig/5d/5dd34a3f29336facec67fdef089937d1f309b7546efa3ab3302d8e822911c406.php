<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_39f88517022ae729622b7fc6d11b8ee9b6abf3a39bc372cc930f84e544797791 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_185658b837d6ab75b03abfa06b9c2b624432a8a629685e7fbd23f7ef3fe268b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_185658b837d6ab75b03abfa06b9c2b624432a8a629685e7fbd23f7ef3fe268b3->enter($__internal_185658b837d6ab75b03abfa06b9c2b624432a8a629685e7fbd23f7ef3fe268b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_16bafb1a44923db22609bfaf069a22b41b3c82a8bc3c8a224d2d54a5aa46e818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16bafb1a44923db22609bfaf069a22b41b3c82a8bc3c8a224d2d54a5aa46e818->enter($__internal_16bafb1a44923db22609bfaf069a22b41b3c82a8bc3c8a224d2d54a5aa46e818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_185658b837d6ab75b03abfa06b9c2b624432a8a629685e7fbd23f7ef3fe268b3->leave($__internal_185658b837d6ab75b03abfa06b9c2b624432a8a629685e7fbd23f7ef3fe268b3_prof);

        
        $__internal_16bafb1a44923db22609bfaf069a22b41b3c82a8bc3c8a224d2d54a5aa46e818->leave($__internal_16bafb1a44923db22609bfaf069a22b41b3c82a8bc3c8a224d2d54a5aa46e818_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0554212c7ace1cebdcb63db7c03ed3bfba1544a9871928ead85e0a1ab56f86b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0554212c7ace1cebdcb63db7c03ed3bfba1544a9871928ead85e0a1ab56f86b0->enter($__internal_0554212c7ace1cebdcb63db7c03ed3bfba1544a9871928ead85e0a1ab56f86b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b6e8d2914c86b9f5e5511aa1afd03ba67d7e9bd07943dd77fec92c48c939c71b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6e8d2914c86b9f5e5511aa1afd03ba67d7e9bd07943dd77fec92c48c939c71b->enter($__internal_b6e8d2914c86b9f5e5511aa1afd03ba67d7e9bd07943dd77fec92c48c939c71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b6e8d2914c86b9f5e5511aa1afd03ba67d7e9bd07943dd77fec92c48c939c71b->leave($__internal_b6e8d2914c86b9f5e5511aa1afd03ba67d7e9bd07943dd77fec92c48c939c71b_prof);

        
        $__internal_0554212c7ace1cebdcb63db7c03ed3bfba1544a9871928ead85e0a1ab56f86b0->leave($__internal_0554212c7ace1cebdcb63db7c03ed3bfba1544a9871928ead85e0a1ab56f86b0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
