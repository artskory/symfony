<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_f139d3ea367bff995f50d51015fbeafa2c7821568e9aab91bfeafd4980f3fc53 extends Twig_Template
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
        $__internal_6bd46096aad98bbe3aa5da1714cef8be554b8b8e9994fc472d0fe6601c8c2268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bd46096aad98bbe3aa5da1714cef8be554b8b8e9994fc472d0fe6601c8c2268->enter($__internal_6bd46096aad98bbe3aa5da1714cef8be554b8b8e9994fc472d0fe6601c8c2268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_2afb490f9725fd948d4bd8bc79312a240513be673042c060d7356d13c63152f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2afb490f9725fd948d4bd8bc79312a240513be673042c060d7356d13c63152f0->enter($__internal_2afb490f9725fd948d4bd8bc79312a240513be673042c060d7356d13c63152f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_6bd46096aad98bbe3aa5da1714cef8be554b8b8e9994fc472d0fe6601c8c2268->leave($__internal_6bd46096aad98bbe3aa5da1714cef8be554b8b8e9994fc472d0fe6601c8c2268_prof);

        
        $__internal_2afb490f9725fd948d4bd8bc79312a240513be673042c060d7356d13c63152f0->leave($__internal_2afb490f9725fd948d4bd8bc79312a240513be673042c060d7356d13c63152f0_prof);

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
