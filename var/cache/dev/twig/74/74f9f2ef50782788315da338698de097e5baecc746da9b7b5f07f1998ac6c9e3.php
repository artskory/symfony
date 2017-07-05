<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_2d29046a27a690fc4f7b067b4461e776b65c4a72ba75db65978d7ce379e8b746 extends Twig_Template
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
        $__internal_6c0988dc3e0656fa226fd71a11bc232b6c00f9acc296572e41a374f88db4ccec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c0988dc3e0656fa226fd71a11bc232b6c00f9acc296572e41a374f88db4ccec->enter($__internal_6c0988dc3e0656fa226fd71a11bc232b6c00f9acc296572e41a374f88db4ccec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_6ea0171c40204ac0d79c5c942bee62abf199662dabb0c30ae048e194ad66cbd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ea0171c40204ac0d79c5c942bee62abf199662dabb0c30ae048e194ad66cbd9->enter($__internal_6ea0171c40204ac0d79c5c942bee62abf199662dabb0c30ae048e194ad66cbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_6c0988dc3e0656fa226fd71a11bc232b6c00f9acc296572e41a374f88db4ccec->leave($__internal_6c0988dc3e0656fa226fd71a11bc232b6c00f9acc296572e41a374f88db4ccec_prof);

        
        $__internal_6ea0171c40204ac0d79c5c942bee62abf199662dabb0c30ae048e194ad66cbd9->leave($__internal_6ea0171c40204ac0d79c5c942bee62abf199662dabb0c30ae048e194ad66cbd9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
