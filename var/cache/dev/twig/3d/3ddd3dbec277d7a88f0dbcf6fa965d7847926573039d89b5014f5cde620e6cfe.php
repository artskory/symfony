<?php

/* :blog:modifier.html.twig */
class __TwigTemplate_422cbe214bcb662cd532e5a134ba00fddf49153c38bf765c4083a04770c880d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("blog/layout.html.twig", ":blog:modifier.html.twig", 1);
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
        $__internal_aed2ab0f226741336d99ca95b01cc6f91667ed1b306283d435031e3c764fabb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aed2ab0f226741336d99ca95b01cc6f91667ed1b306283d435031e3c764fabb3->enter($__internal_aed2ab0f226741336d99ca95b01cc6f91667ed1b306283d435031e3c764fabb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:modifier.html.twig"));

        $__internal_25933fe658da97521254bd474cb0f7bcec3f18094c72cb3dd8b02661e286da34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25933fe658da97521254bd474cb0f7bcec3f18094c72cb3dd8b02661e286da34->enter($__internal_25933fe658da97521254bd474cb0f7bcec3f18094c72cb3dd8b02661e286da34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aed2ab0f226741336d99ca95b01cc6f91667ed1b306283d435031e3c764fabb3->leave($__internal_aed2ab0f226741336d99ca95b01cc6f91667ed1b306283d435031e3c764fabb3_prof);

        
        $__internal_25933fe658da97521254bd474cb0f7bcec3f18094c72cb3dd8b02661e286da34->leave($__internal_25933fe658da97521254bd474cb0f7bcec3f18094c72cb3dd8b02661e286da34_prof);

    }

    // line 2
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_41127ab57968d3a6fb7b32c17372bd018ffa4eb5762a9ffdfb2e1c2ff97df126 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41127ab57968d3a6fb7b32c17372bd018ffa4eb5762a9ffdfb2e1c2ff97df126->enter($__internal_41127ab57968d3a6fb7b32c17372bd018ffa4eb5762a9ffdfb2e1c2ff97df126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_ddf75cb9bbbb63b106c0c61fd16679bdb634be1965b9429a7030cc0f815a0017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf75cb9bbbb63b106c0c61fd16679bdb634be1965b9429a7030cc0f815a0017->enter($__internal_ddf75cb9bbbb63b106c0c61fd16679bdb634be1965b9429a7030cc0f815a0017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 3
        echo "    <h2>Modifier</h2>
    ";
        // line 4
        $this->loadTemplate("blog/formulaire.html.twig", ":blog:modifier.html.twig", 4)->display($context);
        
        $__internal_ddf75cb9bbbb63b106c0c61fd16679bdb634be1965b9429a7030cc0f815a0017->leave($__internal_ddf75cb9bbbb63b106c0c61fd16679bdb634be1965b9429a7030cc0f815a0017_prof);

        
        $__internal_41127ab57968d3a6fb7b32c17372bd018ffa4eb5762a9ffdfb2e1c2ff97df126->leave($__internal_41127ab57968d3a6fb7b32c17372bd018ffa4eb5762a9ffdfb2e1c2ff97df126_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_634bb01ee853322c6209e14c21e8983241fcf47423cbb991541b1ddfee541e4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_634bb01ee853322c6209e14c21e8983241fcf47423cbb991541b1ddfee541e4a->enter($__internal_634bb01ee853322c6209e14c21e8983241fcf47423cbb991541b1ddfee541e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f6e5353895565c216ec6929a97e8c87d818239a790001a8147f11e0560bca85a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e5353895565c216ec6929a97e8c87d818239a790001a8147f11e0560bca85a->enter($__internal_f6e5353895565c216ec6929a97e8c87d818239a790001a8147f11e0560bca85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
        
        $__internal_f6e5353895565c216ec6929a97e8c87d818239a790001a8147f11e0560bca85a->leave($__internal_f6e5353895565c216ec6929a97e8c87d818239a790001a8147f11e0560bca85a_prof);

        
        $__internal_634bb01ee853322c6209e14c21e8983241fcf47423cbb991541b1ddfee541e4a->leave($__internal_634bb01ee853322c6209e14c21e8983241fcf47423cbb991541b1ddfee541e4a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8345c6f97b39aa0a05cc566dadb422b71b4e448bfc13bdfeb78e2bd1754661aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8345c6f97b39aa0a05cc566dadb422b71b4e448bfc13bdfeb78e2bd1754661aa->enter($__internal_8345c6f97b39aa0a05cc566dadb422b71b4e448bfc13bdfeb78e2bd1754661aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8bf3e8ce6913ca32100e507488c27bd00445250098a88d9e07c00d829e276d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf3e8ce6913ca32100e507488c27bd00445250098a88d9e07c00d829e276d67->enter($__internal_8bf3e8ce6913ca32100e507488c27bd00445250098a88d9e07c00d829e276d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script>
  \$( function() {
    \$( \".js-datepicker\" ).datepicker({dateFormat:\"yy-mm-dd\"});
  } );
  </script>
  <script src=\"//cdn.ckeditor.com/4.7.0/basic/ckeditor.js\"></script>
";
        
        $__internal_8bf3e8ce6913ca32100e507488c27bd00445250098a88d9e07c00d829e276d67->leave($__internal_8bf3e8ce6913ca32100e507488c27bd00445250098a88d9e07c00d829e276d67_prof);

        
        $__internal_8345c6f97b39aa0a05cc566dadb422b71b4e448bfc13bdfeb78e2bd1754661aa->leave($__internal_8345c6f97b39aa0a05cc566dadb422b71b4e448bfc13bdfeb78e2bd1754661aa_prof);

    }

    public function getTemplateName()
    {
        return ":blog:modifier.html.twig";
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
{% endblock %}", ":blog:modifier.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/blog/modifier.html.twig");
    }
}
