<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_4c5d45f71a186d0aaf2db1ef461127747a74c510e8317e27c92d2add4bd42f15 extends Twig_Template
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
        $__internal_7af8265c44bc6c0b0d16dcad12ef71108323939f2d97f8cd04156eaab8db11ee = $this->env->getExtension("native_profiler");
        $__internal_7af8265c44bc6c0b0d16dcad12ef71108323939f2d97f8cd04156eaab8db11ee->enter($__internal_7af8265c44bc6c0b0d16dcad12ef71108323939f2d97f8cd04156eaab8db11ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_7af8265c44bc6c0b0d16dcad12ef71108323939f2d97f8cd04156eaab8db11ee->leave($__internal_7af8265c44bc6c0b0d16dcad12ef71108323939f2d97f8cd04156eaab8db11ee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
