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
        $__internal_d8459c1b3371be3bb6debeff13c468c14c9cad3a28b4af5199ac0edc41bc065d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8459c1b3371be3bb6debeff13c468c14c9cad3a28b4af5199ac0edc41bc065d->enter($__internal_d8459c1b3371be3bb6debeff13c468c14c9cad3a28b4af5199ac0edc41bc065d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/layout.html.twig"));

        $__internal_7f01707518570391655e479d39bef660746029159afbb3d14b433c6a6548f93a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f01707518570391655e479d39bef660746029159afbb3d14b433c6a6548f93a->enter($__internal_7f01707518570391655e479d39bef660746029159afbb3d14b433c6a6548f93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8459c1b3371be3bb6debeff13c468c14c9cad3a28b4af5199ac0edc41bc065d->leave($__internal_d8459c1b3371be3bb6debeff13c468c14c9cad3a28b4af5199ac0edc41bc065d_prof);

        
        $__internal_7f01707518570391655e479d39bef660746029159afbb3d14b433c6a6548f93a->leave($__internal_7f01707518570391655e479d39bef660746029159afbb3d14b433c6a6548f93a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1048d98f9c884d422e42276e94c1886e656c1c39ae0a8a07413f1b0878c43135 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1048d98f9c884d422e42276e94c1886e656c1c39ae0a8a07413f1b0878c43135->enter($__internal_1048d98f9c884d422e42276e94c1886e656c1c39ae0a8a07413f1b0878c43135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a1999adda79b2dc6f8af681be791d38874e7630c843da9dfaa83b7899e6867a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1999adda79b2dc6f8af681be791d38874e7630c843da9dfaa83b7899e6867a1->enter($__internal_a1999adda79b2dc6f8af681be791d38874e7630c843da9dfaa83b7899e6867a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_a1999adda79b2dc6f8af681be791d38874e7630c843da9dfaa83b7899e6867a1->leave($__internal_a1999adda79b2dc6f8af681be791d38874e7630c843da9dfaa83b7899e6867a1_prof);

        
        $__internal_1048d98f9c884d422e42276e94c1886e656c1c39ae0a8a07413f1b0878c43135->leave($__internal_1048d98f9c884d422e42276e94c1886e656c1c39ae0a8a07413f1b0878c43135_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3924b3c39d5dd8a1904d2152e3064cf87ee1ba578e5c54a59c2f967f227b27d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3924b3c39d5dd8a1904d2152e3064cf87ee1ba578e5c54a59c2f967f227b27d->enter($__internal_a3924b3c39d5dd8a1904d2152e3064cf87ee1ba578e5c54a59c2f967f227b27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b97dd76c580859318c285ec552becf87e760636050afd2d4aa182624ec5a77f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b97dd76c580859318c285ec552becf87e760636050afd2d4aa182624ec5a77f7->enter($__internal_b97dd76c580859318c285ec552becf87e760636050afd2d4aa182624ec5a77f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Blog</h1>
    ";
        // line 5
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_b97dd76c580859318c285ec552becf87e760636050afd2d4aa182624ec5a77f7->leave($__internal_b97dd76c580859318c285ec552becf87e760636050afd2d4aa182624ec5a77f7_prof);

        
        $__internal_a3924b3c39d5dd8a1904d2152e3064cf87ee1ba578e5c54a59c2f967f227b27d->leave($__internal_a3924b3c39d5dd8a1904d2152e3064cf87ee1ba578e5c54a59c2f967f227b27d_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_fd96ddd8e82a3fe781f136b8678f9530cb7012ca8246fb56dcfedb1a7f60b8c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd96ddd8e82a3fe781f136b8678f9530cb7012ca8246fb56dcfedb1a7f60b8c8->enter($__internal_fd96ddd8e82a3fe781f136b8678f9530cb7012ca8246fb56dcfedb1a7f60b8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_bbed8dfe6eb0a888b752fcd1f60ee4ec87fe9e3153680aecb6c278d1f6bff08d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbed8dfe6eb0a888b752fcd1f60ee4ec87fe9e3153680aecb6c278d1f6bff08d->enter($__internal_bbed8dfe6eb0a888b752fcd1f60ee4ec87fe9e3153680aecb6c278d1f6bff08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_bbed8dfe6eb0a888b752fcd1f60ee4ec87fe9e3153680aecb6c278d1f6bff08d->leave($__internal_bbed8dfe6eb0a888b752fcd1f60ee4ec87fe9e3153680aecb6c278d1f6bff08d_prof);

        
        $__internal_fd96ddd8e82a3fe781f136b8678f9530cb7012ca8246fb56dcfedb1a7f60b8c8->leave($__internal_fd96ddd8e82a3fe781f136b8678f9530cb7012ca8246fb56dcfedb1a7f60b8c8_prof);

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
