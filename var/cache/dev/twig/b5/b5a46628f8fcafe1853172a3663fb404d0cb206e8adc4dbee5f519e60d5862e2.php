<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_25ec13e89e2855104038fd2fa4ff2dac145d096cba47cff79316969a91e27a80 extends Twig_Template
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
        $__internal_e80ceeef432ab6040070e7272ca933f01951b3a5f4e082128cb60a9dc2a0b3d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e80ceeef432ab6040070e7272ca933f01951b3a5f4e082128cb60a9dc2a0b3d8->enter($__internal_e80ceeef432ab6040070e7272ca933f01951b3a5f4e082128cb60a9dc2a0b3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_06bb09ffb899daa4e5fd533b47164a2a3c8622d65b74a681b0c17ed8e0c3ed4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06bb09ffb899daa4e5fd533b47164a2a3c8622d65b74a681b0c17ed8e0c3ed4c->enter($__internal_06bb09ffb899daa4e5fd533b47164a2a3c8622d65b74a681b0c17ed8e0c3ed4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_e80ceeef432ab6040070e7272ca933f01951b3a5f4e082128cb60a9dc2a0b3d8->leave($__internal_e80ceeef432ab6040070e7272ca933f01951b3a5f4e082128cb60a9dc2a0b3d8_prof);

        
        $__internal_06bb09ffb899daa4e5fd533b47164a2a3c8622d65b74a681b0c17ed8e0c3ed4c->leave($__internal_06bb09ffb899daa4e5fd533b47164a2a3c8622d65b74a681b0c17ed8e0c3ed4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
