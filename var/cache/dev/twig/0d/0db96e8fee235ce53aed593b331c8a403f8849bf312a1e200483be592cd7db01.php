<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_07b416618ba499929c10725b449581cf6d8807a979719470ebe2fe9493f57994 extends Twig_Template
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
        $__internal_fd6f4604c8f3260269b75a09dd7d25ed1d736e1f6cec6954dfc70916c40d96f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd6f4604c8f3260269b75a09dd7d25ed1d736e1f6cec6954dfc70916c40d96f4->enter($__internal_fd6f4604c8f3260269b75a09dd7d25ed1d736e1f6cec6954dfc70916c40d96f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_8549f2fab04df6a6417a1295b8ea0c51b25acd06156d58d8790f703c8c234f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8549f2fab04df6a6417a1295b8ea0c51b25acd06156d58d8790f703c8c234f5c->enter($__internal_8549f2fab04df6a6417a1295b8ea0c51b25acd06156d58d8790f703c8c234f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_fd6f4604c8f3260269b75a09dd7d25ed1d736e1f6cec6954dfc70916c40d96f4->leave($__internal_fd6f4604c8f3260269b75a09dd7d25ed1d736e1f6cec6954dfc70916c40d96f4_prof);

        
        $__internal_8549f2fab04df6a6417a1295b8ea0c51b25acd06156d58d8790f703c8c234f5c->leave($__internal_8549f2fab04df6a6417a1295b8ea0c51b25acd06156d58d8790f703c8c234f5c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
