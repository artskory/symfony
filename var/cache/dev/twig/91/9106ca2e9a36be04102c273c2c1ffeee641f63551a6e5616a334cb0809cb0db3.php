<?php

/* blog/archives.html.twig */
class __TwigTemplate_765000dcd60d178d0057c8c73b6942f6c8239350d1014a6092617ab3a95b7b52 extends Twig_Template
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
        $__internal_7fe0178a4f702119329231ec3111f69119fb8f32f839ac756d19e072729f37c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fe0178a4f702119329231ec3111f69119fb8f32f839ac756d19e072729f37c5->enter($__internal_7fe0178a4f702119329231ec3111f69119fb8f32f839ac756d19e072729f37c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/archives.html.twig"));

        $__internal_c5ccef9117878a3fdf723535fab18475bffc366cf195203f0865e1f486b7c5a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5ccef9117878a3fdf723535fab18475bffc366cf195203f0865e1f486b7c5a9->enter($__internal_c5ccef9117878a3fdf723535fab18475bffc366cf195203f0865e1f486b7c5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/archives.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fe0178a4f702119329231ec3111f69119fb8f32f839ac756d19e072729f37c5->leave($__internal_7fe0178a4f702119329231ec3111f69119fb8f32f839ac756d19e072729f37c5_prof);

        
        $__internal_c5ccef9117878a3fdf723535fab18475bffc366cf195203f0865e1f486b7c5a9->leave($__internal_c5ccef9117878a3fdf723535fab18475bffc366cf195203f0865e1f486b7c5a9_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_85e6a6b76804935dd7b862ce65270e510548a8f06eda459ba63b79d8a248976a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85e6a6b76804935dd7b862ce65270e510548a8f06eda459ba63b79d8a248976a->enter($__internal_85e6a6b76804935dd7b862ce65270e510548a8f06eda459ba63b79d8a248976a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c8358c66b12e007e0649f932cab30f51b8f334993bd86ab7779d0806cbbbdae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8358c66b12e007e0649f932cab30f51b8f334993bd86ab7779d0806cbbbdae0->enter($__internal_c8358c66b12e007e0649f932cab30f51b8f334993bd86ab7779d0806cbbbdae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - lol!";
        
        $__internal_c8358c66b12e007e0649f932cab30f51b8f334993bd86ab7779d0806cbbbdae0->leave($__internal_c8358c66b12e007e0649f932cab30f51b8f334993bd86ab7779d0806cbbbdae0_prof);

        
        $__internal_85e6a6b76804935dd7b862ce65270e510548a8f06eda459ba63b79d8a248976a->leave($__internal_85e6a6b76804935dd7b862ce65270e510548a8f06eda459ba63b79d8a248976a_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_dd81524e7ad1bd81c7512e32e89dde5e7431890cbc018287afb29866e76cb3f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd81524e7ad1bd81c7512e32e89dde5e7431890cbc018287afb29866e76cb3f8->enter($__internal_dd81524e7ad1bd81c7512e32e89dde5e7431890cbc018287afb29866e76cb3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_46a01fec9d19a441455389cbd990ed2c4c011dad157be62db7fc5caef75f910b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46a01fec9d19a441455389cbd990ed2c4c011dad157be62db7fc5caef75f910b->enter($__internal_46a01fec9d19a441455389cbd990ed2c4c011dad157be62db7fc5caef75f910b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        
        $__internal_46a01fec9d19a441455389cbd990ed2c4c011dad157be62db7fc5caef75f910b->leave($__internal_46a01fec9d19a441455389cbd990ed2c4c011dad157be62db7fc5caef75f910b_prof);

        
        $__internal_dd81524e7ad1bd81c7512e32e89dde5e7431890cbc018287afb29866e76cb3f8->leave($__internal_dd81524e7ad1bd81c7512e32e89dde5e7431890cbc018287afb29866e76cb3f8_prof);

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
