<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_35f3b0ca7d322331f8411932354eefb0b23bdfad90cbf28d10136f9072d8026e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_bdfa28669dd2bdc3187a4f4c0cfd8315965789c4ea0368ec6cf53d90969ebc08 = $this->env->getExtension("native_profiler");
        $__internal_bdfa28669dd2bdc3187a4f4c0cfd8315965789c4ea0368ec6cf53d90969ebc08->enter($__internal_bdfa28669dd2bdc3187a4f4c0cfd8315965789c4ea0368ec6cf53d90969ebc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdfa28669dd2bdc3187a4f4c0cfd8315965789c4ea0368ec6cf53d90969ebc08->leave($__internal_bdfa28669dd2bdc3187a4f4c0cfd8315965789c4ea0368ec6cf53d90969ebc08_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_196695aea0d6101bea5f1f77e90db5a6868fbb83e889869ecb977c27f0484fd0 = $this->env->getExtension("native_profiler");
        $__internal_196695aea0d6101bea5f1f77e90db5a6868fbb83e889869ecb977c27f0484fd0->enter($__internal_196695aea0d6101bea5f1f77e90db5a6868fbb83e889869ecb977c27f0484fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_196695aea0d6101bea5f1f77e90db5a6868fbb83e889869ecb977c27f0484fd0->leave($__internal_196695aea0d6101bea5f1f77e90db5a6868fbb83e889869ecb977c27f0484fd0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
