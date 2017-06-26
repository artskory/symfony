<?php

/* blog/ajouter.html.twig */
class __TwigTemplate_d5ca7beaa38454ad1d83d118016bf36aafb274b2e473e214e0062e0c462f22b0 extends Twig_Template
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
        $__internal_b67d625e59fc568e29c37ca76276518af54f7b122253ac928c23a481b0c53c70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b67d625e59fc568e29c37ca76276518af54f7b122253ac928c23a481b0c53c70->enter($__internal_b67d625e59fc568e29c37ca76276518af54f7b122253ac928c23a481b0c53c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/ajouter.html.twig"));

        $__internal_01bfee8bd59fb45e0e3e3ed7ba256e9cd573272fac9767f54161a0ab4458702a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01bfee8bd59fb45e0e3e3ed7ba256e9cd573272fac9767f54161a0ab4458702a->enter($__internal_01bfee8bd59fb45e0e3e3ed7ba256e9cd573272fac9767f54161a0ab4458702a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b67d625e59fc568e29c37ca76276518af54f7b122253ac928c23a481b0c53c70->leave($__internal_b67d625e59fc568e29c37ca76276518af54f7b122253ac928c23a481b0c53c70_prof);

        
        $__internal_01bfee8bd59fb45e0e3e3ed7ba256e9cd573272fac9767f54161a0ab4458702a->leave($__internal_01bfee8bd59fb45e0e3e3ed7ba256e9cd573272fac9767f54161a0ab4458702a_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_90565e29d4d06e28cb65cfe8bf3c399925fed8f6972e19b46b56ab8f701ebfd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90565e29d4d06e28cb65cfe8bf3c399925fed8f6972e19b46b56ab8f701ebfd1->enter($__internal_90565e29d4d06e28cb65cfe8bf3c399925fed8f6972e19b46b56ab8f701ebfd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_be19081600d1902f816fe466db0d0ff27652adf241e32263e7ac8851826e36a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be19081600d1902f816fe466db0d0ff27652adf241e32263e7ac8851826e36a0->enter($__internal_be19081600d1902f816fe466db0d0ff27652adf241e32263e7ac8851826e36a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 4
        echo "    <h2>Ajouter</h2>
    ";
        // line 5
        $this->loadTemplate("blog/formulaire.html.twig", "blog/ajouter.html.twig", 5)->display($context);
        
        $__internal_be19081600d1902f816fe466db0d0ff27652adf241e32263e7ac8851826e36a0->leave($__internal_be19081600d1902f816fe466db0d0ff27652adf241e32263e7ac8851826e36a0_prof);

        
        $__internal_90565e29d4d06e28cb65cfe8bf3c399925fed8f6972e19b46b56ab8f701ebfd1->leave($__internal_90565e29d4d06e28cb65cfe8bf3c399925fed8f6972e19b46b56ab8f701ebfd1_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_69a4a86476f9c688a4043f7250ea6a1e528c92685eba9e55f782bec1162fad6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69a4a86476f9c688a4043f7250ea6a1e528c92685eba9e55f782bec1162fad6e->enter($__internal_69a4a86476f9c688a4043f7250ea6a1e528c92685eba9e55f782bec1162fad6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0c6e79658caa027f4483ae5de3710f7c34803b3763239e05ea93ac3095b3e5e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c6e79658caa027f4483ae5de3710f7c34803b3763239e05ea93ac3095b3e5e1->enter($__internal_0c6e79658caa027f4483ae5de3710f7c34803b3763239e05ea93ac3095b3e5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
        
        $__internal_0c6e79658caa027f4483ae5de3710f7c34803b3763239e05ea93ac3095b3e5e1->leave($__internal_0c6e79658caa027f4483ae5de3710f7c34803b3763239e05ea93ac3095b3e5e1_prof);

        
        $__internal_69a4a86476f9c688a4043f7250ea6a1e528c92685eba9e55f782bec1162fad6e->leave($__internal_69a4a86476f9c688a4043f7250ea6a1e528c92685eba9e55f782bec1162fad6e_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4a9f18c087ef2da72cbe9f6348b66368c5fa794dce57a03a87a9f295a6668151 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a9f18c087ef2da72cbe9f6348b66368c5fa794dce57a03a87a9f295a6668151->enter($__internal_4a9f18c087ef2da72cbe9f6348b66368c5fa794dce57a03a87a9f295a6668151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_690980ef8ad11d32944a525efbde421de89602cfac8ab30340facd5266577d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_690980ef8ad11d32944a525efbde421de89602cfac8ab30340facd5266577d43->enter($__internal_690980ef8ad11d32944a525efbde421de89602cfac8ab30340facd5266577d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script>
  \$( function() {
    \$( \".js-datepicker\" ).datepicker({dateFormat:\"yy-mm-dd\"});
  } );
  </script>
  <script src=\"//cdn.ckeditor.com/4.7.0/basic/ckeditor.js\"></script>
";
        
        $__internal_690980ef8ad11d32944a525efbde421de89602cfac8ab30340facd5266577d43->leave($__internal_690980ef8ad11d32944a525efbde421de89602cfac8ab30340facd5266577d43_prof);

        
        $__internal_4a9f18c087ef2da72cbe9f6348b66368c5fa794dce57a03a87a9f295a6668151->leave($__internal_4a9f18c087ef2da72cbe9f6348b66368c5fa794dce57a03a87a9f295a6668151_prof);

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
