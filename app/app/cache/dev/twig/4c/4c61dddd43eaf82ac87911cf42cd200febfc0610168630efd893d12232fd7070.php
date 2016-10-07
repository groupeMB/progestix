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
        $__internal_b91aab8fb0e4a7ab82792ed5ace81e2a32f2fe725904874b959609b8bf12335a = $this->env->getExtension("native_profiler");
        $__internal_b91aab8fb0e4a7ab82792ed5ace81e2a32f2fe725904874b959609b8bf12335a->enter($__internal_b91aab8fb0e4a7ab82792ed5ace81e2a32f2fe725904874b959609b8bf12335a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:reset.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b91aab8fb0e4a7ab82792ed5ace81e2a32f2fe725904874b959609b8bf12335a->leave($__internal_b91aab8fb0e4a7ab82792ed5ace81e2a32f2fe725904874b959609b8bf12335a_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_e287202776fe4957416e35157fbb5ebf33f72de813e89b04b3be1148358f807b = $this->env->getExtension("native_profiler");
        $__internal_e287202776fe4957416e35157fbb5ebf33f72de813e89b04b3be1148358f807b->enter($__internal_e287202776fe4957416e35157fbb5ebf33f72de813e89b04b3be1148358f807b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_e287202776fe4957416e35157fbb5ebf33f72de813e89b04b3be1148358f807b->leave($__internal_e287202776fe4957416e35157fbb5ebf33f72de813e89b04b3be1148358f807b_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_7baedaa3709fb01894e22f6c8d5fc4223260789e8506228236bcbf47d357925e = $this->env->getExtension("native_profiler");
        $__internal_7baedaa3709fb01894e22f6c8d5fc4223260789e8506228236bcbf47d357925e->enter($__internal_7baedaa3709fb01894e22f6c8d5fc4223260789e8506228236bcbf47d357925e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_7baedaa3709fb01894e22f6c8d5fc4223260789e8506228236bcbf47d357925e->leave($__internal_7baedaa3709fb01894e22f6c8d5fc4223260789e8506228236bcbf47d357925e_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_680a354adfcf0241a69f2f08fc68e3f86346c3d1f02c28205fb6c53b09ca4530 = $this->env->getExtension("native_profiler");
        $__internal_680a354adfcf0241a69f2f08fc68e3f86346c3d1f02c28205fb6c53b09ca4530->enter($__internal_680a354adfcf0241a69f2f08fc68e3f86346c3d1f02c28205fb6c53b09ca4530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_680a354adfcf0241a69f2f08fc68e3f86346c3d1f02c28205fb6c53b09ca4530->leave($__internal_680a354adfcf0241a69f2f08fc68e3f86346c3d1f02c28205fb6c53b09ca4530_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_80c65136287f0b7c33ddcd657d4d4f4389f62e068255057eda8c411a42d91017 = $this->env->getExtension("native_profiler");
        $__internal_80c65136287f0b7c33ddcd657d4d4f4389f62e068255057eda8c411a42d91017->enter($__internal_80c65136287f0b7c33ddcd657d4d4f4389f62e068255057eda8c411a42d91017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_80c65136287f0b7c33ddcd657d4d4f4389f62e068255057eda8c411a42d91017->leave($__internal_80c65136287f0b7c33ddcd657d4d4f4389f62e068255057eda8c411a42d91017_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_092503c6a827b0ce4c5e5d870091a72262b76b86e1279cf7358617845c40b2f4 = $this->env->getExtension("native_profiler");
        $__internal_092503c6a827b0ce4c5e5d870091a72262b76b86e1279cf7358617845c40b2f4->enter($__internal_092503c6a827b0ce4c5e5d870091a72262b76b86e1279cf7358617845c40b2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_092503c6a827b0ce4c5e5d870091a72262b76b86e1279cf7358617845c40b2f4->leave($__internal_092503c6a827b0ce4c5e5d870091a72262b76b86e1279cf7358617845c40b2f4_prof);

    }

    // line 25
    public function block_sonata_user_reset_form($context, array $blocks = array())
    {
        $__internal_be126497f6402b0d990958f950014b04d5308d090b7394f6271060c038228110 = $this->env->getExtension("native_profiler");
        $__internal_be126497f6402b0d990958f950014b04d5308d090b7394f6271060c038228110->enter($__internal_be126497f6402b0d990958f950014b04d5308d090b7394f6271060c038228110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_form"));

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
        
        $__internal_be126497f6402b0d990958f950014b04d5308d090b7394f6271060c038228110->leave($__internal_be126497f6402b0d990958f950014b04d5308d090b7394f6271060c038228110_prof);

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
