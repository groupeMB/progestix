<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_044952877de7795565536c0751833719a97b97fe4610ca1af8ffd2e432ce00ef extends Twig_Template
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
        $__internal_7ef23b9f9a30dbfbd04accc14db7d8b36c7ac0f115ede66289de3b5ae3f1ec18 = $this->env->getExtension("native_profiler");
        $__internal_7ef23b9f9a30dbfbd04accc14db7d8b36c7ac0f115ede66289de3b5ae3f1ec18->enter($__internal_7ef23b9f9a30dbfbd04accc14db7d8b36c7ac0f115ede66289de3b5ae3f1ec18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7ef23b9f9a30dbfbd04accc14db7d8b36c7ac0f115ede66289de3b5ae3f1ec18->leave($__internal_7ef23b9f9a30dbfbd04accc14db7d8b36c7ac0f115ede66289de3b5ae3f1ec18_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5d272d09c8590678da1e451b6cccd32606ad2259ee0b3bbe119a90d9ff3773bb = $this->env->getExtension("native_profiler");
        $__internal_5d272d09c8590678da1e451b6cccd32606ad2259ee0b3bbe119a90d9ff3773bb->enter($__internal_5d272d09c8590678da1e451b6cccd32606ad2259ee0b3bbe119a90d9ff3773bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5d272d09c8590678da1e451b6cccd32606ad2259ee0b3bbe119a90d9ff3773bb->leave($__internal_5d272d09c8590678da1e451b6cccd32606ad2259ee0b3bbe119a90d9ff3773bb_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3c78aa3b20f75f30d822f098490ed3c09edbe9c04a58128f1dc3da414dafbe9b = $this->env->getExtension("native_profiler");
        $__internal_3c78aa3b20f75f30d822f098490ed3c09edbe9c04a58128f1dc3da414dafbe9b->enter($__internal_3c78aa3b20f75f30d822f098490ed3c09edbe9c04a58128f1dc3da414dafbe9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3c78aa3b20f75f30d822f098490ed3c09edbe9c04a58128f1dc3da414dafbe9b->leave($__internal_3c78aa3b20f75f30d822f098490ed3c09edbe9c04a58128f1dc3da414dafbe9b_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3f1c3191c4028376f31a35c7e00e1f990b5dc79373758106f786f1377e82d73d = $this->env->getExtension("native_profiler");
        $__internal_3f1c3191c4028376f31a35c7e00e1f990b5dc79373758106f786f1377e82d73d->enter($__internal_3f1c3191c4028376f31a35c7e00e1f990b5dc79373758106f786f1377e82d73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3f1c3191c4028376f31a35c7e00e1f990b5dc79373758106f786f1377e82d73d->leave($__internal_3f1c3191c4028376f31a35c7e00e1f990b5dc79373758106f786f1377e82d73d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
