<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_da9b5fd8061fabb7ba54603a72f35db01656c0d26bf21e7dcf7900803210e8d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_da391e84351c90a41b9cd387278e4a641fa3e175df238897bf550a64c1b9dd77 = $this->env->getExtension("native_profiler");
        $__internal_da391e84351c90a41b9cd387278e4a641fa3e175df238897bf550a64c1b9dd77->enter($__internal_da391e84351c90a41b9cd387278e4a641fa3e175df238897bf550a64c1b9dd77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da391e84351c90a41b9cd387278e4a641fa3e175df238897bf550a64c1b9dd77->leave($__internal_da391e84351c90a41b9cd387278e4a641fa3e175df238897bf550a64c1b9dd77_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c059bc29bc3bdeae489ea56f1ada74754f17b083437169cebba62a27f6e1a595 = $this->env->getExtension("native_profiler");
        $__internal_c059bc29bc3bdeae489ea56f1ada74754f17b083437169cebba62a27f6e1a595->enter($__internal_c059bc29bc3bdeae489ea56f1ada74754f17b083437169cebba62a27f6e1a595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_c059bc29bc3bdeae489ea56f1ada74754f17b083437169cebba62a27f6e1a595->leave($__internal_c059bc29bc3bdeae489ea56f1ada74754f17b083437169cebba62a27f6e1a595_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
