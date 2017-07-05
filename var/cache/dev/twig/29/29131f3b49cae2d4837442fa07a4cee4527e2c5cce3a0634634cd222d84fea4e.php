<?php

/* :blog:modifier.html.twig */
class __TwigTemplate_d43527bfd9d472ea07289b8e5abc02089e8eeb2ce17913dc2c3ad11b4c6f6ee0 extends Twig_Template
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
        $__internal_f1a26559b74f2f823daaa2297373c1fdb3646e404468682687640a2dbbf3b4f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1a26559b74f2f823daaa2297373c1fdb3646e404468682687640a2dbbf3b4f1->enter($__internal_f1a26559b74f2f823daaa2297373c1fdb3646e404468682687640a2dbbf3b4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:modifier.html.twig"));

        $__internal_88ac6ee5ae72de994742b67a1c4b6ae8d2044699e59db5b291c4a7fe8b9f8a3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ac6ee5ae72de994742b67a1c4b6ae8d2044699e59db5b291c4a7fe8b9f8a3f->enter($__internal_88ac6ee5ae72de994742b67a1c4b6ae8d2044699e59db5b291c4a7fe8b9f8a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1a26559b74f2f823daaa2297373c1fdb3646e404468682687640a2dbbf3b4f1->leave($__internal_f1a26559b74f2f823daaa2297373c1fdb3646e404468682687640a2dbbf3b4f1_prof);

        
        $__internal_88ac6ee5ae72de994742b67a1c4b6ae8d2044699e59db5b291c4a7fe8b9f8a3f->leave($__internal_88ac6ee5ae72de994742b67a1c4b6ae8d2044699e59db5b291c4a7fe8b9f8a3f_prof);

    }

    // line 2
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_6df75b7d4975c0c0c0528bed78ce38eca54a73f7a7d07a2e61e0e2987acf3057 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6df75b7d4975c0c0c0528bed78ce38eca54a73f7a7d07a2e61e0e2987acf3057->enter($__internal_6df75b7d4975c0c0c0528bed78ce38eca54a73f7a7d07a2e61e0e2987acf3057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_db4e1f5935e14561742598b8b13dbefec326fb4112b400eef768e6a3229544ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db4e1f5935e14561742598b8b13dbefec326fb4112b400eef768e6a3229544ba->enter($__internal_db4e1f5935e14561742598b8b13dbefec326fb4112b400eef768e6a3229544ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 3
        echo "    <h2>Modifier</h2>
    ";
        // line 4
        $this->loadTemplate("blog/formulaire.html.twig", ":blog:modifier.html.twig", 4)->display($context);
        
        $__internal_db4e1f5935e14561742598b8b13dbefec326fb4112b400eef768e6a3229544ba->leave($__internal_db4e1f5935e14561742598b8b13dbefec326fb4112b400eef768e6a3229544ba_prof);

        
        $__internal_6df75b7d4975c0c0c0528bed78ce38eca54a73f7a7d07a2e61e0e2987acf3057->leave($__internal_6df75b7d4975c0c0c0528bed78ce38eca54a73f7a7d07a2e61e0e2987acf3057_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8e4be60d3c57e70b9a23e1f1e408e40b2095f322d40b5e015fa0639fe26e0256 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e4be60d3c57e70b9a23e1f1e408e40b2095f322d40b5e015fa0639fe26e0256->enter($__internal_8e4be60d3c57e70b9a23e1f1e408e40b2095f322d40b5e015fa0639fe26e0256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a6bd614624755b48bf3a08f998de83eb770d53f9c005b52661d181e7bca13fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6bd614624755b48bf3a08f998de83eb770d53f9c005b52661d181e7bca13fb4->enter($__internal_a6bd614624755b48bf3a08f998de83eb770d53f9c005b52661d181e7bca13fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
        
        $__internal_a6bd614624755b48bf3a08f998de83eb770d53f9c005b52661d181e7bca13fb4->leave($__internal_a6bd614624755b48bf3a08f998de83eb770d53f9c005b52661d181e7bca13fb4_prof);

        
        $__internal_8e4be60d3c57e70b9a23e1f1e408e40b2095f322d40b5e015fa0639fe26e0256->leave($__internal_8e4be60d3c57e70b9a23e1f1e408e40b2095f322d40b5e015fa0639fe26e0256_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_80440db0ab95cc2f5bf4cefef095cd7654cb7fcd19042e69c759f5f2aa243e9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80440db0ab95cc2f5bf4cefef095cd7654cb7fcd19042e69c759f5f2aa243e9d->enter($__internal_80440db0ab95cc2f5bf4cefef095cd7654cb7fcd19042e69c759f5f2aa243e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e4dddd50d74a54697ab8d235afb9ba2e3274daf21480eb7b93fcaefa4b0dae9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4dddd50d74a54697ab8d235afb9ba2e3274daf21480eb7b93fcaefa4b0dae9b->enter($__internal_e4dddd50d74a54697ab8d235afb9ba2e3274daf21480eb7b93fcaefa4b0dae9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script>
  \$( function() {
    \$( \".js-datepicker\" ).datepicker({dateFormat:\"yy-mm-dd\"});
  } );
  </script>
  <script src=\"//cdn.ckeditor.com/4.7.0/basic/ckeditor.js\"></script>
";
        
        $__internal_e4dddd50d74a54697ab8d235afb9ba2e3274daf21480eb7b93fcaefa4b0dae9b->leave($__internal_e4dddd50d74a54697ab8d235afb9ba2e3274daf21480eb7b93fcaefa4b0dae9b_prof);

        
        $__internal_80440db0ab95cc2f5bf4cefef095cd7654cb7fcd19042e69c759f5f2aa243e9d->leave($__internal_80440db0ab95cc2f5bf4cefef095cd7654cb7fcd19042e69c759f5f2aa243e9d_prof);

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
