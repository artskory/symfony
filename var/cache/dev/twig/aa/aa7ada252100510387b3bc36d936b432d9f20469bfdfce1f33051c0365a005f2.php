<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_c66995da99336ec646a7235aaf816043b8a240f85e63efe33175ea4eded45b01 extends Twig_Template
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
        $__internal_d53d1ecf3dde9f218e30971bbd8af7f8ad3b9e38ccaae9559058ac13a3839cd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d53d1ecf3dde9f218e30971bbd8af7f8ad3b9e38ccaae9559058ac13a3839cd5->enter($__internal_d53d1ecf3dde9f218e30971bbd8af7f8ad3b9e38ccaae9559058ac13a3839cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_46f84f0f6ca0d46fe1f086ab1b07407430f928275fb5c660d050bcdf3c156db0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f84f0f6ca0d46fe1f086ab1b07407430f928275fb5c660d050bcdf3c156db0->enter($__internal_46f84f0f6ca0d46fe1f086ab1b07407430f928275fb5c660d050bcdf3c156db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d53d1ecf3dde9f218e30971bbd8af7f8ad3b9e38ccaae9559058ac13a3839cd5->leave($__internal_d53d1ecf3dde9f218e30971bbd8af7f8ad3b9e38ccaae9559058ac13a3839cd5_prof);

        
        $__internal_46f84f0f6ca0d46fe1f086ab1b07407430f928275fb5c660d050bcdf3c156db0->leave($__internal_46f84f0f6ca0d46fe1f086ab1b07407430f928275fb5c660d050bcdf3c156db0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_281af21668df52d5e4da5d5f28419e4732f12900bfc6cbf26d5b1866338988a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_281af21668df52d5e4da5d5f28419e4732f12900bfc6cbf26d5b1866338988a2->enter($__internal_281af21668df52d5e4da5d5f28419e4732f12900bfc6cbf26d5b1866338988a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d0e16078e36f4fbc63c6dd92846894c6acaad691a14e7965dac52db397b6b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d0e16078e36f4fbc63c6dd92846894c6acaad691a14e7965dac52db397b6b02->enter($__internal_0d0e16078e36f4fbc63c6dd92846894c6acaad691a14e7965dac52db397b6b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0d0e16078e36f4fbc63c6dd92846894c6acaad691a14e7965dac52db397b6b02->leave($__internal_0d0e16078e36f4fbc63c6dd92846894c6acaad691a14e7965dac52db397b6b02_prof);

        
        $__internal_281af21668df52d5e4da5d5f28419e4732f12900bfc6cbf26d5b1866338988a2->leave($__internal_281af21668df52d5e4da5d5f28419e4732f12900bfc6cbf26d5b1866338988a2_prof);

    }

    // line 34
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d15b138ea0d3c6f823d218de89af2190adb2eb9b3b67da717f6eb047365eec64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d15b138ea0d3c6f823d218de89af2190adb2eb9b3b67da717f6eb047365eec64->enter($__internal_d15b138ea0d3c6f823d218de89af2190adb2eb9b3b67da717f6eb047365eec64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c3cf87b2202ce05e2f140e64d17beb2f0d5f5d877437f199500b3a76c5453697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3cf87b2202ce05e2f140e64d17beb2f0d5f5d877437f199500b3a76c5453697->enter($__internal_c3cf87b2202ce05e2f140e64d17beb2f0d5f5d877437f199500b3a76c5453697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 35
        echo "            ";
        
        $__internal_c3cf87b2202ce05e2f140e64d17beb2f0d5f5d877437f199500b3a76c5453697->leave($__internal_c3cf87b2202ce05e2f140e64d17beb2f0d5f5d877437f199500b3a76c5453697_prof);

        
        $__internal_d15b138ea0d3c6f823d218de89af2190adb2eb9b3b67da717f6eb047365eec64->leave($__internal_d15b138ea0d3c6f823d218de89af2190adb2eb9b3b67da717f6eb047365eec64_prof);

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
