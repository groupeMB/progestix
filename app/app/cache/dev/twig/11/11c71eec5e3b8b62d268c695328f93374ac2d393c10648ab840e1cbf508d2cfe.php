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
        $__internal_bb16c27b3ec8bb23c9750be5c8b808e0c5616fa5448a9ce5422b8be9c43eb789 = $this->env->getExtension("native_profiler");
        $__internal_bb16c27b3ec8bb23c9750be5c8b808e0c5616fa5448a9ce5422b8be9c43eb789->enter($__internal_bb16c27b3ec8bb23c9750be5c8b808e0c5616fa5448a9ce5422b8be9c43eb789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb16c27b3ec8bb23c9750be5c8b808e0c5616fa5448a9ce5422b8be9c43eb789->leave($__internal_bb16c27b3ec8bb23c9750be5c8b808e0c5616fa5448a9ce5422b8be9c43eb789_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_85bf50700ae39f98814f4ba432a1aa04787d61c5d75bb8edffb3d6f638d65360 = $this->env->getExtension("native_profiler");
        $__internal_85bf50700ae39f98814f4ba432a1aa04787d61c5d75bb8edffb3d6f638d65360->enter($__internal_85bf50700ae39f98814f4ba432a1aa04787d61c5d75bb8edffb3d6f638d65360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_85bf50700ae39f98814f4ba432a1aa04787d61c5d75bb8edffb3d6f638d65360->leave($__internal_85bf50700ae39f98814f4ba432a1aa04787d61c5d75bb8edffb3d6f638d65360_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_e0999aaa7bd538e7e81fd7c38c5af4cc7ec027adf17ea5e20b745fdcadea64ed = $this->env->getExtension("native_profiler");
        $__internal_e0999aaa7bd538e7e81fd7c38c5af4cc7ec027adf17ea5e20b745fdcadea64ed->enter($__internal_e0999aaa7bd538e7e81fd7c38c5af4cc7ec027adf17ea5e20b745fdcadea64ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_e0999aaa7bd538e7e81fd7c38c5af4cc7ec027adf17ea5e20b745fdcadea64ed->leave($__internal_e0999aaa7bd538e7e81fd7c38c5af4cc7ec027adf17ea5e20b745fdcadea64ed_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_54150457cee3c0dd80e8005b0d58b48a79c93fda9f4c47bb57c254905a291c71 = $this->env->getExtension("native_profiler");
        $__internal_54150457cee3c0dd80e8005b0d58b48a79c93fda9f4c47bb57c254905a291c71->enter($__internal_54150457cee3c0dd80e8005b0d58b48a79c93fda9f4c47bb57c254905a291c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_54150457cee3c0dd80e8005b0d58b48a79c93fda9f4c47bb57c254905a291c71->leave($__internal_54150457cee3c0dd80e8005b0d58b48a79c93fda9f4c47bb57c254905a291c71_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_4db08b9b1880c059c95a92a7dc8902331f35e52ee3253110695230fbfd26765b = $this->env->getExtension("native_profiler");
        $__internal_4db08b9b1880c059c95a92a7dc8902331f35e52ee3253110695230fbfd26765b->enter($__internal_4db08b9b1880c059c95a92a7dc8902331f35e52ee3253110695230fbfd26765b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_4db08b9b1880c059c95a92a7dc8902331f35e52ee3253110695230fbfd26765b->leave($__internal_4db08b9b1880c059c95a92a7dc8902331f35e52ee3253110695230fbfd26765b_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_49076e7458dfd957a024a77c1d2a49f48cf9caaa91cbfc694306e364b06089dc = $this->env->getExtension("native_profiler");
        $__internal_49076e7458dfd957a024a77c1d2a49f48cf9caaa91cbfc694306e364b06089dc->enter($__internal_49076e7458dfd957a024a77c1d2a49f48cf9caaa91cbfc694306e364b06089dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_49076e7458dfd957a024a77c1d2a49f48cf9caaa91cbfc694306e364b06089dc->leave($__internal_49076e7458dfd957a024a77c1d2a49f48cf9caaa91cbfc694306e364b06089dc_prof);

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
