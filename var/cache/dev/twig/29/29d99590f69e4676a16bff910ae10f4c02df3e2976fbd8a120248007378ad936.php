<?php

/* default/CheckProfile.html.twig */
class __TwigTemplate_a14b2ac4b36908fb4c332d92b00d1233cb20243e90f4f7d66deae7c087f42aff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home/home.html.twig", "default/CheckProfile.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "home/home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6362f4af1a4d73a9a8fd6b2c8b49ea156ba04a279af0c9486517f4b282207231 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6362f4af1a4d73a9a8fd6b2c8b49ea156ba04a279af0c9486517f4b282207231->enter($__internal_6362f4af1a4d73a9a8fd6b2c8b49ea156ba04a279af0c9486517f4b282207231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/CheckProfile.html.twig"));

        $__internal_c28c368513acbca1f3595703c7d747055bffbec8271e9aebcc8fc1f16736ff0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c28c368513acbca1f3595703c7d747055bffbec8271e9aebcc8fc1f16736ff0d->enter($__internal_c28c368513acbca1f3595703c7d747055bffbec8271e9aebcc8fc1f16736ff0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/CheckProfile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6362f4af1a4d73a9a8fd6b2c8b49ea156ba04a279af0c9486517f4b282207231->leave($__internal_6362f4af1a4d73a9a8fd6b2c8b49ea156ba04a279af0c9486517f4b282207231_prof);

        
        $__internal_c28c368513acbca1f3595703c7d747055bffbec8271e9aebcc8fc1f16736ff0d->leave($__internal_c28c368513acbca1f3595703c7d747055bffbec8271e9aebcc8fc1f16736ff0d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_62e1bce5547497bbfb645c82ece1ced20bb052321ca2a6c41ca57686abf1f4cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62e1bce5547497bbfb645c82ece1ced20bb052321ca2a6c41ca57686abf1f4cb->enter($__internal_62e1bce5547497bbfb645c82ece1ced20bb052321ca2a6c41ca57686abf1f4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b061897c722aea5267698791e19241a68012bcc20393dc15ca49e8e4139f2200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b061897c722aea5267698791e19241a68012bcc20393dc15ca49e8e4139f2200->enter($__internal_b061897c722aea5267698791e19241a68012bcc20393dc15ca49e8e4139f2200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo "
";
        
        $__internal_b061897c722aea5267698791e19241a68012bcc20393dc15ca49e8e4139f2200->leave($__internal_b061897c722aea5267698791e19241a68012bcc20393dc15ca49e8e4139f2200_prof);

        
        $__internal_62e1bce5547497bbfb645c82ece1ced20bb052321ca2a6c41ca57686abf1f4cb->leave($__internal_62e1bce5547497bbfb645c82ece1ced20bb052321ca2a6c41ca57686abf1f4cb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9ec85d76213e51dade00341a8aafb92e86f3fdee774bf62f26075997b0529a12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ec85d76213e51dade00341a8aafb92e86f3fdee774bf62f26075997b0529a12->enter($__internal_9ec85d76213e51dade00341a8aafb92e86f3fdee774bf62f26075997b0529a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0c0abd1799e9cbcfcb323ab13e9851326fff50dc2044a09fbe19c5d714059729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0abd1799e9cbcfcb323ab13e9851326fff50dc2044a09fbe19c5d714059729->enter($__internal_0c0abd1799e9cbcfcb323ab13e9851326fff50dc2044a09fbe19c5d714059729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_0c0abd1799e9cbcfcb323ab13e9851326fff50dc2044a09fbe19c5d714059729->leave($__internal_0c0abd1799e9cbcfcb323ab13e9851326fff50dc2044a09fbe19c5d714059729_prof);

        
        $__internal_9ec85d76213e51dade00341a8aafb92e86f3fdee774bf62f26075997b0529a12->leave($__internal_9ec85d76213e51dade00341a8aafb92e86f3fdee774bf62f26075997b0529a12_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c284f0326ecba663623496cbe29ed1b2425278d670748766da193e24caad8243 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c284f0326ecba663623496cbe29ed1b2425278d670748766da193e24caad8243->enter($__internal_c284f0326ecba663623496cbe29ed1b2425278d670748766da193e24caad8243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd5727974c8f75b80274995651a0dde05e045f9711ce9f1dfefd3c01a08302ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd5727974c8f75b80274995651a0dde05e045f9711ce9f1dfefd3c01a08302ee->enter($__internal_bd5727974c8f75b80274995651a0dde05e045f9711ce9f1dfefd3c01a08302ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"\">
        <div class=\"row\" style=\"\">
            <div class=\"col-lg-6\" style=\"\">
                ";
        // line 61
        echo "                <div class=\"card\">
                    <div class=\"card-image\">
                        <img class=\"img-responsive\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["userProfilePic"]) ? $context["userProfilePic"] : $this->getContext($context, "userProfilePic")), "html", null, true);
        echo "\" style=\"margin: auto;\">
                        <span class=\"card-title\">";
        // line 64
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()) . " ") . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array())), "html", null, true);
        echo "</span>
                    </div>

                    <div class=\"card-content\">
                        <p><table class=\"table table-user-information\">
                            <tbody>
                            <tr>
                                <td>Adresse E-mail:</td>
                                <td><a href=";
        // line 72
        echo twig_escape_filter($this->env, ("mailto:" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "mail", array())), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "mail", array()), "html", null, true);
        echo "</a></td>
                            </tr>
                            <tr>
                                <td>Numéro de Telephone</td>
                                <td>";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "numTel", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td>Date de naissance</td>
                                <td>";
        // line 80
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateNaissance", array()), "m/d/Y"), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td>Code Postal</td>
                                <td>";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "codePostal", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td>Ville / Pays</td>
                                <td>";
        // line 88
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pays", array()) . " / ") . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "ville", array())), "html", null, true);
        echo "</td>
                            </tr>
                            </tbody>
                        </table></p>
                    </div>

                    <div class=\"card-action\">
                        ";
        // line 95
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_OWN", (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))) {
            // line 96
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit_User", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\" >Modifier</a>
                        <a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile_remove", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\" >Suprimer</a>
                        ";
        }
        // line 99
        echo "                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 \" style=\"\">
                <div class=\"\" style=\"height: 600px; overflow-y: scroll;\">
                    ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userCars"]) ? $context["userCars"] : $this->getContext($context, "userCars")));
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            // line 117
            echo "                        <div class=\"card\">
                            <div class=\"card-image\">
                                <img class=\"img-responsive\" src=\"";
            // line 119
            echo twig_escape_filter($this->env, ((isset($context["imgsource"]) ? $context["imgsource"] : $this->getContext($context, "imgsource")) . $this->getAttribute($this->getAttribute($context["car"], "voiture", array()), "getphoto", array())), "html", null, true);
            echo "\">
                                <span class=\"card-title\">";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["car"], "nom", array()), "html", null, true);
            echo "</span>
                            </div>

                            <div class=\"card-content\">
                                    <table class=\"table table-user-information\">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Modèle :
                                                </td>
                                                <td>
                                                    ";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["car"], "voiture", array()), "modeleVoiture", array()), "html", null, true);
            echo "
                                                </td>
                                                <td>

                                                </td>
                                                <td>
                                                    <a class=\"btn btn-primary\" href=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_ticket", array("id" => $this->getAttribute($context["car"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["car"], "voiture", array()), "nomVoiture", array()), "html", null, true);
            echo "</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Prix :
                                                </td>
                                                <td>
                                                    ";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($context["car"], "prix", array()), "html", null, true);
            echo "
                                                </td>
                                                <td>
                                                    Auteur :
                                                </td>
                                                <td>
                                                    <a class=\"btn btn-primary\" href=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("id" => $this->getAttribute($this->getAttribute($context["car"], "utilisateur", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["car"], "utilisateur", array()), "nom", array()), "html", null, true);
            echo "</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                            </div>

                            <div class=\"card-action\">
                                ";
            // line 159
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_OWN", $context["car"])) {
                // line 160
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_ticket_edit", array("id" => $this->getAttribute($context["car"], "id", array()))), "html", null, true);
                echo "\" >Modifier</a>
                                    <a href=\"";
                // line 161
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_ticket_remove", array("id" => $this->getAttribute($context["car"], "id", array()))), "html", null, true);
                echo "\" >Suprimer</a>
                                ";
            }
            // line 163
            echo "                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "                </div>
            </div>
    </div>
";
        
        $__internal_bd5727974c8f75b80274995651a0dde05e045f9711ce9f1dfefd3c01a08302ee->leave($__internal_bd5727974c8f75b80274995651a0dde05e045f9711ce9f1dfefd3c01a08302ee_prof);

        
        $__internal_c284f0326ecba663623496cbe29ed1b2425278d670748766da193e24caad8243->leave($__internal_c284f0326ecba663623496cbe29ed1b2425278d670748766da193e24caad8243_prof);

    }

    public function getTemplateName()
    {
        return "default/CheckProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 166,  260 => 163,  255 => 161,  250 => 160,  248 => 159,  235 => 151,  226 => 145,  213 => 137,  204 => 131,  190 => 120,  186 => 119,  182 => 117,  178 => 104,  171 => 99,  166 => 97,  161 => 96,  159 => 95,  149 => 88,  142 => 84,  135 => 80,  128 => 76,  119 => 72,  108 => 64,  104 => 63,  100 => 61,  95 => 10,  86 => 9,  73 => 7,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
    {{ user.nom }}
{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    {% endblock %}
{% block body %}
    <div class=\"\">
        <div class=\"row\" style=\"\">
            <div class=\"col-lg-6\" style=\"\">
                {#<div class=\" #}{#col-md-6 col-lg-6#}{# #}{#col-xs-offset-0#}{# #}{#col-sm-offset-0 col-md-offset-3 col-lg-offset-3#}{# toppad\" >
                    <div class=\"panel panel-info\">
                        <div class=\"panel-heading headerColor\" style=\"background-color: #81B9BA;\">
                            <h3 class=\"panel-title \" style=\"display: inline-block;\">{{ \"#{user.nom} #{user.prenom}\" }}</h3>
                        </div>
                        <div class=\"panel-body\">
                            <div class=\"row\">
                                <div class=\"col-md-3 col-lg-3 \" align=\"center\"> <img alt=\"User Pic\" src=\"{{ userProfilePic }}\" class=\"img-circle img-responsive\"> </div>
                                <div class=\" col-md-9 col-lg-9 \">
                                    <table class=\"table table-user-information\">
                                        <tbody>
                                        <tr>
                                            <td>Adresse E-mail:</td>
                                            <td><a href={{ \"mailto:\" ~  user.mail }}>{{ user.mail }}</a></td>
                                        </tr>
                                        <tr>
                                            <td>Numéro de Telephone</td>
                                            <td>{{ user.numTel }}</td>
                                        </tr>
                                        <tr>
                                            <td>Date de naissance</td>
                                            <td>{{ user.dateNaissance|date(\"m/d/Y\") }}</td>
                                        </tr>
                                        <tr>
                                            <td>Code Postal</td>
                                            <td>{{ user.codePostal }}</td>
                                        </tr>
                                        <tr>
                                            <td>Ville / Pays</td>
                                            <td>{{ \"#{user.pays} / #{user.ville}\" }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel-footer\">
                            <a data-original-title=\"Broadcast Message\" data-toggle=\"tooltip\" type=\"button\" class=\"btn btn-sm btn-primary\"><i class=\"glyphicon glyphicon-envelope\"></i></a>
                            <span class=\"pull-right\">
                                {% if is_granted('ROLE_OWN', user) %}
                                    <a href=\"{{ path(\"user_edit_User\", {'id': user.id}) }}\" data-original-title=\"Modifier mon compte\" data-toggle=\"tooltip\" type=\"button\" class=\"btn btn-sm btn-warning\"><i class=\"glyphicon glyphicon-edit\"></i></a>
                                    <a href=\"{{ path(\"user_profile_remove\", {'id': user.id}) }}\" data-original-title=\"Effacer mon compte\" data-toggle=\"tooltip\" type=\"button\" class=\"btn btn-sm btn-danger\"><i class=\"glyphicon glyphicon-remove\"></i></a>
                                {% endif %}
                        </span>
                        </div>

                    </div>
                </div>#}
                <div class=\"card\">
                    <div class=\"card-image\">
                        <img class=\"img-responsive\" src=\"{{ userProfilePic }}\" style=\"margin: auto;\">
                        <span class=\"card-title\">{{ \"#{user.nom} #{user.prenom}\" }}</span>
                    </div>

                    <div class=\"card-content\">
                        <p><table class=\"table table-user-information\">
                            <tbody>
                            <tr>
                                <td>Adresse E-mail:</td>
                                <td><a href={{ \"mailto:\" ~  user.mail }}>{{ user.mail }}</a></td>
                            </tr>
                            <tr>
                                <td>Numéro de Telephone</td>
                                <td>{{ user.numTel }}</td>
                            </tr>
                            <tr>
                                <td>Date de naissance</td>
                                <td>{{ user.dateNaissance|date(\"m/d/Y\") }}</td>
                            </tr>
                            <tr>
                                <td>Code Postal</td>
                                <td>{{ user.codePostal }}</td>
                            </tr>
                            <tr>
                                <td>Ville / Pays</td>
                                <td>{{ \"#{user.pays} / #{user.ville}\" }}</td>
                            </tr>
                            </tbody>
                        </table></p>
                    </div>

                    <div class=\"card-action\">
                        {%if is_granted('ROLE_OWN', user) %}
                        <a href=\"{{ path(\"user_edit_User\", {'id': user.id}) }}\" >Modifier</a>
                        <a href=\"{{ path(\"user_profile_remove\", {'id': user.id}) }}\" >Suprimer</a>
                        {% endif %}
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 \" style=\"\">
                <div class=\"\" style=\"height: 600px; overflow-y: scroll;\">
                    {% for car in userCars %}
{#                        <div class=\"col-sm-6 col-md-6 col-lg-6\">
                            <div class=\"thumbnail toppad\" >
                                <img src='{{ \"#{imgsource}#{car.voiture.getphoto}\" }}' >
                                <div class=\"caption\">
                                    <h3>{{ car.voiture.nomVoiture }}</h3>
                                    <p>Modèle : {{ car.voiture.modeleVoiture }}</p>
                                    <p>Prix : {{ car.prix }}</p>
                                    <p>Auteur : {{ car.utilisateur.nom }}</p>
                                    <p><a href=\"{{ path('user_ticket', {'id': car.id}) }}\" class=\"btn btn-primary\" role=\"button\">Voir Annonce</a> <a href=\"{{ path('check_car', {'id': car.voiture.id}) }}\" class=\"btn btn-default\" role=\"button\">Voir Voiture</a></p>
                                </div>
                            </div>
                        </div>#}
                        <div class=\"card\">
                            <div class=\"card-image\">
                                <img class=\"img-responsive\" src=\"{{ \"#{imgsource}#{car.voiture.getphoto}\" }}\">
                                <span class=\"card-title\">{{ car.nom }}</span>
                            </div>

                            <div class=\"card-content\">
                                    <table class=\"table table-user-information\">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Modèle :
                                                </td>
                                                <td>
                                                    {{ car.voiture.modeleVoiture }}
                                                </td>
                                                <td>

                                                </td>
                                                <td>
                                                    <a class=\"btn btn-primary\" href=\"{{ path('user_ticket', {'id': car.id}) }}\">{{ car.voiture.nomVoiture }}</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Prix :
                                                </td>
                                                <td>
                                                    {{ car.prix }}
                                                </td>
                                                <td>
                                                    Auteur :
                                                </td>
                                                <td>
                                                    <a class=\"btn btn-primary\" href=\"{{ path('user_profile', {'id': car.utilisateur.id}) }}\">{{ car.utilisateur.nom }}</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                            </div>

                            <div class=\"card-action\">
                                {%if is_granted('ROLE_OWN', car) %}
                                    <a href=\"{{ path(\"user_ticket_edit\", {'id': car.id}) }}\" >Modifier</a>
                                    <a href=\"{{ path(\"user_ticket_remove\", {'id': car.id}) }}\" >Suprimer</a>
                                {% endif %}
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
    </div>
{% endblock %}", "default/CheckProfile.html.twig", "E:\\PFAOrigin\\app\\Resources\\views\\default\\CheckProfile.html.twig");
    }
}
