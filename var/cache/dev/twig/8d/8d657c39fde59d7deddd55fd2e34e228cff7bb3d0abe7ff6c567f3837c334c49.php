<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_2e8ed9dbe010298e2ef0b7de46003cce6f0ff6713eda9d768a4719abcbea8ca7 extends Twig_Template
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
        $__internal_fb01c48d64ab77dd5046674ff1daf2b1c5064dc4418b0b01e8bf9418c2889f13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb01c48d64ab77dd5046674ff1daf2b1c5064dc4418b0b01e8bf9418c2889f13->enter($__internal_fb01c48d64ab77dd5046674ff1daf2b1c5064dc4418b0b01e8bf9418c2889f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_e78567f2e0be4709d5323a0d463d312b4b192df5c68a2dc716ed3054d859878c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e78567f2e0be4709d5323a0d463d312b4b192df5c68a2dc716ed3054d859878c->enter($__internal_e78567f2e0be4709d5323a0d463d312b4b192df5c68a2dc716ed3054d859878c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_fb01c48d64ab77dd5046674ff1daf2b1c5064dc4418b0b01e8bf9418c2889f13->leave($__internal_fb01c48d64ab77dd5046674ff1daf2b1c5064dc4418b0b01e8bf9418c2889f13_prof);

        
        $__internal_e78567f2e0be4709d5323a0d463d312b4b192df5c68a2dc716ed3054d859878c->leave($__internal_e78567f2e0be4709d5323a0d463d312b4b192df5c68a2dc716ed3054d859878c_prof);

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
