<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_16e93c30a3bb1d7f6b519dff38ec8bb9d3d777ebf1c2aa2a008cbdccd1a2bc55 extends Twig_Template
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
        $__internal_36b2431630caeb2b8deb311530ac243a95538f7016bb0ffc6ff26f06a8cf1c58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36b2431630caeb2b8deb311530ac243a95538f7016bb0ffc6ff26f06a8cf1c58->enter($__internal_36b2431630caeb2b8deb311530ac243a95538f7016bb0ffc6ff26f06a8cf1c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_26512e7abe8b70c27449ec65311b6c8de35146ff0a26109713c74cd3edb5a75d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26512e7abe8b70c27449ec65311b6c8de35146ff0a26109713c74cd3edb5a75d->enter($__internal_26512e7abe8b70c27449ec65311b6c8de35146ff0a26109713c74cd3edb5a75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_36b2431630caeb2b8deb311530ac243a95538f7016bb0ffc6ff26f06a8cf1c58->leave($__internal_36b2431630caeb2b8deb311530ac243a95538f7016bb0ffc6ff26f06a8cf1c58_prof);

        
        $__internal_26512e7abe8b70c27449ec65311b6c8de35146ff0a26109713c74cd3edb5a75d->leave($__internal_26512e7abe8b70c27449ec65311b6c8de35146ff0a26109713c74cd3edb5a75d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
