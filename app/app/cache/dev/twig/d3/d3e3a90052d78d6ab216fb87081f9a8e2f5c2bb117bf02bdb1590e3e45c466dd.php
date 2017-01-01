<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b8f1b7bc909c5480d1be2062236ac42fe24ad67f4e8c2a3ae49e02deee20885a extends Twig_Template
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
        $__internal_2fd28115d25c155320e7fee8ed9e1112d3f67a053afa1250cb7beb6156d2de9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd28115d25c155320e7fee8ed9e1112d3f67a053afa1250cb7beb6156d2de9c->enter($__internal_2fd28115d25c155320e7fee8ed9e1112d3f67a053afa1250cb7beb6156d2de9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fd28115d25c155320e7fee8ed9e1112d3f67a053afa1250cb7beb6156d2de9c->leave($__internal_2fd28115d25c155320e7fee8ed9e1112d3f67a053afa1250cb7beb6156d2de9c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0dbd6e53683ebdb5fe8d2705a28deeafa6b1a2012c421589cadaaf20852c60bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dbd6e53683ebdb5fe8d2705a28deeafa6b1a2012c421589cadaaf20852c60bf->enter($__internal_0dbd6e53683ebdb5fe8d2705a28deeafa6b1a2012c421589cadaaf20852c60bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0dbd6e53683ebdb5fe8d2705a28deeafa6b1a2012c421589cadaaf20852c60bf->leave($__internal_0dbd6e53683ebdb5fe8d2705a28deeafa6b1a2012c421589cadaaf20852c60bf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ff3e748d763dd56217ceb1f46ca8cb977dabe4030e57b3970d891240ef2672c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff3e748d763dd56217ceb1f46ca8cb977dabe4030e57b3970d891240ef2672c8->enter($__internal_ff3e748d763dd56217ceb1f46ca8cb977dabe4030e57b3970d891240ef2672c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ff3e748d763dd56217ceb1f46ca8cb977dabe4030e57b3970d891240ef2672c8->leave($__internal_ff3e748d763dd56217ceb1f46ca8cb977dabe4030e57b3970d891240ef2672c8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4f0bc3c307498f45256afc0848a670f804a4ac1033027ec55b5d48c06644a15c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f0bc3c307498f45256afc0848a670f804a4ac1033027ec55b5d48c06644a15c->enter($__internal_4f0bc3c307498f45256afc0848a670f804a4ac1033027ec55b5d48c06644a15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4f0bc3c307498f45256afc0848a670f804a4ac1033027ec55b5d48c06644a15c->leave($__internal_4f0bc3c307498f45256afc0848a670f804a4ac1033027ec55b5d48c06644a15c_prof);

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
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/exception.html.twig", "/home/abdoulaye/workspace/workflows/progestix/progestix/app/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
