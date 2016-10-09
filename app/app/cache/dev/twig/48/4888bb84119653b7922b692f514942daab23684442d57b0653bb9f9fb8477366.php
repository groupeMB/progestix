<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_aa903e0d6b9677a0780dee65adfae6e41fe68ec9ce9681655ca87a89b676e580 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataUserBundle:Profile:action.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_398e6b7242c598d9cf1c0a440e688cfb070868ec9d4d788b3546fdab3aec5233 = $this->env->getExtension("native_profiler");
        $__internal_398e6b7242c598d9cf1c0a440e688cfb070868ec9d4d788b3546fdab3aec5233->enter($__internal_398e6b7242c598d9cf1c0a440e688cfb070868ec9d4d788b3546fdab3aec5233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_398e6b7242c598d9cf1c0a440e688cfb070868ec9d4d788b3546fdab3aec5233->leave($__internal_398e6b7242c598d9cf1c0a440e688cfb070868ec9d4d788b3546fdab3aec5233_prof);

    }

    // line 3
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_35dd3e01ead62e476ba166dc2b66765d70525547931e3f06f87b9914f2e60cc4 = $this->env->getExtension("native_profiler");
        $__internal_35dd3e01ead62e476ba166dc2b66765d70525547931e3f06f87b9914f2e60cc4->enter($__internal_35dd3e01ead62e476ba166dc2b66765d70525547931e3f06f87b9914f2e60cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_edit_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 11
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 14
        echo "        </div>
    </div>
";
        
        $__internal_35dd3e01ead62e476ba166dc2b66765d70525547931e3f06f87b9914f2e60cc4->leave($__internal_35dd3e01ead62e476ba166dc2b66765d70525547931e3f06f87b9914f2e60cc4_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f95a512dc305cb895052f8d168d8714e98b6e2c2ecdf22d22ea0565b723dc17 = $this->env->getExtension("native_profiler");
        $__internal_2f95a512dc305cb895052f8d168d8714e98b6e2c2ecdf22d22ea0565b723dc17->enter($__internal_2f95a512dc305cb895052f8d168d8714e98b6e2c2ecdf22d22ea0565b723dc17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "                ";
        $this->loadTemplate("SonataUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 12)->display($context);
        // line 13
        echo "            ";
        
        $__internal_2f95a512dc305cb895052f8d168d8714e98b6e2c2ecdf22d22ea0565b723dc17->leave($__internal_2f95a512dc305cb895052f8d168d8714e98b6e2c2ecdf22d22ea0565b723dc17_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 13,  72 => 12,  66 => 11,  57 => 14,  55 => 11,  49 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "SonataUserBundle:Profile:action.html.twig" %}*/
/* */
/* {% block sonata_profile_content %}*/
/*     {{ form_errors(form) }}*/
/* */
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             <h3 class="panel-title">{{ "title_user_edit_password" | trans({}, 'SonataUserBundle') }}</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             {% block fos_user_content %}*/
/*                 {% include "SonataUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock sonata_profile_content %}*/
/* */
