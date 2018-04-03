<?php

/* bibliocommuneBundle::home.html.twig */
class __TwigTemplate_f553370fd3562a6bb466e1979a906b3028aceca230268ce250c21db610e51b09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'slider' => array($this, 'block_slider'),
            'global' => array($this, 'block_global'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<title>ACCUEIL</title>

 <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">   
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"description\" content=\"Your description\">
<meta name=\"keywords\" content=\"Your keywords\">
<meta name=\"author\" content=\"Your name\">
<meta name = \"format-detection\" content = \"telephone=no\" />
<link rel=\"icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
<link rel=\"shortcut icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\" />
<!--CSS-->
<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/docs.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/prettify.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

 <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/tm_docs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\">
<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/touchTouch.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" >
<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/camera.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/font-awesome.css"), "html", null, true);
        echo "\">
<script type=\"text/javascript\">

 var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'SN-776767949']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<!--[if lt IE 9]>
    <div style='text-align:center'><a href=\"http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode\"><img src=\"http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\" /></a></div>  
  <![endif]-->
  <!--[if lt IE 9]><script src=\"../docs-assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
  <![endif]-->

</head>
<body>
    <div id=\"panel\">
        <div class=\"navbar navbar-inverse navbar-fixed-top bs-docs-nav\" role=\"banner\" id=\"advanced\" style=\"margin-top: 0px; position: fixed;\"><span class=\"trigger\"><strong></strong><em></em></span>
            <div class=\"container\">
                <div class=\"navbar-header\"><button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\".bs-navbar-collapse\"><span class=\"sr-only\">Toggle navigation</span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></button></div>
                <nav class=\"collapse navbar-collapse bs-navbar-collapse\" role=\"navigation\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"home\">
                            <a href=\"#\" class=\"glyphicon glyphicon-home\"></a>
                        </li>
                        <li class=\"divider-vertical\"></li>
                        <li><a href=\"#\">VENNER ME VOIR</a></li>
                        <li><a href=\"#\">DE BELLE</a></li>
                        <li><a href=\"#\">JE PEUX BIEN</a></li>
                        <li><a href=\"#\">Responsive</a></li>
                        <li class=\"divider-vertical\"></li>
                        <li class=\"dropdown -tm-dropdown\"><a data-toggle=\"dropdown\" href=\"#\">VOUS ALLER ETRE SATISFAIT<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">HEUREUX</a>
                                    <ul class=\"pages\">
                                        <li><a href=\"#\" role=\"menuitem\" tabindex=\"-1\">POWER</a></li>
                                        <li><a href=\"#\" role=\"menuitem\" tabindex=\"-1\">CONSTRUCTEUR</a></li>
                                    </ul>
                                </li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">PROFIL</a></li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">BEAUTÉ</a></li>
                                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Social and media</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
<!--header-->
";
        // line 83
        $this->displayBlock('header', $context, $blocks);
        // line 121
        echo "    ";
        $this->displayBlock('slider', $context, $blocks);
        // line 133
        $this->displayBlock('global', $context, $blocks);
        // line 331
        echo "<!--footer-->
";
        // line 332
        $this->displayBlock('footer', $context, $blocks);
        // line 350
        echo "<!--JS-->
<script src=";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/widgets.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/holder.js"), "html", null, true);
        echo "></script>

<script src=";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/prettify.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/application.js"), "html", null, true);
        echo "\"></script>
<script src=";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.countdown.min.js"), "html", null, true);
        echo "\"></script>
<script src=";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tm-scripts.js"), "html", null, true);
        echo "></script>
<script type=\"text/javascript\" async=\"\" src=";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ec.js"), "html", null, true);
        echo "></script>
<script type=\"text/javascript\" async=\"\" src=";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/analytics.js"), "html", null, true);
        echo "></script>
<script async=\"\" src=";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/gtm.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/touchTouch.jquery.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.mobile.customized.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/superfish.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.mobilemenu.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.ui.totop.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.equalheights.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/camera.js"), "html", null, true);
        echo "></script>
<!--[if (gt IE 9)|!(IE)]><!-->
      <script src=";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.mobile.customized.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.carouFredSel-6.1.0-packed.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.mousewheel.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.touchSwipe.min.js"), "html", null, true);
        echo "></script>
<script>
\$(window).load(function() {
    \$(function() {
            \$('#foo2').carouFredSel({
                auto: false,
                responsive: true,
                width: '100%',
                prev: '#prev2',
                next: '#next2',
                scroll: 1,
                items: {
                    height: 'auto',
                    width:320,
                    visible: {
                        min: 1,
                        max: 1
                    }
                },
                mousewheel: true,
                swipe: {
                    onMouse: true,
                    onTouch: true
                }
            });
        });                     
    });
</script> 
<script>
    \$(document).ready(function(){
    
        jQuery('.camera_wrap').camera();
    });
</script>

    <noscript>&lt;iframe src=\"//www.googletagmanager.com/ns.html?id=GTM-P9FT69\"height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"&gt;&lt;/iframe&gt;</noscript>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P9FT69');
    </script>


    <script>
        \$(window).load(function() {
            // Initialize the gallery
            \$('.thumb-pad4 figure a').touchTouch();
        });
    </script>

</body>
  <iframe name=\"oauth2relay342085569\" id=\"oauth2relay342085569\" src=\"\" tabindex=\"-1\" aria-hidden=\"true\" style=\"width: 1px; height: 1px; position: absolute; top: -100px;\">
    </iframe>  
<script>
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->




<!-- Google Tag Manager --><noscript>
<iframe src=\"//www.googletagmanager.com/ns.html?id=GTM-P9FT69\"height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\">
</iframe></noscript>
<!-- End Google Tag Manager -->
</html>";
    }

    // line 83
    public function block_header($context, array $blocks = array())
    {
        // line 84
        echo "<div class=\"main\">
   <header>
        <div class=\"container\">
            <div class=\"row\">
                <article class=\"col-lg-12 col-md-12 col-sm-12\">
                    <h1 class=\"navbar-brand navbar-brand_\"><a href=\"\"><img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a></h1>
                    <div class=\"menuBox clearfix\">
                        <nav class=\"navbar navbar-default navbar-static-top tm_navbar clearfix\" role=\"navigation\">
                            <ul class=\"nav sf-menu clearfix\">
                                <li class=\"active\"><a href=\"\">Home</a></li>
                                <li class=\"sub-menu\"><a href=\"\">about us<span></span></a>
                                    <ul class=\"submenu\">
                                        <li><a href=\"#\">Dolore ipsu</a></li>
                                        <li><a href=\"#\">Consecte</a></li>
                                        <li><a href=\"#\">Elit Conseq</a>
                                            <ul class=\"submenu\">
                                                <li><a href=\"#\">Dolore ipsu</a></li>
                                                <li><a href=\"#\">Consecte</a></li>
                                                <li><a href=\"#\">Elit Conseq</a></li>
                                                <li class=\"tr\"></li>
                                            </ul>
                                        </li>
                                        <li class=\"tr1\"></li>
                                    </ul>
                                </li>
                                <li><a href=\"\">programs</a></li>
                                <li><a href=\"\">blog</a>
                                </li>
                                <li><a href=\"\">contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </article>
            </div>
        </div>
    </header>
    ";
    }

    // line 121
    public function block_slider($context, array $blocks = array())
    {
        // line 122
        echo "    <article class=\"slider\">
       <div class=\"camera_wrap\">
            <div data-src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/picture1.jpg"), "html", null, true);
        echo "\"><div class=\"camera-caption fadeIn\"></div></div>
            <div data-src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/picture2.jpg"), "html", null, true);
        echo "\"><div class=\"camera-caption fadeIn\"></div></div>
            <div data-src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/picture3.jpg"), "html", null, true);
        echo "\"><div class=\"camera-caption fadeIn\"></div></div>
        </div>

    </article>

</div>
";
    }

    // line 133
    public function block_global($context, array $blocks = array())
    {
        // line 134
        echo "<div class=\"global\">
<section class=\"welcomeBox\">
    <div class=\"container\">
        <div class=\"row\">
            <article class=\"col-lg-12 col-md-12 col-sm-12\">
                <h2>PLONGEZ DANS LE MERVEILLEUX 
<br>MONDE DE LA LECTURE</h2>
            </article>
        </div>
    </div>

</section>
<section class=\"popularBox\">
    <div class=\"container\">
        <div class=\"row\">
            <article class=\"col-lg-12 col-md-12 col-sm-12 banner-box\">
                <h3>LES PLUS POPULAIRES</h3>
                <div class=\"row\">
                    <article class=\"col-lg-3 col-md-4 col-sm-4 col-xs-6\">
                        <div class=\"thumb-pad2 maxheight1\">
                            <div class=\"thumbnail\">
                                <figure><a href=\"#\"><img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/page1_pic1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></figure>
                                <div class=\"caption\">  
                                    <a href=\"#\">LA ROUTE</a> 
                                    <p class=\"title\">PAR CORMAC MCCARTHY</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class=\"col-lg-3 col-md-4 col-sm-4 col-xs-6\">
                        <div class=\"thumb-pad2 maxheight1\">
                            <div class=\"thumbnail\">
                                <figure><a href=\"#\"><img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/page1_pic2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></figure>
                                <div class=\"caption\">  
                                    <a href=\"#\">INTERPRÈTE DE MALADIE</a> 
                                    <p class=\"title\">PAR JHUMPA LAHIRI</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class=\"col-lg-3 col-md-4 col-sm-4 col-xs-6\">
                        <div class=\"thumb-pad2 maxheight1\">
                            <div class=\"thumbnail\">
                                <figure><a href=\"#\"><img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/page1_pic3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></figure>
                                <div class=\"caption\">  
                                    <a href=\"#\">MIDDLESEX: UN ROMAN</a> 
                                    <p class=\"title\">par Jeffrey Eugenides</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class=\"col-lg-3 col-md-4 col-sm-4 col-xs-6\">
                        <div class=\"thumb-pad2 maxheight1\">
                            <div class=\"thumbnail\">
                                <figure><a href=\"#\"><img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/page1_pic4.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></figure>
                                <div class=\"caption\">  
                                    <a href=\"#\">GILEAD: UN ROMAN</a> 
                                    <p class=\"title\">par Marilynne Robinson</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class=\"col-lg-3 col-md-4 col-sm-4 col-xs-6\">
                        <div class=\"thumb-pad2 maxheight1\">
                            <div class=\"thumbnail\">
                                <figure><a href=\"#\"><img src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/page1_pic5.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></figure>
                                <div class=\"caption\">  
                                    <a href=\"#\">KAVALIER ET ARGILE</a> 
                                    <p class=\"title\">par michael chabon</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class=\"col-lg-3 col-md-4 col-sm-4 col-xs-6\">
                        <div class=\"thumb-pad2 maxheight1\">
                            <div class=\"thumbnail\">
                                <figure><a href=\"#\"><img src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/page1_pic6.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></figure>
                                <div class=\"caption\">  
                                    <a href=\"#\">UN CANTIQUE POUR LEIBOWITZ</a> 
                                    <p class=\"title\">par walter m. miller jr.</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class=\"col-lg-3 col-md-4 col-sm-4 col-xs-6\">
                        <div class=\"thumb-pad2 maxheight1\">
                            <div class=\"thumbnail\">
                                <figure><a href=\"#\"><img src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/page1_pic7.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></figure>
                                <div class=\"caption\">  
                                    <a href=\"#\">les Corrections</a> 
                                    <p class=\"title\">par jonathan franzen</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class=\"col-lg-3 col-md-4 col-sm-4 col-xs-6\">
                        <div class=\"thumb-pad2 maxheight1\">
                            <div class=\"thumbnail\">
                                <figure><a href=\"#\"><img src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/page1_pic8.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></figure>
                                <div class=\"caption\">  
                                    <a href=\"#\">ARBRE DE FUMÉE: UN ROMAN</a> 
                                    <p class=\"title\">par denis johnson</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </article>
        </div>
    </div>
</section>
   <section class=\"circleIconBox\">
        <div class=\"container\">
            <div class=\"row\">
                <article class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"thumb-pad1 maxheight\">
                        <div class=\"thumbnail\">
                            <h2>Demandez à un bibliothécaire</h2>
                            <div class=\"badge\"><span class=\"fa fa-comment\"></span></div>
                            <div class=\"caption\">
                                <p class=\"title\">Mes cuml dia sed ineniet inger lot aliiqs dolore.</p>
                                <p>Mes cuml dia sed in lacus ut eniascet inger aliiqt es site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen dolor.</p>
                                <a href=\"#\" class=\"btn-default btn1\">read more</a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"thumb-pad1 maxheight\">
                        <div class=\"thumbnail\">
                            <h2>Innovations</h2>
                            <div class=\"badge\"><span class=\"fa fa-lightbulb-o\"></span></div>
                            <div class=\"caption\">
                                <p class=\"title\">Mes cuml dia sed ineniet inger lot aliiqs dolore.</p>
                                <p>Mes cuml dia sed in lacus ut eniascet inger aliiqt es site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen dolor.</p>
                                <a href=\"#\" class=\"btn-default btn1\">read more</a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"thumb-pad1 maxheight\">
                        <div class=\"thumbnail\">
                            <h2>Join the Library</h2>
                            <div class=\"badge\"><span class=\"fa fa-pencil-square-o\"></span></div>
                            <div class=\"caption\">
                                <p class=\"title\">Mes cuml dia sed ineniet inger lot aliiqs dolore.</p>
                                <p>Mes cuml dia sed in lacus ut eniascet inger aliiqt es site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen dolor.</p>
                                <a href=\"#\" class=\"btn-default btn1\">read more</a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"thumb-pad1 maxheight\">
                        <div class=\"thumbnail\">
                            <h2>Help</h2>
                            <div class=\"badge\"><span class=\"fa fa-search\"></span></div>
                            <div class=\"caption\">
                                <p class=\"title\">Mes cuml dia sed ineniet inger lot aliiqs dolore.</p>
                                <p>Mes cuml dia sed in lacus ut eniascet inger aliiqt es site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen dolor.</p>
                                <a href=\"#\" class=\"btn-default btn1\">read more</a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class=\"carouselBox\">
        <div class=\"container\">
            <div class=\"row\">
                <article class=\"col-lg-10 col-md-10 col-sm-12 col-lg-offset-1 col-md-offset-1\">
                    <div class=\"list_carousel2 responsive clearfix\">
                        <ul id=\"foo2\">
                            <li>
                                <p>&ldquo; Lorem ipsum dolor sit amet, consect etur adipiscing elit. Vestibulum ut tortor urnati dunt dolor. Nunc vulputate<br>ultrices con sect etur donec semper lacinia ultri  dolore cie<br>lorem ipsum commete. &rdquo;</p>
                                <a href=\"#\">Jack Calso</a>
                            </li>
                            <li>
                                <p>&ldquo; Lorem ipsum dolor sit amet, consect etur adipiscing elit. Vestibulum ut tortor urnati dunt dolor. Nunc vulputate<br>ultrices con sect etur donec semper lacinia ultri  dolore cie<br>lorem ipsum commete. &rdquo;</p>
                                <a href=\"#\">Jack Calso</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"foo-btn clearfix\">
                        <a id=\"prev2\" class=\"prev\" href=\"#\"></a>
                        <a id=\"next2\" class=\"next\" href=\"#\"></a>
                    </div>
                </article>
            </div>
        </div>
    </section>

</div>
";
    }

    // line 332
    public function block_footer($context, array $blocks = array())
    {
        // line 333
        echo "<footer>
    <div class=\"container\">
        <div class=\"row\">
            <article class=\"col-lg-12 col-md-12 col-sm-12\">
                <p><span>Bibliocommune Commune</span> &copy; <em id=\"copyright-year\"></em> | <a href=\"index-5.html\">Privacy Policy</a></p>
                <ul>
                    <li><a href=\"#\"><img src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/follow_icon1.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                    <li><a href=\"#\"><img src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/follow_icon2.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                    <li><a href=\"#\"><img src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/follow_icon3.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                    <li><a href=\"#\"><img src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/follow_icon4.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                </ul>
            </article>
        </div>
    </div>
  <!-- FOOTER_LINK -->
</footer>
";
    }

    public function getTemplateName()
    {
        return "bibliocommuneBundle::home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  646 => 342,  642 => 341,  638 => 340,  634 => 339,  626 => 333,  623 => 332,  520 => 232,  506 => 221,  492 => 210,  478 => 199,  464 => 188,  450 => 177,  436 => 166,  422 => 155,  399 => 134,  396 => 133,  385 => 126,  381 => 125,  377 => 124,  373 => 122,  370 => 121,  334 => 89,  327 => 84,  324 => 83,  246 => 376,  242 => 375,  238 => 374,  234 => 373,  229 => 371,  225 => 370,  221 => 369,  217 => 368,  213 => 367,  209 => 366,  205 => 365,  201 => 364,  197 => 363,  193 => 362,  189 => 361,  185 => 360,  181 => 359,  177 => 358,  173 => 357,  169 => 356,  165 => 355,  161 => 354,  156 => 352,  152 => 351,  149 => 350,  147 => 332,  144 => 331,  142 => 133,  139 => 121,  137 => 83,  74 => 23,  70 => 22,  66 => 21,  62 => 20,  58 => 19,  54 => 18,  49 => 16,  45 => 15,  40 => 13,  36 => 12,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bibliocommuneBundle::home.html.twig", "/var/www/html/Ma commune/BibliothequeCommune/src/MBC/bibliocommuneBundle/Resources/views/home.html.twig");
    }
}
