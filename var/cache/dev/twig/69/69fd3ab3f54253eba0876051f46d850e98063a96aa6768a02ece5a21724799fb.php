<?php

/* :catalogue:layout.html.twig */
class __TwigTemplate_303ae8c102c520b2f2fa101806992a8c219cd6b1bd098af1fa804168033ccc58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":catalogue:layout.html.twig", 1);
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
        $__internal_897e22eab68a15d8955381f9a55e0304041c10fcc176751c903e92ae1b1e5c3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_897e22eab68a15d8955381f9a55e0304041c10fcc176751c903e92ae1b1e5c3e->enter($__internal_897e22eab68a15d8955381f9a55e0304041c10fcc176751c903e92ae1b1e5c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:layout.html.twig"));

        $__internal_6caed7ef24fe8002e8fb0945178fb3d0602f5c6d6e7368d43fdec195261dd0fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6caed7ef24fe8002e8fb0945178fb3d0602f5c6d6e7368d43fdec195261dd0fe->enter($__internal_6caed7ef24fe8002e8fb0945178fb3d0602f5c6d6e7368d43fdec195261dd0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_897e22eab68a15d8955381f9a55e0304041c10fcc176751c903e92ae1b1e5c3e->leave($__internal_897e22eab68a15d8955381f9a55e0304041c10fcc176751c903e92ae1b1e5c3e_prof);

        
        $__internal_6caed7ef24fe8002e8fb0945178fb3d0602f5c6d6e7368d43fdec195261dd0fe->leave($__internal_6caed7ef24fe8002e8fb0945178fb3d0602f5c6d6e7368d43fdec195261dd0fe_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_82e0f6fe3cebc9a31d8b54176460249cdc49b821e1b60aa00b977fdc3010083e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82e0f6fe3cebc9a31d8b54176460249cdc49b821e1b60aa00b977fdc3010083e->enter($__internal_82e0f6fe3cebc9a31d8b54176460249cdc49b821e1b60aa00b977fdc3010083e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dbae9f6d052469f6d813840e6e3bf27a89610184d6c4247e1e85af18e17f9f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbae9f6d052469f6d813840e6e3bf27a89610184d6c4247e1e85af18e17f9f72->enter($__internal_dbae9f6d052469f6d813840e6e3bf27a89610184d6c4247e1e85af18e17f9f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Catalogue";
        
        $__internal_dbae9f6d052469f6d813840e6e3bf27a89610184d6c4247e1e85af18e17f9f72->leave($__internal_dbae9f6d052469f6d813840e6e3bf27a89610184d6c4247e1e85af18e17f9f72_prof);

        
        $__internal_82e0f6fe3cebc9a31d8b54176460249cdc49b821e1b60aa00b977fdc3010083e->leave($__internal_82e0f6fe3cebc9a31d8b54176460249cdc49b821e1b60aa00b977fdc3010083e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e033d9d6b6dca32843eff8da5c4187d1648e1c8444e5b641294ca7b1a5e8fb3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e033d9d6b6dca32843eff8da5c4187d1648e1c8444e5b641294ca7b1a5e8fb3c->enter($__internal_e033d9d6b6dca32843eff8da5c4187d1648e1c8444e5b641294ca7b1a5e8fb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0962c1dec09f003ac587f1f78735dfc707aafb3ad0039d8dcfba53078a904d96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0962c1dec09f003ac587f1f78735dfc707aafb3ad0039d8dcfba53078a904d96->enter($__internal_0962c1dec09f003ac587f1f78735dfc707aafb3ad0039d8dcfba53078a904d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Catalogue</h1>
    ";
        // line 5
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_0962c1dec09f003ac587f1f78735dfc707aafb3ad0039d8dcfba53078a904d96->leave($__internal_0962c1dec09f003ac587f1f78735dfc707aafb3ad0039d8dcfba53078a904d96_prof);

        
        $__internal_e033d9d6b6dca32843eff8da5c4187d1648e1c8444e5b641294ca7b1a5e8fb3c->leave($__internal_e033d9d6b6dca32843eff8da5c4187d1648e1c8444e5b641294ca7b1a5e8fb3c_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_9c8583bc0d4ca7b8a152ae731d56e36c6a890c6030ceac502dd172be357df4b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c8583bc0d4ca7b8a152ae731d56e36c6a890c6030ceac502dd172be357df4b6->enter($__internal_9c8583bc0d4ca7b8a152ae731d56e36c6a890c6030ceac502dd172be357df4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_07cad74a3e5031648bf839d2469fbcde39329f2b65686e914bcf6ce72437df50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07cad74a3e5031648bf839d2469fbcde39329f2b65686e914bcf6ce72437df50->enter($__internal_07cad74a3e5031648bf839d2469fbcde39329f2b65686e914bcf6ce72437df50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_07cad74a3e5031648bf839d2469fbcde39329f2b65686e914bcf6ce72437df50->leave($__internal_07cad74a3e5031648bf839d2469fbcde39329f2b65686e914bcf6ce72437df50_prof);

        
        $__internal_9c8583bc0d4ca7b8a152ae731d56e36c6a890c6030ceac502dd172be357df4b6->leave($__internal_9c8583bc0d4ca7b8a152ae731d56e36c6a890c6030ceac502dd172be357df4b6_prof);

    }

    public function getTemplateName()
    {
        return ":catalogue:layout.html.twig";
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
{% endblock %}", ":catalogue:layout.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/catalogue/layout.html.twig");
    }
}
