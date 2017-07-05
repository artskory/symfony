<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_5326c85cd807482e54290804af17bb686050d193629b69098cd19296b68318ee extends Twig_Template
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
        $__internal_eddea5c5462747b3b142c9cd6e34c65125128500109a66bcee562caa9e8c0084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eddea5c5462747b3b142c9cd6e34c65125128500109a66bcee562caa9e8c0084->enter($__internal_eddea5c5462747b3b142c9cd6e34c65125128500109a66bcee562caa9e8c0084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_6bcedb44c69e7dfda907733f056b87d370fa0385f6bf53329805cbf55bf34495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bcedb44c69e7dfda907733f056b87d370fa0385f6bf53329805cbf55bf34495->enter($__internal_6bcedb44c69e7dfda907733f056b87d370fa0385f6bf53329805cbf55bf34495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_eddea5c5462747b3b142c9cd6e34c65125128500109a66bcee562caa9e8c0084->leave($__internal_eddea5c5462747b3b142c9cd6e34c65125128500109a66bcee562caa9e8c0084_prof);

        
        $__internal_6bcedb44c69e7dfda907733f056b87d370fa0385f6bf53329805cbf55bf34495->leave($__internal_6bcedb44c69e7dfda907733f056b87d370fa0385f6bf53329805cbf55bf34495_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
", "@FOSUser/Group/show_content.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Group\\show_content.html.twig");
    }
}
