<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_de77ffe613832cf068644d43aee54d31683deb41a604cbbbfb3b05afae191bba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de48807eb0bbd350a976b725ade8848a9ccf9696e2c54bc291e88f456712a90b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de48807eb0bbd350a976b725ade8848a9ccf9696e2c54bc291e88f456712a90b->enter($__internal_de48807eb0bbd350a976b725ade8848a9ccf9696e2c54bc291e88f456712a90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_90d3eff6005a0e2acc094c481695fd07d5010757dc37cd02a898199b6535c582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d3eff6005a0e2acc094c481695fd07d5010757dc37cd02a898199b6535c582->enter($__internal_90d3eff6005a0e2acc094c481695fd07d5010757dc37cd02a898199b6535c582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_de48807eb0bbd350a976b725ade8848a9ccf9696e2c54bc291e88f456712a90b->leave($__internal_de48807eb0bbd350a976b725ade8848a9ccf9696e2c54bc291e88f456712a90b_prof);

        
        $__internal_90d3eff6005a0e2acc094c481695fd07d5010757dc37cd02a898199b6535c582->leave($__internal_90d3eff6005a0e2acc094c481695fd07d5010757dc37cd02a898199b6535c582_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3b80c976aa2194b277a8bcd9cbc49f8d450de10f78cbf231dd3c178ce1745855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b80c976aa2194b277a8bcd9cbc49f8d450de10f78cbf231dd3c178ce1745855->enter($__internal_3b80c976aa2194b277a8bcd9cbc49f8d450de10f78cbf231dd3c178ce1745855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3b7a2376daad270277160a56099cee618078e53a66c0016e627ccdf1a8c5fb09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b7a2376daad270277160a56099cee618078e53a66c0016e627ccdf1a8c5fb09->enter($__internal_3b7a2376daad270277160a56099cee618078e53a66c0016e627ccdf1a8c5fb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3b7a2376daad270277160a56099cee618078e53a66c0016e627ccdf1a8c5fb09->leave($__internal_3b7a2376daad270277160a56099cee618078e53a66c0016e627ccdf1a8c5fb09_prof);

        
        $__internal_3b80c976aa2194b277a8bcd9cbc49f8d450de10f78cbf231dd3c178ce1745855->leave($__internal_3b80c976aa2194b277a8bcd9cbc49f8d450de10f78cbf231dd3c178ce1745855_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
