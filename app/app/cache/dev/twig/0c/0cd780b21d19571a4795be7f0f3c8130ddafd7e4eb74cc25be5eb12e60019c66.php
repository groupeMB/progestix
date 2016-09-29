<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_6af021e92d0740bba60ce9f84ac44a17418abf6c5875ed1a5a7755e86c71e4e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e4c860d432af0124d3746613866c1471ad8862ab61cb46af0dabc4d8eeb0825 = $this->env->getExtension("native_profiler");
        $__internal_6e4c860d432af0124d3746613866c1471ad8862ab61cb46af0dabc4d8eeb0825->enter($__internal_6e4c860d432af0124d3746613866c1471ad8862ab61cb46af0dabc4d8eeb0825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e4c860d432af0124d3746613866c1471ad8862ab61cb46af0dabc4d8eeb0825->leave($__internal_6e4c860d432af0124d3746613866c1471ad8862ab61cb46af0dabc4d8eeb0825_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5af025a40bb60eb23bc6493fbb67f422fe71bc718bd80402b92cf5b3edc1c1cc = $this->env->getExtension("native_profiler");
        $__internal_5af025a40bb60eb23bc6493fbb67f422fe71bc718bd80402b92cf5b3edc1c1cc->enter($__internal_5af025a40bb60eb23bc6493fbb67f422fe71bc718bd80402b92cf5b3edc1c1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_5af025a40bb60eb23bc6493fbb67f422fe71bc718bd80402b92cf5b3edc1c1cc->leave($__internal_5af025a40bb60eb23bc6493fbb67f422fe71bc718bd80402b92cf5b3edc1c1cc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
