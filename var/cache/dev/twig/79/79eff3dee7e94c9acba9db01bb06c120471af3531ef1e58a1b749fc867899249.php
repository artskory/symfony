<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_68b147fd731af6f3063c1b95607c9ccfd971ecaec7d170f660f75bee50716352 extends Twig_Template
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
        $__internal_fe5126ac48d7ba19d73894d61c4eb9bea0b62cf530c1e3d729893a31e6b1388d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe5126ac48d7ba19d73894d61c4eb9bea0b62cf530c1e3d729893a31e6b1388d->enter($__internal_fe5126ac48d7ba19d73894d61c4eb9bea0b62cf530c1e3d729893a31e6b1388d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_fe722ae53b7a1400c7999ddd880d4ce068ba083451a69b13007dd584c7d3e86a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe722ae53b7a1400c7999ddd880d4ce068ba083451a69b13007dd584c7d3e86a->enter($__internal_fe722ae53b7a1400c7999ddd880d4ce068ba083451a69b13007dd584c7d3e86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_fe5126ac48d7ba19d73894d61c4eb9bea0b62cf530c1e3d729893a31e6b1388d->leave($__internal_fe5126ac48d7ba19d73894d61c4eb9bea0b62cf530c1e3d729893a31e6b1388d_prof);

        
        $__internal_fe722ae53b7a1400c7999ddd880d4ce068ba083451a69b13007dd584c7d3e86a->leave($__internal_fe722ae53b7a1400c7999ddd880d4ce068ba083451a69b13007dd584c7d3e86a_prof);

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
