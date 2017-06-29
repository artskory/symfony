<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_545ee4fe7be2adfc44cf7a0a53946e3a0a5a1bd707ea0f72fe762c7fd765e426 extends Twig_Template
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
        $__internal_744bbe15f7277dcd92fce7375704f0f428b8d4f8517160f021096fdd09a9d426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_744bbe15f7277dcd92fce7375704f0f428b8d4f8517160f021096fdd09a9d426->enter($__internal_744bbe15f7277dcd92fce7375704f0f428b8d4f8517160f021096fdd09a9d426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_497fe591028454c467ddbb2c0322b2e7f6c427b686ef0ce6a894b06199487dc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497fe591028454c467ddbb2c0322b2e7f6c427b686ef0ce6a894b06199487dc5->enter($__internal_497fe591028454c467ddbb2c0322b2e7f6c427b686ef0ce6a894b06199487dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_744bbe15f7277dcd92fce7375704f0f428b8d4f8517160f021096fdd09a9d426->leave($__internal_744bbe15f7277dcd92fce7375704f0f428b8d4f8517160f021096fdd09a9d426_prof);

        
        $__internal_497fe591028454c467ddbb2c0322b2e7f6c427b686ef0ce6a894b06199487dc5->leave($__internal_497fe591028454c467ddbb2c0322b2e7f6c427b686ef0ce6a894b06199487dc5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
