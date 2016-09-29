<?php

/* @SonataAdmin/CRUD/base_edit.html.twig */
class __TwigTemplate_a4555366f524556dcdb7c901287820f2b81f63434ef8f3c081c6fc25e88f887d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b14c501ca4ca42b650821697638c931bde46912d9986cba4284af7020fb0e29d = $this->env->getExtension("native_profiler");
        $__internal_b14c501ca4ca42b650821697638c931bde46912d9986cba4284af7020fb0e29d->enter($__internal_b14c501ca4ca42b650821697638c931bde46912d9986cba4284af7020fb0e29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b14c501ca4ca42b650821697638c931bde46912d9986cba4284af7020fb0e29d->leave($__internal_b14c501ca4ca42b650821697638c931bde46912d9986cba4284af7020fb0e29d_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_828de9886cc79fccbeed320507796b95b593d8c99fa0152c105b89436a7bfaa9 = $this->env->getExtension("native_profiler");
        $__internal_828de9886cc79fccbeed320507796b95b593d8c99fa0152c105b89436a7bfaa9->enter($__internal_828de9886cc79fccbeed320507796b95b593d8c99fa0152c105b89436a7bfaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_828de9886cc79fccbeed320507796b95b593d8c99fa0152c105b89436a7bfaa9->leave($__internal_828de9886cc79fccbeed320507796b95b593d8c99fa0152c105b89436a7bfaa9_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_f14e997a584b13d9824753742dce16be0e453cf0a6a4fc567b071dc42fdeabdd = $this->env->getExtension("native_profiler");
        $__internal_f14e997a584b13d9824753742dce16be0e453cf0a6a4fc567b071dc42fdeabdd->enter($__internal_f14e997a584b13d9824753742dce16be0e453cf0a6a4fc567b071dc42fdeabdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f14e997a584b13d9824753742dce16be0e453cf0a6a4fc567b071dc42fdeabdd->leave($__internal_f14e997a584b13d9824753742dce16be0e453cf0a6a4fc567b071dc42fdeabdd_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_7958c09576e0c62a659405965bfefcce97852da9228920b4ade13c56f2e43fca = $this->env->getExtension("native_profiler");
        $__internal_7958c09576e0c62a659405965bfefcce97852da9228920b4ade13c56f2e43fca->enter($__internal_7958c09576e0c62a659405965bfefcce97852da9228920b4ade13c56f2e43fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 27)->display($context);
        
        $__internal_7958c09576e0c62a659405965bfefcce97852da9228920b4ade13c56f2e43fca->leave($__internal_7958c09576e0c62a659405965bfefcce97852da9228920b4ade13c56f2e43fca_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_8dbef44c1ec6b5426022adce8328e8f17a9af756783cda55d517bdde178800c8 = $this->env->getExtension("native_profiler");
        $__internal_8dbef44c1ec6b5426022adce8328e8f17a9af756783cda55d517bdde178800c8->enter($__internal_8dbef44c1ec6b5426022adce8328e8f17a9af756783cda55d517bdde178800c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_8dbef44c1ec6b5426022adce8328e8f17a9af756783cda55d517bdde178800c8->leave($__internal_8dbef44c1ec6b5426022adce8328e8f17a9af756783cda55d517bdde178800c8_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_6457c76a9198befb36a4ee834353694b7076d31dbd5c2451c8faac5a20f0ecbb = $this->env->getExtension("native_profiler");
        $__internal_6457c76a9198befb36a4ee834353694b7076d31dbd5c2451c8faac5a20f0ecbb->enter($__internal_6457c76a9198befb36a4ee834353694b7076d31dbd5c2451c8faac5a20f0ecbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_6457c76a9198befb36a4ee834353694b7076d31dbd5c2451c8faac5a20f0ecbb->leave($__internal_6457c76a9198befb36a4ee834353694b7076d31dbd5c2451c8faac5a20f0ecbb_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 36,  126 => 35,  114 => 30,  106 => 27,  100 => 26,  90 => 23,  84 => 22,  73 => 18,  67 => 16,  64 => 15,  58 => 14,  51 => 12,  49 => 33,  40 => 12,  12 => 32,);
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
/* {% extends base_template %}*/
/* */
/* {% block title %}*/
/*     {% if admin.id(object) is not null %}*/
/*         {{ "title_edit"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}*/
/*     {% else %}*/
/*         {{ "title_create"|trans({}, 'SonataAdminBundle') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block navbar_title %}*/
/*     {{ block('title') }}*/
/* {% endblock %}*/
/* */
/* {% block actions %}*/
/*     {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}*/
/* */
/* {% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}*/
/* {% import "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig" as form_helper %}*/
/* */
/* {% block form %}*/
/*     {{ block('parentForm') }}*/
/* {% endblock %}*/
/* */
