<?php

/* Admin/AdminDashboard.html.twig */
class __TwigTemplate_245f91ff5a2273bc6565acfdfdc9082043a414ad577ad21024609eb20dfb453c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home/home.html.twig", "Admin/AdminDashboard.html.twig", 1);
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
        $__internal_977178d5327d0c3c3c8a66fe5936da46f02935a64328292f21bf117190fca5c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_977178d5327d0c3c3c8a66fe5936da46f02935a64328292f21bf117190fca5c7->enter($__internal_977178d5327d0c3c3c8a66fe5936da46f02935a64328292f21bf117190fca5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/AdminDashboard.html.twig"));

        $__internal_a7bc1a13a00fa41260f8c24d7260ba435a2a27ce58cc97f047e11bd8d19bd8f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7bc1a13a00fa41260f8c24d7260ba435a2a27ce58cc97f047e11bd8d19bd8f2->enter($__internal_a7bc1a13a00fa41260f8c24d7260ba435a2a27ce58cc97f047e11bd8d19bd8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/AdminDashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_977178d5327d0c3c3c8a66fe5936da46f02935a64328292f21bf117190fca5c7->leave($__internal_977178d5327d0c3c3c8a66fe5936da46f02935a64328292f21bf117190fca5c7_prof);

        
        $__internal_a7bc1a13a00fa41260f8c24d7260ba435a2a27ce58cc97f047e11bd8d19bd8f2->leave($__internal_a7bc1a13a00fa41260f8c24d7260ba435a2a27ce58cc97f047e11bd8d19bd8f2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ab10fc5e1841392ec719473f94fae5e33d9867c41cc9fedd9aa17efe3cab378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ab10fc5e1841392ec719473f94fae5e33d9867c41cc9fedd9aa17efe3cab378->enter($__internal_1ab10fc5e1841392ec719473f94fae5e33d9867c41cc9fedd9aa17efe3cab378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a107ad9c00a19f669008636936c729e6cbbbe6f032e2f5f1d5a093e2285df579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a107ad9c00a19f669008636936c729e6cbbbe6f032e2f5f1d5a093e2285df579->enter($__internal_a107ad9c00a19f669008636936c729e6cbbbe6f032e2f5f1d5a093e2285df579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "Tous le site
";
        
        $__internal_a107ad9c00a19f669008636936c729e6cbbbe6f032e2f5f1d5a093e2285df579->leave($__internal_a107ad9c00a19f669008636936c729e6cbbbe6f032e2f5f1d5a093e2285df579_prof);

        
        $__internal_1ab10fc5e1841392ec719473f94fae5e33d9867c41cc9fedd9aa17efe3cab378->leave($__internal_1ab10fc5e1841392ec719473f94fae5e33d9867c41cc9fedd9aa17efe3cab378_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b5ee390ce508d1d3c73721d0be7f7de6ccfc22d2180339d372bf36bbf0e9aff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b5ee390ce508d1d3c73721d0be7f7de6ccfc22d2180339d372bf36bbf0e9aff->enter($__internal_2b5ee390ce508d1d3c73721d0be7f7de6ccfc22d2180339d372bf36bbf0e9aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_09849349a4c5f7deebf1735c97a292268d5f6d43143cf64867abaff52bff4699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09849349a4c5f7deebf1735c97a292268d5f6d43143cf64867abaff52bff4699->enter($__internal_09849349a4c5f7deebf1735c97a292268d5f6d43143cf64867abaff52bff4699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <section class=\"main\">
        <div style=\" margin: 1.5%;\">
        <section class=\"tab-content\">
            <section class=\"tab-pane active fade in content\" id=\"dashboard\">
                <div class=\"row\">
                    <div class=\"col-xs-6 col-sm-3\">
                        <div class=\"panel panel-primary\" style=\"border: none; padding: 0\">
                            <div class=\"panel-body\" style=\"background-color: #00c0ef; margin: 0 ; padding-top: 0; padding-bottom: 0\">
                                <div class=\"row\" style=\"\">
                                    <div class=\"col-md-6\" style=\"padding-right: 3.5%; \">
                                        <h2 class=\"\" style=\"font-size: 3.8rem; color:rgba(255,255,255,0.6); text-align: center\">150</h2>
                                        <p style=\"font-size: 1.3rem; text-align: center; margin: auto;padding-bottom: 2% ;color:#FFFFFF;\">Annonces ajoutées Ce mois</p>
                                    </div>
                                    <div class=\"col-md-6\" style=\"padding-right: 3.5%; padding-top: 3.5%;\">
                                        <i class=\"fa fa-cart-plus fa-5x \" style=\"color:rgba(255,255,255,0.37); margin-left: 30%; margin-right: 0;margin-top: 10%; \"></i>
                                    </div>
                                    <div class=\"col-md-12\" style=\"margin: 0; padding: 1%;\">
                                        <a style=\"width: 100%; height: auto; background-color:#00add8; text-align: center; display: block; color: rgba(255,255,255,0.8)\" class=\"btn btn-sm\">Plus d'information  <i class=\"fa fa-arrow-circle-right\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-6 col-sm-3\">
                        <div class=\"panel panel-primary\" style=\"border: none; padding: 0\">
                            <div class=\"panel-body\" style=\"background-color: #00c0ef; margin: 0 ; padding-top: 0; padding-bottom: 0\">
                                <div class=\"row\" style=\"\">
                                    <div class=\"col-md-6\" style=\"padding-right: 3.5%; \">
                                        <h2 class=\"\" style=\"font-size: 3.8rem; color:rgba(255,255,255,0.6); text-align: center\">38</h2>
                                        <p style=\"font-size: 1.3rem; text-align: center; margin: auto;padding-bottom: 2% ;color:#FFFFFF;\">Nouvels utilisateur Ce mois</p>
                                    </div>
                                    <div class=\"col-md-6\" style=\"padding-right: 3.5%; padding-top: 3.5%;\">
                                        <i class=\"fa fa-user-plus fa-5x \" style=\"color:rgba(255,255,255,0.37); margin-left: 30%; margin-right: 0;margin-top: 10%; \"></i>
                                    </div>
                                    <div class=\"col-md-12\" style=\"margin: 0; padding: 1%;\">
                                        <a style=\"width: 100%; height: auto; background-color:#00add8; text-align: center; display: block; color: rgba(255,255,255,0.8)\" class=\"btn btn-sm\">Plus d'information  <i class=\"fa fa-arrow-circle-right\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-6 col-sm-3\">
                        <div class=\"panel panel-primary\" style=\"border: none; padding: 0\">
                            <div class=\"panel-body\" style=\"background-color: rgba(0,166,90,0.72); margin: 0 ; padding-top: 0; padding-bottom: 0\">
                                <div class=\"row\" style=\"\">
                                    <div class=\"col-md-6\" style=\"padding-right: 3.5%; \">
                                        <h2 class=\"\" style=\"font-size: 3.8rem; color:rgba(255,255,255,0.6); text-align: center\">80</h2>
                                        <p style=\"font-size: 1.3rem; text-align: center; margin: auto;padding-bottom: 2% ;color:#FFFFFF;\">Annonces Approuvées Ce mois</p>
                                    </div>
                                    <div class=\"col-md-6\" style=\"padding-right: 3.5%; padding-top: 3.5%;\">
                                        <i class=\"fa fa-check fa-5x \" style=\"color:rgba(255,255,255,0.37); margin-left: 30%; margin-right: 0;margin-top: 10%; \"></i>
                                    </div>
                                    <div class=\"col-md-12\" style=\"margin: 0; padding: 1%;\">
                                        <a style=\"width: 100%; height: auto; background-color:rgba(0,166,90,1); text-align: center; display: block; color: rgba(255,255,255,0.8)\" class=\"btn btn-sm\">Plus d'information  <i class=\"fa fa-arrow-circle-right\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-6 col-sm-3\">
                        <div class=\"panel panel-primary\" style=\"border: none; padding: 0\">
                            <div class=\"panel-body\" style=\"background-color: rgba(221,75,57,0.72); margin: 0 ; padding-top: 0; padding-bottom: 0\">
                                <div class=\"row\" style=\"\">
                                    <div class=\"col-md-6\" style=\"padding-right: 3.5%; \">
                                        <h2 class=\"\" style=\"font-size: 3.8rem; color:rgba(255,255,255,0.6); text-align: center\">26</h2>
                                        <p style=\"font-size: 1.3rem; text-align: center; margin: auto;padding-bottom: 2% ;color:#FFFFFF;\">Annonces rejettées Ce mois</p>
                                    </div>
                                    <div class=\"col-md-6\" style=\"padding-right: 3.5%; padding-top: 3.5%;\">
                                        <i class=\"fa fa-ban fa-5x \" style=\"color:rgba(255,255,255,0.37); margin-left: 30%; margin-right: 0;margin-top: 10%; \"></i>
                                    </div>
                                    <div class=\"col-md-12\" style=\"margin: 0; padding: 1%;\">
                                        <a style=\"width: 100%; height: auto; background-color:rgba(199,68,51,1); text-align: center; display: block; color: rgba(255,255,255,0.8)\" class=\"btn btn-sm\">Plus d'information  <i class=\"fa fa-arrow-circle-right\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-9\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading clearfix\">
                                Les demandes non approuvées
                                <div class=\"btn-group pull-right\">
                                    <a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_aprove_all");
        echo "\" class=\"btn btn-primary btn-sm fa fa-check-square fa-3x\">   Approuver tous</a>
                                </div>
                            </div>
                            <div class=\"panel-body\" style=\"\">
                                <table class=\"table table-striped\">
                                    <tr>
                                        <th>ID</th>
                                        <th>Photo Voiture</th>
                                        <th>Utilisateur</th>
                                        <th>Description</th>
                                        <th>Nom Voiture</th>
                                        <th>Approuver ?</th>
                                        <th>Supprimer ?</th>
                                    </tr>
                                        ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Tickets"]) ? $context["Tickets"] : $this->getContext($context, "Tickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 107
            echo "                                            <tr>
                                            <td>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "id", array()), "html", null, true);
            echo "</td>
                                            <td><img src=\"";
            // line 109
            echo twig_escape_filter($this->env, ((isset($context["cursrc"]) ? $context["cursrc"] : $this->getContext($context, "cursrc")) . $this->getAttribute($this->getAttribute($context["ticket"], "voiture", array()), "photo", array())), "html", null, true);
            echo "\" style=\"height: 70px; width: 100px\"></td>
                                            <td><a href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("id" => $this->getAttribute($this->getAttribute($context["ticket"], "utilisateur", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ticket"], "utilisateur", array()), "nom", array()), "html", null, true);
            echo "</a></td>
                                            <td>";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "description", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ticket"], "voiture", array()), "nomVoiture", array()), "html", null, true);
            echo "</td>
                                            <td><a href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("approveD", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success\" style=\"margin: auto\"><span class=\"fa fa-thumbs-up\">  </span></a></td>
                                            <td><a href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Admin_delete_ticketD", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success\" style=\"margin: auto\"><span class=\"fa fa-ban\">  </span></a></td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "                                </table>
                            </div>
                        </div>
                    </div>
                    ";
        // line 139
        echo "                </div>

            </section>

";
        // line 250
        echo "
        </section>
        </div>
    </section>
";
        
        $__internal_09849349a4c5f7deebf1735c97a292268d5f6d43143cf64867abaff52bff4699->leave($__internal_09849349a4c5f7deebf1735c97a292268d5f6d43143cf64867abaff52bff4699_prof);

        
        $__internal_2b5ee390ce508d1d3c73721d0be7f7de6ccfc22d2180339d372bf36bbf0e9aff->leave($__internal_2b5ee390ce508d1d3c73721d0be7f7de6ccfc22d2180339d372bf36bbf0e9aff_prof);

    }

    public function getTemplateName()
    {
        return "Admin/AdminDashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 250,  219 => 139,  213 => 117,  204 => 114,  200 => 113,  196 => 112,  192 => 111,  186 => 110,  182 => 109,  178 => 108,  175 => 107,  171 => 106,  154 => 92,  70 => 10,  61 => 9,  50 => 6,  41 => 5,  11 => 1,);
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
Tous le site
{% endblock %}

{% block body %}
    <section class=\"main\">
        <div style=\" margin: 1.5%;\">
        <section class=\"tab-content\">
            <section class=\"tab-pane active fade in content\" id=\"dashboard\">
                <div class=\"row\">
                    <div class=\"col-xs-6 col-sm-3\">
                        <div class=\"panel panel-primary\" style=\"border: none; padding: 0\">
                            <div class=\"panel-body\" style=\"background-color: #00c0ef; margin: 0 ; padding-top: 0; padding-bottom: 0\">
                                <div class=\"row\" style=\"\">
                                    <div class=\"col-md-6\" style=\"padding-right: 3.5%; \">
                                        <h2 class=\"\" style=\"font-size: 3.8rem; color:rgba(255,255,255,0.6); text-align: center\">150</h2>
                                        <p style=\"font-size: 1.3rem; text-align: center; margin: auto;padding-bottom: 2% ;color:#FFFFFF;\">Annonces ajoutées Ce mois</p>
                                    </div>
                                    <div class=\"col-md-6\" style=\"padding-right: 3.5%; padding-top: 3.5%;\">
                                        <i class=\"fa fa-cart-plus fa-5x \" style=\"color:rgba(255,255,255,0.37); margin-left: 30%; margin-right: 0;margin-top: 10%; \"></i>
                                    </div>
                                    <div class=\"col-md-12\" style=\"margin: 0; padding: 1%;\">
                                        <a style=\"width: 100%; height: auto; background-color:#00add8; text-align: center; display: block; color: rgba(255,255,255,0.8)\" class=\"btn btn-sm\">Plus d'information  <i class=\"fa fa-arrow-circle-right\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-6 col-sm-3\">
                        <div class=\"panel panel-primary\" style=\"border: none; padding: 0\">
                            <div class=\"panel-body\" style=\"background-color: #00c0ef; margin: 0 ; padding-top: 0; padding-bottom: 0\">
                                <div class=\"row\" style=\"\">
                                    <div class=\"col-md-6\" style=\"padding-right: 3.5%; \">
                                        <h2 class=\"\" style=\"font-size: 3.8rem; color:rgba(255,255,255,0.6); text-align: center\">38</h2>
                                        <p style=\"font-size: 1.3rem; text-align: center; margin: auto;padding-bottom: 2% ;color:#FFFFFF;\">Nouvels utilisateur Ce mois</p>
                                    </div>
                                    <div class=\"col-md-6\" style=\"padding-right: 3.5%; padding-top: 3.5%;\">
                                        <i class=\"fa fa-user-plus fa-5x \" style=\"color:rgba(255,255,255,0.37); margin-left: 30%; margin-right: 0;margin-top: 10%; \"></i>
                                    </div>
                                    <div class=\"col-md-12\" style=\"margin: 0; padding: 1%;\">
                                        <a style=\"width: 100%; height: auto; background-color:#00add8; text-align: center; display: block; color: rgba(255,255,255,0.8)\" class=\"btn btn-sm\">Plus d'information  <i class=\"fa fa-arrow-circle-right\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-6 col-sm-3\">
                        <div class=\"panel panel-primary\" style=\"border: none; padding: 0\">
                            <div class=\"panel-body\" style=\"background-color: rgba(0,166,90,0.72); margin: 0 ; padding-top: 0; padding-bottom: 0\">
                                <div class=\"row\" style=\"\">
                                    <div class=\"col-md-6\" style=\"padding-right: 3.5%; \">
                                        <h2 class=\"\" style=\"font-size: 3.8rem; color:rgba(255,255,255,0.6); text-align: center\">80</h2>
                                        <p style=\"font-size: 1.3rem; text-align: center; margin: auto;padding-bottom: 2% ;color:#FFFFFF;\">Annonces Approuvées Ce mois</p>
                                    </div>
                                    <div class=\"col-md-6\" style=\"padding-right: 3.5%; padding-top: 3.5%;\">
                                        <i class=\"fa fa-check fa-5x \" style=\"color:rgba(255,255,255,0.37); margin-left: 30%; margin-right: 0;margin-top: 10%; \"></i>
                                    </div>
                                    <div class=\"col-md-12\" style=\"margin: 0; padding: 1%;\">
                                        <a style=\"width: 100%; height: auto; background-color:rgba(0,166,90,1); text-align: center; display: block; color: rgba(255,255,255,0.8)\" class=\"btn btn-sm\">Plus d'information  <i class=\"fa fa-arrow-circle-right\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-6 col-sm-3\">
                        <div class=\"panel panel-primary\" style=\"border: none; padding: 0\">
                            <div class=\"panel-body\" style=\"background-color: rgba(221,75,57,0.72); margin: 0 ; padding-top: 0; padding-bottom: 0\">
                                <div class=\"row\" style=\"\">
                                    <div class=\"col-md-6\" style=\"padding-right: 3.5%; \">
                                        <h2 class=\"\" style=\"font-size: 3.8rem; color:rgba(255,255,255,0.6); text-align: center\">26</h2>
                                        <p style=\"font-size: 1.3rem; text-align: center; margin: auto;padding-bottom: 2% ;color:#FFFFFF;\">Annonces rejettées Ce mois</p>
                                    </div>
                                    <div class=\"col-md-6\" style=\"padding-right: 3.5%; padding-top: 3.5%;\">
                                        <i class=\"fa fa-ban fa-5x \" style=\"color:rgba(255,255,255,0.37); margin-left: 30%; margin-right: 0;margin-top: 10%; \"></i>
                                    </div>
                                    <div class=\"col-md-12\" style=\"margin: 0; padding: 1%;\">
                                        <a style=\"width: 100%; height: auto; background-color:rgba(199,68,51,1); text-align: center; display: block; color: rgba(255,255,255,0.8)\" class=\"btn btn-sm\">Plus d'information  <i class=\"fa fa-arrow-circle-right\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-9\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading clearfix\">
                                Les demandes non approuvées
                                <div class=\"btn-group pull-right\">
                                    <a href=\"{{ path('admin_aprove_all') }}\" class=\"btn btn-primary btn-sm fa fa-check-square fa-3x\">   Approuver tous</a>
                                </div>
                            </div>
                            <div class=\"panel-body\" style=\"\">
                                <table class=\"table table-striped\">
                                    <tr>
                                        <th>ID</th>
                                        <th>Photo Voiture</th>
                                        <th>Utilisateur</th>
                                        <th>Description</th>
                                        <th>Nom Voiture</th>
                                        <th>Approuver ?</th>
                                        <th>Supprimer ?</th>
                                    </tr>
                                        {% for ticket in Tickets %}
                                            <tr>
                                            <td>{{ ticket.id }}</td>
                                            <td><img src=\"{{ \"#{cursrc}#{ticket.voiture.photo}\" }}\" style=\"height: 70px; width: 100px\"></td>
                                            <td><a href=\"{{ path('user_profile', {'id': ticket.utilisateur.id}) }}\">{{ ticket.utilisateur.nom }}</a></td>
                                            <td>{{ ticket.description }}</td>
                                            <td>{{ ticket.voiture.nomVoiture }}</td>
                                            <td><a href=\"{{ path(\"approveD\", {'id': ticket.id}) }}\" class=\"btn btn-xs btn-success\" style=\"margin: auto\"><span class=\"fa fa-thumbs-up\">  </span></a></td>
                                            <td><a href=\"{{ path(\"Admin_delete_ticketD\", {'id': ticket.id}) }}\" class=\"btn btn-xs btn-success\" style=\"margin: auto\"><span class=\"fa fa-ban\">  </span></a></td>
                                            </tr>
                                        {% endfor %}
                                </table>
                            </div>
                        </div>
                    </div>
                    {#<div class=\"col-xs-12 col-sm-3\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                Something
                            </div>
                            <div class=\"panel-body\">
                                The sidebar is naturally responsive according to screen width. You can toggle it using the menu button in the topbar. Test it out by increasing/decreasing your screen width and watch it respond.
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                Kaitani Labs
                            </div>
                            <div class=\"panel-body\">
                                Designed by <a href=\"http://www.kaitanilabs.com\" target=\"_blank\">Kaitani Labs</a>
                            </div>
                        </div>
                    </div>#}
                </div>

            </section>

{#            <section class=\"tab-pane fade\" id=\"configuration\">
                <nav class=\"subbar\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a href=\"#access\" data-toggle=\"tab\"><i class=\"fa fa-code\"></i> <span>System</span></a></li>
                        <li><a href=\"#roles\" data-toggle=\"tab\"><i class=\"fa fa-user\"></i> <span>Roles</span></a></li>
                    </ul>
                </nav>

                <section class=\"tab-content content\">

                    <section class=\"tab-pane active fade in\" id=\"access\">

                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        Something
                                    </div>
                                    <div class=\"panel-body\">
                                        <br/><br/><br/><br/>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-xs-12 col-sm-4\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        Something
                                    </div>
                                    <div class=\"panel-body\">
                                        <br/><br/><br/><br/>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-xs-12 col-sm-4\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        Something
                                    </div>
                                    <div class=\"panel-body\">
                                        <br/><br/><br/><br/>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-xs-12 col-sm-4\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        Something
                                    </div>
                                    <div class=\"panel-body\">
                                        <br/><br/><br/><br/>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>

                    <section class=\"tab-pane fade\" id=\"roles\">

                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-8 col-md-9\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        Something
                                    </div>
                                    <div class=\"panel-body\">
                                        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                                    </div>
                                </div>
                            </div>

                            <div class=\"hidden-xs col-sm-4 col-md-3\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        Something
                                    </div>
                                    <div class=\"panel-body\">
                                        <br/><br/><br/>
                                    </div>
                                </div>

                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        Something
                                    </div>
                                    <div class=\"panel-body\">
                                        <br/><br/><br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </section>

            </section>

            <section class=\"tab-pane fade\" id=\"users\">

            </section>

            <section class=\"tab-pane fade\" id=\"mail\">

            </section>#}

        </section>
        </div>
    </section>
{% endblock %}", "Admin/AdminDashboard.html.twig", "E:\\PFAOrigin\\app\\Resources\\views\\Admin\\AdminDashboard.html.twig");
    }
}
