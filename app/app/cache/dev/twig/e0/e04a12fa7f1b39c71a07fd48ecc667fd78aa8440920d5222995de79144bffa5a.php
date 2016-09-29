<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_57a4cd712bdc13ef85083bfa73bea71bd95754362ee1ed6063a26d6b030d35d9 extends Twig_Template
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
        $__internal_26c3e855f49e45fd09c28f0852b3f2f7a8b690dffe78bc1806747d0d4213368b = $this->env->getExtension("native_profiler");
        $__internal_26c3e855f49e45fd09c28f0852b3f2f7a8b690dffe78bc1806747d0d4213368b->enter($__internal_26c3e855f49e45fd09c28f0852b3f2f7a8b690dffe78bc1806747d0d4213368b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_26c3e855f49e45fd09c28f0852b3f2f7a8b690dffe78bc1806747d0d4213368b->leave($__internal_26c3e855f49e45fd09c28f0852b3f2f7a8b690dffe78bc1806747d0d4213368b_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9c1c17451b94c24774072059c7580b3e32887479eeb6154cba416b240e05e4a8 = $this->env->getExtension("native_profiler");
        $__internal_9c1c17451b94c24774072059c7580b3e32887479eeb6154cba416b240e05e4a8->enter($__internal_9c1c17451b94c24774072059c7580b3e32887479eeb6154cba416b240e05e4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9c1c17451b94c24774072059c7580b3e32887479eeb6154cba416b240e05e4a8->leave($__internal_9c1c17451b94c24774072059c7580b3e32887479eeb6154cba416b240e05e4a8_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c125cc4d8dc9438acdf70c1844d23abfe3e6d2e01d53b3f58b97b726ddc68e3f = $this->env->getExtension("native_profiler");
        $__internal_c125cc4d8dc9438acdf70c1844d23abfe3e6d2e01d53b3f58b97b726ddc68e3f->enter($__internal_c125cc4d8dc9438acdf70c1844d23abfe3e6d2e01d53b3f58b97b726ddc68e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c125cc4d8dc9438acdf70c1844d23abfe3e6d2e01d53b3f58b97b726ddc68e3f->leave($__internal_c125cc4d8dc9438acdf70c1844d23abfe3e6d2e01d53b3f58b97b726ddc68e3f_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_19ba4950cf86a0564ef6574483d654e7119d71ea19deee5858760150a74b613a = $this->env->getExtension("native_profiler");
        $__internal_19ba4950cf86a0564ef6574483d654e7119d71ea19deee5858760150a74b613a->enter($__internal_19ba4950cf86a0564ef6574483d654e7119d71ea19deee5858760150a74b613a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_19ba4950cf86a0564ef6574483d654e7119d71ea19deee5858760150a74b613a->leave($__internal_19ba4950cf86a0564ef6574483d654e7119d71ea19deee5858760150a74b613a_prof);

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
