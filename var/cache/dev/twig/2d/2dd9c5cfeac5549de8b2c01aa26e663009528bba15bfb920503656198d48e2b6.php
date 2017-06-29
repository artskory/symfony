<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_7d8ed9ab729cdf898cb3f2246cbe34992c20dae3bb3f74854d5869e4feeedf7b extends Twig_Template
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
        $__internal_80da6b17661a16561d8f0f57ada402f47f95224b14900bae2bd52d6d54842c42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80da6b17661a16561d8f0f57ada402f47f95224b14900bae2bd52d6d54842c42->enter($__internal_80da6b17661a16561d8f0f57ada402f47f95224b14900bae2bd52d6d54842c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_08891e5dfe325ed8689e1491d4395edce47fc69b35bdc210e9d7d44482d83e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08891e5dfe325ed8689e1491d4395edce47fc69b35bdc210e9d7d44482d83e0e->enter($__internal_08891e5dfe325ed8689e1491d4395edce47fc69b35bdc210e9d7d44482d83e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_80da6b17661a16561d8f0f57ada402f47f95224b14900bae2bd52d6d54842c42->leave($__internal_80da6b17661a16561d8f0f57ada402f47f95224b14900bae2bd52d6d54842c42_prof);

        
        $__internal_08891e5dfe325ed8689e1491d4395edce47fc69b35bdc210e9d7d44482d83e0e->leave($__internal_08891e5dfe325ed8689e1491d4395edce47fc69b35bdc210e9d7d44482d83e0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
