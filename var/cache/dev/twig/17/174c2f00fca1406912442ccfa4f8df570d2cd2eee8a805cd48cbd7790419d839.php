<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_eac923be7b6924e00eec438f9f3b020451b7a8c430e8d6bfbe2607ae5441bd9d extends Twig_Template
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
        $__internal_4bb89b2649977273c49c1a49a0c2270bfd28b071068c68b5078e0f3e1a8f8f83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bb89b2649977273c49c1a49a0c2270bfd28b071068c68b5078e0f3e1a8f8f83->enter($__internal_4bb89b2649977273c49c1a49a0c2270bfd28b071068c68b5078e0f3e1a8f8f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_154112e87e457e90b038260683a92939e8bdd9072828fe139b1be37cf7fd91dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154112e87e457e90b038260683a92939e8bdd9072828fe139b1be37cf7fd91dd->enter($__internal_154112e87e457e90b038260683a92939e8bdd9072828fe139b1be37cf7fd91dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_4bb89b2649977273c49c1a49a0c2270bfd28b071068c68b5078e0f3e1a8f8f83->leave($__internal_4bb89b2649977273c49c1a49a0c2270bfd28b071068c68b5078e0f3e1a8f8f83_prof);

        
        $__internal_154112e87e457e90b038260683a92939e8bdd9072828fe139b1be37cf7fd91dd->leave($__internal_154112e87e457e90b038260683a92939e8bdd9072828fe139b1be37cf7fd91dd_prof);

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
