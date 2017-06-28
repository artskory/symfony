<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d44a666d6806b267ee8120a6becbb04f74e8dcf4507b8e043ea4a093e3df69fa extends Twig_Template
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
        $__internal_6ccbc8d07e3f8b4e1cbf44bf03db0014a56806a3fd7c68e89927521b9b4c5ef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ccbc8d07e3f8b4e1cbf44bf03db0014a56806a3fd7c68e89927521b9b4c5ef4->enter($__internal_6ccbc8d07e3f8b4e1cbf44bf03db0014a56806a3fd7c68e89927521b9b4c5ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_0b826db9afc7ad36ad5141ace5422f284ac4c69494216db97192d0fc74437341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b826db9afc7ad36ad5141ace5422f284ac4c69494216db97192d0fc74437341->enter($__internal_0b826db9afc7ad36ad5141ace5422f284ac4c69494216db97192d0fc74437341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_6ccbc8d07e3f8b4e1cbf44bf03db0014a56806a3fd7c68e89927521b9b4c5ef4->leave($__internal_6ccbc8d07e3f8b4e1cbf44bf03db0014a56806a3fd7c68e89927521b9b4c5ef4_prof);

        
        $__internal_0b826db9afc7ad36ad5141ace5422f284ac4c69494216db97192d0fc74437341->leave($__internal_0b826db9afc7ad36ad5141ace5422f284ac4c69494216db97192d0fc74437341_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
