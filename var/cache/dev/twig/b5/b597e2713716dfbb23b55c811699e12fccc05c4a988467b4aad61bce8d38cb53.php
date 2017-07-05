<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_e4692647dbff15706b1722186a77e08fa345ac118817aa939e06ca96983c123e extends Twig_Template
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
        $__internal_6dd212276f3c4f1598c60f2f92ec63cee1d5bf470a11522afa1c71f3f0c597e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dd212276f3c4f1598c60f2f92ec63cee1d5bf470a11522afa1c71f3f0c597e9->enter($__internal_6dd212276f3c4f1598c60f2f92ec63cee1d5bf470a11522afa1c71f3f0c597e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_62988440006a3d34b4228512f799743d8a0c0eefa4fe369c61b76d7b7c74d09f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62988440006a3d34b4228512f799743d8a0c0eefa4fe369c61b76d7b7c74d09f->enter($__internal_62988440006a3d34b4228512f799743d8a0c0eefa4fe369c61b76d7b7c74d09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dd212276f3c4f1598c60f2f92ec63cee1d5bf470a11522afa1c71f3f0c597e9->leave($__internal_6dd212276f3c4f1598c60f2f92ec63cee1d5bf470a11522afa1c71f3f0c597e9_prof);

        
        $__internal_62988440006a3d34b4228512f799743d8a0c0eefa4fe369c61b76d7b7c74d09f->leave($__internal_62988440006a3d34b4228512f799743d8a0c0eefa4fe369c61b76d7b7c74d09f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eee22290630744c7cbff4d15cb46ea5e510fbeb2cf8382dc7841b25bd80cfed2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eee22290630744c7cbff4d15cb46ea5e510fbeb2cf8382dc7841b25bd80cfed2->enter($__internal_eee22290630744c7cbff4d15cb46ea5e510fbeb2cf8382dc7841b25bd80cfed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e0864d61882cfe8c8405398eacfac3f99e06814ede91edae86e481772a75c0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0864d61882cfe8c8405398eacfac3f99e06814ede91edae86e481772a75c0f0->enter($__internal_e0864d61882cfe8c8405398eacfac3f99e06814ede91edae86e481772a75c0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_e0864d61882cfe8c8405398eacfac3f99e06814ede91edae86e481772a75c0f0->leave($__internal_e0864d61882cfe8c8405398eacfac3f99e06814ede91edae86e481772a75c0f0_prof);

        
        $__internal_eee22290630744c7cbff4d15cb46ea5e510fbeb2cf8382dc7841b25bd80cfed2->leave($__internal_eee22290630744c7cbff4d15cb46ea5e510fbeb2cf8382dc7841b25bd80cfed2_prof);

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
