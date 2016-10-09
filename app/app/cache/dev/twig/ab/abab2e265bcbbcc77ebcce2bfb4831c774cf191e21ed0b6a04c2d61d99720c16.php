<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_0cf21219cd4fa669bd1447e8c8e7f3f2bc1e7929226bd41195194e11fe283a0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1e7f7e9fb8925cc72f6c2820deee7340c7bdf809dfbd2817e6a64a869e84823 = $this->env->getExtension("native_profiler");
        $__internal_f1e7f7e9fb8925cc72f6c2820deee7340c7bdf809dfbd2817e6a64a869e84823->enter($__internal_f1e7f7e9fb8925cc72f6c2820deee7340c7bdf809dfbd2817e6a64a869e84823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1e7f7e9fb8925cc72f6c2820deee7340c7bdf809dfbd2817e6a64a869e84823->leave($__internal_f1e7f7e9fb8925cc72f6c2820deee7340c7bdf809dfbd2817e6a64a869e84823_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f57d0a9ae1cdccf68074bf0c949f776a0f39eda9d86f181ff4897aa90f5954a = $this->env->getExtension("native_profiler");
        $__internal_6f57d0a9ae1cdccf68074bf0c949f776a0f39eda9d86f181ff4897aa90f5954a->enter($__internal_6f57d0a9ae1cdccf68074bf0c949f776a0f39eda9d86f181ff4897aa90f5954a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_6f57d0a9ae1cdccf68074bf0c949f776a0f39eda9d86f181ff4897aa90f5954a->leave($__internal_6f57d0a9ae1cdccf68074bf0c949f776a0f39eda9d86f181ff4897aa90f5954a_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_ab4a793596945395e93b22beff15a8ba425848410484e67834732f1b761ec980 = $this->env->getExtension("native_profiler");
        $__internal_ab4a793596945395e93b22beff15a8ba425848410484e67834732f1b761ec980->enter($__internal_ab4a793596945395e93b22beff15a8ba425848410484e67834732f1b761ec980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ab4a793596945395e93b22beff15a8ba425848410484e67834732f1b761ec980->leave($__internal_ab4a793596945395e93b22beff15a8ba425848410484e67834732f1b761ec980_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_2b47dd337142d7f1521bdc79c177a22371aff7875e4caa03c2e9f3dcf4a52190 = $this->env->getExtension("native_profiler");
        $__internal_2b47dd337142d7f1521bdc79c177a22371aff7875e4caa03c2e9f3dcf4a52190->enter($__internal_2b47dd337142d7f1521bdc79c177a22371aff7875e4caa03c2e9f3dcf4a52190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_2b47dd337142d7f1521bdc79c177a22371aff7875e4caa03c2e9f3dcf4a52190->leave($__internal_2b47dd337142d7f1521bdc79c177a22371aff7875e4caa03c2e9f3dcf4a52190_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_76b049d663111a3aba6aa21f3ebb3ef17103035416fb8ace77ed9ee65e8ddcba = $this->env->getExtension("native_profiler");
        $__internal_76b049d663111a3aba6aa21f3ebb3ef17103035416fb8ace77ed9ee65e8ddcba->enter($__internal_76b049d663111a3aba6aa21f3ebb3ef17103035416fb8ace77ed9ee65e8ddcba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_76b049d663111a3aba6aa21f3ebb3ef17103035416fb8ace77ed9ee65e8ddcba->leave($__internal_76b049d663111a3aba6aa21f3ebb3ef17103035416fb8ace77ed9ee65e8ddcba_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_25372b91190d1ac810d6d1d5fe9aadac0695d215a4e8e08ea27528f115835e64 = $this->env->getExtension("native_profiler");
        $__internal_25372b91190d1ac810d6d1d5fe9aadac0695d215a4e8e08ea27528f115835e64->enter($__internal_25372b91190d1ac810d6d1d5fe9aadac0695d215a4e8e08ea27528f115835e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_25372b91190d1ac810d6d1d5fe9aadac0695d215a4e8e08ea27528f115835e64->leave($__internal_25372b91190d1ac810d6d1d5fe9aadac0695d215a4e8e08ea27528f115835e64_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
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
