<?php

/* SonataAdminBundle:CRUD:show_boolean.html.twig */
class __TwigTemplate_9e4cc004ccbe9c45e85427e8db4ee1d23ecf2e9b3143c0d7e66c057a7f100262 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_boolean.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d560e7a30615e897bd7075321286e24c6bb048930664c03b467f9c847720832 = $this->env->getExtension("native_profiler");
        $__internal_7d560e7a30615e897bd7075321286e24c6bb048930664c03b467f9c847720832->enter($__internal_7d560e7a30615e897bd7075321286e24c6bb048930664c03b467f9c847720832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d560e7a30615e897bd7075321286e24c6bb048930664c03b467f9c847720832->leave($__internal_7d560e7a30615e897bd7075321286e24c6bb048930664c03b467f9c847720832_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4fb9beb893432c0025d53dc14990d5bd2366dbfce872f5a865031b211f29b181 = $this->env->getExtension("native_profiler");
        $__internal_4fb9beb893432c0025d53dc14990d5bd2366dbfce872f5a865031b211f29b181->enter($__internal_4fb9beb893432c0025d53dc14990d5bd2366dbfce872f5a865031b211f29b181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 17
            echo "        <span class=\"label label-success\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
    ";
        } else {
            // line 19
            echo "        <span class=\"label label-danger\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4fb9beb893432c0025d53dc14990d5bd2366dbfce872f5a865031b211f29b181->leave($__internal_4fb9beb893432c0025d53dc14990d5bd2366dbfce872f5a865031b211f29b181_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  45 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/* {% spaceless %}*/
/*     {% if value %}*/
/*         <span class="label label-success">{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}</span>*/
/*     {% else %}*/
/*         <span class="label label-danger">{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}</span>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
