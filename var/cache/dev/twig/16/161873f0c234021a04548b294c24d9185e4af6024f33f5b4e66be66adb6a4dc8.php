<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_0e7b891747a4396d10b6931a81d139960e517af14a5d611a4661dea96e2d5d5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_4074b5ff396c9cd646a6945d58d911f6354b873a68e62d286dde447642cd5bfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4074b5ff396c9cd646a6945d58d911f6354b873a68e62d286dde447642cd5bfa->enter($__internal_4074b5ff396c9cd646a6945d58d911f6354b873a68e62d286dde447642cd5bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_8a38be123634c1ddfae04924c1e6762a88531c66a636addbba6376a4e5205c4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a38be123634c1ddfae04924c1e6762a88531c66a636addbba6376a4e5205c4f->enter($__internal_8a38be123634c1ddfae04924c1e6762a88531c66a636addbba6376a4e5205c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4074b5ff396c9cd646a6945d58d911f6354b873a68e62d286dde447642cd5bfa->leave($__internal_4074b5ff396c9cd646a6945d58d911f6354b873a68e62d286dde447642cd5bfa_prof);

        
        $__internal_8a38be123634c1ddfae04924c1e6762a88531c66a636addbba6376a4e5205c4f->leave($__internal_8a38be123634c1ddfae04924c1e6762a88531c66a636addbba6376a4e5205c4f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4fba4fa8927eda337a4afed17ea0443aaa31efb6d888185cc9b8accf96bb6042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fba4fa8927eda337a4afed17ea0443aaa31efb6d888185cc9b8accf96bb6042->enter($__internal_4fba4fa8927eda337a4afed17ea0443aaa31efb6d888185cc9b8accf96bb6042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b6f1a1418fc2f29f7620aa431b78ad949bd41cadef5207e644793f934b3f099f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6f1a1418fc2f29f7620aa431b78ad949bd41cadef5207e644793f934b3f099f->enter($__internal_b6f1a1418fc2f29f7620aa431b78ad949bd41cadef5207e644793f934b3f099f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_b6f1a1418fc2f29f7620aa431b78ad949bd41cadef5207e644793f934b3f099f->leave($__internal_b6f1a1418fc2f29f7620aa431b78ad949bd41cadef5207e644793f934b3f099f_prof);

        
        $__internal_4fba4fa8927eda337a4afed17ea0443aaa31efb6d888185cc9b8accf96bb6042->leave($__internal_4fba4fa8927eda337a4afed17ea0443aaa31efb6d888185cc9b8accf96bb6042_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
