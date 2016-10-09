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
        $__internal_ff7e85b9bae1f142e940787e3fa85fd45f348cbdc558533a7c88f4232a7905fb = $this->env->getExtension("native_profiler");
        $__internal_ff7e85b9bae1f142e940787e3fa85fd45f348cbdc558533a7c88f4232a7905fb->enter($__internal_ff7e85b9bae1f142e940787e3fa85fd45f348cbdc558533a7c88f4232a7905fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff7e85b9bae1f142e940787e3fa85fd45f348cbdc558533a7c88f4232a7905fb->leave($__internal_ff7e85b9bae1f142e940787e3fa85fd45f348cbdc558533a7c88f4232a7905fb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_142869fe0eee17441fdf7035e7ef1900fe32cac0cbe983f10bcacf8ece85e456 = $this->env->getExtension("native_profiler");
        $__internal_142869fe0eee17441fdf7035e7ef1900fe32cac0cbe983f10bcacf8ece85e456->enter($__internal_142869fe0eee17441fdf7035e7ef1900fe32cac0cbe983f10bcacf8ece85e456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_142869fe0eee17441fdf7035e7ef1900fe32cac0cbe983f10bcacf8ece85e456->leave($__internal_142869fe0eee17441fdf7035e7ef1900fe32cac0cbe983f10bcacf8ece85e456_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5198143b0dc392c14ef90b11aad3a2db624c7474628e9fea9a93902ac561ea73 = $this->env->getExtension("native_profiler");
        $__internal_5198143b0dc392c14ef90b11aad3a2db624c7474628e9fea9a93902ac561ea73->enter($__internal_5198143b0dc392c14ef90b11aad3a2db624c7474628e9fea9a93902ac561ea73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5198143b0dc392c14ef90b11aad3a2db624c7474628e9fea9a93902ac561ea73->leave($__internal_5198143b0dc392c14ef90b11aad3a2db624c7474628e9fea9a93902ac561ea73_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3808187ca9e491c3433a805d91b4666f3472c1f24f025e1dd71664be9d7d3cbb = $this->env->getExtension("native_profiler");
        $__internal_3808187ca9e491c3433a805d91b4666f3472c1f24f025e1dd71664be9d7d3cbb->enter($__internal_3808187ca9e491c3433a805d91b4666f3472c1f24f025e1dd71664be9d7d3cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3808187ca9e491c3433a805d91b4666f3472c1f24f025e1dd71664be9d7d3cbb->leave($__internal_3808187ca9e491c3433a805d91b4666f3472c1f24f025e1dd71664be9d7d3cbb_prof);

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
