<?php

/* blog/modifier.html.twig */
class __TwigTemplate_242ec8204b5d0d239dda01279d36c5fb034bd20d3f9026a7291336c376195958 extends Twig_Template
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
        $__internal_bd11022ee835809200638c5e43fb638e5cac64e165669d13023ee1f8fe926b45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd11022ee835809200638c5e43fb638e5cac64e165669d13023ee1f8fe926b45->enter($__internal_bd11022ee835809200638c5e43fb638e5cac64e165669d13023ee1f8fe926b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/modifier.html.twig"));

        $__internal_33e397b980e44472481ec89f1d6e71e131d3c6b2121caf23ff583353f96071f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e397b980e44472481ec89f1d6e71e131d3c6b2121caf23ff583353f96071f9->enter($__internal_33e397b980e44472481ec89f1d6e71e131d3c6b2121caf23ff583353f96071f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd11022ee835809200638c5e43fb638e5cac64e165669d13023ee1f8fe926b45->leave($__internal_bd11022ee835809200638c5e43fb638e5cac64e165669d13023ee1f8fe926b45_prof);

        
        $__internal_33e397b980e44472481ec89f1d6e71e131d3c6b2121caf23ff583353f96071f9->leave($__internal_33e397b980e44472481ec89f1d6e71e131d3c6b2121caf23ff583353f96071f9_prof);

    }

    // line 2
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_dcebf182120ad2dba303a50e3598412ef6eb73d11ced76be91b2b5c901e216b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcebf182120ad2dba303a50e3598412ef6eb73d11ced76be91b2b5c901e216b8->enter($__internal_dcebf182120ad2dba303a50e3598412ef6eb73d11ced76be91b2b5c901e216b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_c3da5ca6bd9e2aae415b5da044859c8c46110b75660266441ddfe14bb16e1788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3da5ca6bd9e2aae415b5da044859c8c46110b75660266441ddfe14bb16e1788->enter($__internal_c3da5ca6bd9e2aae415b5da044859c8c46110b75660266441ddfe14bb16e1788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 3
        echo "    <h2>Modifier</h2>
    ";
        // line 4
        $this->loadTemplate("blog/formulaire.html.twig", "blog/modifier.html.twig", 4)->display($context);
        
        $__internal_c3da5ca6bd9e2aae415b5da044859c8c46110b75660266441ddfe14bb16e1788->leave($__internal_c3da5ca6bd9e2aae415b5da044859c8c46110b75660266441ddfe14bb16e1788_prof);

        
        $__internal_dcebf182120ad2dba303a50e3598412ef6eb73d11ced76be91b2b5c901e216b8->leave($__internal_dcebf182120ad2dba303a50e3598412ef6eb73d11ced76be91b2b5c901e216b8_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6c53c71332df7934e986649653c42bda60f47775eb7da2d7700d7aa4ba9d441f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c53c71332df7934e986649653c42bda60f47775eb7da2d7700d7aa4ba9d441f->enter($__internal_6c53c71332df7934e986649653c42bda60f47775eb7da2d7700d7aa4ba9d441f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_90310bfa66ffcdad401d8e82643f7820e86e4dacaae61ce4c1d7070c582c9477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90310bfa66ffcdad401d8e82643f7820e86e4dacaae61ce4c1d7070c582c9477->enter($__internal_90310bfa66ffcdad401d8e82643f7820e86e4dacaae61ce4c1d7070c582c9477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
        
        $__internal_90310bfa66ffcdad401d8e82643f7820e86e4dacaae61ce4c1d7070c582c9477->leave($__internal_90310bfa66ffcdad401d8e82643f7820e86e4dacaae61ce4c1d7070c582c9477_prof);

        
        $__internal_6c53c71332df7934e986649653c42bda60f47775eb7da2d7700d7aa4ba9d441f->leave($__internal_6c53c71332df7934e986649653c42bda60f47775eb7da2d7700d7aa4ba9d441f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ee338cbcf258848aade8378912d9a7f9d0e87061febea4da253a6a37729b01bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee338cbcf258848aade8378912d9a7f9d0e87061febea4da253a6a37729b01bc->enter($__internal_ee338cbcf258848aade8378912d9a7f9d0e87061febea4da253a6a37729b01bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5b471cc5a66d226930b5d2427f11c9e0188a8007ef1783b46f966000795872c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b471cc5a66d226930b5d2427f11c9e0188a8007ef1783b46f966000795872c6->enter($__internal_5b471cc5a66d226930b5d2427f11c9e0188a8007ef1783b46f966000795872c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script>
  \$( function() {
    \$( \".js-datepicker\" ).datepicker({dateFormat:\"yy-mm-dd\"});
  } );
  </script>
  <script src=\"//cdn.ckeditor.com/4.7.0/basic/ckeditor.js\"></script>
";
        
        $__internal_5b471cc5a66d226930b5d2427f11c9e0188a8007ef1783b46f966000795872c6->leave($__internal_5b471cc5a66d226930b5d2427f11c9e0188a8007ef1783b46f966000795872c6_prof);

        
        $__internal_ee338cbcf258848aade8378912d9a7f9d0e87061febea4da253a6a37729b01bc->leave($__internal_ee338cbcf258848aade8378912d9a7f9d0e87061febea4da253a6a37729b01bc_prof);

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
