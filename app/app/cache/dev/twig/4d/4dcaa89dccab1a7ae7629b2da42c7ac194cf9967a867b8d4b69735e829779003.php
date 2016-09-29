<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_fdfbc32d09dfa928fe945434a9bf334fe1a51dd354bc8f6fd6e44313e4337b9c extends Twig_Template
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
        $__internal_27b58fe138aee66c5c77876e17b67ed8c0a026da9ebfe571d3c577bf0600da1e = $this->env->getExtension("native_profiler");
        $__internal_27b58fe138aee66c5c77876e17b67ed8c0a026da9ebfe571d3c577bf0600da1e->enter($__internal_27b58fe138aee66c5c77876e17b67ed8c0a026da9ebfe571d3c577bf0600da1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_27b58fe138aee66c5c77876e17b67ed8c0a026da9ebfe571d3c577bf0600da1e->leave($__internal_27b58fe138aee66c5c77876e17b67ed8c0a026da9ebfe571d3c577bf0600da1e_prof);

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
