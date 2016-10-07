<?php

/* SonataUserBundle:Profile:action.html.twig */
class __TwigTemplate_1445428bdd70266e41ce72cdb125bf8d792d47262b090ade257cd5b0b1262c71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_page_breadcrumb' => array($this, 'block_sonata_page_breadcrumb'),
            'sonata_profile_title' => array($this, 'block_sonata_profile_title'),
            'sonata_profile_menu' => array($this, 'block_sonata_profile_menu'),
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05a25643e97de05241e22dcd4c80c783a8a925150b778cff0ec5703cce1497be = $this->env->getExtension("native_profiler");
        $__internal_05a25643e97de05241e22dcd4c80c783a8a925150b778cff0ec5703cce1497be->enter($__internal_05a25643e97de05241e22dcd4c80c783a8a925150b778cff0ec5703cce1497be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Profile:action.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('sonata_page_breadcrumb', $context, $blocks);
        // line 20
        echo "
<h2>";
        // line 21
        $this->displayBlock('sonata_profile_title', $context, $blocks);
        echo "</h2>

<div class=\"sonata-user-show row row-fluid\">

    <div class=\"span2 col-lg-2\" style=\"padding: 8px 0;\">
        ";
        // line 26
        $this->displayBlock('sonata_profile_menu', $context, $blocks);
        // line 29
        echo "    </div>

    <div class=\"span10 col-lg-10\">
        ";
        // line 32
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataUserBundle:Profile:action.html.twig", 32)->display($context);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('sonata_profile_content', $context, $blocks);
        // line 35
        echo "    </div>

</div>
";
        
        $__internal_05a25643e97de05241e22dcd4c80c783a8a925150b778cff0ec5703cce1497be->leave($__internal_05a25643e97de05241e22dcd4c80c783a8a925150b778cff0ec5703cce1497be_prof);

    }

    // line 12
    public function block_sonata_page_breadcrumb($context, array $blocks = array())
    {
        $__internal_4066db402a8ebe9004624ac1d1505ce8ce23dc8a16e85fc8014063268ec08c45 = $this->env->getExtension("native_profiler");
        $__internal_4066db402a8ebe9004624ac1d1505ce8ce23dc8a16e85fc8014063268ec08c45->enter($__internal_4066db402a8ebe9004624ac1d1505ce8ce23dc8a16e85fc8014063268ec08c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_breadcrumb"));

        // line 13
        echo "    ";
        if ( !array_key_exists("breadcrumb_context", $context)) {
            // line 14
            echo "        ";
            $context["breadcrumb_context"] = "user_index";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div class=\"row-fluid clearfix\">
        ";
        // line 17
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("breadcrumb", array("context" => (isset($context["breadcrumb_context"]) ? $context["breadcrumb_context"] : $this->getContext($context, "breadcrumb_context")), "current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
    </div>
";
        
        $__internal_4066db402a8ebe9004624ac1d1505ce8ce23dc8a16e85fc8014063268ec08c45->leave($__internal_4066db402a8ebe9004624ac1d1505ce8ce23dc8a16e85fc8014063268ec08c45_prof);

    }

    // line 21
    public function block_sonata_profile_title($context, array $blocks = array())
    {
        $__internal_aa603433b950fc878eb39138ad4f00018da38defeb0dab257a54ae77184f2dd0 = $this->env->getExtension("native_profiler");
        $__internal_aa603433b950fc878eb39138ad4f00018da38defeb0dab257a54ae77184f2dd0->enter($__internal_aa603433b950fc878eb39138ad4f00018da38defeb0dab257a54ae77184f2dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_title"));

        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata_profile_title", array(), "SonataUserBundle");
        
        $__internal_aa603433b950fc878eb39138ad4f00018da38defeb0dab257a54ae77184f2dd0->leave($__internal_aa603433b950fc878eb39138ad4f00018da38defeb0dab257a54ae77184f2dd0_prof);

    }

    // line 26
    public function block_sonata_profile_menu($context, array $blocks = array())
    {
        $__internal_133c3cd6b48ace8346f2ba29466a09b6736284ed9cfff5aabaeee8021050c713 = $this->env->getExtension("native_profiler");
        $__internal_133c3cd6b48ace8346f2ba29466a09b6736284ed9cfff5aabaeee8021050c713->enter($__internal_133c3cd6b48ace8346f2ba29466a09b6736284ed9cfff5aabaeee8021050c713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_menu"));

        // line 27
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.user.block.menu"), array("current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
        ";
        
        $__internal_133c3cd6b48ace8346f2ba29466a09b6736284ed9cfff5aabaeee8021050c713->leave($__internal_133c3cd6b48ace8346f2ba29466a09b6736284ed9cfff5aabaeee8021050c713_prof);

    }

    // line 34
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_c3b975699aa6d4484f63f6e8a9f7c3d9ed410313e8095a3976fa8331185bcf8f = $this->env->getExtension("native_profiler");
        $__internal_c3b975699aa6d4484f63f6e8a9f7c3d9ed410313e8095a3976fa8331185bcf8f->enter($__internal_c3b975699aa6d4484f63f6e8a9f7c3d9ed410313e8095a3976fa8331185bcf8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

        echo "";
        
        $__internal_c3b975699aa6d4484f63f6e8a9f7c3d9ed410313e8095a3976fa8331185bcf8f->leave($__internal_c3b975699aa6d4484f63f6e8a9f7c3d9ed410313e8095a3976fa8331185bcf8f_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 34,  112 => 27,  106 => 26,  94 => 21,  84 => 17,  81 => 16,  78 => 15,  75 => 14,  72 => 13,  66 => 12,  56 => 35,  54 => 34,  51 => 33,  49 => 32,  44 => 29,  42 => 26,  34 => 21,  31 => 20,  29 => 12,  26 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% block sonata_page_breadcrumb %}*/
/*     {% if breadcrumb_context is not defined %}*/
/*         {% set breadcrumb_context = 'user_index' %}*/
/*     {% endif %}*/
/*     <div class="row-fluid clearfix">*/
/*         {{ sonata_block_render_event('breadcrumb', { 'context': breadcrumb_context, 'current_uri': app.request.requestUri }) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* <h2>{% block sonata_profile_title %}{% trans from 'SonataUserBundle' %}sonata_profile_title{% endtrans %}{% endblock %}</h2>*/
/* */
/* <div class="sonata-user-show row row-fluid">*/
/* */
/*     <div class="span2 col-lg-2" style="padding: 8px 0;">*/
/*         {% block sonata_profile_menu %}*/
/*             {{ sonata_block_render({'type': 'sonata.user.block.menu'}, {'current_uri': app.request.requestUri}) }}*/
/*         {% endblock %}*/
/*     </div>*/
/* */
/*     <div class="span10 col-lg-10">*/
/*         {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}*/
/* */
/*         {% block sonata_profile_content '' %}*/
/*     </div>*/
/* */
/* </div>*/
/* */
