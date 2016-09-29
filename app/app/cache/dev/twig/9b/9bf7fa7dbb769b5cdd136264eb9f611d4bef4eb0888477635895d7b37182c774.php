<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_7c577f0551e87fb188ee1f1b466caee3d0bb01008d631df50fe92dbc5ca1708e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fadca5e5014f512df9fd48c53dd1cad691457a44bb78db14bd187b1cfed72cf = $this->env->getExtension("native_profiler");
        $__internal_5fadca5e5014f512df9fd48c53dd1cad691457a44bb78db14bd187b1cfed72cf->enter($__internal_5fadca5e5014f512df9fd48c53dd1cad691457a44bb78db14bd187b1cfed72cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<div>
    ";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 4
        echo "</div>";
        
        $__internal_5fadca5e5014f512df9fd48c53dd1cad691457a44bb78db14bd187b1cfed72cf->leave($__internal_5fadca5e5014f512df9fd48c53dd1cad691457a44bb78db14bd187b1cfed72cf_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f52f51a192fd7f883fbc4710b8930ff2c3700b07402e4ee9ef5e470a996c9362 = $this->env->getExtension("native_profiler");
        $__internal_f52f51a192fd7f883fbc4710b8930ff2c3700b07402e4ee9ef5e470a996c9362->enter($__internal_f52f51a192fd7f883fbc4710b8930ff2c3700b07402e4ee9ef5e470a996c9362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    ";
        
        $__internal_f52f51a192fd7f883fbc4710b8930ff2c3700b07402e4ee9ef5e470a996c9362->leave($__internal_f52f51a192fd7f883fbc4710b8930ff2c3700b07402e4ee9ef5e470a996c9362_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  35 => 2,  28 => 4,  26 => 2,  23 => 1,);
    }
}
/* <div>*/
/*     {% block fos_user_content %}*/
/*     {% endblock fos_user_content %}*/
/* </div>*/
