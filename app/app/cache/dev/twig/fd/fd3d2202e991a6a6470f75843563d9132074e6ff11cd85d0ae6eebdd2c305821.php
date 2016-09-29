<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_1baf4e279091ac6c883ea17f7762e87a57a961435127b4cc10203c515347c80e extends Twig_Template
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
        $__internal_7f5bc5bba0d2e9e1bd124b06379b761b00d5075fe2c65ca1c74c274d120757b4 = $this->env->getExtension("native_profiler");
        $__internal_7f5bc5bba0d2e9e1bd124b06379b761b00d5075fe2c65ca1c74c274d120757b4->enter($__internal_7f5bc5bba0d2e9e1bd124b06379b761b00d5075fe2c65ca1c74c274d120757b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7f5bc5bba0d2e9e1bd124b06379b761b00d5075fe2c65ca1c74c274d120757b4->leave($__internal_7f5bc5bba0d2e9e1bd124b06379b761b00d5075fe2c65ca1c74c274d120757b4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
