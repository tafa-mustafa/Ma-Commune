<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_02e83ea866a0428f3a615f21abb8b0c90fbfff632a24a76f4ca41395bab681a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4751e4656dbd7f84e1939297c181f88571827b49025c910f4a073dacc7bfd06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4751e4656dbd7f84e1939297c181f88571827b49025c910f4a073dacc7bfd06->enter($__internal_e4751e4656dbd7f84e1939297c181f88571827b49025c910f4a073dacc7bfd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e89205d9f93fb46aba050ca8768b973d365afb3c480f43ff8b4644af4827e8e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e89205d9f93fb46aba050ca8768b973d365afb3c480f43ff8b4644af4827e8e2->enter($__internal_e89205d9f93fb46aba050ca8768b973d365afb3c480f43ff8b4644af4827e8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4751e4656dbd7f84e1939297c181f88571827b49025c910f4a073dacc7bfd06->leave($__internal_e4751e4656dbd7f84e1939297c181f88571827b49025c910f4a073dacc7bfd06_prof);

        
        $__internal_e89205d9f93fb46aba050ca8768b973d365afb3c480f43ff8b4644af4827e8e2->leave($__internal_e89205d9f93fb46aba050ca8768b973d365afb3c480f43ff8b4644af4827e8e2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d8e979f80ea40afebadbac16b857fc89266b7b3ac1c7087358258cc02d9aea5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8e979f80ea40afebadbac16b857fc89266b7b3ac1c7087358258cc02d9aea5a->enter($__internal_d8e979f80ea40afebadbac16b857fc89266b7b3ac1c7087358258cc02d9aea5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ffe5664a3a4c1112bf7843f12caa948407fa32813604693d44612ba255123849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffe5664a3a4c1112bf7843f12caa948407fa32813604693d44612ba255123849->enter($__internal_ffe5664a3a4c1112bf7843f12caa948407fa32813604693d44612ba255123849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ffe5664a3a4c1112bf7843f12caa948407fa32813604693d44612ba255123849->leave($__internal_ffe5664a3a4c1112bf7843f12caa948407fa32813604693d44612ba255123849_prof);

        
        $__internal_d8e979f80ea40afebadbac16b857fc89266b7b3ac1c7087358258cc02d9aea5a->leave($__internal_d8e979f80ea40afebadbac16b857fc89266b7b3ac1c7087358258cc02d9aea5a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_18d05ab5453e232fef182f1ccc372fdc96409cbe2a0a7c4c470f7fa44a6af02d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18d05ab5453e232fef182f1ccc372fdc96409cbe2a0a7c4c470f7fa44a6af02d->enter($__internal_18d05ab5453e232fef182f1ccc372fdc96409cbe2a0a7c4c470f7fa44a6af02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4b7fe826427c4c060ae625e4dd2bf8a8e8636d2e02920933e6e6e67f28e02fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7fe826427c4c060ae625e4dd2bf8a8e8636d2e02920933e6e6e67f28e02fcb->enter($__internal_4b7fe826427c4c060ae625e4dd2bf8a8e8636d2e02920933e6e6e67f28e02fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4b7fe826427c4c060ae625e4dd2bf8a8e8636d2e02920933e6e6e67f28e02fcb->leave($__internal_4b7fe826427c4c060ae625e4dd2bf8a8e8636d2e02920933e6e6e67f28e02fcb_prof);

        
        $__internal_18d05ab5453e232fef182f1ccc372fdc96409cbe2a0a7c4c470f7fa44a6af02d->leave($__internal_18d05ab5453e232fef182f1ccc372fdc96409cbe2a0a7c4c470f7fa44a6af02d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dda2bca6f89603ca0f6e4477bea40a7a2234abda97206a3f98e8af7494cfd9db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dda2bca6f89603ca0f6e4477bea40a7a2234abda97206a3f98e8af7494cfd9db->enter($__internal_dda2bca6f89603ca0f6e4477bea40a7a2234abda97206a3f98e8af7494cfd9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f00589cf8e800424968c9137b0228b89c77bb93eb676dc78867a97ec4a9f3823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f00589cf8e800424968c9137b0228b89c77bb93eb676dc78867a97ec4a9f3823->enter($__internal_f00589cf8e800424968c9137b0228b89c77bb93eb676dc78867a97ec4a9f3823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f00589cf8e800424968c9137b0228b89c77bb93eb676dc78867a97ec4a9f3823->leave($__internal_f00589cf8e800424968c9137b0228b89c77bb93eb676dc78867a97ec4a9f3823_prof);

        
        $__internal_dda2bca6f89603ca0f6e4477bea40a7a2234abda97206a3f98e8af7494cfd9db->leave($__internal_dda2bca6f89603ca0f6e4477bea40a7a2234abda97206a3f98e8af7494cfd9db_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Ma commune/BibliothequeCommune/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
