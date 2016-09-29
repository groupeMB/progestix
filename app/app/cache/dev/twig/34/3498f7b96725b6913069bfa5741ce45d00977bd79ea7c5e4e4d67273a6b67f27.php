<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_e799e5f1822c43b8131aac56ea7f5ed3989c0339aaa60e52b1720e1e7c096d2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a228a6d8d34bdbe6347c23dc250fdc0cbacfcfa5f717f87929942da33c1f07a = $this->env->getExtension("native_profiler");
        $__internal_4a228a6d8d34bdbe6347c23dc250fdc0cbacfcfa5f717f87929942da33c1f07a->enter($__internal_4a228a6d8d34bdbe6347c23dc250fdc0cbacfcfa5f717f87929942da33c1f07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_4a228a6d8d34bdbe6347c23dc250fdc0cbacfcfa5f717f87929942da33c1f07a->leave($__internal_4a228a6d8d34bdbe6347c23dc250fdc0cbacfcfa5f717f87929942da33c1f07a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
