<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_480c25d4fea1472e1645481479095a02e7ea2de2b127f13c67c98aa74db3df9c extends Twig_Template
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
        $__internal_1f1e39cb8e63f769c6cc1fa9e1d6c547c2ffcdd4816ee8d97fe7a3f82a5b7b5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f1e39cb8e63f769c6cc1fa9e1d6c547c2ffcdd4816ee8d97fe7a3f82a5b7b5d->enter($__internal_1f1e39cb8e63f769c6cc1fa9e1d6c547c2ffcdd4816ee8d97fe7a3f82a5b7b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_ab84a9bca0f01069ec6e2dc7eb8c6a3857bfb7414a98a985fa6296c64b3cc757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab84a9bca0f01069ec6e2dc7eb8c6a3857bfb7414a98a985fa6296c64b3cc757->enter($__internal_ab84a9bca0f01069ec6e2dc7eb8c6a3857bfb7414a98a985fa6296c64b3cc757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_1f1e39cb8e63f769c6cc1fa9e1d6c547c2ffcdd4816ee8d97fe7a3f82a5b7b5d->leave($__internal_1f1e39cb8e63f769c6cc1fa9e1d6c547c2ffcdd4816ee8d97fe7a3f82a5b7b5d_prof);

        
        $__internal_ab84a9bca0f01069ec6e2dc7eb8c6a3857bfb7414a98a985fa6296c64b3cc757->leave($__internal_ab84a9bca0f01069ec6e2dc7eb8c6a3857bfb7414a98a985fa6296c64b3cc757_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
", "TwigBundle:Exception:error.txt.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
