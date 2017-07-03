<?php

/* :maintenance:layout.html.twig */
class __TwigTemplate_cfdec7b1ce6f77c86d86f0ff263710a6765af9a7e1c59ec2be0e9aa36d269d0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":maintenance:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'body_layout' => array($this, 'block_body_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07bc7618b4ae992a5a24f6fb863a29aa9118a996728cd569dd64127d6950979a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07bc7618b4ae992a5a24f6fb863a29aa9118a996728cd569dd64127d6950979a->enter($__internal_07bc7618b4ae992a5a24f6fb863a29aa9118a996728cd569dd64127d6950979a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":maintenance:layout.html.twig"));

        $__internal_11988894a99e7c82f9139f4310c327e23d6f76c41b899bccdc2ba2fd22148814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11988894a99e7c82f9139f4310c327e23d6f76c41b899bccdc2ba2fd22148814->enter($__internal_11988894a99e7c82f9139f4310c327e23d6f76c41b899bccdc2ba2fd22148814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":maintenance:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07bc7618b4ae992a5a24f6fb863a29aa9118a996728cd569dd64127d6950979a->leave($__internal_07bc7618b4ae992a5a24f6fb863a29aa9118a996728cd569dd64127d6950979a_prof);

        
        $__internal_11988894a99e7c82f9139f4310c327e23d6f76c41b899bccdc2ba2fd22148814->leave($__internal_11988894a99e7c82f9139f4310c327e23d6f76c41b899bccdc2ba2fd22148814_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_812c3d6aaa30bded2b29c9dfb495c4ba14ae47a99c190f9d5217eae843e2d803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_812c3d6aaa30bded2b29c9dfb495c4ba14ae47a99c190f9d5217eae843e2d803->enter($__internal_812c3d6aaa30bded2b29c9dfb495c4ba14ae47a99c190f9d5217eae843e2d803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f4f2c7f0fcfc44d1ceca9e4b136acf67bb334630ec1c4b19d297041fa48bb803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f2c7f0fcfc44d1ceca9e4b136acf67bb334630ec1c4b19d297041fa48bb803->enter($__internal_f4f2c7f0fcfc44d1ceca9e4b136acf67bb334630ec1c4b19d297041fa48bb803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_f4f2c7f0fcfc44d1ceca9e4b136acf67bb334630ec1c4b19d297041fa48bb803->leave($__internal_f4f2c7f0fcfc44d1ceca9e4b136acf67bb334630ec1c4b19d297041fa48bb803_prof);

        
        $__internal_812c3d6aaa30bded2b29c9dfb495c4ba14ae47a99c190f9d5217eae843e2d803->leave($__internal_812c3d6aaa30bded2b29c9dfb495c4ba14ae47a99c190f9d5217eae843e2d803_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_856ed66648986b9133c0094e41d3cbe79b898b3425e64bf4f81169e33d524eb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_856ed66648986b9133c0094e41d3cbe79b898b3425e64bf4f81169e33d524eb9->enter($__internal_856ed66648986b9133c0094e41d3cbe79b898b3425e64bf4f81169e33d524eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27b075da491e3f7fc4ff79e8a56d4cfb866dec9fadac67ebe65aecc5d6284aa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b075da491e3f7fc4ff79e8a56d4cfb866dec9fadac67ebe65aecc5d6284aa5->enter($__internal_27b075da491e3f7fc4ff79e8a56d4cfb866dec9fadac67ebe65aecc5d6284aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    <h1>Maintenance</h1>
    ";
        // line 6
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_27b075da491e3f7fc4ff79e8a56d4cfb866dec9fadac67ebe65aecc5d6284aa5->leave($__internal_27b075da491e3f7fc4ff79e8a56d4cfb866dec9fadac67ebe65aecc5d6284aa5_prof);

        
        $__internal_856ed66648986b9133c0094e41d3cbe79b898b3425e64bf4f81169e33d524eb9->leave($__internal_856ed66648986b9133c0094e41d3cbe79b898b3425e64bf4f81169e33d524eb9_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_fad8dcc8f473cc2049186a9f38df0cc6f0aa0c5731dafc94851d07093dc27d60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fad8dcc8f473cc2049186a9f38df0cc6f0aa0c5731dafc94851d07093dc27d60->enter($__internal_fad8dcc8f473cc2049186a9f38df0cc6f0aa0c5731dafc94851d07093dc27d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_ecd89cd21ea27b71ac28a4f58159cbc26399ca7b04b4538c941de9adc7d8368e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd89cd21ea27b71ac28a4f58159cbc26399ca7b04b4538c941de9adc7d8368e->enter($__internal_ecd89cd21ea27b71ac28a4f58159cbc26399ca7b04b4538c941de9adc7d8368e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_ecd89cd21ea27b71ac28a4f58159cbc26399ca7b04b4538c941de9adc7d8368e->leave($__internal_ecd89cd21ea27b71ac28a4f58159cbc26399ca7b04b4538c941de9adc7d8368e_prof);

        
        $__internal_fad8dcc8f473cc2049186a9f38df0cc6f0aa0c5731dafc94851d07093dc27d60->leave($__internal_fad8dcc8f473cc2049186a9f38df0cc6f0aa0c5731dafc94851d07093dc27d60_prof);

    }

    public function getTemplateName()
    {
        return ":maintenance:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 6,  69 => 4,  60 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block title %}Blog{% endblock %}
{% block body %}
    
    <h1>Maintenance</h1>
    {% block body_layout %}{% endblock %}
{% endblock %}", ":maintenance:layout.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/maintenance/layout.html.twig");
    }
}
