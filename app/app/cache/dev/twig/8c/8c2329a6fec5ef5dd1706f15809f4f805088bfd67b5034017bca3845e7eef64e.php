<?php

/* SonataUserBundle:Profile:edit_profile_content.html.twig */
class __TwigTemplate_0652f51318eb193447a07fe38da52aa7a5696babd451770a86d7b4b15fd38390 extends Twig_Template
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
        $__internal_4349f17b56cefd9c1053625f0fa26713a5a205d3f11b7032106aadc44f6eabab = $this->env->getExtension("native_profiler");
        $__internal_4349f17b56cefd9c1053625f0fa26713a5a205d3f11b7032106aadc44f6eabab->enter($__internal_4349f17b56cefd9c1053625f0fa26713a5a205d3f11b7032106aadc44f6eabab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Profile:edit_profile_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("sonata_user_profile_edit");
        echo "\" method=\"POST\" class=\"form-horizontal\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div class=\"form-actions\">
        <button type=\"submit\" name=\"submit\"  class=\"btn btn-primary pull-right\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sonata_user_submit", array(), "SonataUserBundle"), "html", null, true);
        echo "</button>
    </div>
</form>
";
        
        $__internal_4349f17b56cefd9c1053625f0fa26713a5a205d3f11b7032106aadc44f6eabab->leave($__internal_4349f17b56cefd9c1053625f0fa26713a5a205d3f11b7032106aadc44f6eabab_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:edit_profile_content.html.twig";
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
/* <form action="{{ path('sonata_user_profile_edit') }}" method="POST" class="form-horizontal">*/
/*     {{ form_widget(form) }}*/
/*     <div class="form-actions">*/
/*         <button type="submit" name="submit"  class="btn btn-primary pull-right">{{ 'sonata_user_submit'|trans({}, 'SonataUserBundle') }}</button>*/
/*     </div>*/
/* </form>*/
/* */
