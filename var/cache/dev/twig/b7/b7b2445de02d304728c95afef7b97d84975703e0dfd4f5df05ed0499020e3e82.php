<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_f6fdea47abf10eeba4846f7008bdc7c004e40c6f9050ec6f8252750b75bd86e0 extends Twig_Template
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
        $__internal_bc0ac31204fa8a9b4ab2ba4e1e1115786e8341d4c583b991e5454e4f6709e364 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc0ac31204fa8a9b4ab2ba4e1e1115786e8341d4c583b991e5454e4f6709e364->enter($__internal_bc0ac31204fa8a9b4ab2ba4e1e1115786e8341d4c583b991e5454e4f6709e364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_2cc4d1d5fe4c3fb1555ae427a0086154e3ce64bf8ef58405638a7a3258dcfe59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cc4d1d5fe4c3fb1555ae427a0086154e3ce64bf8ef58405638a7a3258dcfe59->enter($__internal_2cc4d1d5fe4c3fb1555ae427a0086154e3ce64bf8ef58405638a7a3258dcfe59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_bc0ac31204fa8a9b4ab2ba4e1e1115786e8341d4c583b991e5454e4f6709e364->leave($__internal_bc0ac31204fa8a9b4ab2ba4e1e1115786e8341d4c583b991e5454e4f6709e364_prof);

        
        $__internal_2cc4d1d5fe4c3fb1555ae427a0086154e3ce64bf8ef58405638a7a3258dcfe59->leave($__internal_2cc4d1d5fe4c3fb1555ae427a0086154e3ce64bf8ef58405638a7a3258dcfe59_prof);

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
