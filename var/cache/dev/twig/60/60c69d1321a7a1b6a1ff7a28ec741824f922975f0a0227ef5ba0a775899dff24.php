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
        $__internal_2e2fc95314ac39e8e9a925f92d3a2597271029cc73a6cc3735bde007b30dd13a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e2fc95314ac39e8e9a925f92d3a2597271029cc73a6cc3735bde007b30dd13a->enter($__internal_2e2fc95314ac39e8e9a925f92d3a2597271029cc73a6cc3735bde007b30dd13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_6cf29a9bc10132640e982b12ffbb09ecac61709a73f8e7cf61dc83a4f8f7d2e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf29a9bc10132640e982b12ffbb09ecac61709a73f8e7cf61dc83a4f8f7d2e4->enter($__internal_6cf29a9bc10132640e982b12ffbb09ecac61709a73f8e7cf61dc83a4f8f7d2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_2e2fc95314ac39e8e9a925f92d3a2597271029cc73a6cc3735bde007b30dd13a->leave($__internal_2e2fc95314ac39e8e9a925f92d3a2597271029cc73a6cc3735bde007b30dd13a_prof);

        
        $__internal_6cf29a9bc10132640e982b12ffbb09ecac61709a73f8e7cf61dc83a4f8f7d2e4->leave($__internal_6cf29a9bc10132640e982b12ffbb09ecac61709a73f8e7cf61dc83a4f8f7d2e4_prof);

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
