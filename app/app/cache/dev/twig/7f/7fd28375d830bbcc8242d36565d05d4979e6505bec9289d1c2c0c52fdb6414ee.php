<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_35b6d7e43f8277a00817943f94bbc7d1576eae441d43d8c64f58fc857e973100 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataUserBundle:Profile:action.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4883130177b48a9708576185c70bda054f5563e43cebd9c326ae6d4595339084 = $this->env->getExtension("native_profiler");
        $__internal_4883130177b48a9708576185c70bda054f5563e43cebd9c326ae6d4595339084->enter($__internal_4883130177b48a9708576185c70bda054f5563e43cebd9c326ae6d4595339084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4883130177b48a9708576185c70bda054f5563e43cebd9c326ae6d4595339084->leave($__internal_4883130177b48a9708576185c70bda054f5563e43cebd9c326ae6d4595339084_prof);

    }

    // line 3
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_4515f449ad34c62fcf66b71885bb02636785dbf3c0e3335aada9c2e9eaaa5439 = $this->env->getExtension("native_profiler");
        $__internal_4515f449ad34c62fcf66b71885bb02636785dbf3c0e3335aada9c2e9eaaa5439->enter($__internal_4515f449ad34c62fcf66b71885bb02636785dbf3c0e3335aada9c2e9eaaa5439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_edit_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 11
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 14
        echo "        </div>
    </div>
";
        
        $__internal_4515f449ad34c62fcf66b71885bb02636785dbf3c0e3335aada9c2e9eaaa5439->leave($__internal_4515f449ad34c62fcf66b71885bb02636785dbf3c0e3335aada9c2e9eaaa5439_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab9e16322dfb64d6e998d183a057b3af39bdc476d58a8d1eb9344cd01d2d59de = $this->env->getExtension("native_profiler");
        $__internal_ab9e16322dfb64d6e998d183a057b3af39bdc476d58a8d1eb9344cd01d2d59de->enter($__internal_ab9e16322dfb64d6e998d183a057b3af39bdc476d58a8d1eb9344cd01d2d59de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "                ";
        $this->loadTemplate("SonataUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 12)->display($context);
        // line 13
        echo "            ";
        
        $__internal_ab9e16322dfb64d6e998d183a057b3af39bdc476d58a8d1eb9344cd01d2d59de->leave($__internal_ab9e16322dfb64d6e998d183a057b3af39bdc476d58a8d1eb9344cd01d2d59de_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 13,  72 => 12,  66 => 11,  57 => 14,  55 => 11,  49 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "SonataUserBundle:Profile:action.html.twig" %}*/
/* */
/* {% block sonata_profile_content %}*/
/*     {{ form_errors(form) }}*/
/* */
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             <h3 class="panel-title">{{ "title_user_edit_password" | trans({}, 'SonataUserBundle') }}</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             {% block fos_user_content %}*/
/*                 {% include "SonataUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock sonata_profile_content %}*/
/* */
