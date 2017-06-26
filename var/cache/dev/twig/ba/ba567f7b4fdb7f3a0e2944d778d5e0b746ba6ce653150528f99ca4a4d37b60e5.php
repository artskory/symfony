<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_65bd8f07adfa47c69459126ae389b872bdc385f7c51156bf31001551487af0a0 extends Twig_Template
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
        $__internal_37c88717506b45ba048eae78cd640934c9ff8b7f25914e2030838840212c5b25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37c88717506b45ba048eae78cd640934c9ff8b7f25914e2030838840212c5b25->enter($__internal_37c88717506b45ba048eae78cd640934c9ff8b7f25914e2030838840212c5b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_91dc363b9b60c5dd6e41033cf8f0399ecdca2ab0e8479c00803fd9d423016673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91dc363b9b60c5dd6e41033cf8f0399ecdca2ab0e8479c00803fd9d423016673->enter($__internal_91dc363b9b60c5dd6e41033cf8f0399ecdca2ab0e8479c00803fd9d423016673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_37c88717506b45ba048eae78cd640934c9ff8b7f25914e2030838840212c5b25->leave($__internal_37c88717506b45ba048eae78cd640934c9ff8b7f25914e2030838840212c5b25_prof);

        
        $__internal_91dc363b9b60c5dd6e41033cf8f0399ecdca2ab0e8479c00803fd9d423016673->leave($__internal_91dc363b9b60c5dd6e41033cf8f0399ecdca2ab0e8479c00803fd9d423016673_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
