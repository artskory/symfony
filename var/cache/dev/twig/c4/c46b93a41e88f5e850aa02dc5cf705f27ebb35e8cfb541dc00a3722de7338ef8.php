<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_6bd7191424f323b29205d4e2e393cfb7a28c46fb2b3ba6fa7fc1e4418205a020 extends Twig_Template
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
        $__internal_6e74223dee282e1cdbf6765ea37a3989ef3fd2a2b5d00ed1c6812293bb2cb6cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e74223dee282e1cdbf6765ea37a3989ef3fd2a2b5d00ed1c6812293bb2cb6cc->enter($__internal_6e74223dee282e1cdbf6765ea37a3989ef3fd2a2b5d00ed1c6812293bb2cb6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_2619034d02ef83959ff3e0fc4519df01d2582e6d80acf13c90ca8f09e1d42511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2619034d02ef83959ff3e0fc4519df01d2582e6d80acf13c90ca8f09e1d42511->enter($__internal_2619034d02ef83959ff3e0fc4519df01d2582e6d80acf13c90ca8f09e1d42511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_6e74223dee282e1cdbf6765ea37a3989ef3fd2a2b5d00ed1c6812293bb2cb6cc->leave($__internal_6e74223dee282e1cdbf6765ea37a3989ef3fd2a2b5d00ed1c6812293bb2cb6cc_prof);

        
        $__internal_2619034d02ef83959ff3e0fc4519df01d2582e6d80acf13c90ca8f09e1d42511->leave($__internal_2619034d02ef83959ff3e0fc4519df01d2582e6d80acf13c90ca8f09e1d42511_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
