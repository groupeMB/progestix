<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_425b31266058e5e1b55848770f8574da9f3a48c3a37c894f5d6e90f369e2ccf9 extends Twig_Template
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
        $__internal_2c0012f3770fa132639fa49989b6a3f8cea64a797cd6a8694d510a559c0f86ee = $this->env->getExtension("native_profiler");
        $__internal_2c0012f3770fa132639fa49989b6a3f8cea64a797cd6a8694d510a559c0f86ee->enter($__internal_2c0012f3770fa132639fa49989b6a3f8cea64a797cd6a8694d510a559c0f86ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2c0012f3770fa132639fa49989b6a3f8cea64a797cd6a8694d510a559c0f86ee->leave($__internal_2c0012f3770fa132639fa49989b6a3f8cea64a797cd6a8694d510a559c0f86ee_prof);

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
