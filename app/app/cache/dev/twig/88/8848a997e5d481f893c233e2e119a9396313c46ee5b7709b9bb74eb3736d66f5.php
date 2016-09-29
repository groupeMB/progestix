<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_a38fd45d5f10b2a6e7ad11c94b9f45efe56d7adca5d7346c2ca621451d8482fc extends Twig_Template
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
        $__internal_84217f8d9b7b6b7049d7f426c0eea3c3a12116ed7e9644377d7e2abe6e77a174 = $this->env->getExtension("native_profiler");
        $__internal_84217f8d9b7b6b7049d7f426c0eea3c3a12116ed7e9644377d7e2abe6e77a174->enter($__internal_84217f8d9b7b6b7049d7f426c0eea3c3a12116ed7e9644377d7e2abe6e77a174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84217f8d9b7b6b7049d7f426c0eea3c3a12116ed7e9644377d7e2abe6e77a174->leave($__internal_84217f8d9b7b6b7049d7f426c0eea3c3a12116ed7e9644377d7e2abe6e77a174_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7651bc608f3938d2c94632be2fd6471bb17de14bd7abc62c3ba7e1aab09d5390 = $this->env->getExtension("native_profiler");
        $__internal_7651bc608f3938d2c94632be2fd6471bb17de14bd7abc62c3ba7e1aab09d5390->enter($__internal_7651bc608f3938d2c94632be2fd6471bb17de14bd7abc62c3ba7e1aab09d5390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_7651bc608f3938d2c94632be2fd6471bb17de14bd7abc62c3ba7e1aab09d5390->leave($__internal_7651bc608f3938d2c94632be2fd6471bb17de14bd7abc62c3ba7e1aab09d5390_prof);

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
