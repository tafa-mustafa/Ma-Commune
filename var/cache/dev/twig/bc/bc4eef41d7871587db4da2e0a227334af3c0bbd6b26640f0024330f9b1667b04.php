<?php

/* base.html.twig */
class __TwigTemplate_28a754862b05470e332069d8cf9323977c0e7aa5b52dbd0544aa84f591451a80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55a80bf103950145ace680fe49e0f2fc4687282233616ce9c90c04ab57ad00e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55a80bf103950145ace680fe49e0f2fc4687282233616ce9c90c04ab57ad00e8->enter($__internal_55a80bf103950145ace680fe49e0f2fc4687282233616ce9c90c04ab57ad00e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c97a28a87cd74e61b8df1558330f907fa5434c84e8eb2a044d32817cfcd50985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c97a28a87cd74e61b8df1558330f907fa5434c84e8eb2a044d32817cfcd50985->enter($__internal_c97a28a87cd74e61b8df1558330f907fa5434c84e8eb2a044d32817cfcd50985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_55a80bf103950145ace680fe49e0f2fc4687282233616ce9c90c04ab57ad00e8->leave($__internal_55a80bf103950145ace680fe49e0f2fc4687282233616ce9c90c04ab57ad00e8_prof);

        
        $__internal_c97a28a87cd74e61b8df1558330f907fa5434c84e8eb2a044d32817cfcd50985->leave($__internal_c97a28a87cd74e61b8df1558330f907fa5434c84e8eb2a044d32817cfcd50985_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_156661f1cb97bb23ff5e04c338a0d9f2ef69731a26e2af96c3be816066bee312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_156661f1cb97bb23ff5e04c338a0d9f2ef69731a26e2af96c3be816066bee312->enter($__internal_156661f1cb97bb23ff5e04c338a0d9f2ef69731a26e2af96c3be816066bee312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_497782a67084b0d6f3bd5f82f8f636465519f6136546e8f240a2b704af963b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497782a67084b0d6f3bd5f82f8f636465519f6136546e8f240a2b704af963b7c->enter($__internal_497782a67084b0d6f3bd5f82f8f636465519f6136546e8f240a2b704af963b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_497782a67084b0d6f3bd5f82f8f636465519f6136546e8f240a2b704af963b7c->leave($__internal_497782a67084b0d6f3bd5f82f8f636465519f6136546e8f240a2b704af963b7c_prof);

        
        $__internal_156661f1cb97bb23ff5e04c338a0d9f2ef69731a26e2af96c3be816066bee312->leave($__internal_156661f1cb97bb23ff5e04c338a0d9f2ef69731a26e2af96c3be816066bee312_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8186088ad7fbbf232e524d6797fd4ed2a7888d4d21897d6d82f7ac6cf95c9243 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8186088ad7fbbf232e524d6797fd4ed2a7888d4d21897d6d82f7ac6cf95c9243->enter($__internal_8186088ad7fbbf232e524d6797fd4ed2a7888d4d21897d6d82f7ac6cf95c9243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_da9041f0e0d5d64af3d3714600db8447054b3edd1c244acc3dc7d08f7b6d1067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da9041f0e0d5d64af3d3714600db8447054b3edd1c244acc3dc7d08f7b6d1067->enter($__internal_da9041f0e0d5d64af3d3714600db8447054b3edd1c244acc3dc7d08f7b6d1067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_da9041f0e0d5d64af3d3714600db8447054b3edd1c244acc3dc7d08f7b6d1067->leave($__internal_da9041f0e0d5d64af3d3714600db8447054b3edd1c244acc3dc7d08f7b6d1067_prof);

        
        $__internal_8186088ad7fbbf232e524d6797fd4ed2a7888d4d21897d6d82f7ac6cf95c9243->leave($__internal_8186088ad7fbbf232e524d6797fd4ed2a7888d4d21897d6d82f7ac6cf95c9243_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e79d1a739dca1c183704f86cc487bc4438059c81dfe4ce9f92d8908e202aa9e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e79d1a739dca1c183704f86cc487bc4438059c81dfe4ce9f92d8908e202aa9e3->enter($__internal_e79d1a739dca1c183704f86cc487bc4438059c81dfe4ce9f92d8908e202aa9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dcccf2cae3c7a5e81b5732976d4d42e381f9a6e3856506806dcd3e00aab7b8f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcccf2cae3c7a5e81b5732976d4d42e381f9a6e3856506806dcd3e00aab7b8f9->enter($__internal_dcccf2cae3c7a5e81b5732976d4d42e381f9a6e3856506806dcd3e00aab7b8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dcccf2cae3c7a5e81b5732976d4d42e381f9a6e3856506806dcd3e00aab7b8f9->leave($__internal_dcccf2cae3c7a5e81b5732976d4d42e381f9a6e3856506806dcd3e00aab7b8f9_prof);

        
        $__internal_e79d1a739dca1c183704f86cc487bc4438059c81dfe4ce9f92d8908e202aa9e3->leave($__internal_e79d1a739dca1c183704f86cc487bc4438059c81dfe4ce9f92d8908e202aa9e3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_398f60f6fba709e1f6c93271e3cab20a777232fad5a58c2f57768d405d07a2a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_398f60f6fba709e1f6c93271e3cab20a777232fad5a58c2f57768d405d07a2a5->enter($__internal_398f60f6fba709e1f6c93271e3cab20a777232fad5a58c2f57768d405d07a2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_99525d410df60c800e364b748f7ee084ad79191579716d5769d56d1d44fc84b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99525d410df60c800e364b748f7ee084ad79191579716d5769d56d1d44fc84b3->enter($__internal_99525d410df60c800e364b748f7ee084ad79191579716d5769d56d1d44fc84b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_99525d410df60c800e364b748f7ee084ad79191579716d5769d56d1d44fc84b3->leave($__internal_99525d410df60c800e364b748f7ee084ad79191579716d5769d56d1d44fc84b3_prof);

        
        $__internal_398f60f6fba709e1f6c93271e3cab20a777232fad5a58c2f57768d405d07a2a5->leave($__internal_398f60f6fba709e1f6c93271e3cab20a777232fad5a58c2f57768d405d07a2a5_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/Ma commune/BibliothequeCommune/app/Resources/views/base.html.twig");
    }
}
