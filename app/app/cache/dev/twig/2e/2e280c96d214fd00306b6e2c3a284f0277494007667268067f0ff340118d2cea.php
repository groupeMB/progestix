<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_a6fbc5fbc1a2aa55697af089ccaebc58045461295504864e91a7f0478d8ec4f0 extends Twig_Template
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
        $__internal_12ef601305c03031476add3b276ceeb99a14ae07b1e128dfd7d3998b9b902c17 = $this->env->getExtension("native_profiler");
        $__internal_12ef601305c03031476add3b276ceeb99a14ae07b1e128dfd7d3998b9b902c17->enter($__internal_12ef601305c03031476add3b276ceeb99a14ae07b1e128dfd7d3998b9b902c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12ef601305c03031476add3b276ceeb99a14ae07b1e128dfd7d3998b9b902c17->leave($__internal_12ef601305c03031476add3b276ceeb99a14ae07b1e128dfd7d3998b9b902c17_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2fc517c58271ab4bceac3a1b2b90889110cdc5bf276f7158310965c2e7d80ded = $this->env->getExtension("native_profiler");
        $__internal_2fc517c58271ab4bceac3a1b2b90889110cdc5bf276f7158310965c2e7d80ded->enter($__internal_2fc517c58271ab4bceac3a1b2b90889110cdc5bf276f7158310965c2e7d80ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_2fc517c58271ab4bceac3a1b2b90889110cdc5bf276f7158310965c2e7d80ded->leave($__internal_2fc517c58271ab4bceac3a1b2b90889110cdc5bf276f7158310965c2e7d80ded_prof);

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
