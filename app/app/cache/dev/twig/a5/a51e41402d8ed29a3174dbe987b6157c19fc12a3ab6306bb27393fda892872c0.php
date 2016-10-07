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
        $__internal_6b5a81a1c44cb4fa966d333ea10ff4ce760d2e7f4a451bb09542e6508ebd718a = $this->env->getExtension("native_profiler");
        $__internal_6b5a81a1c44cb4fa966d333ea10ff4ce760d2e7f4a451bb09542e6508ebd718a->enter($__internal_6b5a81a1c44cb4fa966d333ea10ff4ce760d2e7f4a451bb09542e6508ebd718a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b5a81a1c44cb4fa966d333ea10ff4ce760d2e7f4a451bb09542e6508ebd718a->leave($__internal_6b5a81a1c44cb4fa966d333ea10ff4ce760d2e7f4a451bb09542e6508ebd718a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_72340a6428a6f3f5e41836bf70812cd67b5e86e708d96d2a471432ddc0865234 = $this->env->getExtension("native_profiler");
        $__internal_72340a6428a6f3f5e41836bf70812cd67b5e86e708d96d2a471432ddc0865234->enter($__internal_72340a6428a6f3f5e41836bf70812cd67b5e86e708d96d2a471432ddc0865234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_72340a6428a6f3f5e41836bf70812cd67b5e86e708d96d2a471432ddc0865234->leave($__internal_72340a6428a6f3f5e41836bf70812cd67b5e86e708d96d2a471432ddc0865234_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3378348bd6afd2e24c24bdd3eabd76bab746783c94b313f2b18b199853f29424 = $this->env->getExtension("native_profiler");
        $__internal_3378348bd6afd2e24c24bdd3eabd76bab746783c94b313f2b18b199853f29424->enter($__internal_3378348bd6afd2e24c24bdd3eabd76bab746783c94b313f2b18b199853f29424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3378348bd6afd2e24c24bdd3eabd76bab746783c94b313f2b18b199853f29424->leave($__internal_3378348bd6afd2e24c24bdd3eabd76bab746783c94b313f2b18b199853f29424_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cac67380089f831af7fcfe42b92dac15ca5ad31ff896be8e4f1907cc52ebe190 = $this->env->getExtension("native_profiler");
        $__internal_cac67380089f831af7fcfe42b92dac15ca5ad31ff896be8e4f1907cc52ebe190->enter($__internal_cac67380089f831af7fcfe42b92dac15ca5ad31ff896be8e4f1907cc52ebe190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cac67380089f831af7fcfe42b92dac15ca5ad31ff896be8e4f1907cc52ebe190->leave($__internal_cac67380089f831af7fcfe42b92dac15ca5ad31ff896be8e4f1907cc52ebe190_prof);

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
