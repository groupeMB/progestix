<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_3a11e070c0a0b91874b9dc085071796c83ff02aa3faefe38cc3dccb9783ebded extends Twig_Template
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
        $__internal_566f8943bb95505e8d1f4e5f01d9182bee1c8c47da1b9893afa94c05d33ae01b = $this->env->getExtension("native_profiler");
        $__internal_566f8943bb95505e8d1f4e5f01d9182bee1c8c47da1b9893afa94c05d33ae01b->enter($__internal_566f8943bb95505e8d1f4e5f01d9182bee1c8c47da1b9893afa94c05d33ae01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_566f8943bb95505e8d1f4e5f01d9182bee1c8c47da1b9893afa94c05d33ae01b->leave($__internal_566f8943bb95505e8d1f4e5f01d9182bee1c8c47da1b9893afa94c05d33ae01b_prof);

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
