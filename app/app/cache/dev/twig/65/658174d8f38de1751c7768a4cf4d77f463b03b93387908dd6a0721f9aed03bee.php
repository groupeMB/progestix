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
        $__internal_2fe5471b82df1df6f910603619a518124ca15d38eec65a4f5d8ed32fd2169dcd = $this->env->getExtension("native_profiler");
        $__internal_2fe5471b82df1df6f910603619a518124ca15d38eec65a4f5d8ed32fd2169dcd->enter($__internal_2fe5471b82df1df6f910603619a518124ca15d38eec65a4f5d8ed32fd2169dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_2fe5471b82df1df6f910603619a518124ca15d38eec65a4f5d8ed32fd2169dcd->leave($__internal_2fe5471b82df1df6f910603619a518124ca15d38eec65a4f5d8ed32fd2169dcd_prof);

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
