<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_7f5a4d192ce2c85a31ccdd482cf8c54a27e11098859e88a8caa95326ea113b51 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3043d85a658fde0068efa6e640d45a8b88ed0e724b320c693bb2e084ae87e30 = $this->env->getExtension("native_profiler");
        $__internal_f3043d85a658fde0068efa6e640d45a8b88ed0e724b320c693bb2e084ae87e30->enter($__internal_f3043d85a658fde0068efa6e640d45a8b88ed0e724b320c693bb2e084ae87e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3043d85a658fde0068efa6e640d45a8b88ed0e724b320c693bb2e084ae87e30->leave($__internal_f3043d85a658fde0068efa6e640d45a8b88ed0e724b320c693bb2e084ae87e30_prof);

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
