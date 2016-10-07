<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_13abbf54a2816059779a1f830ac6a874d442ec848b4b10fedb640319849e19da extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7d920e1f9681380d49d8629356d47b0d3877399f0fc8c41ca4d56774d4355c4 = $this->env->getExtension("native_profiler");
        $__internal_e7d920e1f9681380d49d8629356d47b0d3877399f0fc8c41ca4d56774d4355c4->enter($__internal_e7d920e1f9681380d49d8629356d47b0d3877399f0fc8c41ca4d56774d4355c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7d920e1f9681380d49d8629356d47b0d3877399f0fc8c41ca4d56774d4355c4->leave($__internal_e7d920e1f9681380d49d8629356d47b0d3877399f0fc8c41ca4d56774d4355c4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_86814d26449aa681394b3035cdf7f29ee63eb9ad4ad6b707183d281fc2713e03 = $this->env->getExtension("native_profiler");
        $__internal_86814d26449aa681394b3035cdf7f29ee63eb9ad4ad6b707183d281fc2713e03->enter($__internal_86814d26449aa681394b3035cdf7f29ee63eb9ad4ad6b707183d281fc2713e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_86814d26449aa681394b3035cdf7f29ee63eb9ad4ad6b707183d281fc2713e03->leave($__internal_86814d26449aa681394b3035cdf7f29ee63eb9ad4ad6b707183d281fc2713e03_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/*     <input type="checkbox" name="idx[]" value="{{ admin.id(object) }}">*/
/* {% endblock %}*/
/* */
