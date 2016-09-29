<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_be537bfa32574f5b6e6aee341364c1afacae4b51c1ed8a25af2e492321db5bc8 extends Twig_Template
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
        $__internal_2b44e30c36a9bbbab72407817e528e35f00e813560dd0252b71fcb91d2e6bfdb = $this->env->getExtension("native_profiler");
        $__internal_2b44e30c36a9bbbab72407817e528e35f00e813560dd0252b71fcb91d2e6bfdb->enter($__internal_2b44e30c36a9bbbab72407817e528e35f00e813560dd0252b71fcb91d2e6bfdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2b44e30c36a9bbbab72407817e528e35f00e813560dd0252b71fcb91d2e6bfdb->leave($__internal_2b44e30c36a9bbbab72407817e528e35f00e813560dd0252b71fcb91d2e6bfdb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_54ce0cbe1b73258df1cab914dfdb467b6e1d1334fc36c03f943bcd4308048029 = $this->env->getExtension("native_profiler");
        $__internal_54ce0cbe1b73258df1cab914dfdb467b6e1d1334fc36c03f943bcd4308048029->enter($__internal_54ce0cbe1b73258df1cab914dfdb467b6e1d1334fc36c03f943bcd4308048029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_54ce0cbe1b73258df1cab914dfdb467b6e1d1334fc36c03f943bcd4308048029->leave($__internal_54ce0cbe1b73258df1cab914dfdb467b6e1d1334fc36c03f943bcd4308048029_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
