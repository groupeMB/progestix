<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_bb0d4045d1d53008a7d2e415c597487d18ffc5b1c3df162664512924d13aeeed extends Twig_Template
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
        $__internal_08da4ceb5ef681ff2aacbcb2e905c5ea62b92c2e799fd773b5246b591eaa7a52 = $this->env->getExtension("native_profiler");
        $__internal_08da4ceb5ef681ff2aacbcb2e905c5ea62b92c2e799fd773b5246b591eaa7a52->enter($__internal_08da4ceb5ef681ff2aacbcb2e905c5ea62b92c2e799fd773b5246b591eaa7a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_08da4ceb5ef681ff2aacbcb2e905c5ea62b92c2e799fd773b5246b591eaa7a52->leave($__internal_08da4ceb5ef681ff2aacbcb2e905c5ea62b92c2e799fd773b5246b591eaa7a52_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
