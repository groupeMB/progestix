<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_fc0d0d63244a8417686be33143de7e1adbc6553532d98e25306dc4d0518dadbb extends Twig_Template
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
        $__internal_d8c0e98749fdf58a4d4172cac79eb59bd1eff2c3a974fea947439a2e1d6dcc45 = $this->env->getExtension("native_profiler");
        $__internal_d8c0e98749fdf58a4d4172cac79eb59bd1eff2c3a974fea947439a2e1d6dcc45->enter($__internal_d8c0e98749fdf58a4d4172cac79eb59bd1eff2c3a974fea947439a2e1d6dcc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d8c0e98749fdf58a4d4172cac79eb59bd1eff2c3a974fea947439a2e1d6dcc45->leave($__internal_d8c0e98749fdf58a4d4172cac79eb59bd1eff2c3a974fea947439a2e1d6dcc45_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
