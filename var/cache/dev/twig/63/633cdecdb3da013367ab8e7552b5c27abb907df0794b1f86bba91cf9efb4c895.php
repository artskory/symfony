<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_79292b99f5b7afe1b0cba180efb13ecfab90e47e61c9c87a4a2e907e1d80f4af extends Twig_Template
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
        $__internal_c7f4b1f701e6c307397ee71ee2a47d3d480a4634eafeb00afbf312ad9e3037b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7f4b1f701e6c307397ee71ee2a47d3d480a4634eafeb00afbf312ad9e3037b6->enter($__internal_c7f4b1f701e6c307397ee71ee2a47d3d480a4634eafeb00afbf312ad9e3037b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_24f24b7b732d9cffbbb81073e28b794b1d8fc0b903a33597b21253490e1a5381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f24b7b732d9cffbbb81073e28b794b1d8fc0b903a33597b21253490e1a5381->enter($__internal_24f24b7b732d9cffbbb81073e28b794b1d8fc0b903a33597b21253490e1a5381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_c7f4b1f701e6c307397ee71ee2a47d3d480a4634eafeb00afbf312ad9e3037b6->leave($__internal_c7f4b1f701e6c307397ee71ee2a47d3d480a4634eafeb00afbf312ad9e3037b6_prof);

        
        $__internal_24f24b7b732d9cffbbb81073e28b794b1d8fc0b903a33597b21253490e1a5381->leave($__internal_24f24b7b732d9cffbbb81073e28b794b1d8fc0b903a33597b21253490e1a5381_prof);

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
