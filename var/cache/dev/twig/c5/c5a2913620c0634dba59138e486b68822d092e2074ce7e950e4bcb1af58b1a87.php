<?php

/* User/AddUser.html.twig */
class __TwigTemplate_04e708ba262cda3da06274c55af8ba225e00654a19ac6cfffd73aaccbaf9b43d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home/home.html.twig", "User/AddUser.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "home/home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e18fef0c457fc50d55a5cd332ac4bc1e067657d815c86012c086bb5ce18401c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e18fef0c457fc50d55a5cd332ac4bc1e067657d815c86012c086bb5ce18401c->enter($__internal_8e18fef0c457fc50d55a5cd332ac4bc1e067657d815c86012c086bb5ce18401c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/AddUser.html.twig"));

        $__internal_967118aece42a0f09a0dada6ece250b76890453ab5bef079daa5e7de1151c517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_967118aece42a0f09a0dada6ece250b76890453ab5bef079daa5e7de1151c517->enter($__internal_967118aece42a0f09a0dada6ece250b76890453ab5bef079daa5e7de1151c517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/AddUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e18fef0c457fc50d55a5cd332ac4bc1e067657d815c86012c086bb5ce18401c->leave($__internal_8e18fef0c457fc50d55a5cd332ac4bc1e067657d815c86012c086bb5ce18401c_prof);

        
        $__internal_967118aece42a0f09a0dada6ece250b76890453ab5bef079daa5e7de1151c517->leave($__internal_967118aece42a0f09a0dada6ece250b76890453ab5bef079daa5e7de1151c517_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c64620f44dd73ed9ad998e0872c87fcaa32cae5283406c7089920c58205cd9e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c64620f44dd73ed9ad998e0872c87fcaa32cae5283406c7089920c58205cd9e7->enter($__internal_c64620f44dd73ed9ad998e0872c87fcaa32cae5283406c7089920c58205cd9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8debf2751e0fae3bd3a57fb6cd158569454b1e7ef493bbc3257a0675e94f0c1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8debf2751e0fae3bd3a57fb6cd158569454b1e7ef493bbc3257a0675e94f0c1d->enter($__internal_8debf2751e0fae3bd3a57fb6cd158569454b1e7ef493bbc3257a0675e94f0c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo twig_escape_filter($this->env, (isset($context["Status"]) ? $context["Status"] : $this->getContext($context, "Status")), "html", null, true);
        echo "
";
        
        $__internal_8debf2751e0fae3bd3a57fb6cd158569454b1e7ef493bbc3257a0675e94f0c1d->leave($__internal_8debf2751e0fae3bd3a57fb6cd158569454b1e7ef493bbc3257a0675e94f0c1d_prof);

        
        $__internal_c64620f44dd73ed9ad998e0872c87fcaa32cae5283406c7089920c58205cd9e7->leave($__internal_c64620f44dd73ed9ad998e0872c87fcaa32cae5283406c7089920c58205cd9e7_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bc066762c24af500ea52f94802536c297fedcb5c3c6a0d2e7853d83436a8925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bc066762c24af500ea52f94802536c297fedcb5c3c6a0d2e7853d83436a8925->enter($__internal_1bc066762c24af500ea52f94802536c297fedcb5c3c6a0d2e7853d83436a8925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9534b35d4d4f4c84bfdfe294db3411c61f58412e376d47028ccba2ba3abd268d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9534b35d4d4f4c84bfdfe294db3411c61f58412e376d47028ccba2ba3abd268d->enter($__internal_9534b35d4d4f4c84bfdfe294db3411c61f58412e376d47028ccba2ba3abd268d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h1>Remplir les information necessaire</h1>
                ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["UserForm"]) ? $context["UserForm"] : $this->getContext($context, "UserForm")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col col-md-6\">
                            <div class=\"input-group fh\" style=\"\">
                                <span class=\"input-group-addon fa fa-user\" style=\"max-height: 34px;\"></span>
                            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["UserForm"]) ? $context["UserForm"] : $this->getContext($context, "UserForm")), "nom", array()), 'row', array("label" => " "));
        // line 20
        echo "
                            </div>
                            <div class=\"input-group fh\" style=\"\">
                                <span class=\"input-group-addon fa fa-user\" style=\"max-height: 34px;\"></span>
                            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["UserForm"]) ? $context["UserForm"] : $this->getContext($context, "UserForm")), "prenom", array()), 'row', array("label" => " "));
        // line 26
        echo "
                            </div>
                            <div class=\"input-group fh\" style=\"\">
                                <span class=\"input-group-addon fa fa-envelope-o\" style=\"max-height: 34px;\"></span>
                            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["UserForm"]) ? $context["UserForm"] : $this->getContext($context, "UserForm")), "mail", array()), 'row', array("label" => " "));
        // line 32
        echo "
                            </div>
                            <div class=\"input-group fh\" style=\"\">
                                <span class=\"input-group-addon fa fa-phone\" style=\"max-height: 34px;\"></span>
                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["UserForm"]) ? $context["UserForm"] : $this->getContext($context, "UserForm")), "numTel", array()), 'row', array("label" => " "));
        // line 38
        echo "
                            </div>
                            <div class=\"input-group fh\" style=\"\">
                                <span class=\"input-group-addon fa fa-calendar-o\" style=\"max-height: 34px;\"></span>
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["UserForm"]) ? $context["UserForm"] : $this->getContext($context, "UserForm")), "dateNaissance", array()), 'row', array("label" => " "));
        // line 44
        echo "
                            </div>
                            <div class=\"input-group fh\" style=\"\">
                                <span class=\"input-group-addon fa fa-credit-card\" style=\"max-height: 34px;\"></span>
                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["UserForm"]) ? $context["UserForm"] : $this->getContext($context, "UserForm")), "adresse", array()), 'row', array("label" => " "));
        // line 50
        echo "
                            </div>
                            <div class=\"input-group fh\" style=\"\">
                                <span class=\"input-group-addon fa fa-map-marker\" style=\"max-height: 34px;\"></span>
                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["UserForm"]) ? $context["UserForm"] : $this->getContext($context, "UserForm")), "codePostal", array()), 'row', array("label" => " "));
        // line 56
        echo "
                            </div>
                            <div class=\"input-group fh\" style=\"\">
                                <span class=\"input-group-addon fa fa-map-marker\" style=\"max-height: 34px;\"></span>
                            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["UserForm"]) ? $context["UserForm"] : $this->getContext($context, "UserForm")), "ville", array()), 'row', array("label" => " "));
        // line 62
        echo "
                            </div>
                            <div class=\"input-group fh\" style=\"\">
                                <span class=\"input-group-addon fa fa-flag\" style=\"max-height: 34px;\"></span>
                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["UserForm"]) ? $context["UserForm"] : $this->getContext($context, "UserForm")), "pays", array()), 'row', array("label" => " "));
        // line 68
        echo "
                            </div>
                        </div>
                        <div class=\"col col-md-6\">
                            <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["UserImage"]) ? $context["UserImage"] : $this->getContext($context, "UserImage")), "html", null, true);
        echo "\" style=\"margin: auto;\" class=\"img-responsive\">
                            <div class=\"input-group fh\" style=\"margin-top: 11px;margin-bottom: 11px;\">
                                <label class=\"btn btn-full btn-primary btn-file\">Choisir une Photo
                                    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["UserForm"]) ? $context["UserForm"] : $this->getContext($context, "UserForm")), "photo", array()), 'widget', array("attr" => array("style" => "display:none;"), "label" => " "));
        // line 77
        echo "
                                </label>
                            </div>
                            <div class=\"input-group fh\" style=\"\">
                                <span class=\"input-group-addon fa fa-key\" style=\"max-height: 34px;\"></span>
                                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["UserForm"]) ? $context["UserForm"] : $this->getContext($context, "UserForm")), "password", array()), "first", array()), 'row', array("label" => " ", "attr" => array("placeholder" => "Votre Mot de pass")));
        // line 85
        echo "
                            </div>
                            <div class=\"input-group fh\" style=\"\">
                                <span class=\"input-group-addon fa fa-key\" style=\"max-height: 34px;\"></span>
                            ";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["UserForm"]) ? $context["UserForm"] : $this->getContext($context, "UserForm")), "password", array()), "second", array()), 'row', array("label" => " ", "attr" => array("placeholder" => "Confirmer votre Mot de pass")));
        // line 92
        echo "
                            </div>
                            <div class=\"input-group fh\" style=\"\">
                                <span class=\"input-group-addon fa fa-user-secret\" style=\"max-height: 34px;\"></span>
                            ";
        // line 96
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["UserForm"]) ? $context["UserForm"] : $this->getContext($context, "UserForm")), "username", array()), 'row', array("label" => " "));
        // line 98
        echo "
                            </div>
                            <ul class=\"list-group\">
                                ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["UserHistory"]) ? $context["UserHistory"] : $this->getContext($context, "UserHistory")));
        foreach ($context['_seq'] as $context["_key"] => $context["UH"]) {
            // line 102
            echo "                                    <li class=\"list-group-item\">";
            echo twig_escape_filter($this->env, $context["UH"], "html", null, true);
            echo "</li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['UH'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                            </ul>
                        </div>
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                ";
        // line 109
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["UserForm"]) ? $context["UserForm"] : $this->getContext($context, "UserForm")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_9534b35d4d4f4c84bfdfe294db3411c61f58412e376d47028ccba2ba3abd268d->leave($__internal_9534b35d4d4f4c84bfdfe294db3411c61f58412e376d47028ccba2ba3abd268d_prof);

        
        $__internal_1bc066762c24af500ea52f94802536c297fedcb5c3c6a0d2e7853d83436a8925->leave($__internal_1bc066762c24af500ea52f94802536c297fedcb5c3c6a0d2e7853d83436a8925_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_63327fbf65b890c5aa7687275e3fc663690f5f52828a6b1c9868952c7f6c4401 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63327fbf65b890c5aa7687275e3fc663690f5f52828a6b1c9868952c7f6c4401->enter($__internal_63327fbf65b890c5aa7687275e3fc663690f5f52828a6b1c9868952c7f6c4401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_08f377c512a891b09fa3da74379693b289417b5f43f6612d1760eaf2dd2feb0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f377c512a891b09fa3da74379693b289417b5f43f6612d1760eaf2dd2feb0a->enter($__internal_08f377c512a891b09fa3da74379693b289417b5f43f6612d1760eaf2dd2feb0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 116
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js\"></script>
    <script>
        jQuery(document).ready(function () {
            \$('.js-datepicker').datepicker({
                format: 'yyyy-mm-dd',
            });
        });
    </script>
";
        
        $__internal_08f377c512a891b09fa3da74379693b289417b5f43f6612d1760eaf2dd2feb0a->leave($__internal_08f377c512a891b09fa3da74379693b289417b5f43f6612d1760eaf2dd2feb0a_prof);

        
        $__internal_63327fbf65b890c5aa7687275e3fc663690f5f52828a6b1c9868952c7f6c4401->leave($__internal_63327fbf65b890c5aa7687275e3fc663690f5f52828a6b1c9868952c7f6c4401_prof);

    }

    public function getTemplateName()
    {
        return "User/AddUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 116,  232 => 115,  217 => 109,  210 => 104,  201 => 102,  197 => 101,  192 => 98,  190 => 96,  184 => 92,  182 => 89,  176 => 85,  174 => 82,  167 => 77,  165 => 75,  159 => 72,  153 => 68,  151 => 66,  145 => 62,  143 => 60,  137 => 56,  135 => 54,  129 => 50,  127 => 48,  121 => 44,  119 => 42,  113 => 38,  111 => 36,  105 => 32,  103 => 30,  97 => 26,  95 => 24,  89 => 20,  87 => 18,  78 => 12,  72 => 8,  63 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
{{ Status }}
{% endblock%}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h1>Remplir les information necessaire</h1>
                {{ form_start(UserForm, {'attr': {'novalidate': 'novalidate'}}) }}
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col col-md-6\">
                            <div class=\"input-group fh\" style=\"\">
                                <span class=\"input-group-addon fa fa-user\" style=\"max-height: 34px;\"></span>
                            {{ form_row(UserForm.nom, {
                                'label' : \" \"
                            }) }}
                            </div>
                            <div class=\"input-group fh\" style=\"\">
                                <span class=\"input-group-addon fa fa-user\" style=\"max-height: 34px;\"></span>
                            {{ form_row(UserForm.prenom, {
                                'label' : \" \"
                            }) }}
                            </div>
                            <div class=\"input-group fh\" style=\"\">
                                <span class=\"input-group-addon fa fa-envelope-o\" style=\"max-height: 34px;\"></span>
                            {{ form_row(UserForm.mail, {
                                'label' : \" \"
                            }) }}
                            </div>
                            <div class=\"input-group fh\" style=\"\">
                                <span class=\"input-group-addon fa fa-phone\" style=\"max-height: 34px;\"></span>
                            {{ form_row(UserForm.numTel, {
                                'label' : \" \"
                            }) }}
                            </div>
                            <div class=\"input-group fh\" style=\"\">
                                <span class=\"input-group-addon fa fa-calendar-o\" style=\"max-height: 34px;\"></span>
                            {{ form_row(UserForm.dateNaissance, {
                                'label' : \" \"
                            }) }}
                            </div>
                            <div class=\"input-group fh\" style=\"\">
                                <span class=\"input-group-addon fa fa-credit-card\" style=\"max-height: 34px;\"></span>
                            {{ form_row(UserForm.adresse, {
                                'label' : \" \"
                            }) }}
                            </div>
                            <div class=\"input-group fh\" style=\"\">
                                <span class=\"input-group-addon fa fa-map-marker\" style=\"max-height: 34px;\"></span>
                            {{ form_row(UserForm.codePostal, {
                                'label' : \" \"
                            }) }}
                            </div>
                            <div class=\"input-group fh\" style=\"\">
                                <span class=\"input-group-addon fa fa-map-marker\" style=\"max-height: 34px;\"></span>
                            {{ form_row(UserForm.ville, {
                                'label' : \" \"
                            }) }}
                            </div>
                            <div class=\"input-group fh\" style=\"\">
                                <span class=\"input-group-addon fa fa-flag\" style=\"max-height: 34px;\"></span>
                            {{ form_row(UserForm.pays, {
                                'label' : \" \"
                            }) }}
                            </div>
                        </div>
                        <div class=\"col col-md-6\">
                            <img src=\"{{ UserImage }}\" style=\"margin: auto;\" class=\"img-responsive\">
                            <div class=\"input-group fh\" style=\"margin-top: 11px;margin-bottom: 11px;\">
                                <label class=\"btn btn-full btn-primary btn-file\">Choisir une Photo
                                    {{ form_widget(UserForm.photo, {
                                        'attr' : {\"style\" : \"display:none;\"}, 'label' : \" \"
                                    }) }}
                                </label>
                            </div>
                            <div class=\"input-group fh\" style=\"\">
                                <span class=\"input-group-addon fa fa-key\" style=\"max-height: 34px;\"></span>
                                {{ form_row(UserForm.password.first, {
                                    'label' : \" \",
                                    'attr' : {\"placeholder\" : \"Votre Mot de pass\"}
                                }) }}
                            </div>
                            <div class=\"input-group fh\" style=\"\">
                                <span class=\"input-group-addon fa fa-key\" style=\"max-height: 34px;\"></span>
                            {{ form_row(UserForm.password.second, {
                                'label' : \" \",
                                'attr' : {\"placeholder\" : \"Confirmer votre Mot de pass\"}
                            }) }}
                            </div>
                            <div class=\"input-group fh\" style=\"\">
                                <span class=\"input-group-addon fa fa-user-secret\" style=\"max-height: 34px;\"></span>
                            {{ form_row(UserForm.username, {
                                'label' : \" \"
                            }) }}
                            </div>
                            <ul class=\"list-group\">
                                {% for UH in UserHistory %}
                                    <li class=\"list-group-item\">{{ UH }}</li>
                                {% endfor %}
                            </ul>
                        </div>
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                {{ form_end(UserForm) }}
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js\"></script>
    <script>
        jQuery(document).ready(function () {
            \$('.js-datepicker').datepicker({
                format: 'yyyy-mm-dd',
            });
        });
    </script>
{% endblock %}", "User/AddUser.html.twig", "E:\\PFAOrigin\\app\\Resources\\views\\User\\AddUser.html.twig");
    }
}
