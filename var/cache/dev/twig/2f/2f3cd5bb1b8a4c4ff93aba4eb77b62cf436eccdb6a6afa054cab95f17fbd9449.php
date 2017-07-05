<?php

/* :catalogue:index.html.twig */
class __TwigTemplate_8405df2a028fba4303ba95ebe97a97acf1eff44b16e3d6774e49ea23cb561efa extends Twig_Template
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
        $__internal_c4951b25dffc994c3fa8d7a49fdf87bd0fea2463f1668d8552acbe480ff4e672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4951b25dffc994c3fa8d7a49fdf87bd0fea2463f1668d8552acbe480ff4e672->enter($__internal_c4951b25dffc994c3fa8d7a49fdf87bd0fea2463f1668d8552acbe480ff4e672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:index.html.twig"));

        $__internal_a9c4cd05b0a801274bc65dfa2d59121753ed142a5a82e296a1aa5910f68b9aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c4cd05b0a801274bc65dfa2d59121753ed142a5a82e296a1aa5910f68b9aa2->enter($__internal_a9c4cd05b0a801274bc65dfa2d59121753ed142a5a82e296a1aa5910f68b9aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4951b25dffc994c3fa8d7a49fdf87bd0fea2463f1668d8552acbe480ff4e672->leave($__internal_c4951b25dffc994c3fa8d7a49fdf87bd0fea2463f1668d8552acbe480ff4e672_prof);

        
        $__internal_a9c4cd05b0a801274bc65dfa2d59121753ed142a5a82e296a1aa5910f68b9aa2->leave($__internal_a9c4cd05b0a801274bc65dfa2d59121753ed142a5a82e296a1aa5910f68b9aa2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b0942c78254554cc29538edd078fd1be5a93f02b298156cc827a0e1cb99fc84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b0942c78254554cc29538edd078fd1be5a93f02b298156cc827a0e1cb99fc84->enter($__internal_1b0942c78254554cc29538edd078fd1be5a93f02b298156cc827a0e1cb99fc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4088a9d4dc875d483f8a96ee40042b8b1ddeeabcdbbc72d608d0ed29caff53a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4088a9d4dc875d483f8a96ee40042b8b1ddeeabcdbbc72d608d0ed29caff53a4->enter($__internal_4088a9d4dc875d483f8a96ee40042b8b1ddeeabcdbbc72d608d0ed29caff53a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Catalogue ";
        
        $__internal_4088a9d4dc875d483f8a96ee40042b8b1ddeeabcdbbc72d608d0ed29caff53a4->leave($__internal_4088a9d4dc875d483f8a96ee40042b8b1ddeeabcdbbc72d608d0ed29caff53a4_prof);

        
        $__internal_1b0942c78254554cc29538edd078fd1be5a93f02b298156cc827a0e1cb99fc84->leave($__internal_1b0942c78254554cc29538edd078fd1be5a93f02b298156cc827a0e1cb99fc84_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_f115bd8ca3ee239b0ac3f2ebc41d687c332ad854e9324617fa4a9c14bb22267d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f115bd8ca3ee239b0ac3f2ebc41d687c332ad854e9324617fa4a9c14bb22267d->enter($__internal_f115bd8ca3ee239b0ac3f2ebc41d687c332ad854e9324617fa4a9c14bb22267d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_a7b77abb5acb732a534f911afcf64fc9537ecd5a689fde2072770ad3269dea72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b77abb5acb732a534f911afcf64fc9537ecd5a689fde2072770ad3269dea72->enter($__internal_a7b77abb5acb732a534f911afcf64fc9537ecd5a689fde2072770ad3269dea72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        
        $__internal_a7b77abb5acb732a534f911afcf64fc9537ecd5a689fde2072770ad3269dea72->leave($__internal_a7b77abb5acb732a534f911afcf64fc9537ecd5a689fde2072770ad3269dea72_prof);

        
        $__internal_f115bd8ca3ee239b0ac3f2ebc41d687c332ad854e9324617fa4a9c14bb22267d->leave($__internal_f115bd8ca3ee239b0ac3f2ebc41d687c332ad854e9324617fa4a9c14bb22267d_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3ecd33bffa5c00cc1a7b1d86fff9910992943ee371b2b6159bcfd1fef01e0cbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ecd33bffa5c00cc1a7b1d86fff9910992943ee371b2b6159bcfd1fef01e0cbb->enter($__internal_3ecd33bffa5c00cc1a7b1d86fff9910992943ee371b2b6159bcfd1fef01e0cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c0c17e94cb598843e17ebe7a88b74e490bf2031b9e80c6569fc7c60ffa005401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0c17e94cb598843e17ebe7a88b74e490bf2031b9e80c6569fc7c60ffa005401->enter($__internal_c0c17e94cb598843e17ebe7a88b74e490bf2031b9e80c6569fc7c60ffa005401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_c0c17e94cb598843e17ebe7a88b74e490bf2031b9e80c6569fc7c60ffa005401->leave($__internal_c0c17e94cb598843e17ebe7a88b74e490bf2031b9e80c6569fc7c60ffa005401_prof);

        
        $__internal_3ecd33bffa5c00cc1a7b1d86fff9910992943ee371b2b6159bcfd1fef01e0cbb->leave($__internal_3ecd33bffa5c00cc1a7b1d86fff9910992943ee371b2b6159bcfd1fef01e0cbb_prof);

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
