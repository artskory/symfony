<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_de80c5cbdc2f06997440ee17776b4a9c1ea4194ce3b6d29df8e83f1ce99a8e40 extends Twig_Template
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
        $__internal_9abe397c6965bdaaf02fdd24ca4de8ecae8476927ee746a5051b26a3121b9c93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9abe397c6965bdaaf02fdd24ca4de8ecae8476927ee746a5051b26a3121b9c93->enter($__internal_9abe397c6965bdaaf02fdd24ca4de8ecae8476927ee746a5051b26a3121b9c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_c40bfd113f4c914ecfaadd867aaef6aa29e7b5c1ffb8dd6a5655cde2ff4155ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c40bfd113f4c914ecfaadd867aaef6aa29e7b5c1ffb8dd6a5655cde2ff4155ff->enter($__internal_c40bfd113f4c914ecfaadd867aaef6aa29e7b5c1ffb8dd6a5655cde2ff4155ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_9abe397c6965bdaaf02fdd24ca4de8ecae8476927ee746a5051b26a3121b9c93->leave($__internal_9abe397c6965bdaaf02fdd24ca4de8ecae8476927ee746a5051b26a3121b9c93_prof);

        
        $__internal_c40bfd113f4c914ecfaadd867aaef6aa29e7b5c1ffb8dd6a5655cde2ff4155ff->leave($__internal_c40bfd113f4c914ecfaadd867aaef6aa29e7b5c1ffb8dd6a5655cde2ff4155ff_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
