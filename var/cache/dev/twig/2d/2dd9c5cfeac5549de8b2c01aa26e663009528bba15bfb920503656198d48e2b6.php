<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_7d8ed9ab729cdf898cb3f2246cbe34992c20dae3bb3f74854d5869e4feeedf7b extends Twig_Template
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
        $__internal_217aca94e239e000b116801d336fa30e893cb9f079032b64fa07d760b044b2e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_217aca94e239e000b116801d336fa30e893cb9f079032b64fa07d760b044b2e5->enter($__internal_217aca94e239e000b116801d336fa30e893cb9f079032b64fa07d760b044b2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_a5268b6b54f7376f4430fbc9add8f5e27c29dfdfdbf9b49e992fbe3cc329304d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5268b6b54f7376f4430fbc9add8f5e27c29dfdfdbf9b49e992fbe3cc329304d->enter($__internal_a5268b6b54f7376f4430fbc9add8f5e27c29dfdfdbf9b49e992fbe3cc329304d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_217aca94e239e000b116801d336fa30e893cb9f079032b64fa07d760b044b2e5->leave($__internal_217aca94e239e000b116801d336fa30e893cb9f079032b64fa07d760b044b2e5_prof);

        
        $__internal_a5268b6b54f7376f4430fbc9add8f5e27c29dfdfdbf9b49e992fbe3cc329304d->leave($__internal_a5268b6b54f7376f4430fbc9add8f5e27c29dfdfdbf9b49e992fbe3cc329304d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
