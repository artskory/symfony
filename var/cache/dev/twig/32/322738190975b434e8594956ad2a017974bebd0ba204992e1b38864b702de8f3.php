<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_16d479e4d25cea18c35d7a0e72002a5101b6a2b165f96f59645325d094f49313 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_d218fd4c5279a6a5fb729f03e3026cbd49de46062868de7f5bc0514674e60011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d218fd4c5279a6a5fb729f03e3026cbd49de46062868de7f5bc0514674e60011->enter($__internal_d218fd4c5279a6a5fb729f03e3026cbd49de46062868de7f5bc0514674e60011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_f83d78d2eb73e30ee3c9c127b9d2108d0e3c56bd6681ddf4f13261b6670aaf15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f83d78d2eb73e30ee3c9c127b9d2108d0e3c56bd6681ddf4f13261b6670aaf15->enter($__internal_f83d78d2eb73e30ee3c9c127b9d2108d0e3c56bd6681ddf4f13261b6670aaf15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d218fd4c5279a6a5fb729f03e3026cbd49de46062868de7f5bc0514674e60011->leave($__internal_d218fd4c5279a6a5fb729f03e3026cbd49de46062868de7f5bc0514674e60011_prof);

        
        $__internal_f83d78d2eb73e30ee3c9c127b9d2108d0e3c56bd6681ddf4f13261b6670aaf15->leave($__internal_f83d78d2eb73e30ee3c9c127b9d2108d0e3c56bd6681ddf4f13261b6670aaf15_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_078387100e6b76dc4b78ad8e571de4ea83a4c73fcf7667d8ff206a0b10aa9ef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_078387100e6b76dc4b78ad8e571de4ea83a4c73fcf7667d8ff206a0b10aa9ef3->enter($__internal_078387100e6b76dc4b78ad8e571de4ea83a4c73fcf7667d8ff206a0b10aa9ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9a3dd070c737ba47ca41f74845ffa190ec17ea7656911bd09e4d242d47738f57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a3dd070c737ba47ca41f74845ffa190ec17ea7656911bd09e4d242d47738f57->enter($__internal_9a3dd070c737ba47ca41f74845ffa190ec17ea7656911bd09e4d242d47738f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_9a3dd070c737ba47ca41f74845ffa190ec17ea7656911bd09e4d242d47738f57->leave($__internal_9a3dd070c737ba47ca41f74845ffa190ec17ea7656911bd09e4d242d47738f57_prof);

        
        $__internal_078387100e6b76dc4b78ad8e571de4ea83a4c73fcf7667d8ff206a0b10aa9ef3->leave($__internal_078387100e6b76dc4b78ad8e571de4ea83a4c73fcf7667d8ff206a0b10aa9ef3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
", "FOSUserBundle:Group:list.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
