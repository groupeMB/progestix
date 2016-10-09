<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_fccc38223574bc6a3fb62b87f197ee9e2872a05189dc23c08b23be6642b524e3 extends Twig_Template
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
        $__internal_53f35d35718b6c12f3c982f7d06cab5c6a67ba56b100144f61330ff4a5140cf8 = $this->env->getExtension("native_profiler");
        $__internal_53f35d35718b6c12f3c982f7d06cab5c6a67ba56b100144f61330ff4a5140cf8->enter($__internal_53f35d35718b6c12f3c982f7d06cab5c6a67ba56b100144f61330ff4a5140cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53f35d35718b6c12f3c982f7d06cab5c6a67ba56b100144f61330ff4a5140cf8->leave($__internal_53f35d35718b6c12f3c982f7d06cab5c6a67ba56b100144f61330ff4a5140cf8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df073f95d4c235a8b51ea7f0030641aaa3185f931b3bdf6df78049359f8f6ff2 = $this->env->getExtension("native_profiler");
        $__internal_df073f95d4c235a8b51ea7f0030641aaa3185f931b3bdf6df78049359f8f6ff2->enter($__internal_df073f95d4c235a8b51ea7f0030641aaa3185f931b3bdf6df78049359f8f6ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_df073f95d4c235a8b51ea7f0030641aaa3185f931b3bdf6df78049359f8f6ff2->leave($__internal_df073f95d4c235a8b51ea7f0030641aaa3185f931b3bdf6df78049359f8f6ff2_prof);

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
