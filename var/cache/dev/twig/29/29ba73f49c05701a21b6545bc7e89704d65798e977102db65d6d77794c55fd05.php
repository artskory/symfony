<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_a9cbc9adc9ad997ee3420e1e430cb936e8a74469e1ad817411764172393944b4 extends Twig_Template
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
        $__internal_d5f39f1bbbd89ccc63aa1e07c214ae4a4b80b2af176d05902472af011b4c1509 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5f39f1bbbd89ccc63aa1e07c214ae4a4b80b2af176d05902472af011b4c1509->enter($__internal_d5f39f1bbbd89ccc63aa1e07c214ae4a4b80b2af176d05902472af011b4c1509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_c6b0ac57cc7de7e4898a3c746ee3870c762742ff14d377a7f3c9191285ebc7bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b0ac57cc7de7e4898a3c746ee3870c762742ff14d377a7f3c9191285ebc7bf->enter($__internal_c6b0ac57cc7de7e4898a3c746ee3870c762742ff14d377a7f3c9191285ebc7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_d5f39f1bbbd89ccc63aa1e07c214ae4a4b80b2af176d05902472af011b4c1509->leave($__internal_d5f39f1bbbd89ccc63aa1e07c214ae4a4b80b2af176d05902472af011b4c1509_prof);

        
        $__internal_c6b0ac57cc7de7e4898a3c746ee3870c762742ff14d377a7f3c9191285ebc7bf->leave($__internal_c6b0ac57cc7de7e4898a3c746ee3870c762742ff14d377a7f3c9191285ebc7bf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
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
", "TwigBundle:Exception:traces.xml.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
