<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_a157374ccec93f6923a5b39467aa5addde376f53894743418fa67b3e0320058f extends Twig_Template
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
        $__internal_2f663f389515b40f4ae73013b341c779382d6c36de8314113dfb64086ae3d0ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f663f389515b40f4ae73013b341c779382d6c36de8314113dfb64086ae3d0ba->enter($__internal_2f663f389515b40f4ae73013b341c779382d6c36de8314113dfb64086ae3d0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_6f5aa9aa4918d5bfa20b81fc8864923891e5dd82b6f829ef198a26ed04368171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f5aa9aa4918d5bfa20b81fc8864923891e5dd82b6f829ef198a26ed04368171->enter($__internal_6f5aa9aa4918d5bfa20b81fc8864923891e5dd82b6f829ef198a26ed04368171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_2f663f389515b40f4ae73013b341c779382d6c36de8314113dfb64086ae3d0ba->leave($__internal_2f663f389515b40f4ae73013b341c779382d6c36de8314113dfb64086ae3d0ba_prof);

        
        $__internal_6f5aa9aa4918d5bfa20b81fc8864923891e5dd82b6f829ef198a26ed04368171->leave($__internal_6f5aa9aa4918d5bfa20b81fc8864923891e5dd82b6f829ef198a26ed04368171_prof);

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
