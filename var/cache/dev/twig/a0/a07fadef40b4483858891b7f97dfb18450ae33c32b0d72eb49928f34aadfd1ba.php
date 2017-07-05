<?php

/* blog/layout.html.twig */
class __TwigTemplate_a5cf98268dc94e7c156cbcf0b135cfba6edf408de7aea71411fac2fd482296c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'body_layout' => array($this, 'block_body_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b95c59a2720b29583207612af489316308f31b0e7d0e5db85007a13cb10d472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b95c59a2720b29583207612af489316308f31b0e7d0e5db85007a13cb10d472->enter($__internal_4b95c59a2720b29583207612af489316308f31b0e7d0e5db85007a13cb10d472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/layout.html.twig"));

        $__internal_aa87e6e03a614f3fc31c859fef6748cf30488c1d293660b4e42a61f209f19fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa87e6e03a614f3fc31c859fef6748cf30488c1d293660b4e42a61f209f19fd3->enter($__internal_aa87e6e03a614f3fc31c859fef6748cf30488c1d293660b4e42a61f209f19fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b95c59a2720b29583207612af489316308f31b0e7d0e5db85007a13cb10d472->leave($__internal_4b95c59a2720b29583207612af489316308f31b0e7d0e5db85007a13cb10d472_prof);

        
        $__internal_aa87e6e03a614f3fc31c859fef6748cf30488c1d293660b4e42a61f209f19fd3->leave($__internal_aa87e6e03a614f3fc31c859fef6748cf30488c1d293660b4e42a61f209f19fd3_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_96e5a447968715db411eabab56ce471c32c39f85f874b04d9aaab63da5433dc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96e5a447968715db411eabab56ce471c32c39f85f874b04d9aaab63da5433dc8->enter($__internal_96e5a447968715db411eabab56ce471c32c39f85f874b04d9aaab63da5433dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_34fb812fff2b918a4f5473dc50e96c45c1da0ee70205d5d3d6837b9bf092df56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34fb812fff2b918a4f5473dc50e96c45c1da0ee70205d5d3d6837b9bf092df56->enter($__internal_34fb812fff2b918a4f5473dc50e96c45c1da0ee70205d5d3d6837b9bf092df56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_34fb812fff2b918a4f5473dc50e96c45c1da0ee70205d5d3d6837b9bf092df56->leave($__internal_34fb812fff2b918a4f5473dc50e96c45c1da0ee70205d5d3d6837b9bf092df56_prof);

        
        $__internal_96e5a447968715db411eabab56ce471c32c39f85f874b04d9aaab63da5433dc8->leave($__internal_96e5a447968715db411eabab56ce471c32c39f85f874b04d9aaab63da5433dc8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d362c9e66d6500cf80810acb85f207fff5c8a0673c94f973296fb7967abf4ac4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d362c9e66d6500cf80810acb85f207fff5c8a0673c94f973296fb7967abf4ac4->enter($__internal_d362c9e66d6500cf80810acb85f207fff5c8a0673c94f973296fb7967abf4ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b51328487831d3b665d9b02390b41eee349ba6a07eaa5370e928cf96e9738a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b51328487831d3b665d9b02390b41eee349ba6a07eaa5370e928cf96e9738a6->enter($__internal_9b51328487831d3b665d9b02390b41eee349ba6a07eaa5370e928cf96e9738a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Blog</h1>
    ";
        // line 5
        $this->displayBlock('body_layout', $context, $blocks);
        
        $__internal_9b51328487831d3b665d9b02390b41eee349ba6a07eaa5370e928cf96e9738a6->leave($__internal_9b51328487831d3b665d9b02390b41eee349ba6a07eaa5370e928cf96e9738a6_prof);

        
        $__internal_d362c9e66d6500cf80810acb85f207fff5c8a0673c94f973296fb7967abf4ac4->leave($__internal_d362c9e66d6500cf80810acb85f207fff5c8a0673c94f973296fb7967abf4ac4_prof);

    }

    public function block_body_layout($context, array $blocks = array())
    {
        $__internal_3b8bed825d33009ecc62f84d1dedb3a2b3cb06e9d3fa9bb15558d23f2957c6e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b8bed825d33009ecc62f84d1dedb3a2b3cb06e9d3fa9bb15558d23f2957c6e7->enter($__internal_3b8bed825d33009ecc62f84d1dedb3a2b3cb06e9d3fa9bb15558d23f2957c6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        $__internal_84af88eee98a57ce254a3ac9cac099f29709e9fa24de79e43b1668dd7cdf9960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84af88eee98a57ce254a3ac9cac099f29709e9fa24de79e43b1668dd7cdf9960->enter($__internal_84af88eee98a57ce254a3ac9cac099f29709e9fa24de79e43b1668dd7cdf9960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_layout"));

        
        $__internal_84af88eee98a57ce254a3ac9cac099f29709e9fa24de79e43b1668dd7cdf9960->leave($__internal_84af88eee98a57ce254a3ac9cac099f29709e9fa24de79e43b1668dd7cdf9960_prof);

        
        $__internal_3b8bed825d33009ecc62f84d1dedb3a2b3cb06e9d3fa9bb15558d23f2957c6e7->leave($__internal_3b8bed825d33009ecc62f84d1dedb3a2b3cb06e9d3fa9bb15558d23f2957c6e7_prof);

    }

    public function getTemplateName()
    {
        return "blog/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 5,  69 => 4,  60 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block title %}Blog{% endblock %}
{% block body %}
    <h1>Blog</h1>
    {% block body_layout %}{% endblock %}
{% endblock %}", "blog/layout.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\blog\\layout.html.twig");
    }
}
