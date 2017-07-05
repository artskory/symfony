<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_780f41413eb36df648f0f7ce5868cf8cf95e84e650944df0ae721e0de50c690d extends Twig_Template
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
        $__internal_912f137f84c44b9790b36e429d9259019eaf2b3c487d342e9ecd1b36797fc4fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_912f137f84c44b9790b36e429d9259019eaf2b3c487d342e9ecd1b36797fc4fd->enter($__internal_912f137f84c44b9790b36e429d9259019eaf2b3c487d342e9ecd1b36797fc4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_59a83f131e32c84be69af16e9459825881e3ee2bef9e2fc492809f1913fffa25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a83f131e32c84be69af16e9459825881e3ee2bef9e2fc492809f1913fffa25->enter($__internal_59a83f131e32c84be69af16e9459825881e3ee2bef9e2fc492809f1913fffa25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_912f137f84c44b9790b36e429d9259019eaf2b3c487d342e9ecd1b36797fc4fd->leave($__internal_912f137f84c44b9790b36e429d9259019eaf2b3c487d342e9ecd1b36797fc4fd_prof);

        
        $__internal_59a83f131e32c84be69af16e9459825881e3ee2bef9e2fc492809f1913fffa25->leave($__internal_59a83f131e32c84be69af16e9459825881e3ee2bef9e2fc492809f1913fffa25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
