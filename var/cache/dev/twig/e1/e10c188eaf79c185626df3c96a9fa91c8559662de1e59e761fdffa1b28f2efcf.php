<?php

/* Admin/Users.html.twig */
class __TwigTemplate_63d9db8db249753b7f98d7505c5dec30c6b62157cee0edf3eb1da7196102e6dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home/home.html.twig", "Admin/Users.html.twig", 1);
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
        $__internal_3912bec778e3220a756516d7bca164de89b8df349bf93616ae69b4900a7936ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3912bec778e3220a756516d7bca164de89b8df349bf93616ae69b4900a7936ca->enter($__internal_3912bec778e3220a756516d7bca164de89b8df349bf93616ae69b4900a7936ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Users.html.twig"));

        $__internal_83e15ee63ea44682e728bf7e9439fa83c4d0ed87b1292d34b603ad591883219d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e15ee63ea44682e728bf7e9439fa83c4d0ed87b1292d34b603ad591883219d->enter($__internal_83e15ee63ea44682e728bf7e9439fa83c4d0ed87b1292d34b603ad591883219d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3912bec778e3220a756516d7bca164de89b8df349bf93616ae69b4900a7936ca->leave($__internal_3912bec778e3220a756516d7bca164de89b8df349bf93616ae69b4900a7936ca_prof);

        
        $__internal_83e15ee63ea44682e728bf7e9439fa83c4d0ed87b1292d34b603ad591883219d->leave($__internal_83e15ee63ea44682e728bf7e9439fa83c4d0ed87b1292d34b603ad591883219d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2bd02c6795e74a1cc7547a6c9203065134e4b7be8abd61815995e5e14656e722 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bd02c6795e74a1cc7547a6c9203065134e4b7be8abd61815995e5e14656e722->enter($__internal_2bd02c6795e74a1cc7547a6c9203065134e4b7be8abd61815995e5e14656e722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_edc0070a43dbfc1b8194f7be7b02e7d43683834eb37b87de8f3a840a9b21a8e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc0070a43dbfc1b8194f7be7b02e7d43683834eb37b87de8f3a840a9b21a8e6->enter($__internal_edc0070a43dbfc1b8194f7be7b02e7d43683834eb37b87de8f3a840a9b21a8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "Utilisateur
";
        
        $__internal_edc0070a43dbfc1b8194f7be7b02e7d43683834eb37b87de8f3a840a9b21a8e6->leave($__internal_edc0070a43dbfc1b8194f7be7b02e7d43683834eb37b87de8f3a840a9b21a8e6_prof);

        
        $__internal_2bd02c6795e74a1cc7547a6c9203065134e4b7be8abd61815995e5e14656e722->leave($__internal_2bd02c6795e74a1cc7547a6c9203065134e4b7be8abd61815995e5e14656e722_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ccf545ecd948b473e28e8563c033e7d71e4331852c8eb16c9da5278e5b48d88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ccf545ecd948b473e28e8563c033e7d71e4331852c8eb16c9da5278e5b48d88->enter($__internal_7ccf545ecd948b473e28e8563c033e7d71e4331852c8eb16c9da5278e5b48d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d9bca54bffa6b7bbdad4fa6a7cfe3e90ce52abdf0fb21a26afb8ca956a1192dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9bca54bffa6b7bbdad4fa6a7cfe3e90ce52abdf0fb21a26afb8ca956a1192dc->enter($__internal_d9bca54bffa6b7bbdad4fa6a7cfe3e90ce52abdf0fb21a26afb8ca956a1192dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"tabbable-panel\">
        <div class=\"tabbable-line\">
            <ul class=\"nav nav-tabs \">
                <li class=\"active\">
                    <a href=\"#tab_default_1\" data-toggle=\"tab\">
                        <i class=\"fa fa-users\"></i> Utilisateurs </a>
                </li>
                <li>
                    <a href=\"#tab_default_2\" data-toggle=\"tab\">
                        <i class=\"fa fa-user-secret\"></i> Roles </a>
                </li>
            </ul>
            <div class=\"tab-content\">
                <div class=\"pull-right\" style=\"margin-bottom: 10px; margin-top: 20px;\">
                    <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_user");
        echo "\" class=\"btn btn-primary pull-right\">Ajouter un utilisateur <span class=\"fa fa-plus-circle\"></span></a>
                </div>
                <div class=\"tab-pane active\" id=\"tab_default_1\">
                    <h1>
                        Les utilisateurs enregistrées
                    </h1>

                    <table class=\"table table-striped\">
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Numéro Tel</th>
                            <th>E-mail</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>
                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Users"]) ? $context["Users"] : $this->getContext($context, "Users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 40
            echo "                            <tr>
                                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "numTel", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "mail", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_user", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success\"><span class=\"fa fa-pencil\"></span></a>
                                </td>
                                <td>
                                    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_user", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success\"><span class=\"fa fa-trash\"></span></a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                    </table>
                </div>
                <div class=\"tab-pane\" id=\"tab_default_2\">
                    <h1>
                        Les Roles des utilisateurs enregistrées
                    </h1>
                    <div class=\"container\">
                        <table class=\"table table-striped\">
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Liste des roles</th>
                                <th>Supprimer</th>
                            </tr>
                            ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Users"]) ? $context["Users"] : $this->getContext($context, "Users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 69
            echo "                                <tr>
                                    <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
            echo "</td>
                                    <td><div class=\"list-group\">
                                            ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 74
                echo "                                            <a href=\"#\" class=\"list-group-item active\">
                                                <h4 class=\"list-group-item-heading\">";
                // line 75
                echo ((($context["r"] == "ROLE_USER")) ? ("Role Utilisateur") : (((($context["r"] == "ROLE_ADMIN")) ? ("Role Administrateur") : (""))));
                echo "</h4>
                                            </a>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                                        </div></td>
                                    <td>
                                        <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_user", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success\"><span class=\"fa fa-trash\"></span></a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        
        $__internal_d9bca54bffa6b7bbdad4fa6a7cfe3e90ce52abdf0fb21a26afb8ca956a1192dc->leave($__internal_d9bca54bffa6b7bbdad4fa6a7cfe3e90ce52abdf0fb21a26afb8ca956a1192dc_prof);

        
        $__internal_7ccf545ecd948b473e28e8563c033e7d71e4331852c8eb16c9da5278e5b48d88->leave($__internal_7ccf545ecd948b473e28e8563c033e7d71e4331852c8eb16c9da5278e5b48d88_prof);

    }

    public function getTemplateName()
    {
        return "Admin/Users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 84,  202 => 80,  198 => 78,  189 => 75,  186 => 74,  182 => 73,  177 => 71,  173 => 70,  170 => 69,  166 => 68,  150 => 54,  140 => 50,  134 => 47,  129 => 45,  125 => 44,  121 => 43,  117 => 42,  113 => 41,  110 => 40,  106 => 39,  86 => 22,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
Utilisateur
{% endblock %}

{% block body %}
    <div class=\"tabbable-panel\">
        <div class=\"tabbable-line\">
            <ul class=\"nav nav-tabs \">
                <li class=\"active\">
                    <a href=\"#tab_default_1\" data-toggle=\"tab\">
                        <i class=\"fa fa-users\"></i> Utilisateurs </a>
                </li>
                <li>
                    <a href=\"#tab_default_2\" data-toggle=\"tab\">
                        <i class=\"fa fa-user-secret\"></i> Roles </a>
                </li>
            </ul>
            <div class=\"tab-content\">
                <div class=\"pull-right\" style=\"margin-bottom: 10px; margin-top: 20px;\">
                    <a href=\"{{ path(\"new_user\") }}\" class=\"btn btn-primary pull-right\">Ajouter un utilisateur <span class=\"fa fa-plus-circle\"></span></a>
                </div>
                <div class=\"tab-pane active\" id=\"tab_default_1\">
                    <h1>
                        Les utilisateurs enregistrées
                    </h1>

                    <table class=\"table table-striped\">
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Numéro Tel</th>
                            <th>E-mail</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>
                        {% for user in Users %}
                            <tr>
                                <td>{{ user.id }}</td>
                                <td>{{ user.nom }}</td>
                                <td>{{ user.prenom }}</td>
                                <td>{{ user.numTel }}</td>
                                <td>{{ user.mail }}</td>
                                <td>
                                    <a href=\"{{ path(\"edit_user\", {'id': user.id}) }}\" class=\"btn btn-xs btn-success\"><span class=\"fa fa-pencil\"></span></a>
                                </td>
                                <td>
                                    <a href=\"{{ path(\"delete_user\", {'id': user.id}) }}\" class=\"btn btn-xs btn-success\"><span class=\"fa fa-trash\"></span></a>
                                </td>
                            </tr>
                        {% endfor %}
                    </table>
                </div>
                <div class=\"tab-pane\" id=\"tab_default_2\">
                    <h1>
                        Les Roles des utilisateurs enregistrées
                    </h1>
                    <div class=\"container\">
                        <table class=\"table table-striped\">
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Liste des roles</th>
                                <th>Supprimer</th>
                            </tr>
                            {% for user in Users %}
                                <tr>
                                    <td>{{ user.id }}</td>
                                    <td>{{ user.nom }}</td>
                                    <td><div class=\"list-group\">
                                            {% for r in user.roles %}
                                            <a href=\"#\" class=\"list-group-item active\">
                                                <h4 class=\"list-group-item-heading\">{{ r==\"ROLE_USER\"? \"Role Utilisateur\":r==\"ROLE_ADMIN\"? \"Role Administrateur\" }}</h4>
                                            </a>
                                            {% endfor %}
                                        </div></td>
                                    <td>
                                        <a href=\"{{ path(\"delete_user\", {'id': user.id}) }}\" class=\"btn btn-xs btn-success\"><span class=\"fa fa-trash\"></span></a>
                                    </td>
                                </tr>
                            {% endfor %}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {#<div class=\"container\">
        <div class=\"row\">

            <div class=\"col-xs-12\">
                <div class=\"pull-right\" style=\"margin-bottom: 10px; margin-top: 20px;\">
                   <a href=\"{{ path(\"new_user\") }}\" class=\"btn btn-primary pull-right\">Ajouter un utilisateur <span class=\"fa fa-plus-circle\"></span></a>
                </div>

                <h1>Utilisateur</h1>

                <table class=\"table table-striped\">
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Numéro Tel</th>
                        <th>E-mail</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                    {% for user in Users %}
                        <tr>
                            <td>{{ user.id }}</td>
                            <td>{{ user.nom }}</td>
                            <td>{{ user.prenom }}</td>
                            <td>{{ user.numTel }}</td>
                            <td>{{ user.mail }}</td>
                            <td>
                                <a href=\"{{ path(\"edit_user\", {'id': user.id}) }}\" class=\"btn btn-xs btn-success\"><span class=\"fa fa-pencil\"></span></a>
                            </td>
                            <td>
                                <a href=\"{{ path(\"delete_user\", {'id': user.id}) }}\" class=\"btn btn-xs btn-success\"><span class=\"fa fa-trash\"></span></a>
                            </td>
                        </tr>
                    {% endfor %}
                </table>
            </div>
        </div>
    </div>#}
{% endblock %}", "Admin/Users.html.twig", "E:\\PFAOrigin\\app\\Resources\\views\\Admin\\Users.html.twig");
    }
}
