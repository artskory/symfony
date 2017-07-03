<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_8fb2db1ea062e5912ad85ebc94fc0fdafe9d2230e06318616f2ab72df84f4783 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_6e86cb8bbe6e6508b795fc932798febbc778289256ef55568fb2644c7092bfd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e86cb8bbe6e6508b795fc932798febbc778289256ef55568fb2644c7092bfd4->enter($__internal_6e86cb8bbe6e6508b795fc932798febbc778289256ef55568fb2644c7092bfd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_5d4ac4a72ced02dc725a04634a57ffd8fe9521d89e78a944a7cfcade0ca0f0c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d4ac4a72ced02dc725a04634a57ffd8fe9521d89e78a944a7cfcade0ca0f0c4->enter($__internal_5d4ac4a72ced02dc725a04634a57ffd8fe9521d89e78a944a7cfcade0ca0f0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e86cb8bbe6e6508b795fc932798febbc778289256ef55568fb2644c7092bfd4->leave($__internal_6e86cb8bbe6e6508b795fc932798febbc778289256ef55568fb2644c7092bfd4_prof);

        
        $__internal_5d4ac4a72ced02dc725a04634a57ffd8fe9521d89e78a944a7cfcade0ca0f0c4->leave($__internal_5d4ac4a72ced02dc725a04634a57ffd8fe9521d89e78a944a7cfcade0ca0f0c4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9b6c268fa9a29b96f14e266254c95640d123551a54ead9b9c043bc66917146db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b6c268fa9a29b96f14e266254c95640d123551a54ead9b9c043bc66917146db->enter($__internal_9b6c268fa9a29b96f14e266254c95640d123551a54ead9b9c043bc66917146db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9170ca119b12a95b56729836fd6d8f52568aca8788c6fe4e50ede4dfa67d1036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9170ca119b12a95b56729836fd6d8f52568aca8788c6fe4e50ede4dfa67d1036->enter($__internal_9170ca119b12a95b56729836fd6d8f52568aca8788c6fe4e50ede4dfa67d1036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_9170ca119b12a95b56729836fd6d8f52568aca8788c6fe4e50ede4dfa67d1036->leave($__internal_9170ca119b12a95b56729836fd6d8f52568aca8788c6fe4e50ede4dfa67d1036_prof);

        
        $__internal_9b6c268fa9a29b96f14e266254c95640d123551a54ead9b9c043bc66917146db->leave($__internal_9b6c268fa9a29b96f14e266254c95640d123551a54ead9b9c043bc66917146db_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
