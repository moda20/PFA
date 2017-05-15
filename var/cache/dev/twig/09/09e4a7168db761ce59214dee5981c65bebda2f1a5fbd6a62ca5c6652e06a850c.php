<?php

/* User/CheckTickets.html.twig */
class __TwigTemplate_7c6f8905208cb4d96e7ecaa4b1bc1c51e203c109f4e2ab3178c8d87e35084c80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home/home.html.twig", "User/CheckTickets.html.twig", 1);
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
        $__internal_0a6fd91fba89eb1917e54214cd53306d31e673f189d762e91842d50155cb30e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a6fd91fba89eb1917e54214cd53306d31e673f189d762e91842d50155cb30e2->enter($__internal_0a6fd91fba89eb1917e54214cd53306d31e673f189d762e91842d50155cb30e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/CheckTickets.html.twig"));

        $__internal_d12985953cfbe67ede1356da15ff40255014a34e105c0cb864d9fc71eb52dccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d12985953cfbe67ede1356da15ff40255014a34e105c0cb864d9fc71eb52dccf->enter($__internal_d12985953cfbe67ede1356da15ff40255014a34e105c0cb864d9fc71eb52dccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/CheckTickets.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a6fd91fba89eb1917e54214cd53306d31e673f189d762e91842d50155cb30e2->leave($__internal_0a6fd91fba89eb1917e54214cd53306d31e673f189d762e91842d50155cb30e2_prof);

        
        $__internal_d12985953cfbe67ede1356da15ff40255014a34e105c0cb864d9fc71eb52dccf->leave($__internal_d12985953cfbe67ede1356da15ff40255014a34e105c0cb864d9fc71eb52dccf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f86af88fee9314773b4b5c5fe558c14fc4b65156d3131d2e2d07b144731ccac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f86af88fee9314773b4b5c5fe558c14fc4b65156d3131d2e2d07b144731ccac2->enter($__internal_f86af88fee9314773b4b5c5fe558c14fc4b65156d3131d2e2d07b144731ccac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7b0eb2dc412de45d76e0dbbaea96ef631a797e7d0c09a5b93b6013f6adef0714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b0eb2dc412de45d76e0dbbaea96ef631a797e7d0c09a5b93b6013f6adef0714->enter($__internal_7b0eb2dc412de45d76e0dbbaea96ef631a797e7d0c09a5b93b6013f6adef0714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mes Annonces
";
        
        $__internal_7b0eb2dc412de45d76e0dbbaea96ef631a797e7d0c09a5b93b6013f6adef0714->leave($__internal_7b0eb2dc412de45d76e0dbbaea96ef631a797e7d0c09a5b93b6013f6adef0714_prof);

        
        $__internal_f86af88fee9314773b4b5c5fe558c14fc4b65156d3131d2e2d07b144731ccac2->leave($__internal_f86af88fee9314773b4b5c5fe558c14fc4b65156d3131d2e2d07b144731ccac2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a280a71030be3e126e7ea67347d8b8f427e658257f8df6012d36e7b79bdcc49b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a280a71030be3e126e7ea67347d8b8f427e658257f8df6012d36e7b79bdcc49b->enter($__internal_a280a71030be3e126e7ea67347d8b8f427e658257f8df6012d36e7b79bdcc49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f1ec8b9e4f898bb41dfc24bfba306483f753c996dae09d08b7401c82c8f39b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f1ec8b9e4f898bb41dfc24bfba306483f753c996dae09d08b7401c82c8f39b5->enter($__internal_2f1ec8b9e4f898bb41dfc24bfba306483f753c996dae09d08b7401c82c8f39b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"container\">
    <div class=\"tabbable-panel\">
        <div class=\"tabbable-line\">
            <ul class=\"nav nav-tabs \">
                <li class=\"active\">
                    <a href=\"#tab_default_1\" data-toggle=\"tab\">
                        <i class=\"fa fa-bars\"></i> </a>
                </li>
                <li>
                    <a href=\"#tab_default_2\" data-toggle=\"tab\">
                        <i class=\"fa fa-th\"></i>  </a>
                </li>
            </ul>
            <div class=\"tab-content\">
                <div class=\"tab-pane active\" id=\"tab_default_1\">
                    <h1>
                        Mes Annonces
                    </h1>

                    <table class=\"table table-striped\">
                        <tr>
                            <th>Nom de Ticket</th>
                            <th>Nom de Voiture</th>
                            <th>Modèle</th>
                            <th>Constructeur</th>
                            <th>Prix</th>
                            <th>Status</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>
                        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 39
            echo "                            <tr>
                                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "nom", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ticket"], "voiture", array()), "nomVoiture", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ticket"], "voiture", array()), "modeleVoiture", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 43
            echo "</td>
                                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "prix", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 45
            echo ((($this->getAttribute($context["ticket"], "status", array()) == 0)) ? ("Non approuvée") : ("Approuvée"));
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_ticket_edit", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success\"><span class=\"fa fa-pencil\"></span></a>
                                </td>
                                <td>
                                    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_ticket_remove", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success\"><span class=\"fa fa-trash\"></span></a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                    </table>
                </div>
                <div class=\"tab-pane\" id=\"tab_default_2\">
                    <h1>
                        Mes Annonces
                    </h1>

                        <div class=\"row\">
                            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 63
            echo "                                <div class=\"col-md-3 col-sm-3 col-lg-3\">
                                    <div class=\"card\">
                                    <div class=\"card-image\">
                                        <img class=\"img-responsive\" src=\"";
            // line 66
            echo twig_escape_filter($this->env, ((isset($context["cursrc"]) ? $context["cursrc"] : $this->getContext($context, "cursrc")) . $this->getAttribute($this->getAttribute($context["ticket"], "voiture", array()), "getphoto", array())), "html", null, true);
            echo "\" style=\"position: initial;\">
                                        <span class=\"card-title\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "nom", array()), "html", null, true);
            echo "</span>
                                    </div>

                                    <div class=\"card-content\">
                                        <table class=\"table table-user-information\">
                                            <tbody>
                                            <tr>
                                                <td>
                                                    ";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ticket"], "voiture", array()), "nomVoiture", array()), "html", null, true);
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ticket"], "voiture", array()), "modeleVoiture", array()), "html", null, true);
            echo "
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "prix", array()), "html", null, true);
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 87
            echo "                                                    CONSTRUCTEUR
                                                </td>
                                            </tr>
                                            <tr>
                                                ";
            // line 91
            if (($this->getAttribute($context["ticket"], "status", array()) == 0)) {
                // line 92
                echo "                                                    <div class=\"alert alert-danger\" role=\"alert\" style=\"font-size: 0.9em;padding: 0.7%;\">
                                                        <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
                                                        <span class=\"sr-only\">Attention :</span>
                                                        Cette Annonce n'est pas approuvée par un administrateur
                                                    </div>
                                                ";
            }
            // line 98
            echo "                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class=\"card-action\">
                                        ";
            // line 103
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_OWN", $context["ticket"])) {
                // line 104
                echo "                                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_ticket_edit", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
                echo "\" style=\"font-size: 0.9em\" >Modifier</a>
                                            <a href=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_ticket_remove", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
                echo "\" style=\"font-size: 0.9em\" >Suprimer</a>
                                        ";
            }
            // line 107
            echo "                                    </div>
                                </div>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_2f1ec8b9e4f898bb41dfc24bfba306483f753c996dae09d08b7401c82c8f39b5->leave($__internal_2f1ec8b9e4f898bb41dfc24bfba306483f753c996dae09d08b7401c82c8f39b5_prof);

        
        $__internal_a280a71030be3e126e7ea67347d8b8f427e658257f8df6012d36e7b79bdcc49b->leave($__internal_a280a71030be3e126e7ea67347d8b8f427e658257f8df6012d36e7b79bdcc49b_prof);

    }

    public function getTemplateName()
    {
        return "User/CheckTickets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 111,  238 => 107,  233 => 105,  228 => 104,  226 => 103,  219 => 98,  211 => 92,  209 => 91,  203 => 87,  197 => 83,  189 => 78,  183 => 75,  172 => 67,  168 => 66,  163 => 63,  159 => 62,  149 => 54,  139 => 50,  133 => 47,  128 => 45,  124 => 44,  121 => 43,  117 => 42,  113 => 41,  109 => 40,  106 => 39,  102 => 38,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"home/home.html.twig\" %}

{% block title %}
    Mes Annonces
{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"tabbable-panel\">
        <div class=\"tabbable-line\">
            <ul class=\"nav nav-tabs \">
                <li class=\"active\">
                    <a href=\"#tab_default_1\" data-toggle=\"tab\">
                        <i class=\"fa fa-bars\"></i> </a>
                </li>
                <li>
                    <a href=\"#tab_default_2\" data-toggle=\"tab\">
                        <i class=\"fa fa-th\"></i>  </a>
                </li>
            </ul>
            <div class=\"tab-content\">
                <div class=\"tab-pane active\" id=\"tab_default_1\">
                    <h1>
                        Mes Annonces
                    </h1>

                    <table class=\"table table-striped\">
                        <tr>
                            <th>Nom de Ticket</th>
                            <th>Nom de Voiture</th>
                            <th>Modèle</th>
                            <th>Constructeur</th>
                            <th>Prix</th>
                            <th>Status</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>
                        {% for ticket in tickets %}
                            <tr>
                                <td>{{ ticket.nom }}</td>
                                <td>{{ ticket.voiture.nomVoiture }}</td>
                                <td>{{ ticket.voiture.modeleVoiture }}</td>
                                <td>{#{{ ticket.voiture.constructeur? ticket.voiture.constructeur : \"\"  }}#}</td>
                                <td>{{ ticket.prix }}</td>
                                <td>{{ ticket.status==0? 'Non approuvée' : 'Approuvée' }}</td>
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
                <div class=\"tab-pane\" id=\"tab_default_2\">
                    <h1>
                        Mes Annonces
                    </h1>

                        <div class=\"row\">
                            {% for ticket in tickets %}
                                <div class=\"col-md-3 col-sm-3 col-lg-3\">
                                    <div class=\"card\">
                                    <div class=\"card-image\">
                                        <img class=\"img-responsive\" src=\"{{ \"#{cursrc}#{ticket.voiture.getphoto}\" }}\" style=\"position: initial;\">
                                        <span class=\"card-title\">{{ ticket.nom }}</span>
                                    </div>

                                    <div class=\"card-content\">
                                        <table class=\"table table-user-information\">
                                            <tbody>
                                            <tr>
                                                <td>
                                                    {{ ticket.voiture.nomVoiture }}
                                                </td>
                                                <td>
                                                    {{ ticket.voiture.modeleVoiture }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    {{ ticket.prix }}
                                                </td>
                                                <td>
                                                    {#{{ ticket.voiture. }}#}
                                                    CONSTRUCTEUR
                                                </td>
                                            </tr>
                                            <tr>
                                                {% if ticket.status ==0 %}
                                                    <div class=\"alert alert-danger\" role=\"alert\" style=\"font-size: 0.9em;padding: 0.7%;\">
                                                        <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
                                                        <span class=\"sr-only\">Attention :</span>
                                                        Cette Annonce n'est pas approuvée par un administrateur
                                                    </div>
                                                {% endif %}
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class=\"card-action\">
                                        {%if is_granted('ROLE_OWN', ticket) %}
                                            <a href=\"{{ path(\"user_ticket_edit\", {'id': ticket.id}) }}\" style=\"font-size: 0.9em\" >Modifier</a>
                                            <a href=\"{{ path(\"user_ticket_remove\", {'id': ticket.id}) }}\" style=\"font-size: 0.9em\" >Suprimer</a>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                            {% endfor %}
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "User/CheckTickets.html.twig", "E:\\PFAOrigin\\app\\Resources\\views\\User\\CheckTickets.html.twig");
    }
}
