<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_bf084ae2177ae0a3c62a04c90445f286ec6bf8815022a881f596bb750bbcdb44 extends Twig_Template
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
        $__internal_b238b4cf861ebd66132e76963c06080d7827f07e1c03b8f8afabbb5bdc137d82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b238b4cf861ebd66132e76963c06080d7827f07e1c03b8f8afabbb5bdc137d82->enter($__internal_b238b4cf861ebd66132e76963c06080d7827f07e1c03b8f8afabbb5bdc137d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_4cef22471a3e7a9f6789ce2f60454153c8b00bd998836771f161a858723c9ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cef22471a3e7a9f6789ce2f60454153c8b00bd998836771f161a858723c9ff1->enter($__internal_4cef22471a3e7a9f6789ce2f60454153c8b00bd998836771f161a858723c9ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b238b4cf861ebd66132e76963c06080d7827f07e1c03b8f8afabbb5bdc137d82->leave($__internal_b238b4cf861ebd66132e76963c06080d7827f07e1c03b8f8afabbb5bdc137d82_prof);

        
        $__internal_4cef22471a3e7a9f6789ce2f60454153c8b00bd998836771f161a858723c9ff1->leave($__internal_4cef22471a3e7a9f6789ce2f60454153c8b00bd998836771f161a858723c9ff1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
