<?php

/* SonataUserBundle:Admin/Security/Resetting:reset.html.twig */
class __TwigTemplate_2d8678f5b7d6142945479447fbc67e5b95b45d2de0e86546c85121b76124098f extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataUserBundle:Admin/Security/Resetting:reset.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c849a0101276a35d384857f08d304aff8601958b52991eb223091677ee88a7ec = $this->env->getExtension("native_profiler");
        $__internal_c849a0101276a35d384857f08d304aff8601958b52991eb223091677ee88a7ec->enter($__internal_c849a0101276a35d384857f08d304aff8601958b52991eb223091677ee88a7ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:reset.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c849a0101276a35d384857f08d304aff8601958b52991eb223091677ee88a7ec->leave($__internal_c849a0101276a35d384857f08d304aff8601958b52991eb223091677ee88a7ec_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_3504730f936633da4545a3927b6d48f91480d6cba1dbd56f311f977d878c4f74 = $this->env->getExtension("native_profiler");
        $__internal_3504730f936633da4545a3927b6d48f91480d6cba1dbd56f311f977d878c4f74->enter($__internal_3504730f936633da4545a3927b6d48f91480d6cba1dbd56f311f977d878c4f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_3504730f936633da4545a3927b6d48f91480d6cba1dbd56f311f977d878c4f74->leave($__internal_3504730f936633da4545a3927b6d48f91480d6cba1dbd56f311f977d878c4f74_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_09f84eaea91cbf45073557f970b6921899bc012d246f0f5df8b559f9a0065bbb = $this->env->getExtension("native_profiler");
        $__internal_09f84eaea91cbf45073557f970b6921899bc012d246f0f5df8b559f9a0065bbb->enter($__internal_09f84eaea91cbf45073557f970b6921899bc012d246f0f5df8b559f9a0065bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_09f84eaea91cbf45073557f970b6921899bc012d246f0f5df8b559f9a0065bbb->leave($__internal_09f84eaea91cbf45073557f970b6921899bc012d246f0f5df8b559f9a0065bbb_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_62a4988211b015917e98f5791a2b1d2c1c44dc0688c850b5052549bcb7cd9c3c = $this->env->getExtension("native_profiler");
        $__internal_62a4988211b015917e98f5791a2b1d2c1c44dc0688c850b5052549bcb7cd9c3c->enter($__internal_62a4988211b015917e98f5791a2b1d2c1c44dc0688c850b5052549bcb7cd9c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_62a4988211b015917e98f5791a2b1d2c1c44dc0688c850b5052549bcb7cd9c3c->leave($__internal_62a4988211b015917e98f5791a2b1d2c1c44dc0688c850b5052549bcb7cd9c3c_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_2d457e4878ba638d2eeacbbc35de9698e93184e1522754e513b9f9c9934430b7 = $this->env->getExtension("native_profiler");
        $__internal_2d457e4878ba638d2eeacbbc35de9698e93184e1522754e513b9f9c9934430b7->enter($__internal_2d457e4878ba638d2eeacbbc35de9698e93184e1522754e513b9f9c9934430b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_2d457e4878ba638d2eeacbbc35de9698e93184e1522754e513b9f9c9934430b7->leave($__internal_2d457e4878ba638d2eeacbbc35de9698e93184e1522754e513b9f9c9934430b7_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_44455dba5e6f97c2e2c2fdd864709f965abbef73c81c12efdea0e3224afeb088 = $this->env->getExtension("native_profiler");
        $__internal_44455dba5e6f97c2e2c2fdd864709f965abbef73c81c12efdea0e3224afeb088->enter($__internal_44455dba5e6f97c2e2c2fdd864709f965abbef73c81c12efdea0e3224afeb088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_44455dba5e6f97c2e2c2fdd864709f965abbef73c81c12efdea0e3224afeb088->leave($__internal_44455dba5e6f97c2e2c2fdd864709f965abbef73c81c12efdea0e3224afeb088_prof);

    }

    // line 25
    public function block_sonata_user_reset_form($context, array $blocks = array())
    {
        $__internal_ba3e98a1d29df602e28483d211f2e34052f30f867a6a03ba4c70a982b97c8778 = $this->env->getExtension("native_profiler");
        $__internal_ba3e98a1d29df602e28483d211f2e34052f30f867a6a03ba4c70a982b97c8778->enter($__internal_ba3e98a1d29df602e28483d211f2e34052f30f867a6a03ba4c70a982b97c8778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_form"));

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
        
        $__internal_ba3e98a1d29df602e28483d211f2e34052f30f867a6a03ba4c70a982b97c8778->leave($__internal_ba3e98a1d29df602e28483d211f2e34052f30f867a6a03ba4c70a982b97c8778_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security/Resetting:reset.html.twig";
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
