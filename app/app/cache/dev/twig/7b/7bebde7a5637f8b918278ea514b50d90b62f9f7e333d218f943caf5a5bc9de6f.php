<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_8498c4d7d199eed0de0ec7e97dffb4cc6ab366bd3030058ef07b2d940c21c72f extends Twig_Template
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
        $__internal_50a62f672c3c163bac4bf3a33e67f96a5c05264df76fb8cc009d0a3ca95a772b = $this->env->getExtension("native_profiler");
        $__internal_50a62f672c3c163bac4bf3a33e67f96a5c05264df76fb8cc009d0a3ca95a772b->enter($__internal_50a62f672c3c163bac4bf3a33e67f96a5c05264df76fb8cc009d0a3ca95a772b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_50a62f672c3c163bac4bf3a33e67f96a5c05264df76fb8cc009d0a3ca95a772b->leave($__internal_50a62f672c3c163bac4bf3a33e67f96a5c05264df76fb8cc009d0a3ca95a772b_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b6c6dbbc0c5f37e9433c38a218830a740c4893679ec1fdf20979a5db85988e13 = $this->env->getExtension("native_profiler");
        $__internal_b6c6dbbc0c5f37e9433c38a218830a740c4893679ec1fdf20979a5db85988e13->enter($__internal_b6c6dbbc0c5f37e9433c38a218830a740c4893679ec1fdf20979a5db85988e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b6c6dbbc0c5f37e9433c38a218830a740c4893679ec1fdf20979a5db85988e13->leave($__internal_b6c6dbbc0c5f37e9433c38a218830a740c4893679ec1fdf20979a5db85988e13_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f6dfa3d2dd2641bc07d9d76b7642a10ba950ecc1398fe4f72ed23c9938a69f8c = $this->env->getExtension("native_profiler");
        $__internal_f6dfa3d2dd2641bc07d9d76b7642a10ba950ecc1398fe4f72ed23c9938a69f8c->enter($__internal_f6dfa3d2dd2641bc07d9d76b7642a10ba950ecc1398fe4f72ed23c9938a69f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f6dfa3d2dd2641bc07d9d76b7642a10ba950ecc1398fe4f72ed23c9938a69f8c->leave($__internal_f6dfa3d2dd2641bc07d9d76b7642a10ba950ecc1398fe4f72ed23c9938a69f8c_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0035f72764a2338ae5659f653e9cfe656e43fa25d44c4737700e62c4892d2f04 = $this->env->getExtension("native_profiler");
        $__internal_0035f72764a2338ae5659f653e9cfe656e43fa25d44c4737700e62c4892d2f04->enter($__internal_0035f72764a2338ae5659f653e9cfe656e43fa25d44c4737700e62c4892d2f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0035f72764a2338ae5659f653e9cfe656e43fa25d44c4737700e62c4892d2f04->leave($__internal_0035f72764a2338ae5659f653e9cfe656e43fa25d44c4737700e62c4892d2f04_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
