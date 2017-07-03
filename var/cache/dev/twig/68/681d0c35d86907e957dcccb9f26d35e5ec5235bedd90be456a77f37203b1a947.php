<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_16e93c30a3bb1d7f6b519dff38ec8bb9d3d777ebf1c2aa2a008cbdccd1a2bc55 extends Twig_Template
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
        $__internal_35963f958e0cde55c86edc4d0092a0da5a3d030dfdedcb6cf85b0dcff5b7860f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35963f958e0cde55c86edc4d0092a0da5a3d030dfdedcb6cf85b0dcff5b7860f->enter($__internal_35963f958e0cde55c86edc4d0092a0da5a3d030dfdedcb6cf85b0dcff5b7860f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_d9c21c51671949f0d6ea2dce0b2fdb6f779c27f241409327875adb2eb45a167f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c21c51671949f0d6ea2dce0b2fdb6f779c27f241409327875adb2eb45a167f->enter($__internal_d9c21c51671949f0d6ea2dce0b2fdb6f779c27f241409327875adb2eb45a167f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_35963f958e0cde55c86edc4d0092a0da5a3d030dfdedcb6cf85b0dcff5b7860f->leave($__internal_35963f958e0cde55c86edc4d0092a0da5a3d030dfdedcb6cf85b0dcff5b7860f_prof);

        
        $__internal_d9c21c51671949f0d6ea2dce0b2fdb6f779c27f241409327875adb2eb45a167f->leave($__internal_d9c21c51671949f0d6ea2dce0b2fdb6f779c27f241409327875adb2eb45a167f_prof);

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
