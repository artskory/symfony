<?php

/* maintenance/layout.html.twig */
class __TwigTemplate_dd2b1f25fb31b54fc7231a5763394747bdf1691b30cf474089b74827b362db93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "maintenance/layout.html.twig", 1);
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
        $__internal_151cb15b34ebdcbaa357b0af5240909cf1518aa80f1d79a477a86f3aa2a3942e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_151cb15b34ebdcbaa357b0af5240909cf1518aa80f1d79a477a86f3aa2a3942e->enter($__internal_151cb15b34ebdcbaa357b0af5240909cf1518aa80f1d79a477a86f3aa2a3942e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "maintenance/layout.html.twig"));

        $__internal_60a5939b115fb15428a33c19580b1993c3b45dbb37da0df5cabecec1afef047b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60a5939b115fb15428a33c19580b1993c3b45dbb37da0df5cabecec1afef047b->enter($__internal_60a5939b115fb15428a33c19580b1993c3b45dbb37da0df5cabecec1afef047b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "maintenance/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_151cb15b34ebdcbaa357b0af5240909cf1518aa80f1d79a477a86f3aa2a3942e->leave($__internal_151cb15b34ebdcbaa357b0af5240909cf1518aa80f1d79a477a86f3aa2a3942e_prof);

        
        $__internal_60a5939b115fb15428a33c19580b1993c3b45dbb37da0df5cabecec1afef047b->leave($__internal_60a5939b115fb15428a33c19580b1993c3b45dbb37da0df5cabecec1afef047b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f536772498b046f4e2629c37b9983822d3dba2575d8a37690d145f201c997fb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f536772498b046f4e2629c37b9983822d3dba2575d8a37690d145f201c997fb1->enter($__internal_f536772498b046f4e2629c37b9983822d3dba2575d8a37690d145f201c997fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f842ad1a296973bcb1c1a16ef3360d52f8adab0accc7eae480628c991a03145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f842ad1a296973bcb1c1a16ef3360d52f8adab0accc7eae480628c991a03145->enter($__internal_6f842ad1a296973bcb1c1a16ef3360d52f8adab0accc7eae480628c991a03145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_6f842ad1a296973bcb1c1a16ef3360d52f8adab0accc7eae480628c991a03145->leave($__internal_6f842ad1a296973bcb1c1a16ef3360d52f8adab0accc7eae480628c991a03145_prof);

        
        $__internal_f536772498b046f4e2629c37b9983822d3dba2575d8a37690d145f201c997fb1->leave($__internal_f536772498b046f4e2629c37b9983822d3dba2575d8a37690d145f201c997fb1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2335768ad35a9a96e75c50ddd8302db3d633240cf8bdd83aaef9ff73f2249b3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2335768ad35a9a96e75c50ddd8302db3d633240cf8bdd83aaef9ff73f2249b3c->enter($__internal_2335768ad35a9a96e75c50ddd8302db3d633240cf8bdd83aaef9ff73f2249b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_19f5646a8f3d522232c1dd72a036edb86f8c04e332759cda590026ba122cca53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f5646a8f3d522232c1dd72a036edb86f8c04e332759cda590026ba122cca53->enter($__internal_19f5646a8f3d522232c1dd72a036edb86f8c04e332759cda590026ba122cca53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    <h1>Maintenance</h1>
    ";
        // line 6
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_19f5646a8f3d522232c1dd72a036edb86f8c04e332759cda590026ba122cca53->leave($__internal_19f5646a8f3d522232c1dd72a036edb86f8c04e332759cda590026ba122cca53_prof);

        
        $__internal_2335768ad35a9a96e75c50ddd8302db3d633240cf8bdd83aaef9ff73f2249b3c->leave($__internal_2335768ad35a9a96e75c50ddd8302db3d633240cf8bdd83aaef9ff73f2249b3c_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_c5c0b45cb807e26c227827913c304228ff54b5fff73645fcb63f669c12969abf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c0b45cb807e26c227827913c304228ff54b5fff73645fcb63f669c12969abf->enter($__internal_c5c0b45cb807e26c227827913c304228ff54b5fff73645fcb63f669c12969abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_7dd6ffcebc8ad5f96f76d4ecd2e0c326eaf58d52f4ec42f0abda4e2e1567264d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd6ffcebc8ad5f96f76d4ecd2e0c326eaf58d52f4ec42f0abda4e2e1567264d->enter($__internal_7dd6ffcebc8ad5f96f76d4ecd2e0c326eaf58d52f4ec42f0abda4e2e1567264d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_7dd6ffcebc8ad5f96f76d4ecd2e0c326eaf58d52f4ec42f0abda4e2e1567264d->leave($__internal_7dd6ffcebc8ad5f96f76d4ecd2e0c326eaf58d52f4ec42f0abda4e2e1567264d_prof);

        
        $__internal_c5c0b45cb807e26c227827913c304228ff54b5fff73645fcb63f669c12969abf->leave($__internal_c5c0b45cb807e26c227827913c304228ff54b5fff73645fcb63f669c12969abf_prof);

    }

    public function getTemplateName()
    {
        return "maintenance/layout.html.twig";
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
{% endblock %}", "maintenance/layout.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\maintenance\\layout.html.twig");
    }
}
