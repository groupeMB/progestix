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
        $__internal_c3de3c4711f4e0201782989762c5d8254754ccdff2cbc0328e8df4f61eb0e973 = $this->env->getExtension("native_profiler");
        $__internal_c3de3c4711f4e0201782989762c5d8254754ccdff2cbc0328e8df4f61eb0e973->enter($__internal_c3de3c4711f4e0201782989762c5d8254754ccdff2cbc0328e8df4f61eb0e973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c3de3c4711f4e0201782989762c5d8254754ccdff2cbc0328e8df4f61eb0e973->leave($__internal_c3de3c4711f4e0201782989762c5d8254754ccdff2cbc0328e8df4f61eb0e973_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a309b0242a71bf1d4b392e5ffec650c2a0d8522868890b35ff230b59f2699218 = $this->env->getExtension("native_profiler");
        $__internal_a309b0242a71bf1d4b392e5ffec650c2a0d8522868890b35ff230b59f2699218->enter($__internal_a309b0242a71bf1d4b392e5ffec650c2a0d8522868890b35ff230b59f2699218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a309b0242a71bf1d4b392e5ffec650c2a0d8522868890b35ff230b59f2699218->leave($__internal_a309b0242a71bf1d4b392e5ffec650c2a0d8522868890b35ff230b59f2699218_prof);

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
