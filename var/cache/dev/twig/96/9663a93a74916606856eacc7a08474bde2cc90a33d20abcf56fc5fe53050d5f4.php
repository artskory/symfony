<?php

/* base.html.twig */
class __TwigTemplate_f14ab212a67be84866e648149c1d8019c18a59ee69bda2bf643ce3d30d6f00f2 extends Twig_Template
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
        $__internal_272f0a809036dec19b5153e48ce0176109ac0191574ae39fc8cca1a98d81b4aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_272f0a809036dec19b5153e48ce0176109ac0191574ae39fc8cca1a98d81b4aa->enter($__internal_272f0a809036dec19b5153e48ce0176109ac0191574ae39fc8cca1a98d81b4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ffd0724856e3195a07dd7d6187538d6c6c8fb50bd1cc3cd695bdac797ee3e9a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd0724856e3195a07dd7d6187538d6c6c8fb50bd1cc3cd695bdac797ee3e9a2->enter($__internal_ffd0724856e3195a07dd7d6187538d6c6c8fb50bd1cc3cd695bdac797ee3e9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            ";
        // line 40
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("AppBundle:Builder:mainMenu");
        echo "
          <ul class=\"nav navbar-nav\">
            <li ";
        // line 42
        if (twig_in_filter("homepage", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
            echo " class=\"active\"";
        }
        echo " ><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a></li>
            <li ";
        // line 43
        if (twig_in_filter("blog", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
            echo " class=\"active\"";
        }
        echo " ><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog");
        echo "\">Blog</a></li>
            <li ";
        // line 44
        if (twig_in_filter("catalogue", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("catalogue");
        echo "\">Catalogue</a></li>
            <li ";
        // line 45
        if (twig_in_filter("oc_platform", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform");
        echo "\">Annonce</a></li>
            
            ";
        // line 47
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 48
            echo "                
            <li ";
            // line 49
            if (twig_in_filter("ajouter", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
                echo " class=\"active\"";
            }
            echo " ><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("ajouter");
            echo "\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter</a></li>
            <li ";
            // line 50
            if (twig_in_filter("fos_user_security_logout", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
                echo " class=\"active\"";
            }
            echo " ><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_security_logout");
            echo "\"><span class=\"glyphicon glyphicon-flash\"></span> Logout</a></li>
            
            <li>
            ";
            // line 53
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 54
                echo "                <a href=''>| Bonjour ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
                echo "</a>
            ";
            }
            // line 55
            echo "</li>
            ";
        } else {
            // line 57
            echo "                
            <li ";
            // line 58
            if (twig_in_filter("fos_user_security_login", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
                echo " class=\"active\"";
            }
            echo " ><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_security_login");
            echo "\"><span class=\"glyphicon glyphicon-off\"></span> Login</a></li>
            ";
        }
        // line 60
        echo "          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class=\"container\">

      <div class=\"starter-template\">
          
          <h2>";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message"), "html", null, true);
        echo "</h2>
          
        ";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "        
      </div>

    </div><!-- /.container -->
    <footer>
        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Blog:footer", array("nb" => 3)));
        echo " ";
        // line 78
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
        // line 87
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "  </body>
</html>
";
        
        $__internal_272f0a809036dec19b5153e48ce0176109ac0191574ae39fc8cca1a98d81b4aa->leave($__internal_272f0a809036dec19b5153e48ce0176109ac0191574ae39fc8cca1a98d81b4aa_prof);

        
        $__internal_ffd0724856e3195a07dd7d6187538d6c6c8fb50bd1cc3cd695bdac797ee3e9a2->leave($__internal_ffd0724856e3195a07dd7d6187538d6c6c8fb50bd1cc3cd695bdac797ee3e9a2_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_6764f23060f193c16cafd37910703a529846b949fba6e0cc117ab4c1ff655e14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6764f23060f193c16cafd37910703a529846b949fba6e0cc117ab4c1ff655e14->enter($__internal_6764f23060f193c16cafd37910703a529846b949fba6e0cc117ab4c1ff655e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5d2e2b30dd56a30f942e9bb40e44fd81ce41fe5ff15304e81e306dd388d51b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d2e2b30dd56a30f942e9bb40e44fd81ce41fe5ff15304e81e306dd388d51b5f->enter($__internal_5d2e2b30dd56a30f942e9bb40e44fd81ce41fe5ff15304e81e306dd388d51b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5d2e2b30dd56a30f942e9bb40e44fd81ce41fe5ff15304e81e306dd388d51b5f->leave($__internal_5d2e2b30dd56a30f942e9bb40e44fd81ce41fe5ff15304e81e306dd388d51b5f_prof);

        
        $__internal_6764f23060f193c16cafd37910703a529846b949fba6e0cc117ab4c1ff655e14->leave($__internal_6764f23060f193c16cafd37910703a529846b949fba6e0cc117ab4c1ff655e14_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4c1ce5ba4f3b92245b512c272402c923cec9fae7f6571f8d790620cdc40c32b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c1ce5ba4f3b92245b512c272402c923cec9fae7f6571f8d790620cdc40c32b2->enter($__internal_4c1ce5ba4f3b92245b512c272402c923cec9fae7f6571f8d790620cdc40c32b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_772458a3b0521ee7f481d2e1869a0bc6c77282b855900da04c41b13ab0192816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_772458a3b0521ee7f481d2e1869a0bc6c77282b855900da04c41b13ab0192816->enter($__internal_772458a3b0521ee7f481d2e1869a0bc6c77282b855900da04c41b13ab0192816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_772458a3b0521ee7f481d2e1869a0bc6c77282b855900da04c41b13ab0192816->leave($__internal_772458a3b0521ee7f481d2e1869a0bc6c77282b855900da04c41b13ab0192816_prof);

        
        $__internal_4c1ce5ba4f3b92245b512c272402c923cec9fae7f6571f8d790620cdc40c32b2->leave($__internal_4c1ce5ba4f3b92245b512c272402c923cec9fae7f6571f8d790620cdc40c32b2_prof);

    }

    // line 71
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7986dbe612559cefa55b5b0893c38b1fa63e4fd3b37877e21828c0536942a26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7986dbe612559cefa55b5b0893c38b1fa63e4fd3b37877e21828c0536942a26->enter($__internal_e7986dbe612559cefa55b5b0893c38b1fa63e4fd3b37877e21828c0536942a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c6d0f1c5b8effc72b68405e808ff19e35935cb42ea31de3187b8ba80d66cfa7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d0f1c5b8effc72b68405e808ff19e35935cb42ea31de3187b8ba80d66cfa7d->enter($__internal_c6d0f1c5b8effc72b68405e808ff19e35935cb42ea31de3187b8ba80d66cfa7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c6d0f1c5b8effc72b68405e808ff19e35935cb42ea31de3187b8ba80d66cfa7d->leave($__internal_c6d0f1c5b8effc72b68405e808ff19e35935cb42ea31de3187b8ba80d66cfa7d_prof);

        
        $__internal_e7986dbe612559cefa55b5b0893c38b1fa63e4fd3b37877e21828c0536942a26->leave($__internal_e7986dbe612559cefa55b5b0893c38b1fa63e4fd3b37877e21828c0536942a26_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_70c7b1636d6ea3b02d2efdb4fb3ec25efb2159fff7c2f4c65ca17bc202a89fb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70c7b1636d6ea3b02d2efdb4fb3ec25efb2159fff7c2f4c65ca17bc202a89fb6->enter($__internal_70c7b1636d6ea3b02d2efdb4fb3ec25efb2159fff7c2f4c65ca17bc202a89fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b771cf90a7b80a36edc4e78ff80c8cc1218b0e678bd6ad5f787d7cd3ba951435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b771cf90a7b80a36edc4e78ff80c8cc1218b0e678bd6ad5f787d7cd3ba951435->enter($__internal_b771cf90a7b80a36edc4e78ff80c8cc1218b0e678bd6ad5f787d7cd3ba951435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b771cf90a7b80a36edc4e78ff80c8cc1218b0e678bd6ad5f787d7cd3ba951435->leave($__internal_b771cf90a7b80a36edc4e78ff80c8cc1218b0e678bd6ad5f787d7cd3ba951435_prof);

        
        $__internal_70c7b1636d6ea3b02d2efdb4fb3ec25efb2159fff7c2f4c65ca17bc202a89fb6->leave($__internal_70c7b1636d6ea3b02d2efdb4fb3ec25efb2159fff7c2f4c65ca17bc202a89fb6_prof);

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
        return array (  274 => 87,  257 => 71,  240 => 14,  222 => 12,  210 => 88,  208 => 87,  195 => 78,  192 => 77,  185 => 72,  183 => 71,  178 => 69,  167 => 60,  158 => 58,  155 => 57,  151 => 55,  145 => 54,  143 => 53,  133 => 50,  125 => 49,  122 => 48,  120 => 47,  111 => 45,  103 => 44,  95 => 43,  87 => 42,  82 => 40,  58 => 19,  52 => 15,  50 => 14,  45 => 12,  40 => 10,  29 => 1,);
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
            {{ knp_menu_render('AppBundle:Builder:mainMenu') }}
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
