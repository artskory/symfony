<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_49f1b69fa13d811997cec41f532a23a4a371fa2c8a3b78a6a2cefd7a17f9b0d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_a639fc96e6214a53de4aa3a298dc1c8ca6aa6c86dc09a5eae604c5d4fe196052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a639fc96e6214a53de4aa3a298dc1c8ca6aa6c86dc09a5eae604c5d4fe196052->enter($__internal_a639fc96e6214a53de4aa3a298dc1c8ca6aa6c86dc09a5eae604c5d4fe196052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_e7d65858dde108e1f5e714affb2a11d505f45c14752c25f53f0a455cca695f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7d65858dde108e1f5e714affb2a11d505f45c14752c25f53f0a455cca695f83->enter($__internal_e7d65858dde108e1f5e714affb2a11d505f45c14752c25f53f0a455cca695f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a639fc96e6214a53de4aa3a298dc1c8ca6aa6c86dc09a5eae604c5d4fe196052->leave($__internal_a639fc96e6214a53de4aa3a298dc1c8ca6aa6c86dc09a5eae604c5d4fe196052_prof);

        
        $__internal_e7d65858dde108e1f5e714affb2a11d505f45c14752c25f53f0a455cca695f83->leave($__internal_e7d65858dde108e1f5e714affb2a11d505f45c14752c25f53f0a455cca695f83_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b79d62edb84d02fac666aeabf585216c88de813186743af018be7adc2d9015b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b79d62edb84d02fac666aeabf585216c88de813186743af018be7adc2d9015b5->enter($__internal_b79d62edb84d02fac666aeabf585216c88de813186743af018be7adc2d9015b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8d1e240610db60424a5cc1c9e38b596885c7b04a81fe392d641f02bd6cd05e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d1e240610db60424a5cc1c9e38b596885c7b04a81fe392d641f02bd6cd05e6d->enter($__internal_8d1e240610db60424a5cc1c9e38b596885c7b04a81fe392d641f02bd6cd05e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_8d1e240610db60424a5cc1c9e38b596885c7b04a81fe392d641f02bd6cd05e6d->leave($__internal_8d1e240610db60424a5cc1c9e38b596885c7b04a81fe392d641f02bd6cd05e6d_prof);

        
        $__internal_b79d62edb84d02fac666aeabf585216c88de813186743af018be7adc2d9015b5->leave($__internal_b79d62edb84d02fac666aeabf585216c88de813186743af018be7adc2d9015b5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
", "FOSUserBundle:Profile:edit.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
