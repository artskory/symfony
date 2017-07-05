<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_35b9553212d97732c5d1e0a63aee74b190c5fd77054f0424767b2b1d43f5e0f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e237e341e22ba551e35bc837a5e641879b3a279ad096857f14dd614fc9d2a56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e237e341e22ba551e35bc837a5e641879b3a279ad096857f14dd614fc9d2a56->enter($__internal_1e237e341e22ba551e35bc837a5e641879b3a279ad096857f14dd614fc9d2a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_07a951a09f2affbd7974057b9218a4ff0f97a5cf6b264ad08db69b5544bbfa99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07a951a09f2affbd7974057b9218a4ff0f97a5cf6b264ad08db69b5544bbfa99->enter($__internal_07a951a09f2affbd7974057b9218a4ff0f97a5cf6b264ad08db69b5544bbfa99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('radio_label', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 220
        echo "
";
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('button_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('choice_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('date_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_1e237e341e22ba551e35bc837a5e641879b3a279ad096857f14dd614fc9d2a56->leave($__internal_1e237e341e22ba551e35bc837a5e641879b3a279ad096857f14dd614fc9d2a56_prof);

        
        $__internal_07a951a09f2affbd7974057b9218a4ff0f97a5cf6b264ad08db69b5544bbfa99->leave($__internal_07a951a09f2affbd7974057b9218a4ff0f97a5cf6b264ad08db69b5544bbfa99_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_2df67283dce9121f56f2d881c9e8bf94f8d5d5803b7c30b20c0d5ca908f7867d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2df67283dce9121f56f2d881c9e8bf94f8d5d5803b7c30b20c0d5ca908f7867d->enter($__internal_2df67283dce9121f56f2d881c9e8bf94f8d5d5803b7c30b20c0d5ca908f7867d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_8ede075cf60bfe514569693daf11486b270879ecbe3d88f01c49c5d4973b39a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ede075cf60bfe514569693daf11486b270879ecbe3d88f01c49c5d4973b39a3->enter($__internal_8ede075cf60bfe514569693daf11486b270879ecbe3d88f01c49c5d4973b39a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_8ede075cf60bfe514569693daf11486b270879ecbe3d88f01c49c5d4973b39a3->leave($__internal_8ede075cf60bfe514569693daf11486b270879ecbe3d88f01c49c5d4973b39a3_prof);

        
        $__internal_2df67283dce9121f56f2d881c9e8bf94f8d5d5803b7c30b20c0d5ca908f7867d->leave($__internal_2df67283dce9121f56f2d881c9e8bf94f8d5d5803b7c30b20c0d5ca908f7867d_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_8993ac9259b8121eb17fb98c7a709ff9c4b2950a1a2183d3bc665f9e36270752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8993ac9259b8121eb17fb98c7a709ff9c4b2950a1a2183d3bc665f9e36270752->enter($__internal_8993ac9259b8121eb17fb98c7a709ff9c4b2950a1a2183d3bc665f9e36270752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_e05e5ab13a5febe2cd9d5f31bf36f904c2352637b7d15d993b80e9dd1a83a391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05e5ab13a5febe2cd9d5f31bf36f904c2352637b7d15d993b80e9dd1a83a391->enter($__internal_e05e5ab13a5febe2cd9d5f31bf36f904c2352637b7d15d993b80e9dd1a83a391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_e05e5ab13a5febe2cd9d5f31bf36f904c2352637b7d15d993b80e9dd1a83a391->leave($__internal_e05e5ab13a5febe2cd9d5f31bf36f904c2352637b7d15d993b80e9dd1a83a391_prof);

        
        $__internal_8993ac9259b8121eb17fb98c7a709ff9c4b2950a1a2183d3bc665f9e36270752->leave($__internal_8993ac9259b8121eb17fb98c7a709ff9c4b2950a1a2183d3bc665f9e36270752_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_8ea95474606a97fecd06bf9d3e320bb7ad58762db3f0fc3a614bc1e58b03c29f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ea95474606a97fecd06bf9d3e320bb7ad58762db3f0fc3a614bc1e58b03c29f->enter($__internal_8ea95474606a97fecd06bf9d3e320bb7ad58762db3f0fc3a614bc1e58b03c29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_4ee595d349c2d043b18e07e559ad7688a93fbd1bf368b67ac9c63ac52d33fee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ee595d349c2d043b18e07e559ad7688a93fbd1bf368b67ac9c63ac52d33fee9->enter($__internal_4ee595d349c2d043b18e07e559ad7688a93fbd1bf368b67ac9c63ac52d33fee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_4ee595d349c2d043b18e07e559ad7688a93fbd1bf368b67ac9c63ac52d33fee9->leave($__internal_4ee595d349c2d043b18e07e559ad7688a93fbd1bf368b67ac9c63ac52d33fee9_prof);

        
        $__internal_8ea95474606a97fecd06bf9d3e320bb7ad58762db3f0fc3a614bc1e58b03c29f->leave($__internal_8ea95474606a97fecd06bf9d3e320bb7ad58762db3f0fc3a614bc1e58b03c29f_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_4f60ca2aa41dfc2a16306c96ff4ec0f42049ebd5cd03787ff2dc7928183528d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f60ca2aa41dfc2a16306c96ff4ec0f42049ebd5cd03787ff2dc7928183528d8->enter($__internal_4f60ca2aa41dfc2a16306c96ff4ec0f42049ebd5cd03787ff2dc7928183528d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_bbb14c69a8c7119d5813bc3611761d4634c3cf73c21d14d78980c28f824bf3bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbb14c69a8c7119d5813bc3611761d4634c3cf73c21d14d78980c28f824bf3bc->enter($__internal_bbb14c69a8c7119d5813bc3611761d4634c3cf73c21d14d78980c28f824bf3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_712af79b80b24d61fa16d089f5232d08b37ec28a8dd556cac492489f2301f83d = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_592e566533870c57c1aa7f67db812555c912cec149b8ddb833ea8f2a49d0cf08 = "{{") && ('' === $__internal_592e566533870c57c1aa7f67db812555c912cec149b8ddb833ea8f2a49d0cf08 || 0 === strpos($__internal_712af79b80b24d61fa16d089f5232d08b37ec28a8dd556cac492489f2301f83d, $__internal_592e566533870c57c1aa7f67db812555c912cec149b8ddb833ea8f2a49d0cf08)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_bbb14c69a8c7119d5813bc3611761d4634c3cf73c21d14d78980c28f824bf3bc->leave($__internal_bbb14c69a8c7119d5813bc3611761d4634c3cf73c21d14d78980c28f824bf3bc_prof);

        
        $__internal_4f60ca2aa41dfc2a16306c96ff4ec0f42049ebd5cd03787ff2dc7928183528d8->leave($__internal_4f60ca2aa41dfc2a16306c96ff4ec0f42049ebd5cd03787ff2dc7928183528d8_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_7d1f18bb6cad6638679992896e272401d8b214d3cbd2d6afe1269a82cf920b76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d1f18bb6cad6638679992896e272401d8b214d3cbd2d6afe1269a82cf920b76->enter($__internal_7d1f18bb6cad6638679992896e272401d8b214d3cbd2d6afe1269a82cf920b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_fad0d4b2d0df76f0b623135f5acf87f451dca19fe0d53fb66751d7fe3e177998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fad0d4b2d0df76f0b623135f5acf87f451dca19fe0d53fb66751d7fe3e177998->enter($__internal_fad0d4b2d0df76f0b623135f5acf87f451dca19fe0d53fb66751d7fe3e177998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_fad0d4b2d0df76f0b623135f5acf87f451dca19fe0d53fb66751d7fe3e177998->leave($__internal_fad0d4b2d0df76f0b623135f5acf87f451dca19fe0d53fb66751d7fe3e177998_prof);

        
        $__internal_7d1f18bb6cad6638679992896e272401d8b214d3cbd2d6afe1269a82cf920b76->leave($__internal_7d1f18bb6cad6638679992896e272401d8b214d3cbd2d6afe1269a82cf920b76_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_85269914ba7c6c777aef6b15b63b97145d0084886b31c2a36f51b374c841bd07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85269914ba7c6c777aef6b15b63b97145d0084886b31c2a36f51b374c841bd07->enter($__internal_85269914ba7c6c777aef6b15b63b97145d0084886b31c2a36f51b374c841bd07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_4d092e6dbb3940de65ce5e0c6e4877eefaea996aae5775ed011b50e9c9de6af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d092e6dbb3940de65ce5e0c6e4877eefaea996aae5775ed011b50e9c9de6af1->enter($__internal_4d092e6dbb3940de65ce5e0c6e4877eefaea996aae5775ed011b50e9c9de6af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_4d092e6dbb3940de65ce5e0c6e4877eefaea996aae5775ed011b50e9c9de6af1->leave($__internal_4d092e6dbb3940de65ce5e0c6e4877eefaea996aae5775ed011b50e9c9de6af1_prof);

        
        $__internal_85269914ba7c6c777aef6b15b63b97145d0084886b31c2a36f51b374c841bd07->leave($__internal_85269914ba7c6c777aef6b15b63b97145d0084886b31c2a36f51b374c841bd07_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_2c7502df10f0c0a580779e07d3160a9b5d6befc81b997b663dcc232d5b596628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c7502df10f0c0a580779e07d3160a9b5d6befc81b997b663dcc232d5b596628->enter($__internal_2c7502df10f0c0a580779e07d3160a9b5d6befc81b997b663dcc232d5b596628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_1712ccff299ef37f6ae16a9e42fac1e4b2e3eb098ef1787bd7acaaf4893fc3a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1712ccff299ef37f6ae16a9e42fac1e4b2e3eb098ef1787bd7acaaf4893fc3a8->enter($__internal_1712ccff299ef37f6ae16a9e42fac1e4b2e3eb098ef1787bd7acaaf4893fc3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_1712ccff299ef37f6ae16a9e42fac1e4b2e3eb098ef1787bd7acaaf4893fc3a8->leave($__internal_1712ccff299ef37f6ae16a9e42fac1e4b2e3eb098ef1787bd7acaaf4893fc3a8_prof);

        
        $__internal_2c7502df10f0c0a580779e07d3160a9b5d6befc81b997b663dcc232d5b596628->leave($__internal_2c7502df10f0c0a580779e07d3160a9b5d6befc81b997b663dcc232d5b596628_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_86c6b671f143a3da89b9442c0e8b58627004e935f494a5cb1cef9f3bf762b2e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86c6b671f143a3da89b9442c0e8b58627004e935f494a5cb1cef9f3bf762b2e9->enter($__internal_86c6b671f143a3da89b9442c0e8b58627004e935f494a5cb1cef9f3bf762b2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_e802d1d68df6965d1507c23acf9cf3e67bd9e0fcb2a31690a852424cb58b1646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e802d1d68df6965d1507c23acf9cf3e67bd9e0fcb2a31690a852424cb58b1646->enter($__internal_e802d1d68df6965d1507c23acf9cf3e67bd9e0fcb2a31690a852424cb58b1646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_e802d1d68df6965d1507c23acf9cf3e67bd9e0fcb2a31690a852424cb58b1646->leave($__internal_e802d1d68df6965d1507c23acf9cf3e67bd9e0fcb2a31690a852424cb58b1646_prof);

        
        $__internal_86c6b671f143a3da89b9442c0e8b58627004e935f494a5cb1cef9f3bf762b2e9->leave($__internal_86c6b671f143a3da89b9442c0e8b58627004e935f494a5cb1cef9f3bf762b2e9_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_b7db134ddf4a3c4332eed606cd24f6683d152d0a72063ff4f3e31366cb6a50de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7db134ddf4a3c4332eed606cd24f6683d152d0a72063ff4f3e31366cb6a50de->enter($__internal_b7db134ddf4a3c4332eed606cd24f6683d152d0a72063ff4f3e31366cb6a50de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_af2d46479e846aaf6a84fe805098dfa1a3c86b1b33811952017cd8aa3af9a9d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af2d46479e846aaf6a84fe805098dfa1a3c86b1b33811952017cd8aa3af9a9d7->enter($__internal_af2d46479e846aaf6a84fe805098dfa1a3c86b1b33811952017cd8aa3af9a9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_af2d46479e846aaf6a84fe805098dfa1a3c86b1b33811952017cd8aa3af9a9d7->leave($__internal_af2d46479e846aaf6a84fe805098dfa1a3c86b1b33811952017cd8aa3af9a9d7_prof);

        
        $__internal_b7db134ddf4a3c4332eed606cd24f6683d152d0a72063ff4f3e31366cb6a50de->leave($__internal_b7db134ddf4a3c4332eed606cd24f6683d152d0a72063ff4f3e31366cb6a50de_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_6747942f40d7823d01cdc684fca35f65ce6aeaa1e933ce9b1d0cc98e89461550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6747942f40d7823d01cdc684fca35f65ce6aeaa1e933ce9b1d0cc98e89461550->enter($__internal_6747942f40d7823d01cdc684fca35f65ce6aeaa1e933ce9b1d0cc98e89461550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_e5a53eff3c56136fb32f5752a1d341878dce5ea11435393139f16d48c6bb16e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5a53eff3c56136fb32f5752a1d341878dce5ea11435393139f16d48c6bb16e6->enter($__internal_e5a53eff3c56136fb32f5752a1d341878dce5ea11435393139f16d48c6bb16e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_e5a53eff3c56136fb32f5752a1d341878dce5ea11435393139f16d48c6bb16e6->leave($__internal_e5a53eff3c56136fb32f5752a1d341878dce5ea11435393139f16d48c6bb16e6_prof);

        
        $__internal_6747942f40d7823d01cdc684fca35f65ce6aeaa1e933ce9b1d0cc98e89461550->leave($__internal_6747942f40d7823d01cdc684fca35f65ce6aeaa1e933ce9b1d0cc98e89461550_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_bf16cddd7835baf8c89c3e137d47ae80762b181ebc3990ed903640da81ebc75a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf16cddd7835baf8c89c3e137d47ae80762b181ebc3990ed903640da81ebc75a->enter($__internal_bf16cddd7835baf8c89c3e137d47ae80762b181ebc3990ed903640da81ebc75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_5e49ac81118acd29311a5e5a7568bdb98432ce9172ddad7a3b112c95e4aacd17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e49ac81118acd29311a5e5a7568bdb98432ce9172ddad7a3b112c95e4aacd17->enter($__internal_5e49ac81118acd29311a5e5a7568bdb98432ce9172ddad7a3b112c95e4aacd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_5e49ac81118acd29311a5e5a7568bdb98432ce9172ddad7a3b112c95e4aacd17->leave($__internal_5e49ac81118acd29311a5e5a7568bdb98432ce9172ddad7a3b112c95e4aacd17_prof);

        
        $__internal_bf16cddd7835baf8c89c3e137d47ae80762b181ebc3990ed903640da81ebc75a->leave($__internal_bf16cddd7835baf8c89c3e137d47ae80762b181ebc3990ed903640da81ebc75a_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_76f768aa8c0e49662823621bcded33c9e89813abd4b03a4d603775b6e113c442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76f768aa8c0e49662823621bcded33c9e89813abd4b03a4d603775b6e113c442->enter($__internal_76f768aa8c0e49662823621bcded33c9e89813abd4b03a4d603775b6e113c442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_92ca4d2cbe20f6e97913f552a30592bae6d9c26bfe99a2d57704bc71efc58ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92ca4d2cbe20f6e97913f552a30592bae6d9c26bfe99a2d57704bc71efc58ee8->enter($__internal_92ca4d2cbe20f6e97913f552a30592bae6d9c26bfe99a2d57704bc71efc58ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_92ca4d2cbe20f6e97913f552a30592bae6d9c26bfe99a2d57704bc71efc58ee8->leave($__internal_92ca4d2cbe20f6e97913f552a30592bae6d9c26bfe99a2d57704bc71efc58ee8_prof);

        
        $__internal_76f768aa8c0e49662823621bcded33c9e89813abd4b03a4d603775b6e113c442->leave($__internal_76f768aa8c0e49662823621bcded33c9e89813abd4b03a4d603775b6e113c442_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_957b88630111481b8108362714bfd199b6c3f8c3aec5da74b8e14312667c793f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_957b88630111481b8108362714bfd199b6c3f8c3aec5da74b8e14312667c793f->enter($__internal_957b88630111481b8108362714bfd199b6c3f8c3aec5da74b8e14312667c793f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_add6abaa779071d5f45b8828423182582720b20c8f3203f141cc494f97a69817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add6abaa779071d5f45b8828423182582720b20c8f3203f141cc494f97a69817->enter($__internal_add6abaa779071d5f45b8828423182582720b20c8f3203f141cc494f97a69817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_add6abaa779071d5f45b8828423182582720b20c8f3203f141cc494f97a69817->leave($__internal_add6abaa779071d5f45b8828423182582720b20c8f3203f141cc494f97a69817_prof);

        
        $__internal_957b88630111481b8108362714bfd199b6c3f8c3aec5da74b8e14312667c793f->leave($__internal_957b88630111481b8108362714bfd199b6c3f8c3aec5da74b8e14312667c793f_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_0b10871be5fb50daba93bd33701565fd4fcb60f2d7033daef049c4378f5cfab5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b10871be5fb50daba93bd33701565fd4fcb60f2d7033daef049c4378f5cfab5->enter($__internal_0b10871be5fb50daba93bd33701565fd4fcb60f2d7033daef049c4378f5cfab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_10c0c16d6b497acb5bd6d81119a57c59533b5e663445ec4944538de1412f2cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10c0c16d6b497acb5bd6d81119a57c59533b5e663445ec4944538de1412f2cff->enter($__internal_10c0c16d6b497acb5bd6d81119a57c59533b5e663445ec4944538de1412f2cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_10c0c16d6b497acb5bd6d81119a57c59533b5e663445ec4944538de1412f2cff->leave($__internal_10c0c16d6b497acb5bd6d81119a57c59533b5e663445ec4944538de1412f2cff_prof);

        
        $__internal_0b10871be5fb50daba93bd33701565fd4fcb60f2d7033daef049c4378f5cfab5->leave($__internal_0b10871be5fb50daba93bd33701565fd4fcb60f2d7033daef049c4378f5cfab5_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_5e1fa449938880d07d00a5426b58d6f9ad6c3216ec9fe759a84ed58c0c9f8eb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e1fa449938880d07d00a5426b58d6f9ad6c3216ec9fe759a84ed58c0c9f8eb9->enter($__internal_5e1fa449938880d07d00a5426b58d6f9ad6c3216ec9fe759a84ed58c0c9f8eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_48e1eefc8e4e7ca952d3307dcd0801cdd63afbebaebfb4bebe622b1d79087fbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48e1eefc8e4e7ca952d3307dcd0801cdd63afbebaebfb4bebe622b1d79087fbb->enter($__internal_48e1eefc8e4e7ca952d3307dcd0801cdd63afbebaebfb4bebe622b1d79087fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_48e1eefc8e4e7ca952d3307dcd0801cdd63afbebaebfb4bebe622b1d79087fbb->leave($__internal_48e1eefc8e4e7ca952d3307dcd0801cdd63afbebaebfb4bebe622b1d79087fbb_prof);

        
        $__internal_5e1fa449938880d07d00a5426b58d6f9ad6c3216ec9fe759a84ed58c0c9f8eb9->leave($__internal_5e1fa449938880d07d00a5426b58d6f9ad6c3216ec9fe759a84ed58c0c9f8eb9_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_355b44e72cfd23c4f1ba67208c585e6fb8d5ae4aecb15d6a452d970bc43357e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_355b44e72cfd23c4f1ba67208c585e6fb8d5ae4aecb15d6a452d970bc43357e0->enter($__internal_355b44e72cfd23c4f1ba67208c585e6fb8d5ae4aecb15d6a452d970bc43357e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_b675db248330ccb39dbdf123e7627623d78627063c58bc93acef1562c4303d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b675db248330ccb39dbdf123e7627623d78627063c58bc93acef1562c4303d9a->enter($__internal_b675db248330ccb39dbdf123e7627623d78627063c58bc93acef1562c4303d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_b675db248330ccb39dbdf123e7627623d78627063c58bc93acef1562c4303d9a->leave($__internal_b675db248330ccb39dbdf123e7627623d78627063c58bc93acef1562c4303d9a_prof);

        
        $__internal_355b44e72cfd23c4f1ba67208c585e6fb8d5ae4aecb15d6a452d970bc43357e0->leave($__internal_355b44e72cfd23c4f1ba67208c585e6fb8d5ae4aecb15d6a452d970bc43357e0_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_e9de6243863c4a029542e361c5ebe404eda4397f3f0ce778ce4655d15f27d937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9de6243863c4a029542e361c5ebe404eda4397f3f0ce778ce4655d15f27d937->enter($__internal_e9de6243863c4a029542e361c5ebe404eda4397f3f0ce778ce4655d15f27d937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_527707c7e3be1d8b9b31d5b420ed30422957f30db6dc60e5bfe7f6bb9db61c88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527707c7e3be1d8b9b31d5b420ed30422957f30db6dc60e5bfe7f6bb9db61c88->enter($__internal_527707c7e3be1d8b9b31d5b420ed30422957f30db6dc60e5bfe7f6bb9db61c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_527707c7e3be1d8b9b31d5b420ed30422957f30db6dc60e5bfe7f6bb9db61c88->leave($__internal_527707c7e3be1d8b9b31d5b420ed30422957f30db6dc60e5bfe7f6bb9db61c88_prof);

        
        $__internal_e9de6243863c4a029542e361c5ebe404eda4397f3f0ce778ce4655d15f27d937->leave($__internal_e9de6243863c4a029542e361c5ebe404eda4397f3f0ce778ce4655d15f27d937_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_55c7c145345d95e0970106df4ed704197ca364099ff7811a538025dd9034f76b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55c7c145345d95e0970106df4ed704197ca364099ff7811a538025dd9034f76b->enter($__internal_55c7c145345d95e0970106df4ed704197ca364099ff7811a538025dd9034f76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_6fb914b7b8ac1f0d596cb8f40cd75d872ff611cb63c7ea6af656a9e6e9848a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb914b7b8ac1f0d596cb8f40cd75d872ff611cb63c7ea6af656a9e6e9848a7f->enter($__internal_6fb914b7b8ac1f0d596cb8f40cd75d872ff611cb63c7ea6af656a9e6e9848a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 209
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 216
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_6fb914b7b8ac1f0d596cb8f40cd75d872ff611cb63c7ea6af656a9e6e9848a7f->leave($__internal_6fb914b7b8ac1f0d596cb8f40cd75d872ff611cb63c7ea6af656a9e6e9848a7f_prof);

        
        $__internal_55c7c145345d95e0970106df4ed704197ca364099ff7811a538025dd9034f76b->leave($__internal_55c7c145345d95e0970106df4ed704197ca364099ff7811a538025dd9034f76b_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c34887cbe0d1311811a2d685adee58a17d826e9d50bdf5c973c7af91ea579384 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c34887cbe0d1311811a2d685adee58a17d826e9d50bdf5c973c7af91ea579384->enter($__internal_c34887cbe0d1311811a2d685adee58a17d826e9d50bdf5c973c7af91ea579384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_0eb13e822c8b8123bea76b52c5677326b57edea19457657ab703119f71bd9672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eb13e822c8b8123bea76b52c5677326b57edea19457657ab703119f71bd9672->enter($__internal_0eb13e822c8b8123bea76b52c5677326b57edea19457657ab703119f71bd9672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_0eb13e822c8b8123bea76b52c5677326b57edea19457657ab703119f71bd9672->leave($__internal_0eb13e822c8b8123bea76b52c5677326b57edea19457657ab703119f71bd9672_prof);

        
        $__internal_c34887cbe0d1311811a2d685adee58a17d826e9d50bdf5c973c7af91ea579384->leave($__internal_c34887cbe0d1311811a2d685adee58a17d826e9d50bdf5c973c7af91ea579384_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_f6d0494972726bf66baccda93a3b6f52911a6115fb29cb2f6f0e5a2409b89748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6d0494972726bf66baccda93a3b6f52911a6115fb29cb2f6f0e5a2409b89748->enter($__internal_f6d0494972726bf66baccda93a3b6f52911a6115fb29cb2f6f0e5a2409b89748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_64764e8df4f5b78c2071a94ac70e7caa733bd765bb3c1c4fafb4131c4e0a8c8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64764e8df4f5b78c2071a94ac70e7caa733bd765bb3c1c4fafb4131c4e0a8c8f->enter($__internal_64764e8df4f5b78c2071a94ac70e7caa733bd765bb3c1c4fafb4131c4e0a8c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_64764e8df4f5b78c2071a94ac70e7caa733bd765bb3c1c4fafb4131c4e0a8c8f->leave($__internal_64764e8df4f5b78c2071a94ac70e7caa733bd765bb3c1c4fafb4131c4e0a8c8f_prof);

        
        $__internal_f6d0494972726bf66baccda93a3b6f52911a6115fb29cb2f6f0e5a2409b89748->leave($__internal_f6d0494972726bf66baccda93a3b6f52911a6115fb29cb2f6f0e5a2409b89748_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_aa0ce85693552a6f3253332a615563f7b8418521e3fe11438cd7c023f08f98e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa0ce85693552a6f3253332a615563f7b8418521e3fe11438cd7c023f08f98e1->enter($__internal_aa0ce85693552a6f3253332a615563f7b8418521e3fe11438cd7c023f08f98e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_9cdc9ef7d863377eaf6db90dccee5027e905e5fc9944ed38e8c4ebfc9a34f34f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cdc9ef7d863377eaf6db90dccee5027e905e5fc9944ed38e8c4ebfc9a34f34f->enter($__internal_9cdc9ef7d863377eaf6db90dccee5027e905e5fc9944ed38e8c4ebfc9a34f34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9cdc9ef7d863377eaf6db90dccee5027e905e5fc9944ed38e8c4ebfc9a34f34f->leave($__internal_9cdc9ef7d863377eaf6db90dccee5027e905e5fc9944ed38e8c4ebfc9a34f34f_prof);

        
        $__internal_aa0ce85693552a6f3253332a615563f7b8418521e3fe11438cd7c023f08f98e1->leave($__internal_aa0ce85693552a6f3253332a615563f7b8418521e3fe11438cd7c023f08f98e1_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_719d3f3e32ee2d74607a74c08981e27f4db88ce8a5a1582a53231e6d2886422f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_719d3f3e32ee2d74607a74c08981e27f4db88ce8a5a1582a53231e6d2886422f->enter($__internal_719d3f3e32ee2d74607a74c08981e27f4db88ce8a5a1582a53231e6d2886422f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_ef9fd1a9274b49237da7bc93a1c37ec9f41d608de9ac1dcfde6967f5408401d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef9fd1a9274b49237da7bc93a1c37ec9f41d608de9ac1dcfde6967f5408401d0->enter($__internal_ef9fd1a9274b49237da7bc93a1c37ec9f41d608de9ac1dcfde6967f5408401d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ef9fd1a9274b49237da7bc93a1c37ec9f41d608de9ac1dcfde6967f5408401d0->leave($__internal_ef9fd1a9274b49237da7bc93a1c37ec9f41d608de9ac1dcfde6967f5408401d0_prof);

        
        $__internal_719d3f3e32ee2d74607a74c08981e27f4db88ce8a5a1582a53231e6d2886422f->leave($__internal_719d3f3e32ee2d74607a74c08981e27f4db88ce8a5a1582a53231e6d2886422f_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_acb671292c4f346328719e3ad843b73b549ebde3f42438108f6514ab90e167a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acb671292c4f346328719e3ad843b73b549ebde3f42438108f6514ab90e167a7->enter($__internal_acb671292c4f346328719e3ad843b73b549ebde3f42438108f6514ab90e167a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_23fbb0fbee6771253a8de292c0cb416d143e88ef6fc5c775b4c820afe3ed5110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23fbb0fbee6771253a8de292c0cb416d143e88ef6fc5c775b4c820afe3ed5110->enter($__internal_23fbb0fbee6771253a8de292c0cb416d143e88ef6fc5c775b4c820afe3ed5110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_23fbb0fbee6771253a8de292c0cb416d143e88ef6fc5c775b4c820afe3ed5110->leave($__internal_23fbb0fbee6771253a8de292c0cb416d143e88ef6fc5c775b4c820afe3ed5110_prof);

        
        $__internal_acb671292c4f346328719e3ad843b73b549ebde3f42438108f6514ab90e167a7->leave($__internal_acb671292c4f346328719e3ad843b73b549ebde3f42438108f6514ab90e167a7_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_08343e74351d8baa5c194c5f4aab6ece326d00d3e098ed57ca2452443cec230a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08343e74351d8baa5c194c5f4aab6ece326d00d3e098ed57ca2452443cec230a->enter($__internal_08343e74351d8baa5c194c5f4aab6ece326d00d3e098ed57ca2452443cec230a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_52cfbe02ac4c97d24ec086f7e3539f86a07e1231117e1ab70c1ee70ccae89076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52cfbe02ac4c97d24ec086f7e3539f86a07e1231117e1ab70c1ee70ccae89076->enter($__internal_52cfbe02ac4c97d24ec086f7e3539f86a07e1231117e1ab70c1ee70ccae89076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_52cfbe02ac4c97d24ec086f7e3539f86a07e1231117e1ab70c1ee70ccae89076->leave($__internal_52cfbe02ac4c97d24ec086f7e3539f86a07e1231117e1ab70c1ee70ccae89076_prof);

        
        $__internal_08343e74351d8baa5c194c5f4aab6ece326d00d3e098ed57ca2452443cec230a->leave($__internal_08343e74351d8baa5c194c5f4aab6ece326d00d3e098ed57ca2452443cec230a_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_ef2c30a80c7712523eea443e1594b275dcde2eca9d44cdeb7f4e2fe5a2f1521d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef2c30a80c7712523eea443e1594b275dcde2eca9d44cdeb7f4e2fe5a2f1521d->enter($__internal_ef2c30a80c7712523eea443e1594b275dcde2eca9d44cdeb7f4e2fe5a2f1521d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_759a78d3cb2d6eb05b9c10663f80e746837c6ecd823f471e32ab76b6892d3b75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_759a78d3cb2d6eb05b9c10663f80e746837c6ecd823f471e32ab76b6892d3b75->enter($__internal_759a78d3cb2d6eb05b9c10663f80e746837c6ecd823f471e32ab76b6892d3b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_759a78d3cb2d6eb05b9c10663f80e746837c6ecd823f471e32ab76b6892d3b75->leave($__internal_759a78d3cb2d6eb05b9c10663f80e746837c6ecd823f471e32ab76b6892d3b75_prof);

        
        $__internal_ef2c30a80c7712523eea443e1594b275dcde2eca9d44cdeb7f4e2fe5a2f1521d->leave($__internal_ef2c30a80c7712523eea443e1594b275dcde2eca9d44cdeb7f4e2fe5a2f1521d_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_591afd7ba004060cf44baeb329684786a35c4f38300d0ee589e78901122a1a1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_591afd7ba004060cf44baeb329684786a35c4f38300d0ee589e78901122a1a1a->enter($__internal_591afd7ba004060cf44baeb329684786a35c4f38300d0ee589e78901122a1a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_a20270de020b08fbd7b683c661e4f40a054af869e9818940650b8b531c84c829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a20270de020b08fbd7b683c661e4f40a054af869e9818940650b8b531c84c829->enter($__internal_a20270de020b08fbd7b683c661e4f40a054af869e9818940650b8b531c84c829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_a20270de020b08fbd7b683c661e4f40a054af869e9818940650b8b531c84c829->leave($__internal_a20270de020b08fbd7b683c661e4f40a054af869e9818940650b8b531c84c829_prof);

        
        $__internal_591afd7ba004060cf44baeb329684786a35c4f38300d0ee589e78901122a1a1a->leave($__internal_591afd7ba004060cf44baeb329684786a35c4f38300d0ee589e78901122a1a1a_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_90ecd3f9bc5737e23a06f8a67b863b4bbb07bcf61312f95a6f030f586c8c7068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90ecd3f9bc5737e23a06f8a67b863b4bbb07bcf61312f95a6f030f586c8c7068->enter($__internal_90ecd3f9bc5737e23a06f8a67b863b4bbb07bcf61312f95a6f030f586c8c7068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_90ce31567444fab4250b19c34788e475924718ea68e8ef59d546e5a4e5114835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90ce31567444fab4250b19c34788e475924718ea68e8ef59d546e5a4e5114835->enter($__internal_90ce31567444fab4250b19c34788e475924718ea68e8ef59d546e5a4e5114835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</ul>
    ";
            // line 281
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_90ce31567444fab4250b19c34788e475924718ea68e8ef59d546e5a4e5114835->leave($__internal_90ce31567444fab4250b19c34788e475924718ea68e8ef59d546e5a4e5114835_prof);

        
        $__internal_90ecd3f9bc5737e23a06f8a67b863b4bbb07bcf61312f95a6f030f586c8c7068->leave($__internal_90ecd3f9bc5737e23a06f8a67b863b4bbb07bcf61312f95a6f030f586c8c7068_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1135 => 281,  1132 => 280,  1124 => 278,  1120 => 277,  1118 => 276,  1112 => 275,  1110 => 274,  1101 => 273,  1091 => 268,  1089 => 267,  1087 => 266,  1081 => 265,  1072 => 264,  1062 => 261,  1060 => 260,  1058 => 259,  1052 => 258,  1043 => 257,  1033 => 254,  1031 => 253,  1022 => 252,  1012 => 249,  1010 => 248,  1001 => 247,  991 => 244,  989 => 243,  980 => 242,  970 => 239,  968 => 238,  959 => 237,  949 => 234,  947 => 233,  945 => 232,  936 => 231,  926 => 228,  924 => 227,  922 => 226,  920 => 225,  914 => 224,  905 => 223,  893 => 217,  889 => 216,  874 => 215,  870 => 212,  867 => 209,  866 => 208,  865 => 207,  863 => 206,  860 => 205,  857 => 204,  854 => 203,  851 => 202,  848 => 201,  845 => 200,  842 => 199,  839 => 198,  837 => 197,  828 => 196,  818 => 193,  809 => 192,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 273,  200 => 272,  197 => 270,  195 => 264,  192 => 263,  190 => 257,  187 => 256,  185 => 252,  182 => 251,  180 => 247,  177 => 246,  175 => 242,  172 => 241,  170 => 237,  167 => 236,  165 => 231,  162 => 230,  160 => 223,  157 => 222,  154 => 220,  152 => 196,  149 => 195,  147 => 192,  144 => 191,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
