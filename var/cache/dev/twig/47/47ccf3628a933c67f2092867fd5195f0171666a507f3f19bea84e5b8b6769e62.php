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
        $__internal_1020ea1dcf45ba2d6040a43fd858d91ff99e332c121d4e66676b1dc0694db154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1020ea1dcf45ba2d6040a43fd858d91ff99e332c121d4e66676b1dc0694db154->enter($__internal_1020ea1dcf45ba2d6040a43fd858d91ff99e332c121d4e66676b1dc0694db154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_a4acf21bf8bd23fee24903ecf143c30b39174a9b57f4c155ff8797edf1d2a8e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4acf21bf8bd23fee24903ecf143c30b39174a9b57f4c155ff8797edf1d2a8e5->enter($__internal_a4acf21bf8bd23fee24903ecf143c30b39174a9b57f4c155ff8797edf1d2a8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_1020ea1dcf45ba2d6040a43fd858d91ff99e332c121d4e66676b1dc0694db154->leave($__internal_1020ea1dcf45ba2d6040a43fd858d91ff99e332c121d4e66676b1dc0694db154_prof);

        
        $__internal_a4acf21bf8bd23fee24903ecf143c30b39174a9b57f4c155ff8797edf1d2a8e5->leave($__internal_a4acf21bf8bd23fee24903ecf143c30b39174a9b57f4c155ff8797edf1d2a8e5_prof);

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
