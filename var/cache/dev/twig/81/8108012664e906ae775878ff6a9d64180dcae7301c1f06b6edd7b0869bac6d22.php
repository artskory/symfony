<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_2acf2cce10cefb76a3b3268f462d56728ff52b0af39b284b25b9a434aaefb453 extends Twig_Template
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
        $__internal_91ea8029342968714fa1326cb0044789cae3c11ee5b72ed73d5b2b38c1f7a8ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91ea8029342968714fa1326cb0044789cae3c11ee5b72ed73d5b2b38c1f7a8ac->enter($__internal_91ea8029342968714fa1326cb0044789cae3c11ee5b72ed73d5b2b38c1f7a8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_8c3654fa9e1eab5bc0b3e99dccb272d8ef0deddba3c0ac4aa3eef489ba62ed31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c3654fa9e1eab5bc0b3e99dccb272d8ef0deddba3c0ac4aa3eef489ba62ed31->enter($__internal_8c3654fa9e1eab5bc0b3e99dccb272d8ef0deddba3c0ac4aa3eef489ba62ed31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_91ea8029342968714fa1326cb0044789cae3c11ee5b72ed73d5b2b38c1f7a8ac->leave($__internal_91ea8029342968714fa1326cb0044789cae3c11ee5b72ed73d5b2b38c1f7a8ac_prof);

        
        $__internal_8c3654fa9e1eab5bc0b3e99dccb272d8ef0deddba3c0ac4aa3eef489ba62ed31->leave($__internal_8c3654fa9e1eab5bc0b3e99dccb272d8ef0deddba3c0ac4aa3eef489ba62ed31_prof);

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
