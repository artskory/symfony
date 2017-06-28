<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_54ac5b8589423f0ed07d030d9e043130fb7a898a9cdcb3b38aa7c238be3d5835 extends Twig_Template
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
        $__internal_b040c62c9b804af5a81ebb6307d7d59db00c1cde2daa599fe986b3c8701d9a68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b040c62c9b804af5a81ebb6307d7d59db00c1cde2daa599fe986b3c8701d9a68->enter($__internal_b040c62c9b804af5a81ebb6307d7d59db00c1cde2daa599fe986b3c8701d9a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_94eb6ad54c137a66a463b590ee56a0d06811ef0c0c99a0e6fa3df9b5f9c3d763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94eb6ad54c137a66a463b590ee56a0d06811ef0c0c99a0e6fa3df9b5f9c3d763->enter($__internal_94eb6ad54c137a66a463b590ee56a0d06811ef0c0c99a0e6fa3df9b5f9c3d763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_b040c62c9b804af5a81ebb6307d7d59db00c1cde2daa599fe986b3c8701d9a68->leave($__internal_b040c62c9b804af5a81ebb6307d7d59db00c1cde2daa599fe986b3c8701d9a68_prof);

        
        $__internal_94eb6ad54c137a66a463b590ee56a0d06811ef0c0c99a0e6fa3df9b5f9c3d763->leave($__internal_94eb6ad54c137a66a463b590ee56a0d06811ef0c0c99a0e6fa3df9b5f9c3d763_prof);

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
