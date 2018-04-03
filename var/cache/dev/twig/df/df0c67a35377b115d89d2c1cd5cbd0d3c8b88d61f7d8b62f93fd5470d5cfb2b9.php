<?php

/* bibliocommuneBundle:Front:contacts.html.twig */
class __TwigTemplate_af7ff40fb3d1598e5c6c25347da6b1d82b7f7d0a4111db5957a92e1105129e82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bibliocommuneBundle::home.html.twig", "bibliocommuneBundle:Front:contacts.html.twig", 1);
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
        $__internal_1571e15cbf090296d96d27d26b8da4ca0342faac204c6abbd3c1bba3a514ef06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1571e15cbf090296d96d27d26b8da4ca0342faac204c6abbd3c1bba3a514ef06->enter($__internal_1571e15cbf090296d96d27d26b8da4ca0342faac204c6abbd3c1bba3a514ef06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliocommuneBundle:Front:contacts.html.twig"));

        $__internal_e229282b75cd4dfef31d82440d691b9db62dc8465dcb2a83b1c7bcaa6a73348b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e229282b75cd4dfef31d82440d691b9db62dc8465dcb2a83b1c7bcaa6a73348b->enter($__internal_e229282b75cd4dfef31d82440d691b9db62dc8465dcb2a83b1c7bcaa6a73348b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliocommuneBundle:Front:contacts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1571e15cbf090296d96d27d26b8da4ca0342faac204c6abbd3c1bba3a514ef06->leave($__internal_1571e15cbf090296d96d27d26b8da4ca0342faac204c6abbd3c1bba3a514ef06_prof);

        
        $__internal_e229282b75cd4dfef31d82440d691b9db62dc8465dcb2a83b1c7bcaa6a73348b->leave($__internal_e229282b75cd4dfef31d82440d691b9db62dc8465dcb2a83b1c7bcaa6a73348b_prof);

    }

    // line 4
    public function block_slider($context, array $blocks = array())
    {
        $__internal_1abd34dbe3d4ba5deac391852229b8c492a6ab283de12bc7b236c529768d1c14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1abd34dbe3d4ba5deac391852229b8c492a6ab283de12bc7b236c529768d1c14->enter($__internal_1abd34dbe3d4ba5deac391852229b8c492a6ab283de12bc7b236c529768d1c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        $__internal_cc6cfa8230ce683f4e018f47c39fe69d95817e189990ea32fa89c7d3f97df652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc6cfa8230ce683f4e018f47c39fe69d95817e189990ea32fa89c7d3f97df652->enter($__internal_cc6cfa8230ce683f4e018f47c39fe69d95817e189990ea32fa89c7d3f97df652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        
        $__internal_cc6cfa8230ce683f4e018f47c39fe69d95817e189990ea32fa89c7d3f97df652->leave($__internal_cc6cfa8230ce683f4e018f47c39fe69d95817e189990ea32fa89c7d3f97df652_prof);

        
        $__internal_1abd34dbe3d4ba5deac391852229b8c492a6ab283de12bc7b236c529768d1c14->leave($__internal_1abd34dbe3d4ba5deac391852229b8c492a6ab283de12bc7b236c529768d1c14_prof);

    }

    // line 6
    public function block_global($context, array $blocks = array())
    {
        $__internal_9d533eafb6595046566650ba99d61675eaca4f618f88c631ab0e2fc7b886d9f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d533eafb6595046566650ba99d61675eaca4f618f88c631ab0e2fc7b886d9f3->enter($__internal_9d533eafb6595046566650ba99d61675eaca4f618f88c631ab0e2fc7b886d9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global"));

        $__internal_d0cb34c83a0b6d602249336634d34edd755c88694704a1f48373bb5f7f1b656c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0cb34c83a0b6d602249336634d34edd755c88694704a1f48373bb5f7f1b656c->enter($__internal_d0cb34c83a0b6d602249336634d34edd755c88694704a1f48373bb5f7f1b656c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global"));

        // line 7
        echo "

<div class=\"global indent\">
    <!--content-->
    <div class=\"container\">
        <div class=\"row\">
            <article class=\"col-lg-12 col-md-12 col-sm-12 contactBox\">
                <figure class=\"map\">
                    <iframe src=\"\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/I.jpg"), "html", null, true);
        echo "\" alt=\"\"></iframe>
                </figure>
            </article>
        </div>
    </div>
    <section class=\"formBox\">
        <div class=\"container\">
            <div class=\"row\">
                <article class=\"col-lg-4 col-md-4 col-sm-4\">
                    <h3><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">entrer en contact</font></font></h3>
                    <div class=\"info\">
                        <h4><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Adresse 1:</font></font></h4>
                        <p><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">8901 Marmora Road, Glasgow, D04 89GR.</font></font></p>
                        <h4 class=\"tel\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Téléphones:</font></font></h4>
                        <p><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">+1 800 559 6580 </font></font><br><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">+1 959 603 6035 </font></font><br><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">+1 504 889 9898</font></font></p>
                        <h4><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Adresse 2:</font></font></h4>
                        <p><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">9867 Mill Road, Cambridge, MG09 99HT.</font></font></p>
                    </div>
                </article>
                <article class=\"col-lg-8 col-md-8 col-sm-8\">
                    <h3><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Formulaire de contact</font></font></h3>
                    <form id=\"contact-form\">
                        <div class=\"success-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Formulaire de contact soumis.</font></font></div>
                        <div class=\"holder\">
                            <div class=\"form-div-1 clearfix\">
                                <label class=\"name\">
                                    <input type=\"text\" data-constraints=\"@Required @JustLetters\" id=\"regula-generated-55879\">
                                    <span class=\"empty-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">*Ce champ est requis. </font></font></span>
                                    <span class=\"error-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">* Ce n'est pas un nom valide.</font></font></span>
                                    <span class=\"_placeholder\" style=\"left: 0px; top: 0px; width: 212px; height: 41px;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Prénom:</font></font></span></label>
                            </div>
                            <div class=\"form-div-2 clearfix\">
                                <label class=\"email\">
                                    <input type=\"text\" data-constraints=\"@Required @Email\" id=\"regula-generated-925288\">
                                    <span class=\"empty-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">*Ce champ est requis. </font></font></span>
                                    <span class=\"error-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">* Ceci n'est pas un email valide.</font></font></span>
                                    <span class=\"_placeholder\" style=\"left: 0px; top: 0px; width: 212px; height: 41px;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Email:</font></font></span></label>
                            </div>
                            <div class=\"form-div-3 clearfix\">
                                <label class=\"phone notRequired\">
                                    <input type=\"text\" data-constraints=\"@JustNumbers\" id=\"regula-generated-726327\">
                                    <span class=\"empty-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">*Ce champ est requis. </font></font></span>
                                    <span class=\"error-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">* Ce n'est pas un téléphone valide.</font></font></span>
                                    <span class=\"_placeholder\" style=\"left: 0px; top: 0px; width: 212px; height: 41px;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Téléphone:</font></font></span></label>
                            </div>
                        </div>
                        <div class=\"form-div-4 clearfix\">
                            <label class=\"message\">
                                <textarea data-constraints=\"@Required @Length(min=20,max=999999)\" id=\"regula-generated-842245\"></textarea>
                                <span class=\"empty-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">*Ce champ est requis. </font></font></span>
                                <span class=\"error-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">* Le message est trop court.</font></font></span>
                                <span class=\"_placeholder\" style=\"left: 0px; top: 0px; width: 740px; height: 201px;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Message:</font></font></span></label>
                        </div>
                        <div class=\"btns\">
                            <a href=\"https://livedemo00.template-help.com/wt_48292/index-4.html#\" data-type=\"submit\" class=\"btn-default btn1\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">soumettre</font></font></a>
                        </div>
                    </form>
                </article>
            </div>
        </div>
    </section>
</div>
";
        
        $__internal_d0cb34c83a0b6d602249336634d34edd755c88694704a1f48373bb5f7f1b656c->leave($__internal_d0cb34c83a0b6d602249336634d34edd755c88694704a1f48373bb5f7f1b656c_prof);

        
        $__internal_9d533eafb6595046566650ba99d61675eaca4f618f88c631ab0e2fc7b886d9f3->leave($__internal_9d533eafb6595046566650ba99d61675eaca4f618f88c631ab0e2fc7b886d9f3_prof);

    }

    public function getTemplateName()
    {
        return "bibliocommuneBundle:Front:contacts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 15,  67 => 7,  58 => 6,  41 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'bibliocommuneBundle::home.html.twig' %}


{% block slider %}
{% endblock %}
{% block global %}


<div class=\"global indent\">
    <!--content-->
    <div class=\"container\">
        <div class=\"row\">
            <article class=\"col-lg-12 col-md-12 col-sm-12 contactBox\">
                <figure class=\"map\">
                    <iframe src=\"\"><img src=\"{{ asset ('img/I.jpg') }}\" alt=\"\"></iframe>
                </figure>
            </article>
        </div>
    </div>
    <section class=\"formBox\">
        <div class=\"container\">
            <div class=\"row\">
                <article class=\"col-lg-4 col-md-4 col-sm-4\">
                    <h3><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">entrer en contact</font></font></h3>
                    <div class=\"info\">
                        <h4><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Adresse 1:</font></font></h4>
                        <p><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">8901 Marmora Road, Glasgow, D04 89GR.</font></font></p>
                        <h4 class=\"tel\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Téléphones:</font></font></h4>
                        <p><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">+1 800 559 6580 </font></font><br><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">+1 959 603 6035 </font></font><br><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">+1 504 889 9898</font></font></p>
                        <h4><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Adresse 2:</font></font></h4>
                        <p><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">9867 Mill Road, Cambridge, MG09 99HT.</font></font></p>
                    </div>
                </article>
                <article class=\"col-lg-8 col-md-8 col-sm-8\">
                    <h3><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Formulaire de contact</font></font></h3>
                    <form id=\"contact-form\">
                        <div class=\"success-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Formulaire de contact soumis.</font></font></div>
                        <div class=\"holder\">
                            <div class=\"form-div-1 clearfix\">
                                <label class=\"name\">
                                    <input type=\"text\" data-constraints=\"@Required @JustLetters\" id=\"regula-generated-55879\">
                                    <span class=\"empty-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">*Ce champ est requis. </font></font></span>
                                    <span class=\"error-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">* Ce n'est pas un nom valide.</font></font></span>
                                    <span class=\"_placeholder\" style=\"left: 0px; top: 0px; width: 212px; height: 41px;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Prénom:</font></font></span></label>
                            </div>
                            <div class=\"form-div-2 clearfix\">
                                <label class=\"email\">
                                    <input type=\"text\" data-constraints=\"@Required @Email\" id=\"regula-generated-925288\">
                                    <span class=\"empty-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">*Ce champ est requis. </font></font></span>
                                    <span class=\"error-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">* Ceci n'est pas un email valide.</font></font></span>
                                    <span class=\"_placeholder\" style=\"left: 0px; top: 0px; width: 212px; height: 41px;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Email:</font></font></span></label>
                            </div>
                            <div class=\"form-div-3 clearfix\">
                                <label class=\"phone notRequired\">
                                    <input type=\"text\" data-constraints=\"@JustNumbers\" id=\"regula-generated-726327\">
                                    <span class=\"empty-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">*Ce champ est requis. </font></font></span>
                                    <span class=\"error-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">* Ce n'est pas un téléphone valide.</font></font></span>
                                    <span class=\"_placeholder\" style=\"left: 0px; top: 0px; width: 212px; height: 41px;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Téléphone:</font></font></span></label>
                            </div>
                        </div>
                        <div class=\"form-div-4 clearfix\">
                            <label class=\"message\">
                                <textarea data-constraints=\"@Required @Length(min=20,max=999999)\" id=\"regula-generated-842245\"></textarea>
                                <span class=\"empty-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">*Ce champ est requis. </font></font></span>
                                <span class=\"error-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">* Le message est trop court.</font></font></span>
                                <span class=\"_placeholder\" style=\"left: 0px; top: 0px; width: 740px; height: 201px;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Message:</font></font></span></label>
                        </div>
                        <div class=\"btns\">
                            <a href=\"https://livedemo00.template-help.com/wt_48292/index-4.html#\" data-type=\"submit\" class=\"btn-default btn1\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">soumettre</font></font></a>
                        </div>
                    </form>
                </article>
            </div>
        </div>
    </section>
</div>
{% endblock %}", "bibliocommuneBundle:Front:contacts.html.twig", "/var/www/html/Ma commune/BibliothequeCommune/src/MBC/bibliocommuneBundle/Resources/views/Front/contacts.html.twig");
    }
}
