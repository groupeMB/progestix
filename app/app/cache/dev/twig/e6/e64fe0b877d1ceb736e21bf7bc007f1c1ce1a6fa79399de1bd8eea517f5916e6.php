<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_800265b91a230721ac0e1c59ab9029ca1807d58ec3f84922cf7097564ffe1f42 extends Twig_Template
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
        $__internal_b7b9849cd6347e98d9fc73204eb643751936dccf1d6670eca9756de9208fad73 = $this->env->getExtension("native_profiler");
        $__internal_b7b9849cd6347e98d9fc73204eb643751936dccf1d6670eca9756de9208fad73->enter($__internal_b7b9849cd6347e98d9fc73204eb643751936dccf1d6670eca9756de9208fad73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7b9849cd6347e98d9fc73204eb643751936dccf1d6670eca9756de9208fad73->leave($__internal_b7b9849cd6347e98d9fc73204eb643751936dccf1d6670eca9756de9208fad73_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_885a06e0c29eaa6cd29b8176b8c39bee66529afe86d52a8ef4b4aadcfa1f0d28 = $this->env->getExtension("native_profiler");
        $__internal_885a06e0c29eaa6cd29b8176b8c39bee66529afe86d52a8ef4b4aadcfa1f0d28->enter($__internal_885a06e0c29eaa6cd29b8176b8c39bee66529afe86d52a8ef4b4aadcfa1f0d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_885a06e0c29eaa6cd29b8176b8c39bee66529afe86d52a8ef4b4aadcfa1f0d28->leave($__internal_885a06e0c29eaa6cd29b8176b8c39bee66529afe86d52a8ef4b4aadcfa1f0d28_prof);

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
