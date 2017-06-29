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
        $__internal_48597728342f50c9f886babbf3e2bef22a1c29d2d2e595d20a5cc17d10166805 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48597728342f50c9f886babbf3e2bef22a1c29d2d2e595d20a5cc17d10166805->enter($__internal_48597728342f50c9f886babbf3e2bef22a1c29d2d2e595d20a5cc17d10166805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_396f437129e642813b540933e91672292d3ed35968308f307eec595e6407baee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_396f437129e642813b540933e91672292d3ed35968308f307eec595e6407baee->enter($__internal_396f437129e642813b540933e91672292d3ed35968308f307eec595e6407baee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_48597728342f50c9f886babbf3e2bef22a1c29d2d2e595d20a5cc17d10166805->leave($__internal_48597728342f50c9f886babbf3e2bef22a1c29d2d2e595d20a5cc17d10166805_prof);

        
        $__internal_396f437129e642813b540933e91672292d3ed35968308f307eec595e6407baee->leave($__internal_396f437129e642813b540933e91672292d3ed35968308f307eec595e6407baee_prof);

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
