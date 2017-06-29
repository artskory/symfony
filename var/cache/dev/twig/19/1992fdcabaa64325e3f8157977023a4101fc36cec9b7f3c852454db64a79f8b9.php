<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_a70e92a4ef22f44c6b7a6fc2acca763110fd7bf5c1239a8d96e3d9c3501e7d48 extends Twig_Template
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
        $__internal_6b1615c234af6d1e245460878898f623847964921c9f0f3cb7ff8bab0a463a86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b1615c234af6d1e245460878898f623847964921c9f0f3cb7ff8bab0a463a86->enter($__internal_6b1615c234af6d1e245460878898f623847964921c9f0f3cb7ff8bab0a463a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_ce99c65cc16b2ab883631469f66cff455669692f7b1146ee1cfc7fe56a553ff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce99c65cc16b2ab883631469f66cff455669692f7b1146ee1cfc7fe56a553ff3->enter($__internal_ce99c65cc16b2ab883631469f66cff455669692f7b1146ee1cfc7fe56a553ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_6b1615c234af6d1e245460878898f623847964921c9f0f3cb7ff8bab0a463a86->leave($__internal_6b1615c234af6d1e245460878898f623847964921c9f0f3cb7ff8bab0a463a86_prof);

        
        $__internal_ce99c65cc16b2ab883631469f66cff455669692f7b1146ee1cfc7fe56a553ff3->leave($__internal_ce99c65cc16b2ab883631469f66cff455669692f7b1146ee1cfc7fe56a553ff3_prof);

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
