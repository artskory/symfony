<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_fdee7e636bd8f78d45d0aad18e5c8c43ce2788df43b88520a6cc5a32e0f4fcbf extends Twig_Template
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
        $__internal_bb7185961f638ccdf6a2a4340ef1d4f9217a9dafddc53cdd9c46750830aa3a44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb7185961f638ccdf6a2a4340ef1d4f9217a9dafddc53cdd9c46750830aa3a44->enter($__internal_bb7185961f638ccdf6a2a4340ef1d4f9217a9dafddc53cdd9c46750830aa3a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_271f4d7e572787384ef886abd25ff6d5dcfb26f9d9815d542a026a65c485db4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_271f4d7e572787384ef886abd25ff6d5dcfb26f9d9815d542a026a65c485db4a->enter($__internal_271f4d7e572787384ef886abd25ff6d5dcfb26f9d9815d542a026a65c485db4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_bb7185961f638ccdf6a2a4340ef1d4f9217a9dafddc53cdd9c46750830aa3a44->leave($__internal_bb7185961f638ccdf6a2a4340ef1d4f9217a9dafddc53cdd9c46750830aa3a44_prof);

        
        $__internal_271f4d7e572787384ef886abd25ff6d5dcfb26f9d9815d542a026a65c485db4a->leave($__internal_271f4d7e572787384ef886abd25ff6d5dcfb26f9d9815d542a026a65c485db4a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
