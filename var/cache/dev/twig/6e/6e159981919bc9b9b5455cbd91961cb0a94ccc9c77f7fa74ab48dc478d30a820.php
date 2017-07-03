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
        $__internal_8212567d361c9367a5e9d762194d0a6622adb2cf5e437deddeaab71f67703d5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8212567d361c9367a5e9d762194d0a6622adb2cf5e437deddeaab71f67703d5b->enter($__internal_8212567d361c9367a5e9d762194d0a6622adb2cf5e437deddeaab71f67703d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:archives.html.twig"));

        $__internal_f0a90e39a94e1398b19c2999dcb511fe82ba13a005da5d277d606c358f65ff22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a90e39a94e1398b19c2999dcb511fe82ba13a005da5d277d606c358f65ff22->enter($__internal_f0a90e39a94e1398b19c2999dcb511fe82ba13a005da5d277d606c358f65ff22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:archives.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8212567d361c9367a5e9d762194d0a6622adb2cf5e437deddeaab71f67703d5b->leave($__internal_8212567d361c9367a5e9d762194d0a6622adb2cf5e437deddeaab71f67703d5b_prof);

        
        $__internal_f0a90e39a94e1398b19c2999dcb511fe82ba13a005da5d277d606c358f65ff22->leave($__internal_f0a90e39a94e1398b19c2999dcb511fe82ba13a005da5d277d606c358f65ff22_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_468acc0c9c3993123def4e3e9c3fbd8d5d26894504802928e5427f1788c841c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_468acc0c9c3993123def4e3e9c3fbd8d5d26894504802928e5427f1788c841c3->enter($__internal_468acc0c9c3993123def4e3e9c3fbd8d5d26894504802928e5427f1788c841c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_61fbd6382ebf4debc9596227eb52baed506e2dc3281c15a0060f6e643bf8d7ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61fbd6382ebf4debc9596227eb52baed506e2dc3281c15a0060f6e643bf8d7ae->enter($__internal_61fbd6382ebf4debc9596227eb52baed506e2dc3281c15a0060f6e643bf8d7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - lol!";
        
        $__internal_61fbd6382ebf4debc9596227eb52baed506e2dc3281c15a0060f6e643bf8d7ae->leave($__internal_61fbd6382ebf4debc9596227eb52baed506e2dc3281c15a0060f6e643bf8d7ae_prof);

        
        $__internal_468acc0c9c3993123def4e3e9c3fbd8d5d26894504802928e5427f1788c841c3->leave($__internal_468acc0c9c3993123def4e3e9c3fbd8d5d26894504802928e5427f1788c841c3_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_fc5b09d60c01b478b33d5e64f47bb62a1b925c708c0fdd515cd037a9ae4a8dbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc5b09d60c01b478b33d5e64f47bb62a1b925c708c0fdd515cd037a9ae4a8dbd->enter($__internal_fc5b09d60c01b478b33d5e64f47bb62a1b925c708c0fdd515cd037a9ae4a8dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_2aa5e7e7a11df54533bb0b49ee110eca32c30f9121bf52412c02b4e44636d607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa5e7e7a11df54533bb0b49ee110eca32c30f9121bf52412c02b4e44636d607->enter($__internal_2aa5e7e7a11df54533bb0b49ee110eca32c30f9121bf52412c02b4e44636d607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        
        $__internal_2aa5e7e7a11df54533bb0b49ee110eca32c30f9121bf52412c02b4e44636d607->leave($__internal_2aa5e7e7a11df54533bb0b49ee110eca32c30f9121bf52412c02b4e44636d607_prof);

        
        $__internal_fc5b09d60c01b478b33d5e64f47bb62a1b925c708c0fdd515cd037a9ae4a8dbd->leave($__internal_fc5b09d60c01b478b33d5e64f47bb62a1b925c708c0fdd515cd037a9ae4a8dbd_prof);

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
