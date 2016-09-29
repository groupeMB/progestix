<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_da7bca0fda3e9a13e523a92775c4f5a3285970fd86fbe26433fea6bb60f65d1a extends Twig_Template
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
        $__internal_31794d846398c1d0cacc43fb83a884bdbf7241cad87605f4aedb1ef6307464e0 = $this->env->getExtension("native_profiler");
        $__internal_31794d846398c1d0cacc43fb83a884bdbf7241cad87605f4aedb1ef6307464e0->enter($__internal_31794d846398c1d0cacc43fb83a884bdbf7241cad87605f4aedb1ef6307464e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_31794d846398c1d0cacc43fb83a884bdbf7241cad87605f4aedb1ef6307464e0->leave($__internal_31794d846398c1d0cacc43fb83a884bdbf7241cad87605f4aedb1ef6307464e0_prof);

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
