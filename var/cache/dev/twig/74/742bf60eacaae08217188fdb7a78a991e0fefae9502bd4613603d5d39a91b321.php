<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_d8b146a5d98e9bf1c66f4731102281a67f461283b4391cb0e4cf47080e8ca874 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8f848b1683cad9a35f10176413096871a1086e613fb368013d6bb5b55e9153c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8f848b1683cad9a35f10176413096871a1086e613fb368013d6bb5b55e9153c->enter($__internal_d8f848b1683cad9a35f10176413096871a1086e613fb368013d6bb5b55e9153c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_a19c12f32cbff1b91034b5ab9fbafe6d8de796c3fa37377f5e9fd58c82dfd0dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a19c12f32cbff1b91034b5ab9fbafe6d8de796c3fa37377f5e9fd58c82dfd0dd->enter($__internal_a19c12f32cbff1b91034b5ab9fbafe6d8de796c3fa37377f5e9fd58c82dfd0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_d8f848b1683cad9a35f10176413096871a1086e613fb368013d6bb5b55e9153c->leave($__internal_d8f848b1683cad9a35f10176413096871a1086e613fb368013d6bb5b55e9153c_prof);

        
        $__internal_a19c12f32cbff1b91034b5ab9fbafe6d8de796c3fa37377f5e9fd58c82dfd0dd->leave($__internal_a19c12f32cbff1b91034b5ab9fbafe6d8de796c3fa37377f5e9fd58c82dfd0dd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
