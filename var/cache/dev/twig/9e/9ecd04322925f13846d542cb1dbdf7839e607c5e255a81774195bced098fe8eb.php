<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_f5af735d56b78e04ad4effb71d9acf1b0df7eb6c7065af1fa55f02eeeacf6c9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_bf07babbeb6e5b7ce999f746684642f639297e154038e0dd688fa9b6b288ef8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf07babbeb6e5b7ce999f746684642f639297e154038e0dd688fa9b6b288ef8a->enter($__internal_bf07babbeb6e5b7ce999f746684642f639297e154038e0dd688fa9b6b288ef8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_a28208de019f479dd1c71f22d613b3b22c6ab35ed644a6bafefd43994daa0e6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a28208de019f479dd1c71f22d613b3b22c6ab35ed644a6bafefd43994daa0e6f->enter($__internal_a28208de019f479dd1c71f22d613b3b22c6ab35ed644a6bafefd43994daa0e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf07babbeb6e5b7ce999f746684642f639297e154038e0dd688fa9b6b288ef8a->leave($__internal_bf07babbeb6e5b7ce999f746684642f639297e154038e0dd688fa9b6b288ef8a_prof);

        
        $__internal_a28208de019f479dd1c71f22d613b3b22c6ab35ed644a6bafefd43994daa0e6f->leave($__internal_a28208de019f479dd1c71f22d613b3b22c6ab35ed644a6bafefd43994daa0e6f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc9f7ec49e9b647c1660149ab2f97cb78f2be3d88117a8dd82db71f21a1f22b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc9f7ec49e9b647c1660149ab2f97cb78f2be3d88117a8dd82db71f21a1f22b9->enter($__internal_dc9f7ec49e9b647c1660149ab2f97cb78f2be3d88117a8dd82db71f21a1f22b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5248077d70b5374e61089d31e2993ec0f97cbcdfa914cb80d50ba9aea72c70d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5248077d70b5374e61089d31e2993ec0f97cbcdfa914cb80d50ba9aea72c70d0->enter($__internal_5248077d70b5374e61089d31e2993ec0f97cbcdfa914cb80d50ba9aea72c70d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_5248077d70b5374e61089d31e2993ec0f97cbcdfa914cb80d50ba9aea72c70d0->leave($__internal_5248077d70b5374e61089d31e2993ec0f97cbcdfa914cb80d50ba9aea72c70d0_prof);

        
        $__internal_dc9f7ec49e9b647c1660149ab2f97cb78f2be3d88117a8dd82db71f21a1f22b9->leave($__internal_dc9f7ec49e9b647c1660149ab2f97cb78f2be3d88117a8dd82db71f21a1f22b9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Resetting\\check_email.html.twig");
    }
}
