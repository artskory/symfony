<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_f3379dd2688dfe8596d329f83f599655e30566e6e2d962897305e78ae24e29a3 extends Twig_Template
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
        $__internal_f4b2a23863141e8dfff82808c1d312fe949d4864ca3034c2d39b388bd8926e5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4b2a23863141e8dfff82808c1d312fe949d4864ca3034c2d39b388bd8926e5a->enter($__internal_f4b2a23863141e8dfff82808c1d312fe949d4864ca3034c2d39b388bd8926e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_0533b3929a7947a0c2b48ff1d0f0d863b7032f44e778f85b178a0f54a4af035f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0533b3929a7947a0c2b48ff1d0f0d863b7032f44e778f85b178a0f54a4af035f->enter($__internal_0533b3929a7947a0c2b48ff1d0f0d863b7032f44e778f85b178a0f54a4af035f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_f4b2a23863141e8dfff82808c1d312fe949d4864ca3034c2d39b388bd8926e5a->leave($__internal_f4b2a23863141e8dfff82808c1d312fe949d4864ca3034c2d39b388bd8926e5a_prof);

        
        $__internal_0533b3929a7947a0c2b48ff1d0f0d863b7032f44e778f85b178a0f54a4af035f->leave($__internal_0533b3929a7947a0c2b48ff1d0f0d863b7032f44e778f85b178a0f54a4af035f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
