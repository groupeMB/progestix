<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9e374a3125e1eb7e4bfe92f9ad97602d2cf72e95de238543716a5b63849d6a79 extends Twig_Template
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
        $__internal_f7188ff97d4dd1b32d9cddc868def6c4b9a5707b9570d0543d33c55e3352813c = $this->env->getExtension("native_profiler");
        $__internal_f7188ff97d4dd1b32d9cddc868def6c4b9a5707b9570d0543d33c55e3352813c->enter($__internal_f7188ff97d4dd1b32d9cddc868def6c4b9a5707b9570d0543d33c55e3352813c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f7188ff97d4dd1b32d9cddc868def6c4b9a5707b9570d0543d33c55e3352813c->leave($__internal_f7188ff97d4dd1b32d9cddc868def6c4b9a5707b9570d0543d33c55e3352813c_prof);

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
