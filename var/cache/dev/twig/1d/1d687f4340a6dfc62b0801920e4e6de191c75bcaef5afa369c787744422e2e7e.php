<?php

/* security/login.html.twig */
class __TwigTemplate_3ac24630a06b09e80838481ab6a01cef180ffcdd555f2840520a773efd5477b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home/home.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "home/home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c6297aad6f3ecdd6fe80348611008ccd1a8a67cffd9f5d16d5e0720ec64eede = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c6297aad6f3ecdd6fe80348611008ccd1a8a67cffd9f5d16d5e0720ec64eede->enter($__internal_6c6297aad6f3ecdd6fe80348611008ccd1a8a67cffd9f5d16d5e0720ec64eede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_b45215334969b481ad6b3bed10d362f649a4d77db8d6f541710ca0e86faafcc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b45215334969b481ad6b3bed10d362f649a4d77db8d6f541710ca0e86faafcc8->enter($__internal_b45215334969b481ad6b3bed10d362f649a4d77db8d6f541710ca0e86faafcc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c6297aad6f3ecdd6fe80348611008ccd1a8a67cffd9f5d16d5e0720ec64eede->leave($__internal_6c6297aad6f3ecdd6fe80348611008ccd1a8a67cffd9f5d16d5e0720ec64eede_prof);

        
        $__internal_b45215334969b481ad6b3bed10d362f649a4d77db8d6f541710ca0e86faafcc8->leave($__internal_b45215334969b481ad6b3bed10d362f649a4d77db8d6f541710ca0e86faafcc8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8db099a4164277197632c2b5f9eaf43e5d8fe78b7578403e0d6ff6848d68e3c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8db099a4164277197632c2b5f9eaf43e5d8fe78b7578403e0d6ff6848d68e3c7->enter($__internal_8db099a4164277197632c2b5f9eaf43e5d8fe78b7578403e0d6ff6848d68e3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_25b5ec2cd296dbc7a325a0f01d51a1fe28ef8a7104a23898983c8e35931ce931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25b5ec2cd296dbc7a325a0f01d51a1fe28ef8a7104a23898983c8e35931ce931->enter($__internal_25b5ec2cd296dbc7a325a0f01d51a1fe28ef8a7104a23898983c8e35931ce931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "Se Connecter
";
        
        $__internal_25b5ec2cd296dbc7a325a0f01d51a1fe28ef8a7104a23898983c8e35931ce931->leave($__internal_25b5ec2cd296dbc7a325a0f01d51a1fe28ef8a7104a23898983c8e35931ce931_prof);

        
        $__internal_8db099a4164277197632c2b5f9eaf43e5d8fe78b7578403e0d6ff6848d68e3c7->leave($__internal_8db099a4164277197632c2b5f9eaf43e5d8fe78b7578403e0d6ff6848d68e3c7_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_db302af055291246b4fada33c1931dfe9142b43f6251882a60cb6dadf2649581 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db302af055291246b4fada33c1931dfe9142b43f6251882a60cb6dadf2649581->enter($__internal_db302af055291246b4fada33c1931dfe9142b43f6251882a60cb6dadf2649581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d27e67e61c2737f6a22d69dd7b2fe0e1f10c42e39098f25112fae1b080bc95be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d27e67e61c2737f6a22d69dd7b2fe0e1f10c42e39098f25112fae1b080bc95be->enter($__internal_d27e67e61c2737f6a22d69dd7b2fe0e1f10c42e39098f25112fae1b080bc95be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h1> Login</h1>
                ";
        // line 12
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 13
            echo "                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 15
        echo "
                ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["loginform"]) ? $context["loginform"] : $this->getContext($context, "loginform")), 'form_start');
        echo "
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["loginform"]) ? $context["loginform"] : $this->getContext($context, "loginform")), "_username", array()), 'row');
        echo "
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["loginform"]) ? $context["loginform"] : $this->getContext($context, "loginform")), "_password", array()), 'row');
        echo "
                <button type=\"submit\" class=\"btn btn-success\">Se connecter <span class=\"fa fa-lock\"></span></button> <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_user");
        echo "\">Enregistrer</a>
                ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["loginform"]) ? $context["loginform"] : $this->getContext($context, "loginform")), 'form_end');
        echo "
            </div>
        </div>
    </div>



";
        
        $__internal_d27e67e61c2737f6a22d69dd7b2fe0e1f10c42e39098f25112fae1b080bc95be->leave($__internal_d27e67e61c2737f6a22d69dd7b2fe0e1f10c42e39098f25112fae1b080bc95be_prof);

        
        $__internal_db302af055291246b4fada33c1931dfe9142b43f6251882a60cb6dadf2649581->leave($__internal_db302af055291246b4fada33c1931dfe9142b43f6251882a60cb6dadf2649581_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 20,  99 => 19,  95 => 18,  91 => 17,  87 => 16,  84 => 15,  78 => 13,  76 => 12,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'home/home.html.twig' %}

{% block title %}
Se Connecter
{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h1> Login</h1>
                {% if error %}
                    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}

                {{ form_start(loginform) }}
                    {{ form_row(loginform._username) }}
                    {{ form_row(loginform._password) }}
                <button type=\"submit\" class=\"btn btn-success\">Se connecter <span class=\"fa fa-lock\"></span></button> <a href=\"{{ path('new_user') }}\">Enregistrer</a>
                {{ form_end(loginform) }}
            </div>
        </div>
    </div>



{% endblock %}", "security/login.html.twig", "E:\\PFAOrigin\\app\\Resources\\views\\security\\login.html.twig");
    }
}
