<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_827e8e760f077d3de6cfa961f4cf385054782716e7fccddb740999af37592338 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_b5b44b108ca3722ab63e5c4544fed8c1007279f472a5b66c3080d17784368443 = $this->env->getExtension("native_profiler");
        $__internal_b5b44b108ca3722ab63e5c4544fed8c1007279f472a5b66c3080d17784368443->enter($__internal_b5b44b108ca3722ab63e5c4544fed8c1007279f472a5b66c3080d17784368443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5b44b108ca3722ab63e5c4544fed8c1007279f472a5b66c3080d17784368443->leave($__internal_b5b44b108ca3722ab63e5c4544fed8c1007279f472a5b66c3080d17784368443_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7d8749a03af58b801f85e1fcd6b116a0d726016f4dab58aadeff6f3e73dc3acf = $this->env->getExtension("native_profiler");
        $__internal_7d8749a03af58b801f85e1fcd6b116a0d726016f4dab58aadeff6f3e73dc3acf->enter($__internal_7d8749a03af58b801f85e1fcd6b116a0d726016f4dab58aadeff6f3e73dc3acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7d8749a03af58b801f85e1fcd6b116a0d726016f4dab58aadeff6f3e73dc3acf->leave($__internal_7d8749a03af58b801f85e1fcd6b116a0d726016f4dab58aadeff6f3e73dc3acf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_225b30bfeba873cbbae5f6573505b672412e02d0980a2b37c8b9e9e98b8b0532 = $this->env->getExtension("native_profiler");
        $__internal_225b30bfeba873cbbae5f6573505b672412e02d0980a2b37c8b9e9e98b8b0532->enter($__internal_225b30bfeba873cbbae5f6573505b672412e02d0980a2b37c8b9e9e98b8b0532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_225b30bfeba873cbbae5f6573505b672412e02d0980a2b37c8b9e9e98b8b0532->leave($__internal_225b30bfeba873cbbae5f6573505b672412e02d0980a2b37c8b9e9e98b8b0532_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d54eb332b8cdbfe3de8785a006b10f064ee99efbdf7915c77725134b2911dca = $this->env->getExtension("native_profiler");
        $__internal_8d54eb332b8cdbfe3de8785a006b10f064ee99efbdf7915c77725134b2911dca->enter($__internal_8d54eb332b8cdbfe3de8785a006b10f064ee99efbdf7915c77725134b2911dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8d54eb332b8cdbfe3de8785a006b10f064ee99efbdf7915c77725134b2911dca->leave($__internal_8d54eb332b8cdbfe3de8785a006b10f064ee99efbdf7915c77725134b2911dca_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
