<?php

/* Admin/Cars.html.twig */
class __TwigTemplate_cd6d2dd5ea68b5ebb10da4412c032970dc915ce5455ff1c6aa919f4b79e221ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home/home.html.twig", "Admin/Cars.html.twig", 1);
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
        $__internal_176568243eeb5b1265140a2716fc2bc9ee2bb66033ba26540549c05b2b9f686c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_176568243eeb5b1265140a2716fc2bc9ee2bb66033ba26540549c05b2b9f686c->enter($__internal_176568243eeb5b1265140a2716fc2bc9ee2bb66033ba26540549c05b2b9f686c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Cars.html.twig"));

        $__internal_d57197da0ede398538e14c2b0401c31b36f36b3f9c98f3572253be648add6937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d57197da0ede398538e14c2b0401c31b36f36b3f9c98f3572253be648add6937->enter($__internal_d57197da0ede398538e14c2b0401c31b36f36b3f9c98f3572253be648add6937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Cars.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_176568243eeb5b1265140a2716fc2bc9ee2bb66033ba26540549c05b2b9f686c->leave($__internal_176568243eeb5b1265140a2716fc2bc9ee2bb66033ba26540549c05b2b9f686c_prof);

        
        $__internal_d57197da0ede398538e14c2b0401c31b36f36b3f9c98f3572253be648add6937->leave($__internal_d57197da0ede398538e14c2b0401c31b36f36b3f9c98f3572253be648add6937_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e72d98e6cf34dbddc3aa4a514a15a2f914feb928237650dfbc19f0f7c0092de7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e72d98e6cf34dbddc3aa4a514a15a2f914feb928237650dfbc19f0f7c0092de7->enter($__internal_e72d98e6cf34dbddc3aa4a514a15a2f914feb928237650dfbc19f0f7c0092de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cbb27cdad8405ccf74db4aa17e0a6656cf542b5224b1b95c81e45adfc6146040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb27cdad8405ccf74db4aa17e0a6656cf542b5224b1b95c81e45adfc6146040->enter($__internal_cbb27cdad8405ccf74db4aa17e0a6656cf542b5224b1b95c81e45adfc6146040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Les Voitures
";
        
        $__internal_cbb27cdad8405ccf74db4aa17e0a6656cf542b5224b1b95c81e45adfc6146040->leave($__internal_cbb27cdad8405ccf74db4aa17e0a6656cf542b5224b1b95c81e45adfc6146040_prof);

        
        $__internal_e72d98e6cf34dbddc3aa4a514a15a2f914feb928237650dfbc19f0f7c0092de7->leave($__internal_e72d98e6cf34dbddc3aa4a514a15a2f914feb928237650dfbc19f0f7c0092de7_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_0625b78e438ca569ad6e07e04840948a039c424986e9dc1b1b4b2ceb10c8bedc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0625b78e438ca569ad6e07e04840948a039c424986e9dc1b1b4b2ceb10c8bedc->enter($__internal_0625b78e438ca569ad6e07e04840948a039c424986e9dc1b1b4b2ceb10c8bedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_404e4140a8ba008849f2e9952149323644f81a3cfb19d58ebbbf161c85f34792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_404e4140a8ba008849f2e9952149323644f81a3cfb19d58ebbbf161c85f34792->enter($__internal_404e4140a8ba008849f2e9952149323644f81a3cfb19d58ebbbf161c85f34792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-xs-12\">
                <div class=\"pull-right\" style=\"margin-bottom: 10px; margin-top: 20px;\">
                    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_car");
        echo "\" class=\"btn btn-primary pull-right\">Ajouter Une Voiture <span class=\"fa fa-plus-circle\"></span></a>
                </div>

                <h1>Voitures</h1>

                <table class=\"table table-striped\">
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>modèle</th>
                        <th>Utilisateur</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Cars"]) ? $context["Cars"] : $this->getContext($context, "Cars")));
        foreach ($context['_seq'] as $context["_key"] => $context["Car"]) {
            // line 29
            echo "                        <tr>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["Car"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["Car"], "nomVoiture", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["Car"], "modeleVoiture", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["Car"], "utilisateur", array()), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_car", array("id" => $this->getAttribute($context["Car"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success\"><span class=\"fa fa-pencil\"></span></a>
                            </td>
                            <td>
                                <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_car", array("id" => $this->getAttribute($context["Car"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success\"><span class=\"fa fa-trash\"></span></a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                </table>
            </div>
        </div>
    </div>

";
        
        $__internal_404e4140a8ba008849f2e9952149323644f81a3cfb19d58ebbbf161c85f34792->leave($__internal_404e4140a8ba008849f2e9952149323644f81a3cfb19d58ebbbf161c85f34792_prof);

        
        $__internal_0625b78e438ca569ad6e07e04840948a039c424986e9dc1b1b4b2ceb10c8bedc->leave($__internal_0625b78e438ca569ad6e07e04840948a039c424986e9dc1b1b4b2ceb10c8bedc_prof);

    }

    public function getTemplateName()
    {
        return "Admin/Cars.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 42,  124 => 38,  118 => 35,  113 => 33,  109 => 32,  105 => 31,  101 => 30,  98 => 29,  94 => 28,  77 => 14,  70 => 9,  61 => 8,  50 => 4,  41 => 3,  11 => 1,);
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
    Les Voitures
{% endblock%}


{% block body %}
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-xs-12\">
                <div class=\"pull-right\" style=\"margin-bottom: 10px; margin-top: 20px;\">
                    <a href=\"{{ path(\"new_car\") }}\" class=\"btn btn-primary pull-right\">Ajouter Une Voiture <span class=\"fa fa-plus-circle\"></span></a>
                </div>

                <h1>Voitures</h1>

                <table class=\"table table-striped\">
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>modèle</th>
                        <th>Utilisateur</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                    {% for Car in Cars %}
                        <tr>
                            <td>{{ Car.id }}</td>
                            <td>{{ Car.nomVoiture }}</td>
                            <td>{{ Car.modeleVoiture }}</td>
                            <td>{{ Car.utilisateur }}</td>
                            <td>
                                <a href=\"{{ path(\"edit_car\", {'id': Car.id}) }}\" class=\"btn btn-xs btn-success\"><span class=\"fa fa-pencil\"></span></a>
                            </td>
                            <td>
                                <a href=\"{{ path(\"delete_car\", {'id': Car.id}) }}\" class=\"btn btn-xs btn-success\"><span class=\"fa fa-trash\"></span></a>
                            </td>
                        </tr>
                    {% endfor %}
                </table>
            </div>
        </div>
    </div>

{% endblock %}", "Admin/Cars.html.twig", "E:\\PFAOrigin\\app\\Resources\\views\\Admin\\Cars.html.twig");
    }
}
