<?php

/* TwigBundle:Exception:traces_text.html.twig */
class __TwigTemplate_892a2d645403c17f1c58179f08fbb6b7b4cadf46b6b17d4e7064f3e1a448bebd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76cdb0224f27929ef31225d2817f1273ad4e107da4243e82b7f0bb87b00725bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76cdb0224f27929ef31225d2817f1273ad4e107da4243e82b7f0bb87b00725bf->enter($__internal_76cdb0224f27929ef31225d2817f1273ad4e107da4243e82b7f0bb87b00725bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces_text.html.twig"));

        $__internal_398f0aa86e406d4e00730f97d2d54c67412ae8aa1fbe13ae8dda51a4e9c4191d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398f0aa86e406d4e00730f97d2d54c67412ae8aa1fbe13ae8dda51a4e9c4191d->enter($__internal_398f0aa86e406d4e00730f97d2d54c67412ae8aa1fbe13ae8dda51a4e9c4191d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces_text.html.twig"));

        // line 1
        echo "<table class=\"trace trace-as-text\">
    <thead class=\"trace-head\">
        <tr>
            <th class=\"sf-toggle\" data-toggle-selector=\"#trace-text-";
        // line 4
        echo twig_escape_filter($this->env, ($context["index"] ?? $this->getContext($context, "index")), "html", null, true);
        echo "\" data-toggle-initial=\"";
        echo (((1 == ($context["index"] ?? $this->getContext($context, "index")))) ? ("display") : (""));
        echo "\">
                <h3 class=\"trace-class\">
                    ";
        // line 6
        if ((($context["num_exceptions"] ?? $this->getContext($context, "num_exceptions")) > 1)) {
            // line 7
            echo "                        <span class=\"text-muted\">[";
            echo twig_escape_filter($this->env, ((($context["num_exceptions"] ?? $this->getContext($context, "num_exceptions")) - ($context["index"] ?? $this->getContext($context, "index"))) + 1), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, ($context["num_exceptions"] ?? $this->getContext($context, "num_exceptions")), "html", null, true);
            echo "]</span>
                    ";
        }
        // line 9
        echo "                    ";
        echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "class", array()), "\\")), "html", null, true);
        echo "
                    <span class=\"icon icon-close\">";
        // line 10
        echo twig_include($this->env, $context, "@Twig/images/icon-minus-square-o.svg");
        echo "</span>
                    <span class=\"icon icon-open\">";
        // line 11
        echo twig_include($this->env, $context, "@Twig/images/icon-plus-square-o.svg");
        echo "</span>
                </h3>
            </th>
        </tr>
    </thead>

    <tbody id=\"trace-text-";
        // line 17
        echo twig_escape_filter($this->env, ($context["index"] ?? $this->getContext($context, "index")), "html", null, true);
        echo "\">
        <tr>
            <td>
                ";
        // line 20
        echo twig_include($this->env, $context, "@Twig/Exception/traces.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))), false);
        echo "
            </td>
        </tr>
    </tbody>
</table>
";
        
        $__internal_76cdb0224f27929ef31225d2817f1273ad4e107da4243e82b7f0bb87b00725bf->leave($__internal_76cdb0224f27929ef31225d2817f1273ad4e107da4243e82b7f0bb87b00725bf_prof);

        
        $__internal_398f0aa86e406d4e00730f97d2d54c67412ae8aa1fbe13ae8dda51a4e9c4191d->leave($__internal_398f0aa86e406d4e00730f97d2d54c67412ae8aa1fbe13ae8dda51a4e9c4191d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 20,  65 => 17,  56 => 11,  52 => 10,  47 => 9,  39 => 7,  37 => 6,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"trace trace-as-text\">
    <thead class=\"trace-head\">
        <tr>
            <th class=\"sf-toggle\" data-toggle-selector=\"#trace-text-{{ index }}\" data-toggle-initial=\"{{ 1 == index ? 'display' }}\">
                <h3 class=\"trace-class\">
                    {% if num_exceptions > 1 %}
                        <span class=\"text-muted\">[{{ num_exceptions - index + 1 }}/{{ num_exceptions }}]</span>
                    {% endif %}
                    {{ exception.class|split('\\\\')|last }}
                    <span class=\"icon icon-close\">{{ include('@Twig/images/icon-minus-square-o.svg') }}</span>
                    <span class=\"icon icon-open\">{{ include('@Twig/images/icon-plus-square-o.svg') }}</span>
                </h3>
            </th>
        </tr>
    </thead>

    <tbody id=\"trace-text-{{ index }}\">
        <tr>
            <td>
                {{ include('@Twig/Exception/traces.txt.twig', { exception: exception }, with_context = false) }}
            </td>
        </tr>
    </tbody>
</table>
", "TwigBundle:Exception:traces_text.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces_text.html.twig");
    }
}
