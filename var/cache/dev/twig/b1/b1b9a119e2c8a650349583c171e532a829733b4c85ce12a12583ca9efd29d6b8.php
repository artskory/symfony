<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_5aa60ff242ccaeb55923077402c6bdbdbdd691d2f83d58e4b9e79eb14cb001a3 extends Twig_Template
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
        $__internal_d169122f1e6c7a41211ac52fc7b221e3b7bd1d7d60fe53a88863c8d70ceb6375 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d169122f1e6c7a41211ac52fc7b221e3b7bd1d7d60fe53a88863c8d70ceb6375->enter($__internal_d169122f1e6c7a41211ac52fc7b221e3b7bd1d7d60fe53a88863c8d70ceb6375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        $__internal_1e9844784253599429126df8438c2d11b581c6489a9a00a5039869e153c92b88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e9844784253599429126df8438c2d11b581c6489a9a00a5039869e153c92b88->enter($__internal_1e9844784253599429126df8438c2d11b581c6489a9a00a5039869e153c92b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_d169122f1e6c7a41211ac52fc7b221e3b7bd1d7d60fe53a88863c8d70ceb6375->leave($__internal_d169122f1e6c7a41211ac52fc7b221e3b7bd1d7d60fe53a88863c8d70ceb6375_prof);

        
        $__internal_1e9844784253599429126df8438c2d11b581c6489a9a00a5039869e153c92b88->leave($__internal_1e9844784253599429126df8438c2d11b581c6489a9a00a5039869e153c92b88_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a{% for attr, value in options %} {{ attr }}=\"{{ value }}\"{% endfor %}>{{ title }}</a>
", "KnpPaginatorBundle:Pagination:sortable_link.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\knplabs\\knp-paginator-bundle/Resources/views/Pagination/sortable_link.html.twig");
    }
}
