<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_fdb95c3bd7917852354b594b1fe28fc9d48593f36a2b244fe41332ec99d721d1 extends Twig_Template
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
        $__internal_7be7e974f3bc0c5d613aaed8a8840e48022cb953dd2d8aa12333453364309a8f = $this->env->getExtension("native_profiler");
        $__internal_7be7e974f3bc0c5d613aaed8a8840e48022cb953dd2d8aa12333453364309a8f->enter($__internal_7be7e974f3bc0c5d613aaed8a8840e48022cb953dd2d8aa12333453364309a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_7be7e974f3bc0c5d613aaed8a8840e48022cb953dd2d8aa12333453364309a8f->leave($__internal_7be7e974f3bc0c5d613aaed8a8840e48022cb953dd2d8aa12333453364309a8f_prof);

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
