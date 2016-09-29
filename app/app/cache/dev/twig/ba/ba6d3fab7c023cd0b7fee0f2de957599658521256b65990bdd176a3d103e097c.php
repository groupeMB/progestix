<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_5af6d1e3850b81fa7b4554e91a5e8d6c54b9435d5d681cc2250d0086734eb7ed extends Twig_Template
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
        $__internal_c6776a12159e4789735c63c021b3402ff972a3d6e17817c41883ef774a28ba23 = $this->env->getExtension("native_profiler");
        $__internal_c6776a12159e4789735c63c021b3402ff972a3d6e17817c41883ef774a28ba23->enter($__internal_c6776a12159e4789735c63c021b3402ff972a3d6e17817c41883ef774a28ba23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_c6776a12159e4789735c63c021b3402ff972a3d6e17817c41883ef774a28ba23->leave($__internal_c6776a12159e4789735c63c021b3402ff972a3d6e17817c41883ef774a28ba23_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
