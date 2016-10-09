<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_ce7e9904af9d897afd6aa427951c9877a246a15f59882adbbffc4e33f87e03eb extends Twig_Template
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
        $__internal_f1296e820b6239d474f2d40198223d7c6847a0d02748b7a918a5992fd9a030cb = $this->env->getExtension("native_profiler");
        $__internal_f1296e820b6239d474f2d40198223d7c6847a0d02748b7a918a5992fd9a030cb->enter($__internal_f1296e820b6239d474f2d40198223d7c6847a0d02748b7a918a5992fd9a030cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1296e820b6239d474f2d40198223d7c6847a0d02748b7a918a5992fd9a030cb->leave($__internal_f1296e820b6239d474f2d40198223d7c6847a0d02748b7a918a5992fd9a030cb_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_77e636c7822ab18c0d11de6470f6e24763e1d8dc5fbe12252a35b9cdad4d50e6 = $this->env->getExtension("native_profiler");
        $__internal_77e636c7822ab18c0d11de6470f6e24763e1d8dc5fbe12252a35b9cdad4d50e6->enter($__internal_77e636c7822ab18c0d11de6470f6e24763e1d8dc5fbe12252a35b9cdad4d50e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_77e636c7822ab18c0d11de6470f6e24763e1d8dc5fbe12252a35b9cdad4d50e6->leave($__internal_77e636c7822ab18c0d11de6470f6e24763e1d8dc5fbe12252a35b9cdad4d50e6_prof);

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
