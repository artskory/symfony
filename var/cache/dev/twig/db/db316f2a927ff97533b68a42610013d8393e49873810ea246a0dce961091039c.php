<?php

/* tag/new.html.twig */
class __TwigTemplate_58c3f587847b633b5c3dd4b0fb9c06f45152aa746ba9ed860915de5c5489fe70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/new.html.twig", 1);
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
        $__internal_76b89a4ccfd59e6016234e1ac240a13a44e38b93eb48b71ad256e8b208514ce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76b89a4ccfd59e6016234e1ac240a13a44e38b93eb48b71ad256e8b208514ce9->enter($__internal_76b89a4ccfd59e6016234e1ac240a13a44e38b93eb48b71ad256e8b208514ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/new.html.twig"));

        $__internal_198304daa27f137a2fade0090d61f4e3d89f4cc2c1d667397aa9b836161ff9fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_198304daa27f137a2fade0090d61f4e3d89f4cc2c1d667397aa9b836161ff9fa->enter($__internal_198304daa27f137a2fade0090d61f4e3d89f4cc2c1d667397aa9b836161ff9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76b89a4ccfd59e6016234e1ac240a13a44e38b93eb48b71ad256e8b208514ce9->leave($__internal_76b89a4ccfd59e6016234e1ac240a13a44e38b93eb48b71ad256e8b208514ce9_prof);

        
        $__internal_198304daa27f137a2fade0090d61f4e3d89f4cc2c1d667397aa9b836161ff9fa->leave($__internal_198304daa27f137a2fade0090d61f4e3d89f4cc2c1d667397aa9b836161ff9fa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_27d160ca28aa3f3c76eb697c08567adee7ed470c0c2a330bbe493c51dbd52099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27d160ca28aa3f3c76eb697c08567adee7ed470c0c2a330bbe493c51dbd52099->enter($__internal_27d160ca28aa3f3c76eb697c08567adee7ed470c0c2a330bbe493c51dbd52099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0ea683d9c3e5145e909427430a938d41323da76361f4fc3e449f150ade1a8f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0ea683d9c3e5145e909427430a938d41323da76361f4fc3e449f150ade1a8f6->enter($__internal_e0ea683d9c3e5145e909427430a938d41323da76361f4fc3e449f150ade1a8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e0ea683d9c3e5145e909427430a938d41323da76361f4fc3e449f150ade1a8f6->leave($__internal_e0ea683d9c3e5145e909427430a938d41323da76361f4fc3e449f150ade1a8f6_prof);

        
        $__internal_27d160ca28aa3f3c76eb697c08567adee7ed470c0c2a330bbe493c51dbd52099->leave($__internal_27d160ca28aa3f3c76eb697c08567adee7ed470c0c2a330bbe493c51dbd52099_prof);

    }

    public function getTemplateName()
    {
        return "tag/new.html.twig";
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
", "tag/new.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\tag\\new.html.twig");
    }
}
