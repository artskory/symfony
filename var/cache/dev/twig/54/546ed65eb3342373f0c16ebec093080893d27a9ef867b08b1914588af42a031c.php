<?php

/* :blog:formulaire.html.twig */
class __TwigTemplate_cdb247966fcf548420f5a5298dbed279d603f0c00c81a5b6d4ecece679d9df6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_367af1a0bd6a7a7b788543afa74ec839c22d310ec554db76baf2dccc9721d754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_367af1a0bd6a7a7b788543afa74ec839c22d310ec554db76baf2dccc9721d754->enter($__internal_367af1a0bd6a7a7b788543afa74ec839c22d310ec554db76baf2dccc9721d754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:formulaire.html.twig"));

        $__internal_ce8642f4a8a52a009bc3cadcbf3954035437b5542537d89ec4450ec49f6f7ad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce8642f4a8a52a009bc3cadcbf3954035437b5542537d89ec4450ec49f6f7ad4->enter($__internal_ce8642f4a8a52a009bc3cadcbf3954035437b5542537d89ec4450ec49f6f7ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:formulaire.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "ckeditor.html.twig"));
        // line 2
        echo "

";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 5
            echo "    <p class=\"allert allert-danger\">
        ";
            // line 6
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre", array()), 'label', array("label" => "Votre titre"));
        echo "
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre", array()), 'widget');
        echo " 
    
";
        // line 17
        echo "
";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'row', array("attr" => array("class" => "js-datepicker")));
        echo " ";
        // line 19
        echo "
";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_367af1a0bd6a7a7b788543afa74ec839c22d310ec554db76baf2dccc9721d754->leave($__internal_367af1a0bd6a7a7b788543afa74ec839c22d310ec554db76baf2dccc9721d754_prof);

        
        $__internal_ce8642f4a8a52a009bc3cadcbf3954035437b5542537d89ec4450ec49f6f7ad4->leave($__internal_ce8642f4a8a52a009bc3cadcbf3954035437b5542537d89ec4450ec49f6f7ad4_prof);

    }

    public function getTemplateName()
    {
        return ":blog:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 20,  73 => 19,  70 => 18,  67 => 17,  62 => 14,  58 => 13,  54 => 12,  50 => 10,  47 => 9,  38 => 6,  35 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form 'ckeditor.html.twig' %}


{% for message in app.session.flashbag.get('erreur') %}
    <p class=\"allert allert-danger\">
        {{ message }}
    </p>
{% endfor %}

{{ form_start(form) }}
{#{{ form_label(form.titre) }}#}
{{ form_label(form.titre, 'Votre titre') }}
    {{ form_errors(form.titre) }}
    {{ form_widget(form.titre) }} 
    
{# {{ form_widget(form.date)}}  #}

{{ form_row(form.date, {'attr':{'class':'js-datepicker'} }) }} {# date sera en premier #}

{{ form_end(form) }}
", ":blog:formulaire.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/blog/formulaire.html.twig");
    }
}
