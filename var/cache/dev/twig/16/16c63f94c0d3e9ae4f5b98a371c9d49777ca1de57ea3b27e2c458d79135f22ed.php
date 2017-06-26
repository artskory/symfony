<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_876e37ec2c15c54b5dccba5fad8d4471a7160d16fc68586dc1355e168c2f46e9 extends Twig_Template
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
        $__internal_253ab55ac9d858a976306bf3dc495eae0cafd5ed7c6f6ac0ea0641998d38c0b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_253ab55ac9d858a976306bf3dc495eae0cafd5ed7c6f6ac0ea0641998d38c0b5->enter($__internal_253ab55ac9d858a976306bf3dc495eae0cafd5ed7c6f6ac0ea0641998d38c0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_1d8bf540ec8ef0600aa90e6a8dbf25bcbbd761a2c7f339e0b3a4c1053c4d3e32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d8bf540ec8ef0600aa90e6a8dbf25bcbbd761a2c7f339e0b3a4c1053c4d3e32->enter($__internal_1d8bf540ec8ef0600aa90e6a8dbf25bcbbd761a2c7f339e0b3a4c1053c4d3e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_253ab55ac9d858a976306bf3dc495eae0cafd5ed7c6f6ac0ea0641998d38c0b5->leave($__internal_253ab55ac9d858a976306bf3dc495eae0cafd5ed7c6f6ac0ea0641998d38c0b5_prof);

        
        $__internal_1d8bf540ec8ef0600aa90e6a8dbf25bcbbd761a2c7f339e0b3a4c1053c4d3e32->leave($__internal_1d8bf540ec8ef0600aa90e6a8dbf25bcbbd761a2c7f339e0b3a4c1053c4d3e32_prof);

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
