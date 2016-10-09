<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_619c7d8d6b51876c26dd975db08837a55bb91b148a6d98af64dbbeae519bacce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b52b1635c819df53b7993bc09abdaea8472d8bacef36f30f2aff462c97dddb90 = $this->env->getExtension("native_profiler");
        $__internal_b52b1635c819df53b7993bc09abdaea8472d8bacef36f30f2aff462c97dddb90->enter($__internal_b52b1635c819df53b7993bc09abdaea8472d8bacef36f30f2aff462c97dddb90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b52b1635c819df53b7993bc09abdaea8472d8bacef36f30f2aff462c97dddb90->leave($__internal_b52b1635c819df53b7993bc09abdaea8472d8bacef36f30f2aff462c97dddb90_prof);

    }

    // line 14
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_3859677c050a7a05c9bba830daf3caeb7e6a3345270da9698fd86bce5c0f1fde = $this->env->getExtension("native_profiler");
        $__internal_3859677c050a7a05c9bba830daf3caeb7e6a3345270da9698fd86bce5c0f1fde->enter($__internal_3859677c050a7a05c9bba830daf3caeb7e6a3345270da9698fd86bce5c0f1fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "html", null, true);
        echo "
";
        
        $__internal_3859677c050a7a05c9bba830daf3caeb7e6a3345270da9698fd86bce5c0f1fde->leave($__internal_3859677c050a7a05c9bba830daf3caeb7e6a3345270da9698fd86bce5c0f1fde_prof);

    }

    // line 18
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_4e45dbacd6832c4c789b6d602427a23dbd2059ebe7823573abe6eb2666a05abc = $this->env->getExtension("native_profiler");
        $__internal_4e45dbacd6832c4c789b6d602427a23dbd2059ebe7823573abe6eb2666a05abc->enter($__internal_4e45dbacd6832c4c789b6d602427a23dbd2059ebe7823573abe6eb2666a05abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 19
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 20
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 21
            echo "            ";
            echo $this->env->getExtension('sonata_admin')->renderViewElementCompare($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["object_compare"]) ? $context["object_compare"] : $this->getContext($context, "object_compare")));
            echo "
        ";
        }
        // line 23
        echo "    </tr>
";
        
        $__internal_4e45dbacd6832c4c789b6d602427a23dbd2059ebe7823573abe6eb2666a05abc->leave($__internal_4e45dbacd6832c4c789b6d602427a23dbd2059ebe7823573abe6eb2666a05abc_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  62 => 21,  60 => 20,  57 => 19,  51 => 18,  41 => 15,  35 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */
/* {% block show_title %}*/
/*     {{ admin.trans(name) }}*/
/* {% endblock %}*/
/* */
/* {% block show_field %}*/
/*     <tr class="sonata-ba-view-container history-audit-compare">*/
/*         {% if elements[field_name] is defined %}*/
/*             {{ elements[field_name]|render_view_element_compare(object, object_compare) }}*/
/*         {% endif %}*/
/*     </tr>*/
/* {% endblock %}*/
/* */
