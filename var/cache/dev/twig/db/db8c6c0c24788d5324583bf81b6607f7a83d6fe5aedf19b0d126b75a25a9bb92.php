<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e5544c4b532c80ec31e341431ee4776b3d27fcfff955ffe815489b243dbbb6af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_bdec472e456f5f446bd7ccb85be390a58064b01f271e67196c9bc89c9a630cd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdec472e456f5f446bd7ccb85be390a58064b01f271e67196c9bc89c9a630cd6->enter($__internal_bdec472e456f5f446bd7ccb85be390a58064b01f271e67196c9bc89c9a630cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_474a009504bcd57935304bd2ce65a1989c2da6c52d5cd142fe8e1943204e8b01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_474a009504bcd57935304bd2ce65a1989c2da6c52d5cd142fe8e1943204e8b01->enter($__internal_474a009504bcd57935304bd2ce65a1989c2da6c52d5cd142fe8e1943204e8b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdec472e456f5f446bd7ccb85be390a58064b01f271e67196c9bc89c9a630cd6->leave($__internal_bdec472e456f5f446bd7ccb85be390a58064b01f271e67196c9bc89c9a630cd6_prof);

        
        $__internal_474a009504bcd57935304bd2ce65a1989c2da6c52d5cd142fe8e1943204e8b01->leave($__internal_474a009504bcd57935304bd2ce65a1989c2da6c52d5cd142fe8e1943204e8b01_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_33d6c1255538c3ffeb5d476e64348a4d45b8fc4a515f3c65d19216487993cff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33d6c1255538c3ffeb5d476e64348a4d45b8fc4a515f3c65d19216487993cff1->enter($__internal_33d6c1255538c3ffeb5d476e64348a4d45b8fc4a515f3c65d19216487993cff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c26015d6c460873a1bf22b70400345bacb0fa9437cf852044387ba9da3eafcca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c26015d6c460873a1bf22b70400345bacb0fa9437cf852044387ba9da3eafcca->enter($__internal_c26015d6c460873a1bf22b70400345bacb0fa9437cf852044387ba9da3eafcca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c26015d6c460873a1bf22b70400345bacb0fa9437cf852044387ba9da3eafcca->leave($__internal_c26015d6c460873a1bf22b70400345bacb0fa9437cf852044387ba9da3eafcca_prof);

        
        $__internal_33d6c1255538c3ffeb5d476e64348a4d45b8fc4a515f3c65d19216487993cff1->leave($__internal_33d6c1255538c3ffeb5d476e64348a4d45b8fc4a515f3c65d19216487993cff1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fa9c2fcc7d3af7c0b5628dc57382c7f04147a75829142ad4a411b835d6ce854e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa9c2fcc7d3af7c0b5628dc57382c7f04147a75829142ad4a411b835d6ce854e->enter($__internal_fa9c2fcc7d3af7c0b5628dc57382c7f04147a75829142ad4a411b835d6ce854e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9c8ae7d044cb105eba784090e9fb0f4bf5b72d303012ef9bbbceb46667e0659f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8ae7d044cb105eba784090e9fb0f4bf5b72d303012ef9bbbceb46667e0659f->enter($__internal_9c8ae7d044cb105eba784090e9fb0f4bf5b72d303012ef9bbbceb46667e0659f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9c8ae7d044cb105eba784090e9fb0f4bf5b72d303012ef9bbbceb46667e0659f->leave($__internal_9c8ae7d044cb105eba784090e9fb0f4bf5b72d303012ef9bbbceb46667e0659f_prof);

        
        $__internal_fa9c2fcc7d3af7c0b5628dc57382c7f04147a75829142ad4a411b835d6ce854e->leave($__internal_fa9c2fcc7d3af7c0b5628dc57382c7f04147a75829142ad4a411b835d6ce854e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_728ebff3bf4e59cf023346168a4da85f1f2c3c665bda2796a8cf48c9c539d6d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_728ebff3bf4e59cf023346168a4da85f1f2c3c665bda2796a8cf48c9c539d6d1->enter($__internal_728ebff3bf4e59cf023346168a4da85f1f2c3c665bda2796a8cf48c9c539d6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f667b178ea6ab875a2d7e384390f6ef586364db6424e5f2a0bfda89811df830c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f667b178ea6ab875a2d7e384390f6ef586364db6424e5f2a0bfda89811df830c->enter($__internal_f667b178ea6ab875a2d7e384390f6ef586364db6424e5f2a0bfda89811df830c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f667b178ea6ab875a2d7e384390f6ef586364db6424e5f2a0bfda89811df830c->leave($__internal_f667b178ea6ab875a2d7e384390f6ef586364db6424e5f2a0bfda89811df830c_prof);

        
        $__internal_728ebff3bf4e59cf023346168a4da85f1f2c3c665bda2796a8cf48c9c539d6d1->leave($__internal_728ebff3bf4e59cf023346168a4da85f1f2c3c665bda2796a8cf48c9c539d6d1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
