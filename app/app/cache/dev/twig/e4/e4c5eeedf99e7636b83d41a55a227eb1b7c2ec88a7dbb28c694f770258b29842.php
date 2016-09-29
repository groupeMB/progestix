<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_e63666d020060184a5cb1f81ed586f1728c1a8bc102db17f1ecba3c5c5e44e3a extends Twig_Template
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
        $__internal_0cfa1d46a867dde0638763577e63c8baa0658b828268474608916391c1d9b052 = $this->env->getExtension("native_profiler");
        $__internal_0cfa1d46a867dde0638763577e63c8baa0658b828268474608916391c1d9b052->enter($__internal_0cfa1d46a867dde0638763577e63c8baa0658b828268474608916391c1d9b052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_0cfa1d46a867dde0638763577e63c8baa0658b828268474608916391c1d9b052->leave($__internal_0cfa1d46a867dde0638763577e63c8baa0658b828268474608916391c1d9b052_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
