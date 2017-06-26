<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_77dad6b6f27f35264099ccfcbee0aff720a0d1695774604477e11da1f3f813e8 extends Twig_Template
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
        $__internal_2788d99023e0a5d82c2db1e2612c53ac6ceb6963cfd51fff1412031b1513f4f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2788d99023e0a5d82c2db1e2612c53ac6ceb6963cfd51fff1412031b1513f4f2->enter($__internal_2788d99023e0a5d82c2db1e2612c53ac6ceb6963cfd51fff1412031b1513f4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_d26782b05cbc20d4f29fd86ad1c4669b553c11987bd6811277e0e8707591bce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d26782b05cbc20d4f29fd86ad1c4669b553c11987bd6811277e0e8707591bce8->enter($__internal_d26782b05cbc20d4f29fd86ad1c4669b553c11987bd6811277e0e8707591bce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2788d99023e0a5d82c2db1e2612c53ac6ceb6963cfd51fff1412031b1513f4f2->leave($__internal_2788d99023e0a5d82c2db1e2612c53ac6ceb6963cfd51fff1412031b1513f4f2_prof);

        
        $__internal_d26782b05cbc20d4f29fd86ad1c4669b553c11987bd6811277e0e8707591bce8->leave($__internal_d26782b05cbc20d4f29fd86ad1c4669b553c11987bd6811277e0e8707591bce8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
