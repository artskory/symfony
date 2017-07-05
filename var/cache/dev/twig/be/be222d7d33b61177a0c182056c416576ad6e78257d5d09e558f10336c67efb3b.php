<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b6f16ba1085f4a5ef04374978e6a4cd7ca8bd5f1622163529656f734e754b523 extends Twig_Template
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
        $__internal_bc24ce4307bcd412fc2dfcc9b0e01bfb25c623e43e32a578e95df33b8c82baf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc24ce4307bcd412fc2dfcc9b0e01bfb25c623e43e32a578e95df33b8c82baf3->enter($__internal_bc24ce4307bcd412fc2dfcc9b0e01bfb25c623e43e32a578e95df33b8c82baf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_61adee0de1f1e2c888a8900a9f1d508d2a7021695b7ef449da682b47c636605b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61adee0de1f1e2c888a8900a9f1d508d2a7021695b7ef449da682b47c636605b->enter($__internal_61adee0de1f1e2c888a8900a9f1d508d2a7021695b7ef449da682b47c636605b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_bc24ce4307bcd412fc2dfcc9b0e01bfb25c623e43e32a578e95df33b8c82baf3->leave($__internal_bc24ce4307bcd412fc2dfcc9b0e01bfb25c623e43e32a578e95df33b8c82baf3_prof);

        
        $__internal_61adee0de1f1e2c888a8900a9f1d508d2a7021695b7ef449da682b47c636605b->leave($__internal_61adee0de1f1e2c888a8900a9f1d508d2a7021695b7ef449da682b47c636605b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
