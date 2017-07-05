<?php

/* :catalogue:poubelle.html.twig */
class __TwigTemplate_27fb6818257ac93b2b8592d3305073acfb0ef0f50506a4ac806bf39b0b30ec30 extends Twig_Template
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
        $__internal_2191cf9f8f5d2797942ddaee8f9ada07765c564ac5b099638fd9458e0cd16fa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2191cf9f8f5d2797942ddaee8f9ada07765c564ac5b099638fd9458e0cd16fa9->enter($__internal_2191cf9f8f5d2797942ddaee8f9ada07765c564ac5b099638fd9458e0cd16fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:poubelle.html.twig"));

        $__internal_75a686f984160f3e6b51c84a7d7951cba1ef93ca33c4a90f99aabb630f35efb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75a686f984160f3e6b51c84a7d7951cba1ef93ca33c4a90f99aabb630f35efb5->enter($__internal_75a686f984160f3e6b51c84a7d7951cba1ef93ca33c4a90f99aabb630f35efb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:poubelle.html.twig"));

        // line 1
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_2191cf9f8f5d2797942ddaee8f9ada07765c564ac5b099638fd9458e0cd16fa9->leave($__internal_2191cf9f8f5d2797942ddaee8f9ada07765c564ac5b099638fd9458e0cd16fa9_prof);

        
        $__internal_75a686f984160f3e6b51c84a7d7951cba1ef93ca33c4a90f99aabb630f35efb5->leave($__internal_75a686f984160f3e6b51c84a7d7951cba1ef93ca33c4a90f99aabb630f35efb5_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f07d34b8fc8a4346552865c24b09d09414db354c98bd1ffc48883044fae35001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f07d34b8fc8a4346552865c24b09d09414db354c98bd1ffc48883044fae35001->enter($__internal_f07d34b8fc8a4346552865c24b09d09414db354c98bd1ffc48883044fae35001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_efb440f863fda95eed0a3050d5a6bbd1253de1543ea32a5efdc165c383eb332f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efb440f863fda95eed0a3050d5a6bbd1253de1543ea32a5efdc165c383eb332f->enter($__internal_efb440f863fda95eed0a3050d5a6bbd1253de1543ea32a5efdc165c383eb332f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_efb440f863fda95eed0a3050d5a6bbd1253de1543ea32a5efdc165c383eb332f->leave($__internal_efb440f863fda95eed0a3050d5a6bbd1253de1543ea32a5efdc165c383eb332f_prof);

        
        $__internal_f07d34b8fc8a4346552865c24b09d09414db354c98bd1ffc48883044fae35001->leave($__internal_f07d34b8fc8a4346552865c24b09d09414db354c98bd1ffc48883044fae35001_prof);

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
