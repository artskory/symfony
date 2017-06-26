<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_85091390762a0a5f5cb57fe17329755498b8bec010ebb5c4077cc22bf0844579 extends Twig_Template
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
        $__internal_c536b5633fe8536f4ff10dfd6950d939d24b473ff3c11ea258207715b8d90f5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c536b5633fe8536f4ff10dfd6950d939d24b473ff3c11ea258207715b8d90f5c->enter($__internal_c536b5633fe8536f4ff10dfd6950d939d24b473ff3c11ea258207715b8d90f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_a6b1ad2b61d4851f35c7964a43b1255feeb14e31918ff9b7a81e7e6c85615bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b1ad2b61d4851f35c7964a43b1255feeb14e31918ff9b7a81e7e6c85615bb9->enter($__internal_a6b1ad2b61d4851f35c7964a43b1255feeb14e31918ff9b7a81e7e6c85615bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_c536b5633fe8536f4ff10dfd6950d939d24b473ff3c11ea258207715b8d90f5c->leave($__internal_c536b5633fe8536f4ff10dfd6950d939d24b473ff3c11ea258207715b8d90f5c_prof);

        
        $__internal_a6b1ad2b61d4851f35c7964a43b1255feeb14e31918ff9b7a81e7e6c85615bb9->leave($__internal_a6b1ad2b61d4851f35c7964a43b1255feeb14e31918ff9b7a81e7e6c85615bb9_prof);

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
