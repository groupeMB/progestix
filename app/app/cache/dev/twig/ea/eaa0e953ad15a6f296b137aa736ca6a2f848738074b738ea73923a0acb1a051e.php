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
        $__internal_201220fea148e56aaa5a7afa2e60c60a961c7a9968fd07dfbeb29a5bcf70c4fe = $this->env->getExtension("native_profiler");
        $__internal_201220fea148e56aaa5a7afa2e60c60a961c7a9968fd07dfbeb29a5bcf70c4fe->enter($__internal_201220fea148e56aaa5a7afa2e60c60a961c7a9968fd07dfbeb29a5bcf70c4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_201220fea148e56aaa5a7afa2e60c60a961c7a9968fd07dfbeb29a5bcf70c4fe->leave($__internal_201220fea148e56aaa5a7afa2e60c60a961c7a9968fd07dfbeb29a5bcf70c4fe_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_744b901f319756351d222d2b512cb8ee3f9d2173b42b9df081371f7797818524 = $this->env->getExtension("native_profiler");
        $__internal_744b901f319756351d222d2b512cb8ee3f9d2173b42b9df081371f7797818524->enter($__internal_744b901f319756351d222d2b512cb8ee3f9d2173b42b9df081371f7797818524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_744b901f319756351d222d2b512cb8ee3f9d2173b42b9df081371f7797818524->leave($__internal_744b901f319756351d222d2b512cb8ee3f9d2173b42b9df081371f7797818524_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7f99ce944d73d0617d718198481772767d3d0bf29b194fed244f8d6467390dc2 = $this->env->getExtension("native_profiler");
        $__internal_7f99ce944d73d0617d718198481772767d3d0bf29b194fed244f8d6467390dc2->enter($__internal_7f99ce944d73d0617d718198481772767d3d0bf29b194fed244f8d6467390dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7f99ce944d73d0617d718198481772767d3d0bf29b194fed244f8d6467390dc2->leave($__internal_7f99ce944d73d0617d718198481772767d3d0bf29b194fed244f8d6467390dc2_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6f4a53a95bdbb3d96a97d816eb66f34f34088b89e74254f1479cc0ece8d17a5d = $this->env->getExtension("native_profiler");
        $__internal_6f4a53a95bdbb3d96a97d816eb66f34f34088b89e74254f1479cc0ece8d17a5d->enter($__internal_6f4a53a95bdbb3d96a97d816eb66f34f34088b89e74254f1479cc0ece8d17a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6f4a53a95bdbb3d96a97d816eb66f34f34088b89e74254f1479cc0ece8d17a5d->leave($__internal_6f4a53a95bdbb3d96a97d816eb66f34f34088b89e74254f1479cc0ece8d17a5d_prof);

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
