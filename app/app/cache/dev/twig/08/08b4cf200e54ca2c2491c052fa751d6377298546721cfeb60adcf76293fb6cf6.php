<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_80a255d18f794b43bd0f62861bb759a743a4930e50fadde7fd07ba1e7c7b9842 extends Twig_Template
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
        $__internal_35f37864312ab75d09d70f75c199b17b9dce2063d15adc1c7e0eded34677356b = $this->env->getExtension("native_profiler");
        $__internal_35f37864312ab75d09d70f75c199b17b9dce2063d15adc1c7e0eded34677356b->enter($__internal_35f37864312ab75d09d70f75c199b17b9dce2063d15adc1c7e0eded34677356b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_35f37864312ab75d09d70f75c199b17b9dce2063d15adc1c7e0eded34677356b->leave($__internal_35f37864312ab75d09d70f75c199b17b9dce2063d15adc1c7e0eded34677356b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
