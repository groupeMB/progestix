<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_c2b0a3a42ec1f9faa3ea856d7470ceb626d24f7301ccc72f7724491becf4556e extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b307e3b73db8479af3eb936f603bf20436f20258a00a343feca0161e000f7136 = $this->env->getExtension("native_profiler");
        $__internal_b307e3b73db8479af3eb936f603bf20436f20258a00a343feca0161e000f7136->enter($__internal_b307e3b73db8479af3eb936f603bf20436f20258a00a343feca0161e000f7136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b307e3b73db8479af3eb936f603bf20436f20258a00a343feca0161e000f7136->leave($__internal_b307e3b73db8479af3eb936f603bf20436f20258a00a343feca0161e000f7136_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c8c17f1e7dc7ef88748e33670dcdac85afb7efa716927b8f2e7bbe45b40098fb = $this->env->getExtension("native_profiler");
        $__internal_c8c17f1e7dc7ef88748e33670dcdac85afb7efa716927b8f2e7bbe45b40098fb->enter($__internal_c8c17f1e7dc7ef88748e33670dcdac85afb7efa716927b8f2e7bbe45b40098fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_c8c17f1e7dc7ef88748e33670dcdac85afb7efa716927b8f2e7bbe45b40098fb->leave($__internal_c8c17f1e7dc7ef88748e33670dcdac85afb7efa716927b8f2e7bbe45b40098fb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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
