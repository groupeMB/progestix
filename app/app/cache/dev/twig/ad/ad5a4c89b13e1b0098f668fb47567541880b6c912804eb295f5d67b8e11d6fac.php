<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_bc8df7dba33c2d70b63a1e3d350b1501dec5cb7a297a09fe621bfb224c97ffbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8da94d933a91b4a6953cbd8e8561b7bbca5281fa0410e3960dcd49433f6cca56 = $this->env->getExtension("native_profiler");
        $__internal_8da94d933a91b4a6953cbd8e8561b7bbca5281fa0410e3960dcd49433f6cca56->enter($__internal_8da94d933a91b4a6953cbd8e8561b7bbca5281fa0410e3960dcd49433f6cca56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8da94d933a91b4a6953cbd8e8561b7bbca5281fa0410e3960dcd49433f6cca56->leave($__internal_8da94d933a91b4a6953cbd8e8561b7bbca5281fa0410e3960dcd49433f6cca56_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b478298697bb1af4a8ecba33e0d42963d94571b4191f8ebe85ad8c7388825e00 = $this->env->getExtension("native_profiler");
        $__internal_b478298697bb1af4a8ecba33e0d42963d94571b4191f8ebe85ad8c7388825e00->enter($__internal_b478298697bb1af4a8ecba33e0d42963d94571b4191f8ebe85ad8c7388825e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_b478298697bb1af4a8ecba33e0d42963d94571b4191f8ebe85ad8c7388825e00->leave($__internal_b478298697bb1af4a8ecba33e0d42963d94571b4191f8ebe85ad8c7388825e00_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
