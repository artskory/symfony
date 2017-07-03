<?php

/* maintenance/layout.html.twig */
class __TwigTemplate_dd2b1f25fb31b54fc7231a5763394747bdf1691b30cf474089b74827b362db93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "maintenance/layout.html.twig", 1);
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
        $__internal_d34a3fb154064bd5e8bafd9d9d51134712d12df8529f6d9fa5d16c4331295230 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d34a3fb154064bd5e8bafd9d9d51134712d12df8529f6d9fa5d16c4331295230->enter($__internal_d34a3fb154064bd5e8bafd9d9d51134712d12df8529f6d9fa5d16c4331295230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "maintenance/layout.html.twig"));

        $__internal_43e00aaf4303eec03ab66509666107b2694f6b76decc145508b2d8d8cf1e5fae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43e00aaf4303eec03ab66509666107b2694f6b76decc145508b2d8d8cf1e5fae->enter($__internal_43e00aaf4303eec03ab66509666107b2694f6b76decc145508b2d8d8cf1e5fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "maintenance/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d34a3fb154064bd5e8bafd9d9d51134712d12df8529f6d9fa5d16c4331295230->leave($__internal_d34a3fb154064bd5e8bafd9d9d51134712d12df8529f6d9fa5d16c4331295230_prof);

        
        $__internal_43e00aaf4303eec03ab66509666107b2694f6b76decc145508b2d8d8cf1e5fae->leave($__internal_43e00aaf4303eec03ab66509666107b2694f6b76decc145508b2d8d8cf1e5fae_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b33c38b4d05ff1f40f817c07e0c54bf911927266dd701c74fe94172ca0a2de2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b33c38b4d05ff1f40f817c07e0c54bf911927266dd701c74fe94172ca0a2de2f->enter($__internal_b33c38b4d05ff1f40f817c07e0c54bf911927266dd701c74fe94172ca0a2de2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7f58d373c90112652a4c363151a6514af74b4adb5a22ed952ac5e533e779247c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f58d373c90112652a4c363151a6514af74b4adb5a22ed952ac5e533e779247c->enter($__internal_7f58d373c90112652a4c363151a6514af74b4adb5a22ed952ac5e533e779247c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_7f58d373c90112652a4c363151a6514af74b4adb5a22ed952ac5e533e779247c->leave($__internal_7f58d373c90112652a4c363151a6514af74b4adb5a22ed952ac5e533e779247c_prof);

        
        $__internal_b33c38b4d05ff1f40f817c07e0c54bf911927266dd701c74fe94172ca0a2de2f->leave($__internal_b33c38b4d05ff1f40f817c07e0c54bf911927266dd701c74fe94172ca0a2de2f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e932177fe236204464526eb8bdbabbc17ace11e1054d1671ce847c2b4ce09cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e932177fe236204464526eb8bdbabbc17ace11e1054d1671ce847c2b4ce09cf->enter($__internal_8e932177fe236204464526eb8bdbabbc17ace11e1054d1671ce847c2b4ce09cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e92747183d33928ada5921259f5173c2b931d9fe39d100e5640f3af0bdf52416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92747183d33928ada5921259f5173c2b931d9fe39d100e5640f3af0bdf52416->enter($__internal_e92747183d33928ada5921259f5173c2b931d9fe39d100e5640f3af0bdf52416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    <h1>Maintenance</h1>
    ";
        // line 6
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_e92747183d33928ada5921259f5173c2b931d9fe39d100e5640f3af0bdf52416->leave($__internal_e92747183d33928ada5921259f5173c2b931d9fe39d100e5640f3af0bdf52416_prof);

        
        $__internal_8e932177fe236204464526eb8bdbabbc17ace11e1054d1671ce847c2b4ce09cf->leave($__internal_8e932177fe236204464526eb8bdbabbc17ace11e1054d1671ce847c2b4ce09cf_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_2877b710111642435cf5440d404c96507e13bd279c4f086d7e091b03dfc64818 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2877b710111642435cf5440d404c96507e13bd279c4f086d7e091b03dfc64818->enter($__internal_2877b710111642435cf5440d404c96507e13bd279c4f086d7e091b03dfc64818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_fbbf19f36d2d7d343fb45f196df230a337a8838415c7e87c90f716001501c7ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbbf19f36d2d7d343fb45f196df230a337a8838415c7e87c90f716001501c7ea->enter($__internal_fbbf19f36d2d7d343fb45f196df230a337a8838415c7e87c90f716001501c7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_fbbf19f36d2d7d343fb45f196df230a337a8838415c7e87c90f716001501c7ea->leave($__internal_fbbf19f36d2d7d343fb45f196df230a337a8838415c7e87c90f716001501c7ea_prof);

        
        $__internal_2877b710111642435cf5440d404c96507e13bd279c4f086d7e091b03dfc64818->leave($__internal_2877b710111642435cf5440d404c96507e13bd279c4f086d7e091b03dfc64818_prof);

    }

    public function getTemplateName()
    {
        return "maintenance/layout.html.twig";
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
{% endblock %}", "maintenance/layout.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\maintenance\\layout.html.twig");
    }
}
