<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_0f36bb35c78e2356906512c004b00e9b280a8615d6455e79672da3c63a7e53c0 extends Twig_Template
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
        $__internal_5cc7ef9e533a5cdc0aed9356b954b6484e3abfab97fd14093f986bb9201bf184 = $this->env->getExtension("native_profiler");
        $__internal_5cc7ef9e533a5cdc0aed9356b954b6484e3abfab97fd14093f986bb9201bf184->enter($__internal_5cc7ef9e533a5cdc0aed9356b954b6484e3abfab97fd14093f986bb9201bf184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_5cc7ef9e533a5cdc0aed9356b954b6484e3abfab97fd14093f986bb9201bf184->leave($__internal_5cc7ef9e533a5cdc0aed9356b954b6484e3abfab97fd14093f986bb9201bf184_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
