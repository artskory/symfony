<?php

/* @FOSUser/Resetting/request_content.html.twig */
class __TwigTemplate_02f5af336cd6c2dad1232d2bdc41dfa6221f9a3a9df58df7e976c327fd5ab87c extends Twig_Template
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
        $__internal_e53e67438871eecddd500bcfa4a3cac9e7bcf3e417b93a3c65b7ad77e8db3f22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e53e67438871eecddd500bcfa4a3cac9e7bcf3e417b93a3c65b7ad77e8db3f22->enter($__internal_e53e67438871eecddd500bcfa4a3cac9e7bcf3e417b93a3c65b7ad77e8db3f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        $__internal_fa3c3c59d9e7c654b1257a3426c043104ba057ea827c0ce551a47e6af1662158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa3c3c59d9e7c654b1257a3426c043104ba057ea827c0ce551a47e6af1662158->enter($__internal_fa3c3c59d9e7c654b1257a3426c043104ba057ea827c0ce551a47e6af1662158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_e53e67438871eecddd500bcfa4a3cac9e7bcf3e417b93a3c65b7ad77e8db3f22->leave($__internal_e53e67438871eecddd500bcfa4a3cac9e7bcf3e417b93a3c65b7ad77e8db3f22_prof);

        
        $__internal_fa3c3c59d9e7c654b1257a3426c043104ba057ea827c0ce551a47e6af1662158->leave($__internal_fa3c3c59d9e7c654b1257a3426c043104ba057ea827c0ce551a47e6af1662158_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
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

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "@FOSUser/Resetting/request_content.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request_content.html.twig");
    }
}
