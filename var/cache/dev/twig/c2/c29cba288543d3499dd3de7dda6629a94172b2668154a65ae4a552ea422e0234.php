<?php

/* blog/ajouter.html.twig */
class __TwigTemplate_f4f49ba56e91d361e06280e04844584e02a968bef24411de61a7bd6dc2a1ff6d extends Twig_Template
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
        $__internal_2cc200598f05668a9a0fdd152bd2bf4f9a64d6ea1975fa13eba5b9fe48dce105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cc200598f05668a9a0fdd152bd2bf4f9a64d6ea1975fa13eba5b9fe48dce105->enter($__internal_2cc200598f05668a9a0fdd152bd2bf4f9a64d6ea1975fa13eba5b9fe48dce105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/ajouter.html.twig"));

        $__internal_166de93d51aa3f316c2289463863af8feec4bb9da5357eb7eabddcf17263181c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_166de93d51aa3f316c2289463863af8feec4bb9da5357eb7eabddcf17263181c->enter($__internal_166de93d51aa3f316c2289463863af8feec4bb9da5357eb7eabddcf17263181c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cc200598f05668a9a0fdd152bd2bf4f9a64d6ea1975fa13eba5b9fe48dce105->leave($__internal_2cc200598f05668a9a0fdd152bd2bf4f9a64d6ea1975fa13eba5b9fe48dce105_prof);

        
        $__internal_166de93d51aa3f316c2289463863af8feec4bb9da5357eb7eabddcf17263181c->leave($__internal_166de93d51aa3f316c2289463863af8feec4bb9da5357eb7eabddcf17263181c_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_ad1a37a8bf38e742f6ec3c29b0f89f2e4e6bd742795e9eba81829c404f7c560e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad1a37a8bf38e742f6ec3c29b0f89f2e4e6bd742795e9eba81829c404f7c560e->enter($__internal_ad1a37a8bf38e742f6ec3c29b0f89f2e4e6bd742795e9eba81829c404f7c560e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_4c50c0e0f1b929c1cbf126daa591722ddb3b518cdecea78e2398f4d7ebac5927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c50c0e0f1b929c1cbf126daa591722ddb3b518cdecea78e2398f4d7ebac5927->enter($__internal_4c50c0e0f1b929c1cbf126daa591722ddb3b518cdecea78e2398f4d7ebac5927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 4
        echo "    <h2>Ajouter</h2>
    ";
        // line 5
        $this->loadTemplate("blog/formulaire.html.twig", "blog/ajouter.html.twig", 5)->display($context);
        
        $__internal_4c50c0e0f1b929c1cbf126daa591722ddb3b518cdecea78e2398f4d7ebac5927->leave($__internal_4c50c0e0f1b929c1cbf126daa591722ddb3b518cdecea78e2398f4d7ebac5927_prof);

        
        $__internal_ad1a37a8bf38e742f6ec3c29b0f89f2e4e6bd742795e9eba81829c404f7c560e->leave($__internal_ad1a37a8bf38e742f6ec3c29b0f89f2e4e6bd742795e9eba81829c404f7c560e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bdd42fa9269dc8eae9cacc51fd2da0f02bf59e3023f92979def528e73f4a7760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdd42fa9269dc8eae9cacc51fd2da0f02bf59e3023f92979def528e73f4a7760->enter($__internal_bdd42fa9269dc8eae9cacc51fd2da0f02bf59e3023f92979def528e73f4a7760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a9122c58485a092ab1883cf781f44b982b2c369f2097fc9f44a7d846594fdb56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9122c58485a092ab1883cf781f44b982b2c369f2097fc9f44a7d846594fdb56->enter($__internal_a9122c58485a092ab1883cf781f44b982b2c369f2097fc9f44a7d846594fdb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
        
        $__internal_a9122c58485a092ab1883cf781f44b982b2c369f2097fc9f44a7d846594fdb56->leave($__internal_a9122c58485a092ab1883cf781f44b982b2c369f2097fc9f44a7d846594fdb56_prof);

        
        $__internal_bdd42fa9269dc8eae9cacc51fd2da0f02bf59e3023f92979def528e73f4a7760->leave($__internal_bdd42fa9269dc8eae9cacc51fd2da0f02bf59e3023f92979def528e73f4a7760_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_02b10312a1ad975c2ceeba0d794090eb57a5bc8aaa19f8becddfdfba205935b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02b10312a1ad975c2ceeba0d794090eb57a5bc8aaa19f8becddfdfba205935b3->enter($__internal_02b10312a1ad975c2ceeba0d794090eb57a5bc8aaa19f8becddfdfba205935b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_01be2bedd8490d73a109649b6ffcb5f091455c9d73fbb6b79c80ea13fa4ba703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01be2bedd8490d73a109649b6ffcb5f091455c9d73fbb6b79c80ea13fa4ba703->enter($__internal_01be2bedd8490d73a109649b6ffcb5f091455c9d73fbb6b79c80ea13fa4ba703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script>
  \$( function() {
    \$( \".js-datepicker\" ).datepicker({dateFormat:\"yy-mm-dd\"});
  } );
  </script>
  <script src=\"//cdn.ckeditor.com/4.7.0/basic/ckeditor.js\"></script>
";
        
        $__internal_01be2bedd8490d73a109649b6ffcb5f091455c9d73fbb6b79c80ea13fa4ba703->leave($__internal_01be2bedd8490d73a109649b6ffcb5f091455c9d73fbb6b79c80ea13fa4ba703_prof);

        
        $__internal_02b10312a1ad975c2ceeba0d794090eb57a5bc8aaa19f8becddfdfba205935b3->leave($__internal_02b10312a1ad975c2ceeba0d794090eb57a5bc8aaa19f8becddfdfba205935b3_prof);

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
