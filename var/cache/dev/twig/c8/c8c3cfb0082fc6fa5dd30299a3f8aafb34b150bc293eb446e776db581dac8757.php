<?php

/* catalogue/index.html.twig */
class __TwigTemplate_0581b81a69e458cafc58ccbfd2b6af1abda34903257d94a19c43ec44fdf6dc91 extends Twig_Template
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
        $__internal_ec739f8a1798e6a524c3124d9788059a3402093cbb9a28c9bec69fc1ae4918f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec739f8a1798e6a524c3124d9788059a3402093cbb9a28c9bec69fc1ae4918f0->enter($__internal_ec739f8a1798e6a524c3124d9788059a3402093cbb9a28c9bec69fc1ae4918f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/index.html.twig"));

        $__internal_7c1486a5b691fe1e9443deab8756158720e3c9f27e8abc8ea58f848ce7e8601d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c1486a5b691fe1e9443deab8756158720e3c9f27e8abc8ea58f848ce7e8601d->enter($__internal_7c1486a5b691fe1e9443deab8756158720e3c9f27e8abc8ea58f848ce7e8601d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec739f8a1798e6a524c3124d9788059a3402093cbb9a28c9bec69fc1ae4918f0->leave($__internal_ec739f8a1798e6a524c3124d9788059a3402093cbb9a28c9bec69fc1ae4918f0_prof);

        
        $__internal_7c1486a5b691fe1e9443deab8756158720e3c9f27e8abc8ea58f848ce7e8601d->leave($__internal_7c1486a5b691fe1e9443deab8756158720e3c9f27e8abc8ea58f848ce7e8601d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_71322ae82bfaf0e15dc974a672babdabae495a0544e6f7a0a0bf7d09082e2b7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71322ae82bfaf0e15dc974a672babdabae495a0544e6f7a0a0bf7d09082e2b7a->enter($__internal_71322ae82bfaf0e15dc974a672babdabae495a0544e6f7a0a0bf7d09082e2b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_509dfdbb9bee935fae16eaca6da8b610fdba286bce01eb96122d4ce6c282b6c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_509dfdbb9bee935fae16eaca6da8b610fdba286bce01eb96122d4ce6c282b6c0->enter($__internal_509dfdbb9bee935fae16eaca6da8b610fdba286bce01eb96122d4ce6c282b6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Catalogue ";
        
        $__internal_509dfdbb9bee935fae16eaca6da8b610fdba286bce01eb96122d4ce6c282b6c0->leave($__internal_509dfdbb9bee935fae16eaca6da8b610fdba286bce01eb96122d4ce6c282b6c0_prof);

        
        $__internal_71322ae82bfaf0e15dc974a672babdabae495a0544e6f7a0a0bf7d09082e2b7a->leave($__internal_71322ae82bfaf0e15dc974a672babdabae495a0544e6f7a0a0bf7d09082e2b7a_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_aeda748d57a815c13c8510ff2865c454885998e3c8c6b51162b9640c41cdb05a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeda748d57a815c13c8510ff2865c454885998e3c8c6b51162b9640c41cdb05a->enter($__internal_aeda748d57a815c13c8510ff2865c454885998e3c8c6b51162b9640c41cdb05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_baea96c4485cf220127c9850af404ccdb35bda2c81ef77d573e18905ccbc5402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baea96c4485cf220127c9850af404ccdb35bda2c81ef77d573e18905ccbc5402->enter($__internal_baea96c4485cf220127c9850af404ccdb35bda2c81ef77d573e18905ccbc5402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        
        $__internal_baea96c4485cf220127c9850af404ccdb35bda2c81ef77d573e18905ccbc5402->leave($__internal_baea96c4485cf220127c9850af404ccdb35bda2c81ef77d573e18905ccbc5402_prof);

        
        $__internal_aeda748d57a815c13c8510ff2865c454885998e3c8c6b51162b9640c41cdb05a->leave($__internal_aeda748d57a815c13c8510ff2865c454885998e3c8c6b51162b9640c41cdb05a_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8620a284379fb2cebb68c0671a3fe44b111d372ee0935cabfe41c05c31ce369a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8620a284379fb2cebb68c0671a3fe44b111d372ee0935cabfe41c05c31ce369a->enter($__internal_8620a284379fb2cebb68c0671a3fe44b111d372ee0935cabfe41c05c31ce369a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b11872f35b521cccb1f75d31c2db0ec691b485c05cdf590fae367edd80729434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b11872f35b521cccb1f75d31c2db0ec691b485c05cdf590fae367edd80729434->enter($__internal_b11872f35b521cccb1f75d31c2db0ec691b485c05cdf590fae367edd80729434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b11872f35b521cccb1f75d31c2db0ec691b485c05cdf590fae367edd80729434->leave($__internal_b11872f35b521cccb1f75d31c2db0ec691b485c05cdf590fae367edd80729434_prof);

        
        $__internal_8620a284379fb2cebb68c0671a3fe44b111d372ee0935cabfe41c05c31ce369a->leave($__internal_8620a284379fb2cebb68c0671a3fe44b111d372ee0935cabfe41c05c31ce369a_prof);

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
