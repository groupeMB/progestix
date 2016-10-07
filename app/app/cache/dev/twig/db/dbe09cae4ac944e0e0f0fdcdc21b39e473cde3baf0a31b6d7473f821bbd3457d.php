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
        $__internal_d7c11386c617b1d08967463defbac731357922c3dda2037f5fbd0bc789df5069 = $this->env->getExtension("native_profiler");
        $__internal_d7c11386c617b1d08967463defbac731357922c3dda2037f5fbd0bc789df5069->enter($__internal_d7c11386c617b1d08967463defbac731357922c3dda2037f5fbd0bc789df5069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7c11386c617b1d08967463defbac731357922c3dda2037f5fbd0bc789df5069->leave($__internal_d7c11386c617b1d08967463defbac731357922c3dda2037f5fbd0bc789df5069_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_81678639789514219f21fd64749d4a7ec606850f736ab6d7697a33b199a744ad = $this->env->getExtension("native_profiler");
        $__internal_81678639789514219f21fd64749d4a7ec606850f736ab6d7697a33b199a744ad->enter($__internal_81678639789514219f21fd64749d4a7ec606850f736ab6d7697a33b199a744ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_81678639789514219f21fd64749d4a7ec606850f736ab6d7697a33b199a744ad->leave($__internal_81678639789514219f21fd64749d4a7ec606850f736ab6d7697a33b199a744ad_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_8cbaa98c17d107684a761fcc8309fa20496d7c44ee2f1b8163feaacb9f825ade = $this->env->getExtension("native_profiler");
        $__internal_8cbaa98c17d107684a761fcc8309fa20496d7c44ee2f1b8163feaacb9f825ade->enter($__internal_8cbaa98c17d107684a761fcc8309fa20496d7c44ee2f1b8163feaacb9f825ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_8cbaa98c17d107684a761fcc8309fa20496d7c44ee2f1b8163feaacb9f825ade->leave($__internal_8cbaa98c17d107684a761fcc8309fa20496d7c44ee2f1b8163feaacb9f825ade_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_949afa43a3f1829624ba47ee47d39d0e183d4e1870e131b0c280cb0ab1c70b08 = $this->env->getExtension("native_profiler");
        $__internal_949afa43a3f1829624ba47ee47d39d0e183d4e1870e131b0c280cb0ab1c70b08->enter($__internal_949afa43a3f1829624ba47ee47d39d0e183d4e1870e131b0c280cb0ab1c70b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_949afa43a3f1829624ba47ee47d39d0e183d4e1870e131b0c280cb0ab1c70b08->leave($__internal_949afa43a3f1829624ba47ee47d39d0e183d4e1870e131b0c280cb0ab1c70b08_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_f280adf266fd53ab87ffc36241b3e72192e02a77b5143def62f982a857891830 = $this->env->getExtension("native_profiler");
        $__internal_f280adf266fd53ab87ffc36241b3e72192e02a77b5143def62f982a857891830->enter($__internal_f280adf266fd53ab87ffc36241b3e72192e02a77b5143def62f982a857891830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_f280adf266fd53ab87ffc36241b3e72192e02a77b5143def62f982a857891830->leave($__internal_f280adf266fd53ab87ffc36241b3e72192e02a77b5143def62f982a857891830_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ab5988a6a1ba2719e81fb6baedbec61c7e987c2e982d21639d62045a7a073a00 = $this->env->getExtension("native_profiler");
        $__internal_ab5988a6a1ba2719e81fb6baedbec61c7e987c2e982d21639d62045a7a073a00->enter($__internal_ab5988a6a1ba2719e81fb6baedbec61c7e987c2e982d21639d62045a7a073a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ab5988a6a1ba2719e81fb6baedbec61c7e987c2e982d21639d62045a7a073a00->leave($__internal_ab5988a6a1ba2719e81fb6baedbec61c7e987c2e982d21639d62045a7a073a00_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_e88c839fa2a695dfd8f132cb6e9ec8031a99c2e962e0245bb149ff1ed585b326 = $this->env->getExtension("native_profiler");
        $__internal_e88c839fa2a695dfd8f132cb6e9ec8031a99c2e962e0245bb149ff1ed585b326->enter($__internal_e88c839fa2a695dfd8f132cb6e9ec8031a99c2e962e0245bb149ff1ed585b326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_e88c839fa2a695dfd8f132cb6e9ec8031a99c2e962e0245bb149ff1ed585b326->leave($__internal_e88c839fa2a695dfd8f132cb6e9ec8031a99c2e962e0245bb149ff1ed585b326_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_4aa6d80062887f6899b1a1ad2ac5de912ee8f7ad97df750038e3abbfe49136a9 = $this->env->getExtension("native_profiler");
        $__internal_4aa6d80062887f6899b1a1ad2ac5de912ee8f7ad97df750038e3abbfe49136a9->enter($__internal_4aa6d80062887f6899b1a1ad2ac5de912ee8f7ad97df750038e3abbfe49136a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_4aa6d80062887f6899b1a1ad2ac5de912ee8f7ad97df750038e3abbfe49136a9->leave($__internal_4aa6d80062887f6899b1a1ad2ac5de912ee8f7ad97df750038e3abbfe49136a9_prof);

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
