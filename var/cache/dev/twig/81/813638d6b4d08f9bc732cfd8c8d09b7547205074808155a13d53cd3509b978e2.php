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
        $__internal_6e33dbf32b0ca10d52dd2a41e51499cbd1e822f0303d4f2f5d28ed4802412046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e33dbf32b0ca10d52dd2a41e51499cbd1e822f0303d4f2f5d28ed4802412046->enter($__internal_6e33dbf32b0ca10d52dd2a41e51499cbd1e822f0303d4f2f5d28ed4802412046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/poubelle.html.twig"));

        $__internal_e73f55ca3cb4189e78ed2f9f7a0088d2ece5ad7de78d398ff697f7aa62bb777b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e73f55ca3cb4189e78ed2f9f7a0088d2ece5ad7de78d398ff697f7aa62bb777b->enter($__internal_e73f55ca3cb4189e78ed2f9f7a0088d2ece5ad7de78d398ff697f7aa62bb777b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/poubelle.html.twig"));

        // line 1
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_6e33dbf32b0ca10d52dd2a41e51499cbd1e822f0303d4f2f5d28ed4802412046->leave($__internal_6e33dbf32b0ca10d52dd2a41e51499cbd1e822f0303d4f2f5d28ed4802412046_prof);

        
        $__internal_e73f55ca3cb4189e78ed2f9f7a0088d2ece5ad7de78d398ff697f7aa62bb777b->leave($__internal_e73f55ca3cb4189e78ed2f9f7a0088d2ece5ad7de78d398ff697f7aa62bb777b_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6a7d36aa4743ffe027e0d7b852a50685e8f63b957208e8665af3aad2a2dd7b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a7d36aa4743ffe027e0d7b852a50685e8f63b957208e8665af3aad2a2dd7b80->enter($__internal_6a7d36aa4743ffe027e0d7b852a50685e8f63b957208e8665af3aad2a2dd7b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_59e55f0a2e742bbe34f2774c04d16f9debb19f07a092d2fec025d9555eb90788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e55f0a2e742bbe34f2774c04d16f9debb19f07a092d2fec025d9555eb90788->enter($__internal_59e55f0a2e742bbe34f2774c04d16f9debb19f07a092d2fec025d9555eb90788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_59e55f0a2e742bbe34f2774c04d16f9debb19f07a092d2fec025d9555eb90788->leave($__internal_59e55f0a2e742bbe34f2774c04d16f9debb19f07a092d2fec025d9555eb90788_prof);

        
        $__internal_6a7d36aa4743ffe027e0d7b852a50685e8f63b957208e8665af3aad2a2dd7b80->leave($__internal_6a7d36aa4743ffe027e0d7b852a50685e8f63b957208e8665af3aad2a2dd7b80_prof);

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
