<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_3b9bccc4998b5e4d96bfe5de015dc694136b99796d2b98733eb2627ba5907774 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_46a695e17446d1fe164410a10437c4e191868e65836becbadda63617283346c0 = $this->env->getExtension("native_profiler");
        $__internal_46a695e17446d1fe164410a10437c4e191868e65836becbadda63617283346c0->enter($__internal_46a695e17446d1fe164410a10437c4e191868e65836becbadda63617283346c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46a695e17446d1fe164410a10437c4e191868e65836becbadda63617283346c0->leave($__internal_46a695e17446d1fe164410a10437c4e191868e65836becbadda63617283346c0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d240156fe8048f5c10a733ded6d15ad165eba59266cbdbcad9a7a010fcc3ab8 = $this->env->getExtension("native_profiler");
        $__internal_4d240156fe8048f5c10a733ded6d15ad165eba59266cbdbcad9a7a010fcc3ab8->enter($__internal_4d240156fe8048f5c10a733ded6d15ad165eba59266cbdbcad9a7a010fcc3ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_4d240156fe8048f5c10a733ded6d15ad165eba59266cbdbcad9a7a010fcc3ab8->leave($__internal_4d240156fe8048f5c10a733ded6d15ad165eba59266cbdbcad9a7a010fcc3ab8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
