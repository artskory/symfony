<?php

/* blog/detail.html.twig */
class __TwigTemplate_2c34e6143b4208880b253c1fd461aae8aa1e443ddd7c7b232056bd7849396a26 extends Twig_Template
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
        $__internal_229c56a04d8ad4b9e6378400515e5bbf90277b6fffed5c80714300c6cdbfd3a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_229c56a04d8ad4b9e6378400515e5bbf90277b6fffed5c80714300c6cdbfd3a0->enter($__internal_229c56a04d8ad4b9e6378400515e5bbf90277b6fffed5c80714300c6cdbfd3a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/detail.html.twig"));

        $__internal_7c3036ed1b20a9010189b6b56b4b4f492d72503c23f9002a59facfbc80411311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c3036ed1b20a9010189b6b56b4b4f492d72503c23f9002a59facfbc80411311->enter($__internal_7c3036ed1b20a9010189b6b56b4b4f492d72503c23f9002a59facfbc80411311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_229c56a04d8ad4b9e6378400515e5bbf90277b6fffed5c80714300c6cdbfd3a0->leave($__internal_229c56a04d8ad4b9e6378400515e5bbf90277b6fffed5c80714300c6cdbfd3a0_prof);

        
        $__internal_7c3036ed1b20a9010189b6b56b4b4f492d72503c23f9002a59facfbc80411311->leave($__internal_7c3036ed1b20a9010189b6b56b4b4f492d72503c23f9002a59facfbc80411311_prof);

    }

    // line 4
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_0408dbfa04ef61c7b71730a58b907f1c75cc59f4424e4c6546b135903b6b1145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0408dbfa04ef61c7b71730a58b907f1c75cc59f4424e4c6546b135903b6b1145->enter($__internal_0408dbfa04ef61c7b71730a58b907f1c75cc59f4424e4c6546b135903b6b1145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_ff073b7afa8ec36eb251785a6d4693fa5a871be0bb0bbc1593ec6d37ae713ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff073b7afa8ec36eb251785a6d4693fa5a871be0bb0bbc1593ec6d37ae713ea7->enter($__internal_ff073b7afa8ec36eb251785a6d4693fa5a871be0bb0bbc1593ec6d37ae713ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "image", array()), "baseUrl", array()))), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_blog", array("slug" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "slug", array()))), "html", null, true);
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
        
        $__internal_ff073b7afa8ec36eb251785a6d4693fa5a871be0bb0bbc1593ec6d37ae713ea7->leave($__internal_ff073b7afa8ec36eb251785a6d4693fa5a871be0bb0bbc1593ec6d37ae713ea7_prof);

        
        $__internal_0408dbfa04ef61c7b71730a58b907f1c75cc59f4424e4c6546b135903b6b1145->leave($__internal_0408dbfa04ef61c7b71730a58b907f1c75cc59f4424e4c6546b135903b6b1145_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2b80e7756f58327ec3e7be4800b60451dc185a5a75e6b584752c8eef42d17cce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b80e7756f58327ec3e7be4800b60451dc185a5a75e6b584752c8eef42d17cce->enter($__internal_2b80e7756f58327ec3e7be4800b60451dc185a5a75e6b584752c8eef42d17cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_878fd5ba459e52a37fc47b0cd135771892cd2c97e607f6671ce1690c820e4e8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_878fd5ba459e52a37fc47b0cd135771892cd2c97e607f6671ce1690c820e4e8a->enter($__internal_878fd5ba459e52a37fc47b0cd135771892cd2c97e607f6671ce1690c820e4e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_878fd5ba459e52a37fc47b0cd135771892cd2c97e607f6671ce1690c820e4e8a->leave($__internal_878fd5ba459e52a37fc47b0cd135771892cd2c97e607f6671ce1690c820e4e8a_prof);

        
        $__internal_2b80e7756f58327ec3e7be4800b60451dc185a5a75e6b584752c8eef42d17cce->leave($__internal_2b80e7756f58327ec3e7be4800b60451dc185a5a75e6b584752c8eef42d17cce_prof);

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
            <img src=\"{{ asset('uploads/'~article.image.baseUrl) }}\" alt=\"{{ article.image.alt }}\">
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
                        <li><a href={{ path('modifier_blog', {slug:article.slug}) }}><span class=\"glyphicon glyphicon-edit\"></span> Modifier</a></li>
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
