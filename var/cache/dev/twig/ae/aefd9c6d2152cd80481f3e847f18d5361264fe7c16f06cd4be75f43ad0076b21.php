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
        $__internal_0c772a998d4cc17b053636e55f68e5bbad00729f8820791a177e3ccceb61ae0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c772a998d4cc17b053636e55f68e5bbad00729f8820791a177e3ccceb61ae0c->enter($__internal_0c772a998d4cc17b053636e55f68e5bbad00729f8820791a177e3ccceb61ae0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_5aab1383b2ae8aff5567a9ce826006904c0bf560723ffdb7facea58c36cd4c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aab1383b2ae8aff5567a9ce826006904c0bf560723ffdb7facea58c36cd4c27->enter($__internal_5aab1383b2ae8aff5567a9ce826006904c0bf560723ffdb7facea58c36cd4c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_0c772a998d4cc17b053636e55f68e5bbad00729f8820791a177e3ccceb61ae0c->leave($__internal_0c772a998d4cc17b053636e55f68e5bbad00729f8820791a177e3ccceb61ae0c_prof);

        
        $__internal_5aab1383b2ae8aff5567a9ce826006904c0bf560723ffdb7facea58c36cd4c27->leave($__internal_5aab1383b2ae8aff5567a9ce826006904c0bf560723ffdb7facea58c36cd4c27_prof);

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
