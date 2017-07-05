<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_1e8af5fa342b06f1d4258ee8683cf96dfdcd98cfd967affe27514170440e964d extends Twig_Template
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
        $__internal_5b58b03fbd0d0f2eabdd5f6236765eb4637abef004baf3540bc52c26530302c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b58b03fbd0d0f2eabdd5f6236765eb4637abef004baf3540bc52c26530302c4->enter($__internal_5b58b03fbd0d0f2eabdd5f6236765eb4637abef004baf3540bc52c26530302c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_6272f3c6b8424f4ce8c5836f25a22020105671ebb639a5aa450e99b4b88efa86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6272f3c6b8424f4ce8c5836f25a22020105671ebb639a5aa450e99b4b88efa86->enter($__internal_6272f3c6b8424f4ce8c5836f25a22020105671ebb639a5aa450e99b4b88efa86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_5b58b03fbd0d0f2eabdd5f6236765eb4637abef004baf3540bc52c26530302c4->leave($__internal_5b58b03fbd0d0f2eabdd5f6236765eb4637abef004baf3540bc52c26530302c4_prof);

        
        $__internal_6272f3c6b8424f4ce8c5836f25a22020105671ebb639a5aa450e99b4b88efa86->leave($__internal_6272f3c6b8424f4ce8c5836f25a22020105671ebb639a5aa450e99b4b88efa86_prof);

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
