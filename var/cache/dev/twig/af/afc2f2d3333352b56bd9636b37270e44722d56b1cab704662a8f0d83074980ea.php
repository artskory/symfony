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
        $__internal_f3ae1280125619efa7aaea9e6bf2185782667c5eb4a45aa4e8e80f3b91179990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3ae1280125619efa7aaea9e6bf2185782667c5eb4a45aa4e8e80f3b91179990->enter($__internal_f3ae1280125619efa7aaea9e6bf2185782667c5eb4a45aa4e8e80f3b91179990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_90fdadb7673d83bf7a6618e7c3a5d4ebf34ef65cdd5f5839db5cd17d16a12c9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90fdadb7673d83bf7a6618e7c3a5d4ebf34ef65cdd5f5839db5cd17d16a12c9c->enter($__internal_90fdadb7673d83bf7a6618e7c3a5d4ebf34ef65cdd5f5839db5cd17d16a12c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_f3ae1280125619efa7aaea9e6bf2185782667c5eb4a45aa4e8e80f3b91179990->leave($__internal_f3ae1280125619efa7aaea9e6bf2185782667c5eb4a45aa4e8e80f3b91179990_prof);

        
        $__internal_90fdadb7673d83bf7a6618e7c3a5d4ebf34ef65cdd5f5839db5cd17d16a12c9c->leave($__internal_90fdadb7673d83bf7a6618e7c3a5d4ebf34ef65cdd5f5839db5cd17d16a12c9c_prof);

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
