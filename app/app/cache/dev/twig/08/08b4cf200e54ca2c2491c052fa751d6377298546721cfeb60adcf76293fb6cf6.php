<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_80a255d18f794b43bd0f62861bb759a743a4930e50fadde7fd07ba1e7c7b9842 extends Twig_Template
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
        $__internal_97fdbc33a00a567959aca4eddd79ea1e2020011fb81b3051061c437f907bc538 = $this->env->getExtension("native_profiler");
        $__internal_97fdbc33a00a567959aca4eddd79ea1e2020011fb81b3051061c437f907bc538->enter($__internal_97fdbc33a00a567959aca4eddd79ea1e2020011fb81b3051061c437f907bc538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_97fdbc33a00a567959aca4eddd79ea1e2020011fb81b3051061c437f907bc538->leave($__internal_97fdbc33a00a567959aca4eddd79ea1e2020011fb81b3051061c437f907bc538_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
