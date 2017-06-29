<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_947298fb00db7fa1df28b9e66bb81de9138ad5cfafca47a7ad0a3b6567dd1ff1 extends Twig_Template
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
        $__internal_fdd68b08549f6ebf0b90f17851ae44e2869b05d52b86a93fe637a5526a7a6cb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdd68b08549f6ebf0b90f17851ae44e2869b05d52b86a93fe637a5526a7a6cb9->enter($__internal_fdd68b08549f6ebf0b90f17851ae44e2869b05d52b86a93fe637a5526a7a6cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        $__internal_574b6f520954e0dc9acee9ca1a0dec97e84ff5dce71d605fcda542960644a2e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_574b6f520954e0dc9acee9ca1a0dec97e84ff5dce71d605fcda542960644a2e6->enter($__internal_574b6f520954e0dc9acee9ca1a0dec97e84ff5dce71d605fcda542960644a2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

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
        
        $__internal_fdd68b08549f6ebf0b90f17851ae44e2869b05d52b86a93fe637a5526a7a6cb9->leave($__internal_fdd68b08549f6ebf0b90f17851ae44e2869b05d52b86a93fe637a5526a7a6cb9_prof);

        
        $__internal_574b6f520954e0dc9acee9ca1a0dec97e84ff5dce71d605fcda542960644a2e6->leave($__internal_574b6f520954e0dc9acee9ca1a0dec97e84ff5dce71d605fcda542960644a2e6_prof);

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
