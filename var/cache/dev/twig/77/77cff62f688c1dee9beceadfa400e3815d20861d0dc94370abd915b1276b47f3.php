<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6f5d6e3bdd243dc8018cde0182edce2eb9b8c3e415789aa7c74d8ce8ff2f8d6c extends Twig_Template
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
        $__internal_37ad6c56c385f6d5fc6b731042d481a9e1dc9f6549da91a7439175ba8a10ab3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37ad6c56c385f6d5fc6b731042d481a9e1dc9f6549da91a7439175ba8a10ab3f->enter($__internal_37ad6c56c385f6d5fc6b731042d481a9e1dc9f6549da91a7439175ba8a10ab3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c6c1926a33b74d17dd91d705382cff7b050c26e61c92bc5cb7ae5fb667b65b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c1926a33b74d17dd91d705382cff7b050c26e61c92bc5cb7ae5fb667b65b23->enter($__internal_c6c1926a33b74d17dd91d705382cff7b050c26e61c92bc5cb7ae5fb667b65b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37ad6c56c385f6d5fc6b731042d481a9e1dc9f6549da91a7439175ba8a10ab3f->leave($__internal_37ad6c56c385f6d5fc6b731042d481a9e1dc9f6549da91a7439175ba8a10ab3f_prof);

        
        $__internal_c6c1926a33b74d17dd91d705382cff7b050c26e61c92bc5cb7ae5fb667b65b23->leave($__internal_c6c1926a33b74d17dd91d705382cff7b050c26e61c92bc5cb7ae5fb667b65b23_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8b465c93b2bd38e70ea64524c948f19072c39a45a1924216cf3618066a5e0635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b465c93b2bd38e70ea64524c948f19072c39a45a1924216cf3618066a5e0635->enter($__internal_8b465c93b2bd38e70ea64524c948f19072c39a45a1924216cf3618066a5e0635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_745efdd75d458735e70ce141e8c62d83083f5d0de1fd09ab5590b6efbc8551f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_745efdd75d458735e70ce141e8c62d83083f5d0de1fd09ab5590b6efbc8551f3->enter($__internal_745efdd75d458735e70ce141e8c62d83083f5d0de1fd09ab5590b6efbc8551f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_745efdd75d458735e70ce141e8c62d83083f5d0de1fd09ab5590b6efbc8551f3->leave($__internal_745efdd75d458735e70ce141e8c62d83083f5d0de1fd09ab5590b6efbc8551f3_prof);

        
        $__internal_8b465c93b2bd38e70ea64524c948f19072c39a45a1924216cf3618066a5e0635->leave($__internal_8b465c93b2bd38e70ea64524c948f19072c39a45a1924216cf3618066a5e0635_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_11269de543893214867e4c2f4fb93749816f3602906d75429326a212d2493760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11269de543893214867e4c2f4fb93749816f3602906d75429326a212d2493760->enter($__internal_11269de543893214867e4c2f4fb93749816f3602906d75429326a212d2493760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d7e463f21f8ed0a3fa10460b0290d42090734fed3cd2f0be57a8b8d9fa302a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e463f21f8ed0a3fa10460b0290d42090734fed3cd2f0be57a8b8d9fa302a76->enter($__internal_d7e463f21f8ed0a3fa10460b0290d42090734fed3cd2f0be57a8b8d9fa302a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d7e463f21f8ed0a3fa10460b0290d42090734fed3cd2f0be57a8b8d9fa302a76->leave($__internal_d7e463f21f8ed0a3fa10460b0290d42090734fed3cd2f0be57a8b8d9fa302a76_prof);

        
        $__internal_11269de543893214867e4c2f4fb93749816f3602906d75429326a212d2493760->leave($__internal_11269de543893214867e4c2f4fb93749816f3602906d75429326a212d2493760_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_92cad6b23eb12159993d1204cd501fad9d5bd9e594c393f12b132f293b644c0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92cad6b23eb12159993d1204cd501fad9d5bd9e594c393f12b132f293b644c0b->enter($__internal_92cad6b23eb12159993d1204cd501fad9d5bd9e594c393f12b132f293b644c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0df104b6915e967cbcc75dec74c88fe366e4b939bc8f2d140fa81e10717b872f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df104b6915e967cbcc75dec74c88fe366e4b939bc8f2d140fa81e10717b872f->enter($__internal_0df104b6915e967cbcc75dec74c88fe366e4b939bc8f2d140fa81e10717b872f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0df104b6915e967cbcc75dec74c88fe366e4b939bc8f2d140fa81e10717b872f->leave($__internal_0df104b6915e967cbcc75dec74c88fe366e4b939bc8f2d140fa81e10717b872f_prof);

        
        $__internal_92cad6b23eb12159993d1204cd501fad9d5bd9e594c393f12b132f293b644c0b->leave($__internal_92cad6b23eb12159993d1204cd501fad9d5bd9e594c393f12b132f293b644c0b_prof);

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
