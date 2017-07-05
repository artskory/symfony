<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_ee3373a4e7a3e9fcb7f016a915a608ea36f7738271beb24f2ac1d33ed8da019c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_3d533f35c65bf5af77e2ea673b8e3d9c9b031916b568397389b83a4dc715ed6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d533f35c65bf5af77e2ea673b8e3d9c9b031916b568397389b83a4dc715ed6b->enter($__internal_3d533f35c65bf5af77e2ea673b8e3d9c9b031916b568397389b83a4dc715ed6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_8268fa50d2bcb31343eb6e6b272c015743a30947945aea7d34fb30dd334e08b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8268fa50d2bcb31343eb6e6b272c015743a30947945aea7d34fb30dd334e08b2->enter($__internal_8268fa50d2bcb31343eb6e6b272c015743a30947945aea7d34fb30dd334e08b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d533f35c65bf5af77e2ea673b8e3d9c9b031916b568397389b83a4dc715ed6b->leave($__internal_3d533f35c65bf5af77e2ea673b8e3d9c9b031916b568397389b83a4dc715ed6b_prof);

        
        $__internal_8268fa50d2bcb31343eb6e6b272c015743a30947945aea7d34fb30dd334e08b2->leave($__internal_8268fa50d2bcb31343eb6e6b272c015743a30947945aea7d34fb30dd334e08b2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_97034b02592b40cd3ec3f893ceec21f110ccc8188a6c20784e9f431d627edd66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97034b02592b40cd3ec3f893ceec21f110ccc8188a6c20784e9f431d627edd66->enter($__internal_97034b02592b40cd3ec3f893ceec21f110ccc8188a6c20784e9f431d627edd66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_24abcd17a17121f64790eba1fb30bded2e08750f36ad831770d6f23ca4dedb01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24abcd17a17121f64790eba1fb30bded2e08750f36ad831770d6f23ca4dedb01->enter($__internal_24abcd17a17121f64790eba1fb30bded2e08750f36ad831770d6f23ca4dedb01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_24abcd17a17121f64790eba1fb30bded2e08750f36ad831770d6f23ca4dedb01->leave($__internal_24abcd17a17121f64790eba1fb30bded2e08750f36ad831770d6f23ca4dedb01_prof);

        
        $__internal_97034b02592b40cd3ec3f893ceec21f110ccc8188a6c20784e9f431d627edd66->leave($__internal_97034b02592b40cd3ec3f893ceec21f110ccc8188a6c20784e9f431d627edd66_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
