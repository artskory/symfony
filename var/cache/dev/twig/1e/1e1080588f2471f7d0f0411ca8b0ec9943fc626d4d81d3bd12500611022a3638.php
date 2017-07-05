<?php

/* catalogue/layout.html.twig */
class __TwigTemplate_c978bd5da57d40017a98430cc76ec1fef42f9a42a4e842ea88283a4aba0ae3b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "catalogue/layout.html.twig", 1);
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
        $__internal_158d01123fabd685e5b7b42a6704aa5f2fa63362edfe8beacd102812899bd055 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_158d01123fabd685e5b7b42a6704aa5f2fa63362edfe8beacd102812899bd055->enter($__internal_158d01123fabd685e5b7b42a6704aa5f2fa63362edfe8beacd102812899bd055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/layout.html.twig"));

        $__internal_b2d6815be83d302482127e73e21c5d8f3d59a2fb1024015b71b19c44db3f7fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2d6815be83d302482127e73e21c5d8f3d59a2fb1024015b71b19c44db3f7fb7->enter($__internal_b2d6815be83d302482127e73e21c5d8f3d59a2fb1024015b71b19c44db3f7fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_158d01123fabd685e5b7b42a6704aa5f2fa63362edfe8beacd102812899bd055->leave($__internal_158d01123fabd685e5b7b42a6704aa5f2fa63362edfe8beacd102812899bd055_prof);

        
        $__internal_b2d6815be83d302482127e73e21c5d8f3d59a2fb1024015b71b19c44db3f7fb7->leave($__internal_b2d6815be83d302482127e73e21c5d8f3d59a2fb1024015b71b19c44db3f7fb7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c71d1a9f43fd0558c43f658e592eede9bf5c4b19dcd5311e2041551553e00786 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c71d1a9f43fd0558c43f658e592eede9bf5c4b19dcd5311e2041551553e00786->enter($__internal_c71d1a9f43fd0558c43f658e592eede9bf5c4b19dcd5311e2041551553e00786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_41c55536c2ca04ab5a87b02217b5c4a38241b0f9680880b30e32ccab974b721a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41c55536c2ca04ab5a87b02217b5c4a38241b0f9680880b30e32ccab974b721a->enter($__internal_41c55536c2ca04ab5a87b02217b5c4a38241b0f9680880b30e32ccab974b721a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Catalogue";
        
        $__internal_41c55536c2ca04ab5a87b02217b5c4a38241b0f9680880b30e32ccab974b721a->leave($__internal_41c55536c2ca04ab5a87b02217b5c4a38241b0f9680880b30e32ccab974b721a_prof);

        
        $__internal_c71d1a9f43fd0558c43f658e592eede9bf5c4b19dcd5311e2041551553e00786->leave($__internal_c71d1a9f43fd0558c43f658e592eede9bf5c4b19dcd5311e2041551553e00786_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_23d66c3494e777d61c6477a42d27103d55e97f56befeb4102937af88b6957fd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23d66c3494e777d61c6477a42d27103d55e97f56befeb4102937af88b6957fd7->enter($__internal_23d66c3494e777d61c6477a42d27103d55e97f56befeb4102937af88b6957fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f8944683216a9bc82a5a98f0df65c6ddcb8825c61afaf784828a486fed43536e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8944683216a9bc82a5a98f0df65c6ddcb8825c61afaf784828a486fed43536e->enter($__internal_f8944683216a9bc82a5a98f0df65c6ddcb8825c61afaf784828a486fed43536e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Catalogue</h1>
    ";
        // line 5
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_f8944683216a9bc82a5a98f0df65c6ddcb8825c61afaf784828a486fed43536e->leave($__internal_f8944683216a9bc82a5a98f0df65c6ddcb8825c61afaf784828a486fed43536e_prof);

        
        $__internal_23d66c3494e777d61c6477a42d27103d55e97f56befeb4102937af88b6957fd7->leave($__internal_23d66c3494e777d61c6477a42d27103d55e97f56befeb4102937af88b6957fd7_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_1398b4eea1055c9a8c63f58ff6457b32c18f2ff3460b6df375b88eca63f4cacf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1398b4eea1055c9a8c63f58ff6457b32c18f2ff3460b6df375b88eca63f4cacf->enter($__internal_1398b4eea1055c9a8c63f58ff6457b32c18f2ff3460b6df375b88eca63f4cacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_082d2fbec93dfff9f322749efdd94c6cccd742f08e28c693b861c7dc4ea9817b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_082d2fbec93dfff9f322749efdd94c6cccd742f08e28c693b861c7dc4ea9817b->enter($__internal_082d2fbec93dfff9f322749efdd94c6cccd742f08e28c693b861c7dc4ea9817b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_082d2fbec93dfff9f322749efdd94c6cccd742f08e28c693b861c7dc4ea9817b->leave($__internal_082d2fbec93dfff9f322749efdd94c6cccd742f08e28c693b861c7dc4ea9817b_prof);

        
        $__internal_1398b4eea1055c9a8c63f58ff6457b32c18f2ff3460b6df375b88eca63f4cacf->leave($__internal_1398b4eea1055c9a8c63f58ff6457b32c18f2ff3460b6df375b88eca63f4cacf_prof);

    }

    public function getTemplateName()
    {
        return "catalogue/layout.html.twig";
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
{% block title %}Catalogue{% endblock %}
{% block body %}
    <h1>Catalogue</h1>
    {% block body_layout %}{% endblock %}
{% endblock %}", "catalogue/layout.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\catalogue\\layout.html.twig");
    }
}
