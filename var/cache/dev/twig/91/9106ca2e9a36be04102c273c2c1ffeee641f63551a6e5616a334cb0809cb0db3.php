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
        $__internal_9a65a763e71a40e56fd3cb9cd64ca23e287efc2e7c6ac496ffac4dd0f486b74d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a65a763e71a40e56fd3cb9cd64ca23e287efc2e7c6ac496ffac4dd0f486b74d->enter($__internal_9a65a763e71a40e56fd3cb9cd64ca23e287efc2e7c6ac496ffac4dd0f486b74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/archives.html.twig"));

        $__internal_da96a40e567e0e04b4286981262d2a39337371ad1be09c04b3fb7fcbf0c5e7c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da96a40e567e0e04b4286981262d2a39337371ad1be09c04b3fb7fcbf0c5e7c2->enter($__internal_da96a40e567e0e04b4286981262d2a39337371ad1be09c04b3fb7fcbf0c5e7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/archives.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a65a763e71a40e56fd3cb9cd64ca23e287efc2e7c6ac496ffac4dd0f486b74d->leave($__internal_9a65a763e71a40e56fd3cb9cd64ca23e287efc2e7c6ac496ffac4dd0f486b74d_prof);

        
        $__internal_da96a40e567e0e04b4286981262d2a39337371ad1be09c04b3fb7fcbf0c5e7c2->leave($__internal_da96a40e567e0e04b4286981262d2a39337371ad1be09c04b3fb7fcbf0c5e7c2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a7957790bfdcc39bc3b3125f7f7b83577fa585f9cf998003453840465f955ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a7957790bfdcc39bc3b3125f7f7b83577fa585f9cf998003453840465f955ea->enter($__internal_8a7957790bfdcc39bc3b3125f7f7b83577fa585f9cf998003453840465f955ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2b9627586f7430ad9a9af2490bdaf47483fbe8a7aa5cece9ba6a1fcf705595d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b9627586f7430ad9a9af2490bdaf47483fbe8a7aa5cece9ba6a1fcf705595d9->enter($__internal_2b9627586f7430ad9a9af2490bdaf47483fbe8a7aa5cece9ba6a1fcf705595d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - lol!";
        
        $__internal_2b9627586f7430ad9a9af2490bdaf47483fbe8a7aa5cece9ba6a1fcf705595d9->leave($__internal_2b9627586f7430ad9a9af2490bdaf47483fbe8a7aa5cece9ba6a1fcf705595d9_prof);

        
        $__internal_8a7957790bfdcc39bc3b3125f7f7b83577fa585f9cf998003453840465f955ea->leave($__internal_8a7957790bfdcc39bc3b3125f7f7b83577fa585f9cf998003453840465f955ea_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_4e9d632eb7f79cff56429165c4d96178a3de8b4dfc5814c19b67777371bac292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e9d632eb7f79cff56429165c4d96178a3de8b4dfc5814c19b67777371bac292->enter($__internal_4e9d632eb7f79cff56429165c4d96178a3de8b4dfc5814c19b67777371bac292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_b21b2aaa0a68c8991d083a19ed6cf5655616b6b166cf43ff1a0ac0ab7315e2df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b21b2aaa0a68c8991d083a19ed6cf5655616b6b166cf43ff1a0ac0ab7315e2df->enter($__internal_b21b2aaa0a68c8991d083a19ed6cf5655616b6b166cf43ff1a0ac0ab7315e2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        
        $__internal_b21b2aaa0a68c8991d083a19ed6cf5655616b6b166cf43ff1a0ac0ab7315e2df->leave($__internal_b21b2aaa0a68c8991d083a19ed6cf5655616b6b166cf43ff1a0ac0ab7315e2df_prof);

        
        $__internal_4e9d632eb7f79cff56429165c4d96178a3de8b4dfc5814c19b67777371bac292->leave($__internal_4e9d632eb7f79cff56429165c4d96178a3de8b4dfc5814c19b67777371bac292_prof);

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
