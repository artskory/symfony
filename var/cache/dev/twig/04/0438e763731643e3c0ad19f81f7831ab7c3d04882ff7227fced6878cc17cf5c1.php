<?php

/* :blog:ajouter.html.twig */
class __TwigTemplate_4721f46c62d29e6e8977bdecbbd61d65d924ec6458331d5e5f3e43b5ebdea047 extends Twig_Template
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
        $__internal_43a6a260c328df9101a7995f3b846237185c44cca16a1edbe04d1ad6b391a82f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43a6a260c328df9101a7995f3b846237185c44cca16a1edbe04d1ad6b391a82f->enter($__internal_43a6a260c328df9101a7995f3b846237185c44cca16a1edbe04d1ad6b391a82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:ajouter.html.twig"));

        $__internal_7df2314cd4dca273c0429f037f1d581b0aaaca859a638e35d2bc1bf909e45486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df2314cd4dca273c0429f037f1d581b0aaaca859a638e35d2bc1bf909e45486->enter($__internal_7df2314cd4dca273c0429f037f1d581b0aaaca859a638e35d2bc1bf909e45486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43a6a260c328df9101a7995f3b846237185c44cca16a1edbe04d1ad6b391a82f->leave($__internal_43a6a260c328df9101a7995f3b846237185c44cca16a1edbe04d1ad6b391a82f_prof);

        
        $__internal_7df2314cd4dca273c0429f037f1d581b0aaaca859a638e35d2bc1bf909e45486->leave($__internal_7df2314cd4dca273c0429f037f1d581b0aaaca859a638e35d2bc1bf909e45486_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_eb239a5aacbcd50abe861225fd413369fd03dde30611aeeee0b1039bff3f7791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb239a5aacbcd50abe861225fd413369fd03dde30611aeeee0b1039bff3f7791->enter($__internal_eb239a5aacbcd50abe861225fd413369fd03dde30611aeeee0b1039bff3f7791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_485dc530f2881516ecd3048bad1681e03fda0c4ec56c436b41637ea4033f8492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_485dc530f2881516ecd3048bad1681e03fda0c4ec56c436b41637ea4033f8492->enter($__internal_485dc530f2881516ecd3048bad1681e03fda0c4ec56c436b41637ea4033f8492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 4
        echo "    <h2>Ajouter</h2>
    ";
        // line 5
        $this->loadTemplate("blog/formulaire.html.twig", ":blog:ajouter.html.twig", 5)->display($context);
        
        $__internal_485dc530f2881516ecd3048bad1681e03fda0c4ec56c436b41637ea4033f8492->leave($__internal_485dc530f2881516ecd3048bad1681e03fda0c4ec56c436b41637ea4033f8492_prof);

        
        $__internal_eb239a5aacbcd50abe861225fd413369fd03dde30611aeeee0b1039bff3f7791->leave($__internal_eb239a5aacbcd50abe861225fd413369fd03dde30611aeeee0b1039bff3f7791_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e3aaa876544ab99eee7d3540a25ab387aecdc467c6c2d246a380e72237d39201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3aaa876544ab99eee7d3540a25ab387aecdc467c6c2d246a380e72237d39201->enter($__internal_e3aaa876544ab99eee7d3540a25ab387aecdc467c6c2d246a380e72237d39201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3ea8666836f4eec6ae4e305878a615aab5a061813c424e676408d98c9a6639b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea8666836f4eec6ae4e305878a615aab5a061813c424e676408d98c9a6639b8->enter($__internal_3ea8666836f4eec6ae4e305878a615aab5a061813c424e676408d98c9a6639b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
        
        $__internal_3ea8666836f4eec6ae4e305878a615aab5a061813c424e676408d98c9a6639b8->leave($__internal_3ea8666836f4eec6ae4e305878a615aab5a061813c424e676408d98c9a6639b8_prof);

        
        $__internal_e3aaa876544ab99eee7d3540a25ab387aecdc467c6c2d246a380e72237d39201->leave($__internal_e3aaa876544ab99eee7d3540a25ab387aecdc467c6c2d246a380e72237d39201_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e6a4f7343287b4000ad8adbf22e258882030b15df82b53e17fde78936b610d7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6a4f7343287b4000ad8adbf22e258882030b15df82b53e17fde78936b610d7a->enter($__internal_e6a4f7343287b4000ad8adbf22e258882030b15df82b53e17fde78936b610d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_75182514c84973c058cee96fb4fbf06e3d57df0cca8eb1461fbd273f52dbc814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75182514c84973c058cee96fb4fbf06e3d57df0cca8eb1461fbd273f52dbc814->enter($__internal_75182514c84973c058cee96fb4fbf06e3d57df0cca8eb1461fbd273f52dbc814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script>
  \$( function() {
    \$( \".js-datepicker\" ).datepicker({dateFormat:\"yy-mm-dd\"});
  } );
  </script>
  <script src=\"//cdn.ckeditor.com/4.7.0/basic/ckeditor.js\"></script>
";
        
        $__internal_75182514c84973c058cee96fb4fbf06e3d57df0cca8eb1461fbd273f52dbc814->leave($__internal_75182514c84973c058cee96fb4fbf06e3d57df0cca8eb1461fbd273f52dbc814_prof);

        
        $__internal_e6a4f7343287b4000ad8adbf22e258882030b15df82b53e17fde78936b610d7a->leave($__internal_e6a4f7343287b4000ad8adbf22e258882030b15df82b53e17fde78936b610d7a_prof);

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
