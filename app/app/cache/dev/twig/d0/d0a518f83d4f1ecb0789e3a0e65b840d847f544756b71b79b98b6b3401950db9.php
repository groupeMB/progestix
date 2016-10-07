<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_48cdf1a8e7e1b4f1b08968998560f668d76e8bb7b441d13f05a6cc06fdc15879 extends Twig_Template
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
        $__internal_e6d6924d9e3b6e8e6234401f2db3074adcc27432939c98524e65a6a8a61d543c = $this->env->getExtension("native_profiler");
        $__internal_e6d6924d9e3b6e8e6234401f2db3074adcc27432939c98524e65a6a8a61d543c->enter($__internal_e6d6924d9e3b6e8e6234401f2db3074adcc27432939c98524e65a6a8a61d543c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_e6d6924d9e3b6e8e6234401f2db3074adcc27432939c98524e65a6a8a61d543c->leave($__internal_e6d6924d9e3b6e8e6234401f2db3074adcc27432939c98524e65a6a8a61d543c_prof);

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
