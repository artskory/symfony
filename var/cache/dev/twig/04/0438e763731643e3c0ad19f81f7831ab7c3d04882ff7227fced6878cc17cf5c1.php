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
        $__internal_c80af72ad48610bb20dc74994530b385d9acedae1d69f916085f43fa223ebee9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c80af72ad48610bb20dc74994530b385d9acedae1d69f916085f43fa223ebee9->enter($__internal_c80af72ad48610bb20dc74994530b385d9acedae1d69f916085f43fa223ebee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:ajouter.html.twig"));

        $__internal_a3d4a08d25fe8b3696b7ab3d1788d7b8f0e21394aee2ec79e5133526d7c6cffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3d4a08d25fe8b3696b7ab3d1788d7b8f0e21394aee2ec79e5133526d7c6cffb->enter($__internal_a3d4a08d25fe8b3696b7ab3d1788d7b8f0e21394aee2ec79e5133526d7c6cffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c80af72ad48610bb20dc74994530b385d9acedae1d69f916085f43fa223ebee9->leave($__internal_c80af72ad48610bb20dc74994530b385d9acedae1d69f916085f43fa223ebee9_prof);

        
        $__internal_a3d4a08d25fe8b3696b7ab3d1788d7b8f0e21394aee2ec79e5133526d7c6cffb->leave($__internal_a3d4a08d25fe8b3696b7ab3d1788d7b8f0e21394aee2ec79e5133526d7c6cffb_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_58d88a5b9a4acca5c67e3919c0e8be3c456516053e40b44438d2dcc26c4249b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58d88a5b9a4acca5c67e3919c0e8be3c456516053e40b44438d2dcc26c4249b6->enter($__internal_58d88a5b9a4acca5c67e3919c0e8be3c456516053e40b44438d2dcc26c4249b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_205db64d70be2456d30290b45fc2a9f436a7d07b925820d2d5a5bc0eb44b818e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205db64d70be2456d30290b45fc2a9f436a7d07b925820d2d5a5bc0eb44b818e->enter($__internal_205db64d70be2456d30290b45fc2a9f436a7d07b925820d2d5a5bc0eb44b818e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 4
        echo "    <h2>Ajouter</h2>
    ";
        // line 5
        $this->loadTemplate("blog/formulaire.html.twig", ":blog:ajouter.html.twig", 5)->display($context);
        
        $__internal_205db64d70be2456d30290b45fc2a9f436a7d07b925820d2d5a5bc0eb44b818e->leave($__internal_205db64d70be2456d30290b45fc2a9f436a7d07b925820d2d5a5bc0eb44b818e_prof);

        
        $__internal_58d88a5b9a4acca5c67e3919c0e8be3c456516053e40b44438d2dcc26c4249b6->leave($__internal_58d88a5b9a4acca5c67e3919c0e8be3c456516053e40b44438d2dcc26c4249b6_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2ad290c36cf32f7f6a96627ea717c44e2997862e3f650f66bc78793b6086fb59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ad290c36cf32f7f6a96627ea717c44e2997862e3f650f66bc78793b6086fb59->enter($__internal_2ad290c36cf32f7f6a96627ea717c44e2997862e3f650f66bc78793b6086fb59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5860b1864999691a0ab217d44952ee8a79e181c98e2074ad8ac6abcb7a46ee74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5860b1864999691a0ab217d44952ee8a79e181c98e2074ad8ac6abcb7a46ee74->enter($__internal_5860b1864999691a0ab217d44952ee8a79e181c98e2074ad8ac6abcb7a46ee74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
        
        $__internal_5860b1864999691a0ab217d44952ee8a79e181c98e2074ad8ac6abcb7a46ee74->leave($__internal_5860b1864999691a0ab217d44952ee8a79e181c98e2074ad8ac6abcb7a46ee74_prof);

        
        $__internal_2ad290c36cf32f7f6a96627ea717c44e2997862e3f650f66bc78793b6086fb59->leave($__internal_2ad290c36cf32f7f6a96627ea717c44e2997862e3f650f66bc78793b6086fb59_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_82fef9aba3554fbc636d1f03f72cdff6fb1a1c9cb05ed7a6f170b0c28dda58c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82fef9aba3554fbc636d1f03f72cdff6fb1a1c9cb05ed7a6f170b0c28dda58c9->enter($__internal_82fef9aba3554fbc636d1f03f72cdff6fb1a1c9cb05ed7a6f170b0c28dda58c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2c54b2b8eec3a0e75431cac352be33540f2651d5ceff40604aca2135e22b0d0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c54b2b8eec3a0e75431cac352be33540f2651d5ceff40604aca2135e22b0d0e->enter($__internal_2c54b2b8eec3a0e75431cac352be33540f2651d5ceff40604aca2135e22b0d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script>
  \$( function() {
    \$( \".js-datepicker\" ).datepicker({dateFormat:\"yy-mm-dd\"});
  } );
  </script>
  <script src=\"//cdn.ckeditor.com/4.7.0/basic/ckeditor.js\"></script>
";
        
        $__internal_2c54b2b8eec3a0e75431cac352be33540f2651d5ceff40604aca2135e22b0d0e->leave($__internal_2c54b2b8eec3a0e75431cac352be33540f2651d5ceff40604aca2135e22b0d0e_prof);

        
        $__internal_82fef9aba3554fbc636d1f03f72cdff6fb1a1c9cb05ed7a6f170b0c28dda58c9->leave($__internal_82fef9aba3554fbc636d1f03f72cdff6fb1a1c9cb05ed7a6f170b0c28dda58c9_prof);

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
