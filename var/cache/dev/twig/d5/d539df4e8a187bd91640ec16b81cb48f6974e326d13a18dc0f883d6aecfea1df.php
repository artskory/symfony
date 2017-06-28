<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_29ee503f2ae425eb4518ba3e83055ca4139719c5540ed73229c6f907fd16ea30 extends Twig_Template
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
        $__internal_cda07c4446674496b6ad92b0e0e3da77ea8dfc609dbd60cddd367fc3c85c5624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cda07c4446674496b6ad92b0e0e3da77ea8dfc609dbd60cddd367fc3c85c5624->enter($__internal_cda07c4446674496b6ad92b0e0e3da77ea8dfc609dbd60cddd367fc3c85c5624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_93b178839a2771ddc7bd7eb165834114fea982a58e5379431f15b0a98507c06a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b178839a2771ddc7bd7eb165834114fea982a58e5379431f15b0a98507c06a->enter($__internal_93b178839a2771ddc7bd7eb165834114fea982a58e5379431f15b0a98507c06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_cda07c4446674496b6ad92b0e0e3da77ea8dfc609dbd60cddd367fc3c85c5624->leave($__internal_cda07c4446674496b6ad92b0e0e3da77ea8dfc609dbd60cddd367fc3c85c5624_prof);

        
        $__internal_93b178839a2771ddc7bd7eb165834114fea982a58e5379431f15b0a98507c06a->leave($__internal_93b178839a2771ddc7bd7eb165834114fea982a58e5379431f15b0a98507c06a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
