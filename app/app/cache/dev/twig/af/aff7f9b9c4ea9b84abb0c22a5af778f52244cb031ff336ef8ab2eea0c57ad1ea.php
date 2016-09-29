<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_2eb1b09b849373e10152f903754dc88d28ec336f6403826d4e4ab4b5b2a8c132 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96b38cd689d3b521baaef679b92ac2e5cf08f46db27ea6a4a36a4393f3a5035b = $this->env->getExtension("native_profiler");
        $__internal_96b38cd689d3b521baaef679b92ac2e5cf08f46db27ea6a4a36a4393f3a5035b->enter($__internal_96b38cd689d3b521baaef679b92ac2e5cf08f46db27ea6a4a36a4393f3a5035b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96b38cd689d3b521baaef679b92ac2e5cf08f46db27ea6a4a36a4393f3a5035b->leave($__internal_96b38cd689d3b521baaef679b92ac2e5cf08f46db27ea6a4a36a4393f3a5035b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_22af30f7f12ee9e1409449daf236295c7cd55d816e385e75c9f4ee5c755dda2a = $this->env->getExtension("native_profiler");
        $__internal_22af30f7f12ee9e1409449daf236295c7cd55d816e385e75c9f4ee5c755dda2a->enter($__internal_22af30f7f12ee9e1409449daf236295c7cd55d816e385e75c9f4ee5c755dda2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_22af30f7f12ee9e1409449daf236295c7cd55d816e385e75c9f4ee5c755dda2a->leave($__internal_22af30f7f12ee9e1409449daf236295c7cd55d816e385e75c9f4ee5c755dda2a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% block field %}*/
/*     <span class="edit">*/
/*         {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}*/
/*     </span>*/
/* {% endblock %}*/
/* */
