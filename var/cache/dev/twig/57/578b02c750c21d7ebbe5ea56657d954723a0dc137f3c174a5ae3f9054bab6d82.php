<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_afc7465623610a5c891aeaf083d1bd39ce0c4fc3b9005d300fb9c8235fa20405 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_bb05073f59176826eebaa2daf6bdb5a319af5c3267e212486b3fd90f4086c30b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb05073f59176826eebaa2daf6bdb5a319af5c3267e212486b3fd90f4086c30b->enter($__internal_bb05073f59176826eebaa2daf6bdb5a319af5c3267e212486b3fd90f4086c30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_8b76c42cff8684680f2b5a33feea910421c8e404a704a947894579319f135c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b76c42cff8684680f2b5a33feea910421c8e404a704a947894579319f135c12->enter($__internal_8b76c42cff8684680f2b5a33feea910421c8e404a704a947894579319f135c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb05073f59176826eebaa2daf6bdb5a319af5c3267e212486b3fd90f4086c30b->leave($__internal_bb05073f59176826eebaa2daf6bdb5a319af5c3267e212486b3fd90f4086c30b_prof);

        
        $__internal_8b76c42cff8684680f2b5a33feea910421c8e404a704a947894579319f135c12->leave($__internal_8b76c42cff8684680f2b5a33feea910421c8e404a704a947894579319f135c12_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b8249a42460f99c24730bb716e12c0308535097db52e8beebebab4388f072da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8249a42460f99c24730bb716e12c0308535097db52e8beebebab4388f072da7->enter($__internal_b8249a42460f99c24730bb716e12c0308535097db52e8beebebab4388f072da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c54ce4dd097d200442b15c85e45ffd852954c8e3b99b0a41bbf0f125ec942461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c54ce4dd097d200442b15c85e45ffd852954c8e3b99b0a41bbf0f125ec942461->enter($__internal_c54ce4dd097d200442b15c85e45ffd852954c8e3b99b0a41bbf0f125ec942461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_c54ce4dd097d200442b15c85e45ffd852954c8e3b99b0a41bbf0f125ec942461->leave($__internal_c54ce4dd097d200442b15c85e45ffd852954c8e3b99b0a41bbf0f125ec942461_prof);

        
        $__internal_b8249a42460f99c24730bb716e12c0308535097db52e8beebebab4388f072da7->leave($__internal_b8249a42460f99c24730bb716e12c0308535097db52e8beebebab4388f072da7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
