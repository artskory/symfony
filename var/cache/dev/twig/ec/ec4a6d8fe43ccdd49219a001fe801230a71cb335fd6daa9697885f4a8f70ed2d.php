<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_b374364a9304289eb688ceab4cb80fb8e28efb3b378859d6685c19fe10ab2e03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c44eb074a442cd95b265ffa3fb96120922d7bfd2d36a7c8fdc3b4f1b343479e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c44eb074a442cd95b265ffa3fb96120922d7bfd2d36a7c8fdc3b4f1b343479e1->enter($__internal_c44eb074a442cd95b265ffa3fb96120922d7bfd2d36a7c8fdc3b4f1b343479e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_53dae140d317287da7a63634ae20ed8cbfa075028679917b3baa932541bb0b29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53dae140d317287da7a63634ae20ed8cbfa075028679917b3baa932541bb0b29->enter($__internal_53dae140d317287da7a63634ae20ed8cbfa075028679917b3baa932541bb0b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c44eb074a442cd95b265ffa3fb96120922d7bfd2d36a7c8fdc3b4f1b343479e1->leave($__internal_c44eb074a442cd95b265ffa3fb96120922d7bfd2d36a7c8fdc3b4f1b343479e1_prof);

        
        $__internal_53dae140d317287da7a63634ae20ed8cbfa075028679917b3baa932541bb0b29->leave($__internal_53dae140d317287da7a63634ae20ed8cbfa075028679917b3baa932541bb0b29_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d615429979081ae5f4a1b59a5cc1045609c90e730b839d2c412634a3cdb53c73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d615429979081ae5f4a1b59a5cc1045609c90e730b839d2c412634a3cdb53c73->enter($__internal_d615429979081ae5f4a1b59a5cc1045609c90e730b839d2c412634a3cdb53c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_7e9fa0898b20e08dee70f88939311ba1692468518dfb194267f1d1b066e238bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e9fa0898b20e08dee70f88939311ba1692468518dfb194267f1d1b066e238bd->enter($__internal_7e9fa0898b20e08dee70f88939311ba1692468518dfb194267f1d1b066e238bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_7e9fa0898b20e08dee70f88939311ba1692468518dfb194267f1d1b066e238bd->leave($__internal_7e9fa0898b20e08dee70f88939311ba1692468518dfb194267f1d1b066e238bd_prof);

        
        $__internal_d615429979081ae5f4a1b59a5cc1045609c90e730b839d2c412634a3cdb53c73->leave($__internal_d615429979081ae5f4a1b59a5cc1045609c90e730b839d2c412634a3cdb53c73_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a68d372b26576ab5fde50a617ba6dc86ae919d165437d8d496690ec3746153e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a68d372b26576ab5fde50a617ba6dc86ae919d165437d8d496690ec3746153e5->enter($__internal_a68d372b26576ab5fde50a617ba6dc86ae919d165437d8d496690ec3746153e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_3a1a4a026890ba239ccc2f0f71d3f602e8e6adac3dd1b617c09706d31f98dd0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a1a4a026890ba239ccc2f0f71d3f602e8e6adac3dd1b617c09706d31f98dd0b->enter($__internal_3a1a4a026890ba239ccc2f0f71d3f602e8e6adac3dd1b617c09706d31f98dd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3a1a4a026890ba239ccc2f0f71d3f602e8e6adac3dd1b617c09706d31f98dd0b->leave($__internal_3a1a4a026890ba239ccc2f0f71d3f602e8e6adac3dd1b617c09706d31f98dd0b_prof);

        
        $__internal_a68d372b26576ab5fde50a617ba6dc86ae919d165437d8d496690ec3746153e5->leave($__internal_a68d372b26576ab5fde50a617ba6dc86ae919d165437d8d496690ec3746153e5_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2134352d661d769bc99e724ca208381e5bcc8067dadf8e213eadca11b304f2b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2134352d661d769bc99e724ca208381e5bcc8067dadf8e213eadca11b304f2b8->enter($__internal_2134352d661d769bc99e724ca208381e5bcc8067dadf8e213eadca11b304f2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_dc2bf138cd37896eb9fe8c6554352fd4ecbb30a66cbace57c21ba0a93a845f6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc2bf138cd37896eb9fe8c6554352fd4ecbb30a66cbace57c21ba0a93a845f6b->enter($__internal_dc2bf138cd37896eb9fe8c6554352fd4ecbb30a66cbace57c21ba0a93a845f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dc2bf138cd37896eb9fe8c6554352fd4ecbb30a66cbace57c21ba0a93a845f6b->leave($__internal_dc2bf138cd37896eb9fe8c6554352fd4ecbb30a66cbace57c21ba0a93a845f6b_prof);

        
        $__internal_2134352d661d769bc99e724ca208381e5bcc8067dadf8e213eadca11b304f2b8->leave($__internal_2134352d661d769bc99e724ca208381e5bcc8067dadf8e213eadca11b304f2b8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Resetting\\email.txt.twig");
    }
}
