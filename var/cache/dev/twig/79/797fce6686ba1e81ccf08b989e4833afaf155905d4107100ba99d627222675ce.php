<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_a05cd48056cf01426bc4a996651f95638cde024966e28ae54b0b0c83c8762e42 extends Twig_Template
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
        $__internal_a4b17a85c090f0995aa5d40a28de0d5981bd5d7c8ea9d230009de750bed5e42a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4b17a85c090f0995aa5d40a28de0d5981bd5d7c8ea9d230009de750bed5e42a->enter($__internal_a4b17a85c090f0995aa5d40a28de0d5981bd5d7c8ea9d230009de750bed5e42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_be8091ebc776addb34c6ce043f43c71ffaf40958ffea32b34326c2f50154c848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8091ebc776addb34c6ce043f43c71ffaf40958ffea32b34326c2f50154c848->enter($__internal_be8091ebc776addb34c6ce043f43c71ffaf40958ffea32b34326c2f50154c848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a4b17a85c090f0995aa5d40a28de0d5981bd5d7c8ea9d230009de750bed5e42a->leave($__internal_a4b17a85c090f0995aa5d40a28de0d5981bd5d7c8ea9d230009de750bed5e42a_prof);

        
        $__internal_be8091ebc776addb34c6ce043f43c71ffaf40958ffea32b34326c2f50154c848->leave($__internal_be8091ebc776addb34c6ce043f43c71ffaf40958ffea32b34326c2f50154c848_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
