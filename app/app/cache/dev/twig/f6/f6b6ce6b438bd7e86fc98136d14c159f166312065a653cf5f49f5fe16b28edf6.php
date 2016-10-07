<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_4a77d94050d5c83133a716de5c6cdc123ba0dfc351b6ba8cfb4fddfd82b28842 extends Twig_Template
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
        $__internal_ef08f5c4f9e865d10a480c31a829f54eab1c3d7bcd7b592246e11645b3e3bc86 = $this->env->getExtension("native_profiler");
        $__internal_ef08f5c4f9e865d10a480c31a829f54eab1c3d7bcd7b592246e11645b3e3bc86->enter($__internal_ef08f5c4f9e865d10a480c31a829f54eab1c3d7bcd7b592246e11645b3e3bc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ef08f5c4f9e865d10a480c31a829f54eab1c3d7bcd7b592246e11645b3e3bc86->leave($__internal_ef08f5c4f9e865d10a480c31a829f54eab1c3d7bcd7b592246e11645b3e3bc86_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
