<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_6dde63a81b4b1ec88ac55142b96d72f7cf5e2df491786888d6306cce59f547df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41f5a20e9add06ee570f3c2cac9872348b108a073848b5c7b086379866966363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41f5a20e9add06ee570f3c2cac9872348b108a073848b5c7b086379866966363->enter($__internal_41f5a20e9add06ee570f3c2cac9872348b108a073848b5c7b086379866966363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_adbda7c707a8a8253a404714dad4efe676e53657a89e74e320286f7165af331b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adbda7c707a8a8253a404714dad4efe676e53657a89e74e320286f7165af331b->enter($__internal_adbda7c707a8a8253a404714dad4efe676e53657a89e74e320286f7165af331b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41f5a20e9add06ee570f3c2cac9872348b108a073848b5c7b086379866966363->leave($__internal_41f5a20e9add06ee570f3c2cac9872348b108a073848b5c7b086379866966363_prof);

        
        $__internal_adbda7c707a8a8253a404714dad4efe676e53657a89e74e320286f7165af331b->leave($__internal_adbda7c707a8a8253a404714dad4efe676e53657a89e74e320286f7165af331b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bf8584fbb7317294514d991d6338cbb8231628017ccebcac60e754001491b7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bf8584fbb7317294514d991d6338cbb8231628017ccebcac60e754001491b7b->enter($__internal_9bf8584fbb7317294514d991d6338cbb8231628017ccebcac60e754001491b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bdbd7cccb4949ecec852fdedde93644bbf47711ea3e504366b8e2f9fa31ac47d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdbd7cccb4949ecec852fdedde93644bbf47711ea3e504366b8e2f9fa31ac47d->enter($__internal_bdbd7cccb4949ecec852fdedde93644bbf47711ea3e504366b8e2f9fa31ac47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
        <div>
            ";
        // line 6
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 7
            echo "                
                <div class=\"alert alert-success\">    
                    <p>Bonjour ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</p>
                    <p>Votre email de connexion : ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
            echo "</p>
                    <p>Dernière connexion le : ";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "lastLogin", array()), "d-m-Y H:i:s"), "html", null, true);
            echo "</p>
                </div>
                
                ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 20
            echo "            ";
        }
        // line 21
        echo "        </div>
            
        ";
        // line 23
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 24
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 25
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 26
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 27
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "        ";
        }
        // line 32
        echo "
        <div>
            ";
        // line 34
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 36
        echo "        </div>
            
";
        
        $__internal_bdbd7cccb4949ecec852fdedde93644bbf47711ea3e504366b8e2f9fa31ac47d->leave($__internal_bdbd7cccb4949ecec852fdedde93644bbf47711ea3e504366b8e2f9fa31ac47d_prof);

        
        $__internal_9bf8584fbb7317294514d991d6338cbb8231628017ccebcac60e754001491b7b->leave($__internal_9bf8584fbb7317294514d991d6338cbb8231628017ccebcac60e754001491b7b_prof);

    }

    // line 34
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20b878c35262f1a0e446a16b3b3798e3f052ef228f14e0886b9dfc568b1aabb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20b878c35262f1a0e446a16b3b3798e3f052ef228f14e0886b9dfc568b1aabb7->enter($__internal_20b878c35262f1a0e446a16b3b3798e3f052ef228f14e0886b9dfc568b1aabb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_140f324b0c49a31f389a40cc07966058d58a203fb3969d92e00fc82bb367c8ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140f324b0c49a31f389a40cc07966058d58a203fb3969d92e00fc82bb367c8ec->enter($__internal_140f324b0c49a31f389a40cc07966058d58a203fb3969d92e00fc82bb367c8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 35
        echo "            ";
        
        $__internal_140f324b0c49a31f389a40cc07966058d58a203fb3969d92e00fc82bb367c8ec->leave($__internal_140f324b0c49a31f389a40cc07966058d58a203fb3969d92e00fc82bb367c8ec_prof);

        
        $__internal_20b878c35262f1a0e446a16b3b3798e3f052ef228f14e0886b9dfc568b1aabb7->leave($__internal_20b878c35262f1a0e446a16b3b3798e3f052ef228f14e0886b9dfc568b1aabb7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 35,  148 => 34,  136 => 36,  134 => 34,  130 => 32,  127 => 31,  121 => 30,  112 => 27,  107 => 26,  102 => 25,  97 => 24,  95 => 23,  91 => 21,  88 => 20,  82 => 16,  78 => 15,  74 => 14,  68 => 11,  64 => 10,  60 => 9,  56 => 7,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}

        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                
                <div class=\"alert alert-success\">    
                    <p>Bonjour {{ app.user.username }}</p>
                    <p>Votre email de connexion : {{ app.user.email }}</p>
                    <p>Dernière connexion le : {{ app.user.lastLogin | date(\"d-m-Y H:i:s\") }}</p>
                </div>
                
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
{#                <a href=\"{{ path('fos_user_security_login') }}\" class=\"btn btn-danger\">{{ 'Déconection'|trans({}, 'FOSUserBundle') }}</a>#}
            {% endif %}
        </div>
            
        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
            
{% endblock %}", "FOSUserBundle::layout.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
