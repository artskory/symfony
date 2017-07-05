<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_6db28463ad4cac296c3e86c4e0a539ce489067e486141cc1f18b016b0aa2ad44 extends Twig_Template
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
        $__internal_6cb8bdca6b04184804df76da21d972f979ce3593008a46f6d610e4dbe416c390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cb8bdca6b04184804df76da21d972f979ce3593008a46f6d610e4dbe416c390->enter($__internal_6cb8bdca6b04184804df76da21d972f979ce3593008a46f6d610e4dbe416c390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_8e648009c404551311b726612054e4279217e0c153758ea8d8e332072ff5520e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e648009c404551311b726612054e4279217e0c153758ea8d8e332072ff5520e->enter($__internal_8e648009c404551311b726612054e4279217e0c153758ea8d8e332072ff5520e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_6cb8bdca6b04184804df76da21d972f979ce3593008a46f6d610e4dbe416c390->leave($__internal_6cb8bdca6b04184804df76da21d972f979ce3593008a46f6d610e4dbe416c390_prof);

        
        $__internal_8e648009c404551311b726612054e4279217e0c153758ea8d8e332072ff5520e->leave($__internal_8e648009c404551311b726612054e4279217e0c153758ea8d8e332072ff5520e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
