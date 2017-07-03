<?php

/* @OCPlatform/Annonce/layout.html.twig */
class __TwigTemplate_8c940166e10130299ea5be5e9e180d4d3caa08ec7b363182b9f9521f5500bd58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@OCPlatform/Annonce/layout.html.twig", 1);
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
        $__internal_12d738fc968d637ed7068cb7572439d2850ac363ef124e696ed653b3b18f61f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12d738fc968d637ed7068cb7572439d2850ac363ef124e696ed653b3b18f61f7->enter($__internal_12d738fc968d637ed7068cb7572439d2850ac363ef124e696ed653b3b18f61f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Annonce/layout.html.twig"));

        $__internal_0a2e6b051b0fe8140bb80e6cb1f22ac43fad99c8042bb9af6806936398176bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a2e6b051b0fe8140bb80e6cb1f22ac43fad99c8042bb9af6806936398176bbd->enter($__internal_0a2e6b051b0fe8140bb80e6cb1f22ac43fad99c8042bb9af6806936398176bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Annonce/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12d738fc968d637ed7068cb7572439d2850ac363ef124e696ed653b3b18f61f7->leave($__internal_12d738fc968d637ed7068cb7572439d2850ac363ef124e696ed653b3b18f61f7_prof);

        
        $__internal_0a2e6b051b0fe8140bb80e6cb1f22ac43fad99c8042bb9af6806936398176bbd->leave($__internal_0a2e6b051b0fe8140bb80e6cb1f22ac43fad99c8042bb9af6806936398176bbd_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_82f532c5ed0ce29ed7b1f2ec5a249afe417f4bbdb90e41c71c13bc6cc7977066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82f532c5ed0ce29ed7b1f2ec5a249afe417f4bbdb90e41c71c13bc6cc7977066->enter($__internal_82f532c5ed0ce29ed7b1f2ec5a249afe417f4bbdb90e41c71c13bc6cc7977066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0d9912352da5ffc94a2c080453a65458c04cc3f50ef64114fa5a3bdd948f2964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d9912352da5ffc94a2c080453a65458c04cc3f50ef64114fa5a3bdd948f2964->enter($__internal_0d9912352da5ffc94a2c080453a65458c04cc3f50ef64114fa5a3bdd948f2964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_0d9912352da5ffc94a2c080453a65458c04cc3f50ef64114fa5a3bdd948f2964->leave($__internal_0d9912352da5ffc94a2c080453a65458c04cc3f50ef64114fa5a3bdd948f2964_prof);

        
        $__internal_82f532c5ed0ce29ed7b1f2ec5a249afe417f4bbdb90e41c71c13bc6cc7977066->leave($__internal_82f532c5ed0ce29ed7b1f2ec5a249afe417f4bbdb90e41c71c13bc6cc7977066_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f05646ee5fb8fd802d0470a5a7b79561c3ab78fc376474a55a1d6b14cf2c3e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f05646ee5fb8fd802d0470a5a7b79561c3ab78fc376474a55a1d6b14cf2c3e3->enter($__internal_3f05646ee5fb8fd802d0470a5a7b79561c3ab78fc376474a55a1d6b14cf2c3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9c6000e0f0634e97348ed87d7a99b112ab688c4cfa396f45bf321fa7441d9b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6000e0f0634e97348ed87d7a99b112ab688c4cfa396f45bf321fa7441d9b6f->enter($__internal_9c6000e0f0634e97348ed87d7a99b112ab688c4cfa396f45bf321fa7441d9b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Annonce</h1>
    ";
        // line 5
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_9c6000e0f0634e97348ed87d7a99b112ab688c4cfa396f45bf321fa7441d9b6f->leave($__internal_9c6000e0f0634e97348ed87d7a99b112ab688c4cfa396f45bf321fa7441d9b6f_prof);

        
        $__internal_3f05646ee5fb8fd802d0470a5a7b79561c3ab78fc376474a55a1d6b14cf2c3e3->leave($__internal_3f05646ee5fb8fd802d0470a5a7b79561c3ab78fc376474a55a1d6b14cf2c3e3_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_181b9ae07d6214f59d4b0c2259943f81766a726cd8b5ccc36cab9f754df7ffc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_181b9ae07d6214f59d4b0c2259943f81766a726cd8b5ccc36cab9f754df7ffc0->enter($__internal_181b9ae07d6214f59d4b0c2259943f81766a726cd8b5ccc36cab9f754df7ffc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_c713c34eea248d0b3f6b7d94b1d84b236733beb610795e2944bf1121bea12f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c713c34eea248d0b3f6b7d94b1d84b236733beb610795e2944bf1121bea12f67->enter($__internal_c713c34eea248d0b3f6b7d94b1d84b236733beb610795e2944bf1121bea12f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_c713c34eea248d0b3f6b7d94b1d84b236733beb610795e2944bf1121bea12f67->leave($__internal_c713c34eea248d0b3f6b7d94b1d84b236733beb610795e2944bf1121bea12f67_prof);

        
        $__internal_181b9ae07d6214f59d4b0c2259943f81766a726cd8b5ccc36cab9f754df7ffc0->leave($__internal_181b9ae07d6214f59d4b0c2259943f81766a726cd8b5ccc36cab9f754df7ffc0_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Annonce/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 5,  69 => 4,  60 => 3,  42 => 2,  11 => 1,);
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
    <h1>Annonce</h1>
    {% block body_layout %}{% endblock %}
{% endblock %}", "@OCPlatform/Annonce/layout.html.twig", "C:\\xampp\\htdocs\\symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Annonce\\layout.html.twig");
    }
}
