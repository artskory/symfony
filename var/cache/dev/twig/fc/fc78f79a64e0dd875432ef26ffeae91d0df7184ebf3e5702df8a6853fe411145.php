<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_e46ee89e3cea12a08a5a546493121fb0a79e1ea705824182177c12f00024e913 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_314677cf9151b79371a0e126b8114e8e836399e785df09f061ceb54cf5da22d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_314677cf9151b79371a0e126b8114e8e836399e785df09f061ceb54cf5da22d1->enter($__internal_314677cf9151b79371a0e126b8114e8e836399e785df09f061ceb54cf5da22d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_5f45a1bfa01a1bc7d9e35c713f3e567fea7596308b78a09e905b8fc1d63d5a25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f45a1bfa01a1bc7d9e35c713f3e567fea7596308b78a09e905b8fc1d63d5a25->enter($__internal_5f45a1bfa01a1bc7d9e35c713f3e567fea7596308b78a09e905b8fc1d63d5a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_314677cf9151b79371a0e126b8114e8e836399e785df09f061ceb54cf5da22d1->leave($__internal_314677cf9151b79371a0e126b8114e8e836399e785df09f061ceb54cf5da22d1_prof);

        
        $__internal_5f45a1bfa01a1bc7d9e35c713f3e567fea7596308b78a09e905b8fc1d63d5a25->leave($__internal_5f45a1bfa01a1bc7d9e35c713f3e567fea7596308b78a09e905b8fc1d63d5a25_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae2f39629ca77e3f936007ff03f14937ec3a85a61c65290eb2b0e301f870675c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae2f39629ca77e3f936007ff03f14937ec3a85a61c65290eb2b0e301f870675c->enter($__internal_ae2f39629ca77e3f936007ff03f14937ec3a85a61c65290eb2b0e301f870675c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b3ed5f1a6ad69a0e32e049dcc13fea6255c1ae01210adacd456302cd3138df2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3ed5f1a6ad69a0e32e049dcc13fea6255c1ae01210adacd456302cd3138df2f->enter($__internal_b3ed5f1a6ad69a0e32e049dcc13fea6255c1ae01210adacd456302cd3138df2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_b3ed5f1a6ad69a0e32e049dcc13fea6255c1ae01210adacd456302cd3138df2f->leave($__internal_b3ed5f1a6ad69a0e32e049dcc13fea6255c1ae01210adacd456302cd3138df2f_prof);

        
        $__internal_ae2f39629ca77e3f936007ff03f14937ec3a85a61c65290eb2b0e301f870675c->leave($__internal_ae2f39629ca77e3f936007ff03f14937ec3a85a61c65290eb2b0e301f870675c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
