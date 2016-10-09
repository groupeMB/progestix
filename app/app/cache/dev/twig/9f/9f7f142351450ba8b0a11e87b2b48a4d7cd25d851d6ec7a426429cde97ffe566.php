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
        $__internal_3970989926807b7113d51a20ea5b1aa680e93cd0b98d238a2b3fe249fd9ebe4d = $this->env->getExtension("native_profiler");
        $__internal_3970989926807b7113d51a20ea5b1aa680e93cd0b98d238a2b3fe249fd9ebe4d->enter($__internal_3970989926807b7113d51a20ea5b1aa680e93cd0b98d238a2b3fe249fd9ebe4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin:Security/login.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3970989926807b7113d51a20ea5b1aa680e93cd0b98d238a2b3fe249fd9ebe4d->leave($__internal_3970989926807b7113d51a20ea5b1aa680e93cd0b98d238a2b3fe249fd9ebe4d_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_b0a337c3b661c6e6ca33a266bb2a22098464a5ccf32a8486e5c2b100745fa307 = $this->env->getExtension("native_profiler");
        $__internal_b0a337c3b661c6e6ca33a266bb2a22098464a5ccf32a8486e5c2b100745fa307->enter($__internal_b0a337c3b661c6e6ca33a266bb2a22098464a5ccf32a8486e5c2b100745fa307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_b0a337c3b661c6e6ca33a266bb2a22098464a5ccf32a8486e5c2b100745fa307->leave($__internal_b0a337c3b661c6e6ca33a266bb2a22098464a5ccf32a8486e5c2b100745fa307_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_747d8bd0f391a3e38505be5d35d4c22d0bbdd62a972aca628280cadc33331737 = $this->env->getExtension("native_profiler");
        $__internal_747d8bd0f391a3e38505be5d35d4c22d0bbdd62a972aca628280cadc33331737->enter($__internal_747d8bd0f391a3e38505be5d35d4c22d0bbdd62a972aca628280cadc33331737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_747d8bd0f391a3e38505be5d35d4c22d0bbdd62a972aca628280cadc33331737->leave($__internal_747d8bd0f391a3e38505be5d35d4c22d0bbdd62a972aca628280cadc33331737_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_a251a5b99baa89dcd72c11f3716bdfcf004a177486e15a1fea48a9428b6062b0 = $this->env->getExtension("native_profiler");
        $__internal_a251a5b99baa89dcd72c11f3716bdfcf004a177486e15a1fea48a9428b6062b0->enter($__internal_a251a5b99baa89dcd72c11f3716bdfcf004a177486e15a1fea48a9428b6062b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_a251a5b99baa89dcd72c11f3716bdfcf004a177486e15a1fea48a9428b6062b0->leave($__internal_a251a5b99baa89dcd72c11f3716bdfcf004a177486e15a1fea48a9428b6062b0_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_6bfa442183609321fbc09c61802a4aea30dc14a0c3624062c9ada601bda8b674 = $this->env->getExtension("native_profiler");
        $__internal_6bfa442183609321fbc09c61802a4aea30dc14a0c3624062c9ada601bda8b674->enter($__internal_6bfa442183609321fbc09c61802a4aea30dc14a0c3624062c9ada601bda8b674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_6bfa442183609321fbc09c61802a4aea30dc14a0c3624062c9ada601bda8b674->leave($__internal_6bfa442183609321fbc09c61802a4aea30dc14a0c3624062c9ada601bda8b674_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_3d7290ad7308ccb61055410a611feed0eb238afe1e0a4ac3409128c87246b30b = $this->env->getExtension("native_profiler");
        $__internal_3d7290ad7308ccb61055410a611feed0eb238afe1e0a4ac3409128c87246b30b->enter($__internal_3d7290ad7308ccb61055410a611feed0eb238afe1e0a4ac3409128c87246b30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_3d7290ad7308ccb61055410a611feed0eb238afe1e0a4ac3409128c87246b30b->leave($__internal_3d7290ad7308ccb61055410a611feed0eb238afe1e0a4ac3409128c87246b30b_prof);

    }

    // line 30
    public function block_sonata_user_login_form($context, array $blocks = array())
    {
        $__internal_062e45512b7d028b7faf585406e08d2ee26266d6096b78a824eab873e9c98c3d = $this->env->getExtension("native_profiler");
        $__internal_062e45512b7d028b7faf585406e08d2ee26266d6096b78a824eab873e9c98c3d->enter($__internal_062e45512b7d028b7faf585406e08d2ee26266d6096b78a824eab873e9c98c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_form"));

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
        
        $__internal_062e45512b7d028b7faf585406e08d2ee26266d6096b78a824eab873e9c98c3d->leave($__internal_062e45512b7d028b7faf585406e08d2ee26266d6096b78a824eab873e9c98c3d_prof);

    }

    // line 31
    public function block_sonata_user_login_error($context, array $blocks = array())
    {
        $__internal_7b98ae1737e6c68925f7c590e578964e5adf7dc0cfcd567fdc20033ff25f7300 = $this->env->getExtension("native_profiler");
        $__internal_7b98ae1737e6c68925f7c590e578964e5adf7dc0cfcd567fdc20033ff25f7300->enter($__internal_7b98ae1737e6c68925f7c590e578964e5adf7dc0cfcd567fdc20033ff25f7300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_error"));

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
        
        $__internal_7b98ae1737e6c68925f7c590e578964e5adf7dc0cfcd567fdc20033ff25f7300->leave($__internal_7b98ae1737e6c68925f7c590e578964e5adf7dc0cfcd567fdc20033ff25f7300_prof);

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
