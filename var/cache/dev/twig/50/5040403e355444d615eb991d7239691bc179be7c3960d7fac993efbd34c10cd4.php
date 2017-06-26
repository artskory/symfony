<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_4b82a5974f3c50029d4018cd4205b094d733f59ee9531d5145c7987a61581541 extends Twig_Template
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
        $__internal_f66c7c0669ef291d576294cf4f01ddb7f99ad332c054cc0c5ab8fa0a1ba15ac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f66c7c0669ef291d576294cf4f01ddb7f99ad332c054cc0c5ab8fa0a1ba15ac5->enter($__internal_f66c7c0669ef291d576294cf4f01ddb7f99ad332c054cc0c5ab8fa0a1ba15ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_4690f7bca409e3a2169dc776e3c31a3375026b0c8ef163ea031fd1c2ef201007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4690f7bca409e3a2169dc776e3c31a3375026b0c8ef163ea031fd1c2ef201007->enter($__internal_4690f7bca409e3a2169dc776e3c31a3375026b0c8ef163ea031fd1c2ef201007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f66c7c0669ef291d576294cf4f01ddb7f99ad332c054cc0c5ab8fa0a1ba15ac5->leave($__internal_f66c7c0669ef291d576294cf4f01ddb7f99ad332c054cc0c5ab8fa0a1ba15ac5_prof);

        
        $__internal_4690f7bca409e3a2169dc776e3c31a3375026b0c8ef163ea031fd1c2ef201007->leave($__internal_4690f7bca409e3a2169dc776e3c31a3375026b0c8ef163ea031fd1c2ef201007_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3ec3ac14a59a67e0a23e7309d32c29f43b812a93e64029c851cdca92a55ddda9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ec3ac14a59a67e0a23e7309d32c29f43b812a93e64029c851cdca92a55ddda9->enter($__internal_3ec3ac14a59a67e0a23e7309d32c29f43b812a93e64029c851cdca92a55ddda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b5b7d9edeb65d5df4c492e2ec76e4c29cf2f5078d67197218885508ea194ab73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b7d9edeb65d5df4c492e2ec76e4c29cf2f5078d67197218885508ea194ab73->enter($__internal_b5b7d9edeb65d5df4c492e2ec76e4c29cf2f5078d67197218885508ea194ab73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b5b7d9edeb65d5df4c492e2ec76e4c29cf2f5078d67197218885508ea194ab73->leave($__internal_b5b7d9edeb65d5df4c492e2ec76e4c29cf2f5078d67197218885508ea194ab73_prof);

        
        $__internal_3ec3ac14a59a67e0a23e7309d32c29f43b812a93e64029c851cdca92a55ddda9->leave($__internal_3ec3ac14a59a67e0a23e7309d32c29f43b812a93e64029c851cdca92a55ddda9_prof);

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
