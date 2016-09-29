<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_1fa9abc40b55aa91ca3624b47c4f1e6b22304a815f5c630d93eff881176c0163 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_59da84722ff3d8447242a46de2573316ebe910ad67685466459f1eacbf8e7bb9 = $this->env->getExtension("native_profiler");
        $__internal_59da84722ff3d8447242a46de2573316ebe910ad67685466459f1eacbf8e7bb9->enter($__internal_59da84722ff3d8447242a46de2573316ebe910ad67685466459f1eacbf8e7bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59da84722ff3d8447242a46de2573316ebe910ad67685466459f1eacbf8e7bb9->leave($__internal_59da84722ff3d8447242a46de2573316ebe910ad67685466459f1eacbf8e7bb9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6b421b6c1f06284aede18cf93a8af4b8ff72fb68f951e84b61f848e5751488ea = $this->env->getExtension("native_profiler");
        $__internal_6b421b6c1f06284aede18cf93a8af4b8ff72fb68f951e84b61f848e5751488ea->enter($__internal_6b421b6c1f06284aede18cf93a8af4b8ff72fb68f951e84b61f848e5751488ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_6b421b6c1f06284aede18cf93a8af4b8ff72fb68f951e84b61f848e5751488ea->leave($__internal_6b421b6c1f06284aede18cf93a8af4b8ff72fb68f951e84b61f848e5751488ea_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
