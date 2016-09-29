<?php

/* @SonataAdmin/CRUD/list__select.html.twig */
class __TwigTemplate_19bf15e918f6c8dbb64b2c5f33ae86b6f0f6570469a3f3190ab3d4152c7fc3f1 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a6968d4d14bfb01172ac30fe39a23dee4602c8e08f3de5f4dc14f1492b6df42 = $this->env->getExtension("native_profiler");
        $__internal_0a6968d4d14bfb01172ac30fe39a23dee4602c8e08f3de5f4dc14f1492b6df42->enter($__internal_0a6968d4d14bfb01172ac30fe39a23dee4602c8e08f3de5f4dc14f1492b6df42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a6968d4d14bfb01172ac30fe39a23dee4602c8e08f3de5f4dc14f1492b6df42->leave($__internal_0a6968d4d14bfb01172ac30fe39a23dee4602c8e08f3de5f4dc14f1492b6df42_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3cd1c863fd05d9dbea4cef883728f26561d49f0aa643af4734a5e852bdeecb38 = $this->env->getExtension("native_profiler");
        $__internal_3cd1c863fd05d9dbea4cef883728f26561d49f0aa643af4734a5e852bdeecb38->enter($__internal_3cd1c863fd05d9dbea4cef883728f26561d49f0aa643af4734a5e852bdeecb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-check\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_3cd1c863fd05d9dbea4cef883728f26561d49f0aa643af4734a5e852bdeecb38->leave($__internal_3cd1c863fd05d9dbea4cef883728f26561d49f0aa643af4734a5e852bdeecb38_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     <a class="btn btn-primary" href="{{ admin.generateUrl('list') }}">*/
/*         <i class="fa fa-check"></i>*/
/*         {{ 'list_select'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
