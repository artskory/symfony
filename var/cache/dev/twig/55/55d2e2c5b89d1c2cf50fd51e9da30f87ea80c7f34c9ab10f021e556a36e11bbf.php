<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_9db057c6626a7800a9b04b8ed88283ce212b827b58ca624b6d0ecd05da6cc0d0 extends Twig_Template
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
        $__internal_1badcc80934167a6345860771ca0e66d70574785c3176aa7c870a890954c9f44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1badcc80934167a6345860771ca0e66d70574785c3176aa7c870a890954c9f44->enter($__internal_1badcc80934167a6345860771ca0e66d70574785c3176aa7c870a890954c9f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        $__internal_1a8729d7d8c18cc2350486a76ce763afeabf37b44ed1b81f353d0553b71c804f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a8729d7d8c18cc2350486a76ce763afeabf37b44ed1b81f353d0553b71c804f->enter($__internal_1a8729d7d8c18cc2350486a76ce763afeabf37b44ed1b81f353d0553b71c804f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_1badcc80934167a6345860771ca0e66d70574785c3176aa7c870a890954c9f44->leave($__internal_1badcc80934167a6345860771ca0e66d70574785c3176aa7c870a890954c9f44_prof);

        
        $__internal_1a8729d7d8c18cc2350486a76ce763afeabf37b44ed1b81f353d0553b71c804f->leave($__internal_1a8729d7d8c18cc2350486a76ce763afeabf37b44ed1b81f353d0553b71c804f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Profile/edit_content.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit_content.html.twig");
    }
}
