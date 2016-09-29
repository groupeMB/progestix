<?php

/* @SonataAdmin/CRUD/history_revision_timestamp.html.twig */
class __TwigTemplate_c89e29e15d982c54142d1901b2c67b9e325ac69a3cae9d3d5f93af404a4704b1 extends Twig_Template
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
        $__internal_dd3e0d0f240068d771f0199c88f0616e3ad983956e4a6dc9f291f696cf0d04c1 = $this->env->getExtension("native_profiler");
        $__internal_dd3e0d0f240068d771f0199c88f0616e3ad983956e4a6dc9f291f696cf0d04c1->enter($__internal_dd3e0d0f240068d771f0199c88f0616e3ad983956e4a6dc9f291f696cf0d04c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_dd3e0d0f240068d771f0199c88f0616e3ad983956e4a6dc9f291f696cf0d04c1->leave($__internal_dd3e0d0f240068d771f0199c88f0616e3ad983956e4a6dc9f291f696cf0d04c1_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/history_revision_timestamp.html.twig";
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
