<?php

/* :blog:archives.html.twig */
class __TwigTemplate_d73583a13a10a85cebc6c3ef3c741264c7f654d7661974e3ac7a111d98c5ec32 extends Twig_Template
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
        $__internal_14a90036a1a31d6dc132b829d8099d6abda610142c5deb611f9c94a58ed6d3f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14a90036a1a31d6dc132b829d8099d6abda610142c5deb611f9c94a58ed6d3f4->enter($__internal_14a90036a1a31d6dc132b829d8099d6abda610142c5deb611f9c94a58ed6d3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:archives.html.twig"));

        $__internal_e289de09de3692f06b5aa64fc43a446ebab0269933b8b01b0a08eab63113dc34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e289de09de3692f06b5aa64fc43a446ebab0269933b8b01b0a08eab63113dc34->enter($__internal_e289de09de3692f06b5aa64fc43a446ebab0269933b8b01b0a08eab63113dc34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:archives.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14a90036a1a31d6dc132b829d8099d6abda610142c5deb611f9c94a58ed6d3f4->leave($__internal_14a90036a1a31d6dc132b829d8099d6abda610142c5deb611f9c94a58ed6d3f4_prof);

        
        $__internal_e289de09de3692f06b5aa64fc43a446ebab0269933b8b01b0a08eab63113dc34->leave($__internal_e289de09de3692f06b5aa64fc43a446ebab0269933b8b01b0a08eab63113dc34_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_be4e7c8f6920bb59f494fc24280dbc757debd5ced68b3caccc31b15d5148d58b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be4e7c8f6920bb59f494fc24280dbc757debd5ced68b3caccc31b15d5148d58b->enter($__internal_be4e7c8f6920bb59f494fc24280dbc757debd5ced68b3caccc31b15d5148d58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c1c4f9525a5c2a3875fe915278c43a9315a413bf413ca509aa918f65f42c085a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c4f9525a5c2a3875fe915278c43a9315a413bf413ca509aa918f65f42c085a->enter($__internal_c1c4f9525a5c2a3875fe915278c43a9315a413bf413ca509aa918f65f42c085a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - lol!";
        
        $__internal_c1c4f9525a5c2a3875fe915278c43a9315a413bf413ca509aa918f65f42c085a->leave($__internal_c1c4f9525a5c2a3875fe915278c43a9315a413bf413ca509aa918f65f42c085a_prof);

        
        $__internal_be4e7c8f6920bb59f494fc24280dbc757debd5ced68b3caccc31b15d5148d58b->leave($__internal_be4e7c8f6920bb59f494fc24280dbc757debd5ced68b3caccc31b15d5148d58b_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_dd08a0aadd0f295e4a61e3acb7c8a5ef4c139161f6b990eaaab96cc998520e1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd08a0aadd0f295e4a61e3acb7c8a5ef4c139161f6b990eaaab96cc998520e1b->enter($__internal_dd08a0aadd0f295e4a61e3acb7c8a5ef4c139161f6b990eaaab96cc998520e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_4624969497da50fc19a29880fe0dd0f598f4a00cc6d748f5e11f48c40143fefb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4624969497da50fc19a29880fe0dd0f598f4a00cc6d748f5e11f48c40143fefb->enter($__internal_4624969497da50fc19a29880fe0dd0f598f4a00cc6d748f5e11f48c40143fefb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        
        $__internal_4624969497da50fc19a29880fe0dd0f598f4a00cc6d748f5e11f48c40143fefb->leave($__internal_4624969497da50fc19a29880fe0dd0f598f4a00cc6d748f5e11f48c40143fefb_prof);

        
        $__internal_dd08a0aadd0f295e4a61e3acb7c8a5ef4c139161f6b990eaaab96cc998520e1b->leave($__internal_dd08a0aadd0f295e4a61e3acb7c8a5ef4c139161f6b990eaaab96cc998520e1b_prof);

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
