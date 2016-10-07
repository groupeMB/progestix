<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ae53c22da3c6b1a0608031120a19b370c92dad12311bad364c701e6f464a7d19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_aaa81862b3fd1c3e54e067ed7b0bd4ea77f3dd4551e057c456d6e0725e45ef47 = $this->env->getExtension("native_profiler");
        $__internal_aaa81862b3fd1c3e54e067ed7b0bd4ea77f3dd4551e057c456d6e0725e45ef47->enter($__internal_aaa81862b3fd1c3e54e067ed7b0bd4ea77f3dd4551e057c456d6e0725e45ef47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaa81862b3fd1c3e54e067ed7b0bd4ea77f3dd4551e057c456d6e0725e45ef47->leave($__internal_aaa81862b3fd1c3e54e067ed7b0bd4ea77f3dd4551e057c456d6e0725e45ef47_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_76e8c145d3a9653af1db3e9ddf7398cc1dc657f8e9952e6bdb1a103491b5d4a6 = $this->env->getExtension("native_profiler");
        $__internal_76e8c145d3a9653af1db3e9ddf7398cc1dc657f8e9952e6bdb1a103491b5d4a6->enter($__internal_76e8c145d3a9653af1db3e9ddf7398cc1dc657f8e9952e6bdb1a103491b5d4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_76e8c145d3a9653af1db3e9ddf7398cc1dc657f8e9952e6bdb1a103491b5d4a6->leave($__internal_76e8c145d3a9653af1db3e9ddf7398cc1dc657f8e9952e6bdb1a103491b5d4a6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_310eb6484857456332b19d2f8560134b24c292cb0b87c85cc8a14dde077015ba = $this->env->getExtension("native_profiler");
        $__internal_310eb6484857456332b19d2f8560134b24c292cb0b87c85cc8a14dde077015ba->enter($__internal_310eb6484857456332b19d2f8560134b24c292cb0b87c85cc8a14dde077015ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_310eb6484857456332b19d2f8560134b24c292cb0b87c85cc8a14dde077015ba->leave($__internal_310eb6484857456332b19d2f8560134b24c292cb0b87c85cc8a14dde077015ba_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
