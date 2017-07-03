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
        $__internal_38ef2dfbc3b3c73188ace46f0702bdd556e29df567d282e12b083332d11cfdc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38ef2dfbc3b3c73188ace46f0702bdd556e29df567d282e12b083332d11cfdc9->enter($__internal_38ef2dfbc3b3c73188ace46f0702bdd556e29df567d282e12b083332d11cfdc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_31ee959f6780e28b43515cd410966e2b3850c4cdd3dc1515ac14cf3c4778c4db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ee959f6780e28b43515cd410966e2b3850c4cdd3dc1515ac14cf3c4778c4db->enter($__internal_31ee959f6780e28b43515cd410966e2b3850c4cdd3dc1515ac14cf3c4778c4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_38ef2dfbc3b3c73188ace46f0702bdd556e29df567d282e12b083332d11cfdc9->leave($__internal_38ef2dfbc3b3c73188ace46f0702bdd556e29df567d282e12b083332d11cfdc9_prof);

        
        $__internal_31ee959f6780e28b43515cd410966e2b3850c4cdd3dc1515ac14cf3c4778c4db->leave($__internal_31ee959f6780e28b43515cd410966e2b3850c4cdd3dc1515ac14cf3c4778c4db_prof);

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
