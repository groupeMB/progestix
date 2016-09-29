<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_99754128ffd9223310b4f5c6af311f85f00fde57e304ba5ceb19c3042c83660f extends Twig_Template
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
        $__internal_47acc2e211fc75d08901e687a3ca7b0256356bdb44b8a174c9ee6535cf983cc2 = $this->env->getExtension("native_profiler");
        $__internal_47acc2e211fc75d08901e687a3ca7b0256356bdb44b8a174c9ee6535cf983cc2->enter($__internal_47acc2e211fc75d08901e687a3ca7b0256356bdb44b8a174c9ee6535cf983cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_47acc2e211fc75d08901e687a3ca7b0256356bdb44b8a174c9ee6535cf983cc2->leave($__internal_47acc2e211fc75d08901e687a3ca7b0256356bdb44b8a174c9ee6535cf983cc2_prof);

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
