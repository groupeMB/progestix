<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_b082621d67cf73633b1cdea555336c1017de5d68215547fde77f2097b28972c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_8a2cdae89eb38c1eae21e8af0ae0d13f564814231c2c42bca69f62b30561418a = $this->env->getExtension("native_profiler");
        $__internal_8a2cdae89eb38c1eae21e8af0ae0d13f564814231c2c42bca69f62b30561418a->enter($__internal_8a2cdae89eb38c1eae21e8af0ae0d13f564814231c2c42bca69f62b30561418a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a2cdae89eb38c1eae21e8af0ae0d13f564814231c2c42bca69f62b30561418a->leave($__internal_8a2cdae89eb38c1eae21e8af0ae0d13f564814231c2c42bca69f62b30561418a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5837a5510532fc8ce0b2c93f2edfd9217c128da6e9cdc499e6fe45c8bcfb986d = $this->env->getExtension("native_profiler");
        $__internal_5837a5510532fc8ce0b2c93f2edfd9217c128da6e9cdc499e6fe45c8bcfb986d->enter($__internal_5837a5510532fc8ce0b2c93f2edfd9217c128da6e9cdc499e6fe45c8bcfb986d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_5837a5510532fc8ce0b2c93f2edfd9217c128da6e9cdc499e6fe45c8bcfb986d->leave($__internal_5837a5510532fc8ce0b2c93f2edfd9217c128da6e9cdc499e6fe45c8bcfb986d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
