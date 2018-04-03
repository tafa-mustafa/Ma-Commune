<?php

/* bibliocommuneBundle:Admin:accueil.html.twig */
class __TwigTemplate_c07bab7b9dfd278588afadc2d3e6f92bf0da61b39f90d85edef2737fa76c781e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("bibliocommuneBundle::home.html.twig", "bibliocommuneBundle:Admin:accueil.html.twig", 2);
        $this->blocks = array(
            'slider' => array($this, 'block_slider'),
            'global' => array($this, 'block_global'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bibliocommuneBundle::home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57ff3fb90806977e761971c498b572364dc1172c9030276549e934368dc8856d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57ff3fb90806977e761971c498b572364dc1172c9030276549e934368dc8856d->enter($__internal_57ff3fb90806977e761971c498b572364dc1172c9030276549e934368dc8856d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliocommuneBundle:Admin:accueil.html.twig"));

        $__internal_5c6d67cffa5035b7a0d537a07c7698cfc88d3297c7327084260747f293e5dc79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c6d67cffa5035b7a0d537a07c7698cfc88d3297c7327084260747f293e5dc79->enter($__internal_5c6d67cffa5035b7a0d537a07c7698cfc88d3297c7327084260747f293e5dc79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliocommuneBundle:Admin:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57ff3fb90806977e761971c498b572364dc1172c9030276549e934368dc8856d->leave($__internal_57ff3fb90806977e761971c498b572364dc1172c9030276549e934368dc8856d_prof);

        
        $__internal_5c6d67cffa5035b7a0d537a07c7698cfc88d3297c7327084260747f293e5dc79->leave($__internal_5c6d67cffa5035b7a0d537a07c7698cfc88d3297c7327084260747f293e5dc79_prof);

    }

    // line 6
    public function block_slider($context, array $blocks = array())
    {
        $__internal_71cb4804bcc9be6a097dbdd5495c605c642db919b8940d426bf79ebbb6000f60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71cb4804bcc9be6a097dbdd5495c605c642db919b8940d426bf79ebbb6000f60->enter($__internal_71cb4804bcc9be6a097dbdd5495c605c642db919b8940d426bf79ebbb6000f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        $__internal_595e52e5cebf69030711f5282ea0e6a88280948c98304b19ba408a1f1062ce93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_595e52e5cebf69030711f5282ea0e6a88280948c98304b19ba408a1f1062ce93->enter($__internal_595e52e5cebf69030711f5282ea0e6a88280948c98304b19ba408a1f1062ce93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 7
        echo "
   ";
        
        $__internal_595e52e5cebf69030711f5282ea0e6a88280948c98304b19ba408a1f1062ce93->leave($__internal_595e52e5cebf69030711f5282ea0e6a88280948c98304b19ba408a1f1062ce93_prof);

        
        $__internal_71cb4804bcc9be6a097dbdd5495c605c642db919b8940d426bf79ebbb6000f60->leave($__internal_71cb4804bcc9be6a097dbdd5495c605c642db919b8940d426bf79ebbb6000f60_prof);

    }

    // line 9
    public function block_global($context, array $blocks = array())
    {
        $__internal_9881a2ffff27315a48dd741e3c643649c501591b7884eb14597040c57d69dccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9881a2ffff27315a48dd741e3c643649c501591b7884eb14597040c57d69dccd->enter($__internal_9881a2ffff27315a48dd741e3c643649c501591b7884eb14597040c57d69dccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global"));

        $__internal_71374ebd765a8b5611564fad4a4f56c9ff0633335e87b4def2000f7823aa36ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71374ebd765a8b5611564fad4a4f56c9ff0633335e87b4def2000f7823aa36ce->enter($__internal_71374ebd765a8b5611564fad4a4f56c9ff0633335e87b4def2000f7823aa36ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global"));

        // line 10
        echo "    <div class=\"global indent\">
        <!--content-->
        <div class=\"container\">
            <div class=\"row\">
                <article class=\"col-lg-4 col-md-4 col-sm-5\">
                    <h3>mission &amp; vision</h3>
                    <ul class=\"list2\">
                        <li>
                            <div class=\"badge\">1.</div>
                            <div class=\"extra-wrap\">
                                <p><a href=\"#\">esque pretium metus et.</a><br>Donec hendrerit metus quis velit sollicitudin tincidunt. Ut aliquam massa, congue suscipit risus metus eget libero.</p>
                            </div>
                        </li>
                        <li>
                            <div class=\"badge\">2.</div>
                            <div class=\"extra-wrap\">
                                <p><a href=\"#\">Cum sociis natoque pena.</a><br>Aenean non nibh consectetur, vulputate nibh ut, placerat enim. In ornare, velit quis molestie lobortis, lorem.</p>
                            </div>
                        </li>
                        <li>
                            <div class=\"badge\">3.</div>
                            <div class=\"extra-wrap\">
                                <p><a href=\"#\">que penatibus et magnis.</a><br>Nibh ut, placerat enim. In ornare, velit quis molestie lobortis, lorem urna laoreet dui, vitae imperdiet turpis.</p>
                            </div>
                        </li>
                    </ul>
                    <h3>testimonials</h3>
                    <ul class=\"list3\">
                        <li>
                            <p>“ Aliquam et tincidunt leo, ut tempus orci. Donec fringilla rhoncus erat leo et ante. Nulla facilisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam accumsan. ”</p>
                            <a href=\"#\">Bradley Grosh, USA</a>
                        </li>
                        <li>
                            <p>“ Phasellus pharetra risus dignissim ligula mattis ridiculus mus. Cum sociis natoque penatibus et magnis dis partuaugue ultrices, faucibus dolor ac, consequat magna. In a condimentum ligula. Aenean non. ”</p>
                            <a href=\"#\">Steven Donovan, USA</a>
                        </li>
                    </ul>
                </article>
                <article class=\"col-lg-8 col-md-8 col-sm-7 aboutBox\">
                    <h3>about us</h3>
                    <h4>Aliquam at est porttitor, rutrum felis eget.</h4>
                    <p>Mauris at augue dignissim, bibendum ante ac, condimensemper nisl! Cras commodo dolor lobortis massa luctus mollis. Cras commodo, felis at tempor sodales, nulla ante Cras aliquet dignissim semper? Nullam ac justo vitae arcu mollis rutrum.
                        Nam laoreet blandit tortor, ullamcorper placerat diam iaculis aliquam. Cras rutrum lorem leo, at sollicitudin arcu tempor eu? aliquet nisl mi, at tempus justo dictum vitae. Nulla vestibulum orci est, sed sagittis purus lobortis
                        eu.
                    </p>
                    <a href=\"#\" class=\"btn-default btn1\">read more</a>
                </article>
                <article class=\"col-lg-8 col-md-8 col-sm-7 teamBox\">
                    <h3>our people</h3>
                    <div class=\"row\">
                        <article class=\"col-lg-3 col-md-3 col-sm-4 col-xs-4\">
                            <div class=\"thumb-pad4 maxheight\" style=\"height: 260px;\">
                                <div class=\"box_inner\">
                                    <div class=\"thumbnail\">
                                        <figure>
                                            <a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/img1.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo "img/page2_pic1.jpg";
        echo "\" alt=\"\"></a>
                                        </figure>
                                        <div class=\"caption\">
                                            <a href=\"#\">eva Adamson</a>
                                            <p>Quisque egestas elit aug.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class=\"col-lg-3 col-md-3 col-sm-4 col-xs-4\">
                            <div class=\"thumb-pad4 maxheight\" style=\"height: 260px;\">
                                <div class=\"box_inner\">
                                    <div class=\"thumbnail\">
                                        <figure>
                                            <a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img2.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/page2_pic2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        </figure>
                                        <div class=\"caption\">
                                            <a href=\"#\">David Austin</a>
                                            <p>Phasellus pharetra risus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class=\"col-lg-3 col-md-3 col-sm-4 col-xs-4\">
                            <div class=\"thumb-pad4 maxheight\" style=\"height: 260px;\">
                                <div class=\"box_inner\">
                                    <div class=\"thumbnail\">
                                        <figure>
                                            <a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/img3.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/page2_pic3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        </figure>
                                        <div class=\"caption\">
                                            <a href=\"#\">Natalie Barnes</a>
                                            <p>Pharetra risus dignissim.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class=\"col-lg-3 col-md-3 col-sm-4 col-xs-4\">
                            <div class=\"thumb-pad4 maxheight\" style=\"height: 260px;\">
                                <div class=\"box_inner\">
                                    <div class=\"thumbnail\">
                                        <figure>
                                            <a href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/img4.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/page2_pic4.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        </figure>
                                        <div class=\"caption\">
                                            <a href=\"#\">Thomas Bishop</a>
                                            <p>Donec auctor magna eg.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class=\"col-lg-3 col-md-3 col-sm-4 col-xs-4\">
                            <div class=\"thumb-pad4 maxheight\" style=\"height: 260px;\">
                                <div class=\"box_inner\">
                                    <div class=\"thumbnail\">
                                        <figure>
                                            <a href=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/img5.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/page2_pic5.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        </figure>
                                        <div class=\"caption\">
                                            <a href=\"#\">sam Blare</a>
                                            <p>Auctor magna eget arc.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class=\"col-lg-3 col-md-3 col-sm-4 col-xs-4\">
                            <div class=\"thumb-pad4 maxheight\" style=\"height: 260px;\">
                                <div class=\"box_inner\">
                                    <div class=\"thumbnail\">
                                        <figure>
                                            <a href=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/img6.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/page2_pic6.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        </figure>
                                        <div class=\"caption\">
                                            <a href=\"#\">Maria Brooks</a>
                                            <p>Proin at rhoncus tesque.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </article>
            </div>
        </div>
    </div>
    ";
        
        $__internal_71374ebd765a8b5611564fad4a4f56c9ff0633335e87b4def2000f7823aa36ce->leave($__internal_71374ebd765a8b5611564fad4a4f56c9ff0633335e87b4def2000f7823aa36ce_prof);

        
        $__internal_9881a2ffff27315a48dd741e3c643649c501591b7884eb14597040c57d69dccd->leave($__internal_9881a2ffff27315a48dd741e3c643649c501591b7884eb14597040c57d69dccd_prof);

    }

    public function getTemplateName()
    {
        return "bibliocommuneBundle:Admin:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 140,  207 => 125,  187 => 110,  167 => 95,  147 => 80,  127 => 65,  70 => 10,  61 => 9,  50 => 7,  41 => 6,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'bibliocommuneBundle::home.html.twig' %}



   {% block slider %}

   {% endblock %}
   {% block global %}
    <div class=\"global indent\">
        <!--content-->
        <div class=\"container\">
            <div class=\"row\">
                <article class=\"col-lg-4 col-md-4 col-sm-5\">
                    <h3>mission &amp; vision</h3>
                    <ul class=\"list2\">
                        <li>
                            <div class=\"badge\">1.</div>
                            <div class=\"extra-wrap\">
                                <p><a href=\"#\">esque pretium metus et.</a><br>Donec hendrerit metus quis velit sollicitudin tincidunt. Ut aliquam massa, congue suscipit risus metus eget libero.</p>
                            </div>
                        </li>
                        <li>
                            <div class=\"badge\">2.</div>
                            <div class=\"extra-wrap\">
                                <p><a href=\"#\">Cum sociis natoque pena.</a><br>Aenean non nibh consectetur, vulputate nibh ut, placerat enim. In ornare, velit quis molestie lobortis, lorem.</p>
                            </div>
                        </li>
                        <li>
                            <div class=\"badge\">3.</div>
                            <div class=\"extra-wrap\">
                                <p><a href=\"#\">que penatibus et magnis.</a><br>Nibh ut, placerat enim. In ornare, velit quis molestie lobortis, lorem urna laoreet dui, vitae imperdiet turpis.</p>
                            </div>
                        </li>
                    </ul>
                    <h3>testimonials</h3>
                    <ul class=\"list3\">
                        <li>
                            <p>“ Aliquam et tincidunt leo, ut tempus orci. Donec fringilla rhoncus erat leo et ante. Nulla facilisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam accumsan. ”</p>
                            <a href=\"#\">Bradley Grosh, USA</a>
                        </li>
                        <li>
                            <p>“ Phasellus pharetra risus dignissim ligula mattis ridiculus mus. Cum sociis natoque penatibus et magnis dis partuaugue ultrices, faucibus dolor ac, consequat magna. In a condimentum ligula. Aenean non. ”</p>
                            <a href=\"#\">Steven Donovan, USA</a>
                        </li>
                    </ul>
                </article>
                <article class=\"col-lg-8 col-md-8 col-sm-7 aboutBox\">
                    <h3>about us</h3>
                    <h4>Aliquam at est porttitor, rutrum felis eget.</h4>
                    <p>Mauris at augue dignissim, bibendum ante ac, condimensemper nisl! Cras commodo dolor lobortis massa luctus mollis. Cras commodo, felis at tempor sodales, nulla ante Cras aliquet dignissim semper? Nullam ac justo vitae arcu mollis rutrum.
                        Nam laoreet blandit tortor, ullamcorper placerat diam iaculis aliquam. Cras rutrum lorem leo, at sollicitudin arcu tempor eu? aliquet nisl mi, at tempus justo dictum vitae. Nulla vestibulum orci est, sed sagittis purus lobortis
                        eu.
                    </p>
                    <a href=\"#\" class=\"btn-default btn1\">read more</a>
                </article>
                <article class=\"col-lg-8 col-md-8 col-sm-7 teamBox\">
                    <h3>our people</h3>
                    <div class=\"row\">
                        <article class=\"col-lg-3 col-md-3 col-sm-4 col-xs-4\">
                            <div class=\"thumb-pad4 maxheight\" style=\"height: 260px;\">
                                <div class=\"box_inner\">
                                    <div class=\"thumbnail\">
                                        <figure>
                                            <a href=\"{{asset ('img/img1.jpg')}}\"><img src=\"{{('img/page2_pic1.jpg')}}\" alt=\"\"></a>
                                        </figure>
                                        <div class=\"caption\">
                                            <a href=\"#\">eva Adamson</a>
                                            <p>Quisque egestas elit aug.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class=\"col-lg-3 col-md-3 col-sm-4 col-xs-4\">
                            <div class=\"thumb-pad4 maxheight\" style=\"height: 260px;\">
                                <div class=\"box_inner\">
                                    <div class=\"thumbnail\">
                                        <figure>
                                            <a href=\"{{asset ('img2.jpg')}}\"><img src=\"{{asset ('img/page2_pic2.jpg')}}\" alt=\"\"></a>
                                        </figure>
                                        <div class=\"caption\">
                                            <a href=\"#\">David Austin</a>
                                            <p>Phasellus pharetra risus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class=\"col-lg-3 col-md-3 col-sm-4 col-xs-4\">
                            <div class=\"thumb-pad4 maxheight\" style=\"height: 260px;\">
                                <div class=\"box_inner\">
                                    <div class=\"thumbnail\">
                                        <figure>
                                            <a href=\"{{asset ('img/img3.jpg')}}\"><img src=\"{{asset ('img/page2_pic3.jpg')}}\" alt=\"\"></a>
                                        </figure>
                                        <div class=\"caption\">
                                            <a href=\"#\">Natalie Barnes</a>
                                            <p>Pharetra risus dignissim.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class=\"col-lg-3 col-md-3 col-sm-4 col-xs-4\">
                            <div class=\"thumb-pad4 maxheight\" style=\"height: 260px;\">
                                <div class=\"box_inner\">
                                    <div class=\"thumbnail\">
                                        <figure>
                                            <a href=\"{{asset ('img/img4.jpg')}}\"><img src=\"{{asset ('img/page2_pic4.jpg')}}\" alt=\"\"></a>
                                        </figure>
                                        <div class=\"caption\">
                                            <a href=\"#\">Thomas Bishop</a>
                                            <p>Donec auctor magna eg.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class=\"col-lg-3 col-md-3 col-sm-4 col-xs-4\">
                            <div class=\"thumb-pad4 maxheight\" style=\"height: 260px;\">
                                <div class=\"box_inner\">
                                    <div class=\"thumbnail\">
                                        <figure>
                                            <a href=\"{{asset ('img/img5.jpg')}}\"><img src=\"{{asset ('img/page2_pic5.jpg')}}\" alt=\"\"></a>
                                        </figure>
                                        <div class=\"caption\">
                                            <a href=\"#\">sam Blare</a>
                                            <p>Auctor magna eget arc.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class=\"col-lg-3 col-md-3 col-sm-4 col-xs-4\">
                            <div class=\"thumb-pad4 maxheight\" style=\"height: 260px;\">
                                <div class=\"box_inner\">
                                    <div class=\"thumbnail\">
                                        <figure>
                                            <a href=\"{{asset ('img/img6.jpg')}}\"><img src=\"{{asset ('img/page2_pic6.jpg')}}\" alt=\"\"></a>
                                        </figure>
                                        <div class=\"caption\">
                                            <a href=\"#\">Maria Brooks</a>
                                            <p>Proin at rhoncus tesque.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </article>
            </div>
        </div>
    </div>
    {% endblock %}", "bibliocommuneBundle:Admin:accueil.html.twig", "/var/www/html/Ma commune/BibliothequeCommune/src/MBC/bibliocommuneBundle/Resources/views/Admin/accueil.html.twig");
    }
}
