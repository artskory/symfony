<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_912fd9b48671dd1984ad3d1938a596b97d0d764d68457bf65af2dd7fec77d52b extends Twig_Template
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
        $__internal_76bb35c714e7e78e0a4537beca420bec1cecd2e6ecde78b71b4d1a6e56bb0c73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76bb35c714e7e78e0a4537beca420bec1cecd2e6ecde78b71b4d1a6e56bb0c73->enter($__internal_76bb35c714e7e78e0a4537beca420bec1cecd2e6ecde78b71b4d1a6e56bb0c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_3edac6647235b0882772436a1f19d4d5fe1eec8ed11307cdcfb9e5212187b062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3edac6647235b0882772436a1f19d4d5fe1eec8ed11307cdcfb9e5212187b062->enter($__internal_3edac6647235b0882772436a1f19d4d5fe1eec8ed11307cdcfb9e5212187b062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_76bb35c714e7e78e0a4537beca420bec1cecd2e6ecde78b71b4d1a6e56bb0c73->leave($__internal_76bb35c714e7e78e0a4537beca420bec1cecd2e6ecde78b71b4d1a6e56bb0c73_prof);

        
        $__internal_3edac6647235b0882772436a1f19d4d5fe1eec8ed11307cdcfb9e5212187b062->leave($__internal_3edac6647235b0882772436a1f19d4d5fe1eec8ed11307cdcfb9e5212187b062_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
", "@WebProfiler/Collector/exception.css.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
