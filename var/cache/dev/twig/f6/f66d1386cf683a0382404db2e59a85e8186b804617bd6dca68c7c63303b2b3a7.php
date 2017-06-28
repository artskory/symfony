<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_820da0683db80517e386dc8dbdbae8f4fb01e0cbe89dd2b3db9ceaf379f0f273 extends Twig_Template
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
        $__internal_a274f2294d43a539d5424068ae48fa79404ad3e5021fccfadba9bb5b0c4250b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a274f2294d43a539d5424068ae48fa79404ad3e5021fccfadba9bb5b0c4250b6->enter($__internal_a274f2294d43a539d5424068ae48fa79404ad3e5021fccfadba9bb5b0c4250b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_84b6975f688f0b917a9a7cf3f09c65c896220a66588aa6aff525baf783a06966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b6975f688f0b917a9a7cf3f09c65c896220a66588aa6aff525baf783a06966->enter($__internal_84b6975f688f0b917a9a7cf3f09c65c896220a66588aa6aff525baf783a06966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a274f2294d43a539d5424068ae48fa79404ad3e5021fccfadba9bb5b0c4250b6->leave($__internal_a274f2294d43a539d5424068ae48fa79404ad3e5021fccfadba9bb5b0c4250b6_prof);

        
        $__internal_84b6975f688f0b917a9a7cf3f09c65c896220a66588aa6aff525baf783a06966->leave($__internal_84b6975f688f0b917a9a7cf3f09c65c896220a66588aa6aff525baf783a06966_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
