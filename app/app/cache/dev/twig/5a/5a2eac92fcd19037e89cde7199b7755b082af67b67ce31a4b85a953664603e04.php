<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_099931156d3f5f12abda9fdf87b4ebeed3cdfd2e886027f92bc8c5b49152693b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_a75d1f5a6c6df67573999e9636c37c9be889fa2bcfc5537cc5b3ef39668c349b = $this->env->getExtension("native_profiler");
        $__internal_a75d1f5a6c6df67573999e9636c37c9be889fa2bcfc5537cc5b3ef39668c349b->enter($__internal_a75d1f5a6c6df67573999e9636c37c9be889fa2bcfc5537cc5b3ef39668c349b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a75d1f5a6c6df67573999e9636c37c9be889fa2bcfc5537cc5b3ef39668c349b->leave($__internal_a75d1f5a6c6df67573999e9636c37c9be889fa2bcfc5537cc5b3ef39668c349b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f0eb7a92b0d83a412c07cce0b70b363ab31404475bcc70b846fec090ebe7620c = $this->env->getExtension("native_profiler");
        $__internal_f0eb7a92b0d83a412c07cce0b70b363ab31404475bcc70b846fec090ebe7620c->enter($__internal_f0eb7a92b0d83a412c07cce0b70b363ab31404475bcc70b846fec090ebe7620c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_f0eb7a92b0d83a412c07cce0b70b363ab31404475bcc70b846fec090ebe7620c->leave($__internal_f0eb7a92b0d83a412c07cce0b70b363ab31404475bcc70b846fec090ebe7620c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
