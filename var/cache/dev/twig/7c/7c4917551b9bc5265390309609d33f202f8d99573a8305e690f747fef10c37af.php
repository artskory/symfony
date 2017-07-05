<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_219cebfee756e45e06b5020dbddf1d1acbdafdc481f2eba00570a437b1658ac2 extends Twig_Template
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
        $__internal_39cada244935dd22995bdbed05e02e30f4656b7247dd2c675eae36f243f99a59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39cada244935dd22995bdbed05e02e30f4656b7247dd2c675eae36f243f99a59->enter($__internal_39cada244935dd22995bdbed05e02e30f4656b7247dd2c675eae36f243f99a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_1be6167dff33bfb6951df0ca8e6d2f7ac438cbf7191354c9c9f31270c8d6d4e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be6167dff33bfb6951df0ca8e6d2f7ac438cbf7191354c9c9f31270c8d6d4e4->enter($__internal_1be6167dff33bfb6951df0ca8e6d2f7ac438cbf7191354c9c9f31270c8d6d4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_39cada244935dd22995bdbed05e02e30f4656b7247dd2c675eae36f243f99a59->leave($__internal_39cada244935dd22995bdbed05e02e30f4656b7247dd2c675eae36f243f99a59_prof);

        
        $__internal_1be6167dff33bfb6951df0ca8e6d2f7ac438cbf7191354c9c9f31270c8d6d4e4->leave($__internal_1be6167dff33bfb6951df0ca8e6d2f7ac438cbf7191354c9c9f31270c8d6d4e4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9461bde546cce4f446e49f5d595d599729c3e21c026d488a137e24bf56181115 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9461bde546cce4f446e49f5d595d599729c3e21c026d488a137e24bf56181115->enter($__internal_9461bde546cce4f446e49f5d595d599729c3e21c026d488a137e24bf56181115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_96c21c872089ae562b4d4b3e4228307a3b27bdf576b613711810b4bf0ab6c466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c21c872089ae562b4d4b3e4228307a3b27bdf576b613711810b4bf0ab6c466->enter($__internal_96c21c872089ae562b4d4b3e4228307a3b27bdf576b613711810b4bf0ab6c466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_96c21c872089ae562b4d4b3e4228307a3b27bdf576b613711810b4bf0ab6c466->leave($__internal_96c21c872089ae562b4d4b3e4228307a3b27bdf576b613711810b4bf0ab6c466_prof);

        
        $__internal_9461bde546cce4f446e49f5d595d599729c3e21c026d488a137e24bf56181115->leave($__internal_9461bde546cce4f446e49f5d595d599729c3e21c026d488a137e24bf56181115_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
