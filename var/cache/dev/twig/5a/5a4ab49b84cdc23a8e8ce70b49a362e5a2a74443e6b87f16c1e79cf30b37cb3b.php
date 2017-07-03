<?php

/* OCPlatformBundle:Annonce:index.html.twig */
class __TwigTemplate_b934a6aa4a981254ee0e221f9c19da9b4844d43469833f24e50dd0551ea10784 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle:Annonce:layout.html.twig", "OCPlatformBundle:Annonce:index.html.twig", 1);
        $this->blocks = array(
            'body_layout' => array($this, 'block_body_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle:Annonce:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c6649cc63f6996e2d73fafc1ef775c1e7ed34e42579472c00dd07d9827e4912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c6649cc63f6996e2d73fafc1ef775c1e7ed34e42579472c00dd07d9827e4912->enter($__internal_1c6649cc63f6996e2d73fafc1ef775c1e7ed34e42579472c00dd07d9827e4912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Annonce:index.html.twig"));

        $__internal_6169cd943050e914f87283da4cd5d336839d894c99499f39485312eba61e4350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6169cd943050e914f87283da4cd5d336839d894c99499f39485312eba61e4350->enter($__internal_6169cd943050e914f87283da4cd5d336839d894c99499f39485312eba61e4350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Annonce:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c6649cc63f6996e2d73fafc1ef775c1e7ed34e42579472c00dd07d9827e4912->leave($__internal_1c6649cc63f6996e2d73fafc1ef775c1e7ed34e42579472c00dd07d9827e4912_prof);

        
        $__internal_6169cd943050e914f87283da4cd5d336839d894c99499f39485312eba61e4350->leave($__internal_6169cd943050e914f87283da4cd5d336839d894c99499f39485312eba61e4350_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_c6c68ac57cc8100799996ed277629349a23a2cf67e5494101be69e956ac983ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6c68ac57cc8100799996ed277629349a23a2cf67e5494101be69e956ac983ab->enter($__internal_c6c68ac57cc8100799996ed277629349a23a2cf67e5494101be69e956ac983ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_d33e2d5450b347cebd6cdb6567bff24d35ef7e4f48c6642e47826c3767144e93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d33e2d5450b347cebd6cdb6567bff24d35ef7e4f48c6642e47826c3767144e93->enter($__internal_d33e2d5450b347cebd6cdb6567bff24d35ef7e4f48c6642e47826c3767144e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 4
        echo "
";
        
        $__internal_d33e2d5450b347cebd6cdb6567bff24d35ef7e4f48c6642e47826c3767144e93->leave($__internal_d33e2d5450b347cebd6cdb6567bff24d35ef7e4f48c6642e47826c3767144e93_prof);

        
        $__internal_c6c68ac57cc8100799996ed277629349a23a2cf67e5494101be69e956ac983ab->leave($__internal_c6c68ac57cc8100799996ed277629349a23a2cf67e5494101be69e956ac983ab_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Annonce:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCPlatformBundle:Annonce:layout.html.twig\" %}

{% block body_layout %}

{% endblock %}
", "OCPlatformBundle:Annonce:index.html.twig", "C:\\xampp\\htdocs\\symfony\\src\\OC\\PlatformBundle/Resources/views/Annonce/index.html.twig");
    }
}
