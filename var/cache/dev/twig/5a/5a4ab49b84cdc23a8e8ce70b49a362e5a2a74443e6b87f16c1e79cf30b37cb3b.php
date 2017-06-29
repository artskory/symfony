<?php

/* OCPlatformBundle:Annonce:index.html.twig */
class __TwigTemplate_b934a6aa4a981254ee0e221f9c19da9b4844d43469833f24e50dd0551ea10784 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle:Annonce:layout.html.twig", "OCPlatformBundle:Annonce:index.html.twig", 1);
        $this->blocks = array(
            'body_layout' => array($this, 'block_body_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle:Annonce:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c96ddde38902abb367ce936044e2f89329d535f725054a445d76bdd1a21844c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c96ddde38902abb367ce936044e2f89329d535f725054a445d76bdd1a21844c6->enter($__internal_c96ddde38902abb367ce936044e2f89329d535f725054a445d76bdd1a21844c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Annonce:index.html.twig"));

        $__internal_2810f44de4dda935938b3cc73a0e8ab974a36bdb545d08407ecf92e51a6e0025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2810f44de4dda935938b3cc73a0e8ab974a36bdb545d08407ecf92e51a6e0025->enter($__internal_2810f44de4dda935938b3cc73a0e8ab974a36bdb545d08407ecf92e51a6e0025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Annonce:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c96ddde38902abb367ce936044e2f89329d535f725054a445d76bdd1a21844c6->leave($__internal_c96ddde38902abb367ce936044e2f89329d535f725054a445d76bdd1a21844c6_prof);

        
        $__internal_2810f44de4dda935938b3cc73a0e8ab974a36bdb545d08407ecf92e51a6e0025->leave($__internal_2810f44de4dda935938b3cc73a0e8ab974a36bdb545d08407ecf92e51a6e0025_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_f8f4a79fc64a6ed64ce5a195dd7514b92d7ba4f786848ad4bcdf799b963c49da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8f4a79fc64a6ed64ce5a195dd7514b92d7ba4f786848ad4bcdf799b963c49da->enter($__internal_f8f4a79fc64a6ed64ce5a195dd7514b92d7ba4f786848ad4bcdf799b963c49da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_e85cbda8783132004ee95ed76c3df0dd666d69b76fe3676bd28ffa64b5e30488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e85cbda8783132004ee95ed76c3df0dd666d69b76fe3676bd28ffa64b5e30488->enter($__internal_e85cbda8783132004ee95ed76c3df0dd666d69b76fe3676bd28ffa64b5e30488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 4
        echo "
";
        
        $__internal_e85cbda8783132004ee95ed76c3df0dd666d69b76fe3676bd28ffa64b5e30488->leave($__internal_e85cbda8783132004ee95ed76c3df0dd666d69b76fe3676bd28ffa64b5e30488_prof);

        
        $__internal_f8f4a79fc64a6ed64ce5a195dd7514b92d7ba4f786848ad4bcdf799b963c49da->leave($__internal_f8f4a79fc64a6ed64ce5a195dd7514b92d7ba4f786848ad4bcdf799b963c49da_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Annonce:index.html.twig";
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
        return new Twig_Source("{% extends \"OCPlatformBundle:Annonce:layout.html.twig\" %}

{% block body_layout %}

{% endblock %}
", "OCPlatformBundle:Annonce:index.html.twig", "C:\\xampp\\htdocs\\symfony\\src\\OC\\PlatformBundle/Resources/views/Annonce/index.html.twig");
    }
}
