<?php

/* User/EditCar.html.twig */
class __TwigTemplate_92cfaf879b28d3b45f91206893c32603b04f54ec70bce57968ec162b73bb167c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home/home.html.twig", "User/EditCar.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_b4f64e3605228a69da9fbdd3c0beedd72837c18a2c828815ec3346f73ae2b6b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4f64e3605228a69da9fbdd3c0beedd72837c18a2c828815ec3346f73ae2b6b5->enter($__internal_b4f64e3605228a69da9fbdd3c0beedd72837c18a2c828815ec3346f73ae2b6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/EditCar.html.twig"));

        $__internal_6bc9969d5bacfd0f8fe9070a58faf1c36b438f335dea2ff00f787c59a153d249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bc9969d5bacfd0f8fe9070a58faf1c36b438f335dea2ff00f787c59a153d249->enter($__internal_6bc9969d5bacfd0f8fe9070a58faf1c36b438f335dea2ff00f787c59a153d249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/EditCar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4f64e3605228a69da9fbdd3c0beedd72837c18a2c828815ec3346f73ae2b6b5->leave($__internal_b4f64e3605228a69da9fbdd3c0beedd72837c18a2c828815ec3346f73ae2b6b5_prof);

        
        $__internal_6bc9969d5bacfd0f8fe9070a58faf1c36b438f335dea2ff00f787c59a153d249->leave($__internal_6bc9969d5bacfd0f8fe9070a58faf1c36b438f335dea2ff00f787c59a153d249_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0abd468646e0d218bb976bdcb7ecb63c73fe6ba5010518d09b6393917a833ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0abd468646e0d218bb976bdcb7ecb63c73fe6ba5010518d09b6393917a833ad3->enter($__internal_0abd468646e0d218bb976bdcb7ecb63c73fe6ba5010518d09b6393917a833ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d969f12c9a30c726b8539929c1fa57145e55d564dfb81899dd5fa64042b20daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d969f12c9a30c726b8539929c1fa57145e55d564dfb81899dd5fa64042b20daf->enter($__internal_d969f12c9a30c726b8539929c1fa57145e55d564dfb81899dd5fa64042b20daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css\">
";
        
        $__internal_d969f12c9a30c726b8539929c1fa57145e55d564dfb81899dd5fa64042b20daf->leave($__internal_d969f12c9a30c726b8539929c1fa57145e55d564dfb81899dd5fa64042b20daf_prof);

        
        $__internal_0abd468646e0d218bb976bdcb7ecb63c73fe6ba5010518d09b6393917a833ad3->leave($__internal_0abd468646e0d218bb976bdcb7ecb63c73fe6ba5010518d09b6393917a833ad3_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e85542f0e6d115c96135851a73aa5de1aac9ef91e96491177f6eb9a5aa6f480e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e85542f0e6d115c96135851a73aa5de1aac9ef91e96491177f6eb9a5aa6f480e->enter($__internal_e85542f0e6d115c96135851a73aa5de1aac9ef91e96491177f6eb9a5aa6f480e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c7e2464fc3658f2dec0f24f4a6e2ac4918e01d53d2eaf9dc2e75d243f2f51d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e2464fc3658f2dec0f24f4a6e2ac4918e01d53d2eaf9dc2e75d243f2f51d6a->enter($__internal_c7e2464fc3658f2dec0f24f4a6e2ac4918e01d53d2eaf9dc2e75d243f2f51d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
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
        });
    </script>
";
        
        $__internal_c7e2464fc3658f2dec0f24f4a6e2ac4918e01d53d2eaf9dc2e75d243f2f51d6a->leave($__internal_c7e2464fc3658f2dec0f24f4a6e2ac4918e01d53d2eaf9dc2e75d243f2f51d6a_prof);

        
        $__internal_e85542f0e6d115c96135851a73aa5de1aac9ef91e96491177f6eb9a5aa6f480e->leave($__internal_e85542f0e6d115c96135851a73aa5de1aac9ef91e96491177f6eb9a5aa6f480e_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_4608ff7bf7d4948271134f3e6bf4d7089364ec879248776c59863564dfbc9fca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4608ff7bf7d4948271134f3e6bf4d7089364ec879248776c59863564dfbc9fca->enter($__internal_4608ff7bf7d4948271134f3e6bf4d7089364ec879248776c59863564dfbc9fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_13ccb22118a62d7e1a91b60ddb026b4cb68280b4368cfa7c607e892a57a4b549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13ccb22118a62d7e1a91b60ddb026b4cb68280b4368cfa7c607e892a57a4b549->enter($__internal_13ccb22118a62d7e1a91b60ddb026b4cb68280b4368cfa7c607e892a57a4b549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h1>Remplir les information necessaire pour la modification</h1>
                ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["NewCarForm"]) ? $context["NewCarForm"] : $this->getContext($context, "NewCarForm")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["NewCarForm"]) ? $context["NewCarForm"] : $this->getContext($context, "NewCarForm")), "nomVoiture", array()), 'row', array("label" => "Spécifier un nouveau nom de voiture à afficher"));
        // line 30
        echo "
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["NewCarForm"]) ? $context["NewCarForm"] : $this->getContext($context, "NewCarForm")), "modeleVoiture", array()), 'row', array("label" => "Spécifier un nouveau modèle de la voiture a afficher"));
        // line 33
        echo "
                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["NewCarForm"]) ? $context["NewCarForm"] : $this->getContext($context, "NewCarForm")), "dateAjout", array()), 'row', array("label" => "Ajuster la date d'ajout"));
        // line 36
        echo "
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["NewCarForm"]) ? $context["NewCarForm"] : $this->getContext($context, "NewCarForm")), "photos", array()), 'row', array("label" => "Ajouter de nouvelles les images de l'automobile"));
        // line 39
        echo "
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["NewCarForm"]) ? $context["NewCarForm"] : $this->getContext($context, "NewCarForm")), "photo", array()), 'row', array("label" => "Choisir une nouvelle l'image d'avant"));
        // line 42
        echo "

                <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["currsrc"]) ? $context["currsrc"] : $this->getContext($context, "currsrc")), "html", null, true);
        echo "\" class=\"img-responsive\">
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["NewCarForm"]) ? $context["NewCarForm"] : $this->getContext($context, "NewCarForm")), "ficheTech", array()), 'row', array("label" => "Choisir la nouvelle fiche technique à lier avec l'automobile"));
        // line 47
        echo "
                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["NewCarForm"]) ? $context["NewCarForm"] : $this->getContext($context, "NewCarForm")), "Disponibilite", array()), 'row', array("label" => "Cocher si l'automobile est disponible au moment de l'ajout"));
        // line 50
        echo "
                <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["NewCarForm"]) ? $context["NewCarForm"] : $this->getContext($context, "NewCarForm")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_13ccb22118a62d7e1a91b60ddb026b4cb68280b4368cfa7c607e892a57a4b549->leave($__internal_13ccb22118a62d7e1a91b60ddb026b4cb68280b4368cfa7c607e892a57a4b549_prof);

        
        $__internal_4608ff7bf7d4948271134f3e6bf4d7089364ec879248776c59863564dfbc9fca->leave($__internal_4608ff7bf7d4948271134f3e6bf4d7089364ec879248776c59863564dfbc9fca_prof);

    }

    public function getTemplateName()
    {
        return "User/EditCar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 52,  152 => 50,  150 => 48,  147 => 47,  145 => 45,  141 => 44,  137 => 42,  135 => 40,  132 => 39,  130 => 37,  127 => 36,  125 => 34,  122 => 33,  120 => 31,  117 => 30,  115 => 28,  111 => 27,  105 => 23,  96 => 22,  74 => 10,  65 => 9,  51 => 4,  42 => 3,  11 => 1,);
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
        });
    </script>
{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h1>Remplir les information necessaire pour la modification</h1>
                {{ form_start(NewCarForm,{'attr': {'novalidate': 'novalidate'}}) }}
                {{ form_row(NewCarForm.nomVoiture, {
                    'label' : \"Spécifier un nouveau nom de voiture à afficher\"
                }) }}
                {{ form_row(NewCarForm.modeleVoiture, {
                    'label' : \"Spécifier un nouveau modèle de la voiture a afficher\"
                }) }}
                {{ form_row(NewCarForm.dateAjout, {
                    'label' : \"Ajuster la date d'ajout\"
                }) }}
                {{ form_row(NewCarForm.photos, {
                    'label' : \"Ajouter de nouvelles les images de l'automobile\"
                }) }}
                {{ form_row(NewCarForm.photo, {
                    'label' : \"Choisir une nouvelle l'image d'avant\"
                }) }}

                <img src=\"{{ currsrc }}\" class=\"img-responsive\">
                {{ form_row(NewCarForm.ficheTech, {
                    'label' : \"Choisir la nouvelle fiche technique à lier avec l'automobile\"
                }) }}
                {{ form_row(NewCarForm.Disponibilite , {
                    'label' : \"Cocher si l'automobile est disponible au moment de l'ajout\"
                }) }}
                <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                {{ form_end(NewCarForm) }}
            </div>
        </div>
    </div>
{% endblock %}

", "User/EditCar.html.twig", "E:\\PFAOrigin\\app\\Resources\\views\\User\\EditCar.html.twig");
    }
}
