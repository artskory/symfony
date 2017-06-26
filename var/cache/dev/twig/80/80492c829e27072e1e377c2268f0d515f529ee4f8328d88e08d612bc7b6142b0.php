<?php

/* catalogue/poubelle.html.twig */
class __TwigTemplate_8b2fea7de9375e52ed1c6250632c4fbb0b24cc076366b4f9eef2a879a46abe3b extends Twig_Template
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
        $__internal_5ccf0c209f8a3bce1f0d66c278b080e436c8b9c55a5baa02b8715673cb642c1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ccf0c209f8a3bce1f0d66c278b080e436c8b9c55a5baa02b8715673cb642c1f->enter($__internal_5ccf0c209f8a3bce1f0d66c278b080e436c8b9c55a5baa02b8715673cb642c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/poubelle.html.twig"));

        $__internal_cc30dddc9b19686e09435f0068f4e3933300b6535d10b75a3de17ad0fd66238b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc30dddc9b19686e09435f0068f4e3933300b6535d10b75a3de17ad0fd66238b->enter($__internal_cc30dddc9b19686e09435f0068f4e3933300b6535d10b75a3de17ad0fd66238b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/poubelle.html.twig"));

        // line 1
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_5ccf0c209f8a3bce1f0d66c278b080e436c8b9c55a5baa02b8715673cb642c1f->leave($__internal_5ccf0c209f8a3bce1f0d66c278b080e436c8b9c55a5baa02b8715673cb642c1f_prof);

        
        $__internal_cc30dddc9b19686e09435f0068f4e3933300b6535d10b75a3de17ad0fd66238b->leave($__internal_cc30dddc9b19686e09435f0068f4e3933300b6535d10b75a3de17ad0fd66238b_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8036b00ed99f6f90536d9a58207c6ad66f1330f7d0b4a8af002c709bef7f49b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8036b00ed99f6f90536d9a58207c6ad66f1330f7d0b4a8af002c709bef7f49b4->enter($__internal_8036b00ed99f6f90536d9a58207c6ad66f1330f7d0b4a8af002c709bef7f49b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_064bdc5766c1bc9178d7765eb8cbbac7d2d6cdbff49f4d23d24ad8d27adfe27c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_064bdc5766c1bc9178d7765eb8cbbac7d2d6cdbff49f4d23d24ad8d27adfe27c->enter($__internal_064bdc5766c1bc9178d7765eb8cbbac7d2d6cdbff49f4d23d24ad8d27adfe27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_064bdc5766c1bc9178d7765eb8cbbac7d2d6cdbff49f4d23d24ad8d27adfe27c->leave($__internal_064bdc5766c1bc9178d7765eb8cbbac7d2d6cdbff49f4d23d24ad8d27adfe27c_prof);

        
        $__internal_8036b00ed99f6f90536d9a58207c6ad66f1330f7d0b4a8af002c709bef7f49b4->leave($__internal_8036b00ed99f6f90536d9a58207c6ad66f1330f7d0b4a8af002c709bef7f49b4_prof);

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
