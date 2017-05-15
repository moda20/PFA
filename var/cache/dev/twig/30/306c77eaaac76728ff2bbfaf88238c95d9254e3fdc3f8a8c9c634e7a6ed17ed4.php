<?php

/* Admin/AdminEditUser.html.twig */
class __TwigTemplate_64943f9de3dd2e6dec7b516f18aa72ecc91fe416bea515d0ce0668a729a22ffb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home/home.html.twig", "Admin/AdminEditUser.html.twig", 1);
        $this->blocks = array(
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
        $__internal_af39c83104b03b4acf9054ddb549b248eff00c09b1890d22a72c725c4a81944b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af39c83104b03b4acf9054ddb549b248eff00c09b1890d22a72c725c4a81944b->enter($__internal_af39c83104b03b4acf9054ddb549b248eff00c09b1890d22a72c725c4a81944b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/AdminEditUser.html.twig"));

        $__internal_8dd227b57c8078f900f048d29543595395704ee523251e22fd82c19a4df2dc93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd227b57c8078f900f048d29543595395704ee523251e22fd82c19a4df2dc93->enter($__internal_8dd227b57c8078f900f048d29543595395704ee523251e22fd82c19a4df2dc93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/AdminEditUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af39c83104b03b4acf9054ddb549b248eff00c09b1890d22a72c725c4a81944b->leave($__internal_af39c83104b03b4acf9054ddb549b248eff00c09b1890d22a72c725c4a81944b_prof);

        
        $__internal_8dd227b57c8078f900f048d29543595395704ee523251e22fd82c19a4df2dc93->leave($__internal_8dd227b57c8078f900f048d29543595395704ee523251e22fd82c19a4df2dc93_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_564c5870c9db15b214ceaaeeba36a5dc1d30059ff5b70d7e812c02e9d5bbba7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_564c5870c9db15b214ceaaeeba36a5dc1d30059ff5b70d7e812c02e9d5bbba7b->enter($__internal_564c5870c9db15b214ceaaeeba36a5dc1d30059ff5b70d7e812c02e9d5bbba7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8250ba95e0403bbe5b02b0d8e59af5c85506d3ef6a1a54206a1f665f81816668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8250ba95e0403bbe5b02b0d8e59af5c85506d3ef6a1a54206a1f665f81816668->enter($__internal_8250ba95e0403bbe5b02b0d8e59af5c85506d3ef6a1a54206a1f665f81816668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "Utilisateur : ";
        echo twig_escape_filter($this->env, (isset($context["UserName"]) ? $context["UserName"] : $this->getContext($context, "UserName")), "html", null, true);
        echo "
";
        
        $__internal_8250ba95e0403bbe5b02b0d8e59af5c85506d3ef6a1a54206a1f665f81816668->leave($__internal_8250ba95e0403bbe5b02b0d8e59af5c85506d3ef6a1a54206a1f665f81816668_prof);

        
        $__internal_564c5870c9db15b214ceaaeeba36a5dc1d30059ff5b70d7e812c02e9d5bbba7b->leave($__internal_564c5870c9db15b214ceaaeeba36a5dc1d30059ff5b70d7e812c02e9d5bbba7b_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_242ab32a7817896ddd39befb84ac2fd68bd376acada20a76cdfb92dab4d235cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_242ab32a7817896ddd39befb84ac2fd68bd376acada20a76cdfb92dab4d235cd->enter($__internal_242ab32a7817896ddd39befb84ac2fd68bd376acada20a76cdfb92dab4d235cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0268883ec97f8417909d683784895d5b4a97c907e89a80aa2611c27445a1bfa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0268883ec97f8417909d683784895d5b4a97c907e89a80aa2611c27445a1bfa5->enter($__internal_0268883ec97f8417909d683784895d5b4a97c907e89a80aa2611c27445a1bfa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js\"></script>
    <script>
        jQuery(document).ready(function () {
            \$('.js-datepicker').datepicker({
                format: 'yyyy-mm-dd',
            });
        });
    </script>
";
        
        $__internal_0268883ec97f8417909d683784895d5b4a97c907e89a80aa2611c27445a1bfa5->leave($__internal_0268883ec97f8417909d683784895d5b4a97c907e89a80aa2611c27445a1bfa5_prof);

        
        $__internal_242ab32a7817896ddd39befb84ac2fd68bd376acada20a76cdfb92dab4d235cd->leave($__internal_242ab32a7817896ddd39befb84ac2fd68bd376acada20a76cdfb92dab4d235cd_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_71cc44cc78761edcc551348e9265609c96e0592703069af69f19c132cc8a4696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71cc44cc78761edcc551348e9265609c96e0592703069af69f19c132cc8a4696->enter($__internal_71cc44cc78761edcc551348e9265609c96e0592703069af69f19c132cc8a4696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_82ee700a4d12a342da2a881489d374fbc39f1110ea79ec7438a5d4d3f1056378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ee700a4d12a342da2a881489d374fbc39f1110ea79ec7438a5d4d3f1056378->enter($__internal_82ee700a4d12a342da2a881489d374fbc39f1110ea79ec7438a5d4d3f1056378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h1>Remplir les information necessaire</h1>
                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["UserForm"]) ? $context["UserForm"] : $this->getContext($context, "UserForm")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col col-md-6\">
                            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["UserForm"]) ? $context["UserForm"] : $this->getContext($context, "UserForm")), "id", array()), 'row', array("label" => "ID de l'utilisateur"));
        // line 30
        echo "
                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["UserForm"]) ? $context["UserForm"] : $this->getContext($context, "UserForm")), "nom", array()), 'row', array("label" => "Nom de l'utilisateur"));
        // line 33
        echo "
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["UserForm"]) ? $context["UserForm"] : $this->getContext($context, "UserForm")), "prenom", array()), 'row', array("label" => "Prenom de l'utilisateur"));
        // line 36
        echo "
                            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["UserForm"]) ? $context["UserForm"] : $this->getContext($context, "UserForm")), "mail", array()), 'row', array("label" => "E-mail de l'utilisateur"));
        // line 39
        echo "
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["UserForm"]) ? $context["UserForm"] : $this->getContext($context, "UserForm")), "numTel", array()), 'row', array("label" => "Numéro de télephone de l'utilisateur"));
        // line 42
        echo "
                            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["UserForm"]) ? $context["UserForm"] : $this->getContext($context, "UserForm")), "dateNaissance", array()), 'row', array("label" => "Date de naissance de l'utilisateur"));
        // line 45
        echo "
                            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["UserForm"]) ? $context["UserForm"] : $this->getContext($context, "UserForm")), "adresse", array()), 'row', array("label" => "Adresse de l'utilisateur"));
        // line 48
        echo "
                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["UserForm"]) ? $context["UserForm"] : $this->getContext($context, "UserForm")), "codePostal", array()), 'row', array("label" => "Code Postal de l'utilisateur"));
        // line 51
        echo "
                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["UserForm"]) ? $context["UserForm"] : $this->getContext($context, "UserForm")), "ville", array()), 'row', array("label" => "Ville de l'utilisateur"));
        // line 54
        echo "
                            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["UserForm"]) ? $context["UserForm"] : $this->getContext($context, "UserForm")), "pays", array()), 'row', array("label" => "Pays de l'utilisateur"));
        // line 57
        echo "
                        </div>
                        <div class=\"col col-md-6\">
                            <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["UserImage"]) ? $context["UserImage"] : $this->getContext($context, "UserImage")), "html", null, true);
        echo "\" style=\"margin: 0 auto;\" class=\"img-responsive\">
                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["UserForm"]) ? $context["UserForm"] : $this->getContext($context, "UserForm")), "photo", array()), 'row', array("label" => "Choisissez une Photo"));
        // line 63
        echo "
                            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["UserForm"]) ? $context["UserForm"] : $this->getContext($context, "UserForm")), "ipCourante", array()), 'row', array("label" => "L'IpCourante de l'utilisateur"));
        // line 66
        echo "
                            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["UserForm"]) ? $context["UserForm"] : $this->getContext($context, "UserForm")), "password", array()), "first", array()), 'row', array("label" => "Le mot de passe de l'utilisateur"));
        // line 69
        echo "
                            ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["UserForm"]) ? $context["UserForm"] : $this->getContext($context, "UserForm")), "password", array()), "second", array()), 'row', array("label" => "Le mot de passe de l'utilisateur"));
        // line 72
        echo "
                            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["UserForm"]) ? $context["UserForm"] : $this->getContext($context, "UserForm")), "username", array()), 'row', array("label" => "L'identifiant de l'utilisateur"));
        // line 75
        echo "
                            <ul class=\"list-group\">
                                ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["UserHistory"]) ? $context["UserHistory"] : $this->getContext($context, "UserHistory")));
        foreach ($context['_seq'] as $context["_key"] => $context["UH"]) {
            // line 78
            echo "                                    <li class=\"list-group-item\">";
            echo twig_escape_filter($this->env, $context["UH"], "html", null, true);
            echo "</li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['UH'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                            </ul>
                        </div>
                    </div>

                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                ";
        // line 86
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["UserForm"]) ? $context["UserForm"] : $this->getContext($context, "UserForm")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_82ee700a4d12a342da2a881489d374fbc39f1110ea79ec7438a5d4d3f1056378->leave($__internal_82ee700a4d12a342da2a881489d374fbc39f1110ea79ec7438a5d4d3f1056378_prof);

        
        $__internal_71cc44cc78761edcc551348e9265609c96e0592703069af69f19c132cc8a4696->leave($__internal_71cc44cc78761edcc551348e9265609c96e0592703069af69f19c132cc8a4696_prof);

    }

    public function getTemplateName()
    {
        return "Admin/AdminEditUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 86,  208 => 80,  199 => 78,  195 => 77,  191 => 75,  189 => 73,  186 => 72,  184 => 70,  181 => 69,  179 => 67,  176 => 66,  174 => 64,  171 => 63,  169 => 61,  165 => 60,  160 => 57,  158 => 55,  155 => 54,  153 => 52,  150 => 51,  148 => 49,  145 => 48,  143 => 46,  140 => 45,  138 => 43,  135 => 42,  133 => 40,  130 => 39,  128 => 37,  125 => 36,  123 => 34,  120 => 33,  118 => 31,  115 => 30,  113 => 28,  106 => 24,  100 => 20,  91 => 19,  73 => 9,  64 => 8,  51 => 4,  42 => 3,  11 => 1,);
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
Utilisateur : {{ UserName }}
{% endblock%}


{% block javascripts %}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js\"></script>
    <script>
        jQuery(document).ready(function () {
            \$('.js-datepicker').datepicker({
                format: 'yyyy-mm-dd',
            });
        });
    </script>
{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h1>Remplir les information necessaire</h1>
                {{ form_start(UserForm,{'attr': {'novalidate': 'novalidate'}}) }}
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col col-md-6\">
                            {{ form_row(UserForm.id, {
                                'label' : \"ID de l'utilisateur\"
                            }) }}
                            {{ form_row(UserForm.nom, {
                                'label' : \"Nom de l'utilisateur\"
                            }) }}
                            {{ form_row(UserForm.prenom, {
                                'label' : \"Prenom de l'utilisateur\"
                            }) }}
                            {{ form_row(UserForm.mail, {
                                'label' : \"E-mail de l'utilisateur\"
                            }) }}
                            {{ form_row(UserForm.numTel, {
                                'label' : \"Numéro de télephone de l'utilisateur\"
                            }) }}
                            {{ form_row(UserForm.dateNaissance, {
                                'label' : \"Date de naissance de l'utilisateur\"
                            }) }}
                            {{ form_row(UserForm.adresse, {
                                'label' : \"Adresse de l'utilisateur\"
                            }) }}
                            {{ form_row(UserForm.codePostal, {
                                'label' : \"Code Postal de l'utilisateur\"
                            }) }}
                            {{ form_row(UserForm.ville, {
                                'label' : \"Ville de l'utilisateur\"
                            }) }}
                            {{ form_row(UserForm.pays, {
                                'label' : \"Pays de l'utilisateur\"
                            }) }}
                        </div>
                        <div class=\"col col-md-6\">
                            <img src=\"{{ UserImage }}\" style=\"margin: 0 auto;\" class=\"img-responsive\">
                            {{ form_row(UserForm.photo, {
                                'label' : \"Choisissez une Photo\"
                            }) }}
                            {{ form_row(UserForm.ipCourante, {
                                'label' : \"L'IpCourante de l'utilisateur\"
                            }) }}
                            {{ form_row(UserForm.password.first, {
                                'label' : \"Le mot de passe de l'utilisateur\"
                            }) }}
                            {{ form_row(UserForm.password.second, {
                                'label' : \"Le mot de passe de l'utilisateur\"
                            }) }}
                            {{ form_row(UserForm.username, {
                                'label' : \"L'identifiant de l'utilisateur\"
                            }) }}
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
{% endblock %}", "Admin/AdminEditUser.html.twig", "E:\\PFAOrigin\\app\\Resources\\views\\Admin\\AdminEditUser.html.twig");
    }
}
