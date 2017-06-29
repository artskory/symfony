<?php

/* blog/modifier.html.twig */
class __TwigTemplate_242ec8204b5d0d239dda01279d36c5fb034bd20d3f9026a7291336c376195958 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("blog/layout.html.twig", "blog/modifier.html.twig", 1);
        $this->blocks = array(
            'body_layout' => array($this, 'block_body_layout'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "blog/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ad13790c0c015f9b6e6abef65a07e6689731c3902abdd135ac0ec5071e17534 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ad13790c0c015f9b6e6abef65a07e6689731c3902abdd135ac0ec5071e17534->enter($__internal_9ad13790c0c015f9b6e6abef65a07e6689731c3902abdd135ac0ec5071e17534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/modifier.html.twig"));

        $__internal_5423e384a5aee16de72db5f0556b1e19fe00f321e3e22ef333ed6ab446f733e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5423e384a5aee16de72db5f0556b1e19fe00f321e3e22ef333ed6ab446f733e9->enter($__internal_5423e384a5aee16de72db5f0556b1e19fe00f321e3e22ef333ed6ab446f733e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ad13790c0c015f9b6e6abef65a07e6689731c3902abdd135ac0ec5071e17534->leave($__internal_9ad13790c0c015f9b6e6abef65a07e6689731c3902abdd135ac0ec5071e17534_prof);

        
        $__internal_5423e384a5aee16de72db5f0556b1e19fe00f321e3e22ef333ed6ab446f733e9->leave($__internal_5423e384a5aee16de72db5f0556b1e19fe00f321e3e22ef333ed6ab446f733e9_prof);

    }

    // line 2
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_1153fa8ba8f12f9235c7be3b96d818293dbc6ebe1e9b4850880207a8470b1be9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1153fa8ba8f12f9235c7be3b96d818293dbc6ebe1e9b4850880207a8470b1be9->enter($__internal_1153fa8ba8f12f9235c7be3b96d818293dbc6ebe1e9b4850880207a8470b1be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_5f922ef99ee4c9778e80b01f183ebc4980d6a5a7ae4c95ebede520035cb3283b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f922ef99ee4c9778e80b01f183ebc4980d6a5a7ae4c95ebede520035cb3283b->enter($__internal_5f922ef99ee4c9778e80b01f183ebc4980d6a5a7ae4c95ebede520035cb3283b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 3
        echo "    <h2>Modifier</h2>
    ";
        // line 4
        $this->loadTemplate("blog/formulaire.html.twig", "blog/modifier.html.twig", 4)->display($context);
        
        $__internal_5f922ef99ee4c9778e80b01f183ebc4980d6a5a7ae4c95ebede520035cb3283b->leave($__internal_5f922ef99ee4c9778e80b01f183ebc4980d6a5a7ae4c95ebede520035cb3283b_prof);

        
        $__internal_1153fa8ba8f12f9235c7be3b96d818293dbc6ebe1e9b4850880207a8470b1be9->leave($__internal_1153fa8ba8f12f9235c7be3b96d818293dbc6ebe1e9b4850880207a8470b1be9_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6c02a983a285206934f0395697ffd7462b5a4ee47a9a6d284026f3ec36421a49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c02a983a285206934f0395697ffd7462b5a4ee47a9a6d284026f3ec36421a49->enter($__internal_6c02a983a285206934f0395697ffd7462b5a4ee47a9a6d284026f3ec36421a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_688783149b34fd7bd3246969c09b3a0be0e209b1ec4c35ff209439f1c354c84e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_688783149b34fd7bd3246969c09b3a0be0e209b1ec4c35ff209439f1c354c84e->enter($__internal_688783149b34fd7bd3246969c09b3a0be0e209b1ec4c35ff209439f1c354c84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
        
        $__internal_688783149b34fd7bd3246969c09b3a0be0e209b1ec4c35ff209439f1c354c84e->leave($__internal_688783149b34fd7bd3246969c09b3a0be0e209b1ec4c35ff209439f1c354c84e_prof);

        
        $__internal_6c02a983a285206934f0395697ffd7462b5a4ee47a9a6d284026f3ec36421a49->leave($__internal_6c02a983a285206934f0395697ffd7462b5a4ee47a9a6d284026f3ec36421a49_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a78ea21c45d77b1f1a0b49b1275539967ffea3b06f27adad707994ae4f814a65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a78ea21c45d77b1f1a0b49b1275539967ffea3b06f27adad707994ae4f814a65->enter($__internal_a78ea21c45d77b1f1a0b49b1275539967ffea3b06f27adad707994ae4f814a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9c658cd47f94ac87a193ae493a050b11b032b04c9575d9c356d5f21edd48e6d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c658cd47f94ac87a193ae493a050b11b032b04c9575d9c356d5f21edd48e6d6->enter($__internal_9c658cd47f94ac87a193ae493a050b11b032b04c9575d9c356d5f21edd48e6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script>
  \$( function() {
    \$( \".js-datepicker\" ).datepicker({dateFormat:\"yy-mm-dd\"});
  } );
  </script>
  <script src=\"//cdn.ckeditor.com/4.7.0/basic/ckeditor.js\"></script>
";
        
        $__internal_9c658cd47f94ac87a193ae493a050b11b032b04c9575d9c356d5f21edd48e6d6->leave($__internal_9c658cd47f94ac87a193ae493a050b11b032b04c9575d9c356d5f21edd48e6d6_prof);

        
        $__internal_a78ea21c45d77b1f1a0b49b1275539967ffea3b06f27adad707994ae4f814a65->leave($__internal_a78ea21c45d77b1f1a0b49b1275539967ffea3b06f27adad707994ae4f814a65_prof);

    }

    public function getTemplateName()
    {
        return "blog/modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 12,  84 => 11,  73 => 8,  64 => 7,  54 => 4,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"blog/layout.html.twig\" %}
{% block body_layout %}
    <h2>Modifier</h2>
    {% include 'blog/formulaire.html.twig'%}
{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
{% endblock %}

{% block javascripts %}
  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script>
  \$( function() {
    \$( \".js-datepicker\" ).datepicker({dateFormat:\"yy-mm-dd\"});
  } );
  </script>
  <script src=\"//cdn.ckeditor.com/4.7.0/basic/ckeditor.js\"></script>
{% endblock %}", "blog/modifier.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\blog\\modifier.html.twig");
    }
}
