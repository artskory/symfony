<?php

/* catalogue/layout.html.twig */
class __TwigTemplate_944d08f4a3387413edb9394adeed89ef80f093cf9428eccaa0da215be3d32b06 extends Twig_Template
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
        $__internal_548b013d5f7c612a9c587b9f9d8376cbf16184643bb94e760a80501d59c40db0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_548b013d5f7c612a9c587b9f9d8376cbf16184643bb94e760a80501d59c40db0->enter($__internal_548b013d5f7c612a9c587b9f9d8376cbf16184643bb94e760a80501d59c40db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/layout.html.twig"));

        $__internal_a6a29aeb5e696bd257560ec575ad184991d96aaae84980579213c43e9cfa1aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6a29aeb5e696bd257560ec575ad184991d96aaae84980579213c43e9cfa1aef->enter($__internal_a6a29aeb5e696bd257560ec575ad184991d96aaae84980579213c43e9cfa1aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_548b013d5f7c612a9c587b9f9d8376cbf16184643bb94e760a80501d59c40db0->leave($__internal_548b013d5f7c612a9c587b9f9d8376cbf16184643bb94e760a80501d59c40db0_prof);

        
        $__internal_a6a29aeb5e696bd257560ec575ad184991d96aaae84980579213c43e9cfa1aef->leave($__internal_a6a29aeb5e696bd257560ec575ad184991d96aaae84980579213c43e9cfa1aef_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d96eda963b5bf082428fadd3d33b3c1fd7d914e1044800d1cba20266991d18b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d96eda963b5bf082428fadd3d33b3c1fd7d914e1044800d1cba20266991d18b4->enter($__internal_d96eda963b5bf082428fadd3d33b3c1fd7d914e1044800d1cba20266991d18b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3fc340766db7e6e53f8d9d6186b2bddf4847f74f37b9cf039393ff0ba8b7a01e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc340766db7e6e53f8d9d6186b2bddf4847f74f37b9cf039393ff0ba8b7a01e->enter($__internal_3fc340766db7e6e53f8d9d6186b2bddf4847f74f37b9cf039393ff0ba8b7a01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_3fc340766db7e6e53f8d9d6186b2bddf4847f74f37b9cf039393ff0ba8b7a01e->leave($__internal_3fc340766db7e6e53f8d9d6186b2bddf4847f74f37b9cf039393ff0ba8b7a01e_prof);

        
        $__internal_d96eda963b5bf082428fadd3d33b3c1fd7d914e1044800d1cba20266991d18b4->leave($__internal_d96eda963b5bf082428fadd3d33b3c1fd7d914e1044800d1cba20266991d18b4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6781039473c4fc4d05cfa059da2b6b1ad9c5a267cd14af31fbf4d7be69b1b5fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6781039473c4fc4d05cfa059da2b6b1ad9c5a267cd14af31fbf4d7be69b1b5fa->enter($__internal_6781039473c4fc4d05cfa059da2b6b1ad9c5a267cd14af31fbf4d7be69b1b5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f62e94120b2090e1c95510a07802691d3c4bc6e6e669a0532434c56c21b97791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f62e94120b2090e1c95510a07802691d3c4bc6e6e669a0532434c56c21b97791->enter($__internal_f62e94120b2090e1c95510a07802691d3c4bc6e6e669a0532434c56c21b97791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Catalogue</h1>
    ";
        // line 5
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_f62e94120b2090e1c95510a07802691d3c4bc6e6e669a0532434c56c21b97791->leave($__internal_f62e94120b2090e1c95510a07802691d3c4bc6e6e669a0532434c56c21b97791_prof);

        
        $__internal_6781039473c4fc4d05cfa059da2b6b1ad9c5a267cd14af31fbf4d7be69b1b5fa->leave($__internal_6781039473c4fc4d05cfa059da2b6b1ad9c5a267cd14af31fbf4d7be69b1b5fa_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_deb37fc020a160df60b3c82a94e345aad4a7af791ad651e9a58aa3c8a3740c19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deb37fc020a160df60b3c82a94e345aad4a7af791ad651e9a58aa3c8a3740c19->enter($__internal_deb37fc020a160df60b3c82a94e345aad4a7af791ad651e9a58aa3c8a3740c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_7d2391d6cde4c467c7862077cd9090ecf9a2b2f81e526e65312f0f726dd9bd6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d2391d6cde4c467c7862077cd9090ecf9a2b2f81e526e65312f0f726dd9bd6f->enter($__internal_7d2391d6cde4c467c7862077cd9090ecf9a2b2f81e526e65312f0f726dd9bd6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_7d2391d6cde4c467c7862077cd9090ecf9a2b2f81e526e65312f0f726dd9bd6f->leave($__internal_7d2391d6cde4c467c7862077cd9090ecf9a2b2f81e526e65312f0f726dd9bd6f_prof);

        
        $__internal_deb37fc020a160df60b3c82a94e345aad4a7af791ad651e9a58aa3c8a3740c19->leave($__internal_deb37fc020a160df60b3c82a94e345aad4a7af791ad651e9a58aa3c8a3740c19_prof);

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
{% block title %}Blog{% endblock %}
{% block body %}
    <h1>Catalogue</h1>
    {% block body_layout %}{% endblock %}
{% endblock %}", "catalogue/layout.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\catalogue\\layout.html.twig");
    }
}
