<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_d87c19ce544a5e89fd6eb5f9feda9ebd764967fd8203ad8d9a2d11ff76c72c41 extends Twig_Template
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
        $__internal_478c5587c34a3d37a05beaacdf3272b91e67388106ec29980c7143fa41eff7cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_478c5587c34a3d37a05beaacdf3272b91e67388106ec29980c7143fa41eff7cc->enter($__internal_478c5587c34a3d37a05beaacdf3272b91e67388106ec29980c7143fa41eff7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_453b2b91206c84a4f3d0a84f092f26d0a938b7f3905663f6605f6e7b5dd1dae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_453b2b91206c84a4f3d0a84f092f26d0a938b7f3905663f6605f6e7b5dd1dae7->enter($__internal_453b2b91206c84a4f3d0a84f092f26d0a938b7f3905663f6605f6e7b5dd1dae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

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
        
        $__internal_478c5587c34a3d37a05beaacdf3272b91e67388106ec29980c7143fa41eff7cc->leave($__internal_478c5587c34a3d37a05beaacdf3272b91e67388106ec29980c7143fa41eff7cc_prof);

        
        $__internal_453b2b91206c84a4f3d0a84f092f26d0a938b7f3905663f6605f6e7b5dd1dae7->leave($__internal_453b2b91206c84a4f3d0a84f092f26d0a938b7f3905663f6605f6e7b5dd1dae7_prof);

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
