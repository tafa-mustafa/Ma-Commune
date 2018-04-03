<?php

/* bibliocommuneBundle:Default:index.html.twig */
class __TwigTemplate_e1c4edaa5b8d3f5d083bd248208d5ea94d99bd5065493ef030c3d6fc1a981c4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb16ae71f9fb9309920ae8a6c5d1b6bf122eaa697074e1a107f0ada3d5732639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb16ae71f9fb9309920ae8a6c5d1b6bf122eaa697074e1a107f0ada3d5732639->enter($__internal_eb16ae71f9fb9309920ae8a6c5d1b6bf122eaa697074e1a107f0ada3d5732639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliocommuneBundle:Default:index.html.twig"));

        $__internal_f66c25e1c677b7b2bf0f1dbebc07fba50481704fcdf899d6b5d8f34b8858c497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f66c25e1c677b7b2bf0f1dbebc07fba50481704fcdf899d6b5d8f34b8858c497->enter($__internal_f66c25e1c677b7b2bf0f1dbebc07fba50481704fcdf899d6b5d8f34b8858c497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliocommuneBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_eb16ae71f9fb9309920ae8a6c5d1b6bf122eaa697074e1a107f0ada3d5732639->leave($__internal_eb16ae71f9fb9309920ae8a6c5d1b6bf122eaa697074e1a107f0ada3d5732639_prof);

        
        $__internal_f66c25e1c677b7b2bf0f1dbebc07fba50481704fcdf899d6b5d8f34b8858c497->leave($__internal_f66c25e1c677b7b2bf0f1dbebc07fba50481704fcdf899d6b5d8f34b8858c497_prof);

    }

    public function getTemplateName()
    {
        return "bibliocommuneBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "bibliocommuneBundle:Default:index.html.twig", "/var/www/html/Ma commune/BibliothequeCommune/src/MBC/bibliocommuneBundle/Resources/views/Default/index.html.twig");
    }
}
