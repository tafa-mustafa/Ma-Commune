<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8f67a3dc01bd8087374a9e29fa323f5f2b434c86356fc24509d4337e7a46f310 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b3ec0430e7092b8c44a6c9b58eb32a7b9a4c70b06b7be599e51fb51811ca5376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3ec0430e7092b8c44a6c9b58eb32a7b9a4c70b06b7be599e51fb51811ca5376->enter($__internal_b3ec0430e7092b8c44a6c9b58eb32a7b9a4c70b06b7be599e51fb51811ca5376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d7392806d77c7743bff1f65918435ebe2d9f3eadb6db34915aa472dfb4d0d2a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7392806d77c7743bff1f65918435ebe2d9f3eadb6db34915aa472dfb4d0d2a2->enter($__internal_d7392806d77c7743bff1f65918435ebe2d9f3eadb6db34915aa472dfb4d0d2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3ec0430e7092b8c44a6c9b58eb32a7b9a4c70b06b7be599e51fb51811ca5376->leave($__internal_b3ec0430e7092b8c44a6c9b58eb32a7b9a4c70b06b7be599e51fb51811ca5376_prof);

        
        $__internal_d7392806d77c7743bff1f65918435ebe2d9f3eadb6db34915aa472dfb4d0d2a2->leave($__internal_d7392806d77c7743bff1f65918435ebe2d9f3eadb6db34915aa472dfb4d0d2a2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8894d52af7e12e4810faae17436b6cce4883954e911847523e3aa21e82f76259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8894d52af7e12e4810faae17436b6cce4883954e911847523e3aa21e82f76259->enter($__internal_8894d52af7e12e4810faae17436b6cce4883954e911847523e3aa21e82f76259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a9f055425e2055f20b997d74b1e048c5f22504176eafb1fb0889a9eab4d3d2d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9f055425e2055f20b997d74b1e048c5f22504176eafb1fb0889a9eab4d3d2d5->enter($__internal_a9f055425e2055f20b997d74b1e048c5f22504176eafb1fb0889a9eab4d3d2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a9f055425e2055f20b997d74b1e048c5f22504176eafb1fb0889a9eab4d3d2d5->leave($__internal_a9f055425e2055f20b997d74b1e048c5f22504176eafb1fb0889a9eab4d3d2d5_prof);

        
        $__internal_8894d52af7e12e4810faae17436b6cce4883954e911847523e3aa21e82f76259->leave($__internal_8894d52af7e12e4810faae17436b6cce4883954e911847523e3aa21e82f76259_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_350c69ab1078ece39f19b9b3369b4e2d3fb3b5bc1a87b745fe60c1698ff811e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_350c69ab1078ece39f19b9b3369b4e2d3fb3b5bc1a87b745fe60c1698ff811e4->enter($__internal_350c69ab1078ece39f19b9b3369b4e2d3fb3b5bc1a87b745fe60c1698ff811e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_710b43547d7c2d1f77e5cd620aec93548bf27a97d52c5ac1344b8bdcfe00cf09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710b43547d7c2d1f77e5cd620aec93548bf27a97d52c5ac1344b8bdcfe00cf09->enter($__internal_710b43547d7c2d1f77e5cd620aec93548bf27a97d52c5ac1344b8bdcfe00cf09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_710b43547d7c2d1f77e5cd620aec93548bf27a97d52c5ac1344b8bdcfe00cf09->leave($__internal_710b43547d7c2d1f77e5cd620aec93548bf27a97d52c5ac1344b8bdcfe00cf09_prof);

        
        $__internal_350c69ab1078ece39f19b9b3369b4e2d3fb3b5bc1a87b745fe60c1698ff811e4->leave($__internal_350c69ab1078ece39f19b9b3369b4e2d3fb3b5bc1a87b745fe60c1698ff811e4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_da6bc95c57aea319ce4a5d881ce6cec8ac6635ef5aa37316defdc29765a14829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da6bc95c57aea319ce4a5d881ce6cec8ac6635ef5aa37316defdc29765a14829->enter($__internal_da6bc95c57aea319ce4a5d881ce6cec8ac6635ef5aa37316defdc29765a14829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c2cd1c99d9b4190fe6d9ee14ebe81f5675b22775c93f189f3007f23a36c47e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2cd1c99d9b4190fe6d9ee14ebe81f5675b22775c93f189f3007f23a36c47e75->enter($__internal_c2cd1c99d9b4190fe6d9ee14ebe81f5675b22775c93f189f3007f23a36c47e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c2cd1c99d9b4190fe6d9ee14ebe81f5675b22775c93f189f3007f23a36c47e75->leave($__internal_c2cd1c99d9b4190fe6d9ee14ebe81f5675b22775c93f189f3007f23a36c47e75_prof);

        
        $__internal_da6bc95c57aea319ce4a5d881ce6cec8ac6635ef5aa37316defdc29765a14829->leave($__internal_da6bc95c57aea319ce4a5d881ce6cec8ac6635ef5aa37316defdc29765a14829_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/Ma commune/BibliothequeCommune/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
