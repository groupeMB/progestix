<?php

/* @SonataAdmin/empty_layout.html.twig */
class __TwigTemplate_325fe09efdc71dbebdabe59c8e69766da67104933326e4e8825bb0e6834902d9 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "@SonataAdmin/empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bef5c7e88ea3371b20d51ac81cae7d05f7664b43fad56d7fb1b4a404f70acca6 = $this->env->getExtension("native_profiler");
        $__internal_bef5c7e88ea3371b20d51ac81cae7d05f7664b43fad56d7fb1b4a404f70acca6->enter($__internal_bef5c7e88ea3371b20d51ac81cae7d05f7664b43fad56d7fb1b4a404f70acca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bef5c7e88ea3371b20d51ac81cae7d05f7664b43fad56d7fb1b4a404f70acca6->leave($__internal_bef5c7e88ea3371b20d51ac81cae7d05f7664b43fad56d7fb1b4a404f70acca6_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_b813dd55bdb3324ca0f062f463d7df41af89386ae18214b03d6034d3b372ebbf = $this->env->getExtension("native_profiler");
        $__internal_b813dd55bdb3324ca0f062f463d7df41af89386ae18214b03d6034d3b372ebbf->enter($__internal_b813dd55bdb3324ca0f062f463d7df41af89386ae18214b03d6034d3b372ebbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_b813dd55bdb3324ca0f062f463d7df41af89386ae18214b03d6034d3b372ebbf->leave($__internal_b813dd55bdb3324ca0f062f463d7df41af89386ae18214b03d6034d3b372ebbf_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_dcf626fc56ac937f24d5476b8c1e7810b845db033ed661521531ed4893856c35 = $this->env->getExtension("native_profiler");
        $__internal_dcf626fc56ac937f24d5476b8c1e7810b845db033ed661521531ed4893856c35->enter($__internal_dcf626fc56ac937f24d5476b8c1e7810b845db033ed661521531ed4893856c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_dcf626fc56ac937f24d5476b8c1e7810b845db033ed661521531ed4893856c35->leave($__internal_dcf626fc56ac937f24d5476b8c1e7810b845db033ed661521531ed4893856c35_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_5fe7821039b6a94822969b16d20324b411607747170252f6c6689b13734c9669 = $this->env->getExtension("native_profiler");
        $__internal_5fe7821039b6a94822969b16d20324b411607747170252f6c6689b13734c9669->enter($__internal_5fe7821039b6a94822969b16d20324b411607747170252f6c6689b13734c9669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_5fe7821039b6a94822969b16d20324b411607747170252f6c6689b13734c9669->leave($__internal_5fe7821039b6a94822969b16d20324b411607747170252f6c6689b13734c9669_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_933a6a359b96b448fd9c85776562bede0eb5f13b0583acd677973501ff998533 = $this->env->getExtension("native_profiler");
        $__internal_933a6a359b96b448fd9c85776562bede0eb5f13b0583acd677973501ff998533->enter($__internal_933a6a359b96b448fd9c85776562bede0eb5f13b0583acd677973501ff998533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_933a6a359b96b448fd9c85776562bede0eb5f13b0583acd677973501ff998533->leave($__internal_933a6a359b96b448fd9c85776562bede0eb5f13b0583acd677973501ff998533_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7c8fee0f6387eae04a674a1320639432abb02767ac10d74bc5b7e7ff08c8065c = $this->env->getExtension("native_profiler");
        $__internal_7c8fee0f6387eae04a674a1320639432abb02767ac10d74bc5b7e7ff08c8065c->enter($__internal_7c8fee0f6387eae04a674a1320639432abb02767ac10d74bc5b7e7ff08c8065c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7c8fee0f6387eae04a674a1320639432abb02767ac10d74bc5b7e7ff08c8065c->leave($__internal_7c8fee0f6387eae04a674a1320639432abb02767ac10d74bc5b7e7ff08c8065c_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_f29ac96630b5fca4906d52944654f4c5926bc25578a156c11ad9e6f5866ffb76 = $this->env->getExtension("native_profiler");
        $__internal_f29ac96630b5fca4906d52944654f4c5926bc25578a156c11ad9e6f5866ffb76->enter($__internal_f29ac96630b5fca4906d52944654f4c5926bc25578a156c11ad9e6f5866ffb76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_f29ac96630b5fca4906d52944654f4c5926bc25578a156c11ad9e6f5866ffb76->leave($__internal_f29ac96630b5fca4906d52944654f4c5926bc25578a156c11ad9e6f5866ffb76_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_b8e44a13c4eb221fd5f21a9deee350eb5e076755f7a2a57af04649dc72ac3896 = $this->env->getExtension("native_profiler");
        $__internal_b8e44a13c4eb221fd5f21a9deee350eb5e076755f7a2a57af04649dc72ac3896->enter($__internal_b8e44a13c4eb221fd5f21a9deee350eb5e076755f7a2a57af04649dc72ac3896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_b8e44a13c4eb221fd5f21a9deee350eb5e076755f7a2a57af04649dc72ac3896->leave($__internal_b8e44a13c4eb221fd5f21a9deee350eb5e076755f7a2a57af04649dc72ac3896_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/empty_layout.html.twig";
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
