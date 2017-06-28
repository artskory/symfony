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
        $__internal_6a1d47211c334538ecceb30a53fab98b280f147f83c2175efb249fd19b44de74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a1d47211c334538ecceb30a53fab98b280f147f83c2175efb249fd19b44de74->enter($__internal_6a1d47211c334538ecceb30a53fab98b280f147f83c2175efb249fd19b44de74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_617d512684d040228643a549778593a49801dd4376837271ee282aad80c3aa90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_617d512684d040228643a549778593a49801dd4376837271ee282aad80c3aa90->enter($__internal_617d512684d040228643a549778593a49801dd4376837271ee282aad80c3aa90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_6a1d47211c334538ecceb30a53fab98b280f147f83c2175efb249fd19b44de74->leave($__internal_6a1d47211c334538ecceb30a53fab98b280f147f83c2175efb249fd19b44de74_prof);

        
        $__internal_617d512684d040228643a549778593a49801dd4376837271ee282aad80c3aa90->leave($__internal_617d512684d040228643a549778593a49801dd4376837271ee282aad80c3aa90_prof);

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
