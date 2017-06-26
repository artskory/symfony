<?php

/* :catalogue:index.html.twig */
class __TwigTemplate_89029c2aa26d09d83968b1388d44cfeb0eb699a79e63950536abd156e81da50a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":catalogue:layout.html.twig", ":catalogue:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body_layout' => array($this, 'block_body_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":catalogue:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c933471eb81e48f3505aa45d8dc2ebe1189b1377f0a85c656d03ca0eb3c7a274 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c933471eb81e48f3505aa45d8dc2ebe1189b1377f0a85c656d03ca0eb3c7a274->enter($__internal_c933471eb81e48f3505aa45d8dc2ebe1189b1377f0a85c656d03ca0eb3c7a274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:index.html.twig"));

        $__internal_1a04cab535bcf01540545176d43a5cab16822f557466345ae1ef99e3b21635a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a04cab535bcf01540545176d43a5cab16822f557466345ae1ef99e3b21635a2->enter($__internal_1a04cab535bcf01540545176d43a5cab16822f557466345ae1ef99e3b21635a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c933471eb81e48f3505aa45d8dc2ebe1189b1377f0a85c656d03ca0eb3c7a274->leave($__internal_c933471eb81e48f3505aa45d8dc2ebe1189b1377f0a85c656d03ca0eb3c7a274_prof);

        
        $__internal_1a04cab535bcf01540545176d43a5cab16822f557466345ae1ef99e3b21635a2->leave($__internal_1a04cab535bcf01540545176d43a5cab16822f557466345ae1ef99e3b21635a2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_85f544c98d69c0fec7d0721c1ccc553804d08f1514f6fed54562ab5356eab143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85f544c98d69c0fec7d0721c1ccc553804d08f1514f6fed54562ab5356eab143->enter($__internal_85f544c98d69c0fec7d0721c1ccc553804d08f1514f6fed54562ab5356eab143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ca3bc5b89c59b59c7a8919be6cd0ca09568cc84fa1bd0da0668a38f3d7320216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca3bc5b89c59b59c7a8919be6cd0ca09568cc84fa1bd0da0668a38f3d7320216->enter($__internal_ca3bc5b89c59b59c7a8919be6cd0ca09568cc84fa1bd0da0668a38f3d7320216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - lol!";
        
        $__internal_ca3bc5b89c59b59c7a8919be6cd0ca09568cc84fa1bd0da0668a38f3d7320216->leave($__internal_ca3bc5b89c59b59c7a8919be6cd0ca09568cc84fa1bd0da0668a38f3d7320216_prof);

        
        $__internal_85f544c98d69c0fec7d0721c1ccc553804d08f1514f6fed54562ab5356eab143->leave($__internal_85f544c98d69c0fec7d0721c1ccc553804d08f1514f6fed54562ab5356eab143_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_ab93e7657b8e9115eddd6967163aa18a08d9367d570afe4bc234cb34c3411f16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab93e7657b8e9115eddd6967163aa18a08d9367d570afe4bc234cb34c3411f16->enter($__internal_ab93e7657b8e9115eddd6967163aa18a08d9367d570afe4bc234cb34c3411f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_8ca8ef768278d7f00be21b3331e187d0abe037b9a03d4be7a1acc4e4169b1031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca8ef768278d7f00be21b3331e187d0abe037b9a03d4be7a1acc4e4169b1031->enter($__internal_8ca8ef768278d7f00be21b3331e187d0abe037b9a03d4be7a1acc4e4169b1031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
        
        $__internal_8ca8ef768278d7f00be21b3331e187d0abe037b9a03d4be7a1acc4e4169b1031->leave($__internal_8ca8ef768278d7f00be21b3331e187d0abe037b9a03d4be7a1acc4e4169b1031_prof);

        
        $__internal_ab93e7657b8e9115eddd6967163aa18a08d9367d570afe4bc234cb34c3411f16->leave($__internal_ab93e7657b8e9115eddd6967163aa18a08d9367d570afe4bc234cb34c3411f16_prof);

    }

    public function getTemplateName()
    {
        return ":catalogue:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 9,  79 => 8,  75 => 7,  70 => 4,  61 => 3,  41 => 2,  11 => 1,);
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
{% endblock %}", ":catalogue:index.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/catalogue/index.html.twig");
    }
}
