<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7b645e8b38323d868634d66e507a44128689b4b2576c22405b1fad3d48d40431 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0abd0242c061de7035e7d57e7be1e855d166a4ce8d62727747d93ace7a0ce7de = $this->env->getExtension("native_profiler");
        $__internal_0abd0242c061de7035e7d57e7be1e855d166a4ce8d62727747d93ace7a0ce7de->enter($__internal_0abd0242c061de7035e7d57e7be1e855d166a4ce8d62727747d93ace7a0ce7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0abd0242c061de7035e7d57e7be1e855d166a4ce8d62727747d93ace7a0ce7de->leave($__internal_0abd0242c061de7035e7d57e7be1e855d166a4ce8d62727747d93ace7a0ce7de_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_86e660f6de914bbc27fa95fa4ea26b6acb04ae76f6fee21fe3e36e4db715164a = $this->env->getExtension("native_profiler");
        $__internal_86e660f6de914bbc27fa95fa4ea26b6acb04ae76f6fee21fe3e36e4db715164a->enter($__internal_86e660f6de914bbc27fa95fa4ea26b6acb04ae76f6fee21fe3e36e4db715164a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_86e660f6de914bbc27fa95fa4ea26b6acb04ae76f6fee21fe3e36e4db715164a->leave($__internal_86e660f6de914bbc27fa95fa4ea26b6acb04ae76f6fee21fe3e36e4db715164a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_49fbbbbbdd201ab9dc1749524b50a6edfb1a4c7d8e6682f7486b70bfb353cfb6 = $this->env->getExtension("native_profiler");
        $__internal_49fbbbbbdd201ab9dc1749524b50a6edfb1a4c7d8e6682f7486b70bfb353cfb6->enter($__internal_49fbbbbbdd201ab9dc1749524b50a6edfb1a4c7d8e6682f7486b70bfb353cfb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_49fbbbbbdd201ab9dc1749524b50a6edfb1a4c7d8e6682f7486b70bfb353cfb6->leave($__internal_49fbbbbbdd201ab9dc1749524b50a6edfb1a4c7d8e6682f7486b70bfb353cfb6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_37b1eef4a68595c4cf9a257cc3cab8a767eadf018edff14f70b75ca19721f2b7 = $this->env->getExtension("native_profiler");
        $__internal_37b1eef4a68595c4cf9a257cc3cab8a767eadf018edff14f70b75ca19721f2b7->enter($__internal_37b1eef4a68595c4cf9a257cc3cab8a767eadf018edff14f70b75ca19721f2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_37b1eef4a68595c4cf9a257cc3cab8a767eadf018edff14f70b75ca19721f2b7->leave($__internal_37b1eef4a68595c4cf9a257cc3cab8a767eadf018edff14f70b75ca19721f2b7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
