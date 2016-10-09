<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_cd32abdfb75597ba4f3871763bb7562c2086391d65784be36d925a451efbf961 extends Twig_Template
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
        $__internal_30187a8a2e43b988f2185ce0b75d8d863b0f21630a6aa334e96657ee4ed1bf26 = $this->env->getExtension("native_profiler");
        $__internal_30187a8a2e43b988f2185ce0b75d8d863b0f21630a6aa334e96657ee4ed1bf26->enter($__internal_30187a8a2e43b988f2185ce0b75d8d863b0f21630a6aa334e96657ee4ed1bf26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_30187a8a2e43b988f2185ce0b75d8d863b0f21630a6aa334e96657ee4ed1bf26->leave($__internal_30187a8a2e43b988f2185ce0b75d8d863b0f21630a6aa334e96657ee4ed1bf26_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
