<?php

/* @SonataUser/Admin/Security/Resetting/request.html.twig */
class __TwigTemplate_bf53b1867fe61769b9cace1759c52a59c4210763031723e6c5c3be770ea09c7a extends Twig_Template
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
            'sonata_user_reset_request_form' => array($this, 'block_sonata_user_reset_request_form'),
            'sonata_user_reset_request_error' => array($this, 'block_sonata_user_reset_request_error'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataUser/Admin/Security/Resetting/request.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e80d48ab166ec0a8d2bce07d667421b41000523da4931cc7d2bbd731ae4eb03a = $this->env->getExtension("native_profiler");
        $__internal_e80d48ab166ec0a8d2bce07d667421b41000523da4931cc7d2bbd731ae4eb03a->enter($__internal_e80d48ab166ec0a8d2bce07d667421b41000523da4931cc7d2bbd731ae4eb03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Security/Resetting/request.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e80d48ab166ec0a8d2bce07d667421b41000523da4931cc7d2bbd731ae4eb03a->leave($__internal_e80d48ab166ec0a8d2bce07d667421b41000523da4931cc7d2bbd731ae4eb03a_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_36aa29044ad53569a06a0d8a954e070ac89914148184faa63a1ed319644bc2c4 = $this->env->getExtension("native_profiler");
        $__internal_36aa29044ad53569a06a0d8a954e070ac89914148184faa63a1ed319644bc2c4->enter($__internal_36aa29044ad53569a06a0d8a954e070ac89914148184faa63a1ed319644bc2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_36aa29044ad53569a06a0d8a954e070ac89914148184faa63a1ed319644bc2c4->leave($__internal_36aa29044ad53569a06a0d8a954e070ac89914148184faa63a1ed319644bc2c4_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_3596c047ddd81aa6b93ade945c36605abdba03c8b21bb7a6b6565499e60af1f1 = $this->env->getExtension("native_profiler");
        $__internal_3596c047ddd81aa6b93ade945c36605abdba03c8b21bb7a6b6565499e60af1f1->enter($__internal_3596c047ddd81aa6b93ade945c36605abdba03c8b21bb7a6b6565499e60af1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_3596c047ddd81aa6b93ade945c36605abdba03c8b21bb7a6b6565499e60af1f1->leave($__internal_3596c047ddd81aa6b93ade945c36605abdba03c8b21bb7a6b6565499e60af1f1_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_658fc15863338e23c9e048156229eb210c60f652b5e63b943e1d40cc1a3fff7a = $this->env->getExtension("native_profiler");
        $__internal_658fc15863338e23c9e048156229eb210c60f652b5e63b943e1d40cc1a3fff7a->enter($__internal_658fc15863338e23c9e048156229eb210c60f652b5e63b943e1d40cc1a3fff7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_658fc15863338e23c9e048156229eb210c60f652b5e63b943e1d40cc1a3fff7a->leave($__internal_658fc15863338e23c9e048156229eb210c60f652b5e63b943e1d40cc1a3fff7a_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_3c5d5af7f9cbfec3cbb9a4faa156c0b9908c0fcfd0c752a615e8ae9373a0860f = $this->env->getExtension("native_profiler");
        $__internal_3c5d5af7f9cbfec3cbb9a4faa156c0b9908c0fcfd0c752a615e8ae9373a0860f->enter($__internal_3c5d5af7f9cbfec3cbb9a4faa156c0b9908c0fcfd0c752a615e8ae9373a0860f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_3c5d5af7f9cbfec3cbb9a4faa156c0b9908c0fcfd0c752a615e8ae9373a0860f->leave($__internal_3c5d5af7f9cbfec3cbb9a4faa156c0b9908c0fcfd0c752a615e8ae9373a0860f_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_430cac8b057815e8730e795dab66dbc00bbd7986b51e5bd33c6d597a1b13b1c2 = $this->env->getExtension("native_profiler");
        $__internal_430cac8b057815e8730e795dab66dbc00bbd7986b51e5bd33c6d597a1b13b1c2->enter($__internal_430cac8b057815e8730e795dab66dbc00bbd7986b51e5bd33c6d597a1b13b1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        $this->displayBlock('sonata_user_reset_request_form', $context, $blocks);
        // line 47
        echo "        </div>
    </div>

";
        
        $__internal_430cac8b057815e8730e795dab66dbc00bbd7986b51e5bd33c6d597a1b13b1c2->leave($__internal_430cac8b057815e8730e795dab66dbc00bbd7986b51e5bd33c6d597a1b13b1c2_prof);

    }

    // line 25
    public function block_sonata_user_reset_request_form($context, array $blocks = array())
    {
        $__internal_2183617bda757385560b31fc770da1f4e9c3cb3cb66e5f22b42fc3b778289577 = $this->env->getExtension("native_profiler");
        $__internal_2183617bda757385560b31fc770da1f4e9c3cb3cb66e5f22b42fc3b778289577->enter($__internal_2183617bda757385560b31fc770da1f4e9c3cb3cb66e5f22b42fc3b778289577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_request_form"));

        // line 26
        echo "                ";
        $this->displayBlock('sonata_user_reset_request_error', $context, $blocks);
        // line 31
        echo "                <p class=\"login-box-msg\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
                <form action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("sonata_user_admin_resetting_send_email");
        echo "\" method=\"post\" role=\"form\">
                    <div class=\"form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" id=\"username\"  name=\"username\" required=\"required\" placeholder=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), array(":" => "")), "html", null, true);
        echo "\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </form>

                <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("sonata_user_admin_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
            ";
        
        $__internal_2183617bda757385560b31fc770da1f4e9c3cb3cb66e5f22b42fc3b778289577->leave($__internal_2183617bda757385560b31fc770da1f4e9c3cb3cb66e5f22b42fc3b778289577_prof);

    }

    // line 26
    public function block_sonata_user_reset_request_error($context, array $blocks = array())
    {
        $__internal_5060934d300a9a510887ec62141fc3793357ecc8d5d813ab5176a0c6b410a262 = $this->env->getExtension("native_profiler");
        $__internal_5060934d300a9a510887ec62141fc3793357ecc8d5d813ab5176a0c6b410a262->enter($__internal_5060934d300a9a510887ec62141fc3793357ecc8d5d813ab5176a0c6b410a262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_request_error"));

        // line 27
        echo "                    ";
        if (array_key_exists("invalid_username", $context)) {
            // line 28
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 30
        echo "                ";
        
        $__internal_5060934d300a9a510887ec62141fc3793357ecc8d5d813ab5176a0c6b410a262->leave($__internal_5060934d300a9a510887ec62141fc3793357ecc8d5d813ab5176a0c6b410a262_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Admin/Security/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 30,  180 => 28,  177 => 27,  171 => 26,  160 => 45,  152 => 40,  143 => 34,  138 => 32,  133 => 31,  130 => 26,  124 => 25,  114 => 47,  112 => 25,  107 => 22,  101 => 20,  99 => 19,  95 => 18,  90 => 15,  84 => 14,  72 => 12,  61 => 9,  50 => 6,  39 => 3,  24 => 1,);
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
/*             {% block sonata_user_reset_request_form %}*/
/*                 {% block sonata_user_reset_request_error %}*/
/*                     {% if invalid_username is defined %}*/
/*                         <div class="alert alert-danger">{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}, 'FOSUserBundle') }}</div>*/
/*                     {% endif %}*/
/*                 {% endblock %}*/
/*                 <p class="login-box-msg">{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}</p>*/
/*                 <form action="{{ path('sonata_user_admin_resetting_send_email') }}" method="post" role="form">*/
/*                     <div class="form-group has-feedback">*/
/*                         <input type="text" class="form-control" id="username"  name="username" required="required" placeholder="{{ 'resetting.request.username'|trans({}, 'FOSUserBundle')|replace({':': ''}) }}"/>*/
/*                         <span class="glyphicon glyphicon-user form-control-feedback"></span>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="col-xs-12">*/
/*                             <button type="submit" class="btn btn-primary btn-block btn-flat">{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}</button>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/* */
/*                 <a href="{{ path('sonata_user_admin_security_login') }}">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</a>*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock sonata_wrapper %}*/
/* */
