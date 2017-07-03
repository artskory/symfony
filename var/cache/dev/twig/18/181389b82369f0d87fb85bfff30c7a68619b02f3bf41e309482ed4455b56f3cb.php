<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_73d5b5336681243c703220d539d77abf08bca121fd577c5fa8cec6552d4eda64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be576c4904a39c5d84d89d954993b3c48ccaac2e1923aadf4a177c09cdb8ef7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be576c4904a39c5d84d89d954993b3c48ccaac2e1923aadf4a177c09cdb8ef7e->enter($__internal_be576c4904a39c5d84d89d954993b3c48ccaac2e1923aadf4a177c09cdb8ef7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_752cb13d53480486d77e9172a16f44e851fb35cbbf5b1eda95597648055c89f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_752cb13d53480486d77e9172a16f44e851fb35cbbf5b1eda95597648055c89f9->enter($__internal_752cb13d53480486d77e9172a16f44e851fb35cbbf5b1eda95597648055c89f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be576c4904a39c5d84d89d954993b3c48ccaac2e1923aadf4a177c09cdb8ef7e->leave($__internal_be576c4904a39c5d84d89d954993b3c48ccaac2e1923aadf4a177c09cdb8ef7e_prof);

        
        $__internal_752cb13d53480486d77e9172a16f44e851fb35cbbf5b1eda95597648055c89f9->leave($__internal_752cb13d53480486d77e9172a16f44e851fb35cbbf5b1eda95597648055c89f9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_55decb832aebe4c6372368a55fadaea91b7ec9ed06014f4e826846d6fe6dbb2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55decb832aebe4c6372368a55fadaea91b7ec9ed06014f4e826846d6fe6dbb2e->enter($__internal_55decb832aebe4c6372368a55fadaea91b7ec9ed06014f4e826846d6fe6dbb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e10c9e3b5d7f0127a2df42b60b64c26aeb270cf8c07405529373dcc62742ab4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e10c9e3b5d7f0127a2df42b60b64c26aeb270cf8c07405529373dcc62742ab4f->enter($__internal_e10c9e3b5d7f0127a2df42b60b64c26aeb270cf8c07405529373dcc62742ab4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e10c9e3b5d7f0127a2df42b60b64c26aeb270cf8c07405529373dcc62742ab4f->leave($__internal_e10c9e3b5d7f0127a2df42b60b64c26aeb270cf8c07405529373dcc62742ab4f_prof);

        
        $__internal_55decb832aebe4c6372368a55fadaea91b7ec9ed06014f4e826846d6fe6dbb2e->leave($__internal_55decb832aebe4c6372368a55fadaea91b7ec9ed06014f4e826846d6fe6dbb2e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_366a3ed6e9dd633911a6859400e48199eca2f2a77b4cf872eefdf992ffeeb0bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_366a3ed6e9dd633911a6859400e48199eca2f2a77b4cf872eefdf992ffeeb0bc->enter($__internal_366a3ed6e9dd633911a6859400e48199eca2f2a77b4cf872eefdf992ffeeb0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0922517c1659fe9b1743de7a99f211650b2efca3ed56fe3dced47e3ed091e9df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0922517c1659fe9b1743de7a99f211650b2efca3ed56fe3dced47e3ed091e9df->enter($__internal_0922517c1659fe9b1743de7a99f211650b2efca3ed56fe3dced47e3ed091e9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0922517c1659fe9b1743de7a99f211650b2efca3ed56fe3dced47e3ed091e9df->leave($__internal_0922517c1659fe9b1743de7a99f211650b2efca3ed56fe3dced47e3ed091e9df_prof);

        
        $__internal_366a3ed6e9dd633911a6859400e48199eca2f2a77b4cf872eefdf992ffeeb0bc->leave($__internal_366a3ed6e9dd633911a6859400e48199eca2f2a77b4cf872eefdf992ffeeb0bc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_13fc9cab8a8e1df5a09f98e1135de1508ece23d70ad14f824f497a31ae8a5ae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13fc9cab8a8e1df5a09f98e1135de1508ece23d70ad14f824f497a31ae8a5ae3->enter($__internal_13fc9cab8a8e1df5a09f98e1135de1508ece23d70ad14f824f497a31ae8a5ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e6133cd04d2f55be564df6f8949fe920b53f507233467a1eb14dd784df06ed97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6133cd04d2f55be564df6f8949fe920b53f507233467a1eb14dd784df06ed97->enter($__internal_e6133cd04d2f55be564df6f8949fe920b53f507233467a1eb14dd784df06ed97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e6133cd04d2f55be564df6f8949fe920b53f507233467a1eb14dd784df06ed97->leave($__internal_e6133cd04d2f55be564df6f8949fe920b53f507233467a1eb14dd784df06ed97_prof);

        
        $__internal_13fc9cab8a8e1df5a09f98e1135de1508ece23d70ad14f824f497a31ae8a5ae3->leave($__internal_13fc9cab8a8e1df5a09f98e1135de1508ece23d70ad14f824f497a31ae8a5ae3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
