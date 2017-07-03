<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_b61e7b01e6c9dcb3cd41e82aaeeb275a92823992ef5011ef004adaf7fb5382a6 extends Twig_Template
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
        $__internal_4197ec0377bc7b0eb09997d43ce2dc45efee103567baeaa83a8f7273d18ae195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4197ec0377bc7b0eb09997d43ce2dc45efee103567baeaa83a8f7273d18ae195->enter($__internal_4197ec0377bc7b0eb09997d43ce2dc45efee103567baeaa83a8f7273d18ae195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_a6f8209e0374dc443b123f24dd45d002e21420837b8ffaca2bec3e7bc4ed068a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f8209e0374dc443b123f24dd45d002e21420837b8ffaca2bec3e7bc4ed068a->enter($__internal_a6f8209e0374dc443b123f24dd45d002e21420837b8ffaca2bec3e7bc4ed068a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_4197ec0377bc7b0eb09997d43ce2dc45efee103567baeaa83a8f7273d18ae195->leave($__internal_4197ec0377bc7b0eb09997d43ce2dc45efee103567baeaa83a8f7273d18ae195_prof);

        
        $__internal_a6f8209e0374dc443b123f24dd45d002e21420837b8ffaca2bec3e7bc4ed068a->leave($__internal_a6f8209e0374dc443b123f24dd45d002e21420837b8ffaca2bec3e7bc4ed068a_prof);

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
