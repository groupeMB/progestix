<?php

/* SonataUserBundle:Profile:edit_authentication.html.twig */
class __TwigTemplate_0ce6686116120dba0317f5e02d82ffa56df0525d5c4d49fea0092cf27a3d1a49 extends Twig_Template
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
        $__internal_bafc7308d56ba943a9cb5106bf4d1358277fe1f509cf9e67a8a0e22a0a22e47a = $this->env->getExtension("native_profiler");
        $__internal_bafc7308d56ba943a9cb5106bf4d1358277fe1f509cf9e67a8a0e22a0a22e47a->enter($__internal_bafc7308d56ba943a9cb5106bf4d1358277fe1f509cf9e67a8a0e22a0a22e47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Profile:edit_authentication.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo "<div class='alert alert-default alert-info'>
    <strong>This is the user authentication edition template. Feel free to override it.</strong>
    <div>Ce fichier est localisé à l'emplacement <code>{$this->getTemplateName()}</code>.</div>
</div>";        // line 13
        echo "
<div class=\"row\">
    <div class=\"span6 col-lg-6\">
        <div class=\"panel panel-warning\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_edit_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                ";
        // line 21
        $this->loadTemplate("SonataUserBundle:Profile:edit_authentication_content.html.twig", "SonataUserBundle:Profile:edit_authentication.html.twig", 21)->display($context);
        // line 22
        echo "            </div>
        </div>
    </div>
    <div class=\"span6 col-lg-6\">
        <div class=\"panel panel-danger\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sonata_change_password_link", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                ";
        // line 31
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sonata_user_change_password"), array());
        // line 32
        echo "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_bafc7308d56ba943a9cb5106bf4d1358277fe1f509cf9e67a8a0e22a0a22e47a->leave($__internal_bafc7308d56ba943a9cb5106bf4d1358277fe1f509cf9e67a8a0e22a0a22e47a_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:edit_authentication.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 32,  58 => 31,  52 => 28,  44 => 22,  42 => 21,  36 => 18,  29 => 13,  25 => 12,  22 => 11,);
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
/* {% sonata_template_box 'This is the user authentication edition template. Feel free to override it.' %}*/
/* */
/* <div class="row">*/
/*     <div class="span6 col-lg-6">*/
/*         <div class="panel panel-warning">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title">{{ 'title_user_edit_authentication'|trans({}, 'SonataUserBundle') }}</h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 {% include "SonataUserBundle:Profile:edit_authentication_content.html.twig" %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="span6 col-lg-6">*/
/*         <div class="panel panel-danger">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title">{{ 'sonata_change_password_link'|trans({}, 'SonataUserBundle') }}</h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 {% render url("sonata_user_change_password") %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
