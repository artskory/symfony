<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_ec223bc9096afe1c9534e47a5427c5900bf9858154df6a39212f334a327ef8e2 extends Twig_Template
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
        $__internal_86cd060c51523df195a91765e36407e6da5617d142f8bc156b65e52ee139a34f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86cd060c51523df195a91765e36407e6da5617d142f8bc156b65e52ee139a34f->enter($__internal_86cd060c51523df195a91765e36407e6da5617d142f8bc156b65e52ee139a34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_f323c97b3ededd7501a871bef4e1666924012357edef3233317da52741fbcd09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f323c97b3ededd7501a871bef4e1666924012357edef3233317da52741fbcd09->enter($__internal_f323c97b3ededd7501a871bef4e1666924012357edef3233317da52741fbcd09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_86cd060c51523df195a91765e36407e6da5617d142f8bc156b65e52ee139a34f->leave($__internal_86cd060c51523df195a91765e36407e6da5617d142f8bc156b65e52ee139a34f_prof);

        
        $__internal_f323c97b3ededd7501a871bef4e1666924012357edef3233317da52741fbcd09->leave($__internal_f323c97b3ededd7501a871bef4e1666924012357edef3233317da52741fbcd09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
