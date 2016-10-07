<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_8890e9cb28931a0a7fc1f9056401ce0c99b7a272f6d445b6deef82519544e959 extends Twig_Template
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
        $__internal_92b9237aea62a9bc3ec7e9a94037887b716283530bc588729204a9fdcbd81d39 = $this->env->getExtension("native_profiler");
        $__internal_92b9237aea62a9bc3ec7e9a94037887b716283530bc588729204a9fdcbd81d39->enter($__internal_92b9237aea62a9bc3ec7e9a94037887b716283530bc588729204a9fdcbd81d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_92b9237aea62a9bc3ec7e9a94037887b716283530bc588729204a9fdcbd81d39->leave($__internal_92b9237aea62a9bc3ec7e9a94037887b716283530bc588729204a9fdcbd81d39_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_59bd4b0e2f3cd29cabc82ec43bbe04bd49693d228c8beff3562483316e434f44 = $this->env->getExtension("native_profiler");
        $__internal_59bd4b0e2f3cd29cabc82ec43bbe04bd49693d228c8beff3562483316e434f44->enter($__internal_59bd4b0e2f3cd29cabc82ec43bbe04bd49693d228c8beff3562483316e434f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_59bd4b0e2f3cd29cabc82ec43bbe04bd49693d228c8beff3562483316e434f44->leave($__internal_59bd4b0e2f3cd29cabc82ec43bbe04bd49693d228c8beff3562483316e434f44_prof);

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
