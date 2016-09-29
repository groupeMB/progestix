<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_7f7293bfbe741604f9bac04279cf7dfa9a99cb7f6fc4987106dea9b8205faa3d extends Twig_Template
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
        $__internal_3a35a4f449d8b835110c5ca9c198b8e249ec279076979f92451192d9720e2b8d = $this->env->getExtension("native_profiler");
        $__internal_3a35a4f449d8b835110c5ca9c198b8e249ec279076979f92451192d9720e2b8d->enter($__internal_3a35a4f449d8b835110c5ca9c198b8e249ec279076979f92451192d9720e2b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_3a35a4f449d8b835110c5ca9c198b8e249ec279076979f92451192d9720e2b8d->leave($__internal_3a35a4f449d8b835110c5ca9c198b8e249ec279076979f92451192d9720e2b8d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
