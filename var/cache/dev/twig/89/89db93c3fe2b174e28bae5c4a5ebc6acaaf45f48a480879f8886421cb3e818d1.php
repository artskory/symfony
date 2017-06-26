<?php

/* blog/modifier.html.twig */
class __TwigTemplate_82a48da6ef46a3fcf1bee92fe399fdfbc737d7c9eb91b24dae8944bbc482e451 extends Twig_Template
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
        $__internal_819c9168adc29a2e06e512eeab8f3c5ce61f02007b4cb88924fc8910e9a90f90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_819c9168adc29a2e06e512eeab8f3c5ce61f02007b4cb88924fc8910e9a90f90->enter($__internal_819c9168adc29a2e06e512eeab8f3c5ce61f02007b4cb88924fc8910e9a90f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/modifier.html.twig"));

        $__internal_63908b4b0f7b0012d9721f9f3d021ca41358c522bb5487fc737ff7185bb723ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63908b4b0f7b0012d9721f9f3d021ca41358c522bb5487fc737ff7185bb723ca->enter($__internal_63908b4b0f7b0012d9721f9f3d021ca41358c522bb5487fc737ff7185bb723ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_819c9168adc29a2e06e512eeab8f3c5ce61f02007b4cb88924fc8910e9a90f90->leave($__internal_819c9168adc29a2e06e512eeab8f3c5ce61f02007b4cb88924fc8910e9a90f90_prof);

        
        $__internal_63908b4b0f7b0012d9721f9f3d021ca41358c522bb5487fc737ff7185bb723ca->leave($__internal_63908b4b0f7b0012d9721f9f3d021ca41358c522bb5487fc737ff7185bb723ca_prof);

    }

    // line 2
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_d8977cdf785f58d4af2d97aa00e08ea89487b4cd65aa4c6c046300c001bfe285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8977cdf785f58d4af2d97aa00e08ea89487b4cd65aa4c6c046300c001bfe285->enter($__internal_d8977cdf785f58d4af2d97aa00e08ea89487b4cd65aa4c6c046300c001bfe285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_a5c58a94ad53a0b4e7de08cfc22064b0e8ca4c1464dc7aff967311ef1d0b6dba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c58a94ad53a0b4e7de08cfc22064b0e8ca4c1464dc7aff967311ef1d0b6dba->enter($__internal_a5c58a94ad53a0b4e7de08cfc22064b0e8ca4c1464dc7aff967311ef1d0b6dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 3
        echo "    <h2>Modifier</h2>
    ";
        // line 4
        $this->loadTemplate("blog/formulaire.html.twig", "blog/modifier.html.twig", 4)->display($context);
        
        $__internal_a5c58a94ad53a0b4e7de08cfc22064b0e8ca4c1464dc7aff967311ef1d0b6dba->leave($__internal_a5c58a94ad53a0b4e7de08cfc22064b0e8ca4c1464dc7aff967311ef1d0b6dba_prof);

        
        $__internal_d8977cdf785f58d4af2d97aa00e08ea89487b4cd65aa4c6c046300c001bfe285->leave($__internal_d8977cdf785f58d4af2d97aa00e08ea89487b4cd65aa4c6c046300c001bfe285_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_01ab94727d7354a78ad9c0bb6a8c65040812401ba9bb064b30718b0f11e3bc09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01ab94727d7354a78ad9c0bb6a8c65040812401ba9bb064b30718b0f11e3bc09->enter($__internal_01ab94727d7354a78ad9c0bb6a8c65040812401ba9bb064b30718b0f11e3bc09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_da48fe7290fc1cfcea9cd9deccc3bcc3295cc2a046b5708fc1f21fc447b6980c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da48fe7290fc1cfcea9cd9deccc3bcc3295cc2a046b5708fc1f21fc447b6980c->enter($__internal_da48fe7290fc1cfcea9cd9deccc3bcc3295cc2a046b5708fc1f21fc447b6980c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
        
        $__internal_da48fe7290fc1cfcea9cd9deccc3bcc3295cc2a046b5708fc1f21fc447b6980c->leave($__internal_da48fe7290fc1cfcea9cd9deccc3bcc3295cc2a046b5708fc1f21fc447b6980c_prof);

        
        $__internal_01ab94727d7354a78ad9c0bb6a8c65040812401ba9bb064b30718b0f11e3bc09->leave($__internal_01ab94727d7354a78ad9c0bb6a8c65040812401ba9bb064b30718b0f11e3bc09_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_10b38684ddbc27a2f407759e0f6943a827686e0bd13cc787df27db627ff37ef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10b38684ddbc27a2f407759e0f6943a827686e0bd13cc787df27db627ff37ef2->enter($__internal_10b38684ddbc27a2f407759e0f6943a827686e0bd13cc787df27db627ff37ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5631a8c8a5105e009a2bb7fa4ce46bd5d1ce4b53248b3fe91f2808028aeb0098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5631a8c8a5105e009a2bb7fa4ce46bd5d1ce4b53248b3fe91f2808028aeb0098->enter($__internal_5631a8c8a5105e009a2bb7fa4ce46bd5d1ce4b53248b3fe91f2808028aeb0098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script>
  \$( function() {
    \$( \".js-datepicker\" ).datepicker({dateFormat:\"yy-mm-dd\"});
  } );
  </script>
  <script src=\"//cdn.ckeditor.com/4.7.0/basic/ckeditor.js\"></script>
";
        
        $__internal_5631a8c8a5105e009a2bb7fa4ce46bd5d1ce4b53248b3fe91f2808028aeb0098->leave($__internal_5631a8c8a5105e009a2bb7fa4ce46bd5d1ce4b53248b3fe91f2808028aeb0098_prof);

        
        $__internal_10b38684ddbc27a2f407759e0f6943a827686e0bd13cc787df27db627ff37ef2->leave($__internal_10b38684ddbc27a2f407759e0f6943a827686e0bd13cc787df27db627ff37ef2_prof);

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
