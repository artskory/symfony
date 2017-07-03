<?php

/* :tag:new.html.twig */
class __TwigTemplate_b8997e6751ddd50c1b494820e53b0766f49cefbc0a04bbb143ba9557e77b9203 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":tag:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a10cf662b2b7db31640de9e44a7592e1de19dcf29d613168ef28e0e255cbe073 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a10cf662b2b7db31640de9e44a7592e1de19dcf29d613168ef28e0e255cbe073->enter($__internal_a10cf662b2b7db31640de9e44a7592e1de19dcf29d613168ef28e0e255cbe073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tag:new.html.twig"));

        $__internal_b9dbf56950de85ac472d234e3929b6b66e75acf08316a4dec6979cbde3917f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9dbf56950de85ac472d234e3929b6b66e75acf08316a4dec6979cbde3917f37->enter($__internal_b9dbf56950de85ac472d234e3929b6b66e75acf08316a4dec6979cbde3917f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tag:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a10cf662b2b7db31640de9e44a7592e1de19dcf29d613168ef28e0e255cbe073->leave($__internal_a10cf662b2b7db31640de9e44a7592e1de19dcf29d613168ef28e0e255cbe073_prof);

        
        $__internal_b9dbf56950de85ac472d234e3929b6b66e75acf08316a4dec6979cbde3917f37->leave($__internal_b9dbf56950de85ac472d234e3929b6b66e75acf08316a4dec6979cbde3917f37_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0084ac4c4e879f6a7c6f65999386013bb7c64f049cbc69ad0ff331c593e1c8f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0084ac4c4e879f6a7c6f65999386013bb7c64f049cbc69ad0ff331c593e1c8f2->enter($__internal_0084ac4c4e879f6a7c6f65999386013bb7c64f049cbc69ad0ff331c593e1c8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d23ce56c38535c790822e53431bab2ca1fc2d187aa3380b5b7c3bfeb74a92b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d23ce56c38535c790822e53431bab2ca1fc2d187aa3380b5b7c3bfeb74a92b9f->enter($__internal_d23ce56c38535c790822e53431bab2ca1fc2d187aa3380b5b7c3bfeb74a92b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tag creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" class=\"btn btn-default\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_tag_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_d23ce56c38535c790822e53431bab2ca1fc2d187aa3380b5b7c3bfeb74a92b9f->leave($__internal_d23ce56c38535c790822e53431bab2ca1fc2d187aa3380b5b7c3bfeb74a92b9f_prof);

        
        $__internal_0084ac4c4e879f6a7c6f65999386013bb7c64f049cbc69ad0ff331c593e1c8f2->leave($__internal_0084ac4c4e879f6a7c6f65999386013bb7c64f049cbc69ad0ff331c593e1c8f2_prof);

    }

    public function getTemplateName()
    {
        return ":tag:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Tag creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" class=\"btn btn-default\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('admin_tag_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":tag:new.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/tag/new.html.twig");
    }
}
