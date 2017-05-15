<?php

/* Admin/Tickets.html.twig */
class __TwigTemplate_33eb1b0be0e0be879baa6d386060566e1b0d0b48e0e9c58820a5a8d9a04a7d1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home/home.html.twig", "Admin/Tickets.html.twig", 1);
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
        $__internal_fda4d565df6a426e2700476ab3d1a06ba0054e8882744dbfbf33ed4ea2d16c57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fda4d565df6a426e2700476ab3d1a06ba0054e8882744dbfbf33ed4ea2d16c57->enter($__internal_fda4d565df6a426e2700476ab3d1a06ba0054e8882744dbfbf33ed4ea2d16c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Tickets.html.twig"));

        $__internal_0ea6ea5e75900ba9da0972448099343ed8ce74d234e0f804c2fe89e60e35f170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ea6ea5e75900ba9da0972448099343ed8ce74d234e0f804c2fe89e60e35f170->enter($__internal_0ea6ea5e75900ba9da0972448099343ed8ce74d234e0f804c2fe89e60e35f170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Tickets.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fda4d565df6a426e2700476ab3d1a06ba0054e8882744dbfbf33ed4ea2d16c57->leave($__internal_fda4d565df6a426e2700476ab3d1a06ba0054e8882744dbfbf33ed4ea2d16c57_prof);

        
        $__internal_0ea6ea5e75900ba9da0972448099343ed8ce74d234e0f804c2fe89e60e35f170->leave($__internal_0ea6ea5e75900ba9da0972448099343ed8ce74d234e0f804c2fe89e60e35f170_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c74cf8d0d04c8030c6a4304f089a9889e420c5a216206ae1df75c127f1a2ea56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c74cf8d0d04c8030c6a4304f089a9889e420c5a216206ae1df75c127f1a2ea56->enter($__internal_c74cf8d0d04c8030c6a4304f089a9889e420c5a216206ae1df75c127f1a2ea56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_63e216425ce8e7c75277178833ab35666dfa79123dbeed01fbc6536100ffe0d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e216425ce8e7c75277178833ab35666dfa79123dbeed01fbc6536100ffe0d3->enter($__internal_63e216425ce8e7c75277178833ab35666dfa79123dbeed01fbc6536100ffe0d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "Toutes les Annonces
";
        
        $__internal_63e216425ce8e7c75277178833ab35666dfa79123dbeed01fbc6536100ffe0d3->leave($__internal_63e216425ce8e7c75277178833ab35666dfa79123dbeed01fbc6536100ffe0d3_prof);

        
        $__internal_c74cf8d0d04c8030c6a4304f089a9889e420c5a216206ae1df75c127f1a2ea56->leave($__internal_c74cf8d0d04c8030c6a4304f089a9889e420c5a216206ae1df75c127f1a2ea56_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c01a162b3b173dc550f9d9713e6301271485bf8aa2ff009f26401c74b24d525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c01a162b3b173dc550f9d9713e6301271485bf8aa2ff009f26401c74b24d525->enter($__internal_4c01a162b3b173dc550f9d9713e6301271485bf8aa2ff009f26401c74b24d525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f26b05e7ec26b4ca2d6b769b4d2e2b00d1fa066c04351501598dcba72481b1c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f26b05e7ec26b4ca2d6b769b4d2e2b00d1fa066c04351501598dcba72481b1c9->enter($__internal_f26b05e7ec26b4ca2d6b769b4d2e2b00d1fa066c04351501598dcba72481b1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-xs-12\">
                <div class=\"pull-right\" style=\"margin-bottom: 10px; margin-top: 20px;\">
                   <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_ticket");
        echo "\" class=\"btn btn-primary pull-right\">Ajouter une Annonce <span class=\"fa fa-plus-circle\"></span></a>
                </div>

                <h1>Les Annonce</h1>

                <table class=\"table table-striped\">
                    <tr>
                        <th>Id Annonce</th>
                        <th>Nom Annonce</th>
                        <th>Id Voiture</th>
                        <th>Nom Voiture</th>
                        <th>Modèle Voiture</th>
                        <th>Constructeur</th>
                        <th>Nom d'utilisateur</th>
                        <th>Id Utilisateur</th>
                        <th>Status</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Tickets"]) ? $context["Tickets"] : $this->getContext($context, "Tickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 33
            echo "                        <tr>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "nom", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ticket"], "voiture", array()), "nomVoiture", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ticket"], "voiture", array()), "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ticket"], "voiture", array()), "modeleVoiture", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ticket"], "voiture", array()), "constructeur", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ticket"], "utilisateur", array()), "nom", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ticket"], "utilisateur", array()), "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 42
            if (($this->getAttribute($context["ticket"], "status", array()) == 0)) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("approve", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
                echo "\">";
                echo "Non approuvée";
                echo "</a>";
            } else {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("disapprove", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
                echo "\">";
                echo "Approuvée";
                echo "</a>";
            }
            echo "</td>
                            <td>
                                <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_ticket_edit", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success\"><span class=\"fa fa-pencil\"></span></a>
                            </td>
                            <td>
                                <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_ticket_remove", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success\"><span class=\"fa fa-trash\"></span></a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_f26b05e7ec26b4ca2d6b769b4d2e2b00d1fa066c04351501598dcba72481b1c9->leave($__internal_f26b05e7ec26b4ca2d6b769b4d2e2b00d1fa066c04351501598dcba72481b1c9_prof);

        
        $__internal_4c01a162b3b173dc550f9d9713e6301271485bf8aa2ff009f26401c74b24d525->leave($__internal_4c01a162b3b173dc550f9d9713e6301271485bf8aa2ff009f26401c74b24d525_prof);

    }

    public function getTemplateName()
    {
        return "Admin/Tickets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 51,  161 => 47,  155 => 44,  138 => 42,  134 => 41,  130 => 40,  126 => 39,  122 => 38,  118 => 37,  114 => 36,  110 => 35,  106 => 34,  103 => 33,  99 => 32,  77 => 13,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%  extends \"home/home.html.twig\" %}

{% block title %}
Toutes les Annonces
{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-xs-12\">
                <div class=\"pull-right\" style=\"margin-bottom: 10px; margin-top: 20px;\">
                   <a href=\"{{ path(\"new_ticket\") }}\" class=\"btn btn-primary pull-right\">Ajouter une Annonce <span class=\"fa fa-plus-circle\"></span></a>
                </div>

                <h1>Les Annonce</h1>

                <table class=\"table table-striped\">
                    <tr>
                        <th>Id Annonce</th>
                        <th>Nom Annonce</th>
                        <th>Id Voiture</th>
                        <th>Nom Voiture</th>
                        <th>Modèle Voiture</th>
                        <th>Constructeur</th>
                        <th>Nom d'utilisateur</th>
                        <th>Id Utilisateur</th>
                        <th>Status</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                    {% for ticket in Tickets %}
                        <tr>
                            <td>{{ ticket.id }}</td>
                            <td>{{ ticket.nom }}</td>
                            <td>{{ ticket.voiture.nomVoiture }}</td>
                            <td>{{ ticket.voiture.id }}</td>
                            <td>{{ ticket.voiture.modeleVoiture }}</td>
                            <td>{{ ticket.voiture.constructeur }}</td>
                            <td>{{ ticket.utilisateur.nom }}</td>
                            <td>{{ ticket.utilisateur.id }}</td>
                            <td>{% if ticket.status ==0 %} <a href=\"{{ path('approve', {'id': ticket.id}) }}\">{{'Non approuvée'}}</a>{% else %}<a href=\"{{ path('disapprove', {'id': ticket.id}) }}\">{{'Approuvée'}}</a>{% endif %}</td>
                            <td>
                                <a href=\"{{ path(\"user_ticket_edit\", {'id': ticket.id}) }}\" class=\"btn btn-xs btn-success\"><span class=\"fa fa-pencil\"></span></a>
                            </td>
                            <td>
                                <a href=\"{{ path(\"user_ticket_remove\", {'id': ticket.id}) }}\" class=\"btn btn-xs btn-success\"><span class=\"fa fa-trash\"></span></a>
                            </td>
                        </tr>
                    {% endfor %}
                </table>
            </div>
        </div>
    </div>
{% endblock %}", "Admin/Tickets.html.twig", "E:\\PFAOrigin\\app\\Resources\\views\\Admin\\Tickets.html.twig");
    }
}
