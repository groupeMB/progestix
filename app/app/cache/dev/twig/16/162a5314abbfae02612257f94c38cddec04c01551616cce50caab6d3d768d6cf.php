<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_ef934b92e22f914b043d7fa4319a8a63524b7674e602cf12f7e79f23837e505c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91e91b6506e599e1b50e50808ec20f9c120b1ffbd6c6df536387466b48e712ca = $this->env->getExtension("native_profiler");
        $__internal_91e91b6506e599e1b50e50808ec20f9c120b1ffbd6c6df536387466b48e712ca->enter($__internal_91e91b6506e599e1b50e50808ec20f9c120b1ffbd6c6df536387466b48e712ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91e91b6506e599e1b50e50808ec20f9c120b1ffbd6c6df536387466b48e712ca->leave($__internal_91e91b6506e599e1b50e50808ec20f9c120b1ffbd6c6df536387466b48e712ca_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec21ef1cea27cb2d2cacb00b36833663904b29a81c59d886080f13dd5f6b8e03 = $this->env->getExtension("native_profiler");
        $__internal_ec21ef1cea27cb2d2cacb00b36833663904b29a81c59d886080f13dd5f6b8e03->enter($__internal_ec21ef1cea27cb2d2cacb00b36833663904b29a81c59d886080f13dd5f6b8e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ec21ef1cea27cb2d2cacb00b36833663904b29a81c59d886080f13dd5f6b8e03->leave($__internal_ec21ef1cea27cb2d2cacb00b36833663904b29a81c59d886080f13dd5f6b8e03_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_baef6d4273a3690d7a224cedc210c3fa52cc31a5cf842744ad473ea0f9846abf = $this->env->getExtension("native_profiler");
        $__internal_baef6d4273a3690d7a224cedc210c3fa52cc31a5cf842744ad473ea0f9846abf->enter($__internal_baef6d4273a3690d7a224cedc210c3fa52cc31a5cf842744ad473ea0f9846abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_baef6d4273a3690d7a224cedc210c3fa52cc31a5cf842744ad473ea0f9846abf->leave($__internal_baef6d4273a3690d7a224cedc210c3fa52cc31a5cf842744ad473ea0f9846abf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
