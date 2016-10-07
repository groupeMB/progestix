<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_f0e93873ee6c813ca8654c67e78ce296e74c547a0eecf3939f7480eb71241e77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_2a73589f5d6e76b6410ca95d300c26f70ffb0cff8c1c532ecb8ddd4ceb37d3bc = $this->env->getExtension("native_profiler");
        $__internal_2a73589f5d6e76b6410ca95d300c26f70ffb0cff8c1c532ecb8ddd4ceb37d3bc->enter($__internal_2a73589f5d6e76b6410ca95d300c26f70ffb0cff8c1c532ecb8ddd4ceb37d3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a73589f5d6e76b6410ca95d300c26f70ffb0cff8c1c532ecb8ddd4ceb37d3bc->leave($__internal_2a73589f5d6e76b6410ca95d300c26f70ffb0cff8c1c532ecb8ddd4ceb37d3bc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f1db760301b992976ffa5b830df14c86accc742150a2b710df25443783360777 = $this->env->getExtension("native_profiler");
        $__internal_f1db760301b992976ffa5b830df14c86accc742150a2b710df25443783360777->enter($__internal_f1db760301b992976ffa5b830df14c86accc742150a2b710df25443783360777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_f1db760301b992976ffa5b830df14c86accc742150a2b710df25443783360777->leave($__internal_f1db760301b992976ffa5b830df14c86accc742150a2b710df25443783360777_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}*/
/* </p>*/
/* {% endblock %}*/
/* */
