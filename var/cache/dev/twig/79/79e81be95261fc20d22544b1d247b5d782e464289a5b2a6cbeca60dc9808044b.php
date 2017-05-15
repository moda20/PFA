<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_be4d1cec9070807712a715a9780d24ad57ccc6b94a94437daf23cc99cf8bb023 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8580d1c5e62c8efb321953643d14103a45f073772d4f5bb0534e0df213a021e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8580d1c5e62c8efb321953643d14103a45f073772d4f5bb0534e0df213a021e6->enter($__internal_8580d1c5e62c8efb321953643d14103a45f073772d4f5bb0534e0df213a021e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_5de60cda482e57b1072d7bdbf6c801872522392a2fdb8537236bc7a67dea034a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5de60cda482e57b1072d7bdbf6c801872522392a2fdb8537236bc7a67dea034a->enter($__internal_5de60cda482e57b1072d7bdbf6c801872522392a2fdb8537236bc7a67dea034a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8580d1c5e62c8efb321953643d14103a45f073772d4f5bb0534e0df213a021e6->leave($__internal_8580d1c5e62c8efb321953643d14103a45f073772d4f5bb0534e0df213a021e6_prof);

        
        $__internal_5de60cda482e57b1072d7bdbf6c801872522392a2fdb8537236bc7a67dea034a->leave($__internal_5de60cda482e57b1072d7bdbf6c801872522392a2fdb8537236bc7a67dea034a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d68ef38b61a9d3eedf68722d6bea029de5d0b77cfec35427b6fb5ee81a430c9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d68ef38b61a9d3eedf68722d6bea029de5d0b77cfec35427b6fb5ee81a430c9b->enter($__internal_d68ef38b61a9d3eedf68722d6bea029de5d0b77cfec35427b6fb5ee81a430c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f38f0ac24e22127c7765eb9401aa041de52bc82c84f18095ed324dbbbcc93505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f38f0ac24e22127c7765eb9401aa041de52bc82c84f18095ed324dbbbcc93505->enter($__internal_f38f0ac24e22127c7765eb9401aa041de52bc82c84f18095ed324dbbbcc93505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_f38f0ac24e22127c7765eb9401aa041de52bc82c84f18095ed324dbbbcc93505->leave($__internal_f38f0ac24e22127c7765eb9401aa041de52bc82c84f18095ed324dbbbcc93505_prof);

        
        $__internal_d68ef38b61a9d3eedf68722d6bea029de5d0b77cfec35427b6fb5ee81a430c9b->leave($__internal_d68ef38b61a9d3eedf68722d6bea029de5d0b77cfec35427b6fb5ee81a430c9b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_31db3e8dc33d7789f3a31d2c3077ead256b0bc2d2bbdb43d3cdcc1e86f9c0297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31db3e8dc33d7789f3a31d2c3077ead256b0bc2d2bbdb43d3cdcc1e86f9c0297->enter($__internal_31db3e8dc33d7789f3a31d2c3077ead256b0bc2d2bbdb43d3cdcc1e86f9c0297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6e7b5be9815279423876ddb18b7b9501b2e17a1f3b45430c81c0b0043e148b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e7b5be9815279423876ddb18b7b9501b2e17a1f3b45430c81c0b0043e148b1a->enter($__internal_6e7b5be9815279423876ddb18b7b9501b2e17a1f3b45430c81c0b0043e148b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6e7b5be9815279423876ddb18b7b9501b2e17a1f3b45430c81c0b0043e148b1a->leave($__internal_6e7b5be9815279423876ddb18b7b9501b2e17a1f3b45430c81c0b0043e148b1a_prof);

        
        $__internal_31db3e8dc33d7789f3a31d2c3077ead256b0bc2d2bbdb43d3cdcc1e86f9c0297->leave($__internal_31db3e8dc33d7789f3a31d2c3077ead256b0bc2d2bbdb43d3cdcc1e86f9c0297_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_62217d09df01726df9d80601761b193445e2df49a5df37e6f1a01901da820afa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62217d09df01726df9d80601761b193445e2df49a5df37e6f1a01901da820afa->enter($__internal_62217d09df01726df9d80601761b193445e2df49a5df37e6f1a01901da820afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e721eb3d768c8ca5f6fbd4db35317ca213a744c6095bf7e1f685b95010c60412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e721eb3d768c8ca5f6fbd4db35317ca213a744c6095bf7e1f685b95010c60412->enter($__internal_e721eb3d768c8ca5f6fbd4db35317ca213a744c6095bf7e1f685b95010c60412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e721eb3d768c8ca5f6fbd4db35317ca213a744c6095bf7e1f685b95010c60412->leave($__internal_e721eb3d768c8ca5f6fbd4db35317ca213a744c6095bf7e1f685b95010c60412_prof);

        
        $__internal_62217d09df01726df9d80601761b193445e2df49a5df37e6f1a01901da820afa->leave($__internal_62217d09df01726df9d80601761b193445e2df49a5df37e6f1a01901da820afa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "E:\\PFAOrigin\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
