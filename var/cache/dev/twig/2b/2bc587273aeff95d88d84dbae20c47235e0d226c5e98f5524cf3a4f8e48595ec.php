<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_0b38f0d3f36336c1bb1e0669d100915a766ccd117ce2e6a5d1e366f0c6837264 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_e58a6b72b300c68c1eacd30cc6c73b949c4a9e45111731cd3c01edb0749f85b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e58a6b72b300c68c1eacd30cc6c73b949c4a9e45111731cd3c01edb0749f85b8->enter($__internal_e58a6b72b300c68c1eacd30cc6c73b949c4a9e45111731cd3c01edb0749f85b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_60c1c070843fb1bf85b375c57efbd6a11e353185667b4329e745b80085d748a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c1c070843fb1bf85b375c57efbd6a11e353185667b4329e745b80085d748a1->enter($__internal_60c1c070843fb1bf85b375c57efbd6a11e353185667b4329e745b80085d748a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e58a6b72b300c68c1eacd30cc6c73b949c4a9e45111731cd3c01edb0749f85b8->leave($__internal_e58a6b72b300c68c1eacd30cc6c73b949c4a9e45111731cd3c01edb0749f85b8_prof);

        
        $__internal_60c1c070843fb1bf85b375c57efbd6a11e353185667b4329e745b80085d748a1->leave($__internal_60c1c070843fb1bf85b375c57efbd6a11e353185667b4329e745b80085d748a1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_afe7d3632fa158852039034244eabd725203011a9e869ef59dc2113072f50fd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afe7d3632fa158852039034244eabd725203011a9e869ef59dc2113072f50fd6->enter($__internal_afe7d3632fa158852039034244eabd725203011a9e869ef59dc2113072f50fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ac7681e539de6f4507034de299232a123763e6b15ad46211eec3afba28afe114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac7681e539de6f4507034de299232a123763e6b15ad46211eec3afba28afe114->enter($__internal_ac7681e539de6f4507034de299232a123763e6b15ad46211eec3afba28afe114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_ac7681e539de6f4507034de299232a123763e6b15ad46211eec3afba28afe114->leave($__internal_ac7681e539de6f4507034de299232a123763e6b15ad46211eec3afba28afe114_prof);

        
        $__internal_afe7d3632fa158852039034244eabd725203011a9e869ef59dc2113072f50fd6->leave($__internal_afe7d3632fa158852039034244eabd725203011a9e869ef59dc2113072f50fd6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Group\\list.html.twig");
    }
}
