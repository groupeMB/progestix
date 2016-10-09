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
        $__internal_890cf9572e4c44e9a9b9c38b8eb4518ebe5f88e25191ebec3c62c70a0e5ce7d6 = $this->env->getExtension("native_profiler");
        $__internal_890cf9572e4c44e9a9b9c38b8eb4518ebe5f88e25191ebec3c62c70a0e5ce7d6->enter($__internal_890cf9572e4c44e9a9b9c38b8eb4518ebe5f88e25191ebec3c62c70a0e5ce7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_890cf9572e4c44e9a9b9c38b8eb4518ebe5f88e25191ebec3c62c70a0e5ce7d6->leave($__internal_890cf9572e4c44e9a9b9c38b8eb4518ebe5f88e25191ebec3c62c70a0e5ce7d6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_57a1a622447d62b9da7e309b7fa573470b93af4d1df6665296e7a06e73b2b7d1 = $this->env->getExtension("native_profiler");
        $__internal_57a1a622447d62b9da7e309b7fa573470b93af4d1df6665296e7a06e73b2b7d1->enter($__internal_57a1a622447d62b9da7e309b7fa573470b93af4d1df6665296e7a06e73b2b7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_57a1a622447d62b9da7e309b7fa573470b93af4d1df6665296e7a06e73b2b7d1->leave($__internal_57a1a622447d62b9da7e309b7fa573470b93af4d1df6665296e7a06e73b2b7d1_prof);

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
