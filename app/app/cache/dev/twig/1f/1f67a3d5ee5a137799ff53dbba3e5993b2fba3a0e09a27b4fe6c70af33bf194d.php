<?php

/* SonataAdminBundle:Button:show_button.html.twig */
class __TwigTemplate_e84255303605e61390f82674f3b59a6b5faccb2191c12aea3920bfcceb621574 extends Twig_Template
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
        $__internal_9c04c3011fc967af9b9f92d2bffd5817afb495efd107bf27535030b2c2c6ccb7 = $this->env->getExtension("native_profiler");
        $__internal_9c04c3011fc967af9b9f92d2bffd5817afb495efd107bf27535030b2c2c6ccb7->enter($__internal_9c04c3011fc967af9b9f92d2bffd5817afb495efd107bf27535030b2c2c6ccb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:show_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "show"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "VIEW", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "show", array())) > 0))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "show", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-eye\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_9c04c3011fc967af9b9f92d2bffd5817afb495efd107bf27535030b2c2c6ccb7->leave($__internal_9c04c3011fc967af9b9f92d2bffd5817afb495efd107bf27535030b2c2c6ccb7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:show_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 15,  27 => 13,  25 => 12,  22 => 11,);
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
/* {% if admin.hasroute('show') and admin.id(object) and admin.isGranted('VIEW', object) and admin.show|length > 0 %}*/
/*     <a class="sonata-action-element" href="{{ admin.generateObjectUrl('show', object) }}">*/
/*         <i class="fa fa-eye"></i>*/
/*         {{ 'link_action_show'|trans({}, 'SonataAdminBundle') }}</a>*/
/* {% endif %}*/
/* */
