<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_2d0c511cca59152ef2ab77b1b8ce0c7176a56c0695fb411d2b584a70956b1b2f extends Twig_Template
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
        $__internal_e08f0b5c80e9ceafbbb6eda36d89fc3ac2e63f0e097a7b16e285491e68e242d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e08f0b5c80e9ceafbbb6eda36d89fc3ac2e63f0e097a7b16e285491e68e242d0->enter($__internal_e08f0b5c80e9ceafbbb6eda36d89fc3ac2e63f0e097a7b16e285491e68e242d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_806951727e3a823bbf166773e0c889ca3ec3f0aacbdd10a39380db2108ddb0e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806951727e3a823bbf166773e0c889ca3ec3f0aacbdd10a39380db2108ddb0e0->enter($__internal_806951727e3a823bbf166773e0c889ca3ec3f0aacbdd10a39380db2108ddb0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e08f0b5c80e9ceafbbb6eda36d89fc3ac2e63f0e097a7b16e285491e68e242d0->leave($__internal_e08f0b5c80e9ceafbbb6eda36d89fc3ac2e63f0e097a7b16e285491e68e242d0_prof);

        
        $__internal_806951727e3a823bbf166773e0c889ca3ec3f0aacbdd10a39380db2108ddb0e0->leave($__internal_806951727e3a823bbf166773e0c889ca3ec3f0aacbdd10a39380db2108ddb0e0_prof);

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
