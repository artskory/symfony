<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_52ccee0d8c96d8d44636707e70a6c5930d9e581399474a0e0a16cf595ff8fef4 extends Twig_Template
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
        $__internal_c7014a51770bacb68815997b681d8bbec259629eb30989d12feb69229a0e94e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7014a51770bacb68815997b681d8bbec259629eb30989d12feb69229a0e94e0->enter($__internal_c7014a51770bacb68815997b681d8bbec259629eb30989d12feb69229a0e94e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_f9b5995f82cc8d0f7584422811ceb2f36effa0966dc0dc19476d50aafd185b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b5995f82cc8d0f7584422811ceb2f36effa0966dc0dc19476d50aafd185b82->enter($__internal_f9b5995f82cc8d0f7584422811ceb2f36effa0966dc0dc19476d50aafd185b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_c7014a51770bacb68815997b681d8bbec259629eb30989d12feb69229a0e94e0->leave($__internal_c7014a51770bacb68815997b681d8bbec259629eb30989d12feb69229a0e94e0_prof);

        
        $__internal_f9b5995f82cc8d0f7584422811ceb2f36effa0966dc0dc19476d50aafd185b82->leave($__internal_f9b5995f82cc8d0f7584422811ceb2f36effa0966dc0dc19476d50aafd185b82_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
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
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Resources\\views\\knp_menu_base.html.twig");
    }
}
