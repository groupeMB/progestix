<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_f4104a613a5a141a83ae6aca941b8382147604cbbdc0adec37c85c6599997e28 extends Twig_Template
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
        $__internal_4a2c9fb57c4d58413f79a3c3ee804ee567b067a7df54015f02db7865ee43a33e = $this->env->getExtension("native_profiler");
        $__internal_4a2c9fb57c4d58413f79a3c3ee804ee567b067a7df54015f02db7865ee43a33e->enter($__internal_4a2c9fb57c4d58413f79a3c3ee804ee567b067a7df54015f02db7865ee43a33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_4a2c9fb57c4d58413f79a3c3ee804ee567b067a7df54015f02db7865ee43a33e->leave($__internal_4a2c9fb57c4d58413f79a3c3ee804ee567b067a7df54015f02db7865ee43a33e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
