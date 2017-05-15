<?php

/* default/CheckTicket.html.twig */
class __TwigTemplate_5ee405288810d86ad56694473450e0c828bb5cb0ee4b62cc28bf32524a025334 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home/home.html.twig", "default/CheckTicket.html.twig", 1);
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
        $__internal_4eaa971764a34b1fed706ca175bc69ffc1cad94466ac19e1a0ad11575b57dfa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eaa971764a34b1fed706ca175bc69ffc1cad94466ac19e1a0ad11575b57dfa5->enter($__internal_4eaa971764a34b1fed706ca175bc69ffc1cad94466ac19e1a0ad11575b57dfa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/CheckTicket.html.twig"));

        $__internal_cf65d4c40aefab08cf180b19dcb12bf2f9aa057b0b64bba428882ea2f8407a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf65d4c40aefab08cf180b19dcb12bf2f9aa057b0b64bba428882ea2f8407a04->enter($__internal_cf65d4c40aefab08cf180b19dcb12bf2f9aa057b0b64bba428882ea2f8407a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/CheckTicket.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4eaa971764a34b1fed706ca175bc69ffc1cad94466ac19e1a0ad11575b57dfa5->leave($__internal_4eaa971764a34b1fed706ca175bc69ffc1cad94466ac19e1a0ad11575b57dfa5_prof);

        
        $__internal_cf65d4c40aefab08cf180b19dcb12bf2f9aa057b0b64bba428882ea2f8407a04->leave($__internal_cf65d4c40aefab08cf180b19dcb12bf2f9aa057b0b64bba428882ea2f8407a04_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e38291f193ab430d2d1ea9e4b19bbbd5f0e952c89fef6bec47158a765becfa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e38291f193ab430d2d1ea9e4b19bbbd5f0e952c89fef6bec47158a765becfa0->enter($__internal_8e38291f193ab430d2d1ea9e4b19bbbd5f0e952c89fef6bec47158a765becfa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_687da1ce8fa80d7b8b0d36f30bb7a1370a9796eaeced79044a85a394c01dc811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_687da1ce8fa80d7b8b0d36f30bb7a1370a9796eaeced79044a85a394c01dc811->enter($__internal_687da1ce8fa80d7b8b0d36f30bb7a1370a9796eaeced79044a85a394c01dc811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Annonce : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "nom", array()), "html", null, true);
        echo "
";
        
        $__internal_687da1ce8fa80d7b8b0d36f30bb7a1370a9796eaeced79044a85a394c01dc811->leave($__internal_687da1ce8fa80d7b8b0d36f30bb7a1370a9796eaeced79044a85a394c01dc811_prof);

        
        $__internal_8e38291f193ab430d2d1ea9e4b19bbbd5f0e952c89fef6bec47158a765becfa0->leave($__internal_8e38291f193ab430d2d1ea9e4b19bbbd5f0e952c89fef6bec47158a765becfa0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_96b21b2dab01fb9a7a87c29228245982ad8207d62189674b03ed70ad32505cad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96b21b2dab01fb9a7a87c29228245982ad8207d62189674b03ed70ad32505cad->enter($__internal_96b21b2dab01fb9a7a87c29228245982ad8207d62189674b03ed70ad32505cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9067fbed90e87a0ea07dbd0e95e4018d9e1135cbc4b1be936c3d71850c776e83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9067fbed90e87a0ea07dbd0e95e4018d9e1135cbc4b1be936c3d71850c776e83->enter($__internal_9067fbed90e87a0ea07dbd0e95e4018d9e1135cbc4b1be936c3d71850c776e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"row\">
";
        // line 108
        echo "        <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
            <div class=\"card\">
                <div class=\"card-image\">
                    <img class=\"img-responsive\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, ((isset($context["cursrc"]) ? $context["cursrc"] : $this->getContext($context, "cursrc")) . $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "photo", array())), "html", null, true);
        echo "\" style=\"margin: auto;\">
                    <span class=\"card-title\">";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "nom", array()), "html", null, true);
        echo "</span>
                </div>

                <div class=\"card-content\">
                    <p><table class=\"table table-user-information\">
                        <tbody>
                        <tr>
                            <td>Nom de La voiture :</td>
                            <td>";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "nomVoiture", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Modèle de lavoiture :</td>
                            <td>";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "modeleVoiture", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Constructeur :</td>
                            <td>";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "constructeur", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Date de debut commerce (Y/M/D) :</td>
                            <td>";
        // line 132
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "dateCommerce", array())) ? (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "dateCommerce", array()), "y/m/d")) : ("Date de commerce non spécifée")), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Ville / Pays :</td>
                            <td>";
        // line 136
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "utilisateur", array()), "ville", array()) . " / ") . $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "utilisateur", array()), "pays", array())), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Prix : </td>
                            <td>";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "prix", array()), "html", null, true);
        echo "</td>

                            <td>Cote G.A : </td>
                            <td>";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "argus", array()), "html", null, true);
        echo "</td>
                        </tr>
                        </tbody>
                    </table></p>
                </div>

                <div class=\"card-action\">
                    ";
        // line 150
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_OWN", (isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")))) {
            // line 151
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_ticket_remove", array("id" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id", array()))), "html", null, true);
            echo "\" >Modifier</a>
                        <a href=\"";
            // line 152
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_ticket_edit", array("id" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id", array()))), "html", null, true);
            echo "\" >Suprimer</a>
                    ";
        }
        // line 154
        echo "                </div>
            </div>
        </div>
        <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
            <div class=\"panel-group\" id=\"accordion\" style=\"margin-top: 1.8%;\">
                <div class=\"panel panel-primary\" style=\"border-radius: 0;\">
                    <div class=\"panel-heading\" style=\"background-image: none; background-color: #3c8dbc; border: 2px red; border-radius: 0;\">
                        <h4 class=\"panel-title\">
                            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" style=\"border-radius: 0;\">
                                Champs Intéressants
                            </a>
                        </h4>
                    </div>
                    <div id=\"collapseOne\" class=\"panel-collapse collapse in\">
                        <div class=\"panel-body\" style=\"background-color:white;\">
                            <table class=\"table table-striped\">
                                <tr>
                                    <td class=\"fht\">
                                        ";
        // line 172
        echo "Carburant";
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 175
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "carburant", array()) != "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "carburant", array())) : ("Non Spécifiée")), "html", null, true);
        echo "
                                    </td>
                                </tr>

                                <tr>
                                    <td class=\"fht\">
                                        ";
        // line 181
        echo "Consommation Urbaine";
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 184
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "consommationUrbaine100Km", array()) != "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "consommationUrbaine100Km", array())) : ("Non Spécifiée")), "html", null, true);
        echo " / 100 Km
                                    </td>
                                </tr>

                                <tr>
                                    <td class=\"fht\">
                                        ";
        // line 190
        echo "Longeur";
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 193
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "longueur", array()) != "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "longueur", array())) : ("Non Spécifiée")), "html", null, true);
        echo "
                                    </td>
                                </tr>

                                <tr>
                                    <td class=\"fht\">
                                        ";
        // line 199
        echo "Maximum de Révision";
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 202
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "maxRevision", array()) != "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "maxRevision", array())) : ("Non Spécifiée")), "html", null, true);
        echo "
                                    </td>
                                </tr>

                                <tr>
                                    <td class=\"fht\">
                                        ";
        // line 208
        echo "Puissance Fiscale";
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 211
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "puissanceFiscale", array()) != "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "puissanceFiscale", array())) : ("Non Spécifiée")), "html", null, true);
        echo "
                                    </td>
                                </tr>

                                <tr>
                                    <td class=\"fht\">
                                        ";
        // line 217
        echo "Volume Réservoir";
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 220
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "volumeResevoir", array()) != "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "volumeResevoir", array())) : ("Non Spécifiée")), "html", null, true);
        echo "
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"panel panel-primary\" style=\"border-radius: 0;\">
                    <div class=\"panel-heading\" style=\"border-radius: 0;\">
                        <h4 class=\"panel-title\">
                            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" style=\"border-radius: 0;\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" style=\"border-radius: 0;\">
                                    Plus de Renseignement
                                </a>
                            </a>
                        </h4>
                    </div>
                    <div id=\"collapseTwo\" class=\"panel-collapse collapse\">
                        <div class=\"panel-body\" style=\"background-color:white;\">
                            <table class=\"table table-striped\">

                                    <tr>
                                        <td>
                                            Accéleration
                                        </td>
                                        <td>
                                            ";
        // line 246
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "acceleration", array()) != "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "acceleration", array())) : ("Non Spécifiée")), "html", null, true);
        echo "
                                        </td>
                                    </tr>

                                <tr>
                                    <td>
                                        Alimentation
                                    </td>
                                    <td>
                                        ";
        // line 255
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "alimentation", array()) != "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "alimentation", array())) : ("Non Spécifiée")), "html", null, true);
        echo "
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Consomation Mixte
                                    </td>
                                    <td>
                                        ";
        // line 264
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "consommationMixte", array()) != "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "consommationMixte", array())) : ("Non Spécifiée")), "html", null, true);
        echo "
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Consommation non Urbaine
                                    </td>
                                    <td>
                                        ";
        // line 273
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "consommationNomUrbaine100Km", array()) != "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "consommationNomUrbaine100Km", array())) : ("Non Spécifiée")), "html", null, true);
        echo "  /100Km
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Le Couple
                                    </td>
                                    <td>
                                        ";
        // line 282
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "couple", array()) != "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "couple", array())) : ("Non Spécifiée")), "html", null, true);
        echo "
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Date de commerce
                                    </td>
                                    <td>
                                        ";
        // line 291
        echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "dateCommerce", array()), "y/m/d") != "")) ? (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "dateCommerce", array()), "y/m/d")) : ("Non Spécifiée")), "html", null, true);
        echo "
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Date de fin de commerce
                                    </td>
                                    <td>
                                        ";
        // line 300
        echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "dateFinCommerce", array()), "y/m/d") != "")) ? (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "dateFinCommerce", array()), "y/m/d")) : ("Non Spécifiée")), "html", null, true);
        echo "
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Emission CO2
                                    </td>
                                    <td>
                                        ";
        // line 309
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "degagementCO2", array()) != "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "degagementCO2", array())) : ("Non Spécifiée")), "html", null, true);
        echo "
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Garentie
                                    </td>
                                    <td>
                                        ";
        // line 318
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "garantie", array()) != "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "garantie", array())) : ("Non Spécifiée")), "html", null, true);
        echo "
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       Longeur avec Retroviseur
                                    </td>
                                    <td>
                                        ";
        // line 326
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "longueurAvecRetroviseurs", array()) != "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "longueurAvecRetroviseurs", array())) : ("Non Spécifiée")), "html", null, true);
        echo "
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Mode Moteur
                                    </td>
                                    <td>
                                        ";
        // line 334
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "modeMoteur", array()) != "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "modeMoteur", array())) : ("Non Spécifiée")), "html", null, true);
        echo "
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Nombre de place
                                    </td>
                                    <td>
                                        ";
        // line 342
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "nombrePlaces", array()) != "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "nombrePlaces", array())) : ("Non Spécifiée")), "html", null, true);
        echo "
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Nombre de portes
                                    </td>
                                    <td>
                                        ";
        // line 350
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "nombrePortes", array()) != "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "nombrePortes", array())) : ("Non Spécifiée")), "html", null, true);
        echo "
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Position Moteur
                                    </td>
                                    <td>
                                        ";
        // line 358
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "positionMoteur", array()) != "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "positionMoteur", array())) : ("Non Spécifiée")), "html", null, true);
        echo "
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Taille des pneus
                                    </td>
                                    <td>
                                        ";
        // line 366
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "taillePneue", array()) != "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "taillePneue", array())) : ("Non Spécifiée")), "html", null, true);
        echo "
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Vitesse maximale
                                    </td>
                                    <td>
                                        ";
        // line 374
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "vitesseMax", array()) != "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "vitesseMax", array())) : ("Non Spécifiée")), "html", null, true);
        echo "
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Volume cylindre
                                    </td>
                                    <td>
                                        ";
        // line 382
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "volumeCylindre", array()) != "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "volumeCylindre", array())) : ("Non Spécifiée")), "html", null, true);
        echo "
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Poid à vide
                                    </td>
                                    <td>
                                        ";
        // line 390
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "poidVide", array()) != "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "poidVide", array())) : ("Non Spécifiée")), "html", null, true);
        echo "
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Volume Min-Max
                                    </td>
                                    <td>
                                        ";
        // line 398
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "volumeMinMax", array()) != "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "voiture", array()), "ficheTech", array()), "volumeMinMax", array())) : ("Non Spécifiée")), "html", null, true);
        echo "
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_9067fbed90e87a0ea07dbd0e95e4018d9e1135cbc4b1be936c3d71850c776e83->leave($__internal_9067fbed90e87a0ea07dbd0e95e4018d9e1135cbc4b1be936c3d71850c776e83_prof);

        
        $__internal_96b21b2dab01fb9a7a87c29228245982ad8207d62189674b03ed70ad32505cad->leave($__internal_96b21b2dab01fb9a7a87c29228245982ad8207d62189674b03ed70ad32505cad_prof);

    }

    public function getTemplateName()
    {
        return "default/CheckTicket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  494 => 398,  483 => 390,  472 => 382,  461 => 374,  450 => 366,  439 => 358,  428 => 350,  417 => 342,  406 => 334,  395 => 326,  384 => 318,  372 => 309,  360 => 300,  348 => 291,  336 => 282,  324 => 273,  312 => 264,  300 => 255,  288 => 246,  259 => 220,  253 => 217,  244 => 211,  238 => 208,  229 => 202,  223 => 199,  214 => 193,  208 => 190,  199 => 184,  193 => 181,  184 => 175,  178 => 172,  158 => 154,  153 => 152,  148 => 151,  146 => 150,  136 => 143,  130 => 140,  123 => 136,  116 => 132,  109 => 128,  102 => 124,  95 => 120,  84 => 112,  80 => 111,  75 => 108,  72 => 10,  63 => 9,  50 => 5,  41 => 4,  11 => 1,);
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
Annonce : {{ ticket.nom }}
{% endblock %}


{% block body %}
    <div class=\"row\">
{#        <div class=\"col-lg-6\">
            <div class=\"panel panel-info toppad\">
                <div class=\"panel-heading headerColor\" style=\"\">
                    <h3 class=\"panel-title \" style=\"display: inline-block;\">Annonce N° {{ ticket.id }} de {{ \"#{ticket.utilisateur.nom} #{ticket.utilisateur.prenom}\" }}</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\" col-md-9 col-lg-9 \">
                            <table class=\"table table-user-information\">
                                <tbody>
                                <tr>
                                    <td>Nom de l'annonce:</td>
                                    <td>{{ ticket.nom }}</td>
                                </tr>
                                <tr>
                                    <td>La voiture concernée:</td>
                                    <td><a class=\"btn btn-sm btn-primary\" href=\"{{ path('check_car', {'id': ticket.voiture.id}) }}\">{{ ticket.voiture.nomVoiture }}</a></td>
                                </tr>
                                <tr>
                                    <td>Prix demandé:</td>
                                    <td>{{ ticket.prix }}</td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td>{{ ticket.description }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"panel-footer\">
                    <a data-original-title=\"Broadcast Message\" data-toggle=\"tooltip\" type=\"button\" class=\"btn btn-sm btn-primary\" href={{ \"mailto:\" ~  ticket.utilisateur.mail }}><i class=\"glyphicon glyphicon-envelope\"></i></a>
                    <span class=\"pull-right\">
                                {% if is_granted('ROLE_OWN', ticket) %}
                                    <a href=\"{{ path(\"user_ticket_edit\", {'id': ticket.id}) }}\" data-original-title=\"modifier l'annonce\" data-toggle=\"tooltip\" type=\"button\" class=\"btn btn-sm btn-warning\"><i class=\"glyphicon glyphicon-edit\"></i></a>
                                    <a href=\"{{ path(\"user_ticket_remove\", {'id': ticket.id}) }}\" data-original-title=\"Effacer l'annonce\" data-toggle=\"tooltip\" type=\"button\" class=\"btn btn-sm btn-danger\"><i class=\"glyphicon glyphicon-remove\"></i></a>
                                {% endif %}
                        </span>
                </div>

            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"panel panel-default toppad\">
                <div class=\"panel-heading headerColor\" style=\"background-color: #81B9BA;\">
                    <h3 class=\"panel-title \" style=\"display: inline-block;\">Voiture liée a l'annonce</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-md-3 col-lg-3 \" align=\"center\"> <img alt=\"User Pic\" src=\"{{ \"#{cursrc}#{ticket.voiture.photo}\" }}\" class=\"img-circle img-responsive\"> </div>
                        <div class=\" col-md-9 col-lg-9 \">
                            <table class=\"table table-user-information\">
                                <tbody>
                                <tr>
                                    <td>Nom:</td>
                                    <td>{{ ticket.voiture.nomVoiture }}</td>
                                </tr>
                                <tr>
                                    <td>Modèle:</td>
                                    <td>{{ ticket.voiture.modeleVoiture }}</td>
                                </tr>
                                <tr>
                                    <td>Disponibilité:</td>
                                    <td>{{ ticket.voiture.disponibilite ==1 ?'Oui':'Non' }}</td>
                                </tr>
                                <tr>
                                    <td>Utilisateur</td>
                                    <td><a class=\"btn btn-sm\" href=\"{{ path('user_profile', {'id': ticket.utilisateur.id}) }}\"><i class=\"glyphicon glyphicon-user\"></i>{{ ticket.utilisateur.nom }}</a></td>
                                </tr>
                                <tr>
                                    <td>Fiche Technique</td>
                                    <td>
                                        {% if ticket.voiture.ficheTech %}
                                            <a class=\"btn btn-sm btn-primary\" href=\"{{ path('user_tech_sheet', {'id': ticket.voiture.ficheTech.id}) }}\"><i class=\"glyphicon glyphicon-user\"></i>{{ ticket.utilisateur.nom }}</a>
                                         {% else %}
                                            Cette Voiture ne possède pas une fiche technique attachée
                                        {% endif %}
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"panel-footer\">
                    <a data-original-title=\"Broadcast Message\" data-toggle=\"tooltip\" type=\"button\" class=\"btn btn-sm btn-primary\" href={{ \"mailto:\" ~  ticket.utilisateur.mail }}><i class=\"glyphicon glyphicon-envelope\"></i></a>
                    <span class=\"pull-right\">
                                {% if is_granted('ROLE_OWN', ticket) %}
                                    <a href=\"{{ path(\"edit_car\", {'id': ticket.voiture.id}) }}\" data-original-title=\"modifier la voiture\" data-toggle=\"tooltip\" type=\"button\" class=\"btn btn-sm btn-warning\"><i class=\"glyphicon glyphicon-edit\"></i></a>
                                    <a href=\"{{ path(\"user_car_delete\", {'id': ticket.voiture.id}) }}\" data-original-title=\"Effacer la voiture\" data-toggle=\"tooltip\" type=\"button\" class=\"btn btn-sm btn-danger\"><i class=\"glyphicon glyphicon-remove\"></i></a>
                                {% endif %}
                        </span>
                </div>

            </div>
        </div>#}
        <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
            <div class=\"card\">
                <div class=\"card-image\">
                    <img class=\"img-responsive\" src=\"{{ \"#{cursrc}#{ticket.voiture.photo}\" }}\" style=\"margin: auto;\">
                    <span class=\"card-title\">{{ ticket.nom }}</span>
                </div>

                <div class=\"card-content\">
                    <p><table class=\"table table-user-information\">
                        <tbody>
                        <tr>
                            <td>Nom de La voiture :</td>
                            <td>{{ ticket.voiture.nomVoiture }}</td>
                        </tr>
                        <tr>
                            <td>Modèle de lavoiture :</td>
                            <td>{{ ticket.voiture.modeleVoiture }}</td>
                        </tr>
                        <tr>
                            <td>Constructeur :</td>
                            <td>{{ ticket.voiture.constructeur }}</td>
                        </tr>
                        <tr>
                            <td>Date de debut commerce (Y/M/D) :</td>
                            <td>{{ ticket.voiture.ficheTech.dateCommerce? ticket.voiture.ficheTech.dateCommerce|date(\"y/m/d\"): 'Date de commerce non spécifée'  }}</td>
                        </tr>
                        <tr>
                            <td>Ville / Pays :</td>
                            <td>{{ \"#{ticket.utilisateur.ville} / #{ticket.utilisateur.pays}\" }}</td>
                        </tr>
                        <tr>
                            <td>Prix : </td>
                            <td>{{ ticket.prix }}</td>

                            <td>Cote G.A : </td>
                            <td>{{ ticket.voiture.argus }}</td>
                        </tr>
                        </tbody>
                    </table></p>
                </div>

                <div class=\"card-action\">
                    {%if is_granted('ROLE_OWN', ticket) %}
                        <a href=\"{{ path(\"user_ticket_remove\", {'id': ticket.id}) }}\" >Modifier</a>
                        <a href=\"{{ path(\"user_ticket_edit\", {'id': ticket.id}) }}\" >Suprimer</a>
                    {% endif %}
                </div>
            </div>
        </div>
        <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
            <div class=\"panel-group\" id=\"accordion\" style=\"margin-top: 1.8%;\">
                <div class=\"panel panel-primary\" style=\"border-radius: 0;\">
                    <div class=\"panel-heading\" style=\"background-image: none; background-color: #3c8dbc; border: 2px red; border-radius: 0;\">
                        <h4 class=\"panel-title\">
                            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" style=\"border-radius: 0;\">
                                Champs Intéressants
                            </a>
                        </h4>
                    </div>
                    <div id=\"collapseOne\" class=\"panel-collapse collapse in\">
                        <div class=\"panel-body\" style=\"background-color:white;\">
                            <table class=\"table table-striped\">
                                <tr>
                                    <td class=\"fht\">
                                        {{ \"Carburant\" }}
                                    </td>
                                    <td>
                                        {{ ticket.voiture.ficheTech.carburant !=''?ticket.voiture.ficheTech.carburant : 'Non Spécifiée' }}
                                    </td>
                                </tr>

                                <tr>
                                    <td class=\"fht\">
                                        {{ \"Consommation Urbaine\" }}
                                    </td>
                                    <td>
                                        {{ ticket.voiture.ficheTech.consommationUrbaine100Km !=''?ticket.voiture.ficheTech.consommationUrbaine100Km : 'Non Spécifiée' }} / 100 Km
                                    </td>
                                </tr>

                                <tr>
                                    <td class=\"fht\">
                                        {{ \"Longeur\" }}
                                    </td>
                                    <td>
                                        {{ ticket.voiture.ficheTech.longueur !=''?ticket.voiture.ficheTech.longueur : 'Non Spécifiée' }}
                                    </td>
                                </tr>

                                <tr>
                                    <td class=\"fht\">
                                        {{ \"Maximum de Révision\" }}
                                    </td>
                                    <td>
                                        {{ ticket.voiture.ficheTech.maxRevision != ''? ticket.voiture.ficheTech.maxRevision : 'Non Spécifiée'  }}
                                    </td>
                                </tr>

                                <tr>
                                    <td class=\"fht\">
                                        {{ \"Puissance Fiscale\" }}
                                    </td>
                                    <td>
                                        {{ ticket.voiture.ficheTech.puissanceFiscale != ''? ticket.voiture.ficheTech.puissanceFiscale : 'Non Spécifiée' }}
                                    </td>
                                </tr>

                                <tr>
                                    <td class=\"fht\">
                                        {{ \"Volume Réservoir\" }}
                                    </td>
                                    <td>
                                        {{ ticket.voiture.ficheTech.volumeResevoir != ''? ticket.voiture.ficheTech.volumeResevoir : 'Non Spécifiée'}}
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"panel panel-primary\" style=\"border-radius: 0;\">
                    <div class=\"panel-heading\" style=\"border-radius: 0;\">
                        <h4 class=\"panel-title\">
                            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" style=\"border-radius: 0;\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" style=\"border-radius: 0;\">
                                    Plus de Renseignement
                                </a>
                            </a>
                        </h4>
                    </div>
                    <div id=\"collapseTwo\" class=\"panel-collapse collapse\">
                        <div class=\"panel-body\" style=\"background-color:white;\">
                            <table class=\"table table-striped\">

                                    <tr>
                                        <td>
                                            Accéleration
                                        </td>
                                        <td>
                                            {{ ticket.voiture.ficheTech.acceleration != ''? ticket.voiture.ficheTech.acceleration:'Non Spécifiée' }}
                                        </td>
                                    </tr>

                                <tr>
                                    <td>
                                        Alimentation
                                    </td>
                                    <td>
                                        {{ ticket.voiture.ficheTech.alimentation != ''? ticket.voiture.ficheTech.alimentation:'Non Spécifiée' }}
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Consomation Mixte
                                    </td>
                                    <td>
                                        {{ ticket.voiture.ficheTech.consommationMixte != ''? ticket.voiture.ficheTech.consommationMixte :'Non Spécifiée' }}
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Consommation non Urbaine
                                    </td>
                                    <td>
                                        {{ ticket.voiture.ficheTech.consommationNomUrbaine100Km != ''? ticket.voiture.ficheTech.consommationNomUrbaine100Km :'Non Spécifiée'}}  /100Km
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Le Couple
                                    </td>
                                    <td>
                                        {{ ticket.voiture.ficheTech.couple != ''? ticket.voiture.ficheTech.couple :'Non Spécifiée'}}
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Date de commerce
                                    </td>
                                    <td>
                                        {{ ticket.voiture.ficheTech.dateCommerce |date(\"y/m/d\") != ''? ticket.voiture.ficheTech.dateCommerce | date(\"y/m/d\") :'Non Spécifiée' }}
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Date de fin de commerce
                                    </td>
                                    <td>
                                        {{ ticket.voiture.ficheTech.dateFinCommerce |date(\"y/m/d\") != ''? ticket.voiture.ficheTech.dateFinCommerce | date(\"y/m/d\") :'Non Spécifiée'}}
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Emission CO2
                                    </td>
                                    <td>
                                        {{ ticket.voiture.ficheTech.degagementCO2 != ''? ticket.voiture.ficheTech.degagementCO2 :'Non Spécifiée' }}
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Garentie
                                    </td>
                                    <td>
                                        {{ ticket.voiture.ficheTech.garantie != ''? ticket.voiture.ficheTech.garantie :'Non Spécifiée' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       Longeur avec Retroviseur
                                    </td>
                                    <td>
                                        {{ ticket.voiture.ficheTech.longueurAvecRetroviseurs != ''? ticket.voiture.ficheTech.longueurAvecRetroviseurs :'Non Spécifiée' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Mode Moteur
                                    </td>
                                    <td>
                                        {{ ticket.voiture.ficheTech.modeMoteur != ''? ticket.voiture.ficheTech.modeMoteur :'Non Spécifiée'}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Nombre de place
                                    </td>
                                    <td>
                                        {{ ticket.voiture.ficheTech.nombrePlaces != ''? ticket.voiture.ficheTech.nombrePlaces :'Non Spécifiée' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Nombre de portes
                                    </td>
                                    <td>
                                        {{ ticket.voiture.ficheTech.nombrePortes != ''? ticket.voiture.ficheTech.nombrePortes :'Non Spécifiée' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Position Moteur
                                    </td>
                                    <td>
                                        {{ ticket.voiture.ficheTech.positionMoteur != ''? ticket.voiture.ficheTech.positionMoteur :'Non Spécifiée'}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Taille des pneus
                                    </td>
                                    <td>
                                        {{ ticket.voiture.ficheTech.taillePneue != ''? ticket.voiture.ficheTech.taillePneue :'Non Spécifiée'}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Vitesse maximale
                                    </td>
                                    <td>
                                        {{ ticket.voiture.ficheTech.vitesseMax != ''? ticket.voiture.ficheTech.vitesseMax :'Non Spécifiée'}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Volume cylindre
                                    </td>
                                    <td>
                                        {{ ticket.voiture.ficheTech.volumeCylindre != ''? ticket.voiture.ficheTech.volumeCylindre :'Non Spécifiée'}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Poid à vide
                                    </td>
                                    <td>
                                        {{ ticket.voiture.ficheTech.poidVide != ''? ticket.voiture.ficheTech.poidVide :'Non Spécifiée'}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Volume Min-Max
                                    </td>
                                    <td>
                                        {{ ticket.voiture.ficheTech.volumeMinMax != ''? ticket.voiture.ficheTech.volumeMinMax :'Non Spécifiée'}}
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "default/CheckTicket.html.twig", "E:\\PFAOrigin\\app\\Resources\\views\\default\\CheckTicket.html.twig");
    }
}
