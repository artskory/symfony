<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_54909b1cb7610af391d4a92cbf7241584bda59be6facc0a0ffeb9ba7b893ec65 extends Twig_Template
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
        $__internal_ecf54f78bc8b2d81e1fcf8fa5402a329bd911eba18b99126b3e2a81c80c723c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf54f78bc8b2d81e1fcf8fa5402a329bd911eba18b99126b3e2a81c80c723c6->enter($__internal_ecf54f78bc8b2d81e1fcf8fa5402a329bd911eba18b99126b3e2a81c80c723c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_0e5dc1c8fcd78dbb26b185dea1f90a34b8a9a8d7ea3e5b22c679d511e301852e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e5dc1c8fcd78dbb26b185dea1f90a34b8a9a8d7ea3e5b22c679d511e301852e->enter($__internal_0e5dc1c8fcd78dbb26b185dea1f90a34b8a9a8d7ea3e5b22c679d511e301852e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecf54f78bc8b2d81e1fcf8fa5402a329bd911eba18b99126b3e2a81c80c723c6->leave($__internal_ecf54f78bc8b2d81e1fcf8fa5402a329bd911eba18b99126b3e2a81c80c723c6_prof);

        
        $__internal_0e5dc1c8fcd78dbb26b185dea1f90a34b8a9a8d7ea3e5b22c679d511e301852e->leave($__internal_0e5dc1c8fcd78dbb26b185dea1f90a34b8a9a8d7ea3e5b22c679d511e301852e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bcc86c810031ec6e47ebadab8e8fbc3fda686fac93ecd8ad18caf374a921230d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcc86c810031ec6e47ebadab8e8fbc3fda686fac93ecd8ad18caf374a921230d->enter($__internal_bcc86c810031ec6e47ebadab8e8fbc3fda686fac93ecd8ad18caf374a921230d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7ed9e7a568a5e07a410a11340283bcc77869005307411df53882afe286728b85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ed9e7a568a5e07a410a11340283bcc77869005307411df53882afe286728b85->enter($__internal_7ed9e7a568a5e07a410a11340283bcc77869005307411df53882afe286728b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_7ed9e7a568a5e07a410a11340283bcc77869005307411df53882afe286728b85->leave($__internal_7ed9e7a568a5e07a410a11340283bcc77869005307411df53882afe286728b85_prof);

        
        $__internal_bcc86c810031ec6e47ebadab8e8fbc3fda686fac93ecd8ad18caf374a921230d->leave($__internal_bcc86c810031ec6e47ebadab8e8fbc3fda686fac93ecd8ad18caf374a921230d_prof);

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
