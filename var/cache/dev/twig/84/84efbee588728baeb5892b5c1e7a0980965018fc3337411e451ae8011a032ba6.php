<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_bdce824590c68e2717018ca813eba7168632d7fe5ce6e1ad4b46264ab86d6e91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 1);
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
        $__internal_3b4a27a231a080a316c133ffcb4d25659f3786a8eab8bec9a9fc0e21e3fd8943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b4a27a231a080a316c133ffcb4d25659f3786a8eab8bec9a9fc0e21e3fd8943->enter($__internal_3b4a27a231a080a316c133ffcb4d25659f3786a8eab8bec9a9fc0e21e3fd8943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_511f755479fd27b526fb3474600609bb0ae4543cfd46f8a80a2288219e8f4fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_511f755479fd27b526fb3474600609bb0ae4543cfd46f8a80a2288219e8f4fd5->enter($__internal_511f755479fd27b526fb3474600609bb0ae4543cfd46f8a80a2288219e8f4fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b4a27a231a080a316c133ffcb4d25659f3786a8eab8bec9a9fc0e21e3fd8943->leave($__internal_3b4a27a231a080a316c133ffcb4d25659f3786a8eab8bec9a9fc0e21e3fd8943_prof);

        
        $__internal_511f755479fd27b526fb3474600609bb0ae4543cfd46f8a80a2288219e8f4fd5->leave($__internal_511f755479fd27b526fb3474600609bb0ae4543cfd46f8a80a2288219e8f4fd5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_090b5292ba8a052047e4a393ce30f7c74a697cfd2ad6e0f8087d6e620ffa2dd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_090b5292ba8a052047e4a393ce30f7c74a697cfd2ad6e0f8087d6e620ffa2dd0->enter($__internal_090b5292ba8a052047e4a393ce30f7c74a697cfd2ad6e0f8087d6e620ffa2dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9260494b8e580f97126b5a032e2e40908679b7f19c49a2a3052ba5f02d68355d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9260494b8e580f97126b5a032e2e40908679b7f19c49a2a3052ba5f02d68355d->enter($__internal_9260494b8e580f97126b5a032e2e40908679b7f19c49a2a3052ba5f02d68355d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9260494b8e580f97126b5a032e2e40908679b7f19c49a2a3052ba5f02d68355d->leave($__internal_9260494b8e580f97126b5a032e2e40908679b7f19c49a2a3052ba5f02d68355d_prof);

        
        $__internal_090b5292ba8a052047e4a393ce30f7c74a697cfd2ad6e0f8087d6e620ffa2dd0->leave($__internal_090b5292ba8a052047e4a393ce30f7c74a697cfd2ad6e0f8087d6e620ffa2dd0_prof);

    }

    // line 34
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7e452f22b445275749fbfd72c0b291c42d30eb3e031931181232a7a96d1c6725 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e452f22b445275749fbfd72c0b291c42d30eb3e031931181232a7a96d1c6725->enter($__internal_7e452f22b445275749fbfd72c0b291c42d30eb3e031931181232a7a96d1c6725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5f6dfee27ec21a1c7318b1480a33bb3c328b666f2b6d9ff9180b4740aaa5ae74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f6dfee27ec21a1c7318b1480a33bb3c328b666f2b6d9ff9180b4740aaa5ae74->enter($__internal_5f6dfee27ec21a1c7318b1480a33bb3c328b666f2b6d9ff9180b4740aaa5ae74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 35
        echo "            ";
        
        $__internal_5f6dfee27ec21a1c7318b1480a33bb3c328b666f2b6d9ff9180b4740aaa5ae74->leave($__internal_5f6dfee27ec21a1c7318b1480a33bb3c328b666f2b6d9ff9180b4740aaa5ae74_prof);

        
        $__internal_7e452f22b445275749fbfd72c0b291c42d30eb3e031931181232a7a96d1c6725->leave($__internal_7e452f22b445275749fbfd72c0b291c42d30eb3e031931181232a7a96d1c6725_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
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
            
{% endblock %}", "@FOSUser/layout.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
