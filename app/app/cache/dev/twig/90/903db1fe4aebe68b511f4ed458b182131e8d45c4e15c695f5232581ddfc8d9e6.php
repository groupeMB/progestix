<?php

/* SonataUserBundle:Admin/Security:login.html.twig */
class __TwigTemplate_108f7a8a5ce5981a5267e680e26883919d8d725d81ba0b0326f110d19d440331 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataUserBundle:Admin/Security:login.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2de0c3c3abdeeabb7ad008fec46d3c4b54e82109aa05761774a31eb3821ec823 = $this->env->getExtension("native_profiler");
        $__internal_2de0c3c3abdeeabb7ad008fec46d3c4b54e82109aa05761774a31eb3821ec823->enter($__internal_2de0c3c3abdeeabb7ad008fec46d3c4b54e82109aa05761774a31eb3821ec823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security:login.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2de0c3c3abdeeabb7ad008fec46d3c4b54e82109aa05761774a31eb3821ec823->leave($__internal_2de0c3c3abdeeabb7ad008fec46d3c4b54e82109aa05761774a31eb3821ec823_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_9360b099740cd3933cb80b2aa936d488a256a9fb80caf6a8e68f1f68e87cbf5f = $this->env->getExtension("native_profiler");
        $__internal_9360b099740cd3933cb80b2aa936d488a256a9fb80caf6a8e68f1f68e87cbf5f->enter($__internal_9360b099740cd3933cb80b2aa936d488a256a9fb80caf6a8e68f1f68e87cbf5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_9360b099740cd3933cb80b2aa936d488a256a9fb80caf6a8e68f1f68e87cbf5f->leave($__internal_9360b099740cd3933cb80b2aa936d488a256a9fb80caf6a8e68f1f68e87cbf5f_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_0553818ac5760e0258b61385098019ca153d211a040fa889fafa3859be4b7338 = $this->env->getExtension("native_profiler");
        $__internal_0553818ac5760e0258b61385098019ca153d211a040fa889fafa3859be4b7338->enter($__internal_0553818ac5760e0258b61385098019ca153d211a040fa889fafa3859be4b7338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_0553818ac5760e0258b61385098019ca153d211a040fa889fafa3859be4b7338->leave($__internal_0553818ac5760e0258b61385098019ca153d211a040fa889fafa3859be4b7338_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_ff531ea1fd34d2bf9cffa85126ddf44a0680b3aaa26c44e52b2782a898045c3c = $this->env->getExtension("native_profiler");
        $__internal_ff531ea1fd34d2bf9cffa85126ddf44a0680b3aaa26c44e52b2782a898045c3c->enter($__internal_ff531ea1fd34d2bf9cffa85126ddf44a0680b3aaa26c44e52b2782a898045c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_ff531ea1fd34d2bf9cffa85126ddf44a0680b3aaa26c44e52b2782a898045c3c->leave($__internal_ff531ea1fd34d2bf9cffa85126ddf44a0680b3aaa26c44e52b2782a898045c3c_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_187dcce5c4e9625b6cda92bdc2e6a2738703e3cb267b043c8d62cea85e59ea46 = $this->env->getExtension("native_profiler");
        $__internal_187dcce5c4e9625b6cda92bdc2e6a2738703e3cb267b043c8d62cea85e59ea46->enter($__internal_187dcce5c4e9625b6cda92bdc2e6a2738703e3cb267b043c8d62cea85e59ea46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_187dcce5c4e9625b6cda92bdc2e6a2738703e3cb267b043c8d62cea85e59ea46->leave($__internal_187dcce5c4e9625b6cda92bdc2e6a2738703e3cb267b043c8d62cea85e59ea46_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_42ba0f8920a22fa29fc2436ae2d3d41cff1fe5575081eb9eb10ef0b09e0e29a6 = $this->env->getExtension("native_profiler");
        $__internal_42ba0f8920a22fa29fc2436ae2d3d41cff1fe5575081eb9eb10ef0b09e0e29a6->enter($__internal_42ba0f8920a22fa29fc2436ae2d3d41cff1fe5575081eb9eb10ef0b09e0e29a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_42ba0f8920a22fa29fc2436ae2d3d41cff1fe5575081eb9eb10ef0b09e0e29a6->leave($__internal_42ba0f8920a22fa29fc2436ae2d3d41cff1fe5575081eb9eb10ef0b09e0e29a6_prof);

    }

    // line 30
    public function block_sonata_user_login_form($context, array $blocks = array())
    {
        $__internal_67ffc62efc004c65dfd8a1f6e22f461d5d650f894d2395a263f05ca47b374022 = $this->env->getExtension("native_profiler");
        $__internal_67ffc62efc004c65dfd8a1f6e22f461d5d650f894d2395a263f05ca47b374022->enter($__internal_67ffc62efc004c65dfd8a1f6e22f461d5d650f894d2395a263f05ca47b374022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_form"));

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
        
        $__internal_67ffc62efc004c65dfd8a1f6e22f461d5d650f894d2395a263f05ca47b374022->leave($__internal_67ffc62efc004c65dfd8a1f6e22f461d5d650f894d2395a263f05ca47b374022_prof);

    }

    // line 31
    public function block_sonata_user_login_error($context, array $blocks = array())
    {
        $__internal_f28dc2010c627aeed35cc71c03e585c5bd45d91f93dced8527380785f4341458 = $this->env->getExtension("native_profiler");
        $__internal_f28dc2010c627aeed35cc71c03e585c5bd45d91f93dced8527380785f4341458->enter($__internal_f28dc2010c627aeed35cc71c03e585c5bd45d91f93dced8527380785f4341458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_error"));

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
        
        $__internal_f28dc2010c627aeed35cc71c03e585c5bd45d91f93dced8527380785f4341458->leave($__internal_f28dc2010c627aeed35cc71c03e585c5bd45d91f93dced8527380785f4341458_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security:login.html.twig";
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
