<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_18b4ef3afc218ec0659e440ea6fb20ca50a53854dd43872264b304608dfbece6 extends Twig_Template
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
        $__internal_5be7c4497780878c391325bc3d29e9b15e31042796c760a23aa6fa011c74b2c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5be7c4497780878c391325bc3d29e9b15e31042796c760a23aa6fa011c74b2c1->enter($__internal_5be7c4497780878c391325bc3d29e9b15e31042796c760a23aa6fa011c74b2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_8de9d9bd59b1b2b473f01e0737a4cae8e55e68021191e7ac7263fec797416842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de9d9bd59b1b2b473f01e0737a4cae8e55e68021191e7ac7263fec797416842->enter($__internal_8de9d9bd59b1b2b473f01e0737a4cae8e55e68021191e7ac7263fec797416842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_5be7c4497780878c391325bc3d29e9b15e31042796c760a23aa6fa011c74b2c1->leave($__internal_5be7c4497780878c391325bc3d29e9b15e31042796c760a23aa6fa011c74b2c1_prof);

        
        $__internal_8de9d9bd59b1b2b473f01e0737a4cae8e55e68021191e7ac7263fec797416842->leave($__internal_8de9d9bd59b1b2b473f01e0737a4cae8e55e68021191e7ac7263fec797416842_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
