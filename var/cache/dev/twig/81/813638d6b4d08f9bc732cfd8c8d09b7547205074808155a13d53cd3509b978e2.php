<?php

/* catalogue/poubelle.html.twig */
class __TwigTemplate_47a23d41d4dc90ecdbf796f89593d9440fb20e4edf55704b97e54d3e9f275c91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56c53d748368d212d5d0e414577a00b61e219835134d080e38fb2381642a373f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56c53d748368d212d5d0e414577a00b61e219835134d080e38fb2381642a373f->enter($__internal_56c53d748368d212d5d0e414577a00b61e219835134d080e38fb2381642a373f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/poubelle.html.twig"));

        $__internal_1eaea4adb2b109d9b489fd1135cf211cf7fae9bf6a1cd372f67c2dd8c6da0361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eaea4adb2b109d9b489fd1135cf211cf7fae9bf6a1cd372f67c2dd8c6da0361->enter($__internal_1eaea4adb2b109d9b489fd1135cf211cf7fae9bf6a1cd372f67c2dd8c6da0361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/poubelle.html.twig"));

        // line 1
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_56c53d748368d212d5d0e414577a00b61e219835134d080e38fb2381642a373f->leave($__internal_56c53d748368d212d5d0e414577a00b61e219835134d080e38fb2381642a373f_prof);

        
        $__internal_1eaea4adb2b109d9b489fd1135cf211cf7fae9bf6a1cd372f67c2dd8c6da0361->leave($__internal_1eaea4adb2b109d9b489fd1135cf211cf7fae9bf6a1cd372f67c2dd8c6da0361_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_524599f7abcd2a370518552a9f4630a2b31488725b810f323d0a7fe0df54bc9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_524599f7abcd2a370518552a9f4630a2b31488725b810f323d0a7fe0df54bc9f->enter($__internal_524599f7abcd2a370518552a9f4630a2b31488725b810f323d0a7fe0df54bc9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c1ca568646d5cc4e12a7e39da88c5c0d4304cf4258613122631a87068d5a5310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1ca568646d5cc4e12a7e39da88c5c0d4304cf4258613122631a87068d5a5310->enter($__internal_c1ca568646d5cc4e12a7e39da88c5c0d4304cf4258613122631a87068d5a5310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 2
        echo "    <script>
        \$('form[name=appbundle_rating]').submit(
                function (e) {
                    \$('#ajax_error').remove();
                    e.preventDefault();
                    \$('#loading').show();
                    \$('#appbundle_rating_Submit')
                            .addClass(\"disabled\")
                            .prop('disabled', true);
                    \$.ajax({
                        url: '";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_rating_blog");
        echo "',
                        method: 'POST',
                        dataType: 'json',
                        data: {
                            id:";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()), "html", null, true);
        echo " ,
                            rating: \$('form[name=appbundle_rating] select').val()
                        },
                        error: function () {
                            alert('ERRROOOOOORRRRRRR');
                        },
                        success: function (data) {
                            \$('#loading').hide();
                            \$('#appbundle_rating_Submit')
                                    .removeClass(\"disabled\")
                                    .prop('disabled', false);
                            if (data.success) {
                                \$('.footer-ratings:first-child').before('<mark>' + data.rating.rating + ' </mark>');
                            } else {
                                \$('form[name=appbundle_comments] button').after('<div id=\"ajax_error\" class=\"alert alert-danger\" role=\"alert\">Problem 😭</div>')
                            }
                        }
                    });
                }
        );
    </script>
";
        
        $__internal_c1ca568646d5cc4e12a7e39da88c5c0d4304cf4258613122631a87068d5a5310->leave($__internal_c1ca568646d5cc4e12a7e39da88c5c0d4304cf4258613122631a87068d5a5310_prof);

        
        $__internal_524599f7abcd2a370518552a9f4630a2b31488725b810f323d0a7fe0df54bc9f->leave($__internal_524599f7abcd2a370518552a9f4630a2b31488725b810f323d0a7fe0df54bc9f_prof);

    }

    public function getTemplateName()
    {
        return "catalogue/poubelle.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  56 => 12,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block javascripts %}
    <script>
        \$('form[name=appbundle_rating]').submit(
                function (e) {
                    \$('#ajax_error').remove();
                    e.preventDefault();
                    \$('#loading').show();
                    \$('#appbundle_rating_Submit')
                            .addClass(\"disabled\")
                            .prop('disabled', true);
                    \$.ajax({
                        url: '{{ path('ajax_rating_blog') }}',
                        method: 'POST',
                        dataType: 'json',
                        data: {
                            id:{{ product.id }} ,
                            rating: \$('form[name=appbundle_rating] select').val()
                        },
                        error: function () {
                            alert('ERRROOOOOORRRRRRR');
                        },
                        success: function (data) {
                            \$('#loading').hide();
                            \$('#appbundle_rating_Submit')
                                    .removeClass(\"disabled\")
                                    .prop('disabled', false);
                            if (data.success) {
                                \$('.footer-ratings:first-child').before('<mark>' + data.rating.rating + ' </mark>');
                            } else {
                                \$('form[name=appbundle_comments] button').after('<div id=\"ajax_error\" class=\"alert alert-danger\" role=\"alert\">Problem 😭</div>')
                            }
                        }
                    });
                }
        );
    </script>
{% endblock %}", "catalogue/poubelle.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\catalogue\\poubelle.html.twig");
    }
}
