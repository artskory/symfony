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
        $__internal_4d1d2d99a5a0a0c82fed34b82b7dde5d8813fe1dad7b6bf4d154e60eebd6bee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d1d2d99a5a0a0c82fed34b82b7dde5d8813fe1dad7b6bf4d154e60eebd6bee2->enter($__internal_4d1d2d99a5a0a0c82fed34b82b7dde5d8813fe1dad7b6bf4d154e60eebd6bee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/index.html.twig"));

        $__internal_ab6f979414371d0a08e437d7e2c24c013442c84095651efe29cda3dac1a90cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab6f979414371d0a08e437d7e2c24c013442c84095651efe29cda3dac1a90cbf->enter($__internal_ab6f979414371d0a08e437d7e2c24c013442c84095651efe29cda3dac1a90cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d1d2d99a5a0a0c82fed34b82b7dde5d8813fe1dad7b6bf4d154e60eebd6bee2->leave($__internal_4d1d2d99a5a0a0c82fed34b82b7dde5d8813fe1dad7b6bf4d154e60eebd6bee2_prof);

        
        $__internal_ab6f979414371d0a08e437d7e2c24c013442c84095651efe29cda3dac1a90cbf->leave($__internal_ab6f979414371d0a08e437d7e2c24c013442c84095651efe29cda3dac1a90cbf_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e7b22720b5e12d9042473a55f5941a1e6a803e62cd20375d3cbd0511019bb28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e7b22720b5e12d9042473a55f5941a1e6a803e62cd20375d3cbd0511019bb28->enter($__internal_7e7b22720b5e12d9042473a55f5941a1e6a803e62cd20375d3cbd0511019bb28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_61d9b757e3e7415796a025f80f8964b796da6508bdeb1fd2d39051f5bc49c569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61d9b757e3e7415796a025f80f8964b796da6508bdeb1fd2d39051f5bc49c569->enter($__internal_61d9b757e3e7415796a025f80f8964b796da6508bdeb1fd2d39051f5bc49c569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Catalogue ";
        
        $__internal_61d9b757e3e7415796a025f80f8964b796da6508bdeb1fd2d39051f5bc49c569->leave($__internal_61d9b757e3e7415796a025f80f8964b796da6508bdeb1fd2d39051f5bc49c569_prof);

        
        $__internal_7e7b22720b5e12d9042473a55f5941a1e6a803e62cd20375d3cbd0511019bb28->leave($__internal_7e7b22720b5e12d9042473a55f5941a1e6a803e62cd20375d3cbd0511019bb28_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_c601cd3ce4ffabcf3c9bb4592ce80b6d8577cb100b5aca6418df46cd38c92f16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c601cd3ce4ffabcf3c9bb4592ce80b6d8577cb100b5aca6418df46cd38c92f16->enter($__internal_c601cd3ce4ffabcf3c9bb4592ce80b6d8577cb100b5aca6418df46cd38c92f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_68af79424d6a46a9396e65e71c0d4cc3369fe0239bcd56781ea68592a355f12c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68af79424d6a46a9396e65e71c0d4cc3369fe0239bcd56781ea68592a355f12c->enter($__internal_68af79424d6a46a9396e65e71c0d4cc3369fe0239bcd56781ea68592a355f12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        
        $__internal_68af79424d6a46a9396e65e71c0d4cc3369fe0239bcd56781ea68592a355f12c->leave($__internal_68af79424d6a46a9396e65e71c0d4cc3369fe0239bcd56781ea68592a355f12c_prof);

        
        $__internal_c601cd3ce4ffabcf3c9bb4592ce80b6d8577cb100b5aca6418df46cd38c92f16->leave($__internal_c601cd3ce4ffabcf3c9bb4592ce80b6d8577cb100b5aca6418df46cd38c92f16_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_86bcd641589172723e219e5ad5e51293b277ed75f0a6b0668384fc05b8013b55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86bcd641589172723e219e5ad5e51293b277ed75f0a6b0668384fc05b8013b55->enter($__internal_86bcd641589172723e219e5ad5e51293b277ed75f0a6b0668384fc05b8013b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e5c7dc21f46fc35a1530e1a61864b6953787a20c7a5bc707420af806384c1b64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5c7dc21f46fc35a1530e1a61864b6953787a20c7a5bc707420af806384c1b64->enter($__internal_e5c7dc21f46fc35a1530e1a61864b6953787a20c7a5bc707420af806384c1b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_e5c7dc21f46fc35a1530e1a61864b6953787a20c7a5bc707420af806384c1b64->leave($__internal_e5c7dc21f46fc35a1530e1a61864b6953787a20c7a5bc707420af806384c1b64_prof);

        
        $__internal_86bcd641589172723e219e5ad5e51293b277ed75f0a6b0668384fc05b8013b55->leave($__internal_86bcd641589172723e219e5ad5e51293b277ed75f0a6b0668384fc05b8013b55_prof);

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
