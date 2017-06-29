<?php

/* OCPlatformBundle:Annonce:layout.html.twig */
class __TwigTemplate_76698c90e027468a1716b89133023e43eb9758bb0f88d58ca92c72220ddda15c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "OCPlatformBundle:Annonce:layout.html.twig", 1);
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
        $__internal_d2e56f68b0f1a2dcc420690b3e0fc3043dab4fce826daf15d4af9a92a7ec805e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2e56f68b0f1a2dcc420690b3e0fc3043dab4fce826daf15d4af9a92a7ec805e->enter($__internal_d2e56f68b0f1a2dcc420690b3e0fc3043dab4fce826daf15d4af9a92a7ec805e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Annonce:layout.html.twig"));

        $__internal_53a7d2756a700de9efb82675fe552d87194e901cdcc11b1929641da4be1bf181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a7d2756a700de9efb82675fe552d87194e901cdcc11b1929641da4be1bf181->enter($__internal_53a7d2756a700de9efb82675fe552d87194e901cdcc11b1929641da4be1bf181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Annonce:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2e56f68b0f1a2dcc420690b3e0fc3043dab4fce826daf15d4af9a92a7ec805e->leave($__internal_d2e56f68b0f1a2dcc420690b3e0fc3043dab4fce826daf15d4af9a92a7ec805e_prof);

        
        $__internal_53a7d2756a700de9efb82675fe552d87194e901cdcc11b1929641da4be1bf181->leave($__internal_53a7d2756a700de9efb82675fe552d87194e901cdcc11b1929641da4be1bf181_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_203a24e63bd73f57cdfeeecb07d8714529f8df37a567d70feee0a79f0f051d22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_203a24e63bd73f57cdfeeecb07d8714529f8df37a567d70feee0a79f0f051d22->enter($__internal_203a24e63bd73f57cdfeeecb07d8714529f8df37a567d70feee0a79f0f051d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9ac8350e82c20ddd7480b185fb10ed49099ccda2276ad37adbc787df4d4262ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ac8350e82c20ddd7480b185fb10ed49099ccda2276ad37adbc787df4d4262ea->enter($__internal_9ac8350e82c20ddd7480b185fb10ed49099ccda2276ad37adbc787df4d4262ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_9ac8350e82c20ddd7480b185fb10ed49099ccda2276ad37adbc787df4d4262ea->leave($__internal_9ac8350e82c20ddd7480b185fb10ed49099ccda2276ad37adbc787df4d4262ea_prof);

        
        $__internal_203a24e63bd73f57cdfeeecb07d8714529f8df37a567d70feee0a79f0f051d22->leave($__internal_203a24e63bd73f57cdfeeecb07d8714529f8df37a567d70feee0a79f0f051d22_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e097baadfabaccb15e4f75a62997d2e0ce507835f03bef21ebb16fc21190abc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e097baadfabaccb15e4f75a62997d2e0ce507835f03bef21ebb16fc21190abc1->enter($__internal_e097baadfabaccb15e4f75a62997d2e0ce507835f03bef21ebb16fc21190abc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d02474ccb65249b223e567e96954964e9e33b424c69f5b2a2862fffb0e57beec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02474ccb65249b223e567e96954964e9e33b424c69f5b2a2862fffb0e57beec->enter($__internal_d02474ccb65249b223e567e96954964e9e33b424c69f5b2a2862fffb0e57beec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Annonce</h1>
    ";
        // line 5
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_d02474ccb65249b223e567e96954964e9e33b424c69f5b2a2862fffb0e57beec->leave($__internal_d02474ccb65249b223e567e96954964e9e33b424c69f5b2a2862fffb0e57beec_prof);

        
        $__internal_e097baadfabaccb15e4f75a62997d2e0ce507835f03bef21ebb16fc21190abc1->leave($__internal_e097baadfabaccb15e4f75a62997d2e0ce507835f03bef21ebb16fc21190abc1_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_c34623dd9965cd5d960e75a76e4c795cb3980f45940e54042b24143616f8d1cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c34623dd9965cd5d960e75a76e4c795cb3980f45940e54042b24143616f8d1cf->enter($__internal_c34623dd9965cd5d960e75a76e4c795cb3980f45940e54042b24143616f8d1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_355f4f07a2d92048ba7225b2ac21c96db3dde1690d7f3608ca3b8c91d11d1dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_355f4f07a2d92048ba7225b2ac21c96db3dde1690d7f3608ca3b8c91d11d1dd4->enter($__internal_355f4f07a2d92048ba7225b2ac21c96db3dde1690d7f3608ca3b8c91d11d1dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_355f4f07a2d92048ba7225b2ac21c96db3dde1690d7f3608ca3b8c91d11d1dd4->leave($__internal_355f4f07a2d92048ba7225b2ac21c96db3dde1690d7f3608ca3b8c91d11d1dd4_prof);

        
        $__internal_c34623dd9965cd5d960e75a76e4c795cb3980f45940e54042b24143616f8d1cf->leave($__internal_c34623dd9965cd5d960e75a76e4c795cb3980f45940e54042b24143616f8d1cf_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Annonce:layout.html.twig";
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
    <h1>Annonce</h1>
    {% block body_layout %}{% endblock %}
{% endblock %}", "OCPlatformBundle:Annonce:layout.html.twig", "C:\\xampp\\htdocs\\symfony\\src\\OC\\PlatformBundle/Resources/views/Annonce/layout.html.twig");
    }
}
