<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_813befc19a686e1399393c438ee416d060b7a26560c09c3642e926c107096a8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_9baedf4707be023d07de88f28bf2bb87917bffe266729c732816500024daa212 = $this->env->getExtension("native_profiler");
        $__internal_9baedf4707be023d07de88f28bf2bb87917bffe266729c732816500024daa212->enter($__internal_9baedf4707be023d07de88f28bf2bb87917bffe266729c732816500024daa212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9baedf4707be023d07de88f28bf2bb87917bffe266729c732816500024daa212->leave($__internal_9baedf4707be023d07de88f28bf2bb87917bffe266729c732816500024daa212_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_caafc2da65aa4957cc6cdf1724971100d09f6e6fd0dd8ce4d23030984172d295 = $this->env->getExtension("native_profiler");
        $__internal_caafc2da65aa4957cc6cdf1724971100d09f6e6fd0dd8ce4d23030984172d295->enter($__internal_caafc2da65aa4957cc6cdf1724971100d09f6e6fd0dd8ce4d23030984172d295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_caafc2da65aa4957cc6cdf1724971100d09f6e6fd0dd8ce4d23030984172d295->leave($__internal_caafc2da65aa4957cc6cdf1724971100d09f6e6fd0dd8ce4d23030984172d295_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
