<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_a5823458eea1e4e909370281e6d7b21ae3dab8b089cf34aeaabb3bd9ceccdc71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cb06d49a3d8447430e0ebb20bc565b435a86d23188972e297c52d063249afb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cb06d49a3d8447430e0ebb20bc565b435a86d23188972e297c52d063249afb3->enter($__internal_8cb06d49a3d8447430e0ebb20bc565b435a86d23188972e297c52d063249afb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_1182f0e61c62eef1f73f69985bae0335d700d1241c1dbb1fc4e845f543923192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1182f0e61c62eef1f73f69985bae0335d700d1241c1dbb1fc4e845f543923192->enter($__internal_1182f0e61c62eef1f73f69985bae0335d700d1241c1dbb1fc4e845f543923192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cb06d49a3d8447430e0ebb20bc565b435a86d23188972e297c52d063249afb3->leave($__internal_8cb06d49a3d8447430e0ebb20bc565b435a86d23188972e297c52d063249afb3_prof);

        
        $__internal_1182f0e61c62eef1f73f69985bae0335d700d1241c1dbb1fc4e845f543923192->leave($__internal_1182f0e61c62eef1f73f69985bae0335d700d1241c1dbb1fc4e845f543923192_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb0e07fd3592e9a4dbb3b26fe18cf3b4c72cafb8c6d8bcc39905c7080c6cbbd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb0e07fd3592e9a4dbb3b26fe18cf3b4c72cafb8c6d8bcc39905c7080c6cbbd5->enter($__internal_fb0e07fd3592e9a4dbb3b26fe18cf3b4c72cafb8c6d8bcc39905c7080c6cbbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c006a5241b619f366bce756ef96dcc17a3ebda434aa1b1f3363fe807d4997581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c006a5241b619f366bce756ef96dcc17a3ebda434aa1b1f3363fe807d4997581->enter($__internal_c006a5241b619f366bce756ef96dcc17a3ebda434aa1b1f3363fe807d4997581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_c006a5241b619f366bce756ef96dcc17a3ebda434aa1b1f3363fe807d4997581->leave($__internal_c006a5241b619f366bce756ef96dcc17a3ebda434aa1b1f3363fe807d4997581_prof);

        
        $__internal_fb0e07fd3592e9a4dbb3b26fe18cf3b4c72cafb8c6d8bcc39905c7080c6cbbd5->leave($__internal_fb0e07fd3592e9a4dbb3b26fe18cf3b4c72cafb8c6d8bcc39905c7080c6cbbd5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
