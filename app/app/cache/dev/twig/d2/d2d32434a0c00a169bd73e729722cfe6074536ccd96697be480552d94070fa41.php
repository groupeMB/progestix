<?php

/* SonataUserBundle:Profile:action.html.twig */
class __TwigTemplate_52c597e02bee8153b265099ed30e8d699500292b1bd12c68394156174b7572e2 extends Twig_Template
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
        $__internal_adcbeaa3c2b3d45924e8e331a4c84266a5982c22d11897ccdaef966658760aae = $this->env->getExtension("native_profiler");
        $__internal_adcbeaa3c2b3d45924e8e331a4c84266a5982c22d11897ccdaef966658760aae->enter($__internal_adcbeaa3c2b3d45924e8e331a4c84266a5982c22d11897ccdaef966658760aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Profile:action.html.twig"));

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
        
        $__internal_adcbeaa3c2b3d45924e8e331a4c84266a5982c22d11897ccdaef966658760aae->leave($__internal_adcbeaa3c2b3d45924e8e331a4c84266a5982c22d11897ccdaef966658760aae_prof);

    }

    // line 12
    public function block_sonata_page_breadcrumb($context, array $blocks = array())
    {
        $__internal_50906ab7df71c3d7c8d8d9d09af9a9b529a7c727c01b27b668070c9a995e9e45 = $this->env->getExtension("native_profiler");
        $__internal_50906ab7df71c3d7c8d8d9d09af9a9b529a7c727c01b27b668070c9a995e9e45->enter($__internal_50906ab7df71c3d7c8d8d9d09af9a9b529a7c727c01b27b668070c9a995e9e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_breadcrumb"));

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
        
        $__internal_50906ab7df71c3d7c8d8d9d09af9a9b529a7c727c01b27b668070c9a995e9e45->leave($__internal_50906ab7df71c3d7c8d8d9d09af9a9b529a7c727c01b27b668070c9a995e9e45_prof);

    }

    // line 21
    public function block_sonata_profile_title($context, array $blocks = array())
    {
        $__internal_4f78136791d073e43379ac19253b2177e55789ad2eba1717d951f7df1333c518 = $this->env->getExtension("native_profiler");
        $__internal_4f78136791d073e43379ac19253b2177e55789ad2eba1717d951f7df1333c518->enter($__internal_4f78136791d073e43379ac19253b2177e55789ad2eba1717d951f7df1333c518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_title"));

        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata_profile_title", array(), "SonataUserBundle");
        
        $__internal_4f78136791d073e43379ac19253b2177e55789ad2eba1717d951f7df1333c518->leave($__internal_4f78136791d073e43379ac19253b2177e55789ad2eba1717d951f7df1333c518_prof);

    }

    // line 26
    public function block_sonata_profile_menu($context, array $blocks = array())
    {
        $__internal_e0e48f1d42b40a0d3762e47b23a2f85812a78bde020f3d213d8db4b5341f634d = $this->env->getExtension("native_profiler");
        $__internal_e0e48f1d42b40a0d3762e47b23a2f85812a78bde020f3d213d8db4b5341f634d->enter($__internal_e0e48f1d42b40a0d3762e47b23a2f85812a78bde020f3d213d8db4b5341f634d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_menu"));

        // line 27
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.user.block.menu"), array("current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
        ";
        
        $__internal_e0e48f1d42b40a0d3762e47b23a2f85812a78bde020f3d213d8db4b5341f634d->leave($__internal_e0e48f1d42b40a0d3762e47b23a2f85812a78bde020f3d213d8db4b5341f634d_prof);

    }

    // line 34
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_2507c9002136caddfa5c4932e299ad33fa487451d39a96cbfbbcbaa90959e65d = $this->env->getExtension("native_profiler");
        $__internal_2507c9002136caddfa5c4932e299ad33fa487451d39a96cbfbbcbaa90959e65d->enter($__internal_2507c9002136caddfa5c4932e299ad33fa487451d39a96cbfbbcbaa90959e65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

        echo "";
        
        $__internal_2507c9002136caddfa5c4932e299ad33fa487451d39a96cbfbbcbaa90959e65d->leave($__internal_2507c9002136caddfa5c4932e299ad33fa487451d39a96cbfbbcbaa90959e65d_prof);

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
