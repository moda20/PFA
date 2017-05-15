<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_f4c0725911775639c0e5eb765622a1a9b12b386e28af7fefd8f5771f16d3d0fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_237f23684a2894c28f1dda9c8b1f5d46d5e68d664c3d3cbfafbddfee6491af4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_237f23684a2894c28f1dda9c8b1f5d46d5e68d664c3d3cbfafbddfee6491af4d->enter($__internal_237f23684a2894c28f1dda9c8b1f5d46d5e68d664c3d3cbfafbddfee6491af4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_8cd1f75d0bcc10d3f867c95a305c8c0a62beb27daf0d8fa09b6f8b3d25ada00f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd1f75d0bcc10d3f867c95a305c8c0a62beb27daf0d8fa09b6f8b3d25ada00f->enter($__internal_8cd1f75d0bcc10d3f867c95a305c8c0a62beb27daf0d8fa09b6f8b3d25ada00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_237f23684a2894c28f1dda9c8b1f5d46d5e68d664c3d3cbfafbddfee6491af4d->leave($__internal_237f23684a2894c28f1dda9c8b1f5d46d5e68d664c3d3cbfafbddfee6491af4d_prof);

        
        $__internal_8cd1f75d0bcc10d3f867c95a305c8c0a62beb27daf0d8fa09b6f8b3d25ada00f->leave($__internal_8cd1f75d0bcc10d3f867c95a305c8c0a62beb27daf0d8fa09b6f8b3d25ada00f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "E:\\PFAOrigin\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
