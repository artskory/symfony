<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_222799021d557dd42a688230a1c23f551ccc31ce407cf75605edad38697ed1a1 extends Twig_Template
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
        $__internal_886edbd46cc3379a229870993fd3b3539fdea90a9b11e5cd2760227bc504295c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_886edbd46cc3379a229870993fd3b3539fdea90a9b11e5cd2760227bc504295c->enter($__internal_886edbd46cc3379a229870993fd3b3539fdea90a9b11e5cd2760227bc504295c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_5f89b2374118339aef12efad8173ecce2ed1903163da067ba27893998f8174ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f89b2374118339aef12efad8173ecce2ed1903163da067ba27893998f8174ff->enter($__internal_5f89b2374118339aef12efad8173ecce2ed1903163da067ba27893998f8174ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_886edbd46cc3379a229870993fd3b3539fdea90a9b11e5cd2760227bc504295c->leave($__internal_886edbd46cc3379a229870993fd3b3539fdea90a9b11e5cd2760227bc504295c_prof);

        
        $__internal_5f89b2374118339aef12efad8173ecce2ed1903163da067ba27893998f8174ff->leave($__internal_5f89b2374118339aef12efad8173ecce2ed1903163da067ba27893998f8174ff_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
