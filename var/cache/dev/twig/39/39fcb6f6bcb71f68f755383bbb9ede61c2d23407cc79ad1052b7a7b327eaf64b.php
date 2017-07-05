<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_ff2eff149c87c8c07e01e4aa2f76e8b53f284f50c9a70ac7195192b889c17c80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9bafd7fe426b698d51686efadb1a1dc6b5568de2edfa8dec21c5ec1f813f7f91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bafd7fe426b698d51686efadb1a1dc6b5568de2edfa8dec21c5ec1f813f7f91->enter($__internal_9bafd7fe426b698d51686efadb1a1dc6b5568de2edfa8dec21c5ec1f813f7f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_589cc3a5fd62e67f0954aefb85b155ad31bb5efe1a137fc243d2a5cefdbd18e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_589cc3a5fd62e67f0954aefb85b155ad31bb5efe1a137fc243d2a5cefdbd18e4->enter($__internal_589cc3a5fd62e67f0954aefb85b155ad31bb5efe1a137fc243d2a5cefdbd18e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bafd7fe426b698d51686efadb1a1dc6b5568de2edfa8dec21c5ec1f813f7f91->leave($__internal_9bafd7fe426b698d51686efadb1a1dc6b5568de2edfa8dec21c5ec1f813f7f91_prof);

        
        $__internal_589cc3a5fd62e67f0954aefb85b155ad31bb5efe1a137fc243d2a5cefdbd18e4->leave($__internal_589cc3a5fd62e67f0954aefb85b155ad31bb5efe1a137fc243d2a5cefdbd18e4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6629a8a20fbed2f662c158778d570e06d46629eb3beb4319be593c9264fdc028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6629a8a20fbed2f662c158778d570e06d46629eb3beb4319be593c9264fdc028->enter($__internal_6629a8a20fbed2f662c158778d570e06d46629eb3beb4319be593c9264fdc028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c702438db8cb2a3a342db25c67578413bb36692e3d7852cec650a0277d391a65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c702438db8cb2a3a342db25c67578413bb36692e3d7852cec650a0277d391a65->enter($__internal_c702438db8cb2a3a342db25c67578413bb36692e3d7852cec650a0277d391a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c702438db8cb2a3a342db25c67578413bb36692e3d7852cec650a0277d391a65->leave($__internal_c702438db8cb2a3a342db25c67578413bb36692e3d7852cec650a0277d391a65_prof);

        
        $__internal_6629a8a20fbed2f662c158778d570e06d46629eb3beb4319be593c9264fdc028->leave($__internal_6629a8a20fbed2f662c158778d570e06d46629eb3beb4319be593c9264fdc028_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
