<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_8e5776373d0647e3abd99d2d2fcf74c19cbb980ddcac0b06119ca5beab5fbf5e extends Twig_Template
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
        $__internal_560fd08565befd407cc29b9a0c43871266832c369290805c9147aa122501b53d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_560fd08565befd407cc29b9a0c43871266832c369290805c9147aa122501b53d->enter($__internal_560fd08565befd407cc29b9a0c43871266832c369290805c9147aa122501b53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_03367b97f6fe335237a06371a5d16c5ab6af5068fe791b6552137260dcbd4a7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03367b97f6fe335237a06371a5d16c5ab6af5068fe791b6552137260dcbd4a7b->enter($__internal_03367b97f6fe335237a06371a5d16c5ab6af5068fe791b6552137260dcbd4a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_560fd08565befd407cc29b9a0c43871266832c369290805c9147aa122501b53d->leave($__internal_560fd08565befd407cc29b9a0c43871266832c369290805c9147aa122501b53d_prof);

        
        $__internal_03367b97f6fe335237a06371a5d16c5ab6af5068fe791b6552137260dcbd4a7b->leave($__internal_03367b97f6fe335237a06371a5d16c5ab6af5068fe791b6552137260dcbd4a7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
