<?php

/* @SonataUser/Admin/Security/Resetting/checkEmail.html.twig */
class __TwigTemplate_2820eba9490976e9b2f6ab5f375ac70d4a7703fa0e42e2940fdb9e6c890668b5 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataUser/Admin/Security/Resetting/checkEmail.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f41ae2843cf9ef9329a2370113a8bcaa6f1e7186ce783be752a1f2eb4db16ba = $this->env->getExtension("native_profiler");
        $__internal_5f41ae2843cf9ef9329a2370113a8bcaa6f1e7186ce783be752a1f2eb4db16ba->enter($__internal_5f41ae2843cf9ef9329a2370113a8bcaa6f1e7186ce783be752a1f2eb4db16ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Security/Resetting/checkEmail.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f41ae2843cf9ef9329a2370113a8bcaa6f1e7186ce783be752a1f2eb4db16ba->leave($__internal_5f41ae2843cf9ef9329a2370113a8bcaa6f1e7186ce783be752a1f2eb4db16ba_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_e2658f3e9bfc9509d6726a28c28b6d78c966861906ba7b2abf71e7eb6a368ebf = $this->env->getExtension("native_profiler");
        $__internal_e2658f3e9bfc9509d6726a28c28b6d78c966861906ba7b2abf71e7eb6a368ebf->enter($__internal_e2658f3e9bfc9509d6726a28c28b6d78c966861906ba7b2abf71e7eb6a368ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_e2658f3e9bfc9509d6726a28c28b6d78c966861906ba7b2abf71e7eb6a368ebf->leave($__internal_e2658f3e9bfc9509d6726a28c28b6d78c966861906ba7b2abf71e7eb6a368ebf_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_a2992c0d937839825a524c0bd867dcfe53468c1180c13889d50b76ab6a162f33 = $this->env->getExtension("native_profiler");
        $__internal_a2992c0d937839825a524c0bd867dcfe53468c1180c13889d50b76ab6a162f33->enter($__internal_a2992c0d937839825a524c0bd867dcfe53468c1180c13889d50b76ab6a162f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_a2992c0d937839825a524c0bd867dcfe53468c1180c13889d50b76ab6a162f33->leave($__internal_a2992c0d937839825a524c0bd867dcfe53468c1180c13889d50b76ab6a162f33_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_dfb95728dde9cb5f488867b0a790e9ace0f54e0a979630827304fa796fb90cea = $this->env->getExtension("native_profiler");
        $__internal_dfb95728dde9cb5f488867b0a790e9ace0f54e0a979630827304fa796fb90cea->enter($__internal_dfb95728dde9cb5f488867b0a790e9ace0f54e0a979630827304fa796fb90cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_dfb95728dde9cb5f488867b0a790e9ace0f54e0a979630827304fa796fb90cea->leave($__internal_dfb95728dde9cb5f488867b0a790e9ace0f54e0a979630827304fa796fb90cea_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_d4184a9f5fbd919ddd8d81d3c4377b7790151bce39c253a3482d63ebff1fff67 = $this->env->getExtension("native_profiler");
        $__internal_d4184a9f5fbd919ddd8d81d3c4377b7790151bce39c253a3482d63ebff1fff67->enter($__internal_d4184a9f5fbd919ddd8d81d3c4377b7790151bce39c253a3482d63ebff1fff67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_d4184a9f5fbd919ddd8d81d3c4377b7790151bce39c253a3482d63ebff1fff67->leave($__internal_d4184a9f5fbd919ddd8d81d3c4377b7790151bce39c253a3482d63ebff1fff67_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_8a2c1447d922891cffd0dff4dd9b13c87d5b3cedff24c765b5a18186090cef6c = $this->env->getExtension("native_profiler");
        $__internal_8a2c1447d922891cffd0dff4dd9b13c87d5b3cedff24c765b5a18186090cef6c->enter($__internal_8a2c1447d922891cffd0dff4dd9b13c87d5b3cedff24c765b5a18186090cef6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_8a2c1447d922891cffd0dff4dd9b13c87d5b3cedff24c765b5a18186090cef6c->leave($__internal_8a2c1447d922891cffd0dff4dd9b13c87d5b3cedff24c765b5a18186090cef6c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Admin/Security/Resetting/checkEmail.html.twig";
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
