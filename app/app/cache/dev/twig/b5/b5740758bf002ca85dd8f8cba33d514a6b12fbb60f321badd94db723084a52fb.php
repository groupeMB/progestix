<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_640502ac34e8b3095975fe88786d54d62c08d8a2319f6b236d9a63bc7781a18f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_372fe052564b39bf2e686000ea5af5295a0f2a5d733c2bce9240c45b74fa7a06 = $this->env->getExtension("native_profiler");
        $__internal_372fe052564b39bf2e686000ea5af5295a0f2a5d733c2bce9240c45b74fa7a06->enter($__internal_372fe052564b39bf2e686000ea5af5295a0f2a5d733c2bce9240c45b74fa7a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_372fe052564b39bf2e686000ea5af5295a0f2a5d733c2bce9240c45b74fa7a06->leave($__internal_372fe052564b39bf2e686000ea5af5295a0f2a5d733c2bce9240c45b74fa7a06_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1053574c26f3bae66cfc6fb39daa4df6ab945d3d023f82bcd84f2c4c50c96998 = $this->env->getExtension("native_profiler");
        $__internal_1053574c26f3bae66cfc6fb39daa4df6ab945d3d023f82bcd84f2c4c50c96998->enter($__internal_1053574c26f3bae66cfc6fb39daa4df6ab945d3d023f82bcd84f2c4c50c96998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_1053574c26f3bae66cfc6fb39daa4df6ab945d3d023f82bcd84f2c4c50c96998->leave($__internal_1053574c26f3bae66cfc6fb39daa4df6ab945d3d023f82bcd84f2c4c50c96998_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}*/
/* {% endblock %}*/
/* */
