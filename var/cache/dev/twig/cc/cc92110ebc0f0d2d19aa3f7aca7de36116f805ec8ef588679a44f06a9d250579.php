<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_a1e5b3308894a1c74c1ba3dfb452c65b3515e75a6d094acdb1752c65c35a8662 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_97083543771b281d1ff0fd8784249b96ec020f4d883a5607cd4321ca3d4812d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97083543771b281d1ff0fd8784249b96ec020f4d883a5607cd4321ca3d4812d1->enter($__internal_97083543771b281d1ff0fd8784249b96ec020f4d883a5607cd4321ca3d4812d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_a3db12a2c3a0d1130714da7c92bc8addfb8391921530445a9d5cad0971a2cf36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3db12a2c3a0d1130714da7c92bc8addfb8391921530445a9d5cad0971a2cf36->enter($__internal_a3db12a2c3a0d1130714da7c92bc8addfb8391921530445a9d5cad0971a2cf36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97083543771b281d1ff0fd8784249b96ec020f4d883a5607cd4321ca3d4812d1->leave($__internal_97083543771b281d1ff0fd8784249b96ec020f4d883a5607cd4321ca3d4812d1_prof);

        
        $__internal_a3db12a2c3a0d1130714da7c92bc8addfb8391921530445a9d5cad0971a2cf36->leave($__internal_a3db12a2c3a0d1130714da7c92bc8addfb8391921530445a9d5cad0971a2cf36_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cf414cf0629f8bba1288426fdf3a627cc910f1b60452444712004ba5fb23de2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf414cf0629f8bba1288426fdf3a627cc910f1b60452444712004ba5fb23de2c->enter($__internal_cf414cf0629f8bba1288426fdf3a627cc910f1b60452444712004ba5fb23de2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a3e0e43f9a31499c23a97b588fe7baf0774d0fe650afc01544490401b60f7628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3e0e43f9a31499c23a97b588fe7baf0774d0fe650afc01544490401b60f7628->enter($__internal_a3e0e43f9a31499c23a97b588fe7baf0774d0fe650afc01544490401b60f7628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_a3e0e43f9a31499c23a97b588fe7baf0774d0fe650afc01544490401b60f7628->leave($__internal_a3e0e43f9a31499c23a97b588fe7baf0774d0fe650afc01544490401b60f7628_prof);

        
        $__internal_cf414cf0629f8bba1288426fdf3a627cc910f1b60452444712004ba5fb23de2c->leave($__internal_cf414cf0629f8bba1288426fdf3a627cc910f1b60452444712004ba5fb23de2c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Registration\\confirmed.html.twig");
    }
}
