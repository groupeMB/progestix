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
        $__internal_50b14cdf445e10ffadcbdcc713148b0b44a44ab3de5529d998238d0dffa7ac72 = $this->env->getExtension("native_profiler");
        $__internal_50b14cdf445e10ffadcbdcc713148b0b44a44ab3de5529d998238d0dffa7ac72->enter($__internal_50b14cdf445e10ffadcbdcc713148b0b44a44ab3de5529d998238d0dffa7ac72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Profile:action.html.twig"));

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
        
        $__internal_50b14cdf445e10ffadcbdcc713148b0b44a44ab3de5529d998238d0dffa7ac72->leave($__internal_50b14cdf445e10ffadcbdcc713148b0b44a44ab3de5529d998238d0dffa7ac72_prof);

    }

    // line 12
    public function block_sonata_page_breadcrumb($context, array $blocks = array())
    {
        $__internal_a76714a984602ac4ab125fd7fec49263fcee06c1aacef6f34ac0f93933df042d = $this->env->getExtension("native_profiler");
        $__internal_a76714a984602ac4ab125fd7fec49263fcee06c1aacef6f34ac0f93933df042d->enter($__internal_a76714a984602ac4ab125fd7fec49263fcee06c1aacef6f34ac0f93933df042d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_breadcrumb"));

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
        
        $__internal_a76714a984602ac4ab125fd7fec49263fcee06c1aacef6f34ac0f93933df042d->leave($__internal_a76714a984602ac4ab125fd7fec49263fcee06c1aacef6f34ac0f93933df042d_prof);

    }

    // line 21
    public function block_sonata_profile_title($context, array $blocks = array())
    {
        $__internal_12c868a18cfd0c473fc8648b7ee49e317063517bb73ed0fea3db92326b6ce850 = $this->env->getExtension("native_profiler");
        $__internal_12c868a18cfd0c473fc8648b7ee49e317063517bb73ed0fea3db92326b6ce850->enter($__internal_12c868a18cfd0c473fc8648b7ee49e317063517bb73ed0fea3db92326b6ce850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_title"));

        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata_profile_title", array(), "SonataUserBundle");
        
        $__internal_12c868a18cfd0c473fc8648b7ee49e317063517bb73ed0fea3db92326b6ce850->leave($__internal_12c868a18cfd0c473fc8648b7ee49e317063517bb73ed0fea3db92326b6ce850_prof);

    }

    // line 26
    public function block_sonata_profile_menu($context, array $blocks = array())
    {
        $__internal_a2e9fd7bcf7f20b14c568b31b5e3b30d3324a16e730da1da77e8d3cdc6cfa84b = $this->env->getExtension("native_profiler");
        $__internal_a2e9fd7bcf7f20b14c568b31b5e3b30d3324a16e730da1da77e8d3cdc6cfa84b->enter($__internal_a2e9fd7bcf7f20b14c568b31b5e3b30d3324a16e730da1da77e8d3cdc6cfa84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_menu"));

        // line 27
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.user.block.menu"), array("current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
        ";
        
        $__internal_a2e9fd7bcf7f20b14c568b31b5e3b30d3324a16e730da1da77e8d3cdc6cfa84b->leave($__internal_a2e9fd7bcf7f20b14c568b31b5e3b30d3324a16e730da1da77e8d3cdc6cfa84b_prof);

    }

    // line 34
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_88699fa58aa190220e60d27d1ebbecd2e0412cbb26258a0f0f69f0d36b24d958 = $this->env->getExtension("native_profiler");
        $__internal_88699fa58aa190220e60d27d1ebbecd2e0412cbb26258a0f0f69f0d36b24d958->enter($__internal_88699fa58aa190220e60d27d1ebbecd2e0412cbb26258a0f0f69f0d36b24d958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

        echo "";
        
        $__internal_88699fa58aa190220e60d27d1ebbecd2e0412cbb26258a0f0f69f0d36b24d958->leave($__internal_88699fa58aa190220e60d27d1ebbecd2e0412cbb26258a0f0f69f0d36b24d958_prof);

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
