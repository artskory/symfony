<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f6eada86c76ddc50569f609c3312179493d7935b698e80192703693b614b1568 extends Twig_Template
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
        $__internal_67ed8b658add026270441eeafbc68e7ca54bac393dfdaa382f26129a324cbdbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67ed8b658add026270441eeafbc68e7ca54bac393dfdaa382f26129a324cbdbe->enter($__internal_67ed8b658add026270441eeafbc68e7ca54bac393dfdaa382f26129a324cbdbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_093e2a33de69fc75986bd4cc3a9a74b0df406b5b3b8476a88befa7624f56fe04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_093e2a33de69fc75986bd4cc3a9a74b0df406b5b3b8476a88befa7624f56fe04->enter($__internal_093e2a33de69fc75986bd4cc3a9a74b0df406b5b3b8476a88befa7624f56fe04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67ed8b658add026270441eeafbc68e7ca54bac393dfdaa382f26129a324cbdbe->leave($__internal_67ed8b658add026270441eeafbc68e7ca54bac393dfdaa382f26129a324cbdbe_prof);

        
        $__internal_093e2a33de69fc75986bd4cc3a9a74b0df406b5b3b8476a88befa7624f56fe04->leave($__internal_093e2a33de69fc75986bd4cc3a9a74b0df406b5b3b8476a88befa7624f56fe04_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dc8531480da751eb7270d7c174e7feb85e1a89f58b84277876e0ad18351f4d2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc8531480da751eb7270d7c174e7feb85e1a89f58b84277876e0ad18351f4d2e->enter($__internal_dc8531480da751eb7270d7c174e7feb85e1a89f58b84277876e0ad18351f4d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ef7f7cf286a42eb266ccab65f00c6fdc1f78cc1fba67817ca6bd44a7f5415ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef7f7cf286a42eb266ccab65f00c6fdc1f78cc1fba67817ca6bd44a7f5415ee5->enter($__internal_ef7f7cf286a42eb266ccab65f00c6fdc1f78cc1fba67817ca6bd44a7f5415ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ef7f7cf286a42eb266ccab65f00c6fdc1f78cc1fba67817ca6bd44a7f5415ee5->leave($__internal_ef7f7cf286a42eb266ccab65f00c6fdc1f78cc1fba67817ca6bd44a7f5415ee5_prof);

        
        $__internal_dc8531480da751eb7270d7c174e7feb85e1a89f58b84277876e0ad18351f4d2e->leave($__internal_dc8531480da751eb7270d7c174e7feb85e1a89f58b84277876e0ad18351f4d2e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a45e0d0c399c6b0db553614d86dac4218c7aa622677ef60af39e011eaac8b69b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a45e0d0c399c6b0db553614d86dac4218c7aa622677ef60af39e011eaac8b69b->enter($__internal_a45e0d0c399c6b0db553614d86dac4218c7aa622677ef60af39e011eaac8b69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_67d353c64b3d92a945905c4b469f116b046bb0b67dd502f2ca2866dbbb0c96ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d353c64b3d92a945905c4b469f116b046bb0b67dd502f2ca2866dbbb0c96ea->enter($__internal_67d353c64b3d92a945905c4b469f116b046bb0b67dd502f2ca2866dbbb0c96ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_67d353c64b3d92a945905c4b469f116b046bb0b67dd502f2ca2866dbbb0c96ea->leave($__internal_67d353c64b3d92a945905c4b469f116b046bb0b67dd502f2ca2866dbbb0c96ea_prof);

        
        $__internal_a45e0d0c399c6b0db553614d86dac4218c7aa622677ef60af39e011eaac8b69b->leave($__internal_a45e0d0c399c6b0db553614d86dac4218c7aa622677ef60af39e011eaac8b69b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4afec4b4bc8e5ee70ef173df0715f7f1980a4818014fddec400d7aae20176214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4afec4b4bc8e5ee70ef173df0715f7f1980a4818014fddec400d7aae20176214->enter($__internal_4afec4b4bc8e5ee70ef173df0715f7f1980a4818014fddec400d7aae20176214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_09bc695400d41ee79a9b79daa11f6454977848202da779073806903e7de2486f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09bc695400d41ee79a9b79daa11f6454977848202da779073806903e7de2486f->enter($__internal_09bc695400d41ee79a9b79daa11f6454977848202da779073806903e7de2486f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_09bc695400d41ee79a9b79daa11f6454977848202da779073806903e7de2486f->leave($__internal_09bc695400d41ee79a9b79daa11f6454977848202da779073806903e7de2486f_prof);

        
        $__internal_4afec4b4bc8e5ee70ef173df0715f7f1980a4818014fddec400d7aae20176214->leave($__internal_4afec4b4bc8e5ee70ef173df0715f7f1980a4818014fddec400d7aae20176214_prof);

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
