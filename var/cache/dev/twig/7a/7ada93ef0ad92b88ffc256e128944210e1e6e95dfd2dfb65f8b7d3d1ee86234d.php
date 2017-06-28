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
        $__internal_3adcea55674a862e9f748ffa3a722d92b41073fab414c09bea65cc5bc08c3bef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3adcea55674a862e9f748ffa3a722d92b41073fab414c09bea65cc5bc08c3bef->enter($__internal_3adcea55674a862e9f748ffa3a722d92b41073fab414c09bea65cc5bc08c3bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/ajouter.html.twig"));

        $__internal_90ae8c1c00d25739989947d820b476b5a14bfef56cd23ad464ee5ad75f7d09fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90ae8c1c00d25739989947d820b476b5a14bfef56cd23ad464ee5ad75f7d09fe->enter($__internal_90ae8c1c00d25739989947d820b476b5a14bfef56cd23ad464ee5ad75f7d09fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3adcea55674a862e9f748ffa3a722d92b41073fab414c09bea65cc5bc08c3bef->leave($__internal_3adcea55674a862e9f748ffa3a722d92b41073fab414c09bea65cc5bc08c3bef_prof);

        
        $__internal_90ae8c1c00d25739989947d820b476b5a14bfef56cd23ad464ee5ad75f7d09fe->leave($__internal_90ae8c1c00d25739989947d820b476b5a14bfef56cd23ad464ee5ad75f7d09fe_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_e1dc56a088b46200eff1bb6a0301376e5bcc6f8d8461bd3387ef1ced0daf1cdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1dc56a088b46200eff1bb6a0301376e5bcc6f8d8461bd3387ef1ced0daf1cdd->enter($__internal_e1dc56a088b46200eff1bb6a0301376e5bcc6f8d8461bd3387ef1ced0daf1cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_39a16a6f4a0b9257345c98794520c279ff33aa8d2259285a784cb9753407b293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a16a6f4a0b9257345c98794520c279ff33aa8d2259285a784cb9753407b293->enter($__internal_39a16a6f4a0b9257345c98794520c279ff33aa8d2259285a784cb9753407b293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 4
        echo "    <h2>Ajouter</h2>
    ";
        // line 5
        $this->loadTemplate("blog/formulaire.html.twig", "blog/ajouter.html.twig", 5)->display($context);
        
        $__internal_39a16a6f4a0b9257345c98794520c279ff33aa8d2259285a784cb9753407b293->leave($__internal_39a16a6f4a0b9257345c98794520c279ff33aa8d2259285a784cb9753407b293_prof);

        
        $__internal_e1dc56a088b46200eff1bb6a0301376e5bcc6f8d8461bd3387ef1ced0daf1cdd->leave($__internal_e1dc56a088b46200eff1bb6a0301376e5bcc6f8d8461bd3387ef1ced0daf1cdd_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0ef3a62ab117d04b15e79ea0b38d1a456e0110a59f8cfc75d1013e558558c750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ef3a62ab117d04b15e79ea0b38d1a456e0110a59f8cfc75d1013e558558c750->enter($__internal_0ef3a62ab117d04b15e79ea0b38d1a456e0110a59f8cfc75d1013e558558c750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0d29d22259fbf87dd979615a57320ff7ed469e1763f977d08e4a4b56337d911d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d29d22259fbf87dd979615a57320ff7ed469e1763f977d08e4a4b56337d911d->enter($__internal_0d29d22259fbf87dd979615a57320ff7ed469e1763f977d08e4a4b56337d911d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
        
        $__internal_0d29d22259fbf87dd979615a57320ff7ed469e1763f977d08e4a4b56337d911d->leave($__internal_0d29d22259fbf87dd979615a57320ff7ed469e1763f977d08e4a4b56337d911d_prof);

        
        $__internal_0ef3a62ab117d04b15e79ea0b38d1a456e0110a59f8cfc75d1013e558558c750->leave($__internal_0ef3a62ab117d04b15e79ea0b38d1a456e0110a59f8cfc75d1013e558558c750_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a6e8985f56ade675c27a5e3368fc5faf0b30165a28c2c2d8dede4cfbc2ecb5fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6e8985f56ade675c27a5e3368fc5faf0b30165a28c2c2d8dede4cfbc2ecb5fe->enter($__internal_a6e8985f56ade675c27a5e3368fc5faf0b30165a28c2c2d8dede4cfbc2ecb5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b6b33522ea842dbe05e8f6bda3b0d6129c3f3640ca041fe0dd431922d306c42e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6b33522ea842dbe05e8f6bda3b0d6129c3f3640ca041fe0dd431922d306c42e->enter($__internal_b6b33522ea842dbe05e8f6bda3b0d6129c3f3640ca041fe0dd431922d306c42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script>
  \$( function() {
    \$( \".js-datepicker\" ).datepicker({dateFormat:\"yy-mm-dd\"});
  } );
  </script>
  <script src=\"//cdn.ckeditor.com/4.7.0/basic/ckeditor.js\"></script>
";
        
        $__internal_b6b33522ea842dbe05e8f6bda3b0d6129c3f3640ca041fe0dd431922d306c42e->leave($__internal_b6b33522ea842dbe05e8f6bda3b0d6129c3f3640ca041fe0dd431922d306c42e_prof);

        
        $__internal_a6e8985f56ade675c27a5e3368fc5faf0b30165a28c2c2d8dede4cfbc2ecb5fe->leave($__internal_a6e8985f56ade675c27a5e3368fc5faf0b30165a28c2c2d8dede4cfbc2ecb5fe_prof);

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
