<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_6c766c08d120f9bd31be46afa3dd92fb3470d9ce632e3e58626b568a952aab81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aeb94cb9f75fc82e313811d54faf837f4ce26a6f6492b349cc245773b1de1729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeb94cb9f75fc82e313811d54faf837f4ce26a6f6492b349cc245773b1de1729->enter($__internal_aeb94cb9f75fc82e313811d54faf837f4ce26a6f6492b349cc245773b1de1729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_49d92d8e62cfcdf508f0d9e7d69de23771d2970dae848ff036d999d7e0e75215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d92d8e62cfcdf508f0d9e7d69de23771d2970dae848ff036d999d7e0e75215->enter($__internal_49d92d8e62cfcdf508f0d9e7d69de23771d2970dae848ff036d999d7e0e75215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aeb94cb9f75fc82e313811d54faf837f4ce26a6f6492b349cc245773b1de1729->leave($__internal_aeb94cb9f75fc82e313811d54faf837f4ce26a6f6492b349cc245773b1de1729_prof);

        
        $__internal_49d92d8e62cfcdf508f0d9e7d69de23771d2970dae848ff036d999d7e0e75215->leave($__internal_49d92d8e62cfcdf508f0d9e7d69de23771d2970dae848ff036d999d7e0e75215_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8d3f949802d19fa189aec3db09dad63be37dd55522616b746610c36d01e18156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d3f949802d19fa189aec3db09dad63be37dd55522616b746610c36d01e18156->enter($__internal_8d3f949802d19fa189aec3db09dad63be37dd55522616b746610c36d01e18156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a0d32b300f413831f36c4cd84f2b71ef9af6c07785b60aea87cf5df1b8ddbaf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d32b300f413831f36c4cd84f2b71ef9af6c07785b60aea87cf5df1b8ddbaf5->enter($__internal_a0d32b300f413831f36c4cd84f2b71ef9af6c07785b60aea87cf5df1b8ddbaf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_a0d32b300f413831f36c4cd84f2b71ef9af6c07785b60aea87cf5df1b8ddbaf5->leave($__internal_a0d32b300f413831f36c4cd84f2b71ef9af6c07785b60aea87cf5df1b8ddbaf5_prof);

        
        $__internal_8d3f949802d19fa189aec3db09dad63be37dd55522616b746610c36d01e18156->leave($__internal_8d3f949802d19fa189aec3db09dad63be37dd55522616b746610c36d01e18156_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
