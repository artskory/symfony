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
        $__internal_6a5f7110bbc084b59996feed20568e476b1613b2218a6e03d00a597811cebf79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a5f7110bbc084b59996feed20568e476b1613b2218a6e03d00a597811cebf79->enter($__internal_6a5f7110bbc084b59996feed20568e476b1613b2218a6e03d00a597811cebf79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_dca2ff70baa426355ae19d2f35bed13fc11279b2f4c89557979e4cf7135a0a69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dca2ff70baa426355ae19d2f35bed13fc11279b2f4c89557979e4cf7135a0a69->enter($__internal_dca2ff70baa426355ae19d2f35bed13fc11279b2f4c89557979e4cf7135a0a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_6a5f7110bbc084b59996feed20568e476b1613b2218a6e03d00a597811cebf79->leave($__internal_6a5f7110bbc084b59996feed20568e476b1613b2218a6e03d00a597811cebf79_prof);

        
        $__internal_dca2ff70baa426355ae19d2f35bed13fc11279b2f4c89557979e4cf7135a0a69->leave($__internal_dca2ff70baa426355ae19d2f35bed13fc11279b2f4c89557979e4cf7135a0a69_prof);

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
