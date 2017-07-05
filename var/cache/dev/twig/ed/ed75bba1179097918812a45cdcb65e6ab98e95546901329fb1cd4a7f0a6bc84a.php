<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_a6c5d9b54c124412190033e578cce9153d7b2e06bc2c185820015cac312947c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_5354ce6f3fd322f541533df1588c952082013ef098e8d88969b277f53e2e823b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5354ce6f3fd322f541533df1588c952082013ef098e8d88969b277f53e2e823b->enter($__internal_5354ce6f3fd322f541533df1588c952082013ef098e8d88969b277f53e2e823b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_6843e49edc4b69bada66c498382f3de340327b057f7d490e347fdfc4933766e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6843e49edc4b69bada66c498382f3de340327b057f7d490e347fdfc4933766e3->enter($__internal_6843e49edc4b69bada66c498382f3de340327b057f7d490e347fdfc4933766e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5354ce6f3fd322f541533df1588c952082013ef098e8d88969b277f53e2e823b->leave($__internal_5354ce6f3fd322f541533df1588c952082013ef098e8d88969b277f53e2e823b_prof);

        
        $__internal_6843e49edc4b69bada66c498382f3de340327b057f7d490e347fdfc4933766e3->leave($__internal_6843e49edc4b69bada66c498382f3de340327b057f7d490e347fdfc4933766e3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_13a86e726d24a91be999f979a97a91fd94497881d7228758cec9857a8aab803b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13a86e726d24a91be999f979a97a91fd94497881d7228758cec9857a8aab803b->enter($__internal_13a86e726d24a91be999f979a97a91fd94497881d7228758cec9857a8aab803b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_03f77e5a7ad843f93abc706afaf289254f3b58f3f3a040f0d1cef263ed9de830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03f77e5a7ad843f93abc706afaf289254f3b58f3f3a040f0d1cef263ed9de830->enter($__internal_03f77e5a7ad843f93abc706afaf289254f3b58f3f3a040f0d1cef263ed9de830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_03f77e5a7ad843f93abc706afaf289254f3b58f3f3a040f0d1cef263ed9de830->leave($__internal_03f77e5a7ad843f93abc706afaf289254f3b58f3f3a040f0d1cef263ed9de830_prof);

        
        $__internal_13a86e726d24a91be999f979a97a91fd94497881d7228758cec9857a8aab803b->leave($__internal_13a86e726d24a91be999f979a97a91fd94497881d7228758cec9857a8aab803b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
", "FOSUserBundle:Group:edit.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
