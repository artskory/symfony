<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_21c74033f35ee80b605745b09c521af3bc97d4689fc5ab7f102cf083e724497a extends Twig_Template
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
        $__internal_14a9088bd12aa349851e088e33850f69455688ada1a0a603f4e06b07f4befc33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14a9088bd12aa349851e088e33850f69455688ada1a0a603f4e06b07f4befc33->enter($__internal_14a9088bd12aa349851e088e33850f69455688ada1a0a603f4e06b07f4befc33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_0f432a2f69e03a7dd99c11ca589f5cee72b8bd640cbacd859e61078ce28c98de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f432a2f69e03a7dd99c11ca589f5cee72b8bd640cbacd859e61078ce28c98de->enter($__internal_0f432a2f69e03a7dd99c11ca589f5cee72b8bd640cbacd859e61078ce28c98de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_14a9088bd12aa349851e088e33850f69455688ada1a0a603f4e06b07f4befc33->leave($__internal_14a9088bd12aa349851e088e33850f69455688ada1a0a603f4e06b07f4befc33_prof);

        
        $__internal_0f432a2f69e03a7dd99c11ca589f5cee72b8bd640cbacd859e61078ce28c98de->leave($__internal_0f432a2f69e03a7dd99c11ca589f5cee72b8bd640cbacd859e61078ce28c98de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
