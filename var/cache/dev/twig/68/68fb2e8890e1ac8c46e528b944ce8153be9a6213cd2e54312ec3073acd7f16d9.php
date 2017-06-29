<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_6658bc37623bb17a4bf72fa6a2fc0011e40f3d473e0e227aa0be3421a7f79391 extends Twig_Template
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
        $__internal_e47f94212a14dd92b4d87ee537f368e3895a4a069f60dc5ceb1dfadc5c3d4f5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e47f94212a14dd92b4d87ee537f368e3895a4a069f60dc5ceb1dfadc5c3d4f5a->enter($__internal_e47f94212a14dd92b4d87ee537f368e3895a4a069f60dc5ceb1dfadc5c3d4f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_1bbcfb95799909a1bbf8a0c26a6459999931b77757e81b7b8a80a1f361d55b20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bbcfb95799909a1bbf8a0c26a6459999931b77757e81b7b8a80a1f361d55b20->enter($__internal_1bbcfb95799909a1bbf8a0c26a6459999931b77757e81b7b8a80a1f361d55b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e47f94212a14dd92b4d87ee537f368e3895a4a069f60dc5ceb1dfadc5c3d4f5a->leave($__internal_e47f94212a14dd92b4d87ee537f368e3895a4a069f60dc5ceb1dfadc5c3d4f5a_prof);

        
        $__internal_1bbcfb95799909a1bbf8a0c26a6459999931b77757e81b7b8a80a1f361d55b20->leave($__internal_1bbcfb95799909a1bbf8a0c26a6459999931b77757e81b7b8a80a1f361d55b20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
