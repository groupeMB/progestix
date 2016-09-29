<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_295dca16a6bdf1fd7e629de30cd9ae933d1a9d67e0974c2951384f0e0fb1d9af extends Twig_Template
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
        $__internal_9ffb0a17998b45ce2245c17c530a48c1467a093e3a6901772c73bc07d3c48ee9 = $this->env->getExtension("native_profiler");
        $__internal_9ffb0a17998b45ce2245c17c530a48c1467a093e3a6901772c73bc07d3c48ee9->enter($__internal_9ffb0a17998b45ce2245c17c530a48c1467a093e3a6901772c73bc07d3c48ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_9ffb0a17998b45ce2245c17c530a48c1467a093e3a6901772c73bc07d3c48ee9->leave($__internal_9ffb0a17998b45ce2245c17c530a48c1467a093e3a6901772c73bc07d3c48ee9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
