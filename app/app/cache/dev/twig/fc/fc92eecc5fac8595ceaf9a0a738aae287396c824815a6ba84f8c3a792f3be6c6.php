<?php

/* @SonataUser/Profile/edit_authentication_content.html.twig */
class __TwigTemplate_19dba2723986c870ba52ddf0f9a30ebec49a0bcd52e363c513a2d51e04d73dd7 extends Twig_Template
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
        $__internal_37c200eb5c9d8b5b9bfdb7dbe987b24e992b690ceb4f3280c10739066599eb61 = $this->env->getExtension("native_profiler");
        $__internal_37c200eb5c9d8b5b9bfdb7dbe987b24e992b690ceb4f3280c10739066599eb61->enter($__internal_37c200eb5c9d8b5b9bfdb7dbe987b24e992b690ceb4f3280c10739066599eb61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Profile/edit_authentication_content.html.twig"));

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
        
        $__internal_37c200eb5c9d8b5b9bfdb7dbe987b24e992b690ceb4f3280c10739066599eb61->leave($__internal_37c200eb5c9d8b5b9bfdb7dbe987b24e992b690ceb4f3280c10739066599eb61_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Profile/edit_authentication_content.html.twig";
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
