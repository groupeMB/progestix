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
        $__internal_993f2231a29b049ac667b26e296522663700918b8d8fa68a69b6c27f9f30ba42 = $this->env->getExtension("native_profiler");
        $__internal_993f2231a29b049ac667b26e296522663700918b8d8fa68a69b6c27f9f30ba42->enter($__internal_993f2231a29b049ac667b26e296522663700918b8d8fa68a69b6c27f9f30ba42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_993f2231a29b049ac667b26e296522663700918b8d8fa68a69b6c27f9f30ba42->leave($__internal_993f2231a29b049ac667b26e296522663700918b8d8fa68a69b6c27f9f30ba42_prof);

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
