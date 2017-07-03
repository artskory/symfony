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
        $__internal_759b617b8543cf7ee295161d7047e74f7b4cefdba364d6e969b06616af45429b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_759b617b8543cf7ee295161d7047e74f7b4cefdba364d6e969b06616af45429b->enter($__internal_759b617b8543cf7ee295161d7047e74f7b4cefdba364d6e969b06616af45429b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:index.html.twig"));

        $__internal_9a32f3a1e3936d1c70326aa582a5d5ef700a30924e73252d52fdbbbbbdba0d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a32f3a1e3936d1c70326aa582a5d5ef700a30924e73252d52fdbbbbbdba0d74->enter($__internal_9a32f3a1e3936d1c70326aa582a5d5ef700a30924e73252d52fdbbbbbdba0d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_759b617b8543cf7ee295161d7047e74f7b4cefdba364d6e969b06616af45429b->leave($__internal_759b617b8543cf7ee295161d7047e74f7b4cefdba364d6e969b06616af45429b_prof);

        
        $__internal_9a32f3a1e3936d1c70326aa582a5d5ef700a30924e73252d52fdbbbbbdba0d74->leave($__internal_9a32f3a1e3936d1c70326aa582a5d5ef700a30924e73252d52fdbbbbbdba0d74_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b524bd38e70de9f3f2f05d2d77c4214f3c1fdad4105d296237116aab9ef62bd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b524bd38e70de9f3f2f05d2d77c4214f3c1fdad4105d296237116aab9ef62bd4->enter($__internal_b524bd38e70de9f3f2f05d2d77c4214f3c1fdad4105d296237116aab9ef62bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_06902ebebe41093aa7cf5d16de191744b4c887673136e5a7d2887b644ce76845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06902ebebe41093aa7cf5d16de191744b4c887673136e5a7d2887b644ce76845->enter($__internal_06902ebebe41093aa7cf5d16de191744b4c887673136e5a7d2887b644ce76845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Catalogue ";
        
        $__internal_06902ebebe41093aa7cf5d16de191744b4c887673136e5a7d2887b644ce76845->leave($__internal_06902ebebe41093aa7cf5d16de191744b4c887673136e5a7d2887b644ce76845_prof);

        
        $__internal_b524bd38e70de9f3f2f05d2d77c4214f3c1fdad4105d296237116aab9ef62bd4->leave($__internal_b524bd38e70de9f3f2f05d2d77c4214f3c1fdad4105d296237116aab9ef62bd4_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_12f603826e496977ec4d81a79809001c692f8d8bb6ac7a37178670e90d963cef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12f603826e496977ec4d81a79809001c692f8d8bb6ac7a37178670e90d963cef->enter($__internal_12f603826e496977ec4d81a79809001c692f8d8bb6ac7a37178670e90d963cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_0370e5833352e5c2af02c3fb11227176d9f141c7d15428e2ce67f7855e7d5f82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0370e5833352e5c2af02c3fb11227176d9f141c7d15428e2ce67f7855e7d5f82->enter($__internal_0370e5833352e5c2af02c3fb11227176d9f141c7d15428e2ce67f7855e7d5f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        
        $__internal_0370e5833352e5c2af02c3fb11227176d9f141c7d15428e2ce67f7855e7d5f82->leave($__internal_0370e5833352e5c2af02c3fb11227176d9f141c7d15428e2ce67f7855e7d5f82_prof);

        
        $__internal_12f603826e496977ec4d81a79809001c692f8d8bb6ac7a37178670e90d963cef->leave($__internal_12f603826e496977ec4d81a79809001c692f8d8bb6ac7a37178670e90d963cef_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2e8e7fcdae18e270c397a8f0ee4c536f6541854b6103335f4af13f22e9a732ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e8e7fcdae18e270c397a8f0ee4c536f6541854b6103335f4af13f22e9a732ce->enter($__internal_2e8e7fcdae18e270c397a8f0ee4c536f6541854b6103335f4af13f22e9a732ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6ea2ac6f4328026a754db26e775e1c48f1fbc03cb972a54b88655210788399b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ea2ac6f4328026a754db26e775e1c48f1fbc03cb972a54b88655210788399b8->enter($__internal_6ea2ac6f4328026a754db26e775e1c48f1fbc03cb972a54b88655210788399b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_6ea2ac6f4328026a754db26e775e1c48f1fbc03cb972a54b88655210788399b8->leave($__internal_6ea2ac6f4328026a754db26e775e1c48f1fbc03cb972a54b88655210788399b8_prof);

        
        $__internal_2e8e7fcdae18e270c397a8f0ee4c536f6541854b6103335f4af13f22e9a732ce->leave($__internal_2e8e7fcdae18e270c397a8f0ee4c536f6541854b6103335f4af13f22e9a732ce_prof);

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
