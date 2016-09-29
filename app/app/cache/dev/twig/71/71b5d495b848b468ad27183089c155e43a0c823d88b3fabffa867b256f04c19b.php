<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_36f9457406ea59d6bcc10c6dba8cb5a07ef30c0285860ecd8c2357a2c2fe4fa4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dba4786dad89e3ea62835a88b64412175a528eb57de26c307f02ffc5ad5037f6 = $this->env->getExtension("native_profiler");
        $__internal_dba4786dad89e3ea62835a88b64412175a528eb57de26c307f02ffc5ad5037f6->enter($__internal_dba4786dad89e3ea62835a88b64412175a528eb57de26c307f02ffc5ad5037f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_dba4786dad89e3ea62835a88b64412175a528eb57de26c307f02ffc5ad5037f6->leave($__internal_dba4786dad89e3ea62835a88b64412175a528eb57de26c307f02ffc5ad5037f6_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_4e1f7d044e872cd3f8d6e68480222e6669f5acca016089f9906051dc6e926693 = $this->env->getExtension("native_profiler");
        $__internal_4e1f7d044e872cd3f8d6e68480222e6669f5acca016089f9906051dc6e926693->enter($__internal_4e1f7d044e872cd3f8d6e68480222e6669f5acca016089f9906051dc6e926693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_4e1f7d044e872cd3f8d6e68480222e6669f5acca016089f9906051dc6e926693->leave($__internal_4e1f7d044e872cd3f8d6e68480222e6669f5acca016089f9906051dc6e926693_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}{# Customize this value #}{% endblock %}*/
/* */
