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
        $__internal_6b69f7c96119c96130ebe87777993c3c2350e7e65a4b9300effd9da04dc08cf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b69f7c96119c96130ebe87777993c3c2350e7e65a4b9300effd9da04dc08cf7->enter($__internal_6b69f7c96119c96130ebe87777993c3c2350e7e65a4b9300effd9da04dc08cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b69f7c96119c96130ebe87777993c3c2350e7e65a4b9300effd9da04dc08cf7->leave($__internal_6b69f7c96119c96130ebe87777993c3c2350e7e65a4b9300effd9da04dc08cf7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7fb93ac6a4748f5547ae208a0a61a10adf036bef5ac70e192a0f8d391abbe83d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb93ac6a4748f5547ae208a0a61a10adf036bef5ac70e192a0f8d391abbe83d->enter($__internal_7fb93ac6a4748f5547ae208a0a61a10adf036bef5ac70e192a0f8d391abbe83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7fb93ac6a4748f5547ae208a0a61a10adf036bef5ac70e192a0f8d391abbe83d->leave($__internal_7fb93ac6a4748f5547ae208a0a61a10adf036bef5ac70e192a0f8d391abbe83d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c48a6ec5f47ede2ed1ac0321fce4a96ea8e7e9b307b575b9240d9cd434a78073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c48a6ec5f47ede2ed1ac0321fce4a96ea8e7e9b307b575b9240d9cd434a78073->enter($__internal_c48a6ec5f47ede2ed1ac0321fce4a96ea8e7e9b307b575b9240d9cd434a78073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c48a6ec5f47ede2ed1ac0321fce4a96ea8e7e9b307b575b9240d9cd434a78073->leave($__internal_c48a6ec5f47ede2ed1ac0321fce4a96ea8e7e9b307b575b9240d9cd434a78073_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_05eeae5062b138f59424c68975a67bc77135d49b38886fd7bd5f9ae77a2d66cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05eeae5062b138f59424c68975a67bc77135d49b38886fd7bd5f9ae77a2d66cd->enter($__internal_05eeae5062b138f59424c68975a67bc77135d49b38886fd7bd5f9ae77a2d66cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_05eeae5062b138f59424c68975a67bc77135d49b38886fd7bd5f9ae77a2d66cd->leave($__internal_05eeae5062b138f59424c68975a67bc77135d49b38886fd7bd5f9ae77a2d66cd_prof);

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
