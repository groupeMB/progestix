<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_10da6743f79f5003374c3c9563bd0b4e5e9cba0a0eda4446f7d47cded2738c27 extends Twig_Template
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
        $__internal_c00dc006bb98aa17b798baffae864c290b390d39549fb9e0c46b999bf16f5b3e = $this->env->getExtension("native_profiler");
        $__internal_c00dc006bb98aa17b798baffae864c290b390d39549fb9e0c46b999bf16f5b3e->enter($__internal_c00dc006bb98aa17b798baffae864c290b390d39549fb9e0c46b999bf16f5b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c00dc006bb98aa17b798baffae864c290b390d39549fb9e0c46b999bf16f5b3e->leave($__internal_c00dc006bb98aa17b798baffae864c290b390d39549fb9e0c46b999bf16f5b3e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ebb381ace662a7b2b4dda01cd09120a2751c457de7ab31a068ff8ac6770fadd4 = $this->env->getExtension("native_profiler");
        $__internal_ebb381ace662a7b2b4dda01cd09120a2751c457de7ab31a068ff8ac6770fadd4->enter($__internal_ebb381ace662a7b2b4dda01cd09120a2751c457de7ab31a068ff8ac6770fadd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ebb381ace662a7b2b4dda01cd09120a2751c457de7ab31a068ff8ac6770fadd4->leave($__internal_ebb381ace662a7b2b4dda01cd09120a2751c457de7ab31a068ff8ac6770fadd4_prof);

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
