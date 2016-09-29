<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_36dc9822b0897c8254a87f665d29496b26332b12b59e8f5dfcec909be8759fa0 extends Twig_Template
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
        $__internal_7c199b09093c289209721d5dbc7c623c60725f733790e25fd030ca258ad97102 = $this->env->getExtension("native_profiler");
        $__internal_7c199b09093c289209721d5dbc7c623c60725f733790e25fd030ca258ad97102->enter($__internal_7c199b09093c289209721d5dbc7c623c60725f733790e25fd030ca258ad97102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_7c199b09093c289209721d5dbc7c623c60725f733790e25fd030ca258ad97102->leave($__internal_7c199b09093c289209721d5dbc7c623c60725f733790e25fd030ca258ad97102_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
