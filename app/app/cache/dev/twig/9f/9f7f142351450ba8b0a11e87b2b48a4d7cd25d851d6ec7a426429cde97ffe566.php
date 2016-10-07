<?php

/* SonataUserBundle:Admin:Security/login.html.twig */
class __TwigTemplate_9103d817658f9b7631132e3b3885557ef959aa75a0dd2fa04cd1e8e1dc3c0f2f extends Twig_Template
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
            'sonata_user_login_form' => array($this, 'block_sonata_user_login_form'),
            'sonata_user_login_error' => array($this, 'block_sonata_user_login_error'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataUserBundle:Admin:Security/login.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_adfa471738279d08b0105300f65e2af617e2fa2985745cdcd3c242d97c07d4d5 = $this->env->getExtension("native_profiler");
        $__internal_adfa471738279d08b0105300f65e2af617e2fa2985745cdcd3c242d97c07d4d5->enter($__internal_adfa471738279d08b0105300f65e2af617e2fa2985745cdcd3c242d97c07d4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin:Security/login.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adfa471738279d08b0105300f65e2af617e2fa2985745cdcd3c242d97c07d4d5->leave($__internal_adfa471738279d08b0105300f65e2af617e2fa2985745cdcd3c242d97c07d4d5_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_016dfc7a197d7784b2ac3097497a4129e2ee73247c568ef996477e38221172b0 = $this->env->getExtension("native_profiler");
        $__internal_016dfc7a197d7784b2ac3097497a4129e2ee73247c568ef996477e38221172b0->enter($__internal_016dfc7a197d7784b2ac3097497a4129e2ee73247c568ef996477e38221172b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_016dfc7a197d7784b2ac3097497a4129e2ee73247c568ef996477e38221172b0->leave($__internal_016dfc7a197d7784b2ac3097497a4129e2ee73247c568ef996477e38221172b0_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_ffa4b09aebeecfe123aa984fae1dd76207fa77b3f3e06e74027e8fd656023c17 = $this->env->getExtension("native_profiler");
        $__internal_ffa4b09aebeecfe123aa984fae1dd76207fa77b3f3e06e74027e8fd656023c17->enter($__internal_ffa4b09aebeecfe123aa984fae1dd76207fa77b3f3e06e74027e8fd656023c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_ffa4b09aebeecfe123aa984fae1dd76207fa77b3f3e06e74027e8fd656023c17->leave($__internal_ffa4b09aebeecfe123aa984fae1dd76207fa77b3f3e06e74027e8fd656023c17_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_32261581462659e006714458cc8838e9198a8afe8db2cb11eef7eb587f796e15 = $this->env->getExtension("native_profiler");
        $__internal_32261581462659e006714458cc8838e9198a8afe8db2cb11eef7eb587f796e15->enter($__internal_32261581462659e006714458cc8838e9198a8afe8db2cb11eef7eb587f796e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_32261581462659e006714458cc8838e9198a8afe8db2cb11eef7eb587f796e15->leave($__internal_32261581462659e006714458cc8838e9198a8afe8db2cb11eef7eb587f796e15_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_2a159774cd68a67c31f7df7539237aab8c70c4ead948ffda158f0f67da106edd = $this->env->getExtension("native_profiler");
        $__internal_2a159774cd68a67c31f7df7539237aab8c70c4ead948ffda158f0f67da106edd->enter($__internal_2a159774cd68a67c31f7df7539237aab8c70c4ead948ffda158f0f67da106edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_2a159774cd68a67c31f7df7539237aab8c70c4ead948ffda158f0f67da106edd->leave($__internal_2a159774cd68a67c31f7df7539237aab8c70c4ead948ffda158f0f67da106edd_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_06a6b0d669f4bda20031f45a849dae53e65b5d51a26196f4d8e67d8043682ac7 = $this->env->getExtension("native_profiler");
        $__internal_06a6b0d669f4bda20031f45a849dae53e65b5d51a26196f4d8e67d8043682ac7->enter($__internal_06a6b0d669f4bda20031f45a849dae53e65b5d51a26196f4d8e67d8043682ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        if ((("single_image" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 20
            echo "                    <div>
                        <img style=\"width:64px;\" src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                    </div>
                ";
        }
        // line 24
        echo "                ";
        if ((("single_text" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 25
            echo "                    <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                ";
        }
        // line 27
        echo "            </a>
        </div>
        <div class=\"login-box-body\">
            ";
        // line 30
        $this->displayBlock('sonata_user_login_form', $context, $blocks);
        // line 68
        echo "        </div>
    </div>

";
        
        $__internal_06a6b0d669f4bda20031f45a849dae53e65b5d51a26196f4d8e67d8043682ac7->leave($__internal_06a6b0d669f4bda20031f45a849dae53e65b5d51a26196f4d8e67d8043682ac7_prof);

    }

    // line 30
    public function block_sonata_user_login_form($context, array $blocks = array())
    {
        $__internal_093bb3b3493b94d8ec2ed792eec029b2cc9d5f1e3d9a4c800cb752aa64982dff = $this->env->getExtension("native_profiler");
        $__internal_093bb3b3493b94d8ec2ed792eec029b2cc9d5f1e3d9a4c800cb752aa64982dff->enter($__internal_093bb3b3493b94d8ec2ed792eec029b2cc9d5f1e3d9a4c800cb752aa64982dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_form"));

        // line 31
        echo "                ";
        $this->displayBlock('sonata_user_login_error', $context, $blocks);
        // line 36
        echo "                <p class=\"login-box-msg\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</p>
                <form action=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("sonata_user_admin_security_check");
        echo "\" method=\"post\" role=\"form\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>

                    <div class=\"form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" id=\"username\"  name=\"_username\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "SonataUserBundle"), "html", null, true);
        echo "\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>

                    <div class=\"form-group has-feedback\">
                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "SonataUserBundle"), "html", null, true);
        echo "\"/>
                        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-8\">
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                    ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                </label>
                            </div>
                        </div>
                        <div class=\"col-xs-4\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </form>

                ";
        // line 66
        echo "                <a href=\"";
        echo twig_escape_filter($this->env, (isset($context["reset_route"]) ? $context["reset_route"] : $this->getContext($context, "reset_route")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forgotten_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
            ";
        
        $__internal_093bb3b3493b94d8ec2ed792eec029b2cc9d5f1e3d9a4c800cb752aa64982dff->leave($__internal_093bb3b3493b94d8ec2ed792eec029b2cc9d5f1e3d9a4c800cb752aa64982dff_prof);

    }

    // line 31
    public function block_sonata_user_login_error($context, array $blocks = array())
    {
        $__internal_ede681fb42eaa55d24e875f5c08045275365468ed881875f0aa28b654141c315 = $this->env->getExtension("native_profiler");
        $__internal_ede681fb42eaa55d24e875f5c08045275365468ed881875f0aa28b654141c315->enter($__internal_ede681fb42eaa55d24e875f5c08045275365468ed881875f0aa28b654141c315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_error"));

        // line 32
        echo "                    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 33
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 35
        echo "                ";
        
        $__internal_ede681fb42eaa55d24e875f5c08045275365468ed881875f0aa28b654141c315->leave($__internal_ede681fb42eaa55d24e875f5c08045275365468ed881875f0aa28b654141c315_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin:Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 35,  221 => 33,  218 => 32,  212 => 31,  200 => 66,  192 => 60,  184 => 55,  172 => 46,  162 => 41,  156 => 38,  152 => 37,  147 => 36,  144 => 31,  138 => 30,  128 => 68,  126 => 30,  121 => 27,  115 => 25,  112 => 24,  104 => 21,  101 => 20,  99 => 19,  95 => 18,  90 => 15,  84 => 14,  72 => 12,  61 => 9,  50 => 6,  39 => 3,  24 => 1,);
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
/*                 {% if 'single_image' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}*/
/*                     <div>*/
/*                         <img style="width:64px;" src="{{ asset(sonata_admin.adminPool.titlelogo) }}" alt="{{ sonata_admin.adminPool.title }}">*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}*/
/*                     <span>{{ sonata_admin.adminPool.title }}</span>*/
/*                 {% endif %}*/
/*             </a>*/
/*         </div>*/
/*         <div class="login-box-body">*/
/*             {% block sonata_user_login_form %}*/
/*                 {% block sonata_user_login_error %}*/
/*                     {% if error %}*/
/*                         <div class="alert alert-danger">{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/*                     {% endif %}*/
/*                 {% endblock %}*/
/*                 <p class="login-box-msg">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</p>*/
/*                 <form action="{{ path("sonata_user_admin_security_check") }}" method="post" role="form">*/
/*                     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}"/>*/
/* */
/*                     <div class="form-group has-feedback">*/
/*                         <input type="text" class="form-control" id="username"  name="_username" value="{{ last_username }}" required="required" placeholder="{{ 'security.login.username'|trans({}, 'SonataUserBundle') }}"/>*/
/*                         <span class="glyphicon glyphicon-user form-control-feedback"></span>*/
/*                     </div>*/
/* */
/*                     <div class="form-group has-feedback">*/
/*                         <input type="password" class="form-control" id="password" name="_password" required="required" placeholder="{{ 'security.login.password'|trans({}, 'SonataUserBundle') }}"/>*/
/*                         <span class="glyphicon glyphicon-lock form-control-feedback"></span>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="col-xs-8">*/
/*                             <div class="checkbox">*/
/*                                 <label>*/
/*                                     <input type="checkbox" id="remember_me" name="_remember_me" value="on"/>*/
/*                                     {{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}*/
/*                                 </label>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-xs-4">*/
/*                             <button type="submit" class="btn btn-primary btn-block btn-flat">{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}</button>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/* */
/*                 {#<a href="{{ path('sonata_user_admin_resetting_request') }}">{{ 'forgotten_password'|trans({}, 'SonataUserBundle') }}</a>#}*/
/*                 <a href="{{ reset_route }}">{{ 'forgotten_password'|trans({}, 'SonataUserBundle') }}</a>*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock sonata_wrapper %}*/
/* */
