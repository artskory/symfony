<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_19fdb677e2f9f3d95688be0242eca51f48dcc350f9dddf8dc6ad66bad24d83da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_74d4400d4731af4697e59d27536170de2bdb878cc433de39ffe816093de179fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74d4400d4731af4697e59d27536170de2bdb878cc433de39ffe816093de179fd->enter($__internal_74d4400d4731af4697e59d27536170de2bdb878cc433de39ffe816093de179fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_14a769d5702feb71adb1f0b6081e408b2e9fb1f0ebbfe7be674763b563d50f1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a769d5702feb71adb1f0b6081e408b2e9fb1f0ebbfe7be674763b563d50f1a->enter($__internal_14a769d5702feb71adb1f0b6081e408b2e9fb1f0ebbfe7be674763b563d50f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74d4400d4731af4697e59d27536170de2bdb878cc433de39ffe816093de179fd->leave($__internal_74d4400d4731af4697e59d27536170de2bdb878cc433de39ffe816093de179fd_prof);

        
        $__internal_14a769d5702feb71adb1f0b6081e408b2e9fb1f0ebbfe7be674763b563d50f1a->leave($__internal_14a769d5702feb71adb1f0b6081e408b2e9fb1f0ebbfe7be674763b563d50f1a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd26abda64d4c75c01a474bb579657874984d7410bda8d33f3bff8a996404f91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd26abda64d4c75c01a474bb579657874984d7410bda8d33f3bff8a996404f91->enter($__internal_dd26abda64d4c75c01a474bb579657874984d7410bda8d33f3bff8a996404f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_265c9d5b8d9939ad0118a5d2cee26cf1fc42e9cdfe9ddfbd90addca8cebd13f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_265c9d5b8d9939ad0118a5d2cee26cf1fc42e9cdfe9ddfbd90addca8cebd13f5->enter($__internal_265c9d5b8d9939ad0118a5d2cee26cf1fc42e9cdfe9ddfbd90addca8cebd13f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_265c9d5b8d9939ad0118a5d2cee26cf1fc42e9cdfe9ddfbd90addca8cebd13f5->leave($__internal_265c9d5b8d9939ad0118a5d2cee26cf1fc42e9cdfe9ddfbd90addca8cebd13f5_prof);

        
        $__internal_dd26abda64d4c75c01a474bb579657874984d7410bda8d33f3bff8a996404f91->leave($__internal_dd26abda64d4c75c01a474bb579657874984d7410bda8d33f3bff8a996404f91_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
", "FOSUserBundle:Resetting:request.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
