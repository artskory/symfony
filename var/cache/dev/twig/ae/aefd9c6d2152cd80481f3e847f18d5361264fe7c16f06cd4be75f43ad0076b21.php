<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_da9ceef55321688f36fa410885d2b1ad3c093c3f580a2100a15ae9a24efa0441 extends Twig_Template
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
        $__internal_18f9189b69a6ecd3ab9678edf5cef653f238a01c65c134d7f295aca967a2873c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18f9189b69a6ecd3ab9678edf5cef653f238a01c65c134d7f295aca967a2873c->enter($__internal_18f9189b69a6ecd3ab9678edf5cef653f238a01c65c134d7f295aca967a2873c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_358e3de6ad4f1b3943676ea7788a24913f695ce8bf8f1a58d9c1937cea3b245f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_358e3de6ad4f1b3943676ea7788a24913f695ce8bf8f1a58d9c1937cea3b245f->enter($__internal_358e3de6ad4f1b3943676ea7788a24913f695ce8bf8f1a58d9c1937cea3b245f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_18f9189b69a6ecd3ab9678edf5cef653f238a01c65c134d7f295aca967a2873c->leave($__internal_18f9189b69a6ecd3ab9678edf5cef653f238a01c65c134d7f295aca967a2873c_prof);

        
        $__internal_358e3de6ad4f1b3943676ea7788a24913f695ce8bf8f1a58d9c1937cea3b245f->leave($__internal_358e3de6ad4f1b3943676ea7788a24913f695ce8bf8f1a58d9c1937cea3b245f_prof);

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
