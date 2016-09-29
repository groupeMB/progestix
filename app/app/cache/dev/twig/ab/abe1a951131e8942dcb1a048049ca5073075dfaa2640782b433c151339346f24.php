<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_57981a1c456bfa1291a4d3b396c39d465f4463ce0119632711eb579666db4bc3 extends Twig_Template
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
        $__internal_05cd29a7a2b983ec7c9e2afbf05ea5dccbc4e7ddea512c87254813401e24a877 = $this->env->getExtension("native_profiler");
        $__internal_05cd29a7a2b983ec7c9e2afbf05ea5dccbc4e7ddea512c87254813401e24a877->enter($__internal_05cd29a7a2b983ec7c9e2afbf05ea5dccbc4e7ddea512c87254813401e24a877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_05cd29a7a2b983ec7c9e2afbf05ea5dccbc4e7ddea512c87254813401e24a877->leave($__internal_05cd29a7a2b983ec7c9e2afbf05ea5dccbc4e7ddea512c87254813401e24a877_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_af2e77566e45d4d3273db43812dd04180f5e0500e2c7f3067d364af05930373a = $this->env->getExtension("native_profiler");
        $__internal_af2e77566e45d4d3273db43812dd04180f5e0500e2c7f3067d364af05930373a->enter($__internal_af2e77566e45d4d3273db43812dd04180f5e0500e2c7f3067d364af05930373a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_af2e77566e45d4d3273db43812dd04180f5e0500e2c7f3067d364af05930373a->leave($__internal_af2e77566e45d4d3273db43812dd04180f5e0500e2c7f3067d364af05930373a_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fa6b9dc8dfdec458494d3064ed7ad08b78ea5d67677b15d200275f666cd5d645 = $this->env->getExtension("native_profiler");
        $__internal_fa6b9dc8dfdec458494d3064ed7ad08b78ea5d67677b15d200275f666cd5d645->enter($__internal_fa6b9dc8dfdec458494d3064ed7ad08b78ea5d67677b15d200275f666cd5d645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_fa6b9dc8dfdec458494d3064ed7ad08b78ea5d67677b15d200275f666cd5d645->leave($__internal_fa6b9dc8dfdec458494d3064ed7ad08b78ea5d67677b15d200275f666cd5d645_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_56ca72656ca722d554183aaf41e69c3e466702649e8b947260e465c8765ac759 = $this->env->getExtension("native_profiler");
        $__internal_56ca72656ca722d554183aaf41e69c3e466702649e8b947260e465c8765ac759->enter($__internal_56ca72656ca722d554183aaf41e69c3e466702649e8b947260e465c8765ac759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_56ca72656ca722d554183aaf41e69c3e466702649e8b947260e465c8765ac759->leave($__internal_56ca72656ca722d554183aaf41e69c3e466702649e8b947260e465c8765ac759_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
