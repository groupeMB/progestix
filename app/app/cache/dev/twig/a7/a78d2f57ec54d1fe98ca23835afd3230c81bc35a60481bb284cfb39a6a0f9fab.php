<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_5729e607ec810be589e0aa351ac53a6206c4da04e9fd9c79384d5f3a67b6e2c5 extends Twig_Template
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
        $__internal_46ae4f390dede628bb111cd3cd868e7339215762edea51446ae54287c493e842 = $this->env->getExtension("native_profiler");
        $__internal_46ae4f390dede628bb111cd3cd868e7339215762edea51446ae54287c493e842->enter($__internal_46ae4f390dede628bb111cd3cd868e7339215762edea51446ae54287c493e842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46ae4f390dede628bb111cd3cd868e7339215762edea51446ae54287c493e842->leave($__internal_46ae4f390dede628bb111cd3cd868e7339215762edea51446ae54287c493e842_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80a449b2122bd1b289d792734024e0a0c5ee0d8ea388e4e2dbacf2d02ced1b15 = $this->env->getExtension("native_profiler");
        $__internal_80a449b2122bd1b289d792734024e0a0c5ee0d8ea388e4e2dbacf2d02ced1b15->enter($__internal_80a449b2122bd1b289d792734024e0a0c5ee0d8ea388e4e2dbacf2d02ced1b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_80a449b2122bd1b289d792734024e0a0c5ee0d8ea388e4e2dbacf2d02ced1b15->leave($__internal_80a449b2122bd1b289d792734024e0a0c5ee0d8ea388e4e2dbacf2d02ced1b15_prof);

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
