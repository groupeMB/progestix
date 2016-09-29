<?php

/* SonataUserBundle:Profile:edit_profile.html.twig */
class __TwigTemplate_2e9db98e9c3a4a3cfa661532d7db40da46658cdcce156eb8a496a8ca9180698a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle:Profile:action.html.twig", "SonataUserBundle:Profile:edit_profile.html.twig", 12);
        $this->blocks = array(
            'sonata_profile_title' => array($this, 'block_sonata_profile_title'),
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2287239516aa5495bf22685de17f62dc6516d4c4944d49fe5653642773f8f5d = $this->env->getExtension("native_profiler");
        $__internal_b2287239516aa5495bf22685de17f62dc6516d4c4944d49fe5653642773f8f5d->enter($__internal_b2287239516aa5495bf22685de17f62dc6516d4c4944d49fe5653642773f8f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Profile:edit_profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2287239516aa5495bf22685de17f62dc6516d4c4944d49fe5653642773f8f5d->leave($__internal_b2287239516aa5495bf22685de17f62dc6516d4c4944d49fe5653642773f8f5d_prof);

    }

    // line 14
    public function block_sonata_profile_title($context, array $blocks = array())
    {
        $__internal_b1b72c65151d8f4b8e7cc5de04a1a15e5363cab3730b0947bca54c2efd4be26c = $this->env->getExtension("native_profiler");
        $__internal_b1b72c65151d8f4b8e7cc5de04a1a15e5363cab3730b0947bca54c2efd4be26c->enter($__internal_b1b72c65151d8f4b8e7cc5de04a1a15e5363cab3730b0947bca54c2efd4be26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_account", array(), "SonataUserBundle"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_edit_profile", array(), "SonataUserBundle"), "html", null, true);
        echo "
";
        
        $__internal_b1b72c65151d8f4b8e7cc5de04a1a15e5363cab3730b0947bca54c2efd4be26c->leave($__internal_b1b72c65151d8f4b8e7cc5de04a1a15e5363cab3730b0947bca54c2efd4be26c_prof);

    }

    // line 18
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_249c159641177f2244b1e2f20493a1f967f3aefa9cd1d277b096a7c1fbd307d3 = $this->env->getExtension("native_profiler");
        $__internal_249c159641177f2244b1e2f20493a1f967f3aefa9cd1d277b096a7c1fbd307d3->enter($__internal_249c159641177f2244b1e2f20493a1f967f3aefa9cd1d277b096a7c1fbd307d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

        // line 19
        echo "    ";
        echo "<div class='alert alert-default alert-info'>
    <strong>This is the user profile edition template. Feel free to override it.</strong>
    <div>Ce fichier est localisé à l'emplacement <code>{$this->getTemplateName()}</code>.</div>
</div>";        // line 20
        echo "
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    ";
        // line 23
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this));
        // line 24
        echo "
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_account", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 30
        $this->loadTemplate("SonataUserBundle:Profile:edit_profile_content.html.twig", "SonataUserBundle:Profile:edit_profile.html.twig", 30)->display($context);
        // line 31
        echo "        </div>
    </div>

    ";
        // line 34
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sonata_user_profile_edit_authentication"), array());
        
        $__internal_249c159641177f2244b1e2f20493a1f967f3aefa9cd1d277b096a7c1fbd307d3->leave($__internal_249c159641177f2244b1e2f20493a1f967f3aefa9cd1d277b096a7c1fbd307d3_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:edit_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 34,  87 => 31,  85 => 30,  79 => 27,  74 => 24,  72 => 23,  67 => 21,  64 => 20,  59 => 19,  53 => 18,  41 => 15,  35 => 14,  11 => 12,);
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
/* {% extends "SonataUserBundle:Profile:action.html.twig" %}*/
/* */
/* {% block sonata_profile_title %}*/
/*     {{ "title_user_account" | trans({}, 'SonataUserBundle')}} - {{ "title_user_edit_profile" | trans({}, 'SonataUserBundle')}}*/
/* {% endblock %}*/
/* */
/* {% block sonata_profile_content %}*/
/*     {% sonata_template_box 'This is the user profile edition template. Feel free to override it.' %}*/
/* */
/*     {{ form_errors(form) }}*/
/* */
/*     {% form_theme form _self %}*/
/* */
/*     <div class="panel panel-info">*/
/*         <div class="panel-heading">*/
/*             <h3 class="panel-title">{{ "title_user_account" | trans({}, 'SonataUserBundle')}}</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             {% include "SonataUserBundle:Profile:edit_profile_content.html.twig" %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% render url("sonata_user_profile_edit_authentication") %}*/
/* {% endblock %}*/
/* */
