<?php

/* home/home.html.twig */
class __TwigTemplate_859474d28d1763aa73fff40057d626059832c3c38c4bf2bd24c5ef26d877897b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'main' => array($this, 'block_main'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_323418dfd15bed0ef404d3fcbdf11b83b318c2c2cbac0dba4ec06df5f2c057cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_323418dfd15bed0ef404d3fcbdf11b83b318c2c2cbac0dba4ec06df5f2c057cf->enter($__internal_323418dfd15bed0ef404d3fcbdf11b83b318c2c2cbac0dba4ec06df5f2c057cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_903dacb2d8f26e087503959d9a5a71164ac9a5f18821751a2cac5aedf19acf99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903dacb2d8f26e087503959d9a5a71164ac9a5f18821751a2cac5aedf19acf99->enter($__internal_903dacb2d8f26e087503959d9a5a71164ac9a5f18821751a2cac5aedf19acf99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>

<body>
<div class=\"search-bar\">
    <form method=\"GET\" action=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\" class=\"js-sea-search sea-search\" name=\"SearchForm\">
        <input type=\"search\" name=\"searchKey\" placeholder=\"Chercher sur le site\" autocomplete=\"on\" class=\"search-input\">
    </form>
</div>
<header class=\"header\" style=\"display: flex;\">
";
        // line 42
        echo "    <h2 class=\"titleheader\"><b>G</b>arage<b> A</b>uto</h2>
    <ul class=\"navi titleheader\" style=\" display: inline-flex; position: relative; padding: 0.5%;\">
        <li class=\"search\" style=\"padding: 0.3%;\"><a href=\"#\" class=\"js-header-search-toggle\"><i class=\"fa fa-search\"></i></a></li>
        ";
        // line 45
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 46
            echo "            <li style=\"padding-right: 0.6%; padding-bottom: 1%; color: #fff;\" class=\"\"><img src=\"";
            echo twig_escape_filter($this->env, ((("/" . (isset($context["img_dir"]) ? $context["img_dir"] : $this->getContext($context, "img_dir"))) . "/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "photo", array())), "html", null, true);
            echo "\" class=\"img-circle\" style=\"width: 30px; height: 30px;\"></li>
            <li style=\"padding: 0.3%;\"> <a href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_profile");
            echo "\" style=\"color: #fff;\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) ? ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array())) : ("")), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 49
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 50
            echo "            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("secure_logout");
            echo "\" class=\"btn btn-primary btn-full \" style=\"color: #fff;\">Logout</a></li>
        ";
        } else {
            // line 52
            echo "            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("secure_login");
            echo "\" class=\"btn btn-primary btn-full \" style=\"color: #fff;\">Login</a></li>
        ";
        }
        // line 54
        echo "    </ul>
</header>

<div class=\"main-content\">
    ";
        // line 58
        $this->displayBlock('main', $context, $blocks);
        // line 59
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 60
            echo "        <div class=\" alert alert-success\" style=\"margin-bottom: 0;\">
            ";
            // line 61
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "    <div class=\"row\" style=\"padding: 0\">
        ";
        // line 65
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 66
            echo "            <div class=\"col-sm-2 col-md-2 col-lg-2\" style=\"background-color: #333;  min-height: 520px; display: inline-block; padding-right: 0; border:dashed\">
            <ul class=\"nav nav-sidebar\" style=\" padding-top: 3%;\">
                ";
            // line 68
            if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                // line 69
                echo "                    <li class=\"\" style=\"display: inline-flex\">
                        <img src=\"";
                // line 70
                echo twig_escape_filter($this->env, ((("/" . (isset($context["img_dir"]) ? $context["img_dir"] : $this->getContext($context, "img_dir"))) . "/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "photo", array())), "html", null, true);
                echo "\" class=\"img-circle\" style=\"width: 50px; height: 50px; padding: 3%;\">
                    <a href=\"";
                // line 71
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_profile");
                echo "\" style=\"margin: auto; color: whitesmoke;\" class=\"flare\">
                        ";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
                echo "
                    </a>

                   </li>
                ";
            }
            // line 77
            echo "
                <li>
                    <div class=\"input-group darkSidebarInput\" >
                        <input type=\"text\" name=\"q\" class=\"form-control darkSidebarInput\" placeholder=\"Chercher...\" style=\"background-color:#374850; border: 0;\">
                        <span class=\"input-group-btn darkSidebarInput\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat darkSidebarInput\"><i class=\"fa fa-search darkSidebarInput\"></i>
                </button>
              </span>
                    </div>
                </li>
                <li><a href=\"#subTicket\" data-toggle=\"collapse\" style=\"color: whitesmoke;\">Mes Annonces<span class=\"badge pull-right\">";
            // line 87
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "voitures", array())), "html", null, true);
            echo "</span></a></li>
                <li>
                    <div class=\"collapse\" id=\"subTicket\">
                        <ul style=\"background-color: #333\">
                            <li><a style=\"background-color: #333 ; border: 0;color: whitesmoke;\" href=\"";
            // line 91
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_ticket");
            echo "\" class=\"list-group-item btn\">Nouvelle annonce</a></li>
                            <li><a style=\"background-color: #333; border: 0;color: whitesmoke;\" href=\"";
            // line 92
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("all_user_ticket");
            echo "\" class=\"list-group-item btn\">Gérer Mes Annonce</a></li>
                        </ul>
                    </div>
                </li>

            </ul>
            ";
            // line 98
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 99
                echo "            <ul class=\"nav nav-sidebar\">
                <li><a href=\"";
                // line 100
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("car_list");
                echo "\">Toutes les Voitures</a></li>
                <li><a href=\"";
                // line 101
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("users_list");
                echo "\">Tous les Utilisateurs</a></li>
                <li><a href=\"";
                // line 102
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Admin_ticket_list");
                echo "\">Toutes les Annonces</a></li>
                <li><a href=\"";
                // line 103
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_params");
                echo "\">Plus de Paramètres</a></li>
            </ul>
            ";
            }
            // line 106
            echo "        </div>
        ";
        }
        // line 108
        echo "        <div class=\"";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            echo "col-sm-10 col-md-10";
        }
        echo "\"";
        if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            echo " style=\"padding-right: 0.6%; padding-left: 0.6%;\"";
        }
        echo ">
            ";
        // line 109
        $this->displayBlock('body', $context, $blocks);
        // line 110
        echo "        </div>
        </article>
    </div>

</div>

<div class=\"footer\">
    <p class=\"footer-text\">Made with <span class=\"heart\"><3</span> Mansour Med Kadhem & Nabil Khliff</p>
</div>

";
        // line 120
        $this->displayBlock('javascripts', $context, $blocks);
        // line 128
        echo "</body>
</html>
";
        
        $__internal_323418dfd15bed0ef404d3fcbdf11b83b318c2c2cbac0dba4ec06df5f2c057cf->leave($__internal_323418dfd15bed0ef404d3fcbdf11b83b318c2c2cbac0dba4ec06df5f2c057cf_prof);

        
        $__internal_903dacb2d8f26e087503959d9a5a71164ac9a5f18821751a2cac5aedf19acf99->leave($__internal_903dacb2d8f26e087503959d9a5a71164ac9a5f18821751a2cac5aedf19acf99_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_38230535b65d6e352c40effa3076a179a1e1c5d019b7e5c7ca9516753cd81050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38230535b65d6e352c40effa3076a179a1e1c5d019b7e5c7ca9516753cd81050->enter($__internal_38230535b65d6e352c40effa3076a179a1e1c5d019b7e5c7ca9516753cd81050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_10527d1d3df5f16136741721972d2f8914d7dcc79e2966966d440b9796382af5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10527d1d3df5f16136741721972d2f8914d7dcc79e2966966d440b9796382af5->enter($__internal_10527d1d3df5f16136741721972d2f8914d7dcc79e2966966d440b9796382af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "page d'acceuil";
        
        $__internal_10527d1d3df5f16136741721972d2f8914d7dcc79e2966966d440b9796382af5->leave($__internal_10527d1d3df5f16136741721972d2f8914d7dcc79e2966966d440b9796382af5_prof);

        
        $__internal_38230535b65d6e352c40effa3076a179a1e1c5d019b7e5c7ca9516753cd81050->leave($__internal_38230535b65d6e352c40effa3076a179a1e1c5d019b7e5c7ca9516753cd81050_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4c3f3764f173d146ecaf54d0b5bfacdf24c2450a25d372da0053e60754f552e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c3f3764f173d146ecaf54d0b5bfacdf24c2450a25d372da0053e60754f552e6->enter($__internal_4c3f3764f173d146ecaf54d0b5bfacdf24c2450a25d372da0053e60754f552e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ab7806608907d07aa57085e828d5dcfd7e96eb45a1cd00f0240a6ca6aab4fd08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab7806608907d07aa57085e828d5dcfd7e96eb45a1cd00f0240a6ca6aab4fd08->enter($__internal_ab7806608907d07aa57085e828d5dcfd7e96eb45a1cd00f0240a6ca6aab4fd08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/kl_profile_cards.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/fontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/tabs.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.6.8-fix/jquery.nicescroll.min.js\"></script>
    ";
        
        $__internal_ab7806608907d07aa57085e828d5dcfd7e96eb45a1cd00f0240a6ca6aab4fd08->leave($__internal_ab7806608907d07aa57085e828d5dcfd7e96eb45a1cd00f0240a6ca6aab4fd08_prof);

        
        $__internal_4c3f3764f173d146ecaf54d0b5bfacdf24c2450a25d372da0053e60754f552e6->leave($__internal_4c3f3764f173d146ecaf54d0b5bfacdf24c2450a25d372da0053e60754f552e6_prof);

    }

    // line 58
    public function block_main($context, array $blocks = array())
    {
        $__internal_eb6764af3534496c994527422b5f75ad9e021a6cd84da351ccc670bf4b231bc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb6764af3534496c994527422b5f75ad9e021a6cd84da351ccc670bf4b231bc9->enter($__internal_eb6764af3534496c994527422b5f75ad9e021a6cd84da351ccc670bf4b231bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_ac521c03cd395fff5377baca38883f5dc625ca82ba09c640f0ba040d8b0030c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac521c03cd395fff5377baca38883f5dc625ca82ba09c640f0ba040d8b0030c5->enter($__internal_ac521c03cd395fff5377baca38883f5dc625ca82ba09c640f0ba040d8b0030c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_ac521c03cd395fff5377baca38883f5dc625ca82ba09c640f0ba040d8b0030c5->leave($__internal_ac521c03cd395fff5377baca38883f5dc625ca82ba09c640f0ba040d8b0030c5_prof);

        
        $__internal_eb6764af3534496c994527422b5f75ad9e021a6cd84da351ccc670bf4b231bc9->leave($__internal_eb6764af3534496c994527422b5f75ad9e021a6cd84da351ccc670bf4b231bc9_prof);

    }

    // line 109
    public function block_body($context, array $blocks = array())
    {
        $__internal_7635e105f7545444c1f798fb0a82da17af5fb1223119b48c978b81bedb1cbf28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7635e105f7545444c1f798fb0a82da17af5fb1223119b48c978b81bedb1cbf28->enter($__internal_7635e105f7545444c1f798fb0a82da17af5fb1223119b48c978b81bedb1cbf28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_814fe0fed706f9711bbdb3d0014c22e886269cafaf65defc59bf1c66f0171412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_814fe0fed706f9711bbdb3d0014c22e886269cafaf65defc59bf1c66f0171412->enter($__internal_814fe0fed706f9711bbdb3d0014c22e886269cafaf65defc59bf1c66f0171412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_814fe0fed706f9711bbdb3d0014c22e886269cafaf65defc59bf1c66f0171412->leave($__internal_814fe0fed706f9711bbdb3d0014c22e886269cafaf65defc59bf1c66f0171412_prof);

        
        $__internal_7635e105f7545444c1f798fb0a82da17af5fb1223119b48c978b81bedb1cbf28->leave($__internal_7635e105f7545444c1f798fb0a82da17af5fb1223119b48c978b81bedb1cbf28_prof);

    }

    // line 120
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6b46fb4ad952fdec3838f390e5e13413d063a836c57ee73e905b2aebdc331f1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b46fb4ad952fdec3838f390e5e13413d063a836c57ee73e905b2aebdc331f1e->enter($__internal_6b46fb4ad952fdec3838f390e5e13413d063a836c57ee73e905b2aebdc331f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_31a21a97add5bc3cd2a05611ce08e295c4497846572c7f0c3715150392c9cf2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a21a97add5bc3cd2a05611ce08e295c4497846572c7f0c3715150392c9cf2a->enter($__internal_31a21a97add5bc3cd2a05611ce08e295c4497846572c7f0c3715150392c9cf2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 121
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(\".cla\").on('click', function (e) {
            \$(e.target).parent().parent().remove();
        })
    </script>
";
        
        $__internal_31a21a97add5bc3cd2a05611ce08e295c4497846572c7f0c3715150392c9cf2a->leave($__internal_31a21a97add5bc3cd2a05611ce08e295c4497846572c7f0c3715150392c9cf2a_prof);

        
        $__internal_6b46fb4ad952fdec3838f390e5e13413d063a836c57ee73e905b2aebdc331f1e->leave($__internal_6b46fb4ad952fdec3838f390e5e13413d063a836c57ee73e905b2aebdc331f1e_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 121,  338 => 120,  321 => 109,  304 => 58,  287 => 11,  283 => 10,  279 => 9,  274 => 8,  265 => 7,  247 => 5,  235 => 128,  233 => 120,  221 => 110,  219 => 109,  208 => 108,  204 => 106,  198 => 103,  194 => 102,  190 => 101,  186 => 100,  183 => 99,  181 => 98,  172 => 92,  168 => 91,  161 => 87,  149 => 77,  141 => 72,  137 => 71,  133 => 70,  130 => 69,  128 => 68,  124 => 66,  122 => 65,  119 => 64,  110 => 61,  107 => 60,  102 => 59,  100 => 58,  94 => 54,  88 => 52,  82 => 50,  79 => 49,  72 => 47,  67 => 46,  65 => 45,  60 => 42,  52 => 23,  43 => 18,  41 => 7,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>{% block title %}page d'acceuil{% endblock %}</title>

    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/kl_profile_cards.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('vendor/fontawesome/css/font-awesome.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/tabs.css') }}\">

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.6.8-fix/jquery.nicescroll.min.js\"></script>
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>

<body>
<div class=\"search-bar\">
    <form method=\"GET\" action=\"{{ path('search') }}\" class=\"js-sea-search sea-search\" name=\"SearchForm\">
        <input type=\"search\" name=\"searchKey\" placeholder=\"Chercher sur le site\" autocomplete=\"on\" class=\"search-input\">
    </form>
</div>
<header class=\"header\" style=\"display: flex;\">
{#    <div class=\"row\">
       <div class=\"col-sm-2 col-md-2\"><img class=\"logo-icon\" src=\"{{ asset('images/logo2.png') }}\" style=\"padding-right: 1%; position:relative;\"><h1 class=\"logo\">Les Voitures</h1></div>
        <div class=\"col-sm-4 col-md-4 col-sm-offset-6 col-md-offset-6\"><ul class=\"navi\" style=\"display: flex;\">
        <li class=\"search\"><a href=\"#\" class=\"js-header-search-toggle\"><i class=\"fa fa-search\"></i></a></li>
        {% if app.user %}
            <li> <a href=\"{{ path(\"user_profile\", {'id': app.user.id}) }}\">{{ app.user ? app.user.nom : '' }}</a></li>
        {% endif %}
        {% if is_granted('ROLE_USER') %}
            <li><a href=\"{{ path('secure_logout') }}\">Logout</a></li>
        {% else %}
            <li><a href=\"{{ path('secure_login') }}\">Login</a></li>
        {% endif %}
    </ul></div>
    </div>#}
    <h2 class=\"titleheader\"><b>G</b>arage<b> A</b>uto</h2>
    <ul class=\"navi titleheader\" style=\" display: inline-flex; position: relative; padding: 0.5%;\">
        <li class=\"search\" style=\"padding: 0.3%;\"><a href=\"#\" class=\"js-header-search-toggle\"><i class=\"fa fa-search\"></i></a></li>
        {% if app.user %}
            <li style=\"padding-right: 0.6%; padding-bottom: 1%; color: #fff;\" class=\"\"><img src=\"{{ '/'~img_dir ~'/' ~ app.user.photo }}\" class=\"img-circle\" style=\"width: 30px; height: 30px;\"></li>
            <li style=\"padding: 0.3%;\"> <a href=\"{{ path('my_profile') }}\" style=\"color: #fff;\">{{ app.user ? app.user.nom : '' }}</a></li>
        {% endif %}
        {% if is_granted('ROLE_USER') %}
            <li><a href=\"{{ path('secure_logout') }}\" class=\"btn btn-primary btn-full \" style=\"color: #fff;\">Logout</a></li>
        {% else %}
            <li><a href=\"{{ path('secure_login') }}\" class=\"btn btn-primary btn-full \" style=\"color: #fff;\">Login</a></li>
        {% endif %}
    </ul>
</header>

<div class=\"main-content\">
    {% block main %}{% endblock %}
    {% for msg in app.session.flashBag.get('success') %}
        <div class=\" alert alert-success\" style=\"margin-bottom: 0;\">
            {{ msg }}
        </div>
    {% endfor %}
    <div class=\"row\" style=\"padding: 0\">
        {% if app.user %}
            <div class=\"col-sm-2 col-md-2 col-lg-2\" style=\"background-color: #333;  min-height: 520px; display: inline-block; padding-right: 0; border:dashed\">
            <ul class=\"nav nav-sidebar\" style=\" padding-top: 3%;\">
                {% if app.user %}
                    <li class=\"\" style=\"display: inline-flex\">
                        <img src=\"{{ '/'~img_dir ~'/' ~ app.user.photo }}\" class=\"img-circle\" style=\"width: 50px; height: 50px; padding: 3%;\">
                    <a href=\"{{ path('my_profile') }}\" style=\"margin: auto; color: whitesmoke;\" class=\"flare\">
                        {{ app.user.nom }}
                    </a>

                   </li>
                {% endif %}

                <li>
                    <div class=\"input-group darkSidebarInput\" >
                        <input type=\"text\" name=\"q\" class=\"form-control darkSidebarInput\" placeholder=\"Chercher...\" style=\"background-color:#374850; border: 0;\">
                        <span class=\"input-group-btn darkSidebarInput\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat darkSidebarInput\"><i class=\"fa fa-search darkSidebarInput\"></i>
                </button>
              </span>
                    </div>
                </li>
                <li><a href=\"#subTicket\" data-toggle=\"collapse\" style=\"color: whitesmoke;\">Mes Annonces<span class=\"badge pull-right\">{{app.user.voitures|length }}</span></a></li>
                <li>
                    <div class=\"collapse\" id=\"subTicket\">
                        <ul style=\"background-color: #333\">
                            <li><a style=\"background-color: #333 ; border: 0;color: whitesmoke;\" href=\"{{ path('new_ticket') }}\" class=\"list-group-item btn\">Nouvelle annonce</a></li>
                            <li><a style=\"background-color: #333; border: 0;color: whitesmoke;\" href=\"{{ path('all_user_ticket') }}\" class=\"list-group-item btn\">Gérer Mes Annonce</a></li>
                        </ul>
                    </div>
                </li>

            </ul>
            {% if is_granted('ROLE_ADMIN') %}
            <ul class=\"nav nav-sidebar\">
                <li><a href=\"{{ path('car_list') }}\">Toutes les Voitures</a></li>
                <li><a href=\"{{ path('users_list') }}\">Tous les Utilisateurs</a></li>
                <li><a href=\"{{ path('Admin_ticket_list') }}\">Toutes les Annonces</a></li>
                <li><a href=\"{{ path('admin_params') }}\">Plus de Paramètres</a></li>
            </ul>
            {% endif %}
        </div>
        {% endif %}
        <div class=\"{% if app.user  %}col-sm-10 col-md-10{% endif %}\"{% if not app.user %} style=\"padding-right: 0.6%; padding-left: 0.6%;\"{% endif %}>
            {% block body %}{% endblock %}
        </div>
        </article>
    </div>

</div>

<div class=\"footer\">
    <p class=\"footer-text\">Made with <span class=\"heart\"><3</span> Mansour Med Kadhem & Nabil Khliff</p>
</div>

{% block javascripts %}
    <script src=\"{{ asset('js/main.js') }}\"></script>
    <script>
        \$(\".cla\").on('click', function (e) {
            \$(e.target).parent().parent().remove();
        })
    </script>
{% endblock %}
</body>
</html>
", "home/home.html.twig", "E:\\PFAOrigin\\app\\Resources\\views\\home\\home.html.twig");
    }
}
