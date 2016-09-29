<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_7a0bd1ce29b6bb5d3103ae7eeca185178e2ce23a55f047b5f2e5766d5603fee1 extends Twig_Template
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
        $__internal_147d6a5bff10ad882519fc09dd5272b2ec67abea42c1ab494f96972dfe4c0e77 = $this->env->getExtension("native_profiler");
        $__internal_147d6a5bff10ad882519fc09dd5272b2ec67abea42c1ab494f96972dfe4c0e77->enter($__internal_147d6a5bff10ad882519fc09dd5272b2ec67abea42c1ab494f96972dfe4c0e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_147d6a5bff10ad882519fc09dd5272b2ec67abea42c1ab494f96972dfe4c0e77->leave($__internal_147d6a5bff10ad882519fc09dd5272b2ec67abea42c1ab494f96972dfe4c0e77_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
