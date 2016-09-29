<?php

/* @SonataAdmin/CRUD/edit_array.html.twig */
class __TwigTemplate_120c2c5280b8a4d1f9c0ddc031746c966b7d714697687cda8398b8a7bf921315 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30825c23d10256dd12c823bbf0e88a3a4a54d1a9fb401a17848602bf1225d8b7 = $this->env->getExtension("native_profiler");
        $__internal_30825c23d10256dd12c823bbf0e88a3a4a54d1a9fb401a17848602bf1225d8b7->enter($__internal_30825c23d10256dd12c823bbf0e88a3a4a54d1a9fb401a17848602bf1225d8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30825c23d10256dd12c823bbf0e88a3a4a54d1a9fb401a17848602bf1225d8b7->leave($__internal_30825c23d10256dd12c823bbf0e88a3a4a54d1a9fb401a17848602bf1225d8b7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_06dd5923ab2e61437981d466d213a6c5645a7616609eb3cfa461be61f1c020b8 = $this->env->getExtension("native_profiler");
        $__internal_06dd5923ab2e61437981d466d213a6c5645a7616609eb3cfa461be61f1c020b8->enter($__internal_06dd5923ab2e61437981d466d213a6c5645a7616609eb3cfa461be61f1c020b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_06dd5923ab2e61437981d466d213a6c5645a7616609eb3cfa461be61f1c020b8->leave($__internal_06dd5923ab2e61437981d466d213a6c5645a7616609eb3cfa461be61f1c020b8_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_array.html.twig";
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
