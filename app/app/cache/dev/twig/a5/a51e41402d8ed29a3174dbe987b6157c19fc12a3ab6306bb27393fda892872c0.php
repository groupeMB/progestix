<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9f75d3aa92c5a007e2ef9974f0ff6696ec8709e96762ef1939284aa1b3d57a75 extends Twig_Template
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
        $__internal_7ad524ee08343c7799dbf2a4970bb4e080e81e97af8c54f493c43593b1689d66 = $this->env->getExtension("native_profiler");
        $__internal_7ad524ee08343c7799dbf2a4970bb4e080e81e97af8c54f493c43593b1689d66->enter($__internal_7ad524ee08343c7799dbf2a4970bb4e080e81e97af8c54f493c43593b1689d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ad524ee08343c7799dbf2a4970bb4e080e81e97af8c54f493c43593b1689d66->leave($__internal_7ad524ee08343c7799dbf2a4970bb4e080e81e97af8c54f493c43593b1689d66_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ce2afd9c3a20f0b289e2006a2a8c095cd430459483810140e7a2e38766a50202 = $this->env->getExtension("native_profiler");
        $__internal_ce2afd9c3a20f0b289e2006a2a8c095cd430459483810140e7a2e38766a50202->enter($__internal_ce2afd9c3a20f0b289e2006a2a8c095cd430459483810140e7a2e38766a50202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ce2afd9c3a20f0b289e2006a2a8c095cd430459483810140e7a2e38766a50202->leave($__internal_ce2afd9c3a20f0b289e2006a2a8c095cd430459483810140e7a2e38766a50202_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_99298728c8484d6184ef0146cf482f9876f9125f48c4c1a23fb49275e3240851 = $this->env->getExtension("native_profiler");
        $__internal_99298728c8484d6184ef0146cf482f9876f9125f48c4c1a23fb49275e3240851->enter($__internal_99298728c8484d6184ef0146cf482f9876f9125f48c4c1a23fb49275e3240851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_99298728c8484d6184ef0146cf482f9876f9125f48c4c1a23fb49275e3240851->leave($__internal_99298728c8484d6184ef0146cf482f9876f9125f48c4c1a23fb49275e3240851_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5645ed676463057a129ed3d65123104eac13af5039b805b1aa60cd1df6cc6a1b = $this->env->getExtension("native_profiler");
        $__internal_5645ed676463057a129ed3d65123104eac13af5039b805b1aa60cd1df6cc6a1b->enter($__internal_5645ed676463057a129ed3d65123104eac13af5039b805b1aa60cd1df6cc6a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5645ed676463057a129ed3d65123104eac13af5039b805b1aa60cd1df6cc6a1b->leave($__internal_5645ed676463057a129ed3d65123104eac13af5039b805b1aa60cd1df6cc6a1b_prof);

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
