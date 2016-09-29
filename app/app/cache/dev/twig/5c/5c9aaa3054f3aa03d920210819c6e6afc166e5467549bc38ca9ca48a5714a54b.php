<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_706bd6b3b9001c78f5be9b07dce6ba20f1c8f5f128a0145ac1de9217e1823c2e extends Twig_Template
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
        $__internal_d26ed9fb88c073b1fb88ddd7a54e53bc2fa5d28928bcd81eaac39533e095d311 = $this->env->getExtension("native_profiler");
        $__internal_d26ed9fb88c073b1fb88ddd7a54e53bc2fa5d28928bcd81eaac39533e095d311->enter($__internal_d26ed9fb88c073b1fb88ddd7a54e53bc2fa5d28928bcd81eaac39533e095d311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_d26ed9fb88c073b1fb88ddd7a54e53bc2fa5d28928bcd81eaac39533e095d311->leave($__internal_d26ed9fb88c073b1fb88ddd7a54e53bc2fa5d28928bcd81eaac39533e095d311_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
