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
        $__internal_9861cf5ce1351a07405acde5c491428aedbbd22785d11abd647732b914ebaf01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9861cf5ce1351a07405acde5c491428aedbbd22785d11abd647732b914ebaf01->enter($__internal_9861cf5ce1351a07405acde5c491428aedbbd22785d11abd647732b914ebaf01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:modifier.html.twig"));

        $__internal_d266a69cf8d15f833a4fa5e6ad38e1b33690a24cf265072d0f7f5977287d103e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d266a69cf8d15f833a4fa5e6ad38e1b33690a24cf265072d0f7f5977287d103e->enter($__internal_d266a69cf8d15f833a4fa5e6ad38e1b33690a24cf265072d0f7f5977287d103e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9861cf5ce1351a07405acde5c491428aedbbd22785d11abd647732b914ebaf01->leave($__internal_9861cf5ce1351a07405acde5c491428aedbbd22785d11abd647732b914ebaf01_prof);

        
        $__internal_d266a69cf8d15f833a4fa5e6ad38e1b33690a24cf265072d0f7f5977287d103e->leave($__internal_d266a69cf8d15f833a4fa5e6ad38e1b33690a24cf265072d0f7f5977287d103e_prof);

    }

    // line 2
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_a42a484ada79f4fb9f3c2ad1eefefd27769ca5747c6bbd555e5adc038c09504c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a42a484ada79f4fb9f3c2ad1eefefd27769ca5747c6bbd555e5adc038c09504c->enter($__internal_a42a484ada79f4fb9f3c2ad1eefefd27769ca5747c6bbd555e5adc038c09504c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_e2efea908709a72077b0b08bbb30336c614593b8b8b7d81cb3f8fc0167517d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2efea908709a72077b0b08bbb30336c614593b8b8b7d81cb3f8fc0167517d6e->enter($__internal_e2efea908709a72077b0b08bbb30336c614593b8b8b7d81cb3f8fc0167517d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 3
        echo "    <h2>Modifier</h2>
    ";
        // line 4
        $this->loadTemplate("blog/formulaire.html.twig", ":blog:modifier.html.twig", 4)->display($context);
        
        $__internal_e2efea908709a72077b0b08bbb30336c614593b8b8b7d81cb3f8fc0167517d6e->leave($__internal_e2efea908709a72077b0b08bbb30336c614593b8b8b7d81cb3f8fc0167517d6e_prof);

        
        $__internal_a42a484ada79f4fb9f3c2ad1eefefd27769ca5747c6bbd555e5adc038c09504c->leave($__internal_a42a484ada79f4fb9f3c2ad1eefefd27769ca5747c6bbd555e5adc038c09504c_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2bc6a900d9909d50b3c184900ac14e5da426ae355d984dcdf2946eb92740bd9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bc6a900d9909d50b3c184900ac14e5da426ae355d984dcdf2946eb92740bd9f->enter($__internal_2bc6a900d9909d50b3c184900ac14e5da426ae355d984dcdf2946eb92740bd9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_24e4833350b4e61ff08daee1b4e3dc875b42ed6368703cd1dddaa3399005548a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24e4833350b4e61ff08daee1b4e3dc875b42ed6368703cd1dddaa3399005548a->enter($__internal_24e4833350b4e61ff08daee1b4e3dc875b42ed6368703cd1dddaa3399005548a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
        
        $__internal_24e4833350b4e61ff08daee1b4e3dc875b42ed6368703cd1dddaa3399005548a->leave($__internal_24e4833350b4e61ff08daee1b4e3dc875b42ed6368703cd1dddaa3399005548a_prof);

        
        $__internal_2bc6a900d9909d50b3c184900ac14e5da426ae355d984dcdf2946eb92740bd9f->leave($__internal_2bc6a900d9909d50b3c184900ac14e5da426ae355d984dcdf2946eb92740bd9f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_761cff80725508c6354ae278f87479c16b9d9845842f92eb66331e8190e682e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_761cff80725508c6354ae278f87479c16b9d9845842f92eb66331e8190e682e2->enter($__internal_761cff80725508c6354ae278f87479c16b9d9845842f92eb66331e8190e682e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bc44973de4e0c28925b9ed783dc807b8545abc3615e6b9111365acbe5022b632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc44973de4e0c28925b9ed783dc807b8545abc3615e6b9111365acbe5022b632->enter($__internal_bc44973de4e0c28925b9ed783dc807b8545abc3615e6b9111365acbe5022b632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script>
  \$( function() {
    \$( \".js-datepicker\" ).datepicker({dateFormat:\"yy-mm-dd\"});
  } );
  </script>
  <script src=\"//cdn.ckeditor.com/4.7.0/basic/ckeditor.js\"></script>
";
        
        $__internal_bc44973de4e0c28925b9ed783dc807b8545abc3615e6b9111365acbe5022b632->leave($__internal_bc44973de4e0c28925b9ed783dc807b8545abc3615e6b9111365acbe5022b632_prof);

        
        $__internal_761cff80725508c6354ae278f87479c16b9d9845842f92eb66331e8190e682e2->leave($__internal_761cff80725508c6354ae278f87479c16b9d9845842f92eb66331e8190e682e2_prof);

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
