<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_e254126724d8c30a94dda7b0d4afa3f9505294898c2fbc250b66554af47f8553 extends Twig_Template
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
        $__internal_0ea430c2a8f5331b34c4d3b5211efe8ce66fd0c876bee8a738b3ada3b1e09b6c = $this->env->getExtension("native_profiler");
        $__internal_0ea430c2a8f5331b34c4d3b5211efe8ce66fd0c876bee8a738b3ada3b1e09b6c->enter($__internal_0ea430c2a8f5331b34c4d3b5211efe8ce66fd0c876bee8a738b3ada3b1e09b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0ea430c2a8f5331b34c4d3b5211efe8ce66fd0c876bee8a738b3ada3b1e09b6c->leave($__internal_0ea430c2a8f5331b34c4d3b5211efe8ce66fd0c876bee8a738b3ada3b1e09b6c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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