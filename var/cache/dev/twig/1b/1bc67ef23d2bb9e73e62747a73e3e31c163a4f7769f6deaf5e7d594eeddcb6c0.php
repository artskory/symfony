<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_105442f5f32951bde1e1755d7036b1dea348b497137dd6d53e531c204abcef7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_fde4ebc7ee0eac3d4c0373a0fc19ec79d194cc4ba7e138bb4a8a9ee6dfe1d51e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fde4ebc7ee0eac3d4c0373a0fc19ec79d194cc4ba7e138bb4a8a9ee6dfe1d51e->enter($__internal_fde4ebc7ee0eac3d4c0373a0fc19ec79d194cc4ba7e138bb4a8a9ee6dfe1d51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_7e939a0a967f52177f7bdebb02420ebfcb48d96f5a71941cfc38adec2fd1bfe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e939a0a967f52177f7bdebb02420ebfcb48d96f5a71941cfc38adec2fd1bfe9->enter($__internal_7e939a0a967f52177f7bdebb02420ebfcb48d96f5a71941cfc38adec2fd1bfe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fde4ebc7ee0eac3d4c0373a0fc19ec79d194cc4ba7e138bb4a8a9ee6dfe1d51e->leave($__internal_fde4ebc7ee0eac3d4c0373a0fc19ec79d194cc4ba7e138bb4a8a9ee6dfe1d51e_prof);

        
        $__internal_7e939a0a967f52177f7bdebb02420ebfcb48d96f5a71941cfc38adec2fd1bfe9->leave($__internal_7e939a0a967f52177f7bdebb02420ebfcb48d96f5a71941cfc38adec2fd1bfe9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_544c996917d019624d08d56190ce5be2d27c695d53afde4cf1991eade521303e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_544c996917d019624d08d56190ce5be2d27c695d53afde4cf1991eade521303e->enter($__internal_544c996917d019624d08d56190ce5be2d27c695d53afde4cf1991eade521303e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4cc745df3e9d70be18d3b8be6b95f592ecd22cd0c4aeb37e9c022cea6c279160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cc745df3e9d70be18d3b8be6b95f592ecd22cd0c4aeb37e9c022cea6c279160->enter($__internal_4cc745df3e9d70be18d3b8be6b95f592ecd22cd0c4aeb37e9c022cea6c279160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4cc745df3e9d70be18d3b8be6b95f592ecd22cd0c4aeb37e9c022cea6c279160->leave($__internal_4cc745df3e9d70be18d3b8be6b95f592ecd22cd0c4aeb37e9c022cea6c279160_prof);

        
        $__internal_544c996917d019624d08d56190ce5be2d27c695d53afde4cf1991eade521303e->leave($__internal_544c996917d019624d08d56190ce5be2d27c695d53afde4cf1991eade521303e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Registration\\check_email.html.twig");
    }
}
