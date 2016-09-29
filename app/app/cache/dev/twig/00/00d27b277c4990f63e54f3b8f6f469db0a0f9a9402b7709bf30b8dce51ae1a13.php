<?php

/* @SonataUser/Admin/Security/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_690675be4789b7c8e0883bf00dd259cb40c04b2ed958fc9a42d9fa2dbcc2e077 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataUser/Admin/Security/Resetting/passwordAlreadyRequested.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_778574ba9b5588f567d6037ec2887cc178dac1e6b34a9bcb08bcf971b42f846a = $this->env->getExtension("native_profiler");
        $__internal_778574ba9b5588f567d6037ec2887cc178dac1e6b34a9bcb08bcf971b42f846a->enter($__internal_778574ba9b5588f567d6037ec2887cc178dac1e6b34a9bcb08bcf971b42f846a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Security/Resetting/passwordAlreadyRequested.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_778574ba9b5588f567d6037ec2887cc178dac1e6b34a9bcb08bcf971b42f846a->leave($__internal_778574ba9b5588f567d6037ec2887cc178dac1e6b34a9bcb08bcf971b42f846a_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_f9cebf46a608db38dd5551a237194a32aecf7f058750b47cbcc090c32a0c302c = $this->env->getExtension("native_profiler");
        $__internal_f9cebf46a608db38dd5551a237194a32aecf7f058750b47cbcc090c32a0c302c->enter($__internal_f9cebf46a608db38dd5551a237194a32aecf7f058750b47cbcc090c32a0c302c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_f9cebf46a608db38dd5551a237194a32aecf7f058750b47cbcc090c32a0c302c->leave($__internal_f9cebf46a608db38dd5551a237194a32aecf7f058750b47cbcc090c32a0c302c_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_1a737dfdc5778e1c90984a803da5b3136f502f0c3dcbcc9cccc03357f8ea11c2 = $this->env->getExtension("native_profiler");
        $__internal_1a737dfdc5778e1c90984a803da5b3136f502f0c3dcbcc9cccc03357f8ea11c2->enter($__internal_1a737dfdc5778e1c90984a803da5b3136f502f0c3dcbcc9cccc03357f8ea11c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_1a737dfdc5778e1c90984a803da5b3136f502f0c3dcbcc9cccc03357f8ea11c2->leave($__internal_1a737dfdc5778e1c90984a803da5b3136f502f0c3dcbcc9cccc03357f8ea11c2_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_d3b81f8caab1fa5ea6c2b837361f633b55744e25dbb632f1c062a8f73fd55915 = $this->env->getExtension("native_profiler");
        $__internal_d3b81f8caab1fa5ea6c2b837361f633b55744e25dbb632f1c062a8f73fd55915->enter($__internal_d3b81f8caab1fa5ea6c2b837361f633b55744e25dbb632f1c062a8f73fd55915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_d3b81f8caab1fa5ea6c2b837361f633b55744e25dbb632f1c062a8f73fd55915->leave($__internal_d3b81f8caab1fa5ea6c2b837361f633b55744e25dbb632f1c062a8f73fd55915_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_2494ace4e9d37e968655ab278ecb441ee9d35d5c7b2aa1ab13c093a7d5252a48 = $this->env->getExtension("native_profiler");
        $__internal_2494ace4e9d37e968655ab278ecb441ee9d35d5c7b2aa1ab13c093a7d5252a48->enter($__internal_2494ace4e9d37e968655ab278ecb441ee9d35d5c7b2aa1ab13c093a7d5252a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_2494ace4e9d37e968655ab278ecb441ee9d35d5c7b2aa1ab13c093a7d5252a48->leave($__internal_2494ace4e9d37e968655ab278ecb441ee9d35d5c7b2aa1ab13c093a7d5252a48_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_2405e781beffd93456dc551f3ddb533ec8b3dda111ef1a984b38f3f53fbb117a = $this->env->getExtension("native_profiler");
        $__internal_2405e781beffd93456dc551f3ddb533ec8b3dda111ef1a984b38f3f53fbb117a->enter($__internal_2405e781beffd93456dc551f3ddb533ec8b3dda111ef1a984b38f3f53fbb117a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_2405e781beffd93456dc551f3ddb533ec8b3dda111ef1a984b38f3f53fbb117a->leave($__internal_2405e781beffd93456dc551f3ddb533ec8b3dda111ef1a984b38f3f53fbb117a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Admin/Security/Resetting/passwordAlreadyRequested.html.twig";
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
