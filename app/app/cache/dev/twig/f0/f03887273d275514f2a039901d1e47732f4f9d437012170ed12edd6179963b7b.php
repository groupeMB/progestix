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
        $__internal_887fe52db48b0eac6b575c10787153bc1e0c15ecf9c93d6c95a6a3c0cae1347d = $this->env->getExtension("native_profiler");
        $__internal_887fe52db48b0eac6b575c10787153bc1e0c15ecf9c93d6c95a6a3c0cae1347d->enter($__internal_887fe52db48b0eac6b575c10787153bc1e0c15ecf9c93d6c95a6a3c0cae1347d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_887fe52db48b0eac6b575c10787153bc1e0c15ecf9c93d6c95a6a3c0cae1347d->leave($__internal_887fe52db48b0eac6b575c10787153bc1e0c15ecf9c93d6c95a6a3c0cae1347d_prof);

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
