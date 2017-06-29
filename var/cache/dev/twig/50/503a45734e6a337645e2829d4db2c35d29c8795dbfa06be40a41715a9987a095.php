<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c95d7577480026db6c59a326da20857bd700074e85bcf3ae42a7841f04561846 extends Twig_Template
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
        $__internal_5272f7cf25cd1ed9ec42f116f60ece5905a4582686dcd7e8b08b6de1cc1752de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5272f7cf25cd1ed9ec42f116f60ece5905a4582686dcd7e8b08b6de1cc1752de->enter($__internal_5272f7cf25cd1ed9ec42f116f60ece5905a4582686dcd7e8b08b6de1cc1752de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_224cfb4149b234677319eb445af4db749e630bbce08ce1a01bbb6abd41d89f16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_224cfb4149b234677319eb445af4db749e630bbce08ce1a01bbb6abd41d89f16->enter($__internal_224cfb4149b234677319eb445af4db749e630bbce08ce1a01bbb6abd41d89f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5272f7cf25cd1ed9ec42f116f60ece5905a4582686dcd7e8b08b6de1cc1752de->leave($__internal_5272f7cf25cd1ed9ec42f116f60ece5905a4582686dcd7e8b08b6de1cc1752de_prof);

        
        $__internal_224cfb4149b234677319eb445af4db749e630bbce08ce1a01bbb6abd41d89f16->leave($__internal_224cfb4149b234677319eb445af4db749e630bbce08ce1a01bbb6abd41d89f16_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f71474a1242ab105030bc0e64192f153ee803d0e3b6ee08c6ca13ef4e5262818 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f71474a1242ab105030bc0e64192f153ee803d0e3b6ee08c6ca13ef4e5262818->enter($__internal_f71474a1242ab105030bc0e64192f153ee803d0e3b6ee08c6ca13ef4e5262818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_de0a1d83114edacfedf0571d7e38111b30f64b10fadece1b9f382f69817bc1e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de0a1d83114edacfedf0571d7e38111b30f64b10fadece1b9f382f69817bc1e3->enter($__internal_de0a1d83114edacfedf0571d7e38111b30f64b10fadece1b9f382f69817bc1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_de0a1d83114edacfedf0571d7e38111b30f64b10fadece1b9f382f69817bc1e3->leave($__internal_de0a1d83114edacfedf0571d7e38111b30f64b10fadece1b9f382f69817bc1e3_prof);

        
        $__internal_f71474a1242ab105030bc0e64192f153ee803d0e3b6ee08c6ca13ef4e5262818->leave($__internal_f71474a1242ab105030bc0e64192f153ee803d0e3b6ee08c6ca13ef4e5262818_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_55bc7d39bead7982394d935445155026dfb157c6825214fa8b899b461b62aa8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55bc7d39bead7982394d935445155026dfb157c6825214fa8b899b461b62aa8d->enter($__internal_55bc7d39bead7982394d935445155026dfb157c6825214fa8b899b461b62aa8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b2bcebf791feea2cb689f1e0a30a4542a5c1abbed12bdfe510383f2c266567b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2bcebf791feea2cb689f1e0a30a4542a5c1abbed12bdfe510383f2c266567b3->enter($__internal_b2bcebf791feea2cb689f1e0a30a4542a5c1abbed12bdfe510383f2c266567b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b2bcebf791feea2cb689f1e0a30a4542a5c1abbed12bdfe510383f2c266567b3->leave($__internal_b2bcebf791feea2cb689f1e0a30a4542a5c1abbed12bdfe510383f2c266567b3_prof);

        
        $__internal_55bc7d39bead7982394d935445155026dfb157c6825214fa8b899b461b62aa8d->leave($__internal_55bc7d39bead7982394d935445155026dfb157c6825214fa8b899b461b62aa8d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_34921313e93a91719345e797b10800b99be9443debcefb3009e5015a45f02019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34921313e93a91719345e797b10800b99be9443debcefb3009e5015a45f02019->enter($__internal_34921313e93a91719345e797b10800b99be9443debcefb3009e5015a45f02019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_816c324f4e21b60be636c0b2524f618ace15c7404e303b1ac336519c823fa60a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_816c324f4e21b60be636c0b2524f618ace15c7404e303b1ac336519c823fa60a->enter($__internal_816c324f4e21b60be636c0b2524f618ace15c7404e303b1ac336519c823fa60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_816c324f4e21b60be636c0b2524f618ace15c7404e303b1ac336519c823fa60a->leave($__internal_816c324f4e21b60be636c0b2524f618ace15c7404e303b1ac336519c823fa60a_prof);

        
        $__internal_34921313e93a91719345e797b10800b99be9443debcefb3009e5015a45f02019->leave($__internal_34921313e93a91719345e797b10800b99be9443debcefb3009e5015a45f02019_prof);

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
