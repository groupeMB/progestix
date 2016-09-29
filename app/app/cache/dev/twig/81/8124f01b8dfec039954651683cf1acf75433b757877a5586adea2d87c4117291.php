<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_06662e44604700c951cf221a27552778956fd3bb855195efcec037c6a06f468e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6f2f5810bd3f926c976b4dad01270286bdb8ece7dc3fd0855bb218b8191a66f = $this->env->getExtension("native_profiler");
        $__internal_f6f2f5810bd3f926c976b4dad01270286bdb8ece7dc3fd0855bb218b8191a66f->enter($__internal_f6f2f5810bd3f926c976b4dad01270286bdb8ece7dc3fd0855bb218b8191a66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_f6f2f5810bd3f926c976b4dad01270286bdb8ece7dc3fd0855bb218b8191a66f->leave($__internal_f6f2f5810bd3f926c976b4dad01270286bdb8ece7dc3fd0855bb218b8191a66f_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
