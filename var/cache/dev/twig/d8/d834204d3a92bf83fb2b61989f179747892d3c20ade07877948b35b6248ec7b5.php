<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_dd4df390c4841d8a2eca60eb8db6a26890b5fa1cac35850dcdfd908b879e33ca extends Twig_Template
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
        $__internal_b46d1df974f6f9f340a81df17ad16b35d6643ebbf4beed404fce5b5d315b7b08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b46d1df974f6f9f340a81df17ad16b35d6643ebbf4beed404fce5b5d315b7b08->enter($__internal_b46d1df974f6f9f340a81df17ad16b35d6643ebbf4beed404fce5b5d315b7b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_3993b3a804b6e19955c8ba77cae0008ab52d9f65d259f9db4e96b06bf319b815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3993b3a804b6e19955c8ba77cae0008ab52d9f65d259f9db4e96b06bf319b815->enter($__internal_3993b3a804b6e19955c8ba77cae0008ab52d9f65d259f9db4e96b06bf319b815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b46d1df974f6f9f340a81df17ad16b35d6643ebbf4beed404fce5b5d315b7b08->leave($__internal_b46d1df974f6f9f340a81df17ad16b35d6643ebbf4beed404fce5b5d315b7b08_prof);

        
        $__internal_3993b3a804b6e19955c8ba77cae0008ab52d9f65d259f9db4e96b06bf319b815->leave($__internal_3993b3a804b6e19955c8ba77cae0008ab52d9f65d259f9db4e96b06bf319b815_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bc96fffb7ddc30f76bf0aab2a502f5d7fdeff1dd6f6111fc1405b1d580d42059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc96fffb7ddc30f76bf0aab2a502f5d7fdeff1dd6f6111fc1405b1d580d42059->enter($__internal_bc96fffb7ddc30f76bf0aab2a502f5d7fdeff1dd6f6111fc1405b1d580d42059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_56b73a2104a39f62f91b49fc0eee81f2942f6d6b2830c3f6bad6601b27fd5b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56b73a2104a39f62f91b49fc0eee81f2942f6d6b2830c3f6bad6601b27fd5b41->enter($__internal_56b73a2104a39f62f91b49fc0eee81f2942f6d6b2830c3f6bad6601b27fd5b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_56b73a2104a39f62f91b49fc0eee81f2942f6d6b2830c3f6bad6601b27fd5b41->leave($__internal_56b73a2104a39f62f91b49fc0eee81f2942f6d6b2830c3f6bad6601b27fd5b41_prof);

        
        $__internal_bc96fffb7ddc30f76bf0aab2a502f5d7fdeff1dd6f6111fc1405b1d580d42059->leave($__internal_bc96fffb7ddc30f76bf0aab2a502f5d7fdeff1dd6f6111fc1405b1d580d42059_prof);

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
