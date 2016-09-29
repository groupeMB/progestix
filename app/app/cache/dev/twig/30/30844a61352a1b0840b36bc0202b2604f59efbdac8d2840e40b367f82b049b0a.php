<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_c2fd731e77828e579c5bfd1c07335d790eb9ba6d8bd46efe17caf954a492225a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c01a2c7b2d327d80f7d86a43a4e41539299e9be4a932658b9a24bff65ec80063 = $this->env->getExtension("native_profiler");
        $__internal_c01a2c7b2d327d80f7d86a43a4e41539299e9be4a932658b9a24bff65ec80063->enter($__internal_c01a2c7b2d327d80f7d86a43a4e41539299e9be4a932658b9a24bff65ec80063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c01a2c7b2d327d80f7d86a43a4e41539299e9be4a932658b9a24bff65ec80063->leave($__internal_c01a2c7b2d327d80f7d86a43a4e41539299e9be4a932658b9a24bff65ec80063_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}*/
/* */
