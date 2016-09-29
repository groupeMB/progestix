<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_bbe7cc7c715c5b8ccd74a79180573fb5c410b07a8c795921beea36b25fe1e9ec extends Twig_Template
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
        $__internal_4a0050fc158613db5e5e403d14bcc30ba2a0d69fbc4e3a0864d70e02594d35f0 = $this->env->getExtension("native_profiler");
        $__internal_4a0050fc158613db5e5e403d14bcc30ba2a0d69fbc4e3a0864d70e02594d35f0->enter($__internal_4a0050fc158613db5e5e403d14bcc30ba2a0d69fbc4e3a0864d70e02594d35f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4a0050fc158613db5e5e403d14bcc30ba2a0d69fbc4e3a0864d70e02594d35f0->leave($__internal_4a0050fc158613db5e5e403d14bcc30ba2a0d69fbc4e3a0864d70e02594d35f0_prof);

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
