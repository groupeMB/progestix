<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_c758cfcd6b3b2da126fa58cd654bf9e3da06cfef9818f7b933dec548b3bd7f49 extends Twig_Template
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
        $__internal_a8bec0d7488799cf45ccb9ae77f38e8000104fde0235fb80cabcdb806d0c7349 = $this->env->getExtension("native_profiler");
        $__internal_a8bec0d7488799cf45ccb9ae77f38e8000104fde0235fb80cabcdb806d0c7349->enter($__internal_a8bec0d7488799cf45ccb9ae77f38e8000104fde0235fb80cabcdb806d0c7349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a8bec0d7488799cf45ccb9ae77f38e8000104fde0235fb80cabcdb806d0c7349->leave($__internal_a8bec0d7488799cf45ccb9ae77f38e8000104fde0235fb80cabcdb806d0c7349_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8c27ebbebca48d7564fe406deb9facda7217ee64ff7dc7f277b1afc81b46d97e = $this->env->getExtension("native_profiler");
        $__internal_8c27ebbebca48d7564fe406deb9facda7217ee64ff7dc7f277b1afc81b46d97e->enter($__internal_8c27ebbebca48d7564fe406deb9facda7217ee64ff7dc7f277b1afc81b46d97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8c27ebbebca48d7564fe406deb9facda7217ee64ff7dc7f277b1afc81b46d97e->leave($__internal_8c27ebbebca48d7564fe406deb9facda7217ee64ff7dc7f277b1afc81b46d97e_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d469570db9e40498a1a5714807dc1fce5c9e25b939685e1c6119c8f1fab14200 = $this->env->getExtension("native_profiler");
        $__internal_d469570db9e40498a1a5714807dc1fce5c9e25b939685e1c6119c8f1fab14200->enter($__internal_d469570db9e40498a1a5714807dc1fce5c9e25b939685e1c6119c8f1fab14200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d469570db9e40498a1a5714807dc1fce5c9e25b939685e1c6119c8f1fab14200->leave($__internal_d469570db9e40498a1a5714807dc1fce5c9e25b939685e1c6119c8f1fab14200_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f421db676020082baf574a932654617807b0d50e862cc583cfb7c4e9a14e91bf = $this->env->getExtension("native_profiler");
        $__internal_f421db676020082baf574a932654617807b0d50e862cc583cfb7c4e9a14e91bf->enter($__internal_f421db676020082baf574a932654617807b0d50e862cc583cfb7c4e9a14e91bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f421db676020082baf574a932654617807b0d50e862cc583cfb7c4e9a14e91bf->leave($__internal_f421db676020082baf574a932654617807b0d50e862cc583cfb7c4e9a14e91bf_prof);

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
