<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_6dafd52b93d63887447eb9b3047b4a11f27579ba41f06acaeee8cb69bbd94b62 extends Twig_Template
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
        $__internal_f890d1f61ef4de19277c0dc63435d61ee8f03423b6726f94ff029f25e6c877f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f890d1f61ef4de19277c0dc63435d61ee8f03423b6726f94ff029f25e6c877f5->enter($__internal_f890d1f61ef4de19277c0dc63435d61ee8f03423b6726f94ff029f25e6c877f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_eaa5a7ba0b5939bc832cab8677ee5c19278945925030eadbfaa460b467427ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaa5a7ba0b5939bc832cab8677ee5c19278945925030eadbfaa460b467427ee3->enter($__internal_eaa5a7ba0b5939bc832cab8677ee5c19278945925030eadbfaa460b467427ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_f890d1f61ef4de19277c0dc63435d61ee8f03423b6726f94ff029f25e6c877f5->leave($__internal_f890d1f61ef4de19277c0dc63435d61ee8f03423b6726f94ff029f25e6c877f5_prof);

        
        $__internal_eaa5a7ba0b5939bc832cab8677ee5c19278945925030eadbfaa460b467427ee3->leave($__internal_eaa5a7ba0b5939bc832cab8677ee5c19278945925030eadbfaa460b467427ee3_prof);

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
