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
        $__internal_9ac9e7c1e65a5c096e4f4a98594589b6381d231b0c9a95a8f063283b8ce0009f = $this->env->getExtension("native_profiler");
        $__internal_9ac9e7c1e65a5c096e4f4a98594589b6381d231b0c9a95a8f063283b8ce0009f->enter($__internal_9ac9e7c1e65a5c096e4f4a98594589b6381d231b0c9a95a8f063283b8ce0009f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9ac9e7c1e65a5c096e4f4a98594589b6381d231b0c9a95a8f063283b8ce0009f->leave($__internal_9ac9e7c1e65a5c096e4f4a98594589b6381d231b0c9a95a8f063283b8ce0009f_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7968d05d27ec06abe2e4accdd95dfcc0c861271dcb02ab1f1da6d86c8b8db8a3 = $this->env->getExtension("native_profiler");
        $__internal_7968d05d27ec06abe2e4accdd95dfcc0c861271dcb02ab1f1da6d86c8b8db8a3->enter($__internal_7968d05d27ec06abe2e4accdd95dfcc0c861271dcb02ab1f1da6d86c8b8db8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7968d05d27ec06abe2e4accdd95dfcc0c861271dcb02ab1f1da6d86c8b8db8a3->leave($__internal_7968d05d27ec06abe2e4accdd95dfcc0c861271dcb02ab1f1da6d86c8b8db8a3_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a949796a39503d9dc4e16882276211e80f19d03f0c5bdaf801d0a36d17f33568 = $this->env->getExtension("native_profiler");
        $__internal_a949796a39503d9dc4e16882276211e80f19d03f0c5bdaf801d0a36d17f33568->enter($__internal_a949796a39503d9dc4e16882276211e80f19d03f0c5bdaf801d0a36d17f33568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a949796a39503d9dc4e16882276211e80f19d03f0c5bdaf801d0a36d17f33568->leave($__internal_a949796a39503d9dc4e16882276211e80f19d03f0c5bdaf801d0a36d17f33568_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_22027ff26f8fbf9c5c780811d495a24df4e6596664ade00daa103d75a2fdac61 = $this->env->getExtension("native_profiler");
        $__internal_22027ff26f8fbf9c5c780811d495a24df4e6596664ade00daa103d75a2fdac61->enter($__internal_22027ff26f8fbf9c5c780811d495a24df4e6596664ade00daa103d75a2fdac61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_22027ff26f8fbf9c5c780811d495a24df4e6596664ade00daa103d75a2fdac61->leave($__internal_22027ff26f8fbf9c5c780811d495a24df4e6596664ade00daa103d75a2fdac61_prof);

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
