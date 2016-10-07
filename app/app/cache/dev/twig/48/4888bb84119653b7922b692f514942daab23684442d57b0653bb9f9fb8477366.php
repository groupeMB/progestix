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
        $__internal_a8055ad5839ddc2600740e3b2699905c272877832fdafed027dffb3571187e9c = $this->env->getExtension("native_profiler");
        $__internal_a8055ad5839ddc2600740e3b2699905c272877832fdafed027dffb3571187e9c->enter($__internal_a8055ad5839ddc2600740e3b2699905c272877832fdafed027dffb3571187e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8055ad5839ddc2600740e3b2699905c272877832fdafed027dffb3571187e9c->leave($__internal_a8055ad5839ddc2600740e3b2699905c272877832fdafed027dffb3571187e9c_prof);

    }

    // line 3
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_a7f7dfa7252ea53e888ee20d970c25d7872cacea34adf986353ded795b1d517e = $this->env->getExtension("native_profiler");
        $__internal_a7f7dfa7252ea53e888ee20d970c25d7872cacea34adf986353ded795b1d517e->enter($__internal_a7f7dfa7252ea53e888ee20d970c25d7872cacea34adf986353ded795b1d517e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

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
        
        $__internal_a7f7dfa7252ea53e888ee20d970c25d7872cacea34adf986353ded795b1d517e->leave($__internal_a7f7dfa7252ea53e888ee20d970c25d7872cacea34adf986353ded795b1d517e_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9640b5b2c74f0d9febd46efb2e9264c9320137f1bff327cf56249d8e4c2d61c0 = $this->env->getExtension("native_profiler");
        $__internal_9640b5b2c74f0d9febd46efb2e9264c9320137f1bff327cf56249d8e4c2d61c0->enter($__internal_9640b5b2c74f0d9febd46efb2e9264c9320137f1bff327cf56249d8e4c2d61c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "                ";
        $this->loadTemplate("SonataUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 12)->display($context);
        // line 13
        echo "            ";
        
        $__internal_9640b5b2c74f0d9febd46efb2e9264c9320137f1bff327cf56249d8e4c2d61c0->leave($__internal_9640b5b2c74f0d9febd46efb2e9264c9320137f1bff327cf56249d8e4c2d61c0_prof);

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
