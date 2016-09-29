<?php

/* @SonataAdmin/Core/user_block.html.twig */
class __TwigTemplate_132a18472dee112b628529b428831a8b13a708f4a60fee227f9ede29edf89a63 extends Twig_Template
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
        $__internal_debb1073cb2b295e65a180af6c411f95bba00f6b965a2f64ca593730e2826a86 = $this->env->getExtension("native_profiler");
        $__internal_debb1073cb2b295e65a180af6c411f95bba00f6b965a2f64ca593730e2826a86->enter($__internal_debb1073cb2b295e65a180af6c411f95bba00f6b965a2f64ca593730e2826a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_debb1073cb2b295e65a180af6c411f95bba00f6b965a2f64ca593730e2826a86->leave($__internal_debb1073cb2b295e65a180af6c411f95bba00f6b965a2f64ca593730e2826a86_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_ae9739f329722dd1fc7be628b922ba59a0b7f7e2ee2d9e3b064176477693d0be = $this->env->getExtension("native_profiler");
        $__internal_ae9739f329722dd1fc7be628b922ba59a0b7f7e2ee2d9e3b064176477693d0be->enter($__internal_ae9739f329722dd1fc7be628b922ba59a0b7f7e2ee2d9e3b064176477693d0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_ae9739f329722dd1fc7be628b922ba59a0b7f7e2ee2d9e3b064176477693d0be->leave($__internal_ae9739f329722dd1fc7be628b922ba59a0b7f7e2ee2d9e3b064176477693d0be_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}{# Customize this value #}{% endblock %}*/
/* */
