<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_6272e4795ba20c48be072f512dac76867e399ca0c2e75bc5f774dcfba7e20cba extends Twig_Template
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
        $__internal_82e33c1ee2916f061a0558564c09ce9bdc2e03ae8ba75be92a0db293198200b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82e33c1ee2916f061a0558564c09ce9bdc2e03ae8ba75be92a0db293198200b0->enter($__internal_82e33c1ee2916f061a0558564c09ce9bdc2e03ae8ba75be92a0db293198200b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_dd0be7cf5001369a9f75470fdaa773911d7b4d90871860acc0564e5adc016106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd0be7cf5001369a9f75470fdaa773911d7b4d90871860acc0564e5adc016106->enter($__internal_dd0be7cf5001369a9f75470fdaa773911d7b4d90871860acc0564e5adc016106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_82e33c1ee2916f061a0558564c09ce9bdc2e03ae8ba75be92a0db293198200b0->leave($__internal_82e33c1ee2916f061a0558564c09ce9bdc2e03ae8ba75be92a0db293198200b0_prof);

        
        $__internal_dd0be7cf5001369a9f75470fdaa773911d7b4d90871860acc0564e5adc016106->leave($__internal_dd0be7cf5001369a9f75470fdaa773911d7b4d90871860acc0564e5adc016106_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_ff05592242a498e4bfd05943ec46938fbdab929072559658001c20e247762e56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff05592242a498e4bfd05943ec46938fbdab929072559658001c20e247762e56->enter($__internal_ff05592242a498e4bfd05943ec46938fbdab929072559658001c20e247762e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_6e090adf2f491f500f4f906643349e04422dc2b125f67ebdd372ac38ae5b9e4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e090adf2f491f500f4f906643349e04422dc2b125f67ebdd372ac38ae5b9e4c->enter($__internal_6e090adf2f491f500f4f906643349e04422dc2b125f67ebdd372ac38ae5b9e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_6e090adf2f491f500f4f906643349e04422dc2b125f67ebdd372ac38ae5b9e4c->leave($__internal_6e090adf2f491f500f4f906643349e04422dc2b125f67ebdd372ac38ae5b9e4c_prof);

        
        $__internal_ff05592242a498e4bfd05943ec46938fbdab929072559658001c20e247762e56->leave($__internal_ff05592242a498e4bfd05943ec46938fbdab929072559658001c20e247762e56_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_eaf2d4ec5cc7dfa4fefa6603ea27d90fc067600b0577b2538b770d05bcf288ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaf2d4ec5cc7dfa4fefa6603ea27d90fc067600b0577b2538b770d05bcf288ef->enter($__internal_eaf2d4ec5cc7dfa4fefa6603ea27d90fc067600b0577b2538b770d05bcf288ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_7b2c90bb4221dd8f8e6d2bdd1edc19750be00dcd9775a4996a9d5b379d7ec5df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b2c90bb4221dd8f8e6d2bdd1edc19750be00dcd9775a4996a9d5b379d7ec5df->enter($__internal_7b2c90bb4221dd8f8e6d2bdd1edc19750be00dcd9775a4996a9d5b379d7ec5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_7b2c90bb4221dd8f8e6d2bdd1edc19750be00dcd9775a4996a9d5b379d7ec5df->leave($__internal_7b2c90bb4221dd8f8e6d2bdd1edc19750be00dcd9775a4996a9d5b379d7ec5df_prof);

        
        $__internal_eaf2d4ec5cc7dfa4fefa6603ea27d90fc067600b0577b2538b770d05bcf288ef->leave($__internal_eaf2d4ec5cc7dfa4fefa6603ea27d90fc067600b0577b2538b770d05bcf288ef_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_64fb16344c18861a9bead14062bf2045af7213fbe3149eec70b94b99a82a615c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64fb16344c18861a9bead14062bf2045af7213fbe3149eec70b94b99a82a615c->enter($__internal_64fb16344c18861a9bead14062bf2045af7213fbe3149eec70b94b99a82a615c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_9fa6062a0441a29ba4011318950a883bb6b0c89f9954bea5a36cc6bea5a6fc6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa6062a0441a29ba4011318950a883bb6b0c89f9954bea5a36cc6bea5a6fc6d->enter($__internal_9fa6062a0441a29ba4011318950a883bb6b0c89f9954bea5a36cc6bea5a6fc6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_9fa6062a0441a29ba4011318950a883bb6b0c89f9954bea5a36cc6bea5a6fc6d->leave($__internal_9fa6062a0441a29ba4011318950a883bb6b0c89f9954bea5a36cc6bea5a6fc6d_prof);

        
        $__internal_64fb16344c18861a9bead14062bf2045af7213fbe3149eec70b94b99a82a615c->leave($__internal_64fb16344c18861a9bead14062bf2045af7213fbe3149eec70b94b99a82a615c_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_cfb9fec1906a063ed81a3b8386dc896445ed6982f535b04ad4c2d99af0fc8b52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfb9fec1906a063ed81a3b8386dc896445ed6982f535b04ad4c2d99af0fc8b52->enter($__internal_cfb9fec1906a063ed81a3b8386dc896445ed6982f535b04ad4c2d99af0fc8b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_d4b00565701d381e35cf2a95a98e98ef00f871026f209a2690ea2b11d7a5785d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4b00565701d381e35cf2a95a98e98ef00f871026f209a2690ea2b11d7a5785d->enter($__internal_d4b00565701d381e35cf2a95a98e98ef00f871026f209a2690ea2b11d7a5785d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_787991b427b992cbfd50631bd28f3ee001ef608861334ce9a66f2a09c7781672 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_62c9ad7d7b30665c2fae900af0080e4a9c64d6cfd6849ef40b5a3fb201988ac1 = "{{") && ('' === $__internal_62c9ad7d7b30665c2fae900af0080e4a9c64d6cfd6849ef40b5a3fb201988ac1 || 0 === strpos($__internal_787991b427b992cbfd50631bd28f3ee001ef608861334ce9a66f2a09c7781672, $__internal_62c9ad7d7b30665c2fae900af0080e4a9c64d6cfd6849ef40b5a3fb201988ac1)));
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
        
        $__internal_d4b00565701d381e35cf2a95a98e98ef00f871026f209a2690ea2b11d7a5785d->leave($__internal_d4b00565701d381e35cf2a95a98e98ef00f871026f209a2690ea2b11d7a5785d_prof);

        
        $__internal_cfb9fec1906a063ed81a3b8386dc896445ed6982f535b04ad4c2d99af0fc8b52->leave($__internal_cfb9fec1906a063ed81a3b8386dc896445ed6982f535b04ad4c2d99af0fc8b52_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_daf9f773bdbe24083e9bc074cbb524b3780bc6811ab7d9f3ee8dfbfea2db7af9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daf9f773bdbe24083e9bc074cbb524b3780bc6811ab7d9f3ee8dfbfea2db7af9->enter($__internal_daf9f773bdbe24083e9bc074cbb524b3780bc6811ab7d9f3ee8dfbfea2db7af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_828dedadc7e6e7158f8e6a697a25a8de86404b929d5221adbec54c1908c52e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_828dedadc7e6e7158f8e6a697a25a8de86404b929d5221adbec54c1908c52e6d->enter($__internal_828dedadc7e6e7158f8e6a697a25a8de86404b929d5221adbec54c1908c52e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_828dedadc7e6e7158f8e6a697a25a8de86404b929d5221adbec54c1908c52e6d->leave($__internal_828dedadc7e6e7158f8e6a697a25a8de86404b929d5221adbec54c1908c52e6d_prof);

        
        $__internal_daf9f773bdbe24083e9bc074cbb524b3780bc6811ab7d9f3ee8dfbfea2db7af9->leave($__internal_daf9f773bdbe24083e9bc074cbb524b3780bc6811ab7d9f3ee8dfbfea2db7af9_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_54d787ee5cb749785a793ef15f57393ba73bf5dce7d97fb99ef18b9977003fd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54d787ee5cb749785a793ef15f57393ba73bf5dce7d97fb99ef18b9977003fd7->enter($__internal_54d787ee5cb749785a793ef15f57393ba73bf5dce7d97fb99ef18b9977003fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_69ded312b1e74002295991ea1be7e1e4c8b6eb27a07118b0180f10dad75f1f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69ded312b1e74002295991ea1be7e1e4c8b6eb27a07118b0180f10dad75f1f6c->enter($__internal_69ded312b1e74002295991ea1be7e1e4c8b6eb27a07118b0180f10dad75f1f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_69ded312b1e74002295991ea1be7e1e4c8b6eb27a07118b0180f10dad75f1f6c->leave($__internal_69ded312b1e74002295991ea1be7e1e4c8b6eb27a07118b0180f10dad75f1f6c_prof);

        
        $__internal_54d787ee5cb749785a793ef15f57393ba73bf5dce7d97fb99ef18b9977003fd7->leave($__internal_54d787ee5cb749785a793ef15f57393ba73bf5dce7d97fb99ef18b9977003fd7_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_ae8769860d01bdb78ec3217345eb8920e6b8e2e4bec0a3976a40ab70fb7b1719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae8769860d01bdb78ec3217345eb8920e6b8e2e4bec0a3976a40ab70fb7b1719->enter($__internal_ae8769860d01bdb78ec3217345eb8920e6b8e2e4bec0a3976a40ab70fb7b1719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_b4a39ea5f4b5c3de944ba7ba26b37de60fc6fb44e7d394bb6eb265b1b497d3f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a39ea5f4b5c3de944ba7ba26b37de60fc6fb44e7d394bb6eb265b1b497d3f5->enter($__internal_b4a39ea5f4b5c3de944ba7ba26b37de60fc6fb44e7d394bb6eb265b1b497d3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_b4a39ea5f4b5c3de944ba7ba26b37de60fc6fb44e7d394bb6eb265b1b497d3f5->leave($__internal_b4a39ea5f4b5c3de944ba7ba26b37de60fc6fb44e7d394bb6eb265b1b497d3f5_prof);

        
        $__internal_ae8769860d01bdb78ec3217345eb8920e6b8e2e4bec0a3976a40ab70fb7b1719->leave($__internal_ae8769860d01bdb78ec3217345eb8920e6b8e2e4bec0a3976a40ab70fb7b1719_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_180a7c787046edb2649ce9d747da4714f52cd5d2df7b27609df827bdd4bd59d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_180a7c787046edb2649ce9d747da4714f52cd5d2df7b27609df827bdd4bd59d5->enter($__internal_180a7c787046edb2649ce9d747da4714f52cd5d2df7b27609df827bdd4bd59d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_8d1471a0b5358700ef39b4b05b5e20fe7e4d753176672257f00d3998dd9c7e80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d1471a0b5358700ef39b4b05b5e20fe7e4d753176672257f00d3998dd9c7e80->enter($__internal_8d1471a0b5358700ef39b4b05b5e20fe7e4d753176672257f00d3998dd9c7e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_8d1471a0b5358700ef39b4b05b5e20fe7e4d753176672257f00d3998dd9c7e80->leave($__internal_8d1471a0b5358700ef39b4b05b5e20fe7e4d753176672257f00d3998dd9c7e80_prof);

        
        $__internal_180a7c787046edb2649ce9d747da4714f52cd5d2df7b27609df827bdd4bd59d5->leave($__internal_180a7c787046edb2649ce9d747da4714f52cd5d2df7b27609df827bdd4bd59d5_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_3ce9505a29921791c3d0a4292958f4fec4dd69dbdaeb1cfcbefb63dc167b8dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ce9505a29921791c3d0a4292958f4fec4dd69dbdaeb1cfcbefb63dc167b8dd8->enter($__internal_3ce9505a29921791c3d0a4292958f4fec4dd69dbdaeb1cfcbefb63dc167b8dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_9e952dfe031483773877ec80dfb775e173ebb9046b985b6c94b21d9c2f230bff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e952dfe031483773877ec80dfb775e173ebb9046b985b6c94b21d9c2f230bff->enter($__internal_9e952dfe031483773877ec80dfb775e173ebb9046b985b6c94b21d9c2f230bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_9e952dfe031483773877ec80dfb775e173ebb9046b985b6c94b21d9c2f230bff->leave($__internal_9e952dfe031483773877ec80dfb775e173ebb9046b985b6c94b21d9c2f230bff_prof);

        
        $__internal_3ce9505a29921791c3d0a4292958f4fec4dd69dbdaeb1cfcbefb63dc167b8dd8->leave($__internal_3ce9505a29921791c3d0a4292958f4fec4dd69dbdaeb1cfcbefb63dc167b8dd8_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_b22dd4222de0fe0175d7a36d5b3e7a7cf14ef46ea4a899c3010a1715bb68b1c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b22dd4222de0fe0175d7a36d5b3e7a7cf14ef46ea4a899c3010a1715bb68b1c4->enter($__internal_b22dd4222de0fe0175d7a36d5b3e7a7cf14ef46ea4a899c3010a1715bb68b1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_e6d692cc9df508cd2342f3055b15bd386c2d164eb0b4323cccaaae5e3a2d1508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d692cc9df508cd2342f3055b15bd386c2d164eb0b4323cccaaae5e3a2d1508->enter($__internal_e6d692cc9df508cd2342f3055b15bd386c2d164eb0b4323cccaaae5e3a2d1508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_e6d692cc9df508cd2342f3055b15bd386c2d164eb0b4323cccaaae5e3a2d1508->leave($__internal_e6d692cc9df508cd2342f3055b15bd386c2d164eb0b4323cccaaae5e3a2d1508_prof);

        
        $__internal_b22dd4222de0fe0175d7a36d5b3e7a7cf14ef46ea4a899c3010a1715bb68b1c4->leave($__internal_b22dd4222de0fe0175d7a36d5b3e7a7cf14ef46ea4a899c3010a1715bb68b1c4_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_cae6ec8dc346be8e2e284450d39001f426a05bdae32d830d00cb21ad5c2fb2c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cae6ec8dc346be8e2e284450d39001f426a05bdae32d830d00cb21ad5c2fb2c0->enter($__internal_cae6ec8dc346be8e2e284450d39001f426a05bdae32d830d00cb21ad5c2fb2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_a28c059f4a733821dd9f17a4e03956b5016ed401030e86ac8b5d0c9fa76b2c72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a28c059f4a733821dd9f17a4e03956b5016ed401030e86ac8b5d0c9fa76b2c72->enter($__internal_a28c059f4a733821dd9f17a4e03956b5016ed401030e86ac8b5d0c9fa76b2c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_a28c059f4a733821dd9f17a4e03956b5016ed401030e86ac8b5d0c9fa76b2c72->leave($__internal_a28c059f4a733821dd9f17a4e03956b5016ed401030e86ac8b5d0c9fa76b2c72_prof);

        
        $__internal_cae6ec8dc346be8e2e284450d39001f426a05bdae32d830d00cb21ad5c2fb2c0->leave($__internal_cae6ec8dc346be8e2e284450d39001f426a05bdae32d830d00cb21ad5c2fb2c0_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_a52468801c1d06524d4fca7382b691a836c353c3edbe934e996212a2b514bfff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a52468801c1d06524d4fca7382b691a836c353c3edbe934e996212a2b514bfff->enter($__internal_a52468801c1d06524d4fca7382b691a836c353c3edbe934e996212a2b514bfff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_2d3d79ba8d6d827a62780ae385c0a98a4b44fc5ef761836c720a04f2d7cb562b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d3d79ba8d6d827a62780ae385c0a98a4b44fc5ef761836c720a04f2d7cb562b->enter($__internal_2d3d79ba8d6d827a62780ae385c0a98a4b44fc5ef761836c720a04f2d7cb562b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_2d3d79ba8d6d827a62780ae385c0a98a4b44fc5ef761836c720a04f2d7cb562b->leave($__internal_2d3d79ba8d6d827a62780ae385c0a98a4b44fc5ef761836c720a04f2d7cb562b_prof);

        
        $__internal_a52468801c1d06524d4fca7382b691a836c353c3edbe934e996212a2b514bfff->leave($__internal_a52468801c1d06524d4fca7382b691a836c353c3edbe934e996212a2b514bfff_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_6747a68733968f50423596580195d077897c59df6a62689d929c003297a1dc32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6747a68733968f50423596580195d077897c59df6a62689d929c003297a1dc32->enter($__internal_6747a68733968f50423596580195d077897c59df6a62689d929c003297a1dc32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_59bd9758f34aafe77c75ec40dd935cd63dced1e52710f1b9edf396a0c98b21c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59bd9758f34aafe77c75ec40dd935cd63dced1e52710f1b9edf396a0c98b21c7->enter($__internal_59bd9758f34aafe77c75ec40dd935cd63dced1e52710f1b9edf396a0c98b21c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_59bd9758f34aafe77c75ec40dd935cd63dced1e52710f1b9edf396a0c98b21c7->leave($__internal_59bd9758f34aafe77c75ec40dd935cd63dced1e52710f1b9edf396a0c98b21c7_prof);

        
        $__internal_6747a68733968f50423596580195d077897c59df6a62689d929c003297a1dc32->leave($__internal_6747a68733968f50423596580195d077897c59df6a62689d929c003297a1dc32_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_0f170cb0d314ccbe7805188381aa035b07b6793f612c1a2e34ebd59e8df295ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f170cb0d314ccbe7805188381aa035b07b6793f612c1a2e34ebd59e8df295ff->enter($__internal_0f170cb0d314ccbe7805188381aa035b07b6793f612c1a2e34ebd59e8df295ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_844da0f733482fa15a5aca1c54725e66872580815ea75793f586120aa83ca587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_844da0f733482fa15a5aca1c54725e66872580815ea75793f586120aa83ca587->enter($__internal_844da0f733482fa15a5aca1c54725e66872580815ea75793f586120aa83ca587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_844da0f733482fa15a5aca1c54725e66872580815ea75793f586120aa83ca587->leave($__internal_844da0f733482fa15a5aca1c54725e66872580815ea75793f586120aa83ca587_prof);

        
        $__internal_0f170cb0d314ccbe7805188381aa035b07b6793f612c1a2e34ebd59e8df295ff->leave($__internal_0f170cb0d314ccbe7805188381aa035b07b6793f612c1a2e34ebd59e8df295ff_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_bc29ea2df5d937abeadd70eb1c821b5c2be337f2cb343f6f198ad5af9859f44c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc29ea2df5d937abeadd70eb1c821b5c2be337f2cb343f6f198ad5af9859f44c->enter($__internal_bc29ea2df5d937abeadd70eb1c821b5c2be337f2cb343f6f198ad5af9859f44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_2f2b5352e1e4c325501193991430e345bb0f12034dea840aa07326839c0f230d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f2b5352e1e4c325501193991430e345bb0f12034dea840aa07326839c0f230d->enter($__internal_2f2b5352e1e4c325501193991430e345bb0f12034dea840aa07326839c0f230d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_2f2b5352e1e4c325501193991430e345bb0f12034dea840aa07326839c0f230d->leave($__internal_2f2b5352e1e4c325501193991430e345bb0f12034dea840aa07326839c0f230d_prof);

        
        $__internal_bc29ea2df5d937abeadd70eb1c821b5c2be337f2cb343f6f198ad5af9859f44c->leave($__internal_bc29ea2df5d937abeadd70eb1c821b5c2be337f2cb343f6f198ad5af9859f44c_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_4041b2279df86c75a3fd831f003e171468bf18385108049836503c07480d66d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4041b2279df86c75a3fd831f003e171468bf18385108049836503c07480d66d4->enter($__internal_4041b2279df86c75a3fd831f003e171468bf18385108049836503c07480d66d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_0444a03577a0085f77cac83ab99fe3904fed217c925cbc3a55bf466c11e5a3cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0444a03577a0085f77cac83ab99fe3904fed217c925cbc3a55bf466c11e5a3cc->enter($__internal_0444a03577a0085f77cac83ab99fe3904fed217c925cbc3a55bf466c11e5a3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_0444a03577a0085f77cac83ab99fe3904fed217c925cbc3a55bf466c11e5a3cc->leave($__internal_0444a03577a0085f77cac83ab99fe3904fed217c925cbc3a55bf466c11e5a3cc_prof);

        
        $__internal_4041b2279df86c75a3fd831f003e171468bf18385108049836503c07480d66d4->leave($__internal_4041b2279df86c75a3fd831f003e171468bf18385108049836503c07480d66d4_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_c269823bc1a712b679d0a42eb953d8376ad2d862aa4ddf518b7d77335e677e34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c269823bc1a712b679d0a42eb953d8376ad2d862aa4ddf518b7d77335e677e34->enter($__internal_c269823bc1a712b679d0a42eb953d8376ad2d862aa4ddf518b7d77335e677e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_3dd2343b48be23b1df7e8b3ea8f861a74320ea355a75d1170f91aa5a25021381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dd2343b48be23b1df7e8b3ea8f861a74320ea355a75d1170f91aa5a25021381->enter($__internal_3dd2343b48be23b1df7e8b3ea8f861a74320ea355a75d1170f91aa5a25021381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_3dd2343b48be23b1df7e8b3ea8f861a74320ea355a75d1170f91aa5a25021381->leave($__internal_3dd2343b48be23b1df7e8b3ea8f861a74320ea355a75d1170f91aa5a25021381_prof);

        
        $__internal_c269823bc1a712b679d0a42eb953d8376ad2d862aa4ddf518b7d77335e677e34->leave($__internal_c269823bc1a712b679d0a42eb953d8376ad2d862aa4ddf518b7d77335e677e34_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_67e82d49befadb69fb0d4e635d43dcb086788ca672f9372f932b6b22f02c28e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67e82d49befadb69fb0d4e635d43dcb086788ca672f9372f932b6b22f02c28e7->enter($__internal_67e82d49befadb69fb0d4e635d43dcb086788ca672f9372f932b6b22f02c28e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_86e66b3b45c0899d2c98ed555107b1f322393346d81ab73e499ebec2d4cbfd97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86e66b3b45c0899d2c98ed555107b1f322393346d81ab73e499ebec2d4cbfd97->enter($__internal_86e66b3b45c0899d2c98ed555107b1f322393346d81ab73e499ebec2d4cbfd97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_86e66b3b45c0899d2c98ed555107b1f322393346d81ab73e499ebec2d4cbfd97->leave($__internal_86e66b3b45c0899d2c98ed555107b1f322393346d81ab73e499ebec2d4cbfd97_prof);

        
        $__internal_67e82d49befadb69fb0d4e635d43dcb086788ca672f9372f932b6b22f02c28e7->leave($__internal_67e82d49befadb69fb0d4e635d43dcb086788ca672f9372f932b6b22f02c28e7_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_38dbde755ab1d0dee7fa018b05e4276202c9418e6be6f134378f7b78c8b96e71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38dbde755ab1d0dee7fa018b05e4276202c9418e6be6f134378f7b78c8b96e71->enter($__internal_38dbde755ab1d0dee7fa018b05e4276202c9418e6be6f134378f7b78c8b96e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_167d09ae30a729d39704af609e9492e912bff581f46ae5ffb133bf9e70587604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_167d09ae30a729d39704af609e9492e912bff581f46ae5ffb133bf9e70587604->enter($__internal_167d09ae30a729d39704af609e9492e912bff581f46ae5ffb133bf9e70587604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_167d09ae30a729d39704af609e9492e912bff581f46ae5ffb133bf9e70587604->leave($__internal_167d09ae30a729d39704af609e9492e912bff581f46ae5ffb133bf9e70587604_prof);

        
        $__internal_38dbde755ab1d0dee7fa018b05e4276202c9418e6be6f134378f7b78c8b96e71->leave($__internal_38dbde755ab1d0dee7fa018b05e4276202c9418e6be6f134378f7b78c8b96e71_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_18e5668dd33682f8feab64b373defe72615b1a0a6c9765481cae129a955a3111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18e5668dd33682f8feab64b373defe72615b1a0a6c9765481cae129a955a3111->enter($__internal_18e5668dd33682f8feab64b373defe72615b1a0a6c9765481cae129a955a3111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_e9ca76daf4b5eb0b2b0a651183c811492bb008bc5319ce784270cc85b9c7d275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ca76daf4b5eb0b2b0a651183c811492bb008bc5319ce784270cc85b9c7d275->enter($__internal_e9ca76daf4b5eb0b2b0a651183c811492bb008bc5319ce784270cc85b9c7d275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_e9ca76daf4b5eb0b2b0a651183c811492bb008bc5319ce784270cc85b9c7d275->leave($__internal_e9ca76daf4b5eb0b2b0a651183c811492bb008bc5319ce784270cc85b9c7d275_prof);

        
        $__internal_18e5668dd33682f8feab64b373defe72615b1a0a6c9765481cae129a955a3111->leave($__internal_18e5668dd33682f8feab64b373defe72615b1a0a6c9765481cae129a955a3111_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_209d83a8f0e2784a88ba1672ba82bd4954e9dbfa2f7f476001002e94754af0e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_209d83a8f0e2784a88ba1672ba82bd4954e9dbfa2f7f476001002e94754af0e6->enter($__internal_209d83a8f0e2784a88ba1672ba82bd4954e9dbfa2f7f476001002e94754af0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_4689d76bce05f55081fb3d643997a249d494e46ba2df9be98a9d692651e4022d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4689d76bce05f55081fb3d643997a249d494e46ba2df9be98a9d692651e4022d->enter($__internal_4689d76bce05f55081fb3d643997a249d494e46ba2df9be98a9d692651e4022d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4689d76bce05f55081fb3d643997a249d494e46ba2df9be98a9d692651e4022d->leave($__internal_4689d76bce05f55081fb3d643997a249d494e46ba2df9be98a9d692651e4022d_prof);

        
        $__internal_209d83a8f0e2784a88ba1672ba82bd4954e9dbfa2f7f476001002e94754af0e6->leave($__internal_209d83a8f0e2784a88ba1672ba82bd4954e9dbfa2f7f476001002e94754af0e6_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_6f9a8e2ac6e8bc6719f7cf6e59e68b6ed16e2f7a802e0b885fb1c4e44b132525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f9a8e2ac6e8bc6719f7cf6e59e68b6ed16e2f7a802e0b885fb1c4e44b132525->enter($__internal_6f9a8e2ac6e8bc6719f7cf6e59e68b6ed16e2f7a802e0b885fb1c4e44b132525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_a9672be078cdaa7cc86f5e94734f9d028f758951af510c808e03367af66ddea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9672be078cdaa7cc86f5e94734f9d028f758951af510c808e03367af66ddea4->enter($__internal_a9672be078cdaa7cc86f5e94734f9d028f758951af510c808e03367af66ddea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a9672be078cdaa7cc86f5e94734f9d028f758951af510c808e03367af66ddea4->leave($__internal_a9672be078cdaa7cc86f5e94734f9d028f758951af510c808e03367af66ddea4_prof);

        
        $__internal_6f9a8e2ac6e8bc6719f7cf6e59e68b6ed16e2f7a802e0b885fb1c4e44b132525->leave($__internal_6f9a8e2ac6e8bc6719f7cf6e59e68b6ed16e2f7a802e0b885fb1c4e44b132525_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_ffeb20ef78f7c7e5efdba3913b1d9e3502422a2e0aa3fa467615eed5b8146e59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffeb20ef78f7c7e5efdba3913b1d9e3502422a2e0aa3fa467615eed5b8146e59->enter($__internal_ffeb20ef78f7c7e5efdba3913b1d9e3502422a2e0aa3fa467615eed5b8146e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_c0655bf7d09bcacb71a76234c75e687de25a8c5edc38c78dca75483055a34484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0655bf7d09bcacb71a76234c75e687de25a8c5edc38c78dca75483055a34484->enter($__internal_c0655bf7d09bcacb71a76234c75e687de25a8c5edc38c78dca75483055a34484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c0655bf7d09bcacb71a76234c75e687de25a8c5edc38c78dca75483055a34484->leave($__internal_c0655bf7d09bcacb71a76234c75e687de25a8c5edc38c78dca75483055a34484_prof);

        
        $__internal_ffeb20ef78f7c7e5efdba3913b1d9e3502422a2e0aa3fa467615eed5b8146e59->leave($__internal_ffeb20ef78f7c7e5efdba3913b1d9e3502422a2e0aa3fa467615eed5b8146e59_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_06bf541ad6b41af4fb40cdd54e42a14cb9d63cf08a92970bb3f5ea6003331311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06bf541ad6b41af4fb40cdd54e42a14cb9d63cf08a92970bb3f5ea6003331311->enter($__internal_06bf541ad6b41af4fb40cdd54e42a14cb9d63cf08a92970bb3f5ea6003331311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_05d57f6e94ea3ce50ba13b47622503735fca7d11b70404498aa2064539b308d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d57f6e94ea3ce50ba13b47622503735fca7d11b70404498aa2064539b308d8->enter($__internal_05d57f6e94ea3ce50ba13b47622503735fca7d11b70404498aa2064539b308d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_05d57f6e94ea3ce50ba13b47622503735fca7d11b70404498aa2064539b308d8->leave($__internal_05d57f6e94ea3ce50ba13b47622503735fca7d11b70404498aa2064539b308d8_prof);

        
        $__internal_06bf541ad6b41af4fb40cdd54e42a14cb9d63cf08a92970bb3f5ea6003331311->leave($__internal_06bf541ad6b41af4fb40cdd54e42a14cb9d63cf08a92970bb3f5ea6003331311_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_1267d77bfa2562ac3fa2752dc70725d986e4e04febf806d183ecb34708e6ceb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1267d77bfa2562ac3fa2752dc70725d986e4e04febf806d183ecb34708e6ceb9->enter($__internal_1267d77bfa2562ac3fa2752dc70725d986e4e04febf806d183ecb34708e6ceb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_e74ef7bc4801c1c3a4fd3e5e3993443c307633f283fd50fad864e9ceb1e87332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e74ef7bc4801c1c3a4fd3e5e3993443c307633f283fd50fad864e9ceb1e87332->enter($__internal_e74ef7bc4801c1c3a4fd3e5e3993443c307633f283fd50fad864e9ceb1e87332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_e74ef7bc4801c1c3a4fd3e5e3993443c307633f283fd50fad864e9ceb1e87332->leave($__internal_e74ef7bc4801c1c3a4fd3e5e3993443c307633f283fd50fad864e9ceb1e87332_prof);

        
        $__internal_1267d77bfa2562ac3fa2752dc70725d986e4e04febf806d183ecb34708e6ceb9->leave($__internal_1267d77bfa2562ac3fa2752dc70725d986e4e04febf806d183ecb34708e6ceb9_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_0a761bb595d167178e638bf9c7dd2dec5daf3711349cbf81f695481c79367a14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a761bb595d167178e638bf9c7dd2dec5daf3711349cbf81f695481c79367a14->enter($__internal_0a761bb595d167178e638bf9c7dd2dec5daf3711349cbf81f695481c79367a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_fb569d1649a884f59dfc41d23b9d57c02c205f1033814d61b5c2b8ac0c2e8bae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb569d1649a884f59dfc41d23b9d57c02c205f1033814d61b5c2b8ac0c2e8bae->enter($__internal_fb569d1649a884f59dfc41d23b9d57c02c205f1033814d61b5c2b8ac0c2e8bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_fb569d1649a884f59dfc41d23b9d57c02c205f1033814d61b5c2b8ac0c2e8bae->leave($__internal_fb569d1649a884f59dfc41d23b9d57c02c205f1033814d61b5c2b8ac0c2e8bae_prof);

        
        $__internal_0a761bb595d167178e638bf9c7dd2dec5daf3711349cbf81f695481c79367a14->leave($__internal_0a761bb595d167178e638bf9c7dd2dec5daf3711349cbf81f695481c79367a14_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_9487d2d4e38473f357481d0f9bce81a0b529904e0e177031e5f2347f6451da41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9487d2d4e38473f357481d0f9bce81a0b529904e0e177031e5f2347f6451da41->enter($__internal_9487d2d4e38473f357481d0f9bce81a0b529904e0e177031e5f2347f6451da41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_cb10744e7914af6116b427926e248d57dbaf1824a23dc72573e2165065fc773b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb10744e7914af6116b427926e248d57dbaf1824a23dc72573e2165065fc773b->enter($__internal_cb10744e7914af6116b427926e248d57dbaf1824a23dc72573e2165065fc773b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_cb10744e7914af6116b427926e248d57dbaf1824a23dc72573e2165065fc773b->leave($__internal_cb10744e7914af6116b427926e248d57dbaf1824a23dc72573e2165065fc773b_prof);

        
        $__internal_9487d2d4e38473f357481d0f9bce81a0b529904e0e177031e5f2347f6451da41->leave($__internal_9487d2d4e38473f357481d0f9bce81a0b529904e0e177031e5f2347f6451da41_prof);

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
