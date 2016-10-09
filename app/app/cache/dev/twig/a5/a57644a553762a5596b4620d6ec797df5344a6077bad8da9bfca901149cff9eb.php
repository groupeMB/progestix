<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_627878efaac66869f48a14f09a43294367176f6fad1cb928a1ae60adeb767246 extends Twig_Template
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
        $__internal_df892299303dd0b30e0b4c1b8d983a00f3a1839606f0abe872099ae43d18cdbc = $this->env->getExtension("native_profiler");
        $__internal_df892299303dd0b30e0b4c1b8d983a00f3a1839606f0abe872099ae43d18cdbc->enter($__internal_df892299303dd0b30e0b4c1b8d983a00f3a1839606f0abe872099ae43d18cdbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_df892299303dd0b30e0b4c1b8d983a00f3a1839606f0abe872099ae43d18cdbc->leave($__internal_df892299303dd0b30e0b4c1b8d983a00f3a1839606f0abe872099ae43d18cdbc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
