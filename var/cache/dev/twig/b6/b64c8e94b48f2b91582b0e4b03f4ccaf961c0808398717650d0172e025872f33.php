<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_96888c231022b8b5a4bbcfa5b2bfe8f4b09dabf91ac0fa283d272f1857e8b60e extends Twig_Template
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
        $__internal_651260798917737879cfee85f5f56e81f4de3a4a7775224b15fa9508da5539b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_651260798917737879cfee85f5f56e81f4de3a4a7775224b15fa9508da5539b2->enter($__internal_651260798917737879cfee85f5f56e81f4de3a4a7775224b15fa9508da5539b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_2ce3a0fef4f3de5c1a30191beff1f389f4575cebc1ea831f4f23decb36b183b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce3a0fef4f3de5c1a30191beff1f389f4575cebc1ea831f4f23decb36b183b4->enter($__internal_2ce3a0fef4f3de5c1a30191beff1f389f4575cebc1ea831f4f23decb36b183b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_651260798917737879cfee85f5f56e81f4de3a4a7775224b15fa9508da5539b2->leave($__internal_651260798917737879cfee85f5f56e81f4de3a4a7775224b15fa9508da5539b2_prof);

        
        $__internal_2ce3a0fef4f3de5c1a30191beff1f389f4575cebc1ea831f4f23decb36b183b4->leave($__internal_2ce3a0fef4f3de5c1a30191beff1f389f4575cebc1ea831f4f23decb36b183b4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
