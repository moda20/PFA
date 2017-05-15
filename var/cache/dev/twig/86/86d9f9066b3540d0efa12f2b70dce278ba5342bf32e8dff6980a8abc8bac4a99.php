<?php

/* User/AddTicket.html.twig */
class __TwigTemplate_3d19064f8444abf7d00041978d317b70009866a697dfaa2fdfc34dc85e24d48c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home/home.html.twig", "User/AddTicket.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "home/home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f6d32262faf493bce02e3aaa33b073583b51f4b8ed7028c365af2a6a338e08b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f6d32262faf493bce02e3aaa33b073583b51f4b8ed7028c365af2a6a338e08b->enter($__internal_0f6d32262faf493bce02e3aaa33b073583b51f4b8ed7028c365af2a6a338e08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/AddTicket.html.twig"));

        $__internal_489e89b01534b0abd4dd45cb365a1a269d6b26600dbec430d9a26b6dd44f86ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489e89b01534b0abd4dd45cb365a1a269d6b26600dbec430d9a26b6dd44f86ae->enter($__internal_489e89b01534b0abd4dd45cb365a1a269d6b26600dbec430d9a26b6dd44f86ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/AddTicket.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f6d32262faf493bce02e3aaa33b073583b51f4b8ed7028c365af2a6a338e08b->leave($__internal_0f6d32262faf493bce02e3aaa33b073583b51f4b8ed7028c365af2a6a338e08b_prof);

        
        $__internal_489e89b01534b0abd4dd45cb365a1a269d6b26600dbec430d9a26b6dd44f86ae->leave($__internal_489e89b01534b0abd4dd45cb365a1a269d6b26600dbec430d9a26b6dd44f86ae_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f6da0f68aea4d76108191d2a79ed983eafd3d92074c3e02d4f8d7711b1a4b1f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6da0f68aea4d76108191d2a79ed983eafd3d92074c3e02d4f8d7711b1a4b1f1->enter($__internal_f6da0f68aea4d76108191d2a79ed983eafd3d92074c3e02d4f8d7711b1a4b1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f9a80755f62772f0d921d0fc5792138c869e991f6e52acd1e723fcff4fb07577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a80755f62772f0d921d0fc5792138c869e991f6e52acd1e723fcff4fb07577->enter($__internal_f9a80755f62772f0d921d0fc5792138c869e991f6e52acd1e723fcff4fb07577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/accordian.css"), "html", null, true);
        echo "\">
";
        
        $__internal_f9a80755f62772f0d921d0fc5792138c869e991f6e52acd1e723fcff4fb07577->leave($__internal_f9a80755f62772f0d921d0fc5792138c869e991f6e52acd1e723fcff4fb07577_prof);

        
        $__internal_f6da0f68aea4d76108191d2a79ed983eafd3d92074c3e02d4f8d7711b1a4b1f1->leave($__internal_f6da0f68aea4d76108191d2a79ed983eafd3d92074c3e02d4f8d7711b1a4b1f1_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_62db71bb5a62273ee24ec24d321d515a9e0149b1ff2febc779bf0f5f597acc9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62db71bb5a62273ee24ec24d321d515a9e0149b1ff2febc779bf0f5f597acc9f->enter($__internal_62db71bb5a62273ee24ec24d321d515a9e0149b1ff2febc779bf0f5f597acc9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b92ae8ec41764d0a8fc238cbfe2404be4680941ec65fc4b851a51195e769eaad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b92ae8ec41764d0a8fc238cbfe2404be4680941ec65fc4b851a51195e769eaad->enter($__internal_b92ae8ec41764d0a8fc238cbfe2404be4680941ec65fc4b851a51195e769eaad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 10
        echo "    Nouvelle Annonce
";
        
        $__internal_b92ae8ec41764d0a8fc238cbfe2404be4680941ec65fc4b851a51195e769eaad->leave($__internal_b92ae8ec41764d0a8fc238cbfe2404be4680941ec65fc4b851a51195e769eaad_prof);

        
        $__internal_62db71bb5a62273ee24ec24d321d515a9e0149b1ff2febc779bf0f5f597acc9f->leave($__internal_62db71bb5a62273ee24ec24d321d515a9e0149b1ff2febc779bf0f5f597acc9f_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_324538c6d5c439d89e43a01f0acfd4eaf38e4770f15d82b73e4f2a075e4a41bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_324538c6d5c439d89e43a01f0acfd4eaf38e4770f15d82b73e4f2a075e4a41bc->enter($__internal_324538c6d5c439d89e43a01f0acfd4eaf38e4770f15d82b73e4f2a075e4a41bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e385cf0cfd55223252a43aca33e60bb32962a2f47426a01deda174173350ec7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e385cf0cfd55223252a43aca33e60bb32962a2f47426a01deda174173350ec7e->enter($__internal_e385cf0cfd55223252a43aca33e60bb32962a2f47426a01deda174173350ec7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js\"></script>
    <script>
        jQuery(document).ready(function () {
            \$('.js-datepicker').datepicker({
                format: 'yyyy-mm-dd',
                startDate: '-1d'
            });
            \$('.js-datepickerr').datepicker({
                format: 'yyyy-mm-dd',

            });
        });
    </script>
";
        
        $__internal_e385cf0cfd55223252a43aca33e60bb32962a2f47426a01deda174173350ec7e->leave($__internal_e385cf0cfd55223252a43aca33e60bb32962a2f47426a01deda174173350ec7e_prof);

        
        $__internal_324538c6d5c439d89e43a01f0acfd4eaf38e4770f15d82b73e4f2a075e4a41bc->leave($__internal_324538c6d5c439d89e43a01f0acfd4eaf38e4770f15d82b73e4f2a075e4a41bc_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd71ffd9db34b2e08565b4dd91a21619c821a5c4fd3e826b3894645cebd6377f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd71ffd9db34b2e08565b4dd91a21619c821a5c4fd3e826b3894645cebd6377f->enter($__internal_cd71ffd9db34b2e08565b4dd91a21619c821a5c4fd3e826b3894645cebd6377f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_57230e43b21751e2083dbd0678327da436cd12ff75b53d11083f9885836fecce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57230e43b21751e2083dbd0678327da436cd12ff75b53d11083f9885836fecce->enter($__internal_57230e43b21751e2083dbd0678327da436cd12ff75b53d11083f9885836fecce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 30
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-6\" style=\"border :none; border-right: 1px black\">
                <h1>Remplir les information necessaire</h1>
                ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["TicketForm"]) ? $context["TicketForm"] : $this->getContext($context, "TicketForm")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                <br>
                <div class=\"input-group fh\" style=\"\">
                    <span class=\"input-group-addon fa fa-car\" style=\"max-height: 34px;\"></span>
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["TicketForm"]) ? $context["TicketForm"] : $this->getContext($context, "TicketForm")), "nom", array()), 'row', array());
        // line 40
        echo "
                </div>
                <div class=\"input-group fh\" style=\"\">
                    <span class=\"input-group-addon fa fa-car\" style=\"max-height: 34px;\"></span>
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["TicketForm"]) ? $context["TicketForm"] : $this->getContext($context, "TicketForm")), "voiture", array()), "nomVoiture", array()), 'row', array());
        // line 46
        echo "
                </div>
                <div class=\"input-group fh\" style=\"\">
                    <span class=\"input-group-addon fa fa-shekel\" style=\"max-height: 34px;\"></span>
                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["TicketForm"]) ? $context["TicketForm"] : $this->getContext($context, "TicketForm")), "voiture", array()), "modeleVoiture", array()), 'row', array());
        // line 51
        echo "
                </div>
                <div class=\"input-group fh\" style=\"\">
                    <span class=\"input-group-addon fa fa-car\" style=\"max-height: 34px;\"></span>
                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["TicketForm"]) ? $context["TicketForm"] : $this->getContext($context, "TicketForm")), "voiture", array()), "constructeur", array()), 'row', array());
        // line 56
        echo "
                </div>
                <div class=\"input-group fh\" style=\"margin-top: 11px;margin-bottom: 11px;\">
                    <label class=\"btn btn-full btn-primary btn-file\" style=\"border-radius: 0;\">Choisir une Photo
                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["TicketForm"]) ? $context["TicketForm"] : $this->getContext($context, "TicketForm")), "voiture", array()), "photo", array()), 'widget', array("attr" => array("style" => "display:none;")));
        // line 62
        echo "
                    </label>
                </div>
                <div class=\"input-group fh\" style=\"\">
                    <span class=\"input-group-addon fa fa-question\" style=\"max-height: 34px;\"></span>
                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["TicketForm"]) ? $context["TicketForm"] : $this->getContext($context, "TicketForm")), "voiture", array()), "Disponibilite", array()), 'row', array());
        // line 68
        echo "
                </div>

                <div class=\"input-group fh\" style=\"\">
                    <span class=\"input-group-addon fa fa-calendar-check-o\" style=\"max-height: 34px;\"></span>
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["TicketForm"]) ? $context["TicketForm"] : $this->getContext($context, "TicketForm")), "voiture", array()), "dateAjout", array()), 'row', array());
        // line 74
        echo "
                </div>
                <div class=\"input-group fh\" style=\"\">
                    <span class=\"input-group-addon fa fa-money\" style=\"max-height: 34px;\"></span>
                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["TicketForm"]) ? $context["TicketForm"] : $this->getContext($context, "TicketForm")), "prix", array()), 'row', array());
        // line 79
        echo "
                    <span class=\"input-group-addon\" style=\"max-height: 34px;\">\$</span>
                </div>
                <div class=\"input-group fh\" style=\"\">
                    <span class=\"input-group-addon fa fa-paragraph\" style=\"max-height: 34px;\"></span>
                  ";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["TicketForm"]) ? $context["TicketForm"] : $this->getContext($context, "TicketForm")), "description", array()), 'row', array());
        // line 85
        echo "
                </div>
            </div>
            <div class=\"col-xs-6\">
                <h1> Fiche technique</h1>
";
        // line 92
        echo "                <div class=\"panel-group\" id=\"accordion\">
                    <div class=\"panel panel-primary\" style=\"border-radius: 0;\">
                        <div class=\"panel-heading\" style=\"background-image: none; background-color: #3c8dbc; border: 2px red; border-radius: 0;\">
                            <h4 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" style=\"border-radius: 0;\">
                                    Veillez remplir ces champs pour une meilleur annonce
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapseOne\" class=\"panel-collapse collapse in\">
                            <div class=\"panel-body\">
                                <div class=\"fht\">
                                    ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["TicketForm"]) ? $context["TicketForm"] : $this->getContext($context, "TicketForm")), "voiture", array()), "ficheTech", array()), "carburant", array()), 'row');
        echo "
                                </div>
                                <div class=\"fht\">
                                    ";
        // line 107
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["TicketForm"]) ? $context["TicketForm"] : $this->getContext($context, "TicketForm")), "voiture", array()), "ficheTech", array()), "consommationUrbaine100Km", array()), 'row');
        echo "
                                </div>
                                <div class=\"fht\">
                                    ";
        // line 110
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["TicketForm"]) ? $context["TicketForm"] : $this->getContext($context, "TicketForm")), "voiture", array()), "ficheTech", array()), "longueur", array()), 'row');
        echo "
                                </div>
                                <div class=\"fht\">
                                    ";
        // line 113
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["TicketForm"]) ? $context["TicketForm"] : $this->getContext($context, "TicketForm")), "voiture", array()), "ficheTech", array()), "maxRevision", array()), 'row');
        echo "
                                </div>
                                <div class=\"fht\">
                                    ";
        // line 116
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["TicketForm"]) ? $context["TicketForm"] : $this->getContext($context, "TicketForm")), "voiture", array()), "ficheTech", array()), "puissanceFiscale", array()), 'row');
        echo "
                                </div>
                                <div class=\"fht\">
                                    ";
        // line 119
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["TicketForm"]) ? $context["TicketForm"] : $this->getContext($context, "TicketForm")), "voiture", array()), "ficheTech", array()), "volumeResevoir", array()), 'row');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-primary\" style=\"border-radius: 0;\">
                        <div class=\"panel-heading\" style=\"border-radius: 0;\">
                            <h4 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" style=\"border-radius: 0;\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" style=\"border-radius: 0;\">
                                        Ces champs sont optionnels mais il est toujours mieux de les remplir
                                    </a>
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapseTwo\" class=\"panel-collapse collapse\">
                            <div class=\"panel-body\">
                                ";
        // line 136
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["TicketForm"]) ? $context["TicketForm"] : $this->getContext($context, "TicketForm")), "voiture", array()), "ficheTech", array()), 'rest');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 227
        echo "
            </div>
            <div style=\"display: none\">
                ";
        // line 230
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["TicketForm"]) ? $context["TicketForm"] : $this->getContext($context, "TicketForm")), 'rest');
        echo "
            </div>
            <div class=\"col-md-12\" style=\"\">
                <button type=\"submit\" class=\"btn btn-primary btn-lg\" aria-label=\"Left Align\" style=\"text-align: center; border-radius: 0;\">
                    <span class=\"glyphicon glyphicon-check\" aria-hidden=\"true\" ></span> Enregistrer
                </button>
            </div>
            ";
        // line 237
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["TicketForm"]) ? $context["TicketForm"] : $this->getContext($context, "TicketForm")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_57230e43b21751e2083dbd0678327da436cd12ff75b53d11083f9885836fecce->leave($__internal_57230e43b21751e2083dbd0678327da436cd12ff75b53d11083f9885836fecce_prof);

        
        $__internal_cd71ffd9db34b2e08565b4dd91a21619c821a5c4fd3e826b3894645cebd6377f->leave($__internal_cd71ffd9db34b2e08565b4dd91a21619c821a5c4fd3e826b3894645cebd6377f_prof);

    }

    public function getTemplateName()
    {
        return "User/AddTicket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 237,  301 => 230,  296 => 227,  288 => 136,  268 => 119,  262 => 116,  256 => 113,  250 => 110,  244 => 107,  238 => 104,  224 => 92,  217 => 85,  215 => 84,  208 => 79,  206 => 78,  200 => 74,  198 => 73,  191 => 68,  189 => 67,  182 => 62,  180 => 60,  174 => 56,  172 => 55,  166 => 51,  164 => 50,  158 => 46,  156 => 44,  150 => 40,  148 => 39,  141 => 35,  134 => 30,  125 => 29,  99 => 13,  90 => 12,  79 => 10,  70 => 9,  58 => 6,  52 => 4,  43 => 3,  11 => 1,);
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

{% block stylesheets %}
    {{ parent() }}
    <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/accordian.css') }}\">
{% endblock %}

{% block title %}
    Nouvelle Annonce
{% endblock %}
{%  block javascripts %}
    {{ parent() }}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js\"></script>
    <script>
        jQuery(document).ready(function () {
            \$('.js-datepicker').datepicker({
                format: 'yyyy-mm-dd',
                startDate: '-1d'
            });
            \$('.js-datepickerr').datepicker({
                format: 'yyyy-mm-dd',

            });
        });
    </script>
{% endblock %}

{% block body %}

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-6\" style=\"border :none; border-right: 1px black\">
                <h1>Remplir les information necessaire</h1>
                {{ form_start(TicketForm, {'attr': {'novalidate': 'novalidate'}}) }}
                <br>
                <div class=\"input-group fh\" style=\"\">
                    <span class=\"input-group-addon fa fa-car\" style=\"max-height: 34px;\"></span>
                {{ form_row(TicketForm.nom, {
                }) }}
                </div>
                <div class=\"input-group fh\" style=\"\">
                    <span class=\"input-group-addon fa fa-car\" style=\"max-height: 34px;\"></span>
                    {{ form_row(TicketForm.voiture.nomVoiture, {

                    }) }}
                </div>
                <div class=\"input-group fh\" style=\"\">
                    <span class=\"input-group-addon fa fa-shekel\" style=\"max-height: 34px;\"></span>
                        {{ form_row(TicketForm.voiture.modeleVoiture, {
                        }) }}
                </div>
                <div class=\"input-group fh\" style=\"\">
                    <span class=\"input-group-addon fa fa-car\" style=\"max-height: 34px;\"></span>
                    {{ form_row(TicketForm.voiture.constructeur, {
                    }) }}
                </div>
                <div class=\"input-group fh\" style=\"margin-top: 11px;margin-bottom: 11px;\">
                    <label class=\"btn btn-full btn-primary btn-file\" style=\"border-radius: 0;\">Choisir une Photo
                    {{ form_widget(TicketForm.voiture.photo ,{
                        'attr' : {\"style\" : \"display:none;\"}
                    }) }}
                    </label>
                </div>
                <div class=\"input-group fh\" style=\"\">
                    <span class=\"input-group-addon fa fa-question\" style=\"max-height: 34px;\"></span>
                        {{ form_row(TicketForm.voiture.Disponibilite, {
                        }) }}
                </div>

                <div class=\"input-group fh\" style=\"\">
                    <span class=\"input-group-addon fa fa-calendar-check-o\" style=\"max-height: 34px;\"></span>
                        {{ form_row(TicketForm.voiture.dateAjout, {
                        }) }}
                </div>
                <div class=\"input-group fh\" style=\"\">
                    <span class=\"input-group-addon fa fa-money\" style=\"max-height: 34px;\"></span>
                {{ form_row(TicketForm.prix, {
                }) }}
                    <span class=\"input-group-addon\" style=\"max-height: 34px;\">\$</span>
                </div>
                <div class=\"input-group fh\" style=\"\">
                    <span class=\"input-group-addon fa fa-paragraph\" style=\"max-height: 34px;\"></span>
                  {{ form_row(TicketForm.description, {
                        }) }}
                </div>
            </div>
            <div class=\"col-xs-6\">
                <h1> Fiche technique</h1>
{#                {{ form_row(TicketForm.voiture.ficheTech,{
                }) }}#}
                <div class=\"panel-group\" id=\"accordion\">
                    <div class=\"panel panel-primary\" style=\"border-radius: 0;\">
                        <div class=\"panel-heading\" style=\"background-image: none; background-color: #3c8dbc; border: 2px red; border-radius: 0;\">
                            <h4 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" style=\"border-radius: 0;\">
                                    Veillez remplir ces champs pour une meilleur annonce
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapseOne\" class=\"panel-collapse collapse in\">
                            <div class=\"panel-body\">
                                <div class=\"fht\">
                                    {{ form_row(TicketForm.voiture.ficheTech.carburant) }}
                                </div>
                                <div class=\"fht\">
                                    {{ form_row(TicketForm.voiture.ficheTech.consommationUrbaine100Km) }}
                                </div>
                                <div class=\"fht\">
                                    {{ form_row(TicketForm.voiture.ficheTech.longueur) }}
                                </div>
                                <div class=\"fht\">
                                    {{ form_row(TicketForm.voiture.ficheTech.maxRevision) }}
                                </div>
                                <div class=\"fht\">
                                    {{ form_row(TicketForm.voiture.ficheTech.puissanceFiscale) }}
                                </div>
                                <div class=\"fht\">
                                    {{ form_row(TicketForm.voiture.ficheTech.volumeResevoir) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-primary\" style=\"border-radius: 0;\">
                        <div class=\"panel-heading\" style=\"border-radius: 0;\">
                            <h4 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" style=\"border-radius: 0;\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" style=\"border-radius: 0;\">
                                        Ces champs sont optionnels mais il est toujours mieux de les remplir
                                    </a>
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapseTwo\" class=\"panel-collapse collapse\">
                            <div class=\"panel-body\">
                                {{ form_rest(TicketForm.voiture.ficheTech) }}
                            </div>
                        </div>
                    </div>
                </div>
                {#<div class=\"\">
                    <div id=\"sidenav1\">
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#sideNavbar\"> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
                        </div>
                        <div class=\"collapse navbar-collapse\" id=\"sideNavbar\">
                            <div class=\"panel-group\" id=\"accordion\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <h4 class=\"panel-title\"><a href=\"\"><span class=\"glyphicon glyphicon-home\"></span>Home</a> </h4>
                                    </div>
                                </div>
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <h4 class=\"panel-title\"> <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\"><span class=\"glyphicon glyphicon-book\"> </span>Research<span class=\"caret\"></span></a> </h4>
                                    </div>
                                    <!-- Note: By adding \"in\" after \"collapse\", it starts with that particular panel open by default; remove if you want them all collapsed by default -->
                                    <div id=\"collapseOne\" class=\"panel-collapse collapse in\">
                                        <ul class=\"list-group\">
                                            <li class=\"navlink2\"><a href=\"\"><span class=\"glyphicon glyphicon-book\"></span>Overview</a></li>
                                            <li><a href=\"\" class=\"navlink\">Link 1</a></li>
                                            <li><a href=\"\" class=\"navlink\">Link 2</a></li>
                                            <li><a href=\"\" class=\"navlink\">Link 3</a></li>
                                            <li><a href=\"\" class=\"navlink\">Link 4</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <h4 class=\"panel-title\"> <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\"><span class=\"glyphicon glyphicon-cog\"> </span>Services<span class=\"caret\"></span></a> </h4>
                                    </div>
                                    <div id=\"collapseTwo\" class=\"panel-collapse collapse\">
                                        <ul class=\"list-group\">
                                            <li class=\"navlink2\"><a href=\"\" class=\"navlink\"><span class=\"glyphicon glyphicon-cog\"></span>Overview</a></li>
                                            <li><a href=\"\" class=\"navlink\">Link 1</a></li>
                                            <li><a href=\"\" class=\"navlink\">Link 2</a></li>
                                            <li><a href=\"\" class=\"navlink\">Link 3</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <h4 class=\"panel-title\"> <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\"><span class=\"glyphicon glyphicon-calendar\"> </span>Calendar<span class=\"caret\"></span></a> </h4>
                                    </div>
                                    <div id=\"collapseThree\" class=\"panel-collapse collapse\">
                                        <ul class=\"list-group\">
                                            <li class=\"navlink2\"><a href=\"\"><span class=\"glyphicon glyphicon-calendar\"></span>Overview</a></li>
                                            <li><a href=\"\" class=\"navlink\">Link 1</a></li>
                                            <li><a href=\"\" class=\"navlink\">Link 2</a></li>
                                            <li><a href=\"\" class=\"navlink\">Link 3</a></li>
                                            <li><a href=\"\" class=\"navlink\">Link 4</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <h4 class=\"panel-title\"> <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseFour\"><span class=\"glyphicon glyphicon-user\"></span> About Us<span class=\"caret\"></span></a></h4>
                                    </div>
                                    <div id=\"collapseFour\" class=\"panel-collapse collapse\">
                                        <ul class=\"list-group\">
                                            <li><a href=\"\" class=\"navlink\">Link 1</a></li>
                                            <li><a href=\"\" class=\"navlink\">Link 2</a></li>
                                            <li><a href=\"\" class=\"navlink\">Link 3</a></li>
                                            <li><a href=\"\" class=\"navlink\">Link 4</a></li>
                                            <li><a href=\"\" class=\"navlink\">Link 5</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- This is in case you want to add additional links that will only show once the Nav button is engaged; delete if you don't need -->
                                <div class=\"menu-hide\">
                                    <div class=\"panel panel-default\">
                                        <div class=\"panel-heading\">
                                            <h4 class=\"panel-title\"><a href=\"\"><span class=\"glyphicon glyphicon-new-window\"></span>External Link</a> </h4>
                                        </div>
                                    </div>
                                    <div class=\"panel panel-default\">
                                        <div class=\"panel-heading\">
                                            <h4 class=\"panel-title\"><a href=\"\"><span class=\"glyphicon glyphicon-new-window\"></span>External Link</a> </h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- end hidden Menu items -->
                            </div>
                        </div>
                    </div>
                </div>#}

            </div>
            <div style=\"display: none\">
                {{ form_rest(TicketForm) }}
            </div>
            <div class=\"col-md-12\" style=\"\">
                <button type=\"submit\" class=\"btn btn-primary btn-lg\" aria-label=\"Left Align\" style=\"text-align: center; border-radius: 0;\">
                    <span class=\"glyphicon glyphicon-check\" aria-hidden=\"true\" ></span> Enregistrer
                </button>
            </div>
            {{ form_end(TicketForm) }}
        </div>
    </div>
{% endblock %}

", "User/AddTicket.html.twig", "E:\\PFAOrigin\\app\\Resources\\views\\User\\AddTicket.html.twig");
    }
}
