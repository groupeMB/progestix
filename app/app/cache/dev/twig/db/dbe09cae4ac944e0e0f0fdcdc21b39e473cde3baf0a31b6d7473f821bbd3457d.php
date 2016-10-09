<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_1e9229bfeb07753f7334d944c743214f43692eb4ed129600590d71f3cef7d5e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7f87b4dbd9e47094f0436056a46fe4cf8d788553be71051080d22972df93e21 = $this->env->getExtension("native_profiler");
        $__internal_b7f87b4dbd9e47094f0436056a46fe4cf8d788553be71051080d22972df93e21->enter($__internal_b7f87b4dbd9e47094f0436056a46fe4cf8d788553be71051080d22972df93e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7f87b4dbd9e47094f0436056a46fe4cf8d788553be71051080d22972df93e21->leave($__internal_b7f87b4dbd9e47094f0436056a46fe4cf8d788553be71051080d22972df93e21_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_505f01f844d43763bc99cb055fe2cf2081bf83b2c0055e439ea0800656acccb9 = $this->env->getExtension("native_profiler");
        $__internal_505f01f844d43763bc99cb055fe2cf2081bf83b2c0055e439ea0800656acccb9->enter($__internal_505f01f844d43763bc99cb055fe2cf2081bf83b2c0055e439ea0800656acccb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_505f01f844d43763bc99cb055fe2cf2081bf83b2c0055e439ea0800656acccb9->leave($__internal_505f01f844d43763bc99cb055fe2cf2081bf83b2c0055e439ea0800656acccb9_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_766225fada96675e3b002692e9fbea44148de9434afb4a132f177772f0111781 = $this->env->getExtension("native_profiler");
        $__internal_766225fada96675e3b002692e9fbea44148de9434afb4a132f177772f0111781->enter($__internal_766225fada96675e3b002692e9fbea44148de9434afb4a132f177772f0111781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_766225fada96675e3b002692e9fbea44148de9434afb4a132f177772f0111781->leave($__internal_766225fada96675e3b002692e9fbea44148de9434afb4a132f177772f0111781_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_cf903734059e4a787e248c3848e14c5d9c9b8bc72bd05e74dbd5bd66ecba4050 = $this->env->getExtension("native_profiler");
        $__internal_cf903734059e4a787e248c3848e14c5d9c9b8bc72bd05e74dbd5bd66ecba4050->enter($__internal_cf903734059e4a787e248c3848e14c5d9c9b8bc72bd05e74dbd5bd66ecba4050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_cf903734059e4a787e248c3848e14c5d9c9b8bc72bd05e74dbd5bd66ecba4050->leave($__internal_cf903734059e4a787e248c3848e14c5d9c9b8bc72bd05e74dbd5bd66ecba4050_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_abacd88472bcba150f47622d93357acf64b2e2ac8bd891c5ee9b27762f4be3cb = $this->env->getExtension("native_profiler");
        $__internal_abacd88472bcba150f47622d93357acf64b2e2ac8bd891c5ee9b27762f4be3cb->enter($__internal_abacd88472bcba150f47622d93357acf64b2e2ac8bd891c5ee9b27762f4be3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_abacd88472bcba150f47622d93357acf64b2e2ac8bd891c5ee9b27762f4be3cb->leave($__internal_abacd88472bcba150f47622d93357acf64b2e2ac8bd891c5ee9b27762f4be3cb_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3f7c0341eea4caf5b297927c54d19f9dec0dc1cdc22fbc153d281b4f0ecb2227 = $this->env->getExtension("native_profiler");
        $__internal_3f7c0341eea4caf5b297927c54d19f9dec0dc1cdc22fbc153d281b4f0ecb2227->enter($__internal_3f7c0341eea4caf5b297927c54d19f9dec0dc1cdc22fbc153d281b4f0ecb2227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_3f7c0341eea4caf5b297927c54d19f9dec0dc1cdc22fbc153d281b4f0ecb2227->leave($__internal_3f7c0341eea4caf5b297927c54d19f9dec0dc1cdc22fbc153d281b4f0ecb2227_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_c75251413e8d54ac10fd1056f18440dd0709e54d3603b1b697b8320adf9392ee = $this->env->getExtension("native_profiler");
        $__internal_c75251413e8d54ac10fd1056f18440dd0709e54d3603b1b697b8320adf9392ee->enter($__internal_c75251413e8d54ac10fd1056f18440dd0709e54d3603b1b697b8320adf9392ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_c75251413e8d54ac10fd1056f18440dd0709e54d3603b1b697b8320adf9392ee->leave($__internal_c75251413e8d54ac10fd1056f18440dd0709e54d3603b1b697b8320adf9392ee_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_1176a72d399d86e7b38e144f528f8b9aa85f77ca7e1abfff7c4e4aff8291b266 = $this->env->getExtension("native_profiler");
        $__internal_1176a72d399d86e7b38e144f528f8b9aa85f77ca7e1abfff7c4e4aff8291b266->enter($__internal_1176a72d399d86e7b38e144f528f8b9aa85f77ca7e1abfff7c4e4aff8291b266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_1176a72d399d86e7b38e144f528f8b9aa85f77ca7e1abfff7c4e4aff8291b266->leave($__internal_1176a72d399d86e7b38e144f528f8b9aa85f77ca7e1abfff7c4e4aff8291b266_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  113 => 32,  107 => 31,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
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
/* {% extends admin_pool.getTemplate('layout') %}*/
/* */
/* {% block sonata_header %}{% endblock %}*/
/* {% block sonata_left_side %}{% endblock %}*/
/* {% block sonata_nav %}{% endblock %}*/
/* {% block sonata_breadcrumb %}{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* */
/*     <style>*/
/*         .content {*/
/*             margin: 0px;*/
/*             padding: 0px;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sonata_wrapper %}*/
/*     {% block sonata_page_content %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
