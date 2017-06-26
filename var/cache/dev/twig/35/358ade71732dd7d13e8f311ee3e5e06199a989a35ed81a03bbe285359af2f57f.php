<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_277715c0b76261d65d28ab5de8353854fa5a3ab2ae21ff3c62f3e32833d56a6c extends Twig_Template
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
        $__internal_722faf3bf7d649ddec6c53eaecbd6d7cdffd96003defe982bae7cef8e07d6326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_722faf3bf7d649ddec6c53eaecbd6d7cdffd96003defe982bae7cef8e07d6326->enter($__internal_722faf3bf7d649ddec6c53eaecbd6d7cdffd96003defe982bae7cef8e07d6326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_24ee7c17758ec358eb79ea5b02cf92d4e8bf2c0a386e0842f45ac573e972a93d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24ee7c17758ec358eb79ea5b02cf92d4e8bf2c0a386e0842f45ac573e972a93d->enter($__internal_24ee7c17758ec358eb79ea5b02cf92d4e8bf2c0a386e0842f45ac573e972a93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_722faf3bf7d649ddec6c53eaecbd6d7cdffd96003defe982bae7cef8e07d6326->leave($__internal_722faf3bf7d649ddec6c53eaecbd6d7cdffd96003defe982bae7cef8e07d6326_prof);

        
        $__internal_24ee7c17758ec358eb79ea5b02cf92d4e8bf2c0a386e0842f45ac573e972a93d->leave($__internal_24ee7c17758ec358eb79ea5b02cf92d4e8bf2c0a386e0842f45ac573e972a93d_prof);

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
