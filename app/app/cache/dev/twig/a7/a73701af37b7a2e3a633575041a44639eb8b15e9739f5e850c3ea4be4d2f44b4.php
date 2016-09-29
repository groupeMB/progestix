<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f72c7e8a6a6567779dbc76426a8f493225043daa682ec56547d9da8850ab6232 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_8203dc7a7a8180e6785e2ac8c2392a83e75ab0db280e0cc9921e1dcd890b050b = $this->env->getExtension("native_profiler");
        $__internal_8203dc7a7a8180e6785e2ac8c2392a83e75ab0db280e0cc9921e1dcd890b050b->enter($__internal_8203dc7a7a8180e6785e2ac8c2392a83e75ab0db280e0cc9921e1dcd890b050b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8203dc7a7a8180e6785e2ac8c2392a83e75ab0db280e0cc9921e1dcd890b050b->leave($__internal_8203dc7a7a8180e6785e2ac8c2392a83e75ab0db280e0cc9921e1dcd890b050b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4d03591cbd639fede013aadd6943f344616ece3e805f7abee4394419b1e70389 = $this->env->getExtension("native_profiler");
        $__internal_4d03591cbd639fede013aadd6943f344616ece3e805f7abee4394419b1e70389->enter($__internal_4d03591cbd639fede013aadd6943f344616ece3e805f7abee4394419b1e70389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4d03591cbd639fede013aadd6943f344616ece3e805f7abee4394419b1e70389->leave($__internal_4d03591cbd639fede013aadd6943f344616ece3e805f7abee4394419b1e70389_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb84abae9f763c713ea237da52266d7a25f141782cf4183fa430e19c67e56975 = $this->env->getExtension("native_profiler");
        $__internal_cb84abae9f763c713ea237da52266d7a25f141782cf4183fa430e19c67e56975->enter($__internal_cb84abae9f763c713ea237da52266d7a25f141782cf4183fa430e19c67e56975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cb84abae9f763c713ea237da52266d7a25f141782cf4183fa430e19c67e56975->leave($__internal_cb84abae9f763c713ea237da52266d7a25f141782cf4183fa430e19c67e56975_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5d1ad2a1dca3033fd67714bb4c4429715d096fc53780e227f7081d27c1887aa = $this->env->getExtension("native_profiler");
        $__internal_f5d1ad2a1dca3033fd67714bb4c4429715d096fc53780e227f7081d27c1887aa->enter($__internal_f5d1ad2a1dca3033fd67714bb4c4429715d096fc53780e227f7081d27c1887aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f5d1ad2a1dca3033fd67714bb4c4429715d096fc53780e227f7081d27c1887aa->leave($__internal_f5d1ad2a1dca3033fd67714bb4c4429715d096fc53780e227f7081d27c1887aa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
