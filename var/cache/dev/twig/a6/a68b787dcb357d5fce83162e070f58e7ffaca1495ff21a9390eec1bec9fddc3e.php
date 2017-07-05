<?php

/* @FOSUser/ChangePassword/change_password_content.html.twig */
class __TwigTemplate_bd71a9b389c9117c474a8868b25763a7261056ff7f36cc1088e64dac3d24738a extends Twig_Template
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
        $__internal_6eff77f1e6d3ea928f55be5f78e3dd8930e00a838a5bd4deda61ac3b80ca13f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eff77f1e6d3ea928f55be5f78e3dd8930e00a838a5bd4deda61ac3b80ca13f8->enter($__internal_6eff77f1e6d3ea928f55be5f78e3dd8930e00a838a5bd4deda61ac3b80ca13f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password_content.html.twig"));

        $__internal_57bde3ca9139299ca68a8c7bc3308b64ab591f8750216a493fb7a48ee30c5a51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57bde3ca9139299ca68a8c7bc3308b64ab591f8750216a493fb7a48ee30c5a51->enter($__internal_57bde3ca9139299ca68a8c7bc3308b64ab591f8750216a493fb7a48ee30c5a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_6eff77f1e6d3ea928f55be5f78e3dd8930e00a838a5bd4deda61ac3b80ca13f8->leave($__internal_6eff77f1e6d3ea928f55be5f78e3dd8930e00a838a5bd4deda61ac3b80ca13f8_prof);

        
        $__internal_57bde3ca9139299ca68a8c7bc3308b64ab591f8750216a493fb7a48ee30c5a51->leave($__internal_57bde3ca9139299ca68a8c7bc3308b64ab591f8750216a493fb7a48ee30c5a51_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/ChangePassword/change_password_content.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\ChangePassword\\change_password_content.html.twig");
    }
}
