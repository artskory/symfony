<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_31c77a0e07c966155b7598ac3773021c06f10fee8d3f912a56f1b470956a1637 extends Twig_Template
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
        $__internal_5ca634942e604f90d529bc4092985217c34586c25ff012d7f822fb90b356c3e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ca634942e604f90d529bc4092985217c34586c25ff012d7f822fb90b356c3e8->enter($__internal_5ca634942e604f90d529bc4092985217c34586c25ff012d7f822fb90b356c3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_7ac391ce9faba0fe726e053e0e7c78c8767e94563af09eb69d7c6ccb0bc6a434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ac391ce9faba0fe726e053e0e7c78c8767e94563af09eb69d7c6ccb0bc6a434->enter($__internal_7ac391ce9faba0fe726e053e0e7c78c8767e94563af09eb69d7c6ccb0bc6a434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_5ca634942e604f90d529bc4092985217c34586c25ff012d7f822fb90b356c3e8->leave($__internal_5ca634942e604f90d529bc4092985217c34586c25ff012d7f822fb90b356c3e8_prof);

        
        $__internal_7ac391ce9faba0fe726e053e0e7c78c8767e94563af09eb69d7c6ccb0bc6a434->leave($__internal_7ac391ce9faba0fe726e053e0e7c78c8767e94563af09eb69d7c6ccb0bc6a434_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
