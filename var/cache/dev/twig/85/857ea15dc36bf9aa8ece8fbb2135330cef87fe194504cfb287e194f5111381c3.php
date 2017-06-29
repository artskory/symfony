<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_5b2bb63233d581cd57c05a6df5edad741fbf33de9b3c899d761c93002141dcc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_006c8d9b7423cfadf959f446cbc1b694a2d768bacfc43db3d1dcec67952e905e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_006c8d9b7423cfadf959f446cbc1b694a2d768bacfc43db3d1dcec67952e905e->enter($__internal_006c8d9b7423cfadf959f446cbc1b694a2d768bacfc43db3d1dcec67952e905e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_f8fcaae858ccbc25ebf28541771258513fe1597861f5153661653d668d7b5246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8fcaae858ccbc25ebf28541771258513fe1597861f5153661653d668d7b5246->enter($__internal_f8fcaae858ccbc25ebf28541771258513fe1597861f5153661653d668d7b5246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_006c8d9b7423cfadf959f446cbc1b694a2d768bacfc43db3d1dcec67952e905e->leave($__internal_006c8d9b7423cfadf959f446cbc1b694a2d768bacfc43db3d1dcec67952e905e_prof);

        
        $__internal_f8fcaae858ccbc25ebf28541771258513fe1597861f5153661653d668d7b5246->leave($__internal_f8fcaae858ccbc25ebf28541771258513fe1597861f5153661653d668d7b5246_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
