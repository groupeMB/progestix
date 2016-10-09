<?php

/* SonataUserBundle:Admin/Security/Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_7b56e1443ce5519539ffcee9758a36a8c4abc258e31f733997e8c2acdc37c769 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataUserBundle:Admin/Security/Resetting:passwordAlreadyRequested.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d936399b4ce1ebc4b117fccb29e8a324a16b0ac6dec462dc85b18885dc58ce8d = $this->env->getExtension("native_profiler");
        $__internal_d936399b4ce1ebc4b117fccb29e8a324a16b0ac6dec462dc85b18885dc58ce8d->enter($__internal_d936399b4ce1ebc4b117fccb29e8a324a16b0ac6dec462dc85b18885dc58ce8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:passwordAlreadyRequested.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d936399b4ce1ebc4b117fccb29e8a324a16b0ac6dec462dc85b18885dc58ce8d->leave($__internal_d936399b4ce1ebc4b117fccb29e8a324a16b0ac6dec462dc85b18885dc58ce8d_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_605d304f339e30c461d48b715449c746f9c3d075b924f480bee95b9c5f6845ae = $this->env->getExtension("native_profiler");
        $__internal_605d304f339e30c461d48b715449c746f9c3d075b924f480bee95b9c5f6845ae->enter($__internal_605d304f339e30c461d48b715449c746f9c3d075b924f480bee95b9c5f6845ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_605d304f339e30c461d48b715449c746f9c3d075b924f480bee95b9c5f6845ae->leave($__internal_605d304f339e30c461d48b715449c746f9c3d075b924f480bee95b9c5f6845ae_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_c4066525288a89c5518f99dd82388889708dbbe9d15469a4a88516999d429a5a = $this->env->getExtension("native_profiler");
        $__internal_c4066525288a89c5518f99dd82388889708dbbe9d15469a4a88516999d429a5a->enter($__internal_c4066525288a89c5518f99dd82388889708dbbe9d15469a4a88516999d429a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_c4066525288a89c5518f99dd82388889708dbbe9d15469a4a88516999d429a5a->leave($__internal_c4066525288a89c5518f99dd82388889708dbbe9d15469a4a88516999d429a5a_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_5bc853d299fdad00a70ba3f30b135408146931b933763753dbbe4e7a7b1fc2e6 = $this->env->getExtension("native_profiler");
        $__internal_5bc853d299fdad00a70ba3f30b135408146931b933763753dbbe4e7a7b1fc2e6->enter($__internal_5bc853d299fdad00a70ba3f30b135408146931b933763753dbbe4e7a7b1fc2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_5bc853d299fdad00a70ba3f30b135408146931b933763753dbbe4e7a7b1fc2e6->leave($__internal_5bc853d299fdad00a70ba3f30b135408146931b933763753dbbe4e7a7b1fc2e6_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_80f17f1f2dde46fd2693e171fe6c1f02525e7976bcd077b11f038bb06e036649 = $this->env->getExtension("native_profiler");
        $__internal_80f17f1f2dde46fd2693e171fe6c1f02525e7976bcd077b11f038bb06e036649->enter($__internal_80f17f1f2dde46fd2693e171fe6c1f02525e7976bcd077b11f038bb06e036649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_80f17f1f2dde46fd2693e171fe6c1f02525e7976bcd077b11f038bb06e036649->leave($__internal_80f17f1f2dde46fd2693e171fe6c1f02525e7976bcd077b11f038bb06e036649_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_dd18a0147eee9d679ea7fcb45f82bd3d39c0c7422604da9ca9e3bb735f630aa6 = $this->env->getExtension("native_profiler");
        $__internal_dd18a0147eee9d679ea7fcb45f82bd3d39c0c7422604da9ca9e3bb735f630aa6->enter($__internal_dd18a0147eee9d679ea7fcb45f82bd3d39c0c7422604da9ca9e3bb735f630aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
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
        
        $__internal_dd18a0147eee9d679ea7fcb45f82bd3d39c0c7422604da9ca9e3bb735f630aa6->leave($__internal_dd18a0147eee9d679ea7fcb45f82bd3d39c0c7422604da9ca9e3bb735f630aa6_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security/Resetting:passwordAlreadyRequested.html.twig";
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
/*             <p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>*/
/*             <a href="{{ path('sonata_user_admin_security_login') }}">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</a>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock sonata_wrapper %}*/
/* */
