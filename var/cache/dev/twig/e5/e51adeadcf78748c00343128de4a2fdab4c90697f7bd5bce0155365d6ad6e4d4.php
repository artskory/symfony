<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_2c88dd6c07b3d18b19d630cb926e6e5d2ae154676d9bbb4162c93df49d333484 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_411ace9ca8dac6f9e58f5f8eca82c6317d8668cb6ee93ee6c9379f478c1ff5d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_411ace9ca8dac6f9e58f5f8eca82c6317d8668cb6ee93ee6c9379f478c1ff5d9->enter($__internal_411ace9ca8dac6f9e58f5f8eca82c6317d8668cb6ee93ee6c9379f478c1ff5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_26e137274ebb580e155734f9d640b36bef3e476c7d89e63fedb983ca0b593e31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e137274ebb580e155734f9d640b36bef3e476c7d89e63fedb983ca0b593e31->enter($__internal_26e137274ebb580e155734f9d640b36bef3e476c7d89e63fedb983ca0b593e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_411ace9ca8dac6f9e58f5f8eca82c6317d8668cb6ee93ee6c9379f478c1ff5d9->leave($__internal_411ace9ca8dac6f9e58f5f8eca82c6317d8668cb6ee93ee6c9379f478c1ff5d9_prof);

        
        $__internal_26e137274ebb580e155734f9d640b36bef3e476c7d89e63fedb983ca0b593e31->leave($__internal_26e137274ebb580e155734f9d640b36bef3e476c7d89e63fedb983ca0b593e31_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c568ac3d9d329dde9e89bd992746eac73f65517f7631ed49f887accabdad89b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c568ac3d9d329dde9e89bd992746eac73f65517f7631ed49f887accabdad89b->enter($__internal_6c568ac3d9d329dde9e89bd992746eac73f65517f7631ed49f887accabdad89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7f82dca558ddff8888e419d1e5d63a82a95b0df0b16a671eccf7f0f1703a7728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f82dca558ddff8888e419d1e5d63a82a95b0df0b16a671eccf7f0f1703a7728->enter($__internal_7f82dca558ddff8888e419d1e5d63a82a95b0df0b16a671eccf7f0f1703a7728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_7f82dca558ddff8888e419d1e5d63a82a95b0df0b16a671eccf7f0f1703a7728->leave($__internal_7f82dca558ddff8888e419d1e5d63a82a95b0df0b16a671eccf7f0f1703a7728_prof);

        
        $__internal_6c568ac3d9d329dde9e89bd992746eac73f65517f7631ed49f887accabdad89b->leave($__internal_6c568ac3d9d329dde9e89bd992746eac73f65517f7631ed49f887accabdad89b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Group\\edit.html.twig");
    }
}
