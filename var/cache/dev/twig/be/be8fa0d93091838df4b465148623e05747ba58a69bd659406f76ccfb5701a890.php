<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_c6b37d74e002b1063afcf566958447b5a62d3f99122bd7cd4cc877a60499d214 extends Twig_Template
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
        $__internal_0a1ec794d005418680cdb3843722538b99fcf9f3b968a0fc51050b3751e4b57a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a1ec794d005418680cdb3843722538b99fcf9f3b968a0fc51050b3751e4b57a->enter($__internal_0a1ec794d005418680cdb3843722538b99fcf9f3b968a0fc51050b3751e4b57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_80b4467e935c854654ca4f5ebc6a2c4509f57e06954a2da1e6841ee10f4cb174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80b4467e935c854654ca4f5ebc6a2c4509f57e06954a2da1e6841ee10f4cb174->enter($__internal_80b4467e935c854654ca4f5ebc6a2c4509f57e06954a2da1e6841ee10f4cb174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_0a1ec794d005418680cdb3843722538b99fcf9f3b968a0fc51050b3751e4b57a->leave($__internal_0a1ec794d005418680cdb3843722538b99fcf9f3b968a0fc51050b3751e4b57a_prof);

        
        $__internal_80b4467e935c854654ca4f5ebc6a2c4509f57e06954a2da1e6841ee10f4cb174->leave($__internal_80b4467e935c854654ca4f5ebc6a2c4509f57e06954a2da1e6841ee10f4cb174_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
