<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_374a17522ace54c94623680fe364f53b323ef26b3946e6ff0352f38db9b6b647 extends Twig_Template
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
        $__internal_c5f3ac7ec4408b94ea94fbc69c58afc277e3410035a0b8699971ffe4e499fc0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5f3ac7ec4408b94ea94fbc69c58afc277e3410035a0b8699971ffe4e499fc0f->enter($__internal_c5f3ac7ec4408b94ea94fbc69c58afc277e3410035a0b8699971ffe4e499fc0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_f8c86166558934881cc5079e03545d9fac96413dcb5a0e22ebd5684236c21f54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8c86166558934881cc5079e03545d9fac96413dcb5a0e22ebd5684236c21f54->enter($__internal_f8c86166558934881cc5079e03545d9fac96413dcb5a0e22ebd5684236c21f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_c5f3ac7ec4408b94ea94fbc69c58afc277e3410035a0b8699971ffe4e499fc0f->leave($__internal_c5f3ac7ec4408b94ea94fbc69c58afc277e3410035a0b8699971ffe4e499fc0f_prof);

        
        $__internal_f8c86166558934881cc5079e03545d9fac96413dcb5a0e22ebd5684236c21f54->leave($__internal_f8c86166558934881cc5079e03545d9fac96413dcb5a0e22ebd5684236c21f54_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
