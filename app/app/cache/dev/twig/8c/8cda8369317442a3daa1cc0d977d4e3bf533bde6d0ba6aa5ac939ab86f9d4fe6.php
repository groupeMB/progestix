<?php

/* @SonataUser/Admin/Security/Resetting/reset.html.twig */
class __TwigTemplate_35a1a6e19f0dc77eef231239013131e2b85f33a0aacaced403bee9143f913e35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'logo' => array($this, 'block_logo'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_user_reset_form' => array($this, 'block_sonata_user_reset_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataUser/Admin/Security/Resetting/reset.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba550d44f493b5ea359cf6b48f3b88cd8d5f958c76af626d208235415d7d36c8 = $this->env->getExtension("native_profiler");
        $__internal_ba550d44f493b5ea359cf6b48f3b88cd8d5f958c76af626d208235415d7d36c8->enter($__internal_ba550d44f493b5ea359cf6b48f3b88cd8d5f958c76af626d208235415d7d36c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Security/Resetting/reset.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba550d44f493b5ea359cf6b48f3b88cd8d5f958c76af626d208235415d7d36c8->leave($__internal_ba550d44f493b5ea359cf6b48f3b88cd8d5f958c76af626d208235415d7d36c8_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_f331c4451774eef52d2d3d22bc3ffe1b97a4c0b72a1ab3101f52fd0cb53ee05d = $this->env->getExtension("native_profiler");
        $__internal_f331c4451774eef52d2d3d22bc3ffe1b97a4c0b72a1ab3101f52fd0cb53ee05d->enter($__internal_f331c4451774eef52d2d3d22bc3ffe1b97a4c0b72a1ab3101f52fd0cb53ee05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_f331c4451774eef52d2d3d22bc3ffe1b97a4c0b72a1ab3101f52fd0cb53ee05d->leave($__internal_f331c4451774eef52d2d3d22bc3ffe1b97a4c0b72a1ab3101f52fd0cb53ee05d_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_56a467beb8a36115374a64d5032b5593a9be402a7b45749679619d8aa3e542b4 = $this->env->getExtension("native_profiler");
        $__internal_56a467beb8a36115374a64d5032b5593a9be402a7b45749679619d8aa3e542b4->enter($__internal_56a467beb8a36115374a64d5032b5593a9be402a7b45749679619d8aa3e542b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_56a467beb8a36115374a64d5032b5593a9be402a7b45749679619d8aa3e542b4->leave($__internal_56a467beb8a36115374a64d5032b5593a9be402a7b45749679619d8aa3e542b4_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_2dae38669be4449d34514df453983e112c83eeb72e59aea7847f761cfe413117 = $this->env->getExtension("native_profiler");
        $__internal_2dae38669be4449d34514df453983e112c83eeb72e59aea7847f761cfe413117->enter($__internal_2dae38669be4449d34514df453983e112c83eeb72e59aea7847f761cfe413117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_2dae38669be4449d34514df453983e112c83eeb72e59aea7847f761cfe413117->leave($__internal_2dae38669be4449d34514df453983e112c83eeb72e59aea7847f761cfe413117_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_44052148b026852cb8e0ef2ac81ca5396a260fffb33df136020b5f9bb723cef6 = $this->env->getExtension("native_profiler");
        $__internal_44052148b026852cb8e0ef2ac81ca5396a260fffb33df136020b5f9bb723cef6->enter($__internal_44052148b026852cb8e0ef2ac81ca5396a260fffb33df136020b5f9bb723cef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_44052148b026852cb8e0ef2ac81ca5396a260fffb33df136020b5f9bb723cef6->leave($__internal_44052148b026852cb8e0ef2ac81ca5396a260fffb33df136020b5f9bb723cef6_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_882f4e656847e812b3eb26a24c95e8f2fb1db84a1e4b1bab1cd897f2785dadfd = $this->env->getExtension("native_profiler");
        $__internal_882f4e656847e812b3eb26a24c95e8f2fb1db84a1e4b1bab1cd897f2785dadfd->enter($__internal_882f4e656847e812b3eb26a24c95e8f2fb1db84a1e4b1bab1cd897f2785dadfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 15
        echo "
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("sonata_admin_dashboard");
        echo "\">
                ";
        // line 19
        if ((("single_text" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
            // line 20
            echo "                    <span>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title", array()), "html", null, true);
            echo "</span>
                ";
        }
        // line 22
        echo "            </a>
        </div>
        <div class=\"login-box-body\">
            ";
        // line 25
        $this->displayBlock('sonata_user_reset_form', $context, $blocks);
        // line 43
        echo "        </div>
    </div>

";
        
        $__internal_882f4e656847e812b3eb26a24c95e8f2fb1db84a1e4b1bab1cd897f2785dadfd->leave($__internal_882f4e656847e812b3eb26a24c95e8f2fb1db84a1e4b1bab1cd897f2785dadfd_prof);

    }

    // line 25
    public function block_sonata_user_reset_form($context, array $blocks = array())
    {
        $__internal_c7861d8c292d53e7d52a11cd5b641c812e6d40ce56638c997c4b1d115ed4f9c5 = $this->env->getExtension("native_profiler");
        $__internal_c7861d8c292d53e7d52a11cd5b641c812e6d40ce56638c997c4b1d115ed4f9c5->enter($__internal_c7861d8c292d53e7d52a11cd5b641c812e6d40ce56638c997c4b1d115ed4f9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_form"));

        // line 26
        echo "                <p class=\"login-box-msg\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
                <form action=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_user_admin_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\" method=\"post\" role=\"form\">
                    <div class=\"form-group\">
                        <input type=\"password\" class=\"form-control\" id=\"fos_user_resetting_form_new_first\"  name=\"fos_user_resetting_form[new][first]\" required=\"required\" placeholder=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('translator')->trans("form.new_password", array(), "FOSUserBundle"), array(":" => "")), "html", null, true);
        echo "\"/>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"password\" class=\"form-control\" id=\"fos_user_resetting_form_new_second\"  name=\"fos_user_resetting_form[new][second]\" required=\"required\" placeholder=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('translator')->trans("form.new_password_confirmation", array(), "FOSUserBundle"), array(":" => "")), "html", null, true);
        echo "\"/>
                    </div>
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </form>
            ";
        
        $__internal_c7861d8c292d53e7d52a11cd5b641c812e6d40ce56638c997c4b1d115ed4f9c5->leave($__internal_c7861d8c292d53e7d52a11cd5b641c812e6d40ce56638c997c4b1d115ed4f9c5_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Admin/Security/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 38,  150 => 34,  145 => 32,  139 => 29,  134 => 27,  129 => 26,  123 => 25,  113 => 43,  111 => 25,  106 => 22,  100 => 20,  98 => 19,  94 => 18,  89 => 15,  83 => 14,  71 => 12,  60 => 9,  49 => 6,  38 => 3,  23 => 1,);
    }
}
/* {% extends base_template %}*/
/* */
/* {% block sonata_nav %}*/
/* {% endblock sonata_nav %}*/
/* */
/* {% block logo %}*/
/* {% endblock logo %}*/
/* */
/* {% block sonata_left_side %}*/
/* {% endblock sonata_left_side %}*/
/* */
/* {% block body_attributes %}class="sonata-bc login-page"{% endblock %}*/
/* */
/* {% block sonata_wrapper %}*/
/* */
/*     <div class="login-box">*/
/*         <div class="login-logo">*/
/*             <a href="{{ path('sonata_admin_dashboard') }}">*/
/*                 {% if 'single_text' == admin_pool.getOption('title_mode') or 'both' == admin_pool.getOption('title_mode') %}*/
/*                     <span>{{ admin_pool.title }}</span>*/
/*                 {% endif %}*/
/*             </a>*/
/*         </div>*/
/*         <div class="login-box-body">*/
/*             {% block sonata_user_reset_form %}*/
/*                 <p class="login-box-msg">{{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }}</p>*/
/*                 <form action="{{ path('sonata_user_admin_resetting_reset', {'token': token}) }}" method="post" role="form">*/
/*                     <div class="form-group">*/
/*                         <input type="password" class="form-control" id="fos_user_resetting_form_new_first"  name="fos_user_resetting_form[new][first]" required="required" placeholder="{{ 'form.new_password'|trans({}, 'FOSUserBundle')|replace({':': ''}) }}"/>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <input type="password" class="form-control" id="fos_user_resetting_form_new_second"  name="fos_user_resetting_form[new][second]" required="required" placeholder="{{ 'form.new_password_confirmation'|trans({}, 'FOSUserBundle')|replace({':': ''}) }}"/>*/
/*                     </div>*/
/*                     {{ form_widget(form._token) }}*/
/* */
/*                     <div class="row">*/
/*                         <div class="col-xs-12">*/
/*                             <button type="submit" class="btn btn-primary btn-block btn-flat">{{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }}</button>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock sonata_wrapper %}*/
/* */
