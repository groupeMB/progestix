<?php

/* @SonataAdmin/CRUD/list_string.html.twig */
class __TwigTemplate_f28d917e074eede78d61c0cc363ccc1b0bea935cd2b50ba2b5099cd980bf583b extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f15b879f91b8c2c19046770bb51195e6c6e8b3a607bcd3751cb2a07f9518798 = $this->env->getExtension("native_profiler");
        $__internal_7f15b879f91b8c2c19046770bb51195e6c6e8b3a607bcd3751cb2a07f9518798->enter($__internal_7f15b879f91b8c2c19046770bb51195e6c6e8b3a607bcd3751cb2a07f9518798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f15b879f91b8c2c19046770bb51195e6c6e8b3a607bcd3751cb2a07f9518798->leave($__internal_7f15b879f91b8c2c19046770bb51195e6c6e8b3a607bcd3751cb2a07f9518798_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
