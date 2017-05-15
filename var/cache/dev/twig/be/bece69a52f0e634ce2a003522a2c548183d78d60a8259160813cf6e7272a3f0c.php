<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_a78c9536a80930d1eb34135b236a3b0cf958b2ab537a6fa55063a73928234a99 extends Twig_Template
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
        $__internal_02bf61d51810d18ac0dad998d63e73495d5a13f6853862ce4b825cf7b2fc18f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02bf61d51810d18ac0dad998d63e73495d5a13f6853862ce4b825cf7b2fc18f5->enter($__internal_02bf61d51810d18ac0dad998d63e73495d5a13f6853862ce4b825cf7b2fc18f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_fa20b1c30f159b5bd1f0efca656e23b71a473cb2e0696a78e0bd093b41f31897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa20b1c30f159b5bd1f0efca656e23b71a473cb2e0696a78e0bd093b41f31897->enter($__internal_fa20b1c30f159b5bd1f0efca656e23b71a473cb2e0696a78e0bd093b41f31897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        // line 109
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 113
        echo "
";
        // line 114
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 133
        echo "
";
        // line 134
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 144
        echo "
";
        // line 145
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 155
        echo "
";
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('form_label', $context, $blocks);
        // line 162
        echo "
";
        // line 163
        $this->displayBlock('choice_label', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        $this->displayBlock('radio_label', $context, $blocks);
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 201
        echo "
";
        // line 203
        echo "
";
        // line 204
        $this->displayBlock('form_row', $context, $blocks);
        // line 211
        echo "
";
        // line 212
        $this->displayBlock('button_row', $context, $blocks);
        // line 217
        echo "
";
        // line 218
        $this->displayBlock('choice_row', $context, $blocks);
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('date_row', $context, $blocks);
        // line 227
        echo "
";
        // line 228
        $this->displayBlock('time_row', $context, $blocks);
        // line 232
        echo "
";
        // line 233
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 237
        echo "
";
        // line 238
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 244
        echo "
";
        // line 245
        $this->displayBlock('radio_row', $context, $blocks);
        // line 251
        echo "
";
        // line 253
        echo "
";
        // line 254
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_02bf61d51810d18ac0dad998d63e73495d5a13f6853862ce4b825cf7b2fc18f5->leave($__internal_02bf61d51810d18ac0dad998d63e73495d5a13f6853862ce4b825cf7b2fc18f5_prof);

        
        $__internal_fa20b1c30f159b5bd1f0efca656e23b71a473cb2e0696a78e0bd093b41f31897->leave($__internal_fa20b1c30f159b5bd1f0efca656e23b71a473cb2e0696a78e0bd093b41f31897_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_da417c4c86dfc51c1689c6a7b5abd821ff940533ec80bc6c1785afc338e06114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da417c4c86dfc51c1689c6a7b5abd821ff940533ec80bc6c1785afc338e06114->enter($__internal_da417c4c86dfc51c1689c6a7b5abd821ff940533ec80bc6c1785afc338e06114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_c36af45dbdc1fe2b1bbb25e0f10e2b0196deb425d25076b7045d0a07804e100c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c36af45dbdc1fe2b1bbb25e0f10e2b0196deb425d25076b7045d0a07804e100c->enter($__internal_c36af45dbdc1fe2b1bbb25e0f10e2b0196deb425d25076b7045d0a07804e100c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_c36af45dbdc1fe2b1bbb25e0f10e2b0196deb425d25076b7045d0a07804e100c->leave($__internal_c36af45dbdc1fe2b1bbb25e0f10e2b0196deb425d25076b7045d0a07804e100c_prof);

        
        $__internal_da417c4c86dfc51c1689c6a7b5abd821ff940533ec80bc6c1785afc338e06114->leave($__internal_da417c4c86dfc51c1689c6a7b5abd821ff940533ec80bc6c1785afc338e06114_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_807465df892bddbaad12c613e26db4695e63ed3ca3ee4730fb23fbdb8459a1f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_807465df892bddbaad12c613e26db4695e63ed3ca3ee4730fb23fbdb8459a1f8->enter($__internal_807465df892bddbaad12c613e26db4695e63ed3ca3ee4730fb23fbdb8459a1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_0169cf5a9c325d69332822cb0614ca751c073cd7a5e5e0d83557029724bed82b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0169cf5a9c325d69332822cb0614ca751c073cd7a5e5e0d83557029724bed82b->enter($__internal_0169cf5a9c325d69332822cb0614ca751c073cd7a5e5e0d83557029724bed82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_0169cf5a9c325d69332822cb0614ca751c073cd7a5e5e0d83557029724bed82b->leave($__internal_0169cf5a9c325d69332822cb0614ca751c073cd7a5e5e0d83557029724bed82b_prof);

        
        $__internal_807465df892bddbaad12c613e26db4695e63ed3ca3ee4730fb23fbdb8459a1f8->leave($__internal_807465df892bddbaad12c613e26db4695e63ed3ca3ee4730fb23fbdb8459a1f8_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_182677fbc2e16e84ad214ff4b12d34e5ec551a30b79d5f999bbc1f539ea469a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_182677fbc2e16e84ad214ff4b12d34e5ec551a30b79d5f999bbc1f539ea469a9->enter($__internal_182677fbc2e16e84ad214ff4b12d34e5ec551a30b79d5f999bbc1f539ea469a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_713acb3a7d9e8c65b0fb4999e050cc27411cd3930d691f9bff7d2227506e9e7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_713acb3a7d9e8c65b0fb4999e050cc27411cd3930d691f9bff7d2227506e9e7a->enter($__internal_713acb3a7d9e8c65b0fb4999e050cc27411cd3930d691f9bff7d2227506e9e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_713acb3a7d9e8c65b0fb4999e050cc27411cd3930d691f9bff7d2227506e9e7a->leave($__internal_713acb3a7d9e8c65b0fb4999e050cc27411cd3930d691f9bff7d2227506e9e7a_prof);

        
        $__internal_182677fbc2e16e84ad214ff4b12d34e5ec551a30b79d5f999bbc1f539ea469a9->leave($__internal_182677fbc2e16e84ad214ff4b12d34e5ec551a30b79d5f999bbc1f539ea469a9_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_cc7ac47f1cdacace7f57fae5597df5626ebcbbfa09df87877c7ed8d1df9d2fb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc7ac47f1cdacace7f57fae5597df5626ebcbbfa09df87877c7ed8d1df9d2fb4->enter($__internal_cc7ac47f1cdacace7f57fae5597df5626ebcbbfa09df87877c7ed8d1df9d2fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_ded9102811bf89e2e229ba492b38e871427f66804313a4b478fe5d087ece12fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded9102811bf89e2e229ba492b38e871427f66804313a4b478fe5d087ece12fd->enter($__internal_ded9102811bf89e2e229ba492b38e871427f66804313a4b478fe5d087ece12fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_62acf2d0120a507ed0190de38625c6e1c4e058aeac88297f10f2145d00b99e20 = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_86ce9b625c50c98205fd260cc06b11d2af7522172908bd61ddcc680e6ebc6106 = "{{") && ('' === $__internal_86ce9b625c50c98205fd260cc06b11d2af7522172908bd61ddcc680e6ebc6106 || 0 === strpos($__internal_62acf2d0120a507ed0190de38625c6e1c4e058aeac88297f10f2145d00b99e20, $__internal_86ce9b625c50c98205fd260cc06b11d2af7522172908bd61ddcc680e6ebc6106)));
        // line 25
        echo "        ";
        if ( !(isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_ded9102811bf89e2e229ba492b38e871427f66804313a4b478fe5d087ece12fd->leave($__internal_ded9102811bf89e2e229ba492b38e871427f66804313a4b478fe5d087ece12fd_prof);

        
        $__internal_cc7ac47f1cdacace7f57fae5597df5626ebcbbfa09df87877c7ed8d1df9d2fb4->leave($__internal_cc7ac47f1cdacace7f57fae5597df5626ebcbbfa09df87877c7ed8d1df9d2fb4_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_effd691020cb335ee2bcc06c05e42c09b2bcc3559f9385ea26c26c8f49609e3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_effd691020cb335ee2bcc06c05e42c09b2bcc3559f9385ea26c26c8f49609e3f->enter($__internal_effd691020cb335ee2bcc06c05e42c09b2bcc3559f9385ea26c26c8f49609e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_bef53c94c184cdfdd890f022da648718e6aa3c08cc6d64f9ae1319be35012f54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bef53c94c184cdfdd890f022da648718e6aa3c08cc6d64f9ae1319be35012f54->enter($__internal_bef53c94c184cdfdd890f022da648718e6aa3c08cc6d64f9ae1319be35012f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_bef53c94c184cdfdd890f022da648718e6aa3c08cc6d64f9ae1319be35012f54->leave($__internal_bef53c94c184cdfdd890f022da648718e6aa3c08cc6d64f9ae1319be35012f54_prof);

        
        $__internal_effd691020cb335ee2bcc06c05e42c09b2bcc3559f9385ea26c26c8f49609e3f->leave($__internal_effd691020cb335ee2bcc06c05e42c09b2bcc3559f9385ea26c26c8f49609e3f_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_fb7615a273d6331b9d63373161641c79844aef5f12b025094816db306b92bc7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb7615a273d6331b9d63373161641c79844aef5f12b025094816db306b92bc7d->enter($__internal_fb7615a273d6331b9d63373161641c79844aef5f12b025094816db306b92bc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_0b2a3d0de9bd59ea22065f05f353d161bb60113829e3d86ca51b879a2c0f2b72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b2a3d0de9bd59ea22065f05f353d161bb60113829e3d86ca51b879a2c0f2b72->enter($__internal_0b2a3d0de9bd59ea22065f05f353d161bb60113829e3d86ca51b879a2c0f2b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_0b2a3d0de9bd59ea22065f05f353d161bb60113829e3d86ca51b879a2c0f2b72->leave($__internal_0b2a3d0de9bd59ea22065f05f353d161bb60113829e3d86ca51b879a2c0f2b72_prof);

        
        $__internal_fb7615a273d6331b9d63373161641c79844aef5f12b025094816db306b92bc7d->leave($__internal_fb7615a273d6331b9d63373161641c79844aef5f12b025094816db306b92bc7d_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_9973f61cfe32a7e1f69250749d022d3bfd6b8797da23d257a989e553848e1e97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9973f61cfe32a7e1f69250749d022d3bfd6b8797da23d257a989e553848e1e97->enter($__internal_9973f61cfe32a7e1f69250749d022d3bfd6b8797da23d257a989e553848e1e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_e7db24b24ac45e5a4cd9d5c7763c36ad5fae492595e83c36a070c0c5fc433943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7db24b24ac45e5a4cd9d5c7763c36ad5fae492595e83c36a070c0c5fc433943->enter($__internal_e7db24b24ac45e5a4cd9d5c7763c36ad5fae492595e83c36a070c0c5fc433943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_e7db24b24ac45e5a4cd9d5c7763c36ad5fae492595e83c36a070c0c5fc433943->leave($__internal_e7db24b24ac45e5a4cd9d5c7763c36ad5fae492595e83c36a070c0c5fc433943_prof);

        
        $__internal_9973f61cfe32a7e1f69250749d022d3bfd6b8797da23d257a989e553848e1e97->leave($__internal_9973f61cfe32a7e1f69250749d022d3bfd6b8797da23d257a989e553848e1e97_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_a9dab0a6a6e122552846507a349549386633331997b8bff7767784e2b33a8921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9dab0a6a6e122552846507a349549386633331997b8bff7767784e2b33a8921->enter($__internal_a9dab0a6a6e122552846507a349549386633331997b8bff7767784e2b33a8921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_6db10bead6b0ba01afb173253ad227805d555fa6257a8c6bd83d42a77a436cd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6db10bead6b0ba01afb173253ad227805d555fa6257a8c6bd83d42a77a436cd9->enter($__internal_6db10bead6b0ba01afb173253ad227805d555fa6257a8c6bd83d42a77a436cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_6db10bead6b0ba01afb173253ad227805d555fa6257a8c6bd83d42a77a436cd9->leave($__internal_6db10bead6b0ba01afb173253ad227805d555fa6257a8c6bd83d42a77a436cd9_prof);

        
        $__internal_a9dab0a6a6e122552846507a349549386633331997b8bff7767784e2b33a8921->leave($__internal_a9dab0a6a6e122552846507a349549386633331997b8bff7767784e2b33a8921_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_4b864a29cc1e53a7eab2a473fb84862749db078d3dfb2d81f65252f4c7d72f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b864a29cc1e53a7eab2a473fb84862749db078d3dfb2d81f65252f4c7d72f46->enter($__internal_4b864a29cc1e53a7eab2a473fb84862749db078d3dfb2d81f65252f4c7d72f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_3046ec2017a5d5ccf5d222f28793a0d7c5c986832fcb19f4ae660894074c9990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3046ec2017a5d5ccf5d222f28793a0d7c5c986832fcb19f4ae660894074c9990->enter($__internal_3046ec2017a5d5ccf5d222f28793a0d7c5c986832fcb19f4ae660894074c9990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 97
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
            }
            // line 98
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
            }
            // line 99
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
            }
            // line 100
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
            }
            // line 101
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
            }
            // line 102
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
            }
            // line 103
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
            }
            // line 104
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 105
            echo "</div>";
        }
        
        $__internal_3046ec2017a5d5ccf5d222f28793a0d7c5c986832fcb19f4ae660894074c9990->leave($__internal_3046ec2017a5d5ccf5d222f28793a0d7c5c986832fcb19f4ae660894074c9990_prof);

        
        $__internal_4b864a29cc1e53a7eab2a473fb84862749db078d3dfb2d81f65252f4c7d72f46->leave($__internal_4b864a29cc1e53a7eab2a473fb84862749db078d3dfb2d81f65252f4c7d72f46_prof);

    }

    // line 109
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_335b0284fdc189584192eed7128cb798e80a24bd5d71b9e7005c6a268d052e62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_335b0284fdc189584192eed7128cb798e80a24bd5d71b9e7005c6a268d052e62->enter($__internal_335b0284fdc189584192eed7128cb798e80a24bd5d71b9e7005c6a268d052e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_24f2db83569dbaa823e25da3e7daf6d67f4b30dff208568417ba6d68d8dfbdce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f2db83569dbaa823e25da3e7daf6d67f4b30dff208568417ba6d68d8dfbdce->enter($__internal_24f2db83569dbaa823e25da3e7daf6d67f4b30dff208568417ba6d68d8dfbdce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 110
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 111
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_24f2db83569dbaa823e25da3e7daf6d67f4b30dff208568417ba6d68d8dfbdce->leave($__internal_24f2db83569dbaa823e25da3e7daf6d67f4b30dff208568417ba6d68d8dfbdce_prof);

        
        $__internal_335b0284fdc189584192eed7128cb798e80a24bd5d71b9e7005c6a268d052e62->leave($__internal_335b0284fdc189584192eed7128cb798e80a24bd5d71b9e7005c6a268d052e62_prof);

    }

    // line 114
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_fe4ddf4177f71d2553cf88d995d4255706bc8f2182d19df697432058b9b8fd78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe4ddf4177f71d2553cf88d995d4255706bc8f2182d19df697432058b9b8fd78->enter($__internal_fe4ddf4177f71d2553cf88d995d4255706bc8f2182d19df697432058b9b8fd78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_5ccb2e41a9c3508b4058dbbc30058cf71a0e6c6cfde03c37b5c2ac5ee9c1ab1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ccb2e41a9c3508b4058dbbc30058cf71a0e6c6cfde03c37b5c2ac5ee9c1ab1b->enter($__internal_5ccb2e41a9c3508b4058dbbc30058cf71a0e6c6cfde03c37b5c2ac5ee9c1ab1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 115
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 117
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 118
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 119
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 123
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 125
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 126
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 127
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "</div>";
        }
        
        $__internal_5ccb2e41a9c3508b4058dbbc30058cf71a0e6c6cfde03c37b5c2ac5ee9c1ab1b->leave($__internal_5ccb2e41a9c3508b4058dbbc30058cf71a0e6c6cfde03c37b5c2ac5ee9c1ab1b_prof);

        
        $__internal_fe4ddf4177f71d2553cf88d995d4255706bc8f2182d19df697432058b9b8fd78->leave($__internal_fe4ddf4177f71d2553cf88d995d4255706bc8f2182d19df697432058b9b8fd78_prof);

    }

    // line 134
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_02f9901864d2e75724b863ac5de907fc8e877892bdf72a3919b940cdb2f55ab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02f9901864d2e75724b863ac5de907fc8e877892bdf72a3919b940cdb2f55ab2->enter($__internal_02f9901864d2e75724b863ac5de907fc8e877892bdf72a3919b940cdb2f55ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_2ca26d274a5ef7678987dd6f31fc64197738bdb95b09495472e24a8c8de4ad04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ca26d274a5ef7678987dd6f31fc64197738bdb95b09495472e24a8c8de4ad04->enter($__internal_2ca26d274a5ef7678987dd6f31fc64197738bdb95b09495472e24a8c8de4ad04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 135
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 136
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 137
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 139
            echo "<div class=\"checkbox\">";
            // line 140
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 141
            echo "</div>";
        }
        
        $__internal_2ca26d274a5ef7678987dd6f31fc64197738bdb95b09495472e24a8c8de4ad04->leave($__internal_2ca26d274a5ef7678987dd6f31fc64197738bdb95b09495472e24a8c8de4ad04_prof);

        
        $__internal_02f9901864d2e75724b863ac5de907fc8e877892bdf72a3919b940cdb2f55ab2->leave($__internal_02f9901864d2e75724b863ac5de907fc8e877892bdf72a3919b940cdb2f55ab2_prof);

    }

    // line 145
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_40a9326759e9178379068158244a02e9ee01e2488c9032aaca2cb8fa8e37e902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40a9326759e9178379068158244a02e9ee01e2488c9032aaca2cb8fa8e37e902->enter($__internal_40a9326759e9178379068158244a02e9ee01e2488c9032aaca2cb8fa8e37e902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_b944ad1a6a8d101f96b223a2ff49d5cfacb4f5c5feb5009f226727b6a4e96fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b944ad1a6a8d101f96b223a2ff49d5cfacb4f5c5feb5009f226727b6a4e96fc5->enter($__internal_b944ad1a6a8d101f96b223a2ff49d5cfacb4f5c5feb5009f226727b6a4e96fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 146
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 147
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 148
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 150
            echo "<div class=\"radio\">";
            // line 151
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 152
            echo "</div>";
        }
        
        $__internal_b944ad1a6a8d101f96b223a2ff49d5cfacb4f5c5feb5009f226727b6a4e96fc5->leave($__internal_b944ad1a6a8d101f96b223a2ff49d5cfacb4f5c5feb5009f226727b6a4e96fc5_prof);

        
        $__internal_40a9326759e9178379068158244a02e9ee01e2488c9032aaca2cb8fa8e37e902->leave($__internal_40a9326759e9178379068158244a02e9ee01e2488c9032aaca2cb8fa8e37e902_prof);

    }

    // line 158
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_459d97416e89610eb9109af07e2a1e4ae2ba42f60acd090954e9bb4f4b122c5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_459d97416e89610eb9109af07e2a1e4ae2ba42f60acd090954e9bb4f4b122c5b->enter($__internal_459d97416e89610eb9109af07e2a1e4ae2ba42f60acd090954e9bb4f4b122c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_c44448e9fc30a5bc8619b340b3a1fc81283bf30aecf791005980b138e152d86b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c44448e9fc30a5bc8619b340b3a1fc81283bf30aecf791005980b138e152d86b->enter($__internal_c44448e9fc30a5bc8619b340b3a1fc81283bf30aecf791005980b138e152d86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 159
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 160
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_c44448e9fc30a5bc8619b340b3a1fc81283bf30aecf791005980b138e152d86b->leave($__internal_c44448e9fc30a5bc8619b340b3a1fc81283bf30aecf791005980b138e152d86b_prof);

        
        $__internal_459d97416e89610eb9109af07e2a1e4ae2ba42f60acd090954e9bb4f4b122c5b->leave($__internal_459d97416e89610eb9109af07e2a1e4ae2ba42f60acd090954e9bb4f4b122c5b_prof);

    }

    // line 163
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_ba183828e42dd380838305bef08ff79fcf08b01fe7f3196d58bf7f23e83f0127 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba183828e42dd380838305bef08ff79fcf08b01fe7f3196d58bf7f23e83f0127->enter($__internal_ba183828e42dd380838305bef08ff79fcf08b01fe7f3196d58bf7f23e83f0127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_d8069786eb56e1cf871dfea8703807373b0c1e01ed18c94efa34a40f49c2273a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8069786eb56e1cf871dfea8703807373b0c1e01ed18c94efa34a40f49c2273a->enter($__internal_d8069786eb56e1cf871dfea8703807373b0c1e01ed18c94efa34a40f49c2273a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 165
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 166
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_d8069786eb56e1cf871dfea8703807373b0c1e01ed18c94efa34a40f49c2273a->leave($__internal_d8069786eb56e1cf871dfea8703807373b0c1e01ed18c94efa34a40f49c2273a_prof);

        
        $__internal_ba183828e42dd380838305bef08ff79fcf08b01fe7f3196d58bf7f23e83f0127->leave($__internal_ba183828e42dd380838305bef08ff79fcf08b01fe7f3196d58bf7f23e83f0127_prof);

    }

    // line 169
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_487fed82a572e3556593777a5756f1eea7175a809fcda079bd63afa1a5bf431a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_487fed82a572e3556593777a5756f1eea7175a809fcda079bd63afa1a5bf431a->enter($__internal_487fed82a572e3556593777a5756f1eea7175a809fcda079bd63afa1a5bf431a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_ddf9fa04286a6bdb8cac5034bda59b292d172e97ee2f3107c82e705d1af913c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf9fa04286a6bdb8cac5034bda59b292d172e97ee2f3107c82e705d1af913c0->enter($__internal_ddf9fa04286a6bdb8cac5034bda59b292d172e97ee2f3107c82e705d1af913c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 170
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_ddf9fa04286a6bdb8cac5034bda59b292d172e97ee2f3107c82e705d1af913c0->leave($__internal_ddf9fa04286a6bdb8cac5034bda59b292d172e97ee2f3107c82e705d1af913c0_prof);

        
        $__internal_487fed82a572e3556593777a5756f1eea7175a809fcda079bd63afa1a5bf431a->leave($__internal_487fed82a572e3556593777a5756f1eea7175a809fcda079bd63afa1a5bf431a_prof);

    }

    // line 173
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_e8ea8d0fd250b545614a889657999bfaf4f16692b8d73b4a1e5fe5ff608eb21c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8ea8d0fd250b545614a889657999bfaf4f16692b8d73b4a1e5fe5ff608eb21c->enter($__internal_e8ea8d0fd250b545614a889657999bfaf4f16692b8d73b4a1e5fe5ff608eb21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_8c25190c808da8b9f08976df34a7ff50597fdbd1759112e0331852750982a120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c25190c808da8b9f08976df34a7ff50597fdbd1759112e0331852750982a120->enter($__internal_8c25190c808da8b9f08976df34a7ff50597fdbd1759112e0331852750982a120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 174
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_8c25190c808da8b9f08976df34a7ff50597fdbd1759112e0331852750982a120->leave($__internal_8c25190c808da8b9f08976df34a7ff50597fdbd1759112e0331852750982a120_prof);

        
        $__internal_e8ea8d0fd250b545614a889657999bfaf4f16692b8d73b4a1e5fe5ff608eb21c->leave($__internal_e8ea8d0fd250b545614a889657999bfaf4f16692b8d73b4a1e5fe5ff608eb21c_prof);

    }

    // line 177
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_6852c9b4eafeefad863a9661401469cd67bf2d4a3e68677016c1847476092642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6852c9b4eafeefad863a9661401469cd67bf2d4a3e68677016c1847476092642->enter($__internal_6852c9b4eafeefad863a9661401469cd67bf2d4a3e68677016c1847476092642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_f51b106b70d294c91f344e52b5527fac94681f8700a53172d762fbf2f364b938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f51b106b70d294c91f344e52b5527fac94681f8700a53172d762fbf2f364b938->enter($__internal_f51b106b70d294c91f344e52b5527fac94681f8700a53172d762fbf2f364b938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 178
        echo "    ";
        // line 179
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 180
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 181
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 182
                echo "        ";
            }
            // line 183
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 184
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 185
                echo "        ";
            }
            // line 186
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 187
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 188
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 189
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 190
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 193
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 196
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
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
            // line 197
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 198
            echo "</label>
    ";
        }
        
        $__internal_f51b106b70d294c91f344e52b5527fac94681f8700a53172d762fbf2f364b938->leave($__internal_f51b106b70d294c91f344e52b5527fac94681f8700a53172d762fbf2f364b938_prof);

        
        $__internal_6852c9b4eafeefad863a9661401469cd67bf2d4a3e68677016c1847476092642->leave($__internal_6852c9b4eafeefad863a9661401469cd67bf2d4a3e68677016c1847476092642_prof);

    }

    // line 204
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d5ecf401fc933e360163fe7246acee4ed1654f623fa43fcdf997ee71b01826a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5ecf401fc933e360163fe7246acee4ed1654f623fa43fcdf997ee71b01826a9->enter($__internal_d5ecf401fc933e360163fe7246acee4ed1654f623fa43fcdf997ee71b01826a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_28caed7ba450ec58537da88e29dee274c24ae7f0a45080aaf39ab058ff251175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28caed7ba450ec58537da88e29dee274c24ae7f0a45080aaf39ab058ff251175->enter($__internal_28caed7ba450ec58537da88e29dee274c24ae7f0a45080aaf39ab058ff251175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 205
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 206
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 207
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 208
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 209
        echo "</div>";
        
        $__internal_28caed7ba450ec58537da88e29dee274c24ae7f0a45080aaf39ab058ff251175->leave($__internal_28caed7ba450ec58537da88e29dee274c24ae7f0a45080aaf39ab058ff251175_prof);

        
        $__internal_d5ecf401fc933e360163fe7246acee4ed1654f623fa43fcdf997ee71b01826a9->leave($__internal_d5ecf401fc933e360163fe7246acee4ed1654f623fa43fcdf997ee71b01826a9_prof);

    }

    // line 212
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_747834fdff189555cc3dbc25c73f674032248cdfaa8fcb8895ace2ab8a6fd187 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_747834fdff189555cc3dbc25c73f674032248cdfaa8fcb8895ace2ab8a6fd187->enter($__internal_747834fdff189555cc3dbc25c73f674032248cdfaa8fcb8895ace2ab8a6fd187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_12e9ad7813679b406d1f67b21dd7a4957495507ce6b601a4bf8f5d3d9fbbde4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12e9ad7813679b406d1f67b21dd7a4957495507ce6b601a4bf8f5d3d9fbbde4a->enter($__internal_12e9ad7813679b406d1f67b21dd7a4957495507ce6b601a4bf8f5d3d9fbbde4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 213
        echo "<div class=\"form-group\">";
        // line 214
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 215
        echo "</div>";
        
        $__internal_12e9ad7813679b406d1f67b21dd7a4957495507ce6b601a4bf8f5d3d9fbbde4a->leave($__internal_12e9ad7813679b406d1f67b21dd7a4957495507ce6b601a4bf8f5d3d9fbbde4a_prof);

        
        $__internal_747834fdff189555cc3dbc25c73f674032248cdfaa8fcb8895ace2ab8a6fd187->leave($__internal_747834fdff189555cc3dbc25c73f674032248cdfaa8fcb8895ace2ab8a6fd187_prof);

    }

    // line 218
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_cf6a452db4adaae5eb8c89030c0047126f76a64e4c4a684ffd644214725b955d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf6a452db4adaae5eb8c89030c0047126f76a64e4c4a684ffd644214725b955d->enter($__internal_cf6a452db4adaae5eb8c89030c0047126f76a64e4c4a684ffd644214725b955d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_039cc873d679b5cfbbe6656259e122c241f5e09ac7ca306ca06f36933c8314d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_039cc873d679b5cfbbe6656259e122c241f5e09ac7ca306ca06f36933c8314d2->enter($__internal_039cc873d679b5cfbbe6656259e122c241f5e09ac7ca306ca06f36933c8314d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 219
        $context["force_error"] = true;
        // line 220
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_039cc873d679b5cfbbe6656259e122c241f5e09ac7ca306ca06f36933c8314d2->leave($__internal_039cc873d679b5cfbbe6656259e122c241f5e09ac7ca306ca06f36933c8314d2_prof);

        
        $__internal_cf6a452db4adaae5eb8c89030c0047126f76a64e4c4a684ffd644214725b955d->leave($__internal_cf6a452db4adaae5eb8c89030c0047126f76a64e4c4a684ffd644214725b955d_prof);

    }

    // line 223
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_7c31ae9d125068be85676f2c85c9a9301a5f1f367fd28f0349836eb3d4650226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c31ae9d125068be85676f2c85c9a9301a5f1f367fd28f0349836eb3d4650226->enter($__internal_7c31ae9d125068be85676f2c85c9a9301a5f1f367fd28f0349836eb3d4650226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_64f7695fe80fbdb3bce987744869d3a8743f804a02923c0366022ac77144a631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64f7695fe80fbdb3bce987744869d3a8743f804a02923c0366022ac77144a631->enter($__internal_64f7695fe80fbdb3bce987744869d3a8743f804a02923c0366022ac77144a631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 224
        $context["force_error"] = true;
        // line 225
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_64f7695fe80fbdb3bce987744869d3a8743f804a02923c0366022ac77144a631->leave($__internal_64f7695fe80fbdb3bce987744869d3a8743f804a02923c0366022ac77144a631_prof);

        
        $__internal_7c31ae9d125068be85676f2c85c9a9301a5f1f367fd28f0349836eb3d4650226->leave($__internal_7c31ae9d125068be85676f2c85c9a9301a5f1f367fd28f0349836eb3d4650226_prof);

    }

    // line 228
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_91d9e6964671f355fd42c7eb8277d41b003e27dc6c1c0a2b3056b32401c67066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91d9e6964671f355fd42c7eb8277d41b003e27dc6c1c0a2b3056b32401c67066->enter($__internal_91d9e6964671f355fd42c7eb8277d41b003e27dc6c1c0a2b3056b32401c67066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_1ef417d334cad360e471da1e77e3fb9d705dbef6840c12ad7b48718e84d1bfea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef417d334cad360e471da1e77e3fb9d705dbef6840c12ad7b48718e84d1bfea->enter($__internal_1ef417d334cad360e471da1e77e3fb9d705dbef6840c12ad7b48718e84d1bfea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 229
        $context["force_error"] = true;
        // line 230
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1ef417d334cad360e471da1e77e3fb9d705dbef6840c12ad7b48718e84d1bfea->leave($__internal_1ef417d334cad360e471da1e77e3fb9d705dbef6840c12ad7b48718e84d1bfea_prof);

        
        $__internal_91d9e6964671f355fd42c7eb8277d41b003e27dc6c1c0a2b3056b32401c67066->leave($__internal_91d9e6964671f355fd42c7eb8277d41b003e27dc6c1c0a2b3056b32401c67066_prof);

    }

    // line 233
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_81abf9b02fa268a329db5c55630fb76d49f987af1a4ef953b084fd650643f179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81abf9b02fa268a329db5c55630fb76d49f987af1a4ef953b084fd650643f179->enter($__internal_81abf9b02fa268a329db5c55630fb76d49f987af1a4ef953b084fd650643f179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_e67fe7fcae468fbb7b84b0e2b8ceab43c45aeff9bd373f42e0307f42e5e8da97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e67fe7fcae468fbb7b84b0e2b8ceab43c45aeff9bd373f42e0307f42e5e8da97->enter($__internal_e67fe7fcae468fbb7b84b0e2b8ceab43c45aeff9bd373f42e0307f42e5e8da97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 234
        $context["force_error"] = true;
        // line 235
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e67fe7fcae468fbb7b84b0e2b8ceab43c45aeff9bd373f42e0307f42e5e8da97->leave($__internal_e67fe7fcae468fbb7b84b0e2b8ceab43c45aeff9bd373f42e0307f42e5e8da97_prof);

        
        $__internal_81abf9b02fa268a329db5c55630fb76d49f987af1a4ef953b084fd650643f179->leave($__internal_81abf9b02fa268a329db5c55630fb76d49f987af1a4ef953b084fd650643f179_prof);

    }

    // line 238
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_aa2afa5c12ce3708b8304b5feb7ffdfefa30086e60d2f3b53bc3f147198162e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa2afa5c12ce3708b8304b5feb7ffdfefa30086e60d2f3b53bc3f147198162e4->enter($__internal_aa2afa5c12ce3708b8304b5feb7ffdfefa30086e60d2f3b53bc3f147198162e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_58a463cf64d8aaae08c6f48bc942828a8ad74b09017dbeb79d83624b86c00752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58a463cf64d8aaae08c6f48bc942828a8ad74b09017dbeb79d83624b86c00752->enter($__internal_58a463cf64d8aaae08c6f48bc942828a8ad74b09017dbeb79d83624b86c00752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 239
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 240
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 241
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 242
        echo "</div>";
        
        $__internal_58a463cf64d8aaae08c6f48bc942828a8ad74b09017dbeb79d83624b86c00752->leave($__internal_58a463cf64d8aaae08c6f48bc942828a8ad74b09017dbeb79d83624b86c00752_prof);

        
        $__internal_aa2afa5c12ce3708b8304b5feb7ffdfefa30086e60d2f3b53bc3f147198162e4->leave($__internal_aa2afa5c12ce3708b8304b5feb7ffdfefa30086e60d2f3b53bc3f147198162e4_prof);

    }

    // line 245
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_c11ff2b19801cbb5a862995d35c71c6c08e58d46db5d35752ba08221d2e5917d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c11ff2b19801cbb5a862995d35c71c6c08e58d46db5d35752ba08221d2e5917d->enter($__internal_c11ff2b19801cbb5a862995d35c71c6c08e58d46db5d35752ba08221d2e5917d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_5e98e1d601c1ff5e8ded0cba1cd62fd2f8fe7008265099d02b66a823e0bb5af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e98e1d601c1ff5e8ded0cba1cd62fd2f8fe7008265099d02b66a823e0bb5af0->enter($__internal_5e98e1d601c1ff5e8ded0cba1cd62fd2f8fe7008265099d02b66a823e0bb5af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 246
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 247
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 248
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 249
        echo "</div>";
        
        $__internal_5e98e1d601c1ff5e8ded0cba1cd62fd2f8fe7008265099d02b66a823e0bb5af0->leave($__internal_5e98e1d601c1ff5e8ded0cba1cd62fd2f8fe7008265099d02b66a823e0bb5af0_prof);

        
        $__internal_c11ff2b19801cbb5a862995d35c71c6c08e58d46db5d35752ba08221d2e5917d->leave($__internal_c11ff2b19801cbb5a862995d35c71c6c08e58d46db5d35752ba08221d2e5917d_prof);

    }

    // line 254
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_a3791b9ab4d8a5e3349d2037cea6b13288f5362da49ea6fde361299bd4b056db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3791b9ab4d8a5e3349d2037cea6b13288f5362da49ea6fde361299bd4b056db->enter($__internal_a3791b9ab4d8a5e3349d2037cea6b13288f5362da49ea6fde361299bd4b056db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_c88d53f4e4ad0ccb94a3e994a815c2fc8a0a1b85d63242a17602d5b38cdddd25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88d53f4e4ad0ccb94a3e994a815c2fc8a0a1b85d63242a17602d5b38cdddd25->enter($__internal_c88d53f4e4ad0ccb94a3e994a815c2fc8a0a1b85d63242a17602d5b38cdddd25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 255
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 256
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 257
            echo "    <ul class=\"list-unstyled\">";
            // line 258
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 259
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 261
            echo "</ul>
    ";
            // line 262
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_c88d53f4e4ad0ccb94a3e994a815c2fc8a0a1b85d63242a17602d5b38cdddd25->leave($__internal_c88d53f4e4ad0ccb94a3e994a815c2fc8a0a1b85d63242a17602d5b38cdddd25_prof);

        
        $__internal_a3791b9ab4d8a5e3349d2037cea6b13288f5362da49ea6fde361299bd4b056db->leave($__internal_a3791b9ab4d8a5e3349d2037cea6b13288f5362da49ea6fde361299bd4b056db_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1061 => 262,  1058 => 261,  1050 => 259,  1046 => 258,  1044 => 257,  1038 => 256,  1036 => 255,  1027 => 254,  1017 => 249,  1015 => 248,  1013 => 247,  1007 => 246,  998 => 245,  988 => 242,  986 => 241,  984 => 240,  978 => 239,  969 => 238,  959 => 235,  957 => 234,  948 => 233,  938 => 230,  936 => 229,  927 => 228,  917 => 225,  915 => 224,  906 => 223,  896 => 220,  894 => 219,  885 => 218,  875 => 215,  873 => 214,  871 => 213,  862 => 212,  852 => 209,  850 => 208,  848 => 207,  846 => 206,  840 => 205,  831 => 204,  819 => 198,  815 => 197,  800 => 196,  796 => 193,  793 => 190,  792 => 189,  791 => 188,  789 => 187,  786 => 186,  783 => 185,  780 => 184,  777 => 183,  774 => 182,  771 => 181,  768 => 180,  765 => 179,  763 => 178,  754 => 177,  744 => 174,  735 => 173,  725 => 170,  716 => 169,  706 => 166,  704 => 165,  695 => 163,  685 => 160,  683 => 159,  674 => 158,  663 => 152,  661 => 151,  659 => 150,  656 => 148,  654 => 147,  652 => 146,  643 => 145,  632 => 141,  630 => 140,  628 => 139,  625 => 137,  623 => 136,  621 => 135,  612 => 134,  601 => 130,  595 => 127,  594 => 126,  593 => 125,  589 => 124,  585 => 123,  578 => 119,  577 => 118,  576 => 117,  572 => 116,  570 => 115,  561 => 114,  551 => 111,  549 => 110,  540 => 109,  529 => 105,  525 => 104,  521 => 103,  517 => 102,  513 => 101,  509 => 100,  505 => 99,  501 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 254,  200 => 253,  197 => 251,  195 => 245,  192 => 244,  190 => 238,  187 => 237,  185 => 233,  182 => 232,  180 => 228,  177 => 227,  175 => 223,  172 => 222,  170 => 218,  167 => 217,  165 => 212,  162 => 211,  160 => 204,  157 => 203,  154 => 201,  152 => 177,  149 => 176,  147 => 173,  144 => 172,  142 => 169,  139 => 168,  137 => 163,  134 => 162,  132 => 158,  129 => 157,  126 => 155,  124 => 145,  121 => 144,  119 => 134,  116 => 133,  114 => 114,  111 => 113,  109 => 109,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
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
            {%- if with_years %}{{ form_widget(form.years) }}{% endif -%}
            {%- if with_months %}{{ form_widget(form.months) }}{% endif -%}
            {%- if with_weeks %}{{ form_widget(form.weeks) }}{% endif -%}
            {%- if with_days %}{{ form_widget(form.days) }}{% endif -%}
            {%- if with_hours %}{{ form_widget(form.hours) }}{% endif -%}
            {%- if with_minutes %}{{ form_widget(form.minutes) }}{% endif -%}
            {%- if with_seconds %}{{ form_widget(form.seconds) }}{% endif -%}
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
", "bootstrap_3_layout.html.twig", "E:\\PFAOrigin\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
