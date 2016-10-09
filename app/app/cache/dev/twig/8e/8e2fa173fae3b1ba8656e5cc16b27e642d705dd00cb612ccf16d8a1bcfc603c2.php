<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_f864d7e667af846581075ca0f2b0932536fe286dd7385d393769ee5844bf14ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0a06795ae849dd887bd66c4e1a768b7211d6de72f5e9ef29abe667689c2b5a9 = $this->env->getExtension("native_profiler");
        $__internal_f0a06795ae849dd887bd66c4e1a768b7211d6de72f5e9ef29abe667689c2b5a9->enter($__internal_f0a06795ae849dd887bd66c4e1a768b7211d6de72f5e9ef29abe667689c2b5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0a06795ae849dd887bd66c4e1a768b7211d6de72f5e9ef29abe667689c2b5a9->leave($__internal_f0a06795ae849dd887bd66c4e1a768b7211d6de72f5e9ef29abe667689c2b5a9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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
/* {% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}*/
/* */
