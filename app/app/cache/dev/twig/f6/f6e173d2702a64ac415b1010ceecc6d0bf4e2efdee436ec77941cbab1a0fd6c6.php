<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_fd239cca51d526494a11f2738714be82dd4ce29b510a158aedd3924f03f95614 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_e5b850d66d868df949fd047b4dd619d7d90f1cd7f1c326ad46658207db9fd626 = $this->env->getExtension("native_profiler");
        $__internal_e5b850d66d868df949fd047b4dd619d7d90f1cd7f1c326ad46658207db9fd626->enter($__internal_e5b850d66d868df949fd047b4dd619d7d90f1cd7f1c326ad46658207db9fd626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5b850d66d868df949fd047b4dd619d7d90f1cd7f1c326ad46658207db9fd626->leave($__internal_e5b850d66d868df949fd047b4dd619d7d90f1cd7f1c326ad46658207db9fd626_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_518b9a324f5e0440ff4f1089c11f8cccb80e37dfdb780f3e99f0178fd1ba83b4 = $this->env->getExtension("native_profiler");
        $__internal_518b9a324f5e0440ff4f1089c11f8cccb80e37dfdb780f3e99f0178fd1ba83b4->enter($__internal_518b9a324f5e0440ff4f1089c11f8cccb80e37dfdb780f3e99f0178fd1ba83b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_518b9a324f5e0440ff4f1089c11f8cccb80e37dfdb780f3e99f0178fd1ba83b4->leave($__internal_518b9a324f5e0440ff4f1089c11f8cccb80e37dfdb780f3e99f0178fd1ba83b4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
