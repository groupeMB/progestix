<?php

/* SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig */
class __TwigTemplate_bd837d2e264749f5b7d272f1725283e62ca2bdc16e5d08062841282d900467d0 extends Twig_Template
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
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9e49717ff001b24ba857487175400280ca154ff8a012866891c0965d4bbba83 = $this->env->getExtension("native_profiler");
        $__internal_b9e49717ff001b24ba857487175400280ca154ff8a012866891c0965d4bbba83->enter($__internal_b9e49717ff001b24ba857487175400280ca154ff8a012866891c0965d4bbba83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9e49717ff001b24ba857487175400280ca154ff8a012866891c0965d4bbba83->leave($__internal_b9e49717ff001b24ba857487175400280ca154ff8a012866891c0965d4bbba83_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_04737ae154ec624334d69d9df2dadaf686dc8d746f37fb6027ec414567999abf = $this->env->getExtension("native_profiler");
        $__internal_04737ae154ec624334d69d9df2dadaf686dc8d746f37fb6027ec414567999abf->enter($__internal_04737ae154ec624334d69d9df2dadaf686dc8d746f37fb6027ec414567999abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_04737ae154ec624334d69d9df2dadaf686dc8d746f37fb6027ec414567999abf->leave($__internal_04737ae154ec624334d69d9df2dadaf686dc8d746f37fb6027ec414567999abf_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_739a81de144d9403a91e516284f43afe5561b4755ba62532a3cf34cfbccec055 = $this->env->getExtension("native_profiler");
        $__internal_739a81de144d9403a91e516284f43afe5561b4755ba62532a3cf34cfbccec055->enter($__internal_739a81de144d9403a91e516284f43afe5561b4755ba62532a3cf34cfbccec055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_739a81de144d9403a91e516284f43afe5561b4755ba62532a3cf34cfbccec055->leave($__internal_739a81de144d9403a91e516284f43afe5561b4755ba62532a3cf34cfbccec055_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_ab570960cfb8bbe0af57108b52fe7696e6e68f4093ba03acadb51dcb1102ac56 = $this->env->getExtension("native_profiler");
        $__internal_ab570960cfb8bbe0af57108b52fe7696e6e68f4093ba03acadb51dcb1102ac56->enter($__internal_ab570960cfb8bbe0af57108b52fe7696e6e68f4093ba03acadb51dcb1102ac56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_ab570960cfb8bbe0af57108b52fe7696e6e68f4093ba03acadb51dcb1102ac56->leave($__internal_ab570960cfb8bbe0af57108b52fe7696e6e68f4093ba03acadb51dcb1102ac56_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_8dd8376624f862e4a3a51ed4a49edf4b16b1d3181e5ae2e4f4e047c17f00fb44 = $this->env->getExtension("native_profiler");
        $__internal_8dd8376624f862e4a3a51ed4a49edf4b16b1d3181e5ae2e4f4e047c17f00fb44->enter($__internal_8dd8376624f862e4a3a51ed4a49edf4b16b1d3181e5ae2e4f4e047c17f00fb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_8dd8376624f862e4a3a51ed4a49edf4b16b1d3181e5ae2e4f4e047c17f00fb44->leave($__internal_8dd8376624f862e4a3a51ed4a49edf4b16b1d3181e5ae2e4f4e047c17f00fb44_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_844da3bf0760f09b5aadba0d76b16e5a4385e16b73ef08600c63a1b3e69ce32a = $this->env->getExtension("native_profiler");
        $__internal_844da3bf0760f09b5aadba0d76b16e5a4385e16b73ef08600c63a1b3e69ce32a->enter($__internal_844da3bf0760f09b5aadba0d76b16e5a4385e16b73ef08600c63a1b3e69ce32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
            <p>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "</p>
            <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("sonata_user_admin_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
        </div>
    </div>

";
        
        $__internal_844da3bf0760f09b5aadba0d76b16e5a4385e16b73ef08600c63a1b3e69ce32a->leave($__internal_844da3bf0760f09b5aadba0d76b16e5a4385e16b73ef08600c63a1b3e69ce32a_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 26,  110 => 25,  105 => 22,  99 => 20,  97 => 19,  93 => 18,  88 => 15,  82 => 14,  70 => 12,  59 => 9,  48 => 6,  37 => 3,  22 => 1,);
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
/*             <p>{{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}</p>*/
/*             <a href="{{ path('sonata_user_admin_security_login') }}">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</a>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock sonata_wrapper %}*/
/* */
