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
        $__internal_1588cce7cc8b204e8cfd7267c01eb2bd0246d6b9fcb33a8e7f8df370fa5b3d38 = $this->env->getExtension("native_profiler");
        $__internal_1588cce7cc8b204e8cfd7267c01eb2bd0246d6b9fcb33a8e7f8df370fa5b3d38->enter($__internal_1588cce7cc8b204e8cfd7267c01eb2bd0246d6b9fcb33a8e7f8df370fa5b3d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1588cce7cc8b204e8cfd7267c01eb2bd0246d6b9fcb33a8e7f8df370fa5b3d38->leave($__internal_1588cce7cc8b204e8cfd7267c01eb2bd0246d6b9fcb33a8e7f8df370fa5b3d38_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_eef7a9b2aae027079c70b0781e514ea105a48ad57a82b4c4ee9e7fda56348b04 = $this->env->getExtension("native_profiler");
        $__internal_eef7a9b2aae027079c70b0781e514ea105a48ad57a82b4c4ee9e7fda56348b04->enter($__internal_eef7a9b2aae027079c70b0781e514ea105a48ad57a82b4c4ee9e7fda56348b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_eef7a9b2aae027079c70b0781e514ea105a48ad57a82b4c4ee9e7fda56348b04->leave($__internal_eef7a9b2aae027079c70b0781e514ea105a48ad57a82b4c4ee9e7fda56348b04_prof);

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
