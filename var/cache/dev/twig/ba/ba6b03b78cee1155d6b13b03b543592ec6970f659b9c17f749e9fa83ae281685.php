<?php

/* home/homepage.html.twig */
class __TwigTemplate_af767633ef40f6a3e06f5141c3da8a998f0d9761c7d60e557ef2cb1e558faeb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home/home.html.twig", "home/homepage.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'main' => array($this, 'block_main'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "home/home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c9e879a18a62237d3495fe86b04d69f37e4ea86e740b544c9e3f7aecb13abe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c9e879a18a62237d3495fe86b04d69f37e4ea86e740b544c9e3f7aecb13abe0->enter($__internal_0c9e879a18a62237d3495fe86b04d69f37e4ea86e740b544c9e3f7aecb13abe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/homepage.html.twig"));

        $__internal_1f3436c8262622510e57e5a1fb9d25bb2b36e5bf011dec8058912f4bb9800e92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f3436c8262622510e57e5a1fb9d25bb2b36e5bf011dec8058912f4bb9800e92->enter($__internal_1f3436c8262622510e57e5a1fb9d25bb2b36e5bf011dec8058912f4bb9800e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c9e879a18a62237d3495fe86b04d69f37e4ea86e740b544c9e3f7aecb13abe0->leave($__internal_0c9e879a18a62237d3495fe86b04d69f37e4ea86e740b544c9e3f7aecb13abe0_prof);

        
        $__internal_1f3436c8262622510e57e5a1fb9d25bb2b36e5bf011dec8058912f4bb9800e92->leave($__internal_1f3436c8262622510e57e5a1fb9d25bb2b36e5bf011dec8058912f4bb9800e92_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_794c80abadf2e4be457035f0dc69afb84c4a1a077410169aed2b571c38603d2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_794c80abadf2e4be457035f0dc69afb84c4a1a077410169aed2b571c38603d2e->enter($__internal_794c80abadf2e4be457035f0dc69afb84c4a1a077410169aed2b571c38603d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d79011443ebfc237957a0712c9d905125a658153caf5dc2f78880649b77e872e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d79011443ebfc237957a0712c9d905125a658153caf5dc2f78880649b77e872e->enter($__internal_d79011443ebfc237957a0712c9d905125a658153caf5dc2f78880649b77e872e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Garage Auto
";
        
        $__internal_d79011443ebfc237957a0712c9d905125a658153caf5dc2f78880649b77e872e->leave($__internal_d79011443ebfc237957a0712c9d905125a658153caf5dc2f78880649b77e872e_prof);

        
        $__internal_794c80abadf2e4be457035f0dc69afb84c4a1a077410169aed2b571c38603d2e->leave($__internal_794c80abadf2e4be457035f0dc69afb84c4a1a077410169aed2b571c38603d2e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d51151af49fca2cecab84427073ba4ffe62cabe07cd27ed8b8e5f2a4cf472a25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d51151af49fca2cecab84427073ba4ffe62cabe07cd27ed8b8e5f2a4cf472a25->enter($__internal_d51151af49fca2cecab84427073ba4ffe62cabe07cd27ed8b8e5f2a4cf472a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f56609f15aa3297d42f20babf154c13edc30fba7aeebd25634eb960dfdc6704b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f56609f15aa3297d42f20babf154c13edc30fba7aeebd25634eb960dfdc6704b->enter($__internal_f56609f15aa3297d42f20babf154c13edc30fba7aeebd25634eb960dfdc6704b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/carouselhomePage.css"), "html", null, true);
        echo "\">
";
        
        $__internal_f56609f15aa3297d42f20babf154c13edc30fba7aeebd25634eb960dfdc6704b->leave($__internal_f56609f15aa3297d42f20babf154c13edc30fba7aeebd25634eb960dfdc6704b_prof);

        
        $__internal_d51151af49fca2cecab84427073ba4ffe62cabe07cd27ed8b8e5f2a4cf472a25->leave($__internal_d51151af49fca2cecab84427073ba4ffe62cabe07cd27ed8b8e5f2a4cf472a25_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5f476a22fd66d7b4297ba33bca44d7d83461217ed1142b2cdf62f82f9399bf3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f476a22fd66d7b4297ba33bca44d7d83461217ed1142b2cdf62f82f9399bf3d->enter($__internal_5f476a22fd66d7b4297ba33bca44d7d83461217ed1142b2cdf62f82f9399bf3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9b1da944a270a4894d36c05811a7d184ec651cc5e04984e2ff76be9019fecf37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b1da944a270a4894d36c05811a7d184ec651cc5e04984e2ff76be9019fecf37->enter($__internal_9b1da944a270a4894d36c05811a7d184ec651cc5e04984e2ff76be9019fecf37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/Dropdownselect.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$(\"#PanelSearch\").niceScroll();
            \$(\"#recentSearch\").niceScroll();
        })
        \$('#radioBtn a').on('click', function(){
            var sel = \$(this).data('title');
            var tog = \$(this).data('toggle');
            console.log(sel , '  ',tog)
            \$('#'+tog).prop('value', sel);

            \$('a[data-toggle=\"'+tog+'\"]').not('[data-title=\"'+sel+'\"]').removeClass('active').addClass('notActive').css(\"background-color\", \"\");
            \$('a[data-toggle=\"'+tog+'\"][data-title=\"'+sel+'\"]').removeClass('notActive').addClass('active').css(\"background-color\", \"#3c8dbc\");
        })
    </script>
";
        
        $__internal_9b1da944a270a4894d36c05811a7d184ec651cc5e04984e2ff76be9019fecf37->leave($__internal_9b1da944a270a4894d36c05811a7d184ec651cc5e04984e2ff76be9019fecf37_prof);

        
        $__internal_5f476a22fd66d7b4297ba33bca44d7d83461217ed1142b2cdf62f82f9399bf3d->leave($__internal_5f476a22fd66d7b4297ba33bca44d7d83461217ed1142b2cdf62f82f9399bf3d_prof);

    }

    // line 30
    public function block_main($context, array $blocks = array())
    {
        $__internal_3c2415a7298c7236bc440df20c1e08a9f98b0d64b3271e86ab44b4649a2ab8e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c2415a7298c7236bc440df20c1e08a9f98b0d64b3271e86ab44b4649a2ab8e2->enter($__internal_3c2415a7298c7236bc440df20c1e08a9f98b0d64b3271e86ab44b4649a2ab8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_badec509b461b9ef1160c26bf75a81ef330d16ea0cf0e4aa4e3326505c552445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_badec509b461b9ef1160c26bf75a81ef330d16ea0cf0e4aa4e3326505c552445->enter($__internal_badec509b461b9ef1160c26bf75a81ef330d16ea0cf0e4aa4e3326505c552445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 31
        echo "    ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && array_key_exists("notifications", $context))) {
            // line 32
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) ? $context["notifications"] : $this->getContext($context, "notifications")));
            foreach ($context['_seq'] as $context["key"] => $context["notif"]) {
                // line 33
                echo "            <div class=\"alert alert-info\" style=\"margin-bottom: 0;\">
                ";
                // line 34
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "  : ";
                echo twig_escape_filter($this->env, $context["notif"], "html", null, true);
                echo "
                <button type=\"button\" class=\"close cla\"  aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['notif'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "    ";
        }
        
        $__internal_badec509b461b9ef1160c26bf75a81ef330d16ea0cf0e4aa4e3326505c552445->leave($__internal_badec509b461b9ef1160c26bf75a81ef330d16ea0cf0e4aa4e3326505c552445_prof);

        
        $__internal_3c2415a7298c7236bc440df20c1e08a9f98b0d64b3271e86ab44b4649a2ab8e2->leave($__internal_3c2415a7298c7236bc440df20c1e08a9f98b0d64b3271e86ab44b4649a2ab8e2_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e2ec51c229282bdd3709a9711dc9ce6816b6a5aa0bb0ae6c526f8982f8943f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e2ec51c229282bdd3709a9711dc9ce6816b6a5aa0bb0ae6c526f8982f8943f2->enter($__internal_7e2ec51c229282bdd3709a9711dc9ce6816b6a5aa0bb0ae6c526f8982f8943f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6ffadddbd1daf4da24389824ddcc9c5b2f7bc1c6fbb85462a292294200288c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ffadddbd1daf4da24389824ddcc9c5b2f7bc1c6fbb85462a292294200288c48->enter($__internal_6ffadddbd1daf4da24389824ddcc9c5b2f7bc1c6fbb85462a292294200288c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "
";
        // line 70
        echo "    <div class=\"modal fade\" id=\"enlargeImageModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"enlargeImageModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                </div>
                <div class=\"modal-body\">
                    <img src=\"\" class=\"enlargeImageModalSource\" style=\"width: 100%;\">
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"ComparingModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ComparringModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h4 class=\"pull-left\">Veillez Remplir les informations relatives à la comparaison</h4>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                </div>
                <div class=\"modal-body\">
                    <form method=\"get\" action=\"/Compare\" name=\"compareform\">
                        <div class=\"row\" style=\"padding: 0.2%;\">
                            <div class=\"col-md-6 col-lg-6 col-xs-12 col-sm-6\">
                                <h4>Les information suivante doivent être remplises</h4>
                                <ul class=\"list-group\">
                                    <li class=\"list-group-item\">
                                        <div class=\"input-group\">
                                            <span class=\"input-group-addon fa fa-car\" style=\"\"></span>
                                            <input type=\"number\" value=\"\" id=\"carID\" name=\"carID\" required class=\"form-control btn-group-sm\" style=\"border-radius:  0; width: 100%;\" placeholder=\"Taper l'Identifiant de la voiture\">
                                        </div>

                                    </li>
                                    <li class=\"list-group-item\">
                                        <div class=\"form-group\" style=\"margin-bottom: 0;\">
                                            <div class=\"row\" style=\"padding: 0;\">
                                                <label for=\"happy\" class=\"col-sm-6 col-md-6 control-label text-right\">Comparer suivant le Prix ?</label>
                                                <div class=\"col-sm-6 col-md-6\">
                                                    <div class=\"input-group\">
                                                        <div id=\"radioBtn\" class=\"btn-group\" style=\"border-radius: 0;\">
                                                            <a class=\"btn btn-primary btn-sm active\" style=\"background-color: #3c8dbc ;border-radius: 0;\" data-toggle=\"prix\" data-title=\"Y\">Oui</a>
                                                            <a class=\"btn btn-primary btn-sm notActive\" style=\"border-radius: 0;\" data-toggle=\"prix\" data-title=\"N\">Non</a>
                                                        </div>
                                                        <input type=\"hidden\" name=\"prix\" id=\"prix\" value=\"Y\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"list-group-item\">
                                        <div class=\"form-group\" style=\"margin-bottom: 0;\">
                                            <div class=\"row\" style=\"padding: 0;\">
                                                <label for=\"happy\" class=\"col-sm-6 col-md-6 control-label text-right\">Comparer suivant La date de commerce ?</label>
                                                <div class=\"col-sm-6 col-md-6\">
                                                    <div class=\"input-group\">
                                                        <div id=\"radioBtn\" class=\"btn-group\" style=\"border-radius: 0;\">
                                                            <a class=\"btn btn-primary btn-sm active\"  style=\"background-color: #3c8dbc;border-radius: 0;\" data-toggle=\"DC\" data-title=\"Y\">Oui</a>
                                                            <a class=\"btn btn-primary btn-sm notActive\" style=\"border-radius: 0;\" data-toggle=\"DC\" data-title=\"N\">Non</a>
                                                        </div>
                                                        <input type=\"hidden\" name=\"DC\" id=\"DC\" value=\"Y\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <button type=\"submit\" class=\"btn btn-primary btn\" aria-label=\"Left Align\" style=\"text-align: center; border-radius: 0;\">
                                    <span class=\"glyphicon glyphicon-check\" aria-hidden=\"true\" ></span> Comparer
                                </button>
                            </div>
                            <div class=\"col-md-6 col-lg-6 col-xs-12 col-sm-6\" style=\"height: 300px; overflow-y: scroll\" id=\"recentSearch\">
                                <h4>Les voitures Récements recherchées</h4>
                                <div class=\"row\" style=\"padding: 2px;\">
                                    ";
        // line 142
        if (((array_key_exists("SearchDeals", $context) && ((isset($context["SearchDeals"]) ? $context["SearchDeals"] : $this->getContext($context, "SearchDeals")) != array())) || (array_key_exists("SearchUsers", $context) && ((isset($context["SearchUsers"]) ? $context["SearchUsers"] : $this->getContext($context, "SearchUsers")) != array())))) {
            // line 143
            echo "                                        ";
            if ((array_key_exists("SearchDeals", $context) && ((isset($context["SearchDeals"]) ? $context["SearchDeals"] : $this->getContext($context, "SearchDeals")) != array()))) {
                // line 144
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["SearchDeals"]) ? $context["SearchDeals"] : $this->getContext($context, "SearchDeals")));
                foreach ($context['_seq'] as $context["_key"] => $context["deal"]) {
                    // line 145
                    echo "                                                <div class=\"col-md-3 col-lg-2 col-sm-2\" style=\"padding: 0;margin: 1px;\">
                                                    <div class=\"card\" style=\"\">
                                                        <div class=\"\">
                                                            <img class=\"img-responsive\"  style=\"height: 50px;\" src=\"";
                    // line 148
                    echo twig_escape_filter($this->env, ((isset($context["cursrc"]) ? $context["cursrc"] : $this->getContext($context, "cursrc")) . $this->getAttribute($this->getAttribute($context["deal"], "voiture", array()), "photo", array())), "html", null, true);
                    echo "\"/>
                                                        </div>
                                                        <div class=\"card-read-more\">
                                                            ";
                    // line 151
                    echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["deal"], "nom", array()), 0, 6), "html", null, true);
                    echo "<br>
                                                            ID : ";
                    // line 152
                    echo twig_escape_filter($this->env, $this->getAttribute($context["deal"], "id", array()), "html", null, true);
                    echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deal'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 157
                echo "                                        ";
            }
            // line 158
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bestdeal"]) ? $context["bestdeal"] : $this->getContext($context, "bestdeal")));
            foreach ($context['_seq'] as $context["_key"] => $context["deal"]) {
                if (!twig_in_filter($context["deal"], (isset($context["SearchDeals"]) ? $context["SearchDeals"] : $this->getContext($context, "SearchDeals")))) {
                    // line 159
                    echo "                                            <div class=\"col-md-3 col-lg-2 col-sm-2\">
                                                <div class=\"card\">
                                                    <div class=\"img-card\">
                                                        <img src=\"";
                    // line 162
                    echo twig_escape_filter($this->env, ((isset($context["cursrc"]) ? $context["cursrc"] : $this->getContext($context, "cursrc")) . $this->getAttribute($this->getAttribute($context["deal"], "voiture", array()), "photo", array())), "html", null, true);
                    echo "\"/>
                                                    </div>
                                                    <div class=\"card-content\">
                                                        <h4 class=\"card-title\">
                                                            ";
                    // line 166
                    echo twig_escape_filter($this->env, $this->getAttribute($context["deal"], "nom", array()), "html", null, true);
                    echo "
                                                        </h4>
                                                    </div>
                                                    <div class=\"card-read-more\">
                                                        ID : ";
                    // line 170
                    echo twig_escape_filter($this->env, $this->getAttribute($context["deal"], "id", array()), "html", null, true);
                    echo "
                                                    </div>
                                                </div>
                                            </div>
                                        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "                                    ";
        }
        // line 176
        echo "                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <section class=\"tab-content\">
        <section class=\"tab-pane active fade in content\" id=\"dashboard\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-9\">
                    ";
        // line 188
        if (((array_key_exists("SearchDeals", $context) && ((isset($context["SearchDeals"]) ? $context["SearchDeals"] : $this->getContext($context, "SearchDeals")) != array())) || (array_key_exists("SearchUsers", $context) && ((isset($context["SearchUsers"]) ? $context["SearchUsers"] : $this->getContext($context, "SearchUsers")) != array())))) {
            // line 189
            echo "                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading clearfix\">
                                <h4 class=\"pull-left\">Le Résultats de votre recherche</h4>
                                <div class=\"btn-group pull-right\">
                                    ";
            // line 194
            echo "                                </div>
                            </div>
                            <div class=\"panel-body\" id=\"PanelSearch\" style=\"margin: 0  ;overflow-y: scroll ; height: 600px;\">
                                <div class=\"row\" style=\"padding-top: 0; padding-left: 0;padding-right: 0;\">
                                    ";
            // line 198
            if (((isset($context["SearchDeals"]) ? $context["SearchDeals"] : $this->getContext($context, "SearchDeals")) != array())) {
                // line 199
                echo "                                        <div class=\"alert-info\" style=\"padding: 1%;\">
                                            Annonces
                                        </div>
                                    ";
                // line 202
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["SearchDeals"]) ? $context["SearchDeals"] : $this->getContext($context, "SearchDeals")));
                foreach ($context['_seq'] as $context["_key"] => $context["deal"]) {
                    // line 203
                    echo "                                        <div class=\"col-md-3 col-sm-6 col-xs-12\" style=\"padding: 0.5%; \">
                                            <div class=\"card\">
                                                <div class=\"img-card\">
                                                    <img src=\"";
                    // line 206
                    echo twig_escape_filter($this->env, ((isset($context["cursrc"]) ? $context["cursrc"] : $this->getContext($context, "cursrc")) . $this->getAttribute($this->getAttribute($context["deal"], "voiture", array()), "photo", array())), "html", null, true);
                    echo "\"/>
                                                </div>
                                                <div class=\"card-content\">
                                                    <h4 class=\"card-title\">
                                                        ";
                    // line 210
                    echo twig_escape_filter($this->env, $this->getAttribute($context["deal"], "nom", array()), "html", null, true);
                    echo "
                                                    </h4>
                                                </div>
                                                <div class=\"card-read-more\">
                                                    <a class=\"btn btn-outline-primary\" href=\"";
                    // line 214
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_ticket", array("id" => $this->getAttribute($context["deal"], "id", array()))), "html", null, true);
                    echo "\">
                                                        Plus d'information <i class=\"fa fa-arrow-circle-right\"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deal'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 221
                echo "                                ";
            }
            // line 222
            echo "
                                    ";
            // line 223
            if ((array_key_exists("SearchUsers", $context) && ((isset($context["SearchUsers"]) ? $context["SearchUsers"] : $this->getContext($context, "SearchUsers")) != array()))) {
                // line 224
                echo "                                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"margin: 0;\">
                                            <div class=\"alert-info\" style=\"padding: 1%;\">
                                                Utilisateurs
                                            </div>
                                        </div>
                                        ";
                // line 229
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["SearchUsers"]) ? $context["SearchUsers"] : $this->getContext($context, "SearchUsers")));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 230
                    echo "                                            <div class=\"col-md-3 col-sm-6 col-xs-12\" style=\"padding: 0.5%; \">
                                                <div class=\"card\">
                                                    <div class=\"img-card\">
                                                        <img src=\"";
                    // line 233
                    echo twig_escape_filter($this->env, ((isset($context["cursrc"]) ? $context["cursrc"] : $this->getContext($context, "cursrc")) . $this->getAttribute($context["user"], "photo", array())), "html", null, true);
                    echo "\"/>
                                                    </div>
                                                    <div class=\"card-read-more\" style=\"text-align: center\">
                                                        <a class=\"btn btn-outline-primary\" href=\"";
                    // line 236
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                    echo "\">
                                                            ";
                    // line 237
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
                    echo " <i class=\"fa fa-arrow-circle-right\"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 243
                echo "                                    ";
            }
            // line 244
            echo "                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 248
        echo "                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading clearfix\">
                            <h4 class=\"pull-left\">Les dernières Annonces</h4>
                            <div class=\"btn-group pull-right\">
                                <a href=\"";
        // line 252
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_aprove_all");
        echo "\" class=\"btn btn-primary btn-sm fa fa-check-square fa-3x\">   Voir Toutes les Annonces</a>
                            </div>
                        </div>
                        <div class=\"panel-body\" style=\"margin: 0\">
                            <div class=\"row\" style=\"padding-top: 0; padding-left: 0;padding-right: 0\">
                                ";
        // line 257
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bestdeal"]) ? $context["bestdeal"] : $this->getContext($context, "bestdeal")));
        foreach ($context['_seq'] as $context["_key"] => $context["deal"]) {
            // line 258
            echo "                                    <div class=\"col-md-3 col-sm-6 col-xs-12\" style=\"padding: 0.5%; \">
                                        <div class=\"card\">
                                            <div class=\"img-card\">
                                                <img src=\"";
            // line 261
            echo twig_escape_filter($this->env, ((isset($context["cursrc"]) ? $context["cursrc"] : $this->getContext($context, "cursrc")) . $this->getAttribute($this->getAttribute($context["deal"], "voiture", array()), "photo", array())), "html", null, true);
            echo "\"/>
                                            </div>
                                            <div class=\"card-content\">
                                                <h4 class=\"card-title\">
                                                    ";
            // line 265
            echo twig_escape_filter($this->env, $this->getAttribute($context["deal"], "nom", array()), "html", null, true);
            echo "
                                                </h4>
                                                <div class=\"\">
                                                    <table class=\"table table-striped\">
                                                        <tr><td>";
            // line 269
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["deal"], "voiture", array()), "utilisateur", array()), "ville", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["deal"], "voiture", array()), "utilisateur", array()), "ville", array())) : ("")), "html", null, true);
            echo "</td></tr>
                                                        <tr><td>";
            // line 270
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["deal"], "voiture", array()), "ficheTech", array()), "dateCommerce", array())) ? (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["deal"], "voiture", array()), "ficheTech", array()), "dateCommerce", array()), "y/m/d")) : ("date commerce non spécifiée")), "html", null, true);
            echo "</td></tr>
                                                        <tr><td>";
            // line 271
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["deal"], "voiture", array()), "ficheTech", array()), "carburant", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["deal"], "voiture", array()), "ficheTech", array()), "dateCommerce", array())) : ("Carburant non spécifié")), "html", null, true);
            echo "</td></tr>
                                                        <tr><td> Prix demandée : ";
            // line 272
            echo twig_escape_filter($this->env, $this->getAttribute($context["deal"], "prix", array()), "html", null, true);
            echo "</td></tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class=\"card-read-more\">
                                                <a class=\"btn btn-outline-primary\" href=\"";
            // line 277
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_ticket", array("id" => $this->getAttribute($context["deal"], "id", array()))), "html", null, true);
            echo "\">
                                                    Plus d'information <i class=\"fa fa-arrow-circle-right\"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
        echo "                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-12 col-sm-3\" style=\"padding: 0; padding-right: 1%;\">
                    <div class=\"panel panel-primary\" style=\"border: none; padding: 0\">
                        <div class=\"panel-body\" style=\"background-color: #00c0ef; margin: 0 ; padding-top: 0; padding-bottom: 0\">
                            <div class=\"row\" style=\"\">
                                <div class=\"col-md-6\" style=\"padding-right: 3.5%; \">
                                    <h2 class=\"\" style=\"font-size: 3.8rem; color:rgba(255,255,255,0.6); text-align: center\">30</h2>
                                    <p style=\"font-size: 1.3rem; text-align: center; margin: auto;padding-bottom: 2% ;color:#FFFFFF;\">Comparaison faite ce mois</p>
                                </div>
                                <div class=\"col-md-6\" style=\"padding-right: 3.5%; padding-top: 3.5%;\">
                                    <i class=\"fa fa-car fa-5x \" style=\"color:rgba(255,255,255,0.37); margin-left: 25%; margin-right: 5%;margin-top: 10%; \"></i>
                                </div>
                                <div class=\"col-md-12\" style=\"margin: 0; padding: 1%;\">
                                    <a style=\"width: 100%; height: auto; background-color:#00add8; text-align: center; display: block; color: rgba(255,255,255,0.8)\" class=\"btn btn-sm\" id=\"compare\">Comparer Des voitures  <i class=\"fa fa-arrow-circle-right\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Recherche Profonde
                        </div>
                        <div class=\"panel-body\">
                            <form class=\"\" name=\"DeepSearch\" method=\"GET\" action=\"/DeepSearch\">
                                <h4>Recherche par budget</h4>
                                <div class=\"btn-group\" data-toggle=\"buttons\">
                                    <div class=\"row\" style=\"padding-top: 0.5%; margin-top: 0.5%;\">
                                        <div class=\"col-md-6 col-lg-6\" style=\"padding: 0; padding-left: 1%; border-radius: 0;\">
                                            <div class=\"input-group input-group-sm\">
                                                <span class=\"input-group-addon\" id=\"sizing-addon1\" style=\"border-radius: 0;\">Entre</span>
                                                <input type=\"text\" name=\"Price1\" class=\"form-control\" placeholder=\"prix de départ\" aria-describedby=\"sizing-addon1\" style=\"border-radius: 0;\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-6\" >
                                            <div class=\"input-group input-group-sm\" style=\"padding: 0; padding-left: 1%; border-radius: 0;\" >
                                                <span class=\"input-group-addon\" id=\"sizing-addon1\" style=\"border-radius: 0;\">Et</span>
                                                <input type=\"text\" class=\"form-control\" name=\"Price2\" placeholder=\"limite de prix\" aria-describedby=\"sizing-addon1\" style=\"border-radius: 0;\">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div>
                                    <h4>Recherche Par constructeur</h4>
                                    <a class=\"btn btn-default btn-select\">
                                        <input type=\"hidden\" class=\"btn-select-input\" id=\"manufac\" name=\"manufac\" value=\"\" />
                                        <span class=\"btn-select-value\">Select an Item</span>
                                        <span class='btn-select-arrow glyphicon glyphicon-chevron-down' style=\"margin: auto\"></span>
                                        <ul>
                                            <li class=\"selected\">";
        // line 336
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["manufacturers"]) ? $context["manufacturers"] : $this->getContext($context, "manufacturers")), 0, array(), "array"), "nom", array()), "html", null, true);
        echo "</li>
                                            ";
        // line 337
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["manufacturers"]) ? $context["manufacturers"] : $this->getContext($context, "manufacturers")), 1, null));
        foreach ($context['_seq'] as $context["_key"] => $context["man"]) {
            // line 338
            echo "                                                <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["man"], "nom", array()), "html", null, true);
            echo "</li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['man'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 340
        echo "                                        </ul>
                                    </a>
                                </div>
                                <div style=\"padding: 0;\">
                                    <h4>Recherche Par Mot clef</h4>
                                    <table class=\"table table-striped\" style=\"width: auto\">
                                        <tr >
                                            <td>Carburant</td>
                                            <td><input name=\"carburant\" type=\"text\" style=\"border-radius: 0;\"></td>
                                        </tr>
                                        <tr>
                                            <td>Puissance fiscale</td>
                                            <td><input name=\"Pf\" type=\"text\" style=\"border-radius: 0;\"></td>
                                        </tr>
                                        <tr>
                                            <td>Consommation urbaine</td>
                                            <td><input name=\"ConsUrbaine\" type=\"text\" style=\"border-radius: 0;\"></td>
                                        </tr>
                                        <tr>
                                            <td>Max Révision</td>
                                            <td><input name=\"MaxRev\" type=\"text\" style=\"border-radius: 0;\"></td>
                                        </tr>
                                    </table>
                                </div>
                                <div style=\"width: 100%;\">
                                    <a onclick=\"\$(this).closest('form').submit()\" style=\"width: 100%; height: auto; background-color:#00add8; text-align: center; display: block; color: rgba(255,255,255,0.8); border-radius: 0\" class=\"btn btn-sm\">Effectuer la recherche  <i class=\"fa fa-search\"></i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                    ";
        // line 378
        echo "                </div>
            </div>

        </section>

        <section class=\"tab-pane fade\" id=\"configuration\">
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

        </section>

    </section>



    ";
        
        $__internal_6ffadddbd1daf4da24389824ddcc9c5b2f7bc1c6fbb85462a292294200288c48->leave($__internal_6ffadddbd1daf4da24389824ddcc9c5b2f7bc1c6fbb85462a292294200288c48_prof);

        
        $__internal_7e2ec51c229282bdd3709a9711dc9ce6816b6a5aa0bb0ae6c526f8982f8943f2->leave($__internal_7e2ec51c229282bdd3709a9711dc9ce6816b6a5aa0bb0ae6c526f8982f8943f2_prof);

    }

    public function getTemplateName()
    {
        return "home/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  638 => 378,  606 => 340,  597 => 338,  593 => 337,  589 => 336,  535 => 284,  522 => 277,  514 => 272,  510 => 271,  506 => 270,  502 => 269,  495 => 265,  488 => 261,  483 => 258,  479 => 257,  471 => 252,  465 => 248,  459 => 244,  456 => 243,  444 => 237,  440 => 236,  434 => 233,  429 => 230,  425 => 229,  418 => 224,  416 => 223,  413 => 222,  410 => 221,  397 => 214,  390 => 210,  383 => 206,  378 => 203,  374 => 202,  369 => 199,  367 => 198,  361 => 194,  355 => 189,  353 => 188,  339 => 176,  336 => 175,  324 => 170,  317 => 166,  310 => 162,  305 => 159,  299 => 158,  296 => 157,  285 => 152,  281 => 151,  275 => 148,  270 => 145,  265 => 144,  262 => 143,  260 => 142,  186 => 70,  183 => 41,  174 => 40,  163 => 38,  151 => 34,  148 => 33,  143 => 32,  140 => 31,  131 => 30,  104 => 13,  99 => 12,  90 => 11,  78 => 9,  73 => 8,  64 => 7,  53 => 5,  44 => 4,  11 => 1,);
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
Garage Auto
{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/carouselhomePage.css') }}\">
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('js/Dropdownselect.js') }}\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$(\"#PanelSearch\").niceScroll();
            \$(\"#recentSearch\").niceScroll();
        })
        \$('#radioBtn a').on('click', function(){
            var sel = \$(this).data('title');
            var tog = \$(this).data('toggle');
            console.log(sel , '  ',tog)
            \$('#'+tog).prop('value', sel);

            \$('a[data-toggle=\"'+tog+'\"]').not('[data-title=\"'+sel+'\"]').removeClass('active').addClass('notActive').css(\"background-color\", \"\");
            \$('a[data-toggle=\"'+tog+'\"][data-title=\"'+sel+'\"]').removeClass('notActive').addClass('active').css(\"background-color\", \"#3c8dbc\");
        })
    </script>
{% endblock %}
{% block main %}
    {% if app.user and  notifications is defined %}
        {% for key, notif in notifications %}
            <div class=\"alert alert-info\" style=\"margin-bottom: 0;\">
                {{ key }}  : {{ notif }}
                <button type=\"button\" class=\"close cla\"  aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
            </div>
        {% endfor %}
    {% endif %}
{% endblock %}
{% block body %}

{#   <h1> {{ app.user ? app.user.nom : \"Anonymous\"  }} </h1>
    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
        </ol>

        <div class=\"carousel-inner\" role=\"listbox\">
            <div class=\"item active\">
                <img src={{ asset( Cars[0].photo) }} >
            </div>
            {% for car in Cars %}
                <div class=\"item\">
                    <img src={{ asset( car.photo) }}>
                </div>
            {% endfor %}
        </div>

        <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
            <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
            <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>#}
    <div class=\"modal fade\" id=\"enlargeImageModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"enlargeImageModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                </div>
                <div class=\"modal-body\">
                    <img src=\"\" class=\"enlargeImageModalSource\" style=\"width: 100%;\">
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"ComparingModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ComparringModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h4 class=\"pull-left\">Veillez Remplir les informations relatives à la comparaison</h4>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                </div>
                <div class=\"modal-body\">
                    <form method=\"get\" action=\"/Compare\" name=\"compareform\">
                        <div class=\"row\" style=\"padding: 0.2%;\">
                            <div class=\"col-md-6 col-lg-6 col-xs-12 col-sm-6\">
                                <h4>Les information suivante doivent être remplises</h4>
                                <ul class=\"list-group\">
                                    <li class=\"list-group-item\">
                                        <div class=\"input-group\">
                                            <span class=\"input-group-addon fa fa-car\" style=\"\"></span>
                                            <input type=\"number\" value=\"\" id=\"carID\" name=\"carID\" required class=\"form-control btn-group-sm\" style=\"border-radius:  0; width: 100%;\" placeholder=\"Taper l'Identifiant de la voiture\">
                                        </div>

                                    </li>
                                    <li class=\"list-group-item\">
                                        <div class=\"form-group\" style=\"margin-bottom: 0;\">
                                            <div class=\"row\" style=\"padding: 0;\">
                                                <label for=\"happy\" class=\"col-sm-6 col-md-6 control-label text-right\">Comparer suivant le Prix ?</label>
                                                <div class=\"col-sm-6 col-md-6\">
                                                    <div class=\"input-group\">
                                                        <div id=\"radioBtn\" class=\"btn-group\" style=\"border-radius: 0;\">
                                                            <a class=\"btn btn-primary btn-sm active\" style=\"background-color: #3c8dbc ;border-radius: 0;\" data-toggle=\"prix\" data-title=\"Y\">Oui</a>
                                                            <a class=\"btn btn-primary btn-sm notActive\" style=\"border-radius: 0;\" data-toggle=\"prix\" data-title=\"N\">Non</a>
                                                        </div>
                                                        <input type=\"hidden\" name=\"prix\" id=\"prix\" value=\"Y\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"list-group-item\">
                                        <div class=\"form-group\" style=\"margin-bottom: 0;\">
                                            <div class=\"row\" style=\"padding: 0;\">
                                                <label for=\"happy\" class=\"col-sm-6 col-md-6 control-label text-right\">Comparer suivant La date de commerce ?</label>
                                                <div class=\"col-sm-6 col-md-6\">
                                                    <div class=\"input-group\">
                                                        <div id=\"radioBtn\" class=\"btn-group\" style=\"border-radius: 0;\">
                                                            <a class=\"btn btn-primary btn-sm active\"  style=\"background-color: #3c8dbc;border-radius: 0;\" data-toggle=\"DC\" data-title=\"Y\">Oui</a>
                                                            <a class=\"btn btn-primary btn-sm notActive\" style=\"border-radius: 0;\" data-toggle=\"DC\" data-title=\"N\">Non</a>
                                                        </div>
                                                        <input type=\"hidden\" name=\"DC\" id=\"DC\" value=\"Y\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <button type=\"submit\" class=\"btn btn-primary btn\" aria-label=\"Left Align\" style=\"text-align: center; border-radius: 0;\">
                                    <span class=\"glyphicon glyphicon-check\" aria-hidden=\"true\" ></span> Comparer
                                </button>
                            </div>
                            <div class=\"col-md-6 col-lg-6 col-xs-12 col-sm-6\" style=\"height: 300px; overflow-y: scroll\" id=\"recentSearch\">
                                <h4>Les voitures Récements recherchées</h4>
                                <div class=\"row\" style=\"padding: 2px;\">
                                    {% if SearchDeals is defined and SearchDeals != [] or  SearchUsers is defined and SearchUsers != []  %}
                                        {% if SearchDeals is defined and SearchDeals !=[] %}
                                            {% for deal in SearchDeals %}
                                                <div class=\"col-md-3 col-lg-2 col-sm-2\" style=\"padding: 0;margin: 1px;\">
                                                    <div class=\"card\" style=\"\">
                                                        <div class=\"\">
                                                            <img class=\"img-responsive\"  style=\"height: 50px;\" src=\"{{ \"#{cursrc}#{deal.voiture.photo}\" }}\"/>
                                                        </div>
                                                        <div class=\"card-read-more\">
                                                            {{ deal.nom[:6] }}<br>
                                                            ID : {{ deal.id }}
                                                        </div>
                                                    </div>
                                                </div>
                                            {% endfor %}
                                        {% endif %}
                                        {% for deal in bestdeal if deal not in SearchDeals %}
                                            <div class=\"col-md-3 col-lg-2 col-sm-2\">
                                                <div class=\"card\">
                                                    <div class=\"img-card\">
                                                        <img src=\"{{ \"#{cursrc}#{deal.voiture.photo}\" }}\"/>
                                                    </div>
                                                    <div class=\"card-content\">
                                                        <h4 class=\"card-title\">
                                                            {{ deal.nom }}
                                                        </h4>
                                                    </div>
                                                    <div class=\"card-read-more\">
                                                        ID : {{ deal.id }}
                                                    </div>
                                                </div>
                                            </div>
                                        {% endfor %}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <section class=\"tab-content\">
        <section class=\"tab-pane active fade in content\" id=\"dashboard\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-9\">
                    {% if SearchDeals is defined and SearchDeals != [] or  SearchUsers is defined and SearchUsers != []  %}
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading clearfix\">
                                <h4 class=\"pull-left\">Le Résultats de votre recherche</h4>
                                <div class=\"btn-group pull-right\">
                                    {#<a href=\"{{ path('admin_aprove_all') }}\" class=\"btn btn-primary btn-sm fa fa-check-square fa-3x\">   Approuver tous</a>#}
                                </div>
                            </div>
                            <div class=\"panel-body\" id=\"PanelSearch\" style=\"margin: 0  ;overflow-y: scroll ; height: 600px;\">
                                <div class=\"row\" style=\"padding-top: 0; padding-left: 0;padding-right: 0;\">
                                    {% if SearchDeals != [] %}
                                        <div class=\"alert-info\" style=\"padding: 1%;\">
                                            Annonces
                                        </div>
                                    {% for deal in SearchDeals %}
                                        <div class=\"col-md-3 col-sm-6 col-xs-12\" style=\"padding: 0.5%; \">
                                            <div class=\"card\">
                                                <div class=\"img-card\">
                                                    <img src=\"{{ \"#{cursrc}#{deal.voiture.photo}\" }}\"/>
                                                </div>
                                                <div class=\"card-content\">
                                                    <h4 class=\"card-title\">
                                                        {{ deal.nom }}
                                                    </h4>
                                                </div>
                                                <div class=\"card-read-more\">
                                                    <a class=\"btn btn-outline-primary\" href=\"{{ path('user_ticket', {'id': deal.id}) }}\">
                                                        Plus d'information <i class=\"fa fa-arrow-circle-right\"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    {% endfor %}
                                {% endif %}

                                    {% if SearchUsers is defined and  SearchUsers != [] %}
                                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"margin: 0;\">
                                            <div class=\"alert-info\" style=\"padding: 1%;\">
                                                Utilisateurs
                                            </div>
                                        </div>
                                        {% for user in SearchUsers %}
                                            <div class=\"col-md-3 col-sm-6 col-xs-12\" style=\"padding: 0.5%; \">
                                                <div class=\"card\">
                                                    <div class=\"img-card\">
                                                        <img src=\"{{ \"#{cursrc}#{user.photo}\" }}\"/>
                                                    </div>
                                                    <div class=\"card-read-more\" style=\"text-align: center\">
                                                        <a class=\"btn btn-outline-primary\" href=\"{{ path('user_profile', {'id': user.id}) }}\">
                                                            {{ user.nom }} <i class=\"fa fa-arrow-circle-right\"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        {% endfor %}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    {% endif %}
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading clearfix\">
                            <h4 class=\"pull-left\">Les dernières Annonces</h4>
                            <div class=\"btn-group pull-right\">
                                <a href=\"{{ path('admin_aprove_all') }}\" class=\"btn btn-primary btn-sm fa fa-check-square fa-3x\">   Voir Toutes les Annonces</a>
                            </div>
                        </div>
                        <div class=\"panel-body\" style=\"margin: 0\">
                            <div class=\"row\" style=\"padding-top: 0; padding-left: 0;padding-right: 0\">
                                {% for deal in bestdeal %}
                                    <div class=\"col-md-3 col-sm-6 col-xs-12\" style=\"padding: 0.5%; \">
                                        <div class=\"card\">
                                            <div class=\"img-card\">
                                                <img src=\"{{ \"#{cursrc}#{deal.voiture.photo}\" }}\"/>
                                            </div>
                                            <div class=\"card-content\">
                                                <h4 class=\"card-title\">
                                                    {{ deal.nom }}
                                                </h4>
                                                <div class=\"\">
                                                    <table class=\"table table-striped\">
                                                        <tr><td>{{ deal.voiture.utilisateur.ville? deal.voiture.utilisateur.ville : ''  }}</td></tr>
                                                        <tr><td>{{ deal.voiture.ficheTech.dateCommerce? deal.voiture.ficheTech.dateCommerce|date(\"y/m/d\") : 'date commerce non spécifiée'  }}</td></tr>
                                                        <tr><td>{{ deal.voiture.ficheTech.carburant? deal.voiture.ficheTech.dateCommerce : 'Carburant non spécifié' }}</td></tr>
                                                        <tr><td> Prix demandée : {{ deal.prix }}</td></tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class=\"card-read-more\">
                                                <a class=\"btn btn-outline-primary\" href=\"{{ path('user_ticket', {'id': deal.id}) }}\">
                                                    Plus d'information <i class=\"fa fa-arrow-circle-right\"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-12 col-sm-3\" style=\"padding: 0; padding-right: 1%;\">
                    <div class=\"panel panel-primary\" style=\"border: none; padding: 0\">
                        <div class=\"panel-body\" style=\"background-color: #00c0ef; margin: 0 ; padding-top: 0; padding-bottom: 0\">
                            <div class=\"row\" style=\"\">
                                <div class=\"col-md-6\" style=\"padding-right: 3.5%; \">
                                    <h2 class=\"\" style=\"font-size: 3.8rem; color:rgba(255,255,255,0.6); text-align: center\">30</h2>
                                    <p style=\"font-size: 1.3rem; text-align: center; margin: auto;padding-bottom: 2% ;color:#FFFFFF;\">Comparaison faite ce mois</p>
                                </div>
                                <div class=\"col-md-6\" style=\"padding-right: 3.5%; padding-top: 3.5%;\">
                                    <i class=\"fa fa-car fa-5x \" style=\"color:rgba(255,255,255,0.37); margin-left: 25%; margin-right: 5%;margin-top: 10%; \"></i>
                                </div>
                                <div class=\"col-md-12\" style=\"margin: 0; padding: 1%;\">
                                    <a style=\"width: 100%; height: auto; background-color:#00add8; text-align: center; display: block; color: rgba(255,255,255,0.8)\" class=\"btn btn-sm\" id=\"compare\">Comparer Des voitures  <i class=\"fa fa-arrow-circle-right\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Recherche Profonde
                        </div>
                        <div class=\"panel-body\">
                            <form class=\"\" name=\"DeepSearch\" method=\"GET\" action=\"/DeepSearch\">
                                <h4>Recherche par budget</h4>
                                <div class=\"btn-group\" data-toggle=\"buttons\">
                                    <div class=\"row\" style=\"padding-top: 0.5%; margin-top: 0.5%;\">
                                        <div class=\"col-md-6 col-lg-6\" style=\"padding: 0; padding-left: 1%; border-radius: 0;\">
                                            <div class=\"input-group input-group-sm\">
                                                <span class=\"input-group-addon\" id=\"sizing-addon1\" style=\"border-radius: 0;\">Entre</span>
                                                <input type=\"text\" name=\"Price1\" class=\"form-control\" placeholder=\"prix de départ\" aria-describedby=\"sizing-addon1\" style=\"border-radius: 0;\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-6\" >
                                            <div class=\"input-group input-group-sm\" style=\"padding: 0; padding-left: 1%; border-radius: 0;\" >
                                                <span class=\"input-group-addon\" id=\"sizing-addon1\" style=\"border-radius: 0;\">Et</span>
                                                <input type=\"text\" class=\"form-control\" name=\"Price2\" placeholder=\"limite de prix\" aria-describedby=\"sizing-addon1\" style=\"border-radius: 0;\">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div>
                                    <h4>Recherche Par constructeur</h4>
                                    <a class=\"btn btn-default btn-select\">
                                        <input type=\"hidden\" class=\"btn-select-input\" id=\"manufac\" name=\"manufac\" value=\"\" />
                                        <span class=\"btn-select-value\">Select an Item</span>
                                        <span class='btn-select-arrow glyphicon glyphicon-chevron-down' style=\"margin: auto\"></span>
                                        <ul>
                                            <li class=\"selected\">{{ manufacturers[0].nom }}</li>
                                            {% for man in manufacturers [1:] %}
                                                <li>{{ man.nom}}</li>
                                            {% endfor %}
                                        </ul>
                                    </a>
                                </div>
                                <div style=\"padding: 0;\">
                                    <h4>Recherche Par Mot clef</h4>
                                    <table class=\"table table-striped\" style=\"width: auto\">
                                        <tr >
                                            <td>Carburant</td>
                                            <td><input name=\"carburant\" type=\"text\" style=\"border-radius: 0;\"></td>
                                        </tr>
                                        <tr>
                                            <td>Puissance fiscale</td>
                                            <td><input name=\"Pf\" type=\"text\" style=\"border-radius: 0;\"></td>
                                        </tr>
                                        <tr>
                                            <td>Consommation urbaine</td>
                                            <td><input name=\"ConsUrbaine\" type=\"text\" style=\"border-radius: 0;\"></td>
                                        </tr>
                                        <tr>
                                            <td>Max Révision</td>
                                            <td><input name=\"MaxRev\" type=\"text\" style=\"border-radius: 0;\"></td>
                                        </tr>
                                    </table>
                                </div>
                                <div style=\"width: 100%;\">
                                    <a onclick=\"\$(this).closest('form').submit()\" style=\"width: 100%; height: auto; background-color:#00add8; text-align: center; display: block; color: rgba(255,255,255,0.8); border-radius: 0\" class=\"btn btn-sm\">Effectuer la recherche  <i class=\"fa fa-search\"></i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                    {# <div class=\"panel panel-default\">
                         <div class=\"panel-heading\">
                             Kaitani Labs
                         </div>
                         <div class=\"panel-body\">
                             Designed by <a href=\"http://www.kaitanilabs.com\" target=\"_blank\">Kaitani Labs</a>
                         </div>
                     </div>#}
                </div>
            </div>

        </section>

        <section class=\"tab-pane fade\" id=\"configuration\">
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

        </section>

    </section>



    {#<div class=\"row\">
        <div class=\"col-md-10\" style=\"\">
            <div class=\"modal fade\" id=\"enlargeImageModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"enlargeImageModal\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-lg\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                        </div>
                        <div class=\"modal-body\">
                            <img src=\"\" class=\"enlargeImageModalSource\" style=\"width: 100%;\">
                        </div>
                    </div>
                </div>
            </div>
            #}{#<div style=\"display: inline-block\">
                    <h1>Nos Dernières Annonces </h1>
                    <div class=\"card\" style=\"background-color: white; border: 1px red;\">
                        <div class=\"container-fliud\">
                            <div class=\"wrapper row\">
                                <div class=\"preview col-md-6\">
                                    <div class=\"preview-pic tab-content\">
                                        <div class=\"tab-pane active\" id=\"pic-1\"><img src=\"http://placekitten.com/400/252\" /></div>
                                        <div class=\"tab-pane\" id=\"pic-2\"><img src=\"http://placekitten.com/400/252\" /></div>
                                        <div class=\"tab-pane\" id=\"pic-3\"><img src=\"http://placekitten.com/400/252\" /></div>
                                        <div class=\"tab-pane\" id=\"pic-4\"><img src=\"http://placekitten.com/400/252\" /></div>
                                        <div class=\"tab-pane\" id=\"pic-5\"><img src=\"http://placekitten.com/400/252\" /></div>
                                    </div>
                                    <ul class=\"preview-thumbnail nav nav-tabs\">
                                        <li class=\"active\"><a data-target=\"#pic-1\" data-toggle=\"tab\"><img src=\"http://placekitten.com/200/126\" /></a></li>
                                        <li><a data-target=\"#pic-2\" data-toggle=\"tab\"><img src=\"http://placekitten.com/200/126\" /></a></li>
                                        <li><a data-target=\"#pic-3\" data-toggle=\"tab\"><img src=\"http://placekitten.com/200/126\" /></a></li>
                                        <li><a data-target=\"#pic-4\" data-toggle=\"tab\"><img src=\"http://placekitten.com/200/126\" /></a></li>
                                        <li><a data-target=\"#pic-5\" data-toggle=\"tab\"><img src=\"http://placekitten.com/200/126\" /></a></li>
                                    </ul>

                                </div>
                                <div class=\"details col-md-6\">
                                    <h3 class=\"product-title\">men's shoes fashion</h3>
                                    <div class=\"rating\">
                                        <div class=\"stars\">
                                            <span class=\"fa fa-star checked\"></span>
                                            <span class=\"fa fa-star checked\"></span>
                                            <span class=\"fa fa-star checked\"></span>
                                            <span class=\"fa fa-star\"></span>
                                            <span class=\"fa fa-star\"></span>
                                        </div>
                                        <span class=\"review-no\">41 reviews</span>
                                    </div>
                                    <p class=\"product-description\">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
                                    <h4 class=\"price\">current price: <span>\$180</span></h4>
                                    <p class=\"vote\"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
                                    <h5 class=\"sizes\">sizes:
                                        <span class=\"size\" data-toggle=\"tooltip\" title=\"small\">s</span>
                                        <span class=\"size\" data-toggle=\"tooltip\" title=\"medium\">m</span>
                                        <span class=\"size\" data-toggle=\"tooltip\" title=\"large\">l</span>
                                        <span class=\"size\" data-toggle=\"tooltip\" title=\"xtra large\">xl</span>
                                    </h5>
                                    <h5 class=\"colors\">colors:
                                        <span class=\"color orange not-available\" data-toggle=\"tooltip\" title=\"Not In store\"></span>
                                        <span class=\"color green\"></span>
                                        <span class=\"color blue\"></span>
                                    </h5>
                                    <div class=\"action\">
                                        <button class=\"add-to-cart btn btn-default\" type=\"button\">add to cart</button>
                                        <button class=\"like btn btn-default\" type=\"button\"><span class=\"fa fa-heart\"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


            </div>#}{#

                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-4\">
                        <div class=\"card\">
                            <div class=\"img-card\">
                                <img src=\"https://images.pexels.com/photos/170811/pexels-photo-170811.jpeg?w=940&h=650&auto=compress&cs=tinysrgb\"/>
                            </div>
                            <div class=\"card-content\">
                                <h4 class=\"card-title\">

                                        BMW X5 SERIES

                                </h4>
                                <div class=\"\">
                                    New Delhi, 2005, Petrol
                                </div>
                            </div>
                            <div class=\"card-read-more\">
                                <a class=\"btn btn-link btn-block\">
                                    BID NOW
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-4\">
                        <div class=\"card\">
                            <a class=\"img-card\" href=\"http://www.fostrap.com/\">
                                <img src=\"https://images.pexels.com/photos/170811/pexels-photo-170811.jpeg?w=940&h=650&auto=compress&cs=tinysrgb\"/>
                            </a>
                            <br />
                            <div class=\"card-content\">
                                <h4 class=\"card-title\">
                                    <a href=\"http://www.fostrap.com/\">
                                        BMW X5 SERIES
                                    </a>
                                </h4>
                                <div class=\"\">
                                    New Delhi, 2005, Petrol
                                </div>
                            </div>
                            <div class=\"card-read-more\">
                                <a class=\"btn btn-link btn-block\" href=\"http://www.fostrap.com/\">
                                    BID NOW
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-4\">
                        <div class=\"card\">
                            <a class=\"img-card\" href=\"http://www.fostrap.com/\">
                                <img src=\"https://images.pexels.com/photos/170811/pexels-photo-170811.jpeg?w=940&h=650&auto=compress&cs=tinysrgb\"/>
                            </a>
                            <br />
                            <div class=\"card-content\">
                                <h4 class=\"card-title\">
                                    <a href=\"http://www.fostrap.com/\">
                                        BMW X5 SERIES
                                    </a>
                                </h4>
                                <div class=\"\">
                                    New Delhi, 2005, Petrol
                                </div>
                            </div>
                            <div class=\"card-read-more\">
                                <a class=\"btn btn-link btn-block\" href=\"http://www.fostrap.com/\">
                                    BID NOW
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-4\">
                        <div class=\"card\">
                            <a class=\"img-card\" href=\"http://www.fostrap.com/\">
                                <img src=\"https://images.pexels.com/photos/170811/pexels-photo-170811.jpeg?w=940&h=650&auto=compress&cs=tinysrgb\"/>
                            </a>
                            <br />
                            <div class=\"card-content\">
                                <h4 class=\"card-title\">
                                    <a href=\"http://www.fostrap.com/\">
                                        BMW X5 SERIES
                                    </a>
                                </h4>
                                <div class=\"\">
                                    New Delhi, 2005, Petrol
                                </div>
                            </div>
                            <div class=\"card-read-more\">
                                <a class=\"btn btn-link btn-block\" href=\"http://www.fostrap.com/\">
                                    BID NOW
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-4\">
                        <div class=\"card\">
                            <a class=\"img-card\" href=\"http://www.fostrap.com/\">
                                <img src=\"https://images.pexels.com/photos/170811/pexels-photo-170811.jpeg?w=940&h=650&auto=compress&cs=tinysrgb\"/>
                            </a>
                            <br />
                            <div class=\"card-content\">
                                <h4 class=\"card-title\">
                                    <a href=\"http://www.fostrap.com/\">
                                        BMW X5 SERIES
                                    </a>
                                </h4>
                                <div class=\"\">
                                    New Delhi, 2005, Petrol
                                </div>
                            </div>
                            <div class=\"card-read-more\">
                                <a class=\"btn btn-link btn-block\" href=\"http://www.fostrap.com/\">
                                    BID NOW
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-4\">
                        <div class=\"card\">
                            <a class=\"img-card\" href=\"http://www.fostrap.com/\">
                                <img src=\"https://images.pexels.com/photos/170811/pexels-photo-170811.jpeg?w=940&h=650&auto=compress&cs=tinysrgb\"/>
                            </a>
                            <br />
                            <div class=\"card-content\">
                                <h4 class=\"card-title\">
                                    <a href=\"http://www.fostrap.com/\">
                                        BMW X5 SERIES
                                    </a>
                                </h4>
                                <div class=\"\">
                                    New Delhi, 2005, Petrol
                                </div>
                            </div>
                            <div class=\"card-read-more\">
                                <a class=\"btn btn-link btn-block\" href=\"http://www.fostrap.com/\">
                                    BID NOW
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            <div class=\"border-top-0\">

            </div>
            <div style=\"margin-top: 5%; \">
                <h1>Des Achats près de vous</h1>
                <div class=\"row\">
                    {% for deal in bestdeal|slice(0,3) %}
                        <div class=\"col-md-3\"><img style=\"width:100%; height:auto;\" src=\"{{ \"#{cursrc}#{deal.voiture.photo}\" }}\"></div>
                    {% endfor %}
                </div>
            </div>
        </div>
        <div class=\"col-md-2\">
        </div>
    </div>#}
{% endblock %}", "home/homepage.html.twig", "E:\\PFAOrigin\\app\\Resources\\views\\home\\homepage.html.twig");
    }
}
