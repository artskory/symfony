<?php

/* blog/ajouter.html.twig */
class __TwigTemplate_9f1d6c0debc944d9e4b2bff17ece3719cfb9ce176498123aa887ba5e495d52e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("blog/layout.html.twig", "blog/ajouter.html.twig", 1);
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
        $__internal_595ed8a2aef26c3e7e2a6f246a40ff7893e9cb3daedc31798b0413319925bb33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_595ed8a2aef26c3e7e2a6f246a40ff7893e9cb3daedc31798b0413319925bb33->enter($__internal_595ed8a2aef26c3e7e2a6f246a40ff7893e9cb3daedc31798b0413319925bb33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/ajouter.html.twig"));

        $__internal_21da4d1bd06ac2860b107f5270901d331dc206883238eb85c82a6db4b8875223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21da4d1bd06ac2860b107f5270901d331dc206883238eb85c82a6db4b8875223->enter($__internal_21da4d1bd06ac2860b107f5270901d331dc206883238eb85c82a6db4b8875223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_595ed8a2aef26c3e7e2a6f246a40ff7893e9cb3daedc31798b0413319925bb33->leave($__internal_595ed8a2aef26c3e7e2a6f246a40ff7893e9cb3daedc31798b0413319925bb33_prof);

        
        $__internal_21da4d1bd06ac2860b107f5270901d331dc206883238eb85c82a6db4b8875223->leave($__internal_21da4d1bd06ac2860b107f5270901d331dc206883238eb85c82a6db4b8875223_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_aa829bdaa3b02351208b34b26d4be0f1412706ee6f42480d0cbb0334fad81945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa829bdaa3b02351208b34b26d4be0f1412706ee6f42480d0cbb0334fad81945->enter($__internal_aa829bdaa3b02351208b34b26d4be0f1412706ee6f42480d0cbb0334fad81945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_b67131c738f75484af349e5086c1059db652dcac1bbcd06cc52dce8dc50f265c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b67131c738f75484af349e5086c1059db652dcac1bbcd06cc52dce8dc50f265c->enter($__internal_b67131c738f75484af349e5086c1059db652dcac1bbcd06cc52dce8dc50f265c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 4
        echo "    <h2>Ajouter</h2>
    ";
        // line 5
        $this->loadTemplate("blog/formulaire.html.twig", "blog/ajouter.html.twig", 5)->display($context);
        
        $__internal_b67131c738f75484af349e5086c1059db652dcac1bbcd06cc52dce8dc50f265c->leave($__internal_b67131c738f75484af349e5086c1059db652dcac1bbcd06cc52dce8dc50f265c_prof);

        
        $__internal_aa829bdaa3b02351208b34b26d4be0f1412706ee6f42480d0cbb0334fad81945->leave($__internal_aa829bdaa3b02351208b34b26d4be0f1412706ee6f42480d0cbb0334fad81945_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c5c6d5814b2a605e097fc0a8ca032aeba079abe131d94623390b10ff047b9cef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c6d5814b2a605e097fc0a8ca032aeba079abe131d94623390b10ff047b9cef->enter($__internal_c5c6d5814b2a605e097fc0a8ca032aeba079abe131d94623390b10ff047b9cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cc819bf04b7c5a5c2b59411b0334bdafcc148cdb822b61db0c67b87d37f020c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc819bf04b7c5a5c2b59411b0334bdafcc148cdb822b61db0c67b87d37f020c4->enter($__internal_cc819bf04b7c5a5c2b59411b0334bdafcc148cdb822b61db0c67b87d37f020c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
        
        $__internal_cc819bf04b7c5a5c2b59411b0334bdafcc148cdb822b61db0c67b87d37f020c4->leave($__internal_cc819bf04b7c5a5c2b59411b0334bdafcc148cdb822b61db0c67b87d37f020c4_prof);

        
        $__internal_c5c6d5814b2a605e097fc0a8ca032aeba079abe131d94623390b10ff047b9cef->leave($__internal_c5c6d5814b2a605e097fc0a8ca032aeba079abe131d94623390b10ff047b9cef_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8136c33c28b3e0c3bb7cc2fbe8525cbcf1daec57a7296e9b47017a21e3848e16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8136c33c28b3e0c3bb7cc2fbe8525cbcf1daec57a7296e9b47017a21e3848e16->enter($__internal_8136c33c28b3e0c3bb7cc2fbe8525cbcf1daec57a7296e9b47017a21e3848e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_36b56633b6c335ca671cfcb4dfa442357e6e532c283a446fc58f6e9c2b75def5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36b56633b6c335ca671cfcb4dfa442357e6e532c283a446fc58f6e9c2b75def5->enter($__internal_36b56633b6c335ca671cfcb4dfa442357e6e532c283a446fc58f6e9c2b75def5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script>
  \$( function() {
    \$( \".js-datepicker\" ).datepicker({dateFormat:\"yy-mm-dd\"});
  } );
  </script>
  <script src=\"//cdn.ckeditor.com/4.7.0/basic/ckeditor.js\"></script>
";
        
        $__internal_36b56633b6c335ca671cfcb4dfa442357e6e532c283a446fc58f6e9c2b75def5->leave($__internal_36b56633b6c335ca671cfcb4dfa442357e6e532c283a446fc58f6e9c2b75def5_prof);

        
        $__internal_8136c33c28b3e0c3bb7cc2fbe8525cbcf1daec57a7296e9b47017a21e3848e16->leave($__internal_8136c33c28b3e0c3bb7cc2fbe8525cbcf1daec57a7296e9b47017a21e3848e16_prof);

    }

    public function getTemplateName()
    {
        return "blog/ajouter.html.twig";
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
{% endblock %}", "blog/ajouter.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\blog\\ajouter.html.twig");
    }
}
