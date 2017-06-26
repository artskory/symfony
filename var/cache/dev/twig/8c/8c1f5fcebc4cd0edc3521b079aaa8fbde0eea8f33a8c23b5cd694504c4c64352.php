<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_0b3155eb34ecdb05f1eb5ab75db756d27f71d2037b51ddd0b56d0744b028a7cd extends Twig_Template
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
        $__internal_26b6cd5f5be01af1ffaed1023833b980eae24365c2cdbed7aeeebeffe9264b97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26b6cd5f5be01af1ffaed1023833b980eae24365c2cdbed7aeeebeffe9264b97->enter($__internal_26b6cd5f5be01af1ffaed1023833b980eae24365c2cdbed7aeeebeffe9264b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_c6584acb11f164ae717b1d5e84f95c28041e1a475a6cc7730377b214a8f0c707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6584acb11f164ae717b1d5e84f95c28041e1a475a6cc7730377b214a8f0c707->enter($__internal_c6584acb11f164ae717b1d5e84f95c28041e1a475a6cc7730377b214a8f0c707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_26b6cd5f5be01af1ffaed1023833b980eae24365c2cdbed7aeeebeffe9264b97->leave($__internal_26b6cd5f5be01af1ffaed1023833b980eae24365c2cdbed7aeeebeffe9264b97_prof);

        
        $__internal_c6584acb11f164ae717b1d5e84f95c28041e1a475a6cc7730377b214a8f0c707->leave($__internal_c6584acb11f164ae717b1d5e84f95c28041e1a475a6cc7730377b214a8f0c707_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
