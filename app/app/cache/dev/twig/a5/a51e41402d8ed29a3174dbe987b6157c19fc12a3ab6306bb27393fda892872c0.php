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
        $__internal_94441c1433b71168f7e4267d135620cd40288d6bc6652322b03c1059800aa0e5 = $this->env->getExtension("native_profiler");
        $__internal_94441c1433b71168f7e4267d135620cd40288d6bc6652322b03c1059800aa0e5->enter($__internal_94441c1433b71168f7e4267d135620cd40288d6bc6652322b03c1059800aa0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94441c1433b71168f7e4267d135620cd40288d6bc6652322b03c1059800aa0e5->leave($__internal_94441c1433b71168f7e4267d135620cd40288d6bc6652322b03c1059800aa0e5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f865c172aea0961962ccae71370bf9305b3e04e63afb667b6c38a6bd0177e95c = $this->env->getExtension("native_profiler");
        $__internal_f865c172aea0961962ccae71370bf9305b3e04e63afb667b6c38a6bd0177e95c->enter($__internal_f865c172aea0961962ccae71370bf9305b3e04e63afb667b6c38a6bd0177e95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f865c172aea0961962ccae71370bf9305b3e04e63afb667b6c38a6bd0177e95c->leave($__internal_f865c172aea0961962ccae71370bf9305b3e04e63afb667b6c38a6bd0177e95c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8267c1fe18113e6db308b0aa2fbf5a60fe3e3744bd763072bab8c1f0ef520d17 = $this->env->getExtension("native_profiler");
        $__internal_8267c1fe18113e6db308b0aa2fbf5a60fe3e3744bd763072bab8c1f0ef520d17->enter($__internal_8267c1fe18113e6db308b0aa2fbf5a60fe3e3744bd763072bab8c1f0ef520d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8267c1fe18113e6db308b0aa2fbf5a60fe3e3744bd763072bab8c1f0ef520d17->leave($__internal_8267c1fe18113e6db308b0aa2fbf5a60fe3e3744bd763072bab8c1f0ef520d17_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3559668391e1a16d16f3cd0e9b231214b6f5a25ae6467009c9d0f93661d864f8 = $this->env->getExtension("native_profiler");
        $__internal_3559668391e1a16d16f3cd0e9b231214b6f5a25ae6467009c9d0f93661d864f8->enter($__internal_3559668391e1a16d16f3cd0e9b231214b6f5a25ae6467009c9d0f93661d864f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3559668391e1a16d16f3cd0e9b231214b6f5a25ae6467009c9d0f93661d864f8->leave($__internal_3559668391e1a16d16f3cd0e9b231214b6f5a25ae6467009c9d0f93661d864f8_prof);

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
