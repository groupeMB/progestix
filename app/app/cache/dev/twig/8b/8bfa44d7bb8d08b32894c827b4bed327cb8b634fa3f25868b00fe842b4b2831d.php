<?php

/* SonataUserBundle:Admin/Security/Resetting:request.html.twig */
class __TwigTemplate_a93bafe44a934b2a394fb917a9f648e31d38f5c7aa24e2d7afe1cd431a4b6822 extends Twig_Template
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
        $__internal_2c5ad15a8aa0532d58321af9c20b99db1efda50bceacac785a61c2bae616b589 = $this->env->getExtension("native_profiler");
        $__internal_2c5ad15a8aa0532d58321af9c20b99db1efda50bceacac785a61c2bae616b589->enter($__internal_2c5ad15a8aa0532d58321af9c20b99db1efda50bceacac785a61c2bae616b589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:request.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c5ad15a8aa0532d58321af9c20b99db1efda50bceacac785a61c2bae616b589->leave($__internal_2c5ad15a8aa0532d58321af9c20b99db1efda50bceacac785a61c2bae616b589_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_c7a218d98a51d5e634471947e034cd245b9da4090f4f52d9a36b9b56a8289836 = $this->env->getExtension("native_profiler");
        $__internal_c7a218d98a51d5e634471947e034cd245b9da4090f4f52d9a36b9b56a8289836->enter($__internal_c7a218d98a51d5e634471947e034cd245b9da4090f4f52d9a36b9b56a8289836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_c7a218d98a51d5e634471947e034cd245b9da4090f4f52d9a36b9b56a8289836->leave($__internal_c7a218d98a51d5e634471947e034cd245b9da4090f4f52d9a36b9b56a8289836_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_2b91ddbadb79304f150421da96cf3f55fd64174429071d8c3c565f2cd9d8bc21 = $this->env->getExtension("native_profiler");
        $__internal_2b91ddbadb79304f150421da96cf3f55fd64174429071d8c3c565f2cd9d8bc21->enter($__internal_2b91ddbadb79304f150421da96cf3f55fd64174429071d8c3c565f2cd9d8bc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_2b91ddbadb79304f150421da96cf3f55fd64174429071d8c3c565f2cd9d8bc21->leave($__internal_2b91ddbadb79304f150421da96cf3f55fd64174429071d8c3c565f2cd9d8bc21_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_f07c3d0f54613a8bbecc3cbc1a73eecaa4e100105c3c8d476a9a8a81e344b582 = $this->env->getExtension("native_profiler");
        $__internal_f07c3d0f54613a8bbecc3cbc1a73eecaa4e100105c3c8d476a9a8a81e344b582->enter($__internal_f07c3d0f54613a8bbecc3cbc1a73eecaa4e100105c3c8d476a9a8a81e344b582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_f07c3d0f54613a8bbecc3cbc1a73eecaa4e100105c3c8d476a9a8a81e344b582->leave($__internal_f07c3d0f54613a8bbecc3cbc1a73eecaa4e100105c3c8d476a9a8a81e344b582_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_56d81b34a81b2b88f165bd5be914a7225833801e3304c469bdb9083f51063ef3 = $this->env->getExtension("native_profiler");
        $__internal_56d81b34a81b2b88f165bd5be914a7225833801e3304c469bdb9083f51063ef3->enter($__internal_56d81b34a81b2b88f165bd5be914a7225833801e3304c469bdb9083f51063ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_56d81b34a81b2b88f165bd5be914a7225833801e3304c469bdb9083f51063ef3->leave($__internal_56d81b34a81b2b88f165bd5be914a7225833801e3304c469bdb9083f51063ef3_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_2b0ac6ca9889e3a92d753f28d7e49fdf55d90885ccd588e9dcd7366f16b06dc4 = $this->env->getExtension("native_profiler");
        $__internal_2b0ac6ca9889e3a92d753f28d7e49fdf55d90885ccd588e9dcd7366f16b06dc4->enter($__internal_2b0ac6ca9889e3a92d753f28d7e49fdf55d90885ccd588e9dcd7366f16b06dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_2b0ac6ca9889e3a92d753f28d7e49fdf55d90885ccd588e9dcd7366f16b06dc4->leave($__internal_2b0ac6ca9889e3a92d753f28d7e49fdf55d90885ccd588e9dcd7366f16b06dc4_prof);

    }

    // line 25
    public function block_sonata_user_reset_request_form($context, array $blocks = array())
    {
        $__internal_d229f20f735e3dd66b926b9cc7325a681223d15ca5f37898238452c8df68a90a = $this->env->getExtension("native_profiler");
        $__internal_d229f20f735e3dd66b926b9cc7325a681223d15ca5f37898238452c8df68a90a->enter($__internal_d229f20f735e3dd66b926b9cc7325a681223d15ca5f37898238452c8df68a90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_request_form"));

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
        
        $__internal_d229f20f735e3dd66b926b9cc7325a681223d15ca5f37898238452c8df68a90a->leave($__internal_d229f20f735e3dd66b926b9cc7325a681223d15ca5f37898238452c8df68a90a_prof);

    }

    // line 26
    public function block_sonata_user_reset_request_error($context, array $blocks = array())
    {
        $__internal_6e82768d5052990d8df1b878016b73eca484095d22f63e65cb5d950aa1f2e688 = $this->env->getExtension("native_profiler");
        $__internal_6e82768d5052990d8df1b878016b73eca484095d22f63e65cb5d950aa1f2e688->enter($__internal_6e82768d5052990d8df1b878016b73eca484095d22f63e65cb5d950aa1f2e688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_request_error"));

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
        
        $__internal_6e82768d5052990d8df1b878016b73eca484095d22f63e65cb5d950aa1f2e688->leave($__internal_6e82768d5052990d8df1b878016b73eca484095d22f63e65cb5d950aa1f2e688_prof);

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
