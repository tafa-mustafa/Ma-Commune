<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_86c99760f1265e1caef46ee80364b0404a20fc7a99cf9928ec02bc87fba796db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a49b1a0f642d5adc281a6aeb3c88f391190bd9838592adca529c94094012d121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a49b1a0f642d5adc281a6aeb3c88f391190bd9838592adca529c94094012d121->enter($__internal_a49b1a0f642d5adc281a6aeb3c88f391190bd9838592adca529c94094012d121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_08dcb78f68f2d501bf1723ee2600a1f256d13c57448ee634b17764224c0e1fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08dcb78f68f2d501bf1723ee2600a1f256d13c57448ee634b17764224c0e1fab->enter($__internal_08dcb78f68f2d501bf1723ee2600a1f256d13c57448ee634b17764224c0e1fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_a49b1a0f642d5adc281a6aeb3c88f391190bd9838592adca529c94094012d121->leave($__internal_a49b1a0f642d5adc281a6aeb3c88f391190bd9838592adca529c94094012d121_prof);

        
        $__internal_08dcb78f68f2d501bf1723ee2600a1f256d13c57448ee634b17764224c0e1fab->leave($__internal_08dcb78f68f2d501bf1723ee2600a1f256d13c57448ee634b17764224c0e1fab_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_44b1cf635e3aeb39d953beebc65f77fedac376fc760cf4bf18bd617936cfaed3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44b1cf635e3aeb39d953beebc65f77fedac376fc760cf4bf18bd617936cfaed3->enter($__internal_44b1cf635e3aeb39d953beebc65f77fedac376fc760cf4bf18bd617936cfaed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b41f5f9cfb810a63d0af13987c34fa26fe6655740f16380576e83a01c52074ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b41f5f9cfb810a63d0af13987c34fa26fe6655740f16380576e83a01c52074ca->enter($__internal_b41f5f9cfb810a63d0af13987c34fa26fe6655740f16380576e83a01c52074ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b41f5f9cfb810a63d0af13987c34fa26fe6655740f16380576e83a01c52074ca->leave($__internal_b41f5f9cfb810a63d0af13987c34fa26fe6655740f16380576e83a01c52074ca_prof);

        
        $__internal_44b1cf635e3aeb39d953beebc65f77fedac376fc760cf4bf18bd617936cfaed3->leave($__internal_44b1cf635e3aeb39d953beebc65f77fedac376fc760cf4bf18bd617936cfaed3_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_88f54a2d761734334c3e79f1ba771ca1c5391c69425fff7272e89bf1d6dc82ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88f54a2d761734334c3e79f1ba771ca1c5391c69425fff7272e89bf1d6dc82ad->enter($__internal_88f54a2d761734334c3e79f1ba771ca1c5391c69425fff7272e89bf1d6dc82ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f8cd5e7922c7c16fa38414fa06d0db062a4d05637bac961ddaa05f7e98a1d0be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8cd5e7922c7c16fa38414fa06d0db062a4d05637bac961ddaa05f7e98a1d0be->enter($__internal_f8cd5e7922c7c16fa38414fa06d0db062a4d05637bac961ddaa05f7e98a1d0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f8cd5e7922c7c16fa38414fa06d0db062a4d05637bac961ddaa05f7e98a1d0be->leave($__internal_f8cd5e7922c7c16fa38414fa06d0db062a4d05637bac961ddaa05f7e98a1d0be_prof);

        
        $__internal_88f54a2d761734334c3e79f1ba771ca1c5391c69425fff7272e89bf1d6dc82ad->leave($__internal_88f54a2d761734334c3e79f1ba771ca1c5391c69425fff7272e89bf1d6dc82ad_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c945daebd99acc54dfead7d35f294c775b1206e1da37e1f734f3ece4b9546a65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c945daebd99acc54dfead7d35f294c775b1206e1da37e1f734f3ece4b9546a65->enter($__internal_c945daebd99acc54dfead7d35f294c775b1206e1da37e1f734f3ece4b9546a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7cc9572ed6d66b2bff2083e137be61d8ae98df4574496f334b55ec8789ff58b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cc9572ed6d66b2bff2083e137be61d8ae98df4574496f334b55ec8789ff58b6->enter($__internal_7cc9572ed6d66b2bff2083e137be61d8ae98df4574496f334b55ec8789ff58b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7cc9572ed6d66b2bff2083e137be61d8ae98df4574496f334b55ec8789ff58b6->leave($__internal_7cc9572ed6d66b2bff2083e137be61d8ae98df4574496f334b55ec8789ff58b6_prof);

        
        $__internal_c945daebd99acc54dfead7d35f294c775b1206e1da37e1f734f3ece4b9546a65->leave($__internal_c945daebd99acc54dfead7d35f294c775b1206e1da37e1f734f3ece4b9546a65_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/Ma commune/BibliothequeCommune/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
