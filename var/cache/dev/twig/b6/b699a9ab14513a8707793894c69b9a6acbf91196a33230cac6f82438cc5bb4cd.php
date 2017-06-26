<?php

/* :blog:formulaire.html.twig */
class __TwigTemplate_c5d1b551828635e5c7de4850be202e51b0a4e9fa7c00af0aa07989ff9e518575 extends Twig_Template
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
        $__internal_e3b213986adac1b3da08c716d74af4ef48826835401fdc7fd077f4a9ba3a0b93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3b213986adac1b3da08c716d74af4ef48826835401fdc7fd077f4a9ba3a0b93->enter($__internal_e3b213986adac1b3da08c716d74af4ef48826835401fdc7fd077f4a9ba3a0b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:formulaire.html.twig"));

        $__internal_7ee29ccb7a947b5cfdeb4326a5588a94c3acb199967655d89732ae73f3c12da9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee29ccb7a947b5cfdeb4326a5588a94c3acb199967655d89732ae73f3c12da9->enter($__internal_7ee29ccb7a947b5cfdeb4326a5588a94c3acb199967655d89732ae73f3c12da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:formulaire.html.twig"));

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
        
        $__internal_e3b213986adac1b3da08c716d74af4ef48826835401fdc7fd077f4a9ba3a0b93->leave($__internal_e3b213986adac1b3da08c716d74af4ef48826835401fdc7fd077f4a9ba3a0b93_prof);

        
        $__internal_7ee29ccb7a947b5cfdeb4326a5588a94c3acb199967655d89732ae73f3c12da9->leave($__internal_7ee29ccb7a947b5cfdeb4326a5588a94c3acb199967655d89732ae73f3c12da9_prof);

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
", ":blog:formulaire.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/blog/formulaire.html.twig");
    }
}
