<?php

/* :catalogue:poubelle.html.twig */
class __TwigTemplate_d42a7240c219bb39d0119555f6d7632c80151486829f0c031bd3614e600149af extends Twig_Template
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
        $__internal_7ac30c1a30cbff178876f1ebc2e695d6a035ef7f783336099c57ba11a8ff54fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ac30c1a30cbff178876f1ebc2e695d6a035ef7f783336099c57ba11a8ff54fc->enter($__internal_7ac30c1a30cbff178876f1ebc2e695d6a035ef7f783336099c57ba11a8ff54fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:poubelle.html.twig"));

        $__internal_4bf1c713f26066d9059da08c413a182199bd486efcb2356503a4be643fc13d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bf1c713f26066d9059da08c413a182199bd486efcb2356503a4be643fc13d06->enter($__internal_4bf1c713f26066d9059da08c413a182199bd486efcb2356503a4be643fc13d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:poubelle.html.twig"));

        // line 1
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_7ac30c1a30cbff178876f1ebc2e695d6a035ef7f783336099c57ba11a8ff54fc->leave($__internal_7ac30c1a30cbff178876f1ebc2e695d6a035ef7f783336099c57ba11a8ff54fc_prof);

        
        $__internal_4bf1c713f26066d9059da08c413a182199bd486efcb2356503a4be643fc13d06->leave($__internal_4bf1c713f26066d9059da08c413a182199bd486efcb2356503a4be643fc13d06_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_381ba9a6a650164117b041faec72f47498f70d036d7d433da7234c4c6f0d0014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_381ba9a6a650164117b041faec72f47498f70d036d7d433da7234c4c6f0d0014->enter($__internal_381ba9a6a650164117b041faec72f47498f70d036d7d433da7234c4c6f0d0014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b87d95f3dfc7a1a099cf291c7972face2fa97aff6fe37ebf68815751ee5b46a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b87d95f3dfc7a1a099cf291c7972face2fa97aff6fe37ebf68815751ee5b46a3->enter($__internal_b87d95f3dfc7a1a099cf291c7972face2fa97aff6fe37ebf68815751ee5b46a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b87d95f3dfc7a1a099cf291c7972face2fa97aff6fe37ebf68815751ee5b46a3->leave($__internal_b87d95f3dfc7a1a099cf291c7972face2fa97aff6fe37ebf68815751ee5b46a3_prof);

        
        $__internal_381ba9a6a650164117b041faec72f47498f70d036d7d433da7234c4c6f0d0014->leave($__internal_381ba9a6a650164117b041faec72f47498f70d036d7d433da7234c4c6f0d0014_prof);

    }

    public function getTemplateName()
    {
        return ":catalogue:poubelle.html.twig";
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
{% endblock %}", ":catalogue:poubelle.html.twig", "C:\\xampp\\htdocs\\symfony\\app/Resources\\views/catalogue/poubelle.html.twig");
    }
}
