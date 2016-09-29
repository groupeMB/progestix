<?php

/* @SonataAdmin/CRUD/list_currency.html.twig */
class __TwigTemplate_aa2d82c578beb827ef05c764e71f02d7868e4265e13887729122572e60eb524a extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b0ec4150679033da63d095f74674ec7cc74d8cf67157ce7dc6dddacd7549f9b = $this->env->getExtension("native_profiler");
        $__internal_6b0ec4150679033da63d095f74674ec7cc74d8cf67157ce7dc6dddacd7549f9b->enter($__internal_6b0ec4150679033da63d095f74674ec7cc74d8cf67157ce7dc6dddacd7549f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b0ec4150679033da63d095f74674ec7cc74d8cf67157ce7dc6dddacd7549f9b->leave($__internal_6b0ec4150679033da63d095f74674ec7cc74d8cf67157ce7dc6dddacd7549f9b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ce173c18b68536f52ad38c5a34927e0077db7a65377bc08c952a273a909fd32a = $this->env->getExtension("native_profiler");
        $__internal_ce173c18b68536f52ad38c5a34927e0077db7a65377bc08c952a273a909fd32a->enter($__internal_ce173c18b68536f52ad38c5a34927e0077db7a65377bc08c952a273a909fd32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_ce173c18b68536f52ad38c5a34927e0077db7a65377bc08c952a273a909fd32a->leave($__internal_ce173c18b68536f52ad38c5a34927e0077db7a65377bc08c952a273a909fd32a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_currency.html.twig";
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
