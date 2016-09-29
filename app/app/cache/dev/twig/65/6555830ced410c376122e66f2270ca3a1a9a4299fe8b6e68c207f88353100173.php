<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_9f2e1dfcba433e116a852b9d7991f959219df9bfdb3a499ab049f0b5fe1cfad8 extends Twig_Template
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
        $__internal_5037b8681ac26a4a50d22fa8e51c9ea9984a9ae98c8741601bfd2da443ccbcda = $this->env->getExtension("native_profiler");
        $__internal_5037b8681ac26a4a50d22fa8e51c9ea9984a9ae98c8741601bfd2da443ccbcda->enter($__internal_5037b8681ac26a4a50d22fa8e51c9ea9984a9ae98c8741601bfd2da443ccbcda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_5037b8681ac26a4a50d22fa8e51c9ea9984a9ae98c8741601bfd2da443ccbcda->leave($__internal_5037b8681ac26a4a50d22fa8e51c9ea9984a9ae98c8741601bfd2da443ccbcda_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
