<?php

/* :blog:layout.html.twig */
class __TwigTemplate_c82875eef47c7b063cd700166fccdce400e32c3558907b7453e7c2f14b5fc14a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":blog:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'body_layout' => array($this, 'block_body_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f70c05bc874c83d5023343ab8976e843198ec70a05cb7c97f402d88fd838483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f70c05bc874c83d5023343ab8976e843198ec70a05cb7c97f402d88fd838483->enter($__internal_6f70c05bc874c83d5023343ab8976e843198ec70a05cb7c97f402d88fd838483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:layout.html.twig"));

        $__internal_08779daa1ee22286f1324c794ba3b7a4e5e458fd083743873fe415f4a99d411a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08779daa1ee22286f1324c794ba3b7a4e5e458fd083743873fe415f4a99d411a->enter($__internal_08779daa1ee22286f1324c794ba3b7a4e5e458fd083743873fe415f4a99d411a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f70c05bc874c83d5023343ab8976e843198ec70a05cb7c97f402d88fd838483->leave($__internal_6f70c05bc874c83d5023343ab8976e843198ec70a05cb7c97f402d88fd838483_prof);

        
        $__internal_08779daa1ee22286f1324c794ba3b7a4e5e458fd083743873fe415f4a99d411a->leave($__internal_08779daa1ee22286f1324c794ba3b7a4e5e458fd083743873fe415f4a99d411a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_26a217424a875cd86eae74ff889b52fec0e76d349a26fc1406f1a6c4a332f580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26a217424a875cd86eae74ff889b52fec0e76d349a26fc1406f1a6c4a332f580->enter($__internal_26a217424a875cd86eae74ff889b52fec0e76d349a26fc1406f1a6c4a332f580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4223905367fabd87d89a300112ddb9d8cf3005a122a699cb838181b0c01f9fee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4223905367fabd87d89a300112ddb9d8cf3005a122a699cb838181b0c01f9fee->enter($__internal_4223905367fabd87d89a300112ddb9d8cf3005a122a699cb838181b0c01f9fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_4223905367fabd87d89a300112ddb9d8cf3005a122a699cb838181b0c01f9fee->leave($__internal_4223905367fabd87d89a300112ddb9d8cf3005a122a699cb838181b0c01f9fee_prof);

        
        $__internal_26a217424a875cd86eae74ff889b52fec0e76d349a26fc1406f1a6c4a332f580->leave($__internal_26a217424a875cd86eae74ff889b52fec0e76d349a26fc1406f1a6c4a332f580_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e0c86c760f60bd921584ea9fb521682eb737cbfcd1db820d3bbb3c5b260f1f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e0c86c760f60bd921584ea9fb521682eb737cbfcd1db820d3bbb3c5b260f1f5->enter($__internal_9e0c86c760f60bd921584ea9fb521682eb737cbfcd1db820d3bbb3c5b260f1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4464eedee479233bec59b367c03f84e2637bffeebdf1e4d024945fa94a3f4bcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4464eedee479233bec59b367c03f84e2637bffeebdf1e4d024945fa94a3f4bcc->enter($__internal_4464eedee479233bec59b367c03f84e2637bffeebdf1e4d024945fa94a3f4bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Blog</h1>
    ";
        // line 5
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_4464eedee479233bec59b367c03f84e2637bffeebdf1e4d024945fa94a3f4bcc->leave($__internal_4464eedee479233bec59b367c03f84e2637bffeebdf1e4d024945fa94a3f4bcc_prof);

        
        $__internal_9e0c86c760f60bd921584ea9fb521682eb737cbfcd1db820d3bbb3c5b260f1f5->leave($__internal_9e0c86c760f60bd921584ea9fb521682eb737cbfcd1db820d3bbb3c5b260f1f5_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_58b61acc4dec14f6b13f6023a4f22b3b8c5f1a9c49159f5ea6eb1779dd835003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58b61acc4dec14f6b13f6023a4f22b3b8c5f1a9c49159f5ea6eb1779dd835003->enter($__internal_58b61acc4dec14f6b13f6023a4f22b3b8c5f1a9c49159f5ea6eb1779dd835003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_d4024464d592eda2ac18b3772a6a2463ab18e3cb014ce13c861154d21372cc54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4024464d592eda2ac18b3772a6a2463ab18e3cb014ce13c861154d21372cc54->enter($__internal_d4024464d592eda2ac18b3772a6a2463ab18e3cb014ce13c861154d21372cc54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_d4024464d592eda2ac18b3772a6a2463ab18e3cb014ce13c861154d21372cc54->leave($__internal_d4024464d592eda2ac18b3772a6a2463ab18e3cb014ce13c861154d21372cc54_prof);

        
        $__internal_58b61acc4dec14f6b13f6023a4f22b3b8c5f1a9c49159f5ea6eb1779dd835003->leave($__internal_58b61acc4dec14f6b13f6023a4f22b3b8c5f1a9c49159f5ea6eb1779dd835003_prof);

    }

    public function getTemplateName()
    {
        return ":blog:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 5,  69 => 4,  60 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block title %}Blog{% endblock %}
{% block body %}
    <h1>Blog</h1>
    {% block body_layout %}{% endblock %}
{% endblock %}", ":blog:layout.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/blog/layout.html.twig");
    }
}
