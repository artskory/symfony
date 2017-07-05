<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_e4e88b22410224fad821b17cc59f169386cdaa81b9105473bebbe0b385027bd6 extends Twig_Template
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
        $__internal_2ccacdbf506e263a773b68ecec8b6238729911c47a3342312b3bc9e0afce914c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ccacdbf506e263a773b68ecec8b6238729911c47a3342312b3bc9e0afce914c->enter($__internal_2ccacdbf506e263a773b68ecec8b6238729911c47a3342312b3bc9e0afce914c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_a36974f1606b2d59f640e65b6730d124ce4133fade96cfb7126c6a0c1adabd1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a36974f1606b2d59f640e65b6730d124ce4133fade96cfb7126c6a0c1adabd1e->enter($__internal_a36974f1606b2d59f640e65b6730d124ce4133fade96cfb7126c6a0c1adabd1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_2ccacdbf506e263a773b68ecec8b6238729911c47a3342312b3bc9e0afce914c->leave($__internal_2ccacdbf506e263a773b68ecec8b6238729911c47a3342312b3bc9e0afce914c_prof);

        
        $__internal_a36974f1606b2d59f640e65b6730d124ce4133fade96cfb7126c6a0c1adabd1e->leave($__internal_a36974f1606b2d59f640e65b6730d124ce4133fade96cfb7126c6a0c1adabd1e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
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
", "@Twig/Exception/error.xml.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
