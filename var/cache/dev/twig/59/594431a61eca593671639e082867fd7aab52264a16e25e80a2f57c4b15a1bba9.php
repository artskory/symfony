<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_52ba81176fbbadc3a461e6ba6f0bbee64b94f5bba8666748c85d4f8a0927ae47 extends Twig_Template
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
        $__internal_b3dd6c676498311fbf1db45ac7669a275fc8d39a5ce79cfab7e18b2ed7656bbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3dd6c676498311fbf1db45ac7669a275fc8d39a5ce79cfab7e18b2ed7656bbe->enter($__internal_b3dd6c676498311fbf1db45ac7669a275fc8d39a5ce79cfab7e18b2ed7656bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_08afc4de2a4dcafd3521300b1107539db8cfcdd760c998e158f51428d7f7dce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08afc4de2a4dcafd3521300b1107539db8cfcdd760c998e158f51428d7f7dce1->enter($__internal_08afc4de2a4dcafd3521300b1107539db8cfcdd760c998e158f51428d7f7dce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_b3dd6c676498311fbf1db45ac7669a275fc8d39a5ce79cfab7e18b2ed7656bbe->leave($__internal_b3dd6c676498311fbf1db45ac7669a275fc8d39a5ce79cfab7e18b2ed7656bbe_prof);

        
        $__internal_08afc4de2a4dcafd3521300b1107539db8cfcdd760c998e158f51428d7f7dce1->leave($__internal_08afc4de2a4dcafd3521300b1107539db8cfcdd760c998e158f51428d7f7dce1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
