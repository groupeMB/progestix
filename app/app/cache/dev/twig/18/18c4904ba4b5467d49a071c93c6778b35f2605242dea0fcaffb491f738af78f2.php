<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_1610d1eeceb4109b6bb3bb0377e00dfdc101267c53ebfc973e0c40e76051c4f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_1d58da4ab3723361afbe3574d504485a36debfe041a2792ab22783f88b7177c3 = $this->env->getExtension("native_profiler");
        $__internal_1d58da4ab3723361afbe3574d504485a36debfe041a2792ab22783f88b7177c3->enter($__internal_1d58da4ab3723361afbe3574d504485a36debfe041a2792ab22783f88b7177c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d58da4ab3723361afbe3574d504485a36debfe041a2792ab22783f88b7177c3->leave($__internal_1d58da4ab3723361afbe3574d504485a36debfe041a2792ab22783f88b7177c3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_af6b020f9dac399de318b74732c4dded8746ab8f0dec11c25495bbd2f6aa4dff = $this->env->getExtension("native_profiler");
        $__internal_af6b020f9dac399de318b74732c4dded8746ab8f0dec11c25495bbd2f6aa4dff->enter($__internal_af6b020f9dac399de318b74732c4dded8746ab8f0dec11c25495bbd2f6aa4dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 11)->display($context);
        // line 12
        echo "        </div>
    </div>
";
        
        $__internal_af6b020f9dac399de318b74732c4dded8746ab8f0dec11c25495bbd2f6aa4dff->leave($__internal_af6b020f9dac399de318b74732c4dded8746ab8f0dec11c25495bbd2f6aa4dff_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
