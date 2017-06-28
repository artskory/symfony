<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_6dafd52b93d63887447eb9b3047b4a11f27579ba41f06acaeee8cb69bbd94b62 extends Twig_Template
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
        $__internal_75c5fbb6690bdb3d45c16565f077a6538c42c6d87a94315c93a9350188766129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75c5fbb6690bdb3d45c16565f077a6538c42c6d87a94315c93a9350188766129->enter($__internal_75c5fbb6690bdb3d45c16565f077a6538c42c6d87a94315c93a9350188766129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_cc7617c706895c25db0d592481ebb694cd3eb98660d7e12fcdccce0c29bf718d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc7617c706895c25db0d592481ebb694cd3eb98660d7e12fcdccce0c29bf718d->enter($__internal_cc7617c706895c25db0d592481ebb694cd3eb98660d7e12fcdccce0c29bf718d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_75c5fbb6690bdb3d45c16565f077a6538c42c6d87a94315c93a9350188766129->leave($__internal_75c5fbb6690bdb3d45c16565f077a6538c42c6d87a94315c93a9350188766129_prof);

        
        $__internal_cc7617c706895c25db0d592481ebb694cd3eb98660d7e12fcdccce0c29bf718d->leave($__internal_cc7617c706895c25db0d592481ebb694cd3eb98660d7e12fcdccce0c29bf718d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
