<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_e160da5c2e9ade1524254775b7707e0320ee7362d47b9cca1385180516f47ca9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_a32a71347a4e03710830bcdaf6e1077ca29717838570ed34ddda9d2fd6e8dc4f = $this->env->getExtension("native_profiler");
        $__internal_a32a71347a4e03710830bcdaf6e1077ca29717838570ed34ddda9d2fd6e8dc4f->enter($__internal_a32a71347a4e03710830bcdaf6e1077ca29717838570ed34ddda9d2fd6e8dc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a32a71347a4e03710830bcdaf6e1077ca29717838570ed34ddda9d2fd6e8dc4f->leave($__internal_a32a71347a4e03710830bcdaf6e1077ca29717838570ed34ddda9d2fd6e8dc4f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_96d9191b5cafaa802626cfd88258aa7acb17ede9106df537ca090839524caa62 = $this->env->getExtension("native_profiler");
        $__internal_96d9191b5cafaa802626cfd88258aa7acb17ede9106df537ca090839524caa62->enter($__internal_96d9191b5cafaa802626cfd88258aa7acb17ede9106df537ca090839524caa62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_96d9191b5cafaa802626cfd88258aa7acb17ede9106df537ca090839524caa62->leave($__internal_96d9191b5cafaa802626cfd88258aa7acb17ede9106df537ca090839524caa62_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
