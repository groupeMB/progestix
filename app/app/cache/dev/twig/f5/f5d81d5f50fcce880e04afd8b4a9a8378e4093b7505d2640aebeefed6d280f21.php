<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_fccc38223574bc6a3fb62b87f197ee9e2872a05189dc23c08b23be6642b524e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_6e367dcb68394f27e3d374bb123905d513e0a0650b003446549c35397f509b85 = $this->env->getExtension("native_profiler");
        $__internal_6e367dcb68394f27e3d374bb123905d513e0a0650b003446549c35397f509b85->enter($__internal_6e367dcb68394f27e3d374bb123905d513e0a0650b003446549c35397f509b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e367dcb68394f27e3d374bb123905d513e0a0650b003446549c35397f509b85->leave($__internal_6e367dcb68394f27e3d374bb123905d513e0a0650b003446549c35397f509b85_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4a2ab22cb13a039b928736ad242133bc783d3e2497ecd417599e54641e8859f3 = $this->env->getExtension("native_profiler");
        $__internal_4a2ab22cb13a039b928736ad242133bc783d3e2497ecd417599e54641e8859f3->enter($__internal_4a2ab22cb13a039b928736ad242133bc783d3e2497ecd417599e54641e8859f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4a2ab22cb13a039b928736ad242133bc783d3e2497ecd417599e54641e8859f3->leave($__internal_4a2ab22cb13a039b928736ad242133bc783d3e2497ecd417599e54641e8859f3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
