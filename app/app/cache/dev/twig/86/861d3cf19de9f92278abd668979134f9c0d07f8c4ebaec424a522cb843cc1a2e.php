<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_e6ab2dd14bd6417bd524fb0d23c023176e2914e9ef4809b175ddebc7e4e39fcb extends Twig_Template
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
        $__internal_ab1299646de8148f84bd49bb6881d32c1fde89f3d568ad678186b21a50edfc1d = $this->env->getExtension("native_profiler");
        $__internal_ab1299646de8148f84bd49bb6881d32c1fde89f3d568ad678186b21a50edfc1d->enter($__internal_ab1299646de8148f84bd49bb6881d32c1fde89f3d568ad678186b21a50edfc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab1299646de8148f84bd49bb6881d32c1fde89f3d568ad678186b21a50edfc1d->leave($__internal_ab1299646de8148f84bd49bb6881d32c1fde89f3d568ad678186b21a50edfc1d_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_0c09a0e9c7f243b0a7cedd5dd8646697ad439f5ac7df7271a8569fafd633e9a2 = $this->env->getExtension("native_profiler");
        $__internal_0c09a0e9c7f243b0a7cedd5dd8646697ad439f5ac7df7271a8569fafd633e9a2->enter($__internal_0c09a0e9c7f243b0a7cedd5dd8646697ad439f5ac7df7271a8569fafd633e9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_0c09a0e9c7f243b0a7cedd5dd8646697ad439f5ac7df7271a8569fafd633e9a2->leave($__internal_0c09a0e9c7f243b0a7cedd5dd8646697ad439f5ac7df7271a8569fafd633e9a2_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_18dbcdd18efad893d5333a9153032ae7e878b45d95b88b834cccc4ac4697c627 = $this->env->getExtension("native_profiler");
        $__internal_18dbcdd18efad893d5333a9153032ae7e878b45d95b88b834cccc4ac4697c627->enter($__internal_18dbcdd18efad893d5333a9153032ae7e878b45d95b88b834cccc4ac4697c627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_18dbcdd18efad893d5333a9153032ae7e878b45d95b88b834cccc4ac4697c627->leave($__internal_18dbcdd18efad893d5333a9153032ae7e878b45d95b88b834cccc4ac4697c627_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_c2de337e4c6831c99c58ed8e4c2435319122d8be73815cbc95a4aad39f3f0fdb = $this->env->getExtension("native_profiler");
        $__internal_c2de337e4c6831c99c58ed8e4c2435319122d8be73815cbc95a4aad39f3f0fdb->enter($__internal_c2de337e4c6831c99c58ed8e4c2435319122d8be73815cbc95a4aad39f3f0fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_c2de337e4c6831c99c58ed8e4c2435319122d8be73815cbc95a4aad39f3f0fdb->leave($__internal_c2de337e4c6831c99c58ed8e4c2435319122d8be73815cbc95a4aad39f3f0fdb_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_3af50394cb28845e7f09e57e3a5a3e434197e326def30b1b13c8f466f19c2ee0 = $this->env->getExtension("native_profiler");
        $__internal_3af50394cb28845e7f09e57e3a5a3e434197e326def30b1b13c8f466f19c2ee0->enter($__internal_3af50394cb28845e7f09e57e3a5a3e434197e326def30b1b13c8f466f19c2ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_3af50394cb28845e7f09e57e3a5a3e434197e326def30b1b13c8f466f19c2ee0->leave($__internal_3af50394cb28845e7f09e57e3a5a3e434197e326def30b1b13c8f466f19c2ee0_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d7a2aaa51b94d3a826044d829087fe33b979e09c2d7205c62cecb81649ab9bd2 = $this->env->getExtension("native_profiler");
        $__internal_d7a2aaa51b94d3a826044d829087fe33b979e09c2d7205c62cecb81649ab9bd2->enter($__internal_d7a2aaa51b94d3a826044d829087fe33b979e09c2d7205c62cecb81649ab9bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d7a2aaa51b94d3a826044d829087fe33b979e09c2d7205c62cecb81649ab9bd2->leave($__internal_d7a2aaa51b94d3a826044d829087fe33b979e09c2d7205c62cecb81649ab9bd2_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_18c72accb30ee4194b577e89e993fbed9982e17899e624a5712794d8b50e056d = $this->env->getExtension("native_profiler");
        $__internal_18c72accb30ee4194b577e89e993fbed9982e17899e624a5712794d8b50e056d->enter($__internal_18c72accb30ee4194b577e89e993fbed9982e17899e624a5712794d8b50e056d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_18c72accb30ee4194b577e89e993fbed9982e17899e624a5712794d8b50e056d->leave($__internal_18c72accb30ee4194b577e89e993fbed9982e17899e624a5712794d8b50e056d_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_f46364060a6f0848c7f3ca65d5b5b2d2914209e7cab6de6c08957b349275e651 = $this->env->getExtension("native_profiler");
        $__internal_f46364060a6f0848c7f3ca65d5b5b2d2914209e7cab6de6c08957b349275e651->enter($__internal_f46364060a6f0848c7f3ca65d5b5b2d2914209e7cab6de6c08957b349275e651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_f46364060a6f0848c7f3ca65d5b5b2d2914209e7cab6de6c08957b349275e651->leave($__internal_f46364060a6f0848c7f3ca65d5b5b2d2914209e7cab6de6c08957b349275e651_prof);

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
