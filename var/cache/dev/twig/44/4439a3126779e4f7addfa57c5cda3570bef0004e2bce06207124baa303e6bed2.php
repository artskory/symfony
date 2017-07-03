<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_d1dc98e11f109a9871de19d0bbbcc03ea784a85009ca71d645e5695f71d10acb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_4f37bb6774c4712e59ed81d2fdf0ad0f85553bdc161b62ed93432263b317f42f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f37bb6774c4712e59ed81d2fdf0ad0f85553bdc161b62ed93432263b317f42f->enter($__internal_4f37bb6774c4712e59ed81d2fdf0ad0f85553bdc161b62ed93432263b317f42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_9c5bc06c0ed5e6a0b2951bf873c487081f411bd45e9b1d49d23059cfdf79062d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c5bc06c0ed5e6a0b2951bf873c487081f411bd45e9b1d49d23059cfdf79062d->enter($__internal_9c5bc06c0ed5e6a0b2951bf873c487081f411bd45e9b1d49d23059cfdf79062d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f37bb6774c4712e59ed81d2fdf0ad0f85553bdc161b62ed93432263b317f42f->leave($__internal_4f37bb6774c4712e59ed81d2fdf0ad0f85553bdc161b62ed93432263b317f42f_prof);

        
        $__internal_9c5bc06c0ed5e6a0b2951bf873c487081f411bd45e9b1d49d23059cfdf79062d->leave($__internal_9c5bc06c0ed5e6a0b2951bf873c487081f411bd45e9b1d49d23059cfdf79062d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_02d1fcf3fcda2d3abf06e6a57b8bc55497642b3ea705c9522aa93d5acd2e00e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02d1fcf3fcda2d3abf06e6a57b8bc55497642b3ea705c9522aa93d5acd2e00e9->enter($__internal_02d1fcf3fcda2d3abf06e6a57b8bc55497642b3ea705c9522aa93d5acd2e00e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_423c1aa1005aa883c249f1aaa415f4a4d2749ffd610e89c1558c2b7bcefc9674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_423c1aa1005aa883c249f1aaa415f4a4d2749ffd610e89c1558c2b7bcefc9674->enter($__internal_423c1aa1005aa883c249f1aaa415f4a4d2749ffd610e89c1558c2b7bcefc9674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_423c1aa1005aa883c249f1aaa415f4a4d2749ffd610e89c1558c2b7bcefc9674->leave($__internal_423c1aa1005aa883c249f1aaa415f4a4d2749ffd610e89c1558c2b7bcefc9674_prof);

        
        $__internal_02d1fcf3fcda2d3abf06e6a57b8bc55497642b3ea705c9522aa93d5acd2e00e9->leave($__internal_02d1fcf3fcda2d3abf06e6a57b8bc55497642b3ea705c9522aa93d5acd2e00e9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
