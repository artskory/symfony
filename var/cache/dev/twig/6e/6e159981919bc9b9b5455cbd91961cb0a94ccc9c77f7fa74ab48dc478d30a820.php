<?php

/* :blog:archives.html.twig */
class __TwigTemplate_a22ff1542d514ac7151fe3a0610556a0be5748ad1ee06f77ad3b3d513c77b95d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":blog:layout.html.twig", ":blog:archives.html.twig", 1);
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
        $__internal_8926787921f870400c539811724bdcdfce2154487d27cec0c9a275490e22aab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8926787921f870400c539811724bdcdfce2154487d27cec0c9a275490e22aab3->enter($__internal_8926787921f870400c539811724bdcdfce2154487d27cec0c9a275490e22aab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:archives.html.twig"));

        $__internal_c3f34e49eadc8a0a1c3fe84f823f6ec7040a78c2803c23036dccc59d368383a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3f34e49eadc8a0a1c3fe84f823f6ec7040a78c2803c23036dccc59d368383a1->enter($__internal_c3f34e49eadc8a0a1c3fe84f823f6ec7040a78c2803c23036dccc59d368383a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:archives.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8926787921f870400c539811724bdcdfce2154487d27cec0c9a275490e22aab3->leave($__internal_8926787921f870400c539811724bdcdfce2154487d27cec0c9a275490e22aab3_prof);

        
        $__internal_c3f34e49eadc8a0a1c3fe84f823f6ec7040a78c2803c23036dccc59d368383a1->leave($__internal_c3f34e49eadc8a0a1c3fe84f823f6ec7040a78c2803c23036dccc59d368383a1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_03f9c3493cb7c7595135be8270a9696ed5237881c2c055cb86b7aedcdc532726 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03f9c3493cb7c7595135be8270a9696ed5237881c2c055cb86b7aedcdc532726->enter($__internal_03f9c3493cb7c7595135be8270a9696ed5237881c2c055cb86b7aedcdc532726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_709c4659aa68081eee157cfaca8a78aad49f4500d43aef70580f5a5e442de373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_709c4659aa68081eee157cfaca8a78aad49f4500d43aef70580f5a5e442de373->enter($__internal_709c4659aa68081eee157cfaca8a78aad49f4500d43aef70580f5a5e442de373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - lol!";
        
        $__internal_709c4659aa68081eee157cfaca8a78aad49f4500d43aef70580f5a5e442de373->leave($__internal_709c4659aa68081eee157cfaca8a78aad49f4500d43aef70580f5a5e442de373_prof);

        
        $__internal_03f9c3493cb7c7595135be8270a9696ed5237881c2c055cb86b7aedcdc532726->leave($__internal_03f9c3493cb7c7595135be8270a9696ed5237881c2c055cb86b7aedcdc532726_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_9d386cf71bbfcdf78cdd0fbbf7c3a8235b8797cf9d6a6fba0c8be8d47a3ed851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d386cf71bbfcdf78cdd0fbbf7c3a8235b8797cf9d6a6fba0c8be8d47a3ed851->enter($__internal_9d386cf71bbfcdf78cdd0fbbf7c3a8235b8797cf9d6a6fba0c8be8d47a3ed851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_66cd68a623735ae706ef874944bcb901325e761fb85ee0c0d326f4f7f42a5e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66cd68a623735ae706ef874944bcb901325e761fb85ee0c0d326f4f7f42a5e62->enter($__internal_66cd68a623735ae706ef874944bcb901325e761fb85ee0c0d326f4f7f42a5e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        
        $__internal_66cd68a623735ae706ef874944bcb901325e761fb85ee0c0d326f4f7f42a5e62->leave($__internal_66cd68a623735ae706ef874944bcb901325e761fb85ee0c0d326f4f7f42a5e62_prof);

        
        $__internal_9d386cf71bbfcdf78cdd0fbbf7c3a8235b8797cf9d6a6fba0c8be8d47a3ed851->leave($__internal_9d386cf71bbfcdf78cdd0fbbf7c3a8235b8797cf9d6a6fba0c8be8d47a3ed851_prof);

    }

    public function getTemplateName()
    {
        return ":blog:archives.html.twig";
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
{% endblock %}", ":blog:archives.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/blog/archives.html.twig");
    }
}
