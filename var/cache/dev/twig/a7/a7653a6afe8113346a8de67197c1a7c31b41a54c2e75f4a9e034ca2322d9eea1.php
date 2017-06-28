<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_c5e12b3d76876a91d99987b03b8eb0ad62422fb63295a8372996f6247c3cf913 extends Twig_Template
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
        $__internal_2232e7ad8053eca0f02a745f91675752cee0c249a1227705bf23403a77b1f7ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2232e7ad8053eca0f02a745f91675752cee0c249a1227705bf23403a77b1f7ab->enter($__internal_2232e7ad8053eca0f02a745f91675752cee0c249a1227705bf23403a77b1f7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_54fa9af8c26b8937a00aab634723f5451a988c8e2964a96af9c8d017711172c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54fa9af8c26b8937a00aab634723f5451a988c8e2964a96af9c8d017711172c3->enter($__internal_54fa9af8c26b8937a00aab634723f5451a988c8e2964a96af9c8d017711172c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_2232e7ad8053eca0f02a745f91675752cee0c249a1227705bf23403a77b1f7ab->leave($__internal_2232e7ad8053eca0f02a745f91675752cee0c249a1227705bf23403a77b1f7ab_prof);

        
        $__internal_54fa9af8c26b8937a00aab634723f5451a988c8e2964a96af9c8d017711172c3->leave($__internal_54fa9af8c26b8937a00aab634723f5451a988c8e2964a96af9c8d017711172c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
