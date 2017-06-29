<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_2400b6f2ce54399ddeb3ca99461182a697c69f59f9e2728f3229c089902f9248 extends Twig_Template
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
        $__internal_d7871455b9483d9938181342345d59fd850304be10434d131be5ca46e822e094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7871455b9483d9938181342345d59fd850304be10434d131be5ca46e822e094->enter($__internal_d7871455b9483d9938181342345d59fd850304be10434d131be5ca46e822e094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_e6282d7dc30b7122d46cdcfa8a55776cb0a9721b504fec70d9e527be49eb4a7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6282d7dc30b7122d46cdcfa8a55776cb0a9721b504fec70d9e527be49eb4a7b->enter($__internal_e6282d7dc30b7122d46cdcfa8a55776cb0a9721b504fec70d9e527be49eb4a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_d7871455b9483d9938181342345d59fd850304be10434d131be5ca46e822e094->leave($__internal_d7871455b9483d9938181342345d59fd850304be10434d131be5ca46e822e094_prof);

        
        $__internal_e6282d7dc30b7122d46cdcfa8a55776cb0a9721b504fec70d9e527be49eb4a7b->leave($__internal_e6282d7dc30b7122d46cdcfa8a55776cb0a9721b504fec70d9e527be49eb4a7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
