<?php

/* SonataUserBundle:Admin/Security/Resetting:reset.html.twig */
class __TwigTemplate_58ef243d3c53d213c33b17a67c8a40496a336396e640954ecaf8008fde2e50bb extends Twig_Template
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
        $__internal_5244f569804900739aac8efae5f5d17c9193979ce5046542a90e889fbd9188ec = $this->env->getExtension("native_profiler");
        $__internal_5244f569804900739aac8efae5f5d17c9193979ce5046542a90e889fbd9188ec->enter($__internal_5244f569804900739aac8efae5f5d17c9193979ce5046542a90e889fbd9188ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:reset.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5244f569804900739aac8efae5f5d17c9193979ce5046542a90e889fbd9188ec->leave($__internal_5244f569804900739aac8efae5f5d17c9193979ce5046542a90e889fbd9188ec_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_372b797cfb7a53c1a494cc68d023290d1f0abe00e81065c077ab6a8ca7657495 = $this->env->getExtension("native_profiler");
        $__internal_372b797cfb7a53c1a494cc68d023290d1f0abe00e81065c077ab6a8ca7657495->enter($__internal_372b797cfb7a53c1a494cc68d023290d1f0abe00e81065c077ab6a8ca7657495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_372b797cfb7a53c1a494cc68d023290d1f0abe00e81065c077ab6a8ca7657495->leave($__internal_372b797cfb7a53c1a494cc68d023290d1f0abe00e81065c077ab6a8ca7657495_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_01682447e6731282710ac46d11d1b6a8534e453ae682acbc9155a5e0a6c990f2 = $this->env->getExtension("native_profiler");
        $__internal_01682447e6731282710ac46d11d1b6a8534e453ae682acbc9155a5e0a6c990f2->enter($__internal_01682447e6731282710ac46d11d1b6a8534e453ae682acbc9155a5e0a6c990f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_01682447e6731282710ac46d11d1b6a8534e453ae682acbc9155a5e0a6c990f2->leave($__internal_01682447e6731282710ac46d11d1b6a8534e453ae682acbc9155a5e0a6c990f2_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_59ea03e15fffbcd88c37edab5a673f5e5cbdcaecbfd55bd3f67d40a8ebaa6f49 = $this->env->getExtension("native_profiler");
        $__internal_59ea03e15fffbcd88c37edab5a673f5e5cbdcaecbfd55bd3f67d40a8ebaa6f49->enter($__internal_59ea03e15fffbcd88c37edab5a673f5e5cbdcaecbfd55bd3f67d40a8ebaa6f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_59ea03e15fffbcd88c37edab5a673f5e5cbdcaecbfd55bd3f67d40a8ebaa6f49->leave($__internal_59ea03e15fffbcd88c37edab5a673f5e5cbdcaecbfd55bd3f67d40a8ebaa6f49_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_aacf44cc371bb8317c5f002731a033b80d00d6c2a8d4b2a338097e0342a7f2b6 = $this->env->getExtension("native_profiler");
        $__internal_aacf44cc371bb8317c5f002731a033b80d00d6c2a8d4b2a338097e0342a7f2b6->enter($__internal_aacf44cc371bb8317c5f002731a033b80d00d6c2a8d4b2a338097e0342a7f2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_aacf44cc371bb8317c5f002731a033b80d00d6c2a8d4b2a338097e0342a7f2b6->leave($__internal_aacf44cc371bb8317c5f002731a033b80d00d6c2a8d4b2a338097e0342a7f2b6_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_28b20728b8420709a9f11eaf95f7bded398977d6aeb507703d0a2740896653c1 = $this->env->getExtension("native_profiler");
        $__internal_28b20728b8420709a9f11eaf95f7bded398977d6aeb507703d0a2740896653c1->enter($__internal_28b20728b8420709a9f11eaf95f7bded398977d6aeb507703d0a2740896653c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_28b20728b8420709a9f11eaf95f7bded398977d6aeb507703d0a2740896653c1->leave($__internal_28b20728b8420709a9f11eaf95f7bded398977d6aeb507703d0a2740896653c1_prof);

    }

    // line 25
    public function block_sonata_user_reset_form($context, array $blocks = array())
    {
        $__internal_b5c6bcbe2e6b7c463478a0e12eac69cdbf6e208ef6ef8a9d10e035c75798668d = $this->env->getExtension("native_profiler");
        $__internal_b5c6bcbe2e6b7c463478a0e12eac69cdbf6e208ef6ef8a9d10e035c75798668d->enter($__internal_b5c6bcbe2e6b7c463478a0e12eac69cdbf6e208ef6ef8a9d10e035c75798668d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_form"));

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
        
        $__internal_b5c6bcbe2e6b7c463478a0e12eac69cdbf6e208ef6ef8a9d10e035c75798668d->leave($__internal_b5c6bcbe2e6b7c463478a0e12eac69cdbf6e208ef6ef8a9d10e035c75798668d_prof);

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
