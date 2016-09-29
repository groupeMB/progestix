<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_9ee2ee1779a0d3c3eccf1b390d74f46a2a1ddd8c36813d7e13df462f81f89cf1 extends Twig_Template
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
        $__internal_ee788a381ad530854c3fef237f54cc747979ce04b2fb82bc78630a8b91b3df12 = $this->env->getExtension("native_profiler");
        $__internal_ee788a381ad530854c3fef237f54cc747979ce04b2fb82bc78630a8b91b3df12->enter($__internal_ee788a381ad530854c3fef237f54cc747979ce04b2fb82bc78630a8b91b3df12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ee788a381ad530854c3fef237f54cc747979ce04b2fb82bc78630a8b91b3df12->leave($__internal_ee788a381ad530854c3fef237f54cc747979ce04b2fb82bc78630a8b91b3df12_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
