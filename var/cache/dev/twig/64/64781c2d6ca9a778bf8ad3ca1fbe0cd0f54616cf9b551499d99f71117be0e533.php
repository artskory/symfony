<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_899a4cbaa3703bfc2850f2d34f9851e5d2fc04ca0142b6f05634b5f0508af1a0 extends Twig_Template
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
        $__internal_b5ac661e3d1454fd579a1bb21ce9597d9967ae986fd813f8c7392373f814dc0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5ac661e3d1454fd579a1bb21ce9597d9967ae986fd813f8c7392373f814dc0b->enter($__internal_b5ac661e3d1454fd579a1bb21ce9597d9967ae986fd813f8c7392373f814dc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_1fbe04656b0b0ea764521848ea7d65aaf100f13f08d655edfc4ca8c23f3f943e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fbe04656b0b0ea764521848ea7d65aaf100f13f08d655edfc4ca8c23f3f943e->enter($__internal_1fbe04656b0b0ea764521848ea7d65aaf100f13f08d655edfc4ca8c23f3f943e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

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
        
        $__internal_b5ac661e3d1454fd579a1bb21ce9597d9967ae986fd813f8c7392373f814dc0b->leave($__internal_b5ac661e3d1454fd579a1bb21ce9597d9967ae986fd813f8c7392373f814dc0b_prof);

        
        $__internal_1fbe04656b0b0ea764521848ea7d65aaf100f13f08d655edfc4ca8c23f3f943e->leave($__internal_1fbe04656b0b0ea764521848ea7d65aaf100f13f08d655edfc4ca8c23f3f943e_prof);

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
