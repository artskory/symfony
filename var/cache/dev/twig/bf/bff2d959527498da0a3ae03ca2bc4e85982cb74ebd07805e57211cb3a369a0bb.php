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
        $__internal_f2e77abdad0d474321ae6cb890fe989805f962ecaed33728b09dff7c634668ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2e77abdad0d474321ae6cb890fe989805f962ecaed33728b09dff7c634668ca->enter($__internal_f2e77abdad0d474321ae6cb890fe989805f962ecaed33728b09dff7c634668ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:poubelle.html.twig"));

        $__internal_bb3cd0ff913a52da93961c0cb9373e0455db79bafb2446cf3d4bf8ad8719cb36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb3cd0ff913a52da93961c0cb9373e0455db79bafb2446cf3d4bf8ad8719cb36->enter($__internal_bb3cd0ff913a52da93961c0cb9373e0455db79bafb2446cf3d4bf8ad8719cb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:poubelle.html.twig"));

        // line 1
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_f2e77abdad0d474321ae6cb890fe989805f962ecaed33728b09dff7c634668ca->leave($__internal_f2e77abdad0d474321ae6cb890fe989805f962ecaed33728b09dff7c634668ca_prof);

        
        $__internal_bb3cd0ff913a52da93961c0cb9373e0455db79bafb2446cf3d4bf8ad8719cb36->leave($__internal_bb3cd0ff913a52da93961c0cb9373e0455db79bafb2446cf3d4bf8ad8719cb36_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_586ef4411f95e64ccedbd290ee533ee97add0f75b5cc9a7939436918c50ea958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_586ef4411f95e64ccedbd290ee533ee97add0f75b5cc9a7939436918c50ea958->enter($__internal_586ef4411f95e64ccedbd290ee533ee97add0f75b5cc9a7939436918c50ea958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4df1c4b6e676a721dbb8b8cf95dd21d86240892e8fecac351f4493afdd6f6fe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df1c4b6e676a721dbb8b8cf95dd21d86240892e8fecac351f4493afdd6f6fe5->enter($__internal_4df1c4b6e676a721dbb8b8cf95dd21d86240892e8fecac351f4493afdd6f6fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_4df1c4b6e676a721dbb8b8cf95dd21d86240892e8fecac351f4493afdd6f6fe5->leave($__internal_4df1c4b6e676a721dbb8b8cf95dd21d86240892e8fecac351f4493afdd6f6fe5_prof);

        
        $__internal_586ef4411f95e64ccedbd290ee533ee97add0f75b5cc9a7939436918c50ea958->leave($__internal_586ef4411f95e64ccedbd290ee533ee97add0f75b5cc9a7939436918c50ea958_prof);

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
