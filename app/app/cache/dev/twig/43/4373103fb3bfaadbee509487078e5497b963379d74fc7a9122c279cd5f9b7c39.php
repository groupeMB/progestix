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
        $__internal_91e0e4de2344b968b8f60914fc994d44e800a0adce724d46e88fd993c330371f = $this->env->getExtension("native_profiler");
        $__internal_91e0e4de2344b968b8f60914fc994d44e800a0adce724d46e88fd993c330371f->enter($__internal_91e0e4de2344b968b8f60914fc994d44e800a0adce724d46e88fd993c330371f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91e0e4de2344b968b8f60914fc994d44e800a0adce724d46e88fd993c330371f->leave($__internal_91e0e4de2344b968b8f60914fc994d44e800a0adce724d46e88fd993c330371f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2547c9bb8bc2a0984c43369f9740a5f59359cb6c5f3abb604978052583c7755f = $this->env->getExtension("native_profiler");
        $__internal_2547c9bb8bc2a0984c43369f9740a5f59359cb6c5f3abb604978052583c7755f->enter($__internal_2547c9bb8bc2a0984c43369f9740a5f59359cb6c5f3abb604978052583c7755f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_2547c9bb8bc2a0984c43369f9740a5f59359cb6c5f3abb604978052583c7755f->leave($__internal_2547c9bb8bc2a0984c43369f9740a5f59359cb6c5f3abb604978052583c7755f_prof);

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
