<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_4a77d94050d5c83133a716de5c6cdc123ba0dfc351b6ba8cfb4fddfd82b28842 extends Twig_Template
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
        $__internal_bf763de2016b473da463137bfd89f4a5d422f97dbc6fc036f2fd02b0b8eae439 = $this->env->getExtension("native_profiler");
        $__internal_bf763de2016b473da463137bfd89f4a5d422f97dbc6fc036f2fd02b0b8eae439->enter($__internal_bf763de2016b473da463137bfd89f4a5d422f97dbc6fc036f2fd02b0b8eae439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_bf763de2016b473da463137bfd89f4a5d422f97dbc6fc036f2fd02b0b8eae439->leave($__internal_bf763de2016b473da463137bfd89f4a5d422f97dbc6fc036f2fd02b0b8eae439_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
