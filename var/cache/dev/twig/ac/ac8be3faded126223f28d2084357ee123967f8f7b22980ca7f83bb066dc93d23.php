<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60b558f13f212622b71429dd386fc723affe025f7fe41bce03aef6d62d5c4bda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb991b25859464d465cf3f26a0feb1c1a0b2c0a0039d3736488ce50c0202d0a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb991b25859464d465cf3f26a0feb1c1a0b2c0a0039d3736488ce50c0202d0a5->enter($__internal_fb991b25859464d465cf3f26a0feb1c1a0b2c0a0039d3736488ce50c0202d0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_09364fd82d32a5e8bb8ac048f114cf73c0e2ec6266a104305641269a6271d174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09364fd82d32a5e8bb8ac048f114cf73c0e2ec6266a104305641269a6271d174->enter($__internal_09364fd82d32a5e8bb8ac048f114cf73c0e2ec6266a104305641269a6271d174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb991b25859464d465cf3f26a0feb1c1a0b2c0a0039d3736488ce50c0202d0a5->leave($__internal_fb991b25859464d465cf3f26a0feb1c1a0b2c0a0039d3736488ce50c0202d0a5_prof);

        
        $__internal_09364fd82d32a5e8bb8ac048f114cf73c0e2ec6266a104305641269a6271d174->leave($__internal_09364fd82d32a5e8bb8ac048f114cf73c0e2ec6266a104305641269a6271d174_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f21c9450526124ce6d57cce1dccb2e7cfd94de26262c7f9e909128cc2ab155a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f21c9450526124ce6d57cce1dccb2e7cfd94de26262c7f9e909128cc2ab155a5->enter($__internal_f21c9450526124ce6d57cce1dccb2e7cfd94de26262c7f9e909128cc2ab155a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_be79a97090d874a339a7cced88fc2052dc47052d3400091af049ac1c1a440a83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be79a97090d874a339a7cced88fc2052dc47052d3400091af049ac1c1a440a83->enter($__internal_be79a97090d874a339a7cced88fc2052dc47052d3400091af049ac1c1a440a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_be79a97090d874a339a7cced88fc2052dc47052d3400091af049ac1c1a440a83->leave($__internal_be79a97090d874a339a7cced88fc2052dc47052d3400091af049ac1c1a440a83_prof);

        
        $__internal_f21c9450526124ce6d57cce1dccb2e7cfd94de26262c7f9e909128cc2ab155a5->leave($__internal_f21c9450526124ce6d57cce1dccb2e7cfd94de26262c7f9e909128cc2ab155a5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7c78949641c9fc478a46229de420de1893f19a790159c54410153912ac07439c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c78949641c9fc478a46229de420de1893f19a790159c54410153912ac07439c->enter($__internal_7c78949641c9fc478a46229de420de1893f19a790159c54410153912ac07439c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d5f5951b5f3fc070f480d987c74a2933d721259f2b79dd9d46e278adde800eb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f5951b5f3fc070f480d987c74a2933d721259f2b79dd9d46e278adde800eb9->enter($__internal_d5f5951b5f3fc070f480d987c74a2933d721259f2b79dd9d46e278adde800eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d5f5951b5f3fc070f480d987c74a2933d721259f2b79dd9d46e278adde800eb9->leave($__internal_d5f5951b5f3fc070f480d987c74a2933d721259f2b79dd9d46e278adde800eb9_prof);

        
        $__internal_7c78949641c9fc478a46229de420de1893f19a790159c54410153912ac07439c->leave($__internal_7c78949641c9fc478a46229de420de1893f19a790159c54410153912ac07439c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a7c831e1685c0530effbe8289ad07227cf22fceee1717a0ab6a6bcae03809c9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7c831e1685c0530effbe8289ad07227cf22fceee1717a0ab6a6bcae03809c9c->enter($__internal_a7c831e1685c0530effbe8289ad07227cf22fceee1717a0ab6a6bcae03809c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c7d9b7ec19af070e97149b0968fdff508bee4d96015f8772474ca2c8c4c54142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7d9b7ec19af070e97149b0968fdff508bee4d96015f8772474ca2c8c4c54142->enter($__internal_c7d9b7ec19af070e97149b0968fdff508bee4d96015f8772474ca2c8c4c54142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c7d9b7ec19af070e97149b0968fdff508bee4d96015f8772474ca2c8c4c54142->leave($__internal_c7d9b7ec19af070e97149b0968fdff508bee4d96015f8772474ca2c8c4c54142_prof);

        
        $__internal_a7c831e1685c0530effbe8289ad07227cf22fceee1717a0ab6a6bcae03809c9c->leave($__internal_a7c831e1685c0530effbe8289ad07227cf22fceee1717a0ab6a6bcae03809c9c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "E:\\PFAOrigin\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
