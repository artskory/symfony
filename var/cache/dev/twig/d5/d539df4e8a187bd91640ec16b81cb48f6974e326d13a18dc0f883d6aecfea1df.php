<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_29ee503f2ae425eb4518ba3e83055ca4139719c5540ed73229c6f907fd16ea30 extends Twig_Template
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
        $__internal_76de678d2da1f34460cdbf228116ef240f956e6c0ead96bf2688bc2dca2fbbd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76de678d2da1f34460cdbf228116ef240f956e6c0ead96bf2688bc2dca2fbbd5->enter($__internal_76de678d2da1f34460cdbf228116ef240f956e6c0ead96bf2688bc2dca2fbbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_60c71ffa6ad0fe06972356bf6cb73b1c70c958d67ac2129dafcfe0cf7788b11c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c71ffa6ad0fe06972356bf6cb73b1c70c958d67ac2129dafcfe0cf7788b11c->enter($__internal_60c71ffa6ad0fe06972356bf6cb73b1c70c958d67ac2129dafcfe0cf7788b11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_76de678d2da1f34460cdbf228116ef240f956e6c0ead96bf2688bc2dca2fbbd5->leave($__internal_76de678d2da1f34460cdbf228116ef240f956e6c0ead96bf2688bc2dca2fbbd5_prof);

        
        $__internal_60c71ffa6ad0fe06972356bf6cb73b1c70c958d67ac2129dafcfe0cf7788b11c->leave($__internal_60c71ffa6ad0fe06972356bf6cb73b1c70c958d67ac2129dafcfe0cf7788b11c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
