<?php

/* @SonataAdmin/CRUD/edit_string.html.twig */
class __TwigTemplate_f97d82a52d60d1d307f4f2e59e8c195229af06a56ad28ef810388a0c7fe770e2 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e461be1376723a854d5dec3c01b48cd8f0223316f1be494d1b2b44ecabdb8a0b = $this->env->getExtension("native_profiler");
        $__internal_e461be1376723a854d5dec3c01b48cd8f0223316f1be494d1b2b44ecabdb8a0b->enter($__internal_e461be1376723a854d5dec3c01b48cd8f0223316f1be494d1b2b44ecabdb8a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e461be1376723a854d5dec3c01b48cd8f0223316f1be494d1b2b44ecabdb8a0b->leave($__internal_e461be1376723a854d5dec3c01b48cd8f0223316f1be494d1b2b44ecabdb8a0b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4f685eb4ce21e5804eca7cfdc8940298cfa15ec94dcdd07fec0bec02b4da84e4 = $this->env->getExtension("native_profiler");
        $__internal_4f685eb4ce21e5804eca7cfdc8940298cfa15ec94dcdd07fec0bec02b4da84e4->enter($__internal_4f685eb4ce21e5804eca7cfdc8940298cfa15ec94dcdd07fec0bec02b4da84e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_4f685eb4ce21e5804eca7cfdc8940298cfa15ec94dcdd07fec0bec02b4da84e4->leave($__internal_4f685eb4ce21e5804eca7cfdc8940298cfa15ec94dcdd07fec0bec02b4da84e4_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_string.html.twig";
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
