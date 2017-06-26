<?php

/* catalogue/index.html.twig */
class __TwigTemplate_62e3055f8164c913ad4da34bd0a7c8005348d7efa0d4c35fbc9247d94b26ed36 extends Twig_Template
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
        $__internal_25df138a036ae459a57c537224346272efc53e0bf31e2feab586f9a2d0c8eb7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25df138a036ae459a57c537224346272efc53e0bf31e2feab586f9a2d0c8eb7b->enter($__internal_25df138a036ae459a57c537224346272efc53e0bf31e2feab586f9a2d0c8eb7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/index.html.twig"));

        $__internal_b80d3137c5218f260a879dd37e6baef8048547555c0320882143f69c010bf766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b80d3137c5218f260a879dd37e6baef8048547555c0320882143f69c010bf766->enter($__internal_b80d3137c5218f260a879dd37e6baef8048547555c0320882143f69c010bf766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25df138a036ae459a57c537224346272efc53e0bf31e2feab586f9a2d0c8eb7b->leave($__internal_25df138a036ae459a57c537224346272efc53e0bf31e2feab586f9a2d0c8eb7b_prof);

        
        $__internal_b80d3137c5218f260a879dd37e6baef8048547555c0320882143f69c010bf766->leave($__internal_b80d3137c5218f260a879dd37e6baef8048547555c0320882143f69c010bf766_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa833a3dfca4836ce829ee81ff9404529447f8118591a4b9c4aed9a7fc290525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa833a3dfca4836ce829ee81ff9404529447f8118591a4b9c4aed9a7fc290525->enter($__internal_aa833a3dfca4836ce829ee81ff9404529447f8118591a4b9c4aed9a7fc290525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c05661c971cc3020907376a99a2a1770154244aafd7e6febbf36d635c624854d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c05661c971cc3020907376a99a2a1770154244aafd7e6febbf36d635c624854d->enter($__internal_c05661c971cc3020907376a99a2a1770154244aafd7e6febbf36d635c624854d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - lol!";
        
        $__internal_c05661c971cc3020907376a99a2a1770154244aafd7e6febbf36d635c624854d->leave($__internal_c05661c971cc3020907376a99a2a1770154244aafd7e6febbf36d635c624854d_prof);

        
        $__internal_aa833a3dfca4836ce829ee81ff9404529447f8118591a4b9c4aed9a7fc290525->leave($__internal_aa833a3dfca4836ce829ee81ff9404529447f8118591a4b9c4aed9a7fc290525_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_a9d7ffeb2d5f8351eb7b5dcde2b2a415110f096f6b0e99f7874b6f249c858287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9d7ffeb2d5f8351eb7b5dcde2b2a415110f096f6b0e99f7874b6f249c858287->enter($__internal_a9d7ffeb2d5f8351eb7b5dcde2b2a415110f096f6b0e99f7874b6f249c858287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_b219c4f33c6191a628fe9d36bff3b9473ae1c0f7ba4710c4e9d668b64349a421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b219c4f33c6191a628fe9d36bff3b9473ae1c0f7ba4710c4e9d668b64349a421->enter($__internal_b219c4f33c6191a628fe9d36bff3b9473ae1c0f7ba4710c4e9d668b64349a421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        
        $__internal_b219c4f33c6191a628fe9d36bff3b9473ae1c0f7ba4710c4e9d668b64349a421->leave($__internal_b219c4f33c6191a628fe9d36bff3b9473ae1c0f7ba4710c4e9d668b64349a421_prof);

        
        $__internal_a9d7ffeb2d5f8351eb7b5dcde2b2a415110f096f6b0e99f7874b6f249c858287->leave($__internal_a9d7ffeb2d5f8351eb7b5dcde2b2a415110f096f6b0e99f7874b6f249c858287_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_febfa6e70f0041032827831ae74bb3162cf276c90f4ee58155996bad135e84e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_febfa6e70f0041032827831ae74bb3162cf276c90f4ee58155996bad135e84e4->enter($__internal_febfa6e70f0041032827831ae74bb3162cf276c90f4ee58155996bad135e84e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_44222cb31d330f8ec324d0c4bd15206f2192683fc7e6cfc455e50d96d4f32920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44222cb31d330f8ec324d0c4bd15206f2192683fc7e6cfc455e50d96d4f32920->enter($__internal_44222cb31d330f8ec324d0c4bd15206f2192683fc7e6cfc455e50d96d4f32920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_44222cb31d330f8ec324d0c4bd15206f2192683fc7e6cfc455e50d96d4f32920->leave($__internal_44222cb31d330f8ec324d0c4bd15206f2192683fc7e6cfc455e50d96d4f32920_prof);

        
        $__internal_febfa6e70f0041032827831ae74bb3162cf276c90f4ee58155996bad135e84e4->leave($__internal_febfa6e70f0041032827831ae74bb3162cf276c90f4ee58155996bad135e84e4_prof);

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
{% block title %} {{ parent() }} - lol!{% endblock %}
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
