<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_09943341a859c6fa0faec7a92a7ecd60c64df27a30130fc2702b183fe5156a41 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_deb1540ad74ccd8e579fa52b1955291f7a6cf4b2a3379301142936d5b809441d = $this->env->getExtension("native_profiler");
        $__internal_deb1540ad74ccd8e579fa52b1955291f7a6cf4b2a3379301142936d5b809441d->enter($__internal_deb1540ad74ccd8e579fa52b1955291f7a6cf4b2a3379301142936d5b809441d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_deb1540ad74ccd8e579fa52b1955291f7a6cf4b2a3379301142936d5b809441d->leave($__internal_deb1540ad74ccd8e579fa52b1955291f7a6cf4b2a3379301142936d5b809441d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9bd6f10f04e09b6d7f2026a73f25ddc71acf697583d08ac1d1f445e53434dd9c = $this->env->getExtension("native_profiler");
        $__internal_9bd6f10f04e09b6d7f2026a73f25ddc71acf697583d08ac1d1f445e53434dd9c->enter($__internal_9bd6f10f04e09b6d7f2026a73f25ddc71acf697583d08ac1d1f445e53434dd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_9bd6f10f04e09b6d7f2026a73f25ddc71acf697583d08ac1d1f445e53434dd9c->leave($__internal_9bd6f10f04e09b6d7f2026a73f25ddc71acf697583d08ac1d1f445e53434dd9c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
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
