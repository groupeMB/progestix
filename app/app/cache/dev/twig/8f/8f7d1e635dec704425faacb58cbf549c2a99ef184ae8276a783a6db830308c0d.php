<?php

/* SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig */
class __TwigTemplate_5255215114e5e82e138f04016d9a34f3773e1039a9afc7b1f38b9d24c25bccbd extends Twig_Template
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
        $__internal_e86cd2a195c942e54758bf47242136862e47a7caff92c805944ff2d0eb956f58 = $this->env->getExtension("native_profiler");
        $__internal_e86cd2a195c942e54758bf47242136862e47a7caff92c805944ff2d0eb956f58->enter($__internal_e86cd2a195c942e54758bf47242136862e47a7caff92c805944ff2d0eb956f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e86cd2a195c942e54758bf47242136862e47a7caff92c805944ff2d0eb956f58->leave($__internal_e86cd2a195c942e54758bf47242136862e47a7caff92c805944ff2d0eb956f58_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_b2bebc2705a327285e61d003544e258c870486ce5604a076a0220fb30bc828e9 = $this->env->getExtension("native_profiler");
        $__internal_b2bebc2705a327285e61d003544e258c870486ce5604a076a0220fb30bc828e9->enter($__internal_b2bebc2705a327285e61d003544e258c870486ce5604a076a0220fb30bc828e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_b2bebc2705a327285e61d003544e258c870486ce5604a076a0220fb30bc828e9->leave($__internal_b2bebc2705a327285e61d003544e258c870486ce5604a076a0220fb30bc828e9_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_533bbc0cc23d35c48d9208a4411dea6b1bba0135ac25ec92291511272ad00058 = $this->env->getExtension("native_profiler");
        $__internal_533bbc0cc23d35c48d9208a4411dea6b1bba0135ac25ec92291511272ad00058->enter($__internal_533bbc0cc23d35c48d9208a4411dea6b1bba0135ac25ec92291511272ad00058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_533bbc0cc23d35c48d9208a4411dea6b1bba0135ac25ec92291511272ad00058->leave($__internal_533bbc0cc23d35c48d9208a4411dea6b1bba0135ac25ec92291511272ad00058_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_183f0eadb3d300a751aa941a2ccb855032c0ba5e75d656f905f3a5797481ce88 = $this->env->getExtension("native_profiler");
        $__internal_183f0eadb3d300a751aa941a2ccb855032c0ba5e75d656f905f3a5797481ce88->enter($__internal_183f0eadb3d300a751aa941a2ccb855032c0ba5e75d656f905f3a5797481ce88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_183f0eadb3d300a751aa941a2ccb855032c0ba5e75d656f905f3a5797481ce88->leave($__internal_183f0eadb3d300a751aa941a2ccb855032c0ba5e75d656f905f3a5797481ce88_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_1ed5e9dc25a32254ad5722d71ca091d6937ea633bfd7bae5037db63f6b36d610 = $this->env->getExtension("native_profiler");
        $__internal_1ed5e9dc25a32254ad5722d71ca091d6937ea633bfd7bae5037db63f6b36d610->enter($__internal_1ed5e9dc25a32254ad5722d71ca091d6937ea633bfd7bae5037db63f6b36d610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_1ed5e9dc25a32254ad5722d71ca091d6937ea633bfd7bae5037db63f6b36d610->leave($__internal_1ed5e9dc25a32254ad5722d71ca091d6937ea633bfd7bae5037db63f6b36d610_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_0d562995be7502878909d8c445b4297b547f0392c657efea90f39ec88148af4d = $this->env->getExtension("native_profiler");
        $__internal_0d562995be7502878909d8c445b4297b547f0392c657efea90f39ec88148af4d->enter($__internal_0d562995be7502878909d8c445b4297b547f0392c657efea90f39ec88148af4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_0d562995be7502878909d8c445b4297b547f0392c657efea90f39ec88148af4d->leave($__internal_0d562995be7502878909d8c445b4297b547f0392c657efea90f39ec88148af4d_prof);

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
