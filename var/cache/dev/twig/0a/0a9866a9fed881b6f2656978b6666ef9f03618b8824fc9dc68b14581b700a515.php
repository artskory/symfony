<?php

/* blog/archives.html.twig */
class __TwigTemplate_d914e8d8747aa4d61a433513ff0a0b477ffa005c309e2d6aaceff822ce51462d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":blog:layout.html.twig", "blog/archives.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body_layout' => array($this, 'block_body_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":blog:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63f127a632ecbca2b0c3e88e8308a3f1f1be1a1d335a2b4b279cdb07d7cf5661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63f127a632ecbca2b0c3e88e8308a3f1f1be1a1d335a2b4b279cdb07d7cf5661->enter($__internal_63f127a632ecbca2b0c3e88e8308a3f1f1be1a1d335a2b4b279cdb07d7cf5661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/archives.html.twig"));

        $__internal_3e38fdec26bdf60717d7f9d91eea1ab6cc6feb8faec8dd3cb51a87bb179ab02d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e38fdec26bdf60717d7f9d91eea1ab6cc6feb8faec8dd3cb51a87bb179ab02d->enter($__internal_3e38fdec26bdf60717d7f9d91eea1ab6cc6feb8faec8dd3cb51a87bb179ab02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/archives.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63f127a632ecbca2b0c3e88e8308a3f1f1be1a1d335a2b4b279cdb07d7cf5661->leave($__internal_63f127a632ecbca2b0c3e88e8308a3f1f1be1a1d335a2b4b279cdb07d7cf5661_prof);

        
        $__internal_3e38fdec26bdf60717d7f9d91eea1ab6cc6feb8faec8dd3cb51a87bb179ab02d->leave($__internal_3e38fdec26bdf60717d7f9d91eea1ab6cc6feb8faec8dd3cb51a87bb179ab02d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e41f7e3167643a76c0d7ad6e8c7d8da3b40ded3c087360b8927172010e62efcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e41f7e3167643a76c0d7ad6e8c7d8da3b40ded3c087360b8927172010e62efcc->enter($__internal_e41f7e3167643a76c0d7ad6e8c7d8da3b40ded3c087360b8927172010e62efcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8ca16f0b882a6c732f99336a4c2c898006f8bf6ec873cacfb8a5aee0680cc7c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca16f0b882a6c732f99336a4c2c898006f8bf6ec873cacfb8a5aee0680cc7c5->enter($__internal_8ca16f0b882a6c732f99336a4c2c898006f8bf6ec873cacfb8a5aee0680cc7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - lol!";
        
        $__internal_8ca16f0b882a6c732f99336a4c2c898006f8bf6ec873cacfb8a5aee0680cc7c5->leave($__internal_8ca16f0b882a6c732f99336a4c2c898006f8bf6ec873cacfb8a5aee0680cc7c5_prof);

        
        $__internal_e41f7e3167643a76c0d7ad6e8c7d8da3b40ded3c087360b8927172010e62efcc->leave($__internal_e41f7e3167643a76c0d7ad6e8c7d8da3b40ded3c087360b8927172010e62efcc_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_771f1b635bb9870d8433907813552ed470a7caa933923a8fe8072732d9894ac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_771f1b635bb9870d8433907813552ed470a7caa933923a8fe8072732d9894ac8->enter($__internal_771f1b635bb9870d8433907813552ed470a7caa933923a8fe8072732d9894ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_b0b0ead390dfd4d7800d6b59ae24c24e64a09f18cf301bc1aa8ec0e31c19affb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0b0ead390dfd4d7800d6b59ae24c24e64a09f18cf301bc1aa8ec0e31c19affb->enter($__internal_b0b0ead390dfd4d7800d6b59ae24c24e64a09f18cf301bc1aa8ec0e31c19affb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 4
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 6
            echo "        <div class=\"row\">
            <h1><a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail_blog", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</a></h1>
            le <em>";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "d m Y"), "html", null, true);
            echo "</em>
            <p>";
            // line 9
            echo $this->getAttribute($context["article"], "contenu", array());
            echo "</p> ";
            // line 10
            echo "            ";
            if ($this->getAttribute($context["article"], "image", array())) {
                // line 11
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "url", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "alt", array()), "html", null, true);
                echo "\">
            ";
            }
            // line 13
            echo "            
            <hr>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b0b0ead390dfd4d7800d6b59ae24c24e64a09f18cf301bc1aa8ec0e31c19affb->leave($__internal_b0b0ead390dfd4d7800d6b59ae24c24e64a09f18cf301bc1aa8ec0e31c19affb_prof);

        
        $__internal_771f1b635bb9870d8433907813552ed470a7caa933923a8fe8072732d9894ac8->leave($__internal_771f1b635bb9870d8433907813552ed470a7caa933923a8fe8072732d9894ac8_prof);

    }

    public function getTemplateName()
    {
        return "blog/archives.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 13,  96 => 11,  93 => 10,  90 => 9,  86 => 8,  80 => 7,  77 => 6,  73 => 5,  70 => 4,  61 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":blog:layout.html.twig\" %}
{% block title %} {{ parent() }} - lol!{% endblock %}
{% block body_layout %}

    {% for article in articles %}
        <div class=\"row\">
            <h1><a href=\"{{ path('detail_blog', {id:article.id}) }}\">{{ article.titre }}</a></h1>
            le <em>{{ article.date | date('d m Y') }}</em>
            <p>{{ article.contenu | raw }}</p> {# raw permet de d'interpreter le #}
            {% if article.image %}
                <img src=\"{{ article.image.url }}\" alt=\"{{ article.image.alt }}\">
            {% endif %}
            
            <hr>
        </div>
    {% endfor %}
{% endblock %}", "blog/archives.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\blog\\archives.html.twig");
    }
}
