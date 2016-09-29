<?php

/* @SonataUser/Resetting/reset.html.twig */
class __TwigTemplate_ca04810445f46327677fb8ae4e539e3997952e87cd5df3b94e0192ad9079c3a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataUserBundle::layout.html.twig", "@SonataUser/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e334dd7f28059d7947cd89c5188ccb3173815e084b13bbf9273fe55d8bb109ea = $this->env->getExtension("native_profiler");
        $__internal_e334dd7f28059d7947cd89c5188ccb3173815e084b13bbf9273fe55d8bb109ea->enter($__internal_e334dd7f28059d7947cd89c5188ccb3173815e084b13bbf9273fe55d8bb109ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e334dd7f28059d7947cd89c5188ccb3173815e084b13bbf9273fe55d8bb109ea->leave($__internal_e334dd7f28059d7947cd89c5188ccb3173815e084b13bbf9273fe55d8bb109ea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_319082cff2e9a1e9d2c9046d6328f103b09b1c3445526492059dfbcf5b451db1 = $this->env->getExtension("native_profiler");
        $__internal_319082cff2e9a1e9d2c9046d6328f103b09b1c3445526492059dfbcf5b451db1->enter($__internal_319082cff2e9a1e9d2c9046d6328f103b09b1c3445526492059dfbcf5b451db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_resetting_reset", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 11
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@SonataUser/Resetting/reset.html.twig", 11)->display($context);
        // line 12
        echo "        </div>
    </div>
";
        
        $__internal_319082cff2e9a1e9d2c9046d6328f103b09b1c3445526492059dfbcf5b451db1->leave($__internal_319082cff2e9a1e9d2c9046d6328f103b09b1c3445526492059dfbcf5b451db1_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  54 => 11,  48 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "SonataUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     {{ form_errors(form) }}*/
/* */
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             <h3 class="panel-title">{{ "title_user_resetting_reset" | trans({}, 'SonataUserBundle') }}</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */
