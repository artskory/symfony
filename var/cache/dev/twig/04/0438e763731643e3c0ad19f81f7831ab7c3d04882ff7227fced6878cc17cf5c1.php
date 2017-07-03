<?php

/* :blog:ajouter.html.twig */
class __TwigTemplate_4721f46c62d29e6e8977bdecbbd61d65d924ec6458331d5e5f3e43b5ebdea047 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("blog/layout.html.twig", ":blog:ajouter.html.twig", 1);
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
        $__internal_bda5b678550678cd62711a642d3848f12aa30f835b4887c0ac721ab53c850466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bda5b678550678cd62711a642d3848f12aa30f835b4887c0ac721ab53c850466->enter($__internal_bda5b678550678cd62711a642d3848f12aa30f835b4887c0ac721ab53c850466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:ajouter.html.twig"));

        $__internal_4fa7b14f19e952a6f7cef4e186780cfdb3ac7d40f4ff78fbae30ed3965efaaf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa7b14f19e952a6f7cef4e186780cfdb3ac7d40f4ff78fbae30ed3965efaaf1->enter($__internal_4fa7b14f19e952a6f7cef4e186780cfdb3ac7d40f4ff78fbae30ed3965efaaf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bda5b678550678cd62711a642d3848f12aa30f835b4887c0ac721ab53c850466->leave($__internal_bda5b678550678cd62711a642d3848f12aa30f835b4887c0ac721ab53c850466_prof);

        
        $__internal_4fa7b14f19e952a6f7cef4e186780cfdb3ac7d40f4ff78fbae30ed3965efaaf1->leave($__internal_4fa7b14f19e952a6f7cef4e186780cfdb3ac7d40f4ff78fbae30ed3965efaaf1_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_36e93cf5b435f8b1764a60c1b2fab552e21176ab03b826f2afb03f3a9a6ee453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36e93cf5b435f8b1764a60c1b2fab552e21176ab03b826f2afb03f3a9a6ee453->enter($__internal_36e93cf5b435f8b1764a60c1b2fab552e21176ab03b826f2afb03f3a9a6ee453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_d9d02d14a4e82f725ef00cd0fa56ffd501d655f56d9d377758a16918e72632e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d02d14a4e82f725ef00cd0fa56ffd501d655f56d9d377758a16918e72632e9->enter($__internal_d9d02d14a4e82f725ef00cd0fa56ffd501d655f56d9d377758a16918e72632e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 4
        echo "    <h2>Ajouter</h2>
    ";
        // line 5
        $this->loadTemplate("blog/formulaire.html.twig", ":blog:ajouter.html.twig", 5)->display($context);
        
        $__internal_d9d02d14a4e82f725ef00cd0fa56ffd501d655f56d9d377758a16918e72632e9->leave($__internal_d9d02d14a4e82f725ef00cd0fa56ffd501d655f56d9d377758a16918e72632e9_prof);

        
        $__internal_36e93cf5b435f8b1764a60c1b2fab552e21176ab03b826f2afb03f3a9a6ee453->leave($__internal_36e93cf5b435f8b1764a60c1b2fab552e21176ab03b826f2afb03f3a9a6ee453_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_841ca117fac7bafb4a1a3787c2453646f67086b4123071f631a22747f49b0dc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_841ca117fac7bafb4a1a3787c2453646f67086b4123071f631a22747f49b0dc3->enter($__internal_841ca117fac7bafb4a1a3787c2453646f67086b4123071f631a22747f49b0dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7b3752b65015737e26d4810cd0cecd61f537fa8552e4388096025f9bf15b4680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b3752b65015737e26d4810cd0cecd61f537fa8552e4388096025f9bf15b4680->enter($__internal_7b3752b65015737e26d4810cd0cecd61f537fa8552e4388096025f9bf15b4680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
        
        $__internal_7b3752b65015737e26d4810cd0cecd61f537fa8552e4388096025f9bf15b4680->leave($__internal_7b3752b65015737e26d4810cd0cecd61f537fa8552e4388096025f9bf15b4680_prof);

        
        $__internal_841ca117fac7bafb4a1a3787c2453646f67086b4123071f631a22747f49b0dc3->leave($__internal_841ca117fac7bafb4a1a3787c2453646f67086b4123071f631a22747f49b0dc3_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_44028f2d9c278393e8e7e424cc25642c6d494b786dbdca6f6f3388fd0e5c793c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44028f2d9c278393e8e7e424cc25642c6d494b786dbdca6f6f3388fd0e5c793c->enter($__internal_44028f2d9c278393e8e7e424cc25642c6d494b786dbdca6f6f3388fd0e5c793c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bbf0bf47a0ce03804b25b4310c08936fee99c0a930d0b27cfcc12a848c588f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbf0bf47a0ce03804b25b4310c08936fee99c0a930d0b27cfcc12a848c588f52->enter($__internal_bbf0bf47a0ce03804b25b4310c08936fee99c0a930d0b27cfcc12a848c588f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script>
  \$( function() {
    \$( \".js-datepicker\" ).datepicker({dateFormat:\"yy-mm-dd\"});
  } );
  </script>
  <script src=\"//cdn.ckeditor.com/4.7.0/basic/ckeditor.js\"></script>
";
        
        $__internal_bbf0bf47a0ce03804b25b4310c08936fee99c0a930d0b27cfcc12a848c588f52->leave($__internal_bbf0bf47a0ce03804b25b4310c08936fee99c0a930d0b27cfcc12a848c588f52_prof);

        
        $__internal_44028f2d9c278393e8e7e424cc25642c6d494b786dbdca6f6f3388fd0e5c793c->leave($__internal_44028f2d9c278393e8e7e424cc25642c6d494b786dbdca6f6f3388fd0e5c793c_prof);

    }

    public function getTemplateName()
    {
        return ":blog:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 13,  84 => 12,  73 => 9,  64 => 8,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
    <h2>Ajouter</h2>
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
{% endblock %}", ":blog:ajouter.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/blog/ajouter.html.twig");
    }
}
