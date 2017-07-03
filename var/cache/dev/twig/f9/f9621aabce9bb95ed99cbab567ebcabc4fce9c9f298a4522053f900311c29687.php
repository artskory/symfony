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
        $__internal_8edb5de32ec0ef872aa62ed05b73b2818a4fde0f612a2e4ca284663bb51e2f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8edb5de32ec0ef872aa62ed05b73b2818a4fde0f612a2e4ca284663bb51e2f8e->enter($__internal_8edb5de32ec0ef872aa62ed05b73b2818a4fde0f612a2e4ca284663bb51e2f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/modifier.html.twig"));

        $__internal_a62c50cf3c0f0ca0cc574432992e87328ce6efc89d6774ef0cffe30a0f29a647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a62c50cf3c0f0ca0cc574432992e87328ce6efc89d6774ef0cffe30a0f29a647->enter($__internal_a62c50cf3c0f0ca0cc574432992e87328ce6efc89d6774ef0cffe30a0f29a647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8edb5de32ec0ef872aa62ed05b73b2818a4fde0f612a2e4ca284663bb51e2f8e->leave($__internal_8edb5de32ec0ef872aa62ed05b73b2818a4fde0f612a2e4ca284663bb51e2f8e_prof);

        
        $__internal_a62c50cf3c0f0ca0cc574432992e87328ce6efc89d6774ef0cffe30a0f29a647->leave($__internal_a62c50cf3c0f0ca0cc574432992e87328ce6efc89d6774ef0cffe30a0f29a647_prof);

    }

    // line 2
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_8ed7c1ee3822c7871279c3e6a5df8b3aa8e4ba23d3bbaff9c85c119706e949b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ed7c1ee3822c7871279c3e6a5df8b3aa8e4ba23d3bbaff9c85c119706e949b2->enter($__internal_8ed7c1ee3822c7871279c3e6a5df8b3aa8e4ba23d3bbaff9c85c119706e949b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_adbfeb72559d1fe246db40b133f17d86482bfae97ddba3d729e2cf7546bae608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adbfeb72559d1fe246db40b133f17d86482bfae97ddba3d729e2cf7546bae608->enter($__internal_adbfeb72559d1fe246db40b133f17d86482bfae97ddba3d729e2cf7546bae608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 3
        echo "    <h2>Modifier</h2>
    ";
        // line 4
        $this->loadTemplate("blog/formulaire.html.twig", "blog/modifier.html.twig", 4)->display($context);
        
        $__internal_adbfeb72559d1fe246db40b133f17d86482bfae97ddba3d729e2cf7546bae608->leave($__internal_adbfeb72559d1fe246db40b133f17d86482bfae97ddba3d729e2cf7546bae608_prof);

        
        $__internal_8ed7c1ee3822c7871279c3e6a5df8b3aa8e4ba23d3bbaff9c85c119706e949b2->leave($__internal_8ed7c1ee3822c7871279c3e6a5df8b3aa8e4ba23d3bbaff9c85c119706e949b2_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_263b3d6cab089a75dcb6616c9aee6f732246c2f07f6bca10074f4398f6a6e672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_263b3d6cab089a75dcb6616c9aee6f732246c2f07f6bca10074f4398f6a6e672->enter($__internal_263b3d6cab089a75dcb6616c9aee6f732246c2f07f6bca10074f4398f6a6e672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4c59cfb8f67bf89de44241075b0db5b3b83ba0c02f154f7dbc39944da0908aea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c59cfb8f67bf89de44241075b0db5b3b83ba0c02f154f7dbc39944da0908aea->enter($__internal_4c59cfb8f67bf89de44241075b0db5b3b83ba0c02f154f7dbc39944da0908aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
        
        $__internal_4c59cfb8f67bf89de44241075b0db5b3b83ba0c02f154f7dbc39944da0908aea->leave($__internal_4c59cfb8f67bf89de44241075b0db5b3b83ba0c02f154f7dbc39944da0908aea_prof);

        
        $__internal_263b3d6cab089a75dcb6616c9aee6f732246c2f07f6bca10074f4398f6a6e672->leave($__internal_263b3d6cab089a75dcb6616c9aee6f732246c2f07f6bca10074f4398f6a6e672_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e2c24293d7ffc0ed09edc9086f381aa4d5f776c244e8b0d697b2b7ee9d93d7bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2c24293d7ffc0ed09edc9086f381aa4d5f776c244e8b0d697b2b7ee9d93d7bb->enter($__internal_e2c24293d7ffc0ed09edc9086f381aa4d5f776c244e8b0d697b2b7ee9d93d7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8a782dc752f489f2b22a2f7acafe7a914f9ccd72f45659cfc72b94afe4da0062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a782dc752f489f2b22a2f7acafe7a914f9ccd72f45659cfc72b94afe4da0062->enter($__internal_8a782dc752f489f2b22a2f7acafe7a914f9ccd72f45659cfc72b94afe4da0062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script>
  \$( function() {
    \$( \".js-datepicker\" ).datepicker({dateFormat:\"yy-mm-dd\"});
  } );
  </script>
  <script src=\"//cdn.ckeditor.com/4.7.0/basic/ckeditor.js\"></script>
";
        
        $__internal_8a782dc752f489f2b22a2f7acafe7a914f9ccd72f45659cfc72b94afe4da0062->leave($__internal_8a782dc752f489f2b22a2f7acafe7a914f9ccd72f45659cfc72b94afe4da0062_prof);

        
        $__internal_e2c24293d7ffc0ed09edc9086f381aa4d5f776c244e8b0d697b2b7ee9d93d7bb->leave($__internal_e2c24293d7ffc0ed09edc9086f381aa4d5f776c244e8b0d697b2b7ee9d93d7bb_prof);

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
