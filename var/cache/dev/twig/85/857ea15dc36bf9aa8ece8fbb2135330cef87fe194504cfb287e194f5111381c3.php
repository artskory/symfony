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
        $__internal_0acf94acdc1c31230c279ad256913554b1abf9589cb4227bb50e2a2ba37fd008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0acf94acdc1c31230c279ad256913554b1abf9589cb4227bb50e2a2ba37fd008->enter($__internal_0acf94acdc1c31230c279ad256913554b1abf9589cb4227bb50e2a2ba37fd008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_c69b54609197fa96f76dba7503c267dd616d4ed50f4e8a939e803fea11ee979c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69b54609197fa96f76dba7503c267dd616d4ed50f4e8a939e803fea11ee979c->enter($__internal_c69b54609197fa96f76dba7503c267dd616d4ed50f4e8a939e803fea11ee979c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_0acf94acdc1c31230c279ad256913554b1abf9589cb4227bb50e2a2ba37fd008->leave($__internal_0acf94acdc1c31230c279ad256913554b1abf9589cb4227bb50e2a2ba37fd008_prof);

        
        $__internal_c69b54609197fa96f76dba7503c267dd616d4ed50f4e8a939e803fea11ee979c->leave($__internal_c69b54609197fa96f76dba7503c267dd616d4ed50f4e8a939e803fea11ee979c_prof);

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
