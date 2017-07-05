<?php

/* @KnpPaginator/Pagination/sortable_link.html.twig */
class __TwigTemplate_3572c893de6c5e9d87099e533e59bf3026a319f9ebd4dca7d32906e9cf3b8715 extends Twig_Template
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
        $__internal_b0b28262763ff5357712e3d0d144957aee332c3f63f7ef4759da2575d645c59f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0b28262763ff5357712e3d0d144957aee332c3f63f7ef4759da2575d645c59f->enter($__internal_b0b28262763ff5357712e3d0d144957aee332c3f63f7ef4759da2575d645c59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

        $__internal_c068542ed512984c170580fcc5e142fd52272682e7a90855aad5245ab234889a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c068542ed512984c170580fcc5e142fd52272682e7a90855aad5245ab234889a->enter($__internal_c068542ed512984c170580fcc5e142fd52272682e7a90855aad5245ab234889a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

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
        
        $__internal_b0b28262763ff5357712e3d0d144957aee332c3f63f7ef4759da2575d645c59f->leave($__internal_b0b28262763ff5357712e3d0d144957aee332c3f63f7ef4759da2575d645c59f_prof);

        
        $__internal_c068542ed512984c170580fcc5e142fd52272682e7a90855aad5245ab234889a->leave($__internal_c068542ed512984c170580fcc5e142fd52272682e7a90855aad5245ab234889a_prof);

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
