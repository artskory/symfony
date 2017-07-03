<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_5e3ec34c24f640f6afc2845d9bf51d48a93c15687bcd8238da49cc78ffa7068f extends Twig_Template
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
        $__internal_31e5ee159a18a3662d62a4a9283b50986a3bc75d64c459c82aba875c0ee73cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31e5ee159a18a3662d62a4a9283b50986a3bc75d64c459c82aba875c0ee73cb6->enter($__internal_31e5ee159a18a3662d62a4a9283b50986a3bc75d64c459c82aba875c0ee73cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_b4422710ded1bf79bfaee50795ff7fb5e330d73edb33c4f86662fb166c0bf950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4422710ded1bf79bfaee50795ff7fb5e330d73edb33c4f86662fb166c0bf950->enter($__internal_b4422710ded1bf79bfaee50795ff7fb5e330d73edb33c4f86662fb166c0bf950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_31e5ee159a18a3662d62a4a9283b50986a3bc75d64c459c82aba875c0ee73cb6->leave($__internal_31e5ee159a18a3662d62a4a9283b50986a3bc75d64c459c82aba875c0ee73cb6_prof);

        
        $__internal_b4422710ded1bf79bfaee50795ff7fb5e330d73edb33c4f86662fb166c0bf950->leave($__internal_b4422710ded1bf79bfaee50795ff7fb5e330d73edb33c4f86662fb166c0bf950_prof);

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
