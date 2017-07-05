<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_b1fadf6610e5708a2d24349da0a67380733966664076ce92c34a464cb8bb3559 extends Twig_Template
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
        $__internal_ef6758ece7a66d09a55f9d711ef71bddbd2aea1488fc3aac5d740a16c7729fde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef6758ece7a66d09a55f9d711ef71bddbd2aea1488fc3aac5d740a16c7729fde->enter($__internal_ef6758ece7a66d09a55f9d711ef71bddbd2aea1488fc3aac5d740a16c7729fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_890942cc8cfc7b2774be35d6721f72102f151dc25ad1555d85a991fc558d04e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_890942cc8cfc7b2774be35d6721f72102f151dc25ad1555d85a991fc558d04e3->enter($__internal_890942cc8cfc7b2774be35d6721f72102f151dc25ad1555d85a991fc558d04e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_ef6758ece7a66d09a55f9d711ef71bddbd2aea1488fc3aac5d740a16c7729fde->leave($__internal_ef6758ece7a66d09a55f9d711ef71bddbd2aea1488fc3aac5d740a16c7729fde_prof);

        
        $__internal_890942cc8cfc7b2774be35d6721f72102f151dc25ad1555d85a991fc558d04e3->leave($__internal_890942cc8cfc7b2774be35d6721f72102f151dc25ad1555d85a991fc558d04e3_prof);

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
