<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_c4d4d86e0a78ee10f93dd58c22e20df305dc2bf0c6c6a1df41cb476821d1fcb9 extends Twig_Template
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
        $__internal_88f81d88eb72f94d9bf1d4c80ff44a36a5e54899e4b5e0149a30aabcf0d10ed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88f81d88eb72f94d9bf1d4c80ff44a36a5e54899e4b5e0149a30aabcf0d10ed5->enter($__internal_88f81d88eb72f94d9bf1d4c80ff44a36a5e54899e4b5e0149a30aabcf0d10ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_2cbf623d741f0b686cc7c8dd4fed0f51562311e276289e71a5dcd3d621cf29f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cbf623d741f0b686cc7c8dd4fed0f51562311e276289e71a5dcd3d621cf29f3->enter($__internal_2cbf623d741f0b686cc7c8dd4fed0f51562311e276289e71a5dcd3d621cf29f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_88f81d88eb72f94d9bf1d4c80ff44a36a5e54899e4b5e0149a30aabcf0d10ed5->leave($__internal_88f81d88eb72f94d9bf1d4c80ff44a36a5e54899e4b5e0149a30aabcf0d10ed5_prof);

        
        $__internal_2cbf623d741f0b686cc7c8dd4fed0f51562311e276289e71a5dcd3d621cf29f3->leave($__internal_2cbf623d741f0b686cc7c8dd4fed0f51562311e276289e71a5dcd3d621cf29f3_prof);

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
