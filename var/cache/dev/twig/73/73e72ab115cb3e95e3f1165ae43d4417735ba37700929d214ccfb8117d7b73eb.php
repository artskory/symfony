<?php

/* @FOSUser/Resetting/request_content.html.twig */
class __TwigTemplate_24834613dd5e486e0d8f2d95c103afe04e72a043342002b1c3548b580aef0a09 extends Twig_Template
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
        $__internal_afe9db33da0151ae46709ecc9ccc6055d9478db88b84ae2e142217340bd37c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afe9db33da0151ae46709ecc9ccc6055d9478db88b84ae2e142217340bd37c34->enter($__internal_afe9db33da0151ae46709ecc9ccc6055d9478db88b84ae2e142217340bd37c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        $__internal_1fc9975fec1378d110fec05516cabfa5d1bc63d7b92e5978ea8ea17633434b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc9975fec1378d110fec05516cabfa5d1bc63d7b92e5978ea8ea17633434b26->enter($__internal_1fc9975fec1378d110fec05516cabfa5d1bc63d7b92e5978ea8ea17633434b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

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
        
        $__internal_afe9db33da0151ae46709ecc9ccc6055d9478db88b84ae2e142217340bd37c34->leave($__internal_afe9db33da0151ae46709ecc9ccc6055d9478db88b84ae2e142217340bd37c34_prof);

        
        $__internal_1fc9975fec1378d110fec05516cabfa5d1bc63d7b92e5978ea8ea17633434b26->leave($__internal_1fc9975fec1378d110fec05516cabfa5d1bc63d7b92e5978ea8ea17633434b26_prof);

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
