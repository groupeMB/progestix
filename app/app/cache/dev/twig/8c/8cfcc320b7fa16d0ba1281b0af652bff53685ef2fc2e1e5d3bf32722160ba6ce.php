<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_868c3651fdda53abcbbc7b5581d501ce409a15dd554f7466682bf7a4b4475c8d extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3076eda95a5b4b4cf19cee3749cb0114f27904b98dc7d0fc03f7d006b164ccb5 = $this->env->getExtension("native_profiler");
        $__internal_3076eda95a5b4b4cf19cee3749cb0114f27904b98dc7d0fc03f7d006b164ccb5->enter($__internal_3076eda95a5b4b4cf19cee3749cb0114f27904b98dc7d0fc03f7d006b164ccb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3076eda95a5b4b4cf19cee3749cb0114f27904b98dc7d0fc03f7d006b164ccb5->leave($__internal_3076eda95a5b4b4cf19cee3749cb0114f27904b98dc7d0fc03f7d006b164ccb5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_014d1f309a8141b3c05518ae650ab73bcd61c0905dc1fc3126537004990ba05b = $this->env->getExtension("native_profiler");
        $__internal_014d1f309a8141b3c05518ae650ab73bcd61c0905dc1fc3126537004990ba05b->enter($__internal_014d1f309a8141b3c05518ae650ab73bcd61c0905dc1fc3126537004990ba05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_014d1f309a8141b3c05518ae650ab73bcd61c0905dc1fc3126537004990ba05b->leave($__internal_014d1f309a8141b3c05518ae650ab73bcd61c0905dc1fc3126537004990ba05b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
