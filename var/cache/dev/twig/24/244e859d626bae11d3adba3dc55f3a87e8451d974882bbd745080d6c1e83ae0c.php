<?php

/* knp_menu.html.twig */
class __TwigTemplate_7fe1d12426fc3eb276ac42373588ab1f950a5e7af80b2fb4ad651c0221219635 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "knp_menu.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0575ba06e1c472328687a438988ffc306cb679b7b955ddfa07339330d957918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0575ba06e1c472328687a438988ffc306cb679b7b955ddfa07339330d957918->enter($__internal_a0575ba06e1c472328687a438988ffc306cb679b7b955ddfa07339330d957918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $__internal_a8c4d4aab369b9646f1b63b07d128e667c53b9c07fb7b0c26add47eaffdb7fa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8c4d4aab369b9646f1b63b07d128e667c53b9c07fb7b0c26add47eaffdb7fa6->enter($__internal_a8c4d4aab369b9646f1b63b07d128e667c53b9c07fb7b0c26add47eaffdb7fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0575ba06e1c472328687a438988ffc306cb679b7b955ddfa07339330d957918->leave($__internal_a0575ba06e1c472328687a438988ffc306cb679b7b955ddfa07339330d957918_prof);

        
        $__internal_a8c4d4aab369b9646f1b63b07d128e667c53b9c07fb7b0c26add47eaffdb7fa6->leave($__internal_a8c4d4aab369b9646f1b63b07d128e667c53b9c07fb7b0c26add47eaffdb7fa6_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_9d38900f4d77d02d5621b6f28ac36aa7b5e8352799eacf8e6285e14922895982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d38900f4d77d02d5621b6f28ac36aa7b5e8352799eacf8e6285e14922895982->enter($__internal_9d38900f4d77d02d5621b6f28ac36aa7b5e8352799eacf8e6285e14922895982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        $__internal_3774348d6126fb6b5baaa7cd90efc631b189723341c592a32ee2cd25e95c0593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3774348d6126fb6b5baaa7cd90efc631b189723341c592a32ee2cd25e95c0593->enter($__internal_3774348d6126fb6b5baaa7cd90efc631b189723341c592a32ee2cd25e95c0593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3774348d6126fb6b5baaa7cd90efc631b189723341c592a32ee2cd25e95c0593->leave($__internal_3774348d6126fb6b5baaa7cd90efc631b189723341c592a32ee2cd25e95c0593_prof);

        
        $__internal_9d38900f4d77d02d5621b6f28ac36aa7b5e8352799eacf8e6285e14922895982->leave($__internal_9d38900f4d77d02d5621b6f28ac36aa7b5e8352799eacf8e6285e14922895982_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_1e9467832a7a3c465a069dd514c598365cf367ab83906cf35604658a6488290d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e9467832a7a3c465a069dd514c598365cf367ab83906cf35604658a6488290d->enter($__internal_1e9467832a7a3c465a069dd514c598365cf367ab83906cf35604658a6488290d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_cbf832de0f754d2a6e118c5b3cf9cc3620eafa281b8f50622349f8fbb0f97c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbf832de0f754d2a6e118c5b3cf9cc3620eafa281b8f50622349f8fbb0f97c8d->enter($__internal_cbf832de0f754d2a6e118c5b3cf9cc3620eafa281b8f50622349f8fbb0f97c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        $context["listAttributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array());
        // line 19
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_cbf832de0f754d2a6e118c5b3cf9cc3620eafa281b8f50622349f8fbb0f97c8d->leave($__internal_cbf832de0f754d2a6e118c5b3cf9cc3620eafa281b8f50622349f8fbb0f97c8d_prof);

        
        $__internal_1e9467832a7a3c465a069dd514c598365cf367ab83906cf35604658a6488290d->leave($__internal_1e9467832a7a3c465a069dd514c598365cf367ab83906cf35604658a6488290d_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_7bc2618a71fd9c4539174ff951add7a8bf8d9a34e1c8358e8f9ec3d14f41d122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bc2618a71fd9c4539174ff951add7a8bf8d9a34e1c8358e8f9ec3d14f41d122->enter($__internal_7bc2618a71fd9c4539174ff951add7a8bf8d9a34e1c8358e8f9ec3d14f41d122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_602c0a302c1da3a5ec064559076be0ad4cabd3dc0f9775cc3bfa6e49e2ff6448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602c0a302c1da3a5ec064559076be0ad4cabd3dc0f9775cc3bfa6e49e2ff6448->enter($__internal_602c0a302c1da3a5ec064559076be0ad4cabd3dc0f9775cc3bfa6e49e2ff6448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 23
        if ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->getattributes(($context["listAttributes"] ?? $this->getContext($context, "listAttributes")));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
        
        $__internal_602c0a302c1da3a5ec064559076be0ad4cabd3dc0f9775cc3bfa6e49e2ff6448->leave($__internal_602c0a302c1da3a5ec064559076be0ad4cabd3dc0f9775cc3bfa6e49e2ff6448_prof);

        
        $__internal_7bc2618a71fd9c4539174ff951add7a8bf8d9a34e1c8358e8f9ec3d14f41d122->leave($__internal_7bc2618a71fd9c4539174ff951add7a8bf8d9a34e1c8358e8f9ec3d14f41d122_prof);

    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        $__internal_f919f2e812f3c7553d92631e7af3759c9ada90d2047f740253046600242cdb2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f919f2e812f3c7553d92631e7af3759c9ada90d2047f740253046600242cdb2d->enter($__internal_f919f2e812f3c7553d92631e7af3759c9ada90d2047f740253046600242cdb2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        $__internal_74812c7d93b7005018095dcc5869cef0dc9b900f19e85f1c2ff6ab305d5ccd5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74812c7d93b7005018095dcc5869cef0dc9b900f19e85f1c2ff6ab305d5ccd5f->enter($__internal_74812c7d93b7005018095dcc5869cef0dc9b900f19e85f1c2ff6ab305d5ccd5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 33
        $context["currentOptions"] = ($context["options"] ?? $this->getContext($context, "options"));
        // line 34
        $context["currentItem"] = ($context["item"] ?? $this->getContext($context, "item"));
        // line 36
        if ( !(null === $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()))) {
            // line 37
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("depth" => ($this->getAttribute(($context["currentOptions"] ?? $this->getContext($context, "currentOptions")), "depth", array()) - 1)));
        }
        // line 40
        if (( !(null === $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array())) && ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array()) > 0))) {
            // line 41
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("matchingDepth" => ($this->getAttribute(($context["currentOptions"] ?? $this->getContext($context, "currentOptions")), "matchingDepth", array()) - 1)));
        }
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["currentItem"] ?? $this->getContext($context, "currentItem")), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context["item"] = ($context["currentItem"] ?? $this->getContext($context, "currentItem"));
        // line 48
        $context["options"] = ($context["currentOptions"] ?? $this->getContext($context, "currentOptions"));
        
        $__internal_74812c7d93b7005018095dcc5869cef0dc9b900f19e85f1c2ff6ab305d5ccd5f->leave($__internal_74812c7d93b7005018095dcc5869cef0dc9b900f19e85f1c2ff6ab305d5ccd5f_prof);

        
        $__internal_f919f2e812f3c7553d92631e7af3759c9ada90d2047f740253046600242cdb2d->leave($__internal_f919f2e812f3c7553d92631e7af3759c9ada90d2047f740253046600242cdb2d_prof);

    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        $__internal_757daf1b45ae359c13422537d391a1636cb529d405c42042ab4d2567948caff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_757daf1b45ae359c13422537d391a1636cb529d405c42042ab4d2567948caff2->enter($__internal_757daf1b45ae359c13422537d391a1636cb529d405c42042ab4d2567948caff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_1528b0b41a22ca320891397bfa9765257ff9ef2c61ebce2cc6ec5c1966b95417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1528b0b41a22ca320891397bfa9765257ff9ef2c61ebce2cc6ec5c1966b95417->enter($__internal_1528b0b41a22ca320891397bfa9765257ff9ef2c61ebce2cc6ec5c1966b95417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 52
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 54
            $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 55
            if ($this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method")) {
                // line 56
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 57
($context["matcher"] ?? $this->getContext($context, "matcher")), "isAncestor", array(0 => ($context["item"] ?? $this->getContext($context, "item")), 1 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array())), "method")) {
                // line 58
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 60
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 61
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 63
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 64
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0))) {
                // line 69
                echo "        ";
                if (( !twig_test_empty($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "branch_class", array())) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
                    // line 70
                    $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "branch_class", array())));
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ( !twig_test_empty($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "leaf_class", array()))) {
                // line 73
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "leaf_class", array())));
            }
            // line 76
            $context["attributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array());
            // line 77
            if ( !twig_test_empty(($context["classes"] ?? $this->getContext($context, "classes")))) {
                // line 78
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("class" => twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " ")));
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li";
            echo $context["knp_menu"]->getattributes(($context["attributes"] ?? $this->getContext($context, "attributes")));
            echo ">";
            // line 83
            if (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method") || $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 90
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()))));
            // line 91
            $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), " ")));
            // line 92
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
        
        $__internal_1528b0b41a22ca320891397bfa9765257ff9ef2c61ebce2cc6ec5c1966b95417->leave($__internal_1528b0b41a22ca320891397bfa9765257ff9ef2c61ebce2cc6ec5c1966b95417_prof);

        
        $__internal_757daf1b45ae359c13422537d391a1636cb529d405c42042ab4d2567948caff2->leave($__internal_757daf1b45ae359c13422537d391a1636cb529d405c42042ab4d2567948caff2_prof);

    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_8128e77abd5aafabca88ee1a8e75b96d87280d48fd4538b5440d8b94bf802360 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8128e77abd5aafabca88ee1a8e75b96d87280d48fd4538b5440d8b94bf802360->enter($__internal_8128e77abd5aafabca88ee1a8e75b96d87280d48fd4538b5440d8b94bf802360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_f52f30ee552aea01f956c3368743c6a79b1d78da6b234ff2ba3e63c65b2f4a11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f52f30ee552aea01f956c3368743c6a79b1d78da6b234ff2ba3e63c65b2f4a11->enter($__internal_f52f30ee552aea01f956c3368743c6a79b1d78da6b234ff2ba3e63c65b2f4a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_f52f30ee552aea01f956c3368743c6a79b1d78da6b234ff2ba3e63c65b2f4a11->leave($__internal_f52f30ee552aea01f956c3368743c6a79b1d78da6b234ff2ba3e63c65b2f4a11_prof);

        
        $__internal_8128e77abd5aafabca88ee1a8e75b96d87280d48fd4538b5440d8b94bf802360->leave($__internal_8128e77abd5aafabca88ee1a8e75b96d87280d48fd4538b5440d8b94bf802360_prof);

    }

    // line 99
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_c0b4eb3d440828e85ad0a44797cb2cfdeed3b1e0b193ad3254f8e9548e4eab6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0b4eb3d440828e85ad0a44797cb2cfdeed3b1e0b193ad3254f8e9548e4eab6e->enter($__internal_c0b4eb3d440828e85ad0a44797cb2cfdeed3b1e0b193ad3254f8e9548e4eab6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_8546c808b75c4f514f305a60f3b7da6f9588ce40e3e40cd6ffe2d5c5efab7d22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8546c808b75c4f514f305a60f3b7da6f9588ce40e3e40cd6ffe2d5c5efab7d22->enter($__internal_8546c808b75c4f514f305a60f3b7da6f9588ce40e3e40cd6ffe2d5c5efab7d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
        
        $__internal_8546c808b75c4f514f305a60f3b7da6f9588ce40e3e40cd6ffe2d5c5efab7d22->leave($__internal_8546c808b75c4f514f305a60f3b7da6f9588ce40e3e40cd6ffe2d5c5efab7d22_prof);

        
        $__internal_c0b4eb3d440828e85ad0a44797cb2cfdeed3b1e0b193ad3254f8e9548e4eab6e->leave($__internal_c0b4eb3d440828e85ad0a44797cb2cfdeed3b1e0b193ad3254f8e9548e4eab6e_prof);

    }

    // line 101
    public function block_label($context, array $blocks = array())
    {
        $__internal_fb55e54046a1d8dca999fe395b3ad3c78776648e0a2da5d214dcee87b97ed5cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb55e54046a1d8dca999fe395b3ad3c78776648e0a2da5d214dcee87b97ed5cb->enter($__internal_fb55e54046a1d8dca999fe395b3ad3c78776648e0a2da5d214dcee87b97ed5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_c64fd197bc00a0a3fb20d3d13e42ff83018e7d4b358eb4b56103c6d9c2305be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c64fd197bc00a0a3fb20d3d13e42ff83018e7d4b358eb4b56103c6d9c2305be2->enter($__internal_c64fd197bc00a0a3fb20d3d13e42ff83018e7d4b358eb4b56103c6d9c2305be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), "html", null, true);
        }
        
        $__internal_c64fd197bc00a0a3fb20d3d13e42ff83018e7d4b358eb4b56103c6d9c2305be2->leave($__internal_c64fd197bc00a0a3fb20d3d13e42ff83018e7d4b358eb4b56103c6d9c2305be2_prof);

        
        $__internal_fb55e54046a1d8dca999fe395b3ad3c78776648e0a2da5d214dcee87b97ed5cb->leave($__internal_fb55e54046a1d8dca999fe395b3ad3c78776648e0a2da5d214dcee87b97ed5cb_prof);

    }

    // line 3
    public function getattributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_05ac302663a4342ac5f2a72e097698123cc4ece6355481cfae4812c999bf08e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_05ac302663a4342ac5f2a72e097698123cc4ece6355481cfae4812c999bf08e6->enter($__internal_05ac302663a4342ac5f2a72e097698123cc4ece6355481cfae4812c999bf08e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_ce19bc97f8528eb3de07827a9455782de6b93141106f294d5de8281d124842ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_ce19bc97f8528eb3de07827a9455782de6b93141106f294d5de8281d124842ca->enter($__internal_ce19bc97f8528eb3de07827a9455782de6b93141106f294d5de8281d124842ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_ce19bc97f8528eb3de07827a9455782de6b93141106f294d5de8281d124842ca->leave($__internal_ce19bc97f8528eb3de07827a9455782de6b93141106f294d5de8281d124842ca_prof);

            
            $__internal_05ac302663a4342ac5f2a72e097698123cc4ece6355481cfae4812c999bf08e6->leave($__internal_05ac302663a4342ac5f2a72e097698123cc4ece6355481cfae4812c999bf08e6_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 6,  383 => 5,  379 => 4,  361 => 3,  339 => 101,  316 => 99,  291 => 97,  276 => 92,  274 => 91,  272 => 90,  270 => 89,  266 => 86,  262 => 84,  260 => 83,  256 => 82,  253 => 81,  250 => 78,  248 => 77,  246 => 76,  243 => 73,  240 => 72,  237 => 71,  235 => 70,  232 => 69,  229 => 68,  226 => 66,  223 => 64,  221 => 63,  218 => 61,  216 => 60,  213 => 58,  211 => 57,  209 => 56,  207 => 55,  205 => 54,  203 => 52,  194 => 51,  184 => 48,  182 => 47,  165 => 44,  148 => 43,  145 => 41,  143 => 40,  140 => 37,  138 => 36,  136 => 34,  134 => 33,  125 => 31,  111 => 26,  106 => 25,  103 => 24,  101 => 23,  92 => 22,  82 => 19,  80 => 18,  71 => 17,  58 => 13,  56 => 12,  47 => 11,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu_base.html.twig' %}

{% macro attributes(attributes) %}
{% for name, value in attributes %}
    {%- if value is not none and value is not same as(false) -%}
        {{- ' %s=\"%s\"'|format(name, value is same as(true) ? name|e : value|e)|raw -}}
    {%- endif -%}
{%- endfor -%}
{% endmacro %}

{% block compressed_root %}
{% spaceless %}
{{ block('root') }}
{% endspaceless %}
{% endblock %}

{% block root %}
{% set listAttributes = item.childrenAttributes %}
{{ block('list') -}}
{% endblock %}

{% block list %}
{% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
    {% import _self as knp_menu %}
    <ul{{ knp_menu.attributes(listAttributes) }}>
        {{ block('children') }}
    </ul>
{% endif %}
{% endblock %}

{% block children %}
{# save current variables #}
{% set currentOptions = options %}
{% set currentItem = item %}
{# update the depth for children #}
{% if options.depth is not none %}
{% set options = options|merge({'depth': currentOptions.depth - 1}) %}
{% endif %}
{# update the matchingDepth for children #}
{% if options.matchingDepth is not none and options.matchingDepth > 0 %}
{% set options = options|merge({'matchingDepth': currentOptions.matchingDepth - 1}) %}
{% endif %}
{% for item in currentItem.children %}
    {{ block('item') }}
{% endfor %}
{# restore current variables #}
{% set item = currentItem %}
{% set options = currentOptions %}
{% endblock %}

{% block item %}
{% if item.displayed %}
{# building the class of the item #}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
    {%- if matcher.isCurrent(item) %}
        {%- set classes = classes|merge([options.currentClass]) %}
    {%- elseif matcher.isAncestor(item, options.matchingDepth) %}
        {%- set classes = classes|merge([options.ancestorClass]) %}
    {%- endif %}
    {%- if item.actsLikeFirst %}
        {%- set classes = classes|merge([options.firstClass]) %}
    {%- endif %}
    {%- if item.actsLikeLast %}
        {%- set classes = classes|merge([options.lastClass]) %}
    {%- endif %}

    {# Mark item as \"leaf\" (no children) or as \"branch\" (has children that are displayed) #}
    {% if item.hasChildren and options.depth is not same as(0) %}
        {% if options.branch_class is not empty and item.displayChildren %}
            {%- set classes = classes|merge([options.branch_class]) %}
        {% endif %}
    {% elseif options.leaf_class is not empty %}
        {%- set classes = classes|merge([options.leaf_class]) %}
    {%- endif %}

    {%- set attributes = item.attributes %}
    {%- if classes is not empty %}
        {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}
{# displaying the item #}
    {% import _self as knp_menu %}
    <li{{ knp_menu.attributes(attributes) }}>
        {%- if item.uri is not empty and (not matcher.isCurrent(item) or options.currentAsLink) %}
        {{ block('linkElement') }}
        {%- else %}
        {{ block('spanElement') }}
        {%- endif %}
{# render the list of children#}
        {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
        {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
        {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
        {{ block('list') }}
    </li>
{% endif %}
{% endblock %}

{% block linkElement %}{% import _self as knp_menu %}<a href=\"{{ item.uri }}\"{{ knp_menu.attributes(item.linkAttributes) }}>{{ block('label') }}</a>{% endblock %}

{% block spanElement %}{% import _self as knp_menu %}<span{{ knp_menu.attributes(item.labelAttributes) }}>{{ block('label') }}</span>{% endblock %}

{% block label %}{% if options.allow_safe_labels and item.getExtra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label }}{% endif %}{% endblock %}
", "knp_menu.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Resources\\views\\knp_menu.html.twig");
    }
}
