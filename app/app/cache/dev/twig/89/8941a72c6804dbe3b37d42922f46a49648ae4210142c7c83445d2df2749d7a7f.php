<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_faaad5552444109ace79ba7f00bbfb84045f8b691087bc87ed188c9232eb1c38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f910dc3ae981e3357bec624beccdcda5bc7ee60fa59fcf8631d7c1c85ea505bd = $this->env->getExtension("native_profiler");
        $__internal_f910dc3ae981e3357bec624beccdcda5bc7ee60fa59fcf8631d7c1c85ea505bd->enter($__internal_f910dc3ae981e3357bec624beccdcda5bc7ee60fa59fcf8631d7c1c85ea505bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f910dc3ae981e3357bec624beccdcda5bc7ee60fa59fcf8631d7c1c85ea505bd->leave($__internal_f910dc3ae981e3357bec624beccdcda5bc7ee60fa59fcf8631d7c1c85ea505bd_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_142db9ab16f0af1b7c05305e4e8c06bb65f22bca263361ff5c2e12ca41f7b6cf = $this->env->getExtension("native_profiler");
        $__internal_142db9ab16f0af1b7c05305e4e8c06bb65f22bca263361ff5c2e12ca41f7b6cf->enter($__internal_142db9ab16f0af1b7c05305e4e8c06bb65f22bca263361ff5c2e12ca41f7b6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_142db9ab16f0af1b7c05305e4e8c06bb65f22bca263361ff5c2e12ca41f7b6cf->leave($__internal_142db9ab16f0af1b7c05305e4e8c06bb65f22bca263361ff5c2e12ca41f7b6cf_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
