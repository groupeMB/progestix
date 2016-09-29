<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_523134764e3bea587a5330b89bd08f35fb5d9304bcda631d87804974fdc3a04b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_fc02de34b90be0fb674314e3672d606a928506ee875b54aba9b1372eabfc3e22 = $this->env->getExtension("native_profiler");
        $__internal_fc02de34b90be0fb674314e3672d606a928506ee875b54aba9b1372eabfc3e22->enter($__internal_fc02de34b90be0fb674314e3672d606a928506ee875b54aba9b1372eabfc3e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc02de34b90be0fb674314e3672d606a928506ee875b54aba9b1372eabfc3e22->leave($__internal_fc02de34b90be0fb674314e3672d606a928506ee875b54aba9b1372eabfc3e22_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_39733c11e8ba8c43e700eb242d9460000eed34952b73c45a508e8ca7b7845ae9 = $this->env->getExtension("native_profiler");
        $__internal_39733c11e8ba8c43e700eb242d9460000eed34952b73c45a508e8ca7b7845ae9->enter($__internal_39733c11e8ba8c43e700eb242d9460000eed34952b73c45a508e8ca7b7845ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_39733c11e8ba8c43e700eb242d9460000eed34952b73c45a508e8ca7b7845ae9->leave($__internal_39733c11e8ba8c43e700eb242d9460000eed34952b73c45a508e8ca7b7845ae9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
