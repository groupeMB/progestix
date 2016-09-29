<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_0f32e8b6e934473e4b2c6d8c41a17f2f5d43f1a021254e67a88170ef76c09421 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a79098b34efc68e2c0109bac027f873c93f88c9f8ffd9ab9f49071a27ab880af = $this->env->getExtension("native_profiler");
        $__internal_a79098b34efc68e2c0109bac027f873c93f88c9f8ffd9ab9f49071a27ab880af->enter($__internal_a79098b34efc68e2c0109bac027f873c93f88c9f8ffd9ab9f49071a27ab880af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a79098b34efc68e2c0109bac027f873c93f88c9f8ffd9ab9f49071a27ab880af->leave($__internal_a79098b34efc68e2c0109bac027f873c93f88c9f8ffd9ab9f49071a27ab880af_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_94bfb0e7726713aea05cb65cde3dbd5a5e674b4649b6f91b289f3de56b640957 = $this->env->getExtension("native_profiler");
        $__internal_94bfb0e7726713aea05cb65cde3dbd5a5e674b4649b6f91b289f3de56b640957->enter($__internal_94bfb0e7726713aea05cb65cde3dbd5a5e674b4649b6f91b289f3de56b640957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_94bfb0e7726713aea05cb65cde3dbd5a5e674b4649b6f91b289f3de56b640957->leave($__internal_94bfb0e7726713aea05cb65cde3dbd5a5e674b4649b6f91b289f3de56b640957_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}*/
/* {% endblock %}*/
/* */
