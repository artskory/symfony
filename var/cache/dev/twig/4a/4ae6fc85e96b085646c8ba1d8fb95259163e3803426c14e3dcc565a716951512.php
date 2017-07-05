<?php

/* blog/ajouter.html.twig */
class __TwigTemplate_30817cc01bd954f690b9f904a4ae6f00f52fcea6b8f963fc2c6556913a812d1d extends Twig_Template
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
        $__internal_309db5744217901523694e6ec1db44cfaa37840548bfb8c8fb9419ab21cada3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_309db5744217901523694e6ec1db44cfaa37840548bfb8c8fb9419ab21cada3f->enter($__internal_309db5744217901523694e6ec1db44cfaa37840548bfb8c8fb9419ab21cada3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/ajouter.html.twig"));

        $__internal_80d2bc931a12b51dc1039b6a9cae0073475e5fec443bbccb5c1388d5f5a64f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d2bc931a12b51dc1039b6a9cae0073475e5fec443bbccb5c1388d5f5a64f0e->enter($__internal_80d2bc931a12b51dc1039b6a9cae0073475e5fec443bbccb5c1388d5f5a64f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_309db5744217901523694e6ec1db44cfaa37840548bfb8c8fb9419ab21cada3f->leave($__internal_309db5744217901523694e6ec1db44cfaa37840548bfb8c8fb9419ab21cada3f_prof);

        
        $__internal_80d2bc931a12b51dc1039b6a9cae0073475e5fec443bbccb5c1388d5f5a64f0e->leave($__internal_80d2bc931a12b51dc1039b6a9cae0073475e5fec443bbccb5c1388d5f5a64f0e_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_be831fa44341faeaf60196b9f3182c4d53463994139b2028691ab335cc0fa55b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be831fa44341faeaf60196b9f3182c4d53463994139b2028691ab335cc0fa55b->enter($__internal_be831fa44341faeaf60196b9f3182c4d53463994139b2028691ab335cc0fa55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_9409f170470fdf7552f19d2045cd45528b89903c5bb59a07c6a44d370f922d41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9409f170470fdf7552f19d2045cd45528b89903c5bb59a07c6a44d370f922d41->enter($__internal_9409f170470fdf7552f19d2045cd45528b89903c5bb59a07c6a44d370f922d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 4
        echo "    <h2>Ajouter</h2>
    ";
        // line 5
        $this->loadTemplate("blog/formulaire.html.twig", "blog/ajouter.html.twig", 5)->display($context);
        
        $__internal_9409f170470fdf7552f19d2045cd45528b89903c5bb59a07c6a44d370f922d41->leave($__internal_9409f170470fdf7552f19d2045cd45528b89903c5bb59a07c6a44d370f922d41_prof);

        
        $__internal_be831fa44341faeaf60196b9f3182c4d53463994139b2028691ab335cc0fa55b->leave($__internal_be831fa44341faeaf60196b9f3182c4d53463994139b2028691ab335cc0fa55b_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fa74377c091dc1e85d103cf64df0fc71ea4d0a7528e6b47d03abdcfd79e012f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa74377c091dc1e85d103cf64df0fc71ea4d0a7528e6b47d03abdcfd79e012f9->enter($__internal_fa74377c091dc1e85d103cf64df0fc71ea4d0a7528e6b47d03abdcfd79e012f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fe5edb623db80ac2f397590d0c8dd55b90339b3ab461ea43b47487dc4159d225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe5edb623db80ac2f397590d0c8dd55b90339b3ab461ea43b47487dc4159d225->enter($__internal_fe5edb623db80ac2f397590d0c8dd55b90339b3ab461ea43b47487dc4159d225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
        
        $__internal_fe5edb623db80ac2f397590d0c8dd55b90339b3ab461ea43b47487dc4159d225->leave($__internal_fe5edb623db80ac2f397590d0c8dd55b90339b3ab461ea43b47487dc4159d225_prof);

        
        $__internal_fa74377c091dc1e85d103cf64df0fc71ea4d0a7528e6b47d03abdcfd79e012f9->leave($__internal_fa74377c091dc1e85d103cf64df0fc71ea4d0a7528e6b47d03abdcfd79e012f9_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_54ffc09bf4e39b3d4a338244a372cec190cb43c7aa10ee6b778bf81f89933a51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54ffc09bf4e39b3d4a338244a372cec190cb43c7aa10ee6b778bf81f89933a51->enter($__internal_54ffc09bf4e39b3d4a338244a372cec190cb43c7aa10ee6b778bf81f89933a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6146438510e1e1ccf68cfedd5fdead74be3d7e86d33d6585a744ebbfbfe005e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6146438510e1e1ccf68cfedd5fdead74be3d7e86d33d6585a744ebbfbfe005e3->enter($__internal_6146438510e1e1ccf68cfedd5fdead74be3d7e86d33d6585a744ebbfbfe005e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script>
  \$( function() {
    \$( \".js-datepicker\" ).datepicker({dateFormat:\"yy-mm-dd\"});
  } );
  </script>
  <script src=\"//cdn.ckeditor.com/4.7.0/basic/ckeditor.js\"></script>
";
        
        $__internal_6146438510e1e1ccf68cfedd5fdead74be3d7e86d33d6585a744ebbfbfe005e3->leave($__internal_6146438510e1e1ccf68cfedd5fdead74be3d7e86d33d6585a744ebbfbfe005e3_prof);

        
        $__internal_54ffc09bf4e39b3d4a338244a372cec190cb43c7aa10ee6b778bf81f89933a51->leave($__internal_54ffc09bf4e39b3d4a338244a372cec190cb43c7aa10ee6b778bf81f89933a51_prof);

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
