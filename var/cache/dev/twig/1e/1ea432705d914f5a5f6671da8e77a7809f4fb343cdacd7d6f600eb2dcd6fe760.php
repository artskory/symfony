<?php

/* blog/formulaire.html.twig */
class __TwigTemplate_fc830053b86515af27ead861d70226bc0416c21c3f799944399f82def9b30f73 extends Twig_Template
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
        $__internal_e64a151b7ff26e06fbc6dea268b9110b4bd28b6abaf32d464ecc544bbaf675b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e64a151b7ff26e06fbc6dea268b9110b4bd28b6abaf32d464ecc544bbaf675b0->enter($__internal_e64a151b7ff26e06fbc6dea268b9110b4bd28b6abaf32d464ecc544bbaf675b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/formulaire.html.twig"));

        $__internal_bdf6f8d8300a858f98b4434248f3448c6f3d6516d41cd6b68ea5458ee6c7a2f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdf6f8d8300a858f98b4434248f3448c6f3d6516d41cd6b68ea5458ee6c7a2f8->enter($__internal_bdf6f8d8300a858f98b4434248f3448c6f3d6516d41cd6b68ea5458ee6c7a2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/formulaire.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "ckeditor.html.twig"));
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 4
            echo "    <p class=\"allert allert-danger\">
        ";
            // line 5
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre", array()), 'label', array("label" => "Votre titre"));
        echo "
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titre", array()), 'widget');
        echo " 
    
";
        // line 16
        echo "
";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'row', array("attr" => array("class" => "js-datepicker")));
        echo " ";
        // line 18
        echo "
";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_e64a151b7ff26e06fbc6dea268b9110b4bd28b6abaf32d464ecc544bbaf675b0->leave($__internal_e64a151b7ff26e06fbc6dea268b9110b4bd28b6abaf32d464ecc544bbaf675b0_prof);

        
        $__internal_bdf6f8d8300a858f98b4434248f3448c6f3d6516d41cd6b68ea5458ee6c7a2f8->leave($__internal_bdf6f8d8300a858f98b4434248f3448c6f3d6516d41cd6b68ea5458ee6c7a2f8_prof);

    }

    public function getTemplateName()
    {
        return "blog/formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  72 => 18,  69 => 17,  66 => 16,  61 => 13,  57 => 12,  53 => 11,  49 => 9,  46 => 8,  37 => 5,  34 => 4,  30 => 3,  27 => 2,  25 => 1,);
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
", "blog/formulaire.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\blog\\formulaire.html.twig");
    }
}
