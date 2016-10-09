<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_109fab78270e079ec75213572adda7403d6df0dbe18805504ae8f5fa98510a9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_bd24563e8e90e6041af24a55ffb94bb2f1cc063e77becc3ce72d03000ba53528 = $this->env->getExtension("native_profiler");
        $__internal_bd24563e8e90e6041af24a55ffb94bb2f1cc063e77becc3ce72d03000ba53528->enter($__internal_bd24563e8e90e6041af24a55ffb94bb2f1cc063e77becc3ce72d03000ba53528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd24563e8e90e6041af24a55ffb94bb2f1cc063e77becc3ce72d03000ba53528->leave($__internal_bd24563e8e90e6041af24a55ffb94bb2f1cc063e77becc3ce72d03000ba53528_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_10365ca04f44bba3259ece50df04e4d74e5a354b761cd7768ba3c69f96bdf20b = $this->env->getExtension("native_profiler");
        $__internal_10365ca04f44bba3259ece50df04e4d74e5a354b761cd7768ba3c69f96bdf20b->enter($__internal_10365ca04f44bba3259ece50df04e4d74e5a354b761cd7768ba3c69f96bdf20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_10365ca04f44bba3259ece50df04e4d74e5a354b761cd7768ba3c69f96bdf20b->leave($__internal_10365ca04f44bba3259ece50df04e4d74e5a354b761cd7768ba3c69f96bdf20b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
