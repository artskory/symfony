<?php

/* blog/layout.html.twig */
class __TwigTemplate_1648267c8b5867f96e349ba8b6516df884add9300ed2df395cf9d3851140c288 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/layout.html.twig", 1);
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
        $__internal_cd423d21e73c01772e12163d80cefc4e044f587eefef11519fca1548d5e92b47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd423d21e73c01772e12163d80cefc4e044f587eefef11519fca1548d5e92b47->enter($__internal_cd423d21e73c01772e12163d80cefc4e044f587eefef11519fca1548d5e92b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/layout.html.twig"));

        $__internal_e026d2e92c076a9090e3397c6543e27959d6ee503dd718abdbc333c9e82b49b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e026d2e92c076a9090e3397c6543e27959d6ee503dd718abdbc333c9e82b49b5->enter($__internal_e026d2e92c076a9090e3397c6543e27959d6ee503dd718abdbc333c9e82b49b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd423d21e73c01772e12163d80cefc4e044f587eefef11519fca1548d5e92b47->leave($__internal_cd423d21e73c01772e12163d80cefc4e044f587eefef11519fca1548d5e92b47_prof);

        
        $__internal_e026d2e92c076a9090e3397c6543e27959d6ee503dd718abdbc333c9e82b49b5->leave($__internal_e026d2e92c076a9090e3397c6543e27959d6ee503dd718abdbc333c9e82b49b5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5a82eee20d5a64c1ff284d801d060c4eb2207a56578b0b8d5f9214ae30e4061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5a82eee20d5a64c1ff284d801d060c4eb2207a56578b0b8d5f9214ae30e4061->enter($__internal_b5a82eee20d5a64c1ff284d801d060c4eb2207a56578b0b8d5f9214ae30e4061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3f92b23fd73436f25705839429f7c765dcd466ade6d46de81c1ffec114567c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f92b23fd73436f25705839429f7c765dcd466ade6d46de81c1ffec114567c45->enter($__internal_3f92b23fd73436f25705839429f7c765dcd466ade6d46de81c1ffec114567c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_3f92b23fd73436f25705839429f7c765dcd466ade6d46de81c1ffec114567c45->leave($__internal_3f92b23fd73436f25705839429f7c765dcd466ade6d46de81c1ffec114567c45_prof);

        
        $__internal_b5a82eee20d5a64c1ff284d801d060c4eb2207a56578b0b8d5f9214ae30e4061->leave($__internal_b5a82eee20d5a64c1ff284d801d060c4eb2207a56578b0b8d5f9214ae30e4061_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bad43cd759b68b81b848f770a12f808ed65875c4efdc575e1a3033cfc5abe8b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bad43cd759b68b81b848f770a12f808ed65875c4efdc575e1a3033cfc5abe8b2->enter($__internal_bad43cd759b68b81b848f770a12f808ed65875c4efdc575e1a3033cfc5abe8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f5651bb2e4ad3941172b8bc420d8badc996086c7e0529ab6f6aa8add5019b3da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5651bb2e4ad3941172b8bc420d8badc996086c7e0529ab6f6aa8add5019b3da->enter($__internal_f5651bb2e4ad3941172b8bc420d8badc996086c7e0529ab6f6aa8add5019b3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Blog</h1>
    ";
        // line 5
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_f5651bb2e4ad3941172b8bc420d8badc996086c7e0529ab6f6aa8add5019b3da->leave($__internal_f5651bb2e4ad3941172b8bc420d8badc996086c7e0529ab6f6aa8add5019b3da_prof);

        
        $__internal_bad43cd759b68b81b848f770a12f808ed65875c4efdc575e1a3033cfc5abe8b2->leave($__internal_bad43cd759b68b81b848f770a12f808ed65875c4efdc575e1a3033cfc5abe8b2_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_7d2eb77bb6b8fdbd09c125341ea91b6bdba9a0a8cdd29b7114b3223f143b1dfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d2eb77bb6b8fdbd09c125341ea91b6bdba9a0a8cdd29b7114b3223f143b1dfb->enter($__internal_7d2eb77bb6b8fdbd09c125341ea91b6bdba9a0a8cdd29b7114b3223f143b1dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_b07d94d821803aed2f087cde1f4da3935f69f253356cefb2da5febd07c39fa8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b07d94d821803aed2f087cde1f4da3935f69f253356cefb2da5febd07c39fa8f->enter($__internal_b07d94d821803aed2f087cde1f4da3935f69f253356cefb2da5febd07c39fa8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_b07d94d821803aed2f087cde1f4da3935f69f253356cefb2da5febd07c39fa8f->leave($__internal_b07d94d821803aed2f087cde1f4da3935f69f253356cefb2da5febd07c39fa8f_prof);

        
        $__internal_7d2eb77bb6b8fdbd09c125341ea91b6bdba9a0a8cdd29b7114b3223f143b1dfb->leave($__internal_7d2eb77bb6b8fdbd09c125341ea91b6bdba9a0a8cdd29b7114b3223f143b1dfb_prof);

    }

    public function getTemplateName()
    {
        return "blog/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 5,  69 => 4,  60 => 3,  42 => 2,  11 => 1,);
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
    <h1>Blog</h1>
    {% block body_layout %}{% endblock %}
{% endblock %}", "blog/layout.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\blog\\layout.html.twig");
    }
}
