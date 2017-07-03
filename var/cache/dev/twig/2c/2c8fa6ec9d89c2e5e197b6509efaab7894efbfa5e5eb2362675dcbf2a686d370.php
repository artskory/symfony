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
        $__internal_4e2e19d59839cb8d4952d625422916095e8b82f0eae96f80fb4b4e67b6b94541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e2e19d59839cb8d4952d625422916095e8b82f0eae96f80fb4b4e67b6b94541->enter($__internal_4e2e19d59839cb8d4952d625422916095e8b82f0eae96f80fb4b4e67b6b94541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_e97204693c5bc65518b29f4144ffd46b26d5a3a675056f32185137f4d8894c59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97204693c5bc65518b29f4144ffd46b26d5a3a675056f32185137f4d8894c59->enter($__internal_e97204693c5bc65518b29f4144ffd46b26d5a3a675056f32185137f4d8894c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_4e2e19d59839cb8d4952d625422916095e8b82f0eae96f80fb4b4e67b6b94541->leave($__internal_4e2e19d59839cb8d4952d625422916095e8b82f0eae96f80fb4b4e67b6b94541_prof);

        
        $__internal_e97204693c5bc65518b29f4144ffd46b26d5a3a675056f32185137f4d8894c59->leave($__internal_e97204693c5bc65518b29f4144ffd46b26d5a3a675056f32185137f4d8894c59_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_916700d036ab6c114049aa428c36d2ae1cab6cd6ef7c6089c34d2cb24e9a1373 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_916700d036ab6c114049aa428c36d2ae1cab6cd6ef7c6089c34d2cb24e9a1373->enter($__internal_916700d036ab6c114049aa428c36d2ae1cab6cd6ef7c6089c34d2cb24e9a1373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_e472a494159f9c9d6086d301b077233ac70611f95b403541322ceacf4b0cfa0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e472a494159f9c9d6086d301b077233ac70611f95b403541322ceacf4b0cfa0a->enter($__internal_e472a494159f9c9d6086d301b077233ac70611f95b403541322ceacf4b0cfa0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e472a494159f9c9d6086d301b077233ac70611f95b403541322ceacf4b0cfa0a->leave($__internal_e472a494159f9c9d6086d301b077233ac70611f95b403541322ceacf4b0cfa0a_prof);

        
        $__internal_916700d036ab6c114049aa428c36d2ae1cab6cd6ef7c6089c34d2cb24e9a1373->leave($__internal_916700d036ab6c114049aa428c36d2ae1cab6cd6ef7c6089c34d2cb24e9a1373_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_632aa8262cd0866ae44123f7ea48d6d6fcf0d43bc48d2535e43b798a85041fad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_632aa8262cd0866ae44123f7ea48d6d6fcf0d43bc48d2535e43b798a85041fad->enter($__internal_632aa8262cd0866ae44123f7ea48d6d6fcf0d43bc48d2535e43b798a85041fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_d0d7c3ea7b2a43bea383e75c0c0842aa58522a43ca012a35a3f1631eb989d9f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d7c3ea7b2a43bea383e75c0c0842aa58522a43ca012a35a3f1631eb989d9f4->enter($__internal_d0d7c3ea7b2a43bea383e75c0c0842aa58522a43ca012a35a3f1631eb989d9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_d0d7c3ea7b2a43bea383e75c0c0842aa58522a43ca012a35a3f1631eb989d9f4->leave($__internal_d0d7c3ea7b2a43bea383e75c0c0842aa58522a43ca012a35a3f1631eb989d9f4_prof);

        
        $__internal_632aa8262cd0866ae44123f7ea48d6d6fcf0d43bc48d2535e43b798a85041fad->leave($__internal_632aa8262cd0866ae44123f7ea48d6d6fcf0d43bc48d2535e43b798a85041fad_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_cb0635830f895790e793e2fc1fe1756d04240ce9158040c0c4215a3e47046831 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb0635830f895790e793e2fc1fe1756d04240ce9158040c0c4215a3e47046831->enter($__internal_cb0635830f895790e793e2fc1fe1756d04240ce9158040c0c4215a3e47046831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_d9bd260a96884809cfee6555c0451fa6f82176720e0a083a19d7eacb467a1c7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9bd260a96884809cfee6555c0451fa6f82176720e0a083a19d7eacb467a1c7b->enter($__internal_d9bd260a96884809cfee6555c0451fa6f82176720e0a083a19d7eacb467a1c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_d9bd260a96884809cfee6555c0451fa6f82176720e0a083a19d7eacb467a1c7b->leave($__internal_d9bd260a96884809cfee6555c0451fa6f82176720e0a083a19d7eacb467a1c7b_prof);

        
        $__internal_cb0635830f895790e793e2fc1fe1756d04240ce9158040c0c4215a3e47046831->leave($__internal_cb0635830f895790e793e2fc1fe1756d04240ce9158040c0c4215a3e47046831_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_4f0b8ce10afc0a6c51771e07c4fe7bcb9934671eec419101875ad12166544d63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f0b8ce10afc0a6c51771e07c4fe7bcb9934671eec419101875ad12166544d63->enter($__internal_4f0b8ce10afc0a6c51771e07c4fe7bcb9934671eec419101875ad12166544d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_8c41d00281df0840c5d31105816d90bc6dddc7db726afb673ef51df7757c4357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c41d00281df0840c5d31105816d90bc6dddc7db726afb673ef51df7757c4357->enter($__internal_8c41d00281df0840c5d31105816d90bc6dddc7db726afb673ef51df7757c4357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_14ebb00c1cb6a287d7ab42d393dc7d0ddf00d7120605a437e054c9db37e1a8fb = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_8f7203bba6559fcaaefdec5ddbbba8d34727dcb783193a6569ac3f40dd0f0e43 = "{{") && ('' === $__internal_8f7203bba6559fcaaefdec5ddbbba8d34727dcb783193a6569ac3f40dd0f0e43 || 0 === strpos($__internal_14ebb00c1cb6a287d7ab42d393dc7d0ddf00d7120605a437e054c9db37e1a8fb, $__internal_8f7203bba6559fcaaefdec5ddbbba8d34727dcb783193a6569ac3f40dd0f0e43)));
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
        
        $__internal_8c41d00281df0840c5d31105816d90bc6dddc7db726afb673ef51df7757c4357->leave($__internal_8c41d00281df0840c5d31105816d90bc6dddc7db726afb673ef51df7757c4357_prof);

        
        $__internal_4f0b8ce10afc0a6c51771e07c4fe7bcb9934671eec419101875ad12166544d63->leave($__internal_4f0b8ce10afc0a6c51771e07c4fe7bcb9934671eec419101875ad12166544d63_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_a61fb79fa1567778d3a9c5faf47431649c2aa78b252cb8a4d22543144dcd39a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a61fb79fa1567778d3a9c5faf47431649c2aa78b252cb8a4d22543144dcd39a9->enter($__internal_a61fb79fa1567778d3a9c5faf47431649c2aa78b252cb8a4d22543144dcd39a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_383b25f452f6e2e7eba5c670dfcc4e0ede9433aaefa299eac4207926f928bc54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_383b25f452f6e2e7eba5c670dfcc4e0ede9433aaefa299eac4207926f928bc54->enter($__internal_383b25f452f6e2e7eba5c670dfcc4e0ede9433aaefa299eac4207926f928bc54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_383b25f452f6e2e7eba5c670dfcc4e0ede9433aaefa299eac4207926f928bc54->leave($__internal_383b25f452f6e2e7eba5c670dfcc4e0ede9433aaefa299eac4207926f928bc54_prof);

        
        $__internal_a61fb79fa1567778d3a9c5faf47431649c2aa78b252cb8a4d22543144dcd39a9->leave($__internal_a61fb79fa1567778d3a9c5faf47431649c2aa78b252cb8a4d22543144dcd39a9_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_d4579c95fa62d2413275850e6c41568ffa0d30672200920280ff48c34376a70f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4579c95fa62d2413275850e6c41568ffa0d30672200920280ff48c34376a70f->enter($__internal_d4579c95fa62d2413275850e6c41568ffa0d30672200920280ff48c34376a70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_5df1624971fccde0fececb345793f40cc4f6e4d992e7f93e4d025406307a80fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df1624971fccde0fececb345793f40cc4f6e4d992e7f93e4d025406307a80fd->enter($__internal_5df1624971fccde0fececb345793f40cc4f6e4d992e7f93e4d025406307a80fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_5df1624971fccde0fececb345793f40cc4f6e4d992e7f93e4d025406307a80fd->leave($__internal_5df1624971fccde0fececb345793f40cc4f6e4d992e7f93e4d025406307a80fd_prof);

        
        $__internal_d4579c95fa62d2413275850e6c41568ffa0d30672200920280ff48c34376a70f->leave($__internal_d4579c95fa62d2413275850e6c41568ffa0d30672200920280ff48c34376a70f_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_c4feefb5b193875dd47c461870d3421f017bebe6cf18b4e49e809b283e7d623c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4feefb5b193875dd47c461870d3421f017bebe6cf18b4e49e809b283e7d623c->enter($__internal_c4feefb5b193875dd47c461870d3421f017bebe6cf18b4e49e809b283e7d623c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_7949f67461246f0aa8e1c1573e8cfdf8ddf59af4a675403e614799fc0e6e65d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7949f67461246f0aa8e1c1573e8cfdf8ddf59af4a675403e614799fc0e6e65d7->enter($__internal_7949f67461246f0aa8e1c1573e8cfdf8ddf59af4a675403e614799fc0e6e65d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_7949f67461246f0aa8e1c1573e8cfdf8ddf59af4a675403e614799fc0e6e65d7->leave($__internal_7949f67461246f0aa8e1c1573e8cfdf8ddf59af4a675403e614799fc0e6e65d7_prof);

        
        $__internal_c4feefb5b193875dd47c461870d3421f017bebe6cf18b4e49e809b283e7d623c->leave($__internal_c4feefb5b193875dd47c461870d3421f017bebe6cf18b4e49e809b283e7d623c_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_004edf84aaa243a864563819d9aef2ac239d5d5d6d68bab86d1137f326126aed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_004edf84aaa243a864563819d9aef2ac239d5d5d6d68bab86d1137f326126aed->enter($__internal_004edf84aaa243a864563819d9aef2ac239d5d5d6d68bab86d1137f326126aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_fa748ad5c37ab2ef9fbffcf5f8415a7c87a83f49410d89c650427cc70c6b01d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa748ad5c37ab2ef9fbffcf5f8415a7c87a83f49410d89c650427cc70c6b01d2->enter($__internal_fa748ad5c37ab2ef9fbffcf5f8415a7c87a83f49410d89c650427cc70c6b01d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_fa748ad5c37ab2ef9fbffcf5f8415a7c87a83f49410d89c650427cc70c6b01d2->leave($__internal_fa748ad5c37ab2ef9fbffcf5f8415a7c87a83f49410d89c650427cc70c6b01d2_prof);

        
        $__internal_004edf84aaa243a864563819d9aef2ac239d5d5d6d68bab86d1137f326126aed->leave($__internal_004edf84aaa243a864563819d9aef2ac239d5d5d6d68bab86d1137f326126aed_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_4c7b76ba26841cd2cfce8356e5b32b51324023dbdf3fb27b1935b16149a509d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c7b76ba26841cd2cfce8356e5b32b51324023dbdf3fb27b1935b16149a509d2->enter($__internal_4c7b76ba26841cd2cfce8356e5b32b51324023dbdf3fb27b1935b16149a509d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_c35b08c7234c66861c867b8c58411d40ccb82b544a8adf2cfb2a4243f85c7b48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c35b08c7234c66861c867b8c58411d40ccb82b544a8adf2cfb2a4243f85c7b48->enter($__internal_c35b08c7234c66861c867b8c58411d40ccb82b544a8adf2cfb2a4243f85c7b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_c35b08c7234c66861c867b8c58411d40ccb82b544a8adf2cfb2a4243f85c7b48->leave($__internal_c35b08c7234c66861c867b8c58411d40ccb82b544a8adf2cfb2a4243f85c7b48_prof);

        
        $__internal_4c7b76ba26841cd2cfce8356e5b32b51324023dbdf3fb27b1935b16149a509d2->leave($__internal_4c7b76ba26841cd2cfce8356e5b32b51324023dbdf3fb27b1935b16149a509d2_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_a9a2042cd0c9efd9824c74e6ff399f04e8f6998edee0002d97438a70e0c244ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9a2042cd0c9efd9824c74e6ff399f04e8f6998edee0002d97438a70e0c244ad->enter($__internal_a9a2042cd0c9efd9824c74e6ff399f04e8f6998edee0002d97438a70e0c244ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_f0e33204792236c35a688e8ac4140819e106df721628667b047d21936c89cde3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e33204792236c35a688e8ac4140819e106df721628667b047d21936c89cde3->enter($__internal_f0e33204792236c35a688e8ac4140819e106df721628667b047d21936c89cde3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_f0e33204792236c35a688e8ac4140819e106df721628667b047d21936c89cde3->leave($__internal_f0e33204792236c35a688e8ac4140819e106df721628667b047d21936c89cde3_prof);

        
        $__internal_a9a2042cd0c9efd9824c74e6ff399f04e8f6998edee0002d97438a70e0c244ad->leave($__internal_a9a2042cd0c9efd9824c74e6ff399f04e8f6998edee0002d97438a70e0c244ad_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_830394606f244928d51bbdfe49d69e7e9247bca3ee9888a6d4f37c5c9ebd57f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_830394606f244928d51bbdfe49d69e7e9247bca3ee9888a6d4f37c5c9ebd57f0->enter($__internal_830394606f244928d51bbdfe49d69e7e9247bca3ee9888a6d4f37c5c9ebd57f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_6c3bc756e01b364b4639271d496bc1cd8eb8ffacf8b1d8838e2ea5646b4ccd5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c3bc756e01b364b4639271d496bc1cd8eb8ffacf8b1d8838e2ea5646b4ccd5d->enter($__internal_6c3bc756e01b364b4639271d496bc1cd8eb8ffacf8b1d8838e2ea5646b4ccd5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_6c3bc756e01b364b4639271d496bc1cd8eb8ffacf8b1d8838e2ea5646b4ccd5d->leave($__internal_6c3bc756e01b364b4639271d496bc1cd8eb8ffacf8b1d8838e2ea5646b4ccd5d_prof);

        
        $__internal_830394606f244928d51bbdfe49d69e7e9247bca3ee9888a6d4f37c5c9ebd57f0->leave($__internal_830394606f244928d51bbdfe49d69e7e9247bca3ee9888a6d4f37c5c9ebd57f0_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_6c16988dde98052260f19912420eaa5068096bffe7261c21cbcb1d9407ca9970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c16988dde98052260f19912420eaa5068096bffe7261c21cbcb1d9407ca9970->enter($__internal_6c16988dde98052260f19912420eaa5068096bffe7261c21cbcb1d9407ca9970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_158f5bd70f287820acaf513b2127bf198215b00cdf7008361f5b00a7edc0cf7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_158f5bd70f287820acaf513b2127bf198215b00cdf7008361f5b00a7edc0cf7d->enter($__internal_158f5bd70f287820acaf513b2127bf198215b00cdf7008361f5b00a7edc0cf7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_158f5bd70f287820acaf513b2127bf198215b00cdf7008361f5b00a7edc0cf7d->leave($__internal_158f5bd70f287820acaf513b2127bf198215b00cdf7008361f5b00a7edc0cf7d_prof);

        
        $__internal_6c16988dde98052260f19912420eaa5068096bffe7261c21cbcb1d9407ca9970->leave($__internal_6c16988dde98052260f19912420eaa5068096bffe7261c21cbcb1d9407ca9970_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_fff16019a95be78ea3cffc50413cf25a3aad03747d73ad2fc254e637bac97e1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fff16019a95be78ea3cffc50413cf25a3aad03747d73ad2fc254e637bac97e1f->enter($__internal_fff16019a95be78ea3cffc50413cf25a3aad03747d73ad2fc254e637bac97e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_e227943cc26a73a7a54fa8ae1cb67b0d9a5bf52e4ccb847d6d4f6f5737631d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e227943cc26a73a7a54fa8ae1cb67b0d9a5bf52e4ccb847d6d4f6f5737631d3a->enter($__internal_e227943cc26a73a7a54fa8ae1cb67b0d9a5bf52e4ccb847d6d4f6f5737631d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_e227943cc26a73a7a54fa8ae1cb67b0d9a5bf52e4ccb847d6d4f6f5737631d3a->leave($__internal_e227943cc26a73a7a54fa8ae1cb67b0d9a5bf52e4ccb847d6d4f6f5737631d3a_prof);

        
        $__internal_fff16019a95be78ea3cffc50413cf25a3aad03747d73ad2fc254e637bac97e1f->leave($__internal_fff16019a95be78ea3cffc50413cf25a3aad03747d73ad2fc254e637bac97e1f_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_0b5cf56097292d7d4a46759e4b9c31ee5f63ac6d366b3312ab354fef11205fe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b5cf56097292d7d4a46759e4b9c31ee5f63ac6d366b3312ab354fef11205fe5->enter($__internal_0b5cf56097292d7d4a46759e4b9c31ee5f63ac6d366b3312ab354fef11205fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_c8b8780891cf782225fcf3853290e8a9a528e10110eb0bf609d9c3e0a14ea949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b8780891cf782225fcf3853290e8a9a528e10110eb0bf609d9c3e0a14ea949->enter($__internal_c8b8780891cf782225fcf3853290e8a9a528e10110eb0bf609d9c3e0a14ea949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_c8b8780891cf782225fcf3853290e8a9a528e10110eb0bf609d9c3e0a14ea949->leave($__internal_c8b8780891cf782225fcf3853290e8a9a528e10110eb0bf609d9c3e0a14ea949_prof);

        
        $__internal_0b5cf56097292d7d4a46759e4b9c31ee5f63ac6d366b3312ab354fef11205fe5->leave($__internal_0b5cf56097292d7d4a46759e4b9c31ee5f63ac6d366b3312ab354fef11205fe5_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_86715a483a1fd029f92ec43956e681045401ed4d79984880951a817ae4a94efc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86715a483a1fd029f92ec43956e681045401ed4d79984880951a817ae4a94efc->enter($__internal_86715a483a1fd029f92ec43956e681045401ed4d79984880951a817ae4a94efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_626ed6260c2c1dc1f3508d3dff17ca2a671f574dce080058f56c166a0f80f1a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626ed6260c2c1dc1f3508d3dff17ca2a671f574dce080058f56c166a0f80f1a1->enter($__internal_626ed6260c2c1dc1f3508d3dff17ca2a671f574dce080058f56c166a0f80f1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_626ed6260c2c1dc1f3508d3dff17ca2a671f574dce080058f56c166a0f80f1a1->leave($__internal_626ed6260c2c1dc1f3508d3dff17ca2a671f574dce080058f56c166a0f80f1a1_prof);

        
        $__internal_86715a483a1fd029f92ec43956e681045401ed4d79984880951a817ae4a94efc->leave($__internal_86715a483a1fd029f92ec43956e681045401ed4d79984880951a817ae4a94efc_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_01019912cd12eb1c82d5a48d6e96b4e38c0fec3031acdd74db21cad4d49f2be3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01019912cd12eb1c82d5a48d6e96b4e38c0fec3031acdd74db21cad4d49f2be3->enter($__internal_01019912cd12eb1c82d5a48d6e96b4e38c0fec3031acdd74db21cad4d49f2be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_8c634d80f3043cc487bcba7b90246621f94bc314d3f26188eba00c8bb158f40e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c634d80f3043cc487bcba7b90246621f94bc314d3f26188eba00c8bb158f40e->enter($__internal_8c634d80f3043cc487bcba7b90246621f94bc314d3f26188eba00c8bb158f40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_8c634d80f3043cc487bcba7b90246621f94bc314d3f26188eba00c8bb158f40e->leave($__internal_8c634d80f3043cc487bcba7b90246621f94bc314d3f26188eba00c8bb158f40e_prof);

        
        $__internal_01019912cd12eb1c82d5a48d6e96b4e38c0fec3031acdd74db21cad4d49f2be3->leave($__internal_01019912cd12eb1c82d5a48d6e96b4e38c0fec3031acdd74db21cad4d49f2be3_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_040a4ff705148491e51f99b8224545b1ee84c513bd8fe52740e9072d8894941d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_040a4ff705148491e51f99b8224545b1ee84c513bd8fe52740e9072d8894941d->enter($__internal_040a4ff705148491e51f99b8224545b1ee84c513bd8fe52740e9072d8894941d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_1d3d7bb6692b250910caddbdde2d40877f66e928a2e9d1d8d2d5c0209b8bc05f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d3d7bb6692b250910caddbdde2d40877f66e928a2e9d1d8d2d5c0209b8bc05f->enter($__internal_1d3d7bb6692b250910caddbdde2d40877f66e928a2e9d1d8d2d5c0209b8bc05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_1d3d7bb6692b250910caddbdde2d40877f66e928a2e9d1d8d2d5c0209b8bc05f->leave($__internal_1d3d7bb6692b250910caddbdde2d40877f66e928a2e9d1d8d2d5c0209b8bc05f_prof);

        
        $__internal_040a4ff705148491e51f99b8224545b1ee84c513bd8fe52740e9072d8894941d->leave($__internal_040a4ff705148491e51f99b8224545b1ee84c513bd8fe52740e9072d8894941d_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_5e55adfb9eff0f10b792d8307b06f392c02676404f07c2e85925ec3a3137bd95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e55adfb9eff0f10b792d8307b06f392c02676404f07c2e85925ec3a3137bd95->enter($__internal_5e55adfb9eff0f10b792d8307b06f392c02676404f07c2e85925ec3a3137bd95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_3e72f806fd93fc4641c5ad43d62a805db2bad990e8ffafa6f1b97fda9867b1c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e72f806fd93fc4641c5ad43d62a805db2bad990e8ffafa6f1b97fda9867b1c2->enter($__internal_3e72f806fd93fc4641c5ad43d62a805db2bad990e8ffafa6f1b97fda9867b1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_3e72f806fd93fc4641c5ad43d62a805db2bad990e8ffafa6f1b97fda9867b1c2->leave($__internal_3e72f806fd93fc4641c5ad43d62a805db2bad990e8ffafa6f1b97fda9867b1c2_prof);

        
        $__internal_5e55adfb9eff0f10b792d8307b06f392c02676404f07c2e85925ec3a3137bd95->leave($__internal_5e55adfb9eff0f10b792d8307b06f392c02676404f07c2e85925ec3a3137bd95_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_7b746092a610f3f9a47cc9585bf3a6f2fab4c0948b93ec370b4a38aa921f67ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b746092a610f3f9a47cc9585bf3a6f2fab4c0948b93ec370b4a38aa921f67ed->enter($__internal_7b746092a610f3f9a47cc9585bf3a6f2fab4c0948b93ec370b4a38aa921f67ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b2fb993ce5e1838cb9e4f52951c93c9c79f7f23f6a076446c15936a3ed853610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2fb993ce5e1838cb9e4f52951c93c9c79f7f23f6a076446c15936a3ed853610->enter($__internal_b2fb993ce5e1838cb9e4f52951c93c9c79f7f23f6a076446c15936a3ed853610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_b2fb993ce5e1838cb9e4f52951c93c9c79f7f23f6a076446c15936a3ed853610->leave($__internal_b2fb993ce5e1838cb9e4f52951c93c9c79f7f23f6a076446c15936a3ed853610_prof);

        
        $__internal_7b746092a610f3f9a47cc9585bf3a6f2fab4c0948b93ec370b4a38aa921f67ed->leave($__internal_7b746092a610f3f9a47cc9585bf3a6f2fab4c0948b93ec370b4a38aa921f67ed_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_a8b8e65e6ff16e03f0dbf62caf9a1189287dbc448fe2b633b36beb3693cab137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8b8e65e6ff16e03f0dbf62caf9a1189287dbc448fe2b633b36beb3693cab137->enter($__internal_a8b8e65e6ff16e03f0dbf62caf9a1189287dbc448fe2b633b36beb3693cab137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_26f238820dcbc5446b8d2d5235af4f4a786be0c49ba2e2341758f03811b4b65e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f238820dcbc5446b8d2d5235af4f4a786be0c49ba2e2341758f03811b4b65e->enter($__internal_26f238820dcbc5446b8d2d5235af4f4a786be0c49ba2e2341758f03811b4b65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_26f238820dcbc5446b8d2d5235af4f4a786be0c49ba2e2341758f03811b4b65e->leave($__internal_26f238820dcbc5446b8d2d5235af4f4a786be0c49ba2e2341758f03811b4b65e_prof);

        
        $__internal_a8b8e65e6ff16e03f0dbf62caf9a1189287dbc448fe2b633b36beb3693cab137->leave($__internal_a8b8e65e6ff16e03f0dbf62caf9a1189287dbc448fe2b633b36beb3693cab137_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_906a55744fe238701c4930c7bc594cd408cf4155990c5c99b4e6ffa121f15db9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_906a55744fe238701c4930c7bc594cd408cf4155990c5c99b4e6ffa121f15db9->enter($__internal_906a55744fe238701c4930c7bc594cd408cf4155990c5c99b4e6ffa121f15db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_58d00d966cd7cf5dce7435f7e73624cc71d232274da6ffe8ebec251108180752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d00d966cd7cf5dce7435f7e73624cc71d232274da6ffe8ebec251108180752->enter($__internal_58d00d966cd7cf5dce7435f7e73624cc71d232274da6ffe8ebec251108180752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_58d00d966cd7cf5dce7435f7e73624cc71d232274da6ffe8ebec251108180752->leave($__internal_58d00d966cd7cf5dce7435f7e73624cc71d232274da6ffe8ebec251108180752_prof);

        
        $__internal_906a55744fe238701c4930c7bc594cd408cf4155990c5c99b4e6ffa121f15db9->leave($__internal_906a55744fe238701c4930c7bc594cd408cf4155990c5c99b4e6ffa121f15db9_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_ff07a78dbf987fa129ff21a028bbc82b02e893778b12c1b13bfa2897e82be7ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff07a78dbf987fa129ff21a028bbc82b02e893778b12c1b13bfa2897e82be7ab->enter($__internal_ff07a78dbf987fa129ff21a028bbc82b02e893778b12c1b13bfa2897e82be7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_e70f14073bbe1330cf00bcd1abfdcda523157cb01c608fb5d0515fa49a346808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e70f14073bbe1330cf00bcd1abfdcda523157cb01c608fb5d0515fa49a346808->enter($__internal_e70f14073bbe1330cf00bcd1abfdcda523157cb01c608fb5d0515fa49a346808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e70f14073bbe1330cf00bcd1abfdcda523157cb01c608fb5d0515fa49a346808->leave($__internal_e70f14073bbe1330cf00bcd1abfdcda523157cb01c608fb5d0515fa49a346808_prof);

        
        $__internal_ff07a78dbf987fa129ff21a028bbc82b02e893778b12c1b13bfa2897e82be7ab->leave($__internal_ff07a78dbf987fa129ff21a028bbc82b02e893778b12c1b13bfa2897e82be7ab_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_44aa7eee1e34c85cb25d3f0d2c2a9647271b046176c9ad0a3b54bfd2948abf85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44aa7eee1e34c85cb25d3f0d2c2a9647271b046176c9ad0a3b54bfd2948abf85->enter($__internal_44aa7eee1e34c85cb25d3f0d2c2a9647271b046176c9ad0a3b54bfd2948abf85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_47275e4b9180769d0f8e4a22d7ffb7d91230830187dfeaa48b65d07282b00f85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47275e4b9180769d0f8e4a22d7ffb7d91230830187dfeaa48b65d07282b00f85->enter($__internal_47275e4b9180769d0f8e4a22d7ffb7d91230830187dfeaa48b65d07282b00f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_47275e4b9180769d0f8e4a22d7ffb7d91230830187dfeaa48b65d07282b00f85->leave($__internal_47275e4b9180769d0f8e4a22d7ffb7d91230830187dfeaa48b65d07282b00f85_prof);

        
        $__internal_44aa7eee1e34c85cb25d3f0d2c2a9647271b046176c9ad0a3b54bfd2948abf85->leave($__internal_44aa7eee1e34c85cb25d3f0d2c2a9647271b046176c9ad0a3b54bfd2948abf85_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_47997f07f750a613ddff341d0ffb6efbf97af487a75599bf515f1b5bb6bd56d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47997f07f750a613ddff341d0ffb6efbf97af487a75599bf515f1b5bb6bd56d3->enter($__internal_47997f07f750a613ddff341d0ffb6efbf97af487a75599bf515f1b5bb6bd56d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_4b1280e629f0f42e5f5f84ad44487c8f1c3ff077c741fa2e30cd462fa1a93fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b1280e629f0f42e5f5f84ad44487c8f1c3ff077c741fa2e30cd462fa1a93fa9->enter($__internal_4b1280e629f0f42e5f5f84ad44487c8f1c3ff077c741fa2e30cd462fa1a93fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4b1280e629f0f42e5f5f84ad44487c8f1c3ff077c741fa2e30cd462fa1a93fa9->leave($__internal_4b1280e629f0f42e5f5f84ad44487c8f1c3ff077c741fa2e30cd462fa1a93fa9_prof);

        
        $__internal_47997f07f750a613ddff341d0ffb6efbf97af487a75599bf515f1b5bb6bd56d3->leave($__internal_47997f07f750a613ddff341d0ffb6efbf97af487a75599bf515f1b5bb6bd56d3_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4c795e602839b97b65ca5de1e879b80e05f1d2c073e4ee46486ac041fc6f121a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c795e602839b97b65ca5de1e879b80e05f1d2c073e4ee46486ac041fc6f121a->enter($__internal_4c795e602839b97b65ca5de1e879b80e05f1d2c073e4ee46486ac041fc6f121a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_fb72bb7706dd3f10cd24a29ea1874ec464c071c8affdf2499bdfb00b5955a6f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb72bb7706dd3f10cd24a29ea1874ec464c071c8affdf2499bdfb00b5955a6f0->enter($__internal_fb72bb7706dd3f10cd24a29ea1874ec464c071c8affdf2499bdfb00b5955a6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_fb72bb7706dd3f10cd24a29ea1874ec464c071c8affdf2499bdfb00b5955a6f0->leave($__internal_fb72bb7706dd3f10cd24a29ea1874ec464c071c8affdf2499bdfb00b5955a6f0_prof);

        
        $__internal_4c795e602839b97b65ca5de1e879b80e05f1d2c073e4ee46486ac041fc6f121a->leave($__internal_4c795e602839b97b65ca5de1e879b80e05f1d2c073e4ee46486ac041fc6f121a_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_0e42819910d0c625c819d551ffd874978e2d6287d28201303c70e5709b526ed6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e42819910d0c625c819d551ffd874978e2d6287d28201303c70e5709b526ed6->enter($__internal_0e42819910d0c625c819d551ffd874978e2d6287d28201303c70e5709b526ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_c24994b2eb7f5c82d59d376a7715a3a583bafee878bb804eabe5e1e5834f7388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24994b2eb7f5c82d59d376a7715a3a583bafee878bb804eabe5e1e5834f7388->enter($__internal_c24994b2eb7f5c82d59d376a7715a3a583bafee878bb804eabe5e1e5834f7388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_c24994b2eb7f5c82d59d376a7715a3a583bafee878bb804eabe5e1e5834f7388->leave($__internal_c24994b2eb7f5c82d59d376a7715a3a583bafee878bb804eabe5e1e5834f7388_prof);

        
        $__internal_0e42819910d0c625c819d551ffd874978e2d6287d28201303c70e5709b526ed6->leave($__internal_0e42819910d0c625c819d551ffd874978e2d6287d28201303c70e5709b526ed6_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_a3539ac0e9c1d89cccabaa3accf9ca70ab6e72d1f26199ac40a99a959dc843ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3539ac0e9c1d89cccabaa3accf9ca70ab6e72d1f26199ac40a99a959dc843ae->enter($__internal_a3539ac0e9c1d89cccabaa3accf9ca70ab6e72d1f26199ac40a99a959dc843ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_14359aaef48e70486df2383d4e86759abc4f34bbb5710fd2b62dcd75e5086748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14359aaef48e70486df2383d4e86759abc4f34bbb5710fd2b62dcd75e5086748->enter($__internal_14359aaef48e70486df2383d4e86759abc4f34bbb5710fd2b62dcd75e5086748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_14359aaef48e70486df2383d4e86759abc4f34bbb5710fd2b62dcd75e5086748->leave($__internal_14359aaef48e70486df2383d4e86759abc4f34bbb5710fd2b62dcd75e5086748_prof);

        
        $__internal_a3539ac0e9c1d89cccabaa3accf9ca70ab6e72d1f26199ac40a99a959dc843ae->leave($__internal_a3539ac0e9c1d89cccabaa3accf9ca70ab6e72d1f26199ac40a99a959dc843ae_prof);

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
