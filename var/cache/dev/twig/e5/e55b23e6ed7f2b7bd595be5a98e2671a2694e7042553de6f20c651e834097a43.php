<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_7df253061175736eaf6a31c16e2df4d58fcef5c5657d4fc27e20406c4ce95088 extends Twig_Template
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
        $__internal_93a38695672fb00371bc6e284ce1cadc6feec83ecc5327baa633a7c42751d940 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93a38695672fb00371bc6e284ce1cadc6feec83ecc5327baa633a7c42751d940->enter($__internal_93a38695672fb00371bc6e284ce1cadc6feec83ecc5327baa633a7c42751d940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_f84ec695d6b57f5296cbee9534beb3b8b10f535dcfdab19dc847f9a6ebdee5a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84ec695d6b57f5296cbee9534beb3b8b10f535dcfdab19dc847f9a6ebdee5a9->enter($__internal_f84ec695d6b57f5296cbee9534beb3b8b10f535dcfdab19dc847f9a6ebdee5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93a38695672fb00371bc6e284ce1cadc6feec83ecc5327baa633a7c42751d940->leave($__internal_93a38695672fb00371bc6e284ce1cadc6feec83ecc5327baa633a7c42751d940_prof);

        
        $__internal_f84ec695d6b57f5296cbee9534beb3b8b10f535dcfdab19dc847f9a6ebdee5a9->leave($__internal_f84ec695d6b57f5296cbee9534beb3b8b10f535dcfdab19dc847f9a6ebdee5a9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f6ee5cf9adc3d5fcb29cfe9c91d9ff32e89854dd290284fe33f5c91a809d85c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6ee5cf9adc3d5fcb29cfe9c91d9ff32e89854dd290284fe33f5c91a809d85c3->enter($__internal_f6ee5cf9adc3d5fcb29cfe9c91d9ff32e89854dd290284fe33f5c91a809d85c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9ba6f32da9009b9b77f32074f9818e0a0525174d224f90e6f89293fed15c29a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ba6f32da9009b9b77f32074f9818e0a0525174d224f90e6f89293fed15c29a2->enter($__internal_9ba6f32da9009b9b77f32074f9818e0a0525174d224f90e6f89293fed15c29a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_9ba6f32da9009b9b77f32074f9818e0a0525174d224f90e6f89293fed15c29a2->leave($__internal_9ba6f32da9009b9b77f32074f9818e0a0525174d224f90e6f89293fed15c29a2_prof);

        
        $__internal_f6ee5cf9adc3d5fcb29cfe9c91d9ff32e89854dd290284fe33f5c91a809d85c3->leave($__internal_f6ee5cf9adc3d5fcb29cfe9c91d9ff32e89854dd290284fe33f5c91a809d85c3_prof);

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
