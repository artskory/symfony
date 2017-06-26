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
        $__internal_7893bbcef67dcba953b1e91ef0004e5d70e5feb3bc7e87cd0f6c172bf35452ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7893bbcef67dcba953b1e91ef0004e5d70e5feb3bc7e87cd0f6c172bf35452ff->enter($__internal_7893bbcef67dcba953b1e91ef0004e5d70e5feb3bc7e87cd0f6c172bf35452ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/index.html.twig"));

        $__internal_b7d8c424d9c2b24acd5154c8c7415ff9b4cb48c05f79f0d05636b6481afe605a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7d8c424d9c2b24acd5154c8c7415ff9b4cb48c05f79f0d05636b6481afe605a->enter($__internal_b7d8c424d9c2b24acd5154c8c7415ff9b4cb48c05f79f0d05636b6481afe605a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7893bbcef67dcba953b1e91ef0004e5d70e5feb3bc7e87cd0f6c172bf35452ff->leave($__internal_7893bbcef67dcba953b1e91ef0004e5d70e5feb3bc7e87cd0f6c172bf35452ff_prof);

        
        $__internal_b7d8c424d9c2b24acd5154c8c7415ff9b4cb48c05f79f0d05636b6481afe605a->leave($__internal_b7d8c424d9c2b24acd5154c8c7415ff9b4cb48c05f79f0d05636b6481afe605a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a6cfd97d2578a2f715540dc5ac967c94483c0c46fa6a5cd8279e97f1720ebb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a6cfd97d2578a2f715540dc5ac967c94483c0c46fa6a5cd8279e97f1720ebb9->enter($__internal_4a6cfd97d2578a2f715540dc5ac967c94483c0c46fa6a5cd8279e97f1720ebb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7f75193325520d1d1fca85d22e6348706b79c8f93e574bbc23fe79328d456dff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f75193325520d1d1fca85d22e6348706b79c8f93e574bbc23fe79328d456dff->enter($__internal_7f75193325520d1d1fca85d22e6348706b79c8f93e574bbc23fe79328d456dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - lol!";
        
        $__internal_7f75193325520d1d1fca85d22e6348706b79c8f93e574bbc23fe79328d456dff->leave($__internal_7f75193325520d1d1fca85d22e6348706b79c8f93e574bbc23fe79328d456dff_prof);

        
        $__internal_4a6cfd97d2578a2f715540dc5ac967c94483c0c46fa6a5cd8279e97f1720ebb9->leave($__internal_4a6cfd97d2578a2f715540dc5ac967c94483c0c46fa6a5cd8279e97f1720ebb9_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_0b6ef349417c1bb8731d1cdd2af9500ba9dbe51f567b9945940ac18976754565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b6ef349417c1bb8731d1cdd2af9500ba9dbe51f567b9945940ac18976754565->enter($__internal_0b6ef349417c1bb8731d1cdd2af9500ba9dbe51f567b9945940ac18976754565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_feff1df3f9ee110066c25f24fd79437e6a85cae67ba449b074e6a7e4115bddd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feff1df3f9ee110066c25f24fd79437e6a85cae67ba449b074e6a7e4115bddd4->enter($__internal_feff1df3f9ee110066c25f24fd79437e6a85cae67ba449b074e6a7e4115bddd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        
        $__internal_feff1df3f9ee110066c25f24fd79437e6a85cae67ba449b074e6a7e4115bddd4->leave($__internal_feff1df3f9ee110066c25f24fd79437e6a85cae67ba449b074e6a7e4115bddd4_prof);

        
        $__internal_0b6ef349417c1bb8731d1cdd2af9500ba9dbe51f567b9945940ac18976754565->leave($__internal_0b6ef349417c1bb8731d1cdd2af9500ba9dbe51f567b9945940ac18976754565_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8d216eee79a74f55c461219028e5ee60b6e96ccba99b3302333c93eac9a1d53e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d216eee79a74f55c461219028e5ee60b6e96ccba99b3302333c93eac9a1d53e->enter($__internal_8d216eee79a74f55c461219028e5ee60b6e96ccba99b3302333c93eac9a1d53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4257119b3cf8ca6f50e0b511d7340c0fea2cccf098ed338a99ce990833d1c5b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4257119b3cf8ca6f50e0b511d7340c0fea2cccf098ed338a99ce990833d1c5b2->enter($__internal_4257119b3cf8ca6f50e0b511d7340c0fea2cccf098ed338a99ce990833d1c5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_4257119b3cf8ca6f50e0b511d7340c0fea2cccf098ed338a99ce990833d1c5b2->leave($__internal_4257119b3cf8ca6f50e0b511d7340c0fea2cccf098ed338a99ce990833d1c5b2_prof);

        
        $__internal_8d216eee79a74f55c461219028e5ee60b6e96ccba99b3302333c93eac9a1d53e->leave($__internal_8d216eee79a74f55c461219028e5ee60b6e96ccba99b3302333c93eac9a1d53e_prof);

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
