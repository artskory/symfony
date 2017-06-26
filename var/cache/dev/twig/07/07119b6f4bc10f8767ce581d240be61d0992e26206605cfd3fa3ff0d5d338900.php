<?php

/* base.html.twig */
class __TwigTemplate_93293ad6c63d8e7797650250a4b63255498caade7592da4fb7edb6362c490d50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4442a83fb54f66ab31dda0a80435c2ff64700358742c510aad6ba85b872484ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4442a83fb54f66ab31dda0a80435c2ff64700358742c510aad6ba85b872484ed->enter($__internal_4442a83fb54f66ab31dda0a80435c2ff64700358742c510aad6ba85b872484ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f4ae1045df9ce3befdd74ab6f9ecb7917981642244ef3513bfbeea0fafeac7a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4ae1045df9ce3befdd74ab6f9ecb7917981642244ef3513bfbeea0fafeac7a9->enter($__internal_f4ae1045df9ce3befdd74ab6f9ecb7917981642244ef3513bfbeea0fafeac7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/favicon.ico"), "html", null, true);
        echo "\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/") . "starter-template.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"https://fonts.googleapis.com/css?family=Raleway\" rel=\"stylesheet\">
    
  </head>

  <body>

    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\"><img class=\"logo\" src=\"data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNDMwLjExNyA0MzAuMTE4IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0MzAuMTE3IDQzMC4xMTg7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8cGF0aCBpZD0iV29yZFByZXNzIiBkPSJNMCwyMTUuMDU5YzAsMTE4Ljc4Niw5Ni4yNzQsMjE1LjA1OSwyMTUuMDU5LDIxNS4wNTljMTE4Ljc1OSwwLDIxNS4wNTktOTYuMjcyLDIxNS4wNTktMjE1LjA1OSAgIEM0MzAuMTE3LDk2LjMwMywzMzMuODE3LDAsMjE1LjA1OSwwQzk2LjI3NCwwLDAsOTYuMzAzLDAsMjE1LjA1OXogTTE2LjU3MiwyMTUuMDU5YzAtMjguNzc1LDYuMTk2LTU2LjA4MiwxNy4xOTEtODAuNzggICBsOTQuNjc5LDI1OS4zOThDNjIuMjQyLDM2MS41NDEsMTYuNTcyLDI5My42MTYsMTYuNTcyLDIxNS4wNTl6IE0yMTUuMDU5LDQxMy41NDFjLTE5LjQ4LDAtMzguMy0yLjgzOC01Ni4wNzctOC4wNmw1OS41NjgtMTczLjAzMiAgIGw2MS4wMDgsMTY3LjEyOGMwLjM5NiwwLjk4OSwwLjg4NywxLjg2MiwxLjQsMi43MDJDMjYwLjM0OCw0MDkuNTY0LDIzOC4xNTYsNDEzLjU0MSwyMTUuMDU5LDQxMy41NDF6IE0zNzUuNDY2LDIxMS4zMzcgICBjMTEuMzIzLTI4LjMxNywxNS4xMTItNTAuOTU1LDE1LjExMi03MS4wODRjMC03LjMwOS0wLjQ5LTE0LjA5LTEuMzcyLTIwLjQyMWMxNS40OTUsMjguMjg3LDI0LjMwNyw2MC43MTEsMjQuMzA3LDk1LjIzMiAgIGMwLDczLjIzNS0zOS42NzEsMTM3LjE1MS05OC42NjIsMTcxLjUzOEwzNzUuNDY2LDIxMS4zMzd6IE0zMzIuNjY5LDE1MC4yOTljNy41MzMsMTMuMjEyLDE2LjM3NywzMC4yMDMsMTYuMzc3LDU0Ljc0MiAgIGMwLDE3LTUuMDU1LDM4LjM2Ni0xNS4xMDcsNjQuMTc1bC0xOS44MDcsNjYuMTIzbC03MS43MzMtMjEzLjMyOGMxMS45NzYtMC42NTEsMjIuNzEtMS44OTUsMjIuNzEtMS44OTUgICBjMTAuNjk3LTEuMjcsOS40MTgtMTYuOTYtMS4yNDYtMTYuMzcyYzAsMC0zMi4xNjEsMi41MzktNTIuOTEzLDIuNTM5Yy0xOS41MDgsMC01Mi4yNjQtMi41MzktNTIuMjY0LTIuNTM5ICAgYy0xMC43MDItMC41ODgtMTEuOTQzLDE1Ljc1MS0xLjI3MiwxNi4zNzJjMCwwLDEwLjE0NiwxLjI0NCwyMC44NDYsMS44OTVsMzAuODk0LDg0LjcyN0wxNjUuNzMsMzM2Ljk3N0w5My40MzUsMTIyLjAxMSAgIGMxMS45NzQtMC42NTEsMjIuNzM2LTEuODk1LDIyLjczNi0xLjg5NWMxMC43MDQtMS4yNyw5LjM5NS0xNi45Ni0xLjI3Mi0xNi4zNzJjMCwwLTMyLjEzNSwyLjUzOS01Mi45MTMsMi41MzkgICBjLTMuNzIsMC04LjA5My0wLjA5OC0xMi43NTctMC4yMzFjMzUuNS01My44ODQsOTYuNTA2LTg5LjQ3NSwxNjUuODMxLTg5LjQ3NWM1MS42NzQsMCw5OC43MjMsMTkuNzY3LDEzNC4wMiw1Mi4xMzEgICBjLTAuODQ5LTAuMDY3LTEuNjk4LTAuMTY4LTIuNTQ4LTAuMTY4Yy0xOS41NDEsMC0zMy4zNDIsMTYuOTcyLTMzLjM0MiwzNS4yMDlDMzEzLjE5MywxMjAuMTIyLDMyMi42MjEsMTMzLjk1OSwzMzIuNjY5LDE1MC4yOTl6IiBmaWxsPSIjRkZGRkZGIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==\" />
               Wordpresque by Symfony</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li ";
        // line 41
        if (twig_in_filter("homepage", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
            echo " class=\"active\"";
        }
        echo " ><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a></li>
            <li ";
        // line 42
        if (twig_in_filter("blog", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
            echo " class=\"active\"";
        }
        echo " ><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog");
        echo "\">Blog</a></li>
            <li ";
        // line 43
        if (twig_in_filter("catalogue", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("catalogue");
        echo "\">Catalogue</a></li>
            <li ";
        // line 44
        if (twig_in_filter("ajouter", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
            echo " class=\"active\"";
        }
        echo " ><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("ajouter");
        echo "\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class=\"container\">

      <div class=\"starter-template\">
        ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "      </div>

    </div><!-- /.container -->
    <footer>
        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Blog:footer", array("nb" => 3)));
        echo " ";
        // line 59
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Blog:yearsArchives"));
        echo "
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
    
    ";
        // line 68
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "  </body>
</html>
";
        
        $__internal_4442a83fb54f66ab31dda0a80435c2ff64700358742c510aad6ba85b872484ed->leave($__internal_4442a83fb54f66ab31dda0a80435c2ff64700358742c510aad6ba85b872484ed_prof);

        
        $__internal_f4ae1045df9ce3befdd74ab6f9ecb7917981642244ef3513bfbeea0fafeac7a9->leave($__internal_f4ae1045df9ce3befdd74ab6f9ecb7917981642244ef3513bfbeea0fafeac7a9_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_138923b4fde5ee5068c100fad6656a1882549ce830aa599606a11a2583f4c72c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_138923b4fde5ee5068c100fad6656a1882549ce830aa599606a11a2583f4c72c->enter($__internal_138923b4fde5ee5068c100fad6656a1882549ce830aa599606a11a2583f4c72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8afac83146f27fcacba4d5ff2ef35e4798f8c6f6d451075d375d25eb48ab5341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8afac83146f27fcacba4d5ff2ef35e4798f8c6f6d451075d375d25eb48ab5341->enter($__internal_8afac83146f27fcacba4d5ff2ef35e4798f8c6f6d451075d375d25eb48ab5341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8afac83146f27fcacba4d5ff2ef35e4798f8c6f6d451075d375d25eb48ab5341->leave($__internal_8afac83146f27fcacba4d5ff2ef35e4798f8c6f6d451075d375d25eb48ab5341_prof);

        
        $__internal_138923b4fde5ee5068c100fad6656a1882549ce830aa599606a11a2583f4c72c->leave($__internal_138923b4fde5ee5068c100fad6656a1882549ce830aa599606a11a2583f4c72c_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_88bc3542f418e9abc31ca97a3cccc02a0d4bca17c51722ea724945f0e4504ba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88bc3542f418e9abc31ca97a3cccc02a0d4bca17c51722ea724945f0e4504ba2->enter($__internal_88bc3542f418e9abc31ca97a3cccc02a0d4bca17c51722ea724945f0e4504ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f106d864b0c71e4ac391da4c3aaf037e5eedc1a0546332cb7e6c117e25ea1f16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f106d864b0c71e4ac391da4c3aaf037e5eedc1a0546332cb7e6c117e25ea1f16->enter($__internal_f106d864b0c71e4ac391da4c3aaf037e5eedc1a0546332cb7e6c117e25ea1f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f106d864b0c71e4ac391da4c3aaf037e5eedc1a0546332cb7e6c117e25ea1f16->leave($__internal_f106d864b0c71e4ac391da4c3aaf037e5eedc1a0546332cb7e6c117e25ea1f16_prof);

        
        $__internal_88bc3542f418e9abc31ca97a3cccc02a0d4bca17c51722ea724945f0e4504ba2->leave($__internal_88bc3542f418e9abc31ca97a3cccc02a0d4bca17c51722ea724945f0e4504ba2_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_83ca3b6fa406230c66eedd6b54620395f9adbbeb2331a6fa5882f3ecc7be5bf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83ca3b6fa406230c66eedd6b54620395f9adbbeb2331a6fa5882f3ecc7be5bf0->enter($__internal_83ca3b6fa406230c66eedd6b54620395f9adbbeb2331a6fa5882f3ecc7be5bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d4fa1a74f25a3dbd2c20c1064d420b3d771e4400ff37e9145edf55c270f742c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4fa1a74f25a3dbd2c20c1064d420b3d771e4400ff37e9145edf55c270f742c1->enter($__internal_d4fa1a74f25a3dbd2c20c1064d420b3d771e4400ff37e9145edf55c270f742c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d4fa1a74f25a3dbd2c20c1064d420b3d771e4400ff37e9145edf55c270f742c1->leave($__internal_d4fa1a74f25a3dbd2c20c1064d420b3d771e4400ff37e9145edf55c270f742c1_prof);

        
        $__internal_83ca3b6fa406230c66eedd6b54620395f9adbbeb2331a6fa5882f3ecc7be5bf0->leave($__internal_83ca3b6fa406230c66eedd6b54620395f9adbbeb2331a6fa5882f3ecc7be5bf0_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e262f67f527cb09d0a9a0921e2c14b5217c8a997f201d24469c02038f79def32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e262f67f527cb09d0a9a0921e2c14b5217c8a997f201d24469c02038f79def32->enter($__internal_e262f67f527cb09d0a9a0921e2c14b5217c8a997f201d24469c02038f79def32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_42582a12867b7eac0e5fdd72a4daf165292318de7c402150db7cdac911070102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42582a12867b7eac0e5fdd72a4daf165292318de7c402150db7cdac911070102->enter($__internal_42582a12867b7eac0e5fdd72a4daf165292318de7c402150db7cdac911070102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_42582a12867b7eac0e5fdd72a4daf165292318de7c402150db7cdac911070102->leave($__internal_42582a12867b7eac0e5fdd72a4daf165292318de7c402150db7cdac911070102_prof);

        
        $__internal_e262f67f527cb09d0a9a0921e2c14b5217c8a997f201d24469c02038f79def32->leave($__internal_e262f67f527cb09d0a9a0921e2c14b5217c8a997f201d24469c02038f79def32_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 68,  196 => 53,  179 => 14,  161 => 12,  149 => 69,  147 => 68,  134 => 59,  131 => 58,  125 => 54,  123 => 53,  107 => 44,  99 => 43,  91 => 42,  83 => 41,  58 => 19,  52 => 15,  50 => 14,  45 => 12,  40 => 10,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"{{ asset('image/favicon.ico') }}\">

    <title>{% block title %}Welcome!{% endblock %}</title>

    {% block stylesheets %}{% endblock %}
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

    <!-- Custom styles for this template -->
    <link href=\"{{ asset('css/') ~ 'starter-template.css'}}\" rel=\"stylesheet\">

    <link href=\"https://fonts.googleapis.com/css?family=Raleway\" rel=\"stylesheet\">
    
  </head>

  <body>

    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\"><img class=\"logo\" src=\"data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNDMwLjExNyA0MzAuMTE4IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0MzAuMTE3IDQzMC4xMTg7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8cGF0aCBpZD0iV29yZFByZXNzIiBkPSJNMCwyMTUuMDU5YzAsMTE4Ljc4Niw5Ni4yNzQsMjE1LjA1OSwyMTUuMDU5LDIxNS4wNTljMTE4Ljc1OSwwLDIxNS4wNTktOTYuMjcyLDIxNS4wNTktMjE1LjA1OSAgIEM0MzAuMTE3LDk2LjMwMywzMzMuODE3LDAsMjE1LjA1OSwwQzk2LjI3NCwwLDAsOTYuMzAzLDAsMjE1LjA1OXogTTE2LjU3MiwyMTUuMDU5YzAtMjguNzc1LDYuMTk2LTU2LjA4MiwxNy4xOTEtODAuNzggICBsOTQuNjc5LDI1OS4zOThDNjIuMjQyLDM2MS41NDEsMTYuNTcyLDI5My42MTYsMTYuNTcyLDIxNS4wNTl6IE0yMTUuMDU5LDQxMy41NDFjLTE5LjQ4LDAtMzguMy0yLjgzOC01Ni4wNzctOC4wNmw1OS41NjgtMTczLjAzMiAgIGw2MS4wMDgsMTY3LjEyOGMwLjM5NiwwLjk4OSwwLjg4NywxLjg2MiwxLjQsMi43MDJDMjYwLjM0OCw0MDkuNTY0LDIzOC4xNTYsNDEzLjU0MSwyMTUuMDU5LDQxMy41NDF6IE0zNzUuNDY2LDIxMS4zMzcgICBjMTEuMzIzLTI4LjMxNywxNS4xMTItNTAuOTU1LDE1LjExMi03MS4wODRjMC03LjMwOS0wLjQ5LTE0LjA5LTEuMzcyLTIwLjQyMWMxNS40OTUsMjguMjg3LDI0LjMwNyw2MC43MTEsMjQuMzA3LDk1LjIzMiAgIGMwLDczLjIzNS0zOS42NzEsMTM3LjE1MS05OC42NjIsMTcxLjUzOEwzNzUuNDY2LDIxMS4zMzd6IE0zMzIuNjY5LDE1MC4yOTljNy41MzMsMTMuMjEyLDE2LjM3NywzMC4yMDMsMTYuMzc3LDU0Ljc0MiAgIGMwLDE3LTUuMDU1LDM4LjM2Ni0xNS4xMDcsNjQuMTc1bC0xOS44MDcsNjYuMTIzbC03MS43MzMtMjEzLjMyOGMxMS45NzYtMC42NTEsMjIuNzEtMS44OTUsMjIuNzEtMS44OTUgICBjMTAuNjk3LTEuMjcsOS40MTgtMTYuOTYtMS4yNDYtMTYuMzcyYzAsMC0zMi4xNjEsMi41MzktNTIuOTEzLDIuNTM5Yy0xOS41MDgsMC01Mi4yNjQtMi41MzktNTIuMjY0LTIuNTM5ICAgYy0xMC43MDItMC41ODgtMTEuOTQzLDE1Ljc1MS0xLjI3MiwxNi4zNzJjMCwwLDEwLjE0NiwxLjI0NCwyMC44NDYsMS44OTVsMzAuODk0LDg0LjcyN0wxNjUuNzMsMzM2Ljk3N0w5My40MzUsMTIyLjAxMSAgIGMxMS45NzQtMC42NTEsMjIuNzM2LTEuODk1LDIyLjczNi0xLjg5NWMxMC43MDQtMS4yNyw5LjM5NS0xNi45Ni0xLjI3Mi0xNi4zNzJjMCwwLTMyLjEzNSwyLjUzOS01Mi45MTMsMi41MzkgICBjLTMuNzIsMC04LjA5My0wLjA5OC0xMi43NTctMC4yMzFjMzUuNS01My44ODQsOTYuNTA2LTg5LjQ3NSwxNjUuODMxLTg5LjQ3NWM1MS42NzQsMCw5OC43MjMsMTkuNzY3LDEzNC4wMiw1Mi4xMzEgICBjLTAuODQ5LTAuMDY3LTEuNjk4LTAuMTY4LTIuNTQ4LTAuMTY4Yy0xOS41NDEsMC0zMy4zNDIsMTYuOTcyLTMzLjM0MiwzNS4yMDlDMzEzLjE5MywxMjAuMTIyLDMyMi42MjEsMTMzLjk1OSwzMzIuNjY5LDE1MC4yOTl6IiBmaWxsPSIjRkZGRkZGIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==\" />
               Wordpresque by Symfony</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li {% if 'homepage' in app.request.attributes.get('_route') %} class=\"active\"{% endif %} ><a href=\"{{ path('homepage') }}\">Home</a></li>
            <li {% if 'blog' in app.request.attributes.get('_route') %} class=\"active\"{% endif %} ><a href=\"{{ path('blog') }}\">Blog</a></li>
            <li {% if 'catalogue' in app.request.attributes.get('_route') %} class=\"active\"{% endif %}><a href=\"{{ path('catalogue') }}\">Catalogue</a></li>
            <li {% if 'ajouter' in app.request.attributes.get('_route') %} class=\"active\"{% endif %} ><a href=\"{{ url('ajouter') }}\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class=\"container\">

      <div class=\"starter-template\">
        {% block body %}{% endblock %}
      </div>

    </div><!-- /.container -->
    <footer>
        {{ render(controller('AppBundle:Blog:footer', {nb:3})) }} {# Blog revoie à BlogController #}
        {{ render(controller('AppBundle:Blog:yearsArchives')) }}
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
    
    {% block javascripts %}{% endblock %}
  </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\symfony\\app\\Resources\\views\\base.html.twig");
    }
}
