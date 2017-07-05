<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_08185846aa1fea0a9f53735a63e2466bded770fa2a1309f5b3b88405fa6f1858 extends Twig_Template
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
        $__internal_5c97976b60db8713e3c01a8589e4a71fe25ffb38b18b39d8b0a376413f762d14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c97976b60db8713e3c01a8589e4a71fe25ffb38b18b39d8b0a376413f762d14->enter($__internal_5c97976b60db8713e3c01a8589e4a71fe25ffb38b18b39d8b0a376413f762d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_c63ee97a638f5bca6a70bd3a1124b4e4986591030f4170453d24d54f1126a99a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c63ee97a638f5bca6a70bd3a1124b4e4986591030f4170453d24d54f1126a99a->enter($__internal_c63ee97a638f5bca6a70bd3a1124b4e4986591030f4170453d24d54f1126a99a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_5c97976b60db8713e3c01a8589e4a71fe25ffb38b18b39d8b0a376413f762d14->leave($__internal_5c97976b60db8713e3c01a8589e4a71fe25ffb38b18b39d8b0a376413f762d14_prof);

        
        $__internal_c63ee97a638f5bca6a70bd3a1124b4e4986591030f4170453d24d54f1126a99a->leave($__internal_c63ee97a638f5bca6a70bd3a1124b4e4986591030f4170453d24d54f1126a99a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
