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
        $__internal_acedf51a3b209ff92dd317b2c4e67ab90aa974c9a7e56effab88c63cff52827a = $this->env->getExtension("native_profiler");
        $__internal_acedf51a3b209ff92dd317b2c4e67ab90aa974c9a7e56effab88c63cff52827a->enter($__internal_acedf51a3b209ff92dd317b2c4e67ab90aa974c9a7e56effab88c63cff52827a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acedf51a3b209ff92dd317b2c4e67ab90aa974c9a7e56effab88c63cff52827a->leave($__internal_acedf51a3b209ff92dd317b2c4e67ab90aa974c9a7e56effab88c63cff52827a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_99faf1b6c028b629aa4525ce5e3109fdb18972f225753509db35f52c649e96e5 = $this->env->getExtension("native_profiler");
        $__internal_99faf1b6c028b629aa4525ce5e3109fdb18972f225753509db35f52c649e96e5->enter($__internal_99faf1b6c028b629aa4525ce5e3109fdb18972f225753509db35f52c649e96e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_99faf1b6c028b629aa4525ce5e3109fdb18972f225753509db35f52c649e96e5->leave($__internal_99faf1b6c028b629aa4525ce5e3109fdb18972f225753509db35f52c649e96e5_prof);

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
