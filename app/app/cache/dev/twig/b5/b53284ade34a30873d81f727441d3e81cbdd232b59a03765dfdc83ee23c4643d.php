<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_bb0d4045d1d53008a7d2e415c597487d18ffc5b1c3df162664512924d13aeeed extends Twig_Template
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
        $__internal_4cc4631080d5ea3bf95d6adcf42e513e57f9e09c6c375d52eec223ca52bb1009 = $this->env->getExtension("native_profiler");
        $__internal_4cc4631080d5ea3bf95d6adcf42e513e57f9e09c6c375d52eec223ca52bb1009->enter($__internal_4cc4631080d5ea3bf95d6adcf42e513e57f9e09c6c375d52eec223ca52bb1009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_4cc4631080d5ea3bf95d6adcf42e513e57f9e09c6c375d52eec223ca52bb1009->leave($__internal_4cc4631080d5ea3bf95d6adcf42e513e57f9e09c6c375d52eec223ca52bb1009_prof);

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
