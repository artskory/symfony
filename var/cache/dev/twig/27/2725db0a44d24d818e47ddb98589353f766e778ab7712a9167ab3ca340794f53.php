<?php

/* :catalogue:index.html.twig */
class __TwigTemplate_1a8f0f2984e66e050b77b33942a6cafdbd4e5cce7f6bbe2c84cd6b4b9225adf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":catalogue:layout.html.twig", ":catalogue:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body_layout' => array($this, 'block_body_layout'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":catalogue:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae7567f761162ad9da41006b7fa2cead646a25ef2cacc2f45255638fec44df01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae7567f761162ad9da41006b7fa2cead646a25ef2cacc2f45255638fec44df01->enter($__internal_ae7567f761162ad9da41006b7fa2cead646a25ef2cacc2f45255638fec44df01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:index.html.twig"));

        $__internal_f4bc5edccdaf8e5d8b80e2f66522bc3645fa4fef5782b5d2a33a1409ce2afaab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4bc5edccdaf8e5d8b80e2f66522bc3645fa4fef5782b5d2a33a1409ce2afaab->enter($__internal_f4bc5edccdaf8e5d8b80e2f66522bc3645fa4fef5782b5d2a33a1409ce2afaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae7567f761162ad9da41006b7fa2cead646a25ef2cacc2f45255638fec44df01->leave($__internal_ae7567f761162ad9da41006b7fa2cead646a25ef2cacc2f45255638fec44df01_prof);

        
        $__internal_f4bc5edccdaf8e5d8b80e2f66522bc3645fa4fef5782b5d2a33a1409ce2afaab->leave($__internal_f4bc5edccdaf8e5d8b80e2f66522bc3645fa4fef5782b5d2a33a1409ce2afaab_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_06a30a9a7495c24a2f083121714aba3c8729964172898f6f2ac420b23a0b0d3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06a30a9a7495c24a2f083121714aba3c8729964172898f6f2ac420b23a0b0d3a->enter($__internal_06a30a9a7495c24a2f083121714aba3c8729964172898f6f2ac420b23a0b0d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1aa13a5f277bc6b0aa00321d9b38ed55f1b5e9f231e582c2c1825578980d7105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aa13a5f277bc6b0aa00321d9b38ed55f1b5e9f231e582c2c1825578980d7105->enter($__internal_1aa13a5f277bc6b0aa00321d9b38ed55f1b5e9f231e582c2c1825578980d7105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Catalogue ";
        
        $__internal_1aa13a5f277bc6b0aa00321d9b38ed55f1b5e9f231e582c2c1825578980d7105->leave($__internal_1aa13a5f277bc6b0aa00321d9b38ed55f1b5e9f231e582c2c1825578980d7105_prof);

        
        $__internal_06a30a9a7495c24a2f083121714aba3c8729964172898f6f2ac420b23a0b0d3a->leave($__internal_06a30a9a7495c24a2f083121714aba3c8729964172898f6f2ac420b23a0b0d3a_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_0f225c90371efc559462ba7315d2fe070ebc6904388c2d5bd4f9a5e3226eb270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f225c90371efc559462ba7315d2fe070ebc6904388c2d5bd4f9a5e3226eb270->enter($__internal_0f225c90371efc559462ba7315d2fe070ebc6904388c2d5bd4f9a5e3226eb270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_e0094cdbec35254fec0b761f8c20ed95e17b892bb69dfcbe026f5d3250da99ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0094cdbec35254fec0b761f8c20ed95e17b892bb69dfcbe026f5d3250da99ca->enter($__internal_e0094cdbec35254fec0b761f8c20ed95e17b892bb69dfcbe026f5d3250da99ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 4
        echo "    
    
    
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 8
            echo "        <div class=\"row\">
            <h1><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_catalogue", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "titre", array()), "html", null, true);
            echo "</a></h1>   
            <hr>
        </div>
            
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    
        <div class=\"row\">
            <button id=\"last-produit\" type=\"button\" class=\"btn btn-lg btn-primary\">Dernier Produits</button>
        </div>
        <div id=\"divvide\"></div>
        
";
        
        $__internal_e0094cdbec35254fec0b761f8c20ed95e17b892bb69dfcbe026f5d3250da99ca->leave($__internal_e0094cdbec35254fec0b761f8c20ed95e17b892bb69dfcbe026f5d3250da99ca_prof);

        
        $__internal_0f225c90371efc559462ba7315d2fe070ebc6904388c2d5bd4f9a5e3226eb270->leave($__internal_0f225c90371efc559462ba7315d2fe070ebc6904388c2d5bd4f9a5e3226eb270_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f784a46cdec04ea2519420a2a2a84a7ec3bcb289195c2347bc87937cfe4d5106 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f784a46cdec04ea2519420a2a2a84a7ec3bcb289195c2347bc87937cfe4d5106->enter($__internal_f784a46cdec04ea2519420a2a2a84a7ec3bcb289195c2347bc87937cfe4d5106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5e15c7a76aad18e567eba3abd10b33738b83908383a1cd29a7483be2c2edad8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e15c7a76aad18e567eba3abd10b33738b83908383a1cd29a7483be2c2edad8a->enter($__internal_5e15c7a76aad18e567eba3abd10b33738b83908383a1cd29a7483be2c2edad8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "    <script>
    \$('#last-produit').click( function(){
        \$.ajax({
            url: '";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_new_prod");
        echo "',
            method:'GET',
            dataType: 'html',
            success: function (data) {
                \$('#divvide').html(data);
    }
        });
    });
    </script>
";
        
        $__internal_5e15c7a76aad18e567eba3abd10b33738b83908383a1cd29a7483be2c2edad8a->leave($__internal_5e15c7a76aad18e567eba3abd10b33738b83908383a1cd29a7483be2c2edad8a_prof);

        
        $__internal_f784a46cdec04ea2519420a2a2a84a7ec3bcb289195c2347bc87937cfe4d5106->leave($__internal_f784a46cdec04ea2519420a2a2a84a7ec3bcb289195c2347bc87937cfe4d5106_prof);

    }

    public function getTemplateName()
    {
        return ":catalogue:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 26,  121 => 23,  112 => 22,  96 => 14,  83 => 9,  80 => 8,  76 => 7,  71 => 4,  62 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":catalogue:layout.html.twig\" %}
{% block title %} {{ parent() }} - Catalogue {% endblock %}
{% block body_layout %}
    
    
    
    {% for categorie in categories %}
        <div class=\"row\">
            <h1><a href=\"{{ path('categorie_catalogue', {id:categorie.id}) }}\">{{ categorie.titre }}</a></h1>   
            <hr>
        </div>
            
    {% endfor %}
    
        <div class=\"row\">
            <button id=\"last-produit\" type=\"button\" class=\"btn btn-lg btn-primary\">Dernier Produits</button>
        </div>
        <div id=\"divvide\"></div>
        
{% endblock %}

{% block javascripts %}
    <script>
    \$('#last-produit').click( function(){
        \$.ajax({
            url: '{{ path('ajax_new_prod')}}',
            method:'GET',
            dataType: 'html',
            success: function (data) {
                \$('#divvide').html(data);
    }
        });
    });
    </script>
{% endblock %}", ":catalogue:index.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/catalogue/index.html.twig");
    }
}
