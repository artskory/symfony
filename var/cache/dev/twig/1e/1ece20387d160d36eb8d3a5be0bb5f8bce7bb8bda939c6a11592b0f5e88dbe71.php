<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_81f577ffa07b149badcdfe071bc15b0ae63e6032b4d8cecaba028bd28f9ec724 extends Twig_Template
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
        $__internal_e751e370d933dba207fc90150d0e13da2f78ebe3804ae0a147c9961456286bc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e751e370d933dba207fc90150d0e13da2f78ebe3804ae0a147c9961456286bc8->enter($__internal_e751e370d933dba207fc90150d0e13da2f78ebe3804ae0a147c9961456286bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_c2b98f411ec305c0f68c40291a3945c3f03eb007a3f166ba9bb68d58adec0cee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2b98f411ec305c0f68c40291a3945c3f03eb007a3f166ba9bb68d58adec0cee->enter($__internal_c2b98f411ec305c0f68c40291a3945c3f03eb007a3f166ba9bb68d58adec0cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_e751e370d933dba207fc90150d0e13da2f78ebe3804ae0a147c9961456286bc8->leave($__internal_e751e370d933dba207fc90150d0e13da2f78ebe3804ae0a147c9961456286bc8_prof);

        
        $__internal_c2b98f411ec305c0f68c40291a3945c3f03eb007a3f166ba9bb68d58adec0cee->leave($__internal_c2b98f411ec305c0f68c40291a3945c3f03eb007a3f166ba9bb68d58adec0cee_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
