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
        $__internal_824279b001846e68d8cb8d6a23f70d6010bb5dda79882b6335a131f4ad264a26 = $this->env->getExtension("native_profiler");
        $__internal_824279b001846e68d8cb8d6a23f70d6010bb5dda79882b6335a131f4ad264a26->enter($__internal_824279b001846e68d8cb8d6a23f70d6010bb5dda79882b6335a131f4ad264a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_824279b001846e68d8cb8d6a23f70d6010bb5dda79882b6335a131f4ad264a26->leave($__internal_824279b001846e68d8cb8d6a23f70d6010bb5dda79882b6335a131f4ad264a26_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_369fa00c4a42f27b239514a9495ce646ca5527a613cdea2d2786bf7b26aee1e4 = $this->env->getExtension("native_profiler");
        $__internal_369fa00c4a42f27b239514a9495ce646ca5527a613cdea2d2786bf7b26aee1e4->enter($__internal_369fa00c4a42f27b239514a9495ce646ca5527a613cdea2d2786bf7b26aee1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_369fa00c4a42f27b239514a9495ce646ca5527a613cdea2d2786bf7b26aee1e4->leave($__internal_369fa00c4a42f27b239514a9495ce646ca5527a613cdea2d2786bf7b26aee1e4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7e72c690e1ebd5e2a684e2b23418274ef62a6cc0031d30927c91cd913d16eef = $this->env->getExtension("native_profiler");
        $__internal_c7e72c690e1ebd5e2a684e2b23418274ef62a6cc0031d30927c91cd913d16eef->enter($__internal_c7e72c690e1ebd5e2a684e2b23418274ef62a6cc0031d30927c91cd913d16eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c7e72c690e1ebd5e2a684e2b23418274ef62a6cc0031d30927c91cd913d16eef->leave($__internal_c7e72c690e1ebd5e2a684e2b23418274ef62a6cc0031d30927c91cd913d16eef_prof);

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
