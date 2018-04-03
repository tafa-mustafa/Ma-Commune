<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_96faac8b1ec8680242a8183d9edf353ed97d7bb8bf573db8228effa96f833ca4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1928163646a1b304659574fc93e0b2621bc8fd333497723a71cb77de36cd9b39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1928163646a1b304659574fc93e0b2621bc8fd333497723a71cb77de36cd9b39->enter($__internal_1928163646a1b304659574fc93e0b2621bc8fd333497723a71cb77de36cd9b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e9b33c77a0dd2b199989bcceadeddddede4c96d7e2e6774909029d21861e1db2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9b33c77a0dd2b199989bcceadeddddede4c96d7e2e6774909029d21861e1db2->enter($__internal_e9b33c77a0dd2b199989bcceadeddddede4c96d7e2e6774909029d21861e1db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1928163646a1b304659574fc93e0b2621bc8fd333497723a71cb77de36cd9b39->leave($__internal_1928163646a1b304659574fc93e0b2621bc8fd333497723a71cb77de36cd9b39_prof);

        
        $__internal_e9b33c77a0dd2b199989bcceadeddddede4c96d7e2e6774909029d21861e1db2->leave($__internal_e9b33c77a0dd2b199989bcceadeddddede4c96d7e2e6774909029d21861e1db2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_db200dc402d04f39567ff1a7cfb3e3294b7485b5a999320b64f98fc61f489140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db200dc402d04f39567ff1a7cfb3e3294b7485b5a999320b64f98fc61f489140->enter($__internal_db200dc402d04f39567ff1a7cfb3e3294b7485b5a999320b64f98fc61f489140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bac4341210a97a3c06e0d00b01217262d583b90ddeed2ba4be60c3a0814534b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bac4341210a97a3c06e0d00b01217262d583b90ddeed2ba4be60c3a0814534b0->enter($__internal_bac4341210a97a3c06e0d00b01217262d583b90ddeed2ba4be60c3a0814534b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_bac4341210a97a3c06e0d00b01217262d583b90ddeed2ba4be60c3a0814534b0->leave($__internal_bac4341210a97a3c06e0d00b01217262d583b90ddeed2ba4be60c3a0814534b0_prof);

        
        $__internal_db200dc402d04f39567ff1a7cfb3e3294b7485b5a999320b64f98fc61f489140->leave($__internal_db200dc402d04f39567ff1a7cfb3e3294b7485b5a999320b64f98fc61f489140_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/Ma commune/BibliothequeCommune/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
