<?php

/* @FOSUser/Group/new_content.html.twig */
class __TwigTemplate_aef94d781cb001e11e996f8255e5e4dcbf8190fcb2ab74b38d923ffc53094ea7 extends Twig_Template
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
        $__internal_0b30aeda9022e51e6a0846dbd63aadbae748ee5789e5c4607f3919ba5d7b95b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b30aeda9022e51e6a0846dbd63aadbae748ee5789e5c4607f3919ba5d7b95b9->enter($__internal_0b30aeda9022e51e6a0846dbd63aadbae748ee5789e5c4607f3919ba5d7b95b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new_content.html.twig"));

        $__internal_bf0f806f1386be31c1a9d34f69027e9692feab943cad2830d7418e12d751b112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0f806f1386be31c1a9d34f69027e9692feab943cad2830d7418e12d751b112->enter($__internal_bf0f806f1386be31c1a9d34f69027e9692feab943cad2830d7418e12d751b112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_new"), "attr" => array("class" => "fos_user_group_new")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_0b30aeda9022e51e6a0846dbd63aadbae748ee5789e5c4607f3919ba5d7b95b9->leave($__internal_0b30aeda9022e51e6a0846dbd63aadbae748ee5789e5c4607f3919ba5d7b95b9_prof);

        
        $__internal_bf0f806f1386be31c1a9d34f69027e9692feab943cad2830d7418e12d751b112->leave($__internal_bf0f806f1386be31c1a9d34f69027e9692feab943cad2830d7418e12d751b112_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
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

{{ form_start(form, { 'action': path('fos_user_group_new'), 'attr': { 'class': 'fos_user_group_new' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.new.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Group/new_content.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Group\\new_content.html.twig");
    }
}
