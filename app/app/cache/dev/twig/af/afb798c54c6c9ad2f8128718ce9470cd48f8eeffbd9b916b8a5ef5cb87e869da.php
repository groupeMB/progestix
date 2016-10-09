<?php

/* SonataUserBundle:Admin/Security/Resetting:request.html.twig */
class __TwigTemplate_568e5f8fcbd8622057245a7c815082da60aa1f5d7e71700fe0dd5f510ce28932 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataUserBundle:Admin/Security/Resetting:request.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad5766ef89751a6a7be3c93a36f595b6f8ca7223146d33744e9abffee549926d = $this->env->getExtension("native_profiler");
        $__internal_ad5766ef89751a6a7be3c93a36f595b6f8ca7223146d33744e9abffee549926d->enter($__internal_ad5766ef89751a6a7be3c93a36f595b6f8ca7223146d33744e9abffee549926d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:request.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad5766ef89751a6a7be3c93a36f595b6f8ca7223146d33744e9abffee549926d->leave($__internal_ad5766ef89751a6a7be3c93a36f595b6f8ca7223146d33744e9abffee549926d_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_3739b583eda8176318d82cfb23fd7f658466e70a6841c23232e3636093358017 = $this->env->getExtension("native_profiler");
        $__internal_3739b583eda8176318d82cfb23fd7f658466e70a6841c23232e3636093358017->enter($__internal_3739b583eda8176318d82cfb23fd7f658466e70a6841c23232e3636093358017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_3739b583eda8176318d82cfb23fd7f658466e70a6841c23232e3636093358017->leave($__internal_3739b583eda8176318d82cfb23fd7f658466e70a6841c23232e3636093358017_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_254e3f9f7dee8b59d1fded39737cc21db0dd3ce3de471d74f79e2926f52f112f = $this->env->getExtension("native_profiler");
        $__internal_254e3f9f7dee8b59d1fded39737cc21db0dd3ce3de471d74f79e2926f52f112f->enter($__internal_254e3f9f7dee8b59d1fded39737cc21db0dd3ce3de471d74f79e2926f52f112f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_254e3f9f7dee8b59d1fded39737cc21db0dd3ce3de471d74f79e2926f52f112f->leave($__internal_254e3f9f7dee8b59d1fded39737cc21db0dd3ce3de471d74f79e2926f52f112f_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_60bb5df2d00de41ddc75a6d07c90df68166774b6fa2df56509b8d1c11e767e1c = $this->env->getExtension("native_profiler");
        $__internal_60bb5df2d00de41ddc75a6d07c90df68166774b6fa2df56509b8d1c11e767e1c->enter($__internal_60bb5df2d00de41ddc75a6d07c90df68166774b6fa2df56509b8d1c11e767e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_60bb5df2d00de41ddc75a6d07c90df68166774b6fa2df56509b8d1c11e767e1c->leave($__internal_60bb5df2d00de41ddc75a6d07c90df68166774b6fa2df56509b8d1c11e767e1c_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_a32b068127e90d07ab8f918db1b6c16105f06c92593339e5d3eaa3534e5f78d2 = $this->env->getExtension("native_profiler");
        $__internal_a32b068127e90d07ab8f918db1b6c16105f06c92593339e5d3eaa3534e5f78d2->enter($__internal_a32b068127e90d07ab8f918db1b6c16105f06c92593339e5d3eaa3534e5f78d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_a32b068127e90d07ab8f918db1b6c16105f06c92593339e5d3eaa3534e5f78d2->leave($__internal_a32b068127e90d07ab8f918db1b6c16105f06c92593339e5d3eaa3534e5f78d2_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_50b49eccc4c70d14867b7739dd91961d1994cb78c227324faa70962661f312cf = $this->env->getExtension("native_profiler");
        $__internal_50b49eccc4c70d14867b7739dd91961d1994cb78c227324faa70962661f312cf->enter($__internal_50b49eccc4c70d14867b7739dd91961d1994cb78c227324faa70962661f312cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_50b49eccc4c70d14867b7739dd91961d1994cb78c227324faa70962661f312cf->leave($__internal_50b49eccc4c70d14867b7739dd91961d1994cb78c227324faa70962661f312cf_prof);

    }

    // line 25
    public function block_sonata_user_reset_request_form($context, array $blocks = array())
    {
        $__internal_4aa259797501d795f93dcb1ccc813a85bee0c763b77389b0e0cb1c93158f6189 = $this->env->getExtension("native_profiler");
        $__internal_4aa259797501d795f93dcb1ccc813a85bee0c763b77389b0e0cb1c93158f6189->enter($__internal_4aa259797501d795f93dcb1ccc813a85bee0c763b77389b0e0cb1c93158f6189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_request_form"));

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
        
        $__internal_4aa259797501d795f93dcb1ccc813a85bee0c763b77389b0e0cb1c93158f6189->leave($__internal_4aa259797501d795f93dcb1ccc813a85bee0c763b77389b0e0cb1c93158f6189_prof);

    }

    // line 26
    public function block_sonata_user_reset_request_error($context, array $blocks = array())
    {
        $__internal_1de7f072f9a084f45788d239a77124a50f140627e5bae3c9a064fe1f3ba30f9c = $this->env->getExtension("native_profiler");
        $__internal_1de7f072f9a084f45788d239a77124a50f140627e5bae3c9a064fe1f3ba30f9c->enter($__internal_1de7f072f9a084f45788d239a77124a50f140627e5bae3c9a064fe1f3ba30f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_request_error"));

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
        
        $__internal_1de7f072f9a084f45788d239a77124a50f140627e5bae3c9a064fe1f3ba30f9c->leave($__internal_1de7f072f9a084f45788d239a77124a50f140627e5bae3c9a064fe1f3ba30f9c_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security/Resetting:request.html.twig";
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
