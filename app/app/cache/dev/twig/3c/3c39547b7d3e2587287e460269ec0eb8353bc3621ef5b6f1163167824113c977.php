<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_c1be5b0ecffc776b3ccad11bed91d0809b4ecfe369cb5eced38062257b3e3b27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_dba42fe619cdbf2a158cb8c1f2b154bd69ea6e7361cbc2273427c9729df0894c = $this->env->getExtension("native_profiler");
        $__internal_dba42fe619cdbf2a158cb8c1f2b154bd69ea6e7361cbc2273427c9729df0894c->enter($__internal_dba42fe619cdbf2a158cb8c1f2b154bd69ea6e7361cbc2273427c9729df0894c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dba42fe619cdbf2a158cb8c1f2b154bd69ea6e7361cbc2273427c9729df0894c->leave($__internal_dba42fe619cdbf2a158cb8c1f2b154bd69ea6e7361cbc2273427c9729df0894c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_134d4e1c5cf38ead91fb7bea020bfde20baf4029d02cb41c885aeebfe311d251 = $this->env->getExtension("native_profiler");
        $__internal_134d4e1c5cf38ead91fb7bea020bfde20baf4029d02cb41c885aeebfe311d251->enter($__internal_134d4e1c5cf38ead91fb7bea020bfde20baf4029d02cb41c885aeebfe311d251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_134d4e1c5cf38ead91fb7bea020bfde20baf4029d02cb41c885aeebfe311d251->leave($__internal_134d4e1c5cf38ead91fb7bea020bfde20baf4029d02cb41c885aeebfe311d251_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
