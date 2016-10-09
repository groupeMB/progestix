<?php

/* SonataUserBundle:Profile:edit_profile.html.twig */
class __TwigTemplate_f0f61886cd93c4dc88defa77542e06866e5a48288bff8109026731828cbec0ff extends Twig_Template
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
        $__internal_8fb58a1c86310f1950f68aa17d5dac389f8b8491b7a9344c94caef474c8e3354 = $this->env->getExtension("native_profiler");
        $__internal_8fb58a1c86310f1950f68aa17d5dac389f8b8491b7a9344c94caef474c8e3354->enter($__internal_8fb58a1c86310f1950f68aa17d5dac389f8b8491b7a9344c94caef474c8e3354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Profile:edit_profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fb58a1c86310f1950f68aa17d5dac389f8b8491b7a9344c94caef474c8e3354->leave($__internal_8fb58a1c86310f1950f68aa17d5dac389f8b8491b7a9344c94caef474c8e3354_prof);

    }

    // line 14
    public function block_sonata_profile_title($context, array $blocks = array())
    {
        $__internal_57e41e324da0a34ef9217591b406b9e7e8dbd62c3c2d0ffc813fbb5fe233a27e = $this->env->getExtension("native_profiler");
        $__internal_57e41e324da0a34ef9217591b406b9e7e8dbd62c3c2d0ffc813fbb5fe233a27e->enter($__internal_57e41e324da0a34ef9217591b406b9e7e8dbd62c3c2d0ffc813fbb5fe233a27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_account", array(), "SonataUserBundle"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_edit_profile", array(), "SonataUserBundle"), "html", null, true);
        echo "
";
        
        $__internal_57e41e324da0a34ef9217591b406b9e7e8dbd62c3c2d0ffc813fbb5fe233a27e->leave($__internal_57e41e324da0a34ef9217591b406b9e7e8dbd62c3c2d0ffc813fbb5fe233a27e_prof);

    }

    // line 18
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_50c515505dacc5477ad67a84d815e3e6730c1e5cd4bda14553500de88980e2ff = $this->env->getExtension("native_profiler");
        $__internal_50c515505dacc5477ad67a84d815e3e6730c1e5cd4bda14553500de88980e2ff->enter($__internal_50c515505dacc5477ad67a84d815e3e6730c1e5cd4bda14553500de88980e2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

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
        
        $__internal_50c515505dacc5477ad67a84d815e3e6730c1e5cd4bda14553500de88980e2ff->leave($__internal_50c515505dacc5477ad67a84d815e3e6730c1e5cd4bda14553500de88980e2ff_prof);

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
