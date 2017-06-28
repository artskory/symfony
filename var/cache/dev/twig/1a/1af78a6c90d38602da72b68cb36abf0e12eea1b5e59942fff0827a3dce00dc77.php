<?php

/* @KnpPaginator/Pagination/sortable_link.html.twig */
class __TwigTemplate_49793de949203abc78dd69207adf26cf5235876de3cc804d08c3f10967b2db22 extends Twig_Template
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
        $__internal_3a215e0b06f7d06a9181efa122b794b0c69d6c222b72156da8048cbe7ce80577 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a215e0b06f7d06a9181efa122b794b0c69d6c222b72156da8048cbe7ce80577->enter($__internal_3a215e0b06f7d06a9181efa122b794b0c69d6c222b72156da8048cbe7ce80577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

        $__internal_f31674dadb563ecb9c159561365c5fc8998564a5cf0a8dc7c3e399d0da808726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f31674dadb563ecb9c159561365c5fc8998564a5cf0a8dc7c3e399d0da808726->enter($__internal_f31674dadb563ecb9c159561365c5fc8998564a5cf0a8dc7c3e399d0da808726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

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
        
        $__internal_3a215e0b06f7d06a9181efa122b794b0c69d6c222b72156da8048cbe7ce80577->leave($__internal_3a215e0b06f7d06a9181efa122b794b0c69d6c222b72156da8048cbe7ce80577_prof);

        
        $__internal_f31674dadb563ecb9c159561365c5fc8998564a5cf0a8dc7c3e399d0da808726->leave($__internal_f31674dadb563ecb9c159561365c5fc8998564a5cf0a8dc7c3e399d0da808726_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/sortable_link.html.twig";
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
", "@KnpPaginator/Pagination/sortable_link.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\knplabs\\knp-paginator-bundle\\Resources\\views\\Pagination\\sortable_link.html.twig");
    }
}
