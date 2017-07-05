<?php

/* blog/modifier.html.twig */
class __TwigTemplate_5741c9f900c73ae356e76668397709927b3856c9dc95399024f9c6011ee45bd9 extends Twig_Template
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
        $__internal_be2994a086e2bc9e72e38bae417ab8ca1bc082024aaad3676a005afd1661b83b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be2994a086e2bc9e72e38bae417ab8ca1bc082024aaad3676a005afd1661b83b->enter($__internal_be2994a086e2bc9e72e38bae417ab8ca1bc082024aaad3676a005afd1661b83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/modifier.html.twig"));

        $__internal_40169183bd4d567e12c627ce782620a177812aa95eb1058a711e6238056ac06f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40169183bd4d567e12c627ce782620a177812aa95eb1058a711e6238056ac06f->enter($__internal_40169183bd4d567e12c627ce782620a177812aa95eb1058a711e6238056ac06f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be2994a086e2bc9e72e38bae417ab8ca1bc082024aaad3676a005afd1661b83b->leave($__internal_be2994a086e2bc9e72e38bae417ab8ca1bc082024aaad3676a005afd1661b83b_prof);

        
        $__internal_40169183bd4d567e12c627ce782620a177812aa95eb1058a711e6238056ac06f->leave($__internal_40169183bd4d567e12c627ce782620a177812aa95eb1058a711e6238056ac06f_prof);

    }

    // line 2
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_693c0640b67d9c631ae30cb45b9d7c81ea9eb35c6ec76c5af6cb6636fc21b398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_693c0640b67d9c631ae30cb45b9d7c81ea9eb35c6ec76c5af6cb6636fc21b398->enter($__internal_693c0640b67d9c631ae30cb45b9d7c81ea9eb35c6ec76c5af6cb6636fc21b398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_05d581b1f58fe33e76d4dbf814e99da9b5643a158947f0e2486b683c190aae37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d581b1f58fe33e76d4dbf814e99da9b5643a158947f0e2486b683c190aae37->enter($__internal_05d581b1f58fe33e76d4dbf814e99da9b5643a158947f0e2486b683c190aae37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 3
        echo "    <h2>Modifier</h2>
    ";
        // line 4
        $this->loadTemplate("blog/formulaire.html.twig", "blog/modifier.html.twig", 4)->display($context);
        
        $__internal_05d581b1f58fe33e76d4dbf814e99da9b5643a158947f0e2486b683c190aae37->leave($__internal_05d581b1f58fe33e76d4dbf814e99da9b5643a158947f0e2486b683c190aae37_prof);

        
        $__internal_693c0640b67d9c631ae30cb45b9d7c81ea9eb35c6ec76c5af6cb6636fc21b398->leave($__internal_693c0640b67d9c631ae30cb45b9d7c81ea9eb35c6ec76c5af6cb6636fc21b398_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e574ca21c043b9f23c7d1732a6f8edc6a99d63f20e20b17917608f5a3665e925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e574ca21c043b9f23c7d1732a6f8edc6a99d63f20e20b17917608f5a3665e925->enter($__internal_e574ca21c043b9f23c7d1732a6f8edc6a99d63f20e20b17917608f5a3665e925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5ee4b81bf82aafdecbe79ee1284ac7214e5ac09c2cfcff5a2dfe597ab173e529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee4b81bf82aafdecbe79ee1284ac7214e5ac09c2cfcff5a2dfe597ab173e529->enter($__internal_5ee4b81bf82aafdecbe79ee1284ac7214e5ac09c2cfcff5a2dfe597ab173e529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
        
        $__internal_5ee4b81bf82aafdecbe79ee1284ac7214e5ac09c2cfcff5a2dfe597ab173e529->leave($__internal_5ee4b81bf82aafdecbe79ee1284ac7214e5ac09c2cfcff5a2dfe597ab173e529_prof);

        
        $__internal_e574ca21c043b9f23c7d1732a6f8edc6a99d63f20e20b17917608f5a3665e925->leave($__internal_e574ca21c043b9f23c7d1732a6f8edc6a99d63f20e20b17917608f5a3665e925_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_782572365c570b8e68d815a596d3a80bfa3f5f46f74c36ebea768808915d760b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_782572365c570b8e68d815a596d3a80bfa3f5f46f74c36ebea768808915d760b->enter($__internal_782572365c570b8e68d815a596d3a80bfa3f5f46f74c36ebea768808915d760b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1d3a6e861c6a2b50943384ecce72e3cfb004c93ca6e8e0e4aaf5895c93a79699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d3a6e861c6a2b50943384ecce72e3cfb004c93ca6e8e0e4aaf5895c93a79699->enter($__internal_1d3a6e861c6a2b50943384ecce72e3cfb004c93ca6e8e0e4aaf5895c93a79699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script>
  \$( function() {
    \$( \".js-datepicker\" ).datepicker({dateFormat:\"yy-mm-dd\"});
  } );
  </script>
  <script src=\"//cdn.ckeditor.com/4.7.0/basic/ckeditor.js\"></script>
";
        
        $__internal_1d3a6e861c6a2b50943384ecce72e3cfb004c93ca6e8e0e4aaf5895c93a79699->leave($__internal_1d3a6e861c6a2b50943384ecce72e3cfb004c93ca6e8e0e4aaf5895c93a79699_prof);

        
        $__internal_782572365c570b8e68d815a596d3a80bfa3f5f46f74c36ebea768808915d760b->leave($__internal_782572365c570b8e68d815a596d3a80bfa3f5f46f74c36ebea768808915d760b_prof);

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
