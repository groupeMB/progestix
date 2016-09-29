<?php

/* @SonataAdmin/CRUD/edit_text.html.twig */
class __TwigTemplate_af6b32fb8152b9a3a02278e51acc9133b3aa0c51fd9b51779e3a5b47d243adba extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e6b868c7da4dbb02f60e3af19d830a7701011e224a645ae6ee20ee7755c8f9e = $this->env->getExtension("native_profiler");
        $__internal_3e6b868c7da4dbb02f60e3af19d830a7701011e224a645ae6ee20ee7755c8f9e->enter($__internal_3e6b868c7da4dbb02f60e3af19d830a7701011e224a645ae6ee20ee7755c8f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e6b868c7da4dbb02f60e3af19d830a7701011e224a645ae6ee20ee7755c8f9e->leave($__internal_3e6b868c7da4dbb02f60e3af19d830a7701011e224a645ae6ee20ee7755c8f9e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_124fa93f62c12abd68d42d75933bd7569d31028a00420925012937ccd1bc8fcd = $this->env->getExtension("native_profiler");
        $__internal_124fa93f62c12abd68d42d75933bd7569d31028a00420925012937ccd1bc8fcd->enter($__internal_124fa93f62c12abd68d42d75933bd7569d31028a00420925012937ccd1bc8fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_124fa93f62c12abd68d42d75933bd7569d31028a00420925012937ccd1bc8fcd->leave($__internal_124fa93f62c12abd68d42d75933bd7569d31028a00420925012937ccd1bc8fcd_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_text.html.twig";
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
