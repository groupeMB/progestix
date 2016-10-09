<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_e6fe295c3a0385e7565c3bd753730c55c0fd3b24bc2cf5f6ab996ed4e053248c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aca4dc72a8f766395c8c70337629e26628495872f28b35b6f4602cbad243dd6e = $this->env->getExtension("native_profiler");
        $__internal_aca4dc72a8f766395c8c70337629e26628495872f28b35b6f4602cbad243dd6e->enter($__internal_aca4dc72a8f766395c8c70337629e26628495872f28b35b6f4602cbad243dd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_aca4dc72a8f766395c8c70337629e26628495872f28b35b6f4602cbad243dd6e->leave($__internal_aca4dc72a8f766395c8c70337629e26628495872f28b35b6f4602cbad243dd6e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8fd4126a762935a7d855d4aaad7b291e877772fdd76e6245e1b7e62f3448a678 = $this->env->getExtension("native_profiler");
        $__internal_8fd4126a762935a7d855d4aaad7b291e877772fdd76e6245e1b7e62f3448a678->enter($__internal_8fd4126a762935a7d855d4aaad7b291e877772fdd76e6245e1b7e62f3448a678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8fd4126a762935a7d855d4aaad7b291e877772fdd76e6245e1b7e62f3448a678->leave($__internal_8fd4126a762935a7d855d4aaad7b291e877772fdd76e6245e1b7e62f3448a678_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
