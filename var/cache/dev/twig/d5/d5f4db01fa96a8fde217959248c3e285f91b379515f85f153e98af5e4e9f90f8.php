<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6af7e16a3109e447a6d7a783d86053e4ef9ed076e83864cc3eaa353a7ac7cf25 extends Twig_Template
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
        $__internal_2d7343025ee3ab23655a9618e302a862c72a1dad363639745f0db9d7bb7af4d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d7343025ee3ab23655a9618e302a862c72a1dad363639745f0db9d7bb7af4d8->enter($__internal_2d7343025ee3ab23655a9618e302a862c72a1dad363639745f0db9d7bb7af4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_236564de190955a25f2746b75191956a8e4bf42e4cc74b61d60d39d37dfb1de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_236564de190955a25f2746b75191956a8e4bf42e4cc74b61d60d39d37dfb1de5->enter($__internal_236564de190955a25f2746b75191956a8e4bf42e4cc74b61d60d39d37dfb1de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2d7343025ee3ab23655a9618e302a862c72a1dad363639745f0db9d7bb7af4d8->leave($__internal_2d7343025ee3ab23655a9618e302a862c72a1dad363639745f0db9d7bb7af4d8_prof);

        
        $__internal_236564de190955a25f2746b75191956a8e4bf42e4cc74b61d60d39d37dfb1de5->leave($__internal_236564de190955a25f2746b75191956a8e4bf42e4cc74b61d60d39d37dfb1de5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
