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
        $__internal_7d8c40a788c1ed3ae7b90b59a8aa7c403487fb00f630f0874d16004f3fcd29ba = $this->env->getExtension("native_profiler");
        $__internal_7d8c40a788c1ed3ae7b90b59a8aa7c403487fb00f630f0874d16004f3fcd29ba->enter($__internal_7d8c40a788c1ed3ae7b90b59a8aa7c403487fb00f630f0874d16004f3fcd29ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d8c40a788c1ed3ae7b90b59a8aa7c403487fb00f630f0874d16004f3fcd29ba->leave($__internal_7d8c40a788c1ed3ae7b90b59a8aa7c403487fb00f630f0874d16004f3fcd29ba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_860cd6c78b1b8c781bf55e8fa866a53719e5ad3a37524d0aa5313866c4da4268 = $this->env->getExtension("native_profiler");
        $__internal_860cd6c78b1b8c781bf55e8fa866a53719e5ad3a37524d0aa5313866c4da4268->enter($__internal_860cd6c78b1b8c781bf55e8fa866a53719e5ad3a37524d0aa5313866c4da4268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_860cd6c78b1b8c781bf55e8fa866a53719e5ad3a37524d0aa5313866c4da4268->leave($__internal_860cd6c78b1b8c781bf55e8fa866a53719e5ad3a37524d0aa5313866c4da4268_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5972b8cede9575d612d48905713f185216b6f6f3e07c9a2ab4f7ea1faa862a21 = $this->env->getExtension("native_profiler");
        $__internal_5972b8cede9575d612d48905713f185216b6f6f3e07c9a2ab4f7ea1faa862a21->enter($__internal_5972b8cede9575d612d48905713f185216b6f6f3e07c9a2ab4f7ea1faa862a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5972b8cede9575d612d48905713f185216b6f6f3e07c9a2ab4f7ea1faa862a21->leave($__internal_5972b8cede9575d612d48905713f185216b6f6f3e07c9a2ab4f7ea1faa862a21_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa91e9720d81e97680a89c41b04d837cf3934e231796453dbe78158901da0e01 = $this->env->getExtension("native_profiler");
        $__internal_aa91e9720d81e97680a89c41b04d837cf3934e231796453dbe78158901da0e01->enter($__internal_aa91e9720d81e97680a89c41b04d837cf3934e231796453dbe78158901da0e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_aa91e9720d81e97680a89c41b04d837cf3934e231796453dbe78158901da0e01->leave($__internal_aa91e9720d81e97680a89c41b04d837cf3934e231796453dbe78158901da0e01_prof);

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
