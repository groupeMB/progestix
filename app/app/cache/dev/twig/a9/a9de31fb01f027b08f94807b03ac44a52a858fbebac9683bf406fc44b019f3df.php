<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_f6c27cdd657ede8852ebfae270444a395dfe31a1846d42836e5681410a0e375e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_fc52458b8e35183fba3e97d9e53d773de75fe08ed944a3646c5384adb4360c24 = $this->env->getExtension("native_profiler");
        $__internal_fc52458b8e35183fba3e97d9e53d773de75fe08ed944a3646c5384adb4360c24->enter($__internal_fc52458b8e35183fba3e97d9e53d773de75fe08ed944a3646c5384adb4360c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc52458b8e35183fba3e97d9e53d773de75fe08ed944a3646c5384adb4360c24->leave($__internal_fc52458b8e35183fba3e97d9e53d773de75fe08ed944a3646c5384adb4360c24_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_052c59f0895ae0d71aa2050524f865b058c4b46c58ade2b8a457a696d6d40a7d = $this->env->getExtension("native_profiler");
        $__internal_052c59f0895ae0d71aa2050524f865b058c4b46c58ade2b8a457a696d6d40a7d->enter($__internal_052c59f0895ae0d71aa2050524f865b058c4b46c58ade2b8a457a696d6d40a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_052c59f0895ae0d71aa2050524f865b058c4b46c58ade2b8a457a696d6d40a7d->leave($__internal_052c59f0895ae0d71aa2050524f865b058c4b46c58ade2b8a457a696d6d40a7d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
