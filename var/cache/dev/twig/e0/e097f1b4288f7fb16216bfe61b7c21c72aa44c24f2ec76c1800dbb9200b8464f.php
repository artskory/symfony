<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_c4d4d86e0a78ee10f93dd58c22e20df305dc2bf0c6c6a1df41cb476821d1fcb9 extends Twig_Template
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
        $__internal_00b1cdfad6c627d70458315e42b5d7b734d37ee1d0b826d60e8f707eff84781e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00b1cdfad6c627d70458315e42b5d7b734d37ee1d0b826d60e8f707eff84781e->enter($__internal_00b1cdfad6c627d70458315e42b5d7b734d37ee1d0b826d60e8f707eff84781e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_6cecbddbb77be97891702b4096eb07284d97627159c36b377c9c9216b3ebbfdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cecbddbb77be97891702b4096eb07284d97627159c36b377c9c9216b3ebbfdc->enter($__internal_6cecbddbb77be97891702b4096eb07284d97627159c36b377c9c9216b3ebbfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_00b1cdfad6c627d70458315e42b5d7b734d37ee1d0b826d60e8f707eff84781e->leave($__internal_00b1cdfad6c627d70458315e42b5d7b734d37ee1d0b826d60e8f707eff84781e_prof);

        
        $__internal_6cecbddbb77be97891702b4096eb07284d97627159c36b377c9c9216b3ebbfdc->leave($__internal_6cecbddbb77be97891702b4096eb07284d97627159c36b377c9c9216b3ebbfdc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
", "TwigBundle:Exception:error.txt.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
