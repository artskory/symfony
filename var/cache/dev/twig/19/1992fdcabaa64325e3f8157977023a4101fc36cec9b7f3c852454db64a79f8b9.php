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
        $__internal_8ebf300ac6c58cf17e225c221a67653a6120721c976907c8376d77f8bb45c604 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ebf300ac6c58cf17e225c221a67653a6120721c976907c8376d77f8bb45c604->enter($__internal_8ebf300ac6c58cf17e225c221a67653a6120721c976907c8376d77f8bb45c604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_242bd5dc812446303733c4f1c936edbdb35f12fca4b7f51f9493885d2c13d81b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_242bd5dc812446303733c4f1c936edbdb35f12fca4b7f51f9493885d2c13d81b->enter($__internal_242bd5dc812446303733c4f1c936edbdb35f12fca4b7f51f9493885d2c13d81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_8ebf300ac6c58cf17e225c221a67653a6120721c976907c8376d77f8bb45c604->leave($__internal_8ebf300ac6c58cf17e225c221a67653a6120721c976907c8376d77f8bb45c604_prof);

        
        $__internal_242bd5dc812446303733c4f1c936edbdb35f12fca4b7f51f9493885d2c13d81b->leave($__internal_242bd5dc812446303733c4f1c936edbdb35f12fca4b7f51f9493885d2c13d81b_prof);

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
