<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_7dfa2979a18a503d4d863792a92f9ef68f02202f0d3464897a60ab5f4ae6d05e extends Twig_Template
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
        $__internal_4ee634fdf829b83180b32a9eab9317f428debade764601839a8c31e9991b0d0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ee634fdf829b83180b32a9eab9317f428debade764601839a8c31e9991b0d0b->enter($__internal_4ee634fdf829b83180b32a9eab9317f428debade764601839a8c31e9991b0d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_5239c3227d24c5664988ceaa53cce3d1247f741991d6ddac90532368ed208495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5239c3227d24c5664988ceaa53cce3d1247f741991d6ddac90532368ed208495->enter($__internal_5239c3227d24c5664988ceaa53cce3d1247f741991d6ddac90532368ed208495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_4ee634fdf829b83180b32a9eab9317f428debade764601839a8c31e9991b0d0b->leave($__internal_4ee634fdf829b83180b32a9eab9317f428debade764601839a8c31e9991b0d0b_prof);

        
        $__internal_5239c3227d24c5664988ceaa53cce3d1247f741991d6ddac90532368ed208495->leave($__internal_5239c3227d24c5664988ceaa53cce3d1247f741991d6ddac90532368ed208495_prof);

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
