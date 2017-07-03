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
        $__internal_88bc90d8a1e341f907775be9706e4ddb3a3159c0fec486b75d9529c744df022a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88bc90d8a1e341f907775be9706e4ddb3a3159c0fec486b75d9529c744df022a->enter($__internal_88bc90d8a1e341f907775be9706e4ddb3a3159c0fec486b75d9529c744df022a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6c229af1632f806db579f5dade5b5562526fdfd477a6b9589880c5b437b00fba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c229af1632f806db579f5dade5b5562526fdfd477a6b9589880c5b437b00fba->enter($__internal_6c229af1632f806db579f5dade5b5562526fdfd477a6b9589880c5b437b00fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88bc90d8a1e341f907775be9706e4ddb3a3159c0fec486b75d9529c744df022a->leave($__internal_88bc90d8a1e341f907775be9706e4ddb3a3159c0fec486b75d9529c744df022a_prof);

        
        $__internal_6c229af1632f806db579f5dade5b5562526fdfd477a6b9589880c5b437b00fba->leave($__internal_6c229af1632f806db579f5dade5b5562526fdfd477a6b9589880c5b437b00fba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_525f34352bb71733d55c30be6a5a02281b8cb16daa103c3575c90affa6800b4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_525f34352bb71733d55c30be6a5a02281b8cb16daa103c3575c90affa6800b4f->enter($__internal_525f34352bb71733d55c30be6a5a02281b8cb16daa103c3575c90affa6800b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6a1b1a6d9b745cbb29e9a401302e43613c6500255461f3866bb13b2fc8e9f8e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a1b1a6d9b745cbb29e9a401302e43613c6500255461f3866bb13b2fc8e9f8e3->enter($__internal_6a1b1a6d9b745cbb29e9a401302e43613c6500255461f3866bb13b2fc8e9f8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6a1b1a6d9b745cbb29e9a401302e43613c6500255461f3866bb13b2fc8e9f8e3->leave($__internal_6a1b1a6d9b745cbb29e9a401302e43613c6500255461f3866bb13b2fc8e9f8e3_prof);

        
        $__internal_525f34352bb71733d55c30be6a5a02281b8cb16daa103c3575c90affa6800b4f->leave($__internal_525f34352bb71733d55c30be6a5a02281b8cb16daa103c3575c90affa6800b4f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3a2a383b22a759a0906882f47129610fcb22dad578c5046f3713736d793350fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a2a383b22a759a0906882f47129610fcb22dad578c5046f3713736d793350fe->enter($__internal_3a2a383b22a759a0906882f47129610fcb22dad578c5046f3713736d793350fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f4aba24dd92c26273bb2fe099b713aa2a000241ddb9d8974239a95ac1f6a7bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4aba24dd92c26273bb2fe099b713aa2a000241ddb9d8974239a95ac1f6a7bf5->enter($__internal_f4aba24dd92c26273bb2fe099b713aa2a000241ddb9d8974239a95ac1f6a7bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f4aba24dd92c26273bb2fe099b713aa2a000241ddb9d8974239a95ac1f6a7bf5->leave($__internal_f4aba24dd92c26273bb2fe099b713aa2a000241ddb9d8974239a95ac1f6a7bf5_prof);

        
        $__internal_3a2a383b22a759a0906882f47129610fcb22dad578c5046f3713736d793350fe->leave($__internal_3a2a383b22a759a0906882f47129610fcb22dad578c5046f3713736d793350fe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b3f46c3312f1357334dee7afe00668dab3949b42fded8a4bb4d940a7c47f8ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3f46c3312f1357334dee7afe00668dab3949b42fded8a4bb4d940a7c47f8ff2->enter($__internal_b3f46c3312f1357334dee7afe00668dab3949b42fded8a4bb4d940a7c47f8ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cae673c68c6a7f4e41e34988da3384537fd87f0343049cd7fd25e3665ff4383a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cae673c68c6a7f4e41e34988da3384537fd87f0343049cd7fd25e3665ff4383a->enter($__internal_cae673c68c6a7f4e41e34988da3384537fd87f0343049cd7fd25e3665ff4383a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cae673c68c6a7f4e41e34988da3384537fd87f0343049cd7fd25e3665ff4383a->leave($__internal_cae673c68c6a7f4e41e34988da3384537fd87f0343049cd7fd25e3665ff4383a_prof);

        
        $__internal_b3f46c3312f1357334dee7afe00668dab3949b42fded8a4bb4d940a7c47f8ff2->leave($__internal_b3f46c3312f1357334dee7afe00668dab3949b42fded8a4bb4d940a7c47f8ff2_prof);

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
