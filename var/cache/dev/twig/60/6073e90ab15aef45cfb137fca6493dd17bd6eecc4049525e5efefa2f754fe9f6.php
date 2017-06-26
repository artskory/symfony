<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_8cfdae5feb3463a33a1d24fc29481254b3a9fd4b63a8c544fbe3a79d2258df9a extends Twig_Template
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
        $__internal_cdaa7d4d76f887b747b5ddc02a68130ce090853595bb0c021d0b450746ba30f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdaa7d4d76f887b747b5ddc02a68130ce090853595bb0c021d0b450746ba30f3->enter($__internal_cdaa7d4d76f887b747b5ddc02a68130ce090853595bb0c021d0b450746ba30f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_357b9bcd9dcf802c469b1f8a84a557b3685679b898780a08d07fc1ffb4a8c130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_357b9bcd9dcf802c469b1f8a84a557b3685679b898780a08d07fc1ffb4a8c130->enter($__internal_357b9bcd9dcf802c469b1f8a84a557b3685679b898780a08d07fc1ffb4a8c130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_cdaa7d4d76f887b747b5ddc02a68130ce090853595bb0c021d0b450746ba30f3->leave($__internal_cdaa7d4d76f887b747b5ddc02a68130ce090853595bb0c021d0b450746ba30f3_prof);

        
        $__internal_357b9bcd9dcf802c469b1f8a84a557b3685679b898780a08d07fc1ffb4a8c130->leave($__internal_357b9bcd9dcf802c469b1f8a84a557b3685679b898780a08d07fc1ffb4a8c130_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
