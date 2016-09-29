<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_bc1213b9fd9c65682d53db9efa39c342c772475a87fce812880e9a8a907b7375 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50764ce4244864cf656849532cd36b3ed4adaf825d6c41aa289c03bee14a1da8 = $this->env->getExtension("native_profiler");
        $__internal_50764ce4244864cf656849532cd36b3ed4adaf825d6c41aa289c03bee14a1da8->enter($__internal_50764ce4244864cf656849532cd36b3ed4adaf825d6c41aa289c03bee14a1da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50764ce4244864cf656849532cd36b3ed4adaf825d6c41aa289c03bee14a1da8->leave($__internal_50764ce4244864cf656849532cd36b3ed4adaf825d6c41aa289c03bee14a1da8_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_cdd5981a76feee427b7deac6ff811da6a23fa3797aa829ec8118247f54f69c30 = $this->env->getExtension("native_profiler");
        $__internal_cdd5981a76feee427b7deac6ff811da6a23fa3797aa829ec8118247f54f69c30->enter($__internal_cdd5981a76feee427b7deac6ff811da6a23fa3797aa829ec8118247f54f69c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_cdd5981a76feee427b7deac6ff811da6a23fa3797aa829ec8118247f54f69c30->leave($__internal_cdd5981a76feee427b7deac6ff811da6a23fa3797aa829ec8118247f54f69c30_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
