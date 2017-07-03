<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_c0eb2077bd75e58ceb6603fde61942559adfecaead0b50253bbb4e159811b3f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_3f7333c539da841a2b190cd3330384e39f592ee1ca828877d6a0da4ace0fb597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f7333c539da841a2b190cd3330384e39f592ee1ca828877d6a0da4ace0fb597->enter($__internal_3f7333c539da841a2b190cd3330384e39f592ee1ca828877d6a0da4ace0fb597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_dccae06da92096f740a75c0ca072b11027aee8c0d27e32dc065162fdd5ad63d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dccae06da92096f740a75c0ca072b11027aee8c0d27e32dc065162fdd5ad63d7->enter($__internal_dccae06da92096f740a75c0ca072b11027aee8c0d27e32dc065162fdd5ad63d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f7333c539da841a2b190cd3330384e39f592ee1ca828877d6a0da4ace0fb597->leave($__internal_3f7333c539da841a2b190cd3330384e39f592ee1ca828877d6a0da4ace0fb597_prof);

        
        $__internal_dccae06da92096f740a75c0ca072b11027aee8c0d27e32dc065162fdd5ad63d7->leave($__internal_dccae06da92096f740a75c0ca072b11027aee8c0d27e32dc065162fdd5ad63d7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2fba80ce9f710db141894a5b10cbff311e467b1f1e5c22a1b510e78cba92f8e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fba80ce9f710db141894a5b10cbff311e467b1f1e5c22a1b510e78cba92f8e4->enter($__internal_2fba80ce9f710db141894a5b10cbff311e467b1f1e5c22a1b510e78cba92f8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ded31cca3782dc5384783c34595baf598100118a8e05cf69606579cdb2bc712f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded31cca3782dc5384783c34595baf598100118a8e05cf69606579cdb2bc712f->enter($__internal_ded31cca3782dc5384783c34595baf598100118a8e05cf69606579cdb2bc712f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_ded31cca3782dc5384783c34595baf598100118a8e05cf69606579cdb2bc712f->leave($__internal_ded31cca3782dc5384783c34595baf598100118a8e05cf69606579cdb2bc712f_prof);

        
        $__internal_2fba80ce9f710db141894a5b10cbff311e467b1f1e5c22a1b510e78cba92f8e4->leave($__internal_2fba80ce9f710db141894a5b10cbff311e467b1f1e5c22a1b510e78cba92f8e4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Group\\edit.html.twig");
    }
}
