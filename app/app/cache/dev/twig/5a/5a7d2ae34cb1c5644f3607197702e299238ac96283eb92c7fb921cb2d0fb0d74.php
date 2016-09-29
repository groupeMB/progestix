<?php

/* @SonataAdmin/CRUD/edit_file.html.twig */
class __TwigTemplate_317d4672e4dfb8e5f1975b22b341e6394ef04eb6b155b108b459cfcfb56aa94e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a05e1df7cb64fadcce7a2092988dc8e33ed425b131af6df0041f5c41103296b = $this->env->getExtension("native_profiler");
        $__internal_5a05e1df7cb64fadcce7a2092988dc8e33ed425b131af6df0041f5c41103296b->enter($__internal_5a05e1df7cb64fadcce7a2092988dc8e33ed425b131af6df0041f5c41103296b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a05e1df7cb64fadcce7a2092988dc8e33ed425b131af6df0041f5c41103296b->leave($__internal_5a05e1df7cb64fadcce7a2092988dc8e33ed425b131af6df0041f5c41103296b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c1006da5e22db355ade0a91c26dce99e9eda46656db83587e6fc4a92903e420a = $this->env->getExtension("native_profiler");
        $__internal_c1006da5e22db355ade0a91c26dce99e9eda46656db83587e6fc4a92903e420a->enter($__internal_c1006da5e22db355ade0a91c26dce99e9eda46656db83587e6fc4a92903e420a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_c1006da5e22db355ade0a91c26dce99e9eda46656db83587e6fc4a92903e420a->leave($__internal_c1006da5e22db355ade0a91c26dce99e9eda46656db83587e6fc4a92903e420a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */
