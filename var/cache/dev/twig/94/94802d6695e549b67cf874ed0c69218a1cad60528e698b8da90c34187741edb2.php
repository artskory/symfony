<?php

/* :blog:modifier.html.twig */
class __TwigTemplate_168b5a8587c7be3704c315ab74513ced3bd15054651011f75a1c936e30b59279 extends Twig_Template
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
        $__internal_c503c29bec946e759f2b0411a3ac20493d5f34b8e9641a4c1055df0fe70b5999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c503c29bec946e759f2b0411a3ac20493d5f34b8e9641a4c1055df0fe70b5999->enter($__internal_c503c29bec946e759f2b0411a3ac20493d5f34b8e9641a4c1055df0fe70b5999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:modifier.html.twig"));

        $__internal_d717269099279fb21976f4f3b4676a9e9c3428650107367898fa518ae8b7a5e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d717269099279fb21976f4f3b4676a9e9c3428650107367898fa518ae8b7a5e3->enter($__internal_d717269099279fb21976f4f3b4676a9e9c3428650107367898fa518ae8b7a5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c503c29bec946e759f2b0411a3ac20493d5f34b8e9641a4c1055df0fe70b5999->leave($__internal_c503c29bec946e759f2b0411a3ac20493d5f34b8e9641a4c1055df0fe70b5999_prof);

        
        $__internal_d717269099279fb21976f4f3b4676a9e9c3428650107367898fa518ae8b7a5e3->leave($__internal_d717269099279fb21976f4f3b4676a9e9c3428650107367898fa518ae8b7a5e3_prof);

    }

    // line 2
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_b894de6027811bfb7163ce0eccf2640dc3eef9ca4905f2582e4b1f3191fa2d26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b894de6027811bfb7163ce0eccf2640dc3eef9ca4905f2582e4b1f3191fa2d26->enter($__internal_b894de6027811bfb7163ce0eccf2640dc3eef9ca4905f2582e4b1f3191fa2d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_de09bf9f1c8318fbe01c4ba738197bcd592c2e23c99b7097cc0e37fdcabe3556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de09bf9f1c8318fbe01c4ba738197bcd592c2e23c99b7097cc0e37fdcabe3556->enter($__internal_de09bf9f1c8318fbe01c4ba738197bcd592c2e23c99b7097cc0e37fdcabe3556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 3
        echo "    <h2>Modifier</h2>
    ";
        // line 4
        $this->loadTemplate("blog/formulaire.html.twig", ":blog:modifier.html.twig", 4)->display($context);
        
        $__internal_de09bf9f1c8318fbe01c4ba738197bcd592c2e23c99b7097cc0e37fdcabe3556->leave($__internal_de09bf9f1c8318fbe01c4ba738197bcd592c2e23c99b7097cc0e37fdcabe3556_prof);

        
        $__internal_b894de6027811bfb7163ce0eccf2640dc3eef9ca4905f2582e4b1f3191fa2d26->leave($__internal_b894de6027811bfb7163ce0eccf2640dc3eef9ca4905f2582e4b1f3191fa2d26_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_48b61e08d415761d7a1f078b71b9182224d8e7e8b444e2333bf35d864280f81c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48b61e08d415761d7a1f078b71b9182224d8e7e8b444e2333bf35d864280f81c->enter($__internal_48b61e08d415761d7a1f078b71b9182224d8e7e8b444e2333bf35d864280f81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_063d55e56fa331840d7466f44078097d2bc6cb7f856f3d88b2e8d75539a249cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_063d55e56fa331840d7466f44078097d2bc6cb7f856f3d88b2e8d75539a249cb->enter($__internal_063d55e56fa331840d7466f44078097d2bc6cb7f856f3d88b2e8d75539a249cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
        
        $__internal_063d55e56fa331840d7466f44078097d2bc6cb7f856f3d88b2e8d75539a249cb->leave($__internal_063d55e56fa331840d7466f44078097d2bc6cb7f856f3d88b2e8d75539a249cb_prof);

        
        $__internal_48b61e08d415761d7a1f078b71b9182224d8e7e8b444e2333bf35d864280f81c->leave($__internal_48b61e08d415761d7a1f078b71b9182224d8e7e8b444e2333bf35d864280f81c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_39c989cd6f4d4f09d1342f0d04a26dc1b6b2324b50f1cf4af32804a94bfd8ddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39c989cd6f4d4f09d1342f0d04a26dc1b6b2324b50f1cf4af32804a94bfd8ddc->enter($__internal_39c989cd6f4d4f09d1342f0d04a26dc1b6b2324b50f1cf4af32804a94bfd8ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a498534d7dd23f8e95be9b04b9749998144e50c923beccce54f808ae49765f03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a498534d7dd23f8e95be9b04b9749998144e50c923beccce54f808ae49765f03->enter($__internal_a498534d7dd23f8e95be9b04b9749998144e50c923beccce54f808ae49765f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script>
  \$( function() {
    \$( \".js-datepicker\" ).datepicker({dateFormat:\"yy-mm-dd\"});
  } );
  </script>
  <script src=\"//cdn.ckeditor.com/4.7.0/basic/ckeditor.js\"></script>
";
        
        $__internal_a498534d7dd23f8e95be9b04b9749998144e50c923beccce54f808ae49765f03->leave($__internal_a498534d7dd23f8e95be9b04b9749998144e50c923beccce54f808ae49765f03_prof);

        
        $__internal_39c989cd6f4d4f09d1342f0d04a26dc1b6b2324b50f1cf4af32804a94bfd8ddc->leave($__internal_39c989cd6f4d4f09d1342f0d04a26dc1b6b2324b50f1cf4af32804a94bfd8ddc_prof);

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
