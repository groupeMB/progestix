<?php

/* @SonataAdmin/CRUD/show_email.html.twig */
class __TwigTemplate_456e6e5f7efc06c2e52ee09d7bf62df915494501766e7fb13c28db8720656431 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_email.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_814c66c73c711c913afb547000a4e60fed1275581558db1d850f99300d4e186e = $this->env->getExtension("native_profiler");
        $__internal_814c66c73c711c913afb547000a4e60fed1275581558db1d850f99300d4e186e->enter($__internal_814c66c73c711c913afb547000a4e60fed1275581558db1d850f99300d4e186e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_814c66c73c711c913afb547000a4e60fed1275581558db1d850f99300d4e186e->leave($__internal_814c66c73c711c913afb547000a4e60fed1275581558db1d850f99300d4e186e_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_b189481b5d269815cd9a24abef539a674670ee2864a3f2766aeaedb8bc1df828 = $this->env->getExtension("native_profiler");
        $__internal_b189481b5d269815cd9a24abef539a674670ee2864a3f2766aeaedb8bc1df828->enter($__internal_b189481b5d269815cd9a24abef539a674670ee2864a3f2766aeaedb8bc1df828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "@SonataAdmin/CRUD/show_email.html.twig", 4)->display($context);
        
        $__internal_b189481b5d269815cd9a24abef539a674670ee2864a3f2766aeaedb8bc1df828->leave($__internal_b189481b5d269815cd9a24abef539a674670ee2864a3f2766aeaedb8bc1df828_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_email.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}*/
/* {% endblock %}*/
/* */
