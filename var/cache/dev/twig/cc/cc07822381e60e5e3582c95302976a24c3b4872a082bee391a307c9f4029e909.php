<?php

/* blog/detail.html.twig */
class __TwigTemplate_c1dfef99e18f268fffab872d1e5b3648c69f7e7180b963577bdaf7bb0aef1d64 extends Twig_Template
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
        $__internal_7c95e31389c572a3b1390b2a3f28f04266813e9dfa53891e29af3c9c41f43a74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c95e31389c572a3b1390b2a3f28f04266813e9dfa53891e29af3c9c41f43a74->enter($__internal_7c95e31389c572a3b1390b2a3f28f04266813e9dfa53891e29af3c9c41f43a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/detail.html.twig"));

        $__internal_7cefb7d865799f7f1cb714fbed7131a47c5b3f15f1fd226c6ffe3a7fbc91689f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cefb7d865799f7f1cb714fbed7131a47c5b3f15f1fd226c6ffe3a7fbc91689f->enter($__internal_7cefb7d865799f7f1cb714fbed7131a47c5b3f15f1fd226c6ffe3a7fbc91689f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c95e31389c572a3b1390b2a3f28f04266813e9dfa53891e29af3c9c41f43a74->leave($__internal_7c95e31389c572a3b1390b2a3f28f04266813e9dfa53891e29af3c9c41f43a74_prof);

        
        $__internal_7cefb7d865799f7f1cb714fbed7131a47c5b3f15f1fd226c6ffe3a7fbc91689f->leave($__internal_7cefb7d865799f7f1cb714fbed7131a47c5b3f15f1fd226c6ffe3a7fbc91689f_prof);

    }

    // line 4
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_64b119d86d6a7e8f9572046346a282d53ca3c40da281a18e3bddf4a52cb4b63d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64b119d86d6a7e8f9572046346a282d53ca3c40da281a18e3bddf4a52cb4b63d->enter($__internal_64b119d86d6a7e8f9572046346a282d53ca3c40da281a18e3bddf4a52cb4b63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_da40142881bc7d0296f12ae6041f0dd4edf24031dfe124f32f33e2cfae50e189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da40142881bc7d0296f12ae6041f0dd4edf24031dfe124f32f33e2cfae50e189->enter($__internal_da40142881bc7d0296f12ae6041f0dd4edf24031dfe124f32f33e2cfae50e189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 5
        echo "        <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "titre", array()), "html", null, true);
        echo "</h1>
        le <em>";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "date", array()), "d m Y"), "html", null, true);
        echo "</em>
        par <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "user", array()), "html", null, true);
        echo "  <p>

        <p>";
        // line 9
        echo $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "contenu", array());
        echo "</p>
        ";
        // line 10
        if ($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "image", array())) {
            // line 11
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "image", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "image", array()), "alt", array()), "html", null, true);
            echo "\">
        ";
        }
        // line 13
        echo "        <div class=\"commentaire\">
            <h3 class=\"t-comment\">Commentaires</h3>

            ";
        // line 16
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 17
            echo "                ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
            echo "
                    ";
            // line 18
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "
                    <img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/loader.gif"), "html", null, true);
            echo "\" class=\"loader\" id=\"loading\">
                ";
            // line 20
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
            ";
        } else {
            // line 22
            echo "                <p class=\"alert alert-info\">Veuillez vous connecter</p>
            ";
        }
        // line 24
        echo "
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "succes"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 26
            echo "            <p class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 29
            echo "            <p class=\"allert allert-danger\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
            <ul class=\"list-unstyled comment\">
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "commentaires", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 34
            echo "                    <li>
                        le <i>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commentaire"], "date", array()), "d m Y"), "html", null, true);
            echo "</i>
                        <br>
                        ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "contenu", array()), "html", null, true);
            echo " par ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "user", array()), "html", null, true);
            echo "
                        <br>
                    </li>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            echo "                    <p>Pas de commentaire</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </div>
        </div>
        <div class=\"raw\">
            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "tags", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 47
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_blog", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\"><p class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "titre", array()), "html", null, true);
            echo "</p></a>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            echo "                <p>Pas de tag</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </div>
        
      
            ";
        // line 54
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN") || ($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "user", array()) == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())))) {
            // line 55
            echo "         
                <div class=\"mt15\">
                    <ul class=\"list-unstyled\">
                        <li><a href=";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_blog", array("id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()))), "html", null, true);
            echo "><span class=\"glyphicon glyphicon-edit\"></span> Modifier</a></li>
                        <li><a href=";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_blog", array("id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()))), "html", null, true);
            echo "><span class=\"glyphicon glyphicon-remove\"></span> Supprimer</a></li>
                    </ul>
                </div>
            ";
        }
        // line 63
        echo "     
    ";
        
        $__internal_da40142881bc7d0296f12ae6041f0dd4edf24031dfe124f32f33e2cfae50e189->leave($__internal_da40142881bc7d0296f12ae6041f0dd4edf24031dfe124f32f33e2cfae50e189_prof);

        
        $__internal_64b119d86d6a7e8f9572046346a282d53ca3c40da281a18e3bddf4a52cb4b63d->leave($__internal_64b119d86d6a7e8f9572046346a282d53ca3c40da281a18e3bddf4a52cb4b63d_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4b6ff46da653ddd4ee78bc6ae7b7d53a6321aa03bb91bde201d8cc1df296b46e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b6ff46da653ddd4ee78bc6ae7b7d53a6321aa03bb91bde201d8cc1df296b46e->enter($__internal_4b6ff46da653ddd4ee78bc6ae7b7d53a6321aa03bb91bde201d8cc1df296b46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5b532e62e9dbd1b0b24e49671c044e83229d6c2166e3534f7a1367d2b2d00563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b532e62e9dbd1b0b24e49671c044e83229d6c2166e3534f7a1367d2b2d00563->enter($__internal_5b532e62e9dbd1b0b24e49671c044e83229d6c2166e3534f7a1367d2b2d00563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
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
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_commentaire_blog");
        echo "', 
                                method:'POST',
                                dataType:'json',
                                data:{
                                    
                                    id: ";
        // line 81
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
        
        $__internal_5b532e62e9dbd1b0b24e49671c044e83229d6c2166e3534f7a1367d2b2d00563->leave($__internal_5b532e62e9dbd1b0b24e49671c044e83229d6c2166e3534f7a1367d2b2d00563_prof);

        
        $__internal_4b6ff46da653ddd4ee78bc6ae7b7d53a6321aa03bb91bde201d8cc1df296b46e->leave($__internal_4b6ff46da653ddd4ee78bc6ae7b7d53a6321aa03bb91bde201d8cc1df296b46e_prof);

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
        return array (  261 => 81,  253 => 76,  242 => 67,  233 => 66,  222 => 63,  215 => 59,  211 => 58,  206 => 55,  204 => 54,  199 => 51,  192 => 49,  182 => 47,  177 => 46,  172 => 43,  165 => 41,  154 => 37,  149 => 35,  146 => 34,  141 => 33,  137 => 31,  128 => 29,  123 => 28,  114 => 26,  110 => 25,  107 => 24,  103 => 22,  98 => 20,  94 => 19,  90 => 18,  85 => 17,  83 => 16,  78 => 13,  70 => 11,  68 => 10,  64 => 9,  59 => 7,  55 => 6,  50 => 5,  41 => 4,  11 => 1,);
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
        par <p>{{ article.user }}  <p>

        <p>{{ article.contenu | raw }}</p>
        {% if article.image %}
            <img src=\"{{ article.image.url }}\" alt=\"{{ article.image.alt }}\">
        {% endif %}
        <div class=\"commentaire\">
            <h3 class=\"t-comment\">Commentaires</h3>

            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ form_start(form) }}
                    {{ form_widget(form) }}
                    <img src=\"{{ asset('image/loader.gif')}}\" class=\"loader\" id=\"loading\">
                {{ form_end(form) }}
            {% else %}
                <p class=\"alert alert-info\">Veuillez vous connecter</p>
            {% endif %}

            {% for message in app.session.flashbag.get('succes')%}
            <p class=\"alert alert-success\">{{ message }}</p>
            {% endfor%}
            {% for message in app.session.flashbag.get('erreur') %}
            <p class=\"allert allert-danger\">{{ message }}</p>
            {% endfor %}

            <ul class=\"list-unstyled comment\">
                {% for commentaire in article.commentaires %}
                    <li>
                        le <i>{{ commentaire.date | date('d m Y') }}</i>
                        <br>
                        {{ commentaire.contenu }} par {{ commentaire.user }}
                        <br>
                    </li>
                {% else %}
                    <p>Pas de commentaire</p>
                {% endfor %}
            </div>
        </div>
        <div class=\"raw\">
            {% for tag in article.tags %}
                <a href=\"{{ path('tag_blog', {id:tag.id}) }}\"><p class=\"btn btn-primary\">{{ tag.titre }}</p></a>
            {% else %}
                <p>Pas de tag</p>
            {% endfor %}
        </div>
        
      
            {% if (is_granted(\"ROLE_SUPER_ADMIN\") or article.user== app.user) %}
         
                <div class=\"mt15\">
                    <ul class=\"list-unstyled\">
                        <li><a href={{ path('modifier_blog', {id:article.id}) }}><span class=\"glyphicon glyphicon-edit\"></span> Modifier</a></li>
                        <li><a href={{ path('supprimer_blog', {id:article.id}) }}><span class=\"glyphicon glyphicon-remove\"></span> Supprimer</a></li>
                    </ul>
                </div>
            {% endif %}
     
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
