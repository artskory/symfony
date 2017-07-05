<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_7458fe10c2397f5dbbfdb129604d59f8739a2aba4dcc38b637474c05d9ca2c02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d69e8fd08761fb56d0523759c143b53dd3d05a95d82dc45daa96e4a3a12f8b9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d69e8fd08761fb56d0523759c143b53dd3d05a95d82dc45daa96e4a3a12f8b9c->enter($__internal_d69e8fd08761fb56d0523759c143b53dd3d05a95d82dc45daa96e4a3a12f8b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_82aaebd479162e5d3f3310ed9f24caf13611ef3430f0ba71a27287f6675fa281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82aaebd479162e5d3f3310ed9f24caf13611ef3430f0ba71a27287f6675fa281->enter($__internal_82aaebd479162e5d3f3310ed9f24caf13611ef3430f0ba71a27287f6675fa281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d69e8fd08761fb56d0523759c143b53dd3d05a95d82dc45daa96e4a3a12f8b9c->leave($__internal_d69e8fd08761fb56d0523759c143b53dd3d05a95d82dc45daa96e4a3a12f8b9c_prof);

        
        $__internal_82aaebd479162e5d3f3310ed9f24caf13611ef3430f0ba71a27287f6675fa281->leave($__internal_82aaebd479162e5d3f3310ed9f24caf13611ef3430f0ba71a27287f6675fa281_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8a0bf5ec3e0b5be1a79f52491d0a2ea9d1463f4c130c3bb0d8bc6f400eca2cfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a0bf5ec3e0b5be1a79f52491d0a2ea9d1463f4c130c3bb0d8bc6f400eca2cfe->enter($__internal_8a0bf5ec3e0b5be1a79f52491d0a2ea9d1463f4c130c3bb0d8bc6f400eca2cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_40f9daed3c7f9f278df9741509b524a25e54dbf3c3d2f412870db731b31e42e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f9daed3c7f9f278df9741509b524a25e54dbf3c3d2f412870db731b31e42e1->enter($__internal_40f9daed3c7f9f278df9741509b524a25e54dbf3c3d2f412870db731b31e42e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_40f9daed3c7f9f278df9741509b524a25e54dbf3c3d2f412870db731b31e42e1->leave($__internal_40f9daed3c7f9f278df9741509b524a25e54dbf3c3d2f412870db731b31e42e1_prof);

        
        $__internal_8a0bf5ec3e0b5be1a79f52491d0a2ea9d1463f4c130c3bb0d8bc6f400eca2cfe->leave($__internal_8a0bf5ec3e0b5be1a79f52491d0a2ea9d1463f4c130c3bb0d8bc6f400eca2cfe_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit.html.twig");
    }
}
