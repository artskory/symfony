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
        $__internal_22d8aee2df0b8295c51bcb5cb6bda6717943f065f58aee7377533a81a3af320e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22d8aee2df0b8295c51bcb5cb6bda6717943f065f58aee7377533a81a3af320e->enter($__internal_22d8aee2df0b8295c51bcb5cb6bda6717943f065f58aee7377533a81a3af320e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_b635baa233c7228fbed578f1a8873ac36933a77e00ebd0adcdfcc4a893b66408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b635baa233c7228fbed578f1a8873ac36933a77e00ebd0adcdfcc4a893b66408->enter($__internal_b635baa233c7228fbed578f1a8873ac36933a77e00ebd0adcdfcc4a893b66408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_22d8aee2df0b8295c51bcb5cb6bda6717943f065f58aee7377533a81a3af320e->leave($__internal_22d8aee2df0b8295c51bcb5cb6bda6717943f065f58aee7377533a81a3af320e_prof);

        
        $__internal_b635baa233c7228fbed578f1a8873ac36933a77e00ebd0adcdfcc4a893b66408->leave($__internal_b635baa233c7228fbed578f1a8873ac36933a77e00ebd0adcdfcc4a893b66408_prof);

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
