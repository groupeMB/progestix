<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_8a1a799c12686e2e2f1c8dd80477b21195fd929ecdb6c504ae97ee3836d0a847 extends Twig_Template
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
        $__internal_83d14e1629c031de3d83b66aafaf1a4bbe51afc7dbe2257967adce56a4d6a5c4 = $this->env->getExtension("native_profiler");
        $__internal_83d14e1629c031de3d83b66aafaf1a4bbe51afc7dbe2257967adce56a4d6a5c4->enter($__internal_83d14e1629c031de3d83b66aafaf1a4bbe51afc7dbe2257967adce56a4d6a5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_83d14e1629c031de3d83b66aafaf1a4bbe51afc7dbe2257967adce56a4d6a5c4->leave($__internal_83d14e1629c031de3d83b66aafaf1a4bbe51afc7dbe2257967adce56a4d6a5c4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
