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
        $__internal_f4f31b5ed2badcdf4c2dd28f9af1eaf8df857b6f6763829a9463a00e0855835d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4f31b5ed2badcdf4c2dd28f9af1eaf8df857b6f6763829a9463a00e0855835d->enter($__internal_f4f31b5ed2badcdf4c2dd28f9af1eaf8df857b6f6763829a9463a00e0855835d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_dfeb0e1beb7b53a2e02f51d10b00cde2c8bdf48e54629ec72f83397bef1f161d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfeb0e1beb7b53a2e02f51d10b00cde2c8bdf48e54629ec72f83397bef1f161d->enter($__internal_dfeb0e1beb7b53a2e02f51d10b00cde2c8bdf48e54629ec72f83397bef1f161d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_f4f31b5ed2badcdf4c2dd28f9af1eaf8df857b6f6763829a9463a00e0855835d->leave($__internal_f4f31b5ed2badcdf4c2dd28f9af1eaf8df857b6f6763829a9463a00e0855835d_prof);

        
        $__internal_dfeb0e1beb7b53a2e02f51d10b00cde2c8bdf48e54629ec72f83397bef1f161d->leave($__internal_dfeb0e1beb7b53a2e02f51d10b00cde2c8bdf48e54629ec72f83397bef1f161d_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_2f724c59954b67714774fb71a33782765c20e9856b8cb2d2856f9fcc1fc1f74c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f724c59954b67714774fb71a33782765c20e9856b8cb2d2856f9fcc1fc1f74c->enter($__internal_2f724c59954b67714774fb71a33782765c20e9856b8cb2d2856f9fcc1fc1f74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_3eed597609a68010ce1c15d38146cb271a1bc7f43b92cbab97ccc5fa841d6dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eed597609a68010ce1c15d38146cb271a1bc7f43b92cbab97ccc5fa841d6dac->enter($__internal_3eed597609a68010ce1c15d38146cb271a1bc7f43b92cbab97ccc5fa841d6dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_3eed597609a68010ce1c15d38146cb271a1bc7f43b92cbab97ccc5fa841d6dac->leave($__internal_3eed597609a68010ce1c15d38146cb271a1bc7f43b92cbab97ccc5fa841d6dac_prof);

        
        $__internal_2f724c59954b67714774fb71a33782765c20e9856b8cb2d2856f9fcc1fc1f74c->leave($__internal_2f724c59954b67714774fb71a33782765c20e9856b8cb2d2856f9fcc1fc1f74c_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_6f26af5164a5db7b6be52b705e4d192138e764306705ecd1d7e8ff7bdcfb4f44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f26af5164a5db7b6be52b705e4d192138e764306705ecd1d7e8ff7bdcfb4f44->enter($__internal_6f26af5164a5db7b6be52b705e4d192138e764306705ecd1d7e8ff7bdcfb4f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_aee25f97ee26bd241121f941a697e857fdc843a687651333f8b590b626e6eba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aee25f97ee26bd241121f941a697e857fdc843a687651333f8b590b626e6eba2->enter($__internal_aee25f97ee26bd241121f941a697e857fdc843a687651333f8b590b626e6eba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_aee25f97ee26bd241121f941a697e857fdc843a687651333f8b590b626e6eba2->leave($__internal_aee25f97ee26bd241121f941a697e857fdc843a687651333f8b590b626e6eba2_prof);

        
        $__internal_6f26af5164a5db7b6be52b705e4d192138e764306705ecd1d7e8ff7bdcfb4f44->leave($__internal_6f26af5164a5db7b6be52b705e4d192138e764306705ecd1d7e8ff7bdcfb4f44_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_a79f71dfc34fb47e51fa6e94c2d79c820eecf286cb756a730df3e4357525828c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a79f71dfc34fb47e51fa6e94c2d79c820eecf286cb756a730df3e4357525828c->enter($__internal_a79f71dfc34fb47e51fa6e94c2d79c820eecf286cb756a730df3e4357525828c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_18655555d3b016169fccb2bec2a650c32acc60ca868515b2d1d902d4bca1e68d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18655555d3b016169fccb2bec2a650c32acc60ca868515b2d1d902d4bca1e68d->enter($__internal_18655555d3b016169fccb2bec2a650c32acc60ca868515b2d1d902d4bca1e68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_18655555d3b016169fccb2bec2a650c32acc60ca868515b2d1d902d4bca1e68d->leave($__internal_18655555d3b016169fccb2bec2a650c32acc60ca868515b2d1d902d4bca1e68d_prof);

        
        $__internal_a79f71dfc34fb47e51fa6e94c2d79c820eecf286cb756a730df3e4357525828c->leave($__internal_a79f71dfc34fb47e51fa6e94c2d79c820eecf286cb756a730df3e4357525828c_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_22485b8c3c6538464aa84a4ccd2db4aa611a95a68398a6294ce4b739e60cc975 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22485b8c3c6538464aa84a4ccd2db4aa611a95a68398a6294ce4b739e60cc975->enter($__internal_22485b8c3c6538464aa84a4ccd2db4aa611a95a68398a6294ce4b739e60cc975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_db6fed758b56569ddf65afe65dbb31bc8dbf3f48a0d5492b00b46333eb778820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6fed758b56569ddf65afe65dbb31bc8dbf3f48a0d5492b00b46333eb778820->enter($__internal_db6fed758b56569ddf65afe65dbb31bc8dbf3f48a0d5492b00b46333eb778820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_7d87250c1c70cc3d45847b2954d93205671b69615e7c4c96a2f2b6333350f89f = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_1e30f913ac622d64071effb825918687ebf70ba944f81f6455d78dd3fbb546f9 = "{{") && ('' === $__internal_1e30f913ac622d64071effb825918687ebf70ba944f81f6455d78dd3fbb546f9 || 0 === strpos($__internal_7d87250c1c70cc3d45847b2954d93205671b69615e7c4c96a2f2b6333350f89f, $__internal_1e30f913ac622d64071effb825918687ebf70ba944f81f6455d78dd3fbb546f9)));
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
        
        $__internal_db6fed758b56569ddf65afe65dbb31bc8dbf3f48a0d5492b00b46333eb778820->leave($__internal_db6fed758b56569ddf65afe65dbb31bc8dbf3f48a0d5492b00b46333eb778820_prof);

        
        $__internal_22485b8c3c6538464aa84a4ccd2db4aa611a95a68398a6294ce4b739e60cc975->leave($__internal_22485b8c3c6538464aa84a4ccd2db4aa611a95a68398a6294ce4b739e60cc975_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_f9829c65533fdb5502e4d7cf99d96d4724b85d6965a6f6cf1b2f267436349fb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9829c65533fdb5502e4d7cf99d96d4724b85d6965a6f6cf1b2f267436349fb9->enter($__internal_f9829c65533fdb5502e4d7cf99d96d4724b85d6965a6f6cf1b2f267436349fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_69b607ebf213cf8b2c08540f86c41ba2dcfdcd054929c2466a15bba71dc9e20e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b607ebf213cf8b2c08540f86c41ba2dcfdcd054929c2466a15bba71dc9e20e->enter($__internal_69b607ebf213cf8b2c08540f86c41ba2dcfdcd054929c2466a15bba71dc9e20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_69b607ebf213cf8b2c08540f86c41ba2dcfdcd054929c2466a15bba71dc9e20e->leave($__internal_69b607ebf213cf8b2c08540f86c41ba2dcfdcd054929c2466a15bba71dc9e20e_prof);

        
        $__internal_f9829c65533fdb5502e4d7cf99d96d4724b85d6965a6f6cf1b2f267436349fb9->leave($__internal_f9829c65533fdb5502e4d7cf99d96d4724b85d6965a6f6cf1b2f267436349fb9_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_ceb9e2889c839585c11ce85901a16ee83713f12d280bad91b6d92f6b647a4ee1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceb9e2889c839585c11ce85901a16ee83713f12d280bad91b6d92f6b647a4ee1->enter($__internal_ceb9e2889c839585c11ce85901a16ee83713f12d280bad91b6d92f6b647a4ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_1aef9b8a6bb229dde8f4137b3bbfde39a7dc2a5055a769938617633d4e2cc515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aef9b8a6bb229dde8f4137b3bbfde39a7dc2a5055a769938617633d4e2cc515->enter($__internal_1aef9b8a6bb229dde8f4137b3bbfde39a7dc2a5055a769938617633d4e2cc515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_1aef9b8a6bb229dde8f4137b3bbfde39a7dc2a5055a769938617633d4e2cc515->leave($__internal_1aef9b8a6bb229dde8f4137b3bbfde39a7dc2a5055a769938617633d4e2cc515_prof);

        
        $__internal_ceb9e2889c839585c11ce85901a16ee83713f12d280bad91b6d92f6b647a4ee1->leave($__internal_ceb9e2889c839585c11ce85901a16ee83713f12d280bad91b6d92f6b647a4ee1_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_790681d7cd9eaf0f63123542bb7be31861de050356e1d2c75d11c995bacf9505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_790681d7cd9eaf0f63123542bb7be31861de050356e1d2c75d11c995bacf9505->enter($__internal_790681d7cd9eaf0f63123542bb7be31861de050356e1d2c75d11c995bacf9505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_278ab9cbaaf5db419b932892927342fc0eb4429ed57e13862d5ad72ffdb91e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_278ab9cbaaf5db419b932892927342fc0eb4429ed57e13862d5ad72ffdb91e55->enter($__internal_278ab9cbaaf5db419b932892927342fc0eb4429ed57e13862d5ad72ffdb91e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_278ab9cbaaf5db419b932892927342fc0eb4429ed57e13862d5ad72ffdb91e55->leave($__internal_278ab9cbaaf5db419b932892927342fc0eb4429ed57e13862d5ad72ffdb91e55_prof);

        
        $__internal_790681d7cd9eaf0f63123542bb7be31861de050356e1d2c75d11c995bacf9505->leave($__internal_790681d7cd9eaf0f63123542bb7be31861de050356e1d2c75d11c995bacf9505_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_4b39b689da7d6429d30cb37627fab31d61485705965d501d344d6ba056fe41e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b39b689da7d6429d30cb37627fab31d61485705965d501d344d6ba056fe41e2->enter($__internal_4b39b689da7d6429d30cb37627fab31d61485705965d501d344d6ba056fe41e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_82189d3c4e2b1a29fad5308805cfa6ccf669e83da6fb7ad7957bdb2f633a5d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82189d3c4e2b1a29fad5308805cfa6ccf669e83da6fb7ad7957bdb2f633a5d3c->enter($__internal_82189d3c4e2b1a29fad5308805cfa6ccf669e83da6fb7ad7957bdb2f633a5d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_82189d3c4e2b1a29fad5308805cfa6ccf669e83da6fb7ad7957bdb2f633a5d3c->leave($__internal_82189d3c4e2b1a29fad5308805cfa6ccf669e83da6fb7ad7957bdb2f633a5d3c_prof);

        
        $__internal_4b39b689da7d6429d30cb37627fab31d61485705965d501d344d6ba056fe41e2->leave($__internal_4b39b689da7d6429d30cb37627fab31d61485705965d501d344d6ba056fe41e2_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_e93c663c5344a153fd4d7b83bc8b1e1df6253a7cb5b3549b76bd5725e5fa9c7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e93c663c5344a153fd4d7b83bc8b1e1df6253a7cb5b3549b76bd5725e5fa9c7a->enter($__internal_e93c663c5344a153fd4d7b83bc8b1e1df6253a7cb5b3549b76bd5725e5fa9c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_5340ad25f258a67c8aeaf63a30add24947defaeea490f7ecc4f1c9b86f54a133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5340ad25f258a67c8aeaf63a30add24947defaeea490f7ecc4f1c9b86f54a133->enter($__internal_5340ad25f258a67c8aeaf63a30add24947defaeea490f7ecc4f1c9b86f54a133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_5340ad25f258a67c8aeaf63a30add24947defaeea490f7ecc4f1c9b86f54a133->leave($__internal_5340ad25f258a67c8aeaf63a30add24947defaeea490f7ecc4f1c9b86f54a133_prof);

        
        $__internal_e93c663c5344a153fd4d7b83bc8b1e1df6253a7cb5b3549b76bd5725e5fa9c7a->leave($__internal_e93c663c5344a153fd4d7b83bc8b1e1df6253a7cb5b3549b76bd5725e5fa9c7a_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_bc555119cf5e5767ab0da2d5c02bb93d5466594ceaf539aff49656c3b99b2787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc555119cf5e5767ab0da2d5c02bb93d5466594ceaf539aff49656c3b99b2787->enter($__internal_bc555119cf5e5767ab0da2d5c02bb93d5466594ceaf539aff49656c3b99b2787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_3d1d9b8f760e172b852707f2d1644ac8c88cb5685cf84fbfbe744912d6940b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d1d9b8f760e172b852707f2d1644ac8c88cb5685cf84fbfbe744912d6940b99->enter($__internal_3d1d9b8f760e172b852707f2d1644ac8c88cb5685cf84fbfbe744912d6940b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_3d1d9b8f760e172b852707f2d1644ac8c88cb5685cf84fbfbe744912d6940b99->leave($__internal_3d1d9b8f760e172b852707f2d1644ac8c88cb5685cf84fbfbe744912d6940b99_prof);

        
        $__internal_bc555119cf5e5767ab0da2d5c02bb93d5466594ceaf539aff49656c3b99b2787->leave($__internal_bc555119cf5e5767ab0da2d5c02bb93d5466594ceaf539aff49656c3b99b2787_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_bcf597ac7038f9287900c6019545ec7492762d3ba3711306c224028ff44ff27c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcf597ac7038f9287900c6019545ec7492762d3ba3711306c224028ff44ff27c->enter($__internal_bcf597ac7038f9287900c6019545ec7492762d3ba3711306c224028ff44ff27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_884f0af2368a4d36e23606f22d1090c5a1aa8712ed9a883553ecb8802db6945e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884f0af2368a4d36e23606f22d1090c5a1aa8712ed9a883553ecb8802db6945e->enter($__internal_884f0af2368a4d36e23606f22d1090c5a1aa8712ed9a883553ecb8802db6945e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_884f0af2368a4d36e23606f22d1090c5a1aa8712ed9a883553ecb8802db6945e->leave($__internal_884f0af2368a4d36e23606f22d1090c5a1aa8712ed9a883553ecb8802db6945e_prof);

        
        $__internal_bcf597ac7038f9287900c6019545ec7492762d3ba3711306c224028ff44ff27c->leave($__internal_bcf597ac7038f9287900c6019545ec7492762d3ba3711306c224028ff44ff27c_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_07541d2c4eed22173ec7f342666921e95a4bf79a38b8e44583d72667ddf10704 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07541d2c4eed22173ec7f342666921e95a4bf79a38b8e44583d72667ddf10704->enter($__internal_07541d2c4eed22173ec7f342666921e95a4bf79a38b8e44583d72667ddf10704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_9fe90f63e430ca15453037a6ef5ad11f35e391e832a40e8c3316df9b4bca7ad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fe90f63e430ca15453037a6ef5ad11f35e391e832a40e8c3316df9b4bca7ad5->enter($__internal_9fe90f63e430ca15453037a6ef5ad11f35e391e832a40e8c3316df9b4bca7ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_9fe90f63e430ca15453037a6ef5ad11f35e391e832a40e8c3316df9b4bca7ad5->leave($__internal_9fe90f63e430ca15453037a6ef5ad11f35e391e832a40e8c3316df9b4bca7ad5_prof);

        
        $__internal_07541d2c4eed22173ec7f342666921e95a4bf79a38b8e44583d72667ddf10704->leave($__internal_07541d2c4eed22173ec7f342666921e95a4bf79a38b8e44583d72667ddf10704_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_9cc61b0417a0d649b391058b026b7f4dd900d0533621cdcd665f6dbdc2c43b48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cc61b0417a0d649b391058b026b7f4dd900d0533621cdcd665f6dbdc2c43b48->enter($__internal_9cc61b0417a0d649b391058b026b7f4dd900d0533621cdcd665f6dbdc2c43b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_74be9e3abac7ae76e4b00661f732b9fea8334cf3560be8d0643f0e6d34933681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74be9e3abac7ae76e4b00661f732b9fea8334cf3560be8d0643f0e6d34933681->enter($__internal_74be9e3abac7ae76e4b00661f732b9fea8334cf3560be8d0643f0e6d34933681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_74be9e3abac7ae76e4b00661f732b9fea8334cf3560be8d0643f0e6d34933681->leave($__internal_74be9e3abac7ae76e4b00661f732b9fea8334cf3560be8d0643f0e6d34933681_prof);

        
        $__internal_9cc61b0417a0d649b391058b026b7f4dd900d0533621cdcd665f6dbdc2c43b48->leave($__internal_9cc61b0417a0d649b391058b026b7f4dd900d0533621cdcd665f6dbdc2c43b48_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ad5c72f9d7f7c251919643da20529790f0478df0aadef47698c4e3575e2b17f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad5c72f9d7f7c251919643da20529790f0478df0aadef47698c4e3575e2b17f3->enter($__internal_ad5c72f9d7f7c251919643da20529790f0478df0aadef47698c4e3575e2b17f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_1d11b84d0c641f0c5e21dc0f67aadac21eca442ba29052975e36a0345e81c77e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d11b84d0c641f0c5e21dc0f67aadac21eca442ba29052975e36a0345e81c77e->enter($__internal_1d11b84d0c641f0c5e21dc0f67aadac21eca442ba29052975e36a0345e81c77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_1d11b84d0c641f0c5e21dc0f67aadac21eca442ba29052975e36a0345e81c77e->leave($__internal_1d11b84d0c641f0c5e21dc0f67aadac21eca442ba29052975e36a0345e81c77e_prof);

        
        $__internal_ad5c72f9d7f7c251919643da20529790f0478df0aadef47698c4e3575e2b17f3->leave($__internal_ad5c72f9d7f7c251919643da20529790f0478df0aadef47698c4e3575e2b17f3_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_13559cce330009dbbb77dc8d40b774e9b90f1b3b6f5b407095d93f4b7387f3a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13559cce330009dbbb77dc8d40b774e9b90f1b3b6f5b407095d93f4b7387f3a3->enter($__internal_13559cce330009dbbb77dc8d40b774e9b90f1b3b6f5b407095d93f4b7387f3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_dc5fa1b2ecdfb5202b33ae22e79e3027234f2ee14ced37dcadc9987df005820e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5fa1b2ecdfb5202b33ae22e79e3027234f2ee14ced37dcadc9987df005820e->enter($__internal_dc5fa1b2ecdfb5202b33ae22e79e3027234f2ee14ced37dcadc9987df005820e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_dc5fa1b2ecdfb5202b33ae22e79e3027234f2ee14ced37dcadc9987df005820e->leave($__internal_dc5fa1b2ecdfb5202b33ae22e79e3027234f2ee14ced37dcadc9987df005820e_prof);

        
        $__internal_13559cce330009dbbb77dc8d40b774e9b90f1b3b6f5b407095d93f4b7387f3a3->leave($__internal_13559cce330009dbbb77dc8d40b774e9b90f1b3b6f5b407095d93f4b7387f3a3_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_4c804f26dd44ef79456f6e77dde71a5a1594fe115b38bfec288c9ca9d3a5e1bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c804f26dd44ef79456f6e77dde71a5a1594fe115b38bfec288c9ca9d3a5e1bc->enter($__internal_4c804f26dd44ef79456f6e77dde71a5a1594fe115b38bfec288c9ca9d3a5e1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_61e428952a45c2157c94191886f38805d36475e4109962ee8dd47783c8aa9325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e428952a45c2157c94191886f38805d36475e4109962ee8dd47783c8aa9325->enter($__internal_61e428952a45c2157c94191886f38805d36475e4109962ee8dd47783c8aa9325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_61e428952a45c2157c94191886f38805d36475e4109962ee8dd47783c8aa9325->leave($__internal_61e428952a45c2157c94191886f38805d36475e4109962ee8dd47783c8aa9325_prof);

        
        $__internal_4c804f26dd44ef79456f6e77dde71a5a1594fe115b38bfec288c9ca9d3a5e1bc->leave($__internal_4c804f26dd44ef79456f6e77dde71a5a1594fe115b38bfec288c9ca9d3a5e1bc_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_50393b9ff96bdab6db6125da6dde93e6200cf4911084007c8e6f15cce685905b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50393b9ff96bdab6db6125da6dde93e6200cf4911084007c8e6f15cce685905b->enter($__internal_50393b9ff96bdab6db6125da6dde93e6200cf4911084007c8e6f15cce685905b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_c95df8fe220a73b6e8b027baad24ddc09dea73097970fa72f41148bcb7dc4e66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c95df8fe220a73b6e8b027baad24ddc09dea73097970fa72f41148bcb7dc4e66->enter($__internal_c95df8fe220a73b6e8b027baad24ddc09dea73097970fa72f41148bcb7dc4e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c95df8fe220a73b6e8b027baad24ddc09dea73097970fa72f41148bcb7dc4e66->leave($__internal_c95df8fe220a73b6e8b027baad24ddc09dea73097970fa72f41148bcb7dc4e66_prof);

        
        $__internal_50393b9ff96bdab6db6125da6dde93e6200cf4911084007c8e6f15cce685905b->leave($__internal_50393b9ff96bdab6db6125da6dde93e6200cf4911084007c8e6f15cce685905b_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_57959594dc3ddd5cccf153e8d3a04b97d1aa9de302436ad2e77400a03068bd7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57959594dc3ddd5cccf153e8d3a04b97d1aa9de302436ad2e77400a03068bd7f->enter($__internal_57959594dc3ddd5cccf153e8d3a04b97d1aa9de302436ad2e77400a03068bd7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_b301d174d5a7f06c0cb7e234d89380363c894bcfc5030951b480b448e8dd1a3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b301d174d5a7f06c0cb7e234d89380363c894bcfc5030951b480b448e8dd1a3a->enter($__internal_b301d174d5a7f06c0cb7e234d89380363c894bcfc5030951b480b448e8dd1a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_b301d174d5a7f06c0cb7e234d89380363c894bcfc5030951b480b448e8dd1a3a->leave($__internal_b301d174d5a7f06c0cb7e234d89380363c894bcfc5030951b480b448e8dd1a3a_prof);

        
        $__internal_57959594dc3ddd5cccf153e8d3a04b97d1aa9de302436ad2e77400a03068bd7f->leave($__internal_57959594dc3ddd5cccf153e8d3a04b97d1aa9de302436ad2e77400a03068bd7f_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_f743e956e1bfbb3c8ebe22565a39b0dcd6212cd3e899473e6cfa145c0c3a6206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f743e956e1bfbb3c8ebe22565a39b0dcd6212cd3e899473e6cfa145c0c3a6206->enter($__internal_f743e956e1bfbb3c8ebe22565a39b0dcd6212cd3e899473e6cfa145c0c3a6206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_9c27d2c5dfed36104b71857d05bef7f5a0115a9a5c5302fcda5b54d23ff6de37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c27d2c5dfed36104b71857d05bef7f5a0115a9a5c5302fcda5b54d23ff6de37->enter($__internal_9c27d2c5dfed36104b71857d05bef7f5a0115a9a5c5302fcda5b54d23ff6de37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_9c27d2c5dfed36104b71857d05bef7f5a0115a9a5c5302fcda5b54d23ff6de37->leave($__internal_9c27d2c5dfed36104b71857d05bef7f5a0115a9a5c5302fcda5b54d23ff6de37_prof);

        
        $__internal_f743e956e1bfbb3c8ebe22565a39b0dcd6212cd3e899473e6cfa145c0c3a6206->leave($__internal_f743e956e1bfbb3c8ebe22565a39b0dcd6212cd3e899473e6cfa145c0c3a6206_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_1cf4851fdda1276592c6794dad08e5ad8952dade1b6dba93b4055c7c1c240189 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cf4851fdda1276592c6794dad08e5ad8952dade1b6dba93b4055c7c1c240189->enter($__internal_1cf4851fdda1276592c6794dad08e5ad8952dade1b6dba93b4055c7c1c240189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_6b202cfba958fd0e24a6e2e23d3eee3898ddcc42b54842205c6cc32c5685c83b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b202cfba958fd0e24a6e2e23d3eee3898ddcc42b54842205c6cc32c5685c83b->enter($__internal_6b202cfba958fd0e24a6e2e23d3eee3898ddcc42b54842205c6cc32c5685c83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_6b202cfba958fd0e24a6e2e23d3eee3898ddcc42b54842205c6cc32c5685c83b->leave($__internal_6b202cfba958fd0e24a6e2e23d3eee3898ddcc42b54842205c6cc32c5685c83b_prof);

        
        $__internal_1cf4851fdda1276592c6794dad08e5ad8952dade1b6dba93b4055c7c1c240189->leave($__internal_1cf4851fdda1276592c6794dad08e5ad8952dade1b6dba93b4055c7c1c240189_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_a2c6caf050a61205d7b2aa3c49531f9e0098c7c0d5229540d3f6313d42364e9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2c6caf050a61205d7b2aa3c49531f9e0098c7c0d5229540d3f6313d42364e9f->enter($__internal_a2c6caf050a61205d7b2aa3c49531f9e0098c7c0d5229540d3f6313d42364e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_8d80fbf9a10dac509512754a4e1d51c604b8c126ea3be3d04852c8737f5d003d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d80fbf9a10dac509512754a4e1d51c604b8c126ea3be3d04852c8737f5d003d->enter($__internal_8d80fbf9a10dac509512754a4e1d51c604b8c126ea3be3d04852c8737f5d003d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8d80fbf9a10dac509512754a4e1d51c604b8c126ea3be3d04852c8737f5d003d->leave($__internal_8d80fbf9a10dac509512754a4e1d51c604b8c126ea3be3d04852c8737f5d003d_prof);

        
        $__internal_a2c6caf050a61205d7b2aa3c49531f9e0098c7c0d5229540d3f6313d42364e9f->leave($__internal_a2c6caf050a61205d7b2aa3c49531f9e0098c7c0d5229540d3f6313d42364e9f_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_60e7a0f0ca2a63c430735ac0f3a6d75102165ca9a58bfd26cc447a03c6a17000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60e7a0f0ca2a63c430735ac0f3a6d75102165ca9a58bfd26cc447a03c6a17000->enter($__internal_60e7a0f0ca2a63c430735ac0f3a6d75102165ca9a58bfd26cc447a03c6a17000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_006034376ead8f3bfe1c67ca0691c438c2d5dc69a9f231bb1caf4603e6fd03b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_006034376ead8f3bfe1c67ca0691c438c2d5dc69a9f231bb1caf4603e6fd03b4->enter($__internal_006034376ead8f3bfe1c67ca0691c438c2d5dc69a9f231bb1caf4603e6fd03b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_006034376ead8f3bfe1c67ca0691c438c2d5dc69a9f231bb1caf4603e6fd03b4->leave($__internal_006034376ead8f3bfe1c67ca0691c438c2d5dc69a9f231bb1caf4603e6fd03b4_prof);

        
        $__internal_60e7a0f0ca2a63c430735ac0f3a6d75102165ca9a58bfd26cc447a03c6a17000->leave($__internal_60e7a0f0ca2a63c430735ac0f3a6d75102165ca9a58bfd26cc447a03c6a17000_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_4a4c9b0f3d30e9c0b7640371b192160e5a1619f37ff4890c277f10fecc3f33ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a4c9b0f3d30e9c0b7640371b192160e5a1619f37ff4890c277f10fecc3f33ab->enter($__internal_4a4c9b0f3d30e9c0b7640371b192160e5a1619f37ff4890c277f10fecc3f33ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_23e61b7c78d1251b60b700b337e39d059b7453a8bbf1c0cf5b4e41f269de30d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23e61b7c78d1251b60b700b337e39d059b7453a8bbf1c0cf5b4e41f269de30d9->enter($__internal_23e61b7c78d1251b60b700b337e39d059b7453a8bbf1c0cf5b4e41f269de30d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_23e61b7c78d1251b60b700b337e39d059b7453a8bbf1c0cf5b4e41f269de30d9->leave($__internal_23e61b7c78d1251b60b700b337e39d059b7453a8bbf1c0cf5b4e41f269de30d9_prof);

        
        $__internal_4a4c9b0f3d30e9c0b7640371b192160e5a1619f37ff4890c277f10fecc3f33ab->leave($__internal_4a4c9b0f3d30e9c0b7640371b192160e5a1619f37ff4890c277f10fecc3f33ab_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_fbb55643dbbddff75733379c92e85c0f53054ebb40bdc264d9dcf297d8f5784a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbb55643dbbddff75733379c92e85c0f53054ebb40bdc264d9dcf297d8f5784a->enter($__internal_fbb55643dbbddff75733379c92e85c0f53054ebb40bdc264d9dcf297d8f5784a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_c8352fdacfcaf18057b58295061450d99efd293fa7220858194ace5054d77c05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8352fdacfcaf18057b58295061450d99efd293fa7220858194ace5054d77c05->enter($__internal_c8352fdacfcaf18057b58295061450d99efd293fa7220858194ace5054d77c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c8352fdacfcaf18057b58295061450d99efd293fa7220858194ace5054d77c05->leave($__internal_c8352fdacfcaf18057b58295061450d99efd293fa7220858194ace5054d77c05_prof);

        
        $__internal_fbb55643dbbddff75733379c92e85c0f53054ebb40bdc264d9dcf297d8f5784a->leave($__internal_fbb55643dbbddff75733379c92e85c0f53054ebb40bdc264d9dcf297d8f5784a_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_175c5eed5497f0cdab216a6a9a935aa8d4886b589d941b5e3b7f3829e41e72d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_175c5eed5497f0cdab216a6a9a935aa8d4886b589d941b5e3b7f3829e41e72d0->enter($__internal_175c5eed5497f0cdab216a6a9a935aa8d4886b589d941b5e3b7f3829e41e72d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_e777d028c7c6d85c8ee589de9aacf636193268f5dcb4a6aac794693593312263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e777d028c7c6d85c8ee589de9aacf636193268f5dcb4a6aac794693593312263->enter($__internal_e777d028c7c6d85c8ee589de9aacf636193268f5dcb4a6aac794693593312263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_e777d028c7c6d85c8ee589de9aacf636193268f5dcb4a6aac794693593312263->leave($__internal_e777d028c7c6d85c8ee589de9aacf636193268f5dcb4a6aac794693593312263_prof);

        
        $__internal_175c5eed5497f0cdab216a6a9a935aa8d4886b589d941b5e3b7f3829e41e72d0->leave($__internal_175c5eed5497f0cdab216a6a9a935aa8d4886b589d941b5e3b7f3829e41e72d0_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_9bbe71615fb0903067daca22b071aae47d0f2829caa6ec46ca5f3101a7d7c990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bbe71615fb0903067daca22b071aae47d0f2829caa6ec46ca5f3101a7d7c990->enter($__internal_9bbe71615fb0903067daca22b071aae47d0f2829caa6ec46ca5f3101a7d7c990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_4adec955d83bddfad893ef6a0e9435a7c0e6b4724fe3f88240176bf961e5855e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4adec955d83bddfad893ef6a0e9435a7c0e6b4724fe3f88240176bf961e5855e->enter($__internal_4adec955d83bddfad893ef6a0e9435a7c0e6b4724fe3f88240176bf961e5855e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_4adec955d83bddfad893ef6a0e9435a7c0e6b4724fe3f88240176bf961e5855e->leave($__internal_4adec955d83bddfad893ef6a0e9435a7c0e6b4724fe3f88240176bf961e5855e_prof);

        
        $__internal_9bbe71615fb0903067daca22b071aae47d0f2829caa6ec46ca5f3101a7d7c990->leave($__internal_9bbe71615fb0903067daca22b071aae47d0f2829caa6ec46ca5f3101a7d7c990_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_15be789489c82cff2ad1e67d96d480af95fd965bc2be0313311a5f4fa4339e43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15be789489c82cff2ad1e67d96d480af95fd965bc2be0313311a5f4fa4339e43->enter($__internal_15be789489c82cff2ad1e67d96d480af95fd965bc2be0313311a5f4fa4339e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_217b1de701e0eab937e938d2d714c922011a108a9273d4cbb3002588674871d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217b1de701e0eab937e938d2d714c922011a108a9273d4cbb3002588674871d4->enter($__internal_217b1de701e0eab937e938d2d714c922011a108a9273d4cbb3002588674871d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_217b1de701e0eab937e938d2d714c922011a108a9273d4cbb3002588674871d4->leave($__internal_217b1de701e0eab937e938d2d714c922011a108a9273d4cbb3002588674871d4_prof);

        
        $__internal_15be789489c82cff2ad1e67d96d480af95fd965bc2be0313311a5f4fa4339e43->leave($__internal_15be789489c82cff2ad1e67d96d480af95fd965bc2be0313311a5f4fa4339e43_prof);

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
