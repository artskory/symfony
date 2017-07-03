<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_4c06c674da06fd539c8cef594c19eb13d113d65d18eb4fc8725bdedc8a191a8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_b3552552931874bac8fe7a63b7d478aa32680b9f50da6fd74f4329789843c2df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3552552931874bac8fe7a63b7d478aa32680b9f50da6fd74f4329789843c2df->enter($__internal_b3552552931874bac8fe7a63b7d478aa32680b9f50da6fd74f4329789843c2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_98f086febfdf6c48d05fcef3f85bd6f7369baf73aeaeb74037f848d7be457341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98f086febfdf6c48d05fcef3f85bd6f7369baf73aeaeb74037f848d7be457341->enter($__internal_98f086febfdf6c48d05fcef3f85bd6f7369baf73aeaeb74037f848d7be457341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3552552931874bac8fe7a63b7d478aa32680b9f50da6fd74f4329789843c2df->leave($__internal_b3552552931874bac8fe7a63b7d478aa32680b9f50da6fd74f4329789843c2df_prof);

        
        $__internal_98f086febfdf6c48d05fcef3f85bd6f7369baf73aeaeb74037f848d7be457341->leave($__internal_98f086febfdf6c48d05fcef3f85bd6f7369baf73aeaeb74037f848d7be457341_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5128075937397d51f89f6661d0400b60afa4ddbb51f867b5f76f41a1aa3f70d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5128075937397d51f89f6661d0400b60afa4ddbb51f867b5f76f41a1aa3f70d->enter($__internal_e5128075937397d51f89f6661d0400b60afa4ddbb51f867b5f76f41a1aa3f70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9bee9ef359a05d913aa24824540b0580a4ad10e17b4430aa00b2cd220af494d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bee9ef359a05d913aa24824540b0580a4ad10e17b4430aa00b2cd220af494d2->enter($__internal_9bee9ef359a05d913aa24824540b0580a4ad10e17b4430aa00b2cd220af494d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_9bee9ef359a05d913aa24824540b0580a4ad10e17b4430aa00b2cd220af494d2->leave($__internal_9bee9ef359a05d913aa24824540b0580a4ad10e17b4430aa00b2cd220af494d2_prof);

        
        $__internal_e5128075937397d51f89f6661d0400b60afa4ddbb51f867b5f76f41a1aa3f70d->leave($__internal_e5128075937397d51f89f6661d0400b60afa4ddbb51f867b5f76f41a1aa3f70d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
