<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_5b2bb63233d581cd57c05a6df5edad741fbf33de9b3c899d761c93002141dcc3 extends Twig_Template
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
        $__internal_c49d26863add6d304a05efb8552705b25e59ec86a3688e3fa17e614d9910984f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c49d26863add6d304a05efb8552705b25e59ec86a3688e3fa17e614d9910984f->enter($__internal_c49d26863add6d304a05efb8552705b25e59ec86a3688e3fa17e614d9910984f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_10aa7d30ed1396fd81fb331a0d777c8b6f0c1b86ee0f8aece393ef0bd778cea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10aa7d30ed1396fd81fb331a0d777c8b6f0c1b86ee0f8aece393ef0bd778cea0->enter($__internal_10aa7d30ed1396fd81fb331a0d777c8b6f0c1b86ee0f8aece393ef0bd778cea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_c49d26863add6d304a05efb8552705b25e59ec86a3688e3fa17e614d9910984f->leave($__internal_c49d26863add6d304a05efb8552705b25e59ec86a3688e3fa17e614d9910984f_prof);

        
        $__internal_10aa7d30ed1396fd81fb331a0d777c8b6f0c1b86ee0f8aece393ef0bd778cea0->leave($__internal_10aa7d30ed1396fd81fb331a0d777c8b6f0c1b86ee0f8aece393ef0bd778cea0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
