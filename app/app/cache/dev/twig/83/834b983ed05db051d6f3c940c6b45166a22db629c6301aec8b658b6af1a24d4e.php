<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_6226968a2127fe0bc386a004ae240a5cc006edc99b66256c4faa2e95424f52dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_8964ae29a3929dabef0eb8a8442ec71827a62023e3c4d2ca6df469c461d9957d = $this->env->getExtension("native_profiler");
        $__internal_8964ae29a3929dabef0eb8a8442ec71827a62023e3c4d2ca6df469c461d9957d->enter($__internal_8964ae29a3929dabef0eb8a8442ec71827a62023e3c4d2ca6df469c461d9957d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8964ae29a3929dabef0eb8a8442ec71827a62023e3c4d2ca6df469c461d9957d->leave($__internal_8964ae29a3929dabef0eb8a8442ec71827a62023e3c4d2ca6df469c461d9957d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac4779b27f542ec86f26dac24a4d6c4e7f686a49516db661f816db08b41d2ed2 = $this->env->getExtension("native_profiler");
        $__internal_ac4779b27f542ec86f26dac24a4d6c4e7f686a49516db661f816db08b41d2ed2->enter($__internal_ac4779b27f542ec86f26dac24a4d6c4e7f686a49516db661f816db08b41d2ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_ac4779b27f542ec86f26dac24a4d6c4e7f686a49516db661f816db08b41d2ed2->leave($__internal_ac4779b27f542ec86f26dac24a4d6c4e7f686a49516db661f816db08b41d2ed2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
