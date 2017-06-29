<?php

/* catalogue/detail.html.twig */
class __TwigTemplate_72a9768033b1dfcc1b4505fb57b1ca1292b50dcb8990e043048734cea4944347 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":blog:layout.html.twig", "catalogue/detail.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body_layout' => array($this, 'block_body_layout'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":blog:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad3d55c189d0e28171bf6fef7f5b0ad0f3b1d4f31679d5de547ac3cb0ab967c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad3d55c189d0e28171bf6fef7f5b0ad0f3b1d4f31679d5de547ac3cb0ab967c9->enter($__internal_ad3d55c189d0e28171bf6fef7f5b0ad0f3b1d4f31679d5de547ac3cb0ab967c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/detail.html.twig"));

        $__internal_b7567143c8c650cee16dccba831811079320d79cd0ae892f1fd90edf1d836f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7567143c8c650cee16dccba831811079320d79cd0ae892f1fd90edf1d836f98->enter($__internal_b7567143c8c650cee16dccba831811079320d79cd0ae892f1fd90edf1d836f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad3d55c189d0e28171bf6fef7f5b0ad0f3b1d4f31679d5de547ac3cb0ab967c9->leave($__internal_ad3d55c189d0e28171bf6fef7f5b0ad0f3b1d4f31679d5de547ac3cb0ab967c9_prof);

        
        $__internal_b7567143c8c650cee16dccba831811079320d79cd0ae892f1fd90edf1d836f98->leave($__internal_b7567143c8c650cee16dccba831811079320d79cd0ae892f1fd90edf1d836f98_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5fff96b7f14381d74676aff2f5b486db3da7ad859f421fb26e9544482a3e0a4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fff96b7f14381d74676aff2f5b486db3da7ad859f421fb26e9544482a3e0a4b->enter($__internal_5fff96b7f14381d74676aff2f5b486db3da7ad859f421fb26e9544482a3e0a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fb8af55c384445582ec1261315100c027f522b9f68bb11d2832b0a4d8cfab16e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb8af55c384445582ec1261315100c027f522b9f68bb11d2832b0a4d8cfab16e->enter($__internal_fb8af55c384445582ec1261315100c027f522b9f68bb11d2832b0a4d8cfab16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - lol!";
        
        $__internal_fb8af55c384445582ec1261315100c027f522b9f68bb11d2832b0a4d8cfab16e->leave($__internal_fb8af55c384445582ec1261315100c027f522b9f68bb11d2832b0a4d8cfab16e_prof);

        
        $__internal_5fff96b7f14381d74676aff2f5b486db3da7ad859f421fb26e9544482a3e0a4b->leave($__internal_5fff96b7f14381d74676aff2f5b486db3da7ad859f421fb26e9544482a3e0a4b_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_5aa4159f41c8c789312ab8f08d4a08fe923da968c728dc2a9a6fe369d2383924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aa4159f41c8c789312ab8f08d4a08fe923da968c728dc2a9a6fe369d2383924->enter($__internal_5aa4159f41c8c789312ab8f08d4a08fe923da968c728dc2a9a6fe369d2383924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_aed33c0d33206dc6d70424c2aa79138967d228e91f6be7485fd6d11f2c0fe707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed33c0d33206dc6d70424c2aa79138967d228e91f6be7485fd6d11f2c0fe707->enter($__internal_aed33c0d33206dc6d70424c2aa79138967d228e91f6be7485fd6d11f2c0fe707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 4
        echo "    
        <div class=\"row\">
            <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "titre", array()), "html", null, true);
        echo "</h1>
            <span class=\"price\"><b>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "prix", array()), "html", null, true);
        echo " €</b></<span>
            <p>";
        // line 8
        echo $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "contenu", array());
        echo "</p>
            ";
        // line 9
        if ($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", array())) {
            // line 10
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "image", array()), "alt", array()), "html", null, true);
            echo "\">
            ";
        }
        // line 12
        echo "            
            <hr>
    
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "succes"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "            <p class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            echo "            <p class=\"allert allert-danger\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    
            <h5>Note</h5>
            
            ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/loader.gif"), "html", null, true);
        echo "\" class=\"loader\" id=\"loading\">
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            
            <ul class=\"list-unstyled comment\">
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "notes", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 31
            echo "                <li>
                    ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "value", array()), "html", null, true);
            echo "
                </li>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "            <p>Pas de note</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </ul>
            <hr>
        </div>
";
        
        $__internal_aed33c0d33206dc6d70424c2aa79138967d228e91f6be7485fd6d11f2c0fe707->leave($__internal_aed33c0d33206dc6d70424c2aa79138967d228e91f6be7485fd6d11f2c0fe707_prof);

        
        $__internal_5aa4159f41c8c789312ab8f08d4a08fe923da968c728dc2a9a6fe369d2383924->leave($__internal_5aa4159f41c8c789312ab8f08d4a08fe923da968c728dc2a9a6fe369d2383924_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f47baab335115f0c7646757a813fa7f319f8a820637ed0a217a1c55e883d5def = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f47baab335115f0c7646757a813fa7f319f8a820637ed0a217a1c55e883d5def->enter($__internal_f47baab335115f0c7646757a813fa7f319f8a820637ed0a217a1c55e883d5def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_35b99e54a729c873f232d89625bcb269dc04b21df71b78f5ac5ce699bfa5af22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b99e54a729c873f232d89625bcb269dc04b21df71b78f5ac5ce699bfa5af22->enter($__internal_35b99e54a729c873f232d89625bcb269dc04b21df71b78f5ac5ce699bfa5af22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "    <script>
        \$('form[name=appbundle_note]') .submit(
            function (e){
                \$('#ajax_error').remove();
                e.preventDefault();
                \$('#loading').show();
                \$('#appbundle_note_Ajouter')
                    .addClass('disabled')
                    .prop('disabled', true);
                \$.ajax({
                    url:'";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_note_produit");
        echo "', 
                        method:'POST',
                        dataType:'json',
                        data:{
                            id: ";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["produit"] ?? $this->getContext($context, "produit")), "id", array()), "html", null, true);
        echo ",
                            value: \$('form[name=appbundle_note] select').val()
                        },
                        error: function() {
                            alert('erreur');
                        },
                        success: function (data) {
                            \$('#loading').hide();
                            \$('#appbundle_note_Ajouter') 
                                .removeClass('disabled')
                                .prop('disabled', false);
                            if(data.success){
                                \$('ul.list-unstyled.comment') .prepend(
                                    '<li>' + data.note.value + '</li>');
                            }else{
                                \$('form[name = appbundle_note] button') .after('<p class=\"alert alert-danger\">Pb :(</p>');
                            }
                        }  
                });
            }
        );
    </script>
";
        
        $__internal_35b99e54a729c873f232d89625bcb269dc04b21df71b78f5ac5ce699bfa5af22->leave($__internal_35b99e54a729c873f232d89625bcb269dc04b21df71b78f5ac5ce699bfa5af22_prof);

        
        $__internal_f47baab335115f0c7646757a813fa7f319f8a820637ed0a217a1c55e883d5def->leave($__internal_f47baab335115f0c7646757a813fa7f319f8a820637ed0a217a1c55e883d5def_prof);

    }

    public function getTemplateName()
    {
        return "catalogue/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 57,  209 => 53,  197 => 43,  188 => 42,  175 => 37,  168 => 35,  160 => 32,  157 => 31,  152 => 30,  146 => 27,  142 => 26,  138 => 25,  134 => 24,  129 => 21,  120 => 19,  115 => 18,  106 => 16,  102 => 15,  97 => 12,  89 => 10,  87 => 9,  83 => 8,  79 => 7,  75 => 6,  71 => 4,  62 => 3,  42 => 2,  11 => 1,);
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
    
        <div class=\"row\">
            <h1>{{ produit.titre }}</h1>
            <span class=\"price\"><b>{{ produit.prix }} €</b></<span>
            <p>{{ produit.contenu | raw }}</p>
            {% if produit.image %}
                <img src=\"{{ produit.image.url }}\" alt=\"{{ produit.image.alt }}\">
            {% endif %}
            
            <hr>
    
            {% for message in app.session.flashbag.get('succes')%}
            <p class=\"alert alert-success\">{{ message }}</p>
            {% endfor%}
            {% for message in app.session.flashbag.get('erreur') %}
            <p class=\"allert allert-danger\">{{ message }}</p>
            {% endfor %}
    
            <h5>Note</h5>
            
            {{ form_start(form) }}
            {{ form_widget(form) }}
            <img src=\"{{ asset('image/loader.gif')}}\" class=\"loader\" id=\"loading\">
            {{ form_end(form) }}
            
            <ul class=\"list-unstyled comment\">
            {% for note in produit.notes %}
                <li>
                    {{ note.value }}
                </li>
            {% else %}
            <p>Pas de note</p>
            {% endfor %}
            </ul>
            <hr>
        </div>
{% endblock %}

{% block javascripts %}
    <script>
        \$('form[name=appbundle_note]') .submit(
            function (e){
                \$('#ajax_error').remove();
                e.preventDefault();
                \$('#loading').show();
                \$('#appbundle_note_Ajouter')
                    .addClass('disabled')
                    .prop('disabled', true);
                \$.ajax({
                    url:'{{ path('ajax_note_produit') }}', 
                        method:'POST',
                        dataType:'json',
                        data:{
                            id: {{ produit.id }},
                            value: \$('form[name=appbundle_note] select').val()
                        },
                        error: function() {
                            alert('erreur');
                        },
                        success: function (data) {
                            \$('#loading').hide();
                            \$('#appbundle_note_Ajouter') 
                                .removeClass('disabled')
                                .prop('disabled', false);
                            if(data.success){
                                \$('ul.list-unstyled.comment') .prepend(
                                    '<li>' + data.note.value + '</li>');
                            }else{
                                \$('form[name = appbundle_note] button') .after('<p class=\"alert alert-danger\">Pb :(</p>');
                            }
                        }  
                });
            }
        );
    </script>
{% endblock %}", "catalogue/detail.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\catalogue\\detail.html.twig");
    }
}
