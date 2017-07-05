<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_d42e8052f778c7e95d9b8965859f38e56ea58f5ceea624ec726f3d1ae0bba3a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_fc2f990a07c00b21218854319c2007fe9cc8c5f62f71c949e43188177c97f600 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc2f990a07c00b21218854319c2007fe9cc8c5f62f71c949e43188177c97f600->enter($__internal_fc2f990a07c00b21218854319c2007fe9cc8c5f62f71c949e43188177c97f600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_10390099fb884aeb7e21bdd041a781850700392f0a677804b9ab990a5312fb2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10390099fb884aeb7e21bdd041a781850700392f0a677804b9ab990a5312fb2e->enter($__internal_10390099fb884aeb7e21bdd041a781850700392f0a677804b9ab990a5312fb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc2f990a07c00b21218854319c2007fe9cc8c5f62f71c949e43188177c97f600->leave($__internal_fc2f990a07c00b21218854319c2007fe9cc8c5f62f71c949e43188177c97f600_prof);

        
        $__internal_10390099fb884aeb7e21bdd041a781850700392f0a677804b9ab990a5312fb2e->leave($__internal_10390099fb884aeb7e21bdd041a781850700392f0a677804b9ab990a5312fb2e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3d8976ad8bbd0a17d955cf547785988d66cf758b9ce0bda90606f7b8f6cced63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d8976ad8bbd0a17d955cf547785988d66cf758b9ce0bda90606f7b8f6cced63->enter($__internal_3d8976ad8bbd0a17d955cf547785988d66cf758b9ce0bda90606f7b8f6cced63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_aa5982026bc341ab5a3182bf6a20a79d921346015a6df08ee6cc1980f1e1a120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa5982026bc341ab5a3182bf6a20a79d921346015a6df08ee6cc1980f1e1a120->enter($__internal_aa5982026bc341ab5a3182bf6a20a79d921346015a6df08ee6cc1980f1e1a120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_aa5982026bc341ab5a3182bf6a20a79d921346015a6df08ee6cc1980f1e1a120->leave($__internal_aa5982026bc341ab5a3182bf6a20a79d921346015a6df08ee6cc1980f1e1a120_prof);

        
        $__internal_3d8976ad8bbd0a17d955cf547785988d66cf758b9ce0bda90606f7b8f6cced63->leave($__internal_3d8976ad8bbd0a17d955cf547785988d66cf758b9ce0bda90606f7b8f6cced63_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
