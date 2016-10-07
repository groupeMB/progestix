<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_f0fdf31f0490c6c223662d215594fbd879cfde68fd3608623975209f6a928e75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c09306fdaa4b6673f1e63b042f2d63e952e6e5f5e6c6ecf0d8c439ccd5c4ad4d = $this->env->getExtension("native_profiler");
        $__internal_c09306fdaa4b6673f1e63b042f2d63e952e6e5f5e6c6ecf0d8c439ccd5c4ad4d->enter($__internal_c09306fdaa4b6673f1e63b042f2d63e952e6e5f5e6c6ecf0d8c439ccd5c4ad4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_user_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_c09306fdaa4b6673f1e63b042f2d63e952e6e5f5e6c6ecf0d8c439ccd5c4ad4d->leave($__internal_c09306fdaa4b6673f1e63b042f2d63e952e6e5f5e6c6ecf0d8c439ccd5c4ad4d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}: {{ user.email }}</p>*/
/* </div>*/
/* */
