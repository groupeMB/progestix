<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_5c1d602dccc377e4b81fd9cb5a2a8de73ed419a0e3a358e6b7ee783486c59e65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_524be53e98bc90498673853a30d6423e9685c5806111984e8272e769b55d0aa3 = $this->env->getExtension("native_profiler");
        $__internal_524be53e98bc90498673853a30d6423e9685c5806111984e8272e769b55d0aa3->enter($__internal_524be53e98bc90498673853a30d6423e9685c5806111984e8272e769b55d0aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_524be53e98bc90498673853a30d6423e9685c5806111984e8272e769b55d0aa3->leave($__internal_524be53e98bc90498673853a30d6423e9685c5806111984e8272e769b55d0aa3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a3affa18d3ba724f3670459f16848f18b2b304ba8529819431536b5e8572e6a7 = $this->env->getExtension("native_profiler");
        $__internal_a3affa18d3ba724f3670459f16848f18b2b304ba8529819431536b5e8572e6a7->enter($__internal_a3affa18d3ba724f3670459f16848f18b2b304ba8529819431536b5e8572e6a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_a3affa18d3ba724f3670459f16848f18b2b304ba8529819431536b5e8572e6a7->leave($__internal_a3affa18d3ba724f3670459f16848f18b2b304ba8529819431536b5e8572e6a7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}*/
/* </p>*/
/* {% endblock %}*/
/* */
