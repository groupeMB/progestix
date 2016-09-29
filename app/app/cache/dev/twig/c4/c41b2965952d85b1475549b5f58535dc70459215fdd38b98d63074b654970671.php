<?php

/* @SonataUser/Resetting/reset_content.html.twig */
class __TwigTemplate_85a797f559a999ceece7013454f36c604330293032412a41334815bf033317d2 extends Twig_Template
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
        $__internal_fe383707a7ba7100fe04f752406edf02952c0ad58015b6b1c043017c7bd210c3 = $this->env->getExtension("native_profiler");
        $__internal_fe383707a7ba7100fe04f752406edf02952c0ad58015b6b1c043017c7bd210c3->enter($__internal_fe383707a7ba7100fe04f752406edf02952c0ad58015b6b1c043017c7bd210c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Resetting/reset_content.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("sonata_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token"))))));
        echo "
";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

<div class=\"form-actions form-group\">
    <div class=\"col-sm-offset-3 col-sm-9\">
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary\" />
    </div>
</div>
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_fe383707a7ba7100fe04f752406edf02952c0ad58015b6b1c043017c7bd210c3->leave($__internal_fe383707a7ba7100fe04f752406edf02952c0ad58015b6b1c043017c7bd210c3_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Resetting/reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  33 => 6,  26 => 2,  22 => 1,);
    }
}
/* {{ form_start(form, {'action': path('sonata_user_resetting_reset', {'token': token } ) }) }}*/
/* {{ form_widget(form) }}*/
/* */
/* <div class="form-actions form-group">*/
/*     <div class="col-sm-offset-3 col-sm-9">*/
/*         <input type="submit" value="{{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }}" class="btn btn-primary" />*/
/*     </div>*/
/* </div>*/
/* {{ form_end(form) }}*/
/* */
