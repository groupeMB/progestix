<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_fbd143f7fc287dae6a0517cec8980dfd3a8343938ba5bbfca702dd81d060c520 extends Twig_Template
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
        $__internal_2fa7db585f704ed0d3977a0e1673840f020a2eeb6974c2c3f043714eae15eb1a = $this->env->getExtension("native_profiler");
        $__internal_2fa7db585f704ed0d3977a0e1673840f020a2eeb6974c2c3f043714eae15eb1a->enter($__internal_2fa7db585f704ed0d3977a0e1673840f020a2eeb6974c2c3f043714eae15eb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_2fa7db585f704ed0d3977a0e1673840f020a2eeb6974c2c3f043714eae15eb1a->leave($__internal_2fa7db585f704ed0d3977a0e1673840f020a2eeb6974c2c3f043714eae15eb1a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
