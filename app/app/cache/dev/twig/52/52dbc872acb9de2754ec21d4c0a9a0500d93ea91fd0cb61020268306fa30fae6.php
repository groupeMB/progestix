<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_292d25a16d0578dcbee8343e742f4c7c4c49be4fad3aa35facfb0d42bd7fda29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25e391facccfb307158b1ea7a764bc98c1c3d9f7eaba8fadd0287af02b10c8ef = $this->env->getExtension("native_profiler");
        $__internal_25e391facccfb307158b1ea7a764bc98c1c3d9f7eaba8fadd0287af02b10c8ef->enter($__internal_25e391facccfb307158b1ea7a764bc98c1c3d9f7eaba8fadd0287af02b10c8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_25e391facccfb307158b1ea7a764bc98c1c3d9f7eaba8fadd0287af02b10c8ef->leave($__internal_25e391facccfb307158b1ea7a764bc98c1c3d9f7eaba8fadd0287af02b10c8ef_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  22 => 11,);
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
/* {{ revision.timestamp|date }}*/
/* */