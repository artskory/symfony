<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_8c03e603097af06867a493636e9e70319aafbe1d672165a0432bc35b3ea00e4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5313b56bcdcc2b3103a15aaceeee7f04706c93ba131f52d9e0698d96740b7369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5313b56bcdcc2b3103a15aaceeee7f04706c93ba131f52d9e0698d96740b7369->enter($__internal_5313b56bcdcc2b3103a15aaceeee7f04706c93ba131f52d9e0698d96740b7369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_05023b961e24700223df041e393cdf5d36abfc800d88d57219a10e766b69e718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05023b961e24700223df041e393cdf5d36abfc800d88d57219a10e766b69e718->enter($__internal_05023b961e24700223df041e393cdf5d36abfc800d88d57219a10e766b69e718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5313b56bcdcc2b3103a15aaceeee7f04706c93ba131f52d9e0698d96740b7369->leave($__internal_5313b56bcdcc2b3103a15aaceeee7f04706c93ba131f52d9e0698d96740b7369_prof);

        
        $__internal_05023b961e24700223df041e393cdf5d36abfc800d88d57219a10e766b69e718->leave($__internal_05023b961e24700223df041e393cdf5d36abfc800d88d57219a10e766b69e718_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_59aa56226e83ac504098bed16d404244bea377a669cf509e988bb0bcd6a31d8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59aa56226e83ac504098bed16d404244bea377a669cf509e988bb0bcd6a31d8b->enter($__internal_59aa56226e83ac504098bed16d404244bea377a669cf509e988bb0bcd6a31d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1d315db3323780e69eb8d60c423941753d0dd6d5059ca9356a8bc478a9a7ae63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d315db3323780e69eb8d60c423941753d0dd6d5059ca9356a8bc478a9a7ae63->enter($__internal_1d315db3323780e69eb8d60c423941753d0dd6d5059ca9356a8bc478a9a7ae63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1d315db3323780e69eb8d60c423941753d0dd6d5059ca9356a8bc478a9a7ae63->leave($__internal_1d315db3323780e69eb8d60c423941753d0dd6d5059ca9356a8bc478a9a7ae63_prof);

        
        $__internal_59aa56226e83ac504098bed16d404244bea377a669cf509e988bb0bcd6a31d8b->leave($__internal_59aa56226e83ac504098bed16d404244bea377a669cf509e988bb0bcd6a31d8b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b6ffbc5597690a5ab12647a7566bbb832b6a3b97b961e99730975312e0f456e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b6ffbc5597690a5ab12647a7566bbb832b6a3b97b961e99730975312e0f456e->enter($__internal_4b6ffbc5597690a5ab12647a7566bbb832b6a3b97b961e99730975312e0f456e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ae788e35754eeeb5795dac5f844c5f50cf1bd54cd743433d9f48bf75dc48de3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae788e35754eeeb5795dac5f844c5f50cf1bd54cd743433d9f48bf75dc48de3e->enter($__internal_ae788e35754eeeb5795dac5f844c5f50cf1bd54cd743433d9f48bf75dc48de3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ae788e35754eeeb5795dac5f844c5f50cf1bd54cd743433d9f48bf75dc48de3e->leave($__internal_ae788e35754eeeb5795dac5f844c5f50cf1bd54cd743433d9f48bf75dc48de3e_prof);

        
        $__internal_4b6ffbc5597690a5ab12647a7566bbb832b6a3b97b961e99730975312e0f456e->leave($__internal_4b6ffbc5597690a5ab12647a7566bbb832b6a3b97b961e99730975312e0f456e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
