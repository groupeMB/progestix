<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_048277ea9746d824be9eb6fd417de4b6bf4b06594f16400077965daf8493c1ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57e445645c7ad2c42da67905645c9d693712c07fcbccd2adef3c943dc7552d9e = $this->env->getExtension("native_profiler");
        $__internal_57e445645c7ad2c42da67905645c9d693712c07fcbccd2adef3c943dc7552d9e->enter($__internal_57e445645c7ad2c42da67905645c9d693712c07fcbccd2adef3c943dc7552d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_57e445645c7ad2c42da67905645c9d693712c07fcbccd2adef3c943dc7552d9e->leave($__internal_57e445645c7ad2c42da67905645c9d693712c07fcbccd2adef3c943dc7552d9e_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cd9aa8f650f30b888008643294d03efdd5dbbd3c6d1df37e82af877ce7b8488c = $this->env->getExtension("native_profiler");
        $__internal_cd9aa8f650f30b888008643294d03efdd5dbbd3c6d1df37e82af877ce7b8488c->enter($__internal_cd9aa8f650f30b888008643294d03efdd5dbbd3c6d1df37e82af877ce7b8488c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cd9aa8f650f30b888008643294d03efdd5dbbd3c6d1df37e82af877ce7b8488c->leave($__internal_cd9aa8f650f30b888008643294d03efdd5dbbd3c6d1df37e82af877ce7b8488c_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7702c2f4926bb614f22e6d928a6108637d1085962d27512410c1004fa77bef03 = $this->env->getExtension("native_profiler");
        $__internal_7702c2f4926bb614f22e6d928a6108637d1085962d27512410c1004fa77bef03->enter($__internal_7702c2f4926bb614f22e6d928a6108637d1085962d27512410c1004fa77bef03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7702c2f4926bb614f22e6d928a6108637d1085962d27512410c1004fa77bef03->leave($__internal_7702c2f4926bb614f22e6d928a6108637d1085962d27512410c1004fa77bef03_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f9cbde8150f1f3ea1ba861a525851edd6058042d1757035b4ab57c3d3ac630ac = $this->env->getExtension("native_profiler");
        $__internal_f9cbde8150f1f3ea1ba861a525851edd6058042d1757035b4ab57c3d3ac630ac->enter($__internal_f9cbde8150f1f3ea1ba861a525851edd6058042d1757035b4ab57c3d3ac630ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f9cbde8150f1f3ea1ba861a525851edd6058042d1757035b4ab57c3d3ac630ac->leave($__internal_f9cbde8150f1f3ea1ba861a525851edd6058042d1757035b4ab57c3d3ac630ac_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
