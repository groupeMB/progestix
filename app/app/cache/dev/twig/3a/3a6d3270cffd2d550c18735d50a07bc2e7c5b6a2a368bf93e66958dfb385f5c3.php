<?php

/* @SonataUser/Profile/edit_profile_content.html.twig */
class __TwigTemplate_a6207fd424ce7dd44d46119a3cdbd555e3416d680bccf3290ed92bc1ef19e38e extends Twig_Template
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
        $__internal_159b2ccdacd18dbb4eecc159e1612c806e6cd54b8b46f7fea1ea23fe180e2548 = $this->env->getExtension("native_profiler");
        $__internal_159b2ccdacd18dbb4eecc159e1612c806e6cd54b8b46f7fea1ea23fe180e2548->enter($__internal_159b2ccdacd18dbb4eecc159e1612c806e6cd54b8b46f7fea1ea23fe180e2548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Profile/edit_profile_content.html.twig"));

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
        
        $__internal_159b2ccdacd18dbb4eecc159e1612c806e6cd54b8b46f7fea1ea23fe180e2548->leave($__internal_159b2ccdacd18dbb4eecc159e1612c806e6cd54b8b46f7fea1ea23fe180e2548_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Profile/edit_profile_content.html.twig";
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
