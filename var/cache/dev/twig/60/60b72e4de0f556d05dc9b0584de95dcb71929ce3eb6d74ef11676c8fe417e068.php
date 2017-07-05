<?php

/* :blog:ajouter.html.twig */
class __TwigTemplate_f87228e3f05e13aa1408cd55a235d2fac912500abf502e5af109e91998eff171 extends Twig_Template
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
        $__internal_ed66ac97dfa0e76d0939e001afeae3d6350dd93b80fcf74a5bae0d7170298488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed66ac97dfa0e76d0939e001afeae3d6350dd93b80fcf74a5bae0d7170298488->enter($__internal_ed66ac97dfa0e76d0939e001afeae3d6350dd93b80fcf74a5bae0d7170298488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:ajouter.html.twig"));

        $__internal_44896ef0c170a9708c1c19372468f966db71b8498748a0eac0cadef50d28e208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44896ef0c170a9708c1c19372468f966db71b8498748a0eac0cadef50d28e208->enter($__internal_44896ef0c170a9708c1c19372468f966db71b8498748a0eac0cadef50d28e208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed66ac97dfa0e76d0939e001afeae3d6350dd93b80fcf74a5bae0d7170298488->leave($__internal_ed66ac97dfa0e76d0939e001afeae3d6350dd93b80fcf74a5bae0d7170298488_prof);

        
        $__internal_44896ef0c170a9708c1c19372468f966db71b8498748a0eac0cadef50d28e208->leave($__internal_44896ef0c170a9708c1c19372468f966db71b8498748a0eac0cadef50d28e208_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_9ce9fd59f767be9e735c5c884f95af9a9e80d5671cadebd89a2c0ac6d9d488ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ce9fd59f767be9e735c5c884f95af9a9e80d5671cadebd89a2c0ac6d9d488ec->enter($__internal_9ce9fd59f767be9e735c5c884f95af9a9e80d5671cadebd89a2c0ac6d9d488ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_ca3abc2ab01b930b2f3956d9a75bfaa26259af814fb9c7e6e4710a9441374760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca3abc2ab01b930b2f3956d9a75bfaa26259af814fb9c7e6e4710a9441374760->enter($__internal_ca3abc2ab01b930b2f3956d9a75bfaa26259af814fb9c7e6e4710a9441374760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 4
        echo "    <h2>Ajouter</h2>
    ";
        // line 5
        $this->loadTemplate("blog/formulaire.html.twig", ":blog:ajouter.html.twig", 5)->display($context);
        
        $__internal_ca3abc2ab01b930b2f3956d9a75bfaa26259af814fb9c7e6e4710a9441374760->leave($__internal_ca3abc2ab01b930b2f3956d9a75bfaa26259af814fb9c7e6e4710a9441374760_prof);

        
        $__internal_9ce9fd59f767be9e735c5c884f95af9a9e80d5671cadebd89a2c0ac6d9d488ec->leave($__internal_9ce9fd59f767be9e735c5c884f95af9a9e80d5671cadebd89a2c0ac6d9d488ec_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a11170bd3676670978d21b763d5185ef6d8e3dba144a011db93429ce7e716775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a11170bd3676670978d21b763d5185ef6d8e3dba144a011db93429ce7e716775->enter($__internal_a11170bd3676670978d21b763d5185ef6d8e3dba144a011db93429ce7e716775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_224eedcefaa197b9335b578404b3b386731e4535b784872ae37d9b48c39f1320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_224eedcefaa197b9335b578404b3b386731e4535b784872ae37d9b48c39f1320->enter($__internal_224eedcefaa197b9335b578404b3b386731e4535b784872ae37d9b48c39f1320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
        
        $__internal_224eedcefaa197b9335b578404b3b386731e4535b784872ae37d9b48c39f1320->leave($__internal_224eedcefaa197b9335b578404b3b386731e4535b784872ae37d9b48c39f1320_prof);

        
        $__internal_a11170bd3676670978d21b763d5185ef6d8e3dba144a011db93429ce7e716775->leave($__internal_a11170bd3676670978d21b763d5185ef6d8e3dba144a011db93429ce7e716775_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6c37fe98179e6dacef5ffa9bf305f47fdcfed31ff1ba5a5a16caa74816d01c5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c37fe98179e6dacef5ffa9bf305f47fdcfed31ff1ba5a5a16caa74816d01c5d->enter($__internal_6c37fe98179e6dacef5ffa9bf305f47fdcfed31ff1ba5a5a16caa74816d01c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d7e33ef5108f85ae5ee715359ac928fddb8d0d9e7ac1c551e4b5f4061ef21c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e33ef5108f85ae5ee715359ac928fddb8d0d9e7ac1c551e4b5f4061ef21c35->enter($__internal_d7e33ef5108f85ae5ee715359ac928fddb8d0d9e7ac1c551e4b5f4061ef21c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script>
  \$( function() {
    \$( \".js-datepicker\" ).datepicker({dateFormat:\"yy-mm-dd\"});
  } );
  </script>
  <script src=\"//cdn.ckeditor.com/4.7.0/basic/ckeditor.js\"></script>
";
        
        $__internal_d7e33ef5108f85ae5ee715359ac928fddb8d0d9e7ac1c551e4b5f4061ef21c35->leave($__internal_d7e33ef5108f85ae5ee715359ac928fddb8d0d9e7ac1c551e4b5f4061ef21c35_prof);

        
        $__internal_6c37fe98179e6dacef5ffa9bf305f47fdcfed31ff1ba5a5a16caa74816d01c5d->leave($__internal_6c37fe98179e6dacef5ffa9bf305f47fdcfed31ff1ba5a5a16caa74816d01c5d_prof);

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
