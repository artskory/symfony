<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_7a989f9de6686ac6a3d884090699400ac9f213b0f9b45a28d6864c5d6dbc890b extends Twig_Template
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
        $__internal_e16f72c8c8eedec3f4ac3e886a2b89d02a87506bb39f7b40c481e500f59f78b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e16f72c8c8eedec3f4ac3e886a2b89d02a87506bb39f7b40c481e500f59f78b1->enter($__internal_e16f72c8c8eedec3f4ac3e886a2b89d02a87506bb39f7b40c481e500f59f78b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_ae2eaddf1cd80e676205c7928bc1422296e86171bab0bea587e89a1f2ffa7c6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae2eaddf1cd80e676205c7928bc1422296e86171bab0bea587e89a1f2ffa7c6c->enter($__internal_ae2eaddf1cd80e676205c7928bc1422296e86171bab0bea587e89a1f2ffa7c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_e16f72c8c8eedec3f4ac3e886a2b89d02a87506bb39f7b40c481e500f59f78b1->leave($__internal_e16f72c8c8eedec3f4ac3e886a2b89d02a87506bb39f7b40c481e500f59f78b1_prof);

        
        $__internal_ae2eaddf1cd80e676205c7928bc1422296e86171bab0bea587e89a1f2ffa7c6c->leave($__internal_ae2eaddf1cd80e676205c7928bc1422296e86171bab0bea587e89a1f2ffa7c6c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
