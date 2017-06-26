<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_83903156e41adafbef49f87500139e252a5cdfec3777029dde392d9e0980dc66 extends Twig_Template
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
        $__internal_137c9fd90f1068fdae9147ac1f90512b39c1ff8ea2df9ed112f2c7a45cade984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_137c9fd90f1068fdae9147ac1f90512b39c1ff8ea2df9ed112f2c7a45cade984->enter($__internal_137c9fd90f1068fdae9147ac1f90512b39c1ff8ea2df9ed112f2c7a45cade984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_dd4f7e14022a88b2d7c4ea927917b1f62ba7878504aaedbc964e3671db27d164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd4f7e14022a88b2d7c4ea927917b1f62ba7878504aaedbc964e3671db27d164->enter($__internal_dd4f7e14022a88b2d7c4ea927917b1f62ba7878504aaedbc964e3671db27d164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_137c9fd90f1068fdae9147ac1f90512b39c1ff8ea2df9ed112f2c7a45cade984->leave($__internal_137c9fd90f1068fdae9147ac1f90512b39c1ff8ea2df9ed112f2c7a45cade984_prof);

        
        $__internal_dd4f7e14022a88b2d7c4ea927917b1f62ba7878504aaedbc964e3671db27d164->leave($__internal_dd4f7e14022a88b2d7c4ea927917b1f62ba7878504aaedbc964e3671db27d164_prof);

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
