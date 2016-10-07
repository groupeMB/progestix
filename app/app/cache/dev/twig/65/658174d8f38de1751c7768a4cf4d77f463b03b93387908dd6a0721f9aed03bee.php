<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_c3ecfe883938a0392a335fe0dc770d1ef27021eea9b6c810ad2a92af43e00a3e extends Twig_Template
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
        $__internal_b639babdac72b801414a324f4bd1db36359a04e281e665ca87f9289979dd195d = $this->env->getExtension("native_profiler");
        $__internal_b639babdac72b801414a324f4bd1db36359a04e281e665ca87f9289979dd195d->enter($__internal_b639babdac72b801414a324f4bd1db36359a04e281e665ca87f9289979dd195d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b639babdac72b801414a324f4bd1db36359a04e281e665ca87f9289979dd195d->leave($__internal_b639babdac72b801414a324f4bd1db36359a04e281e665ca87f9289979dd195d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
