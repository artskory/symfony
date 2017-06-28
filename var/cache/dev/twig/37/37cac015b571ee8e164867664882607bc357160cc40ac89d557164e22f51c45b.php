<?php

/* :maintenance:layout.html.twig */
class __TwigTemplate_cfdec7b1ce6f77c86d86f0ff263710a6765af9a7e1c59ec2be0e9aa36d269d0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":maintenance:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'body_layout' => array($this, 'block_body_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd248ece5cc64a4d0a66fab18c2f77705acb9dfaa9a96ed77d0f86655866e1c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd248ece5cc64a4d0a66fab18c2f77705acb9dfaa9a96ed77d0f86655866e1c2->enter($__internal_fd248ece5cc64a4d0a66fab18c2f77705acb9dfaa9a96ed77d0f86655866e1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":maintenance:layout.html.twig"));

        $__internal_5b83904198b498c8048bbcc5ca11ae884b25e4ddffe5c445a949d672038a0d76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b83904198b498c8048bbcc5ca11ae884b25e4ddffe5c445a949d672038a0d76->enter($__internal_5b83904198b498c8048bbcc5ca11ae884b25e4ddffe5c445a949d672038a0d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":maintenance:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd248ece5cc64a4d0a66fab18c2f77705acb9dfaa9a96ed77d0f86655866e1c2->leave($__internal_fd248ece5cc64a4d0a66fab18c2f77705acb9dfaa9a96ed77d0f86655866e1c2_prof);

        
        $__internal_5b83904198b498c8048bbcc5ca11ae884b25e4ddffe5c445a949d672038a0d76->leave($__internal_5b83904198b498c8048bbcc5ca11ae884b25e4ddffe5c445a949d672038a0d76_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8c65665e083fdb6252e7a5a5108360c0f4fc630f338672a48eb42163e41c686 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8c65665e083fdb6252e7a5a5108360c0f4fc630f338672a48eb42163e41c686->enter($__internal_a8c65665e083fdb6252e7a5a5108360c0f4fc630f338672a48eb42163e41c686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9a1371d6dd742942420da6927e900a0600b47a7ca801cec8307bf864ee0fed5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a1371d6dd742942420da6927e900a0600b47a7ca801cec8307bf864ee0fed5b->enter($__internal_9a1371d6dd742942420da6927e900a0600b47a7ca801cec8307bf864ee0fed5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_9a1371d6dd742942420da6927e900a0600b47a7ca801cec8307bf864ee0fed5b->leave($__internal_9a1371d6dd742942420da6927e900a0600b47a7ca801cec8307bf864ee0fed5b_prof);

        
        $__internal_a8c65665e083fdb6252e7a5a5108360c0f4fc630f338672a48eb42163e41c686->leave($__internal_a8c65665e083fdb6252e7a5a5108360c0f4fc630f338672a48eb42163e41c686_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2981ce3e7d62db31c4410bf52c60dd8e8a958d1f9c15aa0e90dc9bf99db6b6ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2981ce3e7d62db31c4410bf52c60dd8e8a958d1f9c15aa0e90dc9bf99db6b6ef->enter($__internal_2981ce3e7d62db31c4410bf52c60dd8e8a958d1f9c15aa0e90dc9bf99db6b6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba06efa77cc77272abf559d9e5b31af3a6539c676469635c90dc205ab91e231a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba06efa77cc77272abf559d9e5b31af3a6539c676469635c90dc205ab91e231a->enter($__internal_ba06efa77cc77272abf559d9e5b31af3a6539c676469635c90dc205ab91e231a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    <h1>Maintenance</h1>
    ";
        // line 6
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_ba06efa77cc77272abf559d9e5b31af3a6539c676469635c90dc205ab91e231a->leave($__internal_ba06efa77cc77272abf559d9e5b31af3a6539c676469635c90dc205ab91e231a_prof);

        
        $__internal_2981ce3e7d62db31c4410bf52c60dd8e8a958d1f9c15aa0e90dc9bf99db6b6ef->leave($__internal_2981ce3e7d62db31c4410bf52c60dd8e8a958d1f9c15aa0e90dc9bf99db6b6ef_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_a817171a2d5b4fb7e07427a3a8f8fc8a8eeb9034bb8bf42beacbc29a6f96f0c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a817171a2d5b4fb7e07427a3a8f8fc8a8eeb9034bb8bf42beacbc29a6f96f0c3->enter($__internal_a817171a2d5b4fb7e07427a3a8f8fc8a8eeb9034bb8bf42beacbc29a6f96f0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_7a7dd01fafaf96b6002c4f39bece54a4a8e7777deb21f856dd65da01901fd8ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a7dd01fafaf96b6002c4f39bece54a4a8e7777deb21f856dd65da01901fd8ce->enter($__internal_7a7dd01fafaf96b6002c4f39bece54a4a8e7777deb21f856dd65da01901fd8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_7a7dd01fafaf96b6002c4f39bece54a4a8e7777deb21f856dd65da01901fd8ce->leave($__internal_7a7dd01fafaf96b6002c4f39bece54a4a8e7777deb21f856dd65da01901fd8ce_prof);

        
        $__internal_a817171a2d5b4fb7e07427a3a8f8fc8a8eeb9034bb8bf42beacbc29a6f96f0c3->leave($__internal_a817171a2d5b4fb7e07427a3a8f8fc8a8eeb9034bb8bf42beacbc29a6f96f0c3_prof);

    }

    public function getTemplateName()
    {
        return ":maintenance:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 6,  69 => 4,  60 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block title %}Blog{% endblock %}
{% block body %}
    
    <h1>Maintenance</h1>
    {% block body_layout %}{% endblock %}
{% endblock %}", ":maintenance:layout.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/maintenance/layout.html.twig");
    }
}
