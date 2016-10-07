<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e88abbc0977075934d0f26bda302dbbe99a36c548472a7f41f048d852aafa56d extends Twig_Template
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
        $__internal_fbfb17b4439c60027198366b920faec01e2b39ca190e21cc7a9c532d6d9cc2e8 = $this->env->getExtension("native_profiler");
        $__internal_fbfb17b4439c60027198366b920faec01e2b39ca190e21cc7a9c532d6d9cc2e8->enter($__internal_fbfb17b4439c60027198366b920faec01e2b39ca190e21cc7a9c532d6d9cc2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_fbfb17b4439c60027198366b920faec01e2b39ca190e21cc7a9c532d6d9cc2e8->leave($__internal_fbfb17b4439c60027198366b920faec01e2b39ca190e21cc7a9c532d6d9cc2e8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
