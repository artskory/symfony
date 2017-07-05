<?php

/* OCPlatformBundle:Annonce:index.html.twig */
class __TwigTemplate_6c191c6597dadfd5736ffcd8090cb234247bcf7e18787178e8a82b03ebdc89c6 extends Twig_Template
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
        $__internal_86a3c133c851a3cb99b800b3688e468c85219ed7aab32f91db3894ed126c3ce3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86a3c133c851a3cb99b800b3688e468c85219ed7aab32f91db3894ed126c3ce3->enter($__internal_86a3c133c851a3cb99b800b3688e468c85219ed7aab32f91db3894ed126c3ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Annonce:index.html.twig"));

        $__internal_e67bc5c41ddb243aa157ae0a50aa6a3e1a676ea26490d65829da8c1562f258b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e67bc5c41ddb243aa157ae0a50aa6a3e1a676ea26490d65829da8c1562f258b2->enter($__internal_e67bc5c41ddb243aa157ae0a50aa6a3e1a676ea26490d65829da8c1562f258b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Annonce:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86a3c133c851a3cb99b800b3688e468c85219ed7aab32f91db3894ed126c3ce3->leave($__internal_86a3c133c851a3cb99b800b3688e468c85219ed7aab32f91db3894ed126c3ce3_prof);

        
        $__internal_e67bc5c41ddb243aa157ae0a50aa6a3e1a676ea26490d65829da8c1562f258b2->leave($__internal_e67bc5c41ddb243aa157ae0a50aa6a3e1a676ea26490d65829da8c1562f258b2_prof);

    }

    // line 3
    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_0d902fb5ac91c3297043ac9a9ed971608f4c865283d5d94e4c36543bae579ef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d902fb5ac91c3297043ac9a9ed971608f4c865283d5d94e4c36543bae579ef2->enter($__internal_0d902fb5ac91c3297043ac9a9ed971608f4c865283d5d94e4c36543bae579ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_1b69fe2deeb35977c5ab5fa57f31fdd511c9465943acd4e54ec6d7811fb0bba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b69fe2deeb35977c5ab5fa57f31fdd511c9465943acd4e54ec6d7811fb0bba6->enter($__internal_1b69fe2deeb35977c5ab5fa57f31fdd511c9465943acd4e54ec6d7811fb0bba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        // line 4
        echo "
";
        
        $__internal_1b69fe2deeb35977c5ab5fa57f31fdd511c9465943acd4e54ec6d7811fb0bba6->leave($__internal_1b69fe2deeb35977c5ab5fa57f31fdd511c9465943acd4e54ec6d7811fb0bba6_prof);

        
        $__internal_0d902fb5ac91c3297043ac9a9ed971608f4c865283d5d94e4c36543bae579ef2->leave($__internal_0d902fb5ac91c3297043ac9a9ed971608f4c865283d5d94e4c36543bae579ef2_prof);

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
