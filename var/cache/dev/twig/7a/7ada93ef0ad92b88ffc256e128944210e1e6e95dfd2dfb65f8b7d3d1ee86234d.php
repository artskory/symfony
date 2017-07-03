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
        $__internal_103fb840bc6e667858287c63bbbfcebc1ee6a9fe9fd9c3f50daddd1174532cec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_103fb840bc6e667858287c63bbbfcebc1ee6a9fe9fd9c3f50daddd1174532cec->enter($__internal_103fb840bc6e667858287c63bbbfcebc1ee6a9fe9fd9c3f50daddd1174532cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/ajouter.html.twig"));

        $__internal_e85b389d62f32e86500a515ea661a8356079945a3296a08a2e60bd60c04901f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e85b389d62f32e86500a515ea661a8356079945a3296a08a2e60bd60c04901f5->enter($__internal_e85b389d62f32e86500a515ea661a8356079945a3296a08a2e60bd60c04901f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_103fb840bc6e667858287c63bbbfcebc1ee6a9fe9fd9c3f50daddd1174532cec->leave($__internal_103fb840bc6e667858287c63bbbfcebc1ee6a9fe9fd9c3f50daddd1174532cec_prof);

        
        $__internal_e85b389d62f32e86500a515ea661a8356079945a3296a08a2e60bd60c04901f5->leave($__internal_e85b389d62f32e86500a515ea661a8356079945a3296a08a2e60bd60c04901f5_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_0070a9a2ac99ed9f14cc19dddb2284701e7bd4d124992c837ff1d1d117e8c878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0070a9a2ac99ed9f14cc19dddb2284701e7bd4d124992c837ff1d1d117e8c878->enter($__internal_0070a9a2ac99ed9f14cc19dddb2284701e7bd4d124992c837ff1d1d117e8c878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_9958d5aa011d0d534e9f6bc674e0081813ca3aabda89720627f7fc2f9e9cd9ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9958d5aa011d0d534e9f6bc674e0081813ca3aabda89720627f7fc2f9e9cd9ed->enter($__internal_9958d5aa011d0d534e9f6bc674e0081813ca3aabda89720627f7fc2f9e9cd9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 4
        echo "    <h2>Ajouter</h2>
    ";
        // line 5
        $this->loadTemplate("blog/formulaire.html.twig", "blog/ajouter.html.twig", 5)->display($context);
        
        $__internal_9958d5aa011d0d534e9f6bc674e0081813ca3aabda89720627f7fc2f9e9cd9ed->leave($__internal_9958d5aa011d0d534e9f6bc674e0081813ca3aabda89720627f7fc2f9e9cd9ed_prof);

        
        $__internal_0070a9a2ac99ed9f14cc19dddb2284701e7bd4d124992c837ff1d1d117e8c878->leave($__internal_0070a9a2ac99ed9f14cc19dddb2284701e7bd4d124992c837ff1d1d117e8c878_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_357b20dfd3d37dd89a7c6094842275f11393e7ba067b9f9e12fbcfd95590c491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_357b20dfd3d37dd89a7c6094842275f11393e7ba067b9f9e12fbcfd95590c491->enter($__internal_357b20dfd3d37dd89a7c6094842275f11393e7ba067b9f9e12fbcfd95590c491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f30b5fe970244dff0a1a0e8b7324499a4bebcc8adc47e553fe67c805b65dbf89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f30b5fe970244dff0a1a0e8b7324499a4bebcc8adc47e553fe67c805b65dbf89->enter($__internal_f30b5fe970244dff0a1a0e8b7324499a4bebcc8adc47e553fe67c805b65dbf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
        
        $__internal_f30b5fe970244dff0a1a0e8b7324499a4bebcc8adc47e553fe67c805b65dbf89->leave($__internal_f30b5fe970244dff0a1a0e8b7324499a4bebcc8adc47e553fe67c805b65dbf89_prof);

        
        $__internal_357b20dfd3d37dd89a7c6094842275f11393e7ba067b9f9e12fbcfd95590c491->leave($__internal_357b20dfd3d37dd89a7c6094842275f11393e7ba067b9f9e12fbcfd95590c491_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cb126763ba32d806ecd8f6bf7a2c8939c4d8aabb1eacc98442ea33e0374cead9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb126763ba32d806ecd8f6bf7a2c8939c4d8aabb1eacc98442ea33e0374cead9->enter($__internal_cb126763ba32d806ecd8f6bf7a2c8939c4d8aabb1eacc98442ea33e0374cead9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cd07fde259b81077cbb3bd763aa1969d3ac31eba1d3a68f92512c24fa4745ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd07fde259b81077cbb3bd763aa1969d3ac31eba1d3a68f92512c24fa4745ba3->enter($__internal_cd07fde259b81077cbb3bd763aa1969d3ac31eba1d3a68f92512c24fa4745ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script>
  \$( function() {
    \$( \".js-datepicker\" ).datepicker({dateFormat:\"yy-mm-dd\"});
  } );
  </script>
  <script src=\"//cdn.ckeditor.com/4.7.0/basic/ckeditor.js\"></script>
";
        
        $__internal_cd07fde259b81077cbb3bd763aa1969d3ac31eba1d3a68f92512c24fa4745ba3->leave($__internal_cd07fde259b81077cbb3bd763aa1969d3ac31eba1d3a68f92512c24fa4745ba3_prof);

        
        $__internal_cb126763ba32d806ecd8f6bf7a2c8939c4d8aabb1eacc98442ea33e0374cead9->leave($__internal_cb126763ba32d806ecd8f6bf7a2c8939c4d8aabb1eacc98442ea33e0374cead9_prof);

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
