<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_b74000a5a092c0b42774955d75e502a32b9222836d3434cd99be6adfbc6c7cd4 extends Twig_Template
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
        $__internal_6fc3e300afa3f17a9982e2e4d0ff20a792824e54335ec589563d2a0473b784da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fc3e300afa3f17a9982e2e4d0ff20a792824e54335ec589563d2a0473b784da->enter($__internal_6fc3e300afa3f17a9982e2e4d0ff20a792824e54335ec589563d2a0473b784da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_fbac9811ec93e6ddabe0e7cf93b6d44c325774c03c6e398f7ea7ec979c2a4c7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbac9811ec93e6ddabe0e7cf93b6d44c325774c03c6e398f7ea7ec979c2a4c7d->enter($__internal_fbac9811ec93e6ddabe0e7cf93b6d44c325774c03c6e398f7ea7ec979c2a4c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6fc3e300afa3f17a9982e2e4d0ff20a792824e54335ec589563d2a0473b784da->leave($__internal_6fc3e300afa3f17a9982e2e4d0ff20a792824e54335ec589563d2a0473b784da_prof);

        
        $__internal_fbac9811ec93e6ddabe0e7cf93b6d44c325774c03c6e398f7ea7ec979c2a4c7d->leave($__internal_fbac9811ec93e6ddabe0e7cf93b6d44c325774c03c6e398f7ea7ec979c2a4c7d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7ea16f8976c0ade903b78093291c3883ce71d7adc870fd9c48a08be7b4384914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ea16f8976c0ade903b78093291c3883ce71d7adc870fd9c48a08be7b4384914->enter($__internal_7ea16f8976c0ade903b78093291c3883ce71d7adc870fd9c48a08be7b4384914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_f973b8da7636c5d2df4cdb509cd722823df25c36b6aa410e1d4009cad5332e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f973b8da7636c5d2df4cdb509cd722823df25c36b6aa410e1d4009cad5332e15->enter($__internal_f973b8da7636c5d2df4cdb509cd722823df25c36b6aa410e1d4009cad5332e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_f973b8da7636c5d2df4cdb509cd722823df25c36b6aa410e1d4009cad5332e15->leave($__internal_f973b8da7636c5d2df4cdb509cd722823df25c36b6aa410e1d4009cad5332e15_prof);

        
        $__internal_7ea16f8976c0ade903b78093291c3883ce71d7adc870fd9c48a08be7b4384914->leave($__internal_7ea16f8976c0ade903b78093291c3883ce71d7adc870fd9c48a08be7b4384914_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d86cb2c276641eb47b4f17fe71dcf1fe4da7fa6faaa75666f1b9c52ab7ed0de9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d86cb2c276641eb47b4f17fe71dcf1fe4da7fa6faaa75666f1b9c52ab7ed0de9->enter($__internal_d86cb2c276641eb47b4f17fe71dcf1fe4da7fa6faaa75666f1b9c52ab7ed0de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_d599f481d475e06136f1cd36bb729d5c10c532055649a3d8a944c44b8567e6b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d599f481d475e06136f1cd36bb729d5c10c532055649a3d8a944c44b8567e6b4->enter($__internal_d599f481d475e06136f1cd36bb729d5c10c532055649a3d8a944c44b8567e6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d599f481d475e06136f1cd36bb729d5c10c532055649a3d8a944c44b8567e6b4->leave($__internal_d599f481d475e06136f1cd36bb729d5c10c532055649a3d8a944c44b8567e6b4_prof);

        
        $__internal_d86cb2c276641eb47b4f17fe71dcf1fe4da7fa6faaa75666f1b9c52ab7ed0de9->leave($__internal_d86cb2c276641eb47b4f17fe71dcf1fe4da7fa6faaa75666f1b9c52ab7ed0de9_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_95c05ffdae06aa1675b9f3f091fd345f39bf067fd07d698e1a5f8dd89ecda399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95c05ffdae06aa1675b9f3f091fd345f39bf067fd07d698e1a5f8dd89ecda399->enter($__internal_95c05ffdae06aa1675b9f3f091fd345f39bf067fd07d698e1a5f8dd89ecda399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_db812bd802122d4168a72d96f37cb2e6237356b194da97e779db022e5b6899e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db812bd802122d4168a72d96f37cb2e6237356b194da97e779db022e5b6899e1->enter($__internal_db812bd802122d4168a72d96f37cb2e6237356b194da97e779db022e5b6899e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_db812bd802122d4168a72d96f37cb2e6237356b194da97e779db022e5b6899e1->leave($__internal_db812bd802122d4168a72d96f37cb2e6237356b194da97e779db022e5b6899e1_prof);

        
        $__internal_95c05ffdae06aa1675b9f3f091fd345f39bf067fd07d698e1a5f8dd89ecda399->leave($__internal_95c05ffdae06aa1675b9f3f091fd345f39bf067fd07d698e1a5f8dd89ecda399_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Registration\\email.txt.twig");
    }
}
