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
        $__internal_24a6950645764e33f9de25f9b1c86e56a31ef6679cad39844b37d349048a9e30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a6950645764e33f9de25f9b1c86e56a31ef6679cad39844b37d349048a9e30->enter($__internal_24a6950645764e33f9de25f9b1c86e56a31ef6679cad39844b37d349048a9e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/poubelle.html.twig"));

        $__internal_e7982f830934983adca79fbd9d4f752f06762781cf1ce49dd38cab7ace08546d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7982f830934983adca79fbd9d4f752f06762781cf1ce49dd38cab7ace08546d->enter($__internal_e7982f830934983adca79fbd9d4f752f06762781cf1ce49dd38cab7ace08546d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/poubelle.html.twig"));

        // line 1
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_24a6950645764e33f9de25f9b1c86e56a31ef6679cad39844b37d349048a9e30->leave($__internal_24a6950645764e33f9de25f9b1c86e56a31ef6679cad39844b37d349048a9e30_prof);

        
        $__internal_e7982f830934983adca79fbd9d4f752f06762781cf1ce49dd38cab7ace08546d->leave($__internal_e7982f830934983adca79fbd9d4f752f06762781cf1ce49dd38cab7ace08546d_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_46b676bd5e2fdd1df2d517fbaa72820b431147ed101c761fb8811cff4645c508 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46b676bd5e2fdd1df2d517fbaa72820b431147ed101c761fb8811cff4645c508->enter($__internal_46b676bd5e2fdd1df2d517fbaa72820b431147ed101c761fb8811cff4645c508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_778f252c35234ea40d2837d95a792eb017498936b22b4feacfa966edaafde365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_778f252c35234ea40d2837d95a792eb017498936b22b4feacfa966edaafde365->enter($__internal_778f252c35234ea40d2837d95a792eb017498936b22b4feacfa966edaafde365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_778f252c35234ea40d2837d95a792eb017498936b22b4feacfa966edaafde365->leave($__internal_778f252c35234ea40d2837d95a792eb017498936b22b4feacfa966edaafde365_prof);

        
        $__internal_46b676bd5e2fdd1df2d517fbaa72820b431147ed101c761fb8811cff4645c508->leave($__internal_46b676bd5e2fdd1df2d517fbaa72820b431147ed101c761fb8811cff4645c508_prof);

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
