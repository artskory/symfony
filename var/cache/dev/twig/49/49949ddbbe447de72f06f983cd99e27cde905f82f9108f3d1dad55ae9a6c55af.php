<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b7cc4d24601dbea0a2e101b0b15097cb7ebfb52500eca2ff5f1079f504afa7bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_70a1f04eb2c4f0348b1dca8a47e820b355b17157602a095f4266c9961016a25d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70a1f04eb2c4f0348b1dca8a47e820b355b17157602a095f4266c9961016a25d->enter($__internal_70a1f04eb2c4f0348b1dca8a47e820b355b17157602a095f4266c9961016a25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8d8e95695fedb1decb6cb638fd099e592fe32211d1180b1bbee9be2591d17c9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d8e95695fedb1decb6cb638fd099e592fe32211d1180b1bbee9be2591d17c9b->enter($__internal_8d8e95695fedb1decb6cb638fd099e592fe32211d1180b1bbee9be2591d17c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70a1f04eb2c4f0348b1dca8a47e820b355b17157602a095f4266c9961016a25d->leave($__internal_70a1f04eb2c4f0348b1dca8a47e820b355b17157602a095f4266c9961016a25d_prof);

        
        $__internal_8d8e95695fedb1decb6cb638fd099e592fe32211d1180b1bbee9be2591d17c9b->leave($__internal_8d8e95695fedb1decb6cb638fd099e592fe32211d1180b1bbee9be2591d17c9b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_db46373835482d4bc912d070dfb1aa6843e252d050f8eea4529f4c2fd6bad49c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db46373835482d4bc912d070dfb1aa6843e252d050f8eea4529f4c2fd6bad49c->enter($__internal_db46373835482d4bc912d070dfb1aa6843e252d050f8eea4529f4c2fd6bad49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_957a9d34a4f055d1ecc8e70ec1889277f9c85c690134ef33b1ce50bea86b71e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_957a9d34a4f055d1ecc8e70ec1889277f9c85c690134ef33b1ce50bea86b71e0->enter($__internal_957a9d34a4f055d1ecc8e70ec1889277f9c85c690134ef33b1ce50bea86b71e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_957a9d34a4f055d1ecc8e70ec1889277f9c85c690134ef33b1ce50bea86b71e0->leave($__internal_957a9d34a4f055d1ecc8e70ec1889277f9c85c690134ef33b1ce50bea86b71e0_prof);

        
        $__internal_db46373835482d4bc912d070dfb1aa6843e252d050f8eea4529f4c2fd6bad49c->leave($__internal_db46373835482d4bc912d070dfb1aa6843e252d050f8eea4529f4c2fd6bad49c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d56124c9a4834c44d0c21d1a86f7a64edadf6a060f56e639cbba558b5a3008f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d56124c9a4834c44d0c21d1a86f7a64edadf6a060f56e639cbba558b5a3008f5->enter($__internal_d56124c9a4834c44d0c21d1a86f7a64edadf6a060f56e639cbba558b5a3008f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1c3dc0de9649265a64754fda12bb1386c111c7cf35e4d4f0103e62fb535fb1f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c3dc0de9649265a64754fda12bb1386c111c7cf35e4d4f0103e62fb535fb1f9->enter($__internal_1c3dc0de9649265a64754fda12bb1386c111c7cf35e4d4f0103e62fb535fb1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1c3dc0de9649265a64754fda12bb1386c111c7cf35e4d4f0103e62fb535fb1f9->leave($__internal_1c3dc0de9649265a64754fda12bb1386c111c7cf35e4d4f0103e62fb535fb1f9_prof);

        
        $__internal_d56124c9a4834c44d0c21d1a86f7a64edadf6a060f56e639cbba558b5a3008f5->leave($__internal_d56124c9a4834c44d0c21d1a86f7a64edadf6a060f56e639cbba558b5a3008f5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dbd0d22bf9550ff30d4172022b6d320e417a7e9cb2df6daef7af71083dfb6d3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbd0d22bf9550ff30d4172022b6d320e417a7e9cb2df6daef7af71083dfb6d3e->enter($__internal_dbd0d22bf9550ff30d4172022b6d320e417a7e9cb2df6daef7af71083dfb6d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e2b8b7a861f63c1d968f444d04f0849605e8906e4f9229c6bc500a5f0a37eeb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b8b7a861f63c1d968f444d04f0849605e8906e4f9229c6bc500a5f0a37eeb2->enter($__internal_e2b8b7a861f63c1d968f444d04f0849605e8906e4f9229c6bc500a5f0a37eeb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e2b8b7a861f63c1d968f444d04f0849605e8906e4f9229c6bc500a5f0a37eeb2->leave($__internal_e2b8b7a861f63c1d968f444d04f0849605e8906e4f9229c6bc500a5f0a37eeb2_prof);

        
        $__internal_dbd0d22bf9550ff30d4172022b6d320e417a7e9cb2df6daef7af71083dfb6d3e->leave($__internal_dbd0d22bf9550ff30d4172022b6d320e417a7e9cb2df6daef7af71083dfb6d3e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
