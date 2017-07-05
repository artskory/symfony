<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_2941e89ecc12fb5cbf3ad2d08d05c57a3cc593f197da6fd140039879169ea686 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de8735f1c6240847349e3e1011dcce6d6ec94400fb8997482174ac30d16dbd0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de8735f1c6240847349e3e1011dcce6d6ec94400fb8997482174ac30d16dbd0d->enter($__internal_de8735f1c6240847349e3e1011dcce6d6ec94400fb8997482174ac30d16dbd0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_0931e451612cf8219aa78ef2a2ce5c7af56bef6e50c7a391c56b10b24d991f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0931e451612cf8219aa78ef2a2ce5c7af56bef6e50c7a391c56b10b24d991f37->enter($__internal_0931e451612cf8219aa78ef2a2ce5c7af56bef6e50c7a391c56b10b24d991f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de8735f1c6240847349e3e1011dcce6d6ec94400fb8997482174ac30d16dbd0d->leave($__internal_de8735f1c6240847349e3e1011dcce6d6ec94400fb8997482174ac30d16dbd0d_prof);

        
        $__internal_0931e451612cf8219aa78ef2a2ce5c7af56bef6e50c7a391c56b10b24d991f37->leave($__internal_0931e451612cf8219aa78ef2a2ce5c7af56bef6e50c7a391c56b10b24d991f37_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_758c5bfd6bc3561db813b9db0c63f1e30e5562ee4b00283568858fa2de203a55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_758c5bfd6bc3561db813b9db0c63f1e30e5562ee4b00283568858fa2de203a55->enter($__internal_758c5bfd6bc3561db813b9db0c63f1e30e5562ee4b00283568858fa2de203a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4aa732eedccc2dbe2461301d7831652d2fd4758a6709758ef310c5b014cf768e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aa732eedccc2dbe2461301d7831652d2fd4758a6709758ef310c5b014cf768e->enter($__internal_4aa732eedccc2dbe2461301d7831652d2fd4758a6709758ef310c5b014cf768e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_4aa732eedccc2dbe2461301d7831652d2fd4758a6709758ef310c5b014cf768e->leave($__internal_4aa732eedccc2dbe2461301d7831652d2fd4758a6709758ef310c5b014cf768e_prof);

        
        $__internal_758c5bfd6bc3561db813b9db0c63f1e30e5562ee4b00283568858fa2de203a55->leave($__internal_758c5bfd6bc3561db813b9db0c63f1e30e5562ee4b00283568858fa2de203a55_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\FOSUserBundle\\views\\Group\\show.html.twig");
    }
}
