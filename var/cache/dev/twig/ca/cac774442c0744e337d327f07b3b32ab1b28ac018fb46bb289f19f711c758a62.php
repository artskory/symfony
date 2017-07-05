<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_f7fee2fcf67d9d530c35d9bc7a61b55427153df31cb440045c3bb544c78c82fe extends Twig_Template
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
        $__internal_c03fbe9746a1f774dec0e9b9a6c8282550c33b26823660baf585acff6df9b745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c03fbe9746a1f774dec0e9b9a6c8282550c33b26823660baf585acff6df9b745->enter($__internal_c03fbe9746a1f774dec0e9b9a6c8282550c33b26823660baf585acff6df9b745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_d878594dbf056574117fe719a02dd221d2316e41a209acadc41ea02b5e7d5440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d878594dbf056574117fe719a02dd221d2316e41a209acadc41ea02b5e7d5440->enter($__internal_d878594dbf056574117fe719a02dd221d2316e41a209acadc41ea02b5e7d5440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_c03fbe9746a1f774dec0e9b9a6c8282550c33b26823660baf585acff6df9b745->leave($__internal_c03fbe9746a1f774dec0e9b9a6c8282550c33b26823660baf585acff6df9b745_prof);

        
        $__internal_d878594dbf056574117fe719a02dd221d2316e41a209acadc41ea02b5e7d5440->leave($__internal_d878594dbf056574117fe719a02dd221d2316e41a209acadc41ea02b5e7d5440_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
