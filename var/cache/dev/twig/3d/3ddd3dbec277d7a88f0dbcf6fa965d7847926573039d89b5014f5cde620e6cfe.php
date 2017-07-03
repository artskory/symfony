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
        $__internal_7cca2bc9a433f5d09bb4e7cf311d2642f4cc59157da47b1f7dd079a512b371e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cca2bc9a433f5d09bb4e7cf311d2642f4cc59157da47b1f7dd079a512b371e3->enter($__internal_7cca2bc9a433f5d09bb4e7cf311d2642f4cc59157da47b1f7dd079a512b371e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:modifier.html.twig"));

        $__internal_fa4f040fbf20d24c54815f20947b61b0ccecb229f6c7caf30bd58028bbfd5d19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa4f040fbf20d24c54815f20947b61b0ccecb229f6c7caf30bd58028bbfd5d19->enter($__internal_fa4f040fbf20d24c54815f20947b61b0ccecb229f6c7caf30bd58028bbfd5d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cca2bc9a433f5d09bb4e7cf311d2642f4cc59157da47b1f7dd079a512b371e3->leave($__internal_7cca2bc9a433f5d09bb4e7cf311d2642f4cc59157da47b1f7dd079a512b371e3_prof);

        
        $__internal_fa4f040fbf20d24c54815f20947b61b0ccecb229f6c7caf30bd58028bbfd5d19->leave($__internal_fa4f040fbf20d24c54815f20947b61b0ccecb229f6c7caf30bd58028bbfd5d19_prof);

    }

    // line 2
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_6c7b1b062f32340c85618986d88f08bf54cd1d11b836e7f412824a6e680e23dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c7b1b062f32340c85618986d88f08bf54cd1d11b836e7f412824a6e680e23dc->enter($__internal_6c7b1b062f32340c85618986d88f08bf54cd1d11b836e7f412824a6e680e23dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_a1185328e40456832ce73c6a2994b85ef3e7403d730cc4c182ef43f1e5bcd534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1185328e40456832ce73c6a2994b85ef3e7403d730cc4c182ef43f1e5bcd534->enter($__internal_a1185328e40456832ce73c6a2994b85ef3e7403d730cc4c182ef43f1e5bcd534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 3
        echo "    <h2>Modifier</h2>
    ";
        // line 4
        $this->loadTemplate("blog/formulaire.html.twig", ":blog:modifier.html.twig", 4)->display($context);
        
        $__internal_a1185328e40456832ce73c6a2994b85ef3e7403d730cc4c182ef43f1e5bcd534->leave($__internal_a1185328e40456832ce73c6a2994b85ef3e7403d730cc4c182ef43f1e5bcd534_prof);

        
        $__internal_6c7b1b062f32340c85618986d88f08bf54cd1d11b836e7f412824a6e680e23dc->leave($__internal_6c7b1b062f32340c85618986d88f08bf54cd1d11b836e7f412824a6e680e23dc_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d499685d3271c39ff3bca8db69bc11e8a6809b6df7058d6a7eb857557946672a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d499685d3271c39ff3bca8db69bc11e8a6809b6df7058d6a7eb857557946672a->enter($__internal_d499685d3271c39ff3bca8db69bc11e8a6809b6df7058d6a7eb857557946672a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_020327e7d9f8102fd0f5fd13aa6e2080b18a1bdb6af4b1e2ba0e934d875fa506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_020327e7d9f8102fd0f5fd13aa6e2080b18a1bdb6af4b1e2ba0e934d875fa506->enter($__internal_020327e7d9f8102fd0f5fd13aa6e2080b18a1bdb6af4b1e2ba0e934d875fa506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
        
        $__internal_020327e7d9f8102fd0f5fd13aa6e2080b18a1bdb6af4b1e2ba0e934d875fa506->leave($__internal_020327e7d9f8102fd0f5fd13aa6e2080b18a1bdb6af4b1e2ba0e934d875fa506_prof);

        
        $__internal_d499685d3271c39ff3bca8db69bc11e8a6809b6df7058d6a7eb857557946672a->leave($__internal_d499685d3271c39ff3bca8db69bc11e8a6809b6df7058d6a7eb857557946672a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b0f96b87acfaeae2fd974f24a15d002566a2268f56ecea4b28209ee49b52301f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0f96b87acfaeae2fd974f24a15d002566a2268f56ecea4b28209ee49b52301f->enter($__internal_b0f96b87acfaeae2fd974f24a15d002566a2268f56ecea4b28209ee49b52301f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d4b5be36af4b6a67a0b2b3440729679ef093cb94be9cc360021a17190db44239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4b5be36af4b6a67a0b2b3440729679ef093cb94be9cc360021a17190db44239->enter($__internal_d4b5be36af4b6a67a0b2b3440729679ef093cb94be9cc360021a17190db44239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script>
  \$( function() {
    \$( \".js-datepicker\" ).datepicker({dateFormat:\"yy-mm-dd\"});
  } );
  </script>
  <script src=\"//cdn.ckeditor.com/4.7.0/basic/ckeditor.js\"></script>
";
        
        $__internal_d4b5be36af4b6a67a0b2b3440729679ef093cb94be9cc360021a17190db44239->leave($__internal_d4b5be36af4b6a67a0b2b3440729679ef093cb94be9cc360021a17190db44239_prof);

        
        $__internal_b0f96b87acfaeae2fd974f24a15d002566a2268f56ecea4b28209ee49b52301f->leave($__internal_b0f96b87acfaeae2fd974f24a15d002566a2268f56ecea4b28209ee49b52301f_prof);

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
