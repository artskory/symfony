<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_9207ad74278f94b520d3ee9f712b5e0f118f49188b9b5ad0d460cb8f166b05a1 extends Twig_Template
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
        $__internal_a008ebc58da9a3fa43b8f89ccb16c54ee6d525bec9c0b9ee6d57fa4dd6006390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a008ebc58da9a3fa43b8f89ccb16c54ee6d525bec9c0b9ee6d57fa4dd6006390->enter($__internal_a008ebc58da9a3fa43b8f89ccb16c54ee6d525bec9c0b9ee6d57fa4dd6006390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        $__internal_36d76b15c73ffa643c1cc7408599925beae6e18450957474f9e194dd7bb47bbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36d76b15c73ffa643c1cc7408599925beae6e18450957474f9e194dd7bb47bbf->enter($__internal_36d76b15c73ffa643c1cc7408599925beae6e18450957474f9e194dd7bb47bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "<div class=\"center\">
<form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-login\">
    ";
        // line 8
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 9
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
    ";
        }
        // line 11
        echo "
    <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"Login\"/>

    <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" required=\"required\" placeholder=\"Password\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Se souvenir de moi", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

    <input type=\"submit\" id=\"_submit\" class=\"btn btn-primary\" name=\"_submit\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Envoyer", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
</div>
";
        
        $__internal_a008ebc58da9a3fa43b8f89ccb16c54ee6d525bec9c0b9ee6d57fa4dd6006390->leave($__internal_a008ebc58da9a3fa43b8f89ccb16c54ee6d525bec9c0b9ee6d57fa4dd6006390_prof);

        
        $__internal_36d76b15c73ffa643c1cc7408599925beae6e18450957474f9e194dd7bb47bbf->leave($__internal_36d76b15c73ffa643c1cc7408599925beae6e18450957474f9e194dd7bb47bbf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 19,  62 => 17,  54 => 12,  51 => 11,  45 => 9,  43 => 8,  39 => 7,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
<div class=\"center\">
<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" class=\"form-login\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}

    <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" placeholder=\"Login\"/>

    <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" required=\"required\" placeholder=\"Password\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">{{ 'Se souvenir de moi'|trans }}</label>

    <input type=\"submit\" id=\"_submit\" class=\"btn btn-primary\" name=\"_submit\" value=\"{{ 'Envoyer'|trans }}\" />
</form>
</div>
", "FOSUserBundle:Security:login_content.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
