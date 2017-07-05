<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_5f00988f83cf7d8995cbb3f993ef054a88024483b76c09420ffaf3f8b16e1312 extends Twig_Template
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
        $__internal_23c1d31b5ea6707fff3547d0faa04283c9a03a2a7ee316cc62e459a68699c144 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23c1d31b5ea6707fff3547d0faa04283c9a03a2a7ee316cc62e459a68699c144->enter($__internal_23c1d31b5ea6707fff3547d0faa04283c9a03a2a7ee316cc62e459a68699c144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_c58652b00469a8ce38fe3e80d900a77829549d3dddcfcd5488660b79ee31f6f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58652b00469a8ce38fe3e80d900a77829549d3dddcfcd5488660b79ee31f6f7->enter($__internal_c58652b00469a8ce38fe3e80d900a77829549d3dddcfcd5488660b79ee31f6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_23c1d31b5ea6707fff3547d0faa04283c9a03a2a7ee316cc62e459a68699c144->leave($__internal_23c1d31b5ea6707fff3547d0faa04283c9a03a2a7ee316cc62e459a68699c144_prof);

        
        $__internal_c58652b00469a8ce38fe3e80d900a77829549d3dddcfcd5488660b79ee31f6f7->leave($__internal_c58652b00469a8ce38fe3e80d900a77829549d3dddcfcd5488660b79ee31f6f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
