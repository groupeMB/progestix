<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_9c5a9548fe436447b87f425aeeef58ecd5d67dc127b00b732b4513698157568a extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80928273fdd093c23eb31c865ba8f7950f708553cfb0d47abf3ddc996bece294 = $this->env->getExtension("native_profiler");
        $__internal_80928273fdd093c23eb31c865ba8f7950f708553cfb0d47abf3ddc996bece294->enter($__internal_80928273fdd093c23eb31c865ba8f7950f708553cfb0d47abf3ddc996bece294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80928273fdd093c23eb31c865ba8f7950f708553cfb0d47abf3ddc996bece294->leave($__internal_80928273fdd093c23eb31c865ba8f7950f708553cfb0d47abf3ddc996bece294_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
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
