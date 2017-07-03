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
        $__internal_e8e41e154668c1c7dc8629d2b5476e7bd013234fd2bd7398a6fad2641b414884 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8e41e154668c1c7dc8629d2b5476e7bd013234fd2bd7398a6fad2641b414884->enter($__internal_e8e41e154668c1c7dc8629d2b5476e7bd013234fd2bd7398a6fad2641b414884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_6888c4a9de6d9fe9d168d0ab46712e9365a7bc112c3bc1f4d80f9b28499a8199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6888c4a9de6d9fe9d168d0ab46712e9365a7bc112c3bc1f4d80f9b28499a8199->enter($__internal_6888c4a9de6d9fe9d168d0ab46712e9365a7bc112c3bc1f4d80f9b28499a8199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e8e41e154668c1c7dc8629d2b5476e7bd013234fd2bd7398a6fad2641b414884->leave($__internal_e8e41e154668c1c7dc8629d2b5476e7bd013234fd2bd7398a6fad2641b414884_prof);

        
        $__internal_6888c4a9de6d9fe9d168d0ab46712e9365a7bc112c3bc1f4d80f9b28499a8199->leave($__internal_6888c4a9de6d9fe9d168d0ab46712e9365a7bc112c3bc1f4d80f9b28499a8199_prof);

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
