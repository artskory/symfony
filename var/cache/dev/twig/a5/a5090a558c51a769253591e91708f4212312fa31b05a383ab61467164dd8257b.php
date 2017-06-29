<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d44a666d6806b267ee8120a6becbb04f74e8dcf4507b8e043ea4a093e3df69fa extends Twig_Template
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
        $__internal_6bda3279b4bba9ccef6b23688e3f46a3ccc6739646a495c85e2685941d6edfa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bda3279b4bba9ccef6b23688e3f46a3ccc6739646a495c85e2685941d6edfa0->enter($__internal_6bda3279b4bba9ccef6b23688e3f46a3ccc6739646a495c85e2685941d6edfa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_a21c5f2a16807a1fe68ba8b9fcfdb4deb1d655ac1f8a232498380ebd4a959abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a21c5f2a16807a1fe68ba8b9fcfdb4deb1d655ac1f8a232498380ebd4a959abf->enter($__internal_a21c5f2a16807a1fe68ba8b9fcfdb4deb1d655ac1f8a232498380ebd4a959abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_6bda3279b4bba9ccef6b23688e3f46a3ccc6739646a495c85e2685941d6edfa0->leave($__internal_6bda3279b4bba9ccef6b23688e3f46a3ccc6739646a495c85e2685941d6edfa0_prof);

        
        $__internal_a21c5f2a16807a1fe68ba8b9fcfdb4deb1d655ac1f8a232498380ebd4a959abf->leave($__internal_a21c5f2a16807a1fe68ba8b9fcfdb4deb1d655ac1f8a232498380ebd4a959abf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
