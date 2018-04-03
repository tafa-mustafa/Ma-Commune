<?php

/* bibliocommuneBundle:Admin:admins.html.twig */
class __TwigTemplate_3bb90aa6f51fe557148ced08e0c223dc303622c260bf2cafea69c7fa803f1a89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'right' => array($this, 'block_right'),
            'rightside' => array($this, 'block_rightside'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64623e23703afb2307a85f3c1e250c663e52c7be25f0d57c91e635e90fdd32b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64623e23703afb2307a85f3c1e250c663e52c7be25f0d57c91e635e90fdd32b3->enter($__internal_64623e23703afb2307a85f3c1e250c663e52c7be25f0d57c91e635e90fdd32b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliocommuneBundle:Admin:admins.html.twig"));

        $__internal_e035c566d02e16feb3014e6abeedbf20b945b6067479155f7f3e0e198e76dfc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e035c566d02e16feb3014e6abeedbf20b945b6067479155f7f3e0e198e76dfc3->enter($__internal_e035c566d02e16feb3014e6abeedbf20b945b6067479155f7f3e0e198e76dfc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliocommuneBundle:Admin:admins.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\" />
    <title>Moltran - Responsive Admin Dashboard Template</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
    <meta content=\"Coderthemes\" name=\"author\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

    <link rel=\"shortcut icon\" href=";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/images/favicon_1.ico"), "html", null, true);
        echo ">

    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/plugins/sweetalert/dist/sweetalert.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/css/core.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/css/pages.css"), "html", null, true);
        echo " \"rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

    <script src=";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/js/modernizr.min.js"), "html", null, true);
        echo "></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->


</head>


<body class=\"fixed-left\">
";
        // line 38
        $this->displayBlock('header', $context, $blocks);
        // line 149
        $this->displayBlock('sidebar', $context, $blocks);
        // line 232
        $this->displayBlock('body', $context, $blocks);
        // line 412
        echo "

    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src=";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/js/jquery.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 420
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/js/bootstrap.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 421
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/js/detect.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 422
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/js/fastclick.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 424
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/js/jquery.blockUI.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/js/waves.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 426
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/js/wow.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "></script>

    <script src=";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/js/jquery.app.js"), "html", null, true);
        echo "></script>

    <!-- jQuery  -->
    <script src=";
        // line 433
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/plugins/moment/moment.js"), "html", null, true);
        echo "></script>

    <!-- jQuery  -->
    <script src=";
        // line 436
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/plugins/waypoints/lib/jquery.waypoints.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/plugins/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "></script>

    <!-- jQuery  -->
    <script src=";
        // line 440
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/plugins/sweetalert/dist/sweetalert.min.js"), "html", null, true);
        echo "></script>


    <!-- flot Chart -->
    <script src=";
        // line 444
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/plugins/flot-chart/jquery.flot.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/plugins/flot-chart/jquery.flot.time.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 446
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/plugins/flot-chart/jquery.flot.tooltip.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/plugins/flot-chart/jquery.flot.resize.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 448
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/plugins/flot-chart/jquery.flot.pie.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 449
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/plugins/flot-chart/jquery.flot.selection.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 450
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/plugins/flot-chart/jquery.flot.stack.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/plugins/flot-chart/jquery.flot.crosshair.js"), "html", null, true);
        echo "></script>

    <!-- jQuery  -->
    <script src=\"assets/pages/jquery.todo.js\"></script>

    <!-- jQuery  -->
    <script src=";
        // line 457
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/pages/jquery.chat.js"), "html", null, true);
        echo "></script>

    <!-- jQuery  -->
    <script src=";
        // line 460
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/pages/jquery.dashboard.js"), "html", null, true);
        echo "></script>

    <script type=";
        // line 462
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/text/javascript"), "html", null, true);
        echo ">
        /* ==============================================
                            Counter Up
                            =============================================== */
        jQuery(document).ready(function(\$) {
            \$('.counter').counterUp({
                delay: 100,
                time: 1200
            });
        });
    </script>


</body>

</html>";
        
        $__internal_64623e23703afb2307a85f3c1e250c663e52c7be25f0d57c91e635e90fdd32b3->leave($__internal_64623e23703afb2307a85f3c1e250c663e52c7be25f0d57c91e635e90fdd32b3_prof);

        
        $__internal_e035c566d02e16feb3014e6abeedbf20b945b6067479155f7f3e0e198e76dfc3->leave($__internal_e035c566d02e16feb3014e6abeedbf20b945b6067479155f7f3e0e198e76dfc3_prof);

    }

    // line 38
    public function block_header($context, array $blocks = array())
    {
        $__internal_109103d0844073ac96a54318413b2bd398a255bfc01fd082cf436c07bf5c1e3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_109103d0844073ac96a54318413b2bd398a255bfc01fd082cf436c07bf5c1e3d->enter($__internal_109103d0844073ac96a54318413b2bd398a255bfc01fd082cf436c07bf5c1e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_e2ff708afd6c5d6b60e365503f3ff9551e18ac94ccb25ccad3cae3abcd9120e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ff708afd6c5d6b60e365503f3ff9551e18ac94ccb25ccad3cae3abcd9120e4->enter($__internal_e2ff708afd6c5d6b60e365503f3ff9551e18ac94ccb25ccad3cae3abcd9120e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 39
        echo "    <!-- Begin page -->
    <div id=\"wrapper\">
        <!-- Top Bar Start -->
        <div class=\"topbar\">
            <!-- LOGO -->
            <div class=\"topbar-left\">
                <div class=\"text-center\">
                    <a href=\"\" class=\"logo\"><i class=\"md md-terrain\"></i> <span>Bibliocommune</span></a>
                </div>
            </div>
            <!-- Button mobile view to collapse sidebar menu -->
            <div class=\"navbar navbar-default\" role=\"navigation\">
                <div class=\"container\">
                    <div class=\"\">
                        <div class=\"pull-left\">
                            <button type=\"button\" class=\"button-menu-mobile open-left\">
                                    <i class=\"fa fa-bars\"></i>
                                </button>
                            <span class=\"clearfix\"></span>
                        </div>
                        <form class=\"navbar-form pull-left\" role=\"search\">
                            <div class=\"templatead/form-group\">
                                <input type=\"text\" class=\"templatead/form-control search-bar\" placeholder=\"Type here for search...\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-search\"><i class=\"fa fa-search\"></i></button>
                        </form>

                        <ul class=\"nav navbar-nav navbar-right pull-right\">
                            <li class=\"dropdown hidden-xs\">
                                <a href=\"#\" data-target=\"#\" class=\"dropdown-toggle waves-effect waves-light\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                                    
                                    <i class=\"md md-notifications\"></i> <span class=\"badge badge-xs badge-danger\">3</span>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-lg\">
                                    <li class=\"text-center notifi-title\">Notification</li>
                                    <li class=\"list-group\">
                                        <!-- list item-->
                                        <a href=";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/javascript:void(0);"), "html", null, true);
        echo "class=\"list-group-item\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <em class=\"fa fa-user-plus fa-2x text-info\"></em>
                                                </div>
                                                <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New user registered</div>
                                                    <p class=\"m-0\">
                                                        <small>You have 10 unread messages</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- list item-->
                                        <a href=";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/javascript:void(0);"), "html", null, true);
        echo " class=\"list-group-item\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <em class=\"fa fa-diamond fa-2x text-primary\"></em>
                                                </div>
                                                <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New settings</div>
                                                    <p class=\"m-0\">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- list item-->
                                        <a href=";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/javascript:void(0);"), "html", null, true);
        echo " class=\"list-group-item\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <em class=\"fa fa-bell-o fa-2x text-danger\"></em>
                                                </div>
                                                <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">Updates</div>
                                                    <p class=\"m-0\">
                                                        <small>There are
                                                          <span class=\"text-primary\">2</span> new updates available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- last list item -->
                                        <a href=";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/javascript:void(0);"), "html", null, true);
        echo " class=\"list-group-item\">
                                            <small>See all notifications</small>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"hidden-xs\">
                                <a href=\"#\" id=\"btn-fullscreen\" class=\"waves-effect waves-light\"><i class=\"md md-crop-free\"></i></a>
                            </li>
                            <li class=\"hidden-xs\">
                                <a href=\"#\" class=\"right-bar-toggle waves-effect waves-light\"><i class=\"md md-chat\"></i></a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"\" class=\"dropdown-toggle profile\" data-toggle=\"dropdown\" aria-expanded=\"true\"><img src=\"assets/images/users/avatar-1.jpg\" alt=\"user-img\" class=\"img-circle\"> </a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/javascript:void(0)"), "html", null, true);
        echo "><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                    <li><a href=";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/javascript:void(0)"), "html", null, true);
        echo "><i class=\"md md-settings\"></i> Settings</a></li>
                                    <li><a href=";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/javascript:void(0)"), "html", null, true);
        echo "><i class=\"md md-lock\"></i> Lock screen</a></li>
                                    <li><a href=";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/javascript:void(0)"), "html", null, true);
        echo "><i class=\"md md-settings-power\"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

";
        
        $__internal_e2ff708afd6c5d6b60e365503f3ff9551e18ac94ccb25ccad3cae3abcd9120e4->leave($__internal_e2ff708afd6c5d6b60e365503f3ff9551e18ac94ccb25ccad3cae3abcd9120e4_prof);

        
        $__internal_109103d0844073ac96a54318413b2bd398a255bfc01fd082cf436c07bf5c1e3d->leave($__internal_109103d0844073ac96a54318413b2bd398a255bfc01fd082cf436c07bf5c1e3d_prof);

    }

    // line 149
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_d7ffb4064c32a57031e7fd9e84c7e3962e43419d2dcbe8e1098aed5a40f65884 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7ffb4064c32a57031e7fd9e84c7e3962e43419d2dcbe8e1098aed5a40f65884->enter($__internal_d7ffb4064c32a57031e7fd9e84c7e3962e43419d2dcbe8e1098aed5a40f65884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6d02da563ff1d972ec44f6ebe1f2e94ec0257c3d58752ddecf9b7845cf4d4364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d02da563ff1d972ec44f6ebe1f2e94ec0257c3d58752ddecf9b7845cf4d4364->enter($__internal_6d02da563ff1d972ec44f6ebe1f2e94ec0257c3d58752ddecf9b7845cf4d4364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 150
        echo "        <!-- ========== Left Sidebar Start ========== -->

        <div class=\"left side-menu\">
            <div class=\"sidebar-inner slimscrollleft\">
                <div class=\"user-details\">
                    <div class=\"pull-left\">
                        <img src=";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/images/dieyna.jpeg"), "html", null, true);
        echo " alt=\"\" class=\"thumb-md img-circle\">
                    </div>
                    <div class=\"user-info\">
                        <div class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">TENE<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/javascript:void(0)"), "html", null, true);
        echo "><i class=\"md md-face-unlock\"></i> Profile<div class=\"ripple-wrapper\"></div></a></li>
                                <li><a href=";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/javascript:void(0)"), "html", null, true);
        echo "><i class=\"md md-settings\"></i> Settings</a></li>
                                <li><a href=";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/javascript:void(0)"), "html", null, true);
        echo "><i class=\"md md-lock\"></i> Lock screen</a></li>
                                <li><a href=";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/javascript:void(0)"), "html", null, true);
        echo "><i class=\"md md-settings-power\"></i> Logout</a></li>
                            </ul>
                        </div><p class=\"text-muted m-0\">Administrator</p>
                    </div>
                </div>
                <!--- Divider -->
                <div id=\"sidebar-menu\">
                    <ul>
                        <li>
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-home\"></i><span> Dashboard </span></a>
                        </li>

                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-mail\"></i><span> Mail </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                
                            </ul>
                        </li>

                        <li>
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-event\"></i><span> Calendar </span></a>
                        </li>

                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-palette\"></i> <span> Elements </span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                            </ul>
                        </li>

                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-invert-colors-on\"></i><span> Components </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                              
                            </ul>
                        </li>

                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-redeem\"></i> <span> Icons </span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                            </ul>
                        </li>

                        <li class=\"has_sub\">
                            <a href=";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/javascript:void(0);"), "html", null, true);
        echo " class=\"waves-effect\"><i class=\"md md-share\"></i><span>Multi Level </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul>
                                <li class=\"has_sub\">
                                    <a href=";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/javascript:void(0);"), "html", null, true);
        echo " class=\"waves-effect\"><span>Menu Level 1.1</span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                    <ul style=\"\">
                                        <li><a href=\"javascript:void(0);\"><span>Menu Level 2.1</span></a></li>
                                        <li><a href=";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/javascript:void(0);"), "html", null, true);
        echo "><span>Menu Level 2.2</span></a></li>
                                        <li><a href=";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/javascript:void(0);"), "html", null, true);
        echo "><span>Menu Level 2.3</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/javascript:void(0);"), "html", null, true);
        echo "><span>Menu Level 1.2</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
        <!-- Left Sidebar End -->

";
        
        $__internal_6d02da563ff1d972ec44f6ebe1f2e94ec0257c3d58752ddecf9b7845cf4d4364->leave($__internal_6d02da563ff1d972ec44f6ebe1f2e94ec0257c3d58752ddecf9b7845cf4d4364_prof);

        
        $__internal_d7ffb4064c32a57031e7fd9e84c7e3962e43419d2dcbe8e1098aed5a40f65884->leave($__internal_d7ffb4064c32a57031e7fd9e84c7e3962e43419d2dcbe8e1098aed5a40f65884_prof);

    }

    // line 232
    public function block_body($context, array $blocks = array())
    {
        $__internal_208c6b22053001bd39c99aaa788f896e0be0021070d02c3fcdf346cf8ca5e6cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_208c6b22053001bd39c99aaa788f896e0be0021070d02c3fcdf346cf8ca5e6cb->enter($__internal_208c6b22053001bd39c99aaa788f896e0be0021070d02c3fcdf346cf8ca5e6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad2949b60a68845fea913d1ecac88f86a1853593b343e9d094d11f664709e806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad2949b60a68845fea913d1ecac88f86a1853593b343e9d094d11f664709e806->enter($__internal_ad2949b60a68845fea913d1ecac88f86a1853593b343e9d094d11f664709e806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 233
        $this->displayBlock('right', $context, $blocks);
        // line 298
        $this->displayBlock('rightside', $context, $blocks);
        // line 409
        echo "    </div>
    <!-- END wrapper -->
";
        
        $__internal_ad2949b60a68845fea913d1ecac88f86a1853593b343e9d094d11f664709e806->leave($__internal_ad2949b60a68845fea913d1ecac88f86a1853593b343e9d094d11f664709e806_prof);

        
        $__internal_208c6b22053001bd39c99aaa788f896e0be0021070d02c3fcdf346cf8ca5e6cb->leave($__internal_208c6b22053001bd39c99aaa788f896e0be0021070d02c3fcdf346cf8ca5e6cb_prof);

    }

    // line 233
    public function block_right($context, array $blocks = array())
    {
        $__internal_d20cb30bb735a19adfe8b263abeb583649a706d0c47479f962ed34a774868139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d20cb30bb735a19adfe8b263abeb583649a706d0c47479f962ed34a774868139->enter($__internal_d20cb30bb735a19adfe8b263abeb583649a706d0c47479f962ed34a774868139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        $__internal_ab52289e318dff1a84ab858ab536e4f5568a3ec007a34ba153b975c3d939fa0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab52289e318dff1a84ab858ab536e4f5568a3ec007a34ba153b975c3d939fa0c->enter($__internal_ab52289e318dff1a84ab858ab536e4f5568a3ec007a34ba153b975c3d939fa0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 234
        echo "        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class=\"content-page\">
            <!-- Start content -->
            <div class=\"content\">
                <div class=\"container\">

                    <!-- Page-Title -->
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                                              </div>
                    </div>

                    <!-- Start Widget -->
                    <!--Widget-4 -->
                    <!-- End row-->


                    <div class=\"row\">
                        <div class=\"col-lg-8\">
                            <div class=\"portlet\">
                                <!-- /portlet heading -->
                              
                            <!-- /Portlet -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-lg-4\">
                            <div class=\"portlet\">
                                <!-- /portlet heading -->
                              
                            <!-- /Portlet -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- End row -->


                    <div class=\"row\">
                        <!-- INBOX -->
                        <!-- end col-->


                        <!-- TODOs -->
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- container -->

            </div>
            <!-- content -->

            <footer class=\"footer text-right\">
                2016 © Moltran.
            </footer>

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
";
        
        $__internal_ab52289e318dff1a84ab858ab536e4f5568a3ec007a34ba153b975c3d939fa0c->leave($__internal_ab52289e318dff1a84ab858ab536e4f5568a3ec007a34ba153b975c3d939fa0c_prof);

        
        $__internal_d20cb30bb735a19adfe8b263abeb583649a706d0c47479f962ed34a774868139->leave($__internal_d20cb30bb735a19adfe8b263abeb583649a706d0c47479f962ed34a774868139_prof);

    }

    // line 298
    public function block_rightside($context, array $blocks = array())
    {
        $__internal_ae09241c032d086407c432f7508d1b9174ecbf2215e06481932d88f351a67b99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae09241c032d086407c432f7508d1b9174ecbf2215e06481932d88f351a67b99->enter($__internal_ae09241c032d086407c432f7508d1b9174ecbf2215e06481932d88f351a67b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightside"));

        $__internal_b7be6014c64bf7673521ece84a48a2a26cb15bf1ede2f5be7bb3364eb3169f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7be6014c64bf7673521ece84a48a2a26cb15bf1ede2f5be7bb3364eb3169f67->enter($__internal_b7be6014c64bf7673521ece84a48a2a26cb15bf1ede2f5be7bb3364eb3169f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightside"));

        // line 299
        echo "        <!-- Right Sidebar -->
        <div class=\"side-bar right-bar nicescroll\">
            <h4 class=\"text-center\">Chat</h4>
            <div class=\"contact-list nicescroll\">
                <ul class=\"list-group contacts-list\">
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/images/users/avatar-1.jpg"), "html", null, true);
        echo " alt=\"\">
                            </div>
                            <span class=\"name\">Chadengle</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/images/users/avatar-2.jpg"), "html", null, true);
        echo " alt=\"\">
                            </div>
                            <span class=\"name\">Tomaslau</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/images/users/avatar-3.jpg"), "html", null, true);
        echo " alt=\"\">
                            </div>
                            <span class=\"name\">Stillnotdavid</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/images/users/avatar-4.jpg"), "html", null, true);
        echo " alt=\"\">
                            </div>
                            <span class=\"name\">Kurafire</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/images/users/avatar-5.jpg"), "html", null, true);
        echo " alt=\"\">
                            </div>
                            <span class=\"name\">Shahedk</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/images/users/avatar-6.jpg"), "html", null, true);
        echo " alt=\"\">
                            </div>
                            <span class=\"name\">Adhamdannaway</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/images/users/avatar-7.jpg"), "html", null, true);
        echo " alt=\"\">
                            </div>
                            <span class=\"name\">Ok</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/images/users/avatar-8.jpg"), "html", null, true);
        echo " alt=\"\">
                            </div>
                            <span class=\"name\">Arashasghari</span>
                            <i class=\"fa fa-circle offline\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/images/users/avatar-9.jpg"), "html", null, true);
        echo " alt=\"\">
                            </div>
                            <span class=\"name\">Joshaustin</span>
                            <i class=\"fa fa-circle offline\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/assets/images/users/avatar-10.jpg"), "html", null, true);
        echo " alt=\"\">
                            </div>
                            <span class=\"name\">Sortino</span>
                            <i class=";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templatead/fa fa-circle offline"), "html", null, true);
        echo "></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /Right-bar -->
";
        
        $__internal_b7be6014c64bf7673521ece84a48a2a26cb15bf1ede2f5be7bb3364eb3169f67->leave($__internal_b7be6014c64bf7673521ece84a48a2a26cb15bf1ede2f5be7bb3364eb3169f67_prof);

        
        $__internal_ae09241c032d086407c432f7508d1b9174ecbf2215e06481932d88f351a67b99->leave($__internal_ae09241c032d086407c432f7508d1b9174ecbf2215e06481932d88f351a67b99_prof);

    }

    public function getTemplateName()
    {
        return "bibliocommuneBundle:Admin:admins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  789 => 400,  783 => 397,  770 => 387,  757 => 377,  744 => 367,  731 => 357,  718 => 347,  705 => 337,  692 => 327,  679 => 317,  666 => 307,  656 => 299,  647 => 298,  574 => 234,  565 => 233,  553 => 409,  551 => 298,  549 => 233,  540 => 232,  517 => 219,  510 => 215,  506 => 214,  500 => 211,  494 => 208,  448 => 165,  444 => 164,  440 => 163,  436 => 162,  427 => 156,  419 => 150,  410 => 149,  388 => 137,  384 => 136,  380 => 135,  376 => 134,  358 => 119,  340 => 104,  323 => 90,  306 => 76,  267 => 39,  258 => 38,  232 => 462,  227 => 460,  221 => 457,  212 => 451,  208 => 450,  204 => 449,  200 => 448,  196 => 447,  192 => 446,  188 => 445,  184 => 444,  177 => 440,  171 => 437,  167 => 436,  161 => 433,  155 => 430,  150 => 428,  146 => 427,  142 => 426,  138 => 425,  134 => 424,  130 => 423,  126 => 422,  122 => 421,  118 => 420,  114 => 419,  105 => 412,  103 => 232,  101 => 149,  99 => 38,  81 => 23,  76 => 21,  72 => 20,  68 => 19,  64 => 18,  60 => 17,  56 => 16,  52 => 15,  48 => 14,  43 => 12,  30 => 1,);
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
    <meta charset=\"utf-8\" />
    <title>Moltran - Responsive Admin Dashboard Template</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
    <meta content=\"Coderthemes\" name=\"author\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

    <link rel=\"shortcut icon\" href={{asset(\"templatead/assets/images/favicon_1.ico\")}}>

    <link href=\"{{asset('templatead/assets/plugins/sweetalert/dist/sweetalert.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('templatead/assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('templatead/assets/css/core.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('templatead/assets/css/icons.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('templatead/assets/css/components.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('templatead/assets/css/pages.css')}} \"rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('templatead/assets/css/menu.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('templatead/assets/css/responsive.css')}}\" rel=\"stylesheet\" type=\"text/css\">

    <script src={{asset(\"templatead/assets/js/modernizr.min.js\")}}></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->


</head>


<body class=\"fixed-left\">
{% block header %}
    <!-- Begin page -->
    <div id=\"wrapper\">
        <!-- Top Bar Start -->
        <div class=\"topbar\">
            <!-- LOGO -->
            <div class=\"topbar-left\">
                <div class=\"text-center\">
                    <a href=\"\" class=\"logo\"><i class=\"md md-terrain\"></i> <span>Bibliocommune</span></a>
                </div>
            </div>
            <!-- Button mobile view to collapse sidebar menu -->
            <div class=\"navbar navbar-default\" role=\"navigation\">
                <div class=\"container\">
                    <div class=\"\">
                        <div class=\"pull-left\">
                            <button type=\"button\" class=\"button-menu-mobile open-left\">
                                    <i class=\"fa fa-bars\"></i>
                                </button>
                            <span class=\"clearfix\"></span>
                        </div>
                        <form class=\"navbar-form pull-left\" role=\"search\">
                            <div class=\"templatead/form-group\">
                                <input type=\"text\" class=\"templatead/form-control search-bar\" placeholder=\"Type here for search...\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-search\"><i class=\"fa fa-search\"></i></button>
                        </form>

                        <ul class=\"nav navbar-nav navbar-right pull-right\">
                            <li class=\"dropdown hidden-xs\">
                                <a href=\"#\" data-target=\"#\" class=\"dropdown-toggle waves-effect waves-light\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                                    
                                    <i class=\"md md-notifications\"></i> <span class=\"badge badge-xs badge-danger\">3</span>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-lg\">
                                    <li class=\"text-center notifi-title\">Notification</li>
                                    <li class=\"list-group\">
                                        <!-- list item-->
                                        <a href={{asset(\"templatead/javascript:void(0);\" )}}class=\"list-group-item\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <em class=\"fa fa-user-plus fa-2x text-info\"></em>
                                                </div>
                                                <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New user registered</div>
                                                    <p class=\"m-0\">
                                                        <small>You have 10 unread messages</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- list item-->
                                        <a href={{asset(\"templatead/javascript:void(0);\")}} class=\"list-group-item\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <em class=\"fa fa-diamond fa-2x text-primary\"></em>
                                                </div>
                                                <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New settings</div>
                                                    <p class=\"m-0\">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- list item-->
                                        <a href={{asset(\"templatead/javascript:void(0);\")}} class=\"list-group-item\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <em class=\"fa fa-bell-o fa-2x text-danger\"></em>
                                                </div>
                                                <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">Updates</div>
                                                    <p class=\"m-0\">
                                                        <small>There are
                                                          <span class=\"text-primary\">2</span> new updates available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- last list item -->
                                        <a href={{asset(\"templatead/javascript:void(0);\")}} class=\"list-group-item\">
                                            <small>See all notifications</small>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"hidden-xs\">
                                <a href=\"#\" id=\"btn-fullscreen\" class=\"waves-effect waves-light\"><i class=\"md md-crop-free\"></i></a>
                            </li>
                            <li class=\"hidden-xs\">
                                <a href=\"#\" class=\"right-bar-toggle waves-effect waves-light\"><i class=\"md md-chat\"></i></a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"\" class=\"dropdown-toggle profile\" data-toggle=\"dropdown\" aria-expanded=\"true\"><img src=\"assets/images/users/avatar-1.jpg\" alt=\"user-img\" class=\"img-circle\"> </a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href={{asset(\"templatead/javascript:void(0)\")}}><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                    <li><a href={{asset(\"templatead/javascript:void(0)\")}}><i class=\"md md-settings\"></i> Settings</a></li>
                                    <li><a href={{asset(\"templatead/javascript:void(0)\")}}><i class=\"md md-lock\"></i> Lock screen</a></li>
                                    <li><a href={{asset(\"templatead/javascript:void(0)\")}}><i class=\"md md-settings-power\"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

{% endblock %}
{% block sidebar %}
        <!-- ========== Left Sidebar Start ========== -->

        <div class=\"left side-menu\">
            <div class=\"sidebar-inner slimscrollleft\">
                <div class=\"user-details\">
                    <div class=\"pull-left\">
                        <img src={{asset(\"templatead/assets/images/dieyna.jpeg\")}} alt=\"\" class=\"thumb-md img-circle\">
                    </div>
                    <div class=\"user-info\">
                        <div class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">TENE<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href={{asset(\"templatead/javascript:void(0)\")}}><i class=\"md md-face-unlock\"></i> Profile<div class=\"ripple-wrapper\"></div></a></li>
                                <li><a href={{asset(\"templatead/javascript:void(0)\")}}><i class=\"md md-settings\"></i> Settings</a></li>
                                <li><a href={{asset(\"templatead/javascript:void(0)\")}}><i class=\"md md-lock\"></i> Lock screen</a></li>
                                <li><a href={{asset(\"templatead/javascript:void(0)\")}}><i class=\"md md-settings-power\"></i> Logout</a></li>
                            </ul>
                        </div><p class=\"text-muted m-0\">Administrator</p>
                    </div>
                </div>
                <!--- Divider -->
                <div id=\"sidebar-menu\">
                    <ul>
                        <li>
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-home\"></i><span> Dashboard </span></a>
                        </li>

                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-mail\"></i><span> Mail </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                
                            </ul>
                        </li>

                        <li>
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-event\"></i><span> Calendar </span></a>
                        </li>

                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-palette\"></i> <span> Elements </span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                            </ul>
                        </li>

                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-invert-colors-on\"></i><span> Components </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                              
                            </ul>
                        </li>

                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-redeem\"></i> <span> Icons </span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                            </ul>
                        </li>

                        <li class=\"has_sub\">
                            <a href={{asset(\"templatead/javascript:void(0);\")}} class=\"waves-effect\"><i class=\"md md-share\"></i><span>Multi Level </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul>
                                <li class=\"has_sub\">
                                    <a href={{asset(\"templatead/javascript:void(0);\")}} class=\"waves-effect\"><span>Menu Level 1.1</span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                    <ul style=\"\">
                                        <li><a href=\"javascript:void(0);\"><span>Menu Level 2.1</span></a></li>
                                        <li><a href={{asset(\"templatead/javascript:void(0);\")}}><span>Menu Level 2.2</span></a></li>
                                        <li><a href={{asset(\"templatead/javascript:void(0);\")}}><span>Menu Level 2.3</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href={{asset(\"templatead/javascript:void(0);\")}}><span>Menu Level 1.2</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
        <!-- Left Sidebar End -->

{% endblock %}
{% block body %}
{% block right %}
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class=\"content-page\">
            <!-- Start content -->
            <div class=\"content\">
                <div class=\"container\">

                    <!-- Page-Title -->
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                                              </div>
                    </div>

                    <!-- Start Widget -->
                    <!--Widget-4 -->
                    <!-- End row-->


                    <div class=\"row\">
                        <div class=\"col-lg-8\">
                            <div class=\"portlet\">
                                <!-- /portlet heading -->
                              
                            <!-- /Portlet -->
                        </div>
                        <!-- end col -->

                        <div class=\"col-lg-4\">
                            <div class=\"portlet\">
                                <!-- /portlet heading -->
                              
                            <!-- /Portlet -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- End row -->


                    <div class=\"row\">
                        <!-- INBOX -->
                        <!-- end col-->


                        <!-- TODOs -->
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- container -->

            </div>
            <!-- content -->

            <footer class=\"footer text-right\">
                2016 © Moltran.
            </footer>

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
{% endblock %}
{% block  rightside %}
        <!-- Right Sidebar -->
        <div class=\"side-bar right-bar nicescroll\">
            <h4 class=\"text-center\">Chat</h4>
            <div class=\"contact-list nicescroll\">
                <ul class=\"list-group contacts-list\">
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src={{asset(\"templatead/assets/images/users/avatar-1.jpg\")}} alt=\"\">
                            </div>
                            <span class=\"name\">Chadengle</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src={{asset(\"templatead/assets/images/users/avatar-2.jpg\")}} alt=\"\">
                            </div>
                            <span class=\"name\">Tomaslau</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src={{asset(\"templatead/assets/images/users/avatar-3.jpg\")}} alt=\"\">
                            </div>
                            <span class=\"name\">Stillnotdavid</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src={{asset(\"templatead/assets/images/users/avatar-4.jpg\")}} alt=\"\">
                            </div>
                            <span class=\"name\">Kurafire</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src={{asset(\"templatead/assets/images/users/avatar-5.jpg\")}} alt=\"\">
                            </div>
                            <span class=\"name\">Shahedk</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src={{asset(\"templatead/assets/images/users/avatar-6.jpg\")}} alt=\"\">
                            </div>
                            <span class=\"name\">Adhamdannaway</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src={{asset(\"templatead/assets/images/users/avatar-7.jpg\")}} alt=\"\">
                            </div>
                            <span class=\"name\">Ok</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src={{asset(\"templatead/assets/images/users/avatar-8.jpg\")}} alt=\"\">
                            </div>
                            <span class=\"name\">Arashasghari</span>
                            <i class=\"fa fa-circle offline\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src={{asset(\"templatead/assets/images/users/avatar-9.jpg\")}} alt=\"\">
                            </div>
                            <span class=\"name\">Joshaustin</span>
                            <i class=\"fa fa-circle offline\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src={{asset(\"templatead/assets/images/users/avatar-10.jpg\")}} alt=\"\">
                            </div>
                            <span class=\"name\">Sortino</span>
                            <i class={{asset(\"templatead/fa fa-circle offline\")}}></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /Right-bar -->
{% endblock %}
    </div>
    <!-- END wrapper -->
{% endblock %}


    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src={{asset(\"templatead/assets/js/jquery.min.js\")}}></script>
    <script src={{asset(\"templatead/assets/js/bootstrap.min.js\")}}></script>
    <script src={{asset(\"templatead/assets/js/detect.js\")}}></script>
    <script src={{asset(\"templatead/assets/js/fastclick.js\")}}></script>
    <script src={{asset(\"templatead/assets/js/jquery.slimscroll.js\")}}></script>
    <script src={{asset(\"templatead/assets/js/jquery.blockUI.js\")}}></script>
    <script src={{asset(\"templatead/assets/js/waves.js\")}}></script>
    <script src={{asset(\"templatead/assets/js/wow.min.js\")}}></script>
    <script src={{asset(\"templatead/assets/js/jquery.nicescroll.js\")}}></script>
    <script src={{asset(\"templatead/assets/js/jquery.scrollTo.min.js\")}}></script>

    <script src={{asset(\"templatead/assets/js/jquery.app.js\")}}></script>

    <!-- jQuery  -->
    <script src={{asset(\"templatead/assets/plugins/moment/moment.js\")}}></script>

    <!-- jQuery  -->
    <script src={{asset(\"templatead/assets/plugins/waypoints/lib/jquery.waypoints.js\")}}></script>
    <script src={{asset(\"templatead/assets/plugins/counterup/jquery.counterup.min.js\")}}></script>

    <!-- jQuery  -->
    <script src={{asset(\"templatead/assets/plugins/sweetalert/dist/sweetalert.min.js\")}}></script>


    <!-- flot Chart -->
    <script src={{asset(\"templatead/assets/plugins/flot-chart/jquery.flot.js\")}}></script>
    <script src={{asset(\"templatead/assets/plugins/flot-chart/jquery.flot.time.js\")}}></script>
    <script src={{asset(\"templatead/assets/plugins/flot-chart/jquery.flot.tooltip.min.js\")}}></script>
    <script src={{asset(\"templatead/assets/plugins/flot-chart/jquery.flot.resize.js\")}}></script>
    <script src={{asset(\"templatead/assets/plugins/flot-chart/jquery.flot.pie.js\")}}></script>
    <script src={{asset(\"templatead/assets/plugins/flot-chart/jquery.flot.selection.js\")}}></script>
    <script src={{asset(\"templatead/assets/plugins/flot-chart/jquery.flot.stack.js\")}}></script>
    <script src={{asset(\"templatead/assets/plugins/flot-chart/jquery.flot.crosshair.js\")}}></script>

    <!-- jQuery  -->
    <script src=\"assets/pages/jquery.todo.js\"></script>

    <!-- jQuery  -->
    <script src={{asset(\"templatead/assets/pages/jquery.chat.js\")}}></script>

    <!-- jQuery  -->
    <script src={{asset(\"templatead/assets/pages/jquery.dashboard.js\")}}></script>

    <script type={{asset(\"templatead/text/javascript\")}}>
        /* ==============================================
                            Counter Up
                            =============================================== */
        jQuery(document).ready(function(\$) {
            \$('.counter').counterUp({
                delay: 100,
                time: 1200
            });
        });
    </script>


</body>

</html>", "bibliocommuneBundle:Admin:admins.html.twig", "/var/www/html/Ma commune/BibliothequeCommune/src/MBC/bibliocommuneBundle/Resources/views/Admin/admins.html.twig");
    }
}
