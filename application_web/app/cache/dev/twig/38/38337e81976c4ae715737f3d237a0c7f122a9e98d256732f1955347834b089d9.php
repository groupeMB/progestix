<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b9070e80bc948916c1f857655aebcf3e38f9c95e64721daba9f0fdd37911eb60 extends Twig_Template
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
        $__internal_f0aa48e1c0e6291f05ff81fd7df744356bedf1a6f246cadb2bd3fda5d726b37b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0aa48e1c0e6291f05ff81fd7df744356bedf1a6f246cadb2bd3fda5d726b37b->enter($__internal_f0aa48e1c0e6291f05ff81fd7df744356bedf1a6f246cadb2bd3fda5d726b37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0aa48e1c0e6291f05ff81fd7df744356bedf1a6f246cadb2bd3fda5d726b37b->leave($__internal_f0aa48e1c0e6291f05ff81fd7df744356bedf1a6f246cadb2bd3fda5d726b37b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a87574a9346f8e3d0ab0bf2055bd29e26471b09b5a8c289f09edd40903f77df0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a87574a9346f8e3d0ab0bf2055bd29e26471b09b5a8c289f09edd40903f77df0->enter($__internal_a87574a9346f8e3d0ab0bf2055bd29e26471b09b5a8c289f09edd40903f77df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a87574a9346f8e3d0ab0bf2055bd29e26471b09b5a8c289f09edd40903f77df0->leave($__internal_a87574a9346f8e3d0ab0bf2055bd29e26471b09b5a8c289f09edd40903f77df0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_42b7d0a37bb0e33cff420d41124d40ce723b34e9c023865b8f3a920e759cd94b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42b7d0a37bb0e33cff420d41124d40ce723b34e9c023865b8f3a920e759cd94b->enter($__internal_42b7d0a37bb0e33cff420d41124d40ce723b34e9c023865b8f3a920e759cd94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_42b7d0a37bb0e33cff420d41124d40ce723b34e9c023865b8f3a920e759cd94b->leave($__internal_42b7d0a37bb0e33cff420d41124d40ce723b34e9c023865b8f3a920e759cd94b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_63eb33d67879ec734fcf7439dc629a4ab5467323b31b508908be73886cdde40b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63eb33d67879ec734fcf7439dc629a4ab5467323b31b508908be73886cdde40b->enter($__internal_63eb33d67879ec734fcf7439dc629a4ab5467323b31b508908be73886cdde40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_63eb33d67879ec734fcf7439dc629a4ab5467323b31b508908be73886cdde40b->leave($__internal_63eb33d67879ec734fcf7439dc629a4ab5467323b31b508908be73886cdde40b_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "/home/abdoulaye/workspace/workflows/progestix/progestix/app/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
