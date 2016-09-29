<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3d7316143cf43e01754fa48612029faa164010b30cc51f3e9bd569f946f37237 extends Twig_Template
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
        $__internal_793b96f1f909d7ebee7fd8ecad530b73cffe4ade96497901990cb4cb7999863a = $this->env->getExtension("native_profiler");
        $__internal_793b96f1f909d7ebee7fd8ecad530b73cffe4ade96497901990cb4cb7999863a->enter($__internal_793b96f1f909d7ebee7fd8ecad530b73cffe4ade96497901990cb4cb7999863a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_793b96f1f909d7ebee7fd8ecad530b73cffe4ade96497901990cb4cb7999863a->leave($__internal_793b96f1f909d7ebee7fd8ecad530b73cffe4ade96497901990cb4cb7999863a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c217de1371fffca80172fe270b89db5d5ffddff553c42dad01682883537be804 = $this->env->getExtension("native_profiler");
        $__internal_c217de1371fffca80172fe270b89db5d5ffddff553c42dad01682883537be804->enter($__internal_c217de1371fffca80172fe270b89db5d5ffddff553c42dad01682883537be804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c217de1371fffca80172fe270b89db5d5ffddff553c42dad01682883537be804->leave($__internal_c217de1371fffca80172fe270b89db5d5ffddff553c42dad01682883537be804_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_abe1f313ab74842101c4a301cbfffe9395289660ca67cdce1cb524f58f1f532e = $this->env->getExtension("native_profiler");
        $__internal_abe1f313ab74842101c4a301cbfffe9395289660ca67cdce1cb524f58f1f532e->enter($__internal_abe1f313ab74842101c4a301cbfffe9395289660ca67cdce1cb524f58f1f532e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_abe1f313ab74842101c4a301cbfffe9395289660ca67cdce1cb524f58f1f532e->leave($__internal_abe1f313ab74842101c4a301cbfffe9395289660ca67cdce1cb524f58f1f532e_prof);

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
