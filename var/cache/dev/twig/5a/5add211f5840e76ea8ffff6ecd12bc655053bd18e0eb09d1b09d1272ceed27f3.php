<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_4a90cda804227bcb24d0d130cbba88921ac7933b3e1f2970c1a814014d392d72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_306fcaa6bd3076f51aeeeb0aea44fca61d8b13fd65b5409b43528efc7a4d060a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_306fcaa6bd3076f51aeeeb0aea44fca61d8b13fd65b5409b43528efc7a4d060a->enter($__internal_306fcaa6bd3076f51aeeeb0aea44fca61d8b13fd65b5409b43528efc7a4d060a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_4debe962f5e0988e07c65473ea5708282b366ef525f63f5dd9af79921716c4e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4debe962f5e0988e07c65473ea5708282b366ef525f63f5dd9af79921716c4e1->enter($__internal_4debe962f5e0988e07c65473ea5708282b366ef525f63f5dd9af79921716c4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_306fcaa6bd3076f51aeeeb0aea44fca61d8b13fd65b5409b43528efc7a4d060a->leave($__internal_306fcaa6bd3076f51aeeeb0aea44fca61d8b13fd65b5409b43528efc7a4d060a_prof);

        
        $__internal_4debe962f5e0988e07c65473ea5708282b366ef525f63f5dd9af79921716c4e1->leave($__internal_4debe962f5e0988e07c65473ea5708282b366ef525f63f5dd9af79921716c4e1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f4127243503def47a630098b22a30d3265b9bc6b29850efb82451a1bf7a6db9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f4127243503def47a630098b22a30d3265b9bc6b29850efb82451a1bf7a6db9->enter($__internal_4f4127243503def47a630098b22a30d3265b9bc6b29850efb82451a1bf7a6db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a0f1a9372bd21330a5875454c86786f8659a2afcae9171eb6520e69d4d680bdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f1a9372bd21330a5875454c86786f8659a2afcae9171eb6520e69d4d680bdb->enter($__internal_a0f1a9372bd21330a5875454c86786f8659a2afcae9171eb6520e69d4d680bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_a0f1a9372bd21330a5875454c86786f8659a2afcae9171eb6520e69d4d680bdb->leave($__internal_a0f1a9372bd21330a5875454c86786f8659a2afcae9171eb6520e69d4d680bdb_prof);

        
        $__internal_4f4127243503def47a630098b22a30d3265b9bc6b29850efb82451a1bf7a6db9->leave($__internal_4f4127243503def47a630098b22a30d3265b9bc6b29850efb82451a1bf7a6db9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request.html.twig");
    }
}
