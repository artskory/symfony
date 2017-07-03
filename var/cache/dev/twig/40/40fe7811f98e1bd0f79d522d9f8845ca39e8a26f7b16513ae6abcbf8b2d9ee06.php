<?php

/* blog/layout.html.twig */
class __TwigTemplate_1648267c8b5867f96e349ba8b6516df884add9300ed2df395cf9d3851140c288 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/layout.html.twig", 1);
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
        $__internal_9e2c30d90b9006fca139ab7fd4d817d41c3332d9e9f51ba398e41ed971cd80e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e2c30d90b9006fca139ab7fd4d817d41c3332d9e9f51ba398e41ed971cd80e5->enter($__internal_9e2c30d90b9006fca139ab7fd4d817d41c3332d9e9f51ba398e41ed971cd80e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/layout.html.twig"));

        $__internal_b6cbd13103e1c8381e3fc19b8d40f6b2efdac59ebb1399e592269a614a1884af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6cbd13103e1c8381e3fc19b8d40f6b2efdac59ebb1399e592269a614a1884af->enter($__internal_b6cbd13103e1c8381e3fc19b8d40f6b2efdac59ebb1399e592269a614a1884af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e2c30d90b9006fca139ab7fd4d817d41c3332d9e9f51ba398e41ed971cd80e5->leave($__internal_9e2c30d90b9006fca139ab7fd4d817d41c3332d9e9f51ba398e41ed971cd80e5_prof);

        
        $__internal_b6cbd13103e1c8381e3fc19b8d40f6b2efdac59ebb1399e592269a614a1884af->leave($__internal_b6cbd13103e1c8381e3fc19b8d40f6b2efdac59ebb1399e592269a614a1884af_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0899146b4ae08fe68f85f3c43b1fd93af76975fbd11c65f4af481407939b0aee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0899146b4ae08fe68f85f3c43b1fd93af76975fbd11c65f4af481407939b0aee->enter($__internal_0899146b4ae08fe68f85f3c43b1fd93af76975fbd11c65f4af481407939b0aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bab4cbc3e8531e12610cacb27c2a36223a47c8cbcf5ab75db13cfdd4a555aa67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bab4cbc3e8531e12610cacb27c2a36223a47c8cbcf5ab75db13cfdd4a555aa67->enter($__internal_bab4cbc3e8531e12610cacb27c2a36223a47c8cbcf5ab75db13cfdd4a555aa67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_bab4cbc3e8531e12610cacb27c2a36223a47c8cbcf5ab75db13cfdd4a555aa67->leave($__internal_bab4cbc3e8531e12610cacb27c2a36223a47c8cbcf5ab75db13cfdd4a555aa67_prof);

        
        $__internal_0899146b4ae08fe68f85f3c43b1fd93af76975fbd11c65f4af481407939b0aee->leave($__internal_0899146b4ae08fe68f85f3c43b1fd93af76975fbd11c65f4af481407939b0aee_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c675660a05f71b6bf0b3918846d91dccc25150ee49b80d9d4ba47f08b744a48e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c675660a05f71b6bf0b3918846d91dccc25150ee49b80d9d4ba47f08b744a48e->enter($__internal_c675660a05f71b6bf0b3918846d91dccc25150ee49b80d9d4ba47f08b744a48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_90816f6db8c674ab470d18c7a749cac9f08a59945e3d65bf3c9920b26d4bed72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90816f6db8c674ab470d18c7a749cac9f08a59945e3d65bf3c9920b26d4bed72->enter($__internal_90816f6db8c674ab470d18c7a749cac9f08a59945e3d65bf3c9920b26d4bed72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Blog</h1>
    ";
        // line 5
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_90816f6db8c674ab470d18c7a749cac9f08a59945e3d65bf3c9920b26d4bed72->leave($__internal_90816f6db8c674ab470d18c7a749cac9f08a59945e3d65bf3c9920b26d4bed72_prof);

        
        $__internal_c675660a05f71b6bf0b3918846d91dccc25150ee49b80d9d4ba47f08b744a48e->leave($__internal_c675660a05f71b6bf0b3918846d91dccc25150ee49b80d9d4ba47f08b744a48e_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_b82df02572b5969d62a32693319944b16cf35f983f88805a3dfa73a2c4639afc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b82df02572b5969d62a32693319944b16cf35f983f88805a3dfa73a2c4639afc->enter($__internal_b82df02572b5969d62a32693319944b16cf35f983f88805a3dfa73a2c4639afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_095ee22c90cf57e5dec5d8c94519c1abecd33d59637d4201995dade1619df800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_095ee22c90cf57e5dec5d8c94519c1abecd33d59637d4201995dade1619df800->enter($__internal_095ee22c90cf57e5dec5d8c94519c1abecd33d59637d4201995dade1619df800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_095ee22c90cf57e5dec5d8c94519c1abecd33d59637d4201995dade1619df800->leave($__internal_095ee22c90cf57e5dec5d8c94519c1abecd33d59637d4201995dade1619df800_prof);

        
        $__internal_b82df02572b5969d62a32693319944b16cf35f983f88805a3dfa73a2c4639afc->leave($__internal_b82df02572b5969d62a32693319944b16cf35f983f88805a3dfa73a2c4639afc_prof);

    }

    public function getTemplateName()
    {
        return "blog/layout.html.twig";
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
    <h1>Blog</h1>
    {% block body_layout %}{% endblock %}
{% endblock %}", "blog/layout.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\blog\\layout.html.twig");
    }
}
