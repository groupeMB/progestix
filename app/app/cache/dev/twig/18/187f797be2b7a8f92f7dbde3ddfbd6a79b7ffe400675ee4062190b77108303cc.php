<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_afa1cec3c3bfdbc03ed964cc981741068043f82f3c3181726595074490e1814f extends Twig_Template
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
        $__internal_741bfa5bf2c4ed8f6889f72030b33baf0c295e659257a853e4fc1ae7d33a48d5 = $this->env->getExtension("native_profiler");
        $__internal_741bfa5bf2c4ed8f6889f72030b33baf0c295e659257a853e4fc1ae7d33a48d5->enter($__internal_741bfa5bf2c4ed8f6889f72030b33baf0c295e659257a853e4fc1ae7d33a48d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_741bfa5bf2c4ed8f6889f72030b33baf0c295e659257a853e4fc1ae7d33a48d5->leave($__internal_741bfa5bf2c4ed8f6889f72030b33baf0c295e659257a853e4fc1ae7d33a48d5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ef92ce45348d99c36c016cdc17b07e0bcf3e1cbd2a4cca2870fb8ee916a9a3e7 = $this->env->getExtension("native_profiler");
        $__internal_ef92ce45348d99c36c016cdc17b07e0bcf3e1cbd2a4cca2870fb8ee916a9a3e7->enter($__internal_ef92ce45348d99c36c016cdc17b07e0bcf3e1cbd2a4cca2870fb8ee916a9a3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ef92ce45348d99c36c016cdc17b07e0bcf3e1cbd2a4cca2870fb8ee916a9a3e7->leave($__internal_ef92ce45348d99c36c016cdc17b07e0bcf3e1cbd2a4cca2870fb8ee916a9a3e7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b826d181aac91426ebe96da30e2c6f26a3f308f5e24cf166f30e6068efb8a376 = $this->env->getExtension("native_profiler");
        $__internal_b826d181aac91426ebe96da30e2c6f26a3f308f5e24cf166f30e6068efb8a376->enter($__internal_b826d181aac91426ebe96da30e2c6f26a3f308f5e24cf166f30e6068efb8a376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b826d181aac91426ebe96da30e2c6f26a3f308f5e24cf166f30e6068efb8a376->leave($__internal_b826d181aac91426ebe96da30e2c6f26a3f308f5e24cf166f30e6068efb8a376_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2d40cbf37d4266e24ca7635c9985b2ddd5d41c01f099ef140d5da2c6dae60f65 = $this->env->getExtension("native_profiler");
        $__internal_2d40cbf37d4266e24ca7635c9985b2ddd5d41c01f099ef140d5da2c6dae60f65->enter($__internal_2d40cbf37d4266e24ca7635c9985b2ddd5d41c01f099ef140d5da2c6dae60f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2d40cbf37d4266e24ca7635c9985b2ddd5d41c01f099ef140d5da2c6dae60f65->leave($__internal_2d40cbf37d4266e24ca7635c9985b2ddd5d41c01f099ef140d5da2c6dae60f65_prof);

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
