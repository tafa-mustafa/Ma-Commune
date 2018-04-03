<?php

/* bibliocommuneBundle::homeadmin.html.twig */
class __TwigTemplate_3ffe242b52b5ba2c0f871c0e45e640ffb5ee4a924e13295e35125a4f0830aad6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'href' => array($this, 'block_href'),
            'body' => array($this, 'block_body'),
            'container' => array($this, 'block_container'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_527bb22d5a4a6cb4b3fe008d8aba5523e67fc28e114e2913877dfbfdd35bfb14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_527bb22d5a4a6cb4b3fe008d8aba5523e67fc28e114e2913877dfbfdd35bfb14->enter($__internal_527bb22d5a4a6cb4b3fe008d8aba5523e67fc28e114e2913877dfbfdd35bfb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliocommuneBundle::homeadmin.html.twig"));

        $__internal_28eee8c97e7d21c13347b16361a2679f07c73b0eb3a0b3eeac7b31ad760c0100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28eee8c97e7d21c13347b16361a2679f07c73b0eb3a0b3eeac7b31ad760c0100->enter($__internal_28eee8c97e7d21c13347b16361a2679f07c73b0eb3a0b3eeac7b31ad760c0100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliocommuneBundle::homeadmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\" />
    <title>Premium Immobilier</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
    <meta content=\"Coderthemes\" name=\"author\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

    ";
        // line 12
        $this->displayBlock('href', $context, $blocks);
        // line 48
        echo "
</head>


<body class=\"fixed-left\">
";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 539
        echo "</body>

</html>";
        
        $__internal_527bb22d5a4a6cb4b3fe008d8aba5523e67fc28e114e2913877dfbfdd35bfb14->leave($__internal_527bb22d5a4a6cb4b3fe008d8aba5523e67fc28e114e2913877dfbfdd35bfb14_prof);

        
        $__internal_28eee8c97e7d21c13347b16361a2679f07c73b0eb3a0b3eeac7b31ad760c0100->leave($__internal_28eee8c97e7d21c13347b16361a2679f07c73b0eb3a0b3eeac7b31ad760c0100_prof);

    }

    // line 12
    public function block_href($context, array $blocks = array())
    {
        $__internal_dc353c4ac61dd3a2ca1783f0487d914f37692f0ddfca722c0156753e0f62c26f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc353c4ac61dd3a2ca1783f0487d914f37692f0ddfca722c0156753e0f62c26f->enter($__internal_dc353c4ac61dd3a2ca1783f0487d914f37692f0ddfca722c0156753e0f62c26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "href"));

        $__internal_849d65deb6748e8500d8c1eb18ebc09dfb17e085993724088ec86f87613e7f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_849d65deb6748e8500d8c1eb18ebc09dfb17e085993724088ec86f87613e7f2e->enter($__internal_849d65deb6748e8500d8c1eb18ebc09dfb17e085993724088ec86f87613e7f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "href"));

        // line 13
        echo "
        <link rel=\"shortcut icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/favicon_1.ico"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/magnific-popup/dist/magnific-popup.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"asset('assets/plugins/jquery-datatables-editable/datatables.css')}}\">

        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/sweetalert/dist/sweetalert.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/core.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/pages.css"), "html", null, true);
        echo " \" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">


        ";
        // line 30
        echo "
        <link rel=\"shortcut icon\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/favicon_1.ico"), "html", null, true);
        echo "\">

        ";
        // line 34
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/dropzone/dist/dropzone.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/core.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/pages.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        ";
        // line 44
        echo "
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/modernizr.min.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_849d65deb6748e8500d8c1eb18ebc09dfb17e085993724088ec86f87613e7f2e->leave($__internal_849d65deb6748e8500d8c1eb18ebc09dfb17e085993724088ec86f87613e7f2e_prof);

        
        $__internal_dc353c4ac61dd3a2ca1783f0487d914f37692f0ddfca722c0156753e0f62c26f->leave($__internal_dc353c4ac61dd3a2ca1783f0487d914f37692f0ddfca722c0156753e0f62c26f_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4d890f5c92a181b76ba47eb2e227256dfb4eba589a4ebcd3260f2af23cf8ab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4d890f5c92a181b76ba47eb2e227256dfb4eba589a4ebcd3260f2af23cf8ab8->enter($__internal_d4d890f5c92a181b76ba47eb2e227256dfb4eba589a4ebcd3260f2af23cf8ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c34da29fcc4215867074552b2233e8a60daabc032694ffdcdcdf6dc98c325e40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c34da29fcc4215867074552b2233e8a60daabc032694ffdcdcdf6dc98c325e40->enter($__internal_c34da29fcc4215867074552b2233e8a60daabc032694ffdcdcdf6dc98c325e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 54
        echo "    ";
        // line 55
        echo "    <div id=\"wrapper\">

        ";
        // line 58
        echo "        <div class=\"topbar\">
            ";
        // line 60
        echo "            <div class=\"topbar-left\">
                <div class=\"text-center\">
                    <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("index.html"), "html", null, true);
        echo "\" class=\"logo\"><i class=\"md md-home\"></i> <span>PREMIUM</span></a>
                </div>
            </div>
            ";
        // line 66
        echo "            <div class=\"navbar navbar-default\" role=\"navigation\">
                <div class=\"container\">
                    <div class=\"\">
                        <div class=\"pull-left\">
                            <button type=\"button\" class=\"button-menu-mobile open-left\">
                                <i class=\"fa fa-bars\"></i>
                            </button>
                            <span class=\"clearfix\"></span>
                        </div>
                        <form class=\"navbar-form pull-left\" role=\"search\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control search-bar\" placeholder=\"Type here for search...\">
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
                                        {
                                        <a href=\"javascript:void(0)\" class=\"list-group-item\">
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

                                        <a href=\"javascript:void(0)\" class=\"list-group-item\">
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

                                        <a href=\"javascript:void(0)\" class=\"list-group-item\">
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

                                        <a href=\"javascript:void(0)\" class=\"list-group-item\">
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
                                    <li><a href=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript:void(0)"), "html", null, true);
        echo "\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                    <li><a href=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript:void(0)"), "html", null, true);
        echo "\"><i class=\"md md-settings\"></i> Settings</a></li>
                                    <li><a href=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript:void(0)"), "html", null, true);
        echo "\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                    <li><a href=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript:void(0)"), "html", null, true);
        echo "\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    ";
        // line 158
        echo "                </div>
            </div>
        </div>
        ";
        // line 162
        echo "


        ";
        // line 166
        echo "
        <div class=\"left side-menu\">
            <div class=\"sidebar-inner slimscrollleft\">
                <div class=\"user-details\">
                    <div class=\"pull-left\">
                        <img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/dieyna.jpeg"), "html", null, true);
        echo "\" alt=\"\" class=\"thumb-md img-circle\">
                    </div>
                    <div class=\"user-info\">
                        <div class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">IBNALIOU<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript:void(0)"), "html", null, true);
        echo "\"><i class=\"md md-face-unlock\"></i> Profile<div class=\"ripple-wrapper\"></div></a></li>
                                <li><a href=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript:void(0)"), "html", null, true);
        echo "\"><i class=\"md md-settings\"></i> Settings</a></li>
                                <li><a href=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript:void(0)"), "html", null, true);
        echo "\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                <li><a href=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript:void(0)"), "html", null, true);
        echo "\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                            </ul>
                        </div>

                        <p class=\"text-muted m-0\">Administrator</p>
                    </div>
                </div>";
        // line 188
        echo "                <div id=\"sidebar-menu\">
                    <ul>
                        <li>
                            <a href=\"";
        // line 191
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator");
        echo "\" class=\"waves-effect\"><i class=\"md md-home\"></i><span> ACCEUIL </span></a>

                        <li class=\"has_sub\">
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span> BIENS </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled \">
                                <li><a href=\"";
        // line 196
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_bien");
        echo "\">LISTE DES BIENS</a></li>
                                <li><a href=\"";
        // line 197
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formbien");
        echo "\">AJOUTER UN BIEN</a></li>
                            </ul>
                        </li>

                        <li class=\"has_sub\">
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span> RESERVATIONS CLIENT </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled \">
                                <li><a href=\"";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_reservation");
        echo "\">LISTE DES RESERVATIONS</a></li>
                            </ul>
                        </li>


                        <li class=\"has_sub\">
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span> RESERVATIONS PROPRIETAIRE </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled \">
                                <li><a href=\"";
        // line 212
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_reservationPro");
        echo "\">BIEN PROPOSER</a></li>
                                <li><a href=\"\">AJOUT LOCALITE</a></li>

                            </ul>
                        </li>


                        <li class=\"has_sub\">
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span> TYPES DE BIENS </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled \">
                                <li><a href=\"";
        // line 222
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_bien");
        echo "\">LISTE TYPES</a></li>
                                <li><a href=\"";
        // line 223
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_bien");
        echo "\">AJOUT TYPE</a></li>

                            </ul>
                        </li>


                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-mail\"></i><span> Mail </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("mail-inbox.html"), "html", null, true);
        echo "\">Inbox</a></li>
                                <li><a href=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("mail-compose.html"), "html", null, true);
        echo "\">Compose Mail</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href=";
        // line 238
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Calendar");
        echo " class=\"waves-effect\"><i class=\"md md-event\"></i><span> Calendar </span></a>
                        </li>












                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-place\"></i><span> Maps </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("maps-google.html"), "html", null, true);
        echo "\"> Google Map</a></li>
                                <li><a href=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("maps-vector.html"), "html", null, true);
        echo "\"> Vector Map</a></li>
                            </ul>
                        </li>



                    </ul>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
        ";
        // line 269
        echo "

        ";
        // line 272
        echo "        ";
        // line 273
        echo "        ";
        // line 274
        echo "        ";
        $this->displayBlock('container', $context, $blocks);
        // line 299
        echo "        ";
        // line 300
        echo "        ";
        // line 301
        echo "        ";
        // line 302
        echo "

        <div class=\"side-bar right-bar nicescroll\">
            <h4 class=\"text-center\">Chat</h4>
            <div class=\"contact-list nicescroll\">
                <ul class=\"list-group contacts-list\">
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">Chadengle</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">Tomaslau</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">Stillnotdavid</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">Kurafire</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">Shahedk</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">Adhamdannaway</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-7.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">Ok</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-8.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">Arashasghari</span>
                            <i class=\"fa fa-circle offline\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-9.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">Joshaustin</span>
                            <i class=\"fa fa-circle offline\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-10.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">Sortino</span>
                            <i class=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fa fa-circle offline"), "html", null, true);
        echo "\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                </ul>
            </div>
        </div>
        ";
        // line 412
        echo "
    </div>
    ";
        // line 415
        echo "
";
        // line 416
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_c34da29fcc4215867074552b2233e8a60daabc032694ffdcdcdf6dc98c325e40->leave($__internal_c34da29fcc4215867074552b2233e8a60daabc032694ffdcdcdf6dc98c325e40_prof);

        
        $__internal_d4d890f5c92a181b76ba47eb2e227256dfb4eba589a4ebcd3260f2af23cf8ab8->leave($__internal_d4d890f5c92a181b76ba47eb2e227256dfb4eba589a4ebcd3260f2af23cf8ab8_prof);

    }

    // line 274
    public function block_container($context, array $blocks = array())
    {
        $__internal_4f3690c8228a610c610ca98aef1d071328a790bb077552cabe3e14c719d1ac69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f3690c8228a610c610ca98aef1d071328a790bb077552cabe3e14c719d1ac69->enter($__internal_4f3690c8228a610c610ca98aef1d071328a790bb077552cabe3e14c719d1ac69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_e0f09c11f93e979bad92f27867a175c23743c1fb572112db91b26ea02534b1ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0f09c11f93e979bad92f27867a175c23743c1fb572112db91b26ea02534b1ae->enter($__internal_e0f09c11f93e979bad92f27867a175c23743c1fb572112db91b26ea02534b1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 275
        echo "            <div class=\"content-page\">
                ";
        // line 277
        echo "                <div class=\"content\">
                    <div class=\"container\">

                        ";
        // line 281
        echo "

                        <div class=\"row\">

                        </div>
                        ";
        // line 287
        echo "                    </div>
                    ";
        // line 289
        echo "
                </div>
                ";
        // line 292
        echo "
                <footer class=\"footer text-right\">
                    2016 © Moltran.
                </footer>

            </div>
        ";
        
        $__internal_e0f09c11f93e979bad92f27867a175c23743c1fb572112db91b26ea02534b1ae->leave($__internal_e0f09c11f93e979bad92f27867a175c23743c1fb572112db91b26ea02534b1ae_prof);

        
        $__internal_4f3690c8228a610c610ca98aef1d071328a790bb077552cabe3e14c719d1ac69->leave($__internal_4f3690c8228a610c610ca98aef1d071328a790bb077552cabe3e14c719d1ac69_prof);

    }

    // line 416
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_b32d3361bc122ee65e998d1dbdcdb53b87e8dca7bae1d0c128456e3fb6225c5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b32d3361bc122ee65e998d1dbdcdb53b87e8dca7bae1d0c128456e3fb6225c5c->enter($__internal_b32d3361bc122ee65e998d1dbdcdb53b87e8dca7bae1d0c128456e3fb6225c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_eb448c56a69f878258cf45f86a49c8aa940299ffa14f938c28295b742546043e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb448c56a69f878258cf45f86a49c8aa940299ffa14f938c28295b742546043e->enter($__internal_eb448c56a69f878258cf45f86a49c8aa940299ffa14f938c28295b742546043e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 417
        echo "
<script>
var resizefunc = [];
</script>

";
        // line 423
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/detect.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/fastclick.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/waves.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/wow.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.app.js"), "html", null, true);
        echo "\"></script>

";
        // line 437
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/moment/moment.js"), "html", null, true);
        echo "\"></script>

";
        // line 440
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/waypoints/lib/jquery.waypoints.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>

";
        // line 444
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/sweetalert/dist/sweetalert.min.js"), "html", null, true);
        echo "\"></script>


";
        // line 448
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.tooltip.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.selection.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.crosshair.js"), "html", null, true);
        echo "\"></script>




    <script>
        var resizefunc = [];
    </script>

";
        // line 465
        echo "

    ";
        // line 468
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/detect.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/fastclick.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 472
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/waves.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/wow.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"assets/js/jquery.app.js\"></script>

    ";
        // line 482
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/dropzone/dist/dropzone.js"), "html", null, true);
        echo "\"></script>


<script src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/jquery.todo.js"), "html", null, true);
        echo "\"></script>

";
        // line 488
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/jquery.chat.js"), "html", null, true);
        echo "\"></script>

";
        // line 491
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/jquery.dashboard.js"), "html", null, true);
        echo "\"></script>


<script src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatables-editable/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 497
        echo "assets/pages/datatables.editable.init.js";
        echo "\"></script>


        <script type=\"text/javascript\">
        \$(document).ready(function() {

            \$('#datatable-editable').dataTable();
            \$('#datatable-keytable').DataTable( { keys: true } );
            \$('#datatable-responsive').DataTable();
            \$('#datatable-scroller').DataTable( { ajax: \"assets/plugins/datatables/json/scroller-demo.json\", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
            var table = \$('#datatable-editable').DataTable( { fixedHeader: true } );
        } );
        TableManageButtons.init();
    </script>



<script type=\"text/javascript\">






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

";
        
        $__internal_eb448c56a69f878258cf45f86a49c8aa940299ffa14f938c28295b742546043e->leave($__internal_eb448c56a69f878258cf45f86a49c8aa940299ffa14f938c28295b742546043e_prof);

        
        $__internal_b32d3361bc122ee65e998d1dbdcdb53b87e8dca7bae1d0c128456e3fb6225c5c->leave($__internal_b32d3361bc122ee65e998d1dbdcdb53b87e8dca7bae1d0c128456e3fb6225c5c_prof);

    }

    public function getTemplateName()
    {
        return "bibliocommuneBundle::homeadmin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  915 => 497,  911 => 496,  907 => 495,  903 => 494,  896 => 491,  890 => 488,  885 => 485,  878 => 482,  871 => 477,  867 => 476,  863 => 475,  859 => 474,  855 => 473,  851 => 472,  847 => 471,  843 => 470,  839 => 469,  834 => 468,  830 => 465,  818 => 455,  814 => 454,  810 => 453,  806 => 452,  802 => 451,  798 => 450,  794 => 449,  789 => 448,  782 => 444,  777 => 441,  772 => 440,  766 => 437,  761 => 434,  756 => 432,  752 => 431,  748 => 430,  744 => 429,  740 => 428,  736 => 427,  732 => 426,  728 => 425,  724 => 424,  719 => 423,  712 => 417,  703 => 416,  687 => 292,  683 => 289,  680 => 287,  673 => 281,  668 => 277,  665 => 275,  656 => 274,  646 => 416,  643 => 415,  639 => 412,  629 => 404,  623 => 401,  610 => 391,  597 => 381,  584 => 371,  571 => 361,  558 => 351,  545 => 341,  532 => 331,  519 => 321,  506 => 311,  495 => 302,  493 => 301,  491 => 300,  489 => 299,  486 => 274,  484 => 273,  482 => 272,  478 => 269,  463 => 256,  459 => 255,  439 => 238,  431 => 233,  427 => 232,  415 => 223,  411 => 222,  398 => 212,  387 => 204,  377 => 197,  373 => 196,  365 => 191,  360 => 188,  351 => 180,  347 => 179,  343 => 178,  339 => 177,  330 => 171,  323 => 166,  318 => 162,  313 => 158,  305 => 152,  301 => 151,  297 => 150,  293 => 149,  208 => 66,  202 => 62,  198 => 60,  195 => 58,  191 => 55,  189 => 54,  180 => 53,  167 => 45,  164 => 44,  160 => 42,  156 => 41,  152 => 40,  148 => 39,  144 => 38,  140 => 37,  136 => 36,  130 => 34,  125 => 31,  122 => 30,  116 => 26,  112 => 25,  108 => 24,  104 => 23,  100 => 22,  96 => 21,  92 => 20,  88 => 19,  82 => 16,  77 => 14,  74 => 13,  65 => 12,  53 => 539,  51 => 53,  44 => 48,  42 => 12,  29 => 1,);
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
    <title>Premium Immobilier</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
    <meta content=\"Coderthemes\" name=\"author\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

    {% block href %}

        <link rel=\"shortcut icon\" href=\"{{asset('assets/images/favicon_1.ico')}}\">

        <link rel=\"stylesheet\" href=\"{{asset('assets/plugins/magnific-popup/dist/magnific-popup.css')}}\">
        <link rel=\"stylesheet\" href=\"asset('assets/plugins/jquery-datatables-editable/datatables.css')}}\">

        <link href=\"{{asset('assets/plugins/sweetalert/dist/sweetalert.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/core.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/icons.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/components.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/pages.css')}} \" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/menu.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/responsive.css')}}\" rel=\"stylesheet\" type=\"text/css\">


        {# upload images #}

        <link rel=\"shortcut icon\" href=\"{{asset('assets/images/favicon_1.ico')}}\">

        {# Dropzone css #}
        <link href=\"{{asset('assets/plugins/dropzone/dist/dropzone.css')}}\" rel=\"stylesheet\" type=\"text/css\">

        <link href=\"{{asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/core.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/icons.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/components.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/pages.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/menu.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/responsive.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        {#fin#}

        <script src=\"{{asset ('assets/js/modernizr.min.js')}}\"></script>

    {% endblock %}

</head>


<body class=\"fixed-left\">
{% block body%}
    {# Begin page #}
    <div id=\"wrapper\">

        {# Top Bar Start #}
        <div class=\"topbar\">
            {# LOGO #}
            <div class=\"topbar-left\">
                <div class=\"text-center\">
                    <a href=\"{{asset ('index.html')}}\" class=\"logo\"><i class=\"md md-home\"></i> <span>PREMIUM</span></a>
                </div>
            </div>
            {# Button mobile view to collapse sidebar menu #}
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
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control search-bar\" placeholder=\"Type here for search...\">
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
                                        {
                                        <a href=\"javascript:void(0)\" class=\"list-group-item\">
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

                                        <a href=\"javascript:void(0)\" class=\"list-group-item\">
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

                                        <a href=\"javascript:void(0)\" class=\"list-group-item\">
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

                                        <a href=\"javascript:void(0)\" class=\"list-group-item\">
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
                                    <li><a href=\"{{asset ('javascript:void(0)')}}\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                    <li><a href=\"{{asset ('javascript:void(0)')}}\"><i class=\"md md-settings\"></i> Settings</a></li>
                                    <li><a href=\"{{asset ('javascript:void(0)')}}\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                    <li><a href=\"{{asset ('javascript:void(0)')}}\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    {#/.nav-collapse #}
                </div>
            </div>
        </div>
        {# Top Bar End #}



        {# ========== Left Sidebar Start ========== #}

        <div class=\"left side-menu\">
            <div class=\"sidebar-inner slimscrollleft\">
                <div class=\"user-details\">
                    <div class=\"pull-left\">
                        <img src=\"{{asset ('assets/images/dieyna.jpeg')}}\" alt=\"\" class=\"thumb-md img-circle\">
                    </div>
                    <div class=\"user-info\">
                        <div class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">IBNALIOU<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"{{asset ('javascript:void(0)')}}\"><i class=\"md md-face-unlock\"></i> Profile<div class=\"ripple-wrapper\"></div></a></li>
                                <li><a href=\"{{asset ('javascript:void(0)')}}\"><i class=\"md md-settings\"></i> Settings</a></li>
                                <li><a href=\"{{asset ('javascript:void(0)')}}\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                <li><a href=\"{{asset ('javascript:void(0)')}}\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                            </ul>
                        </div>

                        <p class=\"text-muted m-0\">Administrator</p>
                    </div>
                </div>
                {#- Divider #}
                <div id=\"sidebar-menu\">
                    <ul>
                        <li>
                            <a href=\"{{path('administrator')}}\" class=\"waves-effect\"><i class=\"md md-home\"></i><span> ACCEUIL </span></a>

                        <li class=\"has_sub\">
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span> BIENS </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled \">
                                <li><a href=\"{{path('list_bien')}}\">LISTE DES BIENS</a></li>
                                <li><a href=\"{{path('formbien')}}\">AJOUTER UN BIEN</a></li>
                            </ul>
                        </li>

                        <li class=\"has_sub\">
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span> RESERVATIONS CLIENT </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled \">
                                <li><a href=\"{{path('list_reservation')}}\">LISTE DES RESERVATIONS</a></li>
                            </ul>
                        </li>


                        <li class=\"has_sub\">
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span> RESERVATIONS PROPRIETAIRE </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled \">
                                <li><a href=\"{{path('list_reservationPro')}}\">BIEN PROPOSER</a></li>
                                <li><a href=\"\">AJOUT LOCALITE</a></li>

                            </ul>
                        </li>


                        <li class=\"has_sub\">
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span> TYPES DE BIENS </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled \">
                                <li><a href=\"{{path('list_bien')}}\">LISTE TYPES</a></li>
                                <li><a href=\"{{path('list_bien')}}\">AJOUT TYPE</a></li>

                            </ul>
                        </li>


                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-mail\"></i><span> Mail </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"{{asset ('mail-inbox.html')}}\">Inbox</a></li>
                                <li><a href=\"{{asset ('mail-compose.html')}}\">Compose Mail</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href={{path('Calendar')}} class=\"waves-effect\"><i class=\"md md-event\"></i><span> Calendar </span></a>
                        </li>












                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-place\"></i><span> Maps </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"{{asset ('maps-google.html')}}\"> Google Map</a></li>
                                <li><a href=\"{{asset ('maps-vector.html')}}\"> Vector Map</a></li>
                            </ul>
                        </li>



                    </ul>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
        {# Left Sidebar End #}


        {# ============================================================== #}
        {# Start right Content here #}
        {# ============================================================== #}
        {% block container %}
            <div class=\"content-page\">
                {# Start content #}
                <div class=\"content\">
                    <div class=\"container\">

                        {#NOTRE FORMIULAIRE#}


                        <div class=\"row\">

                        </div>
                        {# End row #}
                    </div>
                    {# container #}

                </div>
                {# content #}

                <footer class=\"footer text-right\">
                    2016 © Moltran.
                </footer>

            </div>
        {% endblock container %}
        {# ============================================================== #}
        {# End Right content here #}
        {# ============================================================== #}


        <div class=\"side-bar right-bar nicescroll\">
            <h4 class=\"text-center\">Chat</h4>
            <div class=\"contact-list nicescroll\">
                <ul class=\"list-group contacts-list\">
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"{{asset ('assets/images/users/avatar-1.jpg')}}\" alt=\"\">
                            </div>
                            <span class=\"name\">Chadengle</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"{{asset ('assets/images/users/avatar-2.jpg')}}\" alt=\"\">
                            </div>
                            <span class=\"name\">Tomaslau</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"{{asset ('assets/images/users/avatar-3.jpg')}}\" alt=\"\">
                            </div>
                            <span class=\"name\">Stillnotdavid</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"{{asset ('assets/images/users/avatar-4.jpg')}}\" alt=\"\">
                            </div>
                            <span class=\"name\">Kurafire</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"{{asset ('assets/images/users/avatar-5.jpg')}}\" alt=\"\">
                            </div>
                            <span class=\"name\">Shahedk</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"{{asset ('assets/images/users/avatar-6.jpg')}}\" alt=\"\">
                            </div>
                            <span class=\"name\">Adhamdannaway</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"{{asset ('assets/images/users/avatar-7.jpg')}}\" alt=\"\">
                            </div>
                            <span class=\"name\">Ok</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"{{asset ('assets/images/users/avatar-8.jpg')}}\" alt=\"\">
                            </div>
                            <span class=\"name\">Arashasghari</span>
                            <i class=\"fa fa-circle offline\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"{{asset ('assets/images/users/avatar-9.jpg')}}\" alt=\"\">
                            </div>
                            <span class=\"name\">Joshaustin</span>
                            <i class=\"fa fa-circle offline\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"{{asset ('assets/images/users/avatar-10.jpg')}}\" alt=\"\">
                            </div>
                            <span class=\"name\">Sortino</span>
                            <i class=\"{{asset ('fa fa-circle offline')}}\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                </ul>
            </div>
        </div>
        {# /Right-bar #}

    </div>
    {# END wrapper #}

{% block javascript %}

<script>
var resizefunc = [];
</script>

{# jQuery  #}
<script src=\"{{asset ('assets/js/jquery.min.js')}}\"></script>
<script src=\"{{asset ('assets/js/bootstrap.min.js')}}\"></script>
<script src=\"{{asset ('assets/js/detect.js')}}\"></script>
<script src=\"{{asset ('assets/js/fastclick.js')}}\"></script>
<script src=\"{{asset ('assets/js/jquery.slimscroll.js')}}\"></script>
<script src=\"{{asset ('assets/js/jquery.blockUI.js')}}\"></script>
<script src=\"{{asset ('assets/js/waves.js')}}\"></script>
<script src=\"{{asset ('assets/js/wow.min.js')}}\"></script>
<script src=\"{{asset ('assets/js/jquery.nicescroll.js')}}\"></script>
<script src=\"{{asset ('assets/js/jquery.scrollTo.min.js')}}\"></script>

<script src=\"{{asset ('assets/js/jquery.app.js')}}\"></script>

{# jQuery  #}
<script src=\"{{asset ('assets/plugins/moment/moment.js')}}\"></script>

{# jQuery  #}
<script src=\"{{asset ('assets/plugins/waypoints/lib/jquery.waypoints.js')}}\"></script>
<script src=\"{{asset ('assets/plugins/counterup/jquery.counterup.min.js')}}\"></script>

{# jQuery  #}
<script src=\"{{asset ('assets/plugins/sweetalert/dist/sweetalert.min.js')}}\"></script>


{# flot Chart #}
<script src=\"{{asset ('assets/plugins/flot-chart/jquery.flot.js')}}\"></script>
<script src=\"{{asset ('assets/plugins/flot-chart/jquery.flot.time.js')}}\"></script>
<script src=\"{{asset ('assets/plugins/flot-chart/jquery.flot.tooltip.min.js')}}\"></script>
<script src=\"{{asset ('assets/plugins/flot-chart/jquery.flot.resize.js')}}\"></script>
<script src=\"{{asset ('assets/plugins/flot-chart/jquery.flot.pie.js')}}\"></script>
<script src=\"{{asset ('assets/plugins/flot-chart/jquery.flot.selection.js')}}\"></script>
<script src=\"{{asset ('assets/plugins/flot-chart/jquery.flot.stack.js')}}\"></script>
<script src=\"{{asset ('assets/plugins/flot-chart/jquery.flot.crosshair.js')}}\"></script>




    <script>
        var resizefunc = [];
    </script>

{# jQuery  #}


    {# jQuery  #}
    <script src=\"{{asset ('assets/js/jquery.min.js')}}\"></script>
    <script src=\"{{asset ('assets/js/bootstrap.min.js')}}\"></script>
    <script src=\"{{asset ('assets/js/detect.js')}}\"></script>
    <script src=\"{{asset ('assets/js/fastclick.js')}}\"></script>
    <script src=\"{{asset ('assets/js/jquery.slimscroll.js')}}\"></script>
    <script src=\"{{asset ('assets/js/jquery.blockUI.js')}}\"></script>
    <script src=\"{{asset ('assets/js/waves.js')}}\"></script>
    <script src=\"{{asset ('assets/js/wow.min.js')}}\"></script>
    <script src=\"{{asset ('assets/js/jquery.nicescroll.js')}}\"></script>
    <script src=\"{{asset ('assets/js/jquery.scrollTo.min.js')}}\"></script>

    <script src=\"assets/js/jquery.app.js\"></script>

    {# Page Specific JS Libraries #}
    <script src=\"{{asset ('assets/plugins/dropzone/dist/dropzone.js')}}\"></script>


<script src=\"{{asset ('assets/pages/jquery.todo.js')}}\"></script>

{# jQuery  #}
<script src=\"{{asset ('assets/pages/jquery.chat.js')}}\"></script>

{# jQuery  #}
<script src=\"{{asset ('assets/pages/jquery.dashboard.js')}}\"></script>


<script src=\"{{asset('assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}\"></script>
    <script src=\"{{asset('assets/plugins/jquery-datatables-editable/jquery.dataTables.js')}}\"></script>
    <script src=\"{{asset('assets/plugins/datatables/dataTables.bootstrap.js')}}\"></script>
    <script src=\"{{('assets/pages/datatables.editable.init.js')}}\"></script>


        <script type=\"text/javascript\">
        \$(document).ready(function() {

            \$('#datatable-editable').dataTable();
            \$('#datatable-keytable').DataTable( { keys: true } );
            \$('#datatable-responsive').DataTable();
            \$('#datatable-scroller').DataTable( { ajax: \"assets/plugins/datatables/json/scroller-demo.json\", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
            var table = \$('#datatable-editable').DataTable( { fixedHeader: true } );
        } );
        TableManageButtons.init();
    </script>



<script type=\"text/javascript\">






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

{% endblock %}
{% endblock %}
</body>

</html>", "bibliocommuneBundle::homeadmin.html.twig", "/var/www/html/Ma commune/BibliothequeCommune/src/MBC/bibliocommuneBundle/Resources/views/homeadmin.html.twig");
    }
}
