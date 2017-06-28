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
        $__internal_80cba924468c53d0d74376094cade7a3a8e91efd731d4bc1d64a04b57fe4e5be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80cba924468c53d0d74376094cade7a3a8e91efd731d4bc1d64a04b57fe4e5be->enter($__internal_80cba924468c53d0d74376094cade7a3a8e91efd731d4bc1d64a04b57fe4e5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:index.html.twig"));

        $__internal_d613f21db8ee3e76967ccac31e2fdf4b969ce9ccaa79d8b92031371c8d906dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d613f21db8ee3e76967ccac31e2fdf4b969ce9ccaa79d8b92031371c8d906dc3->enter($__internal_d613f21db8ee3e76967ccac31e2fdf4b969ce9ccaa79d8b92031371c8d906dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80cba924468c53d0d74376094cade7a3a8e91efd731d4bc1d64a04b57fe4e5be->leave($__internal_80cba924468c53d0d74376094cade7a3a8e91efd731d4bc1d64a04b57fe4e5be_prof);

        
        $__internal_d613f21db8ee3e76967ccac31e2fdf4b969ce9ccaa79d8b92031371c8d906dc3->leave($__internal_d613f21db8ee3e76967ccac31e2fdf4b969ce9ccaa79d8b92031371c8d906dc3_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1796a74bc9bf9ecaf9f3e0c2815437fbface34ce3196d2ce908689ef133f71af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1796a74bc9bf9ecaf9f3e0c2815437fbface34ce3196d2ce908689ef133f71af->enter($__internal_1796a74bc9bf9ecaf9f3e0c2815437fbface34ce3196d2ce908689ef133f71af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_67b80746bba1d02203cb34b1da34682714a0efaf9f41d94faf8be5b66c0729c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b80746bba1d02203cb34b1da34682714a0efaf9f41d94faf8be5b66c0729c2->enter($__internal_67b80746bba1d02203cb34b1da34682714a0efaf9f41d94faf8be5b66c0729c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Catalogue ";
        
        $__internal_67b80746bba1d02203cb34b1da34682714a0efaf9f41d94faf8be5b66c0729c2->leave($__internal_67b80746bba1d02203cb34b1da34682714a0efaf9f41d94faf8be5b66c0729c2_prof);

        
        $__internal_1796a74bc9bf9ecaf9f3e0c2815437fbface34ce3196d2ce908689ef133f71af->leave($__internal_1796a74bc9bf9ecaf9f3e0c2815437fbface34ce3196d2ce908689ef133f71af_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_b29688715a5400c077064e589f0418f003f7706119915e1ea0eaa3148e83f465 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b29688715a5400c077064e589f0418f003f7706119915e1ea0eaa3148e83f465->enter($__internal_b29688715a5400c077064e589f0418f003f7706119915e1ea0eaa3148e83f465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_cfa5f69070b0d7afd26c95652c33a44825cd450e0306f2fcf6d1bf8a61eba82c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfa5f69070b0d7afd26c95652c33a44825cd450e0306f2fcf6d1bf8a61eba82c->enter($__internal_cfa5f69070b0d7afd26c95652c33a44825cd450e0306f2fcf6d1bf8a61eba82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        
        $__internal_cfa5f69070b0d7afd26c95652c33a44825cd450e0306f2fcf6d1bf8a61eba82c->leave($__internal_cfa5f69070b0d7afd26c95652c33a44825cd450e0306f2fcf6d1bf8a61eba82c_prof);

        
        $__internal_b29688715a5400c077064e589f0418f003f7706119915e1ea0eaa3148e83f465->leave($__internal_b29688715a5400c077064e589f0418f003f7706119915e1ea0eaa3148e83f465_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_855a8910fa2131fa626a457251e9e2a26dbaface28d37735b600f4d8681f6451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_855a8910fa2131fa626a457251e9e2a26dbaface28d37735b600f4d8681f6451->enter($__internal_855a8910fa2131fa626a457251e9e2a26dbaface28d37735b600f4d8681f6451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_759a5e3016e4b487949751a71f4f3c81b8af20d0cc0f9e3a071bf4917f0d73df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_759a5e3016e4b487949751a71f4f3c81b8af20d0cc0f9e3a071bf4917f0d73df->enter($__internal_759a5e3016e4b487949751a71f4f3c81b8af20d0cc0f9e3a071bf4917f0d73df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_759a5e3016e4b487949751a71f4f3c81b8af20d0cc0f9e3a071bf4917f0d73df->leave($__internal_759a5e3016e4b487949751a71f4f3c81b8af20d0cc0f9e3a071bf4917f0d73df_prof);

        
        $__internal_855a8910fa2131fa626a457251e9e2a26dbaface28d37735b600f4d8681f6451->leave($__internal_855a8910fa2131fa626a457251e9e2a26dbaface28d37735b600f4d8681f6451_prof);

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
