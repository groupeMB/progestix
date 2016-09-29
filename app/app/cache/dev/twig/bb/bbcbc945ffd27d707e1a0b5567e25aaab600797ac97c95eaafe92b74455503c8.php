<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_0faffeae1188304408b02074a4be176c119e1938edf0f33475adcc08ac8df0bb extends Twig_Template
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
        $__internal_40be7d0edb5fba213ec5112e1ed4e7d3df827ef2eaa58e1d17228b2c285b98e0 = $this->env->getExtension("native_profiler");
        $__internal_40be7d0edb5fba213ec5112e1ed4e7d3df827ef2eaa58e1d17228b2c285b98e0->enter($__internal_40be7d0edb5fba213ec5112e1ed4e7d3df827ef2eaa58e1d17228b2c285b98e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_40be7d0edb5fba213ec5112e1ed4e7d3df827ef2eaa58e1d17228b2c285b98e0->leave($__internal_40be7d0edb5fba213ec5112e1ed4e7d3df827ef2eaa58e1d17228b2c285b98e0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
