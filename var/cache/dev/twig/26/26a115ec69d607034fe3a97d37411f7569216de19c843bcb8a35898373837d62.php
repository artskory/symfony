<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_d6a5847443a3ffc0103429cd49847e02ff164071f1ee57f28589434e56d67abe extends Twig_Template
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
        $__internal_4e5395880ac493d904d95013dc4bff8eac148e1652cc4372a2fbf48e8991f277 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e5395880ac493d904d95013dc4bff8eac148e1652cc4372a2fbf48e8991f277->enter($__internal_4e5395880ac493d904d95013dc4bff8eac148e1652cc4372a2fbf48e8991f277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_d0d4a0b87ed8cd07c776846a09d69b419d90c7e270038808414f806b01b3deb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d4a0b87ed8cd07c776846a09d69b419d90c7e270038808414f806b01b3deb1->enter($__internal_d0d4a0b87ed8cd07c776846a09d69b419d90c7e270038808414f806b01b3deb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_4e5395880ac493d904d95013dc4bff8eac148e1652cc4372a2fbf48e8991f277->leave($__internal_4e5395880ac493d904d95013dc4bff8eac148e1652cc4372a2fbf48e8991f277_prof);

        
        $__internal_d0d4a0b87ed8cd07c776846a09d69b419d90c7e270038808414f806b01b3deb1->leave($__internal_d0d4a0b87ed8cd07c776846a09d69b419d90c7e270038808414f806b01b3deb1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
