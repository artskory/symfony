<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_90e315d6917665c6f4a2866f26ca6b38db61e48d1ff181a44c3a3645b1f708bb extends Twig_Template
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
        $__internal_4bd564fb4d643229ccd2f2cfba9c59f814143f40555ced29d934152b84769379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bd564fb4d643229ccd2f2cfba9c59f814143f40555ced29d934152b84769379->enter($__internal_4bd564fb4d643229ccd2f2cfba9c59f814143f40555ced29d934152b84769379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_91895e5e20b82ccddb6fe72b372828cf5cdb9409d506d19e682b75e8bdacc685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91895e5e20b82ccddb6fe72b372828cf5cdb9409d506d19e682b75e8bdacc685->enter($__internal_91895e5e20b82ccddb6fe72b372828cf5cdb9409d506d19e682b75e8bdacc685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bd564fb4d643229ccd2f2cfba9c59f814143f40555ced29d934152b84769379->leave($__internal_4bd564fb4d643229ccd2f2cfba9c59f814143f40555ced29d934152b84769379_prof);

        
        $__internal_91895e5e20b82ccddb6fe72b372828cf5cdb9409d506d19e682b75e8bdacc685->leave($__internal_91895e5e20b82ccddb6fe72b372828cf5cdb9409d506d19e682b75e8bdacc685_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d90adfd5d78b65cab5841f253128e3629fd1fa17da3b1bea5b7d9056341b2de1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d90adfd5d78b65cab5841f253128e3629fd1fa17da3b1bea5b7d9056341b2de1->enter($__internal_d90adfd5d78b65cab5841f253128e3629fd1fa17da3b1bea5b7d9056341b2de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_80ae46e4df64cf87844a30ade188ac01c1b48108507609bbcda3b79100dbb4a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80ae46e4df64cf87844a30ade188ac01c1b48108507609bbcda3b79100dbb4a6->enter($__internal_80ae46e4df64cf87844a30ade188ac01c1b48108507609bbcda3b79100dbb4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_80ae46e4df64cf87844a30ade188ac01c1b48108507609bbcda3b79100dbb4a6->leave($__internal_80ae46e4df64cf87844a30ade188ac01c1b48108507609bbcda3b79100dbb4a6_prof);

        
        $__internal_d90adfd5d78b65cab5841f253128e3629fd1fa17da3b1bea5b7d9056341b2de1->leave($__internal_d90adfd5d78b65cab5841f253128e3629fd1fa17da3b1bea5b7d9056341b2de1_prof);

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
