<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_24914db541f395d5edba32d830f59e4146d9ef2b02b1635230aac77167152380 extends Twig_Template
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
        $__internal_20caa49f784ff08f62650d1dd2e4a69133fbae48343595bb1a52322610e62bcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20caa49f784ff08f62650d1dd2e4a69133fbae48343595bb1a52322610e62bcb->enter($__internal_20caa49f784ff08f62650d1dd2e4a69133fbae48343595bb1a52322610e62bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_da0f80d01fad830da4585ea0857b2bc27fa7e114c41d549de26b3fe673ac021d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da0f80d01fad830da4585ea0857b2bc27fa7e114c41d549de26b3fe673ac021d->enter($__internal_da0f80d01fad830da4585ea0857b2bc27fa7e114c41d549de26b3fe673ac021d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_20caa49f784ff08f62650d1dd2e4a69133fbae48343595bb1a52322610e62bcb->leave($__internal_20caa49f784ff08f62650d1dd2e4a69133fbae48343595bb1a52322610e62bcb_prof);

        
        $__internal_da0f80d01fad830da4585ea0857b2bc27fa7e114c41d549de26b3fe673ac021d->leave($__internal_da0f80d01fad830da4585ea0857b2bc27fa7e114c41d549de26b3fe673ac021d_prof);

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
