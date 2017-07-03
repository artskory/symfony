<?php

/* base.html.twig */
class __TwigTemplate_dd03f72e75b3200d4e89ec1db5edbbb020123789a24f9b8560e423ea793ad5ad extends Twig_Template
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
        $__internal_464084bf7c2e37f540e2699960ae87ccc80ff9822af522e987de6a87fd981172 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_464084bf7c2e37f540e2699960ae87ccc80ff9822af522e987de6a87fd981172->enter($__internal_464084bf7c2e37f540e2699960ae87ccc80ff9822af522e987de6a87fd981172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_82f7ccda54ab04be503871879a4a3af31247194540bf5d52c475a819f33e4c77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f7ccda54ab04be503871879a4a3af31247194540bf5d52c475a819f33e4c77->enter($__internal_82f7ccda54ab04be503871879a4a3af31247194540bf5d52c475a819f33e4c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        ";
        // line 67
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "      </div>

    </div><!-- /.container -->
    <footer>
        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Blog:footer", array("nb" => 3)));
        echo " ";
        // line 73
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
        // line 82
        $this->displayBlock('javascripts', $context, $blocks);
        // line 83
        echo "  </body>
</html>
";
        
        $__internal_464084bf7c2e37f540e2699960ae87ccc80ff9822af522e987de6a87fd981172->leave($__internal_464084bf7c2e37f540e2699960ae87ccc80ff9822af522e987de6a87fd981172_prof);

        
        $__internal_82f7ccda54ab04be503871879a4a3af31247194540bf5d52c475a819f33e4c77->leave($__internal_82f7ccda54ab04be503871879a4a3af31247194540bf5d52c475a819f33e4c77_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_ada394a18f81af9997f10864a7ea1b0dd602446201193c548368c8e3670b525e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada394a18f81af9997f10864a7ea1b0dd602446201193c548368c8e3670b525e->enter($__internal_ada394a18f81af9997f10864a7ea1b0dd602446201193c548368c8e3670b525e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_447dae7d5b5c0019dea1d9ec0d8954b7460e7e8ce9691792347592f26312f29c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_447dae7d5b5c0019dea1d9ec0d8954b7460e7e8ce9691792347592f26312f29c->enter($__internal_447dae7d5b5c0019dea1d9ec0d8954b7460e7e8ce9691792347592f26312f29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_447dae7d5b5c0019dea1d9ec0d8954b7460e7e8ce9691792347592f26312f29c->leave($__internal_447dae7d5b5c0019dea1d9ec0d8954b7460e7e8ce9691792347592f26312f29c_prof);

        
        $__internal_ada394a18f81af9997f10864a7ea1b0dd602446201193c548368c8e3670b525e->leave($__internal_ada394a18f81af9997f10864a7ea1b0dd602446201193c548368c8e3670b525e_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9cb9a2bcbc68a2dea86158388906ab6e5454e6e0485cc0d7400d1b087bd422b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cb9a2bcbc68a2dea86158388906ab6e5454e6e0485cc0d7400d1b087bd422b5->enter($__internal_9cb9a2bcbc68a2dea86158388906ab6e5454e6e0485cc0d7400d1b087bd422b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4652194edf96e733794b6bd05217be8d9388d18a5cae533e1924cf76fa80e0fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4652194edf96e733794b6bd05217be8d9388d18a5cae533e1924cf76fa80e0fa->enter($__internal_4652194edf96e733794b6bd05217be8d9388d18a5cae533e1924cf76fa80e0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4652194edf96e733794b6bd05217be8d9388d18a5cae533e1924cf76fa80e0fa->leave($__internal_4652194edf96e733794b6bd05217be8d9388d18a5cae533e1924cf76fa80e0fa_prof);

        
        $__internal_9cb9a2bcbc68a2dea86158388906ab6e5454e6e0485cc0d7400d1b087bd422b5->leave($__internal_9cb9a2bcbc68a2dea86158388906ab6e5454e6e0485cc0d7400d1b087bd422b5_prof);

    }

    // line 67
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cc962f2d9c53c7bd780af0eaad260dc52a1b4af36eb9ae30bda914ffa89e44b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cc962f2d9c53c7bd780af0eaad260dc52a1b4af36eb9ae30bda914ffa89e44b->enter($__internal_5cc962f2d9c53c7bd780af0eaad260dc52a1b4af36eb9ae30bda914ffa89e44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ab40970a023f0cfe92595c25597d556ece652e45cf9b705ea0d850b7557daad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab40970a023f0cfe92595c25597d556ece652e45cf9b705ea0d850b7557daad7->enter($__internal_ab40970a023f0cfe92595c25597d556ece652e45cf9b705ea0d850b7557daad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ab40970a023f0cfe92595c25597d556ece652e45cf9b705ea0d850b7557daad7->leave($__internal_ab40970a023f0cfe92595c25597d556ece652e45cf9b705ea0d850b7557daad7_prof);

        
        $__internal_5cc962f2d9c53c7bd780af0eaad260dc52a1b4af36eb9ae30bda914ffa89e44b->leave($__internal_5cc962f2d9c53c7bd780af0eaad260dc52a1b4af36eb9ae30bda914ffa89e44b_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_96c9250d8b4617fe50fdc5bd8b5f9f4da9cfffc27e978a521ff5d16d8523d6b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96c9250d8b4617fe50fdc5bd8b5f9f4da9cfffc27e978a521ff5d16d8523d6b2->enter($__internal_96c9250d8b4617fe50fdc5bd8b5f9f4da9cfffc27e978a521ff5d16d8523d6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8645db3c38d380d69770ac3d63f8fd1e83a3b8b1dc8e83f4a4f44a95d8d70148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8645db3c38d380d69770ac3d63f8fd1e83a3b8b1dc8e83f4a4f44a95d8d70148->enter($__internal_8645db3c38d380d69770ac3d63f8fd1e83a3b8b1dc8e83f4a4f44a95d8d70148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8645db3c38d380d69770ac3d63f8fd1e83a3b8b1dc8e83f4a4f44a95d8d70148->leave($__internal_8645db3c38d380d69770ac3d63f8fd1e83a3b8b1dc8e83f4a4f44a95d8d70148_prof);

        
        $__internal_96c9250d8b4617fe50fdc5bd8b5f9f4da9cfffc27e978a521ff5d16d8523d6b2->leave($__internal_96c9250d8b4617fe50fdc5bd8b5f9f4da9cfffc27e978a521ff5d16d8523d6b2_prof);

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
        return array (  263 => 82,  246 => 67,  229 => 14,  211 => 12,  199 => 83,  197 => 82,  184 => 73,  181 => 72,  175 => 68,  173 => 67,  163 => 59,  154 => 57,  151 => 56,  147 => 54,  141 => 53,  139 => 52,  129 => 49,  121 => 48,  118 => 47,  116 => 46,  107 => 44,  99 => 43,  91 => 42,  83 => 41,  58 => 19,  52 => 15,  50 => 14,  45 => 12,  40 => 10,  29 => 1,);
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
