<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_900088a900525aa07ce6af4889b6419b37510609bb21b5b99933ea0463b3d608 extends Twig_Template
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
        $__internal_17e6f070d0bbed076985c5227653470e028baac2b431ec4537497d6f69369e25 = $this->env->getExtension("native_profiler");
        $__internal_17e6f070d0bbed076985c5227653470e028baac2b431ec4537497d6f69369e25->enter($__internal_17e6f070d0bbed076985c5227653470e028baac2b431ec4537497d6f69369e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_17e6f070d0bbed076985c5227653470e028baac2b431ec4537497d6f69369e25->leave($__internal_17e6f070d0bbed076985c5227653470e028baac2b431ec4537497d6f69369e25_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
