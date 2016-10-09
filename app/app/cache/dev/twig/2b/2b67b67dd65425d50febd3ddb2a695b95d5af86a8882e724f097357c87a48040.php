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
        $__internal_89c7220ad5b81a72a5dc231ef5af79e92a2a99f695bceb869addf81beb11d68a = $this->env->getExtension("native_profiler");
        $__internal_89c7220ad5b81a72a5dc231ef5af79e92a2a99f695bceb869addf81beb11d68a->enter($__internal_89c7220ad5b81a72a5dc231ef5af79e92a2a99f695bceb869addf81beb11d68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_89c7220ad5b81a72a5dc231ef5af79e92a2a99f695bceb869addf81beb11d68a->leave($__internal_89c7220ad5b81a72a5dc231ef5af79e92a2a99f695bceb869addf81beb11d68a_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_296445cc2b42242cde7f94b60ab116c5b470ce98b1aba79da730f5930ee22f9a = $this->env->getExtension("native_profiler");
        $__internal_296445cc2b42242cde7f94b60ab116c5b470ce98b1aba79da730f5930ee22f9a->enter($__internal_296445cc2b42242cde7f94b60ab116c5b470ce98b1aba79da730f5930ee22f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_296445cc2b42242cde7f94b60ab116c5b470ce98b1aba79da730f5930ee22f9a->leave($__internal_296445cc2b42242cde7f94b60ab116c5b470ce98b1aba79da730f5930ee22f9a_prof);

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
