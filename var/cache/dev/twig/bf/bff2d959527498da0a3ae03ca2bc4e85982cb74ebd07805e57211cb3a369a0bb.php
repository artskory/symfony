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
        $__internal_edd3522b712ff8b8a3b5dd19045f773f9a68f0b1df7d651abdc7a474f1edfbec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edd3522b712ff8b8a3b5dd19045f773f9a68f0b1df7d651abdc7a474f1edfbec->enter($__internal_edd3522b712ff8b8a3b5dd19045f773f9a68f0b1df7d651abdc7a474f1edfbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:poubelle.html.twig"));

        $__internal_d2f7976c7d9c6521b68865297ba1f1aa287d42d1fd7a574ac5afc0b18aec2d78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2f7976c7d9c6521b68865297ba1f1aa287d42d1fd7a574ac5afc0b18aec2d78->enter($__internal_d2f7976c7d9c6521b68865297ba1f1aa287d42d1fd7a574ac5afc0b18aec2d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:poubelle.html.twig"));

        // line 1
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_edd3522b712ff8b8a3b5dd19045f773f9a68f0b1df7d651abdc7a474f1edfbec->leave($__internal_edd3522b712ff8b8a3b5dd19045f773f9a68f0b1df7d651abdc7a474f1edfbec_prof);

        
        $__internal_d2f7976c7d9c6521b68865297ba1f1aa287d42d1fd7a574ac5afc0b18aec2d78->leave($__internal_d2f7976c7d9c6521b68865297ba1f1aa287d42d1fd7a574ac5afc0b18aec2d78_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_15e9d029a80c7a0a00a119ce276da606aabc60612ae7482d485bde4c484697f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15e9d029a80c7a0a00a119ce276da606aabc60612ae7482d485bde4c484697f8->enter($__internal_15e9d029a80c7a0a00a119ce276da606aabc60612ae7482d485bde4c484697f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_20f968ba2b9936ad70232935e487ef379b2d28e8438fdff448df3a44bf6f0411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f968ba2b9936ad70232935e487ef379b2d28e8438fdff448df3a44bf6f0411->enter($__internal_20f968ba2b9936ad70232935e487ef379b2d28e8438fdff448df3a44bf6f0411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_20f968ba2b9936ad70232935e487ef379b2d28e8438fdff448df3a44bf6f0411->leave($__internal_20f968ba2b9936ad70232935e487ef379b2d28e8438fdff448df3a44bf6f0411_prof);

        
        $__internal_15e9d029a80c7a0a00a119ce276da606aabc60612ae7482d485bde4c484697f8->leave($__internal_15e9d029a80c7a0a00a119ce276da606aabc60612ae7482d485bde4c484697f8_prof);

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
