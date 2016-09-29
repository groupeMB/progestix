<?php

/* @SonataUser/Profile/action.html.twig */
class __TwigTemplate_60c5242fd93b3d8d87829d5915e3aaa515c38e5123955235074d37f9ae1496c8 extends Twig_Template
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
        $__internal_74afc10f05c0b85024d2c6d40e2c036ed5d695ad6d217bf15640eacb77790dad = $this->env->getExtension("native_profiler");
        $__internal_74afc10f05c0b85024d2c6d40e2c036ed5d695ad6d217bf15640eacb77790dad->enter($__internal_74afc10f05c0b85024d2c6d40e2c036ed5d695ad6d217bf15640eacb77790dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Profile/action.html.twig"));

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
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "@SonataUser/Profile/action.html.twig", 32)->display($context);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('sonata_profile_content', $context, $blocks);
        // line 35
        echo "    </div>

</div>
";
        
        $__internal_74afc10f05c0b85024d2c6d40e2c036ed5d695ad6d217bf15640eacb77790dad->leave($__internal_74afc10f05c0b85024d2c6d40e2c036ed5d695ad6d217bf15640eacb77790dad_prof);

    }

    // line 12
    public function block_sonata_page_breadcrumb($context, array $blocks = array())
    {
        $__internal_2f7074fa0ee6aaa7acc102c61cee2c38f3026dbe0fec75e6e1de49758f152547 = $this->env->getExtension("native_profiler");
        $__internal_2f7074fa0ee6aaa7acc102c61cee2c38f3026dbe0fec75e6e1de49758f152547->enter($__internal_2f7074fa0ee6aaa7acc102c61cee2c38f3026dbe0fec75e6e1de49758f152547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_breadcrumb"));

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
        
        $__internal_2f7074fa0ee6aaa7acc102c61cee2c38f3026dbe0fec75e6e1de49758f152547->leave($__internal_2f7074fa0ee6aaa7acc102c61cee2c38f3026dbe0fec75e6e1de49758f152547_prof);

    }

    // line 21
    public function block_sonata_profile_title($context, array $blocks = array())
    {
        $__internal_3a1b420c4a265ffabdb8e172cf7c903938f8a4df6b86742f19a48c01e49e91e5 = $this->env->getExtension("native_profiler");
        $__internal_3a1b420c4a265ffabdb8e172cf7c903938f8a4df6b86742f19a48c01e49e91e5->enter($__internal_3a1b420c4a265ffabdb8e172cf7c903938f8a4df6b86742f19a48c01e49e91e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_title"));

        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata_profile_title", array(), "SonataUserBundle");
        
        $__internal_3a1b420c4a265ffabdb8e172cf7c903938f8a4df6b86742f19a48c01e49e91e5->leave($__internal_3a1b420c4a265ffabdb8e172cf7c903938f8a4df6b86742f19a48c01e49e91e5_prof);

    }

    // line 26
    public function block_sonata_profile_menu($context, array $blocks = array())
    {
        $__internal_3c1492cfba47621e3349303eeaa89bd10ff0c6dfe36fccfa06113a1e2497aa19 = $this->env->getExtension("native_profiler");
        $__internal_3c1492cfba47621e3349303eeaa89bd10ff0c6dfe36fccfa06113a1e2497aa19->enter($__internal_3c1492cfba47621e3349303eeaa89bd10ff0c6dfe36fccfa06113a1e2497aa19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_menu"));

        // line 27
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.user.block.menu"), array("current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
        ";
        
        $__internal_3c1492cfba47621e3349303eeaa89bd10ff0c6dfe36fccfa06113a1e2497aa19->leave($__internal_3c1492cfba47621e3349303eeaa89bd10ff0c6dfe36fccfa06113a1e2497aa19_prof);

    }

    // line 34
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_787ce0ca3d5902758a8871804fb6d677186aba024bf656e64b15e7c5e3ee7776 = $this->env->getExtension("native_profiler");
        $__internal_787ce0ca3d5902758a8871804fb6d677186aba024bf656e64b15e7c5e3ee7776->enter($__internal_787ce0ca3d5902758a8871804fb6d677186aba024bf656e64b15e7c5e3ee7776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

        echo "";
        
        $__internal_787ce0ca3d5902758a8871804fb6d677186aba024bf656e64b15e7c5e3ee7776->leave($__internal_787ce0ca3d5902758a8871804fb6d677186aba024bf656e64b15e7c5e3ee7776_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Profile/action.html.twig";
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
