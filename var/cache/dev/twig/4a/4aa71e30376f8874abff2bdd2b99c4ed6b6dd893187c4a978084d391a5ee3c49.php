<?php

/* catalogue/layout.html.twig */
class __TwigTemplate_32866a785a2f5083a9e7064a93f7f9e9ac5af03a8d634f45d9beef3df48de8f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "catalogue/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'body_layout' => array($this, 'block_body_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d000724fe08a8e77077dc70ddc0ea93357da1e05ebc2896de3c48488042ca48a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d000724fe08a8e77077dc70ddc0ea93357da1e05ebc2896de3c48488042ca48a->enter($__internal_d000724fe08a8e77077dc70ddc0ea93357da1e05ebc2896de3c48488042ca48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/layout.html.twig"));

        $__internal_a465fc15df7ae79b30f8625e47869767ba7dcb32b16fb58baac900f313248301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a465fc15df7ae79b30f8625e47869767ba7dcb32b16fb58baac900f313248301->enter($__internal_a465fc15df7ae79b30f8625e47869767ba7dcb32b16fb58baac900f313248301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d000724fe08a8e77077dc70ddc0ea93357da1e05ebc2896de3c48488042ca48a->leave($__internal_d000724fe08a8e77077dc70ddc0ea93357da1e05ebc2896de3c48488042ca48a_prof);

        
        $__internal_a465fc15df7ae79b30f8625e47869767ba7dcb32b16fb58baac900f313248301->leave($__internal_a465fc15df7ae79b30f8625e47869767ba7dcb32b16fb58baac900f313248301_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c945ca4d1826d1d6a1974459b457011bbfa8b28429b9000035284cb4f30a5366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c945ca4d1826d1d6a1974459b457011bbfa8b28429b9000035284cb4f30a5366->enter($__internal_c945ca4d1826d1d6a1974459b457011bbfa8b28429b9000035284cb4f30a5366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d91f580d3327d2ced8b99e6bbd16ac65e42a42a50e045c7a0662613f598e6fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d91f580d3327d2ced8b99e6bbd16ac65e42a42a50e045c7a0662613f598e6fd5->enter($__internal_d91f580d3327d2ced8b99e6bbd16ac65e42a42a50e045c7a0662613f598e6fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Catalogue";
        
        $__internal_d91f580d3327d2ced8b99e6bbd16ac65e42a42a50e045c7a0662613f598e6fd5->leave($__internal_d91f580d3327d2ced8b99e6bbd16ac65e42a42a50e045c7a0662613f598e6fd5_prof);

        
        $__internal_c945ca4d1826d1d6a1974459b457011bbfa8b28429b9000035284cb4f30a5366->leave($__internal_c945ca4d1826d1d6a1974459b457011bbfa8b28429b9000035284cb4f30a5366_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6218eecb033f0e7e1782db9db608401570c096b7e94c068893f79d7c9934b066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6218eecb033f0e7e1782db9db608401570c096b7e94c068893f79d7c9934b066->enter($__internal_6218eecb033f0e7e1782db9db608401570c096b7e94c068893f79d7c9934b066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c1721cacfd1a57642ec72017ac0864da56f3d21bb7bbf07b220c9fd4a5b3a980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1721cacfd1a57642ec72017ac0864da56f3d21bb7bbf07b220c9fd4a5b3a980->enter($__internal_c1721cacfd1a57642ec72017ac0864da56f3d21bb7bbf07b220c9fd4a5b3a980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Catalogue</h1>
    ";
        // line 5
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_c1721cacfd1a57642ec72017ac0864da56f3d21bb7bbf07b220c9fd4a5b3a980->leave($__internal_c1721cacfd1a57642ec72017ac0864da56f3d21bb7bbf07b220c9fd4a5b3a980_prof);

        
        $__internal_6218eecb033f0e7e1782db9db608401570c096b7e94c068893f79d7c9934b066->leave($__internal_6218eecb033f0e7e1782db9db608401570c096b7e94c068893f79d7c9934b066_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_72ecc98ebf9185bfcdf1ff7f5aa92cfd3db9dfd7e4550525f114196e9382aeb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72ecc98ebf9185bfcdf1ff7f5aa92cfd3db9dfd7e4550525f114196e9382aeb6->enter($__internal_72ecc98ebf9185bfcdf1ff7f5aa92cfd3db9dfd7e4550525f114196e9382aeb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_ac1159d62dc1fa9d75f8f59f4dc9d1d5079e6c99acc904d5af3328408ed12781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac1159d62dc1fa9d75f8f59f4dc9d1d5079e6c99acc904d5af3328408ed12781->enter($__internal_ac1159d62dc1fa9d75f8f59f4dc9d1d5079e6c99acc904d5af3328408ed12781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_ac1159d62dc1fa9d75f8f59f4dc9d1d5079e6c99acc904d5af3328408ed12781->leave($__internal_ac1159d62dc1fa9d75f8f59f4dc9d1d5079e6c99acc904d5af3328408ed12781_prof);

        
        $__internal_72ecc98ebf9185bfcdf1ff7f5aa92cfd3db9dfd7e4550525f114196e9382aeb6->leave($__internal_72ecc98ebf9185bfcdf1ff7f5aa92cfd3db9dfd7e4550525f114196e9382aeb6_prof);

    }

    public function getTemplateName()
    {
        return "catalogue/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 5,  69 => 4,  60 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block title %}Catalogue{% endblock %}
{% block body %}
    <h1>Catalogue</h1>
    {% block body_layout %}{% endblock %}
{% endblock %}", "catalogue/layout.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\catalogue\\layout.html.twig");
    }
}
