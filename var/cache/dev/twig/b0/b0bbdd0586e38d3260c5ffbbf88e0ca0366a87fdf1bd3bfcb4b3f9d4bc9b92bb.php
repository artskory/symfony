<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_222799021d557dd42a688230a1c23f551ccc31ce407cf75605edad38697ed1a1 extends Twig_Template
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
        $__internal_5c3bdf23a603649317a305dea72bdc84ac856222357fa6289d4afd202d1ab404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c3bdf23a603649317a305dea72bdc84ac856222357fa6289d4afd202d1ab404->enter($__internal_5c3bdf23a603649317a305dea72bdc84ac856222357fa6289d4afd202d1ab404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_2049d1baccd7c0ffd9e2172596972fa379c0e08ccb959cb7997ed14fd310e469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2049d1baccd7c0ffd9e2172596972fa379c0e08ccb959cb7997ed14fd310e469->enter($__internal_2049d1baccd7c0ffd9e2172596972fa379c0e08ccb959cb7997ed14fd310e469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_5c3bdf23a603649317a305dea72bdc84ac856222357fa6289d4afd202d1ab404->leave($__internal_5c3bdf23a603649317a305dea72bdc84ac856222357fa6289d4afd202d1ab404_prof);

        
        $__internal_2049d1baccd7c0ffd9e2172596972fa379c0e08ccb959cb7997ed14fd310e469->leave($__internal_2049d1baccd7c0ffd9e2172596972fa379c0e08ccb959cb7997ed14fd310e469_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
