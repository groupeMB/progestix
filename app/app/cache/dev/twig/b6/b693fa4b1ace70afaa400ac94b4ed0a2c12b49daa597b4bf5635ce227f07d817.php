<?php

/* SonataUserBundle:Profile:edit_authentication_content.html.twig */
class __TwigTemplate_5e39774f15d64dfff51c0b2e6ae907b5773ff4de6290c976822f699c4f9c98dd extends Twig_Template
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
        $__internal_5410839cb83d268197cc691df83ccc882bfdf527d1baf21bab7784f2603f3706 = $this->env->getExtension("native_profiler");
        $__internal_5410839cb83d268197cc691df83ccc882bfdf527d1baf21bab7784f2603f3706->enter($__internal_5410839cb83d268197cc691df83ccc882bfdf527d1baf21bab7784f2603f3706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Profile:edit_authentication_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("sonata_user_profile_edit_authentication");
        echo "\" method=\"POST\" class=\"form-horizontal\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <button type=\"submit\" name=\"submit\" class=\"btn btn-primary pull-right\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sonata_user_submit", array(), "SonataUserBundle"), "html", null, true);
        echo "</button>
</form>
";
        
        $__internal_5410839cb83d268197cc691df83ccc882bfdf527d1baf21bab7784f2603f3706->leave($__internal_5410839cb83d268197cc691df83ccc882bfdf527d1baf21bab7784f2603f3706_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:edit_authentication_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  27 => 2,  22 => 1,);
    }
}
/* <form action="{{ path('sonata_user_profile_edit_authentication') }}" method="POST" class="form-horizontal">*/
/*     {{ form_widget(form) }}*/
/* */
/*     <button type="submit" name="submit" class="btn btn-primary pull-right">{{ 'sonata_user_submit'|trans({}, 'SonataUserBundle') }}</button>*/
/* </form>*/
/* */
