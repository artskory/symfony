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
        $__internal_4395dd1303b7456e5f88e5ec0e080831d277ad221fa7642d19dcba5dec6093de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4395dd1303b7456e5f88e5ec0e080831d277ad221fa7642d19dcba5dec6093de->enter($__internal_4395dd1303b7456e5f88e5ec0e080831d277ad221fa7642d19dcba5dec6093de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_3b48751cac8658f08442e863528b73a3a6529d83d47f0046747ce13244131b88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b48751cac8658f08442e863528b73a3a6529d83d47f0046747ce13244131b88->enter($__internal_3b48751cac8658f08442e863528b73a3a6529d83d47f0046747ce13244131b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4395dd1303b7456e5f88e5ec0e080831d277ad221fa7642d19dcba5dec6093de->leave($__internal_4395dd1303b7456e5f88e5ec0e080831d277ad221fa7642d19dcba5dec6093de_prof);

        
        $__internal_3b48751cac8658f08442e863528b73a3a6529d83d47f0046747ce13244131b88->leave($__internal_3b48751cac8658f08442e863528b73a3a6529d83d47f0046747ce13244131b88_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b4b0c3a5bed457ee8bcaec7f7b30116d1c947434843d967ad2281ae39f83b3d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4b0c3a5bed457ee8bcaec7f7b30116d1c947434843d967ad2281ae39f83b3d0->enter($__internal_b4b0c3a5bed457ee8bcaec7f7b30116d1c947434843d967ad2281ae39f83b3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e7cc210de397a7d1d43bd8e30738da986407d54e9014db3cd40c4d5c6ba57e63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7cc210de397a7d1d43bd8e30738da986407d54e9014db3cd40c4d5c6ba57e63->enter($__internal_e7cc210de397a7d1d43bd8e30738da986407d54e9014db3cd40c4d5c6ba57e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e7cc210de397a7d1d43bd8e30738da986407d54e9014db3cd40c4d5c6ba57e63->leave($__internal_e7cc210de397a7d1d43bd8e30738da986407d54e9014db3cd40c4d5c6ba57e63_prof);

        
        $__internal_b4b0c3a5bed457ee8bcaec7f7b30116d1c947434843d967ad2281ae39f83b3d0->leave($__internal_b4b0c3a5bed457ee8bcaec7f7b30116d1c947434843d967ad2281ae39f83b3d0_prof);

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
