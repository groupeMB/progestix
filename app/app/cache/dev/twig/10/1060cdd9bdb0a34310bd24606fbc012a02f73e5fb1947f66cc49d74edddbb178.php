<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_2df51695041afb39f7d1e8af34a93acbc2c56b1b03772ebd1bf9836a9b9a80a8 extends Twig_Template
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
        $__internal_8c016db0158f36f63d2cc06d5bc924273ff7ad021cf1fd2e695a44b55c939399 = $this->env->getExtension("native_profiler");
        $__internal_8c016db0158f36f63d2cc06d5bc924273ff7ad021cf1fd2e695a44b55c939399->enter($__internal_8c016db0158f36f63d2cc06d5bc924273ff7ad021cf1fd2e695a44b55c939399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_8c016db0158f36f63d2cc06d5bc924273ff7ad021cf1fd2e695a44b55c939399->leave($__internal_8c016db0158f36f63d2cc06d5bc924273ff7ad021cf1fd2e695a44b55c939399_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
