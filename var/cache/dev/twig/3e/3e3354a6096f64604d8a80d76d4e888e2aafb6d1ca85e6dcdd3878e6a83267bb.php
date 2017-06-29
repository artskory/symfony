<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_fb577754313898d11426e2470b19b24c2e0e4251705bd49809689a1063818ed3 extends Twig_Template
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
        $__internal_dfba696b118d2a2e486ced5d9adb05b3539ffb3be42171a59e31cb820482577a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfba696b118d2a2e486ced5d9adb05b3539ffb3be42171a59e31cb820482577a->enter($__internal_dfba696b118d2a2e486ced5d9adb05b3539ffb3be42171a59e31cb820482577a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_0833e0e28ea5e77c847e1d7cf99024fcc4fe47dc0ae4e6dc7ecb485325e6741f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0833e0e28ea5e77c847e1d7cf99024fcc4fe47dc0ae4e6dc7ecb485325e6741f->enter($__internal_0833e0e28ea5e77c847e1d7cf99024fcc4fe47dc0ae4e6dc7ecb485325e6741f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_dfba696b118d2a2e486ced5d9adb05b3539ffb3be42171a59e31cb820482577a->leave($__internal_dfba696b118d2a2e486ced5d9adb05b3539ffb3be42171a59e31cb820482577a_prof);

        
        $__internal_0833e0e28ea5e77c847e1d7cf99024fcc4fe47dc0ae4e6dc7ecb485325e6741f->leave($__internal_0833e0e28ea5e77c847e1d7cf99024fcc4fe47dc0ae4e6dc7ecb485325e6741f_prof);

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
