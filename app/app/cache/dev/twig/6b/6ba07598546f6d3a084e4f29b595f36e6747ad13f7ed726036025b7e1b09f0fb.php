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
        $__internal_f5275fe8fcbd169c0a70f28875592068d8c800ae9931dc312ad33368cba5de31 = $this->env->getExtension("native_profiler");
        $__internal_f5275fe8fcbd169c0a70f28875592068d8c800ae9931dc312ad33368cba5de31->enter($__internal_f5275fe8fcbd169c0a70f28875592068d8c800ae9931dc312ad33368cba5de31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_f5275fe8fcbd169c0a70f28875592068d8c800ae9931dc312ad33368cba5de31->leave($__internal_f5275fe8fcbd169c0a70f28875592068d8c800ae9931dc312ad33368cba5de31_prof);

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
