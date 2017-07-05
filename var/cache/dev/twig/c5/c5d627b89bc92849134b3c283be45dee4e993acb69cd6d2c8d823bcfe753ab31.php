<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_a74b479b367fd613a3e2b04335f0414ef0123cabd2d691824ef920c09b118c05 extends Twig_Template
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
        $__internal_efc72ace66c3042dcdaa437630661520961c5ff866d0e5ea9fb2723813324d25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efc72ace66c3042dcdaa437630661520961c5ff866d0e5ea9fb2723813324d25->enter($__internal_efc72ace66c3042dcdaa437630661520961c5ff866d0e5ea9fb2723813324d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_08563a5300f9aa1ca000fc9818f1554ec78e4bc3e46f5ea3f928a323a01087a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08563a5300f9aa1ca000fc9818f1554ec78e4bc3e46f5ea3f928a323a01087a5->enter($__internal_08563a5300f9aa1ca000fc9818f1554ec78e4bc3e46f5ea3f928a323a01087a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_efc72ace66c3042dcdaa437630661520961c5ff866d0e5ea9fb2723813324d25->leave($__internal_efc72ace66c3042dcdaa437630661520961c5ff866d0e5ea9fb2723813324d25_prof);

        
        $__internal_08563a5300f9aa1ca000fc9818f1554ec78e4bc3e46f5ea3f928a323a01087a5->leave($__internal_08563a5300f9aa1ca000fc9818f1554ec78e4bc3e46f5ea3f928a323a01087a5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
