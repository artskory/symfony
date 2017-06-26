<?php

/* :blog:ajouter.html.twig */
class __TwigTemplate_d11fce77b0c88b5e08887bfec47c41323602ad1186ad1a6d4eb200f0e2c160f0 extends Twig_Template
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
        $__internal_1ffecd25320176c3c7af0a1efb3363acda69f6ebc3065918e31878c6cc95f3f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ffecd25320176c3c7af0a1efb3363acda69f6ebc3065918e31878c6cc95f3f1->enter($__internal_1ffecd25320176c3c7af0a1efb3363acda69f6ebc3065918e31878c6cc95f3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:ajouter.html.twig"));

        $__internal_752fb932d62b49237f2d7ea82d0b2ab0c84ab668904182c987a376d90d4e7e69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_752fb932d62b49237f2d7ea82d0b2ab0c84ab668904182c987a376d90d4e7e69->enter($__internal_752fb932d62b49237f2d7ea82d0b2ab0c84ab668904182c987a376d90d4e7e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ffecd25320176c3c7af0a1efb3363acda69f6ebc3065918e31878c6cc95f3f1->leave($__internal_1ffecd25320176c3c7af0a1efb3363acda69f6ebc3065918e31878c6cc95f3f1_prof);

        
        $__internal_752fb932d62b49237f2d7ea82d0b2ab0c84ab668904182c987a376d90d4e7e69->leave($__internal_752fb932d62b49237f2d7ea82d0b2ab0c84ab668904182c987a376d90d4e7e69_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_1c5c81175ec83d05f44345c1745833bcc6bdac3d288621c43f6a20e591f7576b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c5c81175ec83d05f44345c1745833bcc6bdac3d288621c43f6a20e591f7576b->enter($__internal_1c5c81175ec83d05f44345c1745833bcc6bdac3d288621c43f6a20e591f7576b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_be60d3a4196ef43e0cbacbd22f2a60e7d95fe36521be6f7c86dbcc64fe9f686a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be60d3a4196ef43e0cbacbd22f2a60e7d95fe36521be6f7c86dbcc64fe9f686a->enter($__internal_be60d3a4196ef43e0cbacbd22f2a60e7d95fe36521be6f7c86dbcc64fe9f686a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 4
        echo "    <h2>Ajouter</h2>
    ";
        // line 5
        $this->loadTemplate("blog/formulaire.html.twig", ":blog:ajouter.html.twig", 5)->display($context);
        
        $__internal_be60d3a4196ef43e0cbacbd22f2a60e7d95fe36521be6f7c86dbcc64fe9f686a->leave($__internal_be60d3a4196ef43e0cbacbd22f2a60e7d95fe36521be6f7c86dbcc64fe9f686a_prof);

        
        $__internal_1c5c81175ec83d05f44345c1745833bcc6bdac3d288621c43f6a20e591f7576b->leave($__internal_1c5c81175ec83d05f44345c1745833bcc6bdac3d288621c43f6a20e591f7576b_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2c18414fc3277ad412f2fd62fb014cd608e6954933dcb731c578965c059375eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c18414fc3277ad412f2fd62fb014cd608e6954933dcb731c578965c059375eb->enter($__internal_2c18414fc3277ad412f2fd62fb014cd608e6954933dcb731c578965c059375eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_07a345d36fe31c1e40b48cffbac9aeb6a1a2b1336ac66374ec78a0c5b518e98c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07a345d36fe31c1e40b48cffbac9aeb6a1a2b1336ac66374ec78a0c5b518e98c->enter($__internal_07a345d36fe31c1e40b48cffbac9aeb6a1a2b1336ac66374ec78a0c5b518e98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
        
        $__internal_07a345d36fe31c1e40b48cffbac9aeb6a1a2b1336ac66374ec78a0c5b518e98c->leave($__internal_07a345d36fe31c1e40b48cffbac9aeb6a1a2b1336ac66374ec78a0c5b518e98c_prof);

        
        $__internal_2c18414fc3277ad412f2fd62fb014cd608e6954933dcb731c578965c059375eb->leave($__internal_2c18414fc3277ad412f2fd62fb014cd608e6954933dcb731c578965c059375eb_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d6c574ae271bbd3148f62dbf71c80d257ac9bb3a63beb660018e26c0d81ae1c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6c574ae271bbd3148f62dbf71c80d257ac9bb3a63beb660018e26c0d81ae1c1->enter($__internal_d6c574ae271bbd3148f62dbf71c80d257ac9bb3a63beb660018e26c0d81ae1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ea73e1349be1914938fb3fc9d8c2f349a0b9ccaff83e65ec64bfbdfa9d2e05f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea73e1349be1914938fb3fc9d8c2f349a0b9ccaff83e65ec64bfbdfa9d2e05f3->enter($__internal_ea73e1349be1914938fb3fc9d8c2f349a0b9ccaff83e65ec64bfbdfa9d2e05f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script>
  \$( function() {
    \$( \".js-datepicker\" ).datepicker({dateFormat:\"yy-mm-dd\"});
  } );
  </script>
  <script src=\"//cdn.ckeditor.com/4.7.0/basic/ckeditor.js\"></script>
";
        
        $__internal_ea73e1349be1914938fb3fc9d8c2f349a0b9ccaff83e65ec64bfbdfa9d2e05f3->leave($__internal_ea73e1349be1914938fb3fc9d8c2f349a0b9ccaff83e65ec64bfbdfa9d2e05f3_prof);

        
        $__internal_d6c574ae271bbd3148f62dbf71c80d257ac9bb3a63beb660018e26c0d81ae1c1->leave($__internal_d6c574ae271bbd3148f62dbf71c80d257ac9bb3a63beb660018e26c0d81ae1c1_prof);

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
