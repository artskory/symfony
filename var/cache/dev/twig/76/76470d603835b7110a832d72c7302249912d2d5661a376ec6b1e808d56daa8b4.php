<?php

/* :blog:layout.html.twig */
class __TwigTemplate_f834913b299aac29d4a8b37f47605b15db3bbe32f5bbcb1298a590737f0add07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":blog:layout.html.twig", 1);
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
        $__internal_d92766c821056499b3df5f31daabbe5f162ed254854e6766f0b4478917ddaa9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d92766c821056499b3df5f31daabbe5f162ed254854e6766f0b4478917ddaa9c->enter($__internal_d92766c821056499b3df5f31daabbe5f162ed254854e6766f0b4478917ddaa9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:layout.html.twig"));

        $__internal_82857470313747e1782889a7f486b50dead81b84cc9db5612b3414f291b6aacb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82857470313747e1782889a7f486b50dead81b84cc9db5612b3414f291b6aacb->enter($__internal_82857470313747e1782889a7f486b50dead81b84cc9db5612b3414f291b6aacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d92766c821056499b3df5f31daabbe5f162ed254854e6766f0b4478917ddaa9c->leave($__internal_d92766c821056499b3df5f31daabbe5f162ed254854e6766f0b4478917ddaa9c_prof);

        
        $__internal_82857470313747e1782889a7f486b50dead81b84cc9db5612b3414f291b6aacb->leave($__internal_82857470313747e1782889a7f486b50dead81b84cc9db5612b3414f291b6aacb_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e588f1e6ffbedee9241e6138b456e36f0e16cf36567de49a33d055b87f821a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e588f1e6ffbedee9241e6138b456e36f0e16cf36567de49a33d055b87f821a8->enter($__internal_8e588f1e6ffbedee9241e6138b456e36f0e16cf36567de49a33d055b87f821a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9c817131d4b21274451542106c1e86b8e8bc6cfa52eb77883c41cb705cb4322f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c817131d4b21274451542106c1e86b8e8bc6cfa52eb77883c41cb705cb4322f->enter($__internal_9c817131d4b21274451542106c1e86b8e8bc6cfa52eb77883c41cb705cb4322f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_9c817131d4b21274451542106c1e86b8e8bc6cfa52eb77883c41cb705cb4322f->leave($__internal_9c817131d4b21274451542106c1e86b8e8bc6cfa52eb77883c41cb705cb4322f_prof);

        
        $__internal_8e588f1e6ffbedee9241e6138b456e36f0e16cf36567de49a33d055b87f821a8->leave($__internal_8e588f1e6ffbedee9241e6138b456e36f0e16cf36567de49a33d055b87f821a8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b411dc4d4aa064cfa25dd30a0d4e73a9e33df3afdbd03f060f31b539c9731766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b411dc4d4aa064cfa25dd30a0d4e73a9e33df3afdbd03f060f31b539c9731766->enter($__internal_b411dc4d4aa064cfa25dd30a0d4e73a9e33df3afdbd03f060f31b539c9731766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b8f66c8a885b0fc4e89387914a52b8f2ca9ee2d335a28cad25690de6311b658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8f66c8a885b0fc4e89387914a52b8f2ca9ee2d335a28cad25690de6311b658->enter($__internal_4b8f66c8a885b0fc4e89387914a52b8f2ca9ee2d335a28cad25690de6311b658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Blog</h1>
    ";
        // line 5
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_4b8f66c8a885b0fc4e89387914a52b8f2ca9ee2d335a28cad25690de6311b658->leave($__internal_4b8f66c8a885b0fc4e89387914a52b8f2ca9ee2d335a28cad25690de6311b658_prof);

        
        $__internal_b411dc4d4aa064cfa25dd30a0d4e73a9e33df3afdbd03f060f31b539c9731766->leave($__internal_b411dc4d4aa064cfa25dd30a0d4e73a9e33df3afdbd03f060f31b539c9731766_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_5ab7d59491368be9363ae0e68d5d9b7d061c8497c9a1dd6b63620cfabd05827d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ab7d59491368be9363ae0e68d5d9b7d061c8497c9a1dd6b63620cfabd05827d->enter($__internal_5ab7d59491368be9363ae0e68d5d9b7d061c8497c9a1dd6b63620cfabd05827d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_fe89eacc60dd7d46e8f1be4d77e6cdc563109bb4503d71e5df0060165cffebe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe89eacc60dd7d46e8f1be4d77e6cdc563109bb4503d71e5df0060165cffebe3->enter($__internal_fe89eacc60dd7d46e8f1be4d77e6cdc563109bb4503d71e5df0060165cffebe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_fe89eacc60dd7d46e8f1be4d77e6cdc563109bb4503d71e5df0060165cffebe3->leave($__internal_fe89eacc60dd7d46e8f1be4d77e6cdc563109bb4503d71e5df0060165cffebe3_prof);

        
        $__internal_5ab7d59491368be9363ae0e68d5d9b7d061c8497c9a1dd6b63620cfabd05827d->leave($__internal_5ab7d59491368be9363ae0e68d5d9b7d061c8497c9a1dd6b63620cfabd05827d_prof);

    }

    public function getTemplateName()
    {
        return ":blog:layout.html.twig";
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
{% endblock %}", ":blog:layout.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/blog/layout.html.twig");
    }
}
