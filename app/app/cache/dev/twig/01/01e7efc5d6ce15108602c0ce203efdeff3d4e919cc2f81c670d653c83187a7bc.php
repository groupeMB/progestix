<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_df0e7a6b01431e922b6da8496c753e5e6f5ea114623d261ef47451735995887d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_151594f9433fc17ed494343aea02803ad6172e8e56271dee0acc4d10f6276236 = $this->env->getExtension("native_profiler");
        $__internal_151594f9433fc17ed494343aea02803ad6172e8e56271dee0acc4d10f6276236->enter($__internal_151594f9433fc17ed494343aea02803ad6172e8e56271dee0acc4d10f6276236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_151594f9433fc17ed494343aea02803ad6172e8e56271dee0acc4d10f6276236->leave($__internal_151594f9433fc17ed494343aea02803ad6172e8e56271dee0acc4d10f6276236_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_93b2125496a6be6af050d25e7776511ee849a8ca96778dab4d9a3b2dfd560e19 = $this->env->getExtension("native_profiler");
        $__internal_93b2125496a6be6af050d25e7776511ee849a8ca96778dab4d9a3b2dfd560e19->enter($__internal_93b2125496a6be6af050d25e7776511ee849a8ca96778dab4d9a3b2dfd560e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_93b2125496a6be6af050d25e7776511ee849a8ca96778dab4d9a3b2dfd560e19->leave($__internal_93b2125496a6be6af050d25e7776511ee849a8ca96778dab4d9a3b2dfd560e19_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4a32f810a92f1ffd47df53b6e23106ce3b2cadaa8c0c9a9b953adce5fc75a328 = $this->env->getExtension("native_profiler");
        $__internal_4a32f810a92f1ffd47df53b6e23106ce3b2cadaa8c0c9a9b953adce5fc75a328->enter($__internal_4a32f810a92f1ffd47df53b6e23106ce3b2cadaa8c0c9a9b953adce5fc75a328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4a32f810a92f1ffd47df53b6e23106ce3b2cadaa8c0c9a9b953adce5fc75a328->leave($__internal_4a32f810a92f1ffd47df53b6e23106ce3b2cadaa8c0c9a9b953adce5fc75a328_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cfa1aa99e4f4d6d0dca33a24c205e8727ae3a60ded390d42c5430b1b141934db = $this->env->getExtension("native_profiler");
        $__internal_cfa1aa99e4f4d6d0dca33a24c205e8727ae3a60ded390d42c5430b1b141934db->enter($__internal_cfa1aa99e4f4d6d0dca33a24c205e8727ae3a60ded390d42c5430b1b141934db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_cfa1aa99e4f4d6d0dca33a24c205e8727ae3a60ded390d42c5430b1b141934db->leave($__internal_cfa1aa99e4f4d6d0dca33a24c205e8727ae3a60ded390d42c5430b1b141934db_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
