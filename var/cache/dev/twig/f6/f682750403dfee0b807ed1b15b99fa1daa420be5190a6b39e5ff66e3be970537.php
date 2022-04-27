<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_c070cf7d2a47cc77506d87ca71d4091b793c56fdd040cde0940456b69e15af7b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset=\"utf-8\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"Bootstrap App Landing Template\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=5.0\">
    <meta name=\"author\" content=\"Themefisher\">
    <meta name=\"generator\" content=\"Themefisher Small Apps Template v1.0\">

    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/images/logoo_50.png"), "html", null, true);
        echo "\" />

    <!-- PLUGINS CSS STYLE -->
    ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "</head>

<body class=\"body-wrapper\" data-spy=\"scroll\" data-target=\".privacy-nav\">

";
        // line 37
        $this->displayBlock('header', $context, $blocks);
        // line 123
        echo "<!--====================================
=            Hero Section            =
=====================================-->

<section class=\"section gradient-banner\">
    ";
        // line 128
        $this->displayBlock('body', $context, $blocks);
        // line 131
        echo "</section>

<!--====  End of Hero Section  ====-->

<!--============================
=            Footer            =
=============================-->
<br> <br>
";
        // line 139
        $this->displayBlock('footer', $context, $blocks);
        // line 220
        echo "<!-- JAVASCRIPTS -->
";
        // line 221
        $this->displayBlock('javascripts', $context, $blocks);
        // line 234
        echo "</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "I-chariot";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/plugins/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/plugins/themify-icons/themify-icons.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/plugins/slick/slick.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/plugins/slick/slick-theme.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/plugins/fancybox/jquery.fancybox.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/plugins/aos/aos.css"), "html", null, true);
        echo "\">

        <!-- CUSTOM CSS -->

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 38
        echo "    <nav class=\"navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/images/logoo_50.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\"
                    aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"ti-menu\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item dropdown active\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Home
                            <span><i class=\"ti-angle-down\"></i></span>
                        </a>
                        <!-- Dropdown list -->
                        <ul class=\"dropdown-menu\">
                            <li><a class=\"dropdown-item active\" href=\"index.html\">Homepage</a></li>
                            <li><a class=\"dropdown-item\" href=\"homepage-2.html\">Homepage 2</a></li>
                            <li><a class=\"dropdown-item active3\" href=\"homepage-3.html\">Homepage 3</a></li>

                            <li class=\"dropdown dropdown-submenu dropright\">
                                <a class=\"dropdown-item dropdown-toggle\" href=\"#!\" id=\"dropdown0301\" role=\"button\"
                                   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Sub Menu</a>

                                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown0301\">
                                    <li><a class=\"dropdown-item\" href=\"index.html\">Submenu 11</a></li>
                                    <li><a class=\"dropdown-item\" href=\"index.html\">Submenu 12</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item dropdown @@pages\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Produits
                            <span><i class=\"ti-angle-down\"></i></span>
                        </a>
                        <!-- Dropdown list -->
                        <ul class=\"dropdown-menu\">
                            <li><a class=\"dropdown-item @@team\" href=\"team.html\">Team</a></li>
                            <li><a class=\"dropdown-item @@career\" href=\"career.html\">Career</a></li>
                            <li><a class=\"dropdown-item @@blog\" href=\"blog.html\">Blog</a></li>
                            <li><a class=\"dropdown-item @@blogSingle\" href=\"blog-single.html\">Blog Single</a></li>
                            <li><a class=\"dropdown-item @@privacy\" href=\"privacy-policy.html\">Privacy</a></li>
                            <li><a class=\"dropdown-item @@faq\" href=\"FAQ.html\">FAQ</a></li>
                            <li><a class=\"dropdown-item\" href=\"sign-in.html\">Sign In</a></li>
                            <li><a class=\"dropdown-item\" href=\"sign-up.html\">Sign Up</a></li>
                            <li><a class=\"dropdown-item\" href=\"404.html\">404</a></li>
                            <li><a class=\"dropdown-item\" href=\"comming-soon.html\">Coming Soon</a></li>

                            <li class=\"dropdown dropdown-submenu dropleft\">
                                <a class=\"dropdown-item dropdown-toggle\" href=\"#!\" id=\"dropdown0501\" role=\"button\"
                                   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Sub Menu</a>

                                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown0501\">
                                    <li><a class=\"dropdown-item\" href=\"index.html\">Submenu 21</a></li>
                                    <li><a class=\"dropdown-item\" href=\"index.html\">Submenu 22</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item @@about\">
                        <a class=\"nav-link\" href=\"about.html\">Livraison</a>
                    </li>
                    <li class=\"nav-item @@about\">
                        <a class=\"nav-link\" href=\"about.html\">Articles</a>
                    </li>
                    <li class=\"nav-item @@contact\">
                        <a class=\"nav-link\" href=\"contact.html\">Salles</a>
                    </li>
                    <li class=\"nav-item dropdown active\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Profile
                            <span><i class=\"ti-angle-down\"></i></span>
                        </a>
                        <!-- Dropdown list -->
                        <ul class=\"dropdown-menu\">
                            <li><a class=\"dropdown-item active\" href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
        echo "\">Edit profile</a></li>
                            <li><a class=\"dropdown-item\" href=\"homepage-2.html\">Logout</a></li>



                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 128
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 129
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 139
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 140
        echo "    <footer>
        <div class=\"footer-main\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-12 m-md-auto align-self-center\">
                        <div class=\"block\">
                            <a href=\"index.html\"><img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/images/logotr_50.png"), "html", null, true);
        echo "\" alt=\"footer-logo\"></a>
                            <!-- Social Site Icons -->
                            <ul class=\"social-icon list-inline\">
                                <li class=\"list-inline-item\">
                                    <a href=\"https://www.facebook.com/themefisher\"><i class=\"ti-facebook\"></i></a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"https://twitter.com/themefisher\"><i class=\"ti-twitter\"></i></a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"https://www.instagram.com/themefisher/\"><i class=\"ti-instagram\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-2 col-md-3 col-6 mt-5 mt-lg-0\">
                        <div class=\"block-2\">
                            <!-- heading -->
                            <h6>Sponsor</h6>
                            <!-- links -->
                            <ul>
                                <li><a href=\"team.html\">Partenaires</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-2 col-md-3 col-6 mt-5 mt-lg-0\">
                        <div class=\"block-2\">
                            <!-- heading -->
                            <h6>Equipes</h6>
                            <!-- links -->
                            <ul>
                                <li><a href=\"sign-up.html\">Daydreamers</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-2 col-md-3 col-6 mt-5 mt-lg-0\">
                        <div class=\"block-2\">
                            <!-- heading -->
                            <h6>Documents</h6>
                            <!-- links -->
                            <ul>
                                <li><a href=\"privacy-policy.html\">Politique de confidantialité</a></li>
                                <li><a href=\"privacy.html\">Termes</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-2 col-md-3 col-6 mt-5 mt-lg-0\">
                        <div class=\"block-2\">
                            <!-- heading -->
                            <h6>I_chariot</h6>
                            <!-- links -->
                            <ul>
                                <li><a href=\"about.html\">A propos</a></li>
                                <li><a href=\"contact.html\">Contact</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"text-center bg-dark py-4\">
            <small class=\"text-secondary\">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. Designed &amp; Developed by <a href=\"#\">Daydreamers</a></small class=\"text-secondary\">
        </div>
    </footer>


    <!-- To Top -->
    <div class=\"scroll-top-to\">
        <i class=\"ti-angle-up\"></i>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 221
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 222
        echo "    <script src=\"frontoffice/plugins/jquery/jquery.min.js\"></script>
    <script src=\"frontoffice/plugins/bootstrap/bootstrap.min.js\"></script>
    <script src=\"frontoffice/plugins/slick/slick.min.js\"></script>
    <script src=\"frontoffice/plugins/fancybox/jquery.fancybox.min.js\"></script>
    <script src=\"frontoffice/plugins/syotimer/jquery.syotimer.min.js\"></script>
    <script src=\"frontoffice/plugins/aos/aos.js\"></script>
    <!-- google map -->
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g\"></script>
    <script src=\"frontoffice/plugins/google-map/gmap.js\"></script>

    <script src=\"frontoffice/js/script.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 222,  424 => 221,  340 => 146,  332 => 140,  322 => 139,  311 => 129,  301 => 128,  279 => 111,  205 => 40,  201 => 38,  191 => 37,  176 => 28,  172 => 27,  168 => 26,  164 => 25,  160 => 24,  155 => 23,  145 => 22,  126 => 8,  114 => 234,  112 => 221,  109 => 220,  107 => 139,  97 => 131,  95 => 128,  88 => 123,  86 => 37,  80 => 33,  78 => 22,  72 => 19,  58 => 8,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset=\"utf-8\">
    <title>{% block title %}I-chariot{% endblock %}</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"Bootstrap App Landing Template\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=5.0\">
    <meta name=\"author\" content=\"Themefisher\">
    <meta name=\"generator\" content=\"Themefisher Small Apps Template v1.0\">

    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset(\"frontoffice/images/logoo_50.png\") }}\" />

    <!-- PLUGINS CSS STYLE -->
    {% block stylesheets%}
        <link rel=\"stylesheet\" href=\"{{ asset('frontoffice/plugins/bootstrap/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('frontoffice/plugins/themify-icons/themify-icons.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('frontoffice/plugins/slick/slick.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('frontoffice/plugins/slick/slick-theme.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('frontoffice/plugins/fancybox/jquery.fancybox.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('frontoffice/plugins/aos/aos.css') }}\">

        <!-- CUSTOM CSS -->

    {% endblock %}
</head>

<body class=\"body-wrapper\" data-spy=\"scroll\" data-target=\".privacy-nav\">

{% block header%}
    <nav class=\"navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"#\"><img src=\"{{ asset('frontoffice/images/logoo_50.png') }}\" alt=\"logo\"></a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\"
                    aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"ti-menu\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item dropdown active\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Home
                            <span><i class=\"ti-angle-down\"></i></span>
                        </a>
                        <!-- Dropdown list -->
                        <ul class=\"dropdown-menu\">
                            <li><a class=\"dropdown-item active\" href=\"index.html\">Homepage</a></li>
                            <li><a class=\"dropdown-item\" href=\"homepage-2.html\">Homepage 2</a></li>
                            <li><a class=\"dropdown-item active3\" href=\"homepage-3.html\">Homepage 3</a></li>

                            <li class=\"dropdown dropdown-submenu dropright\">
                                <a class=\"dropdown-item dropdown-toggle\" href=\"#!\" id=\"dropdown0301\" role=\"button\"
                                   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Sub Menu</a>

                                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown0301\">
                                    <li><a class=\"dropdown-item\" href=\"index.html\">Submenu 11</a></li>
                                    <li><a class=\"dropdown-item\" href=\"index.html\">Submenu 12</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item dropdown @@pages\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Produits
                            <span><i class=\"ti-angle-down\"></i></span>
                        </a>
                        <!-- Dropdown list -->
                        <ul class=\"dropdown-menu\">
                            <li><a class=\"dropdown-item @@team\" href=\"team.html\">Team</a></li>
                            <li><a class=\"dropdown-item @@career\" href=\"career.html\">Career</a></li>
                            <li><a class=\"dropdown-item @@blog\" href=\"blog.html\">Blog</a></li>
                            <li><a class=\"dropdown-item @@blogSingle\" href=\"blog-single.html\">Blog Single</a></li>
                            <li><a class=\"dropdown-item @@privacy\" href=\"privacy-policy.html\">Privacy</a></li>
                            <li><a class=\"dropdown-item @@faq\" href=\"FAQ.html\">FAQ</a></li>
                            <li><a class=\"dropdown-item\" href=\"sign-in.html\">Sign In</a></li>
                            <li><a class=\"dropdown-item\" href=\"sign-up.html\">Sign Up</a></li>
                            <li><a class=\"dropdown-item\" href=\"404.html\">404</a></li>
                            <li><a class=\"dropdown-item\" href=\"comming-soon.html\">Coming Soon</a></li>

                            <li class=\"dropdown dropdown-submenu dropleft\">
                                <a class=\"dropdown-item dropdown-toggle\" href=\"#!\" id=\"dropdown0501\" role=\"button\"
                                   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Sub Menu</a>

                                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown0501\">
                                    <li><a class=\"dropdown-item\" href=\"index.html\">Submenu 21</a></li>
                                    <li><a class=\"dropdown-item\" href=\"index.html\">Submenu 22</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item @@about\">
                        <a class=\"nav-link\" href=\"about.html\">Livraison</a>
                    </li>
                    <li class=\"nav-item @@about\">
                        <a class=\"nav-link\" href=\"about.html\">Articles</a>
                    </li>
                    <li class=\"nav-item @@contact\">
                        <a class=\"nav-link\" href=\"contact.html\">Salles</a>
                    </li>
                    <li class=\"nav-item dropdown active\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Profile
                            <span><i class=\"ti-angle-down\"></i></span>
                        </a>
                        <!-- Dropdown list -->
                        <ul class=\"dropdown-menu\">
                            <li><a class=\"dropdown-item active\" href=\"{{ path('app_user_profile') }}\">Edit profile</a></li>
                            <li><a class=\"dropdown-item\" href=\"homepage-2.html\">Logout</a></li>



                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
{% endblock %}
<!--====================================
=            Hero Section            =
=====================================-->

<section class=\"section gradient-banner\">
    {% block body %}

    {% endblock %}
</section>

<!--====  End of Hero Section  ====-->

<!--============================
=            Footer            =
=============================-->
<br> <br>
{% block footer %}
    <footer>
        <div class=\"footer-main\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-12 m-md-auto align-self-center\">
                        <div class=\"block\">
                            <a href=\"index.html\"><img src=\"{{ asset('frontoffice/images/logotr_50.png') }}\" alt=\"footer-logo\"></a>
                            <!-- Social Site Icons -->
                            <ul class=\"social-icon list-inline\">
                                <li class=\"list-inline-item\">
                                    <a href=\"https://www.facebook.com/themefisher\"><i class=\"ti-facebook\"></i></a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"https://twitter.com/themefisher\"><i class=\"ti-twitter\"></i></a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"https://www.instagram.com/themefisher/\"><i class=\"ti-instagram\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-2 col-md-3 col-6 mt-5 mt-lg-0\">
                        <div class=\"block-2\">
                            <!-- heading -->
                            <h6>Sponsor</h6>
                            <!-- links -->
                            <ul>
                                <li><a href=\"team.html\">Partenaires</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-2 col-md-3 col-6 mt-5 mt-lg-0\">
                        <div class=\"block-2\">
                            <!-- heading -->
                            <h6>Equipes</h6>
                            <!-- links -->
                            <ul>
                                <li><a href=\"sign-up.html\">Daydreamers</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-2 col-md-3 col-6 mt-5 mt-lg-0\">
                        <div class=\"block-2\">
                            <!-- heading -->
                            <h6>Documents</h6>
                            <!-- links -->
                            <ul>
                                <li><a href=\"privacy-policy.html\">Politique de confidantialité</a></li>
                                <li><a href=\"privacy.html\">Termes</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-2 col-md-3 col-6 mt-5 mt-lg-0\">
                        <div class=\"block-2\">
                            <!-- heading -->
                            <h6>I_chariot</h6>
                            <!-- links -->
                            <ul>
                                <li><a href=\"about.html\">A propos</a></li>
                                <li><a href=\"contact.html\">Contact</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"text-center bg-dark py-4\">
            <small class=\"text-secondary\">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. Designed &amp; Developed by <a href=\"#\">Daydreamers</a></small class=\"text-secondary\">
        </div>
    </footer>


    <!-- To Top -->
    <div class=\"scroll-top-to\">
        <i class=\"ti-angle-up\"></i>
    </div>
{% endblock %}
<!-- JAVASCRIPTS -->
{% block javascripts %}
    <script src=\"frontoffice/plugins/jquery/jquery.min.js\"></script>
    <script src=\"frontoffice/plugins/bootstrap/bootstrap.min.js\"></script>
    <script src=\"frontoffice/plugins/slick/slick.min.js\"></script>
    <script src=\"frontoffice/plugins/fancybox/jquery.fancybox.min.js\"></script>
    <script src=\"frontoffice/plugins/syotimer/jquery.syotimer.min.js\"></script>
    <script src=\"frontoffice/plugins/aos/aos.js\"></script>
    <!-- google map -->
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g\"></script>
    <script src=\"frontoffice/plugins/google-map/gmap.js\"></script>

    <script src=\"frontoffice/js/script.js\"></script>
{% endblock %}
</body>

</html>", "base.html.twig", "C:\\Users\\MSI\\Desktop\\i-chariot-main triavanceee\\i-chariot-main\\i-chariot-main\\templates\\base.html.twig");
    }
}
