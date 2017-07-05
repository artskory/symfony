<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_e6f08263f9809824173148254c1c6c91494ddded93e8197865668ff5a5821b6c extends Twig_Template
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
        $__internal_1ad837097e8277c4e00a569f2a28e4fca0f01ccf8109d9676219e2e361f733f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ad837097e8277c4e00a569f2a28e4fca0f01ccf8109d9676219e2e361f733f8->enter($__internal_1ad837097e8277c4e00a569f2a28e4fca0f01ccf8109d9676219e2e361f733f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_2c0418cd4f4271d20b38ee77a4f1853c47c228109fde735231019f7326994c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0418cd4f4271d20b38ee77a4f1853c47c228109fde735231019f7326994c6b->enter($__internal_2c0418cd4f4271d20b38ee77a4f1853c47c228109fde735231019f7326994c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_1ad837097e8277c4e00a569f2a28e4fca0f01ccf8109d9676219e2e361f733f8->leave($__internal_1ad837097e8277c4e00a569f2a28e4fca0f01ccf8109d9676219e2e361f733f8_prof);

        
        $__internal_2c0418cd4f4271d20b38ee77a4f1853c47c228109fde735231019f7326994c6b->leave($__internal_2c0418cd4f4271d20b38ee77a4f1853c47c228109fde735231019f7326994c6b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
