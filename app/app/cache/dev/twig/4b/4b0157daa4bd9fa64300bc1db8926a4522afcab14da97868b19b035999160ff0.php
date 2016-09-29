<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_629f84a6745550cd4698fbf6677c53f4f1d148a2eb96bf1503491a85552ec08f extends Twig_Template
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
        $__internal_222a33284fb390183feac8a958c70bcff8b0cc7f2a9947e9f17f491e80468735 = $this->env->getExtension("native_profiler");
        $__internal_222a33284fb390183feac8a958c70bcff8b0cc7f2a9947e9f17f491e80468735->enter($__internal_222a33284fb390183feac8a958c70bcff8b0cc7f2a9947e9f17f491e80468735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_222a33284fb390183feac8a958c70bcff8b0cc7f2a9947e9f17f491e80468735->leave($__internal_222a33284fb390183feac8a958c70bcff8b0cc7f2a9947e9f17f491e80468735_prof);

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
