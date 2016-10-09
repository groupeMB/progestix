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
        $__internal_94bfa0e3b081d2b2693554906a12cb92dfe7e51ed3fed2b7f8557ec90c83a029 = $this->env->getExtension("native_profiler");
        $__internal_94bfa0e3b081d2b2693554906a12cb92dfe7e51ed3fed2b7f8557ec90c83a029->enter($__internal_94bfa0e3b081d2b2693554906a12cb92dfe7e51ed3fed2b7f8557ec90c83a029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_94bfa0e3b081d2b2693554906a12cb92dfe7e51ed3fed2b7f8557ec90c83a029->leave($__internal_94bfa0e3b081d2b2693554906a12cb92dfe7e51ed3fed2b7f8557ec90c83a029_prof);

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
