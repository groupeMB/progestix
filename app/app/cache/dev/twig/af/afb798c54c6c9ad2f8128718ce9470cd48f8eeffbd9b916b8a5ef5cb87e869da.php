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
        $__internal_2f80cf23e38ed83776504d07c8ce6f66cb5e1b3e596440a641b9efcd93a3b893 = $this->env->getExtension("native_profiler");
        $__internal_2f80cf23e38ed83776504d07c8ce6f66cb5e1b3e596440a641b9efcd93a3b893->enter($__internal_2f80cf23e38ed83776504d07c8ce6f66cb5e1b3e596440a641b9efcd93a3b893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:request.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f80cf23e38ed83776504d07c8ce6f66cb5e1b3e596440a641b9efcd93a3b893->leave($__internal_2f80cf23e38ed83776504d07c8ce6f66cb5e1b3e596440a641b9efcd93a3b893_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_084861fb15c258129ffecafc8213b966f05d4a0c7e17bb7d776c19322fce3e36 = $this->env->getExtension("native_profiler");
        $__internal_084861fb15c258129ffecafc8213b966f05d4a0c7e17bb7d776c19322fce3e36->enter($__internal_084861fb15c258129ffecafc8213b966f05d4a0c7e17bb7d776c19322fce3e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_084861fb15c258129ffecafc8213b966f05d4a0c7e17bb7d776c19322fce3e36->leave($__internal_084861fb15c258129ffecafc8213b966f05d4a0c7e17bb7d776c19322fce3e36_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_38e0590b2cb172137ccd8e70467d4b99c849935ed57ff465eccd4ee1a2997819 = $this->env->getExtension("native_profiler");
        $__internal_38e0590b2cb172137ccd8e70467d4b99c849935ed57ff465eccd4ee1a2997819->enter($__internal_38e0590b2cb172137ccd8e70467d4b99c849935ed57ff465eccd4ee1a2997819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_38e0590b2cb172137ccd8e70467d4b99c849935ed57ff465eccd4ee1a2997819->leave($__internal_38e0590b2cb172137ccd8e70467d4b99c849935ed57ff465eccd4ee1a2997819_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_1107ea26378fee1376b5e6b8e6ceba84820f53b996fe1c6f0d13a139e5a1e0b3 = $this->env->getExtension("native_profiler");
        $__internal_1107ea26378fee1376b5e6b8e6ceba84820f53b996fe1c6f0d13a139e5a1e0b3->enter($__internal_1107ea26378fee1376b5e6b8e6ceba84820f53b996fe1c6f0d13a139e5a1e0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_1107ea26378fee1376b5e6b8e6ceba84820f53b996fe1c6f0d13a139e5a1e0b3->leave($__internal_1107ea26378fee1376b5e6b8e6ceba84820f53b996fe1c6f0d13a139e5a1e0b3_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_d2bb15e090869aea826b18d6fbd9f3ef6424cf46ced0a94581bc1f57c6bb6b6a = $this->env->getExtension("native_profiler");
        $__internal_d2bb15e090869aea826b18d6fbd9f3ef6424cf46ced0a94581bc1f57c6bb6b6a->enter($__internal_d2bb15e090869aea826b18d6fbd9f3ef6424cf46ced0a94581bc1f57c6bb6b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_d2bb15e090869aea826b18d6fbd9f3ef6424cf46ced0a94581bc1f57c6bb6b6a->leave($__internal_d2bb15e090869aea826b18d6fbd9f3ef6424cf46ced0a94581bc1f57c6bb6b6a_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_e5d528ab1ab4925dc7442b82f2df270c610ceba2b5c36bc5b02aa07a469b5c81 = $this->env->getExtension("native_profiler");
        $__internal_e5d528ab1ab4925dc7442b82f2df270c610ceba2b5c36bc5b02aa07a469b5c81->enter($__internal_e5d528ab1ab4925dc7442b82f2df270c610ceba2b5c36bc5b02aa07a469b5c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_e5d528ab1ab4925dc7442b82f2df270c610ceba2b5c36bc5b02aa07a469b5c81->leave($__internal_e5d528ab1ab4925dc7442b82f2df270c610ceba2b5c36bc5b02aa07a469b5c81_prof);

    }

    // line 25
    public function block_sonata_user_reset_request_form($context, array $blocks = array())
    {
        $__internal_e6b9dfe9393bc705ca1772119d8879f0dfb44992ad6eb271c503af45208e8b90 = $this->env->getExtension("native_profiler");
        $__internal_e6b9dfe9393bc705ca1772119d8879f0dfb44992ad6eb271c503af45208e8b90->enter($__internal_e6b9dfe9393bc705ca1772119d8879f0dfb44992ad6eb271c503af45208e8b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_request_form"));

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
        
        $__internal_e6b9dfe9393bc705ca1772119d8879f0dfb44992ad6eb271c503af45208e8b90->leave($__internal_e6b9dfe9393bc705ca1772119d8879f0dfb44992ad6eb271c503af45208e8b90_prof);

    }

    // line 26
    public function block_sonata_user_reset_request_error($context, array $blocks = array())
    {
        $__internal_42982bc3cade9ccf3bdb379fa705607d5ae98ecc488002c38cf378afb828ccc8 = $this->env->getExtension("native_profiler");
        $__internal_42982bc3cade9ccf3bdb379fa705607d5ae98ecc488002c38cf378afb828ccc8->enter($__internal_42982bc3cade9ccf3bdb379fa705607d5ae98ecc488002c38cf378afb828ccc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_request_error"));

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
        
        $__internal_42982bc3cade9ccf3bdb379fa705607d5ae98ecc488002c38cf378afb828ccc8->leave($__internal_42982bc3cade9ccf3bdb379fa705607d5ae98ecc488002c38cf378afb828ccc8_prof);

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
