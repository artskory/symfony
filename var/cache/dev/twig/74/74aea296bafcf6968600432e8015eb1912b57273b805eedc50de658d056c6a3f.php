<?php

/* base.html.twig */
class __TwigTemplate_c8c735ec72e84f3fcd3d0340ba386f37d757074c77c8651106073fa12d4e229e extends Twig_Template
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
        $__internal_cc1368b1ba119e1b4bf9a44420f55e3cf991355aedbea5fe815bca3a0271af0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc1368b1ba119e1b4bf9a44420f55e3cf991355aedbea5fe815bca3a0271af0d->enter($__internal_cc1368b1ba119e1b4bf9a44420f55e3cf991355aedbea5fe815bca3a0271af0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6182407d124670e33b90c2edac6a121252c21152ed133697af279f5d39e61e74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6182407d124670e33b90c2edac6a121252c21152ed133697af279f5d39e61e74->enter($__internal_6182407d124670e33b90c2edac6a121252c21152ed133697af279f5d39e61e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        if (twig_in_filter("oc_platform", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform");
        echo "\">Annonce</a></li>
            
            ";
        // line 46
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 47
            echo "                
            <li ";
            // line 48
            if (twig_in_filter("ajouter", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
                echo " class=\"active\"";
            }
            echo " ><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("ajouter");
            echo "\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter</a></li>
            <li ";
            // line 49
            if (twig_in_filter("fos_user_security_logout", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
                echo " class=\"active\"";
            }
            echo " ><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_security_logout");
            echo "\"><span class=\"glyphicon glyphicon-flash\"></span> Logout</a></li>
            
            <li>
            ";
            // line 52
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 53
                echo "                <a href=''>| Bonjour ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
                echo "</a>
            ";
            }
            // line 54
            echo "</li>
            ";
        } else {
            // line 56
            echo "                
            <li ";
            // line 57
            if (twig_in_filter("fos_user_security_login", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
                echo " class=\"active\"";
            }
            echo " ><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_security_login");
            echo "\"><span class=\"glyphicon glyphicon-off\"></span> Login</a></li>
            ";
        }
        // line 59
        echo "          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class=\"container\">

      <div class=\"starter-template\">
          
          <h2>";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message"), "html", null, true);
        echo "</h2>
          
        ";
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "        
      </div>

    </div><!-- /.container -->
    <footer>
        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Blog:footer", array("nb" => 3)));
        echo " ";
        // line 77
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
        // line 86
        $this->displayBlock('javascripts', $context, $blocks);
        // line 87
        echo "  </body>
</html>
";
        
        $__internal_cc1368b1ba119e1b4bf9a44420f55e3cf991355aedbea5fe815bca3a0271af0d->leave($__internal_cc1368b1ba119e1b4bf9a44420f55e3cf991355aedbea5fe815bca3a0271af0d_prof);

        
        $__internal_6182407d124670e33b90c2edac6a121252c21152ed133697af279f5d39e61e74->leave($__internal_6182407d124670e33b90c2edac6a121252c21152ed133697af279f5d39e61e74_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_e07cc74d650cdb68106abb55f848458dfffa880cc0a91064a7887e75c96ad7f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e07cc74d650cdb68106abb55f848458dfffa880cc0a91064a7887e75c96ad7f4->enter($__internal_e07cc74d650cdb68106abb55f848458dfffa880cc0a91064a7887e75c96ad7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b0ad3c930922abb8719c7b030dc2f4a2a53443cd4f5d3837bc438e0ad74aada7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ad3c930922abb8719c7b030dc2f4a2a53443cd4f5d3837bc438e0ad74aada7->enter($__internal_b0ad3c930922abb8719c7b030dc2f4a2a53443cd4f5d3837bc438e0ad74aada7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b0ad3c930922abb8719c7b030dc2f4a2a53443cd4f5d3837bc438e0ad74aada7->leave($__internal_b0ad3c930922abb8719c7b030dc2f4a2a53443cd4f5d3837bc438e0ad74aada7_prof);

        
        $__internal_e07cc74d650cdb68106abb55f848458dfffa880cc0a91064a7887e75c96ad7f4->leave($__internal_e07cc74d650cdb68106abb55f848458dfffa880cc0a91064a7887e75c96ad7f4_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_695ba333471f624f398e6d817c96939427dabf4107281ec14b4eecd680e09485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_695ba333471f624f398e6d817c96939427dabf4107281ec14b4eecd680e09485->enter($__internal_695ba333471f624f398e6d817c96939427dabf4107281ec14b4eecd680e09485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_283b83b1b3cc1daec79050a36c54dfa94f6cddc90d992d2b3e111b0abb73221d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_283b83b1b3cc1daec79050a36c54dfa94f6cddc90d992d2b3e111b0abb73221d->enter($__internal_283b83b1b3cc1daec79050a36c54dfa94f6cddc90d992d2b3e111b0abb73221d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_283b83b1b3cc1daec79050a36c54dfa94f6cddc90d992d2b3e111b0abb73221d->leave($__internal_283b83b1b3cc1daec79050a36c54dfa94f6cddc90d992d2b3e111b0abb73221d_prof);

        
        $__internal_695ba333471f624f398e6d817c96939427dabf4107281ec14b4eecd680e09485->leave($__internal_695ba333471f624f398e6d817c96939427dabf4107281ec14b4eecd680e09485_prof);

    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        $__internal_87ca1d43b624304701756011f7224efd9af52079c0583aff67d73349234868ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87ca1d43b624304701756011f7224efd9af52079c0583aff67d73349234868ca->enter($__internal_87ca1d43b624304701756011f7224efd9af52079c0583aff67d73349234868ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7cbe7e9b8ba61033bc2c0017c05935b95aa59feceb8eed278944b948e5817898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cbe7e9b8ba61033bc2c0017c05935b95aa59feceb8eed278944b948e5817898->enter($__internal_7cbe7e9b8ba61033bc2c0017c05935b95aa59feceb8eed278944b948e5817898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7cbe7e9b8ba61033bc2c0017c05935b95aa59feceb8eed278944b948e5817898->leave($__internal_7cbe7e9b8ba61033bc2c0017c05935b95aa59feceb8eed278944b948e5817898_prof);

        
        $__internal_87ca1d43b624304701756011f7224efd9af52079c0583aff67d73349234868ca->leave($__internal_87ca1d43b624304701756011f7224efd9af52079c0583aff67d73349234868ca_prof);

    }

    // line 86
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1a478d23a73d3a1889c421eab7773e97276ec0e4d9bea70862f1f6f8732b96e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a478d23a73d3a1889c421eab7773e97276ec0e4d9bea70862f1f6f8732b96e3->enter($__internal_1a478d23a73d3a1889c421eab7773e97276ec0e4d9bea70862f1f6f8732b96e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_20bd2e407f6d3f1151628c9038fd017cbaa7fa7113ceea89324b4c8780d9bff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20bd2e407f6d3f1151628c9038fd017cbaa7fa7113ceea89324b4c8780d9bff7->enter($__internal_20bd2e407f6d3f1151628c9038fd017cbaa7fa7113ceea89324b4c8780d9bff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_20bd2e407f6d3f1151628c9038fd017cbaa7fa7113ceea89324b4c8780d9bff7->leave($__internal_20bd2e407f6d3f1151628c9038fd017cbaa7fa7113ceea89324b4c8780d9bff7_prof);

        
        $__internal_1a478d23a73d3a1889c421eab7773e97276ec0e4d9bea70862f1f6f8732b96e3->leave($__internal_1a478d23a73d3a1889c421eab7773e97276ec0e4d9bea70862f1f6f8732b96e3_prof);

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
        return array (  270 => 86,  253 => 70,  236 => 14,  218 => 12,  206 => 87,  204 => 86,  191 => 77,  188 => 76,  181 => 71,  179 => 70,  174 => 68,  163 => 59,  154 => 57,  151 => 56,  147 => 54,  141 => 53,  139 => 52,  129 => 49,  121 => 48,  118 => 47,  116 => 46,  107 => 44,  99 => 43,  91 => 42,  83 => 41,  58 => 19,  52 => 15,  50 => 14,  45 => 12,  40 => 10,  29 => 1,);
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
            <li {% if 'oc_platform' in app.request.attributes.get('_route') %} class=\"active\"{% endif %}><a href=\"{{ path('oc_platform') }}\">Annonce</a></li>
            
            {% if is_granted('ROLE_USER') %}
                
            <li {% if 'ajouter' in app.request.attributes.get('_route') %} class=\"active\"{% endif %} ><a href=\"{{ url('ajouter') }}\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter</a></li>
            <li {% if 'fos_user_security_logout' in app.request.attributes.get('_route') %} class=\"active\"{% endif %} ><a href=\"{{ url('fos_user_security_logout') }}\"><span class=\"glyphicon glyphicon-flash\"></span> Logout</a></li>
            
            <li>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                <a href=''>| Bonjour {{ app.user.username }}</a>
            {% endif %}</li>
            {% else %}
                
            <li {% if 'fos_user_security_login' in app.request.attributes.get('_route') %} class=\"active\"{% endif %} ><a href=\"{{ url('fos_user_security_login') }}\"><span class=\"glyphicon glyphicon-off\"></span> Login</a></li>
            {% endif %}
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class=\"container\">

      <div class=\"starter-template\">
          
          <h2>{{ 'message'|trans }}</h2>
          
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
