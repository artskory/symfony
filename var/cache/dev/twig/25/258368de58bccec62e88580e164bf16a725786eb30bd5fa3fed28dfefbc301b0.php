<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_b61e7b01e6c9dcb3cd41e82aaeeb275a92823992ef5011ef004adaf7fb5382a6 extends Twig_Template
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
        $__internal_0c91406ab17bfae24d4b92bd606d22b904803d5531694a1ac34da076a1aa09bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c91406ab17bfae24d4b92bd606d22b904803d5531694a1ac34da076a1aa09bd->enter($__internal_0c91406ab17bfae24d4b92bd606d22b904803d5531694a1ac34da076a1aa09bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_9166062d940594d52de40a71450e85e0a84a97bfc71f9dbb3c54828f681ed714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9166062d940594d52de40a71450e85e0a84a97bfc71f9dbb3c54828f681ed714->enter($__internal_9166062d940594d52de40a71450e85e0a84a97bfc71f9dbb3c54828f681ed714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0c91406ab17bfae24d4b92bd606d22b904803d5531694a1ac34da076a1aa09bd->leave($__internal_0c91406ab17bfae24d4b92bd606d22b904803d5531694a1ac34da076a1aa09bd_prof);

        
        $__internal_9166062d940594d52de40a71450e85e0a84a97bfc71f9dbb3c54828f681ed714->leave($__internal_9166062d940594d52de40a71450e85e0a84a97bfc71f9dbb3c54828f681ed714_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
