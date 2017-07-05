<?php

/* catalogue/poubelle.html.twig */
class __TwigTemplate_f659ecadad88d248552a2884b193bfd90b82898ed1782e1fc23e02a8f4c91970 extends Twig_Template
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
        $__internal_4f8c5090a87121eaf9de7153f08ad226061cf5ba19f9c9e80ac23ed3c6665e6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f8c5090a87121eaf9de7153f08ad226061cf5ba19f9c9e80ac23ed3c6665e6b->enter($__internal_4f8c5090a87121eaf9de7153f08ad226061cf5ba19f9c9e80ac23ed3c6665e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/poubelle.html.twig"));

        $__internal_4a830f0fd5bd34eea9ce0e0d3b31917c02f9aa8728a81affcd0f8df13466d422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a830f0fd5bd34eea9ce0e0d3b31917c02f9aa8728a81affcd0f8df13466d422->enter($__internal_4a830f0fd5bd34eea9ce0e0d3b31917c02f9aa8728a81affcd0f8df13466d422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/poubelle.html.twig"));

        // line 1
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_4f8c5090a87121eaf9de7153f08ad226061cf5ba19f9c9e80ac23ed3c6665e6b->leave($__internal_4f8c5090a87121eaf9de7153f08ad226061cf5ba19f9c9e80ac23ed3c6665e6b_prof);

        
        $__internal_4a830f0fd5bd34eea9ce0e0d3b31917c02f9aa8728a81affcd0f8df13466d422->leave($__internal_4a830f0fd5bd34eea9ce0e0d3b31917c02f9aa8728a81affcd0f8df13466d422_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4185b3b645e478939aac6b48a87f1c60989b7993e30af5712ac83da9291e8c50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4185b3b645e478939aac6b48a87f1c60989b7993e30af5712ac83da9291e8c50->enter($__internal_4185b3b645e478939aac6b48a87f1c60989b7993e30af5712ac83da9291e8c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ff4d9e02f511bd33f8fb7f8bc7233655041993f7817d38309a8a8508e625f5c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff4d9e02f511bd33f8fb7f8bc7233655041993f7817d38309a8a8508e625f5c6->enter($__internal_ff4d9e02f511bd33f8fb7f8bc7233655041993f7817d38309a8a8508e625f5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_ff4d9e02f511bd33f8fb7f8bc7233655041993f7817d38309a8a8508e625f5c6->leave($__internal_ff4d9e02f511bd33f8fb7f8bc7233655041993f7817d38309a8a8508e625f5c6_prof);

        
        $__internal_4185b3b645e478939aac6b48a87f1c60989b7993e30af5712ac83da9291e8c50->leave($__internal_4185b3b645e478939aac6b48a87f1c60989b7993e30af5712ac83da9291e8c50_prof);

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
