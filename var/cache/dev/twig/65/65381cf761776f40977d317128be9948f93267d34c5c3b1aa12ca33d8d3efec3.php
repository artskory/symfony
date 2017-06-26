<?php

/* blog/detail.html.twig */
class __TwigTemplate_afd2b45269afc1a6967b741b6bebbc4ffd1da585d1958df75a78830046512ca7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":blog:layout.html.twig", "blog/detail.html.twig", 1);
        $this->blocks = array(
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
        $__internal_c6e8d42352da4c5b119b3160dc44ba853262f853774ae9759339ee692046716f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6e8d42352da4c5b119b3160dc44ba853262f853774ae9759339ee692046716f->enter($__internal_c6e8d42352da4c5b119b3160dc44ba853262f853774ae9759339ee692046716f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/detail.html.twig"));

        $__internal_be50d0604bf40581c616772016fc3acf9098cc76322e2aba622263661f64e3e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be50d0604bf40581c616772016fc3acf9098cc76322e2aba622263661f64e3e2->enter($__internal_be50d0604bf40581c616772016fc3acf9098cc76322e2aba622263661f64e3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6e8d42352da4c5b119b3160dc44ba853262f853774ae9759339ee692046716f->leave($__internal_c6e8d42352da4c5b119b3160dc44ba853262f853774ae9759339ee692046716f_prof);

        
        $__internal_be50d0604bf40581c616772016fc3acf9098cc76322e2aba622263661f64e3e2->leave($__internal_be50d0604bf40581c616772016fc3acf9098cc76322e2aba622263661f64e3e2_prof);

    }

    // line 4
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_9ffc2f09358aaec5d9a059f8954208a3de49817979d176661dfdfc37b58ae355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ffc2f09358aaec5d9a059f8954208a3de49817979d176661dfdfc37b58ae355->enter($__internal_9ffc2f09358aaec5d9a059f8954208a3de49817979d176661dfdfc37b58ae355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_4ac046075f9163dbb840a066a1a0e45dbcdb085dcbb582bc907a99c8364bbaad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ac046075f9163dbb840a066a1a0e45dbcdb085dcbb582bc907a99c8364bbaad->enter($__internal_4ac046075f9163dbb840a066a1a0e45dbcdb085dcbb582bc907a99c8364bbaad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 5
        echo "        <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "titre", array()), "html", null, true);
        echo "</h1>
        le <em>";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "date", array()), "d m Y"), "html", null, true);
        echo "</em>
        <p>";
        // line 7
        echo $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "contenu", array());
        echo "</p>
        ";
        // line 8
        if ($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "image", array())) {
            // line 9
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "image", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "image", array()), "alt", array()), "html", null, true);
            echo "\">
        ";
        }
        // line 11
        echo "    
        <h3 class=\"t-comment\">Commentaires</h3>
        
        ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/loader.gif"), "html", null, true);
        echo "\" class=\"loader\" id=\"loading\">
        ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "succes"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            echo "        <p class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 23
            echo "        <p class=\"allert allert-danger\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            
        <ul class=\"list-unstyled comment\">
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "commentaires", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 28
            echo "                <li>
                    <i>le ";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commentaire"], "date", array()), "d m Y"), "html", null, true);
            echo "</i>
                    <br>
                    ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "contenu", array()), "html", null, true);
            echo "
                </li>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "                <p>Pas de commentaire</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </div>
        
        <div class=\"raw\">
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "tags", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 40
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_blog", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\"><p class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "titre", array()), "html", null, true);
            echo "</p></a>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "                <p>Pas de tag</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </div>
        <div class=\"mt15\">
            <ul class=\"list-unstyled\">
                <li><a href=";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_blog", array("id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "><span class=\"glyphicon glyphicon-edit\"></span> Modifier</a></li>
                <li><a href=";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_blog", array("id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "><span class=\"glyphicon glyphicon-remove\"></span> Supprimer</a></li>
            </ul>
        </div>
    ";
        
        $__internal_4ac046075f9163dbb840a066a1a0e45dbcdb085dcbb582bc907a99c8364bbaad->leave($__internal_4ac046075f9163dbb840a066a1a0e45dbcdb085dcbb582bc907a99c8364bbaad_prof);

        
        $__internal_9ffc2f09358aaec5d9a059f8954208a3de49817979d176661dfdfc37b58ae355->leave($__internal_9ffc2f09358aaec5d9a059f8954208a3de49817979d176661dfdfc37b58ae355_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b3794a92dcc5690f961c18450ad85504bbe2d4c87361cf156d6857cccd134269 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3794a92dcc5690f961c18450ad85504bbe2d4c87361cf156d6857cccd134269->enter($__internal_b3794a92dcc5690f961c18450ad85504bbe2d4c87361cf156d6857cccd134269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f83233091ede83d678082b3ce947c8f285aa1e464faff6500e8095df64ed5170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f83233091ede83d678082b3ce947c8f285aa1e464faff6500e8095df64ed5170->enter($__internal_f83233091ede83d678082b3ce947c8f285aa1e464faff6500e8095df64ed5170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "        <script>
            \$('form[name=appbundle_commentaire]') .submit(
                function (e){
                    e.preventDefault();
                    \$('#loading').show();
                    \$('form[name=appbundle_commentaire] button') 
                            .addClass('disabled')
                            .prop('disabled', true);
                    \$.ajax({
                        url:'";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_commentaire_blog");
        echo "', 
                                method:'POST',
                                dataType:'json',
                                data:{
                                    
                                    id: ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()), "html", null, true);
        echo ",
                                    contenu: \$('form[name=appbundle_commentaire] textarea').val()
                            
                                },
                                error: function() {
                                    
                                    alert('erreur');
                                    
                                },
                                success: function (data) {
                                    
                                    \$('#loading').hide();
                                    
                                    if(data.success){
                                        
                                        \$('ul.list-unstyled') .prepend(
                                            '<li><i>' + data.commentaire.date + '</i><br>' + data.commentaire.contenu + '</li>');
                                    
                                    }else{
                                        
                                            \$('form[name = appbundle_commentaire] button') .after('<p class=\"alert alert-danger\">Pb :(</p>');
                                            
                                    }
                                }  
                            });
                    });
        </script>
    ";
        
        $__internal_f83233091ede83d678082b3ce947c8f285aa1e464faff6500e8095df64ed5170->leave($__internal_f83233091ede83d678082b3ce947c8f285aa1e464faff6500e8095df64ed5170_prof);

        
        $__internal_b3794a92dcc5690f961c18450ad85504bbe2d4c87361cf156d6857cccd134269->leave($__internal_b3794a92dcc5690f961c18450ad85504bbe2d4c87361cf156d6857cccd134269_prof);

    }

    public function getTemplateName()
    {
        return "blog/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 68,  224 => 63,  213 => 54,  204 => 53,  190 => 48,  186 => 47,  181 => 44,  174 => 42,  164 => 40,  159 => 39,  154 => 36,  147 => 34,  139 => 31,  134 => 29,  131 => 28,  126 => 27,  122 => 25,  113 => 23,  108 => 22,  99 => 20,  95 => 19,  90 => 17,  86 => 16,  82 => 15,  78 => 14,  73 => 11,  65 => 9,  63 => 8,  59 => 7,  55 => 6,  50 => 5,  41 => 4,  11 => 1,);
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
    {# <h1>{{ article['titre'] }}</h1>  #}
    {# ou #}
    {% block body_layout %}
        <h1>{{ article.titre }}</h1>
        le <em>{{ article.date | date('d m Y') }}</em>
        <p>{{ article.contenu | raw }}</p>
        {% if article.image %}
            <img src=\"{{ article.image.url }}\" alt=\"{{ article.image.alt }}\">
        {% endif %}
    
        <h3 class=\"t-comment\">Commentaires</h3>
        
        {{ form_start(form) }}
        {{ form_widget(form) }}
        <img src=\"{{ asset('image/loader.gif')}}\" class=\"loader\" id=\"loading\">
        {{ form_end(form) }}
        
        {% for message in app.session.flashbag.get('succes')%}
        <p class=\"alert alert-success\">{{ message }}</p>
        {% endfor%}
        {% for message in app.session.flashbag.get('erreur') %}
        <p class=\"allert allert-danger\">{{ message }}</p>
        {% endfor %}
            
        <ul class=\"list-unstyled comment\">
            {% for commentaire in article.commentaires %}
                <li>
                    <i>le {{ commentaire.date | date('d m Y') }}</i>
                    <br>
                    {{ commentaire.contenu }}
                </li>
            {% else %}
                <p>Pas de commentaire</p>
            {% endfor %}
        </div>
        
        <div class=\"raw\">
            {% for tag in article.tags %}
                <a href=\"{{ path('tag_blog', {id:tag.id}) }}\"><p class=\"btn btn-primary\">{{ tag.titre }}</p></a>
            {% else %}
                <p>Pas de tag</p>
            {% endfor %}
        </div>
        <div class=\"mt15\">
            <ul class=\"list-unstyled\">
                <li><a href={{ path('modifier_blog', {id:article.id}) }}><span class=\"glyphicon glyphicon-edit\"></span> Modifier</a></li>
                <li><a href={{ path('supprimer_blog', {id:article.id}) }}><span class=\"glyphicon glyphicon-remove\"></span> Supprimer</a></li>
            </ul>
        </div>
    {% endblock%}
    
    {% block javascripts %}
        <script>
            \$('form[name=appbundle_commentaire]') .submit(
                function (e){
                    e.preventDefault();
                    \$('#loading').show();
                    \$('form[name=appbundle_commentaire] button') 
                            .addClass('disabled')
                            .prop('disabled', true);
                    \$.ajax({
                        url:'{{ path('ajax_commentaire_blog') }}', 
                                method:'POST',
                                dataType:'json',
                                data:{
                                    
                                    id: {{ article.id }},
                                    contenu: \$('form[name=appbundle_commentaire] textarea').val()
                            
                                },
                                error: function() {
                                    
                                    alert('erreur');
                                    
                                },
                                success: function (data) {
                                    
                                    \$('#loading').hide();
                                    
                                    if(data.success){
                                        
                                        \$('ul.list-unstyled') .prepend(
                                            '<li><i>' + data.commentaire.date + '</i><br>' + data.commentaire.contenu + '</li>');
                                    
                                    }else{
                                        
                                            \$('form[name = appbundle_commentaire] button') .after('<p class=\"alert alert-danger\">Pb :(</p>');
                                            
                                    }
                                }  
                            });
                    });
        </script>
    {% endblock %}
", "blog/detail.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\blog\\detail.html.twig");
    }
}
