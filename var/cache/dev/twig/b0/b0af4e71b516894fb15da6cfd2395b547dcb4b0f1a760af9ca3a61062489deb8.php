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
        $__internal_ce199e5931d751074bbc1b36fe78a09d131137211aad90a68c3e6cadff1d81f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce199e5931d751074bbc1b36fe78a09d131137211aad90a68c3e6cadff1d81f9->enter($__internal_ce199e5931d751074bbc1b36fe78a09d131137211aad90a68c3e6cadff1d81f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/index.html.twig"));

        $__internal_b8bc69a753f0974f396113e06440108ffbdba6e036eb176e6416062961ae5ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8bc69a753f0974f396113e06440108ffbdba6e036eb176e6416062961ae5ceb->enter($__internal_b8bc69a753f0974f396113e06440108ffbdba6e036eb176e6416062961ae5ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce199e5931d751074bbc1b36fe78a09d131137211aad90a68c3e6cadff1d81f9->leave($__internal_ce199e5931d751074bbc1b36fe78a09d131137211aad90a68c3e6cadff1d81f9_prof);

        
        $__internal_b8bc69a753f0974f396113e06440108ffbdba6e036eb176e6416062961ae5ceb->leave($__internal_b8bc69a753f0974f396113e06440108ffbdba6e036eb176e6416062961ae5ceb_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c78a9f6c180b7cf0f2f42303bf114961f3ed5cab7d8244e22e89778da172731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c78a9f6c180b7cf0f2f42303bf114961f3ed5cab7d8244e22e89778da172731->enter($__internal_4c78a9f6c180b7cf0f2f42303bf114961f3ed5cab7d8244e22e89778da172731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1dca90b773f6f91c6df68fa2b3cda43cdaeb8d1003d5646323bb7ae8173bfd24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dca90b773f6f91c6df68fa2b3cda43cdaeb8d1003d5646323bb7ae8173bfd24->enter($__internal_1dca90b773f6f91c6df68fa2b3cda43cdaeb8d1003d5646323bb7ae8173bfd24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Catalogue ";
        
        $__internal_1dca90b773f6f91c6df68fa2b3cda43cdaeb8d1003d5646323bb7ae8173bfd24->leave($__internal_1dca90b773f6f91c6df68fa2b3cda43cdaeb8d1003d5646323bb7ae8173bfd24_prof);

        
        $__internal_4c78a9f6c180b7cf0f2f42303bf114961f3ed5cab7d8244e22e89778da172731->leave($__internal_4c78a9f6c180b7cf0f2f42303bf114961f3ed5cab7d8244e22e89778da172731_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_c6dd1fcd0a818760daac8aa9ff7eb305b15b1af648dc1e14c6e482a1c91be25e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6dd1fcd0a818760daac8aa9ff7eb305b15b1af648dc1e14c6e482a1c91be25e->enter($__internal_c6dd1fcd0a818760daac8aa9ff7eb305b15b1af648dc1e14c6e482a1c91be25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_e92a40ac07802f514ccdb1389bf88bbb3be852b71843519d9559ed7daae0f0d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92a40ac07802f514ccdb1389bf88bbb3be852b71843519d9559ed7daae0f0d1->enter($__internal_e92a40ac07802f514ccdb1389bf88bbb3be852b71843519d9559ed7daae0f0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        
        $__internal_e92a40ac07802f514ccdb1389bf88bbb3be852b71843519d9559ed7daae0f0d1->leave($__internal_e92a40ac07802f514ccdb1389bf88bbb3be852b71843519d9559ed7daae0f0d1_prof);

        
        $__internal_c6dd1fcd0a818760daac8aa9ff7eb305b15b1af648dc1e14c6e482a1c91be25e->leave($__internal_c6dd1fcd0a818760daac8aa9ff7eb305b15b1af648dc1e14c6e482a1c91be25e_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1a4e055d981349a66695ef401b3503150aebcfca80d8aaaf0fb9b28f269cb1f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a4e055d981349a66695ef401b3503150aebcfca80d8aaaf0fb9b28f269cb1f0->enter($__internal_1a4e055d981349a66695ef401b3503150aebcfca80d8aaaf0fb9b28f269cb1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_96094f20b19f9175f860b81ede7bcbd245a7d1107f19fb8c987009838b7a5a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96094f20b19f9175f860b81ede7bcbd245a7d1107f19fb8c987009838b7a5a4f->enter($__internal_96094f20b19f9175f860b81ede7bcbd245a7d1107f19fb8c987009838b7a5a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_96094f20b19f9175f860b81ede7bcbd245a7d1107f19fb8c987009838b7a5a4f->leave($__internal_96094f20b19f9175f860b81ede7bcbd245a7d1107f19fb8c987009838b7a5a4f_prof);

        
        $__internal_1a4e055d981349a66695ef401b3503150aebcfca80d8aaaf0fb9b28f269cb1f0->leave($__internal_1a4e055d981349a66695ef401b3503150aebcfca80d8aaaf0fb9b28f269cb1f0_prof);

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
