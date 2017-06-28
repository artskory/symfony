<?php

/* catalogue/index.html.twig */
class __TwigTemplate_1206d2659315b079b82214261c3550e2b00ec5dba8440d5df0d2465018a1694a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":catalogue:layout.html.twig", "catalogue/index.html.twig", 1);
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
        $__internal_c25ea6a0f2c62c48224d711de9abe044fe4c5f6a82e9ac0c5c3f4853e093de4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c25ea6a0f2c62c48224d711de9abe044fe4c5f6a82e9ac0c5c3f4853e093de4d->enter($__internal_c25ea6a0f2c62c48224d711de9abe044fe4c5f6a82e9ac0c5c3f4853e093de4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/index.html.twig"));

        $__internal_fb541256f51b7d26f011e2913fd0ea525ca1608f3d49ef9822c3e12b1cb439dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb541256f51b7d26f011e2913fd0ea525ca1608f3d49ef9822c3e12b1cb439dd->enter($__internal_fb541256f51b7d26f011e2913fd0ea525ca1608f3d49ef9822c3e12b1cb439dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c25ea6a0f2c62c48224d711de9abe044fe4c5f6a82e9ac0c5c3f4853e093de4d->leave($__internal_c25ea6a0f2c62c48224d711de9abe044fe4c5f6a82e9ac0c5c3f4853e093de4d_prof);

        
        $__internal_fb541256f51b7d26f011e2913fd0ea525ca1608f3d49ef9822c3e12b1cb439dd->leave($__internal_fb541256f51b7d26f011e2913fd0ea525ca1608f3d49ef9822c3e12b1cb439dd_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6498ed07d56c1ae26547f28eebcfcc5c751d0052a8bb4b496a8bc612509b036 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6498ed07d56c1ae26547f28eebcfcc5c751d0052a8bb4b496a8bc612509b036->enter($__internal_a6498ed07d56c1ae26547f28eebcfcc5c751d0052a8bb4b496a8bc612509b036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4997fb6379f8f6695ff1dc0fdab3bfa36e8f9bab198180d4e5fed848ceca1925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4997fb6379f8f6695ff1dc0fdab3bfa36e8f9bab198180d4e5fed848ceca1925->enter($__internal_4997fb6379f8f6695ff1dc0fdab3bfa36e8f9bab198180d4e5fed848ceca1925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Catalogue ";
        
        $__internal_4997fb6379f8f6695ff1dc0fdab3bfa36e8f9bab198180d4e5fed848ceca1925->leave($__internal_4997fb6379f8f6695ff1dc0fdab3bfa36e8f9bab198180d4e5fed848ceca1925_prof);

        
        $__internal_a6498ed07d56c1ae26547f28eebcfcc5c751d0052a8bb4b496a8bc612509b036->leave($__internal_a6498ed07d56c1ae26547f28eebcfcc5c751d0052a8bb4b496a8bc612509b036_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_1ae2a344c1c34880f1ee22d6a12ed56d5bd255c788fbab2d81374f9aa24ed0bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ae2a344c1c34880f1ee22d6a12ed56d5bd255c788fbab2d81374f9aa24ed0bc->enter($__internal_1ae2a344c1c34880f1ee22d6a12ed56d5bd255c788fbab2d81374f9aa24ed0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_2501c74ad72dec18e67d7f15c4702f788006bcc738f8dcd91c3be10dba2b71f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2501c74ad72dec18e67d7f15c4702f788006bcc738f8dcd91c3be10dba2b71f4->enter($__internal_2501c74ad72dec18e67d7f15c4702f788006bcc738f8dcd91c3be10dba2b71f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        
        $__internal_2501c74ad72dec18e67d7f15c4702f788006bcc738f8dcd91c3be10dba2b71f4->leave($__internal_2501c74ad72dec18e67d7f15c4702f788006bcc738f8dcd91c3be10dba2b71f4_prof);

        
        $__internal_1ae2a344c1c34880f1ee22d6a12ed56d5bd255c788fbab2d81374f9aa24ed0bc->leave($__internal_1ae2a344c1c34880f1ee22d6a12ed56d5bd255c788fbab2d81374f9aa24ed0bc_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e72f41331828189294ad3cd6c5d1abd8a5d9711ac70f55971f8c21b216579093 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e72f41331828189294ad3cd6c5d1abd8a5d9711ac70f55971f8c21b216579093->enter($__internal_e72f41331828189294ad3cd6c5d1abd8a5d9711ac70f55971f8c21b216579093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dcf46e641c550b42bf9cbf86049de95fbdc823c38291214437397708a8fb347e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcf46e641c550b42bf9cbf86049de95fbdc823c38291214437397708a8fb347e->enter($__internal_dcf46e641c550b42bf9cbf86049de95fbdc823c38291214437397708a8fb347e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_dcf46e641c550b42bf9cbf86049de95fbdc823c38291214437397708a8fb347e->leave($__internal_dcf46e641c550b42bf9cbf86049de95fbdc823c38291214437397708a8fb347e_prof);

        
        $__internal_e72f41331828189294ad3cd6c5d1abd8a5d9711ac70f55971f8c21b216579093->leave($__internal_e72f41331828189294ad3cd6c5d1abd8a5d9711ac70f55971f8c21b216579093_prof);

    }

    public function getTemplateName()
    {
        return "catalogue/index.html.twig";
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
{% endblock %}", "catalogue/index.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\catalogue\\index.html.twig");
    }
}
