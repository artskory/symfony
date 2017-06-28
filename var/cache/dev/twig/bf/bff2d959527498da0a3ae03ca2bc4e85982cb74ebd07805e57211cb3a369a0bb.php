<?php

/* :catalogue:poubelle.html.twig */
class __TwigTemplate_ba665460649cef7bcc3fcac5ebdf22845e578b6884129106fb4529bb0add0401 extends Twig_Template
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
        $__internal_fce93ab598300532453cdd3735fbdbf67854d1f5db7b2b928fd1c9996a5a6b02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fce93ab598300532453cdd3735fbdbf67854d1f5db7b2b928fd1c9996a5a6b02->enter($__internal_fce93ab598300532453cdd3735fbdbf67854d1f5db7b2b928fd1c9996a5a6b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:poubelle.html.twig"));

        $__internal_6c39c8afb449bd4db073849ec68c2b544428e5b5a5cff44f41d9734987ceadcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c39c8afb449bd4db073849ec68c2b544428e5b5a5cff44f41d9734987ceadcd->enter($__internal_6c39c8afb449bd4db073849ec68c2b544428e5b5a5cff44f41d9734987ceadcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:poubelle.html.twig"));

        // line 1
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_fce93ab598300532453cdd3735fbdbf67854d1f5db7b2b928fd1c9996a5a6b02->leave($__internal_fce93ab598300532453cdd3735fbdbf67854d1f5db7b2b928fd1c9996a5a6b02_prof);

        
        $__internal_6c39c8afb449bd4db073849ec68c2b544428e5b5a5cff44f41d9734987ceadcd->leave($__internal_6c39c8afb449bd4db073849ec68c2b544428e5b5a5cff44f41d9734987ceadcd_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d99c79a4d87f9f2baa1bbcaa70a8075b0c7c2266ae647d0d4aa636a98b311fec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d99c79a4d87f9f2baa1bbcaa70a8075b0c7c2266ae647d0d4aa636a98b311fec->enter($__internal_d99c79a4d87f9f2baa1bbcaa70a8075b0c7c2266ae647d0d4aa636a98b311fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_43cbf97062d10c7f245174394d0386be3b189bcf5a4acecbf6754f2624a5d6ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43cbf97062d10c7f245174394d0386be3b189bcf5a4acecbf6754f2624a5d6ee->enter($__internal_43cbf97062d10c7f245174394d0386be3b189bcf5a4acecbf6754f2624a5d6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_43cbf97062d10c7f245174394d0386be3b189bcf5a4acecbf6754f2624a5d6ee->leave($__internal_43cbf97062d10c7f245174394d0386be3b189bcf5a4acecbf6754f2624a5d6ee_prof);

        
        $__internal_d99c79a4d87f9f2baa1bbcaa70a8075b0c7c2266ae647d0d4aa636a98b311fec->leave($__internal_d99c79a4d87f9f2baa1bbcaa70a8075b0c7c2266ae647d0d4aa636a98b311fec_prof);

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
