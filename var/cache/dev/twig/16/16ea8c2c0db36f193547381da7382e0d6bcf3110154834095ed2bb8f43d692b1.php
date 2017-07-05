<?php

/* catalogue/index.html.twig */
class __TwigTemplate_42575277373367d2aa07077a35b15b35818130b2e151d1bb5a5e223524f4480b extends Twig_Template
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
        $__internal_df830bee4dbde4e8441a87baa32d9ab09de0074832dc6866977ae9306397731f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df830bee4dbde4e8441a87baa32d9ab09de0074832dc6866977ae9306397731f->enter($__internal_df830bee4dbde4e8441a87baa32d9ab09de0074832dc6866977ae9306397731f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/index.html.twig"));

        $__internal_787a719cec278ffb90e31ed36a2947cb6812c2356670052503ea44009803beb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787a719cec278ffb90e31ed36a2947cb6812c2356670052503ea44009803beb9->enter($__internal_787a719cec278ffb90e31ed36a2947cb6812c2356670052503ea44009803beb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df830bee4dbde4e8441a87baa32d9ab09de0074832dc6866977ae9306397731f->leave($__internal_df830bee4dbde4e8441a87baa32d9ab09de0074832dc6866977ae9306397731f_prof);

        
        $__internal_787a719cec278ffb90e31ed36a2947cb6812c2356670052503ea44009803beb9->leave($__internal_787a719cec278ffb90e31ed36a2947cb6812c2356670052503ea44009803beb9_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b96c790d5f71daab7ee3f55870ce5f451a612435bf05a71a2f92dc1350a7deb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b96c790d5f71daab7ee3f55870ce5f451a612435bf05a71a2f92dc1350a7deb->enter($__internal_9b96c790d5f71daab7ee3f55870ce5f451a612435bf05a71a2f92dc1350a7deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c7c4b98a67183078ffe7be5fb3a9116bbc5cc5a55e452748994bde723b31f4ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7c4b98a67183078ffe7be5fb3a9116bbc5cc5a55e452748994bde723b31f4ae->enter($__internal_c7c4b98a67183078ffe7be5fb3a9116bbc5cc5a55e452748994bde723b31f4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Catalogue ";
        
        $__internal_c7c4b98a67183078ffe7be5fb3a9116bbc5cc5a55e452748994bde723b31f4ae->leave($__internal_c7c4b98a67183078ffe7be5fb3a9116bbc5cc5a55e452748994bde723b31f4ae_prof);

        
        $__internal_9b96c790d5f71daab7ee3f55870ce5f451a612435bf05a71a2f92dc1350a7deb->leave($__internal_9b96c790d5f71daab7ee3f55870ce5f451a612435bf05a71a2f92dc1350a7deb_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_63010497d85f2099ec710986ff7d5aa4694601226d919cffc9330b6a298a5579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63010497d85f2099ec710986ff7d5aa4694601226d919cffc9330b6a298a5579->enter($__internal_63010497d85f2099ec710986ff7d5aa4694601226d919cffc9330b6a298a5579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_4e8411477cfacf1ba8da3f4e8f5ff4ab8a0eebf65d3a69cbdde30d3594652179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e8411477cfacf1ba8da3f4e8f5ff4ab8a0eebf65d3a69cbdde30d3594652179->enter($__internal_4e8411477cfacf1ba8da3f4e8f5ff4ab8a0eebf65d3a69cbdde30d3594652179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        
        $__internal_4e8411477cfacf1ba8da3f4e8f5ff4ab8a0eebf65d3a69cbdde30d3594652179->leave($__internal_4e8411477cfacf1ba8da3f4e8f5ff4ab8a0eebf65d3a69cbdde30d3594652179_prof);

        
        $__internal_63010497d85f2099ec710986ff7d5aa4694601226d919cffc9330b6a298a5579->leave($__internal_63010497d85f2099ec710986ff7d5aa4694601226d919cffc9330b6a298a5579_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_47f73f70fae3827be80b88a730700d5a4fbb43c8a9d43afcfc51258b4814d0fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47f73f70fae3827be80b88a730700d5a4fbb43c8a9d43afcfc51258b4814d0fc->enter($__internal_47f73f70fae3827be80b88a730700d5a4fbb43c8a9d43afcfc51258b4814d0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3497de2c7751fd4cff6925dc3ccad5c1264aac72225d837f4ad658f3ffc029e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3497de2c7751fd4cff6925dc3ccad5c1264aac72225d837f4ad658f3ffc029e4->enter($__internal_3497de2c7751fd4cff6925dc3ccad5c1264aac72225d837f4ad658f3ffc029e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_3497de2c7751fd4cff6925dc3ccad5c1264aac72225d837f4ad658f3ffc029e4->leave($__internal_3497de2c7751fd4cff6925dc3ccad5c1264aac72225d837f4ad658f3ffc029e4_prof);

        
        $__internal_47f73f70fae3827be80b88a730700d5a4fbb43c8a9d43afcfc51258b4814d0fc->leave($__internal_47f73f70fae3827be80b88a730700d5a4fbb43c8a9d43afcfc51258b4814d0fc_prof);

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
