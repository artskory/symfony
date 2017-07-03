<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_92e1349f57d0fd593c0882d2a086da53888750633b640358baedc1f7c99dead3 extends Twig_Template
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
        $__internal_5674a6729fef57e8f31bb07bd3ee8d7ce23b6ce95525e88f7d9a43cefe5ac7b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5674a6729fef57e8f31bb07bd3ee8d7ce23b6ce95525e88f7d9a43cefe5ac7b9->enter($__internal_5674a6729fef57e8f31bb07bd3ee8d7ce23b6ce95525e88f7d9a43cefe5ac7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        $__internal_1401e5b0437f36107f48eeb50c68a8bff8e850585a69ef0cc8c1e48dbd8f2c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1401e5b0437f36107f48eeb50c68a8bff8e850585a69ef0cc8c1e48dbd8f2c48->enter($__internal_1401e5b0437f36107f48eeb50c68a8bff8e850585a69ef0cc8c1e48dbd8f2c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_reset", array("token" => ($context["token"] ?? $this->getContext($context, "token")))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_5674a6729fef57e8f31bb07bd3ee8d7ce23b6ce95525e88f7d9a43cefe5ac7b9->leave($__internal_5674a6729fef57e8f31bb07bd3ee8d7ce23b6ce95525e88f7d9a43cefe5ac7b9_prof);

        
        $__internal_1401e5b0437f36107f48eeb50c68a8bff8e850585a69ef0cc8c1e48dbd8f2c48->leave($__internal_1401e5b0437f36107f48eeb50c68a8bff8e850585a69ef0cc8c1e48dbd8f2c48_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.reset.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Resetting:reset_content.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources/FOSUserBundle/views/Resetting/reset_content.html.twig");
    }
}
