<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_4ddfde9043fab25b803dfc2e221a2027168a5bd737c1991b3fdd04a231116700 extends Twig_Template
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
        $__internal_74e9b61c0170bb93293d347c2b24cfd50e932c430e7dd4ec167052f5d7a8a9c0 = $this->env->getExtension("native_profiler");
        $__internal_74e9b61c0170bb93293d347c2b24cfd50e932c430e7dd4ec167052f5d7a8a9c0->enter($__internal_74e9b61c0170bb93293d347c2b24cfd50e932c430e7dd4ec167052f5d7a8a9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

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
        
        $__internal_74e9b61c0170bb93293d347c2b24cfd50e932c430e7dd4ec167052f5d7a8a9c0->leave($__internal_74e9b61c0170bb93293d347c2b24cfd50e932c430e7dd4ec167052f5d7a8a9c0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
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
