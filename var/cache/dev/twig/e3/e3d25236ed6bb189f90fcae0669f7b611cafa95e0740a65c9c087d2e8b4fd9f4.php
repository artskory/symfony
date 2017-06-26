<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_79174ff2b717b21a267e0fee5cdbd861d119e41cab7bc10d98d84114214ede0c extends Twig_Template
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
        $__internal_4cead32168fd47f36119b86a66cea284a0d539a6c6f2e53da5ffe97a2a503e08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cead32168fd47f36119b86a66cea284a0d539a6c6f2e53da5ffe97a2a503e08->enter($__internal_4cead32168fd47f36119b86a66cea284a0d539a6c6f2e53da5ffe97a2a503e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_f13216f52aead9cd4eddc20066b3cf65d58da6c6b4ef83646eaeeaacadf9dfb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f13216f52aead9cd4eddc20066b3cf65d58da6c6b4ef83646eaeeaacadf9dfb2->enter($__internal_f13216f52aead9cd4eddc20066b3cf65d58da6c6b4ef83646eaeeaacadf9dfb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_4cead32168fd47f36119b86a66cea284a0d539a6c6f2e53da5ffe97a2a503e08->leave($__internal_4cead32168fd47f36119b86a66cea284a0d539a6c6f2e53da5ffe97a2a503e08_prof);

        
        $__internal_f13216f52aead9cd4eddc20066b3cf65d58da6c6b4ef83646eaeeaacadf9dfb2->leave($__internal_f13216f52aead9cd4eddc20066b3cf65d58da6c6b4ef83646eaeeaacadf9dfb2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
